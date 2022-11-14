<?php 
    session_start();

    class Security{
        public static function encode($string){
            return base64_encode(base64_encode($string));
        }

        public static function decode($string){
            return base64_decode(base64_decode($string));
        }

        public static function getToken(){
            if(isset($_SESSION["token"])){
                return $_SESSION["token"];
            }

            $token = sha1(random_bytes(100));
            $_SESSION["token"] = $token;
            return $token;
        }

        public static function validate_session($token){
            if(!isset($_SESSION["token"]) ||  !hash_equals($token, $_SESSION["token"])){
                return false;
            }

            return true;
        }
        
    }
?>