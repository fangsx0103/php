-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-10-09 18:49:18
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
-- 表的结构 `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL COMMENT '编号',
  `addr` varchar(255) NOT NULL COMMENT '收货地址',
  `realname` varchar(100) NOT NULL COMMENT '收货人姓名',
  `phone` varchar(20) NOT NULL COMMENT '收货人电话',
  `uid` int(11) NOT NULL COMMENT '买家id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL COMMENT '编号',
  `adminname` varchar(100) NOT NULL COMMENT '账号',
  `adminpwd` varchar(100) NOT NULL COMMENT '密码',
  `logins` int(11) NOT NULL COMMENT '登录次数',
  `lasttime` int(11) NOT NULL COMMENT '最后登录时间',
  `lastip` varchar(60) NOT NULL COMMENT '最后登录ip',
  `level` int(11) NOT NULL COMMENT '管理员级别',
  `manage` varchar(255) NOT NULL COMMENT '管理内容'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `adv`
--

CREATE TABLE `adv` (
  `id` int(11) NOT NULL COMMENT '编号',
  `image` varchar(255) NOT NULL COMMENT '大图片',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `isdisplay` tinyint(1) NOT NULL COMMENT '是否显示（0显示，1不显示）',
  `sort` tinyint(4) NOT NULL COMMENT '顺序（排序）'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `adv`
--

INSERT INTO `adv` (`id`, `image`, `title`, `isdisplay`, `sort`) VALUES
(1, '/uploadfiles/image/20241009/D0.jpg', '广告1', 1, 1),
(2, '/uploadfiles/image/20241009/D1.jpg', '广告1', 1, 2),
(3, '/uploadfiles/image/20241009/D3.jpg', '广告3', 1, 3);

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL COMMENT '编号',
  `sid` int(11) NOT NULL COMMENT '产品编号',
  `num` int(11) NOT NULL COMMENT '数量',
  `uid` int(11) NOT NULL COMMENT '买家id',
  `name` varchar(100) NOT NULL COMMENT '商品名称',
  `price` float NOT NULL COMMENT '商品单价',
  `image` varchar(100) NOT NULL COMMENT '商品图片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- 表的结构 `newclass`
--

CREATE TABLE `newclass` (
  `id` int(11) NOT NULL COMMENT '编号',
  `classname` varchar(20) NOT NULL COMMENT '类别名称',
  `sort` int(11) NOT NULL COMMENT '排序'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- 表的结构 `orderlist`
--

CREATE TABLE `orderlist` (
  `id` int(11) NOT NULL COMMENT '编号',
  `ordernum` varchar(20) NOT NULL COMMENT '订单号',
  `sid` int(11) NOT NULL COMMENT '产品编号',
  `num` int(11) NOT NULL COMMENT '数量',
  `uid` int(11) NOT NULL COMMENT '买家id',
  `name` varchar(100) NOT NULL COMMENT '商品名称',
  `price` float NOT NULL COMMENT '商品单价',
  `image` varchar(100) NOT NULL COMMENT '商品图片',
  `addresss` varchar(255) NOT NULL COMMENT '收货地址',
  `createtime` int(10) NOT NULL COMMENT '订单生成时间',
  `isdelete` tinyint(1) NOT NULL COMMENT '是否删除',
  `status` tinyint(1) NOT NULL COMMENT '订单状态',
  `kuaidi` varchar(50) NOT NULL COMMENT '快递名称',
  `number` varchar(50) NOT NULL COMMENT '快递单号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL COMMENT '编号',
  `name` varchar(150) NOT NULL COMMENT '产品名称',
  `image` varchar(255) NOT NULL COMMENT '产品缩略图',
  `content` text NOT NULL COMMENT '产品详细信息',
  `cid` int(11) NOT NULL COMMENT '产品类别',
  `createtime` int(10) NOT NULL COMMENT '发布时间',
  `hist` int(11) NOT NULL COMMENT '点击率',
  `istop` tinyint(1) NOT NULL COMMENT '是否置顶0否1是',
  `ishot` tinyint(1) NOT NULL COMMENT '是否热销，0否1是',
  `price` float NOT NULL COMMENT '单价',
  `midu` varchar(100) NOT NULL COMMENT '面料密度',
  `menfu` varchar(100) NOT NULL COMMENT '面料门幅',
  `chengfen` varchar(100) NOT NULL COMMENT '面料成分'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `productclass`
--

CREATE TABLE `productclass` (
  `id` int(11) NOT NULL COMMENT '编号',
  `classname` varchar(30) NOT NULL COMMENT '类别名称',
  `sort` int(11) NOT NULL COMMENT '排序'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT '编号',
  `username` varchar(100) NOT NULL COMMENT '账号',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `nickname` varchar(30) NOT NULL COMMENT '昵称',
  `header` varchar(100) NOT NULL COMMENT '头像',
  `email` varchar(30) NOT NULL COMMENT '邮箱',
  `phone` varchar(30) NOT NULL COMMENT '电话',
  `sex` varchar(3) NOT NULL COMMENT '性别',
  `logins` int(11) NOT NULL COMMENT '登录次数',
  `regtime` int(10) NOT NULL COMMENT '注册时间',
  `pointer` int(11) NOT NULL COMMENT '积分',
  `addr` int(11) NOT NULL COMMENT '默认收货地址',
  `status` tinyint(1) NOT NULL COMMENT '状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转储表的索引
--

--
-- 表的索引 `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `newclass`
--
ALTER TABLE `newclass`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `productclass`
--
ALTER TABLE `productclass`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `newclass`
--
ALTER TABLE `newclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `productclass`
--
ALTER TABLE `productclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
