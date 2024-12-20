<?php
    session_start();
    session_destroy();
    setcookie('tema', $_POST['tema'], time() -3600,'/');
    header("location: login.php");

?>