<div class="Fheader">
    <?php
         $Fusername = $_SESSION['Fuser'];
         $sql = "select * from nhanvien where Fusername = '$Fusername'"; 
         $query =  mysqli_query($conn, $sql);

        foreach($query as $key => $value){ 
    ?>

    <div class="Fheader_left">
        <h2>Administrator</h2>
    </div>
    <div class="Fheader_right">
        <div class="nav menu">
            <ul class="nav nav-pills ">
                <li class="nav-item "><i class='fas fa-reply' style='font-size:12px;color:white;float:left; line-height:60px; margin-left: 5px'></i><a href="http://localhost:8888/Toan(B1706541)-NLCN/index.php" class="nav-link " style="margin-left: 10px">Về trang web</a></li>
            </ul>

            <div class="show_Fuser">
                Quyền hạn: <?php echo $value['chucvu'] ?>
                <form action="modules/Fxulylogin.php" method="POST" style="float:right;">
                    <input hidden name ="FDX" value="Fdangxuat">
                    <button type="submit" > Đăng Xuất </button>
                </form>
            </div>
        </div>
    </div>
    <?php
            }          
    ?>
    <div class="Fheader_float" style="clear:both;"></div>
</div>