<?php 
    require'../admin/config/constants.php';
    require'../html/login-kh.php';
    require'../html/check-login.php';
    require'../html/agree.php';
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
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="../css/ticket.css">
    <title>Document</title>
</head>

<body>
    <?php require'../html/header.php';?>

    <div class="container">
        <div class="grid_container">

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
            <div class="title">
                <h3>Đặt vé Online</h3>
            </div>
            <form action="" method="post">
                <?php 
                    showgiohang();
                ?>
                <div class="select_space">
                    <h5>Người / Ghế</h5>
                    <div id="img_screen">
                        <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/bg-cgv/bg-screen.png" alt="">
                    </div>
                    <div class="space">
                        <!-- hang ghe A -->
                        <div class="row_space">
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A1">
                                <span class="checkmark">A1</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A2">
                                <span class="checkmark">A2</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A3">
                                <span class="checkmark">A3</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A4">
                                <span class="checkmark">A4</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A5">
                                <span class="checkmark">A5</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A6">
                                <span class="checkmark">A6</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A7">
                                <span class="checkmark">A7</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A8">
                                <span class="checkmark">A8</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A9">
                                <span class="checkmark">A9</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A10">
                                <span class="checkmark">A10</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A11">
                                <span class="checkmark">A11</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A12">
                                <span class="checkmark">A12</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="A13">
                                <span class="checkmark">A13</span>
                            </label>
                        </div>
                        <!-- Hang ghe B -->
                        <div class="row_space">
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B1">
                                <span class="checkmark">B1</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B2">
                                <span class="checkmark">B2</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B3">
                                <span class="checkmark">B3</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B4">
                                <span class="checkmark">B4</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B5">
                                <span class="checkmark">B5</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B6">
                                <span class="checkmark">B6</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B7">
                                <span class="checkmark">B7</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B8">
                                <span class="checkmark">B8</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B9">
                                <span class="checkmark">B9</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B10">
                                <span class="checkmark">B10</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B11">
                                <span class="checkmark">B11</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B12">
                                <span class="checkmark">B12</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="B13">
                                <span class="checkmark">B13</span>
                            </label>
                        </div>
                        <!-- hang ghe C -->
                        <div class="row_space">
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C1">
                                <span class="checkmark">C1</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C2">
                                <span class="checkmark">C2</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C3">
                                <span class="checkmark">C3</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C4">
                                <span class="checkmark">C4</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C5">
                                <span class="checkmark">C5</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C6">
                                <span class="checkmark">C6</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C7">
                                <span class="checkmark">C7</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C8">
                                <span class="checkmark">C8</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C9">
                                <span class="checkmark">C9</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C10">
                                <span class="checkmark">C10</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C11">
                                <span class="checkmark">C11</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C12">
                                <span class="checkmark">C12</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="C13">
                                <span class="checkmark">C13</span>
                            </label>
                        </div>
                        <!-- hang ghe D -->
                        <div class="row_space">
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D1">
                                <span class="checkmark">D1</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D2">
                                <span class="checkmark">D2</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D3">
                                <span class="checkmark">D3</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D4">
                                <span class="checkmark">D4</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D5">
                                <span class="checkmark">D5</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D6">
                                <span class="checkmark">D6</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D7">
                                <span class="checkmark">D7</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D8">
                                <span class="checkmark">D8</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D9">
                                <span class="checkmark">D9</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D10">
                                <span class="checkmark">D10</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D11">
                                <span class="checkmark">D11</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D12">
                                <span class="checkmark">D12</span>
                            </label>
                            <label class="row_chair">
                                <input type="checkbox" name="chair[]" value="D13">
                                <span class="checkmark">D13</span>
                            </label>
                        </div>
                    </div>
                    <div class="note_select_space">
                        <div>
                            <div class="note">
                                <div class="selecting_space">
                                </div>
                                <div> Đang chọn</div>
                            </div>
                            <div class="note">
                                <div class="selected_space">
                                </div>
                                <div> Đã chọn</div>
                            </div>
                        </div>
                        <div>
                            <div class="note">
                                <div class="chair_space-normal">
                                </div>
                                <div> Ghế thường</div>
                            </div>
                            <div class="note">
                                <div class="chair_space-vip"></div>
                                <div> Ghế VIP</div>
                            </div>
                        </div>

                    </div>
                    <div class="accept_ticket">
                        <div class="select_chair">
                            <ol></ol>
                            <div id="log"></div>
                        </div>
                        <div class="price_ticket">
                            <!-- <?php
                                if(isset($_SESSION['gia']))
                                {
                                    ?>
                            <p>Giá 1 vé :
                                <?=$_SESSION['gia'];?> VND
                            </p>
                            <?php
                                }
                            ?> -->
                            <p id="price">
                            </p>
                        </div>
                        <div>
                            <input type="hidden" name="moviename" value="<?=$_SESSION['moviename'];?>" />
                            <input type="hidden" name="address" value="<?=$_SESSION['address'];?>" />
                            <input type="hidden" name="date" value="<?=$_SESSION['date'];?>" />
                            <input type="hidden" name="time" value="<?=$_SESSION['time'];?>" />
                            <input type="submit" name="save" value="Đặt vé">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="../js/ticket.js"></script>
    </div>

    <?php require'../html/footer.php';?>
</body>

</html>

<?php
    
?>