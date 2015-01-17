<?php

class SavedJobsController extends \BaseController {

    public function __construct(\cso\registrations\JobRepository $jobs)
    {
        $this->jobs = $jobs;
    }

	public function index($userId)
	{

		$user = $this->jobs->getSavedJobs($userId);
        return View::make('jobs.saved', compact('user'));
	}

	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{

	}

    public function removeSavedJob($uId,$jobId)
    {
        if($this->jobs->removeSavedJob($uId,$jobId))
        {
            $message = Session::get('successes');

            if($message == null)
                $message = [];

            $message[] = 'The job has been removed successfully from saved list.';
            Session::put('successes', $message);
            return Redirect::route("users.saved_jobs.index",$uId);
        } else {
            App::abort(404);
        }
    }


    public function saveJob($uId, $jobId) {
        $this->jobs->saveJob($uId,$jobId);
        $message = Session::get('successes');

        if($message == null) {
            $message = [];
        }

        $message[] = 'job has been saved successfully.';
        Session::put('successes', $message);
        return Redirect::back();
    }

}