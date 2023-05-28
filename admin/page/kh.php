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
    <title>Khách hàng</title>
</head>

<body>
    <?php require'../page/header.php';?>
    <div class="main-movie">
        <div class="main-movie-data">
            <div class="title">
                <h2>Khách hàng</h2>
            </div>
            <div class="main-movie-search">

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
                    <th>Email</th>
                    <th>Tài khoản</th>
                    <th><i class="fa fa-gears"></i></th>
                </tr>
                <?php
            if(isset($_POST['search']))
                {
                    $search = $_GET['search'];   
                    $sql = "SELECT * FROM tbl_kh where
                        fullname like '%$search%' or
                        username like '%$search%'
                    ";
                    $res = mysqli_query($conn, $sql);
                }
                    $sql = "SELECT * FROM tbl_kh";
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
                                $email = $rows['email'];
                                $username = $rows['username'];
                                $password = $rows['password'];
            ?>
                <tr>
                    <td><strong>.<?php echo $stt++;?></strong></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $username;?></td>
                    <td>
                        <button class="icon-trash"><a
                                href="<?php echo SITEURL; ?>admin/page/delete-kh.php?STT=<?php echo $STT; ?>"><i
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