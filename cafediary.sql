-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2017 年 1 月 19 日 18:23
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cafediary`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `diaries`
--

CREATE TABLE `diaries` (
  `id` int(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `time` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photo_dir` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `diaries`
--

INSERT INTO `diaries` (`id`, `c_name`, `s_name`, `time`, `photo`, `photo_dir`, `comment`, `created`) VALUES
(36, 'キャラメルマキアート', 'starbucks', '5', 'IMG_1579.JPG', 'webroot/files/Diaries/photo/', '濃くがあります。', '2017-01-19 03:34:08'),
(37, 'hogecoffee', 'hogecafe', '2', 'sample_coffee.JPG', 'webroot/files/Diaries/photo/', '美味しかった', '2017-01-19 10:19:39'),
(38, 'hugacoffee', 'hugacafe', '5', 'sample2.JPG', 'webroot/files/Diaries/photo/', 'huga', '2017-01-19 10:20:53'),
(39, 'mogecoffee', 'mogecafe', '4', 'sample3.jpg', 'webroot/files/Diaries/photo/', 'mogemoge', '2017-01-19 10:21:33'),
(40, 'jogecoffee', 'jogecafe', '8', 'sample4.jpg', 'webroot/files/Diaries/photo/', '綺麗でした。', '2017-01-19 10:22:12'),
(41, 'kogecoffee', 'kogecafe', '4', 'sample5.jpeg', 'webroot/files/Diaries/photo/', 'kogekoge', '2017-01-19 10:22:48'),
(42, 'sogecoffee', 'sogecafe', '2', 'sample6.jpg', 'webroot/files/Diaries/photo/', 'sogesoge', '2017-01-19 10:23:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diaries`
--
ALTER TABLE `diaries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diaries`
--
ALTER TABLE `diaries`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;