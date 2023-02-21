-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2023 at 07:38 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u883397428_wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `staff_schedule_id` int(11) NOT NULL,
  `appointment_number` int(11) NOT NULL,
  `purpose_for_appointment` int(11) NOT NULL,
  `other_purpose` mediumtext NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(30) NOT NULL,
  `client_came` enum('No','Yes','Pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `staff_id`, `client_id`, `staff_schedule_id`, `appointment_number`, `purpose_for_appointment`, `other_purpose`, `appointment_date`, `appointment_time`, `status`, `client_came`) VALUES
(1, 1, 1, 1, 1, 2, '', '2023-02-20', '14:22:00', 'In Process', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_purpose`
--

CREATE TABLE `appointment_purpose` (
  `id` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_purpose`
--

INSERT INTO `appointment_purpose` (`id`, `purpose`) VALUES
(1, 'OJT'),
(2, 'Inquire'),
(3, 'Caregiving'),
(4, 'Rehabilitation'),
(5, 'Consultation'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `suffix` enum('Sr','Jr','I','II','III') NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `address` varchar(255) NOT NULL,
  `martial_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `user_id`, `firstname`, `lastname`, `middlename`, `suffix`, `date_of_birth`, `gender`, `address`, `martial_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Khasmir', 'Basaluddin', 'Mahadali', '', '2023-02-26', 'Male', 'Sta. Catalina', 'Single', '2023-02-20 06:33:00', '2023-02-20 14:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal` int(50) NOT NULL,
  `background_history` longtext NOT NULL,
  `doctors_diagnosis` longtext NOT NULL,
  `allergies` longtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `firstname`, `lastname`, `suffix`, `date_of_birth`, `place_of_birth`, `gender`, `province`, `street`, `barangay`, `city`, `postal`, `background_history`, `doctors_diagnosis`, `allergies`, `picture`, `status`) VALUES
(1, 'Datu', 'Batumbakal', 'Jr', '1994-02-11', 'Manila', 'Male', 'Manila', 'Manila', 'Manila', 'Manila', 7000, '12412412412', '1241241241241', '12412412412', '', 0),
(2, 'fasdfasdf', 'sadfasdfsad', 'asdfsd', '2012-04-13', 'sdfsdfsd', 'sdfsdf', 'sdfsdf', 'sdfsd', 'fsdfsdfsd', 'sdfsdf', 8080, 'sdfsdf', 'sdfsdf', 'sdfsdfsd', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE `relationship` (
  `id` int(11) NOT NULL,
  `relationship` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`id`, `relationship`) VALUES
(1, 'Mother'),
(2, 'Father'),
(3, 'Parents'),
(4, 'Grandmother'),
(5, 'Grandfather'),
(6, 'Grandparents'),
(7, 'Mother In Law'),
(8, 'Father In Law'),
(9, 'Aunt'),
(10, 'Uncle'),
(11, 'Other Relative'),
(12, 'Friend');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `suffix` enum('Sr','Jr','I','II','III') NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `degree` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `added_on` datetime NOT NULL,
  `retired_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `firstname`, `middlename`, `lastname`, `suffix`, `address`, `date_of_birth`, `degree`, `position`, `status`, `added_on`, `retired_on`) VALUES
(1, 2, 'Staff', 'Staff', 'Staff', 'Jr', 'Sta Catalina', '2023-02-16', 'Graduate', 'Nurse', 'Active', '2023-02-20 07:25:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_schedule`
--

CREATE TABLE `staff_schedule` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `day` enum('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_schedule`
--

INSERT INTO `staff_schedule` (`id`, `staff_id`, `day`, `start_time`, `end_time`, `status`) VALUES
(1, 1, 'Monday', '07:33:22', '04:33:22', 'Active'),
(3, 1, 'Thursday', '18:38:54', '31:38:54', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` int(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` int(50) NOT NULL,
  `verification_status` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `fname`, `lname`, `email`, `phone`, `image`, `password`, `otp`, `verification_status`, `type`, `created_at`, `updated_at`) VALUES
(1, 1039537853, 'Khasmir', 'Basaluddin', 'khasmirbasaluddin@gmail.com', '09152354148', '', '123', 0, 'Verified', 'client', '2023-02-20 06:23:07', '2023-02-20 06:23:07'),
(2, 42139240, 'Staff', 'Staff', 'staff@gmail.com', '09152354148', '', '123', 0, 'Verified', 'staff', '2023-02-20 06:24:31', '2023-02-20 06:28:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `staff_schedule_id` (`staff_schedule_id`),
  ADD KEY `purpose_for_appointment` (`purpose_for_appointment`);

--
-- Indexes for table `appointment_purpose`
--
ALTER TABLE `appointment_purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_client` (`user_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_staff` (`user_id`);

--
-- Indexes for table `staff_schedule`
--
ALTER TABLE `staff_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_sched` (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_purpose`
--
ALTER TABLE `appointment_purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relationship`
--
ALTER TABLE `relationship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_schedule`
--
ALTER TABLE `staff_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`staff_schedule_id`) REFERENCES `staff_schedule` (`id`),
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`purpose_for_appointment`) REFERENCES `appointment_purpose` (`id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `user_client` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `user_staff` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `staff_schedule`
--
ALTER TABLE `staff_schedule`
  ADD CONSTRAINT `staff_sched` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
