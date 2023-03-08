<?php 
    require'../admin/config/constants.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/login.css" />
    <title>Đăng nhập</title>
</head>

<body>
    <?php require'../html/header.php';?>

    <div class="main">
        <div class="login">
            <h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
            <form action="" method="POST">
                <div>
                    <label for="">Your Username</label><br>
                    <input type="text" name="username" class="email" placeholder="Enter Your Username ...">
                </div>
                <div>
                    <label for="">Your Password</label><br>
                    <input type="password" name="password" class="password" placeholder="Enter Your Password ... ">
                    <i class="fa fa-eye show-password"></i>
                </div>
                <input type="checkbox" name="ghinho" id="remember">
                <label for="remember">Nhớ tôi</label>
                <div class="btn_login">
                    <button type="submit" name="login">ĐĂNG NHẬP</button>
                </div>
                <div class="forgot_password">
                    <div>
                        <a href="<?php echo SITEURL;?>html/sign-up.php">
                            <span>Đăng ký ngay</span>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <span>Quên mật khẩu của bạn ?</span>
                        </a>
                    </div>
                </div>
            </form>
            <hr>
            <div class="login_with_netword">
                <span>Bạn có thể dùng tài khoản và mật khẩu bên dưới để đăng nhập trực tiếp như thành
                    viên.</span>
                <div>
                    <a>
                        <i class="fab fa-facebook-f"></i> Facebook
                    </a>
                </div>
                <div>
                    <a>
                        <i class="fab fa-google"></i> Google
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="../js//js.js"></script>
    <?php require'../html/footer.php';?>

</body>

</html>

<?php
if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tbl_kh WHERE username='$username' and password = '$password'";

        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            header('location:'.SITEURL.'html/trangchu.php');
            $_SESSION['username']=$username;
        }
        else{
            header('location:'.SITEURL.'html/login.php');
        }        
    }
?>