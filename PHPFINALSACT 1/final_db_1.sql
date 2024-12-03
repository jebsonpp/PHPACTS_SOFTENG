-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 05:39 AM
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
-- Database: `final_db_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `activity_log_id` int(11) NOT NULL,
  `operation` varchar(255) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `applicants_job` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicants_data`
--

CREATE TABLE `applicants_data` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants_data`
--

INSERT INTO `applicants_data` (`id`, `first_name`, `last_name`, `added_by`, `email`, `gender`, `position`, `date_added`) VALUES
(1, 'Harrie', 'Burstow', '0', 'hburstow0@youku.com', 'Female', 'Desktop Support Technician', '2024-11-19 18:38:36'),
(2, 'Ricoriki', 'Jago', '0', 'rjago1@mysql.com', 'Male', 'VP Marketing', '2024-11-19 18:38:36'),
(3, 'Chris', 'Hevey', '0', 'chevey2@marriott.com', 'Genderfluid', 'Senior Editor', '2024-11-19 18:38:36'),
(4, 'Corbet', 'Kingsmill', '0', 'ckingsmill3@nps.gov', 'Male', 'Executive Secretary', '2024-11-19 18:38:36'),
(5, 'Forester', 'Grigorini', '0', 'fgrigorini4@edublogs.org', 'Male', 'Accountant II', '2024-11-19 18:38:36'),
(6, 'Gerda', 'Cullrford', '0', 'gcullrford5@dailymail.co.uk', 'Female', 'Computer Systems Analyst IV', '2024-11-19 18:38:36'),
(7, 'Janine', 'Evert', '0', 'jevert6@psu.edu', 'Female', 'Budget/Accounting Analyst II', '2024-11-19 18:38:36'),
(8, 'Kati', 'Fittall', '0', 'kfittall7@webmd.com', 'Female', 'Physical Therapy Assistant', '2024-11-19 18:38:36'),
(9, 'Floyd', 'Finlater', '0', 'ffinlater8@newsvine.com', 'Male', 'Clinical Specialist', '2024-11-19 18:38:36'),
(10, 'Yvon', 'Sweetsur', '0', 'ysweetsur9@wix.com', 'Male', 'Desktop Support Technician', '2024-11-19 18:38:36'),
(11, 'Elysee', 'Shivell', '0', 'eshivella@sogou.com', 'Female', 'Occupational Therapist', '2024-11-19 18:38:36'),
(12, 'Micky', 'Gristhwaite', '0', 'mgristhwaiteb@themeforest.net', 'Male', 'Technical Writer', '2024-11-19 18:38:36'),
(14, 'Law', 'Hellsdon', '0', 'lhellsdond@ed.gov', 'Male', 'Accounting Assistant II', '2024-11-19 18:38:36'),
(15, 'Basile', 'Scinelli', '0', 'bscinellie@bloomberg.com', 'Genderqueer', 'Structural Analysis Engineer', '2024-11-19 18:38:36'),
(16, 'Boot', 'Creany', '0', 'bcreanyf@youtube.com', 'Male', 'Senior Developer', '2024-11-19 18:38:36'),
(17, 'Christan', 'Titmuss', '0', 'ctitmussg@japanpost.jp', 'Female', 'Staff Accountant I', '2024-11-19 18:38:36'),
(18, 'Clifford', 'Giffaut', '0', 'cgiffauth@sbwire.com', 'Male', 'Operator', '2024-11-19 18:38:36'),
(19, 'Durante', 'Barlee', '0', 'dbarleei@upenn.edu', 'Male', 'Data Coordinator', '2024-11-19 18:38:36'),
(20, 'Glyn', 'Wainman', '0', 'gwainmanj@edublogs.org', 'Male', 'Analyst Programmer', '2024-11-19 18:38:36'),
(21, 'Kristian', 'Uzzell', '0', 'kuzzellk@blinklist.com', 'Male', 'Project Manager', '2024-11-19 18:38:36'),
(22, 'Marlyn', 'Earry', '0', 'mearryl@mysql.com', 'Female', 'Account Representative III', '2024-11-19 18:38:36'),
(23, 'Leonie', 'Loadsman', '0', 'lloadsmanm@senate.gov', 'Female', 'Help Desk Operator', '2024-11-19 18:38:36'),
(24, 'Matthew', 'Brandassi', '0', 'mbrandassin@theglobeandmail.com', 'Male', 'GIS Technical Architect', '2024-11-19 18:38:36'),
(25, 'Brendin', 'Morales', '0', 'bmoraleso@cdbaby.com', 'Male', 'Mechanical Systems Engineer', '2024-11-19 18:38:36'),
(28, 'Mitzi', 'Speek', '0', 'mspeekr@tinyurl.com', 'Female', 'Nurse', '2024-11-19 18:38:36'),
(29, 'Robby', 'Maund', '0', 'rmaunds@tamu.edu', 'Female', 'Social Worker', '2024-11-19 18:38:36'),
(30, 'Wilbur', 'Govan', '0', 'wgovant@wix.com', 'Male', 'Biostatistician IV', '2024-11-19 18:38:36'),
(31, 'Elmer', 'Bleythin', '0', 'ebleythinu@ed.gov', 'Male', 'Desktop Support Technician', '2024-11-19 18:38:36'),
(32, 'Germana', 'Brumble', '0', 'gbrumblev@virginia.edu', 'Female', 'Web Designer I', '2024-11-19 18:38:36'),
(34, 'Constancia', 'Hoys', '0', 'choysx@ibm.com', 'Agender', 'Recruiting Manager', '2024-11-19 18:38:36'),
(35, 'Thedric', 'Wasteney', '0', 'twasteneyy@umn.edu', 'Male', 'Health Coach II', '2024-11-19 18:38:36'),
(36, 'Juliet', 'MacNeilage', '0', 'jmacneilagez@elpais.com', 'Female', 'Mechanical Systems Engineer', '2024-11-19 18:38:36'),
(37, 'Reynolds', 'Jurn', '0', 'rjurn10@statcounter.com', 'Polygender', 'Project Manager', '2024-11-19 18:38:36'),
(38, 'Jose', 'Cordes', '0', 'jcordes11@1und1.de', 'Male', 'Structural Engineer', '2024-11-19 18:38:36'),
(40, 'Rasla', 'Gillbard', '0', 'rgillbard13@mit.edu', 'Genderqueer', 'GIS Technical Architect', '2024-11-19 18:38:36'),
(41, 'Mara', 'Cabotto', '0', 'mcabotto14@cam.ac.uk', 'Female', 'Software Consultant', '2024-11-19 18:38:36'),
(42, 'Kary', 'Abrahami', '0', 'kabrahami15@wp.com', 'Female', 'Quality Control Specialist', '2024-11-19 18:38:36'),
(43, 'Felice', 'Pfleger', '0', 'fpfleger16@mysql.com', 'Male', 'Nuclear Power Engineer', '2024-11-19 18:38:36'),
(44, 'Dani', 'Jerschke', '0', 'djerschke17@geocities.com', 'Male', 'Administrative Assistant I', '2024-11-19 18:38:36'),
(45, 'Giavani', 'Frewer', '0', 'gfrewer18@aboutads.info', 'Male', 'Community Outreach Specialist', '2024-11-19 18:38:36'),
(46, 'Madeleine', 'Lansly', '0', 'mlansly19@webs.com', 'Female', 'Business Systems Development Analyst', '2024-11-19 18:38:36'),
(47, 'Jamil', 'Sey', '0', 'jsey1a@ox.ac.uk', 'Genderqueer', 'Research Nurse', '2024-11-19 18:38:36'),
(48, 'Frankie', 'MacCook', '0', 'fmaccook1b@cloudflare.com', 'Agender', 'Editor', '2024-11-19 18:38:36'),
(49, 'Morgan', 'Ridger', '0', 'mridger1c@netscape.com', 'Male', 'Business Systems Development Analyst', '2024-11-19 18:38:36'),
(50, 'Sutton', 'Byforth', '0', 'sbyforth1d@t.co', 'Male', 'Paralegal', '2024-11-19 18:38:36'),
(51, 'Javeson', 'Paccial', '0', 'javeson.paccial.cvt@eac.edu.ph', 'Male', 'Janitor', '2024-11-19 18:45:08'),
(52, 'Javeson', 'Paccial', '0', 'paccial123@gmail.com', 'Male', 'Janitor', '2024-11-19 18:47:33'),
(53, 'Javeson', 'Paccial', '0', 'paccial123@gmail.com', 'Male', 'dasdas', '2024-11-19 18:47:52'),
(54, 'asdasdasd', 'asdasd', '0', 'asdasd', 'Male', 'Janitor', '2024-11-19 18:48:51'),
(57, 'asdasd', 'asdads', '0', 'dasda', 'dsadsa', 'dsadas', '2024-12-02 05:20:09'),
(58, 'Javeson', 'Paccial', '0', 'paccial123@gmail.com', 'Female', 'Janitor', '2024-12-03 01:06:38'),
(60, 'asdasd', 'asdasdasd', NULL, 'asdasdasd', 'asdasdas', 'dasdasdasd', '2024-12-03 04:06:42'),
(61, 'Javeson', 'Paccial', NULL, 'test@email.com', 'Male', 'janitor', '2024-12-03 04:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_id`, `username`, `first_name`, `last_name`, `password`, `date_added`) VALUES
(1, 'javeson', 'Javeson', 'Paccial', '$2y$10$dMKD0uoLM1nNGubgatcLQ.XMYROUStG5NDr32Y0TYoCUX5sTEiklm', '2024-12-03 03:28:13'),
(2, 'jave', 'Javeson', 'Paccial', '$2y$10$FZAiTn/ea02v.3zfG.wtPOsNFC1JQjrub0EceZoKH7hs4/vP720X.', '2024-12-03 04:37:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `applicants_data`
--
ALTER TABLE `applicants_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicants_data`
--
ALTER TABLE `applicants_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
