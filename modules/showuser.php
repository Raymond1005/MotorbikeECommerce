<div class="show_login">
    <div class="showuser ">
        <form action="modules/xuly_dangnhap.php" method="post" class="daidien_user">
            <label class="label_showuser">Xin Chào<a href="index.php?xem=thongtinkhachhang#id_thongtin_kh" id="id_showuser" style="text-decoration:none;"><strong> <?php echo $_SESSION['hoten'];?> </strong></a></label>
            <input hidden name ="DX" value="dangxuat">
            <button type="submit" class="btn btn-warning">Đăng Xuất</button>
        </form> 
        <div class="icon_giohang">
            <a href="index.php?xem=thongtinkhachhang#id_thongtin_kh" id="into_cart"><i class="material-icons" style="font-size:30px">shopping_cart</i></a>
        </div>
    </div>
    <div class="clear_show_login"></div>
</div>