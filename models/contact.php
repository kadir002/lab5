<?php 
    class Contact{
        private $name;
        private $email;
        private $comment;

        public function __construct($name, $email, $comment){
            $this->name = $name;
            $this->email = $email;
            $this->comment = $comment;
        }

        public function getDates(){
            return [
                "name" => $this->name, 
                "email" => $this->email, 
                "comment" => $this->comment
            ];
        }
    }
?>