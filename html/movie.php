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
    <link rel="stylesheet" href="../css/movie.css">
    <title>Document</title>
</head>

<body>
    <?php require'../html/header.php';?>
    <div class="container">
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

            <div class="select_movie">
                <div class="order_ticket">
                    <div>
                        <img src="http://dabacocinema.vn/Content/images/template/ticket-icon1.png" alt="" width="50"
                            height="50">
                    </div>
                    <div style="font-size: 22px; color: white;">
                        <span>?????t v?? Online</span>
                    </div>
                </div>
                <div class="select_list_movie">
                    <div class="group_select_movie">
                        <select name="" id="">
                            <option value="">-- Ch???n phim --</option>
                        </select>
                    </div>
                    <div class="group_select_movie">
                        <select name="" id="">
                            <option value="">-- Ch???n r???p --</option>
                        </select>
                    </div>
                    <div class="group_select_movie">
                        <select name="" id="">
                            <option value="">-- Ch???n ng??y--</option>
                        </select>
                    </div>
                    <div class="group_select_movie">
                        <select name="" id="">
                            <option value="">-- Ch???n su???t chi???u --</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>

            <div class="movie">
                <div class="menu_tab">
                    <nav class="list_movie active" id="menu_tab1">
                        <h4>PHIM ??ANG CHI???U</h4>
                    </nav>
                    <nav class="list_movie" id="menu_tab2">
                        <h4>PHIM S???P CHI???U</h4>
                    </nav>
                    <nav class="list_movie" id="menu_tab3">
                        <h4>SU???T CHI???U ?????C BI???T</h4>
                    </nav>
                </div><br>

                <div class="show_list_movie active">
                    <nav>
                        <?php
                                    $sql = "SELECT * FROM tbl_movie WHERE movieactive='Phim ??ang chi???u' AND active='Ho???t ?????ng' LIMIT 10 ";
                                    $res = mysqli_query($conn, $sql);
                                    if($res==TRUE) 
                                    {
                                        $count = mysqli_num_rows($res);
                                        $stt=1;
                                        if($count>0) 
                                        {
                                            while($rows=mysqli_fetch_assoc($res))
                                            {
                                                $STT = $rows['stt'];
                                                $movie_name = $rows['moviename'];
                                                $present = $rows['present'];
                                                $movie_active = $rows['movieactive'];
                                                $theloai = $rows['theloai'];
                                                $loaiphim = $rows['loaiphim'];
                                                $gia = $rows['gia'];
                                                $active = $rows['active'];
                                                $image_name = $rows['image'];
                                ?>
                        <div class="show_list_movie_details">
                            <div class="image_movie">
                                <a href="<?php echo SITEURL;?>html/details.php?STT=<?php echo $STT;?>">
                                    <img src="<?php echo SITEURL; ?>admin/images/<?php echo $image_name; ?>" alt="">
                                </a>
                            </div>
                            <div class="info_movie">
                                <div class="name_movie">
                                    <a href="<?php echo SITEURL;?>html/details.php?STT=<?php echo $STT;?>">
                                        <h3><?php echo $movie_name;?></h3>
                                        <div style="height: 100px; overflow:hidden;text-overflow: clip;">
                                            <?php echo $present;?>
                                        </div>
                                    </a>
                                </div>
                                <div style="color: white;">
                                    Th??? lo???i phim : <?php echo $theloai;?>
                                </div>
                                <div class="trailer_movie">
                                    <div class="trailer">
                                        <i class="fab fa-youtube" style="color: red;"></i> Trailer
                                    </div>
                                    <div class="buy_ticket">
                                        <a href="<?php echo SITEURL;?>html/details.php?STT=<?php echo $STT;?>">Mua
                                            v??</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                            }
                                        }
                                    }
                                    else
                                    {

                                    }
                                    ?>
                    </nav>
                </div>

                <!-- Phim s???p chi???u  -->
                <div class="show_list_movie">
                    <nav>
                        <div class="show_list_movie_details">
                            <div class="image_movie">
                                <a href="http://127.0.0.1:5501/html/details.html">
                                    <img src="https://cinestar.com.vn/pictures/Cinestar/11-2021/no-way-home.jpg" alt="">
                                </a>
                            </div>
                            <div class="info_movie">
                                <div class="name_movie">
                                    <a href="http://127.0.0.1:5501/html/details.html">
                                        <h3>SPIDER-MAN (C13): NG?????I NH???N KH??NG C??N NH??</h3>
                                        <div>
                                            "Spider-Man: No Way Home" s??? ti???p n???i s??? ki???n h???p d???n ??? ph???n phim tr?????c khi
                                            danh
                                            t??nh c???a Peter Parker ???? b??? Mysterio (Jake Gyllenhaal) h?? l??? cho c??? th??? gi???i
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    2D
                                </div>
                                <div class="trailer_movie">
                                    <div class="trailer">
                                        <i class="fab fa-youtube" style="color: red;"></i> Trailer
                                    </div>
                                    <div class="buy_ticket">
                                        <a href="http://127.0.0.1:5501/html/buy-ticket.html">Mua v??</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="show_list_movie_details">
                            <div class="image_movie">
                                <img src="https://cinestar.com.vn/pictures/Cinestar/11-2021/no-way-home.jpg" alt="">
                            </div>
                            <div class="info_movie">
                                <div class="name_movie">
                                    <h3>SPIDER-MAN (C13): NG?????I NH???N KH??NG C??N NH??</h3>
                                    <div>
                                        "Spider-Man: No Way Home" s??? ti???p n???i s??? ki???n h???p d???n ??? ph???n phim tr?????c khi danh
                                        t??nh c???a Peter Parker ???? b??? Mysterio (Jake Gyllenhaal) h?? l??? cho c??? th??? gi???i
                                    </div>
                                </div>
                                <div>
                                    2D
                                </div>
                                <div class="trailer_movie">
                                    <div class="trailer">
                                        <i class="fab fa-youtube" style="color: red;"></i> Trailer
                                    </div>
                                    <div class="buy_ticket">
                                        <a href="http://127.0.0.1:5501/html/buy-ticket.html">Mua v??</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="show_list_movie_details">
                            <div class="image_movie">
                                <img src="https://cinestar.com.vn/pictures/Cinestar/11-2021/no-way-home.jpg" alt="">
                            </div>
                            <div class="info_movie">
                                <div class="name_movie">
                                    <h3>SPIDER-MAN (C13): NG?????I NH???N KH??NG C??N NH??</h3>
                                    <div>
                                        "Spider-Man: No Way Home" s??? ti???p n???i s??? ki???n h???p d???n ??? ph???n phim tr?????c khi danh
                                        t??nh c???a Peter Parker ???? b??? Mysterio (Jake Gyllenhaal) h?? l??? cho c??? th??? gi???i
                                    </div>
                                </div>
                                <div>
                                    2D
                                </div>
                                <div class="trailer_movie">
                                    <div class="trailer">
                                        <i class="fab fa-youtube" style="color: red;"></i> Trailer
                                    </div>
                                    <div class="buy_ticket">
                                        <a href="http://127.0.0.1:5501/html/buy-ticket.html">Mua v??</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </nav>
                </div>

                <!-- Su???t chi???u ?????c bi???t -->
                <div class="show_list_movie">
                    <nav></nav>
                </div>

            </div>
            <script src="../js/movie.js"></script>
        </div>
    </div>


    <div class="footer">
        <div class="grid_footer">
            <div>
                <div>
                    <h4>H??? TH???NG R???P</h4>
                </div>
                <div>
                    <ul>
                        <li>CineStar Qu???c Thanh</li>
                        <li>CineStar ???? L???t</li>
                        <li>CineStar Hai B?? Tr??ng</li>
                        <li>CineStar B??nh D????ng</li>
                        <li>CineStar Hu???</li>
                        <li>CineStar M??? Tho</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <h4>CINESTART</h4>
                </div>
                <div>
                    <ul>
                        <li>Phim ??ang chi???u</li>
                        <li>Phim s???p chi???u</li>
                        <li>Su???t chi???u ?????c bi???t</li>
                        <li>L???ch chi???u</li>
                        <li>Khuy???n m??i</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <h4>Th??ng tin</h4>
                </div>
                <div>
                    <ul>
                        <li>Gi???i thi???u</li>
                        <li>Tin t???c</li>
                        <li>H???i v?? ????p</li>
                        <li>Li??n h???</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <h4>Ch??nh s??ch v?? quy ?????nh</h4>
                </div>
                <div>
                    <ul>
                        <li>Quy ?????nh chung</li>
                        <li>??i???u kho???n giao d???ch</li>
                        <li>Ch??nh s??ch b???o m???t</li>
                        <li>Th??ng tin c??ng ty</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>