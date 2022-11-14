<?php 
    if(session_status() == 1) session_start();
    echo "El status de la session es: ".session_status();
    session_destroy();
    
    echo "Las sesiones se han destruido";
?>