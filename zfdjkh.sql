-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2016 年 01 月 09 日 11:41
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phphuiyuan1`
--

-- --------------------------------------------------------

--
-- 表的结构 `allusers`
--

CREATE TABLE IF NOT EXISTS `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `allusers`
--

INSERT INTO `allusers` (`id`, `username`, `pwd`, `cx`, `addtime`) VALUES
(2, 'admin', 'admin', '超级管理员', '2016-01-05 10:51:02');

-- --------------------------------------------------------

--
-- 表的结构 `dx`
--

CREATE TABLE IF NOT EXISTS `dx` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `dx`
--

INSERT INTO `dx` (`ID`, `leibie`, `content`, `addtime`) VALUES
(1, '网站简介', '简介', '2015-06-11 10:51:02'),
(2, '系统公告', '<P>44日5</P>', '2015-06-11 10:51:02');

-- --------------------------------------------------------

--
-- 表的结构 `jieguo`
--

CREATE TABLE IF NOT EXISTS `jieguo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) DEFAULT NULL,
  `number` int(11) unsigned NOT NULL,
  `score` float DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=24 ;

--
-- 导出表中的数据 `jieguo`
--

INSERT INTO `jieguo` (`id`, `company_name`, `number`, `score`, `addtime`) VALUES
(23, 'name', 12345, 117, '2016-01-08 20:52:32');

-- --------------------------------------------------------

--
-- 表的结构 `jqzb`
--

CREATE TABLE IF NOT EXISTS `jqzb` (
  `id` int(11) unsigned NOT NULL,
  `company_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `number` int(10) unsigned NOT NULL,
  `z1` float NOT NULL,
  `z1_weight` float NOT NULL,
  `z2` float NOT NULL,
  `z2_weight` float NOT NULL,
  `z3` float NOT NULL,
  `z3_weight` float NOT NULL,
  `z4` float NOT NULL,
  `z4_weight` float NOT NULL,
  `z5` float NOT NULL,
  `z5_weight` float NOT NULL,
  `z6` float NOT NULL,
  `z6_weight` float NOT NULL,
  `z7` float NOT NULL,
  `z7_weight` float NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`company_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `jqzb`
--

INSERT INTO `jqzb` (`id`, `company_name`, `number`, `z1`, `z1_weight`, `z2`, `z2_weight`, `z3`, `z3_weight`, `z4`, `z4_weight`, `z5`, `z5_weight`, `z6`, `z6_weight`, `z7`, `z7_weight`, `addtime`) VALUES
(0, 'fei', 321, 0.7, 0.05, 0.65, 0.05, 0.8, 0.05, 0.3, 0.125, 0.5, 0.125, 0.9, 75, 0.4, 0.075, '2016-01-09 00:40:58'),
(0, 'name', 12345, 1, 1, 1, 1, 1, 1, 111, 1, 1, 1, 1, 1, 1, 1, '2016-01-08 15:40:58');

-- --------------------------------------------------------

--
-- 表的结构 `kaohezhibiao`
--

CREATE TABLE IF NOT EXISTS `kaohezhibiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=27 ;

--
-- 导出表中的数据 `kaohezhibiao`
--

INSERT INTO `kaohezhibiao` (`id`, `leibie`, `addtime`) VALUES
(22, '资金使用和管理', '2016-01-05 20:58:59'),
(23, '基本建设程序的履行', '2016-01-05 20:59:12'),
(24, '工程招标与发包', '2016-01-05 20:59:19'),
(25, '项目组织与协调', '2016-01-05 20:59:28'),
(26, '项目变更情况', '2016-01-05 20:59:36');

-- --------------------------------------------------------

--
-- 表的结构 `yonghuzhuce`
--

CREATE TABLE IF NOT EXISTS `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=27 ;

--
-- 导出表中的数据 `yonghuzhuce`
--

INSERT INTO `yonghuzhuce` (`id`, `zhanghao`, `mima`, `xingming`, `xingbie`, `diqu`, `Email`, `zhaopian`, `addtime`, `issh`) VALUES
(26, 'aaaaaa', 'aaaaaa', '力度', '男', '浙江', 'uploadfile/1.jpg', 'uploadfile/1.jpg\r\nuploadfile/1.jpg\r\n', '2016-01-05 10:51:02', '是');

-- --------------------------------------------------------

--
-- 表的结构 `z8`
--

CREATE TABLE IF NOT EXISTS `z8` (
  `id` int(12) NOT NULL,
  `company_name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `number` int(11) unsigned NOT NULL,
  `weight` int(11) NOT NULL,
  `worse` float NOT NULL,
  `bad` float NOT NULL,
  `common` float NOT NULL,
  `good` float NOT NULL,
  `better` float NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`company_name`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `z8`
--

INSERT INTO `z8` (`id`, `company_name`, `number`, `weight`, `worse`, `bad`, `common`, `good`, `better`, `addtime`) VALUES
(0, 'fei', 321, 0, 0, 0.1, 0.3, 0.5, 0.1, '2016-01-09 00:57:48'),
(0, 'feiiee', 55, 0, 5, 5, 5, 5, 5, '2016-01-09 00:55:02'),
(0, 'is', 54321, 8, 8, 88, 8, 8, 8, '2016-01-08 11:32:01'),
(0, 'ma', 987, 55, 55, 55, 55, 55, 55, '2016-01-08 18:14:17'),
(0, 'my', 0, 0, 1, 1, 1, 1, 1, '2016-01-07 23:40:41'),
(0, 'name', 12345, 9, 1, 1, 1, 1, 1, '2016-01-08 11:14:18');

-- --------------------------------------------------------

--
-- 表的结构 `z9`
--

CREATE TABLE IF NOT EXISTS `z9` (
  `id` int(12) DEFAULT NULL,
  `company_name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `number` int(11) unsigned NOT NULL,
  `weight` float NOT NULL,
  `worse` float NOT NULL,
  `bad` float NOT NULL,
  `common` float NOT NULL,
  `good` float NOT NULL,
  `better` float NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`company_name`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `z9`
--

INSERT INTO `z9` (`id`, `company_name`, `number`, `weight`, `worse`, `bad`, `common`, `good`, `better`, `addtime`) VALUES
(NULL, 'fei', 321, 0.1, 0, 0.1, 0.5, 0.3, 0.2, '2016-01-09 00:57:48'),
(NULL, 'feiiee', 55, 0.1, 5, 5, 5, 5, 5, '2016-01-09 00:55:02'),
(NULL, 'is', 54321, 8, 8, 8, 8, 8, 8, '2016-01-08 11:32:01'),
(NULL, 'ma', 987, 55, 55, 55, 55, 55, 55, '2016-01-08 18:14:17'),
(0, 'my', 0, 0, 2, 2, 2, 2, 2, '2016-01-07 23:40:59'),
(0, 'name', 12345, 9, 1, 1, 1, 1, 1, '2016-01-08 11:14:18');

-- --------------------------------------------------------

--
-- 表的结构 `z10`
--

CREATE TABLE IF NOT EXISTS `z10` (
  `id` int(12) NOT NULL,
  `company_name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `number` int(11) unsigned NOT NULL,
  `weight` float NOT NULL,
  `worse` float NOT NULL,
  `bad` float NOT NULL,
  `common` float NOT NULL,
  `good` float NOT NULL,
  `better` float NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `z10`
--

INSERT INTO `z10` (`id`, `company_name`, `number`, `weight`, `worse`, `bad`, `common`, `good`, `better`, `addtime`) VALUES
(0, 'my', 0, 0, 3, 3, 3, 3, 3, '2016-01-07 23:41:17'),
(0, 'feiiee', 55, 0.1, 5, 5, 5, 5, 5, '2016-01-09 00:55:02'),
(0, 'fei', 321, 0.1, 0.1, 0.1, 0.1, 0.4, 0.3, '2016-01-09 00:57:48'),
(0, 'ma', 987, 55, 55, 55, 55, 55, 55, '2016-01-08 18:14:17'),
(0, 'name', 12345, 9, 1, 1, 1, 1, 1, '2016-01-08 11:14:18'),
(0, 'is', 54321, 8, 8, 8, 8, 8, 8, '2016-01-08 11:32:01');

-- --------------------------------------------------------

--
-- 表的结构 `z11`
--

CREATE TABLE IF NOT EXISTS `z11` (
  `id` int(12) NOT NULL,
  `company_name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `number` int(11) unsigned NOT NULL,
  `weight` float NOT NULL,
  `worse` float NOT NULL,
  `bad` float NOT NULL,
  `common` float NOT NULL,
  `good` float NOT NULL,
  `better` float NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `z11`
--

INSERT INTO `z11` (`id`, `company_name`, `number`, `weight`, `worse`, `bad`, `common`, `good`, `better`, `addtime`) VALUES
(0, 'my', 0, 0, 4, 4, 4, 4, 4, '2016-01-07 23:41:35'),
(0, 'feiiee', 55, 0.075, 5, 5, 5, 5, 5, '2016-01-09 00:55:02'),
(0, 'fei', 321, 0.075, 0.2, 0.4, 0.2, 0.2, 0, '2016-01-09 00:57:48'),
(0, 'ma', 987, 55, 55, 55, 55, 55, 55, '2016-01-08 18:14:17'),
(0, 'name', 12345, 9, 1, 1, 1, 1, 1, '2016-01-08 11:14:18'),
(0, 'is', 54321, 8, 8, 8, 8, 8, 8, '2016-01-08 11:32:01');

-- --------------------------------------------------------

--
-- 表的结构 `z12`
--

CREATE TABLE IF NOT EXISTS `z12` (
  `id` int(12) NOT NULL,
  `company_name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `number` int(11) unsigned NOT NULL,
  `weight` float NOT NULL,
  `worse` float NOT NULL,
  `bad` float NOT NULL,
  `common` float NOT NULL,
  `good` float NOT NULL,
  `better` float NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`company_name`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 导出表中的数据 `z12`
--

INSERT INTO `z12` (`id`, `company_name`, `number`, `weight`, `worse`, `bad`, `common`, `good`, `better`, `addtime`) VALUES
(0, 'fei', 321, 0.075, 0, 0.2, 0.4, 0.3, 0.1, '2016-01-09 00:57:48'),
(0, 'feiiee', 55, 0.075, 5, 5, 5, 5, 5, '2016-01-09 00:55:02'),
(0, 'is', 54321, 8, 8, 8, 8, 8, 8, '2016-01-08 11:32:01'),
(0, 'ma', 987, 55, 55, 55, 55, 55, 55, '2016-01-08 18:14:17'),
(0, 'my', 0, 0, 5, 5, 5, 5, 5, '2016-01-07 23:41:54'),
(0, 'name', 12345, 9, 1, 1, 1, 1, 1, '2016-01-08 11:14:18');

-- --------------------------------------------------------

--
-- 表的结构 `zhibiaoxinxi`
--

CREATE TABLE IF NOT EXISTS `zhibiaoxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(50) DEFAULT NULL,
  `mingcheng` varchar(50) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `tupian` varchar(50) DEFAULT NULL,
  `jianjie` text,
  `jiage` varchar(50) DEFAULT NULL,
  `faburen` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `xsl` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=35 ;

--
-- 导出表中的数据 `zhibiaoxinxi`
--

INSERT INTO `zhibiaoxinxi` (`id`, `bianhao`, `mingcheng`, `leibie`, `tupian`, `jianjie`, `jiage`, `faburen`, `addtime`, `xsl`) VALUES
(32, '234234', '北京公司', '项目变更情况', '差', '12', '1', '1', '2016-01-05 21:00:01', 0),
(33, '12', '1', '项目变更情况', '差', '1', '1', '1', '2016-01-05 21:00:39', 0),
(34, 'ss', 'fgdf', '项目变更情况', '差', '0.1', 'ff', 'a', '2016-01-06 15:35:09', 0);
