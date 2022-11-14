-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 08:00 AM
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
  `course_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_code` int(11) DEFAULT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Please Enter Your Valuable Feedback ', '[]', 'long');

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
  `rejected` tinyint(1) NOT NULL DEFAULT 0,
  `sugg` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'admin', '996408b028ec985b02f800695397391e', 'Admin', 'Admin', 0, NULL),
(2, 'teacher', '8d788385431273d11e8b43bb78f3aa41', 'Faculty', 'teacher role', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `suggestion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idate` date DEFAULT NULL,
  `roll` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
