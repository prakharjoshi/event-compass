-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2015 at 06:36 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eventcompass`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Cat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Cat_name` varchar(25) NOT NULL,
  PRIMARY KEY (`Cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(1, 'Dance'),
(2, 'Music'),
(3, 'Contest'),
(4, 'synsdda'),
(5, 'wekjfa;lkdjas;f'),
(6, 'subcategory'),
(7, 'subcategory'),
(8, 'subcategory'),
(9, 'clknc'),
(10, ''),
(11, 'subcat'),
(12, 'subc'),
(13, 'aur'),
(14, 'cat'),
(15, 'qqq');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `Ev_id` int(11) NOT NULL AUTO_INCREMENT,
  `Ev_name` varchar(255) NOT NULL,
  `Ev_location` varchar(255) NOT NULL,
  `Ev_date` text NOT NULL,
  `Ev_time` text NOT NULL,
  `Ev_description` text NOT NULL,
  `Ev_photo` text,
  `Ev_mou` text,
  `Ev_posttime` time NOT NULL,
  `Ev_postdate` date NOT NULL,
  `Ev_auth` tinyint(1) DEFAULT NULL,
  `Ev_going` int(11) DEFAULT NULL,
  `Ev_rating` float DEFAULT NULL,
  `Ev_ratingcount` int(11) DEFAULT NULL,
  `User_id` int(11) unsigned NOT NULL,
  `Type_id` int(11) NOT NULL,
  `Sub_id` int(11) NOT NULL,
  `Ev_page_count` int(11) NOT NULL,
  PRIMARY KEY (`Ev_id`),
  KEY `User_id` (`User_id`),
  KEY `Type_id` (`Type_id`),
  KEY `Sub_id` (`Sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Ev_id`, `Ev_name`, `Ev_location`, `Ev_date`, `Ev_time`, `Ev_description`, `Ev_photo`, `Ev_mou`, `Ev_posttime`, `Ev_postdate`, `Ev_auth`, `Ev_going`, `Ev_rating`, `Ev_ratingcount`, `User_id`, `Type_id`, `Sub_id`, `Ev_page_count`) VALUES
(9, 'Felicity', 'Surat', '2014-04-23', '10:23:00', 'dsakljfa;sdlk', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 5, 0),
(10, 'Naach', 'Baroda', '2014-04-23', '23:11:00', 'daiict fest', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 4, 2, 8),
(11, 'guls', 'klsdjfa;lk', '2014-04-23', '00:00:00', 'dj;salkjfd;', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 4, 2, 20),
(12, 'Rampage', 'G319', '0000-00-00', '05:30:00', 'GULLU', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 1, 3, 9),
(13, 'Code mutants', 'lkjads;lfkj;', '0000-00-00', '00:00:00', 'lkdsja;lkdfj;l', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 5, 0),
(14, 'Team twister', 'kljhdsalkjfdh', '0000-00-00', '00:00:00', ';lkjdsf;alkj', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 2, 1),
(15, 'D-Lounge', 'Gandhinagar1', '0000-00-00', '00:00:00', 'kdljf;alksjdf;alksdjfa', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 5, 3, 0),
(16, 'Googlock holmes', 'kljd;lkafdj;', '0000-00-00', '00:00:00', ';kdjf;alksjd;', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 4, 2, 0),
(17, 'Crazy ganith', 'klajds;lkf', '0000-00-00', '00:00:00', 'kadsljf;lkfdjsa', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 3, 0),
(18, 'Algorythmus', 'l;ksdj;lkfj', '0000-00-00', '00:00:00', 'kldjf;lakjsds;al', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 1, 1, 0),
(19, 'Head rush', 'lk;jds;lkfjq;lkj;salkj', '0000-00-00', '00:00:00', 'kldsjf;lakj', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 3, 0),
(20, 'Synapcity', 'kdsjfa;l', '0000-00-00', '00:00:00', ';kjd;flkaj', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 3, 0),
(21, 'Nikhil D souza concert', 'lkdjsa;flkj', '0000-00-00', '00:00:00', ';lkjsa;lkfajs;', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 4, 3, 0),
(22, 'Forage', 'lkdjsa;flkj', '0000-00-00', '00:00:00', 'ADFADsfasfa', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 1, 1, 1),
(23, 'TVF show', 'a', '0000-00-00', '00:00:00', 'aa', 'img/23.png', 'img/23.pdf', '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 3, 0),
(24, 'Sunburn fest', 'a', '0000-00-00', '00:00:00', 'aa', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 3, 0),
(25, 'Battledrome', 'ksdja;flk', '0000-00-00', '00:00:00', 'kdsjf;alkj', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 1, 1, 1),
(26, 'Ragna Rock', 'kjs;lkdjf;', '0000-00-00', '00:00:00', 'kjds;afj', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 4, 6, 0),
(27, 'Rhapsody', ';lkjdsa;lkfj', '0000-00-00', '00:00:00', ';lkjds;alkj', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 1, 6, 0),
(28, 'Concours', 'lkjdsa;lfkj', '0000-00-00', '00:00:00', 'l;kjasd;lfkj;lk', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 3, 3, 0),
(29, 'Rekriti', 'lk;jsda;lkfj', '0000-00-00', '00:00:00', 'lkdjaf;lkj', 'img/30.jpg', NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 1, 1, 0),
(30, 'Footlose', 'j;lsskdajf;', '0000-00-00', '00:00:00', ';lkjsa;ldkfjaq', 'img/30.jpg', 'img/30.pdf', '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 1, 1, 0),
(31, 'i.fest', 'klsajfd;l', '0000-00-00', '00:00:00', 'lsakjf;alk', NULL, NULL, '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 60, 4, 3, 0),
(41, 'Synapse', 'Gandhinagar', '0000-00-00', '12:09:00', 'hello', 'img/41.png', 'img/41.pdf', '00:00:00', '0000-00-00', NULL, NULL, NULL, NULL, 59, 4, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE IF NOT EXISTS `event_type` (
  `Type_id` int(11) NOT NULL AUTO_INCREMENT,
  `Type_name` varchar(25) NOT NULL,
  PRIMARY KEY (`Type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`Type_id`, `Type_name`) VALUES
(1, 'Concert or Performance'),
(2, 'Festival, Fair or Exhibit'),
(3, 'Game or Competition'),
(4, 'Party or Social Gathering'),
(5, 'Race or Tournament'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `interested_in`
--

CREATE TABLE IF NOT EXISTS `interested_in` (
  `User_id` int(11) unsigned NOT NULL,
  `Sub_id` int(11) NOT NULL,
  `Visible` tinyint(1) NOT NULL,
  `Count` int(11) NOT NULL,
  PRIMARY KEY (`User_id`,`Sub_id`),
  KEY `Sub_id` (`Sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested_in`
--

INSERT INTO `interested_in` (`User_id`, `Sub_id`, `Visible`, `Count`) VALUES
(1, 2, 0, 5),
(1, 3, 0, 3),
(1, 4, 0, 1),
(20, 1, 0, 0),
(20, 2, 0, 1),
(20, 3, 0, 2),
(59, 1, 0, 3),
(59, 2, 0, 6),
(59, 3, 0, 9),
(59, 4, 0, 2),
(59, 5, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `past_events`
--

CREATE TABLE IF NOT EXISTS `past_events` (
  `User_id` int(11) unsigned NOT NULL,
  `Ev_id` int(11) NOT NULL,
  PRIMARY KEY (`Ev_id`,`User_id`),
  KEY `User_id` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past_events`
--

INSERT INTO `past_events` (`User_id`, `Ev_id`) VALUES
(1, 10),
(1, 11),
(1, 12),
(59, 10),
(59, 15),
(59, 20),
(59, 25),
(64, 11);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `Sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sub_name` varchar(25) NOT NULL,
  `Cat_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`Sub_id`),
  KEY `Cat_id` (`Cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Sub_id`, `Sub_name`, `Cat_id`) VALUES
(1, 'Classical Music', 1),
(2, 'Classical Dance', 3),
(3, 'Coding Contest', 2),
(4, 'Hiphop Dance', 3),
(5, 'Rock', 1),
(6, 'new', 12),
(7, 'ek', 13),
(8, 'sub', 14),
(9, 'qqq', 15);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `Ev_id` int(11) NOT NULL,
  `Tick_type` varchar(25) NOT NULL,
  `Tick_price` int(11) NOT NULL,
  `TIck_qty` int(11) NOT NULL,
  PRIMARY KEY (`Ev_id`,`Tick_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `User_fname` varchar(30) NOT NULL,
  `User_lname` varchar(30) NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `User_username` varchar(15) NOT NULL,
  `User_pass` varchar(255) NOT NULL,
  `User_address` text,
  `User_phone` varchar(10) DEFAULT NULL,
  `User_notifyemail` varchar(1) DEFAULT NULL,
  `User_notifyphone` varchar(1) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_fname`, `User_lname`, `User_email`, `User_username`, `User_pass`, `User_address`, `User_phone`, `User_notifyemail`, `User_notifyphone`, `reg_date`) VALUES
(1, 'admin', 'admin', '201201200@daiict.ac.in', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ahmedabad', NULL, NULL, NULL, '2015-04-08 12:51:32'),
(20, 'Ajay', 'Gaur', 'daiict218@gmail.com', 'daiict218', '25d55ad283aa400af464', NULL, NULL, NULL, NULL, '2015-03-30 16:54:06'),
(21, 'Ajay', 'Gaur', 'root@gmail.com', 'daiict218123', '25d55ad283aa400af464', NULL, NULL, NULL, NULL, '2015-03-30 16:54:37'),
(50, 'sakldfj', 'sakldfj', 'xrootl@gma.comm', '123aa', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '2015-03-31 01:12:24'),
(51, 'sakldfj', 'sakldfj', 'xrootl@gma.commm', '123aaa', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, '2015-03-31 01:12:41'),
(52, 'aslkdjf', 'slkdjfa', 'rootx@g.com', 'op', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '2015-03-31 01:14:21'),
(53, 'aslkdjf', 'slkdjfa', 'rootx@g.comm', 'opp', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '2015-03-31 01:15:21'),
(54, 'aslkdjf', 'slkdjfa', 'lrootx@g.comm', 'oppm', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '2015-03-31 01:16:22'),
(55, 'Ajay', 'Gaue', 'root4@gmail.com', 'uio', 'fcea920f7412b5da7be0cf42b8c93759', NULL, NULL, NULL, NULL, '2015-03-31 01:17:46'),
(56, 'dkjsa;fldk', 'dskjfa;lk', 'root@.comm', 'h5tbgtr', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '2015-03-31 09:00:25'),
(57, 'dkjsa;fldk', 'dskjfa;lk', 'root.comm', 'h5tbgtrm', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '2015-03-31 09:00:35'),
(58, 'Ajlksadj', 'dskfjak', 'root.com', 'daiict218kjjkd', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '2015-03-31 09:01:20'),
(59, 'Ajay', 'Gaur', 'daiict218@google.comma', 'another', '25d55ad283aa400af464c76d713c07ad', 'Ahmedabad', NULL, NULL, NULL, '2015-04-06 20:20:52'),
(60, 'Akshat', 'Goyal', 'daiict120@gmail.com', 'akshat', '25d55ad283aa400af464c76d713c07ad', 'G-318, DA-IICT 3 5', NULL, '1', '0', '2015-04-02 18:46:20'),
(61, '', '', 'daiict218@gmail.com', '', '12345678', 'adlkfja;lksdjfa;lkdsja 2 3', NULL, NULL, NULL, '2015-04-02 14:06:25'),
(62, '', '', 'daiict218@gmail.com', '', '12345678', 'adlkfj 1 2', NULL, NULL, NULL, '2015-04-02 14:08:14'),
(63, 'Sujit', 'Royal', '@.kdfja;lk', 'gullu', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, '2015-04-06 19:25:40'),
(64, 'Akhil', 'Sreekar', 'a@b.com', 'Badshaah', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL, '2015-04-06 20:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_event_rating`
--

CREATE TABLE IF NOT EXISTS `user_event_rating` (
  `User_id` int(11) NOT NULL,
  `Ev_id` int(11) NOT NULL,
  `user_rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`User_id`,`Ev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_event_rating`
--

INSERT INTO `user_event_rating` (`User_id`, `Ev_id`, `user_rating`) VALUES
(0, 0, NULL),
(59, 0, NULL),
(59, 10, 0),
(59, 11, 5),
(59, 23, 2),
(59, 43, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `Event_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`),
  ADD CONSTRAINT `Event_ibfk_2` FOREIGN KEY (`Type_id`) REFERENCES `event_type` (`Type_id`),
  ADD CONSTRAINT `Event_ibfk_3` FOREIGN KEY (`Sub_id`) REFERENCES `subcategory` (`Sub_id`);

--
-- Constraints for table `interested_in`
--
ALTER TABLE `interested_in`
  ADD CONSTRAINT `Interested_in_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`),
  ADD CONSTRAINT `Interested_in_ibfk_2` FOREIGN KEY (`Sub_id`) REFERENCES `subcategory` (`Sub_id`);

--
-- Constraints for table `past_events`
--
ALTER TABLE `past_events`
  ADD CONSTRAINT `Past_Events_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`),
  ADD CONSTRAINT `Past_Events_ibfk_2` FOREIGN KEY (`Ev_id`) REFERENCES `event` (`Ev_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `Subcategory_ibfk_1` FOREIGN KEY (`Cat_id`) REFERENCES `category` (`Cat_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `Ticket_ibfk_1` FOREIGN KEY (`Ev_id`) REFERENCES `event` (`Ev_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
