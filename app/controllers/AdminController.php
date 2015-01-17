<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 1/16/15
 * Time: 9:16 PM
 */

class AdminController extends \BaseController  {

    public function __controller(\cso\admin\AdminRepository $admins)
    {
        $this->admins = $admins;
    }

    public function showDashBoard()
    {
        return View::make('admin.dashboard');
    }


    public function index()
    {
        $group = Sentry::findGroupByName('admin');
        $admins = Sentry::findAllUsersInGroup($group);
        return View::make('admin.users.admins.index', compact('admins'));
    }

    public function create()
    {
        return View::make('admin.users.admins.create');
    }

    public function store()
    {
        $admin = $this->admins->store();

        if($admin) {
            return Redirect::to('admin/users/administrators');
        }

        return Redirect::back()->withErrors($this->admins->get_errors());
    }

}