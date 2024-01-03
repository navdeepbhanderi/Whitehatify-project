-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 09:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whitehatify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ano` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `permission` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ano`, `fname`, `email`, `password`, `token`, `permission`, `date`) VALUES
(8, 'charmy', 'crudani31@gmail.com', '$2y$10$LGyIWF8R.rl1vTK0bj8Ai.4lBnSr3Ht5hNfPko3BvWN99NOuaHwgC', '4c9de480f6a467603f87', 'Dashboard,Project,Consultation,Payment,Review,ManageUser,ManageAdmin', '2023-03-23 19:07:00'),
(10, 'navdeep', 'navdeepbhanderi1@gmail.com', '$2y$10$BPCNXlApqGGRtSACExt9LO4yFEYJK6Fk.imnBG76MdcIqiHlzYLGG', '67a112c1870f8b849363', 'Dashboard,Project,Consultation,Payment,Review,ManageUser,ManageAdmin', '2023-04-06 12:54:04'),
(12, 'navdeep', 'abc@gmail.com', '$2y$10$tMHWwUd4cjUi2B/a3msHv.rYbuQEkDoy5n8Htil1EzqlDaCeYpt8e', '62a1a6bf7a85e6301e95', 'Consultation,Review', '2023-05-08 12:18:57'),
(18, 'sdfgd', 's@gmail.com', '$2y$10$faw3KCpcCujJUdsPCBV.EezDwHWm.xsCPklhPqW24W6x5a49wCvGS', '59f6a10a4f23a7a353bd', 'Consultation', '2023-05-09 10:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cid` int(11) NOT NULL,
  `subject` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cid`, `subject`, `email`, `message`, `date`) VALUES
(1, 'dfgrew', 'navdeepbhanderi1@gmail.com', 'fdsewdfg', '2023-04-28 22:38:10'),
(2, 'fds', 'navdeepbhanderi1@gmail.com', 'dsfghjgf', '2023-04-28 22:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pid` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `sno` int(11) NOT NULL,
  `firstname` varchar(40) DEFAULT NULL,
  `url` varchar(40) DEFAULT NULL,
  `plan` varchar(30) NOT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `payer_email` varchar(40) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pid`, `invoice`, `sno`, `firstname`, `url`, `plan`, `amount`, `txnid`, `payer_email`, `currency`, `payment_date`, `status`) VALUES
(31, 'WhiteHatify164', 18, 'navdeep', 'navdeep.com', 'ULTIMATE 3 Month - 12000₹', '12600', 'pay_LjGDX16yrzgIGF', 'navdeepbhanderi1@gmail.com', 'INR', '2023-04-28 20:57:27', 'success'),
(32, 'WhiteHatify606', 18, 'navdeep', 'navdeep.com', 'ULTIMATE 3 Month - 12000₹', '12600', 'pay_LjGMxaJo1wMMHy', 'navdeepbhanderi1@gmail.com', 'INR', '2023-04-28 21:06:22', 'success'),
(33, 'WhiteHatify695', 18, 'navdeep', 'asdsa.com', 'STANDERD 6 Month - 9000₹', '9450', 'pay_LjGQVywRwtnhqR', 'navdeepbhanderi1@gmail.com', 'INR', '2023-04-28 21:09:50', 'success'),
(34, 'WhiteHatify865', 18, 'abcd', 'sdfg.com', 'ENHANCED 6 Month - 15000₹', '15750', 'pay_LjSmnSNvmB4EZ9', 'navdeepbhanderi1@gmail.com', 'INR', '2023-04-29 09:15:09', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `img` varchar(50) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `plan` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `url` text NOT NULL,
  `progress` int(3) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `pname`, `img`, `startdate`, `plan`, `email`, `url`, `progress`, `desc`) VALUES
(2, 'AnswerThePublics', 'whitehatify.png', '2023-04-20', '6 Months', 'navdeepbhanderi1@gmail.com', 'whitehatify.com', 90, 'Grow leads for your business by using recommended SEO strategies that will help your audience discover your website more easily.'),
(13, 'whitehatify', 'whitehatify853.PNG', '2023-04-28', '6 Months', 'navdeepbhanderi1@gmail.com', '1337x.to', 45, 'asdbfd');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `did` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `country` varchar(30) NOT NULL,
  `traffic` int(10) NOT NULL,
  `earning` int(10) NOT NULL,
  `expenses` int(10) NOT NULL,
  `k1` varchar(50) NOT NULL,
  `k2` varchar(50) NOT NULL,
  `k3` varchar(50) NOT NULL,
  `k4` varchar(50) NOT NULL,
  `k5` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`did`, `pid`, `pname`, `name`, `phone`, `city`, `state`, `pincode`, `country`, `traffic`, `earning`, `expenses`, `k1`, `k2`, `k3`, `k4`, `k5`, `date`) VALUES
(1, 2, 'AnswerThePublics', 'charmy ', 1234567890, 'Brampton', 'Ontario', '567896', 'Canada', 750, 9909, 5000, 'Effective keyword ', ' content for a successful SEO', 'The importance of backlinks in an SEO project', 'On-page optimization', 'Measuring success ', '0000-00-00 00:00:00'),
(8, 13, 'Spotify', 'charmy , navdeep', 2147483647, 'Junagadh', 'Gujarat', '362001', 'india', 600, 23000, 15000, 'Effective keyword research strategies for an SEO p', 'Creating high-quality content for a successful SEO', 'The importance of backlinks in an SEO project', 'On-page optimization techniques for boosting SEO p', 'Measuring success and ROI in an SEO project using ', '2023-04-29 09:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `project_developer`
--

CREATE TABLE `project_developer` (
  `did` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `dname` varchar(35) NOT NULL,
  `post` varchar(55) NOT NULL,
  `desc` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_developer`
--

INSERT INTO `project_developer` (`did`, `pid`, `dname`, `post`, `desc`, `email`, `phone`, `location`, `date`) VALUES
(10, 2, 'Navdeep', 'Backend Developer', 'Hello I am ', 'navdeepbhanderi12@gmail.com', 2147483647, 'junagadh', '2023-04-26 10:29:24'),
(11, 2, 'Apexa', 'Full stack developer', 'aaaaaaaaaaaaweghrewrtdghngdsrfgvcxfzdhvncgfsfgnvgfsgvn bgfnb gdfhnhgfrtgfhrtwe', 'apexaaaa@gmail.com', 1234567890, 'Paris', '2023-04-26 10:30:11'),
(20, 2, 'Charmy', 'App Developer', 'helloo sdfkrjifhejf', 'crudani31@gmail.com', 2147483647, 'Canada', '2023-04-26 11:01:53'),
(24, 13, 'Charmy', 'developer', 'dfd', 'deepbhanderi1@gmail.com', 45466456, 'Canada', '2023-04-29 09:19:24'),
(25, 2, 'aaaaaaaaaaaaaaa', 'asd', 'sd', 'aaaaaaaaaa@gmail.com', 1234567890, 'melburn', '2023-05-10 00:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `filename` varchar(40) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rid`, `pid`, `email`, `filename`, `date`) VALUES
(1, 2, 'crudani31@gmail.com', 'ajava.pdf', '2023-04-26'),
(7, 2, 'crudani31@gmail.com', 'ajava 1-3.docx', '2023-04-26'),
(8, 2, 'crudani31@gmail.com', '127_0_0_1 (1).sql', '2023-04-26'),
(9, 2, 'crudani31@gmail.com', 'ajava 1-3.docx', '2023-04-26'),
(11, 2, 'navdeepbhanderi1@gmail.com', 'c2.PNG', '2023-04-27'),
(12, 2, 'navdeepbhanderi1@gmail.com', 'ppdu practical2.docx', '2023-04-28'),
(13, 3, 'navdeepbhanderi1@gmail.com', 'ppdu practical1.pdf', '2023-04-28'),
(14, 13, 'navdeepbhanderi1@gmail.com', 'ppdu practical2.docx', '2023-04-29'),
(15, 2, 'navdeepbhanderi1@gmail.com', 'ajava 1-3.docx', '2023-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `review` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `sno`, `name`, `email`, `review`, `date`) VALUES
(1, 1, 'charmy', 'crudani31@gmail.com', 'Good Experience', '2023-03-22 10:22:06'),
(3, 18, 'chrmi', 'navdeepbhanderi1@gmail.com', 'Nice', '2023-04-28 10:31:36'),
(4, 18, 'navdeep', 'navdeepbhanderi1@gmail.com', 'heeeldsksjvsvguierbfsl\r\n', '2023-05-01 12:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `fname`, `lname`, `email`, `password`, `address`, `city`, `country`, `state`, `pincode`, `token`, `date`) VALUES
(18, 'Navdeep', 'bhanderi', 'navdeepbhanderi1@gmail.com', '$2y$10$FxN5N5UH7BQMDXRa9Vpb3eQFY5AThjMHFGYbnqc6hDVkZHPD261ne', 'junadadh', 'Junagadh', 'India', 'Karnataka', 4535, '77fbe761f972df3feb575fe12983ad', '2023-03-22 10:05:08'),
(21, 'navdeep', 'bhanderi', 'nm@gmail.com', '$2y$10$MLuYk77iCL8LNpj3tw8HnO0W2CZY5m3ZCFGKLYZRtAFZbYTSWjTpC', 'ef', 'ds', 'India', 'Chhattisgarh', 123456, '1444f0a69a64cf2ada26', '2023-03-22 10:05:08'),
(22, 'Charmy', 'rudani', 'crudani31@gmail.com', '$2y$10$hdCYgbdAzhJB1DJ37q4iUOiascEiYvR.OkMevItzwZdsDEPpdwzWe', 'sdgf', 'vfjg', 'India', 'Chhattisgarh', 345678, 'ebfb218761793198fcac', '2023-03-22 10:05:08'),
(25, 'Yash', 'Ghoda', 'vvv@gmai.com', '$2y$10$hhzB8bjCPvcih8TSZGhHceEN/rHb8bYvqqLV1tgEC.fDIP0JSjF4G', 'asdfg', 'wefdgh', 'India', 'dfgh', 0, 'ae8596d5bebc59b4499c', '2023-04-19 20:41:35'),
(26, 'kunj', 'kunj', 'kunjkoradiya09@gmail.com', '$2y$10$.xWDtGdvtdFwKc35rDKZGuKX6IOD9EJmgzmMR9OndLFCn8rOaDSbm', 'junagadh', 'fsadfgf', 'India', 'Assam', 453245, 'b4b941fa283611549f6b', '2023-04-24 10:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `userrequest`
--

CREATE TABLE `userrequest` (
  `uno` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrequest`
--

INSERT INTO `userrequest` (`uno`, `sno`, `email`, `phoneNo`, `name`, `date`, `description`, `status`, `url`) VALUES
(33, 18, 'navdeepbhanderi1@gmail.com', '6353957997', 'pdivan', '2023-03-25 17:23:27', 'cxhcsdfjs', 'Cancel', 'n.com'),
(34, 18, 'khush@gmail.com', '4356666684', 'khush', '2023-03-25 17:24:09', 'SDGFFDGRTGRT', 'Accept', 'k.com'),
(35, 18, 'apexa@gmail.com', '4534465465', 'apexa', '2023-03-25 17:24:34', 'fgfddf', 'Accept', 'gfgggdf.com'),
(36, 0, 'yashaghoda@gmail.com', '6355200337', 'yash ghoda', '2023-04-11 08:58:23', 'viviwbibweivbwifviwevfiwvfiwvfiwvfiwvfiwvfiwf', 'Accept', 'https:/www.google.com'),
(37, 0, 'yashaghoda@gmail.com', '6355200337', 'yash ghoda', '2023-04-11 08:58:45', 'viviwbibweivbwifviwevfiwvfiwvfiwvfiwvfiwvfiwf', 'Accept', 'https:/www.google.com'),
(38, 0, 'yashaghoda@gmail.com', '3456754324', 'navdeep', '2023-04-11 09:04:22', 'fgdfgdrg', 'Accept', 'dfdfs.com'),
(39, 0, 'yashaghoda@gmail.com', '5678654323', 'navdeep', '2023-04-11 09:05:24', 'trytryrtyh', 'Cancel', 'ftg.cm'),
(40, 18, 'nehitvasavada7@gmail.com', '1234567876', 'lalo', '2023-04-28 12:05:18', 'sdfwef', 'Accept', 'nehit.com'),
(41, 18, '', '6353957997', 'navdeep', '2023-04-28 19:34:34', 'good', 'Pending', 'wex.com'),
(42, 18, '', '6353957997', 'navdeep', '2023-04-28 19:35:08', 'good', 'Pending', 'wex.com'),
(43, 18, '', '6353957997', 'navdeep', '2023-04-28 19:35:19', 'good', 'Pending', 'wex.com'),
(44, 18, '', '6353957997', 'navdeep', '2023-04-28 19:36:31', 'good', 'Pending', 'wex.com'),
(45, 18, 'navdeepbhanderi1@gmail.com', '6353957997', 'navdeep', '2023-04-28 19:38:13', 'fgfdd', 'Pending', 'erte.com'),
(46, 0, 'navdeepbhanderi1@gmail.com', '1234567898', 'navdeep', '2023-04-28 19:44:01', 'fgfd', 'Pending', 'fw.com'),
(47, 18, 'navdeepbhanderi1@gmail.com', '1234567890', 'Navdeep', '2023-04-29 09:13:20', 'hello', 'Pending', 'a.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `project_developer`
--
ALTER TABLE `project_developer`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `userrequest`
--
ALTER TABLE `userrequest`
  ADD PRIMARY KEY (`uno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_developer`
--
ALTER TABLE `project_developer`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userrequest`
--
ALTER TABLE `userrequest`
  MODIFY `uno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
