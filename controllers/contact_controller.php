<?php 
    require_once "models/contact.php";

    class Contact_Controller{
        public static function create(){
            $titulo = "Creación de comentario de contacto";
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/contact/create.php";
            require_once "views/templates/footer.php";
        }

        public static function show(){
            if($_POST){
                if(!isset($_POST["token"]) || !Security::validate_session($_POST["token"])){
                    echo "Acceso restringido";
                    exit();
                }

                empty($_POST['input_contacto_name']) ? $error[0] = "El nombre de contacto es necesario" : $name = $_POST['input_contacto_name'];
                empty($_POST["input_contacto_email"]) ? $error[1] = "El correo de contacto es necesario" : $email = $_POST['input_contacto_email'];
                empty($_POST["input_contacto_comment"]) ? $error[2] = "El comentario de contacto es necesario" : $comment = $_POST['input_contacto_comment'];

                if(isset($error)){
                    echo "<script>alert('Error en el formulario')</script>";
                    $titulo = "Creación de comentario de contacto";
                    require_once "views/templates/header.php";
                    require_once "views/templates/navbar.php";
                    require_once "views/contact/create.php";
                    require_once "views/templates/footer.php";
                }else{
                    $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
                    $email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
                    $comment = filter_var($comment, FILTER_SANITIZE_SPECIAL_CHARS);
                    $contact = new Contact($name, $email, $comment);
                    $result = $contact->getDates();

                    $titulo = "Mostrar datos de contacto";
                    require_once "views/templates/header.php";
                    require_once "views/templates/navbar.php";
                    require_once "views/contact/show.php";
                    require_once "views/templates/footer.php";
                }  
            }
        }
    }
