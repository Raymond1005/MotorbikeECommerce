function kiemTraRong() {
    Fusername = document.getElementById('Fusername').value;
    Fpassword = document.getElementById('Fpassword').value;

    if (Fusername == "" || Fusername == null || Fpassword == "" || Fpassword == null) {
        alert('Vui Lòng Nhập Đầy Đủ Tài Khoản Và Mật khẩu!');
        return false;
    } else {
        return true;
    }
}

//check rong them san Pham
$(document).ready(function() {
    $('#FSP_filename').change(function() {
        var filepath = this.value;
        var file_hinhanh = /(\.png)$/i;

        if (!file_hinhanh.exec(filepath)) {
            alert("Vui Lòng Nhập File Có Đuôi .png ");
            this.value = '';
            return false;
        }
    });
});

function kiemTraRong_themSP() {
    FSP_SPten = document.getElementById('FSP_SPten').value;

    FSP_SPgia = document.getElementById('FSP_SPgia').value;
    FSP_SPsoluong = document.getElementById('FSP_SPsoluong').value;
    FSP_filename = document.getElementById('FSP_filename').value;

    FSP_SPmanhom = $("#FSP_SPmanhom").find(":selected").val();

    FSP_TSSPdongco = document.getElementById('FSP_TSSPdongco').value;
    FSP_TSSPcongsuat = document.getElementById('FSP_TSSPcongsuat').value;
    FSP_TSSPxylanh = document.getElementById('FSP_TSSPxylanh').value;
    FSP_TSSPkhoiluong = document.getElementById('FSP_TSSPkhoiluong').value;
    FSP_TSSPdocaoyen = document.getElementById('FSP_TSSPdocaoyen').value;
    FSP_TSSPbinhxang = document.getElementById('FSP_TSSPbinhxang').value;
    FSP_TSSPhopso = document.getElementById('FSP_TSSPhopso').value;
    FSP_SPdacdiem = document.getElementById('FSP_SPdacdiem').value;

    if (FSP_SPten == '' || FSP_SPten == null || FSP_SPgia == '' || FSP_SPgia == null ||
        FSP_SPsoluong == '' || FSP_SPsoluong == null || FSP_SPmanhom == '' || FSP_SPmanhom == null ||
        FSP_TSSPdongco == '' || FSP_TSSPdongco == null || FSP_filename == '' || FSP_filename == null ||
        FSP_TSSPcongsuat == '' || FSP_TSSPcongsuat == null || FSP_TSSPxylanh == '' || FSP_TSSPxylanh == null ||
        FSP_TSSPkhoiluong == '' || FSP_TSSPkhoiluong == null || FSP_TSSPdocaoyen == '' || FSP_TSSPdocaoyen == null ||
        FSP_TSSPbinhxang == '' || FSP_TSSPbinhxang == null || FSP_TSSPhopso == '' || FSP_TSSPhopso == null) {
        alert('Vui Lòng Nhập Đầy Đủ Thông Tin!');
        return false;
    } else {
        return true;
    }
}

function kiemTraRong_themNV() {
    FSP_NVten = document.getElementById('FSP_NVten').value;

    FSP_NVdiachi = document.getElementById('FSP_NVdiachi').value;
    FSP_SPSDT = document.getElementById('FSP_SPSDT').value;
    FSP_NVtaikhoan = document.getElementById('FSP_NVtaikhoan').value;

    FSP_NVvaitro = $("#FSP_NVvaitro").find(":selected").val();

    FSP_NVmatkhau = document.getElementById('FSP_NVmatkhau').value;

    if (FSP_NVten == '' || FSP_NVten == null || FSP_NVdiachi == '' || FSP_NVdiachi == null ||
        FSP_SPSDT == '' || FSP_SPSDT == null || FSP_NVtaikhoan == '' || FSP_NVtaikhoan == null ||
        FSP_NVvaitro == '' || FSP_NVvaitro == null || FSP_NVmatkhau == '' || FSP_NVmatkhau == null) {
        alert('Vui Lòng Nhập Đầy Đủ Thông Tin!');
        return false;
    } else if (FSP_SPSDT.length != 10) {
        alert("Nhập Số Điện Thoại Gồm 10 Số");
        return false;
    } else {
        return true;
    }
}

function kiemTraSDT_suaNV() {
    FSP_SPSDT_sua = document.getElementById('FSP_SPSDT_sua').value;

    if (FSP_SPSDT_sua != '') {
        if (FSP_SPSDT_sua.length != 10) {
            alert("Nhập Số Điện Thoại Gồm 10 Số")
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function kiemTraMatKhau_NV() {
    FSP_newTK_maNV = document.getElementById('FSP_newTK_maNV').value;
    FSP_newTK_taikhoanNV = document.getElementById('FSP_newTK_taikhoanNV').value;

    FSP_newTK_matkhauNV = document.getElementById('FSP_newTK_matkhauNV').value;
    FSP_newTK_matkhaumoiNV = document.getElementById('FSP_newTK_matkhaumoiNV').value;

    if (FSP_newTK_maNV == '' || FSP_newTK_maNV == null || FSP_newTK_taikhoanNV == '' || FSP_newTK_taikhoanNV == null ||
        FSP_newTK_matkhauNV == '' || FSP_newTK_matkhauNV == null || FSP_newTK_matkhaumoiNV == '' || FSP_newTK_matkhaumoiNV == null) {
        alert('Vui Lòng Nhập Đầy Đủ Thông Tin!');
        return false;
    } else {
        if (FSP_newTK_matkhauNV !== FSP_newTK_matkhaumoiNV) {
            alert("Mật Khẩu Nhập Lại Không Khớp !!");
            return false;
        } else {
            return true;
        }
    }
}

function FtimkiemSP() {
    return true;
}

function Fdathang_loc() {
    return true;
}

function FtimkiemNV() {
    return true;
}
$(document).ready(function() {
    var btn_Fsearch_scroll = document.getElementById("btn_Fsearch_scroll");

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            btn_Fsearch_scroll.style.display = "block";
        } else {
            btn_Fsearch_scroll.style.display = "none";
        }
    }
    window.onscroll = function() {
        scrollFunction()
    };

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    btn_Fsearch_scroll.onclick = function() {
        topFunction()
    };
});
// kiem tra trung user
$(document).ready(function() {
    var FSP_NVtaikhoan = $('#FSP_NVtaikhoan');

    FSP_NVtaikhoan.blur(function() {
        var check_taikhoan = $('#FSP_NVtaikhoan').val();

        $.ajax({
            url: "./ajax/ajax.php",
            method: "POST",
            data: { check_user_DK_NV: check_taikhoan },
            success: function(data) {
                if (data != '') {
                    alert(data);
                }
            }
        });
    });
});
//show menu   
// $(document).ready(function() {
//     // var menu_left = document.getElementsByClassName('dropdown-toggle');
//     // for (var i = 0; i < menu_left.length; i++) {
//     //     menu_left[i].addEventListener('click', function() {
//     //         // $('.dropdown-toggle').click(function() {
//     //         //     $('.dropdown-menu').show();
//     //         // });


//     // if ($('.dropdown-menu').hide()) {
//     //     $('.dropdown-menu').show();
//     // } else {
//     //     $('.dropdown-menu').hide();
//     // }

//     //     });
//     // }

//     // $('.dropdown-toggle').click(function() {

//     // if ($('.dropdown-menu').hide()) {
//     //     $('.dropdown-menu').show();
//     // } else {
//     //     $('.dropdown-menu').hide();
//     // }
//     // });
//     // btn_menu = $('.btn_drop_menu');
//     // btn_menu.on('click', function() {
//     //     $('.dropdown').dropdown('show');
//     // });

// });
// });