<?php
    class User{
        private $user;
        private $password;
        private $salt;
        private $name;

        public function __Construct($user, $password, $salt, $name){
            $this->user = $user;
            $this->password = $password;
            $this->salt = $salt;
            $this->name = $name;
        }

        public function validate_user(){
            #password = method_hash(password_user . salt)
            #salt = md5(random_bytes(20))
            $table[] = [
                "user" => "anthony2001",
                "password" => "8c6fdbde59163a75484ce956cd540a874642ba83",
                "salt" => "bVdwP5I1O5fZ",
                "name" => "Anthony Ledezma"
            ];

            $table[] = [
                "user" => "uriel2001",
                "password" => "ae8a8cc7d4c411a681c5044372ddab23e7eb90e7",
                "salt" => "14oT7vLCv3mR",
                "name" => "Uriel Ledezma"
            ];

            $table[] = [
                "user" => "lasso2001",
                "password" => "547a85122a2a8461823d8613b671ab6aae0ced8f",
                "salt" => "uckaN1M80Ufw",
                "name" => "Lasso Ledezma"
            ];

            foreach($table as $t){
                $pass = sha1($this->password.$t["salt"]);

                if($this->user == $t["user"] && $pass == $t["password"]){
                    return $t;
                }
            }
            
            return [];
        }
    }
?>