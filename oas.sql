-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 05:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oa`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `ad_id` varchar(10) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_pswd` varchar(50) NOT NULL,
  `ad_eml` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`ad_id`, `ad_name`, `ad_pswd`, `ad_eml`) VALUES
('AD001', 'Mohsin Manzoor', 'admin', 'shahmohsin101.sm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE `t_status` (
  `s_id` varchar(50) NOT NULL,
  `s_stat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `s_detid` varchar(15) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `f_occ` varchar(45) NOT NULL,
  `s_inc` varchar(10) NOT NULL,
  `s_gen` varchar(6) NOT NULL,
  `s_cadr` varchar(50) NOT NULL,
  `s_cpo` varchar(10) NOT NULL,
  `s_ct` varchar(10) NOT NULL,
  `s_cdi` varchar(10) NOT NULL,
  `s_cpin` int(6) NOT NULL,
  `s_padr` varchar(50) NOT NULL,
  `s_ppo` varchar(10) NOT NULL,
  `s_pt` varchar(10) NOT NULL,
  `s_pdi` varchar(10) NOT NULL,
  `s_ppin` int(6) NOT NULL,
  `s_natn` varchar(10) NOT NULL,
  `s_relg` varchar(10) DEFAULT NULL,
  `s_catg` varchar(3) NOT NULL,
  `s_strm` varchar(50) NOT NULL,
  `s_sem` varchar(20) NOT NULL,
  `s_sub1` varchar(50) NOT NULL,
  `s_sub2` varchar(50) NOT NULL,
  `s_sub3` varchar(50) NOT NULL,
  `s_sub4` varchar(50) NOT NULL,
  `s_sub5` varchar(50) NOT NULL,
  `s_sub6` varchar(50) NOT NULL,
  `s_sub7` varchar(50) NOT NULL,
  `s_sub8` varchar(50) NOT NULL,
  `s_sub9` varchar(50) NOT NULL,
  `s_nob1` varchar(10) NOT NULL,
  `s_sc1` varchar(10) NOT NULL,
  `s_yop1` varchar(4) NOT NULL,
  `s_ern1` varchar(10) NOT NULL,
  `s_mo1` varchar(4) NOT NULL,
  `s_po1` varchar(4) NOT NULL,
  `s_sb1` varchar(10) NOT NULL,
  `s_1nob2` varchar(15) NOT NULL,
  `s_1sc2` varchar(10) NOT NULL,
  `s_1yop2` varchar(4) NOT NULL,
  `s_1ern2` varchar(10) NOT NULL,
  `s_1mo2` varchar(4) NOT NULL,
  `s_1po2` varchar(4) NOT NULL,
  `s_1sb2` varchar(10) NOT NULL,
  `s_2nob3` varchar(15) NOT NULL,
  `s_2sc3` varchar(10) NOT NULL,
  `s_2yop3` varchar(4) NOT NULL,
  `s_2ern3` varchar(10) NOT NULL,
  `s_2mo3` varchar(4) NOT NULL,
  `s_2po3` varchar(4) NOT NULL,
  `s_2sb3` varchar(10) NOT NULL,
  `s_3nob4` varchar(15) NOT NULL,
  `s_3sc4` varchar(10) NOT NULL,
  `s_3yop4` varchar(4) NOT NULL,
  `s_3ern4` varchar(10) NOT NULL,
  `s_3mo4` varchar(4) NOT NULL,
  `s_3po4` varchar(4) NOT NULL,
  `s_3sb4` varchar(10) NOT NULL,
  `s_4nob5` varchar(15) NOT NULL,
  `s_4sc5` varchar(10) NOT NULL,
  `s_4yop5` varchar(4) NOT NULL,
  `s_4ern5` varchar(10) NOT NULL,
  `s_4mo5` varchar(4) NOT NULL,
  `s_4po5` varchar(4) NOT NULL,
  `s_4sb5` varchar(10) NOT NULL,
  `s_5nob6` varchar(15) NOT NULL,
  `s_5sc6` varchar(10) NOT NULL,
  `s_5yop6` varchar(4) NOT NULL,
  `s_5ern6` varchar(10) NOT NULL,
  `s_5mo6` varchar(4) NOT NULL,
  `s_5po6` varchar(4) NOT NULL,
  `s_5sb6` varchar(10) NOT NULL,
  `s_6nob7` varchar(15) NOT NULL,
  `s_6sc7` varchar(10) NOT NULL,
  `s_6yop7` varchar(4) NOT NULL,
  `s_6ern7` varchar(10) NOT NULL,
  `s_6mo7` varchar(4) NOT NULL,
  `s_6po7` varchar(4) NOT NULL,
  `s_6sb7` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_userdoc`
--

CREATE TABLE `t_userdoc` (
  `s_id` varchar(10) NOT NULL,
  `s_pic` varchar(200) NOT NULL,
  `s_twdmarkpic` varchar(200) NOT NULL,
  `s_twdcerpic` varchar(200) NOT NULL,
  `s_dobcer` varchar(200) NOT NULL,
  `s_prccer` varchar(200) NOT NULL,
  `s_sigpic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user_data`
--

CREATE TABLE `t_user_data` (
  `s_id` varchar(10) NOT NULL,
  `s_pwd` varchar(15) NOT NULL,
  `s_dob` date DEFAULT NULL,
  `s_name` varchar(45) NOT NULL,
  `s_email` varchar(45) NOT NULL,
  `s_mob` varchar(10) DEFAULT NULL,
  `s_signupdate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`s_detid`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user_data`
--
ALTER TABLE `t_user_data`
  ADD PRIMARY KEY (`s_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_status`
--
ALTER TABLE `t_status`
  ADD CONSTRAINT `t_status_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
  ADD CONSTRAINT `t_userdoc_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
