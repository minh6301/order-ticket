<?php 
    require'../admin/config/constants.php';
    require'../html/login-kh.php';
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
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH4+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css//details.css?v=1">
    <title>Chi tiết sản phẩm</title>
</head>

<body>
    <?php require'../html/header.php';?>

    <div class="main">
        <?php require'../html/register.php';?>

        <div class="grid_container">
            <div class="container_slide">
                <nav id="slider-wrapper">
                    <nav class="inner-wrapper">
                        <input checked type="radio" name="slide" class="control" id="Slide1" />
                        <label for="Slide1" id="s1"></label>
                        <input type="radio" name="slide" class="control" id="Slide2" />
                        <label for="Slide2" id="s2"></label>
                        <input type="radio" name="slide" class="control" id="Slide3" />
                        <label for="Slide3" id="s3"></label>
                        <input type="radio" name="slide" class="control" id="Slide4" />
                        <label for="Slide4" id="s4"></label>
                        <nav class="overflow-wrapper">
                            <a class="slide" href=""><img src="https://www.cinestar.com.vn/pictures/c'monday.jpg" /></a>
                            <a class="slide" href=""><img
                                    src="https://www.cinestar.com.vn/pictures/z2161740555387_88fc044837bea7695ee9ec8320a39cef.jpg" /></a>
                            <a class="slide" href=""><img src="https://www.cinestar.com.vn/pictures/c'member.jpg" /></a>
                            <a class="slide" href=""><img
                                    src="https://www.cinestar.com.vn/pictures/z2161740555616_cf6d683f88aa9447af57b89917e84acb.jpg" /></a>
                        </nav>
                    </nav>
                </nav>
            </div><br>

            <?php
                            $STT = $_GET['STT'];

                            $sql = "SELECT * FROM tbl_movie WHERE STT=$STT";
                          
                            $res = mysqli_query($conn, $sql);

                            if($res==TRUE)
                            {
                                $count = mysqli_num_rows($res);

                                if($count==1)
                                {
                                    $rows=mysqli_fetch_assoc($res);
                                        $STT = $rows['stt'];
                                        $movie_name = $rows['moviename'];
                                        $present = $rows['present'];
                                        $movie_active = $rows['movieactive'];
                                        $theloai = $rows['theloai'];
                                        $loaiphim = $rows['loaiphim'];
                                        $gia = $rows['gia'];
                                        $active = $rows['active'];
                                        $time = $rows['time'];
                                        $image_name = $rows['image'];
                                        $time2 = $rows['time2'];
                                        $time3 = $rows['time3'];
                                        $time4 = $rows['time4'];
                                        $dienvien = $rows['dienvien'];
                                        $daodien = $rows['daodien'];
                                        $khoichieu = $rows['khoichieu'];
                                }
                            }
                            ?>
            <form action="buy-ticket.php" method="POST">
                <div class="select_movie" id="select_movie">
                    <div class="order_ticket">
                        <div>
                            <img src="http://dabacocinema.vn/Content/images/template/ticket-icon1.png" alt="" width="50"
                                height="50">
                        </div>
                        <div style="font-size: 22px; color: white;">
                            <span>Vui lòng chọn thông tin</span>
                        </div>
                    </div>
                    <div class="select_list_movie">
                        <h3>Chọn rạp</h3>
                        <div class="select_address">
                            <label class="row_chair">
                                <input type="radio" name="address" value="CineStar Quốc Thanh">
                                <span class="checkmark">CineStar Quốc Thanh</span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="address" value="CineStar Đà Lạt">
                                <span class="checkmark">CineStar Đà Lạt</span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="address" value="CineStar Hai Bà Trưng">
                                <span class="checkmark">CineStar Hai Bà Trưng</span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="address" value="CineStar Bình Dương ">
                                <span class="checkmark">CineStar Bình Dương </span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="address" value="CineStar Huế">
                                <span class="checkmark">CineStar Huế</span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="address" value="CineStar Mỹ Tho">
                                <span class="checkmark">CineStar Mỹ Tho</span>
                            </label>
                        </div>
                        <br>
                        <hr><br>
                        <h3>Chọn ngày</h3>
                        <div class="select_date">
                            <label class="row_chair">
                                <input type="radio" name="date" value="<?php echo $time_now = date("d-m-Y"); ?>">
                                <span class="checkmark">
                                    <?php 
                                        $time_now = date("d-m-Y");
                                        echo $time_now;
                                    ?>
                                </span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="date" value="<?php echo $time_now = date("d-m-Y");?>">
                                <span class="checkmark">
                                    <?php 
                                        $time_now = date("d-m-Y", strtotime($time_now. ' + 1 day'));
                                        echo $time_now ;
                                    ?>
                                </span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="date" value="<?php echo $time_now = date("d-m-Y");?>">
                                <span class="checkmark">
                                    <?php 
                                        $time_now = date("d-m-Y", strtotime($time_now. ' + 2 day'));
                                        echo $time_now ;
                                    ?>
                                </span>
                            </label>
                        </div>
                        <br>
                        <hr><br>
                        <h3>Chọn giờ chiếu</h3>
                        <div class="select_time">
                            <label class="row_chair">
                                <input type="radio" name="time" value="<?php echo $time;?>">
                                <span class="checkmark">
                                    <?php echo $time;?>
                                </span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="time" value="<?php echo $time2;?>">
                                <span class="checkmark">
                                    <?php echo $time2;?>
                                </span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="time" value="<?php echo $time3;?>">
                                <span class="checkmark">
                                    <?php echo $time3;?>
                                </span>
                            </label>
                            <label class="row_chair">
                                <input type="radio" name="time" value="<?php echo $time4;?>">
                                <span class="checkmark">
                                    <?php echo $time4;?>
                                </span>
                            </label>
                        </div>
                        <br>
                        <div class="button">
                            <button type="submit" name="save_session">Xac nhan</button>
                        </div>
                    </div>
                </div>
                <div class="full-screen" id="full-screen"></div>


                <div class="details_movie">
                    <div class="image_title_movie">
                        <img src="<?php echo SITEURL; ?>admin/images/<?php echo $image_name; ?>" alt="">
                    </div>
                    <div class="detail_describe_movie">
                        <div class="name_movie">
                            <h3><?php echo $movie_name;?></h3>
                        </div>
                        <div>
                            <div class="present_movie">
                                <div>Khởi chiếu :</div>
                                <div>
                                    <?php echo $khoichieu;?>
                                </div>
                            </div>
                            <div class="present_movie">
                                <div>Thể loại :</div>
                                <div>
                                    <?php echo $theloai;?>
                                </div>
                            </div>
                            <div class="present_movie">
                                <div>Diễn viên :</div>
                                <div>
                                    <?php echo $dienvien;?>
                                </div>
                            </div>
                            <div class="present_movie">
                                <div>Đạo diễn :</div>
                                <div>
                                    <?php echo $daodien;?>
                                </div>
                            </div>
                        </div><br>
                        <div class="describe">
                            <?php echo $present;?>
                        </div>
                        <div class="rate">
                            <div>
                                Đánh giá :
                            </div>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="trailer_film">
                            <div class="trailer">
                                <i class="fab fa-youtube" style="color: red;"></i> Trailer
                            </div>
                            <div class="buy_ticket">
                                <a href="#full-screen">Mua vé</a>
                            </div>
                            <div class="share">
                                Chia sẻ
                                <div>
                                    <div>
                                        <i class="fab fa-facebook"></i>
                                    </div>
                                    <div>
                                        <i class="fab fa-gofore"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="moviename" value="<?php echo $movie_name;?>" />
                <input type="hidden" name="gia" value="<?php echo $gia;?>" />
            </form>
        </div>


        <?php require'../html/footer.php';?>
        <script src="../js/movie.js"></script>
</body>

</html>