-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2023 at 11:10 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20729624_whitehatify`
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
(8, 'charmy', 'crudani31@gmail.com', '$2y$10$OS1jtfAidiAZ4nFPjZTzeeh2Ld8u0nyA8bN96SpqiFVN0UgJuX9zK', '4c9de480f6a467603f87', 'Dashboard,Project,Consultation,Payment,Review,ManageUser,ManageAdmin', '2023-03-23 19:07:00'),
(10, 'navdeep', 'navdeepbhanderi1@gmail.com', '$2y$10$JKoL6ldt70jC1eof6hJKyuzfctzzZsQa5GG7rh1sKZetk9Y04pPke', '67a112c1870f8b849363', 'Dashboard,Project,Consultation,Payment,Review,ManageUser,ManageAdmin', '2023-04-06 12:54:04'),
(27, 'apexa', 'apexagotecha@gmail.com', '$2y$10$8BdUFr49HJ4RqLu1JPtHKuLi2wfTA0o/C2g3YtnG8sYLL2TOx1//2', '91e24e0ef6554772cc7e', 'Dashboard,Project,Consultation,Payment,Review,ManageUser,ManageAdmin', '2023-10-17 17:15:04');

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
(34, 'WhiteHatify865', 18, 'abcd', 'sdfg.com', 'ENHANCED 6 Month - 15000₹', '15750', 'pay_LjSmnSNvmB4EZ9', 'navdeepbhanderi1@gmail.com', 'INR', '2023-04-29 09:15:09', 'success'),
(35, 'WhiteHatify249', 27, 'navdeep', 'asdfghjkl', 'STANDERD 6 Month - 9000₹', '9450', 'pay_LpeoXyyIi6oyOq', 'navdeepbhanderi1@gmail.com', 'INR', '2023-05-15 00:55:09', 'success'),
(36, 'WhiteHatify780', 27, 'dfsdaf', 'sd.com', 'ULTIMATE 3 Month - 12000₹', '12600', 'pay_LqOeRth1N07k4j', 'navdeepbhanderi1@gmail.com', 'INR', '2023-05-16 21:45:31', 'success'),
(37, 'WhiteHatify988', 27, 'cvf', 'fgfe', 'ENHANCED 3 Month - 8000₹', '8400', 'pay_LqOu4sNt8lGcs9', 'navdeepbhanderi1@gmail.com', 'INR', '2023-05-16 22:00:17', 'success'),
(38, 'WhiteHatify725', 27, 'navdeep', 'whitehatify.com', 'ENHANCED 6 Month - 15000₹', '15750', 'pay_LqR6gvDB2OQjaP', 'navdeepbhanderi1@gmail.com', 'INR', '2023-05-17 00:09:37', 'success'),
(39, 'WhiteHatify672', 27, 'navdeep', 'whitehatify.com', 'ENHANCED 6 Month - 15000₹', '15750', 'pay_LqR7ZTnYYzy1Fs', 'navdeepbhanderi1@gmail.com', 'INR', '2023-05-17 00:10:26', 'success'),
(40, 'WhiteHatify196', 27, 'navdee[', 'nav.com', 'ENHANCED 3 Month - 8000₹', '8400', 'pay_LwvjDnuyAZUYEH', 'navdeepbhanderi1@gmail.com', 'INR', '2023-06-02 10:00:55', 'success'),
(41, 'WhiteHatify102', 28, 'crudani', 'crudani.com', 'STANDERD 6 Month - 9000₹', '9450', 'pay_M5CLGXZjD7ALLH', 'crudani31@gmail.com', 'INR', '2023-06-23 07:28:02', 'success'),
(42, 'WhiteHatify614', 28, 'charmy', 'c.com', 'ENHANCED 6 Month - 15000₹', '15750', 'pay_M6xK1ELOK2fZwh', 'crudani31@gmail.com', 'INR', '2023-06-27 18:04:33', 'success'),
(43, 'WhiteHatify304', 28, 'asdfgh', 'c.com', 'ENHANCED 3 Month - 8000₹', '8400', 'pay_M6xqs0RbXIj1xS', 'crudani31@gmail.com', 'INR', '2023-06-27 18:35:54', 'success'),
(44, 'WhiteHatify184', 28, 'navdeep', 'df.com', 'STANDERD 6 Month - 9000₹', '9450', 'pay_M7DbZ7Sky0YEiO', 'crudani31@gmail.com', 'INR', '2023-06-28 10:00:10', 'success'),
(45, 'WhiteHatify594', 30, 'navdeep', 'm.com', 'ULTIMATE 6 Month - 20000₹', '21000', 'pay_MgRJjRZxcdAxrs', 'm@gmail.com', 'INR', '2023-09-25 10:10:03', 'success'),
(46, 'WhiteHatify691', 31, 'fdfd', 'asdf.com', 'ENHANCED 3 Month - 8000₹', '8400', 'pay_MgopWIokRKgVor', 'cd@gmail.com', 'INR', '2023-09-26 09:10:06', 'success'),
(47, 'WhiteHatify571', 31, 'navdeep', 'navdeep.com', 'ENHANCED 3 Month - 8000₹', '8400', 'pay_MgoqhH3XXwTSYC', 'cd@gmail.com', 'INR', '2023-09-26 09:11:16', 'success'),
(48, 'WhiteHatify735', 28, 'dfg', 'rtfy', 'ENHANCED 3 Month - 8000₹', '8400', 'pay_MpMHHkKrH4gs2U', 'crudani31@gmail.com', 'INR', '2023-10-17 23:05:16', 'success'),
(49, 'WhiteHatify477', 28, 'fdsf', 'asd.com', 'STANDERD 3 Month - 5000₹', '5250', 'pay_MpMPYqVg0n4tyC', 'crudani31@gmail.com', 'INR', '2023-10-17 23:13:09', 'success');

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
(2, 'AnswerThePublic', 'whitehatify.png', '2023-04-20', '6 Months', 'crudani31@gmail.com', 'whitehatify.com', 90, 'Grow leads for your business by using recommended SEO strategies that will help'),
(16, 'ApnaCollege', 'sdfd891.PNG', '2023-05-20', '3 Months', 'navdeepbhanderi1@gmail.com', 'c.com', 34, 'Grow leads for your business by using recommended SEO strategies that will help\r\n'),
(18, 'Spotify', 'Spotify67.png', '2023-06-17', '6 Months', 'crudani31@gmail.com', 'resso.com', 20, 'hello'),
(19, 'snvq', '', '6205-05-31', '3 Months', 'dfgd', 'www.ssdfd.com', -1, 'dfgfdg'),
(20, 'abcd', 'abcd947.png', '2023-11-02', '6 Months', 'crudani31@gmail.com', 'a.com', 87, 'sdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `did` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `country` varchar(30) NOT NULL,
  `traffic` int(10) NOT NULL,
  `earning` int(10) NOT NULL,
  `expenses` int(10) NOT NULL,
  `k1` text NOT NULL,
  `k2` text NOT NULL,
  `k3` text NOT NULL,
  `k4` text NOT NULL,
  `k5` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`did`, `pid`, `pname`, `name`, `phone`, `city`, `state`, `pincode`, `country`, `traffic`, `earning`, `expenses`, `k1`, `k2`, `k3`, `k4`, `k5`, `date`) VALUES
(1, 2, 'AnswerThePublic', 'charmy', 1234567890, 'Brampton', 'Ontario', '=09876', 'Canada', 750, 9909, 5000, 'Effective keyword zcdfgfsreadghffd', ' content for a successful SEO dfsghrtewq', 'The importance of backlinks in an SEO project', 'On-page optimization', 'Measuring success ', '0000-00-00 00:00:00'),
(10, 16, 'ApnaCollege', 'charmy ', 6353957997, 'Junagadh', 'Gujarat', '362001', 'india', 600, 23000, 15000, 'Effective keyword research strategies for an SEO project', 'Creating high-quality content for a successful SEO project', 'The importance of backlinks in an SEO project', 'On-page optimization techniques for boosting SEO project rankings', 'Measuring success and ROI in an SEO project using analytics', '2023-05-16 16:18:05'),
(12, 20, 'abcd', 'we', 1111111111, 'wse', 'd', '333333', 'ssss', 2222, 2222, 333, 'asdfgh', 'ssssssss', 'cccccccc', 'cccccccc', 'sssss', '2023-10-17 17:17:37');

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
(11, 2, 'Apexa', 'Full stack developer', 'hello\r\n', 'apexaaaa@gmail.com', 1234567890, 'Paris', '2023-04-26 10:30:11'),
(20, 2, 'Charmy', 'App Developer', 'helloo sdfkrjifhejf', 'crudani31@gmail.com', 2147483647, 'Canada', '2023-04-26 11:01:53'),
(24, 13, 'Charmy', 'developer', 'dfd', 'deepbhanderi1@gmail.com', 45466456, 'Canada', '2023-04-29 09:19:24'),
(25, 2, 'aaaaaaaaaaaaaaa', 'asd', 'sd', 'aaaaaaaaaa@gmail.com', 1234567890, 'melburn', '2023-05-10 00:03:37'),
(26, 2, 'navdeep', 'aaaaaaaaaaaaa', 'sdvcc', 'aaaaaaaaaa@gmail.com', 1234567890, 'melburn', '2023-05-14 19:47:46'),
(27, 16, 'tulsi', 'App Developer', 'sadfg', 'aaaaaaaaaa@gmail.com', 1234567890, 'melburn', '2023-05-16 16:18:28'),
(28, 17, 'xyz', 'Backend Developer', 'hello', 'z@gmail.com', 1234567890, 'Cana', '2023-06-27 12:38:44'),
(29, 20, 'hhh', 'ww', 'wwwwwwwww', 'iysh@gmail.com', 1111111119, 'eddddddd', '2023-10-17 17:18:20');

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
(15, 2, 'navdeepbhanderi1@gmail.com', 'ajava 1-3.docx', '2023-05-08'),
(16, 2, 'navdeepbhanderi1@gmail.com', 'uii78.png', '2023-05-15'),
(17, 16, 'navdeepbhanderi1@gmail.com', '4.PNG', '2023-05-16'),
(18, 16, 'navdeepbhanderi1@gmail.com', 'Activity Diagram (2).docx', '2023-05-16'),
(19, 2, 'navdeepbhanderi12@gmail.com', '4.PNG', '2023-06-02'),
(20, 17, 'crudani31@gmail.com', '5 MCAD DSU (2).pdf', '2023-06-27'),
(21, 2, 'navdeepbhanderi12@gmail.com', 'sleep.jpg', '2023-10-13'),
(22, 2, 'rohanvanvi@gmail.com', 'sleep.jpg', '2023-10-13'),
(23, 2, 'crudani31@gmail.com', 'Part-I D23CE169.pdf', '2023-10-17'),
(24, 20, 'crudani31@gmail.com', 'sem 4 result.png', '2023-10-17'),
(25, 20, 'crudani31@gmail.com', '.lesshst', '2023-10-17');

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
(1, 1, 'charmy', 'crudani31@gmail.com', 'Good Experience', '2023-03-22 10:22:06');

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
(28, 'Charmy', 'Rudani', 'crudani31@gmail.com', '$2y$10$kqtAp3mJ8UZ2ZqmvFFBtd.6JwS1ZX9moiE4t3lZoNuRAE9i6MDlra', 'jnd', 'jnd', 'India', 'Gujarat', 362001, '8a0b5f43eaa0dfd96fe2', '2023-05-16 19:14:08'),
(30, 'dfg', 'fdg', 'm@gmail.com', '$2y$10$FZkzBNBdO.bM7rtyf.IYf.zUYyNcIWM0OH/xRe1IycXhu4SHDORXa', 'gfh', 'fdfe', 'India', 'Chhattisgarh', 360002, 'f14bd1a538af915cae60', '2023-09-25 04:38:54'),
(31, 'fdsf', 'FED', 'cd@gmail.com', '$2y$10$J.32eTGpj84CHiXktwtIx./bSkKtATC6t9R4t43xYtWESGJe9Lf5a', 'FEF', 'GFG', 'India', 'Bihar', 362001, '5546eb9dd573f47b6b9e', '2023-09-26 03:37:33'),
(32, 'asdf', 'sdfg', 'haa@gmail.com', '$2y$10$OqBsNUU0cfjigA9LzwTKG.kLSfrkC2PLtGWW7SkTY9YerFwBJrd.K', 'sdf', 'sdfg', 'India', 'sd', 34, '1bace8a880b582f39cf9', '2023-10-13 16:25:00'),
(33, 'navdeep', 'bhanderi', 'navdeepbhanderi12@gmail.com', '$2y$10$MuxNuCgubKDsnaBfIkUfUeK3u4oDG8rVygPxAT.lRwUm1AJ1mfhg.', 'sdfsd', 'ds', 'India', 'Bihar', 343432, '562ca50ad5d0dfc31ed2', '2023-10-13 16:29:01'),
(34, 'sdfsd', 'dfgd', 'navdeepbhanderi1@gmail.com', '$2y$10$uRgQYm2T2.2L5XTQgZwIC.Vef.NQhl.By0mc37kjSVjdZNbPxWvdS', 'dsfsd', 'saf', 'India', 'Assam', 433433, '6016c430d0b02a9053a3', '2023-10-13 16:30:05');

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
(34, 18, 'khush@gmail.com', '4356666684', 'khush', '2023-03-25 17:24:09', 'SDGFFDGRTGRT', 'Cancel', 'k.com'),
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
(47, 18, 'navdeepbhanderi1@gmail.com', '1234567890', 'Navdeep', '2023-04-29 09:13:20', 'hello', 'Pending', 'a.com'),
(48, 28, 'crudani31@gmail.com', '7777777777', 'Charmy', '2023-10-17 17:21:50', 'e', 'Pending', 'th.uy');

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
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project_developer`
--
ALTER TABLE `project_developer`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `userrequest`
--
ALTER TABLE `userrequest`
  MODIFY `uno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
