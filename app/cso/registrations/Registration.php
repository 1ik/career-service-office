<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 2:23 PM
 */

namespace cso\registrations;


abstract class Registration {

    public function __construct(RegistrationRepository $registrationRepository) {
        $this->registrationRepository = $registrationRepository;
    }
}