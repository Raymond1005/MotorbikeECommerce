-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 02, 2021 lúc 04:28 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanxemay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` varchar(5) NOT NULL,
  `maXe` varchar(5) NOT NULL,
  `thoigian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`maBL`, `maXe`, `thoigian`) VALUES
('BL1', 'XE11', '2021-06-01 11:10:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbl`
--

CREATE TABLE `chitietbl` (
  `maBL` varchar(5) NOT NULL,
  `maKH` varchar(5) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietbl`
--

INSERT INTO `chitietbl` (`maBL`, `maKH`, `noidung`) VALUES
('BL1', 'MS2', 'xe dep');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `madonDH` varchar(5) NOT NULL,
  `maXe` varchar(5) NOT NULL,
  `soluongdat` tinyint(4) NOT NULL,
  `tonggia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`madonDH`, `maXe`, `soluongdat`, `tonggia`) VALUES
('MD1', 'XE10', 1, 180000000),
('MD2', 'XE12', 1, 468000000),
('MD2', 'XE13', 2, 2098000000),
('MD2', 'XE2', 3, 90570000),
('MD3', 'XE2', 1, 30190000),
('MD4', 'XE11', 1, 253990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `madonDH` varchar(5) NOT NULL,
  `maKH` varchar(5) NOT NULL,
  `ngayDH` datetime NOT NULL,
  `trangthai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`madonDH`, `maKH`, `ngayDH`, `trangthai`) VALUES
('MD1', 'MS1', '2021-06-01 00:01:38', '1'),
('MD2', 'MS2', '2021-06-01 00:02:57', '0'),
('MD3', 'MS3', '2021-06-01 11:05:30', '0'),
('MD4', 'MS2', '2021-06-01 11:05:47', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` varchar(5) NOT NULL,
  `hotenKH` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `SDTkhachhang` varchar(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `namsinh` varchar(4) DEFAULT NULL,
  `gioitinh` varchar(3) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `hotenKH`, `diachi`, `SDTkhachhang`, `username`, `namsinh`, `gioitinh`, `email`, `password`) VALUES
('MS1', 'Nguyễn Văn A', 'Đông Bình, Bình Minh, Vĩnh Long', '1234567890', NULL, NULL, NULL, NULL, NULL),
('MS2', 'Lê Trung Toàn', 'Mỹ Lợi, Mỹ Hòa, Bình Minh, Vĩnh Long', '0767007675', 'Raymond', '1999', 'nam', 'toanb1706541@student.ctu.edu.vn', '1'),
('MS3', 'testcase', 'b', '0976543289', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` varchar(5) NOT NULL,
  `hotenNV` varchar(50) NOT NULL,
  `chucvu` varchar(50) NOT NULL,
  `diachiNV` varchar(50) NOT NULL,
  `SDTnhanvien` varchar(10) NOT NULL,
  `Fusername` varchar(50) NOT NULL,
  `Fpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hotenNV`, `chucvu`, `diachiNV`, `SDTnhanvien`, `Fusername`, `Fpassword`) VALUES
('NV1', 'Lê Trung Toàn', 'admin', 'Vĩnh Long', '0767007675', 'admin', '1'),
('NV2', 'Khanh', 'nhanvien', 'CT', '0939765234', 'nhanvien', '1'),
('NV3', 'qui', 'nhanvien', 'An Giang', '0986754321', 'qui', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomxe`
--

CREATE TABLE `nhomxe` (
  `manhom` varchar(5) NOT NULL,
  `tennhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhomxe`
--

INSERT INTO `nhomxe` (`manhom`, `tennhom`) VALUES
('CT', 'Xe Côn Tay'),
('MT', 'Xe Mô Tô'),
('TG', 'Xe  Tay Ga'),
('XS', 'Xe Số');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongsokythuat`
--

CREATE TABLE `thongsokythuat` (
  `maTS` varchar(6) NOT NULL,
  `dongco` varchar(255) NOT NULL,
  `congsuat` varchar(255) NOT NULL,
  `dungtichxylanh` varchar(255) NOT NULL,
  `khoiluong` varchar(255) NOT NULL,
  `docaoyen` varchar(255) NOT NULL,
  `dungtichbinhxang` varchar(255) NOT NULL,
  `hopso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongsokythuat`
--

INSERT INTO `thongsokythuat` (`maTS`, `dongco`, `congsuat`, `dungtichxylanh`, `khoiluong`, `docaoyen`, `dungtichbinhxang`, `hopso`) VALUES
('TS1', 'Xăng, 4 kỳ, 1 xi-lanh, làm mát bằng không khí', '6,18 kW/7.500 vòng/phút', '109,1 cc', '98kg', '769 mm', '3,7 lít', 'Cơ khí, 4 cấp'),
('TS10', ' 4 kỳ, 2 xi-lanh, PGM-FI, làm mát bằng chất lỏng, DOHC', ' 33,5kW / 8500 vòng/phút', ' 471 cc', '190 kg', ' 690 mm', '11,2 Lít', ' 6 cấp'),
('TS11', ' 4 kỳ, 4 xy lanh, 16 van DOHC, làm mát bằng chất lỏng', '70,0 kW/ 12.000 vòng/ phút', ' 649 cc', ' 208 kg', ' 810 mm', ' 15,4 Lít', '6 cấp'),
('TS12', ' DOHC, 4 kỳ, 4 xi lanh, PGM-FI, làm mát bằng chất lỏng', ' 107 kW / 10,500 vòng/phút', ' 998 cc', '212 kg', ' 830 mm', ' 16.2 Lít', ' 6 cấp'),
('TS13', '4 xy lanh thẳng hàng, PGM-FI, 4 kỳ, làm mát bằng chất lỏng, DOHC 16 van', ' 160Kw/14.500 vòng/phút', ' 1.000 cc', ' 201kg', ' 830 mm', ' 16,1 lít', ' 6 cấp'),
('TS14', 'Động cơ xy-lanh đôi, 4 kỳ, DOHC, làm mát bằng chất lỏng', ' 35 kW / 8.600 vòng/phút', ' 471 cc', ' 197 kg', ' 830 mm', ' 17,5 lít', ' 6 cấp'),
('TS2', 'Xăng, làm mát bằng không khí, 4 kỳ, 1 xy-lanh', '6,83 kW/7.500 vòng/phút', '124,9 cc', '104kg', '756 mm', '4,6 lít', ' 4 cấp'),
('TS3', 'PGM-FI, SOHC 4 kỳ, 1 xi lanh, làm mát bằng không khí', '6,79kW tại 7.500 vòng/phút', '124,9 cc', '108kg', '780mm', ' 3,7 lít', '4 cấp'),
('TS4', ' Xăng, 4 kỳ, 1 xi-lanh, làm mát bằng không khí', ' 6,59kW/7.500 vòng/phút', '109,5 cc', '97kg', ' 761mm', ' 4,9 lít', ' 0 cấp'),
('TS5', '4 kỳ, 4 van, làm mát bằng dung dịch', '8,2 kW/8500 vòng/phút', '124,8 cc', '116 kg', '765 mm', ' 5,6 lít', '0 cấp'),
('TS6', ' PGM-FI, xăng, 4 kỳ, 1 xy-lanh, làm mát bằng dung dịch', '12,4kW/8.500 vòng/phút', '156,9 cc', '134 kg', '799 mm', ' 7,8 lít', '0 cấp'),
('TS7', 'PGM-FI, 4 kỳ, DOHC, xy-lanh đơn, côn 6 số, làm mát bằng dung dịch', '11,5kW/9.000 vòng/phút', '149,1 cc', '123 kg', '795 mm', ' 4,5 lít', '6 cấp'),
('TS8', ' PGM-FI, DOHC, 4 kỳ, 1 xy lanh, làm mát bằng chất lỏng', ' 12kW/9.500 vòng/phút', '149,2 cc', ' 125kg', ' 795 mm', '8,5 lít', ' 6 cấp'),
('TS9', 'PGM-FI, 4 kỳ, 2 van, xy-lanh đơn, côn 4 số, làm mát bằng không khí', '6,9 kW/7.000 vòng/phút', '125 cc', ' 104 kg', '704 mm', '5,7 lít', '4 cấp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `maXe` varchar(5) NOT NULL,
  `tenXe` varchar(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` tinyint(4) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `manhom` varchar(5) NOT NULL,
  `maTS` varchar(6) NOT NULL,
  `dacDiem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`maXe`, `tenXe`, `gia`, `soluong`, `hinhanh`, `manhom`, `maTS`, `dacDiem`) VALUES
('XE1', 'Blade 110', 18800000, 50, 'images/images_SP/Blade.png', 'XS', 'TS1', 'Với tem xe mới, Blade mang một diện mạo đầy mạnh mẽ, khỏe khoắn, tạo nên phong cách thể thao và năng động cho người lái.'),
('XE10', 'Rebel 500 ', 180000000, 98, 'images/images_SP/rebel500.png', 'MT', 'TS10', 'Đánh dấu cá tính riêng Tự do, phóng khoáng chính là phong cách sống mà Rebel 500 đang hướng đến cho người lái.'),
('XE11', 'CBR650R ', 253990000, 110, 'images/images_SP/CBR650R.png', 'MT', 'TS11', 'Được lấy trực tiếp từ phong cách thể thao của Fireblade, CBR650R đã mài giũa DNA đường đua của mình cho hiệu suất đường trường tích cực.'),
('XE12', 'CB1000R', 468000000, 127, 'images/images_SP/CB1000R.png', 'MT', 'TS12', 'CB1000R mang trong mình dòng máu thiết kế mới: NEO SPORTS CAFÉ, hướng đến những người lái luôn khát khao được sở hữu cỗ máy có hiệu năng mạnh mẽ, đi cùng với phong cách ấn tượng, hướng đến sự trọn vẹn và tinh tế.'),
('XE13', 'CBR1000RR-R', 1049000000, 127, 'images/images_SP/CBR1000RR.png', 'MT', 'TS13', 'ĐƯỜNG ĐUA LÀ SÂN CHƠI CỦA BẠN Nơi bạn sống thực với đam mê CBR1000RR-R Fireblade SP được trang bị hệ thống giảm xóc Smart Electronic Control (S-EC) thế hệ 2 và cụm phanh Brembo Stylema trên phanh trước.'),
('XE14', 'CB500X ', 187990000, 47, 'images/images_SP/CB500X.png', 'MT', 'TS14', 'Tự do, phóng khoáng nhưng không kém phần mạnh mẽ, CB500X chính là bạn đồng hành vững chãi của bạn cho bước đầu chinh phục niềm đam mê khám phá trên những cung đường đầy bất ngờ.'),
('XE2', 'Future 125 FI', 30190000, 45, 'images/images_SP/FutureFI.png', 'XS', 'TS2', 'Wave Alpha 110cc phiên bản 2020 trẻ trung và cá tính với thiết kế bộ tem mới, tạo những điểm nhấn ấn tượng, thu hút ánh nhìn, cho bạn tự tin ghi lại dấu ấn cùng bạn bè của mình trên mọi hành trình.'),
('XE3', 'Super Cub C125', 84990000, 20, 'images/images_SP/SuperCub.png', 'XS', 'TS3', 'Sự chuyển mình hoàn toàn khác biệt từ mẫu xe danh tiếng huyền thoại có lịch sử 60 năm, mở ra một kỷ nguyên mới, hướng tới người dùng thành thị hiện đại.'),
('XE4', 'Vision', 29990000, 67, 'images/images_SP/vision.png', 'TG', 'TS4', 'Thuộc phân khúc xe tay ga giá thấp, Vision luôn là mẫu xe được ưa chuộng trong giới trẻ và có số lượng bán ra lớn nhất tại thị trường Việt Nam suốt nhiều năm qua nhờ kiểu dáng trẻ trung, thanh lịch và nhỏ gọn.'),
('XE5', 'SH Mode 125', 53890000, 127, 'images/images_SP/SHmode125.png', 'TG', 'TS5', 'Thuộc phân khúc xe ga cao cấp và thừa hưởng thiết kế sang trọng nổi tiếng của dòng xe SH, Sh mode luôn được đánh giá cao nhờ kiểu dáng thanh lịch, tinh tế tới từng đường nét.'),
('XE6', 'SH 150i', 70990000, 90, 'images/images_SP/SH125i.png', 'TG', 'TS6', 'Thiết kế SH150i - Kiệt tác thiết kế đậm chất châu Âu nam tính dành riêng cho phiên bản 150 cc.'),
('XE7', 'Winner X', 4590000, 120, 'images/images_SP/WinnerX.png', 'CT', 'TS7', 'Lấy cảm hứng từ phong cách của những chiếc xe đua thể thao đậm chất Honda, WINNER X bổ sung Phiên bản giới hạn với tem và màu mới thêm lựa chọn thể hiện chất riêng của người lái.'),
('XE8', 'CB150R Exmotion', 105000000, 76, 'images/images_SP/CB150.png', 'CT', 'TS8', 'THIẾT KẾ CB150R là thành viên trong đại gia đình Neo Sport Cafe của Honda, với sự pha trộn hoàn hảo giữa cổ điển và đương đại, nam tính và đầy bản lĩnh.'),
('XE9', 'MSX125', 49990000, 127, 'images/images_SP/MSX125.png', 'CT', 'TS9', 'MSX125 mới thể hiện chất riêng với 3 sắc màu cá tính. Sự phối hợp hoàn hảo của hai gam màu cũng giúp cho tổng thể xe trở nên độc đáo hơn.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBL`),
  ADD KEY `FK_binhluan_xe` (`maXe`);

--
-- Chỉ mục cho bảng `chitietbl`
--
ALTER TABLE `chitietbl`
  ADD PRIMARY KEY (`maBL`,`maKH`) USING BTREE,
  ADD KEY `FK_chitietBL_KH` (`maKH`),
  ADD KEY `maBL` (`maBL`);

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`madonDH`,`maXe`) USING BTREE,
  ADD KEY `FK_chitietdathang_xe` (`maXe`),
  ADD KEY `madonDH` (`madonDH`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`madonDH`),
  ADD KEY `FK_khachhang_dathang` (`maKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);

--
-- Chỉ mục cho bảng `nhomxe`
--
ALTER TABLE `nhomxe`
  ADD PRIMARY KEY (`manhom`);

--
-- Chỉ mục cho bảng `thongsokythuat`
--
ALTER TABLE `thongsokythuat`
  ADD PRIMARY KEY (`maTS`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`maXe`),
  ADD KEY `FK_xe_nhomxe` (`manhom`),
  ADD KEY `FK_xe_thongsokythuat` (`maTS`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_binhluan_xe` FOREIGN KEY (`maXe`) REFERENCES `xe` (`maXe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietbl`
--
ALTER TABLE `chitietbl`
  ADD CONSTRAINT `FK_chitietBL_BL` FOREIGN KEY (`maBL`) REFERENCES `binhluan` (`maBL`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_chitietBL_KH` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `FK_chitietdathang_madonDH` FOREIGN KEY (`madonDH`) REFERENCES `dathang` (`madonDH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_chitietdathang_xe` FOREIGN KEY (`maXe`) REFERENCES `xe` (`maXe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `FK_khachhang_dathang` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `FK_xe_nhomxe` FOREIGN KEY (`manhom`) REFERENCES `nhomxe` (`manhom`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_xe_thongsokythuat` FOREIGN KEY (`maTS`) REFERENCES `thongsokythuat` (`maTS`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
