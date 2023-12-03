<?php 
    include('../../database/config.php');
    // kiem tra trung user
    if(isset($_POST['check_user_DK_NV']) && $_POST['check_user_DK_NV'] != ''){
        $sql_get = "select * from nhanvien";
        $query_get = mysqli_query($conn, $sql_get);

        $username =  $_POST['check_user_DK_NV'];
        $count = 0;
        foreach($query_get as $key => $value){
            if($username == $value['Fusername'] ){
                $count++;
                break;
            }
        }
       
        if($count > 0){
            echo "Tên Tài Khoản Đã Tồn Tại. Vui Lòng Nhập Tên Tài Khoản Khác";
        }
    }
?>