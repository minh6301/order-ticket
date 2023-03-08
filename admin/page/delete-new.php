<?php
    require'../config/constants.php';

$STT = $_GET['STT'];

$sql = "DELETE FROM tbl_new WHERE STT=$STT";

$res = mysqli_query($conn, $sql);

if($res==TRUE)
{
    $_SESSION['delete-admin']="Xóa thành công";
    header('location:'.SITEURL.'admin/page/new.php');
}
else
{
    $_SESSION['delete-admin']="Xóa không thành công";
    header('location:'.SITEURL.'admin/page/delete-new.php');
}

?>