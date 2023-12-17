-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 12:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wewafflesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `messageTitle` varchar(70) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datesent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sender`, `receiver`, `messageTitle`, `message`, `datesent`, `status`) VALUES
('Ode', 'Romario', 'Data for ISOC Team', 'I have put the data for the ISOC team on your desk.  Good luck with everything!', '2023-12-17 17:05:35', 'unread'),
('Will', 'Ode', 'Invalid Login Credentials', 'Good morning Ode, I keep getting an error when logging into the documents server', '2023-12-17 17:10:49', 'unread'),
('Romario', 'everyone', 'Notice 1', 'All employees are asked to keep information shared on WeWaffle on here ONLY.  ', '2023-12-17 17:11:51', 'unread'),
('Romario', 'Will', 'Welcome', 'Welcome to the team Will!', '2023-12-17 17:12:15', 'unread'),
('Romario', 'Ode', 'Urgent Meeting Update', ' Hey Ode, the meeting scheduled for tomorrow has been rescheduled to today at 3:00 PM in the conference room. Please make sure to attend.', '2023-12-17 17:18:10', 'unread'),
('Romario', 'everyone', 'New Project Kick-off', 'Good news! We\'ve got the green light for the new project. Let\'s meet on Friday at 10:00 AM to discuss the kick-off plan. Get ready for some exciting challenges!', '2023-12-17 17:32:29', 'unread'),
('Romario', 'Ode', 'Tech Troubles', 'Help! My laptop is acting up again. Anyone good with tech stuff? I could use some advice on how to fix these mysterious glitches.', '2023-12-17 17:33:08', 'unread'),
('Romario', 'Ode', 'Project Deadline Extension', 'Team, good news! The project deadline has been extended by a week. This gives us some breathing room to refine our work. Let\'s collaborate and make the most of this extra time.', '2023-12-17 17:34:51', 'unread'),
('Romario', 'Ode', 'IT Support Needed', 'Facing technical issues with your workstation? Contact IT support at extension 123 for immediate assistance. Let\'s ensure everyone is working seamlessly.', '2023-12-17 17:35:29', 'unread'),
('Will', 'Ode', 'I\'m feeling Left Out', 'I\'m feeling really left out with no communication with me.  The constant talking with you and Romario is making me really sad and I find it ridiculous.  I\'ve received 1 message excluding the notices we all (Me and Ode) get.. ', '2023-12-17 17:40:16', 'unread'),
('Ode', 'Romario', 'Employee of the Month', 'Congratulations on being recognized as manager of the month!', '2023-12-17 17:46:24', 'unread'),
('Romario', 'everyone', 'Office Renovation Update', 'Exciting changes are happening! Our office renovation is underway. Stay tuned for updates on the progress and any temporary adjustments to workspace arrangements.\r\n', '2023-12-17 18:02:17', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `role` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `role`) VALUES
('Ode', 'ode2005', 'Staff'),
('Romario', 'admin123', 'Admin'),
('Will', 'will246', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
