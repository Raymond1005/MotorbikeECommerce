<div class="body" id="all_SP">
    <h1>Lựa Chọn Phong Cách Riêng Của Bạn</h1>

    <div class="body-top">
        <h3>Sản Phẩm</h3>
    </div>

    <div class="body-clear"></div>

    <div class="body-main">
        <?php 
        //trang chinh san pham
            $sqli = "select * from xe";
            $query = mysqli_query($conn, $sqli);
            $sosanpham = mysqli_num_rows($query); 
            $soluongtrang = 0;  

            if($sosanpham <= 12){
                $soluongtrang = 1; 
            } else{
                $temp = $sosanpham%12;
                if($temp > 0){
                    $soluongtrang = ceil($sosanpham/12); 
                }
            }

            $page;         
            if(!isset($_GET['p'])){
                $page = "1";  
            }else {            
               $page = $_GET['p']; 
            }
                  
                $query_page1 = ((int)$page*12)-12;
                $query_page2 = (string)$query_page1;
                
                $sqli = "select * from xe limit $query_page2, 12";
                $query = mysqli_query($conn, $sqli);
                
                foreach($query as $key => $value){ ?>
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
        <?php } ?>
    </div>

    <div class="body-clear"></div>

    <div class="phantrang">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="index.php?p=<?php  
                $pagecheck_prev = (int)$page;
                    if($pagecheck_prev > 1){
                        $pagecheck_prev--;
                        $page_prev = (string)$pagecheck_prev;
                        
                    } echo ($page_prev); ?>#all_SP" id="trangtruoc"
                value="trangtruoc">Trước</a></li>
            <?php for($i = 1; $i <= $soluongtrang; $i++){ ?>
            <li class="page-item"><a class="page-link" href="index.php?p=<?php echo $i;?>#all_SP"
                id="trang<?php echo $i;?>" value="<?php echo $i;?>"><?php echo $i;?></a></li>
            <?php 
                } 
            ?>
            <li class="page-item"><a class="page-link" href="index.php?p=<?php 
                    $pagecheck_next = (int)$page;
                    if($pagecheck_next < $soluongtrang){
                        $pagecheck_next++;
                        $page_next = (string)$pagecheck_next;
                        
                    } echo ($page_next);  ?>#all_SP" id="trangsau"
                value="trangsau">Sau</a></li>
        </ul>
    </div>
</div>