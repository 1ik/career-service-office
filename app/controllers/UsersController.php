<?php

class UsersController extends \BaseController {

    public function __construct(\cso\registrations\JobRepository $jobs,
                                \cso\anik\UserRepository $users,
                                \cso\students\StudentRepository $students,
                                \cso\alumni\AlumniRepository $alumnies,
                                \cso\employers\EmployerRepository $employers)
    {
        $this->jobs = $jobs;
        $this->users = $users;
        $this->students = $students;
        $this->alumni = $alumnies;
        $this->employers = $employers;

        //a use can see only his/er registrations and job applications.
        //admin can see anyone's registrations and job applications.
        $this->beforeFilter(function($route){

            if(\cso\utils\UserUtil::isAdmin() || ($route->getParameter('uId') == Sentry::getUser()->id) )
                return ;

            App::abort(404);

        }, array('only' => 'applications'));

        //only admin can block/unblock a user.
        $this->beforeFilter('adminOnly', array('only' => array('unBlockUser', 'blockUser')));
    }

	public function index()
	{
		//
	}



    public function showStudents() {

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
		if(\cso\utils\UserUtil::isAlumni($id)) {
            //[known bug]
            // pass a dummy word to route it will autofix it. but if nothing
            // is passed it doesn't fix the user's name in the route.
            return Redirect::route('alumni.profile.edit', [$id,'s']);
        } else if( \cso\utils\UserUtil::isEmployer($id)) {
            return Redirect::route('employer.profile.edit', [$id,'s']);
        } else if ( \cso\utils\UserUtil::isStudent($id)) {
            return Redirect::route('student.profile.edit', [$id,'s']);
        }

        App::abort(404);
	}

	public function update($id)
	{
		if($this->users->update($id)) { //first update the general user profile.
            //now update their own profile.

            if(\cso\utils\UserUtil::isStudent($id)) {

                if($this->students->update($id)) {
                    Session::put('successes', ['Profile has been updated successfully']);
                    return Redirect::route('users.profile', $id);
                } else {
                    Session::put('errors', $this->users->get_errors());
                    return Redirect::route('users.profile.edit', $id);
                }

            }


            if(\cso\utils\UserUtil::isAlumni($id)) {

                if($this->alumni->update($id)) {
                    Session::put('successes', ['Profile has been updated successfully']);
                    return Redirect::route('users.profile', $id);
                } else {
                    Session::put('errors', $this->alumni->get_errors());
                    return Redirect::route('users.profile.edit', $id);
                }

            }

            if(\cso\utils\UserUtil::isEmployer($id)) {

                if($this->employers->update($id)) {
                    Session::put('successes', ['Profile has been updated successfully']);
                    return Redirect::route('users.profile', $id);
                } else {
                    Session::put('errors', $this->alumni->get_errors());
                    return Redirect::route('users.profile.edit', $id);
                }

            }

            return Redirect::route('users.profile', $id);
        }

        Session::put('errors', $this->users->get_errors());
        return Redirect::route('users.profile.edit', $id);
	}

	public function destroy($id)
	{
		//
	}

    public function savedJobs($userId)
    {
        return $this->jobs->getSavedJobs($userId);
    }

    public function userProfile($userId)
    {

        if(\cso\utils\UserUtil::isAdmin($userId)) {
            return Redirect::route('admin.dashboard');
        } elseif (\cso\utils\UserUtil::isStudent($userId)) {
            return Redirect::route('student.profile', $userId);
        } elseif (\cso\utils\UserUtil::isAlumni($userId)) {
            return Redirect::route('alumni.profile', $userId);
        } elseif (\cso\utils\UserUtil::isEmployer($userId)) {
            return Redirect::route('employer.profile', $userId);
        }

        App::abort(404);
    }

    public function blockUser($uId){

        try {
            $throttle = Sentry::findThrottlerByUserId($uId);
            $throttle->ban();
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return ['status' => 'fail', 'message' => 'User was not found'];
        }

        return ['status' => 'success'];
    }

    public function unBlockUser($uId){

        try {
            $throttle = Sentry::findThrottlerByUserId($uId);
            $throttle->unBan();
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return ['status' => 'fail', 'message' => 'User was not found'];
        }

        return ['status' => 'success'];
    }


    //shows a user's psdp registration application and job application list.
    public function applications($uId)
    {
        $applications = Registrant::with('registration.job','registration.psdp_registration')->whereUserId($uId)->get();
        return View::make('registrants.index', compact('applications'));
    }

}