<?php

namespace itrax\controllers;


use itrax\core\controller;



class transactionsController extends controller
{
    public function index()
    {
        return $this->raxa("transactions");
    }
}
