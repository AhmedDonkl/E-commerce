-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2014 at 05:32 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('ahmed', '5');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `BillingAddress` varchar(50) NOT NULL,
  `BillingCity` varchar(20) NOT NULL,
  `BillingState` tinyint(1) NOT NULL,
  `BillingZip` int(11) NOT NULL,
  `ShippingAddress` varchar(50) NOT NULL,
  `ShippingCity` varchar(20) NOT NULL,
  `ShippingState` tinyint(1) NOT NULL,
  `ShippingZip` int(11) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `ordeer`
--

CREATE TABLE IF NOT EXISTS `ordeer` (
  `Customer_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `Purchase_date` varchar(200) NOT NULL,
  `Processed_flag` int(11) NOT NULL,
  `Shipped_flag` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Shipping_company` varchar(200) NOT NULL,
  `Tracing_number` int(11) NOT NULL,
  `Shipped_date` varchar(200) NOT NULL,
  `Number` int(11) NOT NULL,
  PRIMARY KEY (`Transaction_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` double NOT NULL,
  `Category` varchar(20) NOT NULL,
  `SubCategory` varchar(100) NOT NULL,
  `Visible` tinyint(1) NOT NULL,
  `Picture` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
