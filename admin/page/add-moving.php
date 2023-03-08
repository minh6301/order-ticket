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
    <title>Thêm phim</title>
</head>

<body>
    <?php require'../page/header.php';?>
    <div class="main-movie">
        <div class="title">
            <h2>THÔNG TIN PHIM</h2>
        </div>

        <div class="table-add">
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td id="rowspan">Tên phim</td>
                        <td>
                            <input type="text" name="moviename" placeholder="Nhập tên phim">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Giới thiệu</td>
                        <td>
                            <textarea name="present" id="" cols="30" rows="5"
                                placeholder="Nhập giới thiệu phim"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Phim</td>
                        <td>
                            <select name="movieactive" id="">
                                <option value="Phim đang chiếu">Phim đang chiếu</option>
                                <option value="Phim sắp chiếu">Phim sắp chiếu</option>
                                <option value="Chiếu đặc biệt">Suất chiếu đặc biệt</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Thể loại</td>
                        <td>
                            <input type="text" name="theloai" placeholder="Nhập thể loại phim">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Diễn viên</td>
                        <td>
                            <input type="text" name="dienvien" placeholder="Nhập tên diễn viên">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Đạo diễn</td>
                        <td>
                            <input type="text" name="daodien" placeholder="Nhập tên đạo diễn">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Khởi chiếu</td>
                        <td>
                            <input type="text" name="khoichieu" placeholder="Nhập ngày khời chiếu">
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
                            <input type="time" name="time" />
                            <input type="time" name="time2" />
                            <input type="time" name="time3" />
                            <input type="time" name="time4" />
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Giá vé</td>
                        <td>
                            <input type="text" name="gia" placeholder="Nhập giá vé">
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
                            <button class="exit"><a href="<?php echo SITEURL;?>admin/page/movie.php"><i
                                        class="fa fa-sign-out fa-icon"></i>Trở
                                    lại</a></button>
                        </td>
                    </tr>
                </table>
            </form>

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
        $image_name = $_POST['image'];
        $time = $_POST['time'];
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

        $sql =  "INSERT INTO tbl_movie SET
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