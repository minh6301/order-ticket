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
                <h2>THỜI GIAN</h2>
            </div>
            <div class="main-movie-search">
                <div class="add-movie">
                    <a href="<?php echo SITEURL;?>admin/page/add-time.php">
                        <button>Thêm</button>
                    </a>
                </div>
                <div class="form-search">
                    <form action="" method="get">
                        <input type="text" placeholder="Tìm kiếm ...">
                        <button type="submit" name="search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-table">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Time</th>
                    
                </tr>
                <?php
            if(isset($_POST['search']))
                {
                    $search = $_GET['search'];   
                    $sql = "SELECT * FROM tbl_user where
                        fullname like '%$search%' or
                        username like '%$search%'
                    ";
                    $res2 = mysqli_query($conn, $sql);
                }
                    $sql = "SELECT * FROM tbl_time";
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
                                $time = $rows['time'];
                                $time1 = $rows['time1'];
                                $time2 = $rows['time2'];
                                $time3 = $rows['time3'];
                                $time4 = $rows['time4'];
                                $time5 = $rows['time5'];
                                $time6 = $rows['time6'];
                                $time7 = $rows['time7'];
                                $time8 = $rows['time8'];
                                $time9 = $rows['time9'];
                                $time10 = $rows['time10'];
                                $time11 = $rows['time11'];
                                $time12 = $rows['time12'];
                                
            ?>
                <tr>
                    <td><strong>.<?php echo $stt++;?></strong></td>
                    <td><?php echo $time;?></td>
                    <td><?php echo $time1;?></td>
                    <td><?php echo $time2;?></td>
                    <td><?php echo $time3;?></td>
                    <td><?php echo $time4;?></td>
                    <td><?php echo $time5;?></td>
                    <td><?php echo $time6;?></td>
                    <td><?php echo $time7;?></td>
                    <td><?php echo $time8;?></td>
                    <td><?php echo $time9;?></td>
                    <td><?php echo $time10;?></td>
                    <td><?php echo $time11;?></td>
                    <td><?php echo $time12;?></td>
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