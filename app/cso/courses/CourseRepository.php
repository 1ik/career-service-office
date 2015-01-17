<?php
namespace cso\courses;


use cso\repositories\Repository;

use \Course;
use \Input;

use \Cache;


class CourseRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct()
    {
        parent::__construct(new Course);
    }

    public function all()
    {

        if(! Cache::has('courses')) {
            Cache::forever('courses' , Course::all());
        }

        return Cache::get('courses');
    }

    public function store($prop = null)
    {
        Cache::forget('courses');
        return parent::store($prop);
    }
}