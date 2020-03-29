-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2015 at 01:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crime_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `crimes_table`
--

CREATE TABLE crimes_table (
  `id` bigint
(100) NOT NULL AUTO_INCREMENT,
  `crimetime` varchar
(50) NOT NULL,
  `location` varchar
(50) NOT NULL,
  `nearby_police` varchar
(50) NOT NULL,
  `crime_type` varchar
(100) NOT NULL,
  `urgency` varchar
(100) NOT NULL,
  `person_committing` varchar
(50) NOT NULL,
  `time_message_received` date NOT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `crimes_table`
--

INSERT INTO crimes_table
  (`
  id`,
  `crimetime
  `, `location`, `nearby_police`, `crime_type`, `urgency`, `person_committing`, `time_message_received`) VALUES
(1, 'NOW', 'Eldoret', 'Kapsoya Police', 'Armed robbers                              ', 'VERY URGENT', 'Unknown Armed men', '2015-05-03'),
(2, 'NOW', 'Kimumu', 'Eldoret', 'Stealing                               ', 'VERY URGENT', 'Unknown', '2015-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE
users
(
  `id` bigint
(100) NOT NULL AUTO_INCREMENT,
  `username` varchar
(100) NOT NULL,
  `password` varchar
(100) NOT NULL,
  `police_no` varchar
(50) NOT NULL,
  `firstname` varchar
(50) NOT NULL,
  `lastname` varchar
(50) NOT NULL,
  PRIMARY KEY
(`id`),
  UNIQUE KEY `police_no`
(`police_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO users
  (`username`, `password
`, `police_no`, `firstname`, `lastname`) 
VALUES
('admin', '12345', 'KEN0202', 'Lewis', 'Kiplimo'),
( 'Hillary', '12345', 'KEN02027', 'Hillary', 'Kiplimo'),
( 'ken', '12345', 'KEN0203', 'Ken', 'Wavu'),
( 'ben', '12345', 'KEN0204', 'Ben', 'Kiptoo'),
( 'jack', '12345', 'KEN0205', 'Jack', 'Sudi'),
( 'badi', '12345', 'KEN0208', 'Joel', 'Badi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
