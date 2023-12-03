<?php 
    if(isset($_GET['xem'])){
        $tam = $_GET['xem'];
    }else{
        $tam = '';
    }
    
    if($tam == 'chitietsanpham'){
        include('modules/chitietsanpham.php');
    }elseif($tam == 'tatcasanpham'){
        include('modules/SanPham.php');
    }elseif($tam == 'lienhe'){
        include('modules/lienhe.php');
    }elseif($tam == 'thongtinkhachhang'){
        include('modules/thongtin_khachhang.php');
    }elseif($tam == 'search'){
        include('modules/search.php');
    }else{
        include('modules/body.php');
    }

    // cac form ẩn
    include('form/form_dangky.php');
    include('form/form_login.php');
    include('form/form_add_giohang.php');
?>