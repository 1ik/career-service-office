<?php
namespace cso\organisations;


use cso\repositories\Repository;

use \OrganisationType;
use \Input;

class OrganisationTypeRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct() {
        parent::__construct(new OrganisationType);
    }
}