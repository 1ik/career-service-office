<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 10:05 PM
 */
namespace cso\registrations;

use cso\repositories\Repository;
use \Registrant;

class RegistrantRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct() {
        parent::__construct(new Registrant);
    }

    public function findRegistrant($registrationId, $userId)
    {
        return Registrant::whereUserId($userId)->whereRegistrationId($registrationId)->get()->first();
    }

}