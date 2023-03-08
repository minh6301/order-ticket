<?php
    if(!isset($_SESSION['username']))
    {
        $_SESSION['login-check']="";
        header('Location:'.SITEURL.'admin/page/login.php');
    }
?>