<?php
    include('../../database/config.php');
    session_start();
            
    if(isset($_POST['n_Fusername']) && isset($_POST['n_Fpassword'])){
        $Fuser = $_POST['n_Fusername'];
        $Fpass = $_POST['n_Fpassword'];

        $sql_Flogin = "select * from nhanvien where Fusername = '$Fuser' and Fpassword= '$Fpass'"; 
        $query_Flogin =  mysqli_query($conn, $sql_Flogin);
        $count_Fuser = mysqli_num_rows($query_Flogin);
        echo $count_Fuser;
        if($count_Fuser > 0){
            foreach($query_Flogin as $key_Fuser => $value_Fuser){
                $_SESSION['Fuser'] = $value_Fuser['Fusername'];
                header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php');      
            }         
        }else {
            $_SESSION['Fwrong_user'] = '';
            header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php');
        }
    }

    if(isset($_POST['FDX'])){
        unset($_SESSION['Fuser']);
        header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php');
    }
?>