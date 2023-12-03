<?php 
    if(isset($_GET['na_Fsearch'])){
        if($_GET['na_Fsearch'] != ''){
            header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fse_val='.$_GET['na_Fsearch'].'&Ffilter_se='.$_GET['na_Fsearch_option'].'');
        }else {
          header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php');
        }
    }

    if(isset($_GET['na_Fsearch_NV'])){
        if($_GET['na_Fsearch_NV'] != '' && $_GET['na_Fsearch_option_NV'] !=''){
            header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fnhanvien&Fse_NV_val='.$_GET['na_Fsearch_NV'].'&Ffilter_NV_se='.$_GET['na_Fsearch_option_NV'].'');
        }else {
          header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fnhanvien');
        }
    }

    if(isset($_GET['na_Fsearch_KH'])){
        if($_GET['na_Fsearch_KH'] != ''){
            header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fform_thongtinkhachhang&Fse_KH_val='.$_GET['na_Fsearch_KH'].'');
        }else {
          header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fform_thongtinkhachhang');
        }
    }
?>
           
            



