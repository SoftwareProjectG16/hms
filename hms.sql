-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 ديسمبر 2016 الساعة 00:24
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- بنية الجدول `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` text NOT NULL,
  `userName` text NOT NULL,
  `uPassword` text NOT NULL,
  `gender` text NOT NULL,
  `birthday` date NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `phone` text,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `person`
--

INSERT INTO `person` (`id`, `fullName`, `userName`, `uPassword`, `gender`, `birthday`, `email`, `mobile`, `phone`, `city`, `address`, `type`) VALUES
(1, 'moh', 'admin', 'padmin', 'male', '2016-12-07', 'admin@ex.com', '011', '02', 'cairo', 'st', 'admintype');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
