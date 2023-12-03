<div class="Fform_suaNV">
    <h1 class="Fform_suaNV_title">Nhập Thông Tin Nhân Viên Cần Sửa</h1>
    <form action="modules/xuly_admin.php?ma_NV_sua=<?php echo $_GET['ma_NV_sua']?>" method="POST" enctype="multipart/form-data" onsubmit="return kiemTraSDT_suaNV();">
    <small class="form-text warning_NV_title" >Bỏ Trống Trường Không Cần Sửa</small>
        <table class="table table-bordered Fform_sua">
            <tbody>
                <tr>
                    <th scope="col" class="Fform_sua_NV_th">Tên Nhân Viên</th>
                    <td scope="col" class="Fform_sua_NV_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_NVten_sua" class="form-control" id="FSP_NVten_sua" placeholder="Nhập Tên Nhân Viên">
                        </div>
                    </td>
                </tr>
                 <tr>
                    <th scope="col" class="Fform_sua_NV_th">Địa Chỉ </th>
                    <td scope="col" class="Fform_sua_NV_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_NVdiachi_sua" class="form-control" id="FSP_NVdiachi_sua" placeholder="Nhập Địa Chỉ Nhân Viên">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_sua_NV_th">Số Điện Thoại</th>
                    <td scope="col" class="Fform_sua_NV_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_NVSDT_sua" class="form-control" id="FSP_SPSDT_sua" placeholder="Nhập Số Điện Thoại (Gồm 10 số)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_sua_NV_th">Vai Trò</th>
                    <td scope="col" class="Fform_sua_NV_td">
                        <select name = "na_FSP_NVvaitro_sua" class="form-control" id="FSP_NVvaitro_sua">
                            <option value="">Chọn Vai Trò</option>
                            <option value="admin">Admin</option>
                            <option value="nhanvien">Nhân Viên</option>
                        </select>
                        <small class="form-text text-muted">Bấm Lựa Chọn OPTION vai trò</small>
                    </td>
                </tr> 
            </tbody>
        </table>
        <button type="submit" name ="na_btn_Fform_suaNV" class="btn btn-primary btn_Fform_suaNV" >Xác Nhận</button>
    </form>
</div>