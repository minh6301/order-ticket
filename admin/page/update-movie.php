<?php
    require'../config/constants.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/add-all.css?v=1">
    <title>Sửa thông tin phim</title>
</head>

<body>
    <?php require'../page/header.php';?>
    <div class="main-movie">
        <div class="title">
            <h2>THÔNG TIN PHIM</h2>
        </div>

        <div class="table-add">
            <table>
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
                <form action="" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td id="rowspan">Tên phim</td>
                            <td>
                                <input type="text" name="moviename" value="<?php echo $movie_name;?>">
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Giới thiệu</td>
                            <td>
                                <textarea name="present" id="" cols="30" rows="5"
                                    value=""><?php echo $present;?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Phim</td>
                            <td>
                                <select name="movieactive">
                                    <option value="Phim đang chiếu">Phim đang chiếu</option>
                                    <option value="Phim sắp chiếu">Phim sắp chiếu</option>
                                    <option value="Chiếu đặc biệt">Suất chiếu đặc biệt</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Thể loại</td>
                            <td>
                                <input type="text" name="theloai" value="<?php echo $theloai;?>">
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Diễn viên</td>
                            <td>
                                <input type="text" name="dienvien" value="<?php echo $dienvien;?>">
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Đạo diễn</td>
                            <td>
                                <input type="text" name="daodien" value="<?php echo $daodien;?>">
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Khởi chiếu</td>
                            <td>
                                <input type="text" name="khoichieu" value="<?php echo $khoichieu;?>">
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Loại phim</td>
                            <td>
                                <input type="radio" name="loaiphim" value="2D" id="2D">
                                <label for="2D">2D</label>
                                <input type="radio" name="loaiphim" value="3D" id="3D">
                                <label for="3D">3D</label>
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Ảnh</td>
                            <td>
                                <input type="file" name="image">
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Thời gian chiếu trong ngày</td>
                            <td>
                                <input type="time" name="time" value="<?php echo $time;?>" />
                                <input type="time" name="time2" value="<?php echo $time2;?>" />
                                <input type="time" name="time3" value="<?php echo $time3;?>" />
                                <input type="time" name="time4" value="<?php echo $time4;?>" />
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Giá vé</td>
                            <td>
                                <input type="text" name="gia" value="<?php echo $gia;?>">
                            </td>
                        </tr>
                        <tr>
                            <td id="rowspan">Trạng thái</td>
                            <td>
                                <select name="active" id="">
                                    <option value="Hoạt động">Hoạt động</option>
                                    <option value="Khóa">Khóa</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="submit">
                            <td colspan="2">
                                <button type="submit" name="save" class="save"><i
                                        class="fa fa-save fa-icon"></i>Lưu</button>
                                <button class="exit"><a href="<?php echo SITEURL;?>admin/page/all-movie.php"><i
                                            class="fa fa-sign-out fa-icon"></i>Trở
                                        lại</a></button>
                            </td>
                        </tr>
                    </table>
                </form>
            </table>
        </div>

        <?php require'../page/footer.php';?>

        <?php
    if(isset($_POST['save']))
    {
        $movie_name = $_POST['moviename'];
        $present = $_POST['present'];
        $movie_active = $_POST['movieactive'];
        $theloai = $_POST['theloai'];
        $loaiphim = $_POST['loaiphim'];
        $gia = $_POST['gia'];
        $active = $_POST['active'];
        $time = $_POST['time'];
        $image_name = $_POST['image'];
        $time2 = $_POST['time2'];
        $time3 = $_POST['time3'];
        $time4 = $_POST['time4'];
        $dienvien = $_POST['dienvien'];
        $daodien = $_POST['daodien'];
        $khoichieu = $_POST['khoichieu'];

        if(isset($_FILES['image']['name']))
        {
            $image_name = $_FILES['image']['name'];

            if($image_name!="")
            {
                $ext = end(explode('.',$image_name));

                $image_name = "movie".rand(0000, 9999).".".$ext;

                $src = $_FILES['image']['tmp_name'];

                $dst = "../images/".$image_name;

                $upload = move_uploaded_file($src, $dst);

                if($upload==TRUE)
                {
                  header("location:".SITEURL.'admin/page/add-moving.php');
                }
            }
        }
        else
        {
            $image_name = "";
        }

        if(isset($_POST['movieactive']))
        {
            $movie_active = $_POST['movieactive'];
        }
        else if(isset($_POST['movieactive']))
        {
            $movie_active = $_POST['movieactive'];
        }
        else
        {
            $movie_active = "No";
        }

        if(isset($_POST['active']))
        {
            $active = $_POST['active'];
        }
        else
        {
            $active = "No";
        }

        $sql =  "UPDATE tbl_movie SET
            moviename = '$movie_name',
            present = '$present',
            movieactive = '$movie_active',
            theloai = '$theloai',
            loaiphim = '$loaiphim',
            active = '$active',
            gia = '$gia',
            dienvien = '$dienvien',
            daodien = '$daodien',
            khoichieu = '$khoichieu',
            time2 = '$time2',
            time3 = '$time3',
            time4 = '$time4',
            time = '$time',
            image = '$image_name'
            where stt = '$STT'
        ";
        $res = mysqli_query($conn, $sql) ;
        if($res==TRUE)
        {
            $_SESSION['add-user']=`<div style="color:green">Thêm thành công</div>`;
            header('location:' .SITEURL. '/admin/page/all-movie.php');
            exit();
        }
        else
        {
            $_SESSION['add-user']=`<div style="color:red">Thêm không thành công</div>`;
            header('location:'.SITEURL.'/admin/page/add-moving.php');
        }
    }
?>