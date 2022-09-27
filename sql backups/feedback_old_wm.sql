-- MariaDB dump 10.19  Distrib 10.9.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: feedback
-- ------------------------------------------------------
-- Server version	10.9.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_code` int(11) DEFAULT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES
(1,'Basic Mathematics','R18SC1701',40,'@mda'),
(2,'Engineering Mathematics','R18SC1710',40,NULL),
(3,'Basic Physics','R18SC1703',40,NULL),
(4,'Engineering Physics','R18SC1706',40,NULL),
(5,'English','R18SC1707',40,NULL),
(6,'Business Communication','R18SC1708',40,NULL),
(7,'Engineering Graphic Skills','R18ME1210',40,NULL),
(8,'Computer Fundamentals','R18CP1401',40,NULL),
(9,'Electronic Devices','R18EX1415',40,NULL),
(10,'Industrial Org.','R18ME2203',40,NULL),
(11,'Electrical Engineering','R18EE2310',40,NULL),
(12,'Workshop Practice','R18ME2210',40,NULL),
(13,'Marketing','R18EE2302',40,NULL),
(14,'Entrepreneurship Development','R18ME2208',40,NULL),
(15,'Aptitude Test Skills','R18SC1715',40,NULL),
(16,'Environmental Studies','R18CP2401',40,NULL),
(17,'Programming in','R18CP3401',40,NULL),
(18,'Operating Systems','R18CP3402',40,NULL),
(19,'Data Structures R18CP3401','R18CP3403',40,NULL),
(20,'Object Oriented Programming with','R18CP3404',40,NULL),
(21,'Microprocessors','R18CP3405',40,NULL),
(22,'Database Management Systems','R18CP3406',40,NULL),
(23,'Computer Networks','R18CP3407',40,NULL),
(24,'Software Engineering','R18CP3408',40,NULL),
(25,'Data Communication','R18CP3409',40,NULL),
(26,'Digital Techniques','R18EX3415',40,NULL),
(27,'Web Design','R18CP4401',40,NULL),
(28,'User Interface Programming','R18CP4402',40,NULL),
(29,'P. C. Maintenance','R18CP4403',40,NULL),
(30,'Linux Operating System R18CP3402','R18CP4404',40,NULL),
(31,'Project and Seminar 100 Credits','R18CP4405',40,NULL),
(32,'Industrial Training','R18CP4406',40,NULL),
(33,'Java Programming R18CP3404','R18CP5401',40,NULL),
(34,'Multimedia Techniques','R18CP5402',40,NULL),
(35,'PHP Programming','R18CP5403',40,NULL),
(36,'Mobile Computing','R18CP5404',40,NULL),
(37,'Python Programming','R18CP5405',40,NULL),
(38,'Computer Security R18CP3407','R18CP5406',40,NULL),
(39,'Advanced Java Programming','R18CP5407',40,NULL),
(40,'Advanced Computer Networks R18CP3407','R18CP5408',40,NULL),
(41,'Animation Techniques','R18CP5409',40,NULL),
(42,'Network Administration R18CP3407','R18CP5410',40,NULL),
(43,'Mechanical sub','R18ME3022',21,NULL);
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_id` int(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES
(1,10,'Civil Engineering (Aided)'),
(2,20,'Mechanical Engineering (Aided)'),
(3,21,'Mechanical Engineering (Un-Aided)'),
(4,30,'Electrical Engineering'),
(5,40,'Computer Engineering'),
(6,50,'Electronics And Telecommuncation (Aided)'),
(7,51,'Electronics And Telecommuncation (Un-Aided)');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedbacks` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `faculty_name` varchar(255) DEFAULT NULL,
  `feedback_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `total_students` int(11) DEFAULT NULL,
  `filled_students` int(11) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedbacks`
--

LOCK TABLES `feedbacks` WRITE;
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
INSERT INTO `feedbacks` VALUES
(3,'Basic Mathematics','R18SC1701','@mda','2022-08-25',0,NULL,0),
(4,'Engineering Mathematics','R18SC1710','Rupali Shete','2022-08-25',0,NULL,0),
(5,'Basic Physics','R18SC1703','@mda','2022-08-25',0,NULL,0),
(6,'Engineering Physics','R18SC1706','@mda','2022-08-25',0,NULL,0),
(7,'English','R18SC1707','@mda','2022-08-25',0,NULL,0),
(8,'Electronic Devices','R18EX1415','@mda','2022-08-25',0,NULL,0),
(9,'Workshop Practice','R18ME2210','@mda','2022-08-25',0,NULL,0),
(10,'Data Structures R18CP3401','R18CP3403','@mda','2022-08-25',0,NULL,0),
(11,'Network Administration R18CP3407','R18CP5410','@mda','2022-08-25',0,NULL,0),
(12,'Aptitude Test Skills','R18SC1715','@mda','2022-08-25',0,NULL,0),
(13,'Business Communication','R18SC1708','@mda','2022-08-29',0,NULL,0);
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_ques`
--

DROP TABLE IF EXISTS `form_ques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_ques` (
  `form_id` int(11) DEFAULT NULL,
  `question_title` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_ques`
--

LOCK TABLES `form_ques` WRITE;
/*!40000 ALTER TABLE `form_ques` DISABLE KEYS */;
INSERT INTO `form_ques` VALUES
(0,'1. Uniform Coverage of Syllabus','[\"\"]','slider'),
(0,'2. Has the Teacher explained the subject by relating it to practical examples?','[\"\"]','slider'),
(0,'3. Teacher\'s effectiveness in terms of Technical content, Communication Skills and use of Teaching aids.','[\"\"]','slider'),
(0,'4. Support for the development of Students skill : practical Demonstration and Hands-on Training','[\"\"]','slider'),
(0,'5. Does the teacher has clarity of students expectations?','[\"\"]','slider'),
(0,'6. Does the teacher provides Motivation and Inspiration for students to learn?','[\"\"]','slider'),
(0,'7. Does the teacher shows willingness to offer help and advice to students?','[\"\"]','slider');
/*!40000 ALTER TABLE `form_ques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_responses`
--

DROP TABLE IF EXISTS `form_responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_responses` (
  `student_id` int(11) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `filldate` date DEFAULT NULL,
  `response_json` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_responses`
--

LOCK TABLES `form_responses` WRITE;
/*!40000 ALTER TABLE `form_responses` DISABLE KEYS */;
/*!40000 ALTER TABLE `form_responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forms` (
  `form_id` int(11) NOT NULL,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ini_date` date DEFAULT NULL,
  `instructions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `semester` int(5) NOT NULL,
  `course_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_code` int(11) DEFAULT NULL,
  `group_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_ques` tinyint(4) NOT NULL DEFAULT 1,
  `total_students` int(15) NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forms`
--

LOCK TABLES `forms` WRITE;
/*!40000 ALTER TABLE `forms` DISABLE KEYS */;
INSERT INTO `forms` VALUES
(1,'Rupali Shete','2022-09-23',' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ',0,4,'R18SC1701',40,'1',1,66,0),
(2,'Rupali Shete','2022-09-24',' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ',0,5,'R18CP4405',40,'2',1,49,0);
/*!40000 ALTER TABLE `forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `deptcode` int(50) NOT NULL,
  `activeRoll` text NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `student_count` int(11) DEFAULT NULL,
  `fdate` date DEFAULT NULL,
  `req` tinyint(4) DEFAULT 0,
  `accepted` tinyint(4) DEFAULT 0,
  `rejected` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES
(1,4,'R18SC1701',40,'[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,204001,204002,204003,204004,204005,204006,204007,204008,204009,204010,204011,204012,204013,204014,204015,204016,204017,204018,204019,204020,204021,204022,204023,204024,204025,204026,204027,204028,204029,204030,204031,204032,204033]',2,19,66,'2022-09-23',0,1,0),
(2,5,'R18CP4405',40,'[204001,204002,204003,204004,204005,204006,204007,204008,204009,204010,204011,204012,204013,204014,204015,204016,204017,204018,204019,204020,204021,204022,204023,204024,204025,204026,204027,204028,204029,204030,204031,204032,204033,204034,204035,204036,204037,204038,204039,204040,204041,204042,204043,204044,204045,204046,204047,204048,204049]',2,20,49,'2022-09-24',0,1,0);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passwd` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT 'Student',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flog` tinyint(1) NOT NULL DEFAULT 1,
  `student_groups` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES
(1,'admin','21232f297a57a5a743894a0e4a801fc3','Admin','Rupali Shete',1,''),
(2,'teacher','8d788385431273d11e8b43bb78f3aa41','Faculty','Rupali Shete',1,''),
(186,'194001','aacf6586b396ee6922d0f5912d13c879','Student','Student',1,';1;'),
(187,'194002','9c9fbb57059c2f3be65ae5e183d758e1','Student','Student',1,';1;'),
(188,'194003','48d31eb6df6dfb112badd863ddcf9168','Student','Student',1,';1;'),
(189,'194004','66eb19352efa55a121b3f5334eb037cf','Student','Student',1,';1;'),
(190,'194005','7edf3d5b79d579723b48c1f75aed889d','Student','Student',1,';1;'),
(191,'194006','824a2867b48467d025906445b556276f','Student','Student',1,';1;'),
(192,'194007','c5059085300767df3c77da7cc7a9d495','Student','Student',1,';1;'),
(193,'194008','d25cff61ddb64b235eed46433c1821e6','Student','Student',1,';1;'),
(194,'194009','067b1d2c596f7a6c5c6b6654cb4a07a0','Student','Student',1,';1;'),
(195,'194010','96f35439733d29989a1464ace9b8afe3','Student','Student',1,';1;'),
(196,'194011','816b845348653c5da835b9a58bd0b00a','Student','Student',1,';1;'),
(197,'194012','f8e9f0589660a13c2eb633c2b83c19e2','Student','Student',1,';1;'),
(198,'194013','2cc7dd07ea14571fe5ceb05d73c99e29','Student','Student',1,';1;'),
(199,'194014','15e82e1dca4e473d3d428a0c58f118fe','Student','Student',1,';1;'),
(200,'194015','93ccb7df4958550e95e5d3e9f5c38cf6','Student','Student',1,';1;'),
(201,'194016','6ecd00d8a3555427659fa7d9b51a5b1a','Student','Student',1,';1;'),
(202,'194017','c2fdabc2b1af1fed2864e9ea304147e0','Student','Student',1,';1;'),
(203,'194018','aac528515d11267e71553403b0faa03a','Student','Student',1,';1;'),
(204,'194019','29d2a18b73901cf7da7d9fd20f99dd40','Student','Student',1,';1;'),
(205,'194020','015b9e1f93baeb95f155fd4e53d8e252','Student','Student',1,';1;'),
(206,'194021','c6c8bc184efa9e2785ab5af68dc10e05','Student','Student',1,';1;'),
(207,'194022','d0eae6968d95cd9af47f34e217582da7','Student','Student',1,';1;'),
(208,'194023','79008245016a739bb0a8ea14efc3e513','Student','Student',1,';1;'),
(209,'194024','8330f09177fd12af0aca71089532926a','Student','Student',1,';1;'),
(210,'194025','4a0c19c680aa3a4b6778c9fe1e38cf8e','Student','Student',1,';1;'),
(211,'194026','99e65edbec9f746b3667070c2af0d905','Student','Student',1,';1;'),
(212,'194027','f8f4038b46691c53029435d5d814a57f','Student','Student',1,';1;'),
(213,'194028','90db519548cf47c19c6520a8baf2f805','Student','Student',1,';1;'),
(214,'194029','dcb6e36579992baa0f211335d518f22c','Student','Student',1,';1;'),
(215,'194030','db0877211fc67d4c5e9498e61b23c8aa','Student','Student',1,';1;'),
(216,'194031','42d5b165cd2022479a814f74e6d522f9','Student','Student',1,';1;'),
(217,'194032','35471bbb1d08e091aadfe7d143e86129','Student','Student',1,';1;'),
(218,'194033','0a9a238d5875f3c4848ab42555411e01','Student','Student',1,';1;'),
(219,'204001','fd165d507f77d246c3dd27d0da02c93e','Student','Student',1,';1;;2;'),
(220,'204002','164da6583dcd7ea95c366bb174bd2f7b','Student','Student',1,';1;;2;'),
(221,'204003','8953f32854083a1eb3d6e0371c757b1a','Student','Student',1,';1;;2;'),
(222,'204004','87cc369564a60ac2a2c2d7cfeb4e12f4','Student','Student',1,';1;;2;'),
(223,'204005','1348b0f9ab1e2e6df45de039a0bb8e76','Student','Student',1,';1;;2;'),
(224,'204006','9228ed78853415a03761388935dee8be','Student','Student',1,';1;;2;'),
(225,'204007','431f646cbbcaa2ee2f540d5c035a05ec','Student','Student',1,';1;;2;'),
(226,'204008','6d5fb6202a03c35727794fc681e05588','Student','Student',1,';1;;2;'),
(227,'204009','70439a2f4c61c5bc4a217925c00fac9a','Student','Student',1,';1;;2;'),
(228,'204010','5133d7ab8d29af5a514321ff190faa29','Student','Student',1,';1;;2;'),
(229,'204011','d7e0596c30e1c30b744459d5898ac038','Student','Student',1,';1;;2;'),
(230,'204012','2b7b701df4cf5180dd5a8bb101b96321','Student','Student',1,';1;;2;'),
(231,'204013','facdb98a89141587174f1191f648061d','Student','Student',1,';1;;2;'),
(232,'204014','605101ab2545d5cbec92ee3c4ae048e9','Student','Student',1,';1;;2;'),
(233,'204015','d4b89785ea549748b33490fd537bbab8','Student','Student',1,';1;;2;'),
(234,'204016','0fc75bba75ed92317fe03a1218bdb848','Student','Student',1,';1;;2;'),
(235,'204017','90022f3614ddf6ee6afb9bfa3c0a019d','Student','Student',1,';1;;2;'),
(236,'204018','e82294259ba5798eb9563a12d3f3c8c5','Student','Student',1,';1;;2;'),
(237,'204019','5ef486b5942a0996d45902c22a97ff00','Student','Student',1,';1;;2;'),
(238,'204020','da9f4bfc118964f296ff89b7abbfe872','Student','Student',1,';1;;2;'),
(239,'204021','b6673ba794ca5a02e729f1cf1e493e09','Student','Student',1,';1;;2;'),
(240,'204022','6a3e259e86d9740e04443861e6107f3c','Student','Student',1,';1;;2;'),
(241,'204023','a5fc859e9c4a1a6c5e7edeab9cc0debc','Student','Student',1,';1;;2;'),
(242,'204024','7299a42d01481cdc42a4750626e21cc2','Student','Student',1,';1;;2;'),
(243,'204025','c91e79ac562706b605e1f7111a9ef11e','Student','Student',1,';1;;2;'),
(244,'204026','2138b8d283123f5b9f449a0e0968fb7e','Student','Student',1,';1;;2;'),
(245,'204027','37081afc2fad070065ecf92586454402','Student','Student',1,';1;;2;'),
(246,'204028','0b0d4501b2ab4559e8e5a6d203a7984e','Student','Student',1,';1;;2;'),
(247,'204029','f4c79710efdac40a5a0c03b052e86a22','Student','Student',1,';1;;2;'),
(248,'204030','c68c06208118ede6ed4373392130a011','Student','Student',1,';1;;2;'),
(249,'204031','d165fdb801be252fa67136dd33009ca3','Student','Student',1,';1;;2;'),
(250,'204032','fa2b6d81de7184f08518da6aa413f930','Student','Student',1,';1;;2;'),
(251,'204033','ab9997948f95f222c30a9f1f74ea27b0','Student','Student',1,';1;;2;'),
(252,'204034','df37e8a1a7cc31975b7501a0d0e373ee','Student','Student',1,';2;'),
(253,'204035','4d6de369a9f34e986b9d0b708fa81608','Student','Student',1,';2;'),
(254,'204036','ba8bd343c80054a73d1474fcf601e0ec','Student','Student',1,';2;'),
(255,'204037','6b5164a8d014ee16fea26af0119d9bd4','Student','Student',1,';2;'),
(256,'204038','532becac588fefeba9ffb12a427cf1e2','Student','Student',1,';2;'),
(257,'204039','96ed73d8a1b0030aa549ca3b33551994','Student','Student',1,';2;'),
(258,'204040','d129dd2f36715820a70436abc38e40e7','Student','Student',1,';2;'),
(259,'204041','47906b2fa128ff7902d730600e0d75fd','Student','Student',1,';2;'),
(260,'204042','10418058c09bb1f041db0f3748e0dd67','Student','Student',1,';2;'),
(261,'204043','75fe541bac332e98400543046f8b1fa4','Student','Student',1,';2;'),
(262,'204044','b09f7e5e51bfab30d406fb86255aa5e8','Student','Student',1,';2;'),
(263,'204045','ca2d8fde9ae792a4fcc739b2be3bc690','Student','Student',1,';2;'),
(264,'204046','604b79027f2814f9853109bb456e850c','Student','Student',1,';2;'),
(265,'204047','0160e57afeff9bd24c0790bdd12961d8','Student','Student',1,';2;'),
(266,'204048','1d87027695dda28f8d329f80f563adcf','Student','Student',1,';2;'),
(267,'204049','503d3e3699111485a63aff87c37da5df','Student','Student',1,';2;');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-27 18:26:37
