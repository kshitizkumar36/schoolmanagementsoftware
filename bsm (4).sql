-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 12:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `admission_sought_for_class` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `name_applicant` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `adhar` varchar(20) NOT NULL,
  `bpl` varchar(50) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `placeof_birth` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `f_designation` varchar(255) NOT NULL,
  `f_occupation` varchar(255) NOT NULL,
  `f_qualification` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `m_designation` varchar(255) NOT NULL,
  `m_occupation` varchar(255) NOT NULL,
  `m_qualification` varchar(255) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `g_designation` varchar(255) NOT NULL,
  `g_relation_with_app` varchar(255) NOT NULL,
  `g_mobile` varchar(12) NOT NULL,
  `vill` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `police_station` varchar(255) NOT NULL,
  `distict` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `previous_school` varchar(255) NOT NULL,
  `previous_class` varchar(255) NOT NULL,
  `previous_postion` varchar(20) NOT NULL,
  `previous_percentage` varchar(20) NOT NULL,
  `previous_year` varchar(20) NOT NULL,
  `previos_medium` varchar(255) NOT NULL,
  `proficiency` varchar(255) NOT NULL,
  `bros_sis_name` varchar(255) NOT NULL,
  `bros_sis_adm_no` varchar(255) NOT NULL,
  `bros_sis_class` int(11) NOT NULL,
  `bros_sis_position` varchar(20) NOT NULL,
  `bros_sis_name_2` varchar(255) NOT NULL,
  `bros_sis_adm_no_2` varchar(20) NOT NULL,
  `bros_sis_class_2` int(11) NOT NULL,
  `bros_sis_position_2` int(11) NOT NULL,
  `passport_photo` varchar(255) NOT NULL,
  `adhar_photo` varchar(255) NOT NULL,
  `birth_certificate` varchar(255) NOT NULL,
  `marksheet_photo` varchar(255) NOT NULL,
  `tc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class10result`
--

CREATE TABLE `class10result` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `registerd_students` varchar(255) NOT NULL,
  `students_passed` varchar(255) NOT NULL,
  `pass_percentage` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class12result`
--

CREATE TABLE `class12result` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `registered_students` varchar(255) NOT NULL,
  `students_passed` varchar(255) NOT NULL,
  `pass_percentage` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`id`, `class`, `subject`) VALUES
(1, 'Play School', 'hindi'),
(2, 'Play School', 'English'),
(3, 'Play School', 'Maths'),
(4, 'Play School', 'Drawing'),
(5, 'Nursary', 'Hindi'),
(6, 'Nursary', 'English'),
(7, 'Nursary', 'Maths'),
(8, 'Nursary', 'Drawing'),
(9, 'LKG', 'Hindi'),
(10, 'LKG', 'English'),
(11, 'LKG', 'Maths'),
(12, 'LKG', 'Drawing'),
(13, 'LKG', 'Moral Science'),
(14, 'UKG', 'Hindi'),
(15, 'UKG', 'English'),
(16, 'UKG', 'Maths'),
(17, 'UKG', 'Drawing'),
(18, 'UKG', 'Drawing'),
(19, 'UKG', 'Moral Science'),
(20, 'UKG', 'EVS'),
(21, 'class 1', 'Hindi'),
(22, 'class 1', 'English'),
(23, 'class 1', 'Maths'),
(24, 'class 1', 'EVS'),
(25, 'class 1', 'Computer'),
(26, 'class 1', 'Moral Science'),
(27, 'class 1', 'G K'),
(28, 'class 1', 'Drawing'),
(29, 'class 1', 'Sanskrit'),
(30, 'class 1', 'Urdu'),
(31, 'class 2', 'Hindi'),
(32, 'class 2', 'English'),
(33, 'class 2', 'Maths'),
(34, 'class 2', 'EVS'),
(35, 'class 2', 'Computer'),
(36, 'class 2', 'Moral Science'),
(37, 'class 2', 'G K'),
(38, 'class 2', 'Drawing'),
(39, 'class 2', 'Sanskrit'),
(40, 'class 2', 'Urdu'),
(41, 'class 3', 'Hindi'),
(42, 'class 3', 'English'),
(43, 'class 3', 'Maths'),
(44, 'class 3', 'EVS'),
(46, 'class 3', 'Computer'),
(47, 'class 3', 'Moral Science'),
(48, 'class 3', 'G K'),
(49, 'class 3', 'Drawing'),
(50, 'class 3', 'Sanskrit'),
(51, 'class 3', 'Urdu'),
(52, 'class 4', 'Hindi'),
(53, 'class 4', 'English'),
(54, 'class 4', 'Maths'),
(55, 'class 4', 'EVS'),
(56, 'class 4', 'Computer'),
(57, 'class 4', 'Moral Science'),
(58, 'class 4', 'G K'),
(59, 'class 4', 'Drawing'),
(60, 'class 4', 'Sanskrit'),
(61, 'class 4', 'Urdu'),
(62, 'class 5', 'Hindi'),
(63, 'class 5', 'English'),
(64, 'class 5', 'Maths'),
(65, 'class 5', 'EVS'),
(66, 'class 5', 'Computer'),
(67, 'class 5', 'Moral Science'),
(68, 'class 5', 'G K'),
(69, 'class 5', 'Drawing'),
(70, 'class 5', 'Sanskrit'),
(71, 'class 5', 'Urdu'),
(72, 'class 6', 'Hindi'),
(73, 'class 6', 'English'),
(74, 'class 6', 'Maths'),
(75, 'class 6', 'Science'),
(76, 'class 6', 'S.St'),
(77, 'class 6', 'Moral Science'),
(78, 'class 6', 'Computer'),
(79, 'class 6', 'G K'),
(80, 'class 6', 'Drawing'),
(81, 'class 6', 'Sanskrit'),
(82, 'class 6', 'Urdu'),
(83, 'class 7', 'Hindi'),
(84, 'class 7', 'English'),
(85, 'class 7', 'Maths'),
(86, 'class 7', 'Science'),
(87, 'class 7', 'S.St'),
(88, 'class 7', 'Moral Science'),
(89, 'class 7', 'Computer'),
(90, 'class 7', 'G K'),
(91, 'class 7', 'Drawing'),
(92, 'class 7', 'Sanskrit'),
(93, 'class 7', 'Urdu'),
(94, 'class 8', 'Hindi'),
(95, 'class 8', 'English'),
(96, 'class 8', 'Maths'),
(97, 'class 8', 'Science'),
(98, 'class 8', 'S.St'),
(99, 'class 8', 'Moral Science'),
(100, 'class 8', 'Computer'),
(101, 'class 8', 'G K'),
(102, 'class 8', 'Drawing'),
(103, 'class 8', 'Sanskrit'),
(104, 'class 8', 'Urdu'),
(105, 'class 9', 'English'),
(106, 'class 9', 'Hindi'),
(107, 'class 9', 'Maths'),
(108, 'class 9', 'Science'),
(109, 'class 9', 'S.St'),
(110, 'class 9', 'Information Technology'),
(111, 'class 10', 'English'),
(112, 'class 10', 'Hindi'),
(113, 'class 10', 'Maths'),
(114, 'class 10', 'Science'),
(115, 'class 10', 'S.St'),
(116, 'class 10', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `docs_info`
--

CREATE TABLE `docs_info` (
  `id` int(11) NOT NULL,
  `docs_info` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docs_info`
--

INSERT INTO `docs_info` (`id`, `docs_info`, `pdf`) VALUES
(11, 'NAME OF THE SCHOOL', 'name_19501767224_20105249944.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `exam_marks`
--

CREATE TABLE `exam_marks` (
  `id` int(11) NOT NULL,
  `ad_no` varchar(20) NOT NULL,
  `terminal` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `get_internal_marks` double NOT NULL,
  `full_internal_marks` double NOT NULL,
  `get_written_marks` double NOT NULL,
  `full_written_marks` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_marks`
--

INSERT INTO `exam_marks` (`id`, `ad_no`, `terminal`, `class`, `subject`, `get_internal_marks`, `full_internal_marks`, `get_written_marks`, `full_written_marks`) VALUES
(1, 'ksh001', 1, 'class 10', 'English', 42, 50, 65, 100),
(2, 'ksh001', 1, 'class 10', 'Hindi', 23, 50, 45, 100),
(3, 'ksh001', 1, 'class 10', 'Maths', 48, 50, 75, 100),
(4, 'ksh001', 1, 'class 10', 'Science', 25, 50, 68, 100),
(5, 'ksh001', 1, 'class 10', 'S.St', 41, 50, 68, 100),
(6, 'ksh001', 1, 'class 10', 'Information Technology', 44, 50, 89, 100),
(13, 'awv01', 1, 'class 10', 'English', 40, 50, 90, 100),
(14, 'awv01', 1, 'class 10', 'Hindi', 30, 50, 45, 100),
(15, 'awv01', 1, 'class 10', 'Maths', 47, 50, 89, 100),
(16, 'awv01', 1, 'class 10', 'Science', 45, 50, 68, 100),
(17, 'awv01', 1, 'class 10', 'S.St', 45, 50, 98, 100),
(18, 'awv01', 1, 'class 10', 'Information Technology', 25, 50, 75, 100);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `photo`) VALUES
(6, 'Award Distribution', '1665038141award distribution.jpg'),
(7, 'Awards', '1665038151Awards.jpg'),
(8, 'Badminton', '1665038163Badminton.jpg'),
(9, 'Balumath Exhibition', '1665038177balumath exhibition.jpg'),
(10, 'Class Presentation', '1665038246Class Presentation.jpg'),
(11, 'Computer Lab', '1665038260Computer Lab..jpg'),
(12, 'Cultural Dance', '1665038278cultural dance.jpg'),
(13, 'Decoration', '1665038289decoration.jpg'),
(14, 'Digital Classroom', '1665038302Digital classroom.jpg'),
(15, 'Drawing', '1665038316Drawing.jpg'),
(16, 'Gandhi Jayanti and Shastri jayanti', '1665038345Gandhi Jayanti & Shastri Jayanti.jpg'),
(17, 'Hospital Item', '1665038357hospital item.jpg'),
(18, 'Kho-Kho', '1665038370Kho-Kho.jpg'),
(19, 'Lib Books', '1665038384lib books.jpg'),
(20, 'Library', '1665038393Library.jpg'),
(22, 'Maths Lab', '1665038416Maths Lab..jpg'),
(23, 'National Festival', '1665038433National Festival.jpg'),
(24, 'Rangoli making', '1665038465rangoli making.jpg'),
(25, 'Saraswati Puja', '1665038485Saraswati pooja.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grades_terminalwise`
--

CREATE TABLE `grades_terminalwise` (
  `id` int(11) NOT NULL,
  `terminal` int(11) NOT NULL,
  `ad_no` varchar(255) NOT NULL,
  `class` varchar(20) NOT NULL,
  `total_marks` double NOT NULL,
  `percentage` double NOT NULL,
  `grade` varchar(2) NOT NULL,
  `class_rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades_terminalwise`
--

INSERT INTO `grades_terminalwise` (`id`, `terminal`, `ad_no`, `class`, `total_marks`, `percentage`, `grade`, `class_rank`) VALUES
(1, 0, 'ksh001', '', 0, 0, '', 0),
(2, 1, 'ksh001', '', 633, 70.333333333333, 'B1', 1),
(3, 2, 'ksh001', '', 618, 68.666666666667, 'B2', 0),
(4, 3, 'ksh001', '', 0, 0, '', 0),
(6, 1, 'awv01', 'class 10', 697, 77.444444444444, 'B1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mpd`
--

CREATE TABLE `mpd` (
  `id` int(11) NOT NULL,
  `info` varchar(500) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `photo`, `date`) VALUES
(1, 'award ceremoney will held on', '1665041249award distribution.jpg', '2022-10-06 07:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `pgttgtprt`
--

CREATE TABLE `pgttgtprt` (
  `id` int(11) NOT NULL,
  `principal` varchar(255) NOT NULL,
  `totalteacher` int(11) NOT NULL,
  `pgt` varchar(23) NOT NULL,
  `tgt` varchar(23) NOT NULL,
  `prt` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pgttgtprt`
--

INSERT INTO `pgttgtprt` (`id`, `principal`, `totalteacher`, `pgt`, `tgt`, `prt`) VALUES
(1, 'kshitiz', 23, '8', '0', '78');

-- --------------------------------------------------------

--
-- Table structure for table `result_academics`
--

CREATE TABLE `result_academics` (
  `id` int(11) NOT NULL,
  `docs` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_academics`
--

INSERT INTO `result_academics` (`id`, `docs`, `links`) VALUES
(1, 'NAME OF THE SCHOOl', 'name_alexa resort (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `school_infra`
--

CREATE TABLE `school_infra` (
  `id` int(11) NOT NULL,
  `info` varchar(255) NOT NULL,
  `detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_teaching`
--

CREATE TABLE `staff_teaching` (
  `id` int(11) NOT NULL,
  `info` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ad_no` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `name`, `ad_no`, `roll`, `class`, `dob`, `father`, `mother`) VALUES
(1, 'Kshitiz Kumar', 'ksh001', 1, 'class 10', '1999-12-10', 'B N Sharma', 'Malti Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class10result`
--
ALTER TABLE `class10result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class12result`
--
ALTER TABLE `class12result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docs_info`
--
ALTER TABLE `docs_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_marks`
--
ALTER TABLE `exam_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades_terminalwise`
--
ALTER TABLE `grades_terminalwise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpd`
--
ALTER TABLE `mpd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_academics`
--
ALTER TABLE `result_academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_infra`
--
ALTER TABLE `school_infra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_teaching`
--
ALTER TABLE `staff_teaching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class10result`
--
ALTER TABLE `class10result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class12result`
--
ALTER TABLE `class12result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_subject`
--
ALTER TABLE `class_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `docs_info`
--
ALTER TABLE `docs_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exam_marks`
--
ALTER TABLE `exam_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `grades_terminalwise`
--
ALTER TABLE `grades_terminalwise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mpd`
--
ALTER TABLE `mpd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result_academics`
--
ALTER TABLE `result_academics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_infra`
--
ALTER TABLE `school_infra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_teaching`
--
ALTER TABLE `staff_teaching`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
