-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 11:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_association`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `student_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `cgpa` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `company_id_fk` int(11) DEFAULT NULL,
  `company_name` text DEFAULT NULL,
  `company_website` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_review`
--

CREATE TABLE `company_review` (
  `company_name` text NOT NULL,
  `company_website` text NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `c_id` int(11) NOT NULL,
  `student_id_fk` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `alumni_id_fk` int(11) DEFAULT NULL,
  `photos_3` text DEFAULT NULL,
  `photos_1` text DEFAULT NULL,
  `photos_2` text DEFAULT NULL,
  `event_description` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_scheduling`
--

CREATE TABLE `event_scheduling` (
  `scheduling_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `schedule_title` text NOT NULL,
  `schedule_description` text NOT NULL,
  `schedule_speaker` varchar(255) NOT NULL,
  `event_id_fk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `last_date_of_application` date NOT NULL,
  `skill_requirement` text NOT NULL,
  `contact_info` text NOT NULL,
  `photo` text DEFAULT NULL,
  `alumni_id_fk` int(11) DEFAULT NULL,
  `responsibilities` text NOT NULL,
  `job_nature` text NOT NULL,
  `apply_link` text DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_location` text NOT NULL,
  `experience` varchar(100) NOT NULL,
  `no_of_vacancy` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `email_for_online_cv` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `question_attachment` text NOT NULL,
  `company_id _fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `success_story`
--

CREATE TABLE `success_story` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `user_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `account_type` int(1) NOT NULL COMMENT '0= admin, 1= alumni comitee, 2 = general user',
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `alumni_id_fk` int(11) DEFAULT NULL,
  `company_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `company_id_fk` (`company_id_fk`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `consnt_fk1` (`student_id_fk`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `event_id` (`event_id`),
  ADD KEY `student_id` (`alumni_id_fk`);

--
-- Indexes for table `event_scheduling`
--
ALTER TABLE `event_scheduling`
  ADD PRIMARY KEY (`scheduling_id`),
  ADD KEY `consnt_fk` (`event_id_fk`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `student_id` (`alumni_id_fk`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `company_id` (`company_id _fk`);

--
-- Indexes for table `success_story`
--
ALTER TABLE `success_story`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_fk` (`user_id_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `alumni_id_fk` (`alumni_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_scheduling`
--
ALTER TABLE `event_scheduling`
  MODIFY `scheduling_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `success_story`
--
ALTER TABLE `success_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD CONSTRAINT `consnt_fk1` FOREIGN KEY (`student_id_fk`) REFERENCES `alumni` (`student_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`alumni_id_fk`) REFERENCES `alumni` (`student_id`);

--
-- Constraints for table `event_scheduling`
--
ALTER TABLE `event_scheduling`
  ADD CONSTRAINT `consnt_fk` FOREIGN KEY (`event_id_fk`) REFERENCES `events` (`event_id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`alumni_id_fk`) REFERENCES `alumni` (`student_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`alumni_id_fk`) REFERENCES `alumni` (`student_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`alumni_id_fk`) REFERENCES `alumni` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
