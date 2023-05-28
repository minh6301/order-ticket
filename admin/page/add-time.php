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
    <title>Thêm tin tức</title>
</head>

<body>
    <?php require'../page/header.php';?>
    <div class="main-movie">
        <div class="title">
            <h2>TIN TỨC</h2>
        </div>

        <div class="table-add">
            <table>
                <form action="" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td id="rowspan">Time :</td>
                            <td>
                                <input type="time" name="time" >
                            </td>
                        </tr>
                        <tr class="submit">
                            <td colspan="2">
                                <button type="submit" name="submit" class="save"><i class="fa fa-save "></i>
                                    Lưu</button>
                                <button class="exit"><a href="<?php echo SITEURL;?>admin/page/time.php"><i
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
    if(isset($_POST['submit']))
    {
        $time = $_POST['time'];
        
        
        $sql = "INSERT INTO tbl_time SET
            
            time = '$time'
        ";

        $res = mysqli_query($conn, $sql);
        if(!$res)
        {
            header('location:'.SITEURL.'admin/page/time.php');
            exit();
        }
        else
        {
            header('location:'.SITEURL.'admin/page/time.php');
        }
    }
?>