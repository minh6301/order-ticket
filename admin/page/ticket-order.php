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
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Document</title>
</head>

<body>
    <div class="info-ticket">
        <ul>
            <li><strong>Tài khoản</strong> : nguyenducminh</li>
            <li><strong>Điện thoại</strong> : 0334636815</li>
            <li><strong>Tên phim</strong> : Spiderman : No way home </li>
            <li><strong>Thời gian chiếu</strong> : 12:45</li>
            <li><strong>Số ghế</strong> : 2</li>
            <li><strong>Hàng ghế</strong> : F1 F2</li>
            <li><strong>Đơn giá</strong> : 60.000 VND</li>
            <li><strong>Thành tiền</strong> : 120.000VND</li>
        </ul>
        <button class="close-show-info">OK</button>
    </div>
    <div class="full-screen"></div>
    <?php require'../page/header.php';?>

    <div class="main-movie">
        <div class="main-movie">
            <div class="main-movie-data">
                <div class="title">
                    <h2>VÉ ĐÃ ĐẶT</h2>
                </div>
                <div class="main-movie-search">
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
                        <!-- <th>Địa chỉ</th> -->
                        <th>Ghế</th>
                        <th>Thời gian</th>
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
                    $sql = "SELECT * FROM tbl_ticket";
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
                                $address = $rows['address']; 
                                $times = $rows['time']; 
                                $date = $rows['date']; 
                                $chairs = $rows['name']; 
            ?>
                <tr>
                        <td><?php echo $stt++;?></td>
                        <td><?php echo $movie_name;?></td>
                        <!-- <td><?php echo $address;?></td> -->
                        <td><?php echo $chairs;?></td>
                        <td><?php echo $times;?></td>
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
    </div>
    <script src="../js/sidebar.js"></script>
</body>

</html>