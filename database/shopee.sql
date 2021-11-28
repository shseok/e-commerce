-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Museum', 'Museum 빛: 영국 테이트미술관 특별전', 152.00, './image/items/items1.png', '2021-11-29 13:07:17'), -- NOW()
(2, 'Event', 'Event 내맘쏙 모두의 그림책', 122.00, './image/items/items2.png', '2021-11-29 13:07:17'),
(3, 'Museum', 'Museum 요시고 사진전：따뜻한 휴일의 기록', 122.00, './image/items/items3.png', '2021-11-29 13:07:17'),
(4, 'Event', 'Event 살바도르 달리전', 122.00, './image/items/items4.png', '2021-11-29 13:07:17'),
(5, 'Event', 'Event 칸딘스키, 말레비치＆러시아 아방가르드', 122.00, './image/items/items5.png', '2021-11-29 13:07:17'),
(6, 'Event', 'Event 우연히 웨스 앤더슨', 122.00, './image/items/items6.png', '2021-11-29 13:07:17'),
(7, 'Event', 'Event 샤갈 특별전', 122.00, './image/items/items7.png', '2021-11-29 13:07:17'),
(8, 'Museum', 'Museum 게티이미지 사진전', 122.00, './image/items/items8.png', '2021-11-29 13:07:17'),
(9, 'Event', 'Event 빛의 벙커 : 모네,르누아르...', 152.00, './image/items/items9.png', '2021-11-29 13:07:17'),
(10, 'Event', 'Event dreamer, 3:45am', 152.00, './image/items/items10.png', '2021-11-29 13:07:17'),
(11, 'Museum', 'Museum 로이리히텐슈타인', 152.00, './image/items/items11.png', '2021-11-29 13:07:17'),
(12, 'Museum', 'Museum 초현실주의 거장들', 152.00, './image/items/items12.png', '2021-11-29 13:07:17'),
(13, 'Museum', 'Museum 파라오의 비밀', 152.00, './image/items/items13.png', '2021-11-29 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, '현석', '신', '2021-11-29 13:07:17'),
(2, '혜란', '신', '2021-11-29 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;