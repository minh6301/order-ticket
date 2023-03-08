<?php
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tbl_user WHERE active='Hoạt động' and username='$username' and password = '$password'";
        
        $res = mysqli_query($conn, $sql);
        
        if($res==true)
        {
            header('location:'.SITEURL.'admin/page/all-movie.php');
            $_SESSION['username']=$username;
            exit();
        }
        else{
            header('location:'.SITEURL.'admin/page/login.php');
        }
    }
?>