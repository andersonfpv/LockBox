<?php

require '../Core/functions.php';

spl_autoload_register(function($class){

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
 

    require base_path("{$class}.php");
});

session_start();


// $config = require '../config.php';

require base_path('/config/routes.php');
