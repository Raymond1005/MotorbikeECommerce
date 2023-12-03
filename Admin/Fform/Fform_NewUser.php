<div class="Fform_NewUser">
    <?php 
        if(isset($_GET['user_added']) && $_GET['user_added'] != ''){
            $user_added = $_GET['user_added'];
            if($user_added == "1"){
                echo '<script language="'.'javascript'.'">alert("'.'Tài Khoản Đã Được Cấp Mới!!'.'")</script>';
            }else {
                echo '<script language="'.'javascript'.'">alert("'.'Không Được Thay Đổi Tài Khoản Admin!!'.'")</script>';
            }
        }
    ?>
    <h1 class="Fform_NewUser_title">Cấp Mới Tài Khoản Nhân Viên</h1>
    <form action="modules/xuly_admin.php" method="POST" enctype="multipart/form-data" onsubmit="return kiemTraMatKhau_NV();">
        <table class="table table-bordered Fform_NewU">
            <tbody>
                <tr>
                    <th scope="col" class="Fform_newTK_th">Mã Nhân Viên</th>
                    <td scope="col" class="Fform_newTK_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_newTK_maNV" class="form-control" id="FSP_newTK_maNV" placeholder="Nhập Mã Nhân Viên">
                        </div>
                    </td>
                </tr>
                 <tr>
                    <th scope="col" class="Fform_newTK_th">Tài Khoản</th>
                    <td scope="col" class="Fform_newTK_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_newTK_taikhoanNV" class="form-control" id="FSP_newTK_taikhoanNV" placeholder="Nhập Tài Khoản">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_newTK_th">Mật Khẩu Mới</th>
                    <td scope="col" class="Fform_newTK_td">
                        <div class="form-group">
                            <input type="password" name = "na_FSP_newTK_matkhauNV" class="form-control" id="FSP_newTK_matkhauNV" placeholder="Nhập Mật Khẩu Mới">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_newTK_th">Nhập Lại Mật Khẩu</th>
                    <td scope="col" class="Fform_newTK_td">
                        <div class="form-group">
                            <input type="password" name = "na_FSP_newTK_matkhaumoiNV" class="form-control" id="FSP_newTK_matkhaumoiNV" placeholder="Nhập Lại Mật Khẩu Mới">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" name ="na_btn_Fform_newNV" class="btn btn-primary btn_Fform_newNV" >Xác Nhận</button>
    </form>
</div>