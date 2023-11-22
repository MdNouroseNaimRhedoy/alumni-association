

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
  `company_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`student_id`, `department`, `cgpa`, `photo`, `company_id_fk`) VALUES
(5, 'cse', '92', NULL, NULL),
(34, 'cse', '55', 'c5f1e1934ee234843a7d2c241a0690feanimation_profile_pictures_12.jpg', NULL),
(41, 'cse', '78', NULL, NULL),
(63, 'cse', '81', NULL, NULL),
(11171082, 'cse', '3.80', 'bc1b60fb520ebc718815f2e1d00710f134af996ddff444391edab94abcf3c7f3.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `copmany_address` text NOT NULL,
  `compnay_website` varchar(255) NOT NULL,
  `copany_origin` tinyint(1) NOT NULL COMMENT '0= bd , 1 = foreign',
  `compnay_logo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_email`, `copmany_address`, `compnay_website`, `copany_origin`, `compnay_logo`) VALUES
(1, 'GorgeousInfoTech', 'iorgeousinfotech@abc', 'Noutn Bazar,Badda,Dhaka', 'www.infotech.com.bd', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `Time` date NOT NULL,
  `paid/unpaid` tinyint(1) NOT NULL COMMENT '0=unpaid,1=paid',
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `amount` int(11) NOT NULL,
  `alumni_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `last_date_of_application` date NOT NULL,
  `skill_requirement` int(11) NOT NULL,
  `contact_info` text NOT NULL,
  `photo` text NOT NULL,
  `alumni_id_fk` int(11) DEFAULT NULL
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

--
-- Dumping data for table `success_story`
--

INSERT INTO `success_story` (`id`, `title`, `content`, `cover_photo`, `user_id_fk`) VALUES
(5, 'Meet the Alumni - Hussain KMR Behestee - Hussain KMR Behestee', '<div class=\"desc\">\r\n<p dir=\"ltr\">Currently, Hussain KMR Behestee is holding the position of Mobile Device Specialist in a Japanese Company named K.K. Innovative Solutions. He has several years of experience in the Software Development Arena. He worked at Banglafire Solution Ltd. as Lead Software Engineer, The Jaxara IT Ltd. (Dhaka office of Most Investment LLC.), bGlobal Sourcing LLC, Dhaka Office. He has been involved with project management and development of several U.S. and Japan-based Projects. Already, He has developed and managed several websites and mobile applications which are being used by a large number of communities from different countries, such as USA, Canada, Australia, U.K., Japan and Bangladesh.&nbsp;</p>\r\n<p dir=\"ltr\">Behestee involved in developing Mobile Applications for Android and iOS. Besides this, he is also well experienced with third party multi-platform deployment environments like Genexus, Corona SDK, Sencha Touch and Ionic with Cordova. He has developed several plugins for Cordova. In a word, he is an all-rounder with a key set of skills in the field of mobile/web application development.&nbsp;</p>\r\n<p dir=\"ltr\">He completed his BSc in CSE with a major in Software Engineering from United International University, Bangladesh. His teachers and fellows loved Behestee a lot because of his proactiveness and passion. He was very interested in involving himself in several co-curricular activities such as he worked as a volunteer at ICCIT Council. Behestee obtained the Advanced Certificate For Management Professionals (ACMP) degree from the Institute of Business Administration (IBA), University of Dhaka in 2018.&nbsp;</p>\r\n<p dir=\"ltr\">Behestee is a very productive person. He is a forward-thinking natural-born leader. Lots of work and little talk- thats his way! He is a real team player who possesses very strong logic and analytical ability with a well organized and very goal-oriented person.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p dir=\"ltr\">He is closely related to the UIU CSE Alumni association and plays a vital role to co-operate and help each other to reach their goals.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"post-by\">\r\n<p class=\"text-gray\">Posted On : 03-Jan-2020</p>\r\n</div>', '10ed0f2a880da245d08be35e19c5bad69sMDvBitKvHqrM5mrn3tU88ymW6kWybRjVEIyniH.jpeg', 12),
(7, 'Meet The Alumni - Md. Tazbir Ur Rahman Bhuiyan - Md. Tazbir Ur Rahman Bhuiyan', '<div class=\"desc\">\r\n<p dir=\"ltr\">Md. Tazbir Ur Rahman Bhuiyan is currently working as a Lead Engineer at Brain Station 23 Limited. He has been working here for almost 4 years as a Senior Software Engineer from April 2016, and is promoted to Lead Engineer.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">He started his career with Proggasoft in January 2011 as a Software Engineer. After that, he was promoted to Deputy team leader position gradually. After working for almost five years, he moved to Jijoty Inc. and joined as Senior Software Engineer in November 2015.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">Tazbir is an excellent programmer with skill and dedication. He tries to follow international coding techniques &amp; tries to maintain standards. He has a strong cover over .net stack and capable of working in out of box stacks such as Linux, mobile platform and desktop application. He also explored techs such as kubernetes, docker and block chain.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">He completed his Bachelor of Science(BS) in Computer Science and Engineering at United International University in 2010. Faculties and his senior fellows of UIU loved him for his honesty and outstanding thinking capability. He was a brilliant student, and he has an in-depth knowledge of multiple technology stacks from his student life. He also involved with voluntary activities such as he worked as a Technical Trainer on IBM HyperLedger Fabric in Brain Station 23 Limited.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">Tazbir is&nbsp; productive, a multi-skilled person and he is an enthusiastic leader. He is a careful, self-motivated team player. With the understanding of design principles and software architecture, Tazbir can design and develop large scale projects, maintaining a professional relationship with fellow team members. He digs deep into a problem, and always seeks out the best solution available across multiple technology stacks. He has an excellent understanding of his work and is capable of handling technical difficulties.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">He is a family centric guy. He loves to read quran and other book daily. He loves to run after Fazr and also loves to do cycling occasionally. He gives thanks to Allah for his success and grateful to UIU CSE faculty teachers.&nbsp; In his early days in university he got his motivation to pursue programming career from honorable faculty teachers, friends and many tech figures. His immense passion to solve problems and hunger to make an impact using programming leads where he is today.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">He always pushes his juniors to explore new things and motivate them to build up their career. Tazbir can be a great asset for the upcoming technological world.</p>\r\n<p>&nbsp;</p>\r\n<p dir=\"ltr\">Tazbir is closely related to UIU CSE Alumni Association and involved in various activities of association to develop the community.&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"post-by\">\r\n<p class=\"text-gray\">Posted On : 02-Feb-2020</p>\r\n</div>', '834c086d385bbeec5bcaa56c1b12b9a8KK8hkqVeVTcCGnEt2JgBYa1UCefCsWTIqKrkRfw7.jpeg', 12);

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
  `alumni_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `account_type`, `dob`, `gender`, `address`, `phone`, `alumni_id_fk`) VALUES
(7, 'lypyfy@mailinator.com', '$2y$10$Fc4DmnyaHWrCXrtxA8fEc.GeIRtKRvgGZNvDsG5Y3OSJQ7vNWFhmO', 'Cade Roy', 2, '1989-01-05', 'male', 'Tempor sint sunt fac', '01836068947', 34),
(8, 'ml@gmail.com', '$2y$10$F9TDzGUapWydkkEprpUG.OOPdSRmZgt4fqVDwoB3PxGP5djZen6HK', 'Mottasin Lemon', 0, '2022-04-25', 'male', 'Notun Bajar, Dhaka.', '01780976220', 11171082),
(12, 'padycolop@mailinator.com', '$2y$10$fh2TQ3aWH3UgoR4v9URTEuTYCXnfHYqhSXb5ZQ0MqFNqbiP0vBUwy', 'Mark Barker', 1, '2015-08-10', 'male', 'Minima velit totam q', '01959211329', 63);

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
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `student_id` (`alumni_id_fk`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `success_story`
--
ALTER TABLE `success_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`company_id_fk`) REFERENCES `companies` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`alumni_id_fk`) REFERENCES `alumni` (`student_id`);

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
-- Constraints for table `success_story`
--
ALTER TABLE `success_story`
  ADD CONSTRAINT `success_story_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
