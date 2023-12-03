<div class="loginform">
    <div class="login">
        <h1 class="title_dangnhap"> Đăng Nhập </h1>
        <a style="cursor:pointer"><button class="btn btn-danger close_dangnhap">X</button></a>
        <form action ="modules/xuly_dangnhap.php" method ="POST" class="form-login">
            <div class="form-group">
                <input type="text" class="form-control" name="DN_TK" id="id_DN_TK"
                    placeholder="Nhập Tài Khoản">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="DN_MK" id="id_DN_MK" placeholder="Nhập Mật Khẩu">
            </div>
            
            <button type="submit" class="btn btn-success gui_dangnhap" id="gui_dangnhap">Đăng Nhập</button>
        </form>
    </div>
</div>
