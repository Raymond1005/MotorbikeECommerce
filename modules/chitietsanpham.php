<div class="detail" id="id_detail">
    <?php 
		$sql = "select * from xe where maXe = '$_GET[id]'";
		$query = mysqli_query($conn, $sql);

	foreach($query as $key => $value){
	?>

    <div class="detail_left">
        <img src="<?php echo $value['hinhanh']?>" width=650px height=500px>
        <h4>Đặc Điểm</h4>
        <p><?php echo $value['dacDiem']?></p>
    </div>

    <div class="detail_right">
        <div class="detail_right_top">
            <h1><?php echo $value['tenXe']?></h1>
            <h3>Giá Từ: <?php echo number_format($value['gia']) ?> VNĐ</h3>
        </div>

        <div class="detail_right_bottom">
            <div class="price_card">
                <div class="price_card_top">
                    <table class="table price_card_table_1">
                        <tr>
                            <th>Khuyến mãi tưng bừng</th>
                        </tr>
                        <tr>
                            <td>Giảm ngay 10% khi mua hàng Online</td>
                        </tr>
                    </table>
                    <div class="more">
                        <div class="tag">Ưu đãi thêm</div>
                        <div class="main_tag">
                            <p>Tặng Balo thời trang sành điệu</p>
                            <p>Tặng phiếu mua hàng trị giá 500.000 đồng</p>
                            <p>Thu cũ đổi mới - Trợ giá ngay 15% </p>
                            <p>Bảo hành chính hãng 2 năm </p>
                        </div>
                    </div>
                </div>

                <div class="price_card_bottom">
                    <?php 
                    if(isset($_SESSION['user']) && $_SESSION['user'] != ''){
                ?>
                    <button type="button" class="btn btn-primary btn_muangay_user"><a href="#id_detail"
                            id="a_muangay_user">Mua ngay</a>
                    </button>
                    <input type="hidden" id="laymanhom" value="<?php echo $_GET['manhom'];?>">
                    <input type="hidden" id="layid" value="<?php echo $_GET['id'];?>">
                    <?php }else { ?>
                    <button type="button" class="btn btn-primary btn_muangay"><a href="#id_detail" id="a_muangay">Mua
                            ngay</a> </button>
                    <div class="d-grid gap-2 d-md-block btn_muadangnhap">
                        <a href="#id_detail" role="button" class="btn btn-danger btn_dangky_detail"> Đăng ký </a>
                        <a href="#id_detail" role="button" class="btn btn-success btn_dangnhap_detail"> Đăng Nhập </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>

    <div class="detail-clear"></div>

    <div class="detail_bottom">
        <h3>Thông Số Kỹ Thuật</h3>
        <div class="thongsokythuat">
            <table class="table table-striped table_thongso">
                <tbody>
                    <?php 
                              $maTS= $value['maTS'];
        
                              $sql_TS = "select * from thongsokythuat where maTS = '$maTS'";
                              $query_TS = mysqli_query($conn, $sql_TS);
                              foreach($query_TS as $key_TS => $value_TS){
                        ?>
                    <tr>
                        <th scope="row">Động Cơ</th>
                        <td><?php echo $value_TS['dongco'];?></td>
                    </tr>

                    <tr>
                        <th scope="row">Công suất</th>
                        <td><?php echo $value_TS['congsuat'];?></td>
                    </tr>

                    <tr>
                        <th scope="row">Dung tích xy lanh</th>
                        <td><?php echo $value_TS['dungtichxylanh'];?></td>
                    </tr>

                    <tr>
                        <th scope="row">Khối Lượng Bản Thân</th>
                        <td><?php echo $value_TS['khoiluong'];?></td>
                    </tr>

                    <tr>
                        <th scope="row">Độ Cao Yên</th>
                        <td><?php echo $value_TS['docaoyen'];?></td>
                    </tr>

                    <tr>
                        <th scope="row">Dung Tích Bình Xăng</th>
                        <td><?php echo $value_TS['dungtichbinhxang'];?></td>
                    </tr>

                    <tr>
                        <th scope="row">Hộp Số</th>
                        <td><?php echo $value_TS['hopso'];?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="detail_goiy">
        <h3 class="detail_goiy_title">Gợi Ý Sản Phẩm</h3>
        <?php 
            $sql_goiy = "select * from xe where manhom = '$value[manhom]' and maXe != '$value[maXe]' limit 6";
            $query_goiy = mysqli_query($conn, $sql_goiy); 

            foreach($query_goiy as $key_goiy => $value_goiy){ ?>
        <ul>
            <li>
                <a
                    href="index.php?xem=chitietsanpham&manhom=<?php echo $value_goiy['manhom'] ?>&id=<?php echo $value_goiy['maXe'] ?>#id_detail">
                    <img src="<?php echo $value_goiy['hinhanh']?>" width=277px height=180px>
                    <h3> <?php echo $value_goiy['tenXe'] ?> </h3>
                    <p> <?php echo number_format($value_goiy['gia']) ?> VNĐ </p>
                </a>
            </li>
        </ul>
        <?php
            } 
        ?>
    </div>

    <div class="detail-clear"></div>

    <div class="detail_comment">
        <h3 class="detail_goiy_comment_title">Bình Luận Sản Phẩm</h3>
        <div class="comment_top">
            <textArea class="form-control my-2" type="textArea" name="na_comment" id="id_comment_BL" class="class_comment"
                placeholder="Bình Luận" aria-label="Search" autocomplete="off"
                style="position: relative; width: 700px; height: 100px;"></textArea>
            <button class="btn btn-info my-2" id="btn_gui_comment"
                style="position:relative; left: 630px; width: 70px;">Gửi</button>
                <input type="hidden" id="BL_comment_xe" value="<?php if(isset($_GET['id'])){echo $_GET['id'];}else{echo '';} ?>">
                <input type="hidden" id="BL_comment_KH" value="<?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}else{echo '';}?>">
        </div>

        <div class="comment_main">

        </div>
    </div>
    <?php 
            }
        } 
        include('form/form_thongtin.php');
    ?>
    <div class="detail-clear"></div>
    
</div>