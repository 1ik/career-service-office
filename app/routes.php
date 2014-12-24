<?php

Route::group(['prefix' => 'admin/', 'before' => 'adminOnly'], function(){

    Route::get('dashboard',[ 'as' => 'admin.dashboard', function(){
        return View::make('admin.dashboard');
    }]);

    Route::group(['prefix' => 'users'], function(){

        Route::get('/administrators', function(){
            $group = Sentry::findGroupByName('admin');
            $admins = Sentry::findAllUsersInGroup($group);
            return View::make('admin.users.admins.index', compact('admins'));
        });

        Route::get('/students', function(){
            return 'stds';
        });
        Route::get('/employers', function(){
            return 'empls';
        });
        Route::get('/alumni', function(){
            return 'almns';
        });
    });

});


/*
Route::get('users/{admins}',function() {
    $group = Sentry::findGroupByName('admin');
    $users = Sentry::findAllUsersInGroup($group);
    return $users;
});
*/

Route::resource('departments', 'DepartmentsController');
Route::resource('courses', 'CoursesController');
Route::resource('organisations', 'OrganisationsController');
Route::resource('organisation_types', 'OrganisationTypesController');
Route::resource('psdp_registrations', 'PsdpRegistrationsController');
Route::resource('sections', 'SectionsController');
Route::get('psdp_registrations/{psdpRegistrationId}/registrants', 'PsdpRegistrationsController@getRegistrants');



Route::get('contents/{slug}', function($slug) {
    $section = Section::whereSlug($slug)->get()->first();
    $relateds = Section::wherePageId($section->page_id)->whereNotIn('id',[$section->id])->get();

    $depts = App::make('\cso\departments\DepartmentRepository');
    $courses = App::make('\cso\courses\CourseRepository');
    $departments = $depts->all();
    $courses = $courses->all();
    return View::make('contents.single', compact('departments', 'courses', 'section', 'relateds'));
});






Route::group(array('prefix' => 'pages','before' => 'adminOnly'), function() {

    Route::get('{id}/sections', function($id) {
        $page = Page::with('sections')->find($id);
        if($page == NULL)
            App::abort(404);
        return View::make('sections.edit', compact('page'));
    });


    Route::get('/edit/{id}', function($id) {
        $page = Page::find($id);
        if($page == NULL)
            App::abort(404);
        return View::make('pages.edit',compact('page'));
    });

    Route::post('/update/{id}', function($id) {
        $page = Page::find($id);
        if($page == NULL)
            App::abort(404);
        $page->update(Input::all());
        $page->save();
        return Redirect::to('/pages/edit/'. $page->id );
    });

    Route::get('/{slug}/sections/{section_slug}',function($slug,$section_slug){
        return Section::all();
    });
});



Route::get('/sign-in', function(){
    return View::make('site.signin');
});
Route::post('/sign-in',['before' =>'csrf', 'uses' => 'AuthController@postLogin']);







Route::get('{slug}', function($slug){
    $depts = App::make('\cso\departments\DepartmentRepository');
    $courses = App::make('\cso\courses\CourseRepository');
    $departments = $depts->all();
    $courses = $courses->all();
    $page = Page::with('sections')->whereSlug($slug)->get()->first();
    if(!$page) {
        App::abort(404);
    }

    $view = '';
    switch($page->id) {
        case 2:
            $view  = 'internships.landing';
            break;
        case 3:
            $view = 'psdp_registrations.landing';
            break;
        case 4:
            $view = 'jobs.landing';
            break;
        case 5:
            $view = 'students.landing';
            break;
        case 6:
            $view = 'alumnies.landing';
            break;
        case 7:
            $view = 'organisations.landing';
            break;

    }
    return View::make($view, compact('departments', 'courses','page'));
});






Route::group(['prefix' => 'contents'], function(){
    Route::get('alumni/{uri}',function($uri){
        $depts = App::make('\cso\departments\DepartmentRepository');
        $courses = App::make('\cso\courses\CourseRepository');
        $departments = $depts->all();
        $courses = $courses->all();

        return View::make('contents.alumni.' . $uri, compact('departments', 'courses'));
    });
});









App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});


Route::get('/profile/students/{id}/{name?}',[ 'as' => 'student.profile' ,'before' => ['canViewProfile', 'correctNameInTheURL'], 'uses' => 'StudentsController@show']);



Route::get('/', function(){
    $depts = App::make('\cso\departments\DepartmentRepository');
    $courses = App::make('\cso\courses\CourseRepository');
    $departments = $depts->all();
    $courses = $courses->all();
	return View::make('site.index-new', compact('departments', 'courses'));
});



Route::get('activate-user/{user_id}/{code}', 'AuthController@activate_user');
Route::get('confirm-email/{user_id}/{code}', 'AuthController@confirmEmail');
Route::get('not-my-email/{user_id}/{code}', 'AuthController@activate_user');
Route::get('reject-registration/{user_id}/{code}', 'AuthController@rejectRegistration');

Route::post('/student-register', 'AuthController@postStudentRegistration');

