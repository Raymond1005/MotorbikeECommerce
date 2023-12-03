<div class="SanPham" id="id_SanPham">
    <h1>Lựa Chọn Phong Cách Riêng Của Bạn</h1>
    <div class="slider">
        <div class="owl-carousel owl-theme" >
            <?php
                $output_sp_slider ='';
                $sql = "select * from xe limit 16";
                $query = mysqli_query($conn, $sql); 

                foreach($query as $key => $value){
                    $output_sp_slider .= '<div class="item slide">
                         <img src="'.$value['hinhanh'].'" class="'.'slide-SP" width=277px height=500px>
                         <h3>'.$value['tenXe'].' </h3>
                         <p>'.$value['gia'].' </p> 
                         </div>';   
                } 
                echo $output_sp_slider;
            ?>
        </div>
    </div>

    <div class="SanPham_top">
        <button name="xemotor" class="filter_SanPham xemotor" id="id_xemotor" value="MT">Mô Tô </button>
        <button name="xeso" class="filter_SanPham xeso" id="id_xeso" value="XS">Xe Số</button>
        <button name="xecontay" class="filter_SanPham xecontay" id="id_xecontay" value="CT">Côn Tay</button>
        <button name="xetayga" class="filter_SanPham xetayga" id="id_xetayga" value="TG">Tay Ga</button>
    </div>

    <div class="clear_sp"></div>

    <div class="SanPham_main">

    </div>

    <div class="clear_sp"></div>
</div>