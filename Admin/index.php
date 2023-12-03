<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quản Trị Website Kinh Doanh Xe Máy</title>
    
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"> -->

    <link rel="stylesheet" type="text/css" href="Fcss/Fstyle.css">

    <link rel="stylesheet" href="../bootstrap/slider-jquery/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"  href="../bootstrap/slider-jquery/dist/assets/owl.theme.default.css">

    <link href="../icons/material_icon.css" rel="stylesheet">
    <link href="../icons/fontawesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-col">
    
        <?php 
            include('../database/config.php');
            session_start();
            // unset($_SESSION['Fuser']);
            if(isset($_SESSION['Fwrong_user'])){ 
                echo '<script language="'.'javascript'.'">alert("'.'Tên tài khoản hoặc mật khẩu không chính xác!!'.'")</script>';
                unset($_SESSION['Fwrong_user']);
            }

            if(isset($_SESSION['Fuser'])){
                include('modules/Fheader.php');
                include('modules/Fcontroller.php');
            }else {
                include("Fform/Fform_login.php");
            }     
        ?>
        
    </div>

    <script type="text/javascript" src="../bootstrap/slider-jquery/jquery/jquery-3.6.0.min.js"></script>
    
    <script type="text/javascript" src="Fjs/Fcontrol.js"></script>
    
    <script type="text/javascript" src="../bootstrap/slider-jquery/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/slider-jquery/jquery/owl.carousel.min.js"></script>
    
    <script type="text/javascript" src="../icons/fontawesome.js"></script>
    
    <script type="text/javascript" src="../bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>