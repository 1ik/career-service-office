<?php

class OrganisationsController extends \BaseController {

    public function __construct(\cso\organisations\OrganisationTypeRepository $orgTypes, \cso\organisations\OrganisationRepository $orgs) {
        $this->orgTypes = $orgTypes;
        $this->orgs = $orgs;
    }

	/**
	 * Display a listing of the resource.
	 * GET /organisations
	 *
	 * @return Response
	 */
	public function index()
	{
		$organisations = $this->orgs->all();
        $organisationTypes = $this->orgTypes->all();
        return View::make('organisations.index', compact('organisations','organisationTypes'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /organisations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /organisations
	 *
	 * @return Response
	 */
	public function store()
	{
		if($this->orgs->store()) {
            return Redirect::route('organisations.index');
        } else {
            return Redirect::back()->withErrors($this->orgs->get_errors());
        }
	}

	/**
	 * Display the specified resource.
	 * GET /organisations/{id}
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
	 * GET /organisations/{id}/edit
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
	 * PUT /organisations/{id}
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
	 * DELETE /organisations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}