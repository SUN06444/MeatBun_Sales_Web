-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-01-15 13:21:25
-- 伺服器版本: 5.7.15-log
-- PHP 版本： 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `group7`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `sex` char(2) DEFAULT NULL,
  `account` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`ID`, `name`, `sex`, `account`, `password`, `bday`, `phone`, `address`, `email`) VALUES
(1, 'test', '男', 'guest1', '123456', '2000-12-09', '0911559966', 'HOME', 'test1@test.com'),
(2, 'test2', '女', 'guest2', '123456', '2000-12-09', '0933448855', 'HOME2', 'test2@test2.com'),
(4, 'test4', '女', 'guest4', '123456', '2000-12-09', '0988774455', 'HOME4', 'test4@test4.com'),
(5, 'test5', '男', 'guest5', '123456', '2000-12-09', '0944111155', 'HOME5', 'test5@test5.com'),
(6, 'test6', '女', 'guest6', '123456', '2000-12-09', '0933448822', 'HOME6', 'test6@test6.com'),
(7, 'test7', '女', 'guest7', '123456', '2000-12-09', '0933448822', 'HOME7', 'test7@test7.com'),
(8, 'test8', '女', 'guest8', '123456', '2000-12-09', '0933448821', 'HOME8', 'test8@test8.com'),
(9, 'admin', '女', 'admin9', 'admin9', '2017-01-01', '0912332121', 'HOME9', 'admin9@admin.com'),
(10, 'admin2', '男', 'admin10', 'admin10', '2017-01-02', '0998798778', 'HOME10', 'admin10@admin.com'),
(11, 'admin3', '男', 'admin11', 'admin11', '2017-01-03', '0998798771', 'HOME11', 'admin11@admin.com');

-- --------------------------------------------------------

--
-- 資料表結構 `product_list`
--

CREATE TABLE `product_list` (
  `ID` int(11) NOT NULL,
  `Pname` varchar(10) NOT NULL,
  `Pic` varchar(30) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product_list`
--

INSERT INTO `product_list` (`ID`, `Pname`, `Pic`, `Price`, `text`) VALUES
(3, '豆沙包', '1483391395.png', '20', ''),
(1, '蛋黃肉包', '1483389719.jpg', '25', ''),
(5, '鮮奶饅頭', '1483391499.bmp', '10', ''),
(4, '全麥饅頭', '1483391580.jpg', '10', ''),
(2, '香菇肉包', '1483391261.jpg', '25', 'Q彈的麵包皮，咬下肉汁香濃滑順加上香菇來提升香氣，保證能震撼您的味蕾，大力推薦給喜歡美食的您。'),
(6, '豆漿', '1483391187.png', '15', '');

-- --------------------------------------------------------

--
-- 資料表結構 `shopcar`
--

CREATE TABLE `shopcar` (
  `id` int(11) NOT NULL,
  `MID` int(11) NOT NULL,
  `PID` int(10) NOT NULL,
  `Pname` text NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `shopcar`
--
ALTER TABLE `shopcar`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用資料表 AUTO_INCREMENT `product_list`
--
ALTER TABLE `product_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `shopcar`
--
ALTER TABLE `shopcar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
