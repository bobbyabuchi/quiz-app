-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2022 at 10:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezekcuij_mscore`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `source` varchar(120) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gems`
--

CREATE TABLE `gems` (
  `gem_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `source` varchar(120) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `question` varchar(120) NOT NULL,
  `email` int(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resources_id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `type` varchar(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `source` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `response_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Q1` varchar(20) NOT NULL,
  `Q2` varchar(20) NOT NULL,
  `Q3` varchar(20) NOT NULL,
  `Q4` varchar(20) NOT NULL,
  `Q5` varchar(20) NOT NULL,
  `Q6` varchar(20) NOT NULL,
  `Q7` varchar(20) NOT NULL,
  `Q8` varchar(20) NOT NULL,
  `Q9` varchar(20) NOT NULL,
  `Q10` varchar(20) NOT NULL,
  `Q11` varchar(20) NOT NULL,
  `Q12` varchar(20) NOT NULL,
  `Q13` varchar(20) NOT NULL,
  `Q14` varchar(60) NOT NULL,
  `Q15` varchar(20) NOT NULL,
  `Q16` varchar(20) NOT NULL,
  `Q17` varchar(20) NOT NULL,
  `Q18` varchar(60) NOT NULL,
  `Q19` varchar(20) NOT NULL,
  `Q20` varchar(20) NOT NULL,
  `Q21` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `timezone` varchar(60) NOT NULL,
  `network` varchar(60) NOT NULL,
  `score` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`response_id`, `name`, `gender`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `Q21`, `email`, `country`, `timezone`, `network`, `score`, `date`) VALUES
(10, 'Bobby', 'male', '150', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'markachi@icloud.com', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '1050', '2020-10-10 01:51:06'),
(11, 'Sommy', 'female', '200', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'bobbymally20@gmail.com', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '1150', '2020-10-10 01:54:20'),
(13, 'Kc Agwu', 'male', '200', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'rarely', '50', '50', '50', '50', '50', '50', '50', '50', 'agwudestiny@live.com', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '1100', '2020-10-10 20:29:08'),
(14, 'Oludamola Ogidan', 'male', '200', 'not really', '50', 'not really', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'dadaydessy@gmail.com', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '1100', '2020-10-10 20:36:30'),
(15, '', 'female', '200', '50', '50', 'no', '50', '50', '50', '50', '50', '50', 'not much', '50', '50', '50', 'can\'t say', '50', '50', 'I guess so', 'not yet', 'not yet', '50', '', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '900', '2020-10-10 11:39:24'),
(16, 'Cassy', 'female', '200', '50', 'not really', 'not really', '50', '50', '50', 'not really', 'rarely', '50', 'not much', '50', 'rarely', '50', '50', 'not really', 'rarely', 'I guess so', '50', 'not yet', '50', '', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '700', '2020-10-10 20:39:41'),
(17, '', 'female', '200', '50', '50', '50', '50', '50', '50', 'not really', '50', '50', 'not much', '50', '50', '50', 'no', 'not really', '50', 'I guess so', '50', '50', '50', '', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '950', '2020-10-10 20:44:00'),
(18, '', 'female', '200', 'no', 'no', 'no', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'not yet', 'not yet', '50', '', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '850', '2020-10-10 20:22:44'),
(19, '', 'female', '150', 'no', 'no', 'no', '50', 'no', '50', 'not really', 'rarely', 'not really', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '800', '2020-10-10 20:46:56'),
(20, '', 'male', '150', '50', 'not really', '50', '50', 'not really', 'Not really', 'not really', 'rarely', '50', 'not much', 'rarely', 'rarely', 'once in a while', 'can\'t say', 'no', 'rarely', 'how can I know God\'s', 'not yet', 'not yet', '50', '', 'United States', 'America/Phoenix', 'AS22612 Namecheap, Inc.', '400', '2020-10-10 13:43:55'),
(21, 'Bobby (10.10.2020)', 'male', '150', '50', 'no', 'not really', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'once in a while', 'can\'t say', 'not really', '50', 'how can I know God\'s', 'not yet', 'not yet', 'no', 'markachi@icloud.com', 'US', 'America/New_York', 'New York City', '700', '2020-10-10 20:48:16'),
(22, 'Nonso', 'male', '150', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'not much', 'rarely', 'rarely', 'rarely', 'can\'t say', 'not really', 'rarely', 'I guess so', 'not really', '50', 'what does it mean?', '', 'NG', 'Africa/Lagos', 'Lagos', '650', '2020-10-10 15:15:44'),
(23, '', 'female', '200', 'no', 'no', 'no', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'not yet', 'not yet', '50', '', 'US', 'America/Chicago', 'Chicago', '900', '2020-10-10 20:49:09'),
(24, 'Dums', 'female', '150', 'not really', 'no', '50', '50', '50', '50', '50', '50', 'not really', 'not much', 'rarely', 'never', 'who is the Holy Spir', 'can\'t say', '50', 'rarely', '50', 'not yet', 'not yet', 'what does it mean?', '', 'NG', 'Africa/Lagos', 'Lagos', '550', '2020-10-10 17:24:02'),
(25, '', 'female', '200', '50', '50', 'no', '50', '50', '50', '50', '50', '50', 'not much', '50', '50', '50', 'can\'t say', '50', '50', 'I guess so', 'not yet', 'not yet', '50', '', 'IE', 'Europe/Dublin', 'Lucan', '900', '2020-10-10 17:34:54'),
(26, 'Cassy', 'female', '200', '50', 'not really', 'not really', '50', '50', '50', 'not really', 'rarely', '50', 'not much', '50', 'rarely', '50', '50', 'not really', 'rarely', 'I guess so', '50', 'not yet', '50', '', 'NG', 'Africa/Lagos', 'Lagos', '650', '2020-10-11 14:25:07'),
(27, '', 'male', '150', '50', 'no', 'not really', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'once in a while', 'no', 'not really', '50', 'no', 'not yet', 'not yet', '50', '', 'GB', 'Europe/London', 'Manchester', '750', '2020-10-12 02:07:00'),
(28, 'Cassy', 'female', '200', '50', 'not really', 'not really', '50', '50', '50', 'not really', 'rarely', '50', 'not much', '50', 'rarely', '50', '50', 'not really', 'rarely', 'I guess so', '50', 'not yet', '50', '', 'NG', 'Africa/Lagos', 'Lagos', '650', '2020-10-24 07:40:57'),
(29, 'Cassy', 'female', '200', '50', 'not really', 'not really', '50', '50', '50', 'not really', 'rarely', '50', 'not much', '50', 'rarely', '50', '50', 'not really', 'rarely', 'I guess so', '50', 'not yet', '50', '', '', '', '', '650', '2020-10-24 16:30:56'),
(30, '', 'male', '100', 'no', 'no', 'no', '50', '50', '50', '50', '50', 'no', '50', '50', '50', '50', '50', '50', '50', 'I guess so', 'not yet', 'not yet', '50', '', '', '', '', '700', '2021-03-09 14:21:22'),
(31, '', 'male', '150', 'not really', 'not really', 'not really', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'bobbyabuchi@hotmail.com', '', '', '', '950', '2022-04-20 20:07:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `gems`
--
ALTER TABLE `gems`
  ADD PRIMARY KEY (`gem_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resources_id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`response_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gems`
--
ALTER TABLE `gems`
  MODIFY `gem_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resources_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
