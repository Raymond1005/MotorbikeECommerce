<div class="Fform_suaSP">
    <h1 class="Fform_suaSP_title">Nhập Thông Tin Sản Phẩm Cần Sửa</h1>
    <form action="modules/xuly_admin.php?ma_SP_sua=<?php echo $_GET['ma_SP_sua']?>" method="POST" enctype="multipart/form-data" >
    <small class="form-text warning_title" >Bỏ Trống Trường Không Cần Sửa</small>
        <table class="table table-bordered Fform_sua">
            <tbody>
                <tr>
                    <th scope="col" class="Fform_sua_th">Tên Sản Phẩm</th>
                    <td scope="col" class="Fform_sua_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_SPten_sua" class="form-control" id="FSP_SPten_sua" placeholder="Nhập Tên Sản Phẩm">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_sua_th">Giá Bán</th>
                    <td scope="col" class="Fform_sua_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_SPgia_sua" class="form-control" id="FSP_SPgia_sua" placeholder="Nhập Giá Sản Phẩm">
                        </div>
                    </td>
                </tr>
                 <tr>
                    <th scope="col" class="Fform_sua_th">Số Lượng </th>
                    <td scope="col" class="Fform_sua_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_SPsoluong_sua" class="form-control" id="FSP_SPsoluong_sua" placeholder="Nhập Số Lượng Sản Phẩm">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_sua_th">Hình Ảnh</th>
                    <td scope="col" class="Fform_sua_td">
                        <div class="form-group">
                            <input type="file" name = "na_FSP_filename_sua" class="form-control-file" id="FSP_filename_sua" >
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_sua_th">Mã Nhóm</th>
                    <td scope="col" class="Fform_sua_td">
                        <select name = "na_FSP_SPmanhom_sua" class="form-control" id="FSP_SPmanhom_sua">
                            <option value="">Chọn Nhóm</option>
                            <option value="CT">Côn Tay</option>
                            <option value="MT">Mô Tô</option>
                            <option value="XS">Xe Số</option>
                            <option value="TG">Tay Ga</option>
                        </select>
                        <small class="form-text text-muted">Bấm Lựa Chọn OPTION Mã Nhóm</small>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_sua_th">Thông Số Kỹ Thuật</th>
                    <td scope="col" class="Fform_sua_td">
                        <table class="table table-bordered Fform_sua_TSKT">
                            <tbody>
                                <tr>
                                    <th scope="col" class="Fform_sua_TSKT_th">Động Cơ </th>
                                    <td scope="col" class="Fform_sua_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPdongco_sua" class="form-control" id="FSP_TSSPdongco_sua" placeholder="Nhập Thông Số Động Cơ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_sua_TSKT_th">Công Suất</th>
                                    <td scope="col" class="Fform_sua_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPcongsuat_sua" class="form-control" id="FSP_TSSPcongsuat_sua"
                                                placeholder="Nhập Thông Số Công Suất">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_sua_TSKT_th">Dung Tích Xy Lanh</th>
                                    <td scope="col" class="Fform_sua_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPxylanh_sua" class="form-control" id="FSP_TSSPxylanh_sua"
                                                placeholder="Nhập Thông Số Dung Tích Xy Lanh">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_sua_TSKT_th">Khối Lượng Bản Thân</th>
                                    <td scope="col" class="Fform_sua_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPkhoiluong_sua" class="form-control" id="FSP_TSSPkhoiluong_sua"
                                                placeholder="Nhập Thông Số Khối Lượng Bản Thân">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_sua_TSKT_th">Độ Cao Yên</th>
                                    <td scope="col" class="Fform_sua_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPdocaoyen_sua" class="form-control" id="FSP_TSSPdocaoyen_sua"
                                                placeholder="Nhập Thông Số Độ Cao Yên">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_sua_TSKT_th">Dung Tích Bình Xăng</th>
                                    <td scope="col" class="Fform_sua_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPbinhxang_sua" class="form-control" id="FSP_TSSPbinhxang_sua"
                                                placeholder="Nhập Thông Số Dung Tích Bình Xăng">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_sua_TSKT_th">Hộp Số</th>
                                    <td scope="col" class="Fform_sua_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPhopso_sua" class="form-control" id="FSP_TSSPhopso_sua"
                                                placeholder="Nhập Thông Số Cấp Hộp Số">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_sua_th">Đặc Điểm</th>
                    <td scope="col" class="Fform_sua_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_SPdacdiem_sua" class="form-control" id="FSP_SPdacdiem_sua" placeholder="Nhập Đặc Điểm(Nếu Có)">
                        </div>
                    </td>
                </tr> 
            </tbody>
        </table>
        <button type="submit" name ="na_btn_Fform_suaSP" class="btn btn-primary btn_Fform_suaSP" >Xác Nhận</button>
    </form>
</div>