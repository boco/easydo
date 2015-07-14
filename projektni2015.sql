-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 14. jul 2015 ob 15.05
-- Različica strežnika: 5.6.11
-- Različica PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `projektni2015`
--
CREATE DATABASE IF NOT EXISTS `easydo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `easydo`;

-- --------------------------------------------------------

--
-- Struktura tabele `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `task_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(6) NOT NULL,
  `name` int(40) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `created` date NOT NULL,
  `deadline` date NOT NULL,
  `priority` tinyint(1) NOT NULL,
  `completed` tinyint(1) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `registered` date NOT NULL,
  `settings` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
