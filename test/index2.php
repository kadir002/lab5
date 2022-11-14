<?php 
    if(session_status() == 1) session_start();

    if(isset($_SESSION["name"]) && isset($_SESSION["email"])){
        echo "El nombre es: ".$_SESSION["name"]."<br>";
        echo "El correo es: ".$_SESSION["email"];
    }else{
        echo "No se han seteado valores o falta alguno";
    }
   
    
?>