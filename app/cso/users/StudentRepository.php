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

    function __construct()
    {
        parent::__construct(new \Student);
    }

    public function all()
    {
        return \Student::with('user.throttle', 'department')->get();
    }

    public function find($id)
    {
        return \User::with('student' , 'student.department', 'student.majorCourse', 'student.minorCourse')->find($id);
    }

    public function update($userId, $properties = null)
    {
        //the input contains users table specific information too. so filter those.
        $properties = $properties == null ? \Input::except("_token","_method","first_name", "last_name", 'gender', 'email', 'password', 'phone_number', 'cell_phone', 'profile_picture', 'cv') : $properties;

        //update student table only with the student specific information.
        $student = \Student::whereUserId($userId);
        $student->update($properties);
        return true;
    }

}