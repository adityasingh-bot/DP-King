-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2019 at 10:57 AM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dp-king`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('rupali@2018', 'rupali@aditya'),
('raja@2018', 'raja@kavya');

-- --------------------------------------------------------

--
-- Table structure for table `love_images`
--

CREATE TABLE `love_images` (
  `image_name` varchar(100) NOT NULL,
  `image_date` varchar(30) NOT NULL,
  `image_author` varchar(50) NOT NULL,
  `image_category` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `love_images`
--

INSERT INTO `love_images` (`image_name`, `image_date`, `image_author`, `image_category`) VALUES
('vt 5.jpg', '2019-02-05', 'Kavya', 'Valentine_Photos'),
('rs1.jpg', '2019-02-05', 'Kavya', 'Valentine_Photos'),
('vt6.jpg', '2019-02-05', 'Kavya', 'Valentine_Photos'),
('vt7.jpg', 'February 05 2019', 'Kavya', 'Valentine_Photos'),
('vt8.jpg', 'February 05 2019', 'Kavya', 'Valentine_Photos'),
('td1.jpg', 'January 24 2019', 'Kavya', 'Valentine_Photos'),
('pr1.jpg', 'January 24 2019', 'Kavya', 'Valentine_Photos'),
('ch1.jpg', 'January 24 2019', 'Kavya', 'Valentine_Photos'),
('vt1.jpg', 'January 24 2019', 'Kavya', 'Valentine_Photos'),
('hg1.png', 'January 24 2019', 'Kavya', 'Valentine_Photos'),
('t2.jpg', 'January 25 2019', 'Kavya', 'Valentine_Photos'),
('p1.jpg', 'January 27 2019', 'Kavya', 'Valentine_Photos'),
('k1.jpg', 'January 28 2019', 'Kavya', 'Valentine_Photos'),
('p2.jpg', 'January 28 2019', 'Kavya', 'Valentine_Photos'),
('valentines 3.jpg', 'January 30 2019', 'Kavya', 'Valentine_Photos'),
('valentines 4.jpg', 'January 30 2019', 'Kavya', 'Valentine_Photos'),
('vt2.jpg', 'January 30 2019', 'Kavya', 'Valentine_Photos'),
('dpking-sad.png', 'December 06 2018', 'Aditya', 'Sad_Photos'),
('dpking-sad2.png', 'December 06 2018', 'Aditya', 'Sad_Photos'),
('sad1 copy.jpg', 'December 06 2018', 'Kavya', 'Sad_Photos'),
('sad 2.jpg', 'December 06 2018', 'Kavya', 'Sad_Photos'),
('sad 4.jpg', 'December 06 2018', '', 'Sad_Photos'),
('dpking-sad3.png', 'December 08 2018', 'aditya', 'Sad_Photos'),
('rb1.jpg', 'January 25 2019', 'Kavya', 'New_year_Photos'),
('dpwlebabu_love4.jpg', 'December 04 2018', 'Aditya', 'Love_Photos'),
('dowlebabu_love2.jpg', 'December 04 2018', 'Aditya', 'Love_Photos'),
('dpwlebabu_love.jpg', 'December 04 2018', 'Aditya', 'Love_Photos'),
('dpwlebabu_love3.jpg', 'December 04 2018', 'Aditya', 'Love_Photos'),
('dpwlebabu_love5.jpg', 'December 04 2018', 'Aditya', 'Love_Photos'),
('dpwlebabu_love6.jpg', 'December 04 2018', 'Aditya', 'Love_Photos'),
('friend 1.jpg', 'December 06 2018', 'Kavya', 'Friendship_Photos'),
('friend 2.jpg', 'December 06 2018', 'Kavya', 'Friendship_Photos'),
('Eid 1.jpg', 'December 06 2018', 'Kavya', 'Eid_Photos'),
('Eid 2.jpg', 'December 06 2018', 'Kavya', 'Eid_Photos'),
('Diwali 1.jpg', 'December 06 2018', 'Kavya', 'Diwali_Photos'),
('Diwali 2.jpg', 'December 06 2018', 'Kavya', 'Diwali_Photos'),
('dpwlebabu_christmas.jpg', 'December 04 2018', 'Aditya', 'Christmas_Photos'),
('dpwlebabu_christmas6.jpg', 'December 04 2018', 'Aditya', 'Christmas_Photos'),
('dpwlebabu_christmas2.jpg', 'December 04 2018', 'Aditya', 'Christmas_Photos'),
('dpwlebabu_christmas3.jpg', 'December 04 2018', 'Aditya', 'Christmas_Photos'),
('dpwlebabu_christmas5.jpg', 'December 04 2018', 'Aditya', 'Christmas_Photos'),
('dpwlebabu_christmas4.png', 'December 05 2018', 'Aditya', 'Christmas_Photos'),
('christmas 10.jpg', 'December 24 2018', 'Kavya', 'Christmas_Photos'),
('christmas 11.jpg', 'December 24 2018', 'Kavya', 'Christmas_Photos'),
('christmas 9.jpg', 'December 24 2018', 'Kavya', 'Christmas_Photos'),
('christmas 8.jpg', 'December 24 2018', 'Kavya', 'Christmas_Photos'),
('dpking_bday_photos.png', 'December 05 2018', 'Aditya', 'Birthday_Photos'),
('dpking_birthday1.png', 'December 05 2018', 'Aditya', 'Birthday_Photos'),
('birthday 3.jpg', 'December 06 2018', 'Kavya', 'Birthday_Photos'),
('birthday 6.jpg', 'December 06 2018', 'Kavya', 'Birthday_Photos'),
('birthday 4.jpg', 'December 06 2018', '', 'Birthday_Photos'),
('birthday 5.jpg', 'December 06 2018', 'Kavya', 'Birthday_Photos'),
('birthday.jpg', 'December 06 2018', 'Kavya', 'Birthday_Photos'),
('attitude 1.jpg', 'December 06 2018', 'Kavya', 'Attitude_Photos'),
('attitude 2.jpg', 'December 06 2018', 'Kavya', 'Attitude_Photos'),
('anni1.jpg', 'December 06 2018', 'Kavya', 'Anniversery_Photos'),
('anni 2.jpg', 'December 06 2018', 'Kavya', 'Anniversery_Photos'),
('anni 3.jpg', 'December 06 2018', 'Kavya', 'Anniversery_Photos'),
('programsyntax_holi.png', '2019-03-20', 'Aditya', 'Holi_Photos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `love_images`
--
ALTER TABLE `love_images`
  ADD PRIMARY KEY (`image_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
