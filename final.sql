-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2016 at 09:53 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--
CREATE DATABASE IF NOT EXISTS `final` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `final`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `article_by` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `genre` varchar(30) NOT NULL,
  `visible` int(2) NOT NULL,
  `review_by` varchar(30) NOT NULL,
  `likes` int(5) NOT NULL,
  `image_name` varchar(30) NOT NULL,
  `pothas` int(5) NOT NULL DEFAULT '0',
  `iframe` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article_by`, `time`, `content`, `genre`, `visible`, `review_by`, `likes`, `image_name`, `pothas`, `iframe`) VALUES
(9, 'Applied Ethics', 'chintu', '2015-01-09 11:36 pm', ' 1.	Utilitarianism, where the practical consequences of various policies are evaluated on the assumption that the right policy will be the one which results in the greatest happiness. This theories main developments came from Jeremy Bentham and John Stuart Mill who distinguished between an act and rule utilitarianist morality. Later developments have also adjusted the theory, most notably Henry Sidgwick who introduced the idea of motive or intent in morality, and Peter Singer who introduced the idea of preference in to moral decision making.', 'complex', 1, 'gaurav', 2, 'car.jpg', 1, ''),
(10, 'xyz', 'gaurav agarwal', '2015-04-03 10:59 pm', 'sdfghjkl\r\nsdfghjkl;\r\nsdfghjkl', 'ism', 0, '', 0, 'rsz_discussionfotolia.jpg', 1, ''),
(11, 'xyz', '', '', '', 'ism', 0, '', 0, '', 0, 'http://niteshdutt.blogspot.com'),
(12, 'how to get jailed', 'gaurav agarwal', '2015-04-04 02:24 pm', 'Keeping in mind the defamation from certain issues, when discussed in public,bring to our college; we would thereby urge and encourage the students to henceforth	bring up all of their queries/views/discussions on this forum.\r\n\r\nQuestions pertaining to the SCG may be asked on the ask SCG tab, While discussions may be carried on ''the Shoutbox tab'' anonymously, keeping the identity of the person confidential so that you may express yourself freely.Keeping in mind the defamation from certain issues, when discussed in public,bring to our college; we would thereby urge and encourage the students to henceforth	bring up all of their queries/views/discussions on this forum.\r\n\r\nQuestions pertaining to the SCG may be asked on the ask SCG tab, While discussions may be carried on ''the Shoutbox tab'' anonymously, keeping the identity of the person confidential so that you may express yourself freely.', 'comedy', 0, '', 0, 'messi.jpg', 1, ''),
(13, 'Astitva', 'Harshit', '2015-04-04 02:27 pm', '', 'fantasy', 1, '', 0, '', 0, 'http://astitvam.weebly.com/'),
(14, 'Gaurav', 'gaurav agarwal', '', 'Live your life', 'batch', 0, '', 0, '', 0, ''),
(15, 'Gaurav', 'gaurav agarwal', 'CSE', 'Live your life', 'batch', 0, '', 0, '', 0, ''),
(16, 'Gaurav', 'gaurav agarwal', 'CSE Dual', 'nothing', 'batch', 0, '', 0, '', 0, ''),
(17, 'Gaurav', 'gaurav agarwal', 'CSE Dual', '  nothing', 'batch', 1, 'gauravagarwal.110695@gmail.com', 0, '', 0, ''),
(18, 'FFQF', 'gaurav agarwal', '2015-06-22 10:41 pm', 'M,M,', 'ism', 0, '', 0, '', 0, ''),
(19, 'mv ', 'gaurav agarwal', '2015-06-22 10:43 pm', 'sav', 'ism', 0, '', 0, '', 0, ''),
(20, 'af', 'gaurav agarwal', '2015-06-22 10:45 pm', 'f', 'ism', 0, '', 0, '', 0, ''),
(21, 'DDA', 'gaurav agarwal', '2015-06-22 10:51 pm', 'WF', 'fantasy', 0, '', 0, '', 0, ''),
(22, 'XCBS', 'gaurav agarwal', '2015-06-22 10:51 pm', ',', 'ism', 0, '', 0, 'allin.png', 0, ''),
(23, 'f', 'gaurav agarwal', '2015-06-22 10:53 pm', 'wf', 'ism', 0, '', 0, 'allin.png', 0, ''),
(24, 'wf', 'gaurav agarwal', '2015-06-22 10:55 pm', 'w', 'ism', 0, '', 0, 'AsrqkL06YavohG3bWgjp5U-kf2A_eQ', 0, ''),
(25, 'af', 'gaurav agarwal', '2015-06-22 10:57 pm', 'efg', 'ism', 0, '', 0, 'AsrqkL06YavohG3bWgjp5U-kf2A_eQ', 0, ''),
(26, 'qmgg', 'gaurav agarwal', '2015-06-22 10:59 pm', 'f', 'complex', 0, '', 0, 'AsrqkL06YavohG3bWgjp5U-kf2A_eQ', 0, ''),
(27, 'qf', 'gaurav agarwal', '2015-06-22 11:00 pm', 'wwf', 'ism', 0, '', 0, 'AsrqkL06YavohG3bWgjp5U-kf2A_eQ', 0, ''),
(28, 'j', 'gaurav agarwal', '2015-06-22 11:01 pm', 'j', 'ism', 0, '', 0, 'AsrqkL06YavohG3bWgjp5U-kf2A_eQ', 0, ''),
(29, 'afs', 'gaurav agarwal', '2015-06-22 11:02 pm', 'f', 'ism', 0, '', 0, 'AsrqkL06YavohG3bWgjp5U-kf2A_eQ', 0, ''),
(30, 'as', 'gaurav agarwal', '2015-06-22 11:03 pm', 'ssc', 'ism', 0, '', 0, 'AsrqkL06YavohG3bWgjp5U-kf2A_eQ', 0, ''),
(31, 'as', 'gaurav agarwal', '2015-06-22 11:04 pm', 'ssc', 'ism', 0, '', 0, 'AsrqkL06YavohG3bWgjp5U-kf2A_eQ', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE IF NOT EXISTS `ask` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `question` text NOT NULL,
  `time` varchar(30) NOT NULL,
  `answer` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`id`, `name`, `question`, `time`, `answer`) VALUES
(1, 'chintu', 'What is the procedure of getting into SCG??', '2015-03-17 11:22 pm', 1),
(9, 'chintu', 'XYZ??\r\n', '2015-03-17 11:29 pm', 1),
(10, 'gaurav agarwal', 'afsasv', '2015-06-21 01:10 am', 0),
(11, 'gaurav agarwal', 'aujb', '2015-06-21 01:10 am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `subject1` varchar(30) NOT NULL,
  `subject2` varchar(30) NOT NULL,
  `subject3` varchar(30) NOT NULL,
  `subject4` varchar(33) NOT NULL,
  `subject5` varchar(30) NOT NULL,
  `subject6` varchar(30) NOT NULL,
  `subject7` varchar(30) NOT NULL,
  `subject8` varchar(30) NOT NULL,
  `subject9` varchar(30) NOT NULL,
  `subject10` varchar(30) NOT NULL,
  `total_subjects` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `student`, `section`, `year`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `total_subjects`) VALUES
(30, 'chintu', 'cse', 'II', 'maths', 'english', 'ds', 'algo', 'coa', 'prac', '', '', '', '', 6),
(31, 'gaurav', 'cse', 'II', 'maths', 'dd', 'ds', 'algo', 'prac', '', '', '', '', '', 5),
(32, 'gaurav agarwal', 'cse', 'II', 'maths', 'hsc', 'electronics', 'algo', 'coa', 'ds', 'xyz', '', '', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `attendence_days`
--

CREATE TABLE IF NOT EXISTS `attendence_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `mon` varchar(30) NOT NULL DEFAULT '0',
  `tue` varchar(30) NOT NULL DEFAULT '0',
  `wed` varchar(30) NOT NULL DEFAULT '0',
  `thur` varchar(30) NOT NULL DEFAULT '0',
  `fri` varchar(30) NOT NULL DEFAULT '0',
  `sat` varchar(30) NOT NULL,
  `sun` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `attendence_days`
--

INSERT INTO `attendence_days` (`id`, `user`, `mon`, `tue`, `wed`, `thur`, `fri`, `sat`, `sun`) VALUES
(13, 'chintu', '0', '0', '0', '0', '0', '', ''),
(14, 'gaurav', '1', '1', '1', '1', '0', '', ''),
(15, 'gaurav agarwal', '1', '1', '1', '1', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendene_given`
--

CREATE TABLE IF NOT EXISTS `attendene_given` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(30) NOT NULL,
  `subject1` varchar(500) NOT NULL,
  `subject2` varchar(500) NOT NULL,
  `subject3` varchar(500) NOT NULL,
  `subject4` varchar(500) NOT NULL,
  `subject5` varchar(500) NOT NULL,
  `subject6` varchar(500) NOT NULL,
  `subject7` varchar(500) NOT NULL,
  `subject8` varchar(500) NOT NULL,
  `subject9` varchar(500) NOT NULL,
  `subject10` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `attendene_given`
--

INSERT INTO `attendene_given` (`id`, `student`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`) VALUES
(10, 'chintu', 'apppppap', 'paapaaap', 'ppppaaap', 'pppppppp', 'xppppppp', 'xppappmn', 'nnnnnnnn', 'nnnnnnnn', 'nnnnnnnn', 'nnnnnnnn'),
(11, 'gaurav', 'aaap', 'aapp', 'pxpp', 'pxpa', 'pxxp', 'nnnn', 'nnnn', 'nnnn', 'nnnn', 'nnnn'),
(12, 'gaurav agarwal', 'xpnppnnpp', 'pxmpxxmxp', 'pppppnppp', 'mppanpppa', 'nnpnpppnn', 'nnpnxppnn', 'nnxnppxnn', 'nnnnnnnnn', 'nnnnnnnnn', 'nnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `bakar`
--

CREATE TABLE IF NOT EXISTS `bakar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `time` varchar(30) NOT NULL,
  `likes` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `bakar`
--

INSERT INTO `bakar` (`id`, `name`, `pic`, `msg`, `time`, `likes`) VALUES
(1, 'gaurav agarwal', '0', 'IIT Dhanbad', '2015-03-20 03:25 pm', 1),
(2, 'gaurav agarwal', '0', 'IIT Dhanbad', '2015-03-20 03:26 pm', 0),
(3, 'gaurav agarwal', '0', 'IIT Dhanbad', '2015-03-20 03:26 pm', 1),
(4, 'gaurav agarwal', '0', 'IIT Dhanbad', '2015-03-20 03:26 pm', 0),
(5, 'gaurav agarwal', '0', 'lksl\r\n', '2015-03-20 03:27 pm', 1),
(6, 'gaurav agarwal', '0', '#IIT DHANBAD', '2015-03-20 03:35 pm', 2),
(7, 'gaurav agarwal', '0', ', , , ,g,g,gg', '2015-03-21 08:05 pm', 2),
(8, 'gaurav agarwal', '', '', '2015-03-29 04:45 am', 0),
(9, 'gaurav agarwal', '', '', '2015-03-29 04:46 am', 0),
(10, 'gaurav agarwal', 'rsz_discussionfotolia.jpg', '', '2015-03-29 04:48 am', 0),
(11, 'gaurav agarwal', 'messsi.jpg', '', '2015-03-29 04:50 am', 0),
(12, 'gaurav agarwal', 'messsi.jpg', '', '2015-03-29 04:51 am', 0),
(13, 'gaurav agarwal', 'messsi.jpg', '', '2015-03-29 04:52 am', 0),
(14, 'gaurav agarwal', 'messsi.jpg', '', '2015-03-29 03:31 pm', 0),
(15, 'gaurav agarwal', 'allin.png', '', '2015-06-04 06:22 pm', 0),
(16, 'gaurav agarwal', 'bakarx.jpg', '', '2015-06-04 06:27 pm', 0),
(17, 'gaurav agarwal', 'bakarx.jpg', '', '2015-06-04 06:28 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bakar_comments`
--

CREATE TABLE IF NOT EXISTS `bakar_comments` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `bakar_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bakar_comments`
--

INSERT INTO `bakar_comments` (`id`, `name`, `email`, `date`, `comment`, `bakar_id`) VALUES
(1, 'gaurav agarwal', 'gauravagarwal.110695@gmail.com', '2015-03-29 01:45 am', 'jdbwjfbjn', 7),
(2, 'gaurav agarwal', 'gauravagarwal.110695@gmail.com', '2015-03-29 01:46 am', 'nsfn\r\n', 7),
(3, 'gaurav agarwal', 'gauravagarwal.110695@gmail.com', '2015-03-29 01:47 am', 'jkbfkj', 7),
(4, 'gaurav agarwal', 'gauravagarwal.110695@gmail.com', '2015-03-29 01:47 am', 'jDBJK\r\n', 7);

-- --------------------------------------------------------

--
-- Table structure for table `blog_admins`
--

CREATE TABLE IF NOT EXISTS `blog_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `blog_admins`
--

INSERT INTO `blog_admins` (`id`, `username`, `password`) VALUES
(1, 'gaurav', ''),
(2, 'gaurav', ''),
(3, 'nitesh', ''),
(4, 'nitesh', ''),
(5, 'gauravagarwal.110695@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(6, 'gaurav', '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(30) NOT NULL,
  `writer` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` int(5) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `bill` varchar(10) NOT NULL,
  `seller` varchar(30) NOT NULL,
  `genre` varchar(15) NOT NULL DEFAULT 'Other',
  `identity` int(11) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT '0',
  `seller_email` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `book_name`, `writer`, `description`, `price`, `mobile`, `bill`, `seller`, `genre`, `identity`, `visible`, `seller_email`, `image`) VALUES
(4, 'The Greatns Gude', 'Thomas Alva Edisin', ' A must read book.\r\nIn very good condition.', 120, 8877002654, 'yes', 'gaurav agarwal', 'Electronics', 1, 1, 'gauravagarwal.110695@gmail.com', ''),
(5, 'The Greatns Gude', 'Thomas Alva Edisin', ' A must read book.\r\nIn very good condition.', 120, 8877002654, 'yes', 'gaurav agarwal', 'Electronics', 1, 1, 'gauravagarwal.110695@gmail.com', ''),
(6, 'The Greatns Gude', 'Thomas Alva Edisin', ' A must read book.\r\nIn very good condition.', 120, 8877002654, 'yes', 'gaurav agarwal', 'Electronics', 1, 1, 'gauravagarwal.110695@gmail.com', 'rsz_discussionfotolia.jpg'),
(7, 'The Greatns Gude', 'Thomas Alva Edisin', ' A must read book.\r\nIn very good condition.', 120, 8877002654, 'yes', 'gaurav agarwal', 'Electronics', 1, 1, 'gauravagarwal.110695@gmail.com', 'vlcsnap-2014-04-30-20h32m57s54.png'),
(9, 'It Happened in INDIA', 'XYZ', ' Very good book for MBA aspirants. In ver good condition.', 80, 8877002654, 'yes', 'gaurav agarwal', 'Electronics', 0, 1, 'gauravagarwal.110695@gmail.com', 'vlcsnap-2014-04-30-20h38m09s142.png'),
(10, 'XYZ', '12345', ' asdfghjl;          asdfghjk asdg', 100, 2000000000, 'yes', 'gaurav agarwal', 'Programming', 0, 1, 'gauravagarwal.110695@gmail.com', 'title.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `avail` int(1) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `category`, `brand`, `price`, `quantity`, `avail`, `pic`) VALUES
(1, 'Toothpaste', 'Colgate', '300000', '200 g', 1, 'colgate.jpg'),
(2, 'Shampoo', 'Pentene', '100', '200ml', 1, 'oral.jpg'),
(3, 'Toothpaste', 'Pepsodent', '200', '200 g', 1, 'pepso.jpg'),
(4, 'Soap', 'Dove', '36', '200gm', 1, ''),
(5, 'Toothpaste', 'Sensodyne', '200', '200gm', 1, 'sensodine.jpg'),
(6, 'Toothpaste', 'Closeup', '70', '100gm', 1, 'close.jpg'),
(7, 'Toothpaste', 'Colgate', '300', '100gm', 1, 'colgate.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE IF NOT EXISTS `bulletin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `headline` text NOT NULL,
  `pic` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(40) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` varchar(5) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `piece` int(1) NOT NULL,
  `pic` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `quantity`, `price`, `brand`, `category`, `piece`, `pic`) VALUES
(22, 'dksrmffup28tav5idu7kjr8fh0', '100gm', '300', 'Colgate', 'Toothpaste', 1, 'colgate.jpg'),
(23, 'dksrmffup28tav5idu7kjr8fh0', '200 g', '30000', 'Colgate', 'Toothpaste', 3, 'colgate.jpg'),
(24, 'fv8n3h28eudncro88h00q8k745', '200gm', '36', 'Dove', 'Soap', 1, ''),
(25, 'd067dbbp8b7hljuvqf132do2j0', '200 g', '30000', 'Colgate', 'Toothpaste', 5, 'colgate.jpg'),
(26, '78qlil0v4g7tc79egod8jg6ib6', '200ml', '100', 'Pentene', 'Shampoo', 5, 'oral.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `time` varchar(30) NOT NULL,
  `shout_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `time`, `shout_id`) VALUES
(1, 'chintu', 'njnsd', '2015-03-18 08:30 pm', 7),
(2, 'chintu', 'njnsd', '2015-03-18 08:31 pm', 7),
(3, 'chintu', 'njnsd', '2015-03-18 08:32 pm', 7),
(4, 'chintu', 'IIT(ISM) Dhanbad is better choice.', '2015-03-18 08:32 pm', 7),
(5, 'chintu', 'IIT(ISM) Dhanbad is better choice.', '2015-03-18 08:33 pm', 7),
(6, 'chintu', 'IIT(ISM) Dhanbad is better choice.', '2015-03-18 08:35 pm', 7),
(7, 'chintu', 'njnsd', '2015-03-18 08:35 pm', 7),
(8, 'chintu', 'xvxb', '2015-03-18 08:35 pm', 7),
(9, 'gaurav agarwal', '#IIT(ISM) Dhanbad\r\n', '2015-03-29 01:43 am', 6),
(10, 'gaurav agarwal', 'dfhwjfknawkl\r\n', '2015-03-29 01:43 am', 6),
(11, 'gaurav agarwal', 'nns\r\n', '2015-03-29 01:44 am', 6),
(12, 'gaurav agarwal', 'fuck off', '2015-06-21 01:39 am', 7);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addess` varchar(200) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `company` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `addess`, `mobile`, `company`) VALUES
(1, 'Mr.Nakul', 'hastensdelh@sff', '132-133,south court mall,saket', '9268572224', 'Hastens Sleep Spa Delhi'),
(2, 'xyz', 'paramjeet.kaur@trilegal.com', '311B/C/D,DLF South Court,Saket', '011-42599200', 'Trilegal'),
(3, 'xyz', 'kamal@sinopharm.com', 'Dlf place office block', '12443284089', 'Sinopharm'),
(4, 'Puneet', 'gtasurvey@gmail.com', '6-c. pocket-c, sfs flats, mayur vihar phase-3', '08877002654', 'My Value Box');

-- --------------------------------------------------------

--
-- Table structure for table `discuss`
--

CREATE TABLE IF NOT EXISTS `discuss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `massage` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `discuss`
--

INSERT INTO `discuss` (`id`, `name`, `massage`, `time`) VALUES
(1, 'gaurav', 'hello\r\n', '2014-12-30 12:09 pm'),
(2, 'gaurav', 'hii\r\n', '2014-12-30 12:12 pm'),
(3, 'gaurav', 'hii\r\n', '2014-12-30 12:12 pm'),
(4, 'gaurav', 'hii\r\n', '2014-12-30 12:13 pm'),
(5, 'gaurav', 'hii\r\n', '2014-12-30 12:13 pm'),
(6, 'gaurav', 'hii\r\n', '2014-12-30 12:14 pm'),
(7, 'gaurav', 'hii\r\n', '2014-12-30 12:14 pm'),
(8, 'gaurav', 'hii\r\n', '2014-12-30 12:16 pm'),
(9, 'gaurav', 'hii\r\n', '2014-12-30 12:17 pm'),
(10, 'gaurav', 'hii\r\n', '2014-12-30 12:17 pm'),
(11, 'gaurav', 'whats up\r\n\r\n\r\n', '2014-12-30 12:18 pm'),
(12, 'gaurav', 'whats up\r\n\r\n\r\n', '2014-12-30 12:19 pm'),
(13, 'gaurav', 'whats up\r\n\r\n\r\n', '2014-12-30 12:20 pm'),
(14, 'gaurav', 'whats up\r\n\r\n\r\n', '2014-12-30 12:20 pm'),
(15, 'gaurav', 'whats up\r\n\r\n\r\n', '2014-12-30 12:24 pm'),
(16, 'gaurav', 'buui\r\n', '2014-12-30 12:24 pm'),
(17, 'gaurav', 'buui\r\n', '2014-12-30 12:25 pm'),
(18, 'gaurav', 'fklng\r\n', '2014-12-30 12:25 pm'),
(19, 'gaurav', 'nuhu\r\n', '2014-12-30 12:31 pm'),
(20, 'gaurav', 'nuhu\r\n', '2014-12-30 12:32 pm'),
(21, 'gaurav', 'nuhu\r\n', '2014-12-30 12:32 pm'),
(22, 'gaurav', 'nuhu\r\n', '2014-12-30 12:33 pm'),
(23, 'gaurav', '0\r\n', '2014-12-30 12:33 pm'),
(24, 'gaurav', '0\r\n', '2014-12-30 12:33 pm'),
(25, 'gaurav', '0\r\n', '2014-12-30 12:33 pm'),
(26, 'gaurav', '0\r\n', '2014-12-30 12:33 pm'),
(27, 'gaurav', '0\r\n', '2014-12-30 12:34 pm'),
(28, 'gaurav', '0\r\n', '2014-12-30 12:35 pm'),
(29, 'gaurav', '0\r\n', '2014-12-30 12:35 pm'),
(30, 'gaur', '<br />\r\n<b>Notice</b>:  Undefined variable: message in <b>C:\\xampp1\\htdocs\\boot\\discuss.php</b> on line <b>138</b><br />\r\nbhbjh', '2014-12-30 12:36 pm'),
(31, 'gaur', '<br />\r\n<b>Notice</b>:  Undefined variable: message in <b>C:\\xampp1\\htdocs\\boot\\discuss.php</b> on line <b>138</b><br />\r\nbhbjh', '2014-12-30 12:37 pm'),
(32, 'gaur', '<br />\r\n<b>Notice</b>:  Undefined variable: message in <b>C:\\xampp1\\htdocs\\boot\\discuss.php</b> on line <b>138</b><br />\r\nbhbjh', '2014-12-30 12:37 pm'),
(33, 'gaur', '<br />\r\n<b>Notice</b>:  Undefined variable: message in <b>C:\\xampp1\\htdocs\\boot\\discuss.php</b> on line <b>138</b><br />\r\nbhbjh', '2014-12-30 12:37 pm'),
(34, 'gaur', '<br />\r\n<b>Notice</b>:  Undefined variable: message in <b>C:\\xampp1\\htdocs\\boot\\discuss.php</b> on line <b>138</b><br />\r\nbhbjh', '2014-12-30 12:37 pm'),
(35, 'gaur', 'hii\r\n', '2014-12-30 12:38 pm'),
(36, 'gaur', 'hii\\r\\n', '2014-12-30 12:38 pm'),
(37, 'gaur', 'hii\\\\r\\\\n', '2014-12-30 12:38 pm'),
(38, 'gaur', 'hii\\\\r\\\\n', '2014-12-30 12:38 pm'),
(39, 'gaur', 'hii\\\\r\\\\n', '2014-12-30 12:38 pm'),
(40, 'gaur', 'hii\\\\r\\\\n', '2014-12-30 12:38 pm'),
(41, 'gaur', 'hii\\\\r\\\\n', '2014-12-30 12:38 pm'),
(42, 'gaur', 'hiihiug\\\\\\\\r\\\\\\\\n', '2014-12-30 12:39 pm'),
(43, 'gaur', 'hiihiug\\\\\\\\r\\\\\\\\n', '2014-12-30 12:39 pm'),
(44, 'gaur', 'hiihiug\\\\\\\\r\\\\\\\\n', '2014-12-30 12:39 pm'),
(45, 'gaur', 'hiihiug\\\\\\\\r\\\\\\\\n', '2014-12-30 12:39 pm'),
(46, 'gaur', 'vyyugy\r\n\r\n', '2014-12-30 12:40 pm'),
(47, 'gaur', 'vyyugy\r\n\r\n', '2014-12-30 12:40 pm'),
(48, 'gaur', 'vyyugy\r\n\r\n', '2014-12-30 12:43 pm'),
(49, 'gaur', 'vyyugy\r\n\r\n', '2014-12-30 12:43 pm'),
(50, 'gaur', 'vyyugy\\r\\n\\r\\n', '2014-12-30 12:43 pm'),
(51, 'gaurav', 'hhhh', '2014-12-30 12:51 pm'),
(52, 'gaur', 'hiihiug\\\\\\\\r\\\\\\\\n', '2014-12-30 01:12 pm'),
(53, 'gaur', 'fsdsdf', '2014-12-30 01:12 pm'),
(54, 'gaur', 'fsdsdf', '2014-12-30 01:13 pm'),
(55, 'gaur', 'fsdsdf', '2014-12-30 01:13 pm'),
(56, 'gaur', 'fsdsdf', '2014-12-30 01:13 pm'),
(57, 'gaur', 'fsdsdf', '2014-12-30 01:14 pm'),
(58, 'gaur', 'fsdsdf', '2014-12-30 01:14 pm'),
(59, 'gaur', 'fsdsdf', '2014-12-30 01:14 pm'),
(60, 'gaurav', 'hhhh', '2014-12-30 01:16 pm'),
(61, 'gaurav', 'hello', '2014-12-30 01:16 pm'),
(62, 'gaurav', 'hii\r\n', '2014-12-30 01:17 pm'),
(63, 'cba69eb0d8dfecdbd69fb85c47d167', 'hii', '2014-12-31 12:43 am'),
(64, '', 'hello everyone', '2014-12-31 07:50 pm'),
(65, 'gaurav', 'hooo', '2014-12-31 07:52 pm');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `event_date` varchar(30) NOT NULL,
  `event_time` varchar(30) NOT NULL,
  `event_deadline` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `sub_by` varchar(30) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT '0',
  `review_by` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `description`, `event_date`, `event_time`, `event_deadline`, `image`, `sub_by`, `visible`, `review_by`) VALUES
(2, 'WEBs', '   An webdesgning competion cum workshop. For the first year enthusiasts.\r\nPrizes for the winners. \r\nOn the Spot Registration\r\nThanks', '12-5-2015', '8:00', '15-2-2015', 'abc.jpg', 'chintu', 1, 'gaurav'),
(3, 'ISM Talks', ' Organised by LITC, the contest wil be held at Management Hall.', '21 March', '4:00 PM', '', 'messi.jpg', 'gaurav agarwal', 1, 'gaurav'),
(4, 'nkjsdn', ' z ', '12-5-2015', '4:00 PM', '', 'messsi.jpg', 'gaurav agarwal', 1, 'gaurav');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE IF NOT EXISTS `experts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query` text NOT NULL,
  `field` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `query`, `field`, `name`, `time`) VALUES
(4, 'What is difference between c and c++?', 'programming', 'gaurav', '2014-12-30 04:01 pm'),
(6, 'what is html', 'web', 'gaurav', '2015-01-01 01:34 am'),
(9, 'bhbh', 'web', '', '2015-01-08 08:04 pm'),
(10, 'bhjv', 'web', '', '2015-01-08 08:04 pm'),
(11, 'huuu', 'web', 'chintu', '2015-01-08 08:06 pm'),
(12, 'hii\r\n', 'web', 'chintu', '2015-01-08 08:06 pm');

-- --------------------------------------------------------

--
-- Table structure for table `expert_admins`
--

CREATE TABLE IF NOT EXISTS `expert_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expert_admins`
--

INSERT INTO `expert_admins` (`id`, `username`, `password`) VALUES
(1, 'gaurav', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `expert_ans`
--

CREATE TABLE IF NOT EXISTS `expert_ans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `answer` text NOT NULL,
  `time` varchar(30) NOT NULL,
  `expert` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `expert_ans`
--

INSERT INTO `expert_ans` (`id`, `query_id`, `name`, `answer`, `time`, `expert`) VALUES
(1, 3, 'gaurav', 'hhh\r\n', '2014-12-30 03:47 pm', 0),
(2, 3, 'gaurav', 'hiii\r\n', '2014-12-30 03:48 pm', 0),
(3, 3, 'gaurav', 'hpw do u know', '2014-12-30 03:57 pm', 0),
(4, 3, 'gaurav', 'njanfj', '2014-12-30 03:59 pm', 0),
(5, 4, 'gaurav', 'Hiii\r\n', '2014-12-30 04:01 pm', 0),
(6, 4, 'gaurav', 'NOthing', '2014-12-30 04:02 pm', 1),
(7, 6, '', 'you should........\r\n', '2015-01-08 07:22 pm', 0),
(8, 6, 'gaurav', 'hjhjghj\r\n', '2015-01-08 07:24 pm', 0),
(9, 6, 'gaurav', 'hiiii', '2015-01-08 07:30 pm', 0),
(10, 6, 'gaurav', 'hypertext markup language\r\n', '2015-01-08 07:34 pm', 1),
(11, 6, 'gaurav', 'this is this', '2015-01-08 07:46 pm', 1),
(12, 12, 'gaurav', 'bii', '2015-01-08 08:07 pm', 1),
(13, 11, 'gaurav', 'hiii', '2015-01-08 09:02 pm', 1),
(14, 10, 'gaurav', 'hii', '2015-01-08 09:03 pm', 1),
(15, 9, 'chintu', 'bii', '2015-01-08 09:05 pm', 0),
(16, 12, 'chintu', 'jjooo\r\n', '2015-01-08 09:08 pm', 0),
(17, 12, 'chintu', 'hii\r\n', '2015-01-08 09:12 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fb`
--

CREATE TABLE IF NOT EXISTS `fb` (
  `UID` bigint(20) NOT NULL,
  `Fuid` varchar(100) NOT NULL,
  `Ffname` varchar(60) NOT NULL,
  `Femail` varchar(60) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'gaurav agarwal', 'Very helpful site.');

-- --------------------------------------------------------

--
-- Table structure for table `film_list`
--

CREATE TABLE IF NOT EXISTS `film_list` (
  `FID` int(10) NOT NULL AUTO_INCREMENT,
  `price` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`FID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `film_list`
--

INSERT INTO `film_list` (`FID`, `price`, `title`, `category`) VALUES
(1, '0.99', 'ACADEMY DINOSAUR', 'Documentary'),
(2, '	\r\n4.99', 'ACE GOLDFINGER', 'A...\r\nHorror'),
(3, '2.99', 'ADAPTATION HOLES', 'Documentary'),
(4, '7.99', 'AFFAIR PREJUDICE', 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE IF NOT EXISTS `gps` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `latitiude` varchar(12) NOT NULL,
  `longitde` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gps`
--

INSERT INTO `gps` (`id`, `latitiude`, `longitde`) VALUES
(1, '100', '150'),
(2, '100', '150'),
(3, '100', '150'),
(4, '100', '150'),
(5, '100', '150'),
(6, '100', '150'),
(7, '100', '150'),
(8, '100', '150');

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE IF NOT EXISTS `hits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hits_main` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`id`, `hits_main`) VALUES
(1, 2382);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `product_name`) VALUES
(1, 'Toothpaste'),
(6, 'Shampoo'),
(8, 'Hair Oil'),
(9, 'Soap');

-- --------------------------------------------------------

--
-- Table structure for table `meet`
--

CREATE TABLE IF NOT EXISTS `meet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `hostel` varchar(12) NOT NULL,
  `room` varchar(12) NOT NULL,
  `description` text NOT NULL,
  `seller` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `meet`
--

INSERT INTO `meet` (`id`, `name`, `mobile`, `hostel`, `room`, `description`, `seller`) VALUES
(1, 'gaurav agarwal', '8877002654', 'Amber', 'B-124', 'Selling an Mobile Phone', ''),
(2, 'gaurav agarwal', '8877002654', 'Amber', 'B-124', 'Selling an Mobile Phone', 'Gaurav'),
(3, 'gaurav agarwal', '8877002654', 'Amber', 'B-124', 'Selling an Mobile Phone', 'Gaurav');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `reciever` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `reciever`, `time`, `message`) VALUES
(1, 'gaurav', 'chintu', '2015-01-02 01:52 pm', 'hello chinu\r\n'),
(2, 'gaurav', 'chintu', '2015-01-02 01:52 pm', 'hello chinu\r\n'),
(3, 'gaurav', 'chintu', '2015-01-02 01:54 pm', 'hello chinu\r\n'),
(4, 'gaurav', 'chintu', '2015-01-02 01:54 pm', 'hello chinu\r\n'),
(5, 'gaurav', 'chintu', '2015-01-02 01:55 pm', 'hiiii'),
(6, 'chintu', 'gaurav', '2015-01-02 02:23 pm', 'hiii\r\n'),
(7, 'chintu', 'gaurav', '2015-01-02 02:27 pm', 'vyy\r\n\r\n'),
(8, 'chintu', 'gaurav', '2015-01-02 02:29 pm', 'how d\r\n'),
(9, 'chintu', 'gaurav', '2015-01-02 03:08 pm', 'hiii'),
(10, 'chintu', 'gaurav', '2015-01-02 03:09 pm', 'hiii'),
(11, 'gaurav agarwal', 'gaurav', '2015-01-02 03:25 pm', 'helo gaurya'),
(12, 'gaurav', 'chintu', '2015-01-02 03:55 pm', 'hii'),
(13, 'gaurav', 'chintu', '2015-01-02 04:35 pm', 'If you are using navs to provide a navigation bar, be sure to add a role="navigation" to the most logical parent container of the or wrap a  element around the whole navigation. Do not add the role to the  itself, as this would prevent it from being announced as an actual list by assistive technologies.'),
(14, 'gaurav agarwal', 'chintu', '2015-01-08 04:54 am', 'madarchod\r\n'),
(15, 'Ashutosh Maheshwari', 'chintu ', '2015-01-08 05:14 am', 'bhen chod\r\n'),
(16, 'chintu', 'Ashutosh Maheshwari', '2015-01-08 05:17 am', 'Hello'),
(17, 'chintu', 'Ashutosh Maheshwari', '2015-01-08 01:34 pm', 'hiii'),
(18, 'chintu', 'Ashutosh Maheshwari', '2015-01-08 01:37 pm', 'jkhsdhs\r\n'),
(19, 'chintu', 'Ashutosh Maheshwari', '2015-01-08 01:38 pm', 'heeloo\r\n'),
(20, 'chintu', 'gaurav agarwal', '2015-01-08 01:38 pm', 'heeloo\r\n'),
(21, 'chintu', 'gaurav agarwal', '2015-01-08 01:38 pm', 'bii\r\n'),
(22, 'yuvak patel', 'chintu', '2015-01-08 01:46 pm', 'hjhafjh'),
(23, 'AMIT POONIA', 'yuvak patel', '2015-01-08 01:58 pm', 'REE PK H KYA??\r\n'),
(24, 'TARUN', 'AMIT POONIA', '2015-01-08 02:08 pm', 'POONIA MADARCHOD\r\n'),
(25, 'chintu', 'akku', '2015-01-08 02:35 pm', 'nlkn'),
(26, 'gaurav', 'chintu', '2015-03-03 06:52 pm', 'ihhhi\r\n'),
(27, '', '', '2015-06-28 10:59 pm', 'hii\r\n'),
(28, '', '', '2015-06-28 11:08 pm', 'hii\r\n'),
(29, '', '19', '2015-06-28 11:33 pm', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `headline` text NOT NULL,
  `pic` varchar(100) NOT NULL,
  `sub_by` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `pic`, `sub_by`, `date`, `description`) VALUES
(1, 'ISM slams gates for locals', 'news1.jpg', 'gaurav', '2015-03-02 04:16 pm', 'No outsiders to be allowed inside the ISM campus'),
(2, 'Coding Competition', 'contest.jpg', 'gaurav', '2015-03-02 07:38 pm', 'asdfghjkl;\r\nqwertyuio\r\nZxcvbnm,'),
(3, 'Android App Development COurse', 'Android-App-Development.pptx.png', 'gaurav', '2015-03-03 06:22 pm', 'Startiong From 10th MArch.\r\nEntry Fee: 5000/-.'),
(4, 'Inter Year Cricket Tournament', 'ilg.jpg', 'gaurav', '2015-03-03 06:32 pm', 'To be held from 31st Aug.'),
(5, 'ISM Bazzar', 'shop.jpg', 'gaurav', '2015-03-05 11:17 pm', 'Delievering at your room.'),
(6, 'XYZ', '20130818-001.jpeg', 'gaurav', '2015-03-21 10:52 pm', ''),
(7, 'Telephone Directory', 'TD.pdf', 'gaurav', '2015-03-22 12:49 pm', ''),
(8, 'lmc', 'messi.jpg', 'gaurav', '2015-03-22 12:52 pm', ''),
(9, 'lmc', 'messi.jpg', 'gaurav', '2015-03-22 12:53 pm', ''),
(10, 'nn ', 'messi.jpg', 'gaurav', '2015-03-22 12:53 pm', ''),
(11, 'nn ', 'messi.jpg', 'gaurav', '2015-03-22 12:54 pm', ''),
(12, 'nn ', 'messi.jpg', 'gaurav', '2015-03-22 12:58 pm', ''),
(13, 'jsj ', 'rsz_discussionfotolia.jpg', 'gaurav', '2015-03-22 01:00 pm', ''),
(14, 'njk d', 'messsi.jpg', 'gaurav', '2015-03-22 01:00 pm', ''),
(15, 'ABCD', 'ajax-loader.gif', 'gaurav', '2015-03-24 09:31 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `time` varchar(30) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `content`, `time`, `note`) VALUES
(3, 'Bye!!', '2015-06-04 05:10 pm', 'Hii'),
(4, 'hello', '2015-06-04 05:22 pm', 'hii'),
(5, 'hello', '2015-06-04 05:23 pm', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `hostel` varchar(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `mobile` int(12) NOT NULL,
  `items` varchar(400) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `username`, `hostel`, `room`, `mobile`, `items`, `date`) VALUES
(1, 'gaurav agarwal', 'gaurav', 'Jasper', 'B-124', 2147483647, 'Order: Shampoo>>Pentene(200ml)*1 Price: (100*1)&nbsp;&nbsp;&nbsp;Toothpaste>>Colgate(100gm)*2 Price: (300*2)&nbsp;&nbsp;&nbsp; Total: 700', ''),
(2, 'gaurav agarwal', 'gaurav', 'Jasper', 'B-124', 2147483647, 'Order: Shampoo>>Pentene(200ml)*1 Price: (100*1)&nbsp;&nbsp;&nbsp;Toothpaste>>Colgate(100gm)*2 Price: (300*2)&nbsp;&nbsp;&nbsp; Total: 700', ''),
(3, 'gaurav', '0', 'Jasper', 'B-124', 2147483647, 'Order: Shampoo>>Pentene(200ml)*1 Price: (100*1)&nbsp;&nbsp;&nbsp;Toothpaste>>Colgate(100gm)*2 Price: (300*2)&nbsp;&nbsp;&nbsp; Total: 700', ''),
(4, 'gaurav', '0', 'Jasper', 'B-124', 2147483647, 'Order: Shampoo>>Pentene(200ml)*1 Price: (100*1)&nbsp;&nbsp;&nbsp;Toothpaste>>Colgate(100gm)*2 Price: (300*2)&nbsp;&nbsp;&nbsp; Total: 700', ''),
(5, 'Chintu', '0', 'Jasper', '45', 2147483647, 'Order: Toothpaste>>Sensodyne(200gm)*2 Price: (200*2)&nbsp;&nbsp;&nbsp;Shampoo>>Pentene(200ml)*1 Price: (100*1)&nbsp;&nbsp;&nbsp;Toothpaste>>Colgate(100gm)*2 Price: (300*2)&nbsp;&nbsp;&nbsp; Total: 1100', '');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(40) NOT NULL,
  `vote` int(1) NOT NULL,
  `user_id` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `ip`, `vote`, `user_id`) VALUES
(1, '::1', 2, 0),
(2, '::1', 2, 19);

-- --------------------------------------------------------

--
-- Table structure for table `poll_questions`
--

CREATE TABLE IF NOT EXISTS `poll_questions` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `poll_questions`
--

INSERT INTO `poll_questions` (`id`, `question`, `a`, `b`, `c`, `d`) VALUES
(1, 'Hello', 'XYz', 'asc', 'qee', 'bn'),
(2, 'jv jk', 'ma v', 'd v', 'kvk', 'v  lk ewv'),
(3, 'What is this', 'a', 'b', 'c', 'd'),
(4, 'What is this', 'abcafawffw', 'bqfw', 'cqwf', 'dqwf');

-- --------------------------------------------------------

--
-- Table structure for table `previous_polls`
--

CREATE TABLE IF NOT EXISTS `previous_polls` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `a` varchar(10) NOT NULL,
  `b` varchar(10) NOT NULL,
  `c` varchar(10) NOT NULL,
  `d` varchar(10) NOT NULL,
  `poll_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `previous_polls`
--

INSERT INTO `previous_polls` (`id`, `date`, `a`, `b`, `c`, `d`, `poll_id`) VALUES
(1, '2015-06-26 11:55 pm', '33.3333333', '16.6666666', '16.6666666', '33.3333333', 0),
(2, '2015-06-27 12:09 am', '100', '0', '0', '0', 3),
(3, '2015-06-27 12:11 am', '0', '100', '0', '0', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `bill` varchar(10) NOT NULL,
  `pic_name` varchar(40) NOT NULL,
  `seller` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `edited` int(1) NOT NULL DEFAULT '0',
  `identity` int(1) NOT NULL DEFAULT '1',
  `seller_email` varchar(40) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `brand`, `description`, `price`, `mobile`, `bill`, `pic_name`, `seller`, `category`, `edited`, `identity`, `seller_email`, `visible`) VALUES
(6, 'Laptop', '', ' bbsjb', '1 crore', 8877002654, 'yes', 'messi.jpg', 'gaurav agarwal', 'electronics', 1, 1, '', 1),
(10, 'Laptop', '', ' bbsjb', '1 crore', 12345667890, 'yes', 'rsz_discussionfotolia.jpg', 'gaurav agarwal', 'electronics', 0, 1, 'gauravagarwal.110695@gmail.com', 1),
(11, 'fghjk', '', 'dfjkl.', '123', 7877788080, 'yes', 'discussion logo.png', 'gaurav agarwal', '', 0, 1, '', 0),
(12, 'fghjk', '', 'dfjkl.', '123', 7877788080, 'yes', 'discussion logo.png', 'gaurav agarwal', 'Electronics', 0, 1, 'gauravagarwal.110695@gmail.com', 0),
(13, 'cfcghvbj', '', 'dfghjk', '120', 8877002654, 'yes', 'bazaar logo.png', 'gaurav agarwal', 'Electronics', 0, 1, 'gauravagarwal.110695@gmail.com', 0),
(14, 'ghjk', '', 'fghjk', '123', 7877788080, 'yes', 'bazaar logo.png', 'gaurav agarwal', 'Electronics', 0, 1, 'gauravagarwal.110695@gmail.com', 0),
(15, 'ghjk', '', 'fghjk', '123', 7877788080, 'yes', 'bazaar logo.png', 'gaurav agarwal', 'Electronics', 0, 1, 'gauravagarwal.110695@gmail.com', 0),
(16, 'ghjk', '', 'ghjkl;', '123', 8877002654, 'yes', 'bazaar logo.png', 'gaurav agarwal', 'Electronics', 0, 1, 'gauravagarwal.110695@gmail.com', 0),
(17, 'ghjk', '', 'ghjkl;', '123', 8877002654, 'yes', 'bazaar logo.png', 'gaurav agarwal', 'Electronics', 0, 1, 'gauravagarwal.110695@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `hostel` varchar(15) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `proxymen`
--

CREATE TABLE IF NOT EXISTS `proxymen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `proxyman` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `proxymen`
--

INSERT INTO `proxymen` (`id`, `username`, `proxyman`) VALUES
(23, 'chintu', 'gaurav'),
(24, 'chintu', 'gaurav agarwal'),
(25, 'gaurav', 'chintu'),
(26, 'gaurav', 'gaurav agarwal'),
(27, 'gaurav agarwal', 'gaurav'),
(28, 'gaurav agarwal', 'chintu');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `answer5` int(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `adm` varchar(11) NOT NULL,
  `answer1` int(1) NOT NULL,
  `answer2` int(1) NOT NULL,
  `answer3` int(1) NOT NULL,
  `answer4` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`answer5`, `id`, `name`, `adm`, `answer1`, `answer2`, `answer3`, `answer4`) VALUES
(3, 1, 'gaurav', '213', 1, 3, 2, 2),
(3, 2, 'gaurav', '213', 1, 3, 2, 2),
(3, 3, 'gaurav', '213', 1, 3, 2, 2),
(3, 4, 'gaurav', '213', 1, 3, 2, 2),
(2, 5, 'Gaurav', '123', 2, 4, 3, 3),
(3, 6, 'jij', '46546', 1, 3, 3, 3),
(2, 7, 'gaurav', '2013je0627', 2, 1, 2, 2),
(2, 8, 'gaurav', '2013je0627', 2, 1, 2, 2),
(2, 9, 'gaurav', '2013je0627', 2, 1, 2, 2),
(2, 10, 'gaurav', '2013je0627', 2, 1, 2, 2),
(2, 11, 'TARUN', '', 1, 4, 2, 2),
(3, 12, 'chintu', '0627', 2, 1, 1, 1),
(3, 13, 'chintu', '0627', 2, 1, 1, 1),
(3, 14, 'chintu', '0627', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rail`
--

CREATE TABLE IF NOT EXISTS `rail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_name` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `class` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `train_number` bigint(10) NOT NULL,
  `seller` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rail`
--

INSERT INTO `rail` (`id`, `train_name`, `source`, `destination`, `date`, `price`, `mobile`, `class`, `description`, `train_number`, `seller`) VALUES
(1, 'AII-SLDH', 'jaipur', 'dhanbad', '', 560, 8877002654, 'Sleeper', '', 0, 'gaurav'),
(2, 'AII-SLDH', 'jaipur', 'dhanbad', '12-1-2015', 560, 8877002654, 'Sleeper', '', 12988, 'gaurav');

-- --------------------------------------------------------

--
-- Table structure for table `scg_answers`
--

CREATE TABLE IF NOT EXISTS `scg_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `que_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `scg_answers`
--

INSERT INTO `scg_answers` (`id`, `que_id`, `answer`, `time`) VALUES
(4, 9, 'abc\r\n', '2015-03-18 11:44 am'),
(8, 1, 'Keep working hard.', '2015-03-18 11:58 am');

-- --------------------------------------------------------

--
-- Table structure for table `shout`
--

CREATE TABLE IF NOT EXISTS `shout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `shout` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shout`
--

INSERT INTO `shout` (`id`, `name`, `shout`, `time`) VALUES
(1, 'chintu', 'post', '2015-03-18 06:53 pm'),
(2, 'chintu', 'IIT Dhanbad', '2015-03-18 06:58 pm'),
(3, 'chintu', 'IIT Dhanbad', '2015-03-18 07:08 pm'),
(4, 'chintu', 'IIT Dhanbad', '2015-03-18 07:10 pm'),
(5, 'chintu', 'IIT Dhanbad', '2015-03-18 07:11 pm'),
(6, 'chintu', 'IIT Dhanbad', '2015-03-18 07:12 pm'),
(7, 'chintu', 'IIT Dhanbad', '2015-03-18 07:13 pm'),
(8, 'gaurav agarwal', 'ashd', '2015-06-21 01:12 am');

-- --------------------------------------------------------

--
-- Table structure for table `show_product`
--

CREATE TABLE IF NOT EXISTS `show_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `seller_price` varchar(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `visible` int(1) NOT NULL,
  `seller` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `show_product`
--

INSERT INTO `show_product` (`id`, `product_name`, `price`, `seller_price`, `category`, `description`, `visible`, `seller`) VALUES
(6, 'Study Table', '400', '300', 'Electronics', ' Wooden Study Table', 1, 'gaurav'),
(7, 'Redmi 1s', '5000', '4000/-', 'Electronics', ' 3 months old. In good Condition with back cover and charger.', 1, 'gaurav agarwal');

-- --------------------------------------------------------

--
-- Table structure for table `site_admins`
--

CREATE TABLE IF NOT EXISTS `site_admins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_admins`
--

INSERT INTO `site_admins` (`id`, `admin`, `password`) VALUES
(1, 'gaurav', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `start`
--

CREATE TABLE IF NOT EXISTS `start` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sName` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `foundation` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `passout` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `start`
--

INSERT INTO `start` (`id`, `sName`, `website`, `foundation`, `location`, `passout`, `name`, `description`) VALUES
(1, 'a', 'xss', 's', 'g', '', '', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `start_name`
--

CREATE TABLE IF NOT EXISTS `start_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_id` int(11) NOT NULL,
  `n1` varchar(30) NOT NULL,
  `n2` varchar(30) NOT NULL,
  `n3` varchar(30) NOT NULL,
  `e1` varchar(50) NOT NULL,
  `e2` varchar(50) NOT NULL,
  `e3` varchar(50) NOT NULL,
  `m1` varchar(12) NOT NULL,
  `m2` varchar(12) NOT NULL,
  `m3` varchar(12) NOT NULL,
  `p1` varchar(30) NOT NULL,
  `p2` varchar(30) NOT NULL,
  `p3` varchar(30) NOT NULL,
  `y1` varchar(5) NOT NULL,
  `y2` varchar(5) NOT NULL,
  `y3` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `start_name`
--

INSERT INTO `start_name` (`id`, `start_id`, `n1`, `n2`, `n3`, `e1`, `e2`, `e3`, `m1`, `m2`, `m3`, `p1`, `p2`, `p3`, `y1`, `y2`, `y3`) VALUES
(1, 0, 'a', '', '', 'aaaa', '', '', '0', '0', '0', '', '', '', 'aaaaa', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `toothpaste`
--

CREATE TABLE IF NOT EXISTS `toothpaste` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `brand` varchar(30) NOT NULL,
  `weight` float NOT NULL,
  `price` float NOT NULL,
  `avail` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trend`
--

CREATE TABLE IF NOT EXISTS `trend` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `trend` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `sub_by` varchar(50) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `trend`
--

INSERT INTO `trend` (`id`, `trend`, `about`, `sub_by`, `visible`, `position`) VALUES
(1, 'allinism', 'Newly launched site to make the lives of ismites easier.', '', 1, 0),
(2, 'AllinISM', 'Newly launched websites creating wonders, has brought down the servers of ISM.', 'gaurav', 1, 0),
(3, 'ISM Bazzar', 'ISM Students energized online shopping retailer, delievering at your doorsteps.', 'gaurav', 1, 0),
(4, 'The Last Stage', 'sdfghjklxcvbnm,  dcvbnm  dfghj dfghjk dfghjk cvbnm xcvbnm dfghj', 'gaurav', 1, 0),
(5, 'SalimSulaiman', 'Bollywood singers to perform at the closing night(29/3) of Srijan 2015.', 'gaurav', 1, 0),
(6, 'Mindshift', 'Swedish Death Metal to headline Avalanche.', 'gaurav', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `image_name` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `branch`, `year`, `image_name`, `location`, `mobile`, `hostel`) VALUES
(1, 'gaurav', 'gauravagarwal.110695@gmail.com', '123', 'cse', '4', 'ans1.jpg', '', '', ''),
(3, 'gaurav agarwal', 'gauravagarwal.110695@gmail.com', '123', 'cse', '4', 'ans2.jpg', '', '', ''),
(7, 'chintu', 'gauravfb11@gmail.com', '123', 'cse', '1', 'ans3.jpg', 'C:\\xampp1\\htdocs\\boot\\img\\ans1.jpg', '', ''),
(8, 'Ashutosh Maheshwari', 'ashutosh21114@gmail.com', 'ashutosh', 'CSE Dual', '2', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(9, 'yuvak patel', 'yuvak94@gmail.com', '1234', 'MnC', '2', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(10, 'AMIT POONIA', 'amit17poonia@gmail.com', 'QWERTYUIPO', 'cse', '2', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(11, 'TARUN', 'tarunpatidar.158@gmail.com', 'TARUNPATIDAR', 'MME', '2', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(12, 'akki', 'gauravfb11@gmail.com', '12345', 'cse', '2', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(13, 'akku', 'gauravfb11@gmail.com', '12345', 'cse', '2', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(14, 'xyz', 'gaurav.110695@facebook.com', '12345', 'CSE Dual', '11', '20130818-001.jpeg', 'C:\\xampp1\\htdocs\\boot\\img\\20130818-001.j', '', ''),
(15, 'ggg', 'chintu@gmail.com', '1234', 'CSE', 'I', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(16, 'Ajay Kumar', 'ajay.pu128@gmail.com', 'ajay', 'ECE', 'II', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(17, 'monit gupta', 'monit.gupta5@gmail.com', 'pleaseyaar', 'EE', 'II', '', 'C:\\xampp1\\htdocs\\boot\\img\\', '', ''),
(18, 'Gaurav', 'gauravagarwal.110695@gmail.com', '8cb2237d0679ca88db6464eac60da9', '', '', '', '', '8877002654', ''),
(19, 'gaurav agarwal', 'gauravagarwal.110695@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'CSE', 'I Year', '', '', '8877002654', 'Amber Hostel'),
(20, 'gg', 'gtasurvey@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', ''),
(21, 'gg', 'gtasurvey@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', ''),
(22, 'gg', 'gg', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', ''),
(23, 'gg', 'gg', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', ''),
(24, 'gg', 'gg', '12345', '', '', '', '', '', ''),
(25, 'gg', 'gg', '12345', '', '', '', '', '', ''),
(26, 'gaurav', 'gg_13', '1f32aa4c9a1d2ea010adcf2348166a04', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_liked_articles`
--

CREATE TABLE IF NOT EXISTS `users_liked_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users_liked_articles`
--

INSERT INTO `users_liked_articles` (`id`, `name`, `article_id`) VALUES
(1, 'gaurav', 3),
(2, 'gaurav', 3),
(3, 'gaurav', 3),
(4, 'gaurav', 3),
(5, 'gaurav', 3),
(6, 'gaurav', 3),
(7, 'gaurav', 3),
(8, 'gaurav', 3),
(9, 'gaurav agarwal', 3),
(10, 'yuvak patel', 7),
(11, 'chintu', 7),
(12, 'chintu', 9),
(13, 'chintu', 3),
(14, 'chintu', 10),
(15, 'chintu', 11),
(16, 'gaurav', 11),
(17, 'gaurav', 9),
(18, 'gaurav agarwal', 9),
(19, 'gaurav agarwal', 10),
(20, 'gaurav agarwal', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users_liked_bakars`
--

CREATE TABLE IF NOT EXISTS `users_liked_bakars` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `bakar_id` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users_liked_bakars`
--

INSERT INTO `users_liked_bakars` (`id`, `email`, `bakar_id`) VALUES
(1, '', 6),
(2, '', 7),
(3, 'gauravagarwal.110695@gmail.com', 7),
(4, 'gauravagarwal.110695@gmail.com', 5),
(5, 'gauravagarwal.110695@gmail.com', 1),
(6, 'gauravagarwal.110695@gmail.com', 3),
(7, 'gauravagarwal.110695@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE IF NOT EXISTS `users_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session_id`, `username`, `time`) VALUES
(35, 19, 'gaurav agarwal', '1427290486');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
