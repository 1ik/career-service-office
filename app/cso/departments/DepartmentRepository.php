<?php
namespace cso\departments;


use cso\repositories\Repository;

use \Department;
use \Input;
use \Cache;

class DepartmentRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct()
    {
        parent::__construct(new Department);
    }

    public function all()
    {
        if( ! Cache::has('departments')) {
            Cache::forever('departments', Department::all());
        }

        return Cache::get('departments');
    }

    public function store($prop = null)
    {
        Cache::forget('departments');
        return parent::store($prop);
    }
}