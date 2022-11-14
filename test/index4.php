<?php
    if(session_status() == 1) session_start();

    setcookie("user", "Anthony2001", time()+20);

    echo "El valor de la cookie es: ".$_COOKIE["user"];
?>