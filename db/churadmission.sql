-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 09:38 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `churadmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `user_username` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `fullname`, `user_username`, `user_password`, `user_email`, `user_level`) VALUES
(2, 'Kwizera Emmanuel        ', '5e4df0e9556366024aa275e53047ddfc', 'af76da74fdf6af3a1a41fddffec48a7b', 'emmizokwizera@gmail.com', 'user'),
(5, 'Emmy Kwizera       ', '3176bcac8149759657ef655f8903576e', 'af76da74fdf6af3a1a41fddffec48a7b', 'emmizokwizera@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chairman`
--

CREATE TABLE `chairman` (
  `chairman_id` int(10) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `post` varchar(68) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chairman`
--

INSERT INTO `chairman` (`chairman_id`, `full_name`, `post`) VALUES
(4, 'Dr Kabanda', 'Dean of Students');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `dept_id` varchar(10) NOT NULL,
  `faculity_id` varchar(10) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`dept_id`, `faculity_id`, `dept_name`) VALUES
('AGR', 'FAGR2', 'Agribusiness'),
('BBM', 'FBTI3', 'Business Management'),
('BMC', 'FAHU5', 'Mass Communication'),
('CS', 'FST1', 'Computer Science'),
('CSC', 'FED4', 'Computer Science Education'),
('EK', 'FED4', 'English and Swahili'),
('FIN', 'FBTI3', 'Finance'),
('IT', 'FST1', 'Information Technology'),
('Journ', 'FAHU5', 'Journalism'),
('KK', 'FED4', 'Kinyarwanda and Kiswahili'),
('PR', 'FAHU5', 'Public relation');

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

CREATE TABLE `faculity` (
  `faculty_id` varchar(10) NOT NULL,
  `faculity_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`faculty_id`, `faculity_name`) VALUES
('FAGR2', 'Faculty of Agriculture and Rural Development'),
('FAHU5', 'Faculty of Humanities and Social Sciences'),
('FBTI3', 'Faculty of Business,Trade and Investment'),
('FED4', 'Faculty of Education'),
('FST1', 'Faculty of Science and Technology');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `fees_id` int(10) NOT NULL,
  `reg_fees` varchar(10) NOT NULL,
  `student_ID_card` varchar(10) NOT NULL,
  `chursu` varchar(10) NOT NULL,
  `insurance` varchar(10) NOT NULL,
  `library_card` varchar(10) NOT NULL,
  `caution_fees` varchar(10) NOT NULL,
  `tuition_fees` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fees_id`, `reg_fees`, `student_ID_card`, `chursu`, `insurance`, `library_card`, `caution_fees`, `tuition_fees`) VALUES
(1, '40000', '4000', '2000', '2500', '1000', '30000', '450000');

-- --------------------------------------------------------

--
-- Table structure for table `intake_table`
--

CREATE TABLE `intake_table` (
  `intake_id` int(10) NOT NULL,
  `intake_name` varchar(20) NOT NULL,
  `intake_status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intake_table`
--

INSERT INTO `intake_table` (`intake_id`, `intake_name`, `intake_status`) VALUES
(1, 'september', 'OFF'),
(2, 'march', 'ON'),
(6, 'January', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` varchar(10) NOT NULL,
  `level_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`) VALUES
('L1', 'level I'),
('L2', 'level II'),
('L3', 'Level III');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` varchar(10) NOT NULL,
  `program_name` varchar(10) NOT NULL,
  `starting_time` time(6) NOT NULL,
  `endin_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`, `starting_time`, `endin_time`) VALUES
('p1', 'Day', '08:00:00.000000', '14:30:00.000000'),
('p2', 'Evening', '17:30:00.000000', '21:30:00.000000'),
('p3', 'week end', '08:00:00.000000', '17:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `program_dept`
--

CREATE TABLE `program_dept` (
  `id` int(11) NOT NULL,
  `program_id2` varchar(10) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `level_id2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_dept`
--

INSERT INTO `program_dept` (`id`, `program_id2`, `dept_id`, `level_id2`) VALUES
(2, 'p3', 'IT', 'L3'),
(3, 'p2', 'IT', 'L3'),
(4, 'p1', 'IT', 'L3'),
(5, 'p3', 'IT', 'L2'),
(6, 'p2', 'IT', 'L2'),
(7, 'p1', 'AGR', 'L1'),
(8, 'p1', 'IT', 'L2'),
(9, 'p3', 'IT', 'L1'),
(10, 'p2', 'IT', 'L1'),
(11, 'p1', 'IT', 'L1'),
(12, 'p3', 'AGR', 'L2'),
(13, 'p1', 'AGR', 'L2'),
(14, 'p2', 'AGR', 'L2'),
(15, 'p3', 'AGR', 'L1'),
(16, 'p1', 'AGR', 'L3'),
(17, 'p2', 'AGR', 'L3'),
(18, 'p3', 'AGR', 'L3'),
(19, 'p1', 'BBM', 'L1'),
(20, 'p2', 'BBM', 'L1'),
(21, 'p3', 'BBM', 'L1'),
(22, 'p1', 'BBM', 'L2'),
(23, 'p2', 'BBM', 'L2'),
(24, 'p3', 'BBM', 'L2'),
(25, 'p1', 'BBM', 'L3'),
(26, 'p2', 'BBM', 'L3'),
(27, 'p3', 'BBM', 'L3'),
(28, 'p1', 'BMC', 'L1'),
(29, 'p2', 'BMC', 'L1'),
(30, 'p3', 'BMC', 'L1'),
(31, 'p1', 'BMC', 'L2'),
(32, 'p2', 'BMC', 'L2'),
(33, 'p3', 'BMC', 'L2'),
(34, 'p1', 'BMC', 'L3'),
(35, 'p2', 'BMC', 'L3'),
(36, 'p3', 'BMC', 'L3'),
(57, 'p3', 'CSC', 'L3'),
(58, 'p1', 'CSC', 'L1'),
(59, 'p2', 'CSC', 'L1'),
(60, 'p3', 'CSC', 'L1'),
(61, 'p1', 'CSC', 'L2'),
(62, 'p2', 'CSC', 'L2'),
(63, 'p3', 'CSC', 'L2'),
(64, 'p1', 'CSC', 'L3'),
(65, 'p2', 'CSC', 'L3'),
(66, 'p1', 'EK', 'L1'),
(67, 'p3', 'EK', 'L2'),
(68, 'p2', 'EK', 'L1'),
(69, 'p3', 'EK', 'L1'),
(70, 'p1', 'EK', 'L2'),
(71, 'p2', 'EK', 'L2'),
(72, 'p1', 'EK', 'L3'),
(73, 'p2', 'EK', 'L3'),
(74, 'p3', 'EK', 'L3'),
(75, 'p1', 'FIN', 'L1'),
(76, 'p2', 'FIN', 'L1'),
(77, 'p3', 'FIN', 'L1'),
(78, 'p1', 'FIN', 'L2'),
(79, 'p2', 'FIN', 'L2'),
(80, 'p3', 'FIN', 'L2'),
(81, 'p1', 'FIN', 'L3'),
(82, 'p2', 'FIN', 'L3'),
(83, 'p3', 'FIN', 'L3'),
(84, 'p1', 'Journ', 'L1'),
(85, 'p2', 'Journ', 'L1'),
(86, 'p3', 'Journ', 'L1'),
(87, 'p1', 'FIN', 'L2'),
(88, 'p2', 'Journ', 'L2'),
(89, 'p3', 'Journ', 'L2'),
(90, 'p1', 'Journ', 'L3'),
(91, 'p2', 'Journ', 'L3'),
(92, 'p3', 'Journ', 'L3'),
(93, 'p1', 'Journ', 'L2'),
(94, 'p1', 'KK', 'L1'),
(95, 'p2', 'KK', 'L1'),
(96, 'p3', 'KK', 'L1'),
(97, 'p1', 'KK', 'L2'),
(98, 'p2', 'KK', 'L2'),
(99, 'p3', 'KK', 'L2'),
(100, 'p1', 'KK', 'L3'),
(101, 'p2', 'KK', 'L3'),
(102, 'p3', 'KK', 'L3'),
(103, 'p1', 'PR', 'L1'),
(104, 'p2', 'PR', 'L1'),
(105, 'p3', 'PR', 'L1'),
(106, 'p1', 'PR', 'L2'),
(107, 'p2', 'PR', 'L2'),
(108, 'p3', 'PR', 'L2'),
(109, 'p1', 'PR', 'L3'),
(110, 'p2', 'PR', 'L3'),
(111, 'p3', 'PR', 'L3'),
(112, 'p1', 'CS', 'L1'),
(113, 'p2', 'AGR', 'L1'),
(114, 'p1', 'CS', 'L2');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` varchar(20) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `program_id` varchar(10) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `reg_date` date NOT NULL,
  `intake` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `sec_option` varchar(40) NOT NULL,
  `level_id` varchar(20) NOT NULL,
  `startin_intake` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `ID`, `program_id`, `dept_id`, `reg_date`, `intake`, `branch`, `sec_option`, `level_id`, `startin_intake`) VALUES
('CHUR2018391', '1199274880098987', 'p3', 'IT', '2018-12-10', 'march', 'Kigali', 'Accountancy', 'L1', '2019-02-28'),
('CHUR2018428', '1783784880000987', 'p3', 'IT', '2018-12-10', 'September', 'Kigali', 'Computer science', 'L1', '2019-02-28'),
('CHUR2018727', '1199184859098934', 'p3', 'IT', '2018-12-10', 'September', 'Kigali', 'Computer science', 'L3', '2019-02-28'),
('CHUR2018922', '1199084880090007', 'p3', 'PR', '2018-12-10', 'march', 'Kigali', 'Accountancy', 'L3', '2019-02-28'),
('CHUR2019782', '1199687421358971', 'p1', 'AGR', '2019-04-08', 'march', 'Kigali', 'Computer science', 'L1', '2019-04-27'),
('CHUR2019802', '1199687421368971', 'p3', 'PR', '2019-04-08', 'march', 'Kigali', 'Accountancy', 'L2', '2019-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` varchar(30) NOT NULL,
  `f_name` varchar(40) NOT NULL,
  `l_name` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tel` varchar(40) NOT NULL,
  `sec_option` varchar(80) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `guardian_tel` varchar(25) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `f_name`, `l_name`, `sex`, `birthdate`, `email`, `tel`, `sec_option`, `guardian_name`, `guardian_tel`, `fathername`, `mothername`) VALUES
('1199084880090007', 'Tuyishime', 'Eric', 'Male', '01/11/1990', 'erictuyishime10@gmail.com', '0781167000', 'Accountancy', 'Kwizera Emmanuel', '0781155554', 'Mutsinzi Andre', 'Mukagasake Console'),
('1199184859098934', 'Kwizera', 'Emmanuel', 'Male', '01/11/1997', 'emmizokwizera@gmail.com', '0781167275', 'Computer science', 'Kwizera Emmanuel', '0781155554', 'Rwamucyo pierre celestin', 'Mukakibibi Francine'),
('1199274880098987', 'Muvandimwe', 'Francine', 'Female', '01/11/1992', 'fanny@gmail.com', '0781167885', 'Accountancy', 'Harindimana Alex', '0781155004', 'Hussen Kabanda', 'Murebwayire Jeanet'),
('1199687421358971', 'Niyibizi', 'Gaston', 'Male', '01/01/1996', 'niyibizigaston@gmail.com', '0782774887', 'Computer science', 'Rwamucyo Pierre Celestin', '0781123333', 'Rwamucyo Pierre Celestin', 'Mukakibibi Francine'),
('1199687421368971', 'Niyibizi', 'Gaston', 'Male', '01/10/1996', 'niyibizigaston@gmail.com', '0782774887', 'Accountancy', 'Rwamucyo Pierre Celestin', '0781123333', 'Rwamucyo Pierre Celestin', 'Mukakibibi Francine'),
('1783784880000987', 'Manishimwe', 'Yves', 'Male', '01/11/1997', 'yaungric@gmail.com', '0781167989', 'Computer science', 'Kwizera Emmanuel', '0781155554', 'Mandela J.Aime', 'Agnes Mukamana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `chairman`
--
ALTER TABLE `chairman`
  ADD PRIMARY KEY (`chairman_id`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`dept_id`),
  ADD KEY `faculity_id` (`faculity_id`);

--
-- Indexes for table `faculity`
--
ALTER TABLE `faculity`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`fees_id`);

--
-- Indexes for table `intake_table`
--
ALTER TABLE `intake_table`
  ADD PRIMARY KEY (`intake_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `program_dept`
--
ALTER TABLE `program_dept`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id2`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `level_id` (`level_id2`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `ID` (`ID`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `dep_id` (`dept_id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chairman`
--
ALTER TABLE `chairman`
  MODIFY `chairman_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `fees_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intake_table`
--
ALTER TABLE `intake_table`
  MODIFY `intake_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `program_dept`
--
ALTER TABLE `program_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`faculity_id`) REFERENCES `faculity` (`faculty_id`);

--
-- Constraints for table `program_dept`
--
ALTER TABLE `program_dept`
  ADD CONSTRAINT `program_dept_ibfk_1` FOREIGN KEY (`level_id2`) REFERENCES `level` (`level_id`),
  ADD CONSTRAINT `program_dept_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `departement` (`dept_id`),
  ADD CONSTRAINT `program_dept_ibfk_3` FOREIGN KEY (`program_id2`) REFERENCES `program` (`program_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `departement` (`dept_id`),
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`program_id`) REFERENCES `program` (`program_id`),
  ADD CONSTRAINT `registration_ibfk_4` FOREIGN KEY (`ID`) REFERENCES `students` (`ID`),
  ADD CONSTRAINT `registration_ibfk_5` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
