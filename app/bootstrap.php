<?php


    require_once "config/config.php";
    // require_once "libs/core.php";
    // require_once "libs/Controller.php";
    // require_once "libs/model.php";



    //spl_autoload_register autloads the core libs above
    spl_autoload_register(function($className) {

        require_once 'libs/' . $className . '.php';

    });


 