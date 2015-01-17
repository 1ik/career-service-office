<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 1/6/15
 * Time: 9:28 PM
 */

namespace cso\admin;
use cso\repositories\Repository;
use \Input;
use \Admin;
use \Sentry;

class AdminRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct()
    {
        parent::__construct(new Alumni);
    }

    public function store($prop = null)
    {
        $user = Sentry::createUser(Input::except("_token"));
        $user->activated = Input::get('activated') == "on";
        $user->save();
        $adminGroup = Sentry::findGroupByName('admin');
        $user->addGroup($adminGroup);
        return $user;
    }

}