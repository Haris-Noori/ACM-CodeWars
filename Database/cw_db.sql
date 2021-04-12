-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 02:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coy`
--

CREATE TABLE `coy` (
  `sr` int(11) NOT NULL,
  `user_name` varchar(23) DEFAULT NULL,
  `user_email` varchar(22) DEFAULT NULL,
  `user_batch` varchar(2) NOT NULL,
  `user_pass` varchar(8) NOT NULL,
  `team_name` varchar(18) DEFAULT NULL,
  `submitted` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coy`
--

INSERT INTO `coy` (`sr`, `user_name`, `user_email`, `user_batch`, `user_pass`, `team_name`, `submitted`) VALUES
(1, 'Mohammad Ali Malik', 'p190008@nu.edu.pk', '19', '6097', 'Coders of Valhalla', '0'),
(2, 'Muhammad shaiq paracha', 'p200452@pwr.nu.edu.pk', '20', '9577', 'DATA PIRATES', '0'),
(3, 'Hamza Shahid', 'p200117@pwr.nu.edu.pk', '20', '1555', '', NULL),
(4, 'Muhammad Faizan Wasif', 'p200484@pwr.nu.edu.pk', '20', '6364', '', NULL),
(5, 'Qanmber ali', 'p190181@nu.edu.pk', '19', '8418', 'Electroders', NULL),
(6, 'Matti Ur Rehman', 'p190048@nu.edu.pk', '19', '4277', 'Runtime terror', NULL),
(7, 'Muhammad Hassan Shah', 'p200025@pwr.nu.edu.pk', '20', '1885', '', NULL),
(8, 'Muhammad Taimoor Hassan', 'p200603@pwr.nu.edu.pk', '20', '3313', 'Bro Coders', NULL),
(9, 'Armghan Ahmad', 'p200183@pwr.nu.edu.pk', '20', '9613', 'Code Warriors', NULL),
(10, 'Subhan Khalid', 'p200086@pwr.nu.edu.pk', '20', '1136', '', NULL),
(11, 'Mian Mohammad taha imra', 'p200565@pwr.nu.edu.pk', '20', '9637', '', NULL),
(12, 'Mian Mohammad taha imra', 'p200565@pwr.nu.edu.pk', '20', '9975', '', NULL),
(13, 'Fahim Baig', 'p200065@pwr.nu.edu.pk', '20', '3661', '', NULL),
(14, 'S M Kumail Hassan Rizvi', 'p200644@pwr.nu.edu.pk', '20', '8203', '', NULL),
(15, 'Syed Ali hasnain', 'p200460@pwr.nu.edu.pk', '20', '9253', '', NULL),
(16, 'Muhammad hamza', 'p200635@pwr.nu.edu.pk', '20', '3337', 'Rule breakers', NULL),
(17, 'Hassan Khan', 'p200088@pwr.nu.edu.pk', '20', '9773', '', NULL),
(18, 'Najam', 'p190035@nu.edu.pk', '19', '4367', '', NULL),
(19, 'Wahaj Tahir', 'p191673@nu.edu.pk', '19', '7359', '', NULL),
(20, 'Maaz Khalid', 'p200168@pwr.nu.edu.pk', '20', '2765', 'FMQ', NULL),
(21, 'Ahmad tariq', 'p176113@nu.edu.pk', '19', '2968', 'Zilla', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cs_quiz`
--

CREATE TABLE `cs_quiz` (
  `sr` int(11) NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `user_email` varchar(26) DEFAULT NULL,
  `user_pass` varchar(8) NOT NULL,
  `submitted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cs_quiz`
--

INSERT INTO `cs_quiz` (`sr`, `user_name`, `user_email`, `user_pass`, `submitted`) VALUES
(1, 'Farah Deeba', 'farah.deeba2805@gmail.com', '4156', '0'),
(2, 'ABDUL SAMI', 'ksamk100474@gmail.com', '7520', ''),
(3, 'Muhammad Faiq', 'faiqqadri83@gmail.com', '5555', ''),
(4, 'Azam Chaudhary', 'p200154@pwr.nu.edu.pk', '2496', ''),
(5, 'Waseem Gul', 'gulwaseem35@gmail.com', '4754', ''),
(6, 'Muhammad Talha', 'p200156@pwr.nu.edu.pk', '2363', ''),
(7, 'Nauman Tasawar', 'p190073@nu.edu.pk', '3673', ''),
(8, 'dodz', 'p180032@nu.edu.pk', '5066', ''),
(9, 'Moeez Mustafa', 'f190244@nu.edu.pk', '3949', ''),
(10, 'USMAN SHABBIR', 'p180109@nu.edu.pk', '7173', ''),
(11, 'Akif kamal', 'p200099@pwr.nu.edu.pk', '6556', ''),
(12, 'AWAISDURRANI', 'awaisdurrani171@gmail.com', '9359', ''),
(13, 'Hammad hassan', 'p200609@pwr.nu.edu.pk', '1197', ''),
(14, 'Nadia Abbas', 'p176057@nu.edu.pk', '8299', ''),
(15, 'Faizan Ahmad', 'p176020@nu.edu.pk', '4505', ''),
(16, 'M.Mughees', 'rao.mughees2000@gmail.com', '6044', ''),
(17, 'Kashif Ali', 'p200648@pwr.nu.edu.pk', '2796', ''),
(18, 'Syed mir Aizaz ali shah', 'p200060@pwr.nu.edu.pk', '9770', ''),
(19, 'S M Kumail Hassan Rizvi', 'p200644@pwr.nu.edu.pk', '3648', ''),
(20, 'Ali shan khattak', 'p200571@pwr.nu.edu.pk', '3585', ''),
(21, 'Najam', 'p190035@nu.edu.pk', '6245', ''),
(22, 'Ali Asghar', 'p200611@pwr.nu.edu.pk', '1752', ''),
(23, 'Abdullah Tahir', 'p190067@nu.edu.pk', '8481', ''),
(24, 'Nauman Tasawar', 'p190073@nu.edu.pk', '1962', ''),
(25, 'Zohaib khan', 'p190095@nu.edu.pk', '8921', ''),
(26, 'Wahaj Tahir', 'p191673@nu.edu.pk', '5579', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coy`
--
ALTER TABLE `coy`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `cs_quiz`
--
ALTER TABLE `cs_quiz`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coy`
--
ALTER TABLE `coy`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cs_quiz`
--
ALTER TABLE `cs_quiz`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
