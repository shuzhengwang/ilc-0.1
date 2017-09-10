-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 03:48 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ilc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cannabinoid strain data`
--

CREATE TABLE IF NOT EXISTS `cannabinoid strain data` (
  `idstraindata` int(11) NOT NULL,
  `idCultivation` int(11) NOT NULL,
  `idStorage` int(11) NOT NULL,
  `extraction method` varchar(45) DEFAULT NULL,
  `flavour` varchar(45) DEFAULT NULL,
  `cannabinoid ingredient THC + THCA %` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient CBD + CBDA %` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient THCV + THCVA` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient CBC + CBCA %` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient CBG + CBGA %` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient CBN + CBNA %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Bisabolol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS  Borneol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Camphene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Carene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Caryophyllene oxide %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS β-Carophyllene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Fenchol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Geraniol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Humulene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Limonene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Linalool %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Myrcene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Phellandrene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Terpinolene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Terpineol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Terpinene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS γ-Terpinene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Total Nerolidol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Total Ocimene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Pinene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS β-Pinene %` decimal(45,0) DEFAULT NULL,
  `Benefit` mediumtext,
  `UNDESIRED EFFECTS` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `conditionsofbeingtreated`
--

CREATE TABLE IF NOT EXISTS `conditionsofbeingtreated` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conditionsofbeingtreated`
--

INSERT INTO `conditionsofbeingtreated` (`id`, `name`) VALUES
(1, 'ADD/ADHD'),
(2, 'Addiction risk-Physical'),
(3, 'AIDS '),
(4, 'Alcoholism'),
(5, 'ALS'),
(6, 'Alzheimers'),
(7, 'Amotivational Syndrome'),
(8, 'Appetite Stimulant'),
(9, 'Arthritis'),
(10, 'Asthma'),
(11, 'Atherosclerosis'),
(12, 'Atrophie Blanche'),
(13, 'Autism'),
(14, 'Cancer-breast'),
(15, 'Cancer- colorectal'),
(16, 'Cancer- glioma/ brain'),
(17, 'Cancer- leukemia'),
(18, 'Cancer- lung'),
(19, 'Cancer- melanoma'),
(20, 'Cancer - oral'),
(21, 'Cancer-pancreatic'),
(22, 'Cancer - prostate'),
(23, 'Cancer - Risk Cannabis vs Tobacco'),
(24, 'Cancer - Skin'),
(25, 'Cancer - Testicular'),
(26, 'Cannabidiol'),
(27, 'Chemotherapy'),
(28, 'Children'),
(29, 'Chronic Cystitis CPOD'),
(30, 'Diabetes'),
(31, 'Depression'),
(32, 'Dermatitis'),
(33, 'Dronabinol'),
(34, 'Drug testing'),
(35, 'Dystonia'),
(36, 'Epilepsy'),
(37, 'Familial Mediterranean Fever'),
(38, 'Fertility'),
(39, 'Fever'),
(40, 'Fibromyalgia'),
(41, 'Gateway Theory'),
(42, 'Glaucoma'),
(43, 'Gynocology and obstetrics'),
(44, 'Heart Disease/ Cardiovascular'),
(45, 'Hepatitis'),
(46, 'Herpes'),
(47, 'Hiccups'),
(48, 'HIV / AIDS'),
(49, 'Historical studies'),
(50, 'Hormones'),
(51, 'Huntingtons Disease'),
(52, 'Hysterectomy'),
(53, 'Idiopathic Intracranial Hypertension'),
(54, 'IQ'),
(55, 'Marinol/Synthetics/ cannabinoid mixtures'),
(56, 'Meiges Syndrome'),
(57, 'Migraine/ Headache'),
(58, 'Mortality Rates'),
(59, 'MS'),
(60, 'Neurons'),
(61, 'Neuropathic pain'),
(62, 'Neuroprotectant'),
(63, 'Nutrition'),
(64, 'Obesity'),
(65, 'Osteoporosis'),
(66, 'Pain'),
(67, 'Parkinsons Disease'),
(68, 'Post Traumatic Stress Disorder'),
(69, 'Pregnancy'),
(70, 'Prenatal exposure'),
(71, 'Pruritis'),
(72, 'Sativex'),
(73, 'Schizophrenia/ Mental disorders'),
(74, 'Sickle Cell Disease'),
(75, 'Sleep modulation'),
(76, 'Spasticity'),
(77, 'Spinal Cord Injury'),
(78, 'Stroke'),
(79, 'Tea as medicine'),
(80, 'THC/tetrahydrocannabinol'),
(81, 'Tobacco vs Cannabis'),
(82, 'Tourettes Syndrome'),
(83, 'Vaporizers'),
(84, 'Wilson’s Disease');

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
  `id` int(11) NOT NULL,
  `diary_text` text NOT NULL,
  `patient_id` int(11) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`id`, `diary_text`, `patient_id`, `added_date`) VALUES
(1, 'dddd', 185, '2017-09-08 13:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `iddisease` int(11) NOT NULL,
  `diseasename` varchar(45) NOT NULL,
  `diseasetype` varchar(45) NOT NULL,
  `diagnosis` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `followups`
--

CREATE TABLE IF NOT EXISTS `followups` (
  `idfollowUps` int(11) NOT NULL,
  `treatmentNo` int(11) NOT NULL,
  `frequency` varchar(45) DEFAULT NULL,
  `efficacyInpercent` decimal(45,0) DEFAULT NULL,
  `sideEffect` mediumtext,
  `improvementInSecondaryCondition` longtext,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `followups`
--

INSERT INTO `followups` (`idfollowUps`, `treatmentNo`, `frequency`, `efficacyInpercent`, `sideEffect`, `improvementInSecondaryCondition`, `added_date`) VALUES
(1, 3, '2', '30', 'asda', 'asd', '2017-09-09 18:40:54'),
(2, 2, '4', '30', 'ss', 'sss', '2017-09-10 12:20:29'),
(3, 2, '5', '60', 'sfdsd', 'sdfsdf', '2017-09-10 12:24:49'),
(4, 2, '8', '60', 'dfg', 'dfgdfg', '2017-09-10 12:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_comments`
--

CREATE TABLE IF NOT EXISTS `follow_up_comments` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `follow_up_id` int(11) NOT NULL,
  `comment_txt` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up_comments`
--

INSERT INTO `follow_up_comments` (`id`, `doctor_id`, `follow_up_id`, `comment_txt`, `added_date`) VALUES
(1, 190, 1, 'rr rrrrr', '2017-09-09 21:37:03'),
(2, 190, 1, 'asd', '2017-09-09 21:37:58'),
(3, 190, 1, 'adadasdasd', '2017-09-09 21:40:27'),
(4, 190, 1, 'asdasdasd', '2017-09-10 11:52:46'),
(5, 190, 2, 'test', '2017-09-10 19:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `idpatient` int(11) NOT NULL,
  `user name` varchar(45) DEFAULT NULL,
  `patient name` varchar(45) NOT NULL,
  `date of birth` date NOT NULL,
  `age in month` decimal(45,0) NOT NULL,
  `weight` decimal(45,0) NOT NULL,
  `mobile number` int(11) DEFAULT NULL,
  `carer availability` varchar(45) DEFAULT NULL,
  `fingerprint` bit(64) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `region of residence` varchar(45) DEFAULT NULL,
  `state of resident` varchar(45) DEFAULT NULL,
  `local government area` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patienttreatment`
--

CREATE TABLE IF NOT EXISTS `patienttreatment` (
  `idpatientTreatment` int(11) NOT NULL,
  `patientId` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `cannabinoidRatio` varchar(45) DEFAULT NULL,
  `doseAmount` varchar(45) DEFAULT NULL,
  `minimumDaily` decimal(45,0) DEFAULT NULL,
  `maximumDaily` decimal(45,0) DEFAULT NULL,
  `timesOfTargetDoseIntake` int(11) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `conditionsOfBeingTreated` mediumtext,
  `description` mediumtext,
  `doctorComment` longtext,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patienttreatment`
--

INSERT INTO `patienttreatment` (`idpatientTreatment`, `patientId`, `doctorId`, `cannabinoidRatio`, `doseAmount`, `minimumDaily`, `maximumDaily`, `timesOfTargetDoseIntake`, `frequency`, `conditionsOfBeingTreated`, `description`, `doctorComment`, `added_date`) VALUES
(1, 185, 0, '4', '4', '3', '5', 5, 6, '4', 'ss', NULL, '2017-09-09 10:22:41'),
(2, 189, 0, '4', '4', '3', '5', 5, 6, '4', 'ss', NULL, '2017-09-09 10:23:20'),
(3, 189, 190, '3', '4', '3', '4', 15, 4, '16', 'sdddd', NULL, '2017-09-09 10:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` enum('1','2','3','4','5') COLLATE utf8_unicode_ci DEFAULT NULL,
  `doctor_id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `security_question` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `security_answer` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `certification_doc` text COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regdate` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `activate_token` text COLLATE utf8_unicode_ci NOT NULL,
  `safe_mode` enum('on','off') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'on',
  `is_block` enum('0','1') CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `dob` date DEFAULT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `phone`, `email`, `user_type`, `doctor_id`, `username`, `password`, `pincode`, `security_question`, `security_answer`, `photo`, `certification_doc`, `q1`, `a1`, `q2`, `a2`, `ip_address`, `regdate`, `last_login`, `status`, `activate_token`, `safe_mode`, `is_block`, `dob`, `added_date`) VALUES
(125, 'admin', 'admin', '', 'admin@gmail.com ', '5', 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Make and model of your first car', 'tata', 'microphone.jpg', 'office-863815_1280.jpg', '', '', '', '', '107.194.158.78', '1450721132', '0000-00-00 00:00:00', '1', '', 'on', '0', '1987-12-12', '0000-00-00 00:00:00'),
(181, 'raj', 'jadhav', '9763449614', 'raj@gmail.com', '2', 0, NULL, NULL, NULL, NULL, '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', '0000-00-00', '2016-09-10 21:48:21'),
(183, 'Rajesh', 'Divekar', '9860819294', '', '2', 0, NULL, NULL, NULL, NULL, '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', '0000-00-00', '2016-09-12 17:33:00'),
(184, 'raaj', 'jadhav', '7887787878', 'raj@gmail.com', '2', 0, NULL, NULL, NULL, NULL, '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', 'on', '0', '0000-00-00', '2016-09-16 21:58:34'),
(185, 'ss', 'ss', '', 'aa@gmail.com ', '2', 0, NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, 'selected', 'qqq', 'certainty-229115_640.jpg', 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', 'on', '0', '1987-12-12', '2017-08-27 15:18:02'),
(186, 'kkk f', 'lll', '', 'lll@h.com ', '1', 0, NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'selected', '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '1', '142941ccf61cba96fb9679e5fda6da9c', 'on', '0', '0000-00-00', '2017-08-27 17:56:41'),
(187, 'hari', 'div', '', 'jj@gmail.com', '3', 0, NULL, 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'Make and model of your first car', 's', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', '8d7248decbf8a5f490d75b5172b69f60', 'on', '0', '0000-00-00', '2017-09-04 15:55:50'),
(188, 'test', 'test', '', 'raj1@gmail.com', '1', 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'The name of your elementary school', 's', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'caeec350527b82e66e365408ff5cf3a0', 'on', '0', '1987-12-12', '2017-09-07 16:47:18'),
(189, 'amit', 'bhat', '', 'amit@gmail.com', '2', 190, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Your favorite sports team', 'resr', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', '21d3ba531714c719f775cc5a159954db', 'on', '0', '1984-12-12', '2017-09-08 14:37:54'),
(190, 'prasad', 'mull', '', 'prasa@gmail.com', '3', 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Your favorite singer', 'ttt', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'c1466a93170a0490b36ca6c38beee538', 'on', '0', '1999-09-02', '2017-09-08 14:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'General Us'),
(2, 'Patient'),
(3, 'Doctor'),
(4, 'Researcher'),
(5, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cannabinoid strain data`
--
ALTER TABLE `cannabinoid strain data`
  ADD PRIMARY KEY (`idstraindata`), ADD KEY `idCultivation_idx` (`idCultivation`), ADD KEY `idcannabinoid storage_idx` (`idStorage`);

--
-- Indexes for table `conditionsofbeingtreated`
--
ALTER TABLE `conditionsofbeingtreated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`iddisease`);

--
-- Indexes for table `followups`
--
ALTER TABLE `followups`
  ADD PRIMARY KEY (`idfollowUps`), ADD KEY `treatmentNo_idx` (`treatmentNo`);

--
-- Indexes for table `follow_up_comments`
--
ALTER TABLE `follow_up_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idpatient`), ADD KEY `username_idx` (`user name`);

--
-- Indexes for table `patienttreatment`
--
ALTER TABLE `patienttreatment`
  ADD PRIMARY KEY (`idpatientTreatment`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conditionsofbeingtreated`
--
ALTER TABLE `conditionsofbeingtreated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `followups`
--
ALTER TABLE `followups`
  MODIFY `idfollowUps` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `follow_up_comments`
--
ALTER TABLE `follow_up_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patienttreatment`
--
ALTER TABLE `patienttreatment`
  MODIFY `idpatientTreatment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=191;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cannabinoid strain data`
--
ALTER TABLE `cannabinoid strain data`
ADD CONSTRAINT `idCultivation` FOREIGN KEY (`idCultivation`) REFERENCES `cannabinoid culltivation condition` (`idCultivation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `idStorage` FOREIGN KEY (`idStorage`) REFERENCES `cannabinoid storage` (`idcannabinoid storage`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `followups`
--
ALTER TABLE `followups`
ADD CONSTRAINT `treatmentNo` FOREIGN KEY (`treatmentNo`) REFERENCES `patienttreatment` (`idpatientTreatment`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
ADD CONSTRAINT `username` FOREIGN KEY (`user name`) REFERENCES `userregistration` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
