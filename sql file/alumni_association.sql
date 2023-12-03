-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 08:33 PM
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

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`student_id`, `department`, `cgpa`, `photo`, `company_id_fk`, `company_name`, `company_website`) VALUES
                                                                                                                           (5, 'cse', '92', NULL, NULL, '0', '0'),
                                                                                                                           (7, 'cse', '46', '5b1e002a5f6b361d78a983348d16e59110450034_564904173639156_4668494843928183671_o.jpg', NULL, 'Hilel Sears', 'https://www.remeqycacysisut.cc'),
                                                                                                                           (8, 'cse', '46', '5b1e002a5f6b361d78a983348d16e59110450034_564904173639156_4668494843928183671_o.jpg', NULL, 'Hilel Sears', 'https://www.remeqycacysisut.cc'),
                                                                                                                           (28, 'cse', '57', 'c994ad39c134840c2a1b2423a4be0752pexels-julian-paolo-dayag-1673973.jpg', NULL, '0', '0'),
                                                                                                                           (34, 'cse', '55', 'c5f1e1934ee234843a7d2c241a0690feanimation_profile_pictures_12.jpg', NULL, '0', '0'),
                                                                                                                           (39, 'cse', '18', NULL, NULL, '0', '0'),
                                                                                                                           (41, 'cse', '78', NULL, NULL, '0', '0'),
                                                                                                                           (42, 'cse', '58', NULL, NULL, '0', '0'),
                                                                                                                           (54, 'cse', '63', NULL, NULL, '0', '0'),
                                                                                                                           (58, 'cse', '79', '39e0ecafa5f625968ea34f3ab05e9145pexels-julian-paolo-dayag-1673973.jpg', NULL, '0', '0'),
                                                                                                                           (63, 'cse', '81', NULL, NULL, '0', '0'),
                                                                                                                           (69, 'cse', '21', NULL, NULL, 'Burton Humphrey', 'https://www.xuwequbyhu.info'),
                                                                                                                           (171112, 'cse', '74', '29caed8a6aa350cefd27a2a68e060d5510450034_564904173639156_4668494843928183671_o.jpg', NULL, 'Jamal Gentry', 'https://www.vywibuzujamuham.info'),
                                                                                                                           (11171082, 'cse', '3.80', 'bc1b60fb520ebc718815f2e1d00710f134af996ddff444391edab94abcf3c7f3.png', NULL, '0', '0'),
                                                                                                                           (11181112, 'cse', '3.84', NULL, NULL, '0', '0'),
                                                                                                                           (17145656, 'cse', '20', '6a9b3a9e4e543bdb9a1385ef3dd9857e8ca24aaa7ef02ffd84713bcb3f5b7b9e.jpg', NULL, '0', '0');

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

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `date`, `alumni_id_fk`, `photos_3`, `photos_1`, `photos_2`, `event_description`, `location`) VALUES
                                                                                                                                                 (5, 'Pascale Wynn', '1973-07-24', 11181112, NULL, '6742b662ceab360d111a6d0cd8431a7a7f057fd7fe69a4a58fce386e4e59ff1a.jpg', NULL, '<p>&nbsp;cxfsdgsdgsdgsd fgdsfsdfdsa ffdsafas fsdasafdafaf fadsfaf afasdfsa fadsfafas afsdfsaf dsafasfadsfas sadfasfasfa fadsfafa fasdfsafasdfdsa fasdfadfaadfsa dfsafafas fasdfas fdsafasd fdsadasff afdasdfasdf \n asfdvzxcv</p>', 'Sade Oneal'),
                                                                                                                                                 (6, 'Pascale Wynn', '1973-07-24', 11181112, NULL, 'e0e4f856739b18b592d3263712884fe47f057fd7fe69a4a58fce386e4e59ff1a.jpg', 'a883e35ebb8d9a388ae56d4a6f549685609f1a38d24a7-large.jpg', '<p>&nbsp;cxvzxcv</p>', 'Sade Oneal'),
                                                                                                                                                 (7, 'Pascale Wynn', '1973-07-24', 11181112, '785ba2ad80ed6c5f5a61100420f9969a34af996ddff444391edab94abcf3c7f3.png', 'e78c99bad717956c3d434704e9212dce7f057fd7fe69a4a58fce386e4e59ff1a.jpg', '28a12e3bf570b5542c0913297f9469d5609f1a38d24a7-large.jpg', '<p>&nbsp;cxvzxcv</p>', 'Sade Oneal'),
                                                                                                                                                 (8, 'Kiona Sanchez', '1982-01-31', 11181112, '847b63e2c396a0b49f574ce848c2005b34af996ddff444391edab94abcf3c7f3.png', '94401269ecd71f775c668b615177ec617f057fd7fe69a4a58fce386e4e59ff1a.jpg', '991a6d814a2eec31fc4ee20fdabdb0ea8ca24aaa7ef02ffd84713bcb3f5b7b9e.jpg', '<p>fdsdfsad</p>', 'Steven Frye'),
                                                                                                                                                 (9, 'Kiona Sanchez', '1982-01-31', 11181112, 'd510f6f93a11c1839e8d49d5bbe6c2ee34af996ddff444391edab94abcf3c7f3.png', '374672511f1851331aa501a934994f4f7f057fd7fe69a4a58fce386e4e59ff1a.jpg', '3b48fd81d77fe58ed020b4b8fb7ab4e58ca24aaa7ef02ffd84713bcb3f5b7b9e.jpg', '<p>fdsdfsad</p>', 'Steven Frye'),
                                                                                                                                                 (10, 'Iliana Mcmillan', '2005-07-17', 11181112, '434714c6216eb7a12f012018393aa5b8animation_profile_pictures_12.jpg', '94e8951bed533707462f6fc136f16aae10450034_564904173639156_4668494843928183671_o.jpg', '3e61030f1fa6ed65dd5dc871a706a1fe609f1a38d24a7-large.jpg', '<p>dsfs</p>', 'Stephen Hatfield');

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

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `created_at`, `designation`, `salary`, `last_date_of_application`, `skill_requirement`, `contact_info`, `photo`, `alumni_id_fk`, `responsibilities`, `job_nature`, `apply_link`, `company_name`, `job_location`, `experience`, `no_of_vacancy`, `joining_date`, `email_for_online_cv`) VALUES
                                                                                                                                                                                                                                                                                                                         (4, '2022-05-13', 'raqehub@mailinator.com', 10, '1978-05-17', '<p>skills :c++</p>', '<p>123456</p>', NULL, 11181112, '<p>job responsibilities</p>', 'jory@mailinator.com', NULL, 'fiha@mailinator.com', 'duwiseqer@mailinator.com', 'wufehif@mailinator.com', 5, '1984-10-07', NULL),
                                                                                                                                                                                                                                                                                                                         (5, '2022-05-13', 'raqehub@mailinator.com', 10, '1978-05-17', '<p>skills :c++</p>', '<p>123456</p>', 'b922327d74375c1c1513dec2a86a6171pexels-julian-paolo-dayag-1673973.jpg', 11181112, '<p>job responsibilities</p>', 'jory@mailinator.com', 'bavaxo@mailinator.com', 'fiha@mailinator.com', 'duwiseqer@mailinator.com', 'wufehif@mailinator.com', 5, '1984-10-07', 'vyke@mailinator.com');

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

--
-- Dumping data for table `success_story`
--

INSERT INTO `success_story` (`id`, `title`, `content`, `cover_photo`, `user_id_fk`) VALUES
                                                                                        (5, 'Meet the Alumni - Hussain KMR Behestee - Hussain KMR Behestee', '<div class=\"desc\">\r\n<p dir=\"ltr\">Currently, Hussain KMR Behestee is holding the position of Mobile Device Specialist in a Japanese Company named K.K. Innovative Solutions. He has several years of experience in the Software Development Arena. He worked at Banglafire Solution Ltd. as Lead Software Engineer, The Jaxara IT Ltd. (Dhaka office of Most Investment LLC.), bGlobal Sourcing LLC, Dhaka Office. He has been involved with project management and development of several U.S. and Japan-based Projects. Already, He has developed and managed several websites and mobile applications which are being used by a large number of communities from different countries, such as USA, Canada, Australia, U.K., Japan and Bangladesh.&nbsp;</p>\r\n<p dir=\"ltr\">Behestee involved in developing Mobile Applications for Android and iOS. Besides this, he is also well experienced with third party multi-platform deployment environments like Genexus, Corona SDK, Sencha Touch and Ionic with Cordova. He has developed several plugins for Cordova. In a word, he is an all-rounder with a key set of skills in the field of mobile/web application development.&nbsp;</p>\r\n<p dir=\"ltr\">He completed his BSc in CSE with a major in Software Engineering from United International University, Bangladesh. His teachers and fellows loved Behestee a lot because of his proactiveness and passion. He was very interested in involving himself in several co-curricular activities such as he worked as a volunteer at ICCIT Council. Behestee obtained the Advanced Certificate For Management Professionals (ACMP) degree from the Institute of Business Administration (IBA), University of Dhaka in 2018.&nbsp;</p>\r\n<p dir=\"ltr\">Behestee is a very productive person. He is a forward-thinking natural-born leader. Lots of work and little talk- thats his way! He is a real team player who possesses very strong logic and analytical ability with a well organized and very goal-oriented person.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p dir=\"ltr\">He is closely related to the UIU CSE Alumni association and plays a vital role to co-operate and help each other to reach their goals.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"post-by\">\r\n<p class=\"text-gray\">Posted On : 03-Jan-2020</p>\r\n</div>', '10ed0f2a880da245d08be35e19c5bad69sMDvBitKvHqrM5mrn3tU88ymW6kWybRjVEIyniH.jpeg', 12),
                                                                                        (7, 'Meet The Alumni - Md. Tazbir Ur Rahman Bhuiyan - Md. Tazbir Ur Rahman Bhuiyan', '<div class=\"desc\">\r\n<p dir=\"ltr\">Md. Tazbir Ur Rahman Bhuiyan is currently working as a Lead Engineer at Brain Station 23 Limited. He has been working here for almost 4 years as a Senior Software Engineer from April 2016, and is promoted to Lead Engineer.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">He started his career with Proggasoft in January 2011 as a Software Engineer. After that, he was promoted to Deputy team leader position gradually. After working for almost five years, he moved to Jijoty Inc. and joined as Senior Software Engineer in November 2015.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">Tazbir is an excellent programmer with skill and dedication. He tries to follow international coding techniques &amp; tries to maintain standards. He has a strong cover over .net stack and capable of working in out of box stacks such as Linux, mobile platform and desktop application. He also explored techs such as kubernetes, docker and block chain.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">He completed his Bachelor of Science(BS) in Computer Science and Engineering at United International University in 2010. Faculties and his senior fellows of UIU loved him for his honesty and outstanding thinking capability. He was a brilliant student, and he has an in-depth knowledge of multiple technology stacks from his student life. He also involved with voluntary activities such as he worked as a Technical Trainer on IBM HyperLedger Fabric in Brain Station 23 Limited.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">Tazbir is&nbsp; productive, a multi-skilled person and he is an enthusiastic leader. He is a careful, self-motivated team player. With the understanding of design principles and software architecture, Tazbir can design and develop large scale projects, maintaining a professional relationship with fellow team members. He digs deep into a problem, and always seeks out the best solution available across multiple technology stacks. He has an excellent understanding of his work and is capable of handling technical difficulties.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">He is a family centric guy. He loves to read quran and other book daily. He loves to run after Fazr and also loves to do cycling occasionally. He gives thanks to Allah for his success and grateful to UIU CSE faculty teachers.&nbsp; In his early days in university he got his motivation to pursue programming career from honorable faculty teachers, friends and many tech figures. His immense passion to solve problems and hunger to make an impact using programming leads where he is today.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">He always pushes his juniors to explore new things and motivate them to build up their career. Tazbir can be a great asset for the upcoming technological world.</p>\r\n<p>&nbsp;</p>\r\n<p dir=\"ltr\">Tazbir is closely related to UIU CSE Alumni Association and involved in various activities of association to develop the community.&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"post-by\">\r\n<p class=\"text-gray\">Posted On : 02-Feb-2020</p>\r\n</div>', '834c086d385bbeec5bcaa56c1b12b9a8KK8hkqVeVTcCGnEt2JgBYa1UCefCsWTIqKrkRfw7.jpeg', 12),
                                                                                        (9, 'Story of a pioneer from first batch - Saifur Rahman Sazib', '<div class=\"desc\">\r\n<p dir=\"ltr\">Saifur Rahman Sazib is a Lead Engineer at <strong>Objectstream Inc, USA</strong>. He is actively working with his client Oklahoma Workers Compensation Commission (OKWCC) to automate their 20 years old systems. Federal Aviation Administration USA (FAA) is one of his other clients.</p>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<p dir=\"ltr\">Saif has a vast experience of application development for US Federal, State, Healthcare, Retailer industries. In 2005, he started his career as a Software Engineer with Millennium Information Solution Ltd (MISLBD) followed by United IT GlobalNet Ltd (UIGN, a Japan-Bangladesh joint venture startup). Then in 2007, he moved to a Sr. Software Engineer role at Integrated Software LLC. As a guest industry expert, he also taught several programming courses at United International University (UIU). After six years of successful contribution, in 2011, he moved to the USA to pursue his MSc degree at Maharishi University of Management. Later he obtained his MSc in Computer Science and Engineering (CSE) in 2013. While he was in his ongoing MSc course abroad, he also continued his career with FedEx World Tech Center, LifeWay Christian Resources, Podiatry Insurance Company of America (PICA). He also worked for HCA Healthcare for 2 years, and finally in 2018, he got an offer to join as a Lead Engineer/Architect at Objectstream Inc.</p>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<p dir=\"ltr\">Saif was one of the pioneers in the Department of Computer Science and Engineering (CSE) at UIU. He has completed his BSc in CSE in 2005. He used to involve himself in various co-curricular activities. While his was in campus, Saif got enormous support and guidance from his beloved teachers and fellows.</p>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<p dir=\"ltr\">Professionally, Saif is a cloud developer. Dealing with challenges is a part of his everyday life. He believes in solving problems in &ldquo;pen and paper&rdquo; first, then to determine optimum solutions as per his team&rsquo;s capacity. Saif possesses a real professional attitude, and a \"think outside the box\" ability that surely makes him differentiate from the crowd.&nbsp;</p>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<p dir=\"ltr\">He intimately involves himself with UIU CSE Alumni Association and co-operates, and plays a vital role as an advisor and mentor to take the association to the next level.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"post-by\">\r\n<p class=\"text-gray\">Posted On : 11-Nov-2019</p>\r\n</div>', 'b3775553aee97298ce06ce27cd7aece8AsiOUkqEaC6zMlJLc0g7aDY2iugBrCNBQLZQEoEJ.jpg', 8),
                                                                                        (10, 'Harum et et ea in om', '<p>sadfsaf</p>', 'c802d0ce84a31f9a81802f134ff6d33eIMG_5323.JPG', 15);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `account_type`, `dob`, `gender`, `address`, `phone`, `alumni_id_fk`, `company_name`) VALUES
                                                                                                                                                 (15, 'mrhedoy181112@bscse.uiu.ac.bd', '$2y$10$f1XMTRWoqlJI.f7T6kBK1uk8U.ZWiHZTWVZuzAURAJFLe1QaouPsG', 'Md.Nourose Naim Rhedoy', 0, '1999-12-13', 'male', 'Saidnagar', '01707079061', 11181112, NULL),
                                                                                                                                                 (17, 'herubyl@mailinator.com', '$2y$10$BVNFWjMDuGYv1eH5smIKiOhxVTdPMqBC/ARGNFRFfDZMuxwYZiksa', 'Zeph Sherman', 1, '2008-07-23', 'male', 'Sed aliqua Unde qui', '01959211329', 58, NULL),
                                                                                                                                                 (18, 'tewuc@mailinator.com', '$2y$10$ttdCz5GCKrWmpo5hUVP1XeK3MBlXuZQImCAaZKtqNruK4iNOZQ6BW', 'Summer Barrera', 0, '1973-10-08', 'male', 'Accusantium expedita', '01836068947', 39, NULL),
                                                                                                                                                 (19, 'myzoduhomu@mailinator.com', '$2y$10$uEvwF.0rxl1kTa5SHYBubu/kiAfwwMi6IbvFxfr2QsdHIKSN3rwtm', 'Shelley Boyer', 2, '1985-08-13', 'female', 'Aute tenetur aliquip', '01780976229', 17145656, NULL),
                                                                                                                                                 (20, 'cekup@mailinator.com', '$2y$10$P03SVgxyG9yA6wUpgQq0ee3cUGibuGw/1Ts2ijyJafqSfMvwvu73q', 'Chester Thompson', 2, '1983-05-26', 'female', 'Proident voluptate ', '01780975220', 171112, NULL),
                                                                                                                                                 (21, 'kufaz@mailinator.com', '$2y$10$c7cJLYohCIEwoDSYAhjeJOdQWiCl6nKYmKp8.pqfbpv48KRYBc2je', 'Portia Bentley', 2, '1984-09-19', 'female', 'Quidem enim accusant', '01780974220', 7, NULL),
                                                                                                                                                 (22, 'siqacytu@mailinator.com', '$2y$10$jDd.ER6t0Ga.VyP3E9uxd.T8KfCKaaEB7SwYZf3ru48gphrh1s9UW', 'Galena Alvarez', 2, '1999-10-07', 'female', 'Sint aliquam minim n', '01836067941', 69, NULL);

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
    MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event_scheduling`
--
ALTER TABLE `event_scheduling`
    MODIFY `scheduling_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
    MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `success_story`
--
ALTER TABLE `success_story`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
    ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`company_id_fk`) REFERENCES `companies` (`id`);

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
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
    ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`company_id _fk`) REFERENCES `companies` (`id`);

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
