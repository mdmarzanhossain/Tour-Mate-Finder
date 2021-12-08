-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 04:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmf`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(11) NOT NULL,
  `e_title` varchar(100) NOT NULL,
  `e_description` longtext,
  `e_min_member` int(2) DEFAULT NULL,
  `e_max_member` int(2) DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `start_date` int(13) NOT NULL,
  `end_date` int(13) NOT NULL,
  `age` int(11) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `e_title`, `e_description`, `e_min_member`, `e_max_member`, `cost`, `start_date`, `end_date`, `age`, `image`) VALUES
(1, 'test', 'fuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecou', 16, 30, 5200, 1545988233, 1546091373, 20, 'images/1545979531_image.png'),
(2, 'test regregre', 'fuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecoufuyew ufewiu ciweugc iweg icug weicg owegc ouweuocfwecou', 10, 30, 5200, 1535988233, 1545988233, 20, 'images/1545979651_image.png'),
(3, 'Bhola Dhaka Bhola', 'fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb fbdfbdfbfdb ', 10, 30, 5200, 1543618800, 1546210800, 20, 'images/1545988547_image.png'),
(4, 'safasd', 'asdfsadfsadfasdfsadfsadfasdfsadfsadfasdfsadfsadfasdfsadfsadfasdfsadfsadfasdfsadfsadf', 0, 0, 5200, 1545606000, 1546091373, 0, 'images/1546082607_image.png');

-- --------------------------------------------------------

--
-- Table structure for table `event_payment`
--

CREATE TABLE `event_payment` (
  `e_pay_id` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_discount`
--

CREATE TABLE `hotel_discount` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL,
  `s_date` int(13) DEFAULT NULL,
  `e_date` int(13) DEFAULT NULL,
  `cost` int(7) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_discount`
--

INSERT INTO `hotel_discount` (`id`, `name`, `location`, `s_date`, `e_date`, `cost`, `description`, `image`) VALUES
(1, 'marzan', 'wari', 1545087600, 1545346800, 3400, 'hellohellohellohellohellohello', 'wari'),
(2, 'akhi', 'dhaka', 1543186800, 1543359600, 2500, 'habijabi\r\nhabijabi\r\nhabijabihabijabihabijabihabijabi', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_amount` double DEFAULT NULL,
  `pay_date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `pho_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `url` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `r_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `r_value` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`r_id`, `e_id`, `id`, `r_value`) VALUES
(7, 4, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `address` longtext,
  `photo` longtext,
  `mobile` varchar(15) DEFAULT NULL,
  `birthdate` varchar(10) DEFAULT NULL,
  `blood` varchar(2) DEFAULT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `emergency_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `address`, `photo`, `mobile`, `birthdate`, `blood`, `full_name`, `emergency_contact`) VALUES
(1, 'shukno_nodi@hotmail.com', '12345', 'fhdhdf', 'fdhd', '3131', '131', 'B+', 'fdfsf', ''),
(2, 'ahosanullah.en@gmail.com', '12345', NULL, NULL, '1815172500', NULL, 'd+', 'Ahosan Ullah', '1815172500'),
(3, 'ahosanullah.en@gmail.com', '98765', NULL, NULL, '1815172500', NULL, 'd+', 'Ahosan Ullah', '1815172500');

-- --------------------------------------------------------

--
-- Table structure for table `userpay`
--

CREATE TABLE `userpay` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) DEFAULT NULL,
  `u_mobile` varchar(14) DEFAULT NULL,
  `u_blood` varchar(3) DEFAULT NULL,
  `e_id` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpay`
--

INSERT INTO `userpay` (`u_id`, `u_name`, `u_mobile`, `u_blood`, `e_id`, `id`) VALUES
(1, 'bfb', '2432', 'b', 1, 1),
(2, 'aaa', '213213', 'A-', 1, 1),
(3, 'fdfsf', '3131', 'B+', 1, 1),
(4, 'fdfsf', '3131', 'B+', 1, 1),
(5, 'sdfsd', '1212', 'B+', 3, 1),
(6, 'fdfsf', '3131', 'B+', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `event_payment`
--
ALTER TABLE `event_payment`
  ADD PRIMARY KEY (`e_pay_id`),
  ADD KEY `pay_id` (`pay_id`),
  ADD KEY `e_id` (`e_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `hotel_discount`
--
ALTER TABLE `hotel_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`pho_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `e_id` (`e_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpay`
--
ALTER TABLE `userpay`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `e_id` (`e_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_payment`
--
ALTER TABLE `event_payment`
  MODIFY `e_pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_discount`
--
ALTER TABLE `hotel_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `pho_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userpay`
--
ALTER TABLE `userpay`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_payment`
--
ALTER TABLE `event_payment`
  ADD CONSTRAINT `event_payment_ibfk_1` FOREIGN KEY (`pay_id`) REFERENCES `payment` (`pay_id`),
  ADD CONSTRAINT `event_payment_ibfk_2` FOREIGN KEY (`e_id`) REFERENCES `event` (`e_id`),
  ADD CONSTRAINT `event_payment_ibfk_3` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `place` (`p_id`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `event` (`e_id`),
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `userpay`
--
ALTER TABLE `userpay`
  ADD CONSTRAINT `userpay_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `event` (`e_id`),
  ADD CONSTRAINT `userpay_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
