 //slider
 $(document).ready(function() {
     $('.owl-carousel').owlCarousel({
         loop: true,
         margin: 10,
         dots: null,
         nav: true,
         autoplay: true,
         autoplayTimeout: 1500,
         autoplayHoverPause: true,
         navText: ["<img src='images/muitentrai.png' width=20px >", "<img src='images/muitenphai.png' width=20px>"],
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 3
             },
             1000: {
                 items: 5
             }
         }
     });
 });

 //thong tin khach hang khong co tai khoan
 $(document).ready(function() {
     var modal = $('.thongtingiaohang');
     var btn = $('.btn_muangay');
     var span = $('.close');

     btn.click(function() {
         modal.show();
     });

     span.click(function() {
         modal.hide();
     });

     $(window).on('click', function(e) {
         if ($(e.target).is('.thongtingiaohang')) {
             modal.hide();
         }
     });

     $('#gui_thongtin').click(
         function() {
             var hoten = $('#id_hoTen').val();
             var diachi = $('#id_DC').val();
             var SDT = $('#id_SDT').val();
             var maso_sp = $('#maSP_NoUser').val();

             if ($('#id_hoten').val() == '' || $('#id_diachi').val() == '' || $('#id_SDT').val() == '') {
                 alert("Vui lòng nhập đầy đủ thông tin giao hàng !!!");
             } else if (SDT.length != 10) {
                 alert("Nhập số điện thoại gồm 10 số");
             } else {
                 $.ajax({
                     url: "./ajax/ajax.php",
                     method: "POST",
                     data: { hoten: hoten, diachi: diachi, SDT: SDT, maso_sp: maso_sp },
                     success: function(data) {
                         alert(data);
                         modal.hide();
                     }
                 });
             }
         }
     );
 });

 //thong tin khach hang co tai khoan
 $(document).ready(function() {
     var modal = $('.dangky_taikhoan');
     var btn = $('#btn_dangky');
     var span = $('.close_dangky');
     var check_TK = $('#id_DK_TK');

     var btnn = $('.btn_dangky_detail');

     btn.click(function() {
         modal.show();
     });

     btnn.click(function() {
         modal.show();
     });

     span.click(function() {
         modal.hide();
     });

     $(window).on('click', function(e) {
         if ($(e.target).is('.dangky_taikhoan')) {
             modal.hide();
         }
     });

     check_TK.blur(function() {
         var check_taikhoan = $('#id_DK_TK').val();

         $.ajax({
             url: "./ajax/ajax.php",
             method: "POST",
             data: { check_user_DK: check_taikhoan },
             success: function(data) {
                 if (data != '') {
                     alert(data);
                 }
             }
         });
     });


     $('#gui_dangky').click(
         function() {
             var taikhoan = $('#id_DK_TK').val();
             var matkhau = $('#id_DK_MK').val();

             var hoten = $('#id_DK_hoTen').val();
             var namsinh = $('#id_DK_namsinh').val();
             var gioitinh_arr = document.getElementsByName("gioitinh");
             var gioitinh = '';
             for (var i = 0; i < gioitinh_arr.length; i++) {
                 if (gioitinh_arr[i].checked === true) {
                     gioitinh = gioitinh_arr[i].value;
                 }
             }
             var diachi = $('#id_DK_DC').val();
             var SDT = $('#id_DK_SDT').val();
             var email = $('#id_DK_email').val();

             if (taikhoan == '' || matkhau == '' || hoten == '' || namsinh == '' || gioitinh == '' || diachi == '' || SDT == '' || email == '') {
                 alert("Vui lòng nhập đầy đủ thông tin đăng ký!!!");
             } else if (SDT.length != 10) {
                 alert("Nhập số điện thoại gồm 10 số");
             } else {
                 $.ajax({
                     url: "./ajax/ajax.php",
                     method: "POST",
                     data: { user_DK: taikhoan, matkhau: matkhau, hoten: hoten, namsinh: namsinh, gioitinh: gioitinh, diachi: diachi, SDT: SDT, email: email },
                     success: function(data) {

                         //  $('#id_DK_TK').reset();
                         //  $('#id_DK_MK').reset();

                         //  $('#id_DK_hoTen').reset();
                         //  $('#id_DK_namsinh').reset();

                         //  for (var i = 0; i < gioitinh_arr.length; i++) {
                         //      if (gioitinh_arr[i].checked === true) {
                         //          gioitinh_arr[i].reset();
                         //      }
                         //  }
                         //  $('#id_DK_DC').reset();
                         //  $('#id_DK_SDT').reset();
                         //  $('#id_DK_email').reset();

                         alert(data);
                         modal.hide();
                     }
                 });
             }
         }
     );
 });
 //dang nhap
 $(document).ready(function() {
     var modal = $('.loginform');
     var btn = $('#btn_dangnhap');
     var span = $('.close_dangnhap');

     var btnn = $('.btn_dangnhap_detail');

     btn.click(function() {
         modal.show();
     });

     btnn.click(function() {
         modal.show();
     });

     span.click(function() {
         modal.hide();
     });

     $(window).on('click', function(e) {
         if ($(e.target).is('.loginform')) {
             modal.hide();
         }
     });

     $('#gui_dangnhap').click(
         function() {
             var taikhoan = $('#id_DN_TK').val();
             var matkhau = $('#id_DN_MK').val();

             if (taikhoan == '' || matkhau == '') {
                 alert("Vui lòng nhập đầy đủ tài khoản va mật khẩu !!!");
             }
         });
 });

 //Loc Trang San Pham
 $(document).ready(function() {
     btn_moto = $('#id_xemotor');
     btn_moto_val = $('#id_xemotor').val();

     btn_xeso = $('#id_xeso');
     btn_xeso_val = $('#id_xeso').val();

     btn_contay = $('#id_xecontay');
     btn_contay_val = $('#id_xecontay').val();

     btn_tayga = $('#id_xetayga');
     btn_tayga_val = $('#id_xetayga').val();

     function gui_filter_SP(val) {
         $.ajax({
             url: "./ajax/ajax.php",
             method: "POST",
             data: { filter_SP: val },
             success: function(data) {
                 $('.SanPham_main').html(data);
             }
         });
     }
     btn_moto.click(function() {
         gui_filter_SP(btn_moto_val);
     });
     btn_xeso.click(function() {
         gui_filter_SP(btn_xeso_val);
     });
     btn_contay.click(function() {
         gui_filter_SP(btn_contay_val);
     });
     btn_tayga.click(function() {
         gui_filter_SP(btn_tayga_val);
     });
     gui_filter_SP(btn_moto_val);
 });

 //Them san pham vao gio hang
 $(document).ready(function() {
     thongtin_tk_add = $('#id_user_add_gh').val();

     var modal = $('.add_giohang');
     var btn = $('.btn_muangay_user');
     var span = $('.close_add_giohang');

     var maso_sp = $('#layid').val();
     var nhom_sp = $('#laymanhom').val();

     function gui_thongtin_SP(val1, val2) {
         $.ajax({
             url: "./ajax/ajax.php",
             method: "POST",
             data: { maso: val1, manhom: val2 },
             success: function(data) {
                 $('.main_add_giohang').html(data);
             }
         });
     }
     if (maso_sp != '' && nhom_sp != '') {
         gui_thongtin_SP(maso_sp, nhom_sp);
     }

     btn.on('click', function() {
         modal.show();
     });

     span.click(function() {
         modal.hide();
     });

     $(window).on('click', function(e) {
         if ($(e.target).is('.add_giohang')) {
             modal.hide();
         }
     });

     $('#gui_add_giohang').on('click', function() {
         soluongmua = $('#soluong_add_giohang').val();

         $.ajax({
             url: "./ajax/ajax.php",
             method: "POST",
             data: { username_add: thongtin_tk_add, maso: maso_sp, manhom: nhom_sp, soluongmua: soluongmua },
             success: function(data) {
                 alert("Thêm Sản Phẩm Vào Giỏ Hàng Thành Công!");
                 modal.hide();
             }
         });

     });
 });

 // trang thong tin khach hang
 $(document).ready(function() {
     thongtin_tk_val = $('#id_user').val();

     btn = $('.btn_nav_KH');

     btn_thongtin_tk = $('#id_thongtin_tk');
     btn_capnhat_tt = $('#id_capnhat_tt');
     btn_doimatkhau = $('#id_doimatkhau');
     btn_giohang = $('#id_giohang');
     btn_id_showuser = $('#id_showuser');
     btn_into_cart = $('#into_cart');

     $('.collapse').collapse('show');

     btn.click(function() {
         if ($('.collapse').collapse('hide')) {
             $('.collapse').collapse('show');
         } else {
             $('.collapse').collapse('hide');
         }
     });

     function yeucau_thongtin_suathongtin(val1, val2) {
         $.ajax({
             url: "./ajax/ajax.php",
             method: "POST",
             data: { username: val1, yeucau: val2 },
             success: function(data) {
                 $('.cus_right').html(data);

                 //xuly sua thong tin khach hang
                 $(document).ready(function() {
                     btn_upd = $('#id_gui_upd_tt');

                     btn_upd.click(function() {
                         upd_hoten_val = $('#id_upd_hoTen').val();
                         upd_diachi_val = $('#id_upd_diachi').val();
                         upd_SDT_val = $('#id_upd_SDT').val();
                         upd_email_val = $('#id_upd_email').val();

                         upd_namsinh_arr = document.getElementById("id_upd_select");
                         upd_namsinh_val = '';
                         for (var j = 0; j < upd_namsinh_arr.length; j++) {
                             if (upd_namsinh_arr[j].selected === true) {
                                 upd_namsinh_val = upd_namsinh_arr[j].value;
                             }
                         }

                         upd_gioitinh_arr = document.getElementsByName("upd_gioitinh");
                         upd_gioitinh_val = '';

                         for (var i = 0; i < upd_gioitinh_arr.length; i++) {
                             if (upd_gioitinh_arr[i].checked === true) {
                                 upd_gioitinh_val = upd_gioitinh_arr[i].value;
                             }
                         }

                         if (upd_SDT_val != '') {
                             if (upd_SDT_val.length != 10) {
                                 alert("Nhập số điện thoại gồm 10 số");
                             } else {
                                 $.ajax({
                                     url: "./ajax/ajax.php",
                                     method: "POST",
                                     data: {
                                         username: thongtin_tk_val,
                                         upd_hoten_val: upd_hoten_val,
                                         upd_diachi_val: upd_diachi_val,
                                         upd_SDT_val: upd_SDT_val,
                                         upd_email_val: upd_email_val,
                                         upd_gioitinh_val: upd_gioitinh_val,
                                         upd_namsinh_val: upd_namsinh_val
                                     },
                                     success: function(data) {
                                         alert(data);
                                         yeucau_thongtin_suathongtin(thongtin_tk_val, "thongtinkhachhang");
                                     }
                                 });
                             }
                         } else {
                             $.ajax({
                                 url: "./ajax/ajax.php",
                                 method: "POST",
                                 data: {
                                     username: thongtin_tk_val,
                                     upd_hoten_val: upd_hoten_val,
                                     upd_diachi_val: upd_diachi_val,
                                     upd_SDT_val: upd_SDT_val,
                                     upd_email_val: upd_email_val,
                                     upd_gioitinh_val: upd_gioitinh_val,
                                     upd_namsinh_val: upd_namsinh_val
                                 },
                                 success: function(data) {
                                     alert(data);
                                     yeucau_thongtin_suathongtin(thongtin_tk_val, "thongtinkhachhang");
                                 }
                             });
                         }
                     });
                 });
             }
         });
     }

     function doimatkhau(val1, val2) {
         $.ajax({
             url: "./ajax/ajax.php",
             method: "POST",
             data: { username: val1, yeucau: val2 },

             success: function(data) {
                 $('.cus_right').html(data);

                 btn_upd_dmk = $('#id_gui_upd_dmk');
                 btn_upd_re_dmk = $('#id_re_upd_pass');

                 btn_upd_re_dmk.blur(function() {
                     upd_pass_val = $('#id_upd_pass').val();
                     upd_re_pass_val = $('#id_re_upd_pass').val();
                     if (upd_pass_val !== upd_re_pass_val) {
                         alert("Mật Khẩu Không Khớp!!");
                     }
                 });

                 btn_upd_dmk.click(function() {
                     upd_pass_val = $('#id_upd_pass').val();
                     upd_re_pass_val = $('#id_re_upd_pass').val();

                     if (upd_pass_val == '' || upd_re_pass_val == '') {
                         alert("Nhập Đầy Đủ Thông Tin Còn Thiếu!!");
                     } else {
                         $.ajax({
                             url: "./ajax/ajax.php",
                             method: "POST",
                             data: {
                                 username: thongtin_tk_val,
                                 upd_pass_val: upd_pass_val,
                                 upd_re_pass_val: upd_re_pass_val,
                             },
                             success: function(data) {
                                 alert(data);
                                 yeucau_thongtin_suathongtin(thongtin_tk_val, "thongtinkhachhang");
                             }
                         });
                     }
                 });
             }
         });
     }

     function giohang(val1, val2) {
         $.ajax({
             url: "./ajax/ajax.php",
             method: "POST",
             data: { username: val1, yeucau: val2 },
             success: function(data) {
                 $('.cus_right').html(data);

                 function btn_dathang() {
                     $('#id_gui_dathang ').on('click', function() {
                         $.ajax({
                             url: "./ajax/ajax.php",
                             method: "POST",
                             data: {
                                 username: thongtin_tk_val,
                                 yeucau_dathang: "dat hang"
                             },
                             success: function(data) {
                                 $('.cus_right').html(data);
                             }
                         });
                     });
                 }

                 $(document).on('click', '.gui_huy_giohang ', function() {
                     maSP_huy = this.value;
                     $.ajax({
                         url: "./ajax/ajax.php",
                         method: "POST",
                         data: {
                             username: thongtin_tk_val,
                             maSP_huy: maSP_huy
                         },
                         success: function(data) {
                             $('.cus_right').html(data);

                             btn_dathang();
                         }
                     });
                 });

                 $(document).on('click', '.gui_sua_giohang ', function() {
                     maSP_sua = this.value;
                     id_SLD = 'soluong_dat_' + maSP_sua;

                     soluongmua = $('.' + id_SLD + '').val();

                     $.ajax({
                         url: "./ajax/ajax.php",
                         method: "POST",
                         data: {
                             username: thongtin_tk_val,
                             maSP_sua: maSP_sua,
                             soluongmua: soluongmua
                         },
                         success: function(data) {
                             $('.cus_right').html(data);

                             btn_dathang();
                         }
                     });
                 });

                 btn_dathang()
             }
         });
     }

     btn_capnhat_tt.click(function() {
         yeucau_thongtin_suathongtin(thongtin_tk_val, "capnhatthongtin");
     });

     btn_thongtin_tk.click(function() {
         yeucau_thongtin_suathongtin(thongtin_tk_val, "thongtinkhachhang");
     });

     btn_doimatkhau.click(function() {
         doimatkhau(thongtin_tk_val, "doimatkhau");
     });

     btn_giohang.click(function() {
         giohang(thongtin_tk_val, "giohang");
     });

     btn_id_showuser.click(function() {
         yeucau_thongtin_suathongtin(thongtin_tk_val, "thongtinkhachhang");
     });
     btn_into_cart.click(function() {
         giohang(thongtin_tk_val, "giohang");
     });

     yeucau_thongtin_suathongtin(thongtin_tk_val, "thongtinkhachhang");
 });


 //tim kiem san pham
 //goi y ten san pham
 function filter_search() {
     var txt_search = $('#input_search').val();
     if (txt_search == '') {
         $("button.div_filter_sp").css('display', 'none');
     }
     $.ajax({
         url: "./ajax/ajax.php",
         method: "GET",
         data: {
             txt_search: txt_search
         },
         success: function(data) {
             $('.txt_search_filter').html(data);
         }
     });
 }
 $(document).ready(function() {

     $(window).on('scroll', function() {
         $("button.div_filter_sp").css('display', 'none');
     });

     $(document).on('click', '.div_filter_sp', function() {
         tenXe = this.value;
         document.getElementById("input_search").value = tenXe;
         $("button.div_filter_sp").css('display', 'none');
     });
 });
 //scroll to top cho trang tim kiem san pham
 $(document).ready(function() {
     var btn_search_scroll = document.getElementById("btn_search_scroll");

     function scrollFunction() {
         if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
             btn_search_scroll.style.display = "block";
         } else {
             btn_search_scroll.style.display = "none";
         }
     }
     window.onscroll = function() {
         scrollFunction()
     };

     function topFunction() {
         document.body.scrollTop = 700;
         document.documentElement.scrollTop = 700;
     }
     btn_search_scroll.onclick = function() {
         topFunction()
     };
 });

 // Binh luan san pham
 $(document).ready(function() {
     var btn_binhluan = $("#btn_gui_comment");

     function load_comments() {
         $.ajax({
             url: "./ajax/ajax.php",
             method: "POST",
             data: {
                 load_comments: "load_comments",
                 txt_maXe: $('#BL_comment_xe').val()
             },
             success: function(data) {
                 $('.comment_main').html(data);
                 //  alert(data);
             }
         });
     }

     btn_binhluan.click(function() {
         if ($('#id_comment_BL').val() != '') {
             if ($('#BL_comment_KH').val() != '') {
                 $.ajax({
                     url: "./ajax/ajax.php",
                     method: "POST",
                     data: {
                         gui_comments: "gui_comments",
                         txt_binhluan: $('#id_comment_BL').val(),
                         txt_maXe: $('#BL_comment_xe').val(),
                         txt_sessionUser: $('#BL_comment_KH').val()
                     },
                     success: function(data) {
                         load_comments();
                     }
                 });
             } else {
                 alert("Vui Lòng Đăng Nhập Để Bình Luận !!");
             }
         }
     });

     load_comments();
 });
 //      btn_prev = $('#trangtruoc');
 //      btn_prev_value = $('#trangtruoc').val();

 //  btn_tr = $('.trangtrong');
 //  btn_tr_value = $('.trangtrong').val();

 //      btn_next = $('#trangsau');
 //      btn_next_value = $('#trangsau').val();

 //      default_page = "1";
 //      if (btn_prev.click()) {

 //      }

 //      if (btn_next.click()) {

 //      }

 //      btn_tr.click(function() {
 //          default_page = btn_tr_value;
 //      });



 //      //  if () {

 //      //  } else if () {

 //      //  } else if () {

 //      //  } else {
 //      //      function default_page(page) {
 //      //          $.ajax({
 //      //              url: "./ajax/ajax.php",
 //      //              method: "POST",
 //      //              data: { default_tr: page },
 //      //              success: function(data) {
 //      //                  alert(data);
 //      //              }
 //      //          });
 //      //      }

 //      //      default_page(first_page);
 //      //  }
 //      function paging(page) {
 //   $.ajax({
 //       url: "./ajax/ajax.php",
 //       method: "POST",
 //       data: { page: page },
 //       success: function(data) {
 //           //  $('.body-main').html(data);
 //           //  alert(data);
 //           alert(page);
 //       }
 //   });
 //      }

 //      paging(default_page);

 //  });
 //  });
 //  });