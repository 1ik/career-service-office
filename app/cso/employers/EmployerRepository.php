<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 1/6/15
 * Time: 9:28 PM
 */

namespace cso\employers;
use cso\repositories\Repository;
use \Organisation;
use \Input;
use \Employer;

class EmployerRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct()
    {
        parent::__construct(new Employer);
    }

    public function find($id)
    {
        return \Employer::with('user')->whereUserId($id)->get()->first();
    }

    public function all()
    {
        return \Employer::with('user.throttle', 'organisation')->get();
    }

    public function update($id,$properties =null)
    {
        $employer = Employer::whereUserId($id);
        $properties = Input::only('organisation_id');
        $employer->update($properties);
        return true;
    }

}