<?php require'../page/login-admin.php';?>
<div class="header">
    <div class="grid-header">
        <div class="header-menu">
            <img src="https://www.cinestar.com.vn/pictures/moi/9Logo/white-2018.png" alt="">
        </div>
        <div class="header-user">
            <?php
                if(!isset($_SESSION['username']))
                {
                    $_SESSION['login-check']="";
                    ?>
            <div class="header-username">
                <i class="fa fa-user-circle fa-icon"></i>
            </div>
            <?php
                }
                else
                {
                    ?>
            <div class="header-username">
                <i class="fa fa-user-circle fa-icon"> Xin chào, <?=$_SESSION['username'];?></i>
            </div>
            <?php
                }
            
            ?>

        </div>
    </div>
</div>

<div class="main">
    <div class="grid-main">
        <?php require'../page/sidebar.php';?>