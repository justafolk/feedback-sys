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
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) DEFAULT NULL,
  `cors_code` varchar(255) DEFAULT NULL,
  `faculty_name` varchar(255) DEFAULT NULL,
  `f_sdate` date DEFAULT NULL,
  `f_edate` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `total_feedback` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedbacks`
--

LOCK TABLES `feedbacks` WRITE;
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
INSERT INTO `feedbacks` VALUES
(3,'Basic Mathematics','R18SC1701','@mda','2022-08-25','2022-08-29','Not Done',NULL,0),
(4,'Engineering Mathematics','R18SC1710','@mda','2022-08-25','2022-08-25','Not Done',NULL,1),
(5,'Basic Physics','R18SC1703','@mda','2022-08-25','2022-08-25','Not Done',NULL,1),
(6,'Engineering Physics','R18SC1706','@mda','2022-08-25','2022-08-25','Not Done',NULL,1),
(7,'English','R18SC1707','@mda','2022-08-25',NULL,'Not Done',NULL,1),
(8,'Electronic Devices','R18EX1415','@mda','2022-08-25','2022-08-25','Not Done',NULL,0),
(9,'Workshop Practice','R18ME2210','@mda','2022-08-25','2022-08-25','Not Done',NULL,0),
(10,'Data Structures R18CP3401','R18CP3403','@mda','2022-08-25',NULL,'Not Done',NULL,1),
(11,'Network Administration R18CP3407','R18CP5410','@mda','2022-08-25','2022-08-25','Not Done',NULL,1),
(12,'Aptitude Test Skills','R18SC1715','@mda','2022-08-25','2022-08-25','Not Done',NULL,0),
(13,'Business Communication','R18SC1708','@mda','2022-08-29','2022-08-29','Not Done',NULL,0);
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
(1,'1. Uniform Coverage of Syllabus','[\"\"]','slider'),
(1,'2. Has the Teacher explained the subject by relating it to practical examples?','[\"\"]','slider'),
(1,'3. Teacher\'s effectiveness in terms of Technical content, Communication Skills and use of Teaching aids.','[\"\"]','slider'),
(1,'4. Support for the development of Students skill : practical Demonstration and Hands-on Training','[\"\"]','slider'),
(1,'5. Does the teacher has clarity of students expectations?','[\"\"]','slider'),
(1,'6. Does the teacher provides Motivation and Inspiration for students to learn?','[\"\"]','slider'),
(1,'7. Does the teacher shows willingness to offer help and advice to students?','[\"\"]','slider');
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
(1,1,'0005-04-22','{\"slider-1\":\"5\",\"slider-2\":\"3\",\"slider-3\":\"4\",\"slider-4\":\"4\",\"slider-5\":\"3\",\"slider-6\":\"4\",\"slider-7\":\"3\"}\n'),
(2,1,'0005-05-22','{\"slider-1\":\"3\",\"slider-2\":\"2\",\"slider-3\":\"1\",\"slider-4\":\"5\",\"slider-5\":\"3\",\"slider-6\":\"5\",\"slider-7\":\"3\"}\n'),
(3,1,'0005-05-22','{\"slider-1\":\"2\",\"slider-2\":\"4\",\"slider-3\":\"4\",\"slider-4\":\"3\",\"slider-5\":\"3\",\"slider-6\":\"3\",\"slider-7\":\"3\"}\n'),
(4,1,'0005-05-22','{\"slider-1\":\"2\",\"slider-2\":\"4\",\"slider-3\":\"2\",\"slider-4\":\"3\",\"slider-5\":\"2\",\"slider-6\":\"3\",\"slider-7\":\"2\"}\n'),
(5,1,'0005-05-22','{\"slider-1\":\"2\",\"slider-2\":\"4\",\"slider-3\":\"2\",\"slider-4\":\"2\",\"slider-5\":\"5\",\"slider-6\":\"2\",\"slider-7\":\"5\"}\n'),
(6,1,'0005-05-22','{\"slider-1\":\"1\",\"slider-2\":\"5\",\"slider-3\":\"3\",\"slider-4\":\"1\",\"slider-5\":\"5\",\"slider-6\":\"1\",\"slider-7\":\"5\"}\n'),
(7,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"4\",\"slider-5\":\"4\",\"slider-6\":\"4\",\"slider-7\":\"4\"}\n'),
(8,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"4\",\"slider-3\":\"5\",\"slider-4\":\"5\",\"slider-5\":\"5\",\"slider-6\":\"5\",\"slider-7\":\"5\"}\n'),
(9,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"5\",\"slider-5\":\"5\",\"slider-6\":\"5\",\"slider-7\":\"5\"}\n'),
(10,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"4\",\"slider-3\":\"4\",\"slider-4\":\"4\",\"slider-5\":\"4\",\"slider-6\":\"4\",\"slider-7\":\"4\"}\n'),
(11,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"5\",\"slider-5\":\"5\",\"slider-6\":\"5\",\"slider-7\":\"5\"}\n'),
(12,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"5\",\"slider-5\":\"5\",\"slider-6\":\"5\",\"slider-7\":\"5\"}\n'),
(13,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"2\",\"slider-5\":\"3\",\"slider-6\":\"2\",\"slider-7\":\"3\"}\n'),
(14,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"4\",\"slider-3\":\"5\",\"slider-4\":\"4\",\"slider-5\":\"3\",\"slider-6\":\"4\",\"slider-7\":\"3\"}\n'),
(15,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"5\",\"slider-5\":\"5\",\"slider-6\":\"5\",\"slider-7\":\"5\"}\n'),
(16,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"4\",\"slider-4\":\"3\",\"slider-5\":\"4\",\"slider-6\":\"3\",\"slider-7\":\"4\"}\n'),
(17,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"4\",\"slider-4\":\"2\",\"slider-5\":\"2\",\"slider-6\":\"2\",\"slider-7\":\"2\"}\n'),
(18,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"3\",\"slider-5\":\"5\",\"slider-6\":\"3\",\"slider-7\":\"5\"}\n'),
(19,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"4\",\"slider-3\":\"4\",\"slider-4\":\"4\",\"slider-5\":\"4\",\"slider-6\":\"4\",\"slider-7\":\"4\"}\n'),
(20,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"3\",\"slider-5\":\"4\",\"slider-6\":\"3\",\"slider-7\":\"4\"}\n'),
(21,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"3\",\"slider-5\":\"5\",\"slider-6\":\"3\",\"slider-7\":\"5\"}\n'),
(22,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"3\",\"slider-3\":\"2\",\"slider-4\":\"1\",\"slider-5\":\"2\",\"slider-6\":\"1\",\"slider-7\":\"2\"}\n'),
(23,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"3\",\"slider-5\":\"4\",\"slider-6\":\"3\",\"slider-7\":\"4\"}\n'),
(24,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"4\",\"slider-5\":\"4\",\"slider-6\":\"4\",\"slider-7\":\"4\"}\n'),
(25,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"3\",\"slider-5\":\"5\",\"slider-6\":\"3\",\"slider-7\":\"5\"}\n'),
(26,1,'0005-05-22','{\"slider-1\":\"1\",\"slider-2\":\"1\",\"slider-3\":\"1\",\"slider-4\":\"1\",\"slider-5\":\"1\",\"slider-6\":\"1\",\"slider-7\":\"1\"}\n'),
(27,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"4\",\"slider-5\":\"3\",\"slider-6\":\"4\",\"slider-7\":\"3\"}\n'),
(28,1,'0005-05-22','{\"slider-1\":\"3\",\"slider-2\":\"3\",\"slider-3\":\"3\",\"slider-4\":\"3\",\"slider-5\":\"3\",\"slider-6\":\"3\",\"slider-7\":\"3\"}\n'),
(29,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"4\",\"slider-3\":\"4\",\"slider-4\":\"4\",\"slider-5\":\"4\",\"slider-6\":\"4\",\"slider-7\":\"4\"}\n'),
(30,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"4\",\"slider-3\":\"4\",\"slider-4\":\"4\",\"slider-5\":\"2\",\"slider-6\":\"4\",\"slider-7\":\"2\"}\n'),
(31,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"4\",\"slider-3\":\"5\",\"slider-4\":\"5\",\"slider-5\":\"5\",\"slider-6\":\"5\",\"slider-7\":\"5\"}\n'),
(32,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"1\",\"slider-5\":\"3\",\"slider-6\":\"1\",\"slider-7\":\"3\"}\n'),
(33,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"5\",\"slider-3\":\"4\",\"slider-4\":\"3\",\"slider-5\":\"2\",\"slider-6\":\"3\",\"slider-7\":\"2\"}\n'),
(34,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"4\",\"slider-3\":\"5\",\"slider-4\":\"3\",\"slider-5\":\"3\",\"slider-6\":\"3\",\"slider-7\":\"3\"}\n'),
(35,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"3\",\"slider-5\":\"3\",\"slider-6\":\"3\",\"slider-7\":\"3\"}\n'),
(36,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"4\",\"slider-3\":\"4\",\"slider-4\":\"2\",\"slider-5\":\"1\",\"slider-6\":\"2\",\"slider-7\":\"1\"}\n'),
(37,1,'0005-05-22','{\"slider-1\":\"3\",\"slider-2\":\"3\",\"slider-3\":\"3\",\"slider-4\":\"3\",\"slider-5\":\"3\",\"slider-6\":\"3\",\"slider-7\":\"3\"}\n'),
(38,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"5\",\"slider-5\":\"5\",\"slider-6\":\"5\",\"slider-7\":\"5\"}\n'),
(39,1,'0005-05-22','{\"slider-1\":\"3\",\"slider-2\":\"3\",\"slider-3\":\"3\",\"slider-4\":\"3\",\"slider-5\":\"3\",\"slider-6\":\"3\",\"slider-7\":\"3\"}\n'),
(40,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"4\",\"slider-5\":\"3\",\"slider-6\":\"4\",\"slider-7\":\"3\"}\n'),
(41,1,'0005-05-22','{\"slider-1\":\"4\",\"slider-2\":\"4\",\"slider-3\":\"4\",\"slider-4\":\"4\",\"slider-5\":\"4\",\"slider-6\":\"4\",\"slider-7\":\"4\"}\n'),
(42,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"4\",\"slider-3\":\"4\",\"slider-4\":\"4\",\"slider-5\":\"4\",\"slider-6\":\"4\",\"slider-7\":\"4\"}\n'),
(43,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"5\",\"slider-5\":\"5\",\"slider-6\":\"5\",\"slider-7\":\"5\"}\n'),
(44,1,'0005-05-22','{\"slider-1\":\"2\",\"slider-2\":\"3\",\"slider-3\":\"3\",\"slider-4\":\"4\",\"slider-5\":\"1\",\"slider-6\":\"4\",\"slider-7\":\"1\"}\n'),
(45,1,'0005-05-22','{\"slider-1\":\"3\",\"slider-2\":\"3\",\"slider-3\":\"3\",\"slider-4\":\"3\",\"slider-5\":\"3\",\"slider-6\":\"3\",\"slider-7\":\"3\"}\n'),
(46,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"4\",\"slider-5\":\"5\",\"slider-6\":\"4\",\"slider-7\":\"5\"}\n'),
(194010,1,'2022-09-16','{\"slider-1\":\"23\",\"slider-2\":\"70\",\"slider-3\":\"85\",\"slider-4\":\"1\",\"slider-5\":\"100\",\"slider-6\":\"70\",\"slider-7\":\"1\",\"form_id\":\"1\"}');
/*!40000 ALTER TABLE `form_responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forms` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ini_date` date DEFAULT NULL,
  `instructions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_code` int(11) DEFAULT NULL,
  `group_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forms`
--

LOCK TABLES `forms` WRITE;
/*!40000 ALTER TABLE `forms` DISABLE KEYS */;
INSERT INTO `forms` VALUES
(1,'Rupali Shete','2022-07-31',' Note:\r\n     - Please fill the survey questions and ratings in the order of your preference.\r\n     - Extreme left indicates postive and extreme right indicates negative.\r\n     - If any difficulty is encountered, please contact your respective supervisor. ','online','R18SC1710',40,'1');
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
  `req` tinyint(4) DEFAULT 0,
  `accepted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES
(1,5,'R18SC1710',40,'[194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194034,194035,194036,194037,194038,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194051,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194064,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194084,194085,194086,194087,194088,194089,194090,194091,194092,194093,194094,194095,194096,194097,194098,194099,204091,204092,204093,204094,204095,204096,204097,204098,204099,193046,4848456]',2,19,109,1,0),
(8,5,'R18EE2302',40,'[194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034,194035,194036,194037,194038,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194050,194051,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194064,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194083,194084,194085,194086,194087,194088,194089,194090,194091,194092,194093,194094,194095,194096,194097,194098,194099,204091,204092,204093,204094,204095,204096,204097,204098]',2,19,107,1,0),
(9,4,'R18SC1715',40,'[194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019]',2,19,21,1,0),
(10,5,'R18ME1210',40,'[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025]',2,19,26,1,NULL),
(11,3,'R18CP5407',40,'[194090,194091,194092,194093,194094,194095,194096,194097]',2,19,9,1,NULL),
(12,5,'R18CP5403',40,'[304001,304002,304003,304004,304005,304006,304007,304008,304009,304010,304011,304012,304013,304014,304015,304016,304017,304018,304019,304020]',2,30,21,1,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES
(1,'admin','21232f297a57a5a743894a0e4a801fc3','Admin','Rupali Shete',1,NULL),
(2,'teacher','8d788385431273d11e8b43bb78f3aa41','Faculty','Rupali Shete',1,NULL),
(3,'student','student','Student','Rupali Shete',1,NULL),
(5,'194029','1a1dc91c907325c69271ddf0c944bc72','Student','Sheldon op',1,NULL),
(6,'194001','aacf6586b396ee6922d0f5912d13c879','Student','Student',1,';10'),
(7,'194002','e6053eb8d35e02ae40beeeacef203c1a','Student','roll2maybe',0,';10'),
(8,'194003','48d31eb6df6dfb112badd863ddcf9168','Student','3rd',0,';10'),
(9,'194004','22af645d1859cb5ca6da0c484f1f37ea','Student','hiii',0,';10'),
(10,'194005','7edf3d5b79d579723b48c1f75aed889d','Student','Student',1,';10'),
(11,'194006','824a2867b48467d025906445b556276f','Student','Student',1,';10'),
(12,'194007','c5059085300767df3c77da7cc7a9d495','Student','Student',1,';10'),
(13,'194008','d25cff61ddb64b235eed46433c1821e6','Student','Student',1,';10'),
(14,'194009','067b1d2c596f7a6c5c6b6654cb4a07a0','Student','Student',1,';10'),
(15,'194010','098f6bcd4621d373cade4e832627b4f6','Student','Student test ',0,';10'),
(16,'194000','d37dc704d386879d14945d1a1eb8fa49','Student','Student',1,NULL),
(17,'194011','816b845348653c5da835b9a58bd0b00a','Student','Student',1,';10'),
(18,'194012','f8e9f0589660a13c2eb633c2b83c19e2','Student','Student',1,';10'),
(19,'194013','2cc7dd07ea14571fe5ceb05d73c99e29','Student','Student',1,';10'),
(20,'194014','15e82e1dca4e473d3d428a0c58f118fe','Student','Student',1,';10'),
(21,'194015','93ccb7df4958550e95e5d3e9f5c38cf6','Student','Student',1,';10'),
(22,'194016','6ecd00d8a3555427659fa7d9b51a5b1a','Student','Student',1,';10'),
(23,'194017','c2fdabc2b1af1fed2864e9ea304147e0','Student','Student',1,';10'),
(24,'194018','aac528515d11267e71553403b0faa03a','Student','Student',1,';10'),
(25,'194019','29d2a18b73901cf7da7d9fd20f99dd40','Student','Student',1,';10'),
(26,'194020','015b9e1f93baeb95f155fd4e53d8e252','Student','Student',1,';10'),
(27,'194021','c6c8bc184efa9e2785ab5af68dc10e05','Student','Student',1,';10'),
(28,'194022','d0eae6968d95cd9af47f34e217582da7','Student','Student',1,';10'),
(29,'194023','79008245016a739bb0a8ea14efc3e513','Student','Student',1,';10'),
(30,'194024','8330f09177fd12af0aca71089532926a','Student','Student',1,';10'),
(31,'194025','4a0c19c680aa3a4b6778c9fe1e38cf8e','Student','Student',1,';10'),
(32,'194026','99e65edbec9f746b3667070c2af0d905','Student','Student',1,NULL),
(33,'194027','f8f4038b46691c53029435d5d814a57f','Student','Student',1,NULL),
(34,'194028','90db519548cf47c19c6520a8baf2f805','Student','Student',1,NULL),
(35,'194030','db0877211fc67d4c5e9498e61b23c8aa','Student','Student',1,NULL),
(36,'194031','42d5b165cd2022479a814f74e6d522f9','Student','Student',1,NULL),
(37,'194032','35471bbb1d08e091aadfe7d143e86129','Student','Student',1,NULL),
(38,'194034','827798abb16c433d9723858a56d76783','Student','Student',1,NULL),
(39,'194035','4399a78b0269c0837fdf10a3a3a840a1','Student','Student',1,NULL),
(40,'194036','1a96772dc4724910ae56a705592c7554','Student','Student',1,NULL),
(41,'194037','9e78d4741b3acd246fb09b1115e06561','Student','Student',1,NULL),
(42,'194038','c68e3081442ae81258d6b99e69692a71','Student','Student',1,NULL),
(43,'194039','d8853c9bffcfe3254f49b7affa291ab8','Student','Student',1,NULL),
(44,'194040','a0ca1327384029b53299b1d023c050f1','Student','Student',1,NULL),
(45,'194041','ee7168f1098e9ab5d2d077647870f42e','Student','Student',1,NULL),
(46,'194042','15591e1b6a6da12fea8b08a4e4fdef92','Student','Student',1,NULL),
(47,'194043','f158e64724f9fb56473ff27cbb05d15f','Student','Student',1,NULL),
(48,'194044','e081233afd6f04a9698c1415538c321e','Student','Student',1,NULL),
(49,'194045','2ee15eda71151ec3c6bb568daaa3a27e','Student','Student',1,NULL),
(50,'194046','47f2ec605d24481a5efe0b48b815140a','Student','Student',1,NULL),
(51,'194047','a0249a77ff8c16c0a6339fb6ed7b47c1','Student','Student',1,NULL),
(52,'194048','b96d5bef59c1240f559df0a31961e9ee','Student','Student',1,NULL),
(53,'194049','425363129b99a78e1749fbc8bbf54a7e','Student','Student',1,NULL),
(54,'194051','d17c6bd874b9e0fd37bf9c3cf9c92ad7','Student','Student',1,NULL),
(55,'194052','0965647a7926af84ba3b9b62eebe6509','Student','Student',1,NULL),
(56,'194053','26606b6af431120007c9d3131d31b8d8','Student','Student',1,NULL),
(57,'194054','d91368cda6b7b8f27ef2285d8475fa06','Student','Student',1,NULL),
(58,'194055','7fbd9f3a92fc53c38539098398d610da','Student','Student',1,NULL),
(59,'194056','9eb486d4c17c07aafb51a640a9342fc0','Student','Student',1,NULL),
(60,'194057','cc26fb0d08cf132833a90bc4371e78ac','Student','Student',1,NULL),
(61,'194058','ea603b13cdd36bb4d40a01782f5c3f83','Student','Student',1,NULL),
(62,'194059','976332045db1dafee812950d9902077f','Student','Student',1,NULL),
(63,'194060','06a948e4606310c779feb519123a20ac','Student','Student',1,NULL),
(64,'194061','96a6cf47acae841739e50bc5345c9fc7','Student','Student',1,NULL),
(65,'194062','5356a5844174dff8b479b14cacba5a5d','Student','Student',1,NULL),
(66,'194063','dfca8ea1eac031c9f447b5be54a370c9','Student','Student',1,NULL),
(67,'194064','1f1823ec933a33f6d02b06860d24beba','Student','Student',1,NULL),
(68,'194065','e4d20841e5f2af2e8144d320337eff32','Student','Student',1,NULL),
(69,'194066','8eca44032c41c3af294f3c4fe5479dcd','Student','Student',1,NULL),
(70,'194067','deb3c5453dae4ff5eec303c527e297f4','Student','Student',1,NULL),
(71,'194068','f9ebdfcde3dc525758ac8be7236d6bf8','Student','Student',1,NULL),
(72,'194069','ef089a7597010fdc488adb78463991ac','Student','Student',1,NULL),
(73,'194070','d5e69b4e3996308b1dae38928f1771c8','Student','Student',1,NULL),
(74,'194071','4c273a24177d391f67fafd6d0a93bd95','Student','Student',1,NULL),
(75,'194072','d6466422cca62bfb2696d758e65a9689','Student','Student',1,NULL),
(76,'194073','c7d37a4b8bb5a29064834ff8f9ef3466','Student','Student',1,NULL),
(77,'194074','d84b129d9ee086142daae3e20996a8ef','Student','Student',1,NULL),
(78,'194075','abc5484007b44d819555888b8808a459','Student','Student',1,NULL),
(79,'194076','1c6979879704cb3d6432211655a73daf','Student','Student',1,NULL),
(80,'194077','58fa6aa009277908fad386b27a8af7ae','Student','Student',1,NULL),
(81,'194078','981b26619eb5cc6f9ddec14ac6715c25','Student','Student',1,NULL),
(82,'194079','b7e12a1f5f95d231a1838c8cb9282714','Student','Student',1,NULL),
(83,'194080','f318c00ccbb5fd55e0af316a8011b4c9','Student','Student',1,NULL),
(84,'194081','11efb0970c32db24e45ad0542e0d694c','Student','Student',1,NULL),
(85,'194082','596e04b050f79ff74d3732a78ef17537','Student','Student',1,NULL),
(86,'194084','c60e5d4be9d180e8aa6d51dfc35b5b2e','Student','Student',1,NULL),
(87,'194085','feeb132e4aaaa74a404fed0263f79c08','Student','Student',1,NULL),
(88,'194086','39939f2935bbe38d968fab0e8edfe238','Student','Student',1,NULL),
(89,'194087','f70a6dad82e199c639bda18251d6fc93','Student','Student',1,NULL),
(90,'194088','ef0269f9352be50e0389747271382272','Student','Student',1,NULL),
(91,'194089','cb5be652b0a2be512699e5efbd1816da','Student','Student',1,NULL),
(92,'194090','5340346c4ff6a8bb644c57ed0a2c2d97','Student','Student',1,';11'),
(93,'194091','e20a2bb5827600f64da27ca5b0199127','Student','Student',1,';11'),
(94,'194092','75e858444ff751cd23a837712d617862','Student','Student',1,';11'),
(95,'194093','88c64702b93317228351606ee16eed16','Student','Student',1,';11'),
(96,'194094','1e5358bf3928c0ed34baa2bd7750481a','Student','Student',1,';11'),
(97,'194095','e57ae674fbc1f4c80d44febf5a2558f2','Student','Student',1,';11'),
(98,'194096','8cdf2bd2dc7aaf7367c5135d70ac9603','Student','Student',1,';11'),
(99,'194097','6dacc2dce7f1ebe02a01c2d8eea5bd11','Student','Student',1,';11'),
(100,'194098','bfb638b1433c8f3a30b87714e93e0d71','Student','Student',1,NULL),
(101,'194099','ced58c2165f8943a8f39dbc4f035c52c','Student','Student',1,NULL),
(102,'204091','2f1b4c2741cd030e4bf870f6ebdfc808','Student','Student',1,NULL),
(103,'204092','095c46c8086936d4df8c574435a3f3aa','Student','Student',1,NULL),
(104,'204093','5e4ff84f42d4a2ad8ac5d1ef97b59d70','Student','Student',1,NULL),
(105,'204094','5bb6f63a3e0ee8d320d166021759fb31','Student','Student',1,NULL),
(106,'204095','fd137b032cde46ea9bf491b177830215','Student','Student',1,NULL),
(107,'204096','36de40b7d85a7e39ca22d7543186441a','Student','Student',1,NULL),
(108,'204097','c24408b61b8af23cc6e584e82ce91407','Student','Student',1,NULL),
(109,'204098','8b6fab7b063093df1d5ef06448cc5f92','Student','Student',1,NULL),
(110,'204099','bf8ed1169a7a8fd072a67e83ae6be54e','Student','Student',1,NULL),
(111,'193046','66bb370c57a7b62744267af70f50d5d3','Student','Student',1,NULL),
(112,'4848456','1ed5e294c0d186d6f667638a64ed299d','Student','Student',1,NULL),
(113,'15648465','40bb961f408b59ced5a84c36b20a4999','Student','Student',1,NULL),
(114,'194033','8382e73f42aed38cb09812e5d5058541','Student','Avdhut Kamble',0,'10;8;1'),
(115,'194050','3e029a62e9ea00bd18a2d99def9e522a','Student','Student',1,'8'),
(116,'194083','5ad7a360378f81de07514e34024ae9e7','Student','Student',1,'8'),
(117,'304001','ed925efcc3e76dd68609855680ea8bd7','Student','Student',1,'12'),
(118,'304002','931ea28e459f7594e48398b3beb7295a','Student','Student',1,'12'),
(119,'304003','866ab94456efaa9d96499b8f214dabde','Student','Student',1,'12'),
(120,'304004','716cb729595fd28277f187455c382268','Student','Student',1,'12'),
(121,'304005','029e50b1608399ae9b60e34720d976a9','Student','Student',1,'12'),
(122,'304006','cc400d2d58fd7f6839d19d48e8b6a016','Student','Student',1,'12'),
(123,'304007','07f39ab39a4a3850df5241b9131265cb','Student','Student',1,'12'),
(124,'304008','8eacd7e81aa9a1acbfa487a7cf49a8ec','Student','Student',1,'12'),
(125,'304009','0236a28b322b7c773d034186b0d05c69','Student','Student',1,'12'),
(126,'304010','4ea29595c25ccf7a33d3fdec75630d5a','Student','Student',1,'12'),
(127,'304011','7270b05cd64d6ec32f42428b488cee95','Student','Student',1,'12'),
(128,'304012','892803439ca5bdbfc5a23cdb96f9da7e','Student','Student',1,'12'),
(129,'304013','fe062370f466aba571becc985a87a406','Student','Student',1,'12'),
(130,'304014','230d80ddb6d17e1d64f9bc039c1c3efd','Student','Student',1,'12'),
(131,'304015','d535186f7f8120fd540dd16eefc7def3','Student','Student',1,'12'),
(132,'304016','5d9985aabde464abaf8f1c9edc5f8acb','Student','Student',1,'12'),
(133,'304017','1538cb789f695499047af235ce8756db','Student','Student',1,'12'),
(134,'304018','c526060b0c03bbf3d81b6a8848e07f76','Student','Student',1,'12'),
(135,'304019','c9fd8ea482559975b26ac874a26bd4d7','Student','Student',1,'12'),
(136,'304020','d5005cffdf335563d62da7e75ca083cd','Student','Student',1,'12');
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

-- Dump completed on 2022-09-18 15:19:54
