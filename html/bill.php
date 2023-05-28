<?php
    require'../admin/config/constants.php';
    require'./agree.php';

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH4+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Thanh toán trực tuyến </title>
    <link rel="stylesheet" href="../css/bill.css">
</head>

<body>
    <nav class="header">
        <nav class="header_up">
            <a href="<?php echo SITEURL;?>html/trangchu.php">
                <img src="https://www.cinestar.com.vn/pictures/moi/9Logo/white-2018.png" alt="">
            </a>
        </nav>
    </nav>

    <div class="main">
        <div class="grid">
            <form action="./sendMail.php" method="post">
                <div class="register">
                    <h4>Thông tin khách hàng</h4><br>
                    <div>
                        <label for="">Tên khách hàng</label><br>
                        <input type="text" name="fullname" id="" placeholder="Enter your fullname">
                    </div><br>
                    <div>
                        <!-- <label for="">Message</label><br> -->
                        <input type="hidden" name="message" value="<h4>Chúc bạn có buổi xem phim vui vẻ cùng Cinestar.</h4></br>
                        <strong>Phim</strong> : <?=$_SESSION['moviename']."<br />"?> <strong>Số ghế</strong> : <?=$_SESSION['chairs']."<br />"?> <strong>Rạp</strong> : <?=$_SESSION['address']."<br />"?> <strong>Thời gian</strong> : <?=$_SESSION['time']."<br />"?> " id="" readonly>
                    </div>
                    </br>
                    <div>
                        <input type="hidden" name="number" id="" value="Ma so ve : 
                        <?php
                            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            function generate_string($input, $strength = 16) {
                                $input_length = strlen($input);
                                $random_string = '';
                                for($i = 0; $i < $strength; $i++) {
                                    $random_character = $input[mt_rand(0, $input_length - 1)];
                                    $random_string .= $random_character;
                                }
                                return $random_string;
                            }
                            // Output: iNCHNGzByPjhApvn7XBD 
                            echo generate_string($permitted_chars, 10);
?>
                        " readonly>
                    </div>
                    <div>
                        <label for="">Email</label><br>
                        <input type="email" name="email" id="" placeholder="Enter your email">
                    </div>
                    <br>
                    <div>
                        <span>Vui lòng điền đầy đủ thông tin</span>
                    </div>
                </div>
                <div class="information">
                    <?php
                        bill();
                    ?>
                    <br>
                    <hr>
                    <!-- <div>
                        <h5>Phương thức thanh thoán</h5>
                        <div>
                            <input type="radio" name="payment" id="Thẻ thanh toán nội địa">
                            <label for="Thẻ thanh toán nội địa">Thẻ thanh toán nội địa</label>
                        </div>
                        <div>
                            <input type="radio" name="payment" id="Momo">
                            <label for="Momo">Momo</label>
                        </div>
                        <div>
                            <input type="radio" name="payment" id="Visa">
                            <label for="Visa">Visa</label>
                        </div>
                    </div>
                    <br>
                    <hr> -->
                    <div class="button">
                        <button type="submit" name="send" style="color: white;">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
<?php
    if(isset($_POST['send'])){
        
    }
?>

