-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2024 at 02:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modemmansiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `boardid` int(11) NOT NULL,
  `boardname` varchar(255) NOT NULL,
  `boarddesc` varchar(255) DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `createdbyuserid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`boardid`, `boardname`, `boarddesc`, `datecreated`, `createdbyuserid_fk`) VALUES
(1, 'Forum FAQs & Assistance', '', '2024-05-01 21:08:25', 3),
(2, 'News & Announcements', '', '2024-05-01 21:18:47', 3),
(3, 'HACK THIS PAGE, PLEASE!', '', '2024-05-01 21:21:13', 3),
(4, 'Gamers\' cave', '', '2024-05-02 08:55:56', 3);

-- --------------------------------------------------------

--
-- Table structure for table `boards_board_statuses`
--

CREATE TABLE `boards_board_statuses` (
  `boardid` int(11) NOT NULL,
  `boardstatusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boards_board_statuses`
--

INSERT INTO `boards_board_statuses` (`boardid`, `boardstatusid`) VALUES
(1, 1),
(3, 1),
(2, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `board_statuses`
--

CREATE TABLE `board_statuses` (
  `boardstatusid` int(11) NOT NULL,
  `boardstatusname` varchar(255) NOT NULL,
  `boardstatusdate` datetime NOT NULL,
  `createdbyuserid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `board_statuses`
--

INSERT INTO `board_statuses` (`boardstatusid`, `boardstatusname`, `boardstatusdate`, `createdbyuserid_fk`) VALUES
(1, 'Main', '2024-05-02 09:20:25', 3),
(2, 'Informational', '2024-05-02 09:21:22', 3),
(3, 'Discussions', '2024-05-02 09:23:08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_05_02_205031_create_board_statuses_table', 0),
(2, '2024_05_02_205031_create_boards_table', 0),
(3, '2024_05_02_205031_create_boards_board_statuses_table', 0),
(4, '2024_05_02_205031_create_posts_table', 0),
(5, '2024_05_02_205031_create_profile_info_table', 0),
(6, '2024_05_02_205031_create_thread_statuses_table', 0),
(7, '2024_05_02_205031_create_thread_types_table', 0),
(8, '2024_05_02_205031_create_threads_table', 0),
(9, '2024_05_02_205031_create_threads_thread_statuses_table', 0),
(10, '2024_05_02_205031_create_threads_thread_types_table', 0),
(11, '2024_05_02_205031_create_users_table', 0),
(12, '2014_10_12_000000_create_userrs_tablee', 1),
(13, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `posttext` text NOT NULL,
  `postedbyuserid_fk` int(11) NOT NULL,
  `threadid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_info`
--

CREATE TABLE `profile_info` (
  `profileid` int(11) NOT NULL,
  `displayname` varchar(40) NOT NULL,
  `profileimage` blob NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `userid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `threadid` int(11) NOT NULL,
  `threadname` varchar(255) NOT NULL,
  `threadstartdate` datetime NOT NULL,
  `threadstartedbyid_fk` int(11) NOT NULL,
  `boardid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`threadid`, `threadname`, `threadstartdate`, `threadstartedbyid_fk`, `boardid_fk`) VALUES
(1, 'Forum Rules <3', '2024-05-02 11:51:01', 3, 1),
(2, 'Your ideas on forum boards and categories?', '2024-05-02 11:52:19', 3, 1),
(3, 'What do you think about RimWorld?', '2024-05-02 12:28:51', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `threads_thread_statuses`
--

CREATE TABLE `threads_thread_statuses` (
  `threadid` int(11) NOT NULL,
  `threadstatusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads_thread_types`
--

CREATE TABLE `threads_thread_types` (
  `threadid` int(11) NOT NULL,
  `threadtypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thread_statuses`
--

CREATE TABLE `thread_statuses` (
  `threadstatusid` int(11) NOT NULL,
  `threadstatusname` varchar(255) NOT NULL,
  `threadstatusdate` datetime NOT NULL,
  `createdbyuserid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thread_statuses`
--

INSERT INTO `thread_statuses` (`threadstatusid`, `threadstatusname`, `threadstatusdate`, `createdbyuserid_fk`) VALUES
(1, 'Pinned', '2024-05-02 11:23:15', 3),
(2, 'Normal', '2024-05-02 11:38:01', 3),
(3, 'Locked', '2024-05-02 11:53:11', 3);

-- --------------------------------------------------------

--
-- Table structure for table `thread_types`
--

CREATE TABLE `thread_types` (
  `threadtypeid` int(11) NOT NULL,
  `threadtypename` varchar(255) NOT NULL,
  `threadtypedate` datetime NOT NULL,
  `createdbyuserid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thread_types`
--

INSERT INTO `thread_types` (`threadtypeid`, `threadtypename`, `threadtypedate`, `createdbyuserid_fk`) VALUES
(1, 'Question', '2024-05-02 11:54:33', 3),
(2, 'Normal', '2024-05-02 11:54:42', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usershowed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `usershowed`) VALUES
(1, 'M3melordSupreme', 'DankM3m3s4Lyf3!', '2024-04-25 14:47:25'),
(2, 'Cyb3rNinjaX', 'StealthH4ck3r!', '2024-05-01 10:36:40'),
(3, 'chcktstp', 'damndamn', '2024-04-20 19:07:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`boardid`),
  ADD KEY `createdbyuserid_fk` (`createdbyuserid_fk`);

--
-- Indexes for table `boards_board_statuses`
--
ALTER TABLE `boards_board_statuses`
  ADD UNIQUE KEY `boardid` (`boardid`),
  ADD KEY `boardstatusid` (`boardstatusid`);

--
-- Indexes for table `board_statuses`
--
ALTER TABLE `board_statuses`
  ADD PRIMARY KEY (`boardstatusid`),
  ADD KEY `createdbyuserid_fk` (`createdbyuserid_fk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `postedbyuserid_fk` (`postedbyuserid_fk`),
  ADD KEY `threadid_fk` (`threadid_fk`);

--
-- Indexes for table `profile_info`
--
ALTER TABLE `profile_info`
  ADD PRIMARY KEY (`profileid`),
  ADD UNIQUE KEY `userid_fk` (`userid_fk`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`threadid`),
  ADD KEY `threadstartedbyid_fk` (`threadstartedbyid_fk`),
  ADD KEY `boardid_fk` (`boardid_fk`);

--
-- Indexes for table `threads_thread_statuses`
--
ALTER TABLE `threads_thread_statuses`
  ADD UNIQUE KEY `threadid` (`threadid`),
  ADD KEY `threadstatusid` (`threadstatusid`);

--
-- Indexes for table `threads_thread_types`
--
ALTER TABLE `threads_thread_types`
  ADD UNIQUE KEY `threadid` (`threadid`),
  ADD KEY `threadtypeid` (`threadtypeid`);

--
-- Indexes for table `thread_statuses`
--
ALTER TABLE `thread_statuses`
  ADD PRIMARY KEY (`threadstatusid`),
  ADD KEY `createdbyuserid_fk` (`createdbyuserid_fk`);

--
-- Indexes for table `thread_types`
--
ALTER TABLE `thread_types`
  ADD PRIMARY KEY (`threadtypeid`),
  ADD KEY `createdbyuserid_fk` (`createdbyuserid_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `boardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `board_statuses`
--
ALTER TABLE `board_statuses`
  MODIFY `boardstatusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_info`
--
ALTER TABLE `profile_info`
  MODIFY `profileid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thread_statuses`
--
ALTER TABLE `thread_statuses`
  MODIFY `threadstatusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thread_types`
--
ALTER TABLE `thread_types`
  MODIFY `threadtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boards`
--
ALTER TABLE `boards`
  ADD CONSTRAINT `boards_ibfk_1` FOREIGN KEY (`createdbyuserid_fk`) REFERENCES `users` (`userid`);

--
-- Constraints for table `boards_board_statuses`
--
ALTER TABLE `boards_board_statuses`
  ADD CONSTRAINT `boards_board_statuses_ibfk_1` FOREIGN KEY (`boardid`) REFERENCES `boards` (`boardid`),
  ADD CONSTRAINT `boards_board_statuses_ibfk_2` FOREIGN KEY (`boardstatusid`) REFERENCES `board_statuses` (`boardstatusid`);

--
-- Constraints for table `board_statuses`
--
ALTER TABLE `board_statuses`
  ADD CONSTRAINT `board_statuses_ibfk_1` FOREIGN KEY (`createdbyuserid_fk`) REFERENCES `users` (`userid`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`postedbyuserid_fk`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`threadid_fk`) REFERENCES `threads` (`threadid`);

--
-- Constraints for table `profile_info`
--
ALTER TABLE `profile_info`
  ADD CONSTRAINT `profile_info_ibfk_1` FOREIGN KEY (`userid_fk`) REFERENCES `users` (`userid`);

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_ibfk_1` FOREIGN KEY (`threadstartedbyid_fk`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `threads_ibfk_2` FOREIGN KEY (`boardid_fk`) REFERENCES `boards` (`boardid`);

--
-- Constraints for table `threads_thread_types`
--
ALTER TABLE `threads_thread_types`
  ADD CONSTRAINT `threads_thread_types_ibfk_1` FOREIGN KEY (`threadid`) REFERENCES `threads` (`threadid`),
  ADD CONSTRAINT `threads_thread_types_ibfk_2` FOREIGN KEY (`threadtypeid`) REFERENCES `thread_types` (`threadtypeid`);

--
-- Constraints for table `thread_statuses`
--
ALTER TABLE `thread_statuses`
  ADD CONSTRAINT `thread_statuses_ibfk_1` FOREIGN KEY (`createdbyuserid_fk`) REFERENCES `users` (`userid`);

--
-- Constraints for table `thread_types`
--
ALTER TABLE `thread_types`
  ADD CONSTRAINT `thread_types_ibfk_1` FOREIGN KEY (`createdbyuserid_fk`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
