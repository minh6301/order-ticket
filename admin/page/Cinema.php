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
    <link rel="stylesheet" href="../css/user.css?v=1">
    <title>Tin tức</title>
</head>

<body>
    <?php require'../page/header.php';?>
    <div class="main-movie">
        <div class="main-movie-data">
            <div class="title">
                <h2>RẠP CHIẾU</h2>
            </div>
            <div class="main-movie-search">
                <div class="add-movie">
                    <a href="<?php echo SITEURL;?>admin/page/add-cinema.php">
                        <button>Thêm</button>
                    </a>
                </div>
                <div class="form-search">
                    <form action="" method="get">
                        <input type="text" name="search" placeholder="Tìm kiếm ...">
                        <button type="submit" name="search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-table">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Rạp chiếu</th>
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
                <?php
                if(isset($_POST['search']))
                {
                    $search = $_GET['search'];   
                    $sql1 = "SELECT * FROM tbl_cinema where
                        cinema like '%$search%' or
                        stt like '%$search%'
                    ";
                    $res2 = mysqli_query($conn, $sql1);
                }
                    $sql = "SELECT * FROM tbl_cinema";
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
                                $cinema = $rows['cinema'];
                                $active = $rows['active'];
                                
            ?>
                <tr>
                    <td><strong>.<?php echo $stt++;?></strong></td>
                    <td><?php echo $cinema;?></td>
                    <td><?php echo $active;?></td>
                    <td>
                        <button class="icon-edit"><a
                                href="<?php echo SITEURL; ?>admin/page/update-cinema.php?STT=<?php echo $STT; ?>"><i
                                    class="fa fa-edit"></i></a></button>
                        <button class="icon-trash"><a
                                href="<?php echo SITEURL; ?>admin/page/delete-cinema.php?STT=<?php echo $STT; ?>"><i
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
        <?php require'../page/footer.php';?>