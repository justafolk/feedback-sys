-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 09:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
(19, 'Data Structures R18CP3401', 'R18CP3403', 40, NULL),
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
(30, 'Linux Operating System R18CP3402', 'R18CP4404', 40, NULL),
(31, 'Project and Seminar 100 Credits', 'R18CP4405', 40, NULL),
(32, 'Industrial Training', 'R18CP4406', 40, NULL),
(33, 'Java Programming R18CP3404', 'R18CP5401', 40, NULL),
(34, 'Multimedia Techniques', 'R18CP5402', 40, NULL),
(35, 'PHP Programming', 'R18CP5403', 40, NULL),
(36, 'Mobile Computing', 'R18CP5404', 40, NULL),
(37, 'Python Programming', 'R18CP5405', 40, NULL),
(38, 'Computer Security R18CP3407', 'R18CP5406', 40, NULL),
(39, 'Advanced Java Programming', 'R18CP5407', 40, NULL),
(40, 'Advanced Computer Networks R18CP3407', 'R18CP5408', 40, NULL),
(41, 'Animation Techniques', 'R18CP5409', 40, NULL),
(42, 'Network Administration R18CP3407', 'R18CP5410', 40, NULL),
(43, 'Mechanical sub', 'R18ME3022', 21, NULL);

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
(6, 50, 'Electronics And Telecommuncation (Aided)'),
(7, 51, 'Electronics And Telecommuncation (Un-Aided)');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `cors_code` varchar(255) DEFAULT NULL,
  `faculty_name` varchar(255) DEFAULT NULL,
  `f_sdate` date DEFAULT NULL,
  `f_edate` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `total_feedback` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`f_id`, `f_name`, `cors_code`, `faculty_name`, `f_sdate`, `f_edate`, `status`, `total_feedback`, `active`) VALUES
(3, 'Basic Mathematics', 'R18SC1701', '@mda', '2022-08-25', '2022-08-29', 'Not Done', NULL, 0),
(4, 'Engineering Mathematics', 'R18SC1710', '@mda', '2022-08-25', '2022-08-25', 'Not Done', NULL, 1),
(5, 'Basic Physics', 'R18SC1703', '@mda', '2022-08-25', '2022-08-25', 'Not Done', NULL, 1),
(6, 'Engineering Physics', 'R18SC1706', '@mda', '2022-08-25', '2022-08-25', 'Not Done', NULL, 1),
(7, 'English', 'R18SC1707', '@mda', '2022-08-25', NULL, 'Not Done', NULL, 1),
(8, 'Electronic Devices', 'R18EX1415', '@mda', '2022-08-25', '2022-08-25', 'Not Done', NULL, 0),
(9, 'Workshop Practice', 'R18ME2210', '@mda', '2022-08-25', '2022-08-25', 'Not Done', NULL, 0),
(10, 'Data Structures R18CP3401', 'R18CP3403', '@mda', '2022-08-25', NULL, 'Not Done', NULL, 1),
(11, 'Network Administration R18CP3407', 'R18CP5410', '@mda', '2022-08-25', '2022-08-25', 'Not Done', NULL, 1),
(12, 'Aptitude Test Skills', 'R18SC1715', '@mda', '2022-08-25', '2022-08-25', 'Not Done', NULL, 0),
(13, 'Business Communication', 'R18SC1708', '@mda', '2022-08-29', '2022-08-29', 'Not Done', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `form_id` int(11) NOT NULL,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ini_date` date DEFAULT NULL,
  `instructions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_code` int(11) DEFAULT NULL,
  `group_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `req_status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`form_id`, `author`, `ini_date`, `instructions`, `status`, `course_name`, `dept_code`, `group_id`, `req_status`) VALUES
(1, 'Rupali Shete', '2022-07-31', ' Note:\r\n     - Please fill the survey questions and ratings in the order of your preference.\r\n     - Extreme left indicates postive and extreme right indicates negative.\r\n     - If any difficulty is encountered, please contact your respective supervisor. ', 'online', 'R18SC1710', 40, NULL, NULL);

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
(1, '1. Uniform Coverage of Syllabus', '[\"\"]', 'slider'),
(1, '2. Has the Teacher explained the subject by relating it to practical examples?', '[\"\"]', 'slider'),
(1, '3. Teacher\'s effectiveness in terms of Technical content, Communication Skills and use of Teaching aids.', '[\"\"]', 'slider'),
(1, '4. Support for the development of Students skill : practical Demonstration and Hands-on Training', '[\"\"]', 'slider'),
(1, '5. Does the teacher has clarity of students expectations?', '[\"\"]', 'slider'),
(1, '6. Does the teacher provides Motivation and Inspiration for students to learn?', '[\"\"]', 'slider'),
(1, '7. Does the teacher shows willingness to offer help and advice to students?', '[\"\"]', 'slider');

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
(194029, 1, '2022-09-04', '{\"slider-1\":4,\"slider-2\":2,\"slider-3\":3,\"slider-4\":1,\"slider-5\":3,\"slider-6\":3,\"slider-7\":1,\"form_id\":\"1\"}');

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
  `date` date DEFAULT NULL,
  `req` tinyint(1) NOT NULL DEFAULT 0,
  `accepted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `semester`, `subject`, `deptcode`, `activeRoll`, `teacher_id`, `year`, `date`, `req`, `accepted`) VALUES
(1, 5, 'R18SC1710', 40, '[194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194018,194019,194021,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194034,194035,194037,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194064,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194084,194085,194086,194087,194088,194089,194091,194092,194093,194094,194095,194096,194097,194098,194099,204091,204092,204093,204094,204095,204096,204097,204098,204099]', 2, 19, '2022-09-21', 1, 1),
(4, 5, 'R18ME2203', 40, '[194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034,194035,194037,194038,194039,194040,194041,194042,194043,194044,194045,194046,194047,194048,194049,194050,194051,194052,194053,194054,194055,194056,194057,194058,194059,194060,194061,194062,194063,194065,194066,194067,194068,194069,194070,194071,194072,194073,194074,194075,194076,194077,194078,194079,194080,194081,194082,194083,194084,194085,194086,194087,194088,194089,194090,194091,194092,194093,194094,194095,194096,194097,194098,194099,204091,204092,204093,204094,204095,204096,204097,204098,204099]', 2, 19, NULL, 0, 0),
(6, 1, 'R18ME2210', 40, '[194000,194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,194011,194012,194013,194014,194015,194016,194017,194018,194019,194020,194021,194022,194023,194024,194025,194026,194027,194028,194029,194030,194031,194032,194033,194034]', 2, 19, '2022-09-07', 1, 0),
(8, 4, 'R18SC1715', 40, '[194001,194002,194003,194004,194005,194006,194007,194008,194009,194010,204013,204014,204015,204016,204017,204018,204019,204020]', 2, 19, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `uname` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passwd` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT 'Student',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `passwd`, `role`, `name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Rupali Shete'),
(2, 'teacher', '8d788385431273d11e8b43bb78f3aa41', 'Faculty', 'Rupali Shete'),
(3, 'student', 'student', 'Student', 'Rupali Shete'),
(4, '194033', '194033', 'Student', 'Miyamoto Musashi'),
(5, '194029', 'dcb6e36579992baa0f211335d518f22c', 'Student', 'Sheldon op');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `name`, `email`, `phone_no`, `department`, `course`) VALUES
(1, 'Mayur Satish Khadde', 'mayur.194029@gmail.com', '7507738781', 'Mechanical Engineering (Un-Aided)', 'R18SC1710,R18SC1703,R18SC1706'),
(10, 'Mayur Khadde', 'mayur.194029@gmail.com', '7507738781', 'Civil Engineering (Aided)', 'R18SC1705');

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
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`form_id`);

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
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
