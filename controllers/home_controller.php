<?php 
    require_once "utils/security.php";
    
    class Home_Controller{
        public static function index(){
            $titulo = "HomePage";
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/home/home.php";
            require_once "views/templates/footer.php";
        }
    }
?>