-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 07:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc-hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(2, 'Recruitment', 'admin', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date_started` date NOT NULL,
  `status` text NOT NULL,
  `present_street` varchar(255) NOT NULL,
  `present_barangay` varchar(255) NOT NULL,
  `present_city` varchar(255) NOT NULL,
  `present_province` varchar(255) NOT NULL,
  `present_zip` varchar(255) NOT NULL,
  `permanent_street` varchar(255) NOT NULL,
  `permanent_barangay` varchar(255) NOT NULL,
  `permanent_city` varchar(255) NOT NULL,
  `permanent_province` varchar(255) NOT NULL,
  `permanent_zip` varchar(255) NOT NULL,
  `provincial_street` varchar(255) NOT NULL,
  `provincial_barangay` varchar(255) NOT NULL,
  `provincial_city` varchar(255) NOT NULL,
  `provincial_province` varchar(255) NOT NULL,
  `provincial_zip` varchar(255) NOT NULL,
  `phil_no` varchar(12) NOT NULL,
  `pagibig_no` varchar(12) NOT NULL,
  `tin` varchar(12) NOT NULL,
  `sss_no` varchar(12) NOT NULL,
  `prc` varchar(12) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `f_occupation` varchar(255) NOT NULL,
  `f_date_of_birth` date NOT NULL,
  `f_contact_number` varchar(10) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `m_date_of_birth` date NOT NULL,
  `m_occupation` varchar(255) NOT NULL,
  `m_contact_number` varchar(10) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `spouse_occupation` varchar(255) NOT NULL,
  `spouse_date_of_birth` date NOT NULL,
  `spouse_contact_number` varchar(10) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_add` varchar(255) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `dependents_name` varchar(255) NOT NULL,
  `dependents_age` varchar(2) NOT NULL,
  `dependents_relationship` varchar(255) NOT NULL,
  `dependentsb_name` varchar(255) NOT NULL,
  `dependentsb_age` varchar(2) NOT NULL,
  `dependentsb_relationship` varchar(255) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `height` varchar(3) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `xray_date` date NOT NULL,
  `xray_result` varchar(255) NOT NULL,
  `hs_school` varchar(255) NOT NULL,
  `hs_attainment` varchar(255) NOT NULL,
  `hs_started` int(4) NOT NULL,
  `hs_ended` int(4) NOT NULL,
  `v_school` varchar(255) NOT NULL,
  `v_course` varchar(255) NOT NULL,
  `v_attainment` varchar(255) NOT NULL,
  `v_started` int(4) NOT NULL,
  `v_ended` int(4) NOT NULL,
  `college_school` varchar(255) NOT NULL,
  `college_course` varchar(255) NOT NULL,
  `college_attainment` text NOT NULL,
  `college_started` int(4) NOT NULL,
  `college_ended` int(4) NOT NULL,
  `research_name` varchar(150) NOT NULL,
  `research_date` date NOT NULL,
  `research_nametwo` varchar(150) NOT NULL,
  `research_datetwo` date NOT NULL,
  `seminar_name` varchar(150) NOT NULL,
  `seminar_role` text NOT NULL,
  `seminar_sponsor` varchar(150) NOT NULL,
  `seminar_date` date NOT NULL,
  `seminar_nametwo` varchar(150) NOT NULL,
  `seminar_roletwo` text NOT NULL,
  `seminar_sponsortwo` varchar(150) NOT NULL,
  `seminar_datetwo` date NOT NULL,
  `contact_relationship` text NOT NULL,
  `profile_completed` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_id`, `username`, `password`, `email`, `prefix`, `first_name`, `middle_name`, `last_name`, `nickname`, `gender`, `religion`, `civil_status`, `citizenship`, `birthday`, `place_of_birth`, `phone_number`, `department`, `position`, `date_started`, `status`, `present_street`, `present_barangay`, `present_city`, `present_province`, `present_zip`, `permanent_street`, `permanent_barangay`, `permanent_city`, `permanent_province`, `permanent_zip`, `provincial_street`, `provincial_barangay`, `provincial_city`, `provincial_province`, `provincial_zip`, `phil_no`, `pagibig_no`, `tin`, `sss_no`, `prc`, `father_name`, `f_occupation`, `f_date_of_birth`, `f_contact_number`, `mother_name`, `m_date_of_birth`, `m_occupation`, `m_contact_number`, `spouse_name`, `spouse_occupation`, `spouse_date_of_birth`, `spouse_contact_number`, `contact_name`, `contact_add`, `contact_number`, `dependents_name`, `dependents_age`, `dependents_relationship`, `dependentsb_name`, `dependentsb_age`, `dependentsb_relationship`, `weight`, `height`, `blood_type`, `xray_date`, `xray_result`, `hs_school`, `hs_attainment`, `hs_started`, `hs_ended`, `v_school`, `v_course`, `v_attainment`, `v_started`, `v_ended`, `college_school`, `college_course`, `college_attainment`, `college_started`, `college_ended`, `research_name`, `research_date`, `research_nametwo`, `research_datetwo`, `seminar_name`, `seminar_role`, `seminar_sponsor`, `seminar_date`, `seminar_nametwo`, `seminar_roletwo`, `seminar_sponsortwo`, `seminar_datetwo`, `contact_relationship`, `profile_completed`) VALUES
(42, 1, 'dr.caruz', 'dr.caruz', 'd@gmail.com', 'Ms.', 'Diana', 'Restauro', 'Caruz', 'dat', 'Female', 'Catholic', 'Married', 'Swedish', '2003-01-28', 'Davao City', '9461215252', 'Accounting/CMD', 'Admin', '2024-08-21', '', 'Block 78 Lot 18', 'Tigatto', 'Davao City', 'Davao del Sur', '8000', 'Block 78 Lot 18', 'Tigatto', 'Davao City', 'Davao del Sur', '8000', '', '', '', '', '', '874584758974', '746574753475', '123456789', '1234347547', '123456789', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', 'Feane', '', '9461215252', '', '', '', '', '', '', '45', '160', 'O+', '2024-08-21', 'Normal', '', '', 0, 0, '', '', '', 0, 0, '', '', '', 0, 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', 'Friend', 1),
(44, 2, 'cb.cinco', 'cb.cinco', 'c@gmail.com', 'Mr.', 'Cedric', 'Balaga', 'Cinco', 'ced', 'Male', 'Catholic', 'Single', 'Filipino', '2002-12-23', 'Davao City', '9461215252', 'ADMIN/HRMD', 'Faculty', '2024-08-31', '', 'Block 78 Lot 18', 'Tigatto', 'Davao City', 'Davao del Sur', '8000', 'Block 78 Lot 18', 'Tigatto', 'Davao City', 'Davao del Sur', '8000', '', '', '', '', '', '123456789123', '123456789123', '123456789', '1234567891', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', 'bengbeng', 'davao', '9461215252', '', '', '', '', '', '', '70', '150', 'A', '2024-09-01', 'Normal', '', '', 0, 0, '', '', '', 0, 0, '', '', '', 0, 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', 'Parent', 1),
(45, 3, 'jb.javier', 'jb.javier', 'janejavier@gmail.com', 'Mrs.', 'Jane', 'Brillas', 'Javier', 'denden', 'Female', 'Jehovah\'s Witness', 'Single', 'Filipino', '2001-09-01', 'Davao City', '9461215252', 'Allied Health', 'Faculty', '2023-07-09', '', 'Block 78 Lot 18', 'Tigatto', 'Davao City', 'Davao del Sur', '8000', 'Block 78 Lot 18', 'Tigatto', 'Davao City', 'Davao del Sur', '8000', '', '', '', '', '', '123456789123', '123456789123', '87348234', '1234567891', '7358934', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', 'Renato', 'Davao', '9461215252', '', '', '', '', '', '', '80', '146', 'O-', '2024-09-03', 'Normal', '', '', 0, 0, '', '', '', 0, 0, '', '', '', 0, 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', 'Parent', 0),
(46, 4, 'fr.sibal', 'fr.sibal', 'feanenethanel@gmail.com', 'Ms.', 'Feane Nethanel', 'Remonde', 'Sibal', 'Yan', 'Female', 'Catholic', 'Single', 'FILIPINO', '2002-11-25', 'Davao City', '9564075765', 'Alumni', 'Admin', '2009-12-06', '', '318 Turquoise ', 'Maa', 'Davao City', 'Davao del Sur', '8000', '318 Turquoise ', 'Maa', 'Davao City', 'Davao del Sur', '8000', 'N/A', 'N/A', 'Digos City', 'Davao del Sur', '8000', '123456789123', '123456789123', '87348234', '7778678', '1234567', 'Fermin Carillo', 'Driver', '1982-05-03', '9461215252', 'Eunice Anne Sibal', '1984-03-11', 'Nurse', '9461215252', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A', 'N/A', '9888888999', '', '', '', '', '', '', '43', '150', 'A', '2024-09-04', 'Normal', '', '', 0, 0, '', '', '', 0, 0, '', '', '', 0, 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', 'Friend', 1),
(47, 5, 'tb.swift', 'tb.swift', 'tm@gmail.com', 'Ms.', 'Taylor', 'Batumbakal', 'Swift', 'tay', 'Female', 'Catholic', 'Single', 'Filipino', '1994-10-27', 'Davao City', '9461215252', 'CPWC', 'Staff', '2016-07-26', '', 'Block 78 Lot 18', 'Tigatto', 'Davao City', 'Davao del Sur', '8000', 'Block 78 Lot 18', 'Tigatto', 'Davao City', 'Davao del Sur', '8000', '', '', '', '', '', '123456789123', '123456789123', '87348234', '1234567891', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', 'Mommy swift', '', '9461215252', '', '', '', '', '', '', '50', '150', 'B+', '2024-09-04', 'Normal', '', '', 0, 0, '', '', '', 0, 0, '', '', '', 0, 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', 'Parent', 1),
(48, 6, 'kn.lamigo', 'kn.lamigo', '', '', 'Kyle', 'N/A', 'Lamigo', '', '', '', '', '', '0000-00-00', '', '', 'Alumni', 'Faculty', '2024-09-27', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 0, 0, '', '', '', 0, 0, '', '', '', 0, 0, '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `date_started` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `last_name`, `first_name`, `employee_id`, `position`, `department`, `date_started`, `email`, `password`) VALUES
(1, 'Javier', 'Jane', 754563, 'Developer', '', '2020-03-18', '', ''),
(2, '', '', 0, '', '', '0000-00-00', '', ''),
(3, 'Sibal', 'Feane', 32434, 'Teacher', 'asbm', '2017-10-24', '', 'fn.sibal'),
(4, 'Coke', 'Coca', 4523, 'Cat', 'school_of_medicine', '2021-06-30', 'cc@gmail.com', 'cc123'),
(5, 'sdaw', 'sdaw', 2312, 'sdaw', 'rpo', '2024-05-22', 'sw@gmail.com', '1234'),
(6, 'sdaw', 'sdaw', 2312, 'sdaw', 'rpo', '2024-05-22', 'sw@gmail.com', '1234'),
(7, '', '', 0, '', '', '0000-00-00', '', ''),
(8, 'dsa', 'das', 2312, 'Cat', 'student_records', '2024-05-09', 'das@gmail.com', '12345'),
(9, 'final', 'final', 11212, 'final', 'alumni', '2022-02-07', 'final@gmail.com', '54321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
