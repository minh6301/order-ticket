<?php
    //Start Session
    ob_start();
    session_start();
    define('SITEURL', 'http://localhost:2001/order-ticket/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAMES', 'ticket-order');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD);
    $db_select = mysqli_select_db($conn, DB_NAMES);
?>