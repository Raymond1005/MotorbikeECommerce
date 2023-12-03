<div class="dangky_taikhoan">
    <div class="dangky">
        <a style="cursor:pointer"><button class="btn btn-danger close_dangky">X</button></a>
        <h1 class="title_dangky1"> Tạo tài khoản </h1>

        <form class="form_dangky">
            <div class="taotaikhoan">
                <div class="form-group">
                    <input type="text" class="form-control" name="DK_taikhoan" id="id_DK_TK"
                        placeholder="nhập tên tài khoản">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="DK_MK" id="id_DK_MK" placeholder="nhập mật khẩu">
                </div>
            </div>

            <h5 class="title_dangky2"> Thông tin </h5>
            <div class="thongtin_nguoidung">
                <div class="form-group">
                    <input type="text" class="form-control" name="DK_hoTen" id="id_DK_hoTen"
                        placeholder="nhập họ và tên">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="DK_namsinh" id="id_DK_namsinh"
                        placeholder="nhập năm sinh">
                </div>
                <div class="input-group-text form-group " >
                    <label>Giới tính:&nbsp;</label>
                    <input type="radio" name="gioitinh" value="nam">&nbsp;Nam&nbsp;</input>
                    <input type="radio" name="gioitinh" value="nu">&nbsp;Nữ&nbsp;</input>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="DK_DC" id="id_DK_DC" placeholder="nhập địa chỉ">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="DK_SDT" id="id_DK_SDT"
                        placeholder="nhập số điện thoại (gồm 10 số)">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="DK_email" id="id_DK_email" placeholder="nhập email">
                </div>

            </div>

            <button type="button" class="btn btn-danger gui_dangky" id="gui_dangky">Đăng Ký</button>
        </form>
    </div>
</div>