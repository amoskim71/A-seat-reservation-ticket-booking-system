-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2019 at 01:20 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `utcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookareservation`
--

CREATE TABLE IF NOT EXISTS `bookareservation` (
  `bookareservationid` int(4) NOT NULL AUTO_INCREMENT,
  `bookingcode` varchar(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `address` varchar(500) NOT NULL,
  `adults` varchar(30) NOT NULL,
  `children` varchar(30) NOT NULL,
  `luggage` varchar(30) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `cardnumber` varchar(19) NOT NULL,
  `expiringdate` varchar(5) NOT NULL,
  `cvc` varchar(3) NOT NULL,
  `nextofkin` varchar(150) NOT NULL,
  `nextofkintel` varchar(30) NOT NULL,
  `nextofkinaddress` varchar(500) NOT NULL,
  `payable` varchar(11) NOT NULL,
  `setnumber` varchar(100) NOT NULL,
  PRIMARY KEY (`bookareservationid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `bookareservation`
--

INSERT INTO `bookareservation` (`bookareservationid`, `bookingcode`, `firstname`, `lastname`, `tel`, `email`, `address`, `adults`, `children`, `luggage`, `payment`, `cardname`, `cardnumber`, `expiringdate`, `cvc`, `nextofkin`, `nextofkintel`, `nextofkinaddress`, `payable`, `setnumber`) VALUES
(3, 'OKJFUVAG', 'Joseph', 'kind', '08106581113', 'onuwa@gmail.com', 'okey osuji street, egbu road, owerri, imo state', '1', '0', 'no', '', '', '', '', '', 'joy', '08055678535', 'orji road owerri', '', ''),
(4, 'PJFXMRK', 'david', 'nelson', '08136595944', 'd@g.com', 'portharcourt', '2', '2', 'yes', '', '', '', '', '', 'sylvian nelson', '08128750579', 'orji road owerri', '', ''),
(5, 'WYHOJCZ', 'alloy', 'dike', '08106581113', 'u@g.com', 'portharcourt', '2', '3', 'Yes', '', '', '', '', '', 'mike obi', '08128750579', 'orji road owerri', '', ''),
(7, '4BOHBN0', 'ituislpsn', 'joey', '09076453467', 'f@g.com', 'okey osuji street', '1', '0', 'No', '', '', '', '', '', 'fred rickie', '08155383532', 'portharcourt', '', ''),
(8, 'VWOWINI', 'Joseph', 'aduke', '07055383532', 'happygirl@gmail.com', 'orlu', '1', '0', 'No', '', '', '', '', '', 'lucy uche', '08055678535', 'world bank owerri', '', ''),
(9, 'ORJN2IC', 'chuka', 'apaks', '07055383532', 'win@gmail.com', 'okey osuji street, egbu road, owerri, imo state', '1', '0', 'No', '', '', '', '', '', 'lucy uche', '08155383532', 'futo road eziobodo, owerri, imo state', '', ''),
(10, 'JQ0762P', 'mcanthony', 'iheme', '087-8096764', 'hljv@f.com', 'okey osuji street', '2', '2', 'Yes', 'Mastercard', 'iheme mcanthony c', '5399 0917 5864 1008', '10/18', '409', 'philip okeke', '08128750579', 'okey osuji street', '', ''),
(11, 'MEOI7RE', 'uche', 'harry', '087-8096764', 'hljv@f.com', 'okey osuji street, egbu road, owerri, imo state', '1', '0', 'No', 'Visa', 'uche harry', '08768760879068', '5/78', '908', 'happy', 'kjljdfjkl/', ';ouptoyigiuh', '', ''),
(15, 'EYULMQA', 'Julius', 'Ochuko', '09067657641', 'julius@yahoo.com', '2 Owerri street', '1', '1', 'No', 'Visa', '3444555', '4444', '04/17', '342', 'Mr George', '09099844332', '2 Owerri strret', '3000', '1, 2, '),
(16, 'OFAORGI', 'Chuka', 'Obi', '09087876765', 'chuk@yahoo.com', '12 Business district', '1', '1', 'No', 'Visa', '3444555', '4444', '04/17', '342', 'Mr George', '09099844332', '2 Owerri strret', '3000', '3, 4, '),
(17, '0XR0CDB', 'Peter', 'Nsofor', '09087876765', 'peter@yahoo.com', '12 Business district', '1', '1', 'No', 'Visa', 'Peter Nsofor', '4444', '04/17', '342', 'Mr Francis', '09099844332', '2 Wetheral strret', '3000', '1, 2, '),
(18, 'FVPRFS4', 'Peterson', 'Okeke', '09087876765', 'peter@yahoo.com', '12 Business district', '1', '0', 'No', 'Visa', '3444555', '4444', '04/17', '342', 'Mr Francis', '09099844332', '2 Wetheral strret', '3500', '1, '),
(19, 'RT3M0QH', 'chuka', 'lucas', '09076453467', 'munex@gmail.com', 'okey osuji street, egbu road, owerri, imo state', '1', '0', 'No', 'Visa', 'iheme mcanthony c', '5399 0917 5864 1008', '10/18', '409', 'Jide Akindele', '08128750579', 'orji road owerri', '2500', '1, '),
(20, 'PMNSVVE', 'john', 'bennet', '07055383532', 'tko@gmail.com', 'orji road, owerri', '2', '4', 'Yes', 'Visa', 'wrkje', '08768760879068', '10/18', '908', 'kelvin ben', '08155383532', 'portharcourt', '9000', '1, 2, 3, 4, 5, 6, '),
(21, 'TJS5DOZ', 'Fred', 'ogundu', '07055383532', 'hljv@f.com', 'orji road, owerri', '2', '2', 'Yes', 'Visa', 'fred ogundu', '123456789786558', '03/18', '407', 'chizzy ogundu', '08128750579', 'world bank owerri', '10000', '1, 2, 3, 4, '),
(22, 'ZHXBYW3', 'Joseph', 'test', '+2348053787892', 'happygirl@gmail.com', 'okey osuji street', '1', '0', 'No', 'Visa', 'jdkhjk', '123456789786558', '03/18', '407', 'chizzy ogundu', '08055678535', 'orji road owerri', '1500', '5, '),
(23, '3HFBLJ2', 'Olusegun', 'Ibori', '09076453467', 'Oluibori173@gmail.com', 'No4 ajaa estate, lagos', '3', '0', 'No', 'Mastercard', 'Olusegun Ibori M', '3748367423463765', '01/18', '764', 'Adekunle Sade', '08128750579', 'ikoyi lagos', '13500', '1, 2, 3, '),
(24, 'XOO3BS4', 'ituislpsn', 'jk', '8888888', 'd@a.vom', 'jnkjnkjni', '7', '4', 'No', 'Visa', 'hfhfhh', '75757575757', '0917', '657', 'yuhjhjhjhj', 'uhuiuiuiui', 'hkdjhjd', '27500', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, '),
(25, 'VSPCSVC', 'Emeruwa', 'Joseph', '09076453467', 'tko@gmail.com', 'ikoyi, lagos', '2', '2', 'Yes', 'Verve', 'Emeruwa Joseph', '3748367423463765', '01/18', '408', 'Emeruwa Prisca', '08055678535', 'orji road owerri', '6000', '4, 5, 6, 7, '),
(26, 'GORDNWQ', 'joseph', 'emeruwa', '08155383532', 'writetojoseph1@gmail.com', 'okeado', '2', '3', 'Yes', 'Visa', 'emeruwa joseph', '3267674888747878', '04/12', '234', 'emeruwa prisca', '08136595944', 'owerri', '6610', '1, 2, 3, 4, 5, '),
(27, 'BMDXLNT', 'joseph', 'emeruwa', '08155383532', 'writetojoseph1@gmail.com', 'okeado', '5', '0', 'No', 'Visa', 'emeruwa joseph', '3267674888747878', '04/12', '234', 'emeruwa prisca', '08136595944', 'owerri', '22500', '1, 2, 3, 4, 5, ');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE IF NOT EXISTS `destination` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `originid` int(4) NOT NULL,
  `destination` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `originid`, `destination`) VALUES
(1, 2, 'Ibadan'),
(2, 3, 'Lagos'),
(3, 3, 'Calabar'),
(4, 2, 'Portharcourt'),
(5, 4, 'Onitsha'),
(6, 3, 'Abuja'),
(7, 4, 'Lagos'),
(8, 4, 'Lagos'),
(9, 6, 'Lagos'),
(10, 4, 'Port Harcourt');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `feedbackid` int(4) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(70) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedbackid`, `fullname`, `tel`, `email`, `subject`, `message`, `date`) VALUES
(7, 'tony buchi', '08106581113', 'info@utc.com', 'compliant', 'the driver of bus 345 over-speeds a lot. this is not the first time nor the second time', 'Aug-26-2017 15:10'),
(8, 'harry fredrick', '09076453467', 'mainecharly@gmail.com', 'feedback', 'we are happy about your services. best transport company in town', 'Aug-30-2017 14:10'),
(9, 'henry  chikadibia', '09076453467', 'happygirl@gmail.com', 'delighted', 'Delighted the services here', 'Aug-30-2017 14:17'),
(10, 'gerald bolton', '07055383532', 'tko@gmail.com', 'compliant', 'bad drivers, a/c not functioning', 'Aug-30-2017 14:19'),
(11, 'gerald bill', '99786975', 'u@g.com', 'trial', 'happy about the company. keep up the good work', 'Sep-07-2017 14:09'),
(12, 'henry  chika', '087-8096764', 'happygirl@gmail.com', 'delighted', 'i want to subscribe fully', 'Oct-06-2017 11:50');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE IF NOT EXISTS `origin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `origin` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `origin` (`origin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`id`, `origin`) VALUES
(4, 'Aba'),
(5, 'Calabar'),
(6, 'Ibadan'),
(2, 'Lagos'),
(3, 'Owerri'),
(1, 'Traveling from....');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(11) NOT NULL,
  `bus` varchar(11) NOT NULL,
  `seat_reserve` varchar(11) NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  `seat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `date`, `bus`, `seat_reserve`, `transactionnum`, `seat`) VALUES
(1, '2013-01-01', '1', '1', 'o8ey8p40', '1'),
(2, '2013-01-13', '1', '1', 'kd77mzfy', '1'),
(3, '2013-01-15', '1', '5', 'nidsyeyg', '1'),
(4, '2013-01-17', '1', '4', 'v53zohwk', '1'),
(5, '2013-01-16', '1', '9', 's4xf7qkq', '1, 2, 3, 4, 5, 6, 7, 8, 9, '),
(6, '2013-01-21', '1', '4', 'fhk7qarc', '1, 2, 3, 4, '),
(10, '30/05/2014', '4', '3', '7zzjfkcq', '1, 2, 3, '),
(11, '30/05/2014', '4', '1', '3so4j8ht', '4, '),
(12, '30/07/2014', '1', '1', 'dr64k5tr', '1, '),
(13, '20/07/2017', '5', '1', 'h5zrt8ss', '1, '),
(14, '28/07/2017', '5', '4', 'mc3do48h', '1, 2, 3, 4, '),
(18, '03/08/2017', '1', '2', 'EYULMQA', '1, 2, '),
(19, '03/08/2017', '1', '2', 'OFAORGI', '3, 4, '),
(20, '10/08/2017', '1', '2', '0XR0CDB', '1, 2, '),
(21, '20/08/2017', '10', '1', 'FVPRFS4', '1, '),
(22, '12/4/2017', '5', '1', 'RT3M0QH', '1, '),
(23, '3/6/2017', '1', '6', 'PMNSVVE', '1, 2, 3, 4, 5, 6, '),
(24, '23/4/2017', '5', '4', 'TJS5DOZ', '1, 2, 3, 4, '),
(25, '23/4/2017', '1', '1', 'ZHXBYW3', '5, '),
(26, '13/9/2017', '14', '3', '3HFBLJ2', '1, 2, 3, '),
(27, '', '5', '11', 'XOO3BS4', '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, '),
(28, '13/9/2017', '1', '4', 'VSPCSVC', '4, 5, 6, 7, '),
(29, '23/07/2018', '6', '5', 'GORDNWQ', '1, 2, 3, 4, 5, '),
(30, '23/02/2019', '14', '5', 'BMDXLNT', '1, 2, 3, 4, 5, ');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(300) NOT NULL,
  `price` varchar(30) NOT NULL,
  `numseats` int(30) NOT NULL,
  `type` varchar(300) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route`, `price`, `numseats`, `type`, `time`) VALUES
(1, 'Lagos - Ibadan', '1500', 30, 'Deluxe', '10:30 am'),
(3, 'Lagos - Portharcourt', '4500', 1, 'Air Con', '12:30 pm'),
(4, 'Ibadan - Ogun', '2500', 5, 'Coaster', '11:30 am'),
(5, 'Owerri - Lagos', '2500', 15, 'Hummer', '10:30 am'),
(6, 'Lagos - Ibadan', '1322', 30, 'Coaster', '11:30 am'),
(9, 'Lagos - Portharcourt', '2500', 15, 'Coaster', '2:15 pm'),
(10, 'Owerri - Abuja', '3500', 15, 'Air Condition', '8:00 am'),
(11, 'Owerri - Abuja', '6500', 30, 'Hummer', '9:30 am'),
(12, 'Lagos', '6000', 18, 'Hummer bus', '07:00am'),
(13, 'Aba-Lagos', '6000', 18, 'Hummer', '07:00am'),
(14, 'Ibadan - Lagos', '4500', 13, 'Hummer bus', '09:00am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'administrator', '12345');
