-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 06:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_code` int(11) DEFAULT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_code`, `dept_code`, `teacher`) VALUES
(1, 'Basic Mathematics', 'R18SC1701', 40, '@mda'),
(2, 'Engineering Mathematics', 'R18SC1710', 40, NULL),
(3, 'Basic Physics', 'R18SC1703', 40, NULL),
(4, 'Engineering Physics', 'R18SC1706', 40, NULL),
(5, 'English', 'R18SC1707', 40, NULL),
(6, 'Business Communication', 'R18SC1708', 40, NULL),
(7, 'Engineering Graphic Skills', 'R18ME1210', 40, NULL),
(8, 'Computer Fundamentals', 'R18CP1401', 40, NULL),
(9, 'Electronic Devices', 'R18EX1415', 40, NULL),
(10, 'Industrial Org.', 'R18ME2203', 40, NULL),
(11, 'Electrical Engineering', 'R18EE2310', 40, NULL),
(12, 'Workshop Practice', 'R18ME2210', 40, NULL),
(13, 'Marketing', 'R18EE2302', 40, NULL),
(14, 'Entrepreneurship Development', 'R18ME2208', 40, NULL),
(15, 'Aptitude Test Skills', 'R18SC1715', 40, NULL),
(16, 'Environmental Studies', 'R18CP2401', 40, NULL),
(17, 'Programming in', 'R18CP3401', 40, NULL),
(18, 'Operating Systems', 'R18CP3402', 40, NULL),
(19, 'Data Structures', 'R18CP3401', 40, NULL),
(20, 'Object Oriented Programming with', 'R18CP3404', 40, NULL),
(21, 'Microprocessors', 'R18CP3405', 40, NULL),
(22, 'Database Management Systems', 'R18CP3406', 40, NULL),
(23, 'Computer Networks', 'R18CP3407', 40, NULL),
(24, 'Software Engineering', 'R18CP3408', 40, NULL),
(25, 'Data Communication', 'R18CP3409', 40, NULL),
(26, 'Digital Techniques', 'R18EX3415', 40, NULL),
(27, 'Web Design', 'R18CP4401', 40, NULL),
(28, 'User Interface Programming', 'R18CP4402', 40, NULL),
(29, 'P. C. Maintenance', 'R18CP4403', 40, NULL),
(30, 'Linux Operating System', 'R18CP4404', 40, NULL),
(31, 'Project and Seminar 100 Credits', 'R18CP4405', 40, NULL),
(32, 'Industrial Training', 'R18CP4406', 40, NULL),
(33, 'Java Programming', 'R18CP5401', 40, NULL),
(34, 'Multimedia Techniques', 'R18CP5402', 40, NULL),
(35, 'PHP Programming', 'R18CP5403', 40, NULL),
(36, 'Mobile Computing', 'R18CP5404', 40, NULL),
(37, 'Python Programming', 'R18CP5405', 40, NULL),
(38, 'Computer Security', 'R18CP5406', 40, NULL),
(39, 'Advanced Java Programming', 'R18CP5407', 40, NULL),
(40, 'Advanced Computer Networks', 'R18CP5408', 40, NULL),
(41, 'Animation Techniques', 'R18CP5409', 40, NULL),
(42, 'Network Administration ', 'R18CP5410', 40, NULL),
(43, 'Mechanical sub', 'R18ME3022', 21, NULL),
(44, 'Office', 'R18-Office-21', 21, NULL),
(45, 'so', 'iajfiji', 10, NULL),
(46, 'opopo - T&P', '6790', 40, NULL),
(47, 'opopopopopopopopopopopopopo - T&P', '45670', 40, NULL),
(48, 'opopopopopopopopopopopopopo - T&P', '45670', 40, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_id` int(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_id`, `dept_name`) VALUES
(1, 10, 'Civil Engineering (Aided)'),
(2, 20, 'Mechanical Engineering (Aided)'),
(3, 21, 'Mechanical Engineering (Un-Aided)'),
(4, 30, 'Electrical Engineering'),
(5, 40, 'Computer Engineering'),
(6, 70, 'Electronics And Telecommuncation (Aided)'),
(7, 71, 'Electronics And Telecommuncation (Un-Aided)'),
(8, 50, 'Computer Engineering and IoT');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `faculty_name` varchar(255) DEFAULT NULL,
  `feedback_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `total_students` int(11) DEFAULT NULL,
  `filled_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`f_id`, `f_name`, `course_code`, `faculty_name`, `feedback_date`, `status`, `total_students`, `filled_students`) VALUES
(3, 'Basic Mathematics', 'R18SC1701', '@mda', '2022-08-25', 0, NULL, 0),
(4, 'Engineering Mathematics', 'R18SC1710', 'Rupali Shete', '2022-08-25', 0, NULL, 0),
(5, 'Basic Physics', 'R18SC1703', '@mda', '2022-08-25', 0, NULL, 0),
(6, 'Engineering Physics', 'R18SC1706', '@mda', '2022-08-25', 0, NULL, 0),
(7, 'English', 'R18SC1707', '@mda', '2022-08-25', 0, NULL, 0),
(8, 'Electronic Devices', 'R18EX1415', '@mda', '2022-08-25', 0, NULL, 0),
(9, 'Workshop Practice', 'R18ME2210', '@mda', '2022-08-25', 0, NULL, 0),
(10, 'Data Structures R18CP3401', 'R18CP3403', '@mda', '2022-08-25', 0, NULL, 0),
(11, 'Network Administration R18CP3407', 'R18CP5410', '@mda', '2022-08-25', 0, NULL, 0),
(12, 'Aptitude Test Skills', 'R18SC1715', '@mda', '2022-08-25', 0, NULL, 0),
(13, 'Business Communication', 'R18SC1708', '@mda', '2022-08-29', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

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

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`form_id`, `author`, `ini_date`, `instructions`, `status`, `semester`, `course_code`, `dept_code`, `group_id`, `default_ques`, `total_students`, `viewed`, `academic_year`) VALUES
(1, 'Rupali Shete', '2022-09-23', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 2, 'R18SC1710', 40, '1', 1, 35, 1, '2022-2023'),
(2, 'Rupali Shete', '2022-09-22', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 1, 'R18SC1701', 40, '2', 1, 34, 1, '2022-2023'),
(3, 'Rupali Shete', '2022-09-22', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 1, 'R18SC1703', 40, '3', 1, 34, 1, '2022-2023'),
(4, 'Rupali Shete', '2022-09-22', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 2, 'R18SC1706', 40, '4', 1, 34, 1, '2022-2023'),
(5, 'Rupali Shete', '2022-09-29', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 2, 'R18ME1210', 40, '5', 1, 34, 1, '2022-2023'),
(7, 'Rupali Shete', '2022-09-23', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 1, 'R18CP3402', 40, '7', 1, 34, 1, '2022-2023'),
(9, 'Rupali Shete', '2022-09-23', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 1, 'R18SC1701', 20, '9', 1, 52, 0, '2022-2023'),
(10, 'Rupali Shete', '2022-10-12', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 2, 'R18CP1401', 40, '10', 1, 103, 0, '2022-2023'),
(8, 'Rupali Shete', '2022-09-27', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 1, 'R18CP3401', 40, '8', 1, 20, 1, '2022-2023'),
(11, 'Rupali Shete', '2022-09-27', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 1, 'R18CP5406', 40, '11', 11, 34, 1, '2022-2023'),
(6, 'Rupali Shete', '2022-09-22', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 2, 'R18SC1715', 40, '6', 1, 34, 1, '2022-2023'),
(12, 'Rupali Shete', '2022-10-09', ' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 3, 'R18-Office-21', 21, '12', 12, 31, 0, '2022-2023'),
(14, 'Rupali Shete', '2022-10-09', ' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 5, 'R18SC1707', 40, '14', 1, 35, 0, '2022-2023'),
(13, 'Rupali Shete', '2022-10-09', ' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 1, 'R18-Office-21', 21, '13', 13, 11, 0, '2022-2023'),
(15, 'Rupali Shete', '2022-10-13', ' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ', 1, 3, 'R18ME2210', 40, '15', 1, 99, 0, '2022-2023'),
(17, 'Rupali Shete', '2022-10-10', ' Note: \n- Please fill the survey questions and ratings in the order of your preference.\n- Extreme left indicates postive and extreme right indicates negative. \n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 6, 'R18CP5408', 40, '17', 1, 99, 0, '2022-2023'),
(18, 'Rupali Shete', '2022-10-11', ' Note: \r\n- Please fill the survey questions and ratings in the order of your preference.\r\n- Extreme left indicates postive and extreme right indicates negative. \r\n- If any difficulty is encountered, please contact your respective supervisor. ', 0, 1, 'R18EE2302', 40, '18', 1, 11, 1, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `form_ques`
--

CREATE TABLE `form_ques` (
  `form_id` int(11) DEFAULT NULL,
  `question_title` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_ques`
--

INSERT INTO `form_ques` (`form_id`, `question_title`, `sub_content`, `type`) VALUES
(0, '1. Uniform Coverage of Syllabus', '[\"\"]', 'slider'),
(0, '2. Has the Teacher explained the subject by relating it to practical examples?', '[\"\"]', 'slider'),
(0, '3. Teacher\'s effectiveness in terms of Technical content, Communication Skills and use of Teaching aids.', '[\"\"]', 'slider'),
(0, '4. Support for the development of Students skill : practical Demonstration and Hands-on Training', '[\"\"]', 'slider'),
(0, '5. Does the teacher has clarity of students expectations?', '[\"\"]', 'slider'),
(0, '6. Does the teacher provides Motivation and Inspiration for students to learn?', '[\"\"]', 'slider'),
(0, '7. Does the teacher shows willingness to offer help and advice to students?', '[\"\"]', 'slider'),
(6, '1. Uniform Coverage of Syllabus. ', '[\"1\"]', 'slider'),
(6, '2. Has the Teacher explained the subject by relating it to practical examples?. ', '[\"1\"]', 'slider'),
(6, '3. Teacher\'s effectiveness in terms of Technical content, Communication Skills and use of Teaching aids.. ', '[\"1\"]', 'slider'),
(6, '4. Support for the development of Students skill : practical Demonstration and Hands-on Training. ', '[\"1\"]', 'slider'),
(6, '5. Does the teacher has clarity of students expectations?. ', '[\"1\"]', 'slider'),
(6, '6. Does the teacher provides Motivation and Inspiration for students to learn?. ', '[\"1\"]', 'slider'),
(6, '7. Does the teacher shows willingness to offer help and advice to students?. ', '[\"1\"]', 'slider'),
(12, '1. How was the office throughout the semester?. ', '[\"1\"]', 'slider'),
(12, '2. Idk man, did you like em? . ', '[\"1\"]', 'slider'),
(11, '1. Uniform Coverage of Syllabus. ', '[\"1\"]', 'slider'),
(11, '2. Has the Teacher explained the subject by relating it to practical examples?. ', '[\"1\"]', 'slider'),
(11, '3. Teacher\'s effectiveness in terms of Technical content, Communication Skills and use of Teaching aids.. ', '[\"1\"]', 'slider'),
(11, '4. Support for the development of Students skill : practical Demonstration and Hands-on Training. ', '[\"1\"]', 'slider'),
(11, '5. Does the teacher has clarity of students expectations?. ', '[\"1\"]', 'slider'),
(11, '6. Does the teacher provides Motivation and Inspiration for students to learn?. ', '[\"1\"]', 'slider'),
(11, '7. Does the teacher shows willingness to offer help and advice to students?. ', '[\"1\"]', 'slider'),
(13, '1. How was the office throughout the semester?. . ', '[\"1\"]', 'slider'),
(13, '2. Idk man, did you li0ke them?. . ', '[\"1\"]', 'slider');

-- --------------------------------------------------------

--
-- Table structure for table `form_responses`
--

CREATE TABLE `form_responses` (
  `student_id` int(11) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `filldate` date DEFAULT NULL,
  `response_json` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_responses`
--

INSERT INTO `form_responses` (`student_id`, `form_id`, `filldate`, `response_json`) VALUES
(194034, 7, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"7\"}'),
(222010, 9, '2022-09-23', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":5,\"slider-4\":3,\"slider-5\":3,\"slider-6\":4,\"slider-7\":4,\"form_id\":\"9\"}'),
(204099, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":1,\"slider-3\":5,\"slider-4\":3,\"slider-5\":4,\"slider-6\":5,\"slider-7\":1,\"form_id\":\"10\"}'),
(204029, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204059, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":4,\"slider-3\":3,\"slider-4\":3,\"slider-5\":4,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204053, 10, '2022-09-23', '{\"slider-1\":0,\"slider-2\":0,\"slider-3\":0,\"slider-4\":0,\"slider-5\":0,\"slider-6\":0,\"slider-7\":3,\"form_id\":\"10\"}'),
(204059, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204056, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204060, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":5,\"slider-3\":4,\"slider-4\":5,\"slider-5\":5,\"slider-6\":4,\"slider-7\":5,\"form_id\":\"10\"}'),
(204004, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":4,\"slider-6\":4,\"slider-7\":4,\"form_id\":\"10\"}'),
(204015, 10, '2022-09-23', '{\"slider-1\":2,\"slider-2\":3,\"slider-3\":4,\"slider-4\":2,\"slider-5\":2,\"slider-6\":3,\"slider-7\":4,\"form_id\":\"10\"}'),
(204057, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":0,\"slider-4\":0,\"slider-5\":5,\"slider-6\":5,\"slider-7\":0,\"form_id\":\"10\"}'),
(204051, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204044, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":4,\"slider-4\":4,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204035, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":4,\"slider-4\":4,\"slider-5\":4,\"slider-6\":4,\"slider-7\":4,\"form_id\":\"10\"}'),
(204037, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":4,\"slider-3\":4,\"slider-4\":5,\"slider-5\":4,\"slider-6\":5,\"slider-7\":4,\"form_id\":\"10\"}'),
(204061, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204061, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204061, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204061, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204061, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204061, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204061, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204061, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204067, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":5,\"slider-4\":4,\"slider-5\":5,\"slider-6\":4,\"slider-7\":5,\"form_id\":\"10\"}'),
(204064, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":4,\"slider-4\":4,\"slider-5\":4,\"slider-6\":4,\"slider-7\":4,\"form_id\":\"10\"}'),
(204009, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":4,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204043, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":4,\"slider-4\":4,\"slider-5\":4,\"slider-6\":4,\"slider-7\":4,\"form_id\":\"10\"}'),
(204013, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":2,\"slider-6\":4,\"slider-7\":4,\"form_id\":\"10\"}'),
(204028, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204022, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204021, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204006, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":4,\"slider-4\":4,\"slider-5\":4,\"slider-6\":5,\"slider-7\":3,\"form_id\":\"10\"}'),
(204052, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":4,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204030, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204024, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204010, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204011, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204038, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":5,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204005, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204034, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":1,\"slider-3\":4,\"slider-4\":2,\"slider-5\":4,\"slider-6\":4,\"slider-7\":5,\"form_id\":\"10\"}'),
(204054, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":4,\"slider-3\":4,\"slider-4\":5,\"slider-5\":5,\"slider-6\":3,\"slider-7\":5,\"form_id\":\"10\"}'),
(204017, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":2,\"slider-3\":3,\"slider-4\":1,\"slider-5\":1,\"slider-6\":0,\"slider-7\":0,\"form_id\":\"10\"}'),
(204008, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204023, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":4,\"slider-3\":4,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204041, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204001, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":4,\"form_id\":\"10\"}'),
(204042, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204025, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204019, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204007, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":4,\"slider-4\":3,\"slider-5\":4,\"slider-6\":3,\"slider-7\":4,\"form_id\":\"10\"}'),
(204020, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204040, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204038, 10, '2022-09-23', '{\"slider-1\":4,\"slider-2\":3,\"slider-3\":3,\"slider-4\":5,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204045, 10, '2022-09-23', '{\"slider-1\":0,\"slider-2\":2,\"slider-3\":3,\"slider-4\":0,\"slider-5\":3,\"slider-6\":0,\"slider-7\":0,\"form_id\":\"10\"}'),
(204014, 10, '2022-09-23', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"10\"}'),
(204046, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(204039, 10, '2022-09-23', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5,\"form_id\":\"10\"}'),
(194034, 11, '2022-09-27', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"11\"}'),
(194003, 8, '2022-09-27', '{\"slider-1\":3,\"slider-2\":3,\"slider-3\":3,\"slider-4\":3,\"slider-5\":3,\"slider-6\":3,\"slider-7\":3,\"form_id\":\"8\"}'),
(192102, 12, '2022-10-08', '{\"slider-1\":4,\"slider-2\":1}'),
(194033, 14, '2022-10-09', '{\"slider-1\":3,\"slider-2\":1,\"slider-3\":4,\"slider-4\":1,\"slider-5\":5,\"slider-6\":4,\"slider-7\":5}'),
(194029, 17, '2022-10-10', '{\"slider-1\":0,\"slider-2\":0,\"slider-3\":0,\"slider-4\":0,\"slider-5\":0,\"slider-6\":0,\"slider-7\":0}'),
(194028, 17, '2022-10-10', '{\"slider-1\":5,\"slider-2\":5,\"slider-3\":5,\"slider-4\":5,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5}'),
(194056, 10, '2022-10-12', '{\"slider-1\":4,\"slider-2\":4,\"slider-3\":5,\"slider-4\":4,\"slider-5\":5,\"slider-6\":5,\"slider-7\":5}');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
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
  `rejected` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `semester`, `subject`, `deptcode`, `activeRoll`, `teacher_id`, `year`, `student_count`, `fdate`, `req`, `accepted`, `rejected`) VALUES
(1, 2, 'R18SC1710', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034,284009]', 2, 19, 35, '2022-09-22', 1, 1, 0),
(2, 1, 'R18SC1701', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034]', 2, 19, 34, '2022-09-22', 1, 1, 0),
(3, 1, 'R18SC1703', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034]', 2, 19, 34, '2022-09-22', 1, 1, 0),
(4, 2, 'R18SC1706', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034]', 2, 19, 34, '2022-09-22', 0, 1, 0),
(5, 2, 'R18ME1210', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034]', 2, 19, 34, '2022-09-29', 0, 1, 0),
(6, 2, 'R18SC1715', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034]', 2, 19, 34, '2022-09-22', 0, 1, 0),
(7, 1, 'R18CP3402', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034]', 2, 19, 34, '2022-09-23', 0, 1, 0),
(8, 1, 'R18CP3401', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020]', 2, 19, 20, '2022-09-27', 0, 1, 0),
(9, 1, 'R18SC1701', 20, '[222010,222011,222012,222013,222014,222015,222016,222017,222018,222019,222020,222021,222022,222023,222024,222025,222026,222027,222028,222030,222031,222032,222033,222034,222035,222036,222037,222038,222039,222040,222041,222042,222043,222044,222045,222046,222047,222048,222049,222050,222051,222052,222053,222054,222055,222056,222057,222058,222059,222060,-2000,232001]', 2, 22, 52, '2022-09-23', 0, 1, 0),
(10, 2, 'R18CP1401', 40, '[204001,204002,204003,204004,204005,204006,204007,204008,204009,204010,204011,204012,204013,204014,204015,204016,204017,204018,204019,204020,204021,204022,204023,204024,204025,204026,204027,204028,204029,204030,204031,204032,204033,204034,204035,204036,204037,204038,204039,204040,204041,204042,204043,204044,204045,204046,204047,204048,204049,204050,204051,204052,204053,204054,204055,204056,204057,204058,204059,204060,204061,204062,204063,204064,204065,204066,204067,204068,204069,204070,204071,204072,204073,204074,204075,204076,204077,204078,204079,204080,204081,204082,204083,204084,204085,204086,204087,204088,204089,204090,204091,204092,204093,204094,204095,204096,204097,204098,204099,2040100,\"194001\",\"194056\",\"194029\"]', 2, 20, 103, '2022-10-12', 0, 1, 0),
(11, 1, 'R18CP5406', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034]', 2, 19, 34, '2022-09-27', 0, 1, 0),
(12, 3, 'R18-Office-21', 21, '[192101,192102,192103,192104,192105,192106,192107,192108,192109,192110,192111,192112,192113,192114,192115,192116,192117,192118,192119,192120,192121,192122,192123,192124,192125,192126,192127,192128,192129,192130,-2100]', 2, 19, 31, '2022-10-09', 0, 1, 0),
(13, 1, 'R18-Office-21', 21, '[202101,202102,202103,202104,202105,202106,202107,202108,202109,202110,-2100]', 2, 20, 11, '2022-10-09', 0, 1, 0),
(14, 5, 'R18SC1707', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034,194035]', 2, 19, 35, '2022-10-09', 0, 1, 0),
(15, 3, 'R18ME2210', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034,194035,194036,194037,194038,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194050,194051,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194064,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194083,194084,194085,194086,194087,194088,194089,194090,194091,194092,194093,194094,194095,194096,194097,194098,194099]', 2, 19, 99, '2022-10-13', 0, 1, 0),
(16, 5, 'R18CP2401', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034,194035,194036,194037,194038,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194050,194051,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194064,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194083,194084,194085,194086,194087,194088,194089,194090,194091,194092,194093,194094,194095,194096,194097,194098,194099]', 2, 19, 99, '2022-10-09', 1, 0, 0),
(17, 6, 'R18CP5408', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034,194035,194036,194037,194038,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194050,194051,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194064,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194083,194084,194085,194086,194087,194088,194089,194090,194091,194092,194093,194094,194095,194096,194097,194098,194099]', 2, 19, 99, '2022-10-10', 0, 1, 0),
(18, 1, 'R18EE2302', 40, '[234001,234002,234003,234004,234005,234006,234007,234008,234009,234010,\"234011\"]', 2, 23, 11, '2022-10-11', 0, 1, 0),
(19, 1, 'R18EX3415', 40, '[234001,234002,234003,234004,234005,234006,234007,234008,234009,234010,234011,234012,234013,234014,234015,234016,234017,234018,234019,234020,234021,234025,234026,234027,234028,234029,234030,234031,234033,234034,234035,234036,234037,234038,234039,234040,234041,234042,234043,234044,234045]', 2, 23, 41, '2022-10-12', 0, 0, 1),
(20, 5, '45670', 40, '[194001,194002,194003,194004,194005]', 2, 19, 5, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `uname` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passwd` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT 'Student',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flog` tinyint(1) NOT NULL DEFAULT 1,
  `student_groups` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `passwd`, `role`, `name`, `flog`, `student_groups`) VALUES
(1, 'admin', '996408b028ec985b02f800695397391e', 'Admin', 'Rupali Shete', 0, NULL),
(2, 'teacher', '8d788385431273d11e8b43bb78f3aa41', 'Faculty', 'Rupali Shete', 0, NULL),
(3, '194001', '0a9a238d5875f3c4848ab42555411e01', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;10;'),
(4, '194002', 'e6053eb8d35e02ae40beeeacef203c1a', 'Student', 'opop', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(5, '194003', 'e6053eb8d35e02ae40beeeacef203c1a', 'Student', 'opppp', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(6, '194004', '66eb19352efa55a121b3f5334eb037cf', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(7, '194005', '7edf3d5b79d579723b48c1f75aed889d', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(8, '194006', '824a2867b48467d025906445b556276f', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(9, '194007', 'c5059085300767df3c77da7cc7a9d495', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(10, '194008', 'd25cff61ddb64b235eed46433c1821e6', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(11, '194009', '067b1d2c596f7a6c5c6b6654cb4a07a0', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(12, '194010', '96f35439733d29989a1464ace9b8afe3', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(13, '194011', '816b845348653c5da835b9a58bd0b00a', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(14, '194012', 'f8e9f0589660a13c2eb633c2b83c19e2', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(15, '194013', '2cc7dd07ea14571fe5ceb05d73c99e29', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(16, '194014', '15e82e1dca4e473d3d428a0c58f118fe', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(17, '194015', '93ccb7df4958550e95e5d3e9f5c38cf6', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(18, '194016', '6ecd00d8a3555427659fa7d9b51a5b1a', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(19, '194017', 'c2fdabc2b1af1fed2864e9ea304147e0', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(20, '194018', 'aac528515d11267e71553403b0faa03a', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(21, '194019', '29d2a18b73901cf7da7d9fd20f99dd40', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(22, '194020', '015b9e1f93baeb95f155fd4e53d8e252', 'Student', 'Student', 0, ';7;;8;;8;;8;;11;;14;;15;;16;;17;'),
(23, '194021', 'c6c8bc184efa9e2785ab5af68dc10e05', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(24, '194022', 'd0eae6968d95cd9af47f34e217582da7', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(25, '194023', '79008245016a739bb0a8ea14efc3e513', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(26, '194024', '8330f09177fd12af0aca71089532926a', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(27, '194025', '4a0c19c680aa3a4b6778c9fe1e38cf8e', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(28, '194026', '99e65edbec9f746b3667070c2af0d905', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(29, '194027', 'f8f4038b46691c53029435d5d814a57f', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(30, '194028', '90db519548cf47c19c6520a8baf2f805', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(31, '194029', 'dcb6e36579992baa0f211335d518f22c', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;10;'),
(32, '194030', 'db0877211fc67d4c5e9498e61b23c8aa', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(33, '194031', '42d5b165cd2022479a814f74e6d522f9', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(34, '194032', '35471bbb1d08e091aadfe7d143e86129', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(35, '194033', '8382e73f42aed38cb09812e5d5058541', 'Student', 'Student', 0, ';7;;11;;14;;15;;16;;17;'),
(36, '194034', 'e6053eb8d35e02ae40beeeacef203c1a', 'Student', 'hr', 0, ';7;;11;;14;;15;;16;;17;'),
(37, '222010', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 'abc', 0, ';9;'),
(38, '222011', '5e6d5ae3804ed8e9714656e9e57012e0', 'Student', 'Student', 0, ';9;'),
(39, '222012', '06f4f4fd71a34bd2acc963d2601ed970', 'Student', 'Student', 0, ';9;'),
(40, '222013', '46285fcc43a545c726fdda65bbe051e8', 'Student', 'Student', 0, ';9;'),
(41, '222014', 'c8d1b34afed7d56eb832c91f60b908a0', 'Student', 'Student', 0, ';9;'),
(42, '222015', 'ca94dc1f7c20306b21e54f897c72b3f0', 'Student', 'Student', 0, ';9;'),
(43, '222016', '63b1359da5b0047cbecbe96ec5b0480f', 'Student', 'Student', 0, ';9;'),
(44, '222017', '11f8c5ae8130c5a1d612b409e9079d9b', 'Student', 'Student', 0, ';9;'),
(45, '222018', '72155f8478d831dc0d5fb78c78b91148', 'Student', 'Student', 0, ';9;'),
(46, '222019', 'f310141c80df38871369f363e2bb5b2b', 'Student', 'Student', 0, ';9;'),
(47, '222020', '95d108fd35a190e16783255cdf95d03a', 'Student', 'Student', 0, ';9;'),
(48, '222021', '87dd1350658fbdbaba90bf1d44347f14', 'Student', 'Student', 0, ';9;'),
(49, '222022', '3af4de2bc726571a4b6f2d9f09e048e1', 'Student', 'Student', 0, ';9;'),
(50, '222023', 'd48146e02f7ac54c44f0a2cf747156ee', 'Student', 'Student', 0, ';9;'),
(51, '222024', 'e4b81acb5249b929ed1c4cf26cae6c17', 'Student', 'Student', 0, ';9;'),
(52, '222025', '30df5af7ffa5a31e255207df3d23ceb9', 'Student', 'Student', 0, ';9;'),
(53, '222026', 'ea3aa3d0b39b138ef31b0ed823afdd32', 'Student', 'Student', 0, ';9;'),
(54, '222027', '3502d635691f829bce15d6697678c219', 'Student', 'Student', 0, ';9;'),
(55, '222028', 'e4355c1ab38923b50d721b262527794a', 'Student', 'Student', 0, ';9;'),
(56, '222030', '143e3398babdd4d2e829c237d602d250', 'Student', 'Student', 0, ';9;'),
(57, '222031', '8afc0892b3190adad263d700a46132ec', 'Student', 'Student', 0, ';9;'),
(58, '222032', 'b124c6e7ed040c7dff9317c1d3d9f390', 'Student', 'Student', 0, ';9;'),
(59, '222033', '0e9004f96c8247e935b165465d12744e', 'Student', 'Student', 0, ';9;'),
(60, '222034', '1947af46a247a032a4fb093324ac4d35', 'Student', 'Student', 0, ';9;'),
(61, '222035', '52e71668c2422062c806a2186c4fff79', 'Student', 'Student', 0, ';9;'),
(62, '222036', '73fbd776fef0534f957a0aff4c63cb17', 'Student', 'Student', 0, ';9;'),
(63, '222037', '2dbc8280d1bcd8e4dcb46e7d69df03a0', 'Student', 'Student', 0, ';9;'),
(64, '222038', 'f8d4a39e528191593f030adc4598e9db', 'Student', 'Student', 0, ';9;'),
(65, '222039', 'e21b7ffcddba72f3ef7b2bf7bf772b5d', 'Student', 'Student', 0, ';9;'),
(66, '222040', 'b9a67663f5f4d9e4a3274018e3c9f355', 'Student', 'Student', 0, ';9;'),
(67, '222041', 'd4fb3875a4cec3921fe3fb0833ca4aba', 'Student', 'Student', 0, ';9;'),
(68, '222042', 'edabbb960b19562801ff1a7d1f7ac63f', 'Student', 'Student', 0, ';9;'),
(69, '222043', '974f9e634f6c95f16e763b2fc8b21948', 'Student', 'Student', 0, ';9;'),
(70, '222044', '04ba6fa598eb4bb04d15ac37b5690704', 'Student', 'Student', 0, ';9;'),
(71, '222045', 'a576549eaf0983807c474cc5f4289261', 'Student', 'Student', 0, ';9;'),
(72, '222046', '77578094a78b6d51cd3b4193ec3cde38', 'Student', 'Student', 0, ';9;'),
(73, '222047', '818dadb22bf0dd6e3f54d4a8274b8fa9', 'Student', 'Student', 0, ';9;'),
(74, '222048', '745229c79c4923647d970c186d319772', 'Student', 'Student', 0, ';9;'),
(75, '222049', 'a485b513d9f528a5af761fcb260b518f', 'Student', 'Student', 0, ';9;'),
(76, '222050', 'bb4a2e8d410d5b90e9aa5daef195619f', 'Student', 'Student', 0, ';9;'),
(77, '222051', '7343ae281e6a7c70636fce4812e032e0', 'Student', 'Student', 0, ';9;'),
(78, '222052', '378df078868136b94bbb41e34c41f7c0', 'Student', 'Student', 0, ';9;'),
(79, '222053', 'fab1d07e76bc1b98df1f0f96da008ead', 'Student', 'Student', 0, ';9;'),
(80, '222054', 'a02be8de388a97b0c37dfe7e4cb037cd', 'Student', 'Student', 0, ';9;'),
(81, '222055', '8522af1e7d41010496947efe1fada99b', 'Student', 'Student', 0, ';9;'),
(82, '222056', '1e5d25d636a0221d562d97c37dc8f9cb', 'Student', 'Student', 0, ';9;'),
(83, '222057', 'a0d15d3954406735b4b38f45ea6a3972', 'Student', 'Student', 0, ';9;'),
(84, '222058', '571f18affa745b5c7c4aa67bc81a0581', 'Student', 'Student', 0, ';9;'),
(85, '222059', '73f9ade2ed0a253c064611dfd86bf9e4', 'Student', 'Student', 0, ';9;'),
(86, '222060', '1bb6a99e6876e7bf3fd5cb4778e78be3', 'Student', 'Student', 0, ';9;'),
(87, '-2000', 'e78ec60ec4d38340b2f5a4bb30a7541c', 'Student', 'Student', 0, ';9;'),
(88, '232001', 'c97aaa64d9e1ee47a675727aa1abc96d', 'Student', 'Student', 0, ';9;'),
(89, '204001', '5c1551127768d151f0e2af6f94a6548a', 'Student', 'Afsheen Khan ', 0, ';10;'),
(90, '204002', '164da6583dcd7ea95c366bb174bd2f7b', 'Student', 'Student', 0, ';10;'),
(91, '204003', '8953f32854083a1eb3d6e0371c757b1a', 'Student', 'Student', 0, ';10;'),
(92, '204004', 'c7c4c742aa6a21599a20e3c867a7a4e1', 'Student', 'Atharv Sonar', 0, ';10;'),
(93, '204005', 'c8b935c5ed915e2dc23dbd93627b88d9', 'Student', 'Sahil Hirve', 0, ';10;'),
(94, '204006', '400448b6db7881931edefbf33528139d', 'Student', 'Jayaanmol Shah', 0, ';10;'),
(95, '204007', '395839abdff890eecdf026bd559c0bbf', 'Student', 'Adesh Gajare', 0, ';10;'),
(96, '204008', 'e8b4d2ce322b330dd243d3d604950765', 'Student', 'Revati Jayantrao Nimbalkar', 0, ';10;'),
(97, '204009', '71642462b935bd9323e7e7563c23816b', 'Student', 'pranav kharche', 0, ';10;'),
(98, '204010', 'f6216b7775ae6e32a721b99c37f06728', 'Student', 'Riya Garasangi', 0, ';10;'),
(99, '204011', 'c4f4b2eb6d63dd4dd8afed001c61c956', 'Student', 'Mayuresh Mane ', 0, ';10;'),
(100, '204012', '2b7b701df4cf5180dd5a8bb101b96321', 'Student', 'Student', 0, ';10;'),
(101, '204013', '2632a9189905c888ead002e11e5c4446', 'Student', 'Prajyot Mane', 0, ';10;'),
(102, '204014', 'cdfdb99f049d35369dbb7769fdf6a85f', 'Student', 'Liji', 0, ';10;'),
(103, '204015', '022b10120cca063e8466be73478ef2fd', 'Student', 'Khush Bothra', 0, ';10;'),
(104, '204016', '0fc75bba75ed92317fe03a1218bdb848', 'Student', 'Student', 1, ';10;'),
(105, '204017', '3cc32320ccf0ce6a3515020b5871819b', 'Student', 'Omkar', 0, ';10;'),
(106, '204018', 'e82294259ba5798eb9563a12d3f3c8c5', 'Student', 'Student', 0, ';10;'),
(107, '204019', '199c7f5d76308ad5c25666ba0ce6ab70', 'Student', 'Tanuja Subhash badhe', 0, ';10;'),
(108, '204020', 'c15619246fdc18ee45faa36d279aa008', 'Student', 'Sayali Suresh Shedge', 0, ';10;'),
(109, '204021', '24e5181522eb1bc5068e73d59b4658e4', 'Student', 'Aryan Indalkar', 0, ';10;'),
(110, '204022', '665eb04251705245892f0841f5c20692', 'Student', 'Aniket', 0, ';10;'),
(111, '204023', '95dd04a433d995e79162dadacdd2fd00', 'Student', 'shruti', 0, ';10;'),
(112, '204024', '64cdce3a9cbb8e3a4209bd3b6c1add09', 'Student', 'uday ambhore', 0, ';10;'),
(113, '204025', '7c171aab730f0eab134399e4b8f96aff', 'Student', 'Ketaki Anand Kulkarni', 0, ';10;'),
(114, '204026', '2138b8d283123f5b9f449a0e0968fb7e', 'Student', 'Student', 0, ';10;'),
(115, '204027', '37081afc2fad070065ecf92586454402', 'Student', 'Student', 0, ';10;'),
(116, '204028', '7f266025dc45f2e14b2415f475cce468', 'Student', 'Anish Bonde', 0, ';10;'),
(117, '204029', '8b64d2451b7a8f3fd17390f88ea35917', 'Student', 'Vishal Gadge', 0, ';10;'),
(118, '204030', '5cf36ded25110768653b0a7b587d8cf5', 'Student', 'Prathmesh Deshmukh', 0, ';10;'),
(119, '204031', 'd165fdb801be252fa67136dd33009ca3', 'Student', 'Student', 0, ';10;'),
(120, '204032', '718500be624d3d0af21241a7e03a697b', 'Student', 'Srushti Hirve', 0, ';10;'),
(121, '204033', 'ab9997948f95f222c30a9f1f74ea27b0', 'Student', 'Student', 0, ';10;'),
(122, '204034', '0ebf36d2880cba89ffb5f989aa94ffa6', 'Student', 'Aditya Admane', 0, ';10;'),
(123, '204035', '8ef8b62576a1ac223ad7a2da6da1521c', 'Student', 'Ritesh Waghmare', 0, ';10;'),
(124, '204036', 'ba8bd343c80054a73d1474fcf601e0ec', 'Student', 'Student', 0, ';10;'),
(125, '204037', '93f31cb4365e52639396ad3fef89f08a', 'Student', 'Tanishk Kharatmol', 0, ';10;'),
(126, '204038', '8b3ec9a01f2567143c17426f16b132b9', 'Student', 'Kedar Kulkarni', 0, ';10;'),
(127, '204039', '827ccb0eea8a706c4c34a16891f84e7b', 'Student', 'supriya suryawanshi', 0, ';10;'),
(128, '204040', '541c787d9defcc152faf2a222aa96fe2', 'Student', 'Piyush Ghadge', 0, ';10;'),
(129, '204041', 'e176a02e622e44ad62cfb5789c6511eb', 'Student', 'Lizna Charaniya', 0, ';10;'),
(130, '204042', 'ff5e7901f81913906dd2883833c6bc25', 'Student', 'Suraj Samgir', 0, ';10;'),
(131, '204043', '155c08f302aa23a12a97caeb6af6d8d2', 'Student', 'Prajakta', 0, ';10;'),
(132, '204044', '13dd6efbcefcb4f4e2be76ad0a534039', 'Student', 'AYAAN', 0, ';10;'),
(133, '204045', '5b54e8e7b590d21e1879230bd9f7894f', 'Student', 'YASHASWI PANDIT BANNAPURE', 0, ';10;'),
(134, '204046', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', 'Sharvari Jagdale', 0, ';10;'),
(135, '204047', '0160e57afeff9bd24c0790bdd12961d8', 'Student', 'Student', 0, ';10;'),
(136, '204048', '1d87027695dda28f8d329f80f563adcf', 'Student', 'Student', 0, ';10;'),
(137, '204049', 'ba4cc5496dd899bdd95822bb09a48f53', 'Student', 'Sayali Dorge', 0, ';10;'),
(138, '204050', '9234003265e09cab33a6c325a0b9c282', 'Student', 'Student', 0, ';10;'),
(139, '204051', 'b8a7ab990a3c8b9646768fcf26225814', 'Student', 'Durvankur Walzade', 0, ';10;'),
(140, '204052', '6fb42da0e32e07b61c9f0251fe627a9c', 'Student', 'Neha chavan', 0, ';10;'),
(141, '204053', '2ac4dc67aa22d7785cbc392a39593bd6', 'Student', 'Tanmay Bora', 0, ';10;'),
(142, '204054', '49878439e73c29faa6b19ab9a2f00d9e', 'Student', 'Serenaa Nitin Mangade', 0, ';10;'),
(143, '204055', 'cd96b7e4524f9510644b81ae50c67c5b', 'Student', 'Student', 0, ';10;'),
(144, '204056', '872ee985688201838afe7e5f223cf24d', 'Student', 'Omkar Raut', 0, ';10;'),
(145, '204057', 'e8789dcd75d6f4ac5785208dc15bdb6b', 'Student', 'Deepak Shitole', 0, ';10;'),
(146, '204058', '743fdd442fa5ba79aa9f0efb9161f789', 'Student', 'Student', 0, ';10;'),
(147, '204059', '29d1e2357d7c14db51e885053a58ec67', 'Student', 'anirudha', 0, ';10;'),
(148, '204060', 'e807f1fcf82d132f9bb018ca6738a19f', 'Student', 'Shravani Kale', 0, ';10;'),
(149, '204061', 'e807f1fcf82d132f9bb018ca6738a19f', 'Student', 'Mahima', 0, ';10;'),
(150, '204062', '6a33249797b6529384dd4f94d024f771', 'Student', 'Student', 0, ';10;'),
(151, '204063', 'c813eba30bbeae5c4465afd5e463034b', 'Student', 'Student', 0, ';10;'),
(152, '204064', '92318d4a1f78082f84a1abfb0fa04fd0', 'Student', 'Jasshan Bhalgat', 0, ';10;'),
(153, '204065', '2024d9a40d391a1b11a988c5a64416c7', 'Student', 'Student', 0, ';10;'),
(154, '204066', '8af978ef0b83f21180d8e4e173bad4be', 'Student', 'Student', 0, ';10;'),
(155, '204067', '326ac5b9ae9fc30aeb255f526ea5cfe9', 'Student', 'Gargi Banerjee', 0, ';10;'),
(156, '204068', '900d36c2387b6a375acec8444a2c7edc', 'Student', 'Student', 0, ';10;'),
(157, '204069', 'b4c467da14de85bb4837504a18d51323', 'Student', 'Student', 0, ';10;'),
(158, '204070', '734f9d1e2d77eb3c2666166987a89a57', 'Student', 'Student', 0, ';10;'),
(159, '204071', 'e05bcbf60ccd1356f8c35a40952ddb6a', 'Student', 'Student', 0, ';10;'),
(160, '204072', 'bc561ee707207dae0f6fdf334dccf30a', 'Student', 'Student', 0, ';10;'),
(161, '204073', '2c5de6b9f6b526fe65f75434b8139a61', 'Student', 'Student', 0, ';10;'),
(162, '204074', '06646947b55a6a45231dd14c3b3279a7', 'Student', 'Student', 0, ';10;'),
(163, '204075', '061c4effae4f93f46b53f149c93b5aa9', 'Student', 'Student', 0, ';10;'),
(164, '204076', 'db33f16f61b4244e215f9660f6edf677', 'Student', 'Student', 0, ';10;'),
(165, '204077', '3d6bd4ac48f31d640703e07514e4edee', 'Student', 'Student', 0, ';10;'),
(166, '204078', '06f20d90b2a19b3467917457cfd7dd9c', 'Student', 'Student', 0, ';10;'),
(167, '204079', '3a9d96d126706839212d68cc4b618fb2', 'Student', 'Student', 0, ';10;'),
(168, '204080', '4d40dde956a57870081d6fd6124d0415', 'Student', 'Student', 0, ';10;'),
(169, '204081', 'ccbc77afbf9341efc48e5c888f617eb9', 'Student', 'Student', 0, ';10;'),
(170, '204082', 'dff0afb1211db12a87622fde398ec5e7', 'Student', 'Student', 0, ';10;'),
(171, '204083', 'fe70c26b0152476d69470660a4474f69', 'Student', 'Student', 0, ';10;'),
(172, '204084', 'b28b9d7edeeefa4707b01c3f71681226', 'Student', 'Student', 0, ';10;'),
(173, '204085', '1b938f9fb740ee104062e5bbe6af1b71', 'Student', 'Student', 0, ';10;'),
(174, '204086', '926c6d52ed3334d622c852babbb8cb1d', 'Student', 'Student', 0, ';10;'),
(175, '204087', '97e5f1097b02caf5421c2fa1a5a2f0ad', 'Student', 'Student', 0, ';10;'),
(176, '204088', '937a197a5c42e8c7281cdb4bc3efc885', 'Student', 'Student', 0, ';10;'),
(177, '204089', 'b829bd710e90913e0b29c5086d68c06e', 'Student', 'Student', 0, ';10;'),
(178, '204090', '76df7f0c0a801ef95a83532e20633701', 'Student', 'Student', 0, ';10;'),
(179, '204091', '2f1b4c2741cd030e4bf870f6ebdfc808', 'Student', 'Student', 0, ';10;'),
(180, '204092', '095c46c8086936d4df8c574435a3f3aa', 'Student', 'Student', 0, ';10;'),
(181, '204093', '5e4ff84f42d4a2ad8ac5d1ef97b59d70', 'Student', 'Student', 0, ';10;'),
(182, '204094', '5bb6f63a3e0ee8d320d166021759fb31', 'Student', 'Student', 0, ';10;'),
(183, '204095', 'fd137b032cde46ea9bf491b177830215', 'Student', 'Student', 0, ';10;'),
(184, '204096', '36de40b7d85a7e39ca22d7543186441a', 'Student', 'Student', 0, ';10;'),
(185, '204097', 'c24408b61b8af23cc6e584e82ce91407', 'Student', 'Student', 0, ';10;'),
(186, '204098', '8b6fab7b063093df1d5ef06448cc5f92', 'Student', 'Student', 0, ';10;'),
(187, '204099', '9cdfb439c7876e703e307864c9167a15', 'Student', 'Idk', 0, ';10;'),
(188, '2040100', '44657d1a1a39a6bf9eebd0a1d469e610', 'Student', 'Student', 0, ';10;'),
(189, '192101', 'e2f8ff310f669aa5f3850380bfd78d9f', 'Student', 'Student', 0, ';12;'),
(190, '192102', '2f237996a80b39ac36ed26a3ed10655b', 'Student', 'Student', 0, ';12;'),
(191, '192103', '82b089096630763f04a3980ffc71cf0c', 'Student', 'Student', 0, ';12;'),
(192, '192104', '779e3566f12555ed55246f311e30bb7e', 'Student', 'Student', 0, ';12;'),
(193, '192105', 'cf2a8cc3241fb776ea7cb131b1ff90e6', 'Student', 'Student', 0, ';12;'),
(194, '192106', '7b897694eb3db8fe0febd88157cff955', 'Student', 'Student', 0, ';12;'),
(195, '192107', '367e2d4e3986b36f95e5289496c89da4', 'Student', 'Student', 0, ';12;'),
(196, '192108', '4e07020810648b8badc6a44e9efced01', 'Student', 'Student', 0, ';12;'),
(197, '192109', '224c0530a97d44466ba2f8f75d4d9794', 'Student', 'Student', 0, ';12;'),
(198, '192110', 'b27582e7904e3dc5263439cfe73493cc', 'Student', 'Student', 0, ';12;'),
(199, '192111', '30720669122c04dd639ff2b230c11e93', 'Student', 'Student', 0, ';12;'),
(200, '192112', 'e1141cd7960d7429acaab2dd97800539', 'Student', 'Student', 0, ';12;'),
(201, '192113', 'b2651a3250f2b6ab9ab679c5c8137f96', 'Student', 'Student', 0, ';12;'),
(202, '192114', '403573432aad684bcea5038bbb398db7', 'Student', 'Student', 0, ';12;'),
(203, '192115', '13262ee90934c4e228f104b83ef67008', 'Student', 'Student', 0, ';12;'),
(204, '192116', 'b2f24911969fa2153d1905da3fdf3f35', 'Student', 'Student', 0, ';12;'),
(205, '192117', '356cf415b5127fd281d2a3f150820df6', 'Student', 'Student', 0, ';12;'),
(206, '192118', '5049d5d69eb850e160e453567456d248', 'Student', 'Student', 0, ';12;'),
(207, '192119', '6da50d801449daa6d01081a59bd49e30', 'Student', 'Student', 0, ';12;'),
(208, '192120', '980a8fc5261614b2c402642549dc99d8', 'Student', 'Student', 0, ';12;'),
(209, '192121', 'ae48b5cee14c1de74ca7d636261f61da', 'Student', 'Student', 0, ';12;'),
(210, '192122', 'eb4ebc8946fd18fb41989d8c0fe83d0d', 'Student', 'Student', 0, ';12;'),
(211, '192123', 'c7349dc8ac2e2b3ec64f41e51c995cc4', 'Student', 'Student', 0, ';12;'),
(212, '192124', '0190e6a940048da2ec0e34dfc0671f40', 'Student', 'Student', 0, ';12;'),
(213, '192125', '023e5616ffc44dc9b8e632cfde3271f2', 'Student', 'Student', 0, ';12;'),
(214, '192126', '6deba923d43a522e334981bbae0178c8', 'Student', 'Student', 0, ';12;'),
(215, '192127', '032a85b9fc51a3a3c2974efbf03ddee5', 'Student', 'Student', 0, ';12;'),
(216, '192128', '72f5e2cf8e86f58bceacc040051f1dee', 'Student', 'Student', 0, ';12;'),
(217, '192129', 'a774f3328f6ee4615c6548bb06138dd4', 'Student', 'Student', 0, ';12;'),
(218, '192130', 'dbf6001629ae0e84a012043ee698f165', 'Student', 'Student', 0, ';12;'),
(219, '-2100', '2673bb0d3dc775ece454b5d82046738f', 'Student', 'Student', 0, ';12;;13;'),
(220, '194035', '4399a78b0269c0837fdf10a3a3a840a1', 'Student', 'Student', 1, ';14;;15;;16;;17;'),
(221, '202101', '93877243a753b9448d522d016dac6a00', 'Student', 'Student', 1, ';13;'),
(222, '202102', '4b80de6d6b1a0fbaa62ed298ff7bf152', 'Student', 'Student', 1, ';13;'),
(223, '202103', 'e8b3ed0ab3b41af831e4197e98a0145e', 'Student', 'Student', 1, ';13;'),
(224, '202104', 'c0a9603234fb5a5a9fa08a15dd8cf2c8', 'Student', 'Student', 1, ';13;'),
(225, '202105', 'bd42fb12a5d223cb698660dc5f437bbe', 'Student', 'Student', 1, ';13;'),
(226, '202106', 'ca98ab2d8251636ac8f05904fd492124', 'Student', 'Student', 1, ';13;'),
(227, '202107', 'b2b87420534c3057f6d5259482313a8d', 'Student', 'Student', 1, ';13;'),
(228, '202108', 'ba8776b5e3c8508ad58abde379e18ef9', 'Student', 'Student', 1, ';13;'),
(229, '202109', 'f925d1245ef777ed1905b7e03297a8fd', 'Student', 'Student', 1, ';13;'),
(230, '202110', 'df724c7e8c01d02b07552016af0b9029', 'Student', 'Student', 1, ';13;'),
(231, '194036', '1a96772dc4724910ae56a705592c7554', 'Student', 'Student', 1, ';15;;16;;17;'),
(232, '194037', '9e78d4741b3acd246fb09b1115e06561', 'Student', 'Student', 1, ';15;;16;;17;'),
(233, '194038', 'c68e3081442ae81258d6b99e69692a71', 'Student', 'Student', 1, ';15;;16;;17;'),
(234, '194039', 'd8853c9bffcfe3254f49b7affa291ab8', 'Student', 'Student', 1, ';15;;16;;17;'),
(235, '194040', 'a0ca1327384029b53299b1d023c050f1', 'Student', 'Student', 1, ';15;;16;;17;'),
(236, '194041', 'ee7168f1098e9ab5d2d077647870f42e', 'Student', 'Student', 1, ';15;;16;;17;'),
(237, '194042', '15591e1b6a6da12fea8b08a4e4fdef92', 'Student', 'Student', 1, ';15;;16;;17;'),
(238, '194043', 'f158e64724f9fb56473ff27cbb05d15f', 'Student', 'Student', 1, ';15;;16;;17;'),
(239, '194044', 'e081233afd6f04a9698c1415538c321e', 'Student', 'Student', 1, ';15;;16;;17;'),
(240, '194045', '2ee15eda71151ec3c6bb568daaa3a27e', 'Student', 'Student', 1, ';15;;16;;17;'),
(241, '194046', '47f2ec605d24481a5efe0b48b815140a', 'Student', 'Student', 1, ';15;;16;;17;'),
(242, '194047', 'a0249a77ff8c16c0a6339fb6ed7b47c1', 'Student', 'Student', 1, ';15;;16;;17;'),
(243, '194048', 'b96d5bef59c1240f559df0a31961e9ee', 'Student', 'Student', 1, ';15;;16;;17;'),
(244, '194049', '425363129b99a78e1749fbc8bbf54a7e', 'Student', 'Student', 1, ';15;;16;;17;'),
(245, '194050', '3e029a62e9ea00bd18a2d99def9e522a', 'Student', 'Student', 1, ';15;;16;;17;'),
(246, '194051', 'd17c6bd874b9e0fd37bf9c3cf9c92ad7', 'Student', 'Student', 1, ';15;;16;;17;'),
(247, '194052', '0965647a7926af84ba3b9b62eebe6509', 'Student', 'Student', 1, ';15;;16;;17;'),
(248, '194053', '26606b6af431120007c9d3131d31b8d8', 'Student', 'Student', 1, ';15;;16;;17;'),
(249, '194054', 'd91368cda6b7b8f27ef2285d8475fa06', 'Student', 'Student', 1, ';15;;16;;17;'),
(250, '194055', '7fbd9f3a92fc53c38539098398d610da', 'Student', 'Student', 1, ';15;;16;;17;'),
(251, '194056', '11d8c28a64490a987612f2332502467f', 'Student', 'idk', 0, ';15;;16;;17;10;'),
(252, '194057', 'cc26fb0d08cf132833a90bc4371e78ac', 'Student', 'Student', 1, ';15;;16;;17;'),
(253, '194058', 'ea603b13cdd36bb4d40a01782f5c3f83', 'Student', 'Student', 1, ';15;;16;;17;'),
(254, '194059', '976332045db1dafee812950d9902077f', 'Student', 'Student', 1, ';15;;16;;17;'),
(255, '194060', '06a948e4606310c779feb519123a20ac', 'Student', 'Student', 1, ';15;;16;;17;'),
(256, '194061', '96a6cf47acae841739e50bc5345c9fc7', 'Student', 'Student', 1, ';15;;16;;17;'),
(257, '194062', '5356a5844174dff8b479b14cacba5a5d', 'Student', 'Student', 1, ';15;;16;;17;'),
(258, '194063', 'dfca8ea1eac031c9f447b5be54a370c9', 'Student', 'Student', 1, ';15;;16;;17;'),
(259, '194064', '1f1823ec933a33f6d02b06860d24beba', 'Student', 'Student', 1, ';15;;16;;17;'),
(260, '194065', 'e4d20841e5f2af2e8144d320337eff32', 'Student', 'Student', 1, ';15;;16;;17;'),
(261, '194066', '8eca44032c41c3af294f3c4fe5479dcd', 'Student', 'Student', 1, ';15;;16;;17;'),
(262, '194067', 'deb3c5453dae4ff5eec303c527e297f4', 'Student', 'Student', 1, ';15;;16;;17;'),
(263, '194068', 'f9ebdfcde3dc525758ac8be7236d6bf8', 'Student', 'Student', 1, ';15;;16;;17;'),
(264, '194069', 'ef089a7597010fdc488adb78463991ac', 'Student', 'Student', 1, ';15;;16;;17;'),
(265, '194070', 'd5e69b4e3996308b1dae38928f1771c8', 'Student', 'Student', 1, ';15;;16;;17;'),
(266, '194071', '4c273a24177d391f67fafd6d0a93bd95', 'Student', 'Student', 1, ';15;;16;;17;'),
(267, '194072', 'd6466422cca62bfb2696d758e65a9689', 'Student', 'Student', 1, ';15;;16;;17;'),
(268, '194073', 'c7d37a4b8bb5a29064834ff8f9ef3466', 'Student', 'Student', 1, ';15;;16;;17;'),
(269, '194074', 'd84b129d9ee086142daae3e20996a8ef', 'Student', 'Student', 1, ';15;;16;;17;'),
(270, '194075', 'abc5484007b44d819555888b8808a459', 'Student', 'Student', 1, ';15;;16;;17;'),
(271, '194076', '1c6979879704cb3d6432211655a73daf', 'Student', 'Student', 1, ';15;;16;;17;'),
(272, '194077', '58fa6aa009277908fad386b27a8af7ae', 'Student', 'Student', 1, ';15;;16;;17;'),
(273, '194078', '981b26619eb5cc6f9ddec14ac6715c25', 'Student', 'Student', 1, ';15;;16;;17;'),
(274, '194079', 'b7e12a1f5f95d231a1838c8cb9282714', 'Student', 'Student', 1, ';15;;16;;17;'),
(275, '194080', 'f318c00ccbb5fd55e0af316a8011b4c9', 'Student', 'Student', 1, ';15;;16;;17;'),
(276, '194081', '11efb0970c32db24e45ad0542e0d694c', 'Student', 'Student', 1, ';15;;16;;17;'),
(277, '194082', '596e04b050f79ff74d3732a78ef17537', 'Student', 'Student', 1, ';15;;16;;17;'),
(278, '194083', '5ad7a360378f81de07514e34024ae9e7', 'Student', 'Student', 1, ';15;;16;;17;'),
(279, '194084', 'c60e5d4be9d180e8aa6d51dfc35b5b2e', 'Student', 'Student', 1, ';15;;16;;17;'),
(280, '194085', 'feeb132e4aaaa74a404fed0263f79c08', 'Student', 'Student', 1, ';15;;16;;17;'),
(281, '194086', '39939f2935bbe38d968fab0e8edfe238', 'Student', 'Student', 1, ';15;;16;;17;'),
(282, '194087', 'f70a6dad82e199c639bda18251d6fc93', 'Student', 'Student', 1, ';15;;16;;17;'),
(283, '194088', 'ef0269f9352be50e0389747271382272', 'Student', 'Student', 1, ';15;;16;;17;'),
(284, '194089', 'cb5be652b0a2be512699e5efbd1816da', 'Student', 'Student', 1, ';15;;16;;17;'),
(285, '194090', '5340346c4ff6a8bb644c57ed0a2c2d97', 'Student', 'Student', 1, ';15;;16;;17;'),
(286, '194091', 'e20a2bb5827600f64da27ca5b0199127', 'Student', 'Student', 1, ';15;;16;;17;'),
(287, '194092', '75e858444ff751cd23a837712d617862', 'Student', 'Student', 1, ';15;;16;;17;'),
(288, '194093', '88c64702b93317228351606ee16eed16', 'Student', 'Student', 1, ';15;;16;;17;'),
(289, '194094', '1e5358bf3928c0ed34baa2bd7750481a', 'Student', 'Student', 1, ';15;;16;;17;'),
(290, '194095', 'e57ae674fbc1f4c80d44febf5a2558f2', 'Student', 'Student', 1, ';15;;16;;17;'),
(291, '194096', '8cdf2bd2dc7aaf7367c5135d70ac9603', 'Student', 'Student', 1, ';15;;16;;17;'),
(292, '194097', '6dacc2dce7f1ebe02a01c2d8eea5bd11', 'Student', 'Student', 1, ';15;;16;;17;'),
(293, '194098', 'bfb638b1433c8f3a30b87714e93e0d71', 'Student', 'Student', 1, ';15;;16;;17;'),
(294, '194099', 'ced58c2165f8943a8f39dbc4f035c52c', 'Student', 'Student', 1, ';15;;16;;17;'),
(295, '234001', 'a4150ba6d20f74d62f4ee578a27a7560', 'Student', 'Student', 1, ';18;;19;'),
(296, '234002', '35e86822673c9bf61067b38e3662c4f6', 'Student', 'Student', 1, ';18;;19;'),
(297, '234003', '94b75b043c5791aaba6b8eea57d3dd4e', 'Student', 'Student', 1, ';18;;19;'),
(298, '234004', '87102cf8905b42f739c0389a737a74ec', 'Student', 'Student', 1, ';18;;19;'),
(299, '234005', 'bbcfb7c112b330e0f304227ee9be758c', 'Student', 'Student', 1, ';18;;19;'),
(300, '234006', 'b62a2069194dc11be5d98e3c083b7980', 'Student', 'Student', 1, ';18;;19;'),
(301, '234007', '74dd37c7ca0cecca5c9b0dde783b2956', 'Student', 'Student', 1, ';18;;19;'),
(302, '234008', '4d6819c9151871a1930ad3d9cb462c5d', 'Student', 'Student', 1, ';18;;19;'),
(303, '234009', '08be97ef21f600d2343bf2100787075f', 'Student', 'Student', 1, ';18;;19;'),
(304, '234010', 'fc60b5d31bdc179fa627ae619ad7a631', 'Student', 'Student', 1, ';18;;19;'),
(305, '234011', '30787495c5827a2606306e08a3795043', 'Student', 'student', 1, ';18;18;;19;'),
(306, '234012', 'd4f587d8588c41482345153125a9ef24', 'Student', 'Student', 1, ';19;'),
(307, '234013', '8cad0e7d9439f47f017109ee0350a5cc', 'Student', 'Student', 1, ';19;'),
(308, '234014', '7df16a2cc67b9c71561f132406997f1c', 'Student', 'Student', 1, ';19;'),
(309, '234015', 'c2260b32f7cd05b5f44d904c7c0fa586', 'Student', 'Student', 1, ';19;'),
(310, '234016', '2dd0e9ac9bccd1d90f8d13816f7a0184', 'Student', 'Student', 1, ';19;'),
(311, '234017', 'b622755d130fe8c9d5fb383ad89e56df', 'Student', 'Student', 1, ';19;'),
(312, '234018', '998d01e12e2c65ae691d1cdac74dd6c0', 'Student', 'Student', 1, ';19;'),
(313, '234019', '946bc00761d098292245d5eabb21022a', 'Student', 'Student', 1, ';19;'),
(314, '234020', 'a060139da7660646eb825bfe8683a397', 'Student', 'Student', 1, ';19;'),
(315, '234021', 'b45e39dc40d07be703ef5b81740a5403', 'Student', 'Student', 1, ';19;'),
(316, '234025', '292ee91c62fdfaed6c2282b556e7bbb3', 'Student', 'Student', 1, ';19;'),
(317, '234026', '170e04d68d579d0f476d99d690ab7ef3', 'Student', 'Student', 1, ';19;'),
(318, '234027', '7ee1792e29a1b5431676e96f98680c2e', 'Student', 'Student', 1, ';19;'),
(319, '234028', '6d8f8d5fe138431e69492ed416c6d11b', 'Student', 'Student', 1, ';19;'),
(320, '234029', '8a09cecc1267b51de78633a5c2c8065f', 'Student', 'Student', 1, ';19;'),
(321, '234030', '9f5ee083accb9b634e138e22bef831c6', 'Student', 'Student', 1, ';19;'),
(322, '234031', 'b4eaf483b635eb43cbdf663919a8803f', 'Student', 'Student', 1, ';19;'),
(323, '234033', '95bd0b7b0651529e583113d2bdcfa7b5', 'Student', 'Student', 1, ';19;'),
(324, '234034', 'da7c103946de4a9694fdf20b89c6eecf', 'Student', 'Student', 1, ';19;'),
(325, '234035', '0ed9ac76c47607d5e3f12044c24ba658', 'Student', 'Student', 1, ';19;'),
(326, '234036', '1e836bde528ee9261659a977686b7134', 'Student', 'Student', 1, ';19;'),
(327, '234037', '7538b7d1f86c053867820b6834d0d1c1', 'Student', 'Student', 1, ';19;'),
(328, '234038', '1e2b4a54fab5ddb529f1da1bbab3195a', 'Student', 'Student', 1, ';19;'),
(329, '234039', 'cfe12290d5bee05473029652161be7f2', 'Student', 'Student', 1, ';19;'),
(330, '234040', 'd48c074ba0756aec74fdbf408ee6db20', 'Student', 'Student', 1, ';19;'),
(331, '234041', '0cdf4af32243d5ddaef046340880003e', 'Student', 'Student', 1, ';19;'),
(332, '234042', 'c2e5743fe0fbad181a0de9c3652fc9d9', 'Student', 'Student', 1, ';19;'),
(333, '234043', '9dd6d00c6373f0511c008cea6bb9f020', 'Student', 'Student', 1, ';19;'),
(334, '234044', '5a559cc11093333dd5986df2498c6aea', 'Student', 'Student', 1, ';19;'),
(335, '234045', 'bde0948c3eb619045e87b4d4c7ec16ec', 'Student', 'Student', 1, ';19;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
