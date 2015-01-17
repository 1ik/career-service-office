<?php

class PsdpRegistrationsController extends \BaseController {


    public function __construct(\cso\registrations\PsdpRegistrationRepository $psdpRegis,
                                \cso\registrations\RegistrantRepository $registrants,
                                \cso\registrations\RegistrationRepository $registrations)
    {
        $this->psdpRegistrations = $psdpRegis;
        $this->registrants = $registrants;
        $this->registrations = $registrations;

        $this->beforeFilter('adminOnly', ['except' => 'enroll']);
        $this->beforeFilter('canApplyForRegistration', ['only' => 'enroll']);
    }

	public function index()
	{
        $psdps = $this->psdpRegistrations->all();
		return View::make('psdp_registrations.index', compact('psdps'));
	}

	public function create()
	{
		//
	}

	public function store()
	{
		if($this->psdpRegistrations->store()) {
            return Redirect::route("psdp_registrations.index");
        } else {
            return Redirect::back()->withErrors($this->psdpRegistrations->get_errors());
        }
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
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

    public function update($id)
    {
        //
    }

    public function addRegistrants()
    {
        return Input::all();
    }

    public function getRegistrants($psdpRegistrationId) {
        $psdp_registration =  $this->psdpRegistrations->find($psdpRegistrationId);
        return View::make('registrants.psdp_registrants.index', compact('psdp_registration'));
    }

    //enroll the logged in user to psdp registration.
    public function enroll() {
        $user = Sentry::getUser();

        //try to enroll this guy
        if($this->psdpRegistrations->enroll($user)) {
            return Response::json(['success']);
        } else {
            return Response::json(['fail']);
        }
    }

    public function exportRegistrants($psdp_id)
    {
        return $this->psdpRegistrations->exportRegistrants($psdp_id);
    }

    public function closeRegistration($psdp_id)
    {
        $psdpRegistration = $this->psdpRegistrations->find($psdp_id);
        $this->registrations->close($psdpRegistration->registration_id);
        return Redirect::back();
    }

    public function makeCompleted($psdp_id)
    {
        $this->psdpRegistrations->changeStatus($psdp_id, 'completed');
        return Redirect::back();
    }

}