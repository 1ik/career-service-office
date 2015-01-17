<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 2:20 AM
 */

namespace cso\registrations;


use cso\repositories\Repository;
use \Registration;

class RegistrationRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct() {
        parent::__construct(new Registration);
    }


    public function close($registrationId)
    {
        $registration = Registration::find($registrationId);
        $registration->open = 0;
        $registration->update();
        return true;
    }

    public function open($registrationId)
    {
        $registration = Registration::find($registrationId);
        $registration->open = 1;
        $registration->update();
        return true;
    }

}