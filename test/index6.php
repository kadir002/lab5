<?php
    if(session_status() == 1) session_start();
    setcookie("user", "Anthony2001", time()-1);
?>