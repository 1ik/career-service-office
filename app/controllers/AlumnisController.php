<?php

class AlumnisController extends \BaseController {


    public function __construct(\cso\alumni\AlumniRepository  $alumni)
    {
        $this->alumnis = $alumni;
    }

	/**
	 * Display a listing of the resource.
	 * GET /alumnis
	 *
	 * @return Response
	 */
	public function index()
	{
		$alumnis = $this->alumnis->all();
        return View::make('alumnis.index', compact('alumnis'));
	}


	/**
	 * Show the form for creating a new resource.
	 * GET /alumnis/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /alumnis
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /alumnis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $alumni = $this->alumnis->find($id);
        return View::make('alumnies.show', compact('alumni'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /alumnis/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $alumni = $this->alumnis->find($id);
        return View::make('alumnies.edit', compact('alumni'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /alumnis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return Input::all();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /alumnis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}