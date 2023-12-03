<?php 
    include('../../database/config.php');
    if (isset($_POST['na_btn_Fform_themSP'])){
        $FSP_SPten = $_POST['na_FSP_SPten'];
        $FSP_SPgia = $_POST['na_FSP_SPgia'];
        $FSP_SPsoluong = $_POST['na_FSP_SPsoluong'];

        move_uploaded_file($_FILES['na_FSP_filename']['tmp_name'], '../../images/images_SP/' . $_FILES['na_FSP_filename']['name']);
        $FSP_filename = 'images/images_SP/' . $_FILES['na_FSP_filename']['name'];
    
        $FSP_SPmanhom = $_POST['na_FSP_SPmanhom'];
    
        $FSP_TSSPdongco = $_POST['na_FSP_TSSPdongco'];
        $FSP_TSSPcongsuat = $_POST['na_FSP_TSSPcongsuat'];
        $FSP_TSSPxylanh = $_POST['na_FSP_TSSPxylanh'];
        $FSP_TSSPkhoiluong = $_POST['na_FSP_TSSPkhoiluong'];
        $FSP_TSSPdocaoyen = $_POST['na_FSP_TSSPdocaoyen'];
        $FSP_TSSPbinhxang = $_POST['na_FSP_TSSPbinhxang'];
        $FSP_TSSPhopso = $_POST['na_FSP_TSSPhopso'];

        $FSP_SPdacdiem = $_POST['na_FSP_SPdacdiem'];

        $sql_getTS = "select * from thongsokythuat";
        $query_getTS = mysqli_query($conn, $sql_getTS);

        $MSTS = '';
        $count_TS = 0;
        if($query_getTS == null){
                $count_TS = 1;
                $MSTS = 'TS'.$count_TS;
        }else{
                $count_TS = mysqli_num_rows($query_getTS) + 1;
                $MSTS = 'TS'.$count_TS;

                while($valueTS = mysqli_fetch_array($query_getTS)){
                    if($valueTS['maTS'] == $MSTS){
                        $count_TS++;
                        $MSTS = 'TS'.$count_TS;
                    }
                }
        }
        $sql_getxe = "select * from xe";
        $query_getxe = mysqli_query($conn, $sql_getxe);

        $maxe = '';
        $count_xe = 0;
        if($query_getxe == null){
                $count_xe = 1;
                $maxe = 'XE'.$count_xe;
        }else{
                $count_xe = mysqli_num_rows($query_getxe) + 1;
                $maxe = 'XE'.$count_xe;

                while($valuexe = mysqli_fetch_array($query_getxe)){
                    if($valuexe['maXe'] == $maxe){
                        $count_xe++;
                        $maxe = 'XE'.$count_xe;
                    }
                }
            }
        $sql_set_TS = "insert into thongsokythuat values ('$MSTS', '$FSP_TSSPdongco', '$FSP_TSSPcongsuat', '$FSP_TSSPxylanh', '$FSP_TSSPkhoiluong', '$FSP_TSSPdocaoyen', '$FSP_TSSPbinhxang', '$FSP_TSSPhopso')";
        mysqli_query($conn, $sql_set_TS);

        $sql_set_xe = "insert into xe values ('$maxe', '$FSP_SPten', '$FSP_SPgia', '$FSP_SPsoluong', '$FSP_filename', '$FSP_SPmanhom', '$MSTS', '$FSP_SPdacdiem')";
        mysqli_query($conn, $sql_set_xe);

        header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php');
    }
    
    if(isset($_GET['Fxoa']) && $_GET['Fxoa'] != ''){
        $id = $_GET['Fxoa'];
        $maTS = '';

        $sql_getxe = "select * from xe where maXe = '$id'";
        $query_getxe = mysqli_query($conn, $sql_getxe);

        foreach($query_getxe as $key => $value){
            $maTS = $value['maTS'];
        }

        $sql_xoaSP = "delete from xe where maXe = '$id'";
        mysqli_query($conn, $sql_xoaSP);
 
        $sql_xoaTS = "delete from thongsokythuat where maTS = '$maTS'";
        mysqli_query($conn, $sql_xoaTS);

        header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php');
    }

    if(isset($_POST['na_btn_Fform_suaSP']) && isset($_GET['ma_SP_sua']) && $_GET['ma_SP_sua'] != ''){
        $maxe = $_GET['ma_SP_sua'];

        $sql = "select * from xe where maxe = '$maxe'";
        $query = mysqli_query($conn, $sql); 
        

        $FSP_SPten = $_POST['na_FSP_SPten_sua'];
        $FSP_SPgia = $_POST['na_FSP_SPgia_sua'];
        $FSP_SPsoluong = $_POST['na_FSP_SPsoluong_sua'];
        
        $FSP_SPmanhom = $_POST['na_FSP_SPmanhom_sua'];
        
        $FSP_filename = '';
        if($_FILES['na_FSP_filename_sua']['name'] != ''){
            move_uploaded_file($_FILES['na_FSP_filename_sua']['tmp_name'], '../../images/images_SP/' . $_FILES['na_FSP_filename_sua']['name']);
            $FSP_filename = 'images/images_SP/' . $_FILES['na_FSP_filename_sua']['name'];
        }

        $FSP_TSSPdongco = $_POST['na_FSP_TSSPdongco_sua'];
        $FSP_TSSPcongsuat = $_POST['na_FSP_TSSPcongsuat_sua'];
        $FSP_TSSPxylanh = $_POST['na_FSP_TSSPxylanh_sua'];
        $FSP_TSSPkhoiluong = $_POST['na_FSP_TSSPkhoiluong_sua'];
        $FSP_TSSPdocaoyen = $_POST['na_FSP_TSSPdocaoyen_sua'];
        $FSP_TSSPbinhxang = $_POST['na_FSP_TSSPbinhxang_sua'];
        $FSP_TSSPhopso = $_POST['na_FSP_TSSPhopso_sua'];

        $FSP_SPdacdiem = $_POST['na_FSP_SPdacdiem_sua'];

        foreach($query as $key => $value){

            if($FSP_SPten == ''){
                $FSP_SPten = $value['tenXe'];
            }

            if($FSP_SPgia == ''){
                $FSP_SPgia = $value['gia'];
            }

            if($FSP_SPsoluong == ''){
                $FSP_SPsoluong = $value['soluong'];
            }

            if($FSP_SPmanhom == ''){
                $FSP_SPmanhom = $value['manhom'];
            }

            if($FSP_filename == ''){
                $FSP_filename = $value['hinhanh'];
            }

            if($FSP_SPdacdiem == ''){
                $FSP_SPdacdiem = $value['dacDiem'];
            }

            $sql_get_TS = "select * from thongsokythuat where maTS = '$value[maTS]'";
            $query_get_TS = mysqli_query($conn, $sql_get_TS); 

            foreach($query_get_TS as $key => $value_TS){
                if($FSP_TSSPdongco == ''){
                    $FSP_TSSPdongco = $value_TS['dongco'];
                }
                
                if($FSP_TSSPcongsuat == ''){
                    $FSP_TSSPcongsuat = $value_TS['congsuat'];
                } 
    
                if($FSP_TSSPxylanh == ''){
                    $FSP_TSSPxylanh = $value_TS['dungtichxylanh'];
                }
    
                if($FSP_TSSPkhoiluong == ''){
                    $FSP_TSSPkhoiluong = $value_TS['khoiluong'];
                }
    
                if($FSP_TSSPdocaoyen == ''){
                    $FSP_TSSPdocaoyen = $value_TS['docaoyen'];
                }
    
                if($FSP_TSSPbinhxang == ''){
                    $FSP_TSSPbinhxang = $value_TS['dungtichbinhxang'];
                }  
    
                if($FSP_TSSPhopso == ''){
                    $FSP_TSSPhopso = $value_TS['hopso'];
                }  
            }
                    
            $sql_set_TS = "update thongsokythuat 
                        set dongco = '$FSP_TSSPdongco', 
                        congsuat = '$FSP_TSSPcongsuat',
                        dungtichxylanh = '$FSP_TSSPxylanh',
                        khoiluong = '$FSP_TSSPkhoiluong',
                        docaoyen = '$FSP_TSSPdocaoyen',
                        dungtichbinhxang = '$FSP_TSSPbinhxang',
                        hopso = '$FSP_TSSPhopso'
                        where maTS = '$value[maTS]'";
            mysqli_query($conn, $sql_set_TS);

            $sql_set_xe = "update xe 
                        set tenXe = '$FSP_SPten', 
                        gia = '$FSP_SPgia',
                        soluong = '$FSP_SPsoluong',
                        hinhanh = '$FSP_filename',
                        manhom = '$FSP_SPmanhom',
                        dacDiem = '$FSP_SPdacdiem'
                        where maXe = '$maxe'";
            mysqli_query($conn, $sql_set_xe);

            header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php');
        }
    }

    // trang don hang
    if(isset($_GET['ma_DH_duyet']) && $_GET['ma_DH_duyet'] != ''){
        $madonDH = $_GET['ma_DH_duyet'];

        $sql_get = "select * from chitietdathang where madonDH = '$madonDH'";
        $query_get = mysqli_query($conn, $sql_get);

        foreach($query_get as $key => $value){
            $sql_get_xe = "select * from xe where maXe = '$value[maXe]'";
            $query_get_xe = mysqli_query($conn, $sql_get_xe);

            $set_SL = 0;
            foreach($query_get_xe as $key_SL => $value_SL){
                $set_SL = $value_SL['soluong'] - $value['soluongdat'];

                $sql_set_SL_xe = "update xe set soluong = '$set_SL' where maXe = '$value[maXe]'";
                mysqli_query($conn, $sql_set_SL_xe);
            }
        }

        $sql = "update dathang set trangthai = '1' where madonDH = '$madonDH'";
        $query = mysqli_query($conn, $sql); 

        header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fdonhang');
    }

    if(isset($_GET['ma_DH_huy']) && $_GET['ma_DH_huy'] != ''){
        $madonDH = $_GET['ma_DH_huy'];

        $sql = "update dathang set trangthai = '2' where madonDH = '$madonDH'";
        $query = mysqli_query($conn, $sql); 

        header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fdonhang');
    }

    // them nhan vien
    if(isset($_POST['na_btn_Fform_themNV'])){
        $na_FSP_NVten = $_POST['na_FSP_NVten'];
        $na_FSP_NVdiachi = $_POST['na_FSP_NVdiachi'];
        $na_FSP_NVSDT = $_POST['na_FSP_NVSDT'];
        $na_FSP_NVvaitro = $_POST['na_FSP_NVvaitro'];
        $na_FSP_NVtaikhoan = $_POST['na_FSP_NVtaikhoan'];
        $na_FSP_NVmatkhau = $_POST['na_FSP_NVmatkhau'];

        $sql = "select * from nhanvien";
        $query = mysqli_query($conn, $sql);

        $MSNV= '';
        $count_NV = 0;
        if($query == null){
                $count_NV = 1;
                $MSNV = 'NV'.$count_NV;
        }else{
                $count_NV = mysqli_num_rows($query_getNV) + 1;
                $MSNV = 'NV'.$count_NV;

                while($valueNV = mysqli_fetch_array($query)){
                    if($valueNV['maNV'] == $MSNV){
                        $count_NV++;
                        $MSNV = 'NV'.$count_NV;
                    }
                }
        }

        $sql_set_NV = "insert into nhanvien values ('$MSNV', '$na_FSP_NVten', '$na_FSP_NVvaitro', '$na_FSP_NVdiachi', '$na_FSP_NVSDT', '$na_FSP_NVtaikhoan', '$na_FSP_NVmatkhau')";
        mysqli_query($conn, $sql_set_NV);

        header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fnhanvien');
    }
    
    // sua nhan vien
    if(isset($_POST['na_btn_Fform_suaNV'])){
        $ma_NV_sua = $_GET['ma_NV_sua'];
        $na_FSP_NVten_sua = $_POST['na_FSP_NVten_sua'];
        $na_FSP_NVdiachi_sua = $_POST['na_FSP_NVdiachi_sua'];
        $na_FSP_NVSDT_sua = $_POST['na_FSP_NVSDT_sua'];
        $na_FSP_NVvaitro_sua = $_POST['na_FSP_NVvaitro_sua'];

        $sql = "select * from nhanvien where maNV = '$ma_NV_sua'";
        $query = mysqli_query($conn, $sql);

        foreach($query as $key => $value){
            if($na_FSP_NVten_sua == ''){
                $na_FSP_NVten_sua = $value['hotenNV'];
            }
            
            if($na_FSP_NVdiachi_sua == ''){
                $na_FSP_NVdiachi_sua = $value['diachiNV'];
            } 

            if($na_FSP_NVSDT_sua == ''){
                $na_FSP_NVSDT_sua = $value['SDTnhanvien'];
            }

            if($na_FSP_NVvaitro_sua == ''){
                $na_FSP_NVvaitro_sua = $value['chucvu'];
            }

        }
        $sql_set_NV = "update nhanvien 
                    set hotenNV = '$na_FSP_NVten_sua', 
                    diachiNV = '$na_FSP_NVdiachi_sua',
                    SDTnhanvien = '$na_FSP_NVSDT_sua',
                    chucvu = '$na_FSP_NVvaitro_sua'
                    where maNV = '$ma_NV_sua'";
        mysqli_query($conn, $sql_set_NV);

        header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fnhanvien');
    }
    //xoa nhan vien
    if(isset($_GET['FxoaNV']) && $_GET['FxoaNV'] != ''){
        $maNV = $_GET['FxoaNV'];

        $sql = "delete from nhanvien where maNV = '$maNV'";
        $query = mysqli_query($conn, $sql); 

        header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fnhanvien');
    }
    // cap tai khoan moi cho nhan vien
    if(isset($_POST['na_btn_Fform_newNV'])){
        $na_FSP_newTK_maNV = $_POST['na_FSP_newTK_maNV'];
        $na_FSP_newTK_taikhoanNV = $_POST['na_FSP_newTK_taikhoanNV'];
        $na_FSP_newTK_matkhaumoiNV = $_POST['na_FSP_newTK_matkhaumoiNV'];
        
        $sql_get_NV = "select * from nhanvien where maNV = '$na_FSP_newTK_maNV'";
        $query_get_NV = mysqli_query($conn, $sql_get_NV); 

        foreach($query_get_NV as $key => $value){
            if($value['chucvu'] == "nhanvien"){
                $sql = "update nhanvien 
                        set Fusername = '$na_FSP_newTK_taikhoanNV', 
                        Fpassword = '$na_FSP_newTK_matkhaumoiNV'
                        where maNV = '$value[maNV]'";
                mysqli_query($conn, $sql);
                header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fform_NewUser&user_added=1');
            }else{
                header('location: http://localhost:8888/Toan(B1706541)-NLCN/Admin/index.php?Fxem=Fform_NewUser&user_added=0');
            }
        }
    }
?>  
