<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/23/14
 * Time: 4:17 PM
 */

namespace cso\pages;


use cso\repositories\Repository;

class SectionsRepository extends Repository{
    public static $messages = [];
    public static $rules = [];

    public function __construct(){
        parent::__construct(new \Section);
    }
} 