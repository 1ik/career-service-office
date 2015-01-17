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
use \Input;

class OrganisationRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct()
    {
        parent::__construct(new Organisation);
    }

    public function all()
    {
        return Organisation::with('organisation_type')->get();
    }


    public function store($properties = null)
    {
        //update the fields.
        $org = parent::store(Input::except('_token', 'image','cool'));

        //now handle attached files.
        $file_name = "org_" . $org->initial . '.' . Input::file('image')->getClientOriginalExtension();
        Input::file('image')->move( base_path() . '/public/files/orgs', $file_name);
        $org->image = $file_name;

        //checkbox cool
        $org->cool = Input::get('cool') == 'on';

        $org->update();
    }

    public function getTheCoolestOrganisations()
    {
        return Organisation::whereCool(1)->take(10)->orderBy('id', 'DESC')->get();
    }

}