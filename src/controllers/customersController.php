<?php

namespace itrax\controllers;


use itrax\core\controller;



class customersController extends controller
{
    public function index()
    {
        return $this->raxa("customers");
    }
}
