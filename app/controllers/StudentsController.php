<?php

class StudentsController extends \BaseController {

    public function __construct(\cso\students\StudentRepository $students,
                                \cso\departments\DepartmentRepository $depts,
                                \cso\courses\CourseRepository $courses) {
        $this->students = $students;
        $this->depts = $depts;
        $this->courses = $courses;
    }

	public function index()
	{
        $students = $this->students->all();
        return View::make('students.index', compact('students'));
	}

	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($id,$name)
	{
        $user = $this->students->find($id);
        return View::make('students.show', compact('user'));
	}

	public function edit($id)
	{
		$user = $this->students->find($id);
        $departments = $this->depts->all();
        $courses = $this->courses->all();
        return View::make('students.edit', compact('user', 'departments', 'courses'));
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}