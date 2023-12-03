<?php 
    if(isset($_GET['na_Floc_DH'])){
        if($_GET['na_Flocdonhang_option'] != ''){
            header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fdonhang&Floc_DH_va='.$_GET['na_Flocdonhang_option'].'');
        }else {
          header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fdonhang');
        }
    }
?>
        