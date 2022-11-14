<?php
    if(session_status() == 1) session_start();

    if(isset($_COOKIE["user"])){
        echo "El valor de la cookie es: ".$_COOKIE["user"];
    }else{
        echo "No existe la cookie";
    }

?>