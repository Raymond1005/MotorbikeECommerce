<div class="Fform_themSP">
    <h1 class="Fform_themSP_title">Nhập Thông Tin Sản Phẩm</h1>
    
    <form action="modules/xuly_admin.php" method="POST" enctype="multipart/form-data" onsubmit="return kiemTraRong_themSP()">
        <table class="table table-bordered Fform_add">
            <tbody>
                <tr>
                    <th scope="col" class="Fform_add_th">Tên Sản Phẩm</th>
                    <td scope="col" class="Fform_add_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_SPten" class="form-control" id="FSP_SPten" placeholder="Nhập Tên Sản Phẩm">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_add_th">Giá Bán</th>
                    <td scope="col" class="Fform_add_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_SPgia" class="form-control" id="FSP_SPgia" placeholder="Nhập Giá Sản Phẩm">
                        </div>
                    </td>
                </tr>
                 <tr>
                    <th scope="col" class="Fform_add_th">Số Lượng </th>
                    <td scope="col" class="Fform_add_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_SPsoluong" class="form-control" id="FSP_SPsoluong" placeholder="Nhập Số Lượng Sản Phẩm">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_add_th">Hình Ảnh</th>
                    <td scope="col" class="Fform_add_td">
                        <div class="form-group">
                            <input type="file" name = "na_FSP_filename" class="form-control-file" id="FSP_filename" >
                        </div>
                        <small class="form-text text-muted">Vui Lòng Chọn Upload File</small>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_add_th">Mã Nhóm</th>
                    <td scope="col" class="Fform_add_td">
                        <select name = "na_FSP_SPmanhom" class="form-control" id="FSP_SPmanhom">
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
                    <th scope="col" class="Fform_add_th">Thông Số Kỹ Thuật</th>
                    <td scope="col" class="Fform_add_td">
                        <table class="table table-bordered Fform_add_TSKT">
                            <tbody>
                                <tr>
                                    <th scope="col" class="Fform_add_TSKT_th">Động Cơ </th>
                                    <td scope="col" class="Fform_add_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPdongco" class="form-control" id="FSP_TSSPdongco" placeholder="Nhập Thông Số Động Cơ">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_add_TSKT_th">Công Suất</th>
                                    <td scope="col" class="Fform_add_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPcongsuat" class="form-control" id="FSP_TSSPcongsuat"
                                                placeholder="Nhập Thông Số Công Suất">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_add_TSKT_th">Dung Tích Xy Lanh</th>
                                    <td scope="col" class="Fform_add_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPxylanh" class="form-control" id="FSP_TSSPxylanh"
                                                placeholder="Nhập Thông Số Dung Tích Xy Lanh">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_add_TSKT_th">Khối Lượng Bản Thân</th>
                                    <td scope="col" class="Fform_add_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPkhoiluong" class="form-control" id="FSP_TSSPkhoiluong"
                                                placeholder="Nhập Thông Số Khối Lượng Bản Thân">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_add_TSKT_th">Độ Cao Yên</th>
                                    <td scope="col" class="Fform_add_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPdocaoyen" class="form-control" id="FSP_TSSPdocaoyen"
                                                placeholder="Nhập Thông Số Độ Cao Yên">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_add_TSKT_th">Dung Tích Bình Xăng</th>
                                    <td scope="col" class="Fform_add_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPbinhxang" class="form-control" id="FSP_TSSPbinhxang"
                                                placeholder="Nhập Thông Số Dung Tích Bình Xăng">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class="Fform_add_TSKT_th">Hộp Số</th>
                                    <td scope="col" class="Fform_add_TSKT_td">
                                        <div class="form-group">
                                            <input type="text" name = "na_FSP_TSSPhopso" class="form-control" id="FSP_TSSPhopso"
                                                placeholder="Nhập Thông Số Cấp Hộp Số">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th scope="col" class="Fform_add_th">Đặc Điểm</th>
                    <td scope="col" class="Fform_add_td">
                        <div class="form-group">
                            <input type="text" name = "na_FSP_SPdacdiem" class="form-control" id="FSP_SPdacdiem" placeholder="Nhập Đặc Điểm(Nếu Có)">
                        </div>
                    </td>
                </tr> 
            </tbody>
        </table>
        <button type="submit" name ="na_btn_Fform_themSP" class="btn btn-primary btn_Fform_themSP" >Xác Nhận</button>
    </form>
</div>