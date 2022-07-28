<?php


// here we will start the project
// here we use absolute path


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
// define('MVC', 'Session 21 mvc (from full stack diploma)');
define('src', ROOT . DS . "src");
define('CONTROLLERS', src . DS . "controllers" . DS);
define('MODELS', src . DS . "models" . DS);
define('VIEWS', src . DS . "views" . DS);
define('CORE', src . DS . "core" . DS);
define('VENDOR', ROOT . DS . "vendor" . DS);
define('Assets', ROOT . DS . "public" . DS . "raxa" . DS);



// echo VIEWS;
// echo ROOT;
// echo DS;
// echo src;
// echo CORE;



// require CORE . "bootstrap.php";
require_once VENDOR . "autoload.php";     // this is the only require we will use in the project because we have used the composer autoloader





use itrax\core\Database\db;
use itrax\core\Database\dbpdo;
use itrax\core\registry;
use itrax\core\validation;

registry::set("dbpdo", new dbpdo);         // note the use of registry class
registry::set("db", new db);
registry::set("validation", new validation);

// echo assets("raxa/assets/css/bootstrap.min.css");
// die;

// echo DIRECTORY_SEPARATOR;
// die;

$app = new itrax\core\bootstrap;      // we write this because we have used (namespace)
