-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 08:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `my_id` int(11) NOT NULL,
  `other_id` int(11) NOT NULL,
  `add_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `my_id`, `other_id`, `add_value`) VALUES
(1, 'hello', 1, 5, 6),
(2, 'hello', 1, 4, 5),
(3, 'hello', 1, 4, 5),
(4, 'hello', 1, 5, 6),
(5, 'hello', 1, 5, 6),
(6, 'kon ho', 1, 5, 6),
(7, 'kon', 1, 5, 6),
(8, 'hvhk', 1, 5, 6),
(9, 'hello', 5, 1, 6),
(10, 'kaha se ho', 5, 1, 6),
(11, 'tum ho kon', 1, 5, 6),
(12, 'tum kon ho', 1, 5, 6),
(13, 'me jo bhi hu', 5, 1, 6),
(14, 'hello bhai', 5, 4, 9),
(15, 'kaha pe ho tum', 5, 4, 9),
(16, 'ghar kab aaoge', 5, 4, 9),
(17, 'thodi der me ghar aaunge', 4, 5, 9),
(18, 'okk', 4, 5, 9),
(19, 'hello bro', 4, 4, 8),
(20, 'okk thik hai', 5, 4, 9),
(21, 'me aligarh me hu kal Delhi aunga', 4, 5, 9),
(22, 'thik hai', 5, 4, 9),
(23, 'Who are you', 5, 8, 13),
(24, 'hello', 1, 9, 10),
(25, 'who are you', 1, 9, 10),
(26, 'hello', 1, 10, 11),
(27, 'hello', 5, 10, 15),
(28, 'message save in my side', 1, 1, 2),
(29, 'hello', 1, 1, 2),
(30, 'Hello annu', 1, 11, 12),
(31, 'who are you', 11, 1, 12),
(32, 'where are you forom..?', 11, 1, 12),
(33, 'hello i am interest you new car..', 1, 5, 6),
(34, 'hello', 2, 1, 3),
(35, 'hello', 1, 2, 3),
(36, 'how are you..?', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `name_us` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `upload_id`, `file_name`, `name`, `description`, `name_us`) VALUES
(1, 1, '3D Chevrolet Camaro.jpg', 'Car BMW', 'hello my name is bhanu prataap singh today i am sale my new car BMW if any people are intersting in my this car so send me message in Chat box thank you...', 'bhanu pratap singh'),
(2, 1, 'Abarth 695 Tributo Ferrari.jpg', 'Car aba', 'hello my name is bhanu prataap singh today i am sale my new car Aba if any people are intersting in my this car so send me message in Chat box thank you...', 'bhanu pratap singh'),
(3, 1, 'Gty_Hacker_Group_Anonymous_er_160318_12x5_992.jpg', 'demo', 'this is a demo', 'bhanu pratap singh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `number` text NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `profile_image` text NOT NULL,
  `referral` text NOT NULL,
  `referral_point` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `number`, `email`, `name`, `profile_image`, `referral`, `referral_point`) VALUES
(1, 'bhanu', 'bhanu', '8449587821', 'rajputsingh4433@gmail.com', 'bhanu pratap singh', 'bhanu.jpg', '', 0),
(2, 'anchhash', 'anchhash', '7894561230', 'anchhash@gmail.com', 'Anchhash', 'bhanu.jpg', '', 0),
(3, 'hello', 'hello', '7878787878', 'tahi@gamil.com', 'hello', 'bhanu.jpg', '', 0),
(4, 'Vimal', 'Vimal789@@', '8194077011', 'vimalkumar@gmail.com', 'Vimal kumar', 'bhanu.jpg', '', 0),
(5, 'Ruby', 'Ruby', '8449587821', 'radhikarajput@gmail.com', 'Ruby rajput', 'DSC05625.JPG', '', 0),
(6, 'Suraj', 'suraj', '7894561234', 'suraj@gamil.com', 'suraj pal singh', 'bhanu.jpg', '', 0),
(7, 'vjvj', 'k', '7978', 'hjvjh@gmail.com', 'svadv', 'bhanu.jpg', '', 0),
(8, 'bhanu', 'kbkjbkbkj', '4654654654', 'hgcgjcjh@gmmb.com', 'bhanu kumar', 'bhanu.jpg', '', 0),
(9, 'Ruby', 'jhvhkj', '4654646332', 'hjgcjh@gmail.com', 'ruby kumari', 'DSC05625.JPG', '', 0),
(10, 'rahul', 'rahul', '789456258', 'svhbk@gmail.com', 'rahul rajput', 'bhanu.jpg', '', 0),
(11, 'annu', 'annu', '8989565623', 'annu789@gmail.com', 'Annu singh', 'bhanu.jpg', '', 0),
(12, 'amit', 'amit', '7300838721', 'staramit2001@gmail.com', 'Amit Singh', 'bhanu.jpg', '', 0),
(13, 'gaurav', 'gaurav', '7984651235', 'lodhirajput16@gmail.com', 'Gaurav Rajput', '12777.jpg', '', 0),
(14, 'gaurav', 'gaurav', '7984651235', 'lodhirajput16@gmail.com', 'Gaurav Rajput', '12777.jpg', '', 0),
(15, 'shalu', 'shalu', '4561237895', 'shalulodhi12@gmail.com', 'Shalu Rajput', 'bhanu.jpg', '', 0),
(16, 'kabita', 'kabita', '7894561230', 'kabita456@gmail.com', 'Kabita kumari', 'DSC05625.JPG', '', 10),
(17, 'gaurav', 'gaurav1', '7894561237', 'lodhirajput16@gmail.com', 'Gaurav Rajput', '51475165_2150426214980466_2544204318228086784_n.jpg', '123456', 0),
(18, 'rahul', 'rr123', '7894561230', 'lodhirajpuddt16@gmail.com', 'rahulsingh', '51105743_2150426218313799_7090109927514963968_n.jpg', 'E514A884', 20),
(19, 'guddy', 'guddy', '7080895623', 'guddy@gmial.com', 'Guddy Devi', '1 (21).jpg', '02125EE7', 0),
(20, 'amgala', 'amgala11', '9998885656', 'amgala45@gmail.com', 'amgala bhai', 'hjgu.jpg', 'F53AF86C', 0),
(21, 'sunil', 'sunil', '7456145623', 'sunil@gmail.com', 'sunil rajput', 'index.jpg', 'AAFF310B', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
