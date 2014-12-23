<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::resource('departments', 'DepartmentsController');
Route::resource('courses', 'CoursesController');
Route::resource('organisations', 'OrganisationsController');
Route::resource('organisation_types', 'OrganisationTypesController');
Route::resource('psdp_registrations', 'PsdpRegistrationsController');
Route::resource('sections', 'SectionsController');
Route::get('psdp_registrations/{psdpRegistrationId}/registrants', 'PsdpRegistrationsController@getRegistrants');




Route::group(array('prefix' => 'pages'), function() {

    Route::get('/{slug}', function($slug) {
        $page = Page::whereSlug($slug)->get()->first();
        if($page == NULL)
            App::abort(404);
        return $page;
    });


    Route::get('{id}/sections', function($id) {
        $page = Page::with('sections')->find($id);
        return View::make('sections.edit', compact('page'));
    });




    Route::get('/edit/{id}', function($id) {
        $page = Page::find($id);
        return View::make('pages.edit',compact('page'));
    });

    Route::post('/update/{id}', function($id) {
        $page = Page::find($id);
        $page->update(Input::all());
        $page->save();
        return Redirect::to('/pages/edit/'. $page->id );
    });


    Route::get('/{slug}/sections/{section_slug}',function($slug,$section_slug){
        return Section::all();
    });
});





Route::group(array('prefix' => 'users'), function() {
   Route::get('students', 'StudentsController@index');
});


Route::get('/admin', function()
{
    return View::make('admin.index');
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



Route::get('contents/single', function(){
    $depts = App::make('\cso\departments\DepartmentRepository');
    $courses = App::make('\cso\courses\CourseRepository');
    $departments = $depts->all();
    $courses = $courses->all();
    return View::make('contents.single', compact('departments', 'courses'));
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







Event::listen('event.test', function($arr)
{
    echo "well i should better check what the values are if the values are key then ";
    var_dump($arr);
});








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

