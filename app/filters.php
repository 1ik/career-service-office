<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	$user = Sentry::getUser();
    if(! $user)
        App::abort(404);
});






Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() !== Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});






Route::filter('adminOnly', function($route,$request){
    $loggedInUser = Sentry::getUser();
    $adminGroup = Sentry::findGroupByName('admin');

    if( !$loggedInUser || ! $loggedInUser->inGroup($adminGroup) ) {
        App::abort(404);
    }
});



Route::filter('canViewProfile', function($route, $request){

    $loggedInUser = Sentry::getUser();

    if($loggedInUser == NULL) {
        App::abort(404);
    }

    try {
        $user = Sentry::findUserById($route->getParameter('id'));
    } catch(\Cartalyst\Sentry\Users\UserNotFoundException $e) {
        App::abort(404);
    }


    if(! ($loggedInUser->id == $route->getParameter('id') || \cso\utils\UserUtil::isAdmin()) ) {
        App::abort(404);
    }

});



Route::filter('canViewJob', function($route, $request) {

    $job = Job::find($route->getParameter('jobs'));

    if($job == null) {
        App::abort(404);
    }

    if(\cso\utils\UserUtil::isAdmin()) {
        return;
    }

    if($job->approver_id == -1)
    {
        App::abort(404);
    }

    if(\cso\utils\UserUtil::isEmployer())
    {
        $u = Sentry::getUser();

        if( $job->poster_id != $u->id )
        {
            App::abort(404);
        }
        else{
            return;
        }
    }

    if(\cso\utils\UserUtil::isStudent() || \cso\utils\UserUtil::isAlumni())
    {

    }
    else{
        App::abort(404);
    }

});




Route::filter('canEditJob', function($route, $request) {

    $job = Job::find($route->getParameter('jobs'));

    if($job == null) {
        App::abort(404);
    }

    if(\cso\utils\UserUtil::isAdmin()) {
        return;
    }

    if($job->approver_id == -1)
    {
        App::abort(404);
    }

    if(\cso\utils\UserUtil::isEmployer())
    {
        $u = Sentry::getUser();

        if( $job->poster_id != $u->id )
        {
            App::abort(404);
        }
        else{
            return;
        }
    }
    App::abort(404);

});

































Route::filter('canApplyForRegistration', function($route, $request){

    $admin = \cso\utils\UserUtil::isAdmin();
    $student = \cso\utils\UserUtil::isStudent();

    if(!$admin && !$student)
    {
        App::abort(404);
    }
});




Route::filter('correctNameInTheURL', function($route, $request) {





    try {
        $user = Sentry::findUserById($route->getParameter('id'));
    } catch(\Cartalyst\Sentry\Users\UserNotFoundException $e) {
        App::abort(404);
    }

    $name = $user->first_name . " " . $user->last_name;
    $name = implode(explode(" ", $name), "-");

    if($name != $route->getParameter('name')){
        return Redirect::route($route->getName(), ['id' => $user->id, 'name' => $name]);
    }

});

