-- MariaDB dump 10.19  Distrib 10.9.3-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: feedback
-- ------------------------------------------------------
-- Server version	10.9.3-MariaDB

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
  `course_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_code` int(11) DEFAULT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES
(1,'CN - Theory','R18CP4403 - Theory',40,NULL),
(2,'Suggestions - Theory','R18Suggestions - Theory',40,NULL);
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
(6,70,'Electronics And Telecommuncation (Aided)'),
(7,71,'Electronics And Telecommuncation (Un-Aided)'),
(8,50,'Computer Engineering and IoT');
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
(0,'7. Does the teacher shows willingness to offer help and advice to students?','[\"\"]','slider'),
(2,'Please Enter Your Valuable Feedback ','[]','long');
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
INSERT INTO `form_responses` VALUES
(194033,2,'2022-10-20','{\"longans1\":\"I would really like it if office staff atleast pretend like they are helping us :D\"}');
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
  `viewed` tinyint(1) NOT NULL DEFAULT 0,
  `academic_year` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forms`
--

LOCK TABLES `forms` WRITE;
/*!40000 ALTER TABLE `forms` DISABLE KEYS */;
INSERT INTO `forms` VALUES
(1,NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,0,0,NULL),
(2,'Rupali Shete','2022-10-20',' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ',0,1,'R18Suggestions - Theory',40,'2',2,34,1,'2022-2023'),
(1,'Rupali Shete','2022-10-20',' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ',0,4,'R18CP4403 - Theory',40,'1',1,33,1,'2022-2023'),
(4,'Rupali Shete','2022-10-24',' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ',1,1,'R18Suggestions - Theory',40,'4',1,34,0,'2022-2023');
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
  `sugg` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES
(1,4,'R18CP4403 - Theory',40,'[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033]',2,19,33,'2022-10-20',0,1,0,0),
(2,1,'R18Suggestions - Theory',40,'[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033]',2,0,34,'2022-10-20',0,1,0,1),
(3,1,'R18CP4403 - Theory',40,'[\"all_dept\",194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033]',2,0,34,NULL,0,0,0,0),
(4,1,'R18Suggestions - Theory',40,'[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033]',2,0,34,'2022-10-24',0,1,0,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=373 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES
(1,'admin','996408b028ec985b02f800695397391e','Admin','Rupali Shete',0,NULL),
(2,'teacher','8d788385431273d11e8b43bb78f3aa41','Faculty','Rupali Shete',0,NULL),
(295,'VSA','5b9f87a718edd65e8d67b6d78704778b','Faculty','VSA',1,NULL),
(340,'194001','aacf6586b396ee6922d0f5912d13c879','Student','Student',1,';1;;2;;1;;2;;4;'),
(341,'194002','9c9fbb57059c2f3be65ae5e183d758e1','Student','Student',1,';1;;2;;1;;2;;4;'),
(342,'194003','48d31eb6df6dfb112badd863ddcf9168','Student','Student',1,';1;;2;;1;;2;;4;'),
(343,'194004','66eb19352efa55a121b3f5334eb037cf','Student','Student',1,';1;;2;;1;;2;;4;'),
(344,'194005','7edf3d5b79d579723b48c1f75aed889d','Student','Student',1,';1;;2;;1;;2;;4;'),
(345,'194006','824a2867b48467d025906445b556276f','Student','Student',1,';1;;2;;1;;2;;4;'),
(346,'194007','c5059085300767df3c77da7cc7a9d495','Student','Student',1,';1;;2;;1;;2;;4;'),
(347,'194008','d25cff61ddb64b235eed46433c1821e6','Student','Student',1,';1;;2;;1;;2;;4;'),
(348,'194009','067b1d2c596f7a6c5c6b6654cb4a07a0','Student','Student',1,';1;;2;;1;;2;;4;'),
(349,'194010','96f35439733d29989a1464ace9b8afe3','Student','Student',1,';1;;2;;1;;2;;4;'),
(350,'194011','816b845348653c5da835b9a58bd0b00a','Student','Student',1,';1;;2;;1;;2;;4;'),
(351,'194012','f8e9f0589660a13c2eb633c2b83c19e2','Student','Student',1,';1;;2;;1;;2;;4;'),
(352,'194013','2cc7dd07ea14571fe5ceb05d73c99e29','Student','Student',1,';1;;2;;1;;2;;4;'),
(353,'194014','15e82e1dca4e473d3d428a0c58f118fe','Student','Student',1,';1;;2;;1;;2;;4;'),
(354,'194015','93ccb7df4958550e95e5d3e9f5c38cf6','Student','Student',1,';1;;2;;1;;2;;4;'),
(355,'194016','6ecd00d8a3555427659fa7d9b51a5b1a','Student','Student',1,';1;;2;;1;;2;;4;'),
(356,'194017','c2fdabc2b1af1fed2864e9ea304147e0','Student','Student',1,';1;;2;;1;;2;;4;'),
(357,'194018','aac528515d11267e71553403b0faa03a','Student','Student',1,';1;;2;;1;;2;;4;'),
(358,'194019','29d2a18b73901cf7da7d9fd20f99dd40','Student','Student',1,';1;;2;;1;;2;;4;'),
(359,'194020','015b9e1f93baeb95f155fd4e53d8e252','Student','Student',1,';1;;2;;1;;2;;4;'),
(360,'194021','c6c8bc184efa9e2785ab5af68dc10e05','Student','Student',1,';1;;2;;1;;2;;4;'),
(361,'194022','d0eae6968d95cd9af47f34e217582da7','Student','Student',1,';1;;2;;1;;2;;4;'),
(362,'194023','79008245016a739bb0a8ea14efc3e513','Student','Student',1,';1;;2;;1;;2;;4;'),
(363,'194024','8330f09177fd12af0aca71089532926a','Student','Student',1,';1;;2;;1;;2;;4;'),
(364,'194025','4a0c19c680aa3a4b6778c9fe1e38cf8e','Student','Student',1,';1;;2;;1;;2;;4;'),
(365,'194026','99e65edbec9f746b3667070c2af0d905','Student','Student',1,';1;;2;;1;;2;;4;'),
(366,'194027','f8f4038b46691c53029435d5d814a57f','Student','Student',1,';1;;2;;1;;2;;4;'),
(367,'194028','90db519548cf47c19c6520a8baf2f805','Student','Student',1,';1;;2;;1;;2;;4;'),
(368,'194029','dcb6e36579992baa0f211335d518f22c','Student','Student',1,';1;;2;;1;;2;;4;'),
(369,'194030','db0877211fc67d4c5e9498e61b23c8aa','Student','Student',1,';1;;2;;1;;2;;4;'),
(370,'194031','42d5b165cd2022479a814f74e6d522f9','Student','Student',1,';1;;2;;1;;2;;4;'),
(371,'194032','35471bbb1d08e091aadfe7d143e86129','Student','Student',1,';1;;2;;1;;2;;4;'),
(372,'194033','9e8a585ce74426c32a542b365c7fcd73','Student','Avdhut',0,';1;;2;;1;;2;;4;');
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

-- Dump completed on 2022-10-24 17:09:37
