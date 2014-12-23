<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 2:20 AM
 */

namespace cso\students;


use cso\repositories\Repository;
use \Registration;

class StudentRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct() {
        parent::__construct(new \Student());
    }


    public function all() {
        return \Student::with('user', 'department')->get();
    }

    public function find($id) {
        return \User::with('student' , 'student.department', 'student.majorCourse', 'student.minorCourse')->find($id);
    }

}