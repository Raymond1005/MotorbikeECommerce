<div class="Fsanpham">
    <div class="Fsanpham_top">
    <h1 class="Fform_SP_title" >Quản Lý Sản Phẩm</h1>
        <form class="form" action="modules/Fsearch.php" method="GET" onsubmit="return FtimkiemSP();">
            <input class="form-control my-2" type="search" name="na_Fsearch" id="id_input_Ftimkiem"
                class="input_tim_FSP" placeholder="Tìm Kiếm Sản Phẩm" aria-label="Search" autocomplete="off"
                style="position: relative; left: 15px; width: 310px; float: left;">

            <select class="form-control my-2" name="na_Fsearch_option"
                style="width: 125px;float: left;position:relative; left: 20px;">
                <option selected value="tenXe">Chọn Tìm Theo</option>
                <option value="tenXe">Tên Sản Phẩm</option>
                <option value="gia">Giá Bán</option>
            </select>

            <button class="btn btn-success my-2" style="float: left;position:relative; left: 25px;"
                type="submit">Search</button>

            <a href="index.php?Fxem=Fform_themSP" class="btn btn-primary my-2" role="button" style="float: right; position:relative; right: 5px;"><i
                    class='fas fa-plus-square' style='font-size:16px; position:relative; right: 5px;'></i>Thêm Mới</a>
        </form>
    </div>

    <?php 
        if(isset($_GET['Fse_val']) && $_GET['Fse_val'] != '' && isset($_GET['Ffilter_se']) && $_GET['Ffilter_se'] != ''){
            $Fse_val = $_GET['Fse_val'];
            $Ffilter_se = $_GET['Ffilter_se'];

            $sql = '';
            $query;
            if($Ffilter_se == "gia"){
                $sql = "select * from xe where gia like '%$Fse_val%' or gia = '$Fse_val'";
                $query = mysqli_query($conn, $sql); 
            }else {
                $sql = "select * from xe where tenXe like '%$Fse_val%' or tenXe = '$Fse_val'";
                $query = mysqli_query($conn, $sql);
            }
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th">STT</th>
                <th scope="col" class="FSP_th">Tên</th>
                <th scope="col" class="FSP_th">Giá</th>
                <th scope="col" class="FSP_th">Số Lượng</th>
                <th scope="col" class="FSP_th">Hình Ảnh</th>
                <th scope="col" class="FSP_th">Tác Vụ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $STT = 1;
         foreach($query as $key => $value){
    ?>
            <tr>
                <th scope="row" class="FSP_col"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col"><?php echo $value['tenXe'] ?></td>
                <td scope="col" class="FSP_col"><?php echo $value['gia'] ?></td>
                <td scope="col" class="FSP_col"><?php echo $value['soluong'] ?></td>
                <td width="150px"><img src="../<?php echo $value['hinhanh'] ?>" width="128px" height="100px"></td>
                <td scope="col" class="FSP_col">
                    <a href="index.php?Fxem=Fform_suaSP&ma_SP_sua=<?php echo $value['maXe']?>" class="btn_Fsua"><i
                            class='fas fa-pen-square' style='font-size:36px;color:black;'></i></a>

                    <a href="modules/xuly_admin.php?Fxoa=<?php echo $value['maXe']?>" class="btn_Fxoa"><i
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
            $sql = "select * from xe ";
            $query = mysqli_query($conn, $sql);
        ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="FSP_th">STT</th>
                <th scope="col" class="FSP_th">Tên</th>
                <th scope="col" class="FSP_th">Giá</th>
                <th scope="col" class="FSP_th">Số Lượng</th>
                <th scope="col" class="FSP_th">Hình Ảnh</th>
                <th scope="col" class="FSP_th">Tác Vụ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $STT = 1;
             foreach($query as $key => $value){
            ?>

            <tr>
                <th scope="row" class="FSP_col"><?php echo $STT ?></th>
                <td scope="col" class="FSP_col"><?php echo $value['tenXe'] ?></td>
                <td scope="col" class="FSP_col"><?php echo $value['gia'] ?></td>
                <td scope="col" class="FSP_col"><?php echo $value['soluong'] ?></td>
                <td width="150px"><img src="../<?php echo $value['hinhanh'] ?>" width="128px" height="100px"></td>
                <td scope="col" class="FSP_col">
                    <a href="index.php?Fxem=Fform_suaSP&ma_SP_sua=<?php echo $value['maXe']?>" class="btn_Fsua"><i
                            class='fas fa-pen-square' style='font-size:36px;color:black;'></i></a>

                    <a href="modules/xuly_admin.php?Fxoa=<?php echo $value['maXe']?>" class="btn_Fxoa"><i
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