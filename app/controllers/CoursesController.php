<?php

class CoursesController extends \BaseController {


    public function __construct(\cso\courses\CourseRepository $courses,
                                \cso\departments\DepartmentRepository $departments) {
        $this->courses = $courses;
        $this->departments = $departments;
        $this->beforeFilter('adminOnly');
    }
	/**
	 * Display a listing of the resource.
	 * GET /courses
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = $this->courses->all();
        $departments = $this->departments->all();
        return View::make('courses.index', compact('courses', 'departments'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /courses/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /courses
	 *
	 * @return Response
	 */
	public function store()
	{
        if($this->courses->store()) {
            return Redirect::route('courses.index');
        } else {
            return Redirect::back()->withInputs();
        }
	}

	/**
	 * Display the specified resource.
	 * GET /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /courses/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}