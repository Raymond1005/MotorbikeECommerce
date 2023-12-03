<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website Kinh Doanh Xe Máy</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="bootstrap/slider-jquery/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"  href="bootstrap/slider-jquery/dist/assets/owl.theme.default.css">

    <link href="icons/material_icon.css" rel="stylesheet">
   
    <!-- <link rel="stylesheet" href="bootstrap/slider-jquery/jquery/jquery-ui.css">
    <script src="bootstrap/slider-jquery/jquery/jquery-1.12.4.js"></script>
    <script src="bootstrap/slider-jquery/jquery/jquery-ui.js"></script> -->
</head>
<body>
    <div class="container-col">
    
        <?php 
            include('database/config.php');

            //xu ly hien thi dang nhap
            session_start();
            // unset($_SESSION['user']);
            if(isset($_SESSION['wrong_user'])){ 
                echo '<script language="'.'javascript'.'">alert("'.'Tên tài khoản hoặc mật khẩu không chính xác!!'.'")</script>';
                unset($_SESSION['wrong_user']);
            }
             
            if(isset($_SESSION['user']) && $_SESSION['user'] != ''){ 
                include('modules/showuser.php');
            }else{
                include('modules/loginform.php');
            }
           
            include('modules/header.php');
            include('modules/banner.php');

            include('modules/controller.php');

            include('modules/footer.php');
            
        ?>
        
    </div>
        
    <script type="text/javascript" src="bootstrap/slider-jquery/jquery/jquery-3.6.0.min.js"></script>
    
    <script type="text/javascript" src="js/control.js"></script>
    
    <script type="text/javascript" src="bootstrap/slider-jquery/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/slider-jquery/jquery/owl.carousel.min.js"></script>
    
    <script type="text/javascript" src="icons/fontawesome.js"></script>

    <script type="text/javascript" src="bootstrap/js/popper.min.js"></script> 
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
</body>
</html>