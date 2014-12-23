<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 2:20 AM
 */

namespace cso\registrations;


use cso\repositories\Repository;
use \Organisation;

class PsdpRegistrationRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct(RegistrationRepository $registration) {
        $this->registration = $registration;
        parent::__construct(new \PsdpRegistration());
    }


    public function all() {
        return \PsdpRegistration::with('registration')->get();
    }


    public function store($properties = null) {
        $registration = $this->registration->store();
        $properties = \Input::except('_token');
        $properties['registration_id'] = $registration->id;
        return parent::store($properties);
    }


    public function find($id) {
        return \PsdpRegistration::with('registration.registrants.user.student')->find($id);
    }
}