<?php 
    if(isset($_GET['Fxem'])){
        $Ftam = $_GET['Fxem'];
    }else{
        $Ftam = '';
    }   
?>
<div class="Fbody">
    <div class="Fbody_left">
        <?php 
            include('modules/Fbody_left.php'); 
        ?>
    </div>
    <div class="Fbody_right">
        <?php    
            if($Ftam == 'Fsanpham'){
                include('modules/Fsanpham.php');

            }elseif($Ftam == 'Fdonhang'){
                include('modules/Fdonhang.php');

            }elseif($Ftam == 'Fnhanvien'){
                include('modules/Fnhanvien.php');

            }elseif($Ftam == 'Fform_themNV'){
                include('Fform/Fform_themNV.php');

            }elseif($Ftam == 'Fform_suaNV'){
                include('Fform/Fform_suaNV.php');

            }elseif($Ftam == 'Fform_NewUser'){
                include('Fform/Fform_NewUser.php');

            }elseif($Ftam == 'Fform_thongtinkhachhang'){
                include('Fform/Fform_thongtinkhachhang.php');

            }elseif($Ftam == 'Fform_themSP'){
                include('Fform/Fform_themSP.php');

            }elseif($Ftam == 'Fform_suaSP'){
                include('Fform/Fform_suaSP.php');

            }elseif($Ftam == 'Fform_chitiet_SP_DH'){
                include('Fform/Fform_chitiet_SP_DH.php');

            }else{
                include('modules/Fsanpham.php');
            }  
        ?>
    </div>
</div>