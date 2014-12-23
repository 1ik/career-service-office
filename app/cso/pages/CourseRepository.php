<?php
namespace cso\pages;


use cso\repositories\Repository;

use \Page;
use \Input;

class PageRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct() {
        parent::__construct(new Page);
    }
}