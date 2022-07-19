-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 02:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact`
(
    `id`      int(11) NOT NULL,
    `name`    varchar(40)  NOT NULL,
    `email`   varchar(150) NOT NULL,
    `subject` text         NOT NULL,
    `message` text         NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`)
VALUES (1, '', '', '', ''),
       (2, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education`
(
    `id`      int(11) NOT NULL,
    `name`    varchar(50)  NOT NULL,
    `degree`  varchar(150) NOT NULL,
    `field`   varchar(150) NOT NULL,
    `level`   varchar(50)  NOT NULL,
    `started` timestamp    NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp (),
    `ended`   varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `name`, `degree`, `field`, `level`, `started`, `ended`)
VALUES (1, 'UBT-University of Business and Technology', 'Computer Science and Engineering',
        'Software Systems Engineering ', 'Bachelor Degree', '2018-10-01 15:29:18', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `repository`
--

CREATE TABLE `repository`
(
    `id`      int(11) NOT NULL,
    `name`    varchar(50)  NOT NULL,
    `field`   varchar(150) NOT NULL,
    `body`    text         NOT NULL,
    `started` timestamp    NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp (),
    `web`     varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repository`
--

INSERT INTO `repository` (`id`, `name`, `field`, `body`, `started`, `web`)
VALUES (1, 'Desktop Application', 'FilmiX',
        'Admin Area, User Area, CRUD, Generating Reports, Pagination, File Chooser, Log In Form, Home Section, Navigation Menu, List view on table',
        '2020-05-09 15:47:45', 'https://github.com/gramosshala/FilmiX'),
       (2, 'Desktop Application', 'MovieCRUD', 'Create Delete and Update', '2020-04-01 15:56:26',
        'https://github.com/gramosshala/MovieCRUD'),
       (3, 'Web', 'KuizShqip', 'Create user, create quiz, play different quiz, showing result  etc..',
        '2022-07-18 16:01:31', 'https://github.com/drenbilalliii/KuizShqip/commits?author=gramosshala');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills`
(
    `id`         int(11) NOT NULL,
    `name`       varchar(50) NOT NULL,
    `percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percentage`)
VALUES (1, 'HTML', 95),
       (2, 'CSS', 40),
       (3, 'Java', 65),
       (6, 'MySQL', 85),
       (7, 'JavaScript', 75),
       (8, 'PHP', 85),
       (9, 'Laravel', 85);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user`
(
    `id`          int(11) NOT NULL,
    `firstname`   varchar(50)  NOT NULL,
    `lastname`    varchar(50)  NOT NULL,
    `birthday`    timestamp    NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp (),
    `address`     varchar(150) NOT NULL,
    `email`       varchar(150) NOT NULL,
    `phonenumber` int(11) NOT NULL,
    `about`       text         NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `birthday`, `address`, `email`, `phonenumber`, `about`)
VALUES (1, 'Gramos', 'Shala', '2022-07-19 12:41:57', 'rr.Xhemajl Mustafa, nr.14, Fushe-Kosove', 'gramos_shala@live.com',
        45241322, 'Hi I\'m Gramos, a programmer with experience in developing,
        during the studies I\'ve done a several successful projects . However I’d like to show my portfolio where I\'ve posted here. My knowledge are in: PHP,
        Laravel, JavaScript, Java, Desktop Application, Web Developer.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repository`
--
ALTER TABLE `repository`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `repository`
--
ALTER TABLE `repository`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
