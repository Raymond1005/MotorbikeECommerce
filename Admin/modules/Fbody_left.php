<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Quản Lý Sản Phẩm <i class='fas fa-caret-down' ></i>
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body" >
                <div class="QL_sanpham"> <a href="index.php?Fxem=Fsanpham" ><i class='fas fa-angle-right' ></i> Sản Phẩm</a></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Quản Lý Đơn Hàng <i class='fas fa-caret-down' ></i>
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body" >
                <div class="QL_sanpham"><a href="index.php?Fxem=Fdonhang" ><i class='fas fa-angle-right' ></i> Đơn Hàng</a></div>
            </div>
        </div>
    </div>
    <?php 
      $Fusername = $_SESSION['Fuser'];
      $sql = "select * from nhanvien where Fusername = '$Fusername'"; 
      $query =  mysqli_query($conn, $sql);

        foreach($query as $key => $value){ 
          if($value['chucvu'] == "admin"){
    ?>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree" >
                    Quản Lý Nhân Viên <i class='fas fa-caret-down' ></i>
                </button>
                
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body" >
                <div class="QL_NVUser">
                    <a href="index.php?Fxem=Fnhanvien" ><i class='fas fa-angle-right' ></i> Nhân Viên</a>
                </div>

                <div class="QL_NV_NewUser">
                    <a href="index.php?Fxem=Fform_NewUser" ><i class='fas fa-angle-right' ></i> Cấp Mới Tài Khoản</a>
                </div>

                <!-- <div class="QL_thongtinkhachhang">
                    <a href="index.php?Fxem=Fform_thongtinkhachhang" ><i class='fas fa-angle-right' ></i> Xem Thông Tin Khách Hàng</a>
                </div> -->
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour" >
                    Thông Tin Khách Hàng <i class='fas fa-caret-down' ></i>
                </button>
                
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body" >

                <div class="QL_thongtinkhachhang">
                    <a href="index.php?Fxem=Fform_thongtinkhachhang" ><i class='fas fa-angle-right' ></i> Xem Thông Tin Khách Hàng</a>
                </div>
            </div>
        </div>
    </div>
    <?php
          }  
      }          
    ?>
</div>