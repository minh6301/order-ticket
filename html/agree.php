<?php

    //  if(!isset($_SESSION['playhouses'])) $_SESSION['playhouses']=[]; 
    //  if(isset($_GET['del'])&&($_GET['del']>=0)) 
    // {
    //     array_splice($_SESSION['playhouses'], $_GET['del'],1);
    // }

     if(isset($_POST['save_session']))
    {
        $movie_name = $_POST['moviename'];
        $address = $_POST['address']; 
        $times = $_POST['time']; 
        $date = $_POST['date']; 
        $gia = $_POST['gia']; 

        $_SESSION['moviename'] = $movie_name;
        $_SESSION['time']=$times;
        $_SESSION['address']=$address;
        $_SESSION['date']=$date;
        $_SESSION['gia']=$gia;

        // $info = 0;

        // // for($i = 0; $i < sizeof($_SESSION['playhouses']); $i++)
        // // {
        // //     if($_SESSION['playhouses'][$i][0]==$movie_name)
        // //     {
        // //         $fl=1;
        // //         break;
        // //     }
        // // }

        // if($info==0)
        // {
        //     $info = [$movie_name,$address,$times,$date];
        //     $_SESSION['playhouses'][]=$info;
        // }
    }
     
    function buyTicket()
    {
        if(isset($_SESSION['moviename']))
        {
            ?>
                <div class="movie_info">
                    <h5> <?=$_SESSION['address'];?> | <?=$_SESSION['moviename'];?> </h5>
                    <h5> <?=$_SESSION['date'];?> | <?=$_SESSION['time'];?></h5>
                </div>
            <?php
        }
                
    }

    if(isset($_POST['save']))
    {
        $chair = $_POST['chair'];
        $movie_name = $_POST['moviename'];
        $address = $_POST['address']; 
        $times = $_POST['time']; 
        $date = $_POST['date']; 
        $gia = $_POST['gia']; 
        $chairs = implode("," ,$chair);

        $sql1 = "INSERT INTO tbl_ticket SET
            moviename = '$movie_name',
            gia = '$gia',
            time = '$times',
            date = '$date',
            name = '$chairs'
        ";
        $res2 = mysqli_query($conn, $sql1);
        
        if($res2==true)
        {
            $_SESSION['moviename'] = $movie_name;
            $_SESSION['time']=$times;
            $_SESSION['address']=$address;
            $_SESSION['date']=$date;
            $_SESSION['gia']=$gia;
            $_SESSION['chairs']=$chairs;
            header("Location:".SITEURL."html/bill.php");
        }
        else
        {
            header("Location:".SITEURL."html/buy-ticket.php");
        }
    }

    function bill(){
        if(isset($_SESSION["moviename"]))
        {
            ?>
                <div>
                        <h5>Thông tin vé bạn đã chọn</h5><br>
                        <div>
                            <strong>Phim :</strong> <?=$_SESSION['moviename'];?>
                        </div>
                        <div>
                            <strong>Ghế :</strong><?=$_SESSION['chairs'];?>
                        </div>
                        <div>
                            <strong>Ngày :</strong><?=$_SESSION['date'];?>
                        </div>
                        <div>
                            <strong>Giờ chiếu :</strong><?=$_SESSION['time'];?>
                        </div>
                        <div>
                            <strong>Rạp :</strong><?=$_SESSION['address'];?>
                        </div>
                    </div>
            <?php
        }
    }

    

?>