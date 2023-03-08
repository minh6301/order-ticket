<?php
    require('../admin/config/constants.php');
    session_destroy();

    header('location:'.SITEURL.'html/login.php');

?>