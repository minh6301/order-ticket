<?php
    require'../config/constants.php';

$STT = $_GET['STT'];

$sql = "DELETE FROM tbl_cinema WHERE STT=$STT";

$res = mysqli_query($conn, $sql);

if($res==TRUE)
{
    header('location:'.SITEURL.'admin/page/cinema.php');
}
else
{
    header('location:'.SITEURL.'admin/page/delete-cinema.php');
}

?>