-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2021 at 04:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `programadores`
--

CREATE TABLE `programadores` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(4) NOT NULL,
  `linkedin` varchar(150) NOT NULL,
  `languages` varchar(150) NOT NULL,
  `employee` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programadores`
--

INSERT INTO `programadores` (`id`, `name`, `email`, `age`, `linkedin`, `languages`, `employee`) VALUES
(1, 'João', 'joao@gmail.com', 30, 'https://www.linkedin.com/feed/?trk=homepage-basic_google-one-tap-submit', 'php', 0),
(2, 'Antonio', 'Antonio@gmail.com', 33, 'https://www.linkedin.com/feed/?trk=homepage-basic_google-one-tap-submit', 'java', 0),
(6, 'Teste', 'rfcjoujou1@gmail.com', 12, 'sadas', 'Javascript', 0),
(7, 'joao', 't', 12, 'sjad@gfsad', 'JAVA', 0),
(8, 'Joao', 'j@gmail.com', 12, 'asasdaasd', 'Python', 0),
(11, 'JOAO', 'JOAOS@GMAIL.COM', 12, 'teste', 'ruby', 0),
(12, 'JOAO', 'JOAOS@GMAIL.COM', 12, 'teste', 'ruby', 1),
(13, 'we', 'rfcjoujou1@gmail.com', 26, 'https://www.linkedin.com/in/jo%C3%A3o-marcus-cardoso-167a1a18a/', 'Ruby', 0),
(14, 'teos', 'teos@gmail.com', 28, 'https://www.linkedin.com/in/teocalvo/', 'Python', 1),
(15, 'Thaus', 'testando@gmail.com', 28, 'https://www.linkedin.com/in/teocalvo/', 'Yo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recrutadores`
--

CREATE TABLE `recrutadores` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recrutadores`
--

INSERT INTO `recrutadores` (`id`, `name`, `email`, `password`, `token`) VALUES
(1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '7a793e5d852648f58ac5026a4b20e115'),
(2, 'joao', 'joao@gmail.com', '202cb962ac59075b964b07152d234b70', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programadores`
--
ALTER TABLE `programadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recrutadores`
--
ALTER TABLE `recrutadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programadores`
--
ALTER TABLE `programadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `recrutadores`
--
ALTER TABLE `recrutadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
