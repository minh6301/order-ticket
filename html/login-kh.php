<?php
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tbl_kh WHERE username='$username' and password = '$password' and email = '$email'";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            header('location:'.SITEURL.'html/trangchu.php');
            $_SESSION['username']=$username;
            $_SESSION['email'] = $email;
        }
        else{
            header('location:'.SITEURL.'html/login.php');
        }

        
    }

    
?>