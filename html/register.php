<div class="register_content">
    <?php
                if(!isset($_SESSION['username']))
                {
                    $_SESSION['login-check']=" ";
                    ?>
    <div class="register_member">
        <div class="member_signin">
            <a href="<?php echo SITEURL;?>html/sign-up.php"><i class="fas fa-user register_icon"></i> ĐĂNG
                KÝ</a>
        </div>
        <div class="member_login">
            <a href="<?php echo SITEURL;?>html/login.php"><i class="fas fa-sign-in-alt register_icon"></i>
                ĐĂNG NHẬP</a>
        </div>
    </div>
    <?php
                }
                else
                {
                    
                    ?>
    <div class="register_member">
        <div class="member_signin">
            <a href="#"><i class="fas fa-user register_icon"></i> Xin chào <?=$_SESSION['username'];?></a>
        </div>
        <div class="member_login">
            <a href="<?php echo SITEURL;?>html/log-out.php"><i class="fas fa-sign-in-alt register_icon"></i>
                Đăng xuất</a>
        </div>
    </div>
    <?php
                }
            ?>

    <div class="regist_hotline">
        <a href="#"><i class="fas fa-phone-volume register_icon"></i> 028 7300 8881</a>
    </div>
</div>