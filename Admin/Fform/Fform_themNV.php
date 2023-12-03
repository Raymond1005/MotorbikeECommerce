<div class="Fform_themNV">
    <h1 class="Fform_themNV_title">Nhập Thông Tin Nhân Viên</h1>
    
    <form action="modules/xuly_admin.php" method="POST" enctype="multipart/form-data" onsubmit="return kiemTraRong_themNV()">
        <table class="table table-bordered Fform_add_NV">
            <tbody>
                <tr>
                    <th scope="col" class="Fform_add_NV_th">Tên Nhân Viên</th>
                    <td scope="col" class="Fform_add_NV_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_NVten" class="form-control" id="FSP_NVten" placeholder="Nhập Tên Nhân Viên">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_add_NV_th">Địa Chỉ</th>
                    <td scope="col" class="Fform_add_NV_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_NVdiachi" class="form-control" id="FSP_NVdiachi" placeholder="Nhập Địa Chỉ Nhân Viên">
                        </div>
                    </td>
                </tr>
                 <tr>
                    <th scope="col" class="Fform_add_NV_th">Số Điện Thoại</th>
                    <td scope="col" class="Fform_add_NV_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_NVSDT" class="form-control" id="FSP_SPSDT" placeholder="Nhập Số Điện Thoại (Gồm 10 số)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_add_NV_th">Vai Trò</th>
                    <td scope="col" class="Fform_add_NV_td">
                        <select name = "na_FSP_NVvaitro" class="form-control" id="FSP_NVvaitro">
                            <option value="">Chọn Vai Trò</option>
                            <option value="admin">Admin</option>
                            <option value="nhanvien">Nhân Viên</option>
                        </select>
                        <small class="form-text text-muted">Bấm Lựa Chọn OPTION vai trò</small>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_add_NV_th">Tài Khoản</th>
                    <td scope="col" class="Fform_add_NV_td">
                        <div class="form-group">
                        <input type="text" name = "na_FSP_NVtaikhoan" class="form-control" id="FSP_NVtaikhoan" placeholder="Nhập Tài Khoản">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_add_NV_th">Mật Khẩu</th>
                    <td scope="col" class="Fform_add_NV_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_NVmatkhau" class="form-control" id="FSP_NVmatkhau" placeholder="Nhập Mật Khẩu">
                        </div>
                    </td>
                </tr> 
            </tbody>
        </table>
        <button type="submit" name ="na_btn_Fform_themNV" class="btn btn-primary btn_Fform_themNV" >Xác Nhận</button>
    </form>
</div>