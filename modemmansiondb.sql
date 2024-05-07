-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2024 at 04:14 AM
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
  `createdbyuserid_fk` int(11) NOT NULL,
  `boardstatusid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`boardid`, `boardname`, `boarddesc`, `datecreated`, `createdbyuserid_fk`, `boardstatusid_fk`) VALUES
(1, 'Forum FAQs & Assistance', '', '2024-05-01 21:08:25', 3, 1),
(2, 'News & Announcements', '', '2024-05-01 21:18:47', 3, 2),
(3, 'HACK THIS PAGE, PLEASE!', '', '2024-05-01 21:21:13', 3, 1),
(4, 'Gamers\' cave', '', '2024-05-02 08:55:56', 3, 3);

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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loginactivity`
--

CREATE TABLE `loginactivity` (
  `loginactivityid` int(11) NOT NULL,
  `userid_fk` int(11) NOT NULL,
  `loginactivitystatus_fk` int(11) NOT NULL,
  `loginactivitydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loginstatuses`
--

CREATE TABLE `loginstatuses` (
  `loginstatusid` int(11) NOT NULL,
  `loginstatusname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginstatuses`
--

INSERT INTO `loginstatuses` (`loginstatusid`, `loginstatusname`) VALUES
(1, 'loggedin'),
(2, 'loggedout');

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
(16, '2014_10_12_000000_create_userrs_tablee', 1),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2024_05_06_213600_create_board_statuses_table', 0),
(21, '2024_05_06_213600_create_boards_table', 0),
(22, '2024_05_06_213600_create_failed_jobs_table', 0),
(23, '2024_05_06_213600_create_loginactivity_table', 0),
(24, '2024_05_06_213600_create_loginstatuses_table', 0),
(25, '2024_05_06_213600_create_new_categories_table', 0),
(26, '2024_05_06_213600_create_news_table', 0),
(27, '2024_05_06_213600_create_password_reset_tokens_table', 0),
(28, '2024_05_06_213600_create_personal_access_tokens_table', 0),
(29, '2024_05_06_213600_create_posts_table', 0),
(30, '2024_05_06_213600_create_profile_info_table', 0),
(31, '2024_05_06_213600_create_thread_statuses_table', 0),
(32, '2024_05_06_213600_create_thread_types_table', 0),
(33, '2024_05_06_213600_create_threads_table', 0),
(34, '2024_05_06_213600_create_threads_thread_statuses_table', 0),
(35, '2024_05_06_213600_create_threads_thread_types_table', 0),
(36, '2024_05_06_213600_create_users_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newid` int(11) NOT NULL,
  `newtitle` varchar(255) NOT NULL,
  `newdescription` text NOT NULL,
  `newdate` datetime NOT NULL,
  `tags` text NOT NULL,
  `newcategoryid_fk` int(11) NOT NULL,
  `createdbyuserid_fk` int(11) NOT NULL,
  `newimageadress` varchar(255) NOT NULL,
  `newimagealt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newid`, `newtitle`, `newdescription`, `newdate`, `tags`, `newcategoryid_fk`, `createdbyuserid_fk`, `newimageadress`, `newimagealt`) VALUES
(1, 'Modem Mansion Forum v1.0 has been released!', 'We\'re excited to announce the release of Modem Mansion version 1.0!\r\n\r\nAfter months of hard work and dedication, our team is proud to unveil a cutting-edge online sanctuary for web enthusiasts seeking a taste of the past!  \r\n\r\nOur mission? To revive the spirit of the old-school internet and ignite a rebellion against the monotony of modern web design. But that\'s just the beginning!\r\n\r\nStay tuned for future releases packed with kill-features, including the Gif Wall — a hub for sharing and discovering animated gems—and the Global Map, where a global map will showcase user connections worldwide, uniting members from every corner of the globe, and much more. \r\n\r\nThe journey has just begun — let\'s reclaim the web\'s nostalgic charm together!\r\n\r\n', '2024-05-05 13:33:53', '#forumnews, #release, #newfeature, #feature', 1, 3, 'address', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_categories`
--

CREATE TABLE `new_categories` (
  `newcategoryid` int(11) NOT NULL,
  `newcategoryname` varchar(255) NOT NULL,
  `newcategorydate` datetime NOT NULL,
  `newcategorycreatedbyid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_categories`
--

INSERT INTO `new_categories` (`newcategoryid`, `newcategoryname`, `newcategorydate`, `newcategorycreatedbyid_fk`) VALUES
(1, 'Forum news', '2024-05-05 13:19:23', 3),
(2, 'Gaming', '2024-05-05 13:20:06', 3),
(3, 'IT', '2024-05-05 13:32:15', 3),
(4, 'Meme news', '2024-05-05 13:32:58', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `posttext` text NOT NULL,
  `postedbyuserid_fk` int(11) NOT NULL,
  `threadid_fk` int(11) NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `posttext`, `postedbyuserid_fk`, `threadid_fk`, `postdate`) VALUES
(1, 'Wassup, it\'s a test message to test our forum!) :)))', 3, 1, '2024-05-05 16:34:28'),
(2, 'yoyo, test post from me)', 3, 1, '2024-05-05 19:23:02'),
(3, 'another test message, I love coding and playing games sometimes!!!', 3, 3, '2024-05-05 20:35:26'),
(4, 'Live your ideas!!! Code, love, progress!', 4, 1, '2024-05-06 19:05:45'),
(5, 'Okay, this page needs to be hacked...', 3, 4, '2024-05-06 20:48:54'),
(6, 'RimWorld is my favorite game in a colony-management style', 2, 3, '2024-05-06 20:52:31'),
(7, 'asdasdasdasd', 3, 1, '2024-05-07 01:46:49'),
(8, 'damn, man', 3, 1, '2024-05-07 01:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `profile_info`
--

CREATE TABLE `profile_info` (
  `profileid` int(11) NOT NULL,
  `displayname` varchar(40) NOT NULL,
  `profileimage` blob DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `userid_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile_info`
--

INSERT INTO `profile_info` (`profileid`, `displayname`, `profileimage`, `description`, `userid_fk`) VALUES
(1, 'M3melordSupreme', NULL, 'User hasn\'t edited it yet', 1),
(2, 'Cyb3rNinjaX', NULL, 'User hasn\'t edited it yet', 2),
(3, 'chcktstp', NULL, 'User hasn\'t edited it yet', 3),
(4, 'b0oom', NULL, 'User hasn\'t edited it yet', 4),
(5, 'bombastic', NULL, 'User hasn\'t edited it yet', 5),
(6, 'trevor', NULL, 'User hasn\'t edited it yet', 6),
(7, 'michael', NULL, '\'User hasn\\\'t edited it yet\'', 7),
(8, 'encrypted_kabanchik', NULL, 'User hasn\'t edited it yet', 8),
(9, 'testtt', NULL, 'User hasn\'t edited it yet', 9);

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
(3, 'What do you think about RimWorld?', '2024-05-02 12:28:51', 3, 4),
(4, 'If wasn\'t a clickbate, hack this page please', '2024-05-06 20:44:11', 3, 3);

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
  `password` char(64) NOT NULL,
  `usershowed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `usershowed`) VALUES
(1, 'M3melordSupreme', 'DankM3m3s4Lyf3!', '2024-04-25 14:47:25'),
(2, 'Cyb3rNinjaX', 'StealthH4ck3r!', '2024-05-01 10:36:40'),
(3, 'chcktstp', '$2y$12$6pPyH32wRE3PskvD0lpnWe7vELPx0jS2Kw6T6oD96UsqMxd60dkpy', '2024-04-20 19:07:47'),
(4, 'b0oom', 'asdasdasdasasdasdasd', '2024-05-04 14:30:50'),
(5, 'bombastic', 'bombastic123', '2024-05-06 20:30:22'),
(6, 'trevor', 'trevor1234', '2024-05-06 20:35:34'),
(7, 'michael', 'michaelmichael', '2024-05-06 20:43:53'),
(8, 'encrypted_kabanchik', '$2y$12$e7h3Qgd89oQTdhAlFoeY2.5KxJItph77zWQHgTThyvF/ASGX6aScy', '2024-05-06 21:47:26'),
(9, 'testtt', '$2y$12$RWzcustP5i6vdCZ4ouAD.eKAiGB4ybWBBLPPo0c562FqG56k9osRe', '2024-05-07 00:35:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`boardid`),
  ADD KEY `createdbyuserid_fk` (`createdbyuserid_fk`),
  ADD KEY `boardstatusid_fk` (`boardstatusid_fk`);

--
-- Indexes for table `board_statuses`
--
ALTER TABLE `board_statuses`
  ADD PRIMARY KEY (`boardstatusid`),
  ADD KEY `createdbyuserid_fk` (`createdbyuserid_fk`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loginactivity`
--
ALTER TABLE `loginactivity`
  ADD PRIMARY KEY (`loginactivityid`),
  ADD KEY `userid_fk` (`userid_fk`),
  ADD KEY `loginactivitystatus_fk` (`loginactivitystatus_fk`);

--
-- Indexes for table `loginstatuses`
--
ALTER TABLE `loginstatuses`
  ADD PRIMARY KEY (`loginstatusid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newid`),
  ADD KEY `createdbyuserid_fk` (`createdbyuserid_fk`),
  ADD KEY `newcategoryid_fk` (`newcategoryid_fk`);

--
-- Indexes for table `new_categories`
--
ALTER TABLE `new_categories`
  ADD PRIMARY KEY (`newcategoryid`),
  ADD KEY `newcategorycreatedbyid_fk` (`newcategorycreatedbyid_fk`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  ADD UNIQUE KEY `userid_fk` (`userid_fk`),
  ADD UNIQUE KEY `displayname` (`displayname`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loginactivity`
--
ALTER TABLE `loginactivity`
  MODIFY `loginactivityid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loginstatuses`
--
ALTER TABLE `loginstatuses`
  MODIFY `loginstatusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_categories`
--
ALTER TABLE `new_categories`
  MODIFY `newcategoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile_info`
--
ALTER TABLE `profile_info`
  MODIFY `profileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `threadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boards`
--
ALTER TABLE `boards`
  ADD CONSTRAINT `boards_ibfk_1` FOREIGN KEY (`createdbyuserid_fk`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `boards_ibfk_2` FOREIGN KEY (`boardstatusid_fk`) REFERENCES `board_statuses` (`boardstatusid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `board_statuses`
--
ALTER TABLE `board_statuses`
  ADD CONSTRAINT `board_statuses_ibfk_1` FOREIGN KEY (`createdbyuserid_fk`) REFERENCES `users` (`userid`);

--
-- Constraints for table `loginactivity`
--
ALTER TABLE `loginactivity`
  ADD CONSTRAINT `loginactivity_ibfk_1` FOREIGN KEY (`userid_fk`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `loginactivity_ibfk_2` FOREIGN KEY (`loginactivitystatus_fk`) REFERENCES `loginstatuses` (`loginstatusid`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`newcategoryid_fk`) REFERENCES `new_categories` (`newcategoryid`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`createdbyuserid_fk`) REFERENCES `users` (`userid`);

--
-- Constraints for table `new_categories`
--
ALTER TABLE `new_categories`
  ADD CONSTRAINT `new_categories_ibfk_1` FOREIGN KEY (`newcategorycreatedbyid_fk`) REFERENCES `users` (`userid`);

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
