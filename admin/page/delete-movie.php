<?php
    require'../config/constants.php';

$STT = $_GET['STT'];

$sql = "DELETE FROM tbl_movie WHERE STT=$STT";

$res = mysqli_query($conn, $sql);

if($res==TRUE)
{
    $_SESSION['delete-admin']="Xóa thành công";
    header('location:'.SITEURL.'admin/page/movie.php');
}
else
{
    $_SESSION['delete-admin']="Xóa không thành công";
    header('location:'.SITEURL.'admin/page/movie.php');
}

?>