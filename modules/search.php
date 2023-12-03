<?php 
    if(isset($_GET['na_search'])){
        if($_GET['na_search'] != ''){
            header('location: http://localhost:8888/Toan(B1706541)-NLCN/index.php?xem=search&se_val='.$_GET['na_search'].'#search_all_SP');
        }else {
          header('location: http://localhost:8888/Toan(B1706541)-NLCN/index.php');
        }
    }

    if(isset($_GET['se_val']) && $_GET['se_val'] != ''){
        $search_txt_sp = $_GET['se_val'];
?>
            <div class="body_search" id="search_all_SP" >
                <h1>Lựa Chọn Phong Cách Riêng Của Bạn</h1>

                <div class="body_search-top">
                    <h3>Sản Phẩm Tìm Kiếm</h3>
                </div>

                <div class="body_search-clear"></div>

                <div class="body_search-main">
                    <?php 
                        $sqli = "select * from xe where tenXe like '%$search_txt_sp%' or tenXe = '$search_txt_sp'";
                        $query = mysqli_query($conn, $sqli);
                        
                        foreach($query as $key => $value){ 
                    ?>
                            <ul>
                                <li>
                                    <a
                                        href="index.php?xem=chitietsanpham&manhom=<?php echo $value['manhom'] ?>&id=<?php echo $value['maXe'] ?>#id_detail">
                                        <img src="<?php echo $value['hinhanh']?>" width=277px height=180px>
                                        <h3> <?php echo $value['tenXe'] ?> </h3>
                                        <p> <?php echo number_format($value['gia']) ?> VNĐ </p>
                                    </a>
                                </li>
                            </ul>
                    <?php 
                        } 
                    ?>
                </div>

                <div class="body_search-clear"></div>
                <button id="btn_search_scroll" ><i class='fas fa-angle-up' style="font-size: 30px;"></i></button>
            </div>
<?php   
    }
?>