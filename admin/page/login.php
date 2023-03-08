<?php require'../config/constants.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Đăng nhập </title>
</head>

<body>
    <div class="form">
        <h2 style="text-align: center;">Đăng nhập</h2>
        <form action="" method="post">
            <div>
                <label for="">Tài khoản :</label><br>
                <input type="text" name="username" placeholder="Nhập tài khoản ..." autofocus required>
            </div>
            <div>
                <label for="">Mật khẩu :</label><br>
                <input type="password" name="password" placeholder="Nhập mật khẩu ..." required>
            </div>
            <div>
                <button type="submit" name="login">Đăng nhập</button>
            </div>
        </form>
    </div>
</body>

</html>

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