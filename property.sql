-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 02:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank_details`
--

CREATE TABLE `tbl_bank_details` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_Number` varchar(255) NOT NULL,
  `Branch_Name` text NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_builder_register`
--

CREATE TABLE `tbl_builder_register` (
  `id` int(11) NOT NULL,
  `Company_name` text NOT NULL,
  `Ongoing_Project` varchar(255) NOT NULL,
  `Completed_Project` varchar(255) NOT NULL,
  `director_name` varchar(255) NOT NULL,
  `director_mobile` varchar(255) NOT NULL,
  `director_email` varchar(255) NOT NULL,
  `Contact_Person` text NOT NULL,
  `Contact_Person_mobile` varchar(255) NOT NULL,
  `Contact_Person_Email` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `login_count` int(11) NOT NULL,
  `builder_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_builder_register`
--

INSERT INTO `tbl_builder_register` (`id`, `Company_name`, `Ongoing_Project`, `Completed_Project`, `director_name`, `director_mobile`, `director_email`, `Contact_Person`, `Contact_Person_mobile`, `Contact_Person_Email`, `image_path`, `login_count`, `builder_id`) VALUES
(1, 'dddddddde333333hjyjjjjjjjjjj', 'nnn', 'nnn', 'Dnyaneshvar Jadhav', '9921989196', 'sanjayjadhav450@gmail.com', 'Dnyaneshvar Jadhav', '09921989196', 'sanjayjadhav450@gmail.com', '', 0, 0),
(11, 'dddddddde333333hjyjjjjjjjjjj', 'hh', 'nnn', 'Sanjay Jadhav', '9921989196', 'vxcvxc', 'Dnyaneshvar Jadhav', '09921989196', '09921989196', '', 0, 0),
(18, 'dddddddde333333hjyjjjjjjjjjj', 'nnn', 'nnn', 'Dnyaneshvar Jadhav', '9922973032', 'sanjayjadhav450@gmail.com', 'Dnyaneshvar Jadhav', '09921989196', '09921989196', 'http://localhost/property/uploads/2018-02-13-07-24-19-3462.jpg', 0, 0),
(22, 'dddddddde333333hjyjjjjjjjjjj', 'hh', 'nnn', 'Dnyaneshvar Jadhav', '9921989196', 'sanjayjadhav450@gmail.com', 'Dnyaneshvar Jadhav', '09921989196', 'r', 'http://localhost/property/uploads/18010914_754256894699565_7129977883226273509_n12.jpg', 0, 0),
(23, 'dddddddde333333hjyjjjjjjjjjj', 'ww', 'se', 'd', 'dd', 'dd', 'dd', 'dd', 'dd', 'http://localhost/property/uploads/12417845_508087205983203_2593090673125533188_n.jpg', 0, 0),
(24, 'dddddddde333333hjyjjjjjjjjjj', 'ff', 'ff', 'ff', 'ff', 'f', 'f', 'f', 'f', '', 0, 0),
(25, 'dddddddde333333hjyjjjjjjjjjj', 'ff', 'ff', 'ff', 'ff', 'f', 'f', 'f', 'f', '', 0, 0),
(26, 'dddddddde333333hjyjjjjjjjjjj', 'ff', 'ff', 'ff', 'ff', 'f', 'f', 'f', 'f', '', 0, 0),
(27, 'dddddddde333333hjyjjjjjjjjjj', 'r', 'se', 'd', 'dd', 'dd', 'dd', 'dd', 'dd', '', 1, 0),
(36, 'dddddddde333333', 'eeeeeeeeeeee333', '233333333333333', 'rrrrr33333333', 'gggg3333333', 'rt333333', 'sss333333', 'fgg33', 'ff33', '', 1, 32),
(37, 'rrrr', 'rrrrr', 'rrrrrrr', 'rrrrrr', 'rrr', 'r', 'r', 'r', 'r', '', 1, 33),
(38, 'ssss', 'sss', 's', 'w', 'f', 'h', 't', 't', 'e', '', 1, 3),
(39, '', '', '', '', '', '', '', '', '', '', 1, 3),
(40, 'fddddddd', 'yy', 'yy', 'yy', 'yy', 'yy', 'yy', 'yy', 'yy', '', 1, 3),
(41, 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', '', 1, 3),
(42, 'okop', 'knhygu', 'rgfukhi', 'uhih', 'uhih', 'yhu', 'jb', 'hbj', 'hbl', '', 1, 14),
(43, 'Kolte Patil Developer ', 'Devanagiri', 'Shivaneri ', 'Krishana Patil', '55877455226', 'krishana.patil@gmail.com', 'Kiran Patil', '6677558844', 'kiran.patil@gmail.com', '', 1, 2),
(44, 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', '', 1, 8),
(45, 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', '', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification_admin_user`
--

CREATE TABLE `tbl_notification_admin_user` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `admin_user_id` int(11) NOT NULL,
  `assign_id` int(11) NOT NULL,
  `referens_id` int(11) NOT NULL,
  `post_person_id` int(11) NOT NULL,
  `propert_woner_id` int(11) NOT NULL,
  `send_notifcation_id` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `read_me` int(11) NOT NULL,
  `referr_me` int(11) NOT NULL,
  `post_me` int(11) NOT NULL,
  `prow_me` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification_admin_user`
--

INSERT INTO `tbl_notification_admin_user` (`id`, `admin`, `admin_user_id`, `assign_id`, `referens_id`, `post_person_id`, `propert_woner_id`, `send_notifcation_id`, `feedback`, `read_me`, `referr_me`, `post_me`, `prow_me`) VALUES
(1, 1, 0, 1, 19, 10, 0, 5, 'hi   sir\r\n', 1, 1, 0, 0),
(2, 1, 0, 1, 19, 10, 0, 5, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 1, 1, 0, 0),
(3, 0, 5, 0, 0, 0, 0, 1, 'gggggggggggggg', 0, 0, 1, 0),
(4, 1, 0, 1, 19, 10, 0, 5, 'kjhgfcxzxcvbnm./', 1, 1, 0, 0),
(5, 1, 0, 1, 19, 10, 0, 5, 'nnnnnnnnnnnnnnn', 1, 1, 0, 0),
(6, 2, 0, 0, 19, 0, 0, 1, 'ok fine you have to good work', 0, 1, 0, 0),
(7, 2, 0, 0, 19, 0, 0, 1, 'kjhgfds  ', 0, 1, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 5, '-oijhgfcxcvbnm,.', 0, 0, 0, 0),
(9, 1, 0, 1, 17, 6, 0, 5, 'poiuyfdfghjkl;\'', 1, 0, 0, 0),
(10, 0, 0, 1, 1, 1, 0, 5, '\';lkjhg', 1, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 5, 'kihuyjghtfcrgdxertfycug hknlmn ,,,,,,,,,,,,,,,,,,,,,', 0, 0, 0, 0),
(12, 1, 0, 1, 11, 5, 0, 22, 'n, jkbu njknhli vjn;ojb  bm ;oj;', 1, 0, 0, 0),
(13, 1, 0, 1, 19, 9, 0, 5, 'jlulyjvgjvj', 1, 1, 0, 0),
(14, 2, 0, 0, 19, 0, 0, 1, 'biuoehwouhreounb bbuoihlk', 0, 1, 0, 0),
(15, 2, 0, 0, 19, 0, 0, 1, 'hjb8u  b kuh9ph b kjp[n erk  scHJfg8orhfbsd', 0, 1, 0, 0),
(16, 1, 0, 1, 11, 5, 0, 22, 'Hiii sanjay hear', 1, 0, 0, 0),
(17, 0, 25, 0, 0, 0, 0, 1, 'hii nngjjh  sanket ', 0, 0, 1, 0),
(18, 0, 25, 0, 0, 0, 0, 1, 'Give me your kotation ', 0, 0, 1, 0),
(19, 1, 0, 0, 0, 0, 0, 22, 'bbbbbbbbb', 0, 0, 0, 0),
(20, 1, 0, 1, 11, 5, 0, 22, 'Hii \r\nthis Custer visit side', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_reference`
--

CREATE TABLE `tbl_post_reference` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Occupation` text NOT NULL,
  `city` int(255) NOT NULL,
  `state` text NOT NULL,
  `referens_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_reference`
--

INSERT INTO `tbl_post_reference` (`id`, `username`, `mobile`, `email`, `Occupation`, `city`, `state`, `referens_id`) VALUES
(1, 'uuuuuu', 'uu', 'sanjayjadhav450@gmail.com', 'u', 0, '', 1),
(2, 'dd', 'g', 'gg', 'gg', 0, '', 9),
(3, 'Gavrav Don', '9566565', 'sanjayjadhav450@gmail.com', 'docter', 0, '', 11),
(4, 'u', '9923754421', 'vaijnathjadhav1991@gmail.com', 'docter', 0, '', 11),
(5, 'sanjay jadhav', '9923754421', 'sanjayjadhav450@gmail.com', 'php developer', 0, '', 11),
(6, 'prabhas ', '9988556633', 'sanjayjadhav450@gmail.com', 'actor', 0, '', 17),
(7, 'ddddddddddd', 'dd', 'sanjayjadhav450@gmail.com', 'docter', 0, '', 17),
(8, 'shraddha kulkarni', '9923754421', 'ramchandr.jadhav@gmail.com', 'docter', 0, '', 19),
(9, 'rrr', 'rr', 'sanjayjadhav450@gmail.com', 'docter', 0, '', 19),
(10, 'vvvvvvvvvvvvvvv', '9923754421', 'krish.patil@gmail.com', 'vv', 0, '', 19),
(11, 'prajehjkt', '9923754433', 'sanjayjadhav450@gmail.com', 'g', 0, '', 19),
(12, 'rr', '9822025006', 'ram.wakadkar.yuvamanch@gmail.com', 'android', 0, '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_refer_person_assign`
--

CREATE TABLE `tbl_post_refer_person_assign` (
  `id` int(11) NOT NULL,
  `post_referns_id` int(11) NOT NULL,
  `admin_user_id` int(11) NOT NULL,
  `assign_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_refer_person_assign`
--

INSERT INTO `tbl_post_refer_person_assign` (`id`, `post_referns_id`, `admin_user_id`, `assign_id`) VALUES
(1, 1, 5, 1),
(2, 3, 5, 1),
(3, 5, 5, 1),
(4, 6, 5, 1),
(5, 6, 5, 1),
(6, 7, 5, 1),
(7, 8, 5, 1),
(8, 9, 5, 1),
(9, 10, 5, 1),
(10, 5, 22, 1),
(11, 5, 5, 1),
(12, 11, 5, 1),
(13, 5, 22, 1),
(14, 6, 22, 1),
(15, 6, 22, 1),
(16, 3, 22, 1),
(17, 3, 22, 1),
(18, 1, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refer_admin_user`
--

CREATE TABLE `tbl_refer_admin_user` (
  `id` int(11) NOT NULL,
  `time_shedul_id` int(11) NOT NULL,
  `admin_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_refer_admin_user`
--

INSERT INTO `tbl_refer_admin_user` (`id`, `time_shedul_id`, `admin_user_id`) VALUES
(1, 1, 5),
(2, 1, 5),
(3, 1, 5),
(4, 2, 5),
(5, 4, 5),
(6, 5, 5),
(7, 5, 5),
(8, 3, 5),
(9, 7, 5),
(10, 7, 5),
(11, 11, 5),
(12, 12, 5),
(13, 15, 5),
(14, 16, 5),
(15, 4, 22),
(16, 18, 5),
(17, 4, 24),
(18, 4, 5),
(19, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submit_property`
--

CREATE TABLE `tbl_submit_property` (
  `id` int(11) NOT NULL,
  `property_Owner` text NOT NULL,
  `username` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `property_for` text NOT NULL,
  `property_type` text NOT NULL,
  `Flat` varchar(255) NOT NULL,
  `property_name` text NOT NULL,
  `location` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `Bedrooms` int(255) NOT NULL,
  `Balconies` int(255) NOT NULL,
  `Floor_No` int(255) NOT NULL,
  `Total_Floor` int(255) NOT NULL,
  `Furnished_Status` varchar(255) NOT NULL,
  `Bathrooms` int(255) NOT NULL,
  `Floors_Allowed` int(255) NOT NULL,
  `no_open_side` int(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `Hospital_distance` varchar(255) NOT NULL,
  `School_distance` varchar(255) NOT NULL,
  `Airport_distance` varchar(255) NOT NULL,
  `City_distance` varchar(255) NOT NULL,
  `Railway_Station_distance` varchar(255) NOT NULL,
  `Parking` varchar(255) NOT NULL,
  `cover_parkings` varchar(255) NOT NULL,
  `open_parkings` varchar(255) NOT NULL,
  `area_per_sq` varchar(255) NOT NULL,
  `Covered_Area` varchar(255) NOT NULL,
  `plot_area_sq` varchar(255) NOT NULL,
  `plot_area` varchar(255) NOT NULL,
  `plot_Length` varchar(255) NOT NULL,
  `Plot_Breadth` varchar(255) NOT NULL,
  `Carpet_Area_sq` varchar(255) NOT NULL,
  `Carpet_Area` varchar(255) NOT NULL,
  `Transaction_Type` varchar(255) NOT NULL,
  `Possession_Status` varchar(255) NOT NULL,
  `possession_date` varchar(255) NOT NULL,
  `Available_month` varchar(255) NOT NULL,
  `Available_Year` varchar(255) NOT NULL,
  `age_of_Construction` varchar(255) NOT NULL,
  `Expected_Price` varchar(255) NOT NULL,
  `price_per_sqr` varchar(255) NOT NULL,
  `Other_Charges` varchar(255) NOT NULL,
  `Booking_Token` varchar(255) NOT NULL,
  `Maintenance_Charges` varchar(255) NOT NULL,
  `Charges_per_month` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `pries` varchar(255) NOT NULL,
  `in_rupes` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_submit_property`
--

INSERT INTO `tbl_submit_property` (`id`, `property_Owner`, `username`, `mobile`, `email`, `property_for`, `property_type`, `Flat`, `property_name`, `location`, `address`, `Bedrooms`, `Balconies`, `Floor_No`, `Total_Floor`, `Furnished_Status`, `Bathrooms`, `Floors_Allowed`, `no_open_side`, `road_width`, `Hospital_distance`, `School_distance`, `Airport_distance`, `City_distance`, `Railway_Station_distance`, `Parking`, `cover_parkings`, `open_parkings`, `area_per_sq`, `Covered_Area`, `plot_area_sq`, `plot_area`, `plot_Length`, `Plot_Breadth`, `Carpet_Area_sq`, `Carpet_Area`, `Transaction_Type`, `Possession_Status`, `possession_date`, `Available_month`, `Available_Year`, `age_of_Construction`, `Expected_Price`, `price_per_sqr`, `Other_Charges`, `Booking_Token`, `Maintenance_Charges`, `Charges_per_month`, `post_date`, `pries`, `in_rupes`, `user_id`) VALUES
(7, 'BUILDER', 'kolte patil', 'ddd', 'dd', 'Sale', 'Flat', '2 BHK', 'd', 'nanded', 'dd', 3, 3, 2, 1, 'Furnished', 5, 8, 2, '111', '1', '2', '2', '1', '2', 'None', '', '1', 'Sq-ft', '2', 'Sq-ft', '100', '80', '1', 'Sq-m', '80', '', '', '', 'January', '2018', 'New Construction ', '', '1', '2', '1', '1', 'Monthly', ' 18th April 2018 ', '60000000', 'Lac', '0'),
(8, 'Owner', '', '', '', 'Sale', 'Flat', '2 BHK', 'sweet home', 'Hinjewadi', 'room no.701 near bus stand', 7, 8, 2, 2, 'Unfurnished', 2, 2, 1, 'd', 'd', 'd', 'd', 'd', 'd', 'None', '', '1', 'Acre', 'd', 'Sq-yrd', 'd', 'd', 'd', 'Sq-ft', 'd', '', '', '', '', '', '', '', '', '', '', '', '', ' 19th October 2019 ', '', '', '18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time_shedule`
--

CREATE TABLE `tbl_time_shedule` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datepicker` varchar(255) NOT NULL,
  `visittime` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `propert_woner_id` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_time_shedule`
--

INSERT INTO `tbl_time_shedule` (`id`, `username`, `mobile`, `email`, `datepicker`, `visittime`, `user_id`, `property_id`, `propert_woner_id`) VALUES
(1, 'nril', 'mnfoi', 'ijoif', '05/17/2018', '04:30PM', 1, 0, 0),
(2, 'ffm,m', 'ff', 'ff', '05/16/2018', '03:00PM', 10, 18, 0),
(3, 'rrr', 'rr', 'sanjayjadhav450@gmail.com', '05/16/2018', '06:00PM', 10, 7, 0),
(4, 'Shradha Kulkrni', '8854841184', 'sanjayjadhav450@gmail.com', '05/17/2018', '03:00PM', 10, 18, 0),
(5, 'nisha', '9923754421', 'sanjayjadhav450@gmail.com', '05/22/2018', '03:30PM', 12, 20, 0),
(6, 'dfdfd', 'dfdd', 'osumddddare.admin@gmail.com', '05/16/2018', '04:00PM', 15, 20, 0),
(7, 'sanjay jadhav', '9923754421', 'sanjayjadhav450@gmail.com', '05/08/2018', '03:00PM', 15, 18, 0),
(8, 'ffm,m', 'f', 'ff', '05/25/2018', '04:30PM', 0, 0, 0),
(9, 'dddd', '9923754421', 'vaijnathjadhav1991@gmail.com', '05/30/2018', '06:00PM', 0, 0, 0),
(10, 'builder.builder@gmail.com', 'hh', 'hh', '05/31/2018', '05:30PM', 0, 0, 0),
(11, 'sanjay jadhav', '9923754421', 'sanjayjadhav450@gmail.com', '05/09/2018', '05:30PM', 10, 18, 0),
(12, 'vk patil', '8855229966', 'sanjassssyjadhav450@gmail.com', '06/05/2018', '06:00PM', 10, 34, 0),
(13, 'qwerty.admin@gmail.com', '9923754421', 'sanjayjadhav450@gmail.com', '05/23/2018', '04:00PM', 18, 34, 0),
(14, 'darshan sir', '9988557744', 'darshan.ingle@gmail.com', '05/16/2018', '05:00PM', 18, 0, 0),
(15, 'qwerty.admin@gmail.com', '9923754421', 'sanjayjadhav450@gmail.com', '05/23/2018', '05:00PM', 18, 34, 10),
(16, 'qwerty.admin@gmail.com', '9923754421', 'sanjayjadhav450@gmail.com', '03/31/2018', '05:00PM', 18, 34, 10),
(17, 'ABHI', '7799988812', 'darshan.ingle@gmail.com', '10/01/2018', 'select time must', 25, 18, 0),
(18, 'ABHI', '7799988812', 'darshan.ingle@gmail.com', '09/30/2018', '02:30PM', 25, 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_image`
--

CREATE TABLE `tbl_upload_image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_upload_image`
--

INSERT INTO `tbl_upload_image` (`id`, `name`, `user_id`, `form_id`) VALUES
(2, 'http://localhost/property/uploads/1319.jpg', 0, 1),
(3, 'http://localhost/property/uploads/619.jpg', 0, 1),
(4, 'http://localhost/property/uploads/6_23.jpg', 0, 1),
(6, 'http://localhost/property/uploads/620.jpg', 0, 1),
(7, 'http://localhost/property/uploads/home-cooking-banner-4b_25.jpg', 0, 2),
(8, 'http://localhost/property/uploads/download7.jpg', 0, 2),
(10, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac4.jpg', 0, 2),
(11, 'http://localhost/property/uploads/11025640_684168071691868_2551605037727677444_n9.jpg', 0, 6),
(12, 'http://localhost/property/uploads/3_sized11.jpg', 0, 7),
(13, 'http://localhost/property/uploads/622.jpg', 0, 7),
(14, 'http://localhost/property/uploads/6_24.jpg', 0, 7),
(15, 'http://localhost/property/uploads/great-home-designs-1888.jpg', 0, 8),
(16, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas9.jpg', 0, 8),
(17, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas_22.jpg', 0, 8),
(18, 'http://localhost/property/uploads/6_26.jpg', 0, 10),
(20, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas_24.jpg', 0, 13),
(21, 'http://localhost/property/uploads/great-home-designs-1889.jpg', 0, 13),
(22, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas10.jpg', 0, 13),
(23, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas_26.jpg', 0, 13),
(48, 'http://localhost/property/uploads/home-cooking-banner-4b_27.jpg', 0, 9),
(49, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac7.jpg', 0, 9),
(50, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac_29.jpg', 0, 9),
(51, 'http://localhost/property/uploads/house-balcony-pictures-with-of-home-design-inspirations2.jpg', 0, 9),
(52, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac_210.jpg', 0, 9),
(53, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac8.jpg', 0, 9),
(54, 'http://localhost/property/uploads/1321.jpg', 5, 5),
(55, 'http://localhost/property/uploads/31102375_1288885681255521_1044622886420056195_n.jpg', 5, 5),
(56, 'http://localhost/property/uploads/IMG-20180402-WA0002_(1)20.jpg', 5, 5),
(57, 'http://localhost/property/uploads/', 5, 5),
(58, 'http://localhost/property/uploads/1323.jpg', 5, 5),
(59, 'http://localhost/property/uploads/31102375_1288885681255521_1044622886420056195_n1.jpg', 5, 5),
(60, 'http://localhost/property/uploads/1324.jpg', 5, 5),
(61, 'http://localhost/property/uploads/31102375_1288885681255521_1044622886420056195_n3.jpg', 5, 5),
(62, 'http://localhost/property/uploads/', 5, 5),
(63, 'http://localhost/property/uploads/', 5, 5),
(64, 'http://localhost/property/uploads/1326.jpg', 5, 5),
(65, 'http://localhost/property/uploads/29573213_2522294604663401_7413533821258378908_n.jpg', 5, 5),
(66, 'http://localhost/property/uploads/31102375_1288885681255521_1044622886420056195_n5.jpg', 5, 5),
(67, 'http://localhost/property/uploads/31180116_2124818191080505_4173713755543331451_n.jpg', 5, 5),
(71, 'http://localhost/sanjay/uploads/3_sized12.jpg', 0, 12),
(72, 'http://localhost/sanjay/uploads/631.jpg', 0, 12),
(73, 'http://localhost/sanjay/uploads/6_28.jpg', 0, 12),
(74, 'http://localhost/sanjay/uploads/54eb988ad7aeb_-_tiny-victorian-painted-lady13.jpg', 0, 12),
(75, 'http://localhost/sanjay/uploads/2762-Square-Feet-5BHK-Luxury-Kerala-Modern-Home-Design-213.jpg', 0, 12),
(79, 'http://localhost/sanjay/uploads/download_(1)6.jpg', 0, 12),
(80, 'http://localhost/sanjay/uploads/download12.jpg', 0, 12),
(81, 'http://localhost/sanjay/uploads/ever-410.jpg', 0, 12),
(86, 'http://localhost/sanjay/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas14.jpg', 0, 12),
(87, 'http://localhost/sanjay/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas_210.jpg', 0, 12),
(88, 'http://localhost/sanjay/uploads/great-home-designs-in-ideas-design-0112.jpg', 0, 12),
(98, 'http://localhost/property/uploads/632.jpg', 0, 13),
(99, 'http://localhost/property/uploads/6_29.jpg', 0, 13),
(100, 'http://localhost/property/uploads/54eb988ad7aeb_-_tiny-victorian-painted-lady14.jpg', 0, 13),
(101, 'http://localhost/property/uploads/2762-Square-Feet-5BHK-Luxury-Kerala-Modern-Home-Design-214.jpg', 0, 13),
(102, 'http://localhost/property/uploads/download_(1)7.jpg', 0, 13),
(103, 'http://localhost/property/uploads/download15.jpg', 0, 13),
(104, 'http://localhost/property/uploads/great-home-designs-18812.jpg', 0, 13),
(105, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas15.jpg', 0, 13),
(107, 'http://localhost/property/uploads/18.jpg', 0, 14),
(108, 'http://localhost/property/uploads/18.jpg', 0, 14),
(109, 'http://localhost/property/uploads/101.jpg', 0, 14),
(110, 'http://localhost/property/uploads/1319.jpg', 0, 14),
(111, 'http://localhost/property/uploads/IMG_20180330_180904_(1).jpg', 0, 14),
(112, 'http://localhost/property/uploads/Untitled2.jpg', 0, 14),
(114, 'http://localhost/property/uploads/', 0, 14),
(115, 'http://localhost/property/uploads/633.jpg', 0, 14),
(116, 'http://localhost/property/uploads/102.jpg', 0, 14),
(117, 'http://localhost/property/uploads/1320.jpg', 0, 14),
(118, 'http://localhost/property/uploads/Untitled3.jpg', 0, 14),
(120, 'http://localhost/property/uploads/6b9a0c285.jpg', 0, 14),
(121, 'http://localhost/property/uploads/5ac874b9-b751-46c7-ac5f-ebaec21b4a22.jpg', 0, 15),
(122, 'http://localhost/property/uploads/3134abb4-3a57-45cd-b2d5-6d961649e45d.jpg', 0, 15),
(123, 'http://localhost/property/uploads/b32dc735-6ff6-4695-b037-3a9c4526b0e8.jpg', 0, 15),
(124, 'http://localhost/property/uploads/home-cooking-banner-4b6.jpg', 0, 16),
(125, 'http://localhost/property/uploads/home-cooking-banner-4b_27.jpg', 0, 16),
(126, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac7.jpg', 0, 16),
(127, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac_2.jpg', 0, 16),
(128, 'http://localhost/property/uploads/great-home-designs-18813.jpg', 0, 17),
(129, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas16.jpg', 0, 17),
(130, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas_213.jpg', 0, 17),
(140, 'http://localhost/property/uploads/6_25.jpg', 0, 18),
(141, 'http://localhost/property/uploads/2762-Square-Feet-5BHK-Luxury-Kerala-Modern-Home-Design-2.jpg', 0, 18),
(142, 'http://localhost/property/uploads/great-home-designs-188.jpg', 0, 18),
(143, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas.jpg', 0, 18),
(144, 'http://localhost/property/uploads/home-cooking-banner-4b_2.jpg', 0, 18),
(145, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac_2.jpg', 0, 18),
(146, 'http://localhost/property/uploads/house-balcony-pictures-with-of-home-design-inspirations_2.jpg', 0, 18),
(147, 'http://localhost/property/uploads/hualalai-luxury-home-design-great-room-ideas-interior-family-decorating-with-corner-fireplace-photos-and-tv-plans-cool-designs-on-a-budget-flat-screen-kitchen-pictures-layout-pics-.jpg', 0, 18),
(148, 'http://localhost/property/uploads/images_(1).jpg', 0, 18),
(149, 'http://localhost/property/uploads/images_(6).jpg', 0, 18),
(150, 'http://localhost/property/uploads/images_(7).jpg', 0, 18),
(151, 'http://localhost/property/uploads/images.jpg', 0, 18),
(152, 'http://localhost/property/uploads/mediterranean-exterior_(1).jpg', 0, 18),
(153, 'http://localhost/property/uploads/great-home-designs-1882.jpg', 1, 18),
(154, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas1.jpg', 1, 18),
(155, 'http://localhost/property/uploads/3_sized14.jpg', 1, 18),
(156, 'http://localhost/property/uploads/65.jpg', 1, 18),
(157, 'http://localhost/property/uploads/5ac874b9-b751-46c7-ac5f-ebaec21b4a221.jpg', 9, 9),
(158, 'http://localhost/property/uploads/13.jpg', 9, 9),
(159, 'http://localhost/property/uploads/3134abb4-3a57-45cd-b2d5-6d961649e45d.jpg', 9, 9),
(160, 'http://localhost/property/uploads/b32dc735-6ff6-4695-b037-3a9c4526b0e8.jpg', 9, 9),
(161, 'http://localhost/property/uploads/54eb988ad7aeb_-_tiny-victorian-painted-lady.jpg', 11, 11),
(162, 'http://localhost/property/uploads/2762-Square-Feet-5BHK-Luxury-Kerala-Modern-Home-Design-21.jpg', 11, 11),
(163, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas_21.jpg', 11, 11),
(164, 'http://localhost/property/uploads/home-cooking-banner-4b_21.jpg', 11, 11),
(165, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac.jpg', 11, 11),
(166, 'http://localhost/property/uploads/', 0, 19),
(167, 'http://localhost/property/uploads/', 0, 19),
(168, 'http://localhost/property/uploads/', 0, 19),
(169, 'http://localhost/property/uploads/', 0, 19),
(170, 'http://localhost/property/uploads/', 0, 19),
(171, 'http://localhost/property/uploads/', 0, 19),
(172, 'http://localhost/property/uploads/', 0, 19),
(173, 'http://localhost/property/uploads/5ac874b9-b751-46c7-ac5f-ebaec21b4a223.jpg', 0, 19),
(175, 'http://localhost/property/uploads/31543725_2083427815270393_9176909683751312168_n2.jpg', 1, 20),
(176, 'http://localhost/property/uploads/IMG_20171211_2241206.jpg', 1, 20),
(177, 'http://localhost/property/uploads/IMG_20180330_180904_(1).jpg', 1, 20),
(178, 'http://localhost/property/uploads/Untitled.jpg', 1, 20),
(179, 'http://localhost/property/uploads/WhatsApp Image 2018-03-31 at 12_39_54 PM.jpeg', 1, 20),
(180, 'http://localhost/property/uploads/611.jpg', 1, 20),
(181, 'http://localhost/property/uploads/6_26.jpg', 1, 20),
(182, 'http://localhost/property/uploads/54eb988ad7aeb_-_tiny-victorian-painted-lady1.jpg', 1, 20),
(183, 'http://localhost/property/uploads/2762-Square-Feet-5BHK-Luxury-Kerala-Modern-Home-Design-22.jpg', 1, 20),
(184, 'http://localhost/property/uploads/download_(1).jpg', 1, 20),
(185, 'http://localhost/property/uploads/download.jpg', 1, 20),
(186, 'http://localhost/property/uploads/5ac874b9-b751-46c7-ac5f-ebaec21b4a225.jpg', 14, 14),
(187, 'http://localhost/property/uploads/131.jpg', 14, 14),
(188, 'http://localhost/property/uploads/3134abb4-3a57-45cd-b2d5-6d961649e45d1.jpg', 14, 14),
(189, 'http://localhost/property/uploads/20228929_1408562999226907_6374712067936583958_n.jpg', 14, 14),
(190, 'http://localhost/property/uploads/54eb988ad7aeb_-_tiny-victorian-painted-lady2.jpg', 15, 21),
(191, 'http://localhost/property/uploads/2762-Square-Feet-5BHK-Luxury-Kerala-Modern-Home-Design-23.jpg', 15, 21),
(193, 'http://localhost/property/uploads/download2.jpg', 15, 21),
(194, 'http://localhost/property/uploads/3_sized15.jpg', 1, 28),
(195, 'http://localhost/property/uploads/614.jpg', 1, 28),
(196, 'http://localhost/property/uploads/6_27.jpg', 1, 28),
(197, 'http://localhost/property/uploads/54eb988ad7aeb_-_tiny-victorian-painted-lady3.jpg', 1, 28),
(198, 'http://localhost/property/uploads/2762-Square-Feet-5BHK-Luxury-Kerala-Modern-Home-Design-24.jpg', 1, 28),
(201, 'http://localhost/property/uploads/home-cooking-banner-4b_22.jpg', 1, 28),
(202, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac2.jpg', 1, 28),
(203, 'http://localhost/property/uploads/house_builders_philippines_house_construction_philippines_home_design_philippines_home_designs_philippines_home_construction_philippines_home_builder_philippines_model_houses_in_the_philippines_house_contrac_21.jpg', 1, 28),
(204, 'http://localhost/property/uploads/great-home-designs-alluring-house-awesome-beautiful-images-interior-design-ideas_24.jpg', 1, 28),
(205, 'http://localhost/property/uploads/2762-Square-Feet-5BHK-Luxury-Kerala-Modern-Home-Design-25.jpg', 1, 30),
(206, 'http://localhost/property/uploads/5ac874b9-b751-46c7-ac5f-ebaec21b4a226.jpg', 1, 32),
(207, 'http://localhost/property/uploads/3134abb4-3a57-45cd-b2d5-6d961649e45d2.jpg', 1, 32),
(208, 'http://localhost/property/uploads/b32dc735-6ff6-4695-b037-3a9c4526b0e82.jpg', 1, 32),
(209, 'http://localhost/property/uploads/5ac874b9-b751-46c7-ac5f-ebaec21b4a227.jpg', 1, 33),
(210, 'http://localhost/property/uploads/3134abb4-3a57-45cd-b2d5-6d961649e45d3.jpg', 1, 33),
(211, 'http://localhost/property/uploads/b32dc735-6ff6-4695-b037-3a9c4526b0e84.jpg', 1, 33),
(212, 'http://localhost/property/uploads/+.jpg', 17, 17),
(213, 'http://localhost/property/uploads/5459.jpg', 17, 17),
(214, 'http://localhost/property/uploads/32440646_222798895170932_2811865237005795328_n.jpg', 17, 17),
(215, 'http://localhost/property/uploads/Baaghi-tiger-shroff-body-HD-Wallpaper.jpg', 17, 17),
(216, 'http://localhost/property/uploads/+1.jpg', 10, 34),
(217, 'http://localhost/property/uploads/132.jpg', 10, 34),
(219, 'http://localhost/property/uploads/14211960_976272902482059_6738454910867906568_n.jpg', 10, 34),
(220, 'http://localhost/property/uploads/32440646_222798895170932_2811865237005795328_n1.jpg', 10, 34),
(221, 'http://localhost/property/uploads/Baaghi-tiger-shroff-body-HD-Wallpaper2.jpg', 10, 34),
(222, 'http://localhost/property/uploads/32440646_222798895170932_2811865237005795328_n2.jpg', 19, 19),
(223, 'http://localhost/property/uploads/HD_logo2.png', 19, 19),
(224, 'http://localhost/property/uploads/images1.jpg', 19, 19),
(225, 'http://localhost/property/uploads/wallpaper2you_311122.jpg', 19, 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_register`
--

CREATE TABLE `tbl_user_register` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_type` text NOT NULL,
  `Occupation` text NOT NULL,
  `Religion` text NOT NULL,
  `Cast` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `Gender` text NOT NULL,
  `Marital_Status` text NOT NULL,
  `age` varchar(255) NOT NULL,
  `image_path` varchar(225) NOT NULL,
  `register_date` varchar(255) NOT NULL,
  `login_count` int(11) NOT NULL DEFAULT '0',
  `readd_me` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_register`
--

INSERT INTO `tbl_user_register` (`id`, `username`, `email`, `password`, `mobile`, `user_type`, `Occupation`, `Religion`, `Cast`, `City`, `State`, `address`, `Gender`, `Marital_Status`, `age`, `image_path`, `register_date`, `login_count`, `readd_me`) VALUES
(1, 'Admin', 'osumare.admin@gmail.com', '123', '9923754421', 'admin', 'Directr of  Osumare', 'Hindu', 'maratha', 'Pune', 'Maharashtra', 'Pune ', 'Male', 'Married', '25', 'http://localhost/property/uploads/60576609_2364801043580934_9000912646685327360_o.jpg', ' 7th May 2018 ', 1, 1),
(2, 'Krishana Patil', 'krishnapatil@gmail.com', '123', '9955887766', 'Builder', 'Director', 'Hindu', 'maratha', 'Kolhapur', 'Maharashtra', 'Kharadi bypass Pathare Vasti  Janki Nivas P No.411014', 'Male', 'Unmarried', '16', 'http://localhost/property/uploads/63.jpg', ' 7th May 2018 ', 1, 1),
(10, 'om jadhav', 'om.jadhav@gmail.com', '123', '8866554422', 'Seller_Buyer', 'docter', 'Hindu', 'ff', 'Solapur', 'Goa', 'ff', 'Male', 'Married', 'ff', 'http://localhost/property/uploads/wallpaper2you_3111222.jpg', ' 9th May 2018 ', 1, 1),
(18, 'hurtik roshan', 'hurtikroshan@gmail.com', '123', '9966885544', 'Seller_Buyer', 'docter', 'Hindu', 'ff', 'Solapur', 'Goa', 'd', 'Male', 'Married', 'd', 'http://localhost/property/uploads/jadhav2.png', ' 28th May 2018 ', 1, 1),
(19, 'ketaki Warule', 'ketaki.mam@gmail.com', '123', '8600869059', 'Reference', 'docter', 'Hindu', 'ff', 'Solapur', 'Maharashtra', 'uhgv', 'Male', 'Married', 'jh', 'http://localhost/property/uploads/wallpaper2you_3111224.jpg', ' 29th May 2018 ', 1, 1),
(21, 'osumare.admin@gmail.com', 'sanjayjadhaxxxxxxxv450@gmail.com', '123', '9922554422', 'Builder', '', '', '', '', '', '', '', '', '', 'http://localhost/property/uploads/jadhav2.png', ' 22nd June 2018 ', 0, 1),
(22, 'ganga', 'sanjayjadhav450@gmail.com', '123', '9923754466', 'Sales_Manager', 'dd', 'Hindu', 'ff', 'Mumbai', 'UP', 'dd', 'Male', 'Married', 'ss', 'http://localhost/property/uploads/15590476_669320203193235_6390847441853264885_n.jpg', '', 1, 1),
(23, 'Prem Jadhav', 'ram.jadhav4421@gmail.com', '9373112106', '8390887882', 'Seller_Buyer', 'android', 'Hindu', 'open', 'Solapur', 'UP', 'pune', 'Male', 'Married', '22', 'http://localhost/property/uploads/jadhav2.png', ' 29th August 2019 ', 1, 1),
(24, 'Snju Jadhav Patil', 'ram.wakadkar.yuvamanch@gmail.com', '123', '8390887000', 'Seller_Buyer', 'android', 'Sikh', 'open', 'Nagpur', 'Goa', 'd', 'Male', 'Married', '22', 'http://localhost/property/uploads/WhatsApp_Image_2018-10-22_at_2_33_46_PM.jpeg', ' 30th August 2019 ', 1, 1),
(25, 'sanket patil', 'sanketfuck@gmail.com', '123', '8855442266', 'Sales_Manager', 'gg', 'Hindu', 'ff', 'Kolhapur', 'Goa', 'ff', 'Male', 'Married', '44', 'http://localhost/property/uploads/jadhav.png', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bank_details`
--
ALTER TABLE `tbl_bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_builder_register`
--
ALTER TABLE `tbl_builder_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notification_admin_user`
--
ALTER TABLE `tbl_notification_admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post_reference`
--
ALTER TABLE `tbl_post_reference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post_refer_person_assign`
--
ALTER TABLE `tbl_post_refer_person_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_refer_admin_user`
--
ALTER TABLE `tbl_refer_admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_submit_property`
--
ALTER TABLE `tbl_submit_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_time_shedule`
--
ALTER TABLE `tbl_time_shedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload_image`
--
ALTER TABLE `tbl_upload_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_register`
--
ALTER TABLE `tbl_user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bank_details`
--
ALTER TABLE `tbl_bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_builder_register`
--
ALTER TABLE `tbl_builder_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_notification_admin_user`
--
ALTER TABLE `tbl_notification_admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_post_reference`
--
ALTER TABLE `tbl_post_reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_post_refer_person_assign`
--
ALTER TABLE `tbl_post_refer_person_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_refer_admin_user`
--
ALTER TABLE `tbl_refer_admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_submit_property`
--
ALTER TABLE `tbl_submit_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_time_shedule`
--
ALTER TABLE `tbl_time_shedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_upload_image`
--
ALTER TABLE `tbl_upload_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `tbl_user_register`
--
ALTER TABLE `tbl_user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
