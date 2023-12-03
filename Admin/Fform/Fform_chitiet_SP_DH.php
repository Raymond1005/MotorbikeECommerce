<div class="chitiet_SP_DH">
    <h1 class="SP_DH_title">Chi Tiết Đơn Hàng</h1>

    <?php 
        if(isset($_GET['ma_DH_xem']) && $_GET['ma_DH_xem'] != ''){
            $madonDH = $_GET['ma_DH_xem'];

            $sql = "select * from chitietdathang where madonDH = '$madonDH'";
            $query = mysqli_query($conn, $sql); 
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th">STT</th>
                <th scope="col" class="FSP_th">Tên Xe</th>
                <th scope="col" class="FSP_th">Hình Ảnh</th>
                <th scope="col" class="FSP_th">Số Lượng Mua</th>
                <th scope="col" class="FSP_th">Tổng Giá</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $STT = 1;
         foreach($query as $key => $value){
            $sql_SP = "select * from xe where maxe = '$value[maXe]'";
            $query_SP = mysqli_query($conn, $sql_SP);
            
            foreach($query_SP as $key_SP => $value_SP){ 
            ?>

            <tr>
                <th scope="row" class="FSP_col"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col"><?php echo $value_SP['tenXe'] ?></td>
                <td width="150px"><img src="../<?php echo $value_SP['hinhanh'] ?>" width="128px" height="100px"></td>   
                <td scope="col" class="FSP_col"><?php echo $value['soluongdat'] ?></td>
                <td scope="col" class="FSP_col"><?php echo $value['tonggia'] ?></td>
            </tr>
        <?php             
            } 
                $STT++; 
            }
        ?>
        </tbody>
    </table>
    <?php 
        }
    ?>
</div>