<?php require'../admin/config/constants.php';?>
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
    <title>Đăng ký</title>
</head>

<body>
    <?php require'../html/header.php';?>

    <div class="main">
        <div class="login">
            <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
            <form action="" method="POST">
                <div>
                    <label for="">Your Email / Phone</label><br>
                    <input type="email" name="email" class="email" placeholder="Enter Your Email / Phone ...">
                </div>
                <div>
                    <label for="">Your Username</label><br>
                    <input type="text" name="username" class="username" placeholder="Enter Your Username ...">
                </div>
                <div>
                    <label for="">Your Password</label><br>
                    <input type="password" name="password" class="password" placeholder="Enter Your Password ... ">
                    <i class="fa fa-eye show-password"></i>
                </div>
                <div class="btn_login">
                    <button type="submit" name="submit">ĐĂNG KÝ</button>
                </div>
            </form>
            <hr>
            <div class="login_with_netword">
                <span>Hoặc có thể đăng nhập</span>
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

    <?php require '../html/footer.php';?>
    <script src="../js/js.js"></script>
</body>

</html>

<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO tbl_kh SET
            email = '$email',
            username = '$username',
            password = '$password'
        ";

        $res = mysqli_query($conn, $sql);
        if(!$res)
        {
            header('location:'.SITEURL.'html/trangchu.php');
            exit();
        }
        else
        {
            header('location:'.SITEURL.'html/sign-up.php');
        }
    }
?>