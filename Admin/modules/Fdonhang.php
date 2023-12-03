<div class="Fdonhang">
    <div class="Fdonhang_top">
        <h1 class="Fform_QLSP_title">Quản Lý Đơn Hàng</h1>
        <form class="form" action="modules/Floc_donhang.php" method="GET" onsubmit="return Fdathang_loc();">
            <select class="form-control my-2 " name="na_Flocdonhang_option"
                style="width: 135px;float: right;position:relative; left: -130px;">
                <option selected value="">Chọn Trạng Thái</option>
                <option value="0">Chưa Giao</option>
                <option value="1">Đã Giao</option>
                <option value="2">Đã Hủy</option>
            </select>

            <button class="btn btn-primary my-2" style="float: right;position:relative; left: 130px;" type="submit"
                name="na_Floc_DH">Lọc Đơn Hàng</button>
        </form>
    </div>

    <?php 
        if(isset($_GET['Floc_DH_va']) && $_GET['Floc_DH_va'] != ''){
            $Floc_DH_va = $_GET['Floc_DH_va'];

            $sql = "select * from dathang where trangthai = '$Floc_DH_va'";
            $query = mysqli_query($conn, $sql); 
        ?>
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th_DH">STT</th>
                <th scope="col" class="FSP_th_DH">Mã Đơn Hàng</th>
                <th scope="col" class="FSP_th_DH">Mã Khách Hàng</th>
                <th scope="col" class="FSP_th_DH">Tên Khách Hàng</th>
                <th scope="col" class="FSP_th_DH">Ngày Đặt Hàng</th>
                <th scope="col" class="FSP_th_DH">Trạng Thái</th>
                <th scope="col" class="FSP_th_DH">Tác Vụ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $STT = 1;
         foreach($query as $key => $value){
            $sql_KH_DH = "select * from khachhang where maKH = '$value[maKH]'";
            $query_KH_DH = mysqli_query($conn, $sql_KH_DH); 
    ?>
            <tr>
                <th scope="row" class="FSP_col_DH"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col_DH"><?php echo $value['madonDH'] ?></td>
                <td scope="col" class="FSP_col_DH"><?php echo $value['maKH'] ?></td>
                <?php 
                    foreach($query_KH_DH as $key_KH_DH => $value_KH_DH){
                ?>
                <td scope="col" class="FSP_col_DH"><?php echo $value_KH_DH['hotenKH'] ?></td>
                <?php 
                   }
                ?>
                <td scope="col" class="FSP_col_DH"><?php echo $value['ngayDH'] ?></td>
                <td scope="col" class="FSP_col_DH">
                    <?php 
                        if($value['trangthai'] == '0'){
                    ?>

                    <span class="btn btn-danger">Chưa Giao</span>

                    <?php 
                        }elseif ($value['trangthai'] == '1'){
                    ?>

                    <span class="btn btn-success">Đã Giao</span>

                    <?php 
                        }else {
                    ?>

                    <span class="btn btn-warning">Đã Hủy</span>
                    <?php 
                        }
                    ?>
                </td>
                <td scope="col" class="FSP_col_DH_TV">
                    <?php 
                        if($value['trangthai'] != '2' && $value['trangthai'] != '1'){
                    ?>
                    <a href="modules/xuly_admin.php?ma_DH_duyet=<?php echo $value['madonDH']?>" class="btn_Fduyet"><i
                            class='fas fa-thumbtack' style='font-size:26px; color:red; '></i></a>

                    <a href="index.php?Fxem=Fform_chitiet_SP_DH&ma_DH_xem=<?php echo $value['madonDH']?>"
                        class="btn_Fxem"><i class='fas fa-edit'
                            style='font-size:30px;color:black;position:relative;left:5px;'></i></a>

                    <a href="modules/xuly_admin.php?ma_DH_huy=<?php echo $value['madonDH']?>" class="btn_Fhuy"><i
                            class="fa fa-close" style="font-size:30px;color:red;position:relative;left:7px;"></i></a>
                    <?php 
                        }
                    ?>
                </td>
            </tr>
    <?php  
                $STT++;
            } 
    ?>
        </tbody>
    </table>
        <?php
        }else {
            $sql = "select * from dathang";
            $query = mysqli_query($conn, $sql); 
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th_DH">STT</th>
                <th scope="col" class="FSP_th_DH">Mã Đơn Hàng</th>
                <th scope="col" class="FSP_th_DH">Mã Khách Hàng</th>
                <th scope="col" class="FSP_th_DH">Tên Khách Hàng</th>
                <th scope="col" class="FSP_th_DH">Ngày Đặt Hàng</th>
                <th scope="col" class="FSP_th_DH">Trạng Thái</th>
                <th scope="col" class="FSP_th_DH">Tác Vụ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $STT = 1;
         foreach($query as $key => $value){
            $sql_KH_DH = "select * from khachhang where maKH = '$value[maKH]'";
            $query_KH_DH = mysqli_query($conn, $sql_KH_DH); 
    ?>
            <tr>
                <th scope="row" class="FSP_col_DH"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col_DH"><?php echo $value['madonDH'] ?></td>
                <td scope="col" class="FSP_col_DH"><?php echo $value['maKH'] ?></td>
                <?php 
                    foreach($query_KH_DH as $key_KH_DH => $value_KH_DH){
                ?>
                <td scope="col" class="FSP_col_DH"><?php echo $value_KH_DH['hotenKH'] ?></td>
                <?php 
                   }
                ?>
                <td scope="col" class="FSP_col_DH"><?php echo $value['ngayDH'] ?></td>
                <td scope="col" class="FSP_col_DH">
                    <?php 
                        if($value['trangthai'] == '0'){
                    ?>

                    <span class="btn btn-danger">Chưa Giao</span>

                    <?php 
                        }elseif ($value['trangthai'] == '1'){
                    ?>

                    <span class="btn btn-success">Đã Giao</span>

                    <?php 
                        }else {
                    ?>

                    <span class="btn btn-warning">Đã Hủy</span>
                    <?php 
                        }
                    ?>
                </td>
                <td scope="col" class="FSP_col_DH_TV">
                    <?php 
                        if($value['trangthai'] != '2' && $value['trangthai'] != '1'){
                    ?>
                    <a href="modules/xuly_admin.php?ma_DH_duyet=<?php echo $value['madonDH']?>" class="btn_Fduyet"><i
                            class='fas fa-thumbtack' style='font-size:26px; color:red; '></i></a>

                    <a href="index.php?Fxem=Fform_chitiet_SP_DH&ma_DH_xem=<?php echo $value['madonDH']?>"
                        class="btn_Fxem"><i class='fas fa-edit'
                            style='font-size:30px;color:black;position:relative;left:5px;'></i></a>

                    <a href="modules/xuly_admin.php?ma_DH_huy=<?php echo $value['madonDH']?>" class="btn_Fhuy"><i
                            class="fa fa-close" style="font-size:30px;color:red;position:relative;left:7px;"></i></a>
                    <?php 
                        }
                    ?>
                </td>
            </tr>
    <?php  
                $STT++;
            } 
    ?>
        </tbody>
    </table>
    <?php  
            } 
    ?>
    <button id="btn_Fsearch_scroll" ><i class='fas fa-angle-up' style="font-size: 24px;"></i></button>
</div>