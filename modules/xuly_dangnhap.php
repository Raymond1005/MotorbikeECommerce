<?php 
    include('../database/config.php');
    session_start();
    if(isset($_POST['DN_TK']) && $_POST['DN_TK'] != ''){
        if(isset($_POST['DN_MK']) && $_POST['DN_MK'] != ''){
            $TK = $_POST['DN_TK'];        
            $MK = $_POST['DN_MK'];        
            
            $sql_get = "select * from khachhang where username = '$TK' and password = '$MK'";
            $query_get = mysqli_query($conn, $sql_get);
            
            $count = 0;
            foreach($query_get as $key => $value){
                if($TK == $value['username'] ){
                    $count++;
                    break;
                }
            }
            
            if($count > 0){
                $sql_get_user = "select * from khachhang where username = '$TK'";
                $query_get_user = mysqli_query($conn, $sql_get_user);
            
                foreach($query_get_user as $key => $value){
                    $_SESSION['user'] = $value['username'];
                    $_SESSION['hoten'] = $value['hotenKH'];
                    $_SESSION['diachi'] = $value['diachi'];
                    $_SESSION['SDT'] = $value['SDTkhachhang'];
                    $_SESSION['namsinh'] = $value['namsinh'];
                    $_SESSION['gioitinh'] = $value['gioitinh'];
                    $_SESSION['email'] = $value['email'];

                }
                
                //khoi tao gio hang khi khach hang dang nhap
                header('location: http://localhost:8888/Toan(B1706541)-NLCN/index.php');    
            }else{
                $_SESSION['wrong_user'] = '';
                header('location: http://localhost:8888/Toan(B1706541)-NLCN/index.php');
            }  
        }
    }

    if(isset($_POST['DX'])){
        if(isset($_SESSION['cart'][$_SESSION['user']])){
            unset($_SESSION['cart'][$_SESSION['user']]);
        }

        unset($_SESSION['user']);
        header('location: http://localhost:8888/Toan(B1706541)-NLCN/index.php');
    }
?>