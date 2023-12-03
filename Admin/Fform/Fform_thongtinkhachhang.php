<div class="Fsanpham">
    <div class="Fsanpham_top">
    <h1 class="Fform_SP_title" >Thông Tin Khách Hàng Hiện Có</h1>
        <form class="form" action="modules/Fsearch.php" method="GET" >
            <input class="form-control my-2" type="search" name="na_Fsearch_KH" id="id_input_Ftimkiem_KH"
                class="input_tim_FSP" placeholder="Tìm Kiếm Tên Khách Hàng" aria-label="Search" autocomplete="off"
                style="position: relative; left: 15px; width: 310px; float: left;">

            <button class="btn btn-success my-2" style="float: left;position:relative; left: 25px;"
                type="submit">Search</button>
        </form>
    </div>

    <?php 
        if(isset($_GET['Fse_KH_val']) && $_GET['Fse_KH_val'] != '' ){
            $Fse_KH_val = $_GET['Fse_KH_val'];
            $sql = "select * from khachhang where hotenKH like '%$Fse_KH_val%' or hotenKH = '$Fse_KH_val'";
            $query = mysqli_query($conn, $sql);
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th_KH">STT</th>
                <th scope="col" class="FSP_th_KH">Họ Tên</th>
                <th scope="col" class="FSP_th_KH">Địa Chỉ</th>
                <th scope="col" class="FSP_th_KH">Số Điện Thoại</th>
                <th scope="col" class="FSP_th_KH">Năm Sinh</th>
                <th scope="col" class="FSP_th_KH">Giới Tính</th>
                <th scope="col" class="FSP_th_KH">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $STT = 1;
         foreach($query as $key => $value){
    ?>
            <tr>
                <th scope="row" class="FSP_col_KH"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col_KH"><?php echo $value['hotenKH'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['diachi'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['SDTkhachhang'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['namsinh'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['gioitinh'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['email'] ?></td>         
            </tr>
            <?php  
            $STT++;
        } 
    ?>
        </tbody>
    </table>
    <?php 
        }else {
            $sql = "select * from khachhang";
            $query = mysqli_query($conn, $sql);
        ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th_KH">STT</th>
                <th scope="col" class="FSP_th_KH">Họ Tên</th>
                <th scope="col" class="FSP_th_KH">Địa Chỉ</th>
                <th scope="col" class="FSP_th_KH">Số Điện Thoại</th>
                <th scope="col" class="FSP_th_KH">Năm Sinh</th>
                <th scope="col" class="FSP_th_KH">Giới Tính</th>
                <th scope="col" class="FSP_th_KH">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $STT = 1;
             foreach($query as $key => $value){
            ?>

            <tr>
                <th scope="row" class="FSP_col_KH"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col_KH"><?php echo $value['hotenKH'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['diachi'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['SDTkhachhang'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['namsinh'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['gioitinh'] ?></td>
                <td scope="col" class="FSP_col_KH"><?php echo $value['email'] ?></td>
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