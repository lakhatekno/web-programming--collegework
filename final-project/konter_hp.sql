-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 04:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konter_hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apple`
--

CREATE TABLE `apple` (
  `id_product` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `variant` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `details` text NOT NULL,
  `product_pict` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `brand_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `brand_name`) VALUES
(1, 'xiaomi'),
(2, 'samsung'),
(3, 'realme'),
(4, 'huawei'),
(5, 'oppo'),
(7, 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id_favorite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id_favorite`, `id_user`, `brand`, `id_product`) VALUES
(20, 1, 'samsung', 1);

-- --------------------------------------------------------

--
-- Table structure for table `huawei`
--

CREATE TABLE `huawei` (
  `id_product` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `variant` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `details` text NOT NULL,
  `product_pict` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `huawei`
--

INSERT INTO `huawei` (`id_product`, `name`, `variant`, `color`, `details`, `product_pict`, `price`) VALUES
(1, 'Huawei', 'Nova 10 Pro', 'Black', 'CHIPSET : Qualcomm SM7325 Snapdragon 778G 4G (6 nm).\r\nMEMORY : 128GB / 8GB RAM.\r\nDISPLAY : 6.78 inches 1200 x 2652 pixels, OLED, 1B colors, HDR10, 120Hz.\r\nCAMERA : 50 MP, f/1.8, 27mm (wide), 8 MP, f/2.2, 112˚ (ultrawide), 2 MP, f/2.4, (depth).\r\nBATTERY : Li-Po 4500 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-nova-10-pro-1.jpg', 'Rp. 6.900.000'),
(2, 'Huawei', 'Mate Xs 2', 'White', 'CHIPSET : Qualcomm SM8350 Snapdragon 888 4G (5 nm).\r\nMEMORY : 512GB / 8GB RAM.\r\nDISPLAY : 7.8 inches 2200 x 2480 pixels, Foldable OLED, 1B colors, 120Hz.\r\nCAMERA : 50 MP, f/1.8, (wide), 8 MP, f/2.4, 81mm (telephoto), 13 MP, f/2.2, 120˚ (ultrawide).\r\nBATTERY : Li-Po 4880 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-mate-xs2-3.jpg', 'Rp. 12.900.000'),
(3, 'Huawei', 'P 50 Pro', 'Cocoa Gold', 'CHIPSET : Qualcomm SM8350 Snapdragon 888 4G (5 nm). \r\nMEMORY : 512GB / 12GB RAM\r\nDISPLAY : 6.6 inches 1228 x 2700 pixels, 	OLED, 1B colors, 120Hz.\r\nCAMERA : 50 MP, f/1.8, 23mm (wide), 64 MP, f/3.5, 90mm (periscope telephoto), 13 MP, f/2.2, 13mm (ultrawide), 40 MP, f/1.6, 23mm (B/W).\r\nBATTERY : Li-Po 4360 mAh, non-removable', 'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-p50-pro-0.jpg', 'Rp. 18.500.000'),
(4, 'Huawei', 'Mate 50 Pro', 'Orange', 'CHIPSET : Qualcomm SM8475 Snapdragon 8+ Gen 1 4G (4 nm).\r\nMEMORY : 512GB / 8GB RAM.\r\nDISPLAY : 6.74 inches 1212 x 2616 pixels, 	OLED, 1B colors, 120Hz.\r\nCAMERA : 50 MP, f/1.4-f/4.0, 24mm (wide), 64 MP, f/3.5, 90mm (periscope telephoto), 13 MP, f/2.2, 13mm, 120˚ (ultrawide).\r\nBATTERY : Li-Po 4700 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-mate-50-pro-1.jpg', 'Rp. 14.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `oppo`
--

CREATE TABLE `oppo` (
  `id_product` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `variant` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `details` text NOT NULL,
  `product_pict` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oppo`
--

INSERT INTO `oppo` (`id_product`, `name`, `variant`, `color`, `details`, `product_pict`, `price`) VALUES
(1, 'Oppo ', 'Reno8 Pro', 'Glazed Green', 'CHIPSET :  MediaTek Dimensity 8100-Max (5 nm).\r\nMEMORY : 256GB / 8GB RAM\r\nDISPLAY : 6.7 inches 1080 x 2412 pixels, AMOLED, 1B colors, 120Hz, HDR10+, 500 nits.\r\nCAMERA : 50 MP, f/1.8, 23mm (wide), 8 MP, f/2.2, 16mm, 112˚ (ultrawide), 2 MP, f/2.4, (macro).\r\nBATTERY : Li-Po 4500 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/bigpic/oppo-reno8-pro.jpg', 'Rp. 11.000.000'),
(2, 'Oppo', 'Find X5 Pro', 'Ceramic Black', 'CHIPSET : Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm).\r\nMEMORY : 256GB / 12GB RAM.\r\nDISPLAY : 6.7 inches 1440 x 3216 pixels, LTPO2 AMOLED, 1B colors, 120Hz, HDR10+, BT.2020, 1300 nits.\r\nCAMERA : 50 MP, f/1.7, 25mm (wide), 13 MP, f/2.4, 52mm (telephoto), 50 MP, f/2.2, 15mm, 110˚ (ultrawide).\r\nBATTERY : Li-Po 5000 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/bigpic/oppo-find-x5-pro.jpg', 'Rp. 15.900.000'),
(3, 'Oppo', 'F21 Pro 5G', 'Rainbow Spectrum', 'CHIPSET : Qualcomm SM6375 Snapdragon 695 5G (6 nm).\r\nMEMORY : 128GB / 8GB RAM.\r\nDISPLAY : 6.43 inches 1080 x 2400 pixels, AMOLED, 430 nits (typ), 600 nits.\r\nCAMERA : 64 MP, f/1.7, 26mm (wide), 2 MP, f/2.4, (macro), 2 MP, f/2.4, (depth).\r\nBATTERY : Li-Po 4500 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-f21-pro-5g-1.jpg', 'Rp. 5.900.000'),
(4, 'Oppo', 'K10x', 'Rainbow Blue', 'CHIPSET : Qualcomm SM6375 Snapdragon 695 5G (6 nm).\r\nMEMORY : 128GB / 6GB RAM.\r\nDISPLAY : \r\nCAMERA : 64 MP, f/1.7, 26mm (wide), 2 MP, f/2.4, (macro), 2 MP, f/2.4, (depth).\r\nBATTERY : Li-Po 5000 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-k10x-5.jpg', 'Rp. 8.900.000');

-- --------------------------------------------------------

--
-- Table structure for table `realme`
--

CREATE TABLE `realme` (
  `id_product` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `variant` varchar(6) NOT NULL,
  `color` varchar(15) NOT NULL,
  `details` text NOT NULL,
  `product_pict` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `realme`
--

INSERT INTO `realme` (`id_product`, `name`, `variant`, `color`, `details`, `product_pict`, `price`) VALUES
(1, 'Realme', '10 5G', 'Gold', 'CHIPSET : MediaTek MT6833 Dimensity 700 (7 nm).\r\nMEMORY : 128GB / 8GB RAM.\r\nDISPLAY :6.6 inches 1080 x 2408 pixels, IPS LCD, 90Hz, 400 nits.\r\nCAMERA : 50 MP, f/1.8, (wide), 12 MP, f/2.8, 46mm (telephoto), 2 MP, f/2.4, (macro).\r\nBATTERY : Li-Po 5000 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/realme/realme-10-5g-1.jpg', 'Rp. 5.900.000'),
(2, 'Realme', 'Q5 Pro', 'Yellow', 'CHIPSET :Qualcomm SM8250-AC Snapdragon 870 5G (7 nm).\r\nMEMORY : 128GB / 8GB RAM.\r\nDISPLAY :6.62 inches 1080 x 2400 pixels, AMOLED, 120Hz, HDR10+, 1300 nits.\r\nCAMERA : 64 MP, f/1.8, 25mm (wide), 8 MP, f/2.3, 16mm, 119˚ (ultrawide), 2 MP, f/2.4, (macro).\r\nBATTERY : Li-Po 5000 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/realme/realme-q5-pro-1.jpg', 'Rp. 4.000.000'),
(3, 'Realme', 'Narzo ', 'Hyper Blue', 'CHIPSET :MediaTek Dimensity 920 (6 nm).\r\nMEMORY :  128GB / 8GB RAM.\r\nDISPLAY : 6.4 inches 1080 x 2400 pixels, Super AMOLED, 90Hz.\r\nCAMERA : 48 MP, f/1.8, 26mm (wide), 8 MP, f/2.2, 120˚ (ultrawide), 2 MP, f/2.4, (macro).\r\nBATTERY : Li-Po 5000 mAh, non-removable.\r\n', 'https://fdn2.gsmarena.com/vv/pics/realme/realme-narzo-50-pro-5g-1.jpg', 'Rp. 3.900.000'),
(4, 'Realme', 'V23', 'Black', 'CHIPSET : MediaTek MT6833P Dimensity 810 (6 nm).\r\nMEMORY : 256GB / 8GB RAM.\r\nDISPLAY : 6.58 inches 1080 x 2408 pixels, 	IPS LCD, 90Hz, 600 nits.\r\nCAMERA : 48 MP, f/1.8, 26mm (wide), 2 MP, f/2.4, (depth).\r\nBATTERY : Li-Po 5000 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/realme/realme-v23-1.jpg', 'Rp. 3.400.000');

-- --------------------------------------------------------

--
-- Table structure for table `samsung`
--

CREATE TABLE `samsung` (
  `id_product` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `variant` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `details` text NOT NULL,
  `product_pict` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `samsung`
--

INSERT INTO `samsung` (`id_product`, `name`, `variant`, `color`, `details`, `product_pict`, `price`) VALUES
(1, 'Samsung', 'Galaxy S22 Ultra 5G', 'Phantom Black', 'CHIPSET : Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm).\r\nMEMORY : 512GB / 12GB RAM.\r\nCAMERA : 108 MP, f/1.8, 23mm (wide), 10 MP, f/2.4, 70mm (telephoto),\r\n12 MP, f/2.2, 13mm, 120˚ (ultrawide).\r\nFEATURES : Fingerprint (under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer\r\nSamsung DeX, Samsung Wireless DeX (desktop experience support)\r\nBixby natural language commands and dictation\r\nSamsung Pay (Visa, MasterCard certified)\r\nUltra Wideband (UWB) support', 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s22-ultra-5g-2.jpg', 'Rp. 17.900.000'),
(2, 'Samsung', 'Galaxy Z Fold4', 'Graygreen', 'CHIPSET : Qualcomm SM8475 Snapdragon 8+ Gen 1 (4 nm).\r\nMEMORY : 256GB / 12GB RAM.\r\nDISPLAY :7.6 inches 1812 x 2176 pixels, Foldable Dynamic AMOLED 2X, 120Hz, HDR10+, 1200 nits.\r\nCAMERA : 50 MP, f/1.8, 23mm (wide), 10 MP, f/2.4, 66mm (telephoto),12 MP, f/2.2, 123˚, 12mm (ultrawide).\r\nBATTERY : Li-Po 4400 mAh, non-removable.\r\n ', 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-z-fold4-5g-3.jpg', 'Rp. 22.900.000'),
(3, 'Samsung', 'Galaxy Z Flip4', 'Graphite', 'CHIPSET : Qualcomm SM8475 Snapdragon 8+ Gen 1 (4 nm).\r\nMEMORY : 256GB / 8GB RAM.\r\nDISPLAY : 6.7 inches 1080 x 2640 pixels, Foldable Dynamic AMOLED 2X, 120Hz, HDR10+, 1200 nits.\r\nCAMERA : 12 MP, f/1.8, 24mm (wide), 12 MP, f/2.2, 123˚ (ultrawide).\r\nBATTERY : Li-Po 3700 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-z-flip4-5g-01.jpg', 'Rp. 19.900.000'),
(4, 'Samsung', 'Galaxy A73 5G', 'White', 'CHIPSET : Qualcomm SM7325 Snapdragon 778G 5G (6 nm).\r\nMEMORY : 128GB / 6GB RAM.\r\nDISPLAY : 6.7 inches 1080 x 2400 pixels, Super AMOLED Plus, 120Hz, 800 nits.\r\nCAMERA : 108 MP, f/1.8, (wide), 12 MP,f/2.2, (ultrawide), 5 MP, f/2.4, (macro), 5 MP, f/2.4, (depth).\r\nBATTERY : Li-Po 5000 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a73-5g-1.jpg', 'Rp. 8.900.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'lakhatzyy', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `xiaomi`
--

CREATE TABLE `xiaomi` (
  `id_product` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `variant` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `details` text NOT NULL,
  `product_pict` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xiaomi`
--

INSERT INTO `xiaomi` (`id_product`, `name`, `variant`, `color`, `details`, `product_pict`, `price`) VALUES
(2, 'Xiaomi', 'Redmi Note 12 Pro', 'Violet', 'CHIPSET : MediaTek Dimensity 1080 (6 nm).\r\nMEMORY : 128GB / 8GB RAM.\r\nDISPLAY : 6.67 inches 1080 x 2400 pixels, OLED, 1B colors, 120Hz, Dolby Vision, HDR10+, 500 nits.\r\nCAMERA : 50 MP, f/1.9, 24mm (wide), 8 MP, f/1.9, 119˚ (ultrawide), 2 MP (macro).\r\nBATTERY : Li-Po 5000 mAh, non-removable.', 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-12-pro-1.jpg', 'Rp. 3.900.000'),
(3, 'Xiaomi', 'Mix Fold 2', 'Gold', 'CHIPSET : Qualcomm SM8475 Snapdragon 8+ Gen 1 (4 nm).\r\nMEMORY : 512GB / 12GB RAM.\r\nDISPLAY : 6.56 inches 1080 x 2520 pixels, AMOLED, 120Hz, HDR10+, Dolby Vision, 1000 nits (HBM), 1300 nits.\r\nCAMERA : 50 MP, f/1.8, (wide),8 MP, f/2.6, 45mm (telephoto)13 MP, f/2.4, 15mm, 123˚ (ultrawide).\r\nBATTERY : Li-Po 4500 mAh, non-removable', 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-mix-fold-2-2.jpg', 'Rp. 11.000.000'),
(4, 'Xiaomi', 'Black Shark 5 Pro', 'White', 'CHIPSET : Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm).\r\nMEMORY : 256GB / 12GB RAM.\r\nDISPLAY : 6.67 inches 1080 x 2400 pixels, OLED, 1B colors, 144Hz, HDR10+.\r\nCAMERA : 108 MP, f/1.8, (wide), 13 MP, f/2.4, 120˚ (ultrawide), 5 MP, f/2.4, (telephoto macro).\r\nBATTERY : Li-Po 4650 mAh, non-removable,', 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-black-shark-5-pro-1.jpg', 'Rp. 7.900.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_favorite`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `huawei`
--
ALTER TABLE `huawei`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `oppo`
--
ALTER TABLE `oppo`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `realme`
--
ALTER TABLE `realme`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `samsung`
--
ALTER TABLE `samsung`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `xiaomi`
--
ALTER TABLE `xiaomi`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id_favorite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `huawei`
--
ALTER TABLE `huawei`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oppo`
--
ALTER TABLE `oppo`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `realme`
--
ALTER TABLE `realme`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `samsung`
--
ALTER TABLE `samsung`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xiaomi`
--
ALTER TABLE `xiaomi`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
