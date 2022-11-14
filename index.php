<?php
    require_once "utils/security.php";
    require_once "controllers/home_controller.php";
    require_once "controllers/contact_controller.php";
    require_once "controllers/user_controller.php";

    if(count($_GET) == 0){
        call_user_func("Home_Controller::index");
    }else{
        $controller = Security::decode($_GET["c"]);
        $method = Security::decode($_GET["m"]);
        call_user_func($controller."_Controller::".$method);
    }
?> 
