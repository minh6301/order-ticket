<div class="select_movie">
                <div class="order_ticket">
                    <div>
                        <img src="http://www.dabacocine.com/Content/images/template/ticket-icon1.png" alt="" width="50"
                            height="50">
                    </div>
                    <div style="font-size: 22px; color: white;">
                        <span>Đặt vé Online</span>
                    </div>
                </div>
                <div class="select_list_movie">
                    <div class="group_select_movie">
                        <select name="" id="">
                            <option value="">-- Chọn phim --</option>
                            <?php
                                    $sql = "SELECT * FROM tbl_movie WHERE movieactive='Phim đang chiếu' AND active='Hoạt động' LIMIT 10 ";
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
                                                $present = $rows['present'];
                                                $movie_active = $rows['movieactive'];
                                                $theloai = $rows['theloai'];
                                                $loaiphim = $rows['loaiphim'];
                                                $gia = $rows['gia'];
                                                $active = $rows['active'];
                                                $image_name = $rows['image'];
                                ?>
                                <option value=""><?php echo $movie_name;?></option>
                                <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                        
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="group_select_movie">
                        <select name="" id="">
                            <option value="">-- Chọn rạp --</option>
                            <?php
                                    $sql = "SELECT * FROM tbl_movie WHERE movieactive='Phim đang chiếu' AND active='Hoạt động' LIMIT 10 ";
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
                                                $present = $rows['present'];
                                                $movie_active = $rows['movieactive'];
                                                $theloai = $rows['theloai'];
                                                $loaiphim = $rows['loaiphim'];
                                                $gia = $rows['gia'];
                                                $active = $rows['active'];
                                                $image_name = $rows['image'];
                                ?>
                                <option value=""><?php echo $address;?></option>
                                <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                        
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="group_select_movie">
                        <select name="" id="">
                            <option value="">-- Chọn ngày--</option>
                            <?php
                                    $sql = "SELECT * FROM tbl_movie WHERE movieactive='Phim đang chiếu' AND active='Hoạt động' LIMIT 10 ";
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
                                                $present = $rows['present'];
                                                $movie_active = $rows['movieactive'];
                                                $theloai = $rows['theloai'];
                                                $loaiphim = $rows['loaiphim'];
                                                $gia = $rows['gia'];
                                                $active = $rows['active'];
                                                $image_name = $rows['image'];
                                ?>
                                <option value=""><?php echo $movie_name;?></option>
                                <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                        
                                    }
                                ?>
                        </select>
                    </div>
                    <div class="group_select_movie">
                        <select name="" id="">
                            <option value="">-- Chọn suất chiếu --</option>
                            <?php
                                    $sql = "SELECT * FROM tbl_movie WHERE movieactive='Phim đang chiếu' AND active='Hoạt động' LIMIT 10 ";
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
                                                $present = $rows['present'];
                                                $movie_active = $rows['movieactive'];
                                                $theloai = $rows['theloai'];
                                                $loaiphim = $rows['loaiphim'];
                                                $gia = $rows['gia'];
                                                $active = $rows['active'];
                                                $image_name = $rows['image'];
                                ?>
                                <option value=""><?php echo $time;?></option>
                                <?php
                                            }
                                        }
                                    }
                                    else
                                    {
                                        
                                    }
                                ?>
                        </select>
                    </div>
                </div>
            </div>
            <br>