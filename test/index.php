<?php
    if(session_status() == 1) session_start();
    
    $_SESSION["name"] = "Anthony";
    $_SESSION["email"] = "anthony@gmail.com";
    echo "Se crearon las sesiones";
?>