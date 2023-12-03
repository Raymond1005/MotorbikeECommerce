<?php 
    include('../database/config.php');
    session_start();
    //mua hang khong dang nhap
    if(!isset($_POST['user_DK'])){
        if(isset($_POST['hoten']) && isset($_POST['diachi']) && isset($_POST['SDT']) 
        && isset($_POST['maso_sp']) && $_POST['maso_sp'] != ''){
            // them thong tin khach hang mua vao bang khach hang
            $sql_get = "select * from khachhang";
            $query_get = mysqli_query($conn, $sql_get);
            
            $MSKH = '';        
            $hotenKH = $_POST['hoten'];
            $diachiKH = $_POST['diachi'];
            $sdtKH = $_POST['SDT'];
            
            $count_KH = 0;
            if($query_get == null){
                $count_KH = 1;
                $MSKH = 'MS'.$count_KH;
            }else{
                $count_KH = mysqli_num_rows($query_get) + 1;
                $MSKH = 'MS'.$count_KH;

                while($value = mysqli_fetch_array($query_get)){
                    if($value['maKH'] == $MSKH){
                        $count_KH++;
                        $MSKH = 'MS'.$count_KH;
                    }
                }
            }  
            
            $sql_set_KH = "insert into khachhang(maKH,hotenKH,diachi,SDTkhachhang) values ('$MSKH', '$hotenKH', '$diachiKH', '$sdtKH')";
            mysqli_query($conn, $sql_set_KH);

            //xu ly cho bang dat hang va chi tiet dat hang
            $sql_getMD = "select * from dathang";
            $query_getMD = mysqli_query($conn, $sql_getMD);

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $MDDH = '';
            $NgayDH = date('Y-m-d H:i:s');
            $TrangThai = '0';

            $count_MD = 0;
            if($query_getMD == null){
                $count_MD = 1;
                $MDDH = 'MD'.$count_MD;
            }else{
                $count_MD = mysqli_num_rows($query_getMD) + 1;
                $MDDH = 'MD'.$count_MD;

                while($valueMD = mysqli_fetch_array($query_getMD)){
                    if($valueMD['madonDH'] == $MDDH){
                        $count_MD++;
                        $MDDH = 'MD'.$count_MD;
                    }
                }
            }

            $sql_set_DH = "insert into dathang (madonDH, maKH, ngayDH, trangthai) values ('$MDDH', '$MSKH', '$NgayDH', '$TrangThai')";
            mysqli_query($conn, $sql_set_DH);
            
            $maSP = $_POST['maso_sp'];
            $sql_get_xe = "select * from xe where maXe = '$maSP'";
            $query_xe = mysqli_query($conn, $sql_get_xe);
            foreach($query_xe as $key_x => $value_x){
                $sql_set_CT = "insert into chitietdathang values ('$MDDH', '$maSP', '1', '$value_x[gia]')";
                mysqli_query($conn, $sql_set_CT);
            }
            
            echo "Gữi Thông Tin Mua Hàng Thành Công";
        }
    }
    //dang ky tai khoan
    if(isset($_POST['check_user_DK']) && $_POST['check_user_DK'] != ''){
        $username =  $_POST['check_user_DK'];

        $sql_get = "select * from khachhang where username = '$username'";
        $query_get = mysqli_query($conn, $sql_get);

        $count = 0;
        $count = mysqli_num_rows($query_get);
        
        if($count > 0){
            echo "Tên Tài Khoản Đã Tồn Tại. Vui Lòng Nhập Tên Tài Khoản Khác";
        }  
    }

    if(isset($_POST['user_DK'])){
        if(isset($_POST['user_DK']) && isset($_POST['matkhau']) && isset($_POST['hoten']) && isset($_POST['namsinh']) && isset($_POST['gioitinh']) && isset($_POST['diachi']) && isset($_POST['SDT']) && isset($_POST['email'])){
            $TK = $_POST['user_DK'];        
            $MK = $_POST['matkhau'];        

            $sql_get = "select * from khachhang";
            $query_get = mysqli_query($conn, $sql_get);
            
            $MSKH = '';        
            $hotenKH = $_POST['hoten'];
            $diachiKH = $_POST['diachi'];
            $sdtKH = $_POST['SDT'];
            $namsinhKH = $_POST['namsinh'];
            $gioitinhKH = $_POST['gioitinh'];
            $emailKH = $_POST['email'];
            
            $count_KH = 0;
            if($query_get == null){
                $count_KH = 1;
                $MSKH = 'MS'.$count_KH;
            }else{
                $count_KH = mysqli_num_rows($query_get) + 1;
                $MSKH = 'MS'.$count_KH;

                while($value = mysqli_fetch_array($query_get)){
                    if($value['maKH'] == $MSKH){
                        $count_KH++;
                        $MSKH = 'MS'.$count_KH;
                    }
                }
            }  
            
            $sql_set_KH = "insert into khachhang values ('$MSKH', '$hotenKH', '$diachiKH', '$sdtKH', '$TK', '$namsinhKH', '$gioitinhKH', '$emailKH', '$MK')";
            mysqli_query($conn, $sql_set_KH);

            echo "Tạo Tài Khoản Thành Công";
        }
    }
    //Trang San Pham
    if(isset($_POST['filter_SP']) && $_POST['filter_SP'] != ''){
        $result = $_POST['filter_SP'];
        $output_filter_sp ='';
 
        $sql = "select * from xe where manhom = '$result'";
        $query = mysqli_query($conn, $sql); 

        foreach($query as $key => $value){
            $output_filter_sp .= '<ul>         
                            <li>
                                <a
                                    href="'.'index.php?xem=chitietsanpham&manhom='.$value['manhom'].'&id='.$value['maXe'].'#id_detail">
                                    <img src="'.$value['hinhanh'].'" width=277px height=180px>
                                    <h3>'.$value['tenXe'].'</h3>
                                    <p>'.number_format($value['gia']).'VNĐ </p>
                                </a>
                            </li>
                    </ul>';
        }
        
        echo $output_filter_sp;
    }
    //Trang them vao gio hang
    if(isset($_POST['maso']) && $_POST['maso'] != '' && isset($_POST['manhom']) && $_POST['manhom'] != ''){
        $result = $_POST['maso'];
        $sql = "select * from xe where maXe = '$result'";
        $query = mysqli_query($conn, $sql); 
        
        $output_add_giohang = '';
        foreach($query as $key => $value){
            $output_add_giohang .= '<table class="table table_add_giohang">
            <thead>
              <tr>
                <th scope="col" width = 40%>
                    <img src="'.$value['hinhanh'].'" width=277px height=180px>
                </th>

                <th scope="col" width = 25% class="tensp">'.$value['tenXe'].'</th>

                <th scope="col" width = 25% class="soluongsp">
                    <p>Số Lượng</p>
                    <input type="number" id="soluong_add_giohang" value="1" min ="1" max="'.$value['soluong'].'">
                </th>
              </tr>
            </thead>
          </table>';    
        }
        echo $output_add_giohang;
    }
    //tao gio hang
    if(isset($_POST['username_add']) && $_POST['username_add'] != '' 
        && isset($_POST['maso']) && $_POST['maso'] != '' 
        && isset($_POST['manhom']) && $_POST['manhom'] != ''
        && isset($_POST['soluongmua']) && $_POST['soluongmua'] != ''){

        $username = $_POST['username_add'];
        $masp =$_POST['maso'];
        $manhomsp =$_POST['manhom'];
        $soluong =$_POST['soluongmua'];

        $sql_xe = "select * from xe where maXe = '$masp'";
        $query_xe = mysqli_query($conn, $sql_xe); 

            foreach($query_xe as $key => $value){
                $_SESSION['cart'][$username][$masp]['maSP'] = $value['maXe'];
                $_SESSION['cart'][$username][$masp]['tenSP'] = $value['tenXe'];
                $_SESSION['cart'][$username][$masp]['giaSP'] = $value['gia'];
                $_SESSION['cart'][$username][$masp]['soluongSP'] = $value['soluong'];
                $_SESSION['cart'][$username][$masp]['hinhanhSP'] = $value['hinhanh'];
                $_SESSION['cart'][$username][$masp]['manhomSP'] = $value['manhom'];

                $_SESSION['cart'][$username][$masp]['soluongdathang'] = $soluong;
                $_SESSION['cart'][$username][$masp]['tonggiatien'] = $soluong * $value['gia'];
            }
    }

    //trang tai khoan khach hang(sinh giao dien)
        //cac chuc nang cua khach hang
    if(isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['yeucau']) && $_POST['yeucau'] != ''){
        $result = $_POST['username'];
        $yeucau = $_POST['yeucau'];
        
        // unset($_SESSION['cart'][$result]);
        $sql = "select * from khachhang where username = '$result'";
        $query = mysqli_query($conn, $sql); 
            
        $output_thongtin_kh = '';
        if($yeucau == "thongtinkhachhang"){    
            foreach($query as $key => $value){
                $output_thongtin_kh .= '<table class="table table-striped table-dark table_thongtin_khachhang">  
                <tbody>
                <tr>
                        <th scope="col" class="col_ttkh">Họ Tên </th>
                        <td scope="col" class="col_ttkh">'.$value['hotenKH'].'</td>    
                </tr>

                <tr>
                        <th scope="col" class="col_ttkh">Địa Chỉ</th>
                        <td scope="col" class="col_ttkh">'.$value['diachi'].'</td> 
                </tr>

                <tr>
                        <th scope="col" class="col_ttkh">Năm Sinh</th>
                        <td scope="col" class="col_ttkh">'.$value['namsinh'].'</td> 
                </tr>

                <tr>
                        <th scope="col" class="col_ttkh">Giới Tính</th>
                        <td scope="col" class="col_ttkh">'.$value['gioitinh'].'</td>    
                </tr>

                <tr>
                        <th scope="col" class="col_ttkh">Số Điện Thoại</th>
                        <td scope="col" class="col_ttkh">'.$value['SDTkhachhang'].'</td> 
                </tr>

                <tr>
                        <th scope="col" class="col_ttkh">Email</th>
                        <td scope="col" class="col_ttkh">'.$value['email'].'</td> 
                </tr>

                <tr>
                        <th scope="col" class="col_ttkh">Tên Tài Khoản</th>
                        <td scope="col" class="col_ttkh">'.$value['username'].'</td> 
                </tr>
                </tbody>
            </table>'; 
            }
            echo $output_thongtin_kh;
        } elseif ($yeucau == "capnhatthongtin"){
            foreach($query as $key => $value){
                $output_thongtin_kh .= '<table class="table table-striped table-dark table_capnhat_khachhang">  
                <tbody>
                <tr>
                        <th scope="col" class="col_cntt">Họ Tên </th>
                        <td scope="col" class="col_cntt">
                            <div class="form-group">
                                <input type="text" class="form-control" name="upd_hoTen" id="id_upd_hoTen"
                                placeholder="Nhập Họ Và Tên">
                            </div>
                        </td>    
                </tr>

                <tr>
                        <th scope="col" class="col_cntt">Địa Chỉ</th>
                        <td scope="col" class="col_cntt">
                            <div class="form-group">
                                <input type="text" class="form-control" name="upd_diachi" id="id_upd_diachi"
                                placeholder="Nhập Địa Chỉ">
                            </div>
                        </td> 
                </tr>

                <tr>
                        <th scope="col" class="col_cntt">Năm Sinh</th>
                        <td scope="col" class="col_cntt">
                            <select name="upd_select" id="id_upd_select">
                                <option value=""></option>';
                                $year = getdate();
                                for ($i = $year['year']; $i >= 1900; $i--){
                                    $output_thongtin_kh .= '<option value="'.(string)$i.'">'.(string)$i.'</option>'; 
                                }
                        $output_thongtin_kh .= '</select>
                        </td>
                </tr>

                <tr>
                        <th scope="col" class="col_cntt">Giới Tính</th>
                        <td scope="col" class="col_cntt">
                            <div class="input-group-text form-group " style="width: 20%;">
                                <input type="radio" name="upd_gioitinh" value="nam">&nbsp;Nam&nbsp;</input>
                                <input type="radio" name="upd_gioitinh" value="nu">&nbsp;Nữ&nbsp;</input>
                            </div>
                        </td>    
                </tr>

                <tr>
                        <th scope="col" class="col_cntt">Số Điện Thoại</th>
                        <td scope="col" class="col_cntt">
                            <div class="form-group">
                                <input type="text" class="form-control" name="upd_SDT" id="id_upd_SDT"
                                placeholder="Nhập Số Điện Thoại (Gồm 10 Số)">
                            </div>
                        </td> 
                </tr>

                <tr>
                        <th scope="col" class="col_cntt">Email</th>
                        <td scope="col" class="col_cntt">
                            <div class="form-group">
                                <input type="email" class="form-control" name="upd_email" id="id_upd_email"
                                placeholder="Nhập Email">
                            </div>
                        </td> 
                </tr>

                <tr>
                        <td colspan="2" scope="col" class="col_cntt_bottom" >
                            <button type="button" class="btn btn-info gui_upd_tt" id="id_gui_upd_tt">Sửa Đổi</button>
                            <p>Trường Nào Không Cần Sửa Thì Bỏ Trống </p>
                        </td> 
                </tr>
                </tbody>
            </table>'; 
            }
            echo $output_thongtin_kh;
        }elseif($yeucau == "doimatkhau"){
            foreach($query as $key => $value){
                $output_thongtin_kh .= '<table class="table table-striped table-dark table_doimatkhau_KH">  
                <tbody>
                <tr>
                        <th scope="col" class="col_dmk_th">Tên Tài Khoản</th>
                        <td scope="col" class="col_dmk">'.$value['username'].'</td>    
                </tr>

                <tr>
                        <th scope="col" class="col_dmk_th">Nhập Mật Khẩu Mới</th>
                        <td scope="col" class="col_dmk">
                            <div class="form-group">
                                <input type="password" class="form-control" name="upd_pass" id="id_upd_pass"
                                placeholder="Nhập Mật Khẩu Mới">
                            </div>
                        </td>    
                </tr>

                <tr>
                        <th scope="col" class="col_dmk_th">Nhập Lại Mật Khẩu Mới</th>
                        <td scope="col" class="col_dmk">
                            <div class="form-group">
                                <input type="password" class="form-control" name="upd_re_pass" id="id_re_upd_pass"
                                placeholder="Nhập Lại Mật Khẩu Mới">
                            </div>
                        </td> 
                </tr>

                <tr>
                        <td colspan="2" scope="col" class="col_dmk_bottom" >
                            <button type="button" class="btn btn-info gui_upd_dmk" id="id_gui_upd_dmk">Sửa Đổi</button>
                            <p> Nhập Đầy Đủ Các Trường Yêu Cầu </p>
                        </td> 
                </tr>
                </tbody>
            </table>'; 
            }
            echo $output_thongtin_kh;
        }elseif($yeucau == "giohang"){
            if(!isset($_SESSION['cart'][$result])){
                $output_thongtin_kh .= '<table class="table table-striped table-light table_giohang_KH">  
                <tbody>
                    <tr>
                        <th scope="col" class="col_giohang_thongbao">Giỏ Hàng Của Bạn Chưa Có Sản Phẩm Nào</th>   
                    </tr>
                </tbody>
                </table>';
            }else {
                $tongDH = 0.00;
                $output_thongtin_kh .= '<table class="table table-light table_giohang_KH"><tbody>';
                foreach($_SESSION['cart'][$result] as $key => $value){
                    $output_thongtin_kh .= '<tr class="tr_gh">    
                            <th rowspan="2" scope="col" class="col_giohang_hinhanh" width=130px height=80px>
                                <img src="'.$value['hinhanhSP'].'" width=100px>
                            </th>

                            <th scope="col" class="col_giohang_th">Tên </th>
                            <th scope="col" class="col_giohang_th">Giá</th>
                            <th scope="col" class="col_giohang_th">Số Lượng Đặt</th>
                            <th scope="col" class="col_giohang_th">Tổng Giá</th>
                            <th scope="col" class="col_giohang_th">Chức Năng</th>
                    </tr>
    
                    <tr > 
                            <td scope="col" class="col_giohang_td">'.$value['tenSP'].'</td>
                            <td scope="col" class="col_giohang_td">'.number_format($value['giaSP']).'</td>  

                            <td scope="col" class="col_giohang_td">
                                <input type="number" class="soluong_dat_'.$value['maSP'].'" value="'.$value['soluongdathang'].'" min ="1" max="'.$value['soluongSP'].'">  
                            </td> 

                            <td scope="col" class="col_giohang_td">'.number_format($value['tonggiatien']).'</td> 

                            <td scope="col" class="col_giohang">
                                <button type="button" class="btn btn-success gui_sua_giohang"  name="name_gui_sua_gh" value="'.$value['maSP'].'" >Sửa</button>
                                <button type="button" class="btn btn-danger gui_huy_giohang"  name="name_gui_huy_gh" value="'.$value['maSP'].'" >Xóa</button>
                            </td>    
                    </tr>'; 
                    $tongDH += $value['tonggiatien'];
                }
                $output_thongtin_kh .= '</tbody></table>
                    <p><strong>Tổng Thanh Toán: '.number_format($tongDH).'</strong></p>
                    <button type="button" class="btn btn-dark gui_dathang" id="id_gui_dathang">Đặt Hàng</button>'; 
            }   
            echo $output_thongtin_kh;
        }    
    }
    //trang tai khoan khach hang(xu ly chuc nang)
        // cap nhat lai thong tin khach hang
    if(isset($_POST['username']) && $_POST['username'] != '' 
        && isset($_POST['upd_hoten_val']) && isset($_POST['upd_diachi_val']) 
        && isset($_POST['upd_SDT_val']) && isset($_POST['upd_email_val']) 
        && isset($_POST['upd_gioitinh_val']) && isset($_POST['upd_namsinh_val'])){
            
        $result = $_POST['username'];

        $sql = "select * from khachhang where username = '$result'";
        $query = mysqli_query($conn, $sql); 
        
        foreach($query as $key => $value){
            if($_POST['upd_hoten_val'] == ''){
                $_POST['upd_hoten_val'] = $value['hotenKH'];
            }

            if($_POST['upd_diachi_val'] == ''){
                $_POST['upd_diachi_val'] = $value['diachi'];
            } 

            if($_POST['upd_SDT_val'] == ''){
                $_POST['upd_SDT_val'] = $value['SDTkhachhang'];
            } 

            if($_POST['upd_email_val'] == ''){
                $_POST['upd_email_val'] = $value['email'];
            } 

            if($_POST['upd_gioitinh_val'] == ''){
                $_POST['upd_gioitinh_val'] = $value['gioitinh'];
            } 

            if($_POST['upd_namsinh_val'] == ''){
                $_POST['upd_namsinh_val'] = $value['namsinh'];
            }   
            
            $sql_set_upd = "update khachhang 
                        set hotenKH = '$_POST[upd_hoten_val]', 
                        diachi = '$_POST[upd_diachi_val]',
                        SDTkhachhang = '$_POST[upd_SDT_val]',
                        namsinh = '$_POST[upd_namsinh_val]',
                        gioitinh = '$_POST[upd_gioitinh_val]',
                        email = '$_POST[upd_email_val]'
                        where username = '$result'";
            mysqli_query($conn, $sql_set_upd);
         }
        
        echo "Cập Nhật Thông Tin Thành Công";
    }

        // doi mat khau khach hang
    if(isset($_POST['username']) && $_POST['username'] != '' 
        && isset($_POST['upd_pass_val']) && $_POST['upd_pass_val'] != ''
        && isset($_POST['upd_re_pass_val']) && $_POST['upd_re_pass_val'] != ''){
        
        $result = $_POST['username'];

        $sql_set_upd_pass = "update khachhang
                        set password= '$_POST[upd_re_pass_val]'
                        where username = '$result'";
        mysqli_query($conn, $sql_set_upd_pass);
        
        echo "Đổi Mật Khẩu Thành Công";
    }

        //xu ly nut huy san pham gio hang
    if(isset($_POST['username']) && $_POST['username'] != ''
    && isset($_POST['maSP_huy']) && $_POST['maSP_huy'] != ''){
        $username = $_POST['username'];
        $masp = $_POST['maSP_huy'];
        
        unset($_SESSION['cart'][$username][$masp]);
        $output_huy_gh = '';

        if(!isset($_SESSION['cart'][$username]) || $_SESSION['cart'][$username] == null){
            unset($_SESSION['cart'][$username]);
            $output_huy_gh .= '<table class="table table-striped table-light table_giohang_KH">  
            <tbody>
                <tr>
                    <th scope="col" class="col_giohang_thongbao">Giỏ Hàng Của Bạn Chưa Có Sản Phẩm Nào</th>   
                </tr>
            </tbody>
            </table>';
        }else {
            $tongDH = 0.00;
            $output_huy_gh .= '<table class="table table-light table_giohang_KH"><tbody>';
            foreach($_SESSION['cart'][$username] as $key => $value){
             
                $output_huy_gh .= '<tr class="tr_gh">    
                        <th rowspan="2" scope="col" class="col_giohang_hinhanh" width=130px height=80px>
                            <img src="'.$value['hinhanhSP'].'" width=100px>
                        </th>

                        <th scope="col" class="col_giohang_th">Tên </th>
                        <th scope="col" class="col_giohang_th">Giá</th>
                        <th scope="col" class="col_giohang_th">Số Lượng Đặt</th>
                        <th scope="col" class="col_giohang_th">Tổng Giá</th>
                        <th scope="col" class="col_giohang_th">Chức Năng</th>
                </tr>

                <tr > 
                        <td scope="col" class="col_giohang_td">'.$value['tenSP'].'</td>
                        <td scope="col" class="col_giohang_td">'.number_format($value['giaSP']).'</td>  
                        
                        <td scope="col" class="col_giohang_td">
                            <input type="number" class="soluong_dat_'.$value['maSP'].'" value="'.$value['soluongdathang'].'" min ="1" max="'.$value['soluongSP'].'">  
                        </td> 

                        <td scope="col" class="col_giohang_td">'.number_format($value['tonggiatien']).'</td> 

                        <td scope="col" class="col_giohang">
                            <button type="button" class="btn btn-success gui_sua_giohang"  name="name_gui_sua_gh" value="'.$value['maSP'].'" >Sửa</button>
                            <button type="button" class="btn btn-danger gui_huy_giohang"  name="name_gui_huy_gh" value="'.$value['maSP'].'" >Xóa</button>
                        </td>           
                </tr>'; 
                $tongDH += $value['tonggiatien'];
            }
            $output_huy_gh .= '</tbody></table>
                <p><strong>Tổng Thanh Toán: '.number_format($tongDH).'</strong></p>
                <button type="button" class="btn btn-dark gui_dathang" id="id_gui_dathang">Đặt Hàng</button>'; 
        }   
        echo $output_huy_gh;
    }

        //xu ly nut sua san pham gio hang
    if(isset($_POST['username']) && $_POST['username'] != ''
    && isset($_POST['maSP_sua']) && $_POST['maSP_sua'] != ''
    & isset($_POST['soluongmua']) && $_POST['soluongmua'] != ''){
        $username = $_POST['username'];
        $masp = $_POST['maSP_sua'];
        $soluongdathang= $_POST['soluongmua'];
        $output_sua_gh = '';

        $_SESSION['cart'][$username][$masp]['soluongdathang'] = $soluongdathang;
        $_SESSION['cart'][$username][$masp]['tonggiatien'] = $soluongdathang * $_SESSION['cart'][$username][$masp]['giaSP'];
        $tongDH = 0.00;
        $output_sua_gh .= '<table class="table table-light table_giohang_KH"><tbody>';
        foreach($_SESSION['cart'][$username] as $key => $value){
                $output_sua_gh .= '<tr class="tr_gh">    
                        <th rowspan="2" scope="col" class="col_giohang_hinhanh" width=130px height=80px>
                            <img src="'.$value['hinhanhSP'].'" width=100px>
                        </th>

                        <th scope="col" class="col_giohang_th">Tên </th>
                        <th scope="col" class="col_giohang_th">Giá</th>
                        <th scope="col" class="col_giohang_th">Số Lượng Đặt</th>
                        <th scope="col" class="col_giohang_th">Tổng Giá</th>
                        <th scope="col" class="col_giohang_th">Chức Năng</th>
                </tr>

                <tr > 
                        <td scope="col" class="col_giohang_td">'.$value['tenSP'].'</td>
                        <td scope="col" class="col_giohang_td">'.number_format($value['giaSP']).'</td>  

                        <td scope="col" class="col_giohang_td">
                            <input type="number" class="soluong_dat_'.$value['maSP'].'" value="'.$value['soluongdathang'].'" min ="1" max="'.$value['soluongSP'].'">  
                        </td> 

                        <td scope="col" class="col_giohang_td">'.number_format($value['tonggiatien']).'</td> 

                        <td scope="col" class="col_giohang">
                            <button type="button" class="btn btn-success gui_sua_giohang"  name="name_gui_sua_gh" value="'.$value['maSP'].'" >Sửa</button>
                            <button type="button" class="btn btn-danger gui_huy_giohang"  name="name_gui_huy_gh" value="'.$value['maSP'].'" >Xóa</button>
                        </td>    
                </tr>'; 
                $tongDH += $value['tonggiatien'];
        }   
        
        $output_sua_gh .= '</tbody></table>
            <p><strong>Tổng Thanh Toán: '.number_format($tongDH).'</strong></p>    
            <button type="button" class="btn btn-dark gui_dathang" id="id_gui_dathang">Đặt Hàng</button>';
        echo $output_sua_gh;
    }

    //xu ly dat hang
    if(isset($_POST['username']) && $_POST['username'] != '' 
    && isset($_POST['yeucau_dathang']) && $_POST['yeucau_dathang'] != ''){

        $username = $_POST['username'];

        $sql_KH = "select * from khachhang where username = '$username'";
        $query_KH = mysqli_query($conn, $sql_KH); 

        foreach($query_KH as $key => $value){
            $sql_getMD = "select * from dathang";
            $query_getMD = mysqli_query($conn, $sql_getMD);

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $MDDH = '';
            $NgayDH = date('Y-m-d H:i:s');
            $TrangThai = '0';

            $count_MD = 0;
            if($query_getMD == null){
                $count_MD = 1;
                $MDDH = 'MD'.$count_MD;
            }else{
                $count_MD = mysqli_num_rows($query_getMD) + 1;
                $MDDH = 'MD'.$count_MD;

                while($valueMD = mysqli_fetch_array($query_getMD)){
                    if($valueMD['madonDH'] == $MDDH){
                        $count_MD++;
                        $MDDH = 'MD'.$count_MD;
                    }
                }
            }

            $sql_set_DH = "insert into dathang (madonDH, maKH, ngayDH, trangthai) values ('$MDDH', '$value[maKH]', '$NgayDH', '$TrangThai')";
            mysqli_query($conn, $sql_set_DH);

            //xu ly bang chi tiet dat hang
            foreach($_SESSION['cart'][$username] as $valueCT){
                $sql_set_CT = "insert into chitietdathang values ('$MDDH', '$valueCT[maSP]', '$valueCT[soluongdathang]', '$valueCT[tonggiatien]')";
                mysqli_query($conn, $sql_set_CT);
            }
        }

        //xoa session khi xu ly xong
        unset($_SESSION['cart'][$username]);
        echo '<table class="table table-striped table-light table_giohang_KH">  
        <tbody>
            <tr>
                <th scope="col" class="col_giohang_thongbao">
                    Đặt Hàng Thành Công !!!
                </th>       
            </tr>
        </tbody>
        </table>';
    }


    // tim kiem san pham
        // filter cho input
    if(isset($_GET['txt_search']) && $_GET['txt_search'] != ''){
        $txt_search = $_GET['txt_search'];
        $search_output = '';

        $sql = "select * from xe where tenXe like '%$txt_search%' or tenXe = '$txt_search'";
        $query = mysqli_query($conn, $sql);

        $sp_name_array = array();
        foreach($query as $key_name => $value_name){
            array_push($sp_name_array, $value_name['tenXe']); 
        }

        $count_sp = count($sp_name_array);

        if($count_sp > 0){
            if($count_sp > 7){
                $index = array_rand($sp_name_array, 7);
                foreach($index as $key_in => $value_in){
                    $search_output .= '<button class="div_filter_sp" value="'.$sp_name_array[$value_in].'">'.$sp_name_array[$value_in].'</button>'; 
                }
            }else{
                foreach($sp_name_array as $key_ar => $value_ar){
                    $search_output .= '<button class="div_filter_sp" value="'.$value_ar.'">'.$value_ar.'</button>'; 
                }
            }
        }
        echo $search_output;
    }
    
    //xem binh luan san pham
    if(isset($_POST['load_comments']) && $_POST['load_comments'] == "load_comments"){
        $txt_maXe = $_POST['txt_maXe'];
        $output_binhluan = '';

        $sqli_sort = "select * from binhluan where maXe = '$txt_maXe'";
        $query_sort = mysqli_query($conn, $sqli_sort);
        $count_BL = mysqli_num_rows( $query_sort);

        if($count_BL > 0){
            $sort_time_arr = [];
            foreach($query_sort as $key_sort => $value_sort){      
                array_unshift($sort_time_arr, $value_sort['thoigian']); // dua cac gia tri vao dau mang
            }  
    
            foreach($sort_time_arr as $key_sort_time_arr => $value_sort_time_arr){      
                $sqli_BL = "select * from binhluan where thoigian = '$value_sort_time_arr'";
                $query_BL = mysqli_query($conn, $sqli_BL);
    
                foreach($query_BL as $key_BL => $value_BL){
                    $sqli_CT = "select * from chitietbl where maBL = '$value_BL[maBL]'";
                    $query_CT = mysqli_query($conn, $sqli_CT);
                    
                    foreach($query_CT as $key_CT => $value_CT){
                        $sqli_KH = "select * from khachhang where maKH = '$value_CT[maKH]'";
                        $query_KH = mysqli_query($conn, $sqli_KH);

                        $ten = '';
                        $chucaidaidien = '';
        
                        foreach($query_KH as $key_KH => $value_KH){
                            $ten = $value_KH['hotenKH'];
                            $chucaidaidien = $value_KH['hotenKH'];
                        }
                        $lastIndex = strripos($chucaidaidien, ' ');
                        if($lastIndex == 0){
                            $chucaidaidien = substr($chucaidaidien, $lastIndex, 1);
                        }else{
                            $chucaidaidien = substr($chucaidaidien, $lastIndex+1, 1);
                        }
                        
                        $chucaidaidien = strtoupper($chucaidaidien);
                        $ten = strtoupper($ten);

                        $output_binhluan .= '<div class="KH_binhluan">
                        <div class="KH_binhluan_user"><p class="tendaidien">'.$chucaidaidien.'</p><p class="ten">'.$ten.'</p><div class="detail-clear"></div></div>';
                    }
    
                    $sqli_out = "select * from chitietbl where maBL = '$value_BL[maBL]'";
                    $query_out = mysqli_query($conn, $sqli_out);
                    foreach( $query_out as $key_out => $value_out){ 
                        $output_binhluan .= '<p>'.$value_out['noidung'].'</p>'.
                                            '<p>'.$value_BL['thoigian'].'</p>';
                    }  
                    $output_binhluan .= "</div>"; 
                }
            }
        }else{
            $output_binhluan .= '<h3 style="color: red;">Chưa Có Bình Luận</h3>';
        }
    
        echo $output_binhluan;
    }
        //binh luan
    if(isset($_POST['gui_comments']) && $_POST['gui_comments'] = "gui_comments"){
        $txt_binhluan = $_POST['txt_binhluan'] ;
        $txt_maXe = $_POST['txt_maXe'] ;
        $txt_sessionUser = $_POST['txt_sessionUser'] ;
        $maKH = '';

        $sql_getKH = "select * from khachhang where username = '$txt_sessionUser'";
        $query_getKH = mysqli_query($conn, $sql_getKH);

        foreach($query_getKH as $key_getKH => $value_getKH){
            $maKH = $value_getKH['maKH']; 
        }

        $sql_getBL = "select * from binhluan";
        $query_getBL = mysqli_query($conn, $sql_getBL);

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $maBL = '';
        $thoigian = date('Y-m-d H:i:s');

        $count_BL = 0;
        if($query_getBL == null){
            $count_BL = 1;
            $maBL = 'BL'.$count_BL;
        }else{
            $count_BL = mysqli_num_rows($query_getBL) + 1;
            $maBL = 'BL'.$count_BL;

            while($valueBL = mysqli_fetch_array($query_getBL)){
                if($valueBL['maBL'] == $maBL){
                    $count_MD++;
                    $maBL = 'BL'.$count_BL;
                }
            }
        }

        $sql_set_BL = "insert into binhluan (maBL, maXe, thoigian) values ('$maBL', '$txt_maXe', '$thoigian')";
        mysqli_query($conn, $sql_set_BL);

        $sql_set_CTBL = "insert into chitietbl (maBL, maKH, noidung) values ('$maBL', '$maKH', '$txt_binhluan')";
        mysqli_query($conn, $sql_set_CTBL);   
    }

    // echo ''.$maBL.''.$thoigian.''.$maKH.'';
    // echo  $FSP_filename.'</br>';
        // echo  $FSP_SPmanhom.'</br>';
        // echo  $FSP_TSSPdongco.'</br>';
        // echo  $FSP_TSSPcongsuat.'</br>';
        // echo  $FSP_TSSPxylanh.'</br>';
        // echo  $FSP_TSSPkhoiluong.'</br>';
        // echo  $FSP_TSSPdocaoyen.'</br>';
        // echo  $FSP_TSSPbinhxang.'</br>';
        // echo  $FSP_TSSPhopso.'</br>';
        // echo  $FSP_SPdacdiem.'</br>';
        // echo $value['maTS'];
?>