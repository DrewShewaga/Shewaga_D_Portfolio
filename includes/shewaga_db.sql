-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2018 at 04:18 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shewa690_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `img1` varchar(60) NOT NULL,
  `img2` varchar(60) NOT NULL,
  `img3` varchar(60) NOT NULL,
  `img4` varchar(60) NOT NULL,
  `about_desc` varchar(1500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `img1`, `img2`, `img3`, `img4`, `about_desc`) VALUES
(1, 'drew_port1.png', 'drew_port2.png', 'drew_port3.png', 'drew_port4.png', 'My name is Drew Shewaga. I am a student currently enrolled in the Interactive Media Design program at Fanshawe. I have focused my attention on front-end development and 3D design, however I am capable in UX / UI design, back-end development, and marketing.  Outside of school and work, my interests include making music, snowboarding, and when the time is available, playing video games. I am located in London, Ontario.  ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work`
--

DROP TABLE IF EXISTS `tbl_work`;
CREATE TABLE IF NOT EXISTS `tbl_work` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(1200) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_work`
--

INSERT INTO `tbl_work` (`id`, `title`, `description`, `img`) VALUES
(1, 'Pure Volume', 'This website is a Proof of Concept for PureVolume.com. Designed in 2018 to showcase music and entertainment articles. One of the main goals of this site was to drive traffic to advertisements.', 'pureVolume_preview.png'),
(2, 'Mind Over Melody', 'Mind Over Melody is a concept site loaded with SVG and CSS animations. The purpose of the site is to highlight different artists from popular cities around the world.', 'mind_over_melody_preview.png\r\n'),
(3, 'Starship Troopers', 'A website based around the 20th anniversary of Starship Troopers. It features a custom trailer, a custom video player, and more.', 'starship_troopers_preview.png'),
(4, 'Star Trek: Hour Count', 'This website is an interactive info-graphic that adds together all of Star Trek films and TV shows one by one. Discovery not included.', 'st_infographic_preview.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
