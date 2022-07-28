<?php

namespace itrax\controllers;

use itrax\core\controller;
use itrax\core\validation;
use itrax\core\registry;
use itrax\models\instructorModel;

class indexController extends controller
{
    public function index()
    {
        return $this->raxa("index");
    }
}
