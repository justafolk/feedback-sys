-- MariaDB dump 10.19  Distrib 10.8.3-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: feedback
-- ------------------------------------------------------
-- Server version	10.8.3-MariaDB

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
(46,1,'0005-05-22','{\"slider-1\":\"5\",\"slider-2\":\"5\",\"slider-3\":\"5\",\"slider-4\":\"4\",\"slider-5\":\"5\",\"slider-6\":\"4\",\"slider-7\":\"5\"}\n');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES
(1,5,'R18SC1710',40,'[194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194034,194035,194036,194037,194038,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194051,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194064,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194084,194085,194086,194087,194088,194089,194090,194091,194092,194093,194094,194095,194096,194097,194098,194099,204091,204092,204093,204094,204095,204096,204097,204098,204099,193046,4848456,15648465]',2,19,109),
(8,5,'R18EE2302',40,'[194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034,194035,194036,194037,194038,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194050,194051,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194064,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194083,194084,194085,194086,194087,194088,194089,194090,194091,194092,194093,194094,194095,194096,194097,194098,194099,204091,204092,204093,204094,204095,204096,204097,204098,204099]',2,19,107);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES
(1,'admin','21232f297a57a5a743894a0e4a801fc3','Admin','Rupali Shete'),
(2,'teacher','8d788385431273d11e8b43bb78f3aa41','Faculty','Rupali Shete'),
(3,'student','student','Student','Rupali Shete'),
(4,'194033','194033','Student','Miyamoto Musashi'),
(5,'194029','dcb6e36579992baa0f211335d518f22c','Student','Sheldon op');
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

-- Dump completed on 2022-09-16 16:14:48
