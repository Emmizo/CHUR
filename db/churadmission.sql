-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 09:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
(2, 'Kwizera Emmanuel            ', '5e4df0e9556366024aa275e53047ddfc', 'af76da74fdf6af3a1a41fddffec48a7b', 'emmizokwizera@gmail.com', 'Karongi'),
(5, 'Emmy Kwizera              ', '3176bcac8149759657ef655f8903576e', 'af76da74fdf6af3a1a41fddffec48a7b', 'emmizokwizera@gmail.com', 'Kigali');

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
(4, 'Dieudone HAKIZIMANA', 'Registrar');

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
(1, '29000', '4000', '2000', '2500', '1000', '30000', '400000');

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
(1, 'september', 'ON'),
(2, 'march', 'ON'),
(6, 'January', 'OFF');

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
('L1', 'Level I'),
('L2', 'Level II'),
('L3', 'Level III');

-- --------------------------------------------------------

--
-- Table structure for table `level_dept`
--

CREATE TABLE `level_dept` (
  `id` int(11) NOT NULL,
  `level_id` varchar(10) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_dept`
--

INSERT INTO `level_dept` (`id`, `level_id`, `dept_id`, `status`) VALUES
(1, 'L1', 'AGR', 0),
(2, 'L2', 'AGR', 0),
(3, 'L3', 'AGR', 0),
(4, 'L1', 'BBM', 0),
(5, 'L2', 'BBM', 0),
(6, 'L1', 'IT', 0),
(8, 'L2', 'IT', 0),
(9, 'L1', 'EK', 0),
(11, 'L1', 'FIN', 0),
(12, 'L2', 'KK', 0);

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
  `level_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_dept`
--

INSERT INTO `program_dept` (`id`, `program_id2`, `dept_id`, `level_id`) VALUES
(1, 'p1', 'AGR', 'L1'),
(2, 'p2', 'AGR', 'L1'),
(3, 'p1', 'AGR', 'L2'),
(4, 'p1', 'AGR', 'L3'),
(5, 'p2', 'AGR', 'L2'),
(6, 'p2', 'AGR', 'L3'),
(7, 'p3', 'AGR', 'L1'),
(8, 'p3', 'AGR', 'L2'),
(12, 'p2', 'KK', 'L2'),
(13, 'p1', 'FIN', 'L1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `idreg` int(11) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `program_id` varchar(10) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `intake` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `sec_option` varchar(40) NOT NULL,
  `level_id` varchar(20) NOT NULL,
  `startin_intake` date NOT NULL,
  `passed` varchar(50) DEFAULT 'Two  or more courses',
  `status` varchar(20) DEFAULT 'Agree'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`idreg`, `ID`, `program_id`, `dept_id`, `reg_date`, `intake`, `branch`, `sec_option`, `level_id`, `startin_intake`, `passed`, `status`) VALUES
(1, '1199184899595959', 'p1', 'AGR', '2019-12-13 06:59:06', 'september', 'Kigali', 'Computer science', 'L1', '0000-00-00', 'Two or more courses', 'agree');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `reg_id` varchar(191) NOT NULL,
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

INSERT INTO `students` (`reg_id`, `ID`, `f_name`, `l_name`, `sex`, `birthdate`, `email`, `tel`, `sec_option`, `guardian_name`, `guardian_tel`, `fathername`, `mothername`) VALUES
('CHUR2019727', '1199180112737838', 'Kwizera', 'Emmanuel', 'Male', '01/01/1991', 'emmizokwizera@gmail.com', '0781167275', 'Computer science', 'Rwamucyo Pierre Celestin', '0781626277', 'Rwamucyo Pierre Celestin', 'Mukakibibi Francine'),
('CHUR2019497', '1199184899595959', 'Kwizera', 'Emmanuel', 'Male', '01/01/1991', 'emmizokwizera@gmail.com', '0781167275', 'Computer science', 'Rwamucyo Pierre Celestin', '0781127738', 'Rwamucyo Pierre Celestin', 'Mukakibibi Francine'),
('CHUR2019160', '1199580192838838', 'Kwizera', 'Emmanuel', 'Male', '01/01/1991', 'emmizokwizera@gmail.com', '0781167275', 'Computer science', 'Rwamucyo Pierre Celestin', '0781626277', 'Rwamucyo Pierre Celestin', 'Mukakibibi Francine');

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
-- Indexes for table `level_dept`
--
ALTER TABLE `level_dept`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id2` (`level_id`),
  ADD KEY `dept_id` (`dept_id`);

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
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `program_id2` (`program_id2`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`idreg`),
  ADD KEY `ID` (`ID`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `dep_id` (`dept_id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `reg_id` (`reg_id`);

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
-- AUTO_INCREMENT for table `level_dept`
--
ALTER TABLE `level_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `program_dept`
--
ALTER TABLE `program_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `idreg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
