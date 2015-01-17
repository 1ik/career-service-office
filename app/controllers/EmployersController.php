<?php

class EmployersController extends \BaseController {


    public function __construct(\cso\employers\EmployerRepository $empls, \cso\organisations\OrganisationRepository $orgs)
    {
        $this->employers = $empls;
        $this->organisations = $orgs;
    }

	/**
	 * Display a listing of the resource.
	 * GET /employers
	 *
	 * @return Response
	 */
	public function index()
	{
		$employers = $this->employers->all();
        return View::make("employers.index",compact('employers'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /employers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /employers
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /employers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $employer = $this->employers->find($id);
        return View::make('employers.show', compact('employer'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /employers/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employer = $this->employers->find($id);
        $organisations = $this->organisations->all();
        return View::make('employers.edit', compact('employer', 'organisations'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /employers/{id}
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
	 * DELETE /employers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}