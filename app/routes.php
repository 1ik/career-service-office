<?php

/*--------------------------------------------------------------------------
| Routes for Related to auth
--------------------------------------------------------------------------*/
Route::get('/sign-in', ['uses' => 'AuthController@getLogin']);
Route::post('/sign-in',['before' =>'csrf', 'uses' => 'AuthController@postLogin']);
Route::get('/sign-out', ['as' => 'users.logout', 'uses' => 'AuthController@logOut']);
Route::post('password-reset', ['before' =>'csrf', 'uses' => 'AuthController@changePassword']);

Route::get('activate-user/{user_id}/{code}', 'AuthController@activate_user');
Route::get('confirm-email/{user_id}/{code}', 'AuthController@confirmEmail');
Route::get('not-my-email/{user_id}/{code}', 'AuthController@activate_user');
Route::get('reject-registration/{user_id}/{code}', 'AuthController@rejectRegistration');
Route::post('/student-register', 'AuthController@postStudentRegistration');
Route::post('/employer-register', 'AuthController@postEmployerRegistration');
Route::post('/alumni-register', 'AuthController@postAlumniRegistration');

/*--------------------------------------------------------------------------
| Routes for administering Page's sections
--------------------------------------------------------------------------*/
Route::group(array('prefix' => 'pages','before' => 'adminOnly'), function() {
    Route::get('{id}/sections', ['uses' => 'SectionsController@index']);
    Route::get('/edit/{id}', ['uses' => 'PagesController@edit']);
    Route::post('/update/{id}', ['uses' => 'PagesController@update']);
});

/*--------------------------------------------------------------------------
| User administration for admin's only
--------------------------------------------------------------------------*/
Route::group(['prefix' => 'admin/', 'before' => 'adminOnly'], function(){

    Route::get('dashboard', [ 'as' => 'admin.dashboard', 'uses' => 'AdminController@showDashBoard']);

    Route::group(['prefix' => 'users'], function(){

        Route::get('/administrators', ['uses' => 'AdminController@index']);
        Route::get('/administrators/create', ['uses' => 'AdminController@create']);
        Route::post('/administrators/store', ['uses' => 'AdminController@store']);

        Route::get('/students/', ['as' => 'students.index', 'uses' => 'StudentsController@index']);
        Route::get('/employers/', ['as' => 'employers.index', 'uses' => 'EmployersController@index']);
        Route::get('/alumni/', ['as' => 'alumni.index', 'uses' => 'AlumnisController@index']);

        Route::get('/{uId}/block', 'UsersController@blockUser');
        Route::get('/{uId}/unblock', 'UsersController@unBlockUser');
    });
});


/*--------------------------------------------------------------------------
| All the User's profile related routes.
--------------------------------------------------------------------------*/
Route::get('/users/home', ['as' => 'users.home', 'before' => 'auth', 'uses' => 'AuthController@userHome']);
Route::get('users/{uId}/profile', ['as' => 'users.profile', 'uses' => 'UsersController@userProfile']);
Route::get('users/{uId}/profile/edit', ['as' => 'users.profile.edit', 'uses' => 'UsersController@edit']);
Route::put('users/{uId}/profile/update', ['as' => 'users.profile.update', 'uses' => 'UsersController@update']);
Route::get('users/{uId}/application-and-registrations', ['as' => 'users.applications', 'uses' => 'UsersController@applications']);


/*--------------------------------------------------------------------------
| Student's Profile related routes.
--------------------------------------------------------------------------*/
Route::get('/profile/students/{id}/{name?}',[ 'as' => 'student.profile' ,'before' => ['canViewProfile', 'correctNameInTheURL'], 'uses' => 'StudentsController@show']);
Route::get('/profile/students/{id}/{name?}/edit',[ 'as' => 'student.profile.edit' ,'before' => ['canViewProfile', 'correctNameInTheURL'], 'uses' => 'StudentsController@edit']);


/*--------------------------------------------------------------------------
| Alumni's Profile related routes.
--------------------------------------------------------------------------*/
Route::get('/profile/alumni/{id}/{name?}',[ 'as' => 'alumni.profile' ,'before' => ['canViewProfile', 'correctNameInTheURL'], 'uses' => 'AlumnisController@show']);
Route::get('/profile/alumni/{id}/{name?}/edit',[ 'as' => 'alumni.profile.edit' ,'before' => ['canViewProfile', 'correctNameInTheURL'], 'uses' => 'AlumnisController@edit']);


/*--------------------------------------------------------------------------
| Employer's Profile related routes.
--------------------------------------------------------------------------*/
Route::get('/profile/employers/{id}/{name?}',[ 'as' => 'employer.profile' ,'before' => ['canViewProfile', 'correctNameInTheURL'], 'uses' => 'EmployersController@show']);
Route::get('/profile/employers/{id}/{name?}/edit',[ 'as' => 'employer.profile.edit' ,'before' => ['canViewProfile', 'correctNameInTheURL'], 'uses' => 'EmployersController@edit']);


/*--------------------------------------------------------------------------
| news_updates related routes.
--------------------------------------------------------------------------*/
Route::resource('news_updates', 'NewsUpdatesController');
Route::get('news-and-events/{slug}' , [ 'as' => 'news_update.show', 'uses' => 'NewsUpdatesController@show']);


/*--------------------------------------------------------------------------
| jobs related routes.
--------------------------------------------------------------------------*/
Route::resource('jobs', 'JobsController');
Route::get('jobs/{jobId}/approve', ['before' => 'adminOnly', 'as' => 'jobs.approve', 'uses' => 'JobsController@approveJob']);
Route::get('jobs/{jobs}/export', ['as' => 'jobs.export', 'uses' => 'JobsController@exportRegistrants']);
Route::get('jobs/{job_id}/apply', ['as' => 'jobs.apply', 'uses' => 'JobsController@applyToJob']);
Route::get('jobs/{job_id}/close_registration', ['as' => 'jobs.close_registration', 'uses' => 'JobsController@closeRegistration']);
Route::get('jobs/{job_id}/open_registration', ['as' => 'jobs.open_registration', 'uses' => 'JobsController@openRegistration']);

Route::resource('users.saved_jobs', 'SavedJobsController');
Route::get('users/{uId}/saved_jobs/{jobId}/remove', ['as' => 'users.saved_jobs.remove', 'uses' => 'SavedJobsController@removeSavedJob']);
Route::get('users/{uId}/saved_jobs/{jobId}/save', ['as' => 'users.saved_jobs.save', 'uses' => 'SavedJobsController@saveJob']);


/*--------------------------------------------------------------------------
| PSDP Registration routes.
--------------------------------------------------------------------------*/
Route::resource('psdp_registrations', 'PsdpRegistrationsController');
Route::get('psdp_registrations/{psdpRegistrationId}/registrants', ['as' => 'psdp_registrations.registrants', 'uses' => 'PsdpRegistrationsController@getRegistrants']);
Route::get('psdp_registrations/{psdpRegistrationId}/enroll', ['as' => 'psdp_registrations.enroll', 'uses' => 'PsdpRegistrationsController@enroll']);
Route::get('psdp_registrations/{psdpRegistrationId}/export', ['as' => 'psdp.export', 'uses' => 'PsdpRegistrationsController@exportRegistrants']);
Route::get('psdp_registrations/{psdpRegistrationId}/close', ['as' => 'psdp_registration.close', 'uses' => 'PsdpRegistrationsController@closeRegistration']);
Route::get('psdp_registrations/{psdpRegistrationId}/complete', ['as' => 'psdp_registration.complete', 'uses' => 'PsdpRegistrationsController@makeCompleted']);


/*--------------------------------------------------------------------------
| Routes for departments.
--------------------------------------------------------------------------*/
Route::resource('departments', 'DepartmentsController');


/*--------------------------------------------------------------------------
| Routes for courses.
--------------------------------------------------------------------------*/
Route::resource('courses', 'CoursesController');


/*--------------------------------------------------------------------------
| Routes for organisations.
--------------------------------------------------------------------------*/
Route::resource('organisations', 'OrganisationsController');


/*--------------------------------------------------------------------------
| Routes for organisation types.
--------------------------------------------------------------------------*/
Route::resource('organisation_types', 'OrganisationTypesController');


/*--------------------------------------------------------------------------
| Other routes.
--------------------------------------------------------------------------*/
App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});


/*--------------------------------------------------------------------------
| Routes for landing pages.
--------------------------------------------------------------------------*/
Route::get('/{slug?}', ['uses' => 'PagesController@show']);


/*--------------------------------------------------------------------------
| Routes for Page's sections
--------------------------------------------------------------------------*/
Route::resource('sections', 'SectionsController'); //handles the sections.update route.
Route::get('contents/{slug}', ['uses' => 'SectionsController@show']);
