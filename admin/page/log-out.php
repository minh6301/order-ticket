<?php
    require('../config/constants.php');
    session_destroy();

    header('location:'.SITEURL.'admin/page/login.php');

?>