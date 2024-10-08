-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-09-30 09:24:28
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `231010118`
--
CREATE DATABASE IF NOT EXISTS `231010118` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `231010118`;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL COMMENT '编号',
  `username` varchar(30) NOT NULL COMMENT '留言者',
  `content` text NOT NULL COMMENT '留言内容',
  `email` varchar(50) DEFAULT NULL COMMENT 'email地址',
  `contats` varchar(20) NOT NULL COMMENT '联系方式',
  `createtime` date NOT NULL COMMENT '留言时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言表';

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL COMMENT '编号',
  `title` varchar(150) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `createtime` int(10) NOT NULL COMMENT '发布时间',
  `hits` int(11) NOT NULL DEFAULT '0' COMMENT '点击率',
  `istop` tinyint(1) NOT NULL COMMENT '是否置顶0,1',
  `cid` int(11) NOT NULL COMMENT '新闻类别',
  `tofrom` varchar(150) NOT NULL COMMENT '新闻来源'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻表';

--
-- 转储表的索引
--

--
-- 表的索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
