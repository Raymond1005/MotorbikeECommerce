<div class="Fnhanvien">
    <div class="Fnhanvien_top">
        <h1 class="Fform_QLNV_title">Quản Lý Nhân Viên</h1>
        <form class="form" action="modules/Fsearch.php" method="GET" onsubmit="return FtimkiemNV();">
            <input class="form-control my-2" type="search" name="na_Fsearch_NV" id="id_input_Ftimkiem_NV"
                class="input_tim_FSP_NV" placeholder="Tìm Kiếm Nhân Viên" aria-label="Search" autocomplete="off"
                style="position: relative; left: 15px; width: 310px; float: left;">

            <select class="form-control my-2" name="na_Fsearch_option_NV"
                style="width: 125px;float: left;position:relative; left: 20px;">
                <option selected value="">Chọn Tìm Theo</option>
                <option value="hotenNV">Tên Nhân Viên</option>
                <option value="maNV">Mã Nhân Viên</option>
                <option value="chucvu">Vai Trò</option>
            </select>

            <button class="btn btn-success my-2" style="float: left;position:relative; left: 25px;"
                type="submit">Search</button>

            <a href="index.php?Fxem=Fform_themNV" class="btn btn-primary my-2" role="button"
                style="float: right; position:relative; right: 5px;"><i class='fas fa-plus-square'
                    style='font-size:16px; position:relative; right: 5px;'></i>Thêm Mới</a>
        </form>
    </div>

    <?php 
         if(isset($_GET['Fse_NV_val']) && $_GET['Fse_NV_val'] != '' && isset($_GET['Ffilter_NV_se']) && $_GET['Ffilter_NV_se'] != ''){
            $Fse_NV_val = $_GET['Fse_NV_val'];
            $Ffilter_NV_se = $_GET['Ffilter_NV_se'];

            $sql = '';
            $query;
            if($Ffilter_NV_se == "hotenNV"){
                $sql = "select * from nhanvien where hotenNV like '%$Fse_NV_val%' or hotenNV = '$Fse_NV_val'";
                $query = mysqli_query($conn, $sql); 
            }elseif ($Ffilter_NV_se == "maNV") {
                $sql = "select * from nhanvien where maNV like '%$Fse_NV_val%' or maNV = '$Fse_NV_val'";
                $query = mysqli_query($conn, $sql);
            }else {
                $sql = "select * from nhanvien where chucvu like '%$Fse_NV_val%' or chucvu = '$Fse_NV_val'";
                $query = mysqli_query($conn, $sql);
            } 
    ?>

<table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th_NV">STT</th>
                <th scope="col" class="FSP_th_NV">Mã Nhân Viên</th>
                <th scope="col" class="FSP_th_NV">Tên Nhân Viên</th>
                <th scope="col" class="FSP_th_NV">Vai Trò</th>
                <th scope="col" class="FSP_th_NV">Địa Chỉ</th>
                <th scope="col" class="FSP_th_NV">Số Điện Thoại</th>
                <th scope="col" class="FSP_th_NV">Tác Vụ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $STT = 1;
         foreach($query as $key => $value){
    ?>
           <tr>
                <th scope="row" class="FSP_col_NV"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col_NV"><?php echo $value['maNV'] ?></td>
                <td scope="col" class="FSP_col_NV"><?php echo $value['hotenNV'] ?></td>
                <td scope="col" class="FSP_col_NV"><?php echo $value['chucvu'] ?></td>
                <td scope="col" class="FSP_col_NV"><?php echo $value['diachiNV'] ?></td>
                <td scope="col" class="FSP_col_NV"><?php echo $value['SDTnhanvien'] ?></td>
                <td scope="col" class="FSP_col_NV">
                    <a href="index.php?Fxem=Fform_suaNV&ma_NV_sua=<?php echo $value['maNV']?>" class="btn_Fsua"><i
                            class='fas fa-pen-square' style='font-size:36px;color:black;'></i></a>

                    <a href="modules/xuly_admin.php?FxoaNV=<?php echo $value['maNV']?>" class="btn_Fxoa"><i
                            class="fa fa-close" style="font-size:36px;color:red"></i></a>
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
            $sql = "select * from nhanvien";
            $query = mysqli_query($conn, $sql); 
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th_NV">STT</th>
                <th scope="col" class="FSP_th_NV">Mã Nhân Viên</th>
                <th scope="col" class="FSP_th_NV">Tên Nhân Viên</th>
                <th scope="col" class="FSP_th_NV">Vai Trò</th>
                <th scope="col" class="FSP_th_NV">Địa Chỉ</th>
                <th scope="col" class="FSP_th_NV">Số Điện Thoại</th>
                <th scope="col" class="FSP_th_NV">Tác Vụ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $STT = 1;
         foreach($query as $key => $value){
    ?>
           <tr>
                <th scope="row" class="FSP_col_NV"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col_NV"><?php echo $value['maNV'] ?></td>
                <td scope="col" class="FSP_col_NV"><?php echo $value['hotenNV'] ?></td>
                <td scope="col" class="FSP_col_NV"><?php echo $value['chucvu'] ?></td>
                <td scope="col" class="FSP_col_NV"><?php echo $value['diachiNV'] ?></td>
                <td scope="col" class="FSP_col_NV"><?php echo $value['SDTnhanvien'] ?></td>
                <td scope="col" class="FSP_col_NV">
                    <a href="index.php?Fxem=Fform_suaNV&ma_NV_sua=<?php echo $value['maNV']?>" class="btn_Fsua"><i
                            class='fas fa-pen-square' style='font-size:36px;color:black;'></i></a>

                    <a href="modules/xuly_admin.php?FxoaNV=<?php echo $value['maNV']?>" class="btn_Fxoa"><i
                            class="fa fa-close" style="font-size:36px;color:red"></i></a>
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