<div class="thongtingiaohang" id="id_thongtin">
    <div class="thongtin">
        <h2 class="title"> Thông Tin Giao Hàng </h2>
        <a style="cursor:pointer"><button class="btn btn-danger close">X</button></a>
        
    <div class="clear"></div>

    <form method="POST" name="form_giaohang" class="form_thongtin">
        <div class="form-group">
            <label>Họ Và Tên</label>
            <input type="text" class="form-control" name="GH_hoTen" id="id_hoTen" placeholder="nhập họ và tên">
        </div>
        <div class="form-group">
            <label>Địa Chỉ</label>
            <input type="text" class="form-control" name="GH_DC" id="id_DC" placeholder="nhập địa chỉ" >
        </div>
        <div class="form-group">
            <label>Số Điện Thoại</label>
            <input type="text" class="form-control" name="GH_SDT" id="id_SDT" placeholder="nhập số điện thoại (gồm 10 số)">
        </div>
        <div class="form-group">
            <label style="color: black; top: 5px; position: relative; left: 3px;">Số Lượng Đặt <i class='fas fa-equals' style='font-size:14px;color:red'> 1</i> ( Khách Hàng Vãng Lai )<i class='fas fa-exclamation-triangle' style='font-size:24px;color:red'></i></label>
        </div>
        <input type="hidden" id="maSP_NoUser" value="<?php echo $_GET['id'];?>">
        <button type="button" class="btn btn-secondary gui_thongtin" id="gui_thongtin" value="Gữi">Xác Nhận</button>
    </form>
    </div>
</div>