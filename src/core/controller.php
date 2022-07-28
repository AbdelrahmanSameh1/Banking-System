<?php

namespace itrax\core;

class controller
{
    public function view($path, $data)
    {
        extract($data);
        require VIEWS . $path . ".php";
    }


    public function raxa($path)
    {
        require Assets . $path . ".php";
    }
}
