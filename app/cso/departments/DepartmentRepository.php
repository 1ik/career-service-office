<?php
namespace cso\departments;


use cso\repositories\Repository;

use \Department;
use \Input;

class DepartmentRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct() {
        parent::__construct(new Department);
    }
}