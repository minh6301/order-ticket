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
    <title>Thêm người dùng</title>
</head>

<body>
    <?php require'../page/header.php';?>
    <div class="main-movie">
        <div>
            <?php 
            if(isset($_SESSION['add-user']))
            {
                echo $_SESSION['add-user'];
                unset($_SESSION['add-user']);
            }
        ?>
        </div>
        <br>
        <div class="title">
            <h2>THÔNG TIN NGƯỜI QUẢN LÝ</h2>
        </div>

        <div class="table-add">
            <table>
                <form action="" method="POST" enctype="multipart/form-data">
                    <tr>
                        <td id="rowspan">Tên người quản lý</td>
                        <td>
                            <input type="text" name="fullname" placeholder="Nhập tên " required autofocus>
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Tài khoản</td>
                        <td>
                            <input type="text" name="username" placeholder="Nhập tên tài khoản">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Mật khẩu</td>
                        <td>
                            <input type="password" name="password" id="" placeholder="Mật khẩu">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">CCCD</td>
                        <td>
                            <input type="text" name="cccd" placeholder="CMND/CCCD">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Địa chỉ</td>
                        <td>
                            <input type="text" name="diachi" placeholder="Nhập địa chỉ">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Ảnh CMND/CCCD</td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>
                    <tr>
                        <td id="rowspan">Trạng thái</td>
                        <td>
                            <select name="active" id="">
                                <option value="Hoạt động">Hoạt động</option>
                                <option value="Tắt hoạt động">Tắt hoạt động</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="submit">
                        <td colspan="2">
                            <button type="submit" name="submit" class="save" style="color: white;"><i
                                    class="fa fa-save fa-icon"></i>Lưu</button>
                            <button class="exit"><a href="http://localhost:2001/oder-ticket/admin/page/user.php"><i
                                        class="fa fa-sign-out fa-icon"></i>Trở
                                    lại</a></button>
                        </td>
                    </tr>
                </form>
            </table>
        </div>

        <?php require'../page/footer.php';?>

        <?php
    if(isset($_POST['submit']))
    {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cccd = $_POST['cccd'];
        $diachi = $_POST['diachi'];
        $active = $_POST['active'];
        $image_name = $_POST['image'];

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
                  header("location:".SITEURL.'admin/page/user.php');
                }
            }
        }
        else
        {
            $image_name = "";
        }

        if(isset($_POST['active']))
        {
            $active = $_POST['active'];
        }
        else
        {
            $active = "No";
        }

        $sql =  "INSERT INTO tbl_user SET
            fullname = '$fullname',
            username = '$username',
            diachi = '$diachi',
            active = '$active',
            cccd = '$cccd',
            password = '$password',
            image = '$image_name'
        ";
        $res = mysqli_query($conn, $sql) ;
        if($res==TRUE)
        {
            $_SESSION['add-user']=`<div style="color:green">Thêm thành công</div>`;
            header('location:' .SITEURL. '/admin/page/user.php');
            exit();
        }
        else
        {
            $_SESSION['add-user']=`<div style="color:red">Thêm không thành công</div>`;
            header('location:'.SITEURL.'/admin/page/add-user.php');
        }
    }
?>