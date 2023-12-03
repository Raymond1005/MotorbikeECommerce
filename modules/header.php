<div class="header">
    <img src="images/toan.png" class="img-thumbnail logo" alt="logo" width=340px>
    <div class="nav justify-content-end menu">
        <ul class="nav nav-pills " >
            <li class="nav-item "><a href="index.php" class="nav-link a_ac active">TRANG CHỦ</a></li>
            <li class="nav-item "><a href="index.php?xem=tatcasanpham#id_SanPham" class="nav-link a_ac">SẢN PHẨM</a></li>
            <!-- <li class="nav-item "><a href="" class="nav-link a_ac">GIÁ XE MOTO</a></li>    -->
            <li class="nav-item "><a href="index.php?xem=lienhe#gioithieu" class="nav-link a_ac">GIỚI THIỆU</a></li>
        </ul>
        <nav class="navbar navbar-light ">
            <div class="container-fluid">
                <form class="d-flex fSearch" action="modules/search.php" method="GET">
                    <input onkeyup="filter_search()" id = "input_search" name="na_search" class="form-control me-2 cl_input_search" type="search" aria-label="Search" autocomplete="off">
                    <button id = "btn_search" class="btn btn-outline-success bn-search" type="submit">Search</button>
                </form>
            </div>

            <div class="txt_search_filter" >
                
            </div>
        </nav>
    </div>       
</div>