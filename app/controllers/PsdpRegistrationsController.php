<?php

class PsdpRegistrationsController extends \BaseController {


    public function __construct(\cso\registrations\PsdpRegistrationRepository $psdpRegis, \cso\registrations\RegistrantRepository $registrants) {
        $this->psdpRegistrations = $psdpRegis;
        $this->registrants = $registrants;
        $this->beforeFilter('adminOnly');
    }


	/**
	 * Display a listing of the resource.
	 * GET /psdpregistrations
	 *
	 * @return Response
	 */
	public function index()
	{
        $psdps = $this->psdpRegistrations->all();
		return View::make('psdp_registrations.index', compact('psdps'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /psdpregistrations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /psdpregistrations
	 *
	 * @return Response
	 */
	public function store()
	{
		if($this->psdpRegistrations->store()) {
            return Redirect::route("psdp_registrations.index");
        } else {
            return Redirect::back()->withErrors($this->psdpRegistrations->get_errors());
        }
	}

	/**
	 * Display the specified resource.
	 * GET /psdpregistrations/{id}
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
	 * GET /psdpregistrations/{id}/edit
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
	 * PUT /psdpregistrations/{id}
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
	 * DELETE /psdpregistrations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


    public function addRegistrants()
    {
        return Input::all();
    }


    public function getRegistrants($psdpRegistrationId) {
        return $psdp_registration =  $this->psdpRegistrations->find($psdpRegistrationId);
        return View::make('registrants.psdp_registrants.index', compact('psdp_registration', 'registration'));
    }

}