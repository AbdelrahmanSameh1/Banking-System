<?php

namespace itrax\controllers;


use itrax\core\controller;



class messagesController extends controller
{
    public function index()
    {
        return $this->raxa("messages");
    }
}
