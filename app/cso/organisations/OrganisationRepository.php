<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 2:20 AM
 */

namespace cso\organisations;


use cso\repositories\Repository;
use \Organisation;

class OrganisationRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct() {
        parent::__construct(new Organisation);
    }

    public function all() {
        return Organisation::with('organisation_type')->get();
    }
}