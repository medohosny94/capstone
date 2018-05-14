-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2018 at 10:23 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5733095_testapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `general_announcement`
--

CREATE TABLE `general_announcement` (
  `id` int(11) NOT NULL,
  `message_title` varchar(255) NOT NULL,
  `message_body` mediumtext NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_announcement`
--

INSERT INTO `general_announcement` (`id`, `message_title`, `message_body`, `sender`, `receiver`, `date`) VALUES
(1, 'Easter Break !!', 'There would be an Easter break on 29th April 2016', 'Peter', NULL, '2017-04-13 01:27:06'),
(2, 'Christmas  Break', 'There would be a general christmas break on 20th December, this year', 'priscilla', NULL, '2017-05-08 22:19:45'),
(3, '', '', 'mahmod', NULL, '2018-05-12 22:46:13'),
(11, 'lksadkjs', 'pr3eok3', 'Alaa', 'kjdkjf', '2018-05-13 18:29:16'),
(12, 'jfjshfjd', 'ksdfjl', 'Alaa', 'ahmed', '2018-05-13 19:10:27'),
(13, 'birthday party', 'I invite you for my birthday party tonight at 9:00 pm', 'medo', 'Alaa', '2018-05-13 20:20:13'),
(14, 'meeting', 'come on meeting at 3:00 pm', 'Alaa', 'Alaa', '2018-05-13 20:24:12'),
(15, 'merry christmas', 'a70b0304d6b79ac6b087ee99ef73c43d', 'roma', 'Alaa', '2018-05-13 22:00:15'),
(16, 'fdsfdds', 'hello yala', 'roma', 'Alaa', '2018-05-13 22:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES
(4, 'Alaa', NULL, NULL, 'alaa@ex.com', 'e958a610415349dfdeb57513ede07546'),
(5, 'medo', NULL, NULL, 'mando@ex.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'mahmo', 'mahmoud', 'hosny', 'mahmo@e.com', 'b096dee95c6a051987b3a4b6ca8d4f2b'),
(7, 'roma', 'roma', 'hos', 'roma@ex.com', '6247a3d71abf00049425186af0d36f87');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_announcement`
--
ALTER TABLE `general_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general_announcement`
--
ALTER TABLE `general_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
