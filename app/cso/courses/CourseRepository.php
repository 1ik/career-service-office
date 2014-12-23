<?php
namespace cso\courses;


use cso\repositories\Repository;

use \Course;
use \Input;

class CourseRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct() {
        parent::__construct(new Course);
    }
}