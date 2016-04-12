-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 08:38 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saigonpolarexpo_banve_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `PASSWORD` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HOTEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `HINHANH` text COLLATE utf8_unicode_ci,
  `DIACHI` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DIENTHOAI` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GIOITINH` tinyint(1) DEFAULT NULL,
  `NGAYDANGNHAP` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`PASSWORD`, `HOTEN`, `NGAYSINH`, `HINHANH`, `DIACHI`, `EMAIL`, `DIENTHOAI`, `GIOITINH`, `NGAYDANGNHAP`) VALUES
('454144h8d58d5d821gh2d22dg25j1', 'admin', '2016-08-08', NULL, '123 Nguyễn trãi', 'admin@gmail.com', '0908560054', 0, '2016-08-08 00:00:00'),
('21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL, 'admin@admin.com', NULL, NULL, NULL),
('454144h8d58d5d821gh2d22dg25j1', NULL, NULL, NULL, NULL, 'admin@test.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chuyende`
--

CREATE TABLE IF NOT EXISTS `chuyende` (
  `ID` int(10) unsigned NOT NULL,
  `TEN` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NOI_DUNG` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `HINH_ANH` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chuyende`
--

INSERT INTO `chuyende` (`ID`, `TEN`, `NOI_DUNG`, `HINH_ANH`) VALUES
(1, 'Trượt băng cảm giác mạnh', 'Cùng trèo lên núi băng và khám phá những con đường băng đầy thách thức với cầu tuột băng lên đến 4 làn, bạn sẽ bất ngờ với trò chơi cảm giác mạnh tuyệt vời suốt mùa hè nóng nực.', 'TruotBangCamGiacManh.jpg'),
(2, 'Mô hình tàu phá băng vùng cực địa', 'Tàu phá băng đượctạo hìnhhoành tráng không kém phần tao nhã, chào đón các bạn cùng thám hiểm Bắc Băng Dương, lưu lại những khoảnh khắc đáng nhớ với gia đình và bạn bè qua những tấm ảnhkỷ niệm thật tuyệt vời.', 'TauPhaBangCucDia.jpg'),
(3, 'Xe trượt tuyết tuần lộc', 'Những chú tuần lộc sẽ đưa bạn tham quan những cảnh quan mới lạ đem lại trải nghiệm cực lạnh thú vị trong ánh sáng lấp lánh huyền diệu của những tinh thể mang đậm giá trị nghệ thuật điêu khắc. Điều đặc biệt hơn là bạn sẽ có được những ký ức khó quên chưa từng trải nghiệm trước đây.', 'XeTruotTuyenTuanLoc.jpg'),
(4, 'Động vật vùng cực địa', 'Nơi hội tụ của những chú gấu trắng Bắc Cực, hải cẩu, chim cách cụt, chim hải âu, cáo tuyết Bắc Cực, sư tử biển…tất cả những binh lính đặc chủng của vùng Cực địa này sẽ được điêu khắc dưới bàn tay điêu luyện của các nghệ nhân tài năng đến từ vùng Cáp Nhĩ Tân, hãy thử xem bạn có nhận ra được họ không nhé.', 'DongVatVungCucDia.jpg'),
(5, 'Hành lang tuyết trắng 3D', 'Với hình ảnh 3D phủ đầy tuyết trắng được trưng bày dọc hành lang đón khách, bạn sẽ kinh ngạc trước những bức tranh 3D núi băng hùng vĩ, ngắm nhìn những chú chim cánh cụt siêu dễ thương “Say Hello!”.', 'HanhLangTuyetTrang3D.jpg'),
(6, 'Khu chơi tuyết/ ném tuyết', 'Vui đùa dưới bụi cây, bên cạnh những động vật vùng Bắc Cực được điêu khắc bằng đá tuyết, các bạn còn được hòa mình dưới những “trận mưa tuyết thậtsự” cùng bạn bè tự tay nắn người tuyết, “tử chiến” với trò ném tuyết trong không gian lạnh -15°C. Đây chắc chắn sẽ là một trải nghiệm cực kỳ khó quên cho bạn và gia đình.', 'KhuVucNemTuyet.jpg'),
(7, 'Khu vui chơi vùng cực', 'Bùng nổ niềm vui cùng các trò chơi thú vị: bể bóng Polar đầy màu sắc, trổ tài ném bóng rổ, phóng phi tiêu… tại vùng bão băng trên nền nhạc sôi động xua tan đi những ngày hè nóng bức.', 'KhuVuiChoiCungCuc.jpg'),
(8, 'Cực quang 3D – ánh sáng Bắc Cực', 'Chiêm ngưỡng hiện tượng Bắc cực quang 3D về đêm – “ánh hào quang mỹ lệ”tượng trưng cho sự may mắn và niềm hạnh phúc.', 'CucQuang3D.jpg'),
(9, 'Triển lãm ảnh thám hiểm vùng Cực địa', 'Bộ sưu tập về hình ảnh đến từ nơi lạnh nhất của Trái Đất được thực hiện bởi các nhà thám hiểm. Với mỗi hình ảnh vùng cực địa phong phú và trữ tình đều là những tác phẩm nghệ thuật đặc sắc, khó phai đem đến các bạn cái nhìn cụ thể hơn về nơi khắc nghiệt nhất hành tinh', 'TrienLamAnhThamHiemVungCucDia.jpg'),
(10, 'Ice Bar – Quầy bar băng giá', 'Bạn sẽ cực kỳ ấn tượng đến kinh ngạc dưới sự hoành tráng củaQuán Ice Bar điêu khắc hoàn toàn bằng băngtừ những chiếc bàn, ghế đến cả cái ly bạn uống, Quán Ice Barđược tái bản theo phong cách London, Tokyo tiên tiến và hiện đại. Sẽ không còn gì thú vị hơn khi được thưởng thức những thức uống ấm bụng hay lạnh tê lưỡi và cùng buôn chuyện với gia đình, bạn bè, người thântrong một không gian thật “Bắc Cực”. Bên cạnh đó, trên mỗi vé có phần ưu đãi giảm giá nước uống.', 'IceBar.jpg'),
(11, 'Hồ Cầu Nguyện', '', 'HoCauNguyen.jpg'),
(12, 'Chủ đề khác', '', 'ChuDeKhac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dangthanhtoan`
--

CREATE TABLE IF NOT EXISTS `dangthanhtoan` (
  `IDTHANHTOAN` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE IF NOT EXISTS `don_hang` (
  `MSDH` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `USER_EMAIL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DIEN_GIAI` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(11) DEFAULT '0',
  `NGAYDATVE` date DEFAULT NULL,
  `TINHTRANG` tinyint(1) DEFAULT NULL,
  `THANHTIEN` int(11) DEFAULT NULL,
  `LOAIVE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`MSDH`, `USER_EMAIL`, `DIEN_GIAI`, `SOLUONG`, `NGAYDATVE`, `TINHTRANG`, `THANHTIEN`, `LOAIVE`) VALUES
('MH10042016024142', 'G10042016024142', '1 vé Người lớn x 170000  ,  ', 1, '2016-04-10', 0, 170000, 'Ngày thường'),
('MH11042016170512', 'G11042016170512', '1 vé Người lớn x 170000  ,  ', 1, '2016-04-11', 0, 170000, 'Ngày thường');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `MSKHUYENMAI` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TENKHUYENMAI` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `THONGTIN` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `STATUS` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MSKHUYENMAI`, `TENKHUYENMAI`, `THONGTIN`, `STATUS`) VALUES
('KM001', 'Nhân dịp valentine', 'http://localhost/WEB/banve_tructuyen/ADMIN/san_pham.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MSSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TENSP` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINHSP` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GIA` int(11) DEFAULT '0',
  `GIANGAYLE` int(11) DEFAULT '0',
  `GIAKHUYENMAI` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MSSP`, `TENSP`, `HINHSP`, `GIA`, `GIANGAYLE`, `GIAKHUYENMAI`) VALUES
('TE', 'TRẺ EM', 'https://www.google.com/url?sa=i', 140000, 170000, 0),
('NL', 'NGƯỜI LỚN', 'asdada', 170000, 210000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE IF NOT EXISTS `tinhthanh` (
  `MSTINHTHANH` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TEN` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`MSTINHTHANH`, `TEN`) VALUES
('TH_01', 'Hồ Chí Minh'),
('TH_02', 'Hà Nội'),
('TH_03', 'An Giang'),
('TH_04', 'Bà Rịa Vũng Tàu'),
('TH_05', 'Bắc Giang'),
('TH_06', 'Bắc Cạn'),
('TH_07', 'Bạc Liêu'),
('TH_08', 'Bắc Ninh'),
('TH_09', 'Bến Tre'),
('TH_10', 'Bình Định'),
('TH_11', 'Bình Dương'),
('TH_12', 'Bình Phước'),
('TH_13', 'Bình Thuận'),
('TH_14', 'Cà Mau'),
('TH_15', 'Cần Thơ'),
('TH_16', 'Cao Bằng'),
('TH_17', 'Đà Nẵng'),
('TH_18', 'Đắk Lắk'),
('TH_19', 'Đắk Nông'),
('TH_20', 'Điện Biên'),
('TH_21', 'Đồng Nai'),
('TH_22', 'Đồng Tháp'),
('TH_23', 'Gia Lai'),
('TH_24', 'Hà Giang'),
('TH_25', 'Hà Nam'),
('TH_26', 'Hà Tĩnh'),
('TH_27', 'Hải Dương'),
('TH_28', 'Hải Phòng'),
('TH_29', 'Hậu Giang'),
('TH_30', 'Hòa Bình'),
('TH_31', 'Huế'),
('TH_32', 'Hưng Yên'),
('TH_33', 'Khánh Hòa'),
('TH_34', 'Kiên Giang'),
('TH_35', 'Kon Tum'),
('TH_36', 'Lai Chau'),
('TH_37', 'Lâm Đồng'),
('TH_38', 'Lạng Sơn'),
('TH_39', 'Lào Cai'),
('TH_40', 'Long An'),
('TH_41', 'Nam Định'),
('TH_42', 'Nghệ An'),
('TH_43', 'Ninh Bình'),
('TH_44', 'Ninh Thuận'),
('TH_45', 'Phú Thọ'),
('TH_46', 'Phú Yên'),
('TH_47', 'Quảng Bình'),
('TH_48', 'Quảng Nam'),
('TH_49', 'Quảng Ngãi'),
('TH_50', 'Quảng Ninh'),
('TH_51', 'Quảng Trị'),
('TH_52', 'Sóc Trăng'),
('TH_53', 'Sơn La'),
('TH_54', 'Tây Ninh'),
('TH_55', 'Thái Bình'),
('TH_56', 'Thái Nguyên'),
('TH_57', 'Thanh Hóa'),
('TH_58', 'Tiền Giang'),
('TH_59', 'Trà Vinh'),
('TH_60', 'Tuyên Quang'),
('TH_61', 'Vĩnh Long'),
('TH_62', 'Vĩnh Phúc'),
('TH_63', 'Yên Bái');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `USER_EMAIL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USER_TEN` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMND` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NTNS` date DEFAULT NULL,
  `DIACHI` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIENTHOAI` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_EMAIL`, `PASSWORD`, `USER_TEN`, `CMND`, `NTNS`, `DIACHI`, `DIENTHOAI`, `EMAIL`) VALUES
('G10042016024142', '', 'asdsa', '', '0000-00-00', 'adasd Hồ Chí Minh', '1231', NULL),
('G11042016170512', '', 'test', '', '0000-00-00', 'test Hồ Chí Minh', '1234567890', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyende`
--
ALTER TABLE `chuyende`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dangthanhtoan`
--
ALTER TABLE `dangthanhtoan`
  ADD PRIMARY KEY (`IDTHANHTOAN`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`MSDH`,`USER_EMAIL`,`DIEN_GIAI`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MSKHUYENMAI`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MSSP`);

--
-- Indexes for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`MSTINHTHANH`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuyende`
--
ALTER TABLE `chuyende`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
