-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 08:00 PM
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
-- Table structure for table `applicants_data`
--

CREATE TABLE `applicants_data` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants_data`
--

INSERT INTO `applicants_data` (`id`, `first_name`, `last_name`, `email`, `gender`, `position`, `date_added`) VALUES
(1, 'Harrie', 'Burstow', 'hburstow0@youku.com', 'Female', 'Desktop Support Technician', '2024-11-19 18:38:36'),
(2, 'Ricoriki', 'Jago', 'rjago1@mysql.com', 'Male', 'VP Marketing', '2024-11-19 18:38:36'),
(3, 'Chris', 'Hevey', 'chevey2@marriott.com', 'Genderfluid', 'Senior Editor', '2024-11-19 18:38:36'),
(4, 'Corbet', 'Kingsmill', 'ckingsmill3@nps.gov', 'Male', 'Executive Secretary', '2024-11-19 18:38:36'),
(5, 'Forester', 'Grigorini', 'fgrigorini4@edublogs.org', 'Male', 'Accountant II', '2024-11-19 18:38:36'),
(6, 'Gerda', 'Cullrford', 'gcullrford5@dailymail.co.uk', 'Female', 'Computer Systems Analyst IV', '2024-11-19 18:38:36'),
(7, 'Janine', 'Evert', 'jevert6@psu.edu', 'Female', 'Budget/Accounting Analyst II', '2024-11-19 18:38:36'),
(8, 'Kati', 'Fittall', 'kfittall7@webmd.com', 'Female', 'Physical Therapy Assistant', '2024-11-19 18:38:36'),
(9, 'Floyd', 'Finlater', 'ffinlater8@newsvine.com', 'Male', 'Clinical Specialist', '2024-11-19 18:38:36'),
(10, 'Yvon', 'Sweetsur', 'ysweetsur9@wix.com', 'Male', 'Desktop Support Technician', '2024-11-19 18:38:36'),
(11, 'Elysee', 'Shivell', 'eshivella@sogou.com', 'Female', 'Occupational Therapist', '2024-11-19 18:38:36'),
(12, 'Micky', 'Gristhwaite', 'mgristhwaiteb@themeforest.net', 'Male', 'Technical Writer', '2024-11-19 18:38:36'),
(13, 'Angelique', 'Huguet', 'ahuguetc@youku.com', 'Agender', 'Chemical Engineer', '2024-11-19 18:38:36'),
(14, 'Law', 'Hellsdon', 'lhellsdond@ed.gov', 'Male', 'Accounting Assistant II', '2024-11-19 18:38:36'),
(15, 'Basile', 'Scinelli', 'bscinellie@bloomberg.com', 'Genderqueer', 'Structural Analysis Engineer', '2024-11-19 18:38:36'),
(16, 'Boot', 'Creany', 'bcreanyf@youtube.com', 'Male', 'Senior Developer', '2024-11-19 18:38:36'),
(17, 'Christan', 'Titmuss', 'ctitmussg@japanpost.jp', 'Female', 'Staff Accountant I', '2024-11-19 18:38:36'),
(18, 'Clifford', 'Giffaut', 'cgiffauth@sbwire.com', 'Male', 'Operator', '2024-11-19 18:38:36'),
(19, 'Durante', 'Barlee', 'dbarleei@upenn.edu', 'Male', 'Data Coordinator', '2024-11-19 18:38:36'),
(20, 'Glyn', 'Wainman', 'gwainmanj@edublogs.org', 'Male', 'Analyst Programmer', '2024-11-19 18:38:36'),
(21, 'Kristian', 'Uzzell', 'kuzzellk@blinklist.com', 'Male', 'Project Manager', '2024-11-19 18:38:36'),
(22, 'Marlyn', 'Earry', 'mearryl@mysql.com', 'Female', 'Account Representative III', '2024-11-19 18:38:36'),
(23, 'Leonie', 'Loadsman', 'lloadsmanm@senate.gov', 'Female', 'Help Desk Operator', '2024-11-19 18:38:36'),
(24, 'Matthew', 'Brandassi', 'mbrandassin@theglobeandmail.com', 'Male', 'GIS Technical Architect', '2024-11-19 18:38:36'),
(25, 'Brendin', 'Morales', 'bmoraleso@cdbaby.com', 'Male', 'Mechanical Systems Engineer', '2024-11-19 18:38:36'),
(28, 'Mitzi', 'Speek', 'mspeekr@tinyurl.com', 'Female', 'Nurse', '2024-11-19 18:38:36'),
(29, 'Robby', 'Maund', 'rmaunds@tamu.edu', 'Female', 'Social Worker', '2024-11-19 18:38:36'),
(30, 'Wilbur', 'Govan', 'wgovant@wix.com', 'Male', 'Biostatistician IV', '2024-11-19 18:38:36'),
(31, 'Elmer', 'Bleythin', 'ebleythinu@ed.gov', 'Male', 'Desktop Support Technician', '2024-11-19 18:38:36'),
(32, 'Germana', 'Brumble', 'gbrumblev@virginia.edu', 'Female', 'Web Designer I', '2024-11-19 18:38:36'),
(33, 'Arel', 'Roofe', 'aroofew@php.net', 'Male', 'Accountant III', '2024-11-19 18:38:36'),
(34, 'Constancia', 'Hoys', 'choysx@ibm.com', 'Agender', 'Recruiting Manager', '2024-11-19 18:38:36'),
(35, 'Thedric', 'Wasteney', 'twasteneyy@umn.edu', 'Male', 'Health Coach II', '2024-11-19 18:38:36'),
(36, 'Juliet', 'MacNeilage', 'jmacneilagez@elpais.com', 'Female', 'Mechanical Systems Engineer', '2024-11-19 18:38:36'),
(37, 'Reynolds', 'Jurn', 'rjurn10@statcounter.com', 'Polygender', 'Project Manager', '2024-11-19 18:38:36'),
(38, 'Jose', 'Cordes', 'jcordes11@1und1.de', 'Male', 'Structural Engineer', '2024-11-19 18:38:36'),
(40, 'Rasla', 'Gillbard', 'rgillbard13@mit.edu', 'Genderqueer', 'GIS Technical Architect', '2024-11-19 18:38:36'),
(41, 'Mara', 'Cabotto', 'mcabotto14@cam.ac.uk', 'Female', 'Software Consultant', '2024-11-19 18:38:36'),
(42, 'Kary', 'Abrahami', 'kabrahami15@wp.com', 'Female', 'Quality Control Specialist', '2024-11-19 18:38:36'),
(43, 'Felice', 'Pfleger', 'fpfleger16@mysql.com', 'Male', 'Nuclear Power Engineer', '2024-11-19 18:38:36'),
(44, 'Dani', 'Jerschke', 'djerschke17@geocities.com', 'Male', 'Administrative Assistant I', '2024-11-19 18:38:36'),
(45, 'Giavani', 'Frewer', 'gfrewer18@aboutads.info', 'Male', 'Community Outreach Specialist', '2024-11-19 18:38:36'),
(46, 'Madeleine', 'Lansly', 'mlansly19@webs.com', 'Female', 'Business Systems Development Analyst', '2024-11-19 18:38:36'),
(47, 'Jamil', 'Sey', 'jsey1a@ox.ac.uk', 'Genderqueer', 'Research Nurse', '2024-11-19 18:38:36'),
(48, 'Frankie', 'MacCook', 'fmaccook1b@cloudflare.com', 'Agender', 'Editor', '2024-11-19 18:38:36'),
(49, 'Morgan', 'Ridger', 'mridger1c@netscape.com', 'Male', 'Business Systems Development Analyst', '2024-11-19 18:38:36'),
(50, 'Sutton', 'Byforth', 'sbyforth1d@t.co', 'Male', 'Paralegal', '2024-11-19 18:38:36'),
(51, 'Javeson', 'Paccial', 'javeson.paccial.cvt@eac.edu.ph', 'Male', 'Janitor', '2024-11-19 18:45:08'),
(52, 'Javeson', 'Paccial', 'paccial123@gmail.com', 'Male', 'Janitor', '2024-11-19 18:47:33'),
(53, 'Javeson', 'Paccial', 'paccial123@gmail.com', 'Male', 'dasdas', '2024-11-19 18:47:52'),
(54, 'asdasdasd', 'asdasd', 'asdasd', 'Male', 'Janitor', '2024-11-19 18:48:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants_data`
--
ALTER TABLE `applicants_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants_data`
--
ALTER TABLE `applicants_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
