-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 09:23 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'sameer', 'sameer@123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `b_tittle` varchar(30) NOT NULL,
  `c_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `b_description` varchar(50) NOT NULL,
  `b_largedescription` text NOT NULL,
  `b_image` varchar(255) NOT NULL,
  `amount_hard` int(30) NOT NULL,
  `amount_soft` int(20) NOT NULL,
  `author_id` int(11) NOT NULL,
  `isbn` varchar(6) NOT NULL,
  `publications` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `b_tittle`, `c_id`, `sc_id`, `b_description`, `b_largedescription`, `b_image`, `amount_hard`, `amount_soft`, `author_id`, `isbn`, `publications`, `created_at`, `updated_at`) VALUES
(5, 'kkkkkkkkkkk', 2, 2, 'kkkk', 'kkkkkk', '2.jpg', 700, 350, 2, '', '', '2018-03-31 04:11:44', '2018-03-31 04:11:44'),
(6, 'Software Testing', 2, 1, 'Testting Purpose', 'asfsdsdgdfg', '2.jpg', 600, 300, 2, '', '', '2018-03-31 04:12:56', '2018-03-31 04:12:56'),
(7, 'kkkkkkkkkkk', 4, 4, 'Testting Purpose', 'asfsdgsdgdfg', '3.jpg', 700, 350, 2, '', '', '2018-03-31 04:24:17', '2018-03-31 04:24:17'),
(20, 'kkk', 2, 2, 'kkkkk', 'kkkkk', '2016-04-15-21-28-16-601.jpg', 7000, 3500, 2, '600000', '', '2018-04-01 10:15:12', '2018-04-01 10:15:12'),
(21, 'nnn', 2, 2, 'yyyyy', 'hhhgg', '2017-02-16-09-50-32-101.jpg', 9000, 4500, 2, '999', '1', '2018-04-01 10:18:54', '2018-04-01 10:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `status` enum('enable','disable','','') NOT NULL DEFAULT 'enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'Science', 'enable'),
(2, 'Engineering', 'enable'),
(3, 'technologies', 'enable'),
(4, 'Biography', 'enable'),
(5, 'Poems', 'enable'),
(6, 'Autobiography', 'enable'),
(7, 'Novels', 'enable'),
(8, 'Children Books ', 'enable');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(1, 'ahmedabad', 1),
(2, 'baroda', 1),
(3, 'Surat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `f_tittle` varchar(30) NOT NULL,
  `f_comment` varchar(50) NOT NULL,
  `f_date` date NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `f_tittle`, `f_comment`, `f_date`, `u_id`) VALUES
(2, 'abc', 'xyz', '2018-03-14', 3),
(3, 'zalak', ',m dck', '2018-03-14', 3);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(11) NOT NULL,
  `inq_name` varchar(30) NOT NULL,
  `inq_email` varchar(40) NOT NULL,
  `inq_contact` bigint(10) NOT NULL,
  `inq_subject` varchar(30) NOT NULL,
  `inq_message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `inq_name`, `inq_email`, `inq_contact`, `inq_subject`, `inq_message`) VALUES
(1, 'sameer', 'bhattsameer3585.sb@gmail.com', 7874360046, '', 'u have books about socials ');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `ord_id` int(11) NOT NULL,
  `ord_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `stuts` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ord_details`
--

CREATE TABLE `ord_details` (
  `od_id` int(11) NOT NULL,
  `ord_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(1, 'Gujarat'),
(2, 'rajasthan'),
(5, 'mp'),
(6, 'UP');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_name`, `cat_id`) VALUES
(1, 'Computer Science', 2),
(2, 'Electrical ', 2),
(3, 'computer / Information Technology', 2),
(4, 'Civil ', 2),
(5, 'Electronics & Communication', 2),
(6, 'Mechanical', 2),
(7, 'Environmental ', 2),
(8, 'Textial', 2),
(9, 'Bio medical', 2),
(10, 'Metal', 2),
(11, 'Physics', 1),
(12, 'Chemistry', 1),
(13, 'Bio-logy', 1),
(14, 'Maths', 1),
(15, 'Computer', 1),
(16, '', 5),
(17, 'Person Related', 4),
(18, '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `roll_id` int(11) NOT NULL,
  `roll_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`roll_id`, `roll_name`) VALUES
(1, 'admin'),
(2, 'author'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `roll_id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Enable','Disable','','') NOT NULL DEFAULT 'Enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `uname`, `lname`, `password`, `email`, `contact`, `user_type`, `gender`, `dob`, `address`, `sid`, `cid`, `roll_id`, `image`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Alkesh', '', 'Kaba', '123', 'kabaalkesh293@gmail.com', 9016647480, '', 'Male', '2018-03-06', 'Ahmedabad', 1, 1, 2, 0x31323333, '2018-03-03 03:58:17', '0000-00-00 00:00:00', 'Enable'),
(3, 'akshay', '', 'bhadange', '0', 'bhadangeakshy@gmail.com', 1234554986, '', 'male', '2018-03-09', 'ranip ', 1, 2, 3, 0x30, '2018-03-08 07:26:04', '0000-00-00 00:00:00', 'Enable'),
(6, 'jasmita', 'jas@123', 'bhatt', '123', 'bhadangejasmita@gmail.com', 231654846, 'user', 'female', '2018-04-04', 'nxfjvbjcl nc bvkhdbi kd ', 1, 1, 2, '', '2018-04-23 04:43:08', '2018-04-23 04:43:08', 'Enable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `sc_id` (`sc_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ord_details`
--
ALTER TABLE `ord_details`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `ord_id` (`ord_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`roll_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `sid` (`sid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `role_id` (`roll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ord_details`
--
ALTER TABLE `ord_details`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `roll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`sc_id`) REFERENCES `subcategory` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `tbl_role` (`roll_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order1`
--
ALTER TABLE `order1`
  ADD CONSTRAINT `order1_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ord_details`
--
ALTER TABLE `ord_details`
  ADD CONSTRAINT `ord_details_ibfk_1` FOREIGN KEY (`ord_id`) REFERENCES `order1` (`ord_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roll_id`) REFERENCES `tbl_role` (`roll_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `city` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
