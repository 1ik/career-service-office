<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 1/6/15
 * Time: 9:28 PM
 */

namespace cso\alumni;
use cso\repositories\Repository;
use \Input;
use \Alumni;

class AlumniRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct()
    {
        parent::__construct(new Alumni);
    }


    public function all()
    {
        return \Alumni::with('user.throttle')->get();
    }

    public function find($id)
    {
        return \Alumni::with('user.throttle')->whereUserId($id)->get()->first();
    }

    public function update($id, $properties=null)
    {
        //take only alumni specific fields. and get rid of users table specific fields.
        $properties = $properties == null ? \Input::except("_token","_method","first_name", "last_name", 'gender', 'email', 'password', 'phone_number', 'cell_phone', 'profile_picture') : $properties;

        if( ! isset($properties['employment_status'])) {
            $properties['employment_status'] = "off";
        }

        $alumni = Alumni::whereUserId($id);
        $alumni->update($properties);
        return true;
    }

}