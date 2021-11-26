-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2021 lúc 11:13 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlpc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `email`, `sdt`, `noidung`) VALUES
(1, 'daominhtu33@gmail.com', 123123, 'hello word u fucking suckk'),
(2, 'daominhtu33@gmail.com', 123123, 'hello word u fucking suckk'),
(3, 'phanducthang789@yahoo.com.vn', 0, 'hello word u fucking suckk'),
(4, 'phanducthang789@yahoo.com.vn', 0, 'sdasd'),
(5, 'phanducthang789@yahoo.com.vn', 0, 'sdasd'),
(6, 'phanducthang789@yahoo.com.vn', 123123, 'Hotel diablo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pc`
--

CREATE TABLE `pc` (
  `masp` int(11) NOT NULL,
  `hang` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl` int(10) NOT NULL,
  `gia` int(20) NOT NULL,
  `cauhinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pc`
--

INSERT INTO `pc` (`masp`, `hang`, `ten`, `img`, `sl`, `gia`, `cauhinh`) VALUES
(12340, 'Lenovo', 'Lenovo Gaming 067', 'Leno1.PNG', 50, 34000000, 'ryzen 7 3700x x570 16gb 500gb gtx 1660s'),
(12345, 'Lenovo', 'Lenovo Gaming 022', 'Leno1.PNG', 10, 12000000, 'core i5 11400F 8gb 256gb b560 gtx 1660s 550w'),
(12346, 'Lenovo', 'Lenovo Gaming 032', 'Leno1.PNG', 10, 5000000, 'core i5 10400F 8gb 2560gb b460 gtx 1660s 550w'),
(12347, 'Lenovo', 'Lenovo Gaming 045', 'Leno1.PNG', 12, 6000000, 'ryzen 5 3600 b550 16gb rtx 2060 256gb'),
(12348, 'Asus', 'Asus Gaming 055', 'Asus1.PNG', 12, 30000000, 'core i5 10400F h410 16gb gtx 1660s 2560gb'),
(12349, 'Asus', 'Asus Gaming 065', 'Asus3.PNG', 22, 23000000, 'ryzen 5 5600x b550 16gb 500gb rx 6700 xt '),
(21123, 'Dell', 'Dell WS 22', 'Dell7.PNG', 12, 97969000, 'Xeon Silver 4210/16GB RAM/2TB HDD NLSAS 3.5in/DVDRW/PERC H730P+/iDRAC9 Enterprise/750W(1+1)'),
(22120, 'Asus', 'Asus Gaming 012', 'Asus2.PNG', 50, 29000000, 'ryzen 5 3600 b550 16gb 256gb rtx 2060 700w'),
(22123, 'Asus', 'Asus Gaming 066', 'Asus2.PNG', 12, 27000000, 'core i5 10400F h410 160gb 256gb gtx 1660s 450w'),
(22124, 'Dell', 'Dell Gaming 050', 'Dell5.PNG', 13, 42000000, 'ryzen 5 5600x b550 16gb 500gb rx 6700xt 750w'),
(22125, 'Acer', 'ACER Office 666', 'Acer1.PNG', 50, 15000000, 'i7 10700 b460 16gb 120gb '),
(22126, 'Dell', 'Dell Gaming 099', 'Dell5.PNG', 12, 32000000, 'core i5 11400F b560 16gb 256gb gtx 1660s'),
(22127, 'Acer', 'ACER Office 22', 'Acer1.PNG', 15, 14000000, 'i7 10700 b460 8gb 1tb'),
(22128, 'Asus', 'ASUS Office 15', 'Asus1.PNG', 45, 13000000, 'i7 10700 b460 8gb 256gb'),
(22129, 'Asus', 'ASUS Office 13', 'Asus1.PNG', 66, 11000000, 'i5 10400F h410 8gb 256gb gt1030'),
(56780, 'HP', 'HP Office 1', 'HP2.PNG', 50, 10000000, 'i3 10100 h410 8gb 240gb gt1030'),
(56781, 'HP', 'HP Office 12', 'HP1.PNG', 46, 10000000, 'i5 10400F h410 8gb 240gb gt710'),
(56782, 'Dell', 'Dell Office 13', 'Dell2.PNG', 13, 10000000, 'i5 10400 b460 8gb 240gb'),
(56783, 'Dell', 'Dell Office 123', 'Dell4.PNG', 49, 10000000, 'i5 10400 b460 8gb 240gb '),
(56784, 'Dell', 'Dell Office 12', 'Dell1.PNG', 16, 10000000, 'i5 10400F h410 8gb 240gb gt710'),
(56789, 'Dell', 'Dell Office 1', 'Dell3.PNG', 55, 9000000, 'i5 10400 b450 8gb 240gb'),
(76124, 'Dell', 'Dell WS 13', 'Dell7.PNG', 11, 80000000, 'Xeon Silver 4210 16GB RAM 600GB HDD NLSAS 2.5in DVDRW PERC H330+ iDRAC9 Basic 495W'),
(76234, 'HP', 'HP WS 54', 'HP3.PNG', 10, 32019000, 'Xeon W2102 8G RAM ECC REG 256GB SSD DVDWR K+M Linux'),
(78612, 'Dell', 'Dell WS 12', 'Dell7.PNG', 13, 50099000, 'Xeon E-2274/8GB RAM/1TB HDD/DVDRW/PERC H330/iDRAC9 Basic/495W'),
(87124, 'Dell', 'Dell WS 13', 'Dell6.PNG', 10, 20709000, 'Xeon E-2224G/8GB RAM/1TB HDD/DVDRW'),
(87239, 'HP', 'HP WS 45', 'HP3.PNG', 50, 23939000, 'Xeon E-2224G 8G RAM 256GB SSD K+M Linux'),
(87524, 'Asus', 'Asus WS 34', 'Asus4.PNG', 10, 20709000, 'Xeon E-2234 8GB RAM 1TB HDD DVDRW iDRAC9 Basic 365W'),
(87605, 'Asus', 'Asus WS 13', 'Asus4.PNG', 12, 6000000, 'i7-10700 16GB RAM (2x8) 1TB HDD P620 DVDRW K+M Ubuntu'),
(87634, 'HP', 'HP WS 23', 'HP3.PNG', 13, 44749000, 'Xeon Silver 4208 8G RAM ECC REG 256GB SSD K+M Linux'),
(221204, 'Asus', 'Asus WS 22', 'Asus4.PNG', 12, 97969000, 'Xeon E-2224G 8GB RAM 1TB HDD DVDRW');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(31) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `mk` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `ten`, `username`, `email`, `sdt`, `mk`) VALUES
(1, 'phan đức thắng', 'lachxu1234', 'phanducthang789@gmail.com', 814406569, '123123'),
(7, 'thắng', 'lachxu12345', '123123', 123123123, '123123'),
(8, 'jhkjh', 'kjhkjh', 'khkjh', 8798, '123123'),
(9, 'thắng', 'sv.18103100073', 'daominhtu33@gmail.com', 91239874, '123123'),
(10, 'phan đức thắng', 'blabla', 'daominhtu33@gmail.com', 91239874, '123123'),
(11, 'phan đức thắng', 'fanthang', 'daominhtu33@gmail.com', 2147483647, '123123'),
(12, 'phan đức thắng', 'fanthang2212', 'daominhtu33@gmail.com', 91239874, '123123'),
(13, 'thắng', 'fanthang123', 'phanducthang789@yahoo.com.vn', 814406569, '123123'),
(14, 'phan đức thắng', 'fanthang213123', 'phanducthang789@yahoo.com.vn', 91239874, '123123'),
(15, 'MGK', 'ESTXX', 'phanducthang789@gmail.com', 12313123, '123123'),
(16, '123123', 'lachxu23', 'khjs@23.com', 1231231231, '123123'),
(17, '123', 'sv18103100073', 'daominhtu33@gmail.com', 814406569, '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
