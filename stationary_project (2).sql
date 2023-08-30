-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 12:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stationary_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactmassege`
--

CREATE TABLE `contactmassege` (
  `M_Id` int(11) NOT NULL,
  `M_Name` varchar(20) NOT NULL,
  `M_Surname` varchar(20) NOT NULL,
  `M_Email` varchar(20) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactmassege`
--

INSERT INTO `contactmassege` (`M_Id`, `M_Name`, `M_Surname`, `M_Email`, `Title`, `Msg`) VALUES
(1, 'Felix', 'Lee', 'yeongbok@email.com', 'Subject1', 'Msg1'),
(3, 'Anisah', 'KASO', 'joon@gmail.com', 'Title2', 'Msg2'),
(4, 'Harry', 'Potter', 'Potter@gmail.com', 'Title3', 'Massege3'),
(5, 'Yara', 'ABDI', 'joon@gmail.com', 'Title3', 'Msg4'),
(6, 'Harry', 'Potter', 'Potter@gmail.com', 'Title5', 'Massege5'),
(7, 'Harry', 'Potter', 'Potter@gmail.com', 'Tilte4', 'fgfdg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_Id` int(10) NOT NULL,
  `C_Name` varchar(20) NOT NULL,
  `C_Surname` varchar(20) NOT NULL,
  `C_Email` varchar(20) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Slip` varchar(100) NOT NULL,
  `BDate` date NOT NULL,
  `Note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_Id`, `C_Name`, `C_Surname`, `C_Email`, `Phone_No`, `Address`, `Slip`, `BDate`, `Note`) VALUES
(1, '', '', 'soongi@gmail.com', 0, '', '', '0000-00-00', ''),
(2, 'Anisah', 'Kaso', 'joongari8@gmail.com', 2147483647, 'Yala Thailand', 'apple_pay_200px.png', '2021-12-30', ''),
(3, 'Minho', 'Lee', 'soongi@gmail.com', 2147483647, 'JYP Nation div1', 'amazon_pay_150px.png', '2021-12-29', ''),
(4, 'Fatima', 'Amiry', 'ron@gmail.com', 326657945, 'Adress1', 'amazon_pay_150px.png', '2021-12-30', 'Note1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_Id` int(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Best/Recent` varchar(20) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(10) NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `Name`, `Category`, `Best/Recent`, `Brand`, `Description`, `Price`, `Photo`) VALUES
(1, 'Color pencils', 'School Stationary', 'Best Seller', 'Pentel', 'Colorful pencils with high quality.\r\n', 3, 'product-1.jpg'),
(3, 'Cartoon Erasers', 'School Stationary', '', 'QUINTILES', 'Cartoon sweet erasers', 2, 'product-4.jpg'),
(4, 'Files', 'Office Stationary', 'Best Seller', 'Pentel', 'Useable for protecting papers', 12, '1.jpg'),
(5, 'Calculator', 'Electronics', 'Recent Product', 'InfraRed', 'Significant calculator multipurpose  ', 25, 'calc.jfif'),
(6, 'Flower mirror', 'Gift & Souvenir', 'Recent Product', 'CapitalVox', 'Purple flower inside the mirror gift pack', 40, 'g8.jpg'),
(7, 'Bracelet', 'Accessories', 'Recent Product', 'Notte', 'Dark blue 5 Bracelet set ', 30, 'a1.jpg'),
(8, 'Rings', 'Accessories', '', 'Rellery', 'Golden color rings set', 45, 'a2.jpg'),
(9, 'Staple remover', 'Office Stationary', 'Recent Product', 'QUINTILES', 'Removing stapler form paper ', 15, '3.webp'),
(10, 'Keyboard', 'Electronics', 'Recent Product', 'Vortex', 'Wire keyboard great performance', 40, 'key.jpg'),
(11, 'Micro USB', 'Electronics', '', 'Zore', 'Useable for smart sharing', 35, 'micro.jpg'),
(12, 'Color pen bag', 'School Stationary', '', 'Pentel', 'High quality pen bag set', 85, 'product-3.jpg'),
(13, 'School Bags', 'School Stationary', '', 'Pentel', 'High quality school bag set', 85, 'product-2.jpg'),
(14, 'Colorful pens', 'School Stationary', 'Best Seller', 'QUINTILES', 'Colorful pens and long lasting\r\n', 30, 'product-5.jpg'),
(15, 'Water bottle', 'School Stationary', 'Best Seller', 'Erlang', 'You can fill it with hot and cold water\r\n', 25, 'product-6.jpg'),
(16, 'Crayons', 'School Stationary', 'Best Seller', 'Erlang', 'Erasable colorful crayons\r\n', 10, 'product-7.jpg'),
(17, 'Key bands', 'School Stationary', 'Best Seller', 'PaperlinX', 'Cartoon key bands for bag and pencil case\r\n', 3, 'product-8.jpg'),
(18, 'Teddy lamp', 'School Stationary', 'Best Seller', 'Pentel', 'Usable for darkness\r\n', 15, 'product-9.jpg'),
(25, 'Clipboard', 'Office Stationary', 'Best Seller', 'InfraRed', 'You can put you paper on it', 8, '2.jpg'),
(26, 'Stapler', 'Office Stationary', 'Best Seller', 'QUINTILES', 'Useable for joining papers and files', 15, '4.jpg'),
(27, 'Pushpins', 'Office Stationary', 'Best Seller', 'PaperlinX', 'Useable for various purpose', 2, '5.jpg'),
(28, 'Tape dipenser', 'Office Stationary', 'Best Seller', 'Pentel', 'Useable for multiple purpose', 5, '6.jpg'),
(29, 'Highlighter', 'Office Stationary', 'Best Seller', 'InfraRed', 'Useable for highlighting important points', 12, '7.jpg'),
(30, 'Hole punch', 'Office Stationary', 'Best Seller', 'PaperlinX', 'Useable for doting papers', 12, '8.jpg'),
(31, 'Correction fluid', 'Office Stationary', 'Best Seller', 'Pentel', 'Useable for erasing pen mistakes ', 20, '9.webp'),
(32, 'Headphone', 'Electronics', 'Recent Product', 'Xvor', 'Black high quality headphone', 50, 'head.png'),
(33, 'Mouse', 'Electronics', 'Recent Product', 'Xvor', 'High performance mouse', 50, 'mouse.jfif'),
(34, 'Mouse pad', 'Electronics', 'Recent Product', 'Vortex', 'You can use it for mouse movement', 10, 'pad.jfif'),
(35, 'Wired headphone', 'Electronics', 'Recent Product', 'Zore', 'Wired black headphone 55 inch', 35, 'wired.jpg'),
(36, 'Wireless earphone', 'Electronics', 'Recent Product', 'Xvor', 'Medium performance wireless earphone', 30, 'wireless.jpg'),
(37, 'C Type Charger', 'Electronics', 'Recent Product', 'Zore', 'Charger for C type phones', 55, 'ctype.jpg'),
(38, 'Gift pack', 'Gift & Souvenir', 'Recent Product', 'QUINTILES', 'A basket of gifts ', 25, 'g2.jpg'),
(39, 'Dolly', 'Gift & Souvenir', 'Recent Product', 'Pentel', 'Smooth yellowish dolly', 30, 'g4.jpeg'),
(40, 'Turtles', 'Gift & Souvenir', 'Recent Product', 'CapitalVox', 'Mother and baby tortoise made of mirror', 40, 'g5.jfif'),
(41, 'Bear', 'Gift & Souvenir', 'Recent Product', 'CapitalVox', 'Teddy bear made of mirror with flowers', 35, 'g6.jpg'),
(42, 'Girly Gift Pack', 'Gift & Souvenir', 'Recent Product', 'PaperlinX', 'A bag of small girly things', 33, 'g1.jpg'),
(43, 'Kids motorbike', 'Gift & Souvenir', 'Recent Product', 'Playskool', 'Chargeable kids motorbike ', 90, 'p3.png'),
(44, 'Crystal light', 'Gift & Souvenir', 'Recent Product', 'Woqoo', 'Jellyfish beautiful light made by mirror', 75, 'g9.webp'),
(45, 'Compact mirror', 'Gift & Souvenir', 'Recent Product', 'CapitalVox', 'Small useable mirrors with letters', 15, 'g7.jpg'),
(46, 'Necklace', 'Accessories', 'Recent Product', 'Notte', 'One set total 3 black necklace ', 36, 'a3.jpg'),
(47, 'Hand watch', 'Accessories', 'Recent Product', 'Mejuri', 'A pink set of watch and bracelet', 55, 'a4.jfif'),
(48, 'Scarf', 'Accessories', 'Recent Product', 'Missome', 'Silk neck scarf', 25, 'a5.jfif'),
(49, 'Hair jewels', 'Accessories', 'Recent Product', 'LakeZ', 'A set of hair jewelry', 65, 'a7.jpg'),
(50, 'Hair bands', 'Accessories', 'Recent Product', 'Aurate', 'Dark blue Hair band set ', 35, 'a6.jpeg'),
(51, 'Cosmetic bag', 'Accessories', '', 'Rellery', '3 layered pink cosmetics bag', 60, 'a8.jpg'),
(52, 'Earrings', 'Accessories', 'Recent Product', 'LakeZ', 'Silver and crystal earring pair', 120, 'a9.webp');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `R_Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`R_Id`, `Name`, `Surname`, `Review`) VALUES
(33, 'Fatima', 'Amiry', 'it was really nice'),
(43, 'Anisah', 'Kaso', 'I love this shop!'),
(44, 'Yara', 'Abdi', 'Very nice and cool!!'),
(47, 'Harry', 'Potter', 'Review1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactmassege`
--
ALTER TABLE `contactmassege`
  ADD PRIMARY KEY (`M_Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`R_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactmassege`
--
ALTER TABLE `contactmassege`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `R_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
