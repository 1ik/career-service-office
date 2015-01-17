<?php




class JobsController extends \BaseController {

    public function __construct(\cso\registrations\JobRepository $jobs, \cso\organisations\OrganisationRepository $orgs)
    {
        $this->jobs = $jobs;
        $this->orgs = $orgs;
        $this->beforeFilter('auth');
        $this->beforeFilter('adminOnly', array('only' => array('approveJob')));
        $this->beforeFilter('canViewJob', array('only' => array('show')));
        $this->beforeFilter('canEditJob',
                                array('only' =>
                                            array('edit',
                                                'exportRegistrants',
                                                'closeRegistration',
                                                'openRegistration',
                                                'exportRegistrants'
                                            )
                                )
        );

        //only an administrator and an employer can create a job.
        $this->beforeFilter(function(){
            if( ! \cso\utils\UserUtil::isAdmin() && ! \cso\utils\UserUtil::isEmployer()) {
                App::abort(404);
            }
        }, array('only' => 'create', 'store'));
    }


	public function index()
	{
        if(\cso\utils\UserUtil::isAdmin()) {
            $jobs = $this->jobs->all();
        } else if( \cso\utils\UserUtil::isEmployer()) {
            $jobs = $this->jobs->getPosterJobs(Sentry::getUser()->id); //employer can only see the jobs he/she has posted.
        } else {
            $jobs = $this->jobs->getOpenJobs(); //student can see only the open jobs.
        }

        return View::make('jobs.index', compact('jobs'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /jobs/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $organisations = $this->orgs->all();
        return View::make('jobs.create', compact('organisations'));
	}

    public function store()
	{
        $job = $this->jobs->store();

        if($job) {
            $job = $this->jobs->find($job->id);
            Event::fire('jobs.posted', [$job, Sentry::getUser()]);
            return Redirect::route("jobs.index");
        } else {
            return Redirect::back()->withErrors($this->jobs->get_errors());
        }
	}

	public function show($id)
	{
        $job = $this->jobs->find($id);
        return View::make('jobs.show', compact('job'));
	}

	public function edit($id)
	{
        $organisations = $this->orgs->all();
		$job = $this->jobs->find($id);
        return View::make('jobs.edit', compact('job','organisations'));
	}

	public function update($id)
	{
        $this->jobs->update($id);
        $message = Session::get('successes');

        if($message == null) {
            $message = [];
        }

        $message[] = 'The job has been updated successfully.';
        Session::put('successes', $message);
        return Redirect::back();
	}

	public function destroy($id)
	{
		//
	}

    public function applyToJob($job_id)
    {
        $this->jobs->applyToJob($job_id, Sentry::getUser()->id);
        $message = Session::get('successes');

        if($message == null) {
            $message = [];
        }

        $message[] = 'You have successfully applied to this job';
        Session::put('successes', $message);
        return Redirect::back();
    }

    public function approveJob($jobId) {
        $this->jobs->approveJob($jobId);
        $message = Session::get('successes');

        if($message == null) {
            $message = [];
        }

        $message[] = 'Job approved';
        Session::put('successes', $message);
        return Redirect::back();
    }

    public function closeRegistration($jobId)
    {
        $this->jobs->closeRegistration($jobId);
        $message = Session::get('successes');

        if($message == null) {
            $message = [];
        }

        $message[] = 'Registration for this job has been closed';
        Session::put('successes', $message);


        return Redirect::back();
    }

    public function openRegistration($jobId)
    {
        $this->jobs->openRegistration($jobId);
        $message = Session::get('successes');

        if($message == null) {
            $message = [];
        }

        $message[] = 'Registration for this job has been opened.';
        Session::put('successes', $message);
        return Redirect::back();
    }

    public function exportRegistrants($jobId)
    {
        return $this->jobs->exportRegistrants($jobId);
    }

}