-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 04:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `explorepedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `alphabet`
--

CREATE TABLE `alphabet` (
  `id` int(5) NOT NULL,
  `alphabet` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alphabet`
--

INSERT INTO `alphabet` (`id`, `alphabet`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_edited` datetime NOT NULL DEFAULT current_timestamp(),
  `isactive` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `date_added`, `date_edited`, `isactive`) VALUES
(1, 'Shopping-Mall', '2021-04-10 08:16:31', '2021-04-10 12:11:20', b'01'),
(2, 'Tourist-Place', '2021-04-10 08:16:50', '2021-04-10 12:12:17', b'01'),
(3, 'cafe', '2021-04-10 08:16:54', '2021-04-10 15:37:29', b'01'),
(4, 'Restaurant', '2021-04-10 08:17:02', '2021-04-10 15:37:29', b'01'),
(5, 'Market', '2021-04-10 08:17:09', '2021-04-10 15:37:29', b'01');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(5) NOT NULL,
  `state_id` int(5) NOT NULL,
  `city_name` varchar(25) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_edited` datetime NOT NULL DEFAULT current_timestamp(),
  `isactive` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `city_name`, `date_added`, `date_edited`, `isactive`) VALUES
(1, 1, 'Surat', '2021-04-10 09:09:40', '2021-04-10 12:17:44', b'01'),
(2, 1, 'Ahmedabad', '2021-04-10 12:52:31', '2021-04-10 12:52:31', b'01'),
(3, 3, 'Toronto ', '2021-04-13 19:24:20', '2021-04-13 19:24:20', b'01'),
(4, 9, 'Punggol', '2021-04-19 11:56:02', '2021-04-19 11:56:02', b'01'),
(5, 10, 'Alberta', '2021-04-19 12:10:33', '2021-04-19 12:10:33', b'01');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(5) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `isactive` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(5) NOT NULL,
  `country_name` varchar(25) NOT NULL,
  `country_code` int(5) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_edited` datetime NOT NULL DEFAULT current_timestamp(),
  `isactive` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`, `country_code`, `date_added`, `date_edited`, `isactive`) VALUES
(1, 'India', 91, '2021-04-10 08:21:57', '2021-04-10 15:44:43', b'01'),
(2, 'Canada', 1, '2021-04-10 08:22:05', '2021-04-10 15:44:43', b'01'),
(3, 'America', 1, '2021-04-10 08:22:09', '2021-04-10 15:44:43', b'01'),
(4, 'Singapore', 65, '2021-04-10 08:22:12', '2021-04-10 15:44:43', b'01'),
(5, 'New zealand', 64, '2021-04-10 08:22:35', '2021-04-10 15:44:43', b'01'),
(6, 'Russia', 7, '2021-04-10 08:22:41', '2021-04-10 12:24:06', b'01'),
(7, 'Polland', 48, '2021-04-10 08:22:45', '2021-04-10 15:44:43', b'01'),
(8, 'china', 86, '2021-04-10 10:27:50', '2021-04-10 15:44:43', b'01'),
(9, 'Singapore', 65, '2021-04-19 11:55:13', '2021-04-19 11:55:13', b'01');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 45685216, 744821349, 'hello '),
(2, 488515545, 744821349, 'hello i m Riya'),
(3, 744821349, 45685216, 'how are you ?'),
(4, 45685216, 744821349, 'fine ');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `name` varchar(20) NOT NULL,
  `category` int(5) NOT NULL,
  `famous` varchar(255) DEFAULT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` int(5) NOT NULL,
  `state` int(5) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `country` int(5) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_edited` datetime NOT NULL,
  `isactive` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `User_id`, `status`, `name`, `category`, `famous`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `description`, `photo`, `date_added`, `date_edited`, `isactive`) VALUES
(1, 3, 1, 'Mc Donalds', 3, 'a:1:{i:0;s:6:\"burger\";}', 'Ground Floor, The New World, Old Padra Rd,', 'near Gail India Office, Manisha Chowkdi', 1, 1, '390020', 1, 'McDonald\'s Corporation is an American fast food company, founded in 1940 as a restaurant operated by Richard and Maurice McDonald, in San Bernardino, California, United States.', '../Places/mcd.jpg', '2021-04-13 19:22:15', '2021-04-19 11:41:04', 1),
(2, 3, 1, 'Ahmedabad One Mall', 1, 'a:1:{i:0;s:6:\"Trends\";}', 'Plot No-216, Nr. Vastrapur Lake', 'Vastrapur', 2, 1, '380054', 1, 'The mall has three anchor stores.[9] The biggest anchor store HyperCity occupies 80,000 square feet is located at the basement of the mall. The other two anchors Lifestyle Stores.', '../Places/alpha-one-mall-in-ahmedabad-featured.jpg', '2021-04-13 19:23:20', '2021-04-19 11:48:35', 1),
(3, 3, 1, 'Niagara Falls', 2, 'a:1:{i:0;s:11:\"Photoshoot \";}', 'Niagara falls', 'NY', 3, 3, '905', 2, 'Discover Niagara Falls, Canada. Find attractions, restaurants, events, hotels and all the information you need to plan your trip.They consist of three different waterfalls. The American Falls and the Bridal Veil Falls in the USA.', '../Places/niagrafalls.jpg', '2021-04-13 19:25:08', '2021-04-19 11:49:50', 1),
(4, 4, 1, 'Adalaj Stepwell', 2, 'a:1:{i:0;s:11:\"Photoshoot \";}', 'Adalaj Rd', ' Adalaj', 2, 1, '382421', 1, 'adalaj Stepwell or Rudabai Stepwell is a stepwell located in the village of Adalaj, close to Ahmedabad city and in Gandhinagar district in the Indian state of Gujarat, and considered a fine example of Indian architecture work.', '../Places/adalaj.jpg', '2021-04-14 15:18:11', '2021-04-19 11:52:12', 1),
(5, 4, 1, 'Marina Bay Sands', 2, 'a:1:{i:0;s:5:\"Photoshoot\";}', '10', 'Bayfront Ave', 4, 9, '018956', 9, 'Visit Singapore\'s most iconic hotel for the world\'s largest rooftop Infinity Pool, award-winning dining, and a wide range of shopping and entertainment options.', '../Places/marina.jpg', '2021-04-16 07:23:10', '2021-04-16 07:44:17', 1),
(6, 4, 1, 'Banff National Park', 2, 'a:1:{i:0;s:11:\"Photoshoot \";}', '	Alberta\'s ', 'Rockies, ', 5, 10, '403', 2, 'Banff National Park is Canada\'s oldest national park, established in 1885. Located in Alberta\'s Rocky Mountains, 110–180 kilometres (68–112 mi) west of Calgary, Banff encompasses 6,641 square kilometres (2,564 sq mi)[3] of mountainous terrain', '../Places/canada-alberta-banff-national-park-best-campgrounds-waterfowl-lakes-kayakers.jpg', '2021-04-19 12:14:19', '2021-04-19 12:14:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `place_rating`
--

CREATE TABLE `place_rating` (
  `id` int(5) NOT NULL,
  `place_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `rating_number` tinyint(4) DEFAULT NULL,
  `comments` varchar(1024) NOT NULL,
  `date_added` date NOT NULL,
  `date_edited` date NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place_rating`
--

INSERT INTO `place_rating` (`id`, `place_id`, `user_id`, `rating_number`, `comments`, `date_added`, `date_edited`, `isactive`) VALUES
(1, 1, 2, 1, 'as', '2021-04-16', '2021-04-16', 1),
(2, 1, 2, 1, 'abcd', '2021-04-16', '2021-04-16', 1),
(3, 1, 2, 0, 'abcd', '2021-04-16', '2021-04-16', 1),
(4, 1, 2, 0, 'abcd', '2021-04-16', '2021-04-16', 1),
(5, 1, 2, 0, 'n', '2021-04-16', '2021-04-16', 1),
(6, 1, 2, 3, 'asa', '2021-04-16', '2021-04-16', 1),
(7, 1, 2, 5, 'www', '2021-04-16', '2021-04-16', 1),
(8, 1, 2, 5, 'rrr', '2021-04-16', '2021-04-16', 1),
(9, 1, 2, 0, 'sds', '2021-04-16', '2021-04-16', 1),
(10, 1, 2, 4, 's', '2021-04-16', '2021-04-16', 1),
(11, 1, 2, 4, 'asa', '2021-04-16', '2021-04-16', 1),
(12, 1, 2, 0, 's', '2021-04-16', '2021-04-16', 1),
(13, 1, 2, 0, 'sds', '2021-04-16', '2021-04-16', 1),
(14, 1, 2, 0, 'asas', '2021-04-16', '2021-04-16', 1),
(15, 1, 2, 5, 'sds', '2021-04-16', '2021-04-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(5) NOT NULL,
  `country_id` int(5) NOT NULL,
  `state_name` varchar(25) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_edited` datetime NOT NULL DEFAULT current_timestamp(),
  `isactive` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `state_name`, `date_added`, `date_edited`, `isactive`) VALUES
(1, 1, 'Gujarat', '2021-04-10 08:49:38', '2021-04-10 15:45:08', b'01'),
(2, 1, 'Kerela', '2021-04-10 09:00:24', '2021-04-10 12:26:53', b'01'),
(3, 2, 'Ontario', '2021-04-10 09:00:39', '2021-04-10 15:45:08', b'01'),
(4, 3, 'Washington', '2021-04-10 09:01:13', '2021-04-10 15:45:08', b'01'),
(5, 4, 'DownTown', '2021-04-10 09:02:45', '2021-04-10 15:45:08', b'01'),
(6, 5, 'Auckland', '2021-04-10 09:03:29', '2021-04-10 15:45:08', b'01'),
(7, 1, 'Madhya Pradesh', '2021-04-10 09:03:47', '2021-04-10 15:45:08', b'01'),
(8, 1, 'Maharashtra', '2021-04-10 09:03:55', '2021-04-10 15:45:08', b'01'),
(9, 9, 'punggol', '2021-04-19 11:55:46', '2021-04-19 11:55:46', b'01'),
(10, 2, 'Alberta', '2021-04-19 12:10:23', '2021-04-19 12:10:23', b'01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(5) NOT NULL,
  `Role_id` int(5) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Email_id` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `Date_edited` datetime DEFAULT current_timestamp(),
  `status` varchar(1000) NOT NULL,
  `reset_link_token` int(20) DEFAULT NULL,
  `exp_date` datetime DEFAULT NULL,
  `IsActive` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Role_id`, `unique_id`, `FirstName`, `LastName`, `Email_id`, `Password`, `Date_added`, `Date_edited`, `status`, `reset_link_token`, `exp_date`, `IsActive`) VALUES
(1, 1, 1439956495, 'Devangi ', 'Bhavsar', 'devangi@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-04-09 00:00:00', '2021-04-09 00:00:00', 'Active now', NULL, NULL, b'01'),
(2, 3, 744821349, 'RIYA', 'BHAVSAR', 'riyabhavsar1110@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-04-09 00:00:00', '2021-04-09 00:00:00', 'Active now', 0, '0000-00-00 00:00:00', b'01'),
(3, 2, 45685216, ' nirali ', 'kanwani', 'nirali@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-04-09 00:00:00', '2021-04-09 00:00:00', 'Active now ', NULL, NULL, b'01'),
(4, 2, 488515545, 'Shruti', 'Bhavsar', 'Shruti@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-04-12 00:00:00', '2021-04-12 00:00:00', 'Active now', NULL, NULL, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(5) NOT NULL,
  `User_id` int(5) NOT NULL,
  `DOB` datetime DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `CountryCode` varchar(5) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `ProfilePicture` varchar(500) DEFAULT NULL,
  `Address1` varchar(100) NOT NULL,
  `Address2` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `ZipCode` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `DateEdited` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `User_id`, `DOB`, `Gender`, `CountryCode`, `PhoneNumber`, `ProfilePicture`, `Address1`, `Address2`, `City`, `State`, `ZipCode`, `Country`, `DateAdded`, `DateEdited`) VALUES
(1, 2, '1555-10-11 00:00:00', 'female', '+53', '25212', '../upload/IMG_E3044.JPG', 'dfds', 'sdsds', 'dsds', 'dsdsd', '454', 'America', '2021-04-09 00:00:00', '2021-04-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `Id` int(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `Date_edited` datetime NOT NULL DEFAULT current_timestamp(),
  `IsActive` bit(2) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`Id`, `Name`, `Description`, `Date_added`, `Date_edited`, `IsActive`) VALUES
(1, 'SuperAdmin', 'all rights\r\n', '2021-04-06 15:00:35', '2021-04-06 15:00:35', b'01'),
(2, 'Admin', 'backend rights', '2021-04-06 15:04:37', '2021-04-06 15:04:37', b'01'),
(3, 'Member', 'frontend rights', '2021-04-06 15:04:37', '2021-04-06 15:04:37', b'01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alphabet`
--
ALTER TABLE `alphabet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state foreign key` (`state_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place` (`User_id`),
  ADD KEY `category` (`category`),
  ADD KEY `city` (`city`),
  ADD KEY `state` (`state`),
  ADD KEY `country` (`country`);

--
-- Indexes for table `place_rating`
--
ALTER TABLE `place_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `placerate` (`place_id`),
  ADD KEY `userrate` (`user_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country foreign key` (`country_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Test` (`Role_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User_id` (`User_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alphabet`
--
ALTER TABLE `alphabet`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `place_rating`
--
ALTER TABLE `place_rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `state foreign key` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`);

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `category` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `city` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `country` FOREIGN KEY (`country`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `place` FOREIGN KEY (`User_id`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `state` FOREIGN KEY (`state`) REFERENCES `state` (`id`);

--
-- Constraints for table `place_rating`
--
ALTER TABLE `place_rating`
  ADD CONSTRAINT `placerate` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`),
  ADD CONSTRAINT `userrate` FOREIGN KEY (`user_id`) REFERENCES `user` (`Id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `country foreign key` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `Test` FOREIGN KEY (`Role_id`) REFERENCES `user_role` (`Id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user` FOREIGN KEY (`User_id`) REFERENCES `user` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
