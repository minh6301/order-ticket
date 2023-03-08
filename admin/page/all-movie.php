<?php require'../config/constants.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/movie.css">
    <title>Tổng hợp phim</title>
</head>

<body>
    <div class="detail-movie" name="infoMovie">
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
                                }
                            }
                        ?>
        <ul>
            <li><strong>Phim </strong> : <?php echo $movie_name;?></li>
            <li><strong>Thể loại</strong> : <?php echo $theloai;?></li>
            <li><strong>Loại phim</strong> : <?php echo $loaiphim;?></li>
            <li><strong>Giá </strong> : <?php echo $gia;?></li>
            <li><strong>Thời gian chiếu </strong> : <br> <?php echo $time;?>
                <br> <?php echo $time2;?>
                <br> <?php echo $time3;?>
                <br> <?php echo $time4;?>
            </li>
        </ul>
        <button class="close-show-info-movie">OK</button>
    </div>
    <div class="full-screen-movie"></div>
    <?php require'../page/header.php';?>

    <div class="main-movie">
        <div class="main-movie-data">
            <div class="title">
                <h2>TỔNG HỢP PHIM</h2>
            </div>
            <div class="main-movie-search">
                <div class="add-movie">
                    <a href="<?php echo SITEURL;?>/admin/page/add-moving.php">
                        <button>Thêm</button>
                    </a>
                </div>
                <div class="form-search">
                    <form action="" method="post">
                        <input type="text" placeholder="Tìm kiếm ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-table">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Tên phim</th>
                    <th>Giới thiệu</th>
                    <th>Phim</th>
                    <th>Thể loại</th>
                    <th>Loại phim</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Chi tiết</th>
                    <th><i class="fa fa-gears"></i></th>
                </tr>
                <?php
                            $sql = "SELECT * FROM tbl_movie ";
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
                <tr>
                    <td>.
                        <?php echo $stt++;?>
                    </td>
                    <td id="rowspan">
                        <?php echo $movie_name; ?>
                    </td>
                    <td id="present">
                        <?php echo $present;?>
                    </td>
                    <td id="present">
                        <?php echo $movie_active;?>
                    </td>
                    <td id="rowspan">
                        <?php echo $theloai;?>
                    </td>
                    <td id="rowspan">
                        <?php echo $loaiphim; ?>
                    </td>
                    <td id="rowspan">
                        <?php 
                                  if($image_name=="")
                                  {
                                    echo "Không Có Ảnh ";
                                  }
                                  else
                                  {
                                    ?>
                        <img src="<?php echo SITEURL; ?>admin/images/<?php echo $image_name; ?>" width="80"
                            height="100">
                        <?php
                                  }
                                ?>
                    </td>
                    <td id="rowspan">
                        <?php echo $active;?>
                    </td>
                    <td>
                        <button class="icon-edit icon-show-info"><a href="#infoMovie?STT=<?php echo $STT; ?>"><i
                                    class="fa fa-info fa-edit"></i></a></button>
                    </td>
                    <td id="rowspan">
                        <button class="icon-edit"><a
                                href="<?php echo SITEURL;?>admin/page/update-movie.php?STT=<?php echo $STT; ?>"><i
                                    class="fa fa-edit"></i></a></button>
                        <button class="icon-trash"><a
                                href="<?php echo SITEURL;?>admin/page/delete-movie.php?STT=<?php echo $STT; ?>"><i
                                    class="fa fa-trash"></i></a></button>
                    </td>
                </tr>
                <?php
                                    }
                                }
                            }
                            else
                            {
                                
                            }
                        ?>
            </table>
        </div>
    </div>
    </div>
    </div>
    <script src="../js/toggle.js"></script>
</body>

</html>