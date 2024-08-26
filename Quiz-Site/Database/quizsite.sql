-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 06:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'abc123'),
(2, 'adminasd', '0192023a7bbd73250516f069df18b500'),
(3, 'abc', '0cc175b9c0f1b6a831c399e269772661'),
(4, 'aman', 'aman123'),
(5, 'arsh', 'arsh123');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(100) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qid`, `ansid`) VALUES
(9, '66a7a92e0c01b', '66a7a92e1c9e0'),
(10, '66a7a92e62389', '66a7a92e6a387'),
(11, '66a7a92ea3687', '66a7a92eab6da'),
(12, '66a7a92ed42d6', '66a7a92edcaa9'),
(13, '66a7a92f2bdc6', '66a7a92f36dfa'),
(14, '66a7a92f77f81', '66a7a92f7ffe7'),
(15, '66a7a92fa8cf3', '66a7a92fb0d9a'),
(16, '66a7a92fd9a38', '66a7a92fe1b2f'),
(17, '66a7a9301918b', '66a7a930211fe'),
(18, '66a7a93053a4d', '66a7a9306ac18');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `username`, `subject`, `feedback`, `date`, `time`) VALUES
('66a7b05ee54db', 'Aman', 'aman@gmail.com', 'Front Office Quiz', 'Very Nice Questions', '2024-07-29', '05:08:14pm'),
('66b27b6de790d', 'Rahul', 'abc@gmail.com', 'About Discover Quizzes', 'Discover practice quizzes are useful quizzes for us', '2024-08-06', '09:37:17pm'),
('66b3678a581e1', '', '', '', '', '2024-08-07', '02:24:42pm'),
('66b391fc66bec', 'Aman', 'aman@gmail.com', 'Prctice Quzes', 'EFnfhfbg', '2024-08-07', '05:25:48pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(4, 'Aman', '66a7a440333ef', 10, 10, 10, 0, '2024-07-29 14:58:03', 1722264733, 'finished', 'true'),
(5, 'kaurj', '66a7a440333ef', 10, 10, 10, 0, '2024-08-06 18:47:18', 1722969843, 'finished', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(33, '66a7a92e0c01b', 'Telephone Book', '66a7a92e1c9c8'),
(34, '66a7a92e0c01b', 'Property Brochure', '66a7a92e1c9d8'),
(35, '66a7a92e0c01b', 'Telephone Operator', '66a7a92e1c9dc'),
(36, '66a7a92e0c01b', 'Track It', '66a7a92e1c9e0'),
(37, '66a7a92e62389', 'Departure', '66a7a92e6a374'),
(38, '66a7a92e62389', 'Early Departure', '66a7a92e6a383'),
(39, '66a7a92e62389', 'Reinstate', '66a7a92e6a387'),
(40, '66a7a92e62389', 'Check Out with Open Folio', '66a7a92e6a38b'),
(41, '66a7a92ea3687', 'In House', '66a7a92eab6c2'),
(42, '66a7a92ea3687', 'Arrivals', '66a7a92eab6d1'),
(43, '66a7a92ea3687', 'Walk In', '66a7a92eab6d5'),
(44, '66a7a92ea3687', 'Day Use', '66a7a92eab6da'),
(45, '66a7a92ed42d6', 'Property Brochure', '66a7a92edcaa9'),
(46, '66a7a92ed42d6', 'Track It', '66a7a92edcab8'),
(47, '66a7a92ed42d6', 'Telephone Book', '66a7a92edcabc'),
(48, '66a7a92ed42d6', 'Telephone Operator', '66a7a92edcac0'),
(49, '66a7a92f2bdc6', 'Monthly', '66a7a92f36dd8'),
(50, '66a7a92f2bdc6', 'Yearly', '66a7a92f36dec'),
(51, '66a7a92f2bdc6', 'Weekly', '66a7a92f36df4'),
(52, '66a7a92f2bdc6', 'Daily', '66a7a92f36dfa'),
(53, '66a7a92f77f81', 'Four ', '66a7a92f7ffc6'),
(54, '66a7a92f77f81', 'Three ', '66a7a92f7ffd9'),
(55, '66a7a92f77f81', 'Seven ', '66a7a92f7ffdf'),
(56, '66a7a92f77f81', 'Eight ', '66a7a92f7ffe7'),
(57, '66a7a92fa8cf3', 'Information Folio', '66a7a92fb0d87'),
(58, '66a7a92fa8cf3', 'Advance Folio', '66a7a92fb0d9a'),
(59, '66a7a92fa8cf3', 'Interim Folio', '66a7a92fb0da2'),
(60, '66a7a92fa8cf3', 'Receipt', '66a7a92fb0da7'),
(61, '66a7a92fd9a38', 'Room Diary', '66a7a92fe1b0d'),
(62, '66a7a92fd9a38', 'Walk In Reservation', '66a7a92fe1b21'),
(63, '66a7a92fd9a38', 'Room Routing', '66a7a92fe1b28'),
(64, '66a7a92fd9a38', 'Room Assignment', '66a7a92fe1b2f'),
(65, '66a7a9301918b', 'Settle Folio', '66a7a930211e2'),
(66, '66a7a9301918b', 'Check Out with Open Folio', '66a7a930211f7'),
(67, '66a7a9301918b', 'Schedule Check Out', '66a7a930211fe'),
(68, '66a7a9301918b', 'Advance Bill', '66a7a93021205'),
(69, '66a7a93053a4d', 'Post Charges', '66a7a9306ac08'),
(70, '66a7a93053a4d', 'Post Adjustments', '66a7a9306ac18'),
(71, '66a7a93053a4d', 'Post Rate Code', '66a7a9306ac1d'),
(72, '66a7a93053a4d', 'Make Payments', '66a7a9306ac22');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(9, '66a7a440333ef', '66a7a92e0c01b', 'This screen allows users to view all arriving, in-house, and departing guest reservations on one screen.', 4, 1),
(10, '66a7a440333ef', '66a7a92e62389', 'This option in Billing allows the user to check a guest back in, on the day of departure, to resolve folio issues or modify the guest stay.', 4, 2),
(11, '66a7a440333ef', '66a7a92ea3687', 'These type reservations are bookings when the guest arrives and departs on the same day. Room and tax charges are posted immediately at departure', 4, 3),
(12, '66a7a440333ef', '66a7a92ed42d6', 'This screen includes site plans and high-impact photographs of the property as well as quick information on popular local attractions. This screen also includes a calendar of events being held on-site.', 4, 4),
(13, '66a7a440333ef', '66a7a92f2bdc6', 'Which is an available Frequency for Wake Up Calls', 4, 5),
(14, '66a7a440333ef', '66a7a92f77f81', 'In the Billing screen, the Folio Window number is displayed at the top left of the window. Each Reservation is allowed a maximum of this many Folio windows.', 4, 6),
(15, '66a7a440333ef', '66a7a92fa8cf3', 'This option allows the user to apply projected charges, such as room and tax or Fixed Charges, in advance of the End of Day process.', 4, 7),
(16, '66a7a440333ef', '66a7a92fd9a38', 'This screen allows you to easily and rapidly assign rooms, to multiple guests, prior to guest check in.', 4, 8),
(17, '66a7a440333ef', '66a7a9301918b', 'Which of the following options is not available on the Complete Check Out screen', 4, 9),
(18, '66a7a440333ef', '66a7a93053a4d', 'This option allows the user to post a transaction to correct previously posted transactions.', 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(3, '66a7a440333ef', 'Front Office System', 1, 1, 10, 30, '2024-07-29 14:47:00', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `username`, `score`, `time`) VALUES
(4, 'Aman', 10, '2024-07-29 14:58:03'),
(5, 'kaurj', 10, '2024-08-06 18:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `rollno`, `branch`, `gender`, `username`, `phno`, `password`) VALUES
(7, 'Aman', '12345', 'IT', 'F', 'Aman', 1234567890, 'bd00eb0f2a3ce174d021c6c7a6163eba'),
(8, 'Kaurj', 'Ex.23456', 'CSE', 'F', 'kaurj', 9876543221, '3d6f0ebf78da95092ace756bd47d699e'),
(9, 'Rahul', 'Ex.34567', 'CSE', 'M', 'rahul', 8860633457, 'e99a18c428cb38d5f260853678922e03');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `correctans` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answer`
--

INSERT INTO `user_answer` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(1, '58027e82e62e3', '58027e82f2412', '58027e82f2412', '5802790f793b1', 'sonudoo'),
(2, '58027e833dd54', '58027e8347514', '58027e8347514', '5802790f793b1', 'sonudoo'),
(3, '58027e8371483', '58027e838f19a', '58027e838f19a', '5802790f793b1', 'sonudoo'),
(4, '5b85857d00f34', '5b85857d0af5f', '5b85857d0ab77', '5b85847bbe794', 'pravin'),
(5, '5b85857d333f0', '5b85857d389e2', '5b85857d391b2', '5b85847bbe794', 'pravin'),
(6, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'pravin'),
(7, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'pravin'),
(8, '5b85857db810f', '5b85857dbdae9', '5b85857dbd701', '5b85847bbe794', 'pravin'),
(9, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'mugunth'),
(10, '5b85857d333f0', '5b85857d391b2', '5b85857d391b2', '5b85847bbe794', 'mugunth'),
(11, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'mugunth'),
(12, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'mugunth'),
(13, '5b85857db810f', '5b85857dbded1', '5b85857dbd701', '5b85847bbe794', 'mugunth'),
(14, '66a7a93053a4d', '66a7a9306ac18', '66a7a9306ac18', '66a7a440333ef', 'rahul'),
(15, '66a7a92e0c01b', '66a7a92e1c9e0', '66a7a92e1c9e0', '66a7a440333ef', 'Aman'),
(16, '66a7a92e62389', '66a7a92e6a387', '66a7a92e6a387', '66a7a440333ef', 'Aman'),
(17, '66a7a92ea3687', '66a7a92eab6da', '66a7a92eab6da', '66a7a440333ef', 'Aman'),
(18, '66a7a92ed42d6', '66a7a92edcaa9', '66a7a92edcaa9', '66a7a440333ef', 'Aman'),
(19, '66a7a92f2bdc6', '66a7a92f36dfa', '66a7a92f36dfa', '66a7a440333ef', 'Aman'),
(20, '66a7a92f77f81', '66a7a92f7ffe7', '66a7a92f7ffe7', '66a7a440333ef', 'Aman'),
(21, '66a7a92fa8cf3', '66a7a92fb0d9a', '66a7a92fb0d9a', '66a7a440333ef', 'Aman'),
(22, '66a7a92fd9a38', '66a7a92fe1b2f', '66a7a92fe1b2f', '66a7a440333ef', 'Aman'),
(23, '66a7a9301918b', '66a7a930211fe', '66a7a930211fe', '66a7a440333ef', 'Aman'),
(24, '66a7a93053a4d', '66a7a9306ac18', '66a7a9306ac18', '66a7a440333ef', 'Aman'),
(25, '66a7a92e0c01b', '66a7a92e1c9e0', '66a7a92e1c9e0', '66a7a440333ef', 'kaurj'),
(26, '66a7a92e62389', '66a7a92e6a387', '66a7a92e6a387', '66a7a440333ef', 'kaurj'),
(27, '66a7a92ea3687', '66a7a92eab6da', '66a7a92eab6da', '66a7a440333ef', 'kaurj'),
(28, '66a7a92ed42d6', '66a7a92edcaa9', '66a7a92edcaa9', '66a7a440333ef', 'kaurj'),
(29, '66a7a92f2bdc6', '66a7a92f36dfa', '66a7a92f36dfa', '66a7a440333ef', 'kaurj'),
(30, '66a7a92f77f81', '66a7a92f7ffe7', '66a7a92f7ffe7', '66a7a440333ef', 'kaurj'),
(31, '66a7a92fa8cf3', '66a7a92fb0d9a', '66a7a92fb0d9a', '66a7a440333ef', 'kaurj'),
(32, '66a7a92fd9a38', '66a7a92fe1b2f', '66a7a92fe1b2f', '66a7a440333ef', 'kaurj'),
(33, '66a7a9301918b', '66a7a930211fe', '66a7a930211fe', '66a7a440333ef', 'kaurj'),
(34, '66a7a93053a4d', '66a7a9306ac18', '66a7a9306ac18', '66a7a440333ef', 'kaurj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
