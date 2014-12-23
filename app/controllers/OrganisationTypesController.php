<?php

class OrganisationTypesController extends \BaseController {


    public function __construct(\cso\organisations\OrganisationTypeRepository $orgTypes) {
        $this->orgTypes = $orgTypes;
    }

	/**
	 * Display a listing of the resource.
	 * GET /organisationtypes
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /organisationtypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /organisationtypes
	 *
	 * @return Response
	 */
	public function store()
	{
		if($this->orgTypes->store()) {
            return Redirect::route('organisations.index');
        } else {
            return Redirect::back()->withErrors($this->orgTypes->get_errors());
        }
	}

	/**
	 * Display the specified resource.
	 * GET /organisationtypes/{id}
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
	 * GET /organisationtypes/{id}/edit
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
	 * PUT /organisationtypes/{id}
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
	 * DELETE /organisationtypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}