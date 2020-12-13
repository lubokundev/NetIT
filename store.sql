-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 дек 2020 в 13:55
-- Версия на сървъра: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Структура на таблица `add_product`
--

CREATE TABLE `add_product` (
  `id` int(50) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `product_description` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `add_product`
--

INSERT INTO `add_product` (`id`, `product_name`, `price`, `product_description`) VALUES
(1, 'Samsung 860 EVO 2.5 500GB SATA3 MZ-76E500B', '122,00лв', 'Външен/вътрешен: Вътрешен SSD\r\nКапацитет: 500 GB\r\nNAND flash тип: TLC\r\nМаксимална SSD скорост на четене: 550 MB/s\r\nМаксимална SSD скорост на запис: 520 MB/s\r\n'),
(3, 'Samsung 970 EVO Plus 500GB MZ-V7S500BW', '199,00лв', 'Външен/вътрешен: Вътрешен SSD\r\nКапацитет: 500 GB\r\nNAND flash тип: TLC\r\nМаксимална SSD скорост на четене: 3500 MB/s\r\nМаксимална SSD скорост на запис: 3300 MB/s\r\nОформление: M.2'),
(4, 'Samsung 860 EVO 2.5 500GB SATA3 MZ-76E500B', '122,00лв', 'Външен/вътрешен: Вътрешен SSD\r\nКапацитет: 500 GB\r\nNAND flash тип: TLC\r\nМаксимална SSD скорост на четене: 550 MB/s\r\nМаксимална SSD скорост на запис: 520 MB/s');

-- --------------------------------------------------------

--
-- Структура на таблица `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`) VALUES
(8, 'ivanchoooo', 'b6e88d92ef5ac1e363b6445cbeac0b28', 'phpdev20'),
(9, 'ivanchooo0', '4ef90d53098cd7a87e4f2cfce51805d6', 'phpdev20'),
(10, 'ivanch000', '4ef90d53098cd7a87e4f2cfce51805d6', 'phpdev20'),
(48, 'lubokundev', 'c1960f434f352f9b1e670ba96136e3e4', 'phpdev20'),
(49, 'asdfgg', 'acb1e8c1c17b172f8ed55c8ef228c2d8', 'phpdev20'),
(50, '1234567899', '920b0e188b892b63e3fa9bea9ab221fa', 'phpdev20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
