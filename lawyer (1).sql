-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 10:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(191) NOT NULL,
  `visible` mediumint(9) DEFAULT 0,
  `slug` varchar(191) NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `featured_image`, `visible`, `slug`, `meta_description`, `created_at`) VALUES
(18, 'Protecting Your Intellectual  property', '<h3><b>Lorem Ipsum</b></h3><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales faucibus lorem, id dictum dolor tristique nec. Ut elementum quam risus, a gravida mauris rhoncus in. Quisque ornare, lectus id placerat mattis, elit mauris ullamcorper magna, ac lobortis libero dolor varius urna. Phasellus eu bibendum neque, quis efficitur felis. Aenean consequat, libero rutrum ullamcorper imperdiet, ligula arcu volutpat elit, eget pretium enim quam eu erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis justo nibh, imperdiet eget mattis vitae, fringilla a justo. Nam ante mi, aliquam et tempor ac, sagittis at augue. Nulla congue quis ligula ac bibendum. Cras volutpat dolor at est rhoncus eleifend.</span></p>', 'still-life-world-intellectual-property-day.webp', 0, 'protecting-your-intellectual-property', 'Protecting Your Intellectual Property', '2024-04-15 00:40:23'),
(19, 'How to Choose the Right Attorney', '<h1><b>Lorem Ipsum</b></h1><p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget bibendum ex. Nullam scelerisque vitae mi eget placerat. Vestibulum eleifend felis rutrum lorem tincidunt gravida. Curabitur urna arcu, blandit vitae feugiat at, convallis euismod arcu. Etiam suscipit arcu sit amet tortor faucibus iaculis. Cras fermentum, ligula sit amet tincidunt pretium, neque tortor suscipit orci, eu fringilla velit orci ut arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a eros at arcu pulvinar venenatis. Praesent hendrerit, tellus nec interdum varius, dolor ante congue nisl, sed euismod mauris felis at nunc. Integer in metus sapien. Sed commodo libero condimentum ex consequat, at bibendum nulla varius. Nunc at finibus dolor, pellentesque feugiat arcu.</span></p><ol><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"#\">Lorem Ipsum Dolor</a></span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"#\">Lorem Ipsum Dolor</a></span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"#\">Lorem Ipsum Dolor</a></span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"#\">Lorem Ipsum Dolor</a></span></li></ol><h2><b>Lorem Ipsum</b></h2><h2><br></h2><p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, <b>consectetur adipiscing</b> elit. Vivamus eget bibendum ex. Nullam scelerisque vitae mi eget placerat. Vestibulum eleifend felis rutrum lorem tincidunt gravida. Curabitur urna arcu, blandit vitae feugiat at, convallis euismod arcu. Etiam suscipit arcu sit amet tortor faucibus iaculis. Cras fermentum, ligula sit amet tincidunt pretium, neque tortor suscipit orci, eu fringilla velit orci ut arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a eros at arcu pulvinar venenatis. <u style=\"background-color: rgb(0, 255, 255);\">Praesent hendrerit</u>, tellus nec interdum varius, dolor ante congue nisl, sed euismod mauris felis at nunc. Integer in metus sapien. Sed commodo libero condimentum ex consequat, at bibendum nulla varius. Nunc at finibus dolor, pellentesque feugiat arcu.</span><br></p>', 'smiling-handsome-business-leader-making-notes_1262-5654.webp', 0, 'how-to-choose-the-right-attorney', 'How to Choose the Right Attorney', '2024-04-15 04:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `father_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `locality` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT 'Pakistan',
  `postal_code` int(11) NOT NULL,
  `cnic_no` bigint(20) NOT NULL,
  `date_of_birth` varchar(101) NOT NULL,
  `martial_status` varchar(101) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `mobile_num` bigint(20) NOT NULL,
  `whatsapp_num` bigint(20) NOT NULL,
  `degree` varchar(191) NOT NULL,
  `uni_clg` varchar(101) NOT NULL,
  `degree_complete` varchar(101) NOT NULL,
  `city_legal_practice` varchar(101) NOT NULL,
  `enrollment_year` varchar(191) NOT NULL,
  `enrollment_type` varchar(191) NOT NULL,
  `expertise` int(11) NOT NULL,
  `aboutLawyer` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approve` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `first_name`, `last_name`, `father_name`, `email`, `password`, `picture`, `address`, `locality`, `district`, `province`, `country`, `postal_code`, `cnic_no`, `date_of_birth`, `martial_status`, `gender`, `mobile_num`, `whatsapp_num`, `degree`, `uni_clg`, `degree_complete`, `city_legal_practice`, `enrollment_year`, `enrollment_type`, `expertise`, `aboutLawyer`, `facebook`, `twitter`, `linkedin`, `instagram`, `created_at`, `approve`) VALUES
(1, 'Shayan', 'Alam', 'Shayan Alam', 'shayanalam8931@gmail.com', '$2y$10$VAfT2WxX7O8ZwgfqmJ0RJO4xuTdQTi2Q.rYtP3lXSpVa94p9Q8cH6', 'short-haired-man-business-suit-carrying-two-registers_549566-318.webp', 'Block N North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Khoski Tehsil', 'Astore', 'Sindh', 'Pakistan', 74800, 432443, '1991-06-05', 'Single', 'M', 3140314548, 3140314548, 'LLM', 'Jinnah Law College, Peshawar', '2019-11-12', 'Karachi', '2022', 'High Court', 2, 'Lorem ipsum dolor sit amet, consectetur', 'https://www.facebook.com/shayan', 'https://www.twitter.com/shayan', 'https://www.linkedin.com/shayan', 'https://www.facebook.com/shayan', '2024-04-13 22:39:30', 1),
(3, 'Syed', 'Shehroz', 'Syed Shayan', 'shehroz@gmail.com', '$2y$10$n4dNcdQR2aEDefbeP5rqbeogDgGoA5y/XLyziH/An7527FJSb.GFS', 'lawyer-with-client.webp', 'Block H North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Mirpur Sakro Tehsil', 'Astore', 'Khyber Pakhtunkhwa', 'Pakistan', 74800, 3123423423, '1997-11-12', 'Single', 'M', 314094175, 314094175, 'LLM', 'Mardan Law College, Mardan', '', 'Karachi', '2024', 'Lower Court', 3, 'Lorem ipsum dolor sit amet, consectetur', 'https://www.facebook.com/shehroz', 'https://www.twiiter.com/shehroz', 'https://www.linkedin.com/shehroz', 'https://www.instagram.com/shehroz', '2024-04-14 03:57:01', 1),
(4, 'Muhammad', 'Kashif', 'shayan', 'kashif@gmail.com', '$2y$10$xNRWCxMYAl.c/rb7G469MecN.gn1.0v3/ffarLoWbWdFa4Rcv1X0W', '430296883_437778462140338_395877428498444958_n.jpg', 'Block H North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Shah Bandar Tehsil', 'Awaran', 'Balochistan', 'Pakistan', 74800, 5655435654, '1999-10-29', 'Single', 'T', 564567, 564567, 'LLM', 'Department of law islamia College University, Peshawar', '2023-10-30', 'Karachi', '2023', 'High Court', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ', 'https://www.facebook.com/kashif', 'https://www.twitter.com/kashif', 'https://www.linkedin.com/kashif', 'https://www.instagram.com/kashif', '2024-04-15 00:21:18', 1),
(5, 'Hammad', 'Mirza', 'Ali Mirza', 'hammad@gmail.com', '$2y$10$lj7xdIR9jBF/b7jqKBnBS.HYccCMuMjqSaPf49rA/MpFMoYvxD32S', 'front-view-male-judge-posing-with-gavel_23-2148453377.webp', 'Block N North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Ghorobari Tehsil', 'Abbottabad', 'Sindh', 'Pakistan', 74611, 43243432, '2000-11-30', 'Married', 'M', 45435234, 45435234, 'LLM', 'Mardan Law College, Mardan', '2022-07-06', 'islamabad', '2023', 'Lower Court', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus', 'https://www.facebook.com/hammad', 'https://www.twiiter.com/hammad', 'https://www.linkedin.com/hammad', 'https://www.instagram.com/hammad', '2024-04-15 01:31:10', 1),
(6, 'Maryam', 'Fatima', 'Sadiq Mustafa', 'maryam@gmail.com', '$2y$10$.Zf.bJ4Sq7XUTM7vb7.rY.M19ualLdDkcvpjrRonUI7yBGta4NOca', 'portrait-female-lawyer-formal-suit-with-clipboard_23-2148915797.webp', 'Block J North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Mirpur Sakro Tehsil', 'Astore', 'Khyber Pakhtunkhwa', 'Pakistan', 74700, 2312323, '1993-08-29', 'Married', 'F', 37187313, 37187313, 'PGDL', 'Edwards College, Peshawar Cantt.', '2009-07-17', 'Karachi', '2023', 'High Court', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus', 'https://www.facebook.com/maryam', 'https://twitter.com/maryam', 'https://www.linked.com/maryam', 'https://www.instagram.com/maryam', '2024-04-15 02:04:41', 1),
(7, 'Naveed', 'Qureshi', 'Akbar Qureshi', 'naveed@gmail.com', '$2y$10$2p7Wd/3PulXAWJ/olBewtesCnIndJd6CwlXL9yyyn7H86r3KXvcl.', 'portrait-contemplated-mature-lawyer-with-hand-his-pocket_23-2147898622.webp', 'Block L North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Badin Tehsil', 'Abbottabad', 'Sindh', 'Pakistan', 74850, 213123123, '1998-05-13', 'Single', 'M', 12313143, 12313143, 'LLM', 'Department of law islamia College University, Peshawar', '2021-09-30', 'Karachi', '2022', 'Lower Court', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus', 'https://www.facebook.com/naveed', 'https://twitter.com/naveed', 'https://www.linked.com/naveed', 'https://www.instagram.com/naveed', '2024-04-15 02:14:06', 1),
(8, 'Atta', 'Muhammad', 'Hassan Ullah Usmani', 'atta@gmail.com', '$2y$10$E6pe2SWRSzBguNYjSwCUDOppgSQMwUk4lK1R1Enh26C7RlXNFS9ES', 'annoyed-adult-slavic-superhero-man-red-cape-wearing-glasses-holding-clipboard-pen-isolated-olive-green-wall-with-copy-space_141793-79860.webp', 'Block L North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Khoski Tehsil', 'Abbottabad', 'Punjab', 'Pakistan', 74800, 2535332131, '2001-02-03', 'Single', 'T', 4234343, 344653, 'LLB', 'University of Peshawar', '2017-10-29', 'Karachi', '2022', 'Lower Court', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus', 'https://www.facebook.com/atta', 'https://twitter.com/atta', 'https://www.linked.com/atta', 'https://www.instagram.com/atta', '2024-04-15 02:32:23', 1),
(9, 'Rameez', 'Sheikh', 'Aqib Sheikh', 'rameez@gmail.com', '$2y$10$Ix8EsJQ61x85FtfqM2bCCe2tEU2shUlRV2L3SHWRG61H8HfaIQ3m2', 'serious-senior-businessman-with-clipboards_1262-1934.webp', 'R3V3+8MF, Old Korangi Rd, Sabir SRE Karachi Cantonment, Karachi, Karachi City, Sindh 74000, Pakistan', 'Default', 'Attock', 'Khyber Pakhtunkhwa', 'Pakistan', 74000, 3345324234, '1982-05-27', 'Married', 'M', 67469535, 67469535, 'PhD.', 'College of law, Peshawar University', '2011-10-29', 'Karachi', '2017', 'Supreme Court', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus', 'https://www.facebook.com/rameez', 'https://twitter.com/rameez', 'https://www.linked.com/rameez', 'https://www.instagram.com/rameez', '2024-04-15 02:46:00', 1),
(10, 'Anyaa', 'Azeem', 'Bilal Azeem', 'anyaa@gmail.com', '$2y$10$A/wMUZHsf2IgPb.sV2MTWezbKiAAXMozP/PhlasghJcoEGKKyTzoq', 'brunette-woman-sitting-desk-reading-documents_23-2147650885.webp', 'Block N North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Shaheed Fazi Rahu Tehsil', 'Awaran', 'Sindh', 'Pakistan', 74800, 34234234, '1993-09-26', 'Single', 'F', 564535, 564535, 'LLM', 'Department of law islamia College University, Peshawar', '2018-08-30', 'Karachi', '2023', 'High Court', 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus', 'https://www.facebook.com/anyaa', 'https://twitter.com/anyaa', 'https://www.linked.com/anyaa', 'https://www.instagram.com/anyaa', '2024-04-15 03:08:25', 1),
(11, 'Adeel', 'Sohail', 'Aqib Sohail', 'adeel@gmail.com', '$2y$10$REM15POHZZOkcAgvv.LGd.CD3/trpZk2vKO.lI1OgU/CLL4MHEDuu', 'portrait-elegant-old-man-wearing-suit_23-2148831097.webp', 'Block M North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Badin Tehsil', 'Abbottabad', 'Khyber Pakhtunkhwa', 'Pakistan', 74799, 34324243, '1984-11-03', 'Married', 'M', 443432232, 443432232, 'LLM', 'College of law, Peshawar University', '2009-10-28', 'Karachi', '2022', 'Supreme Court', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus', 'https://www.facebook.com/adeel', 'https://twitter.com/adeel', 'https://www.linked.com/adeel', 'https://www.instagram.com/adeel', '2024-04-15 04:03:24', 1),
(12, 'Anil', 'Kumar', 'Aqib Kumar', 'anil@gmail.com', '$2y$10$IPPoaZx.EJ7UUuZvd/N6T.bcI1tDtcCetRJoiPr0sF1aznZ3hsNYm', 'content-indian-businessman-completing-form-cafe_1262-3190.webp', 'Block N North Nazimabad Town, Karachi, Karachi City, Sindh, Pakistan', 'Khoski Tehsil', 'Attock', 'Sindh', 'Pakistan', 74788, 324234234, '1992-01-06', 'Single', 'M', 352353248, 352353248, 'LLM', 'University of Peshawar', '2020-11-29', 'Karachi', '2022', 'Lower Court', 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor, ex at pellentesque', 'https://www.facebook.com/anil', 'https://twitter.com/anil', 'https://www.linked.com/anil', 'https://www.instagram.com/anil', '2024-04-16 05:33:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `practiceareas`
--

CREATE TABLE `practiceareas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `visible` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practiceareas`
--

INSERT INTO `practiceareas` (`id`, `name`, `slug`, `image`, `description`, `visible`, `created_at`) VALUES
(1, 'Public interest litigation', 'public-interest-litigation', 'corporate-business-people-with-brochure_23-2147704553.webp', 'Lorem ipsum dolor sit amet, consectetur', 0, '0000-00-00 00:00:00'),
(2, 'Criminal Laws', 'ciminal-laws', 'criminal-laws.jpg', 'Lorem ipsum dolor sit amet, consectetur', 1, '0000-00-00 00:00:00'),
(3, 'Legal Drifting', 'legal-drifting', 'legal-drifting.webp', 'Lorem ipsum dolor sit amet, consectetur', 1, '0000-00-00 00:00:00'),
(4, 'Immigration & Visa Laws', 'immigration-&-visa-laws', 'hands-holding-tickets-close-up_23-2149080808.webp', 'Lorem ipsum dolor sit amet, consectetur', 1, '0000-00-00 00:00:00'),
(5, 'Banking Laws', 'banking-laws', 'hand-that-holds-hammer-piles-money-written-with-white-chalk-draw-concept_1150-19559.webp', 'Lorem ipsum dolor sit amet, consectetur', 1, '0000-00-00 00:00:00'),
(6, 'Family Laws', 'family-laws', 'family.webp', 'Lorem ipsum dolor sit amet, consectetur', 1, '0000-00-00 00:00:00'),
(7, 'Taxation', 'taxation', 'tax-credits-claim-return-deduction-refund-concept.webp', 'Lorem ipsum dolor sit amet, consectetur', 1, '0000-00-00 00:00:00'),
(8, 'Intellectual Property', 'intellectual-property', 'composition-with-book-light-bulb.webp', 'Lorem ipsum dolor sit amet, consectetur', 1, '0000-00-00 00:00:00'),
(9, 'Corporate Laws', 'corporate-laws', 'corporate.jpg', 'Lorem ipsum dolor sit amet, consectetur', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE `registeruser` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `isAdmin` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`id`, `name`, `email`, `phone`, `password`, `isAdmin`, `created_at`) VALUES
(3, 'Shazain Alam', 'shazain@gmail.com', '+191 13133123123123412313', '$2y$10$VlfhGJ92CZI06NVYiaT4h.O9XxgSJuN1DRs00/ZHtombA9FOtrTbi', 0, '2024-04-06 14:39:42'),
(5, 'Shayan Alam', 'shayanalam8931@gmail.com', '+91 03140314548', '$2y$10$16rXKgODD2xXs/lQGtYsbOrxaIU0XaesYjMScobPlz8c7Eha5l9Sq', 0, '2024-04-14 02:31:12'),
(6, 'admin', 'admin@gmail.com', '+91 12312312', '$2y$10$WDiDkHsqoJ3iH8rfy7ceQuDQJOCXh/jElStBiEqgfY9NfIjru55Ka', 1, '2024-04-15 01:03:24'),
(8, 'testing', 'testing@gmail.com', '+91 11111', '$2y$10$yVMEYtZv737QSm8AKxWLmuT4fxqJu06aqBK0l3r810tFZPsaQOdEy', 0, '2024-04-15 06:48:08'),
(9, 'Muhammad Kashif', 'kashif420@yahoo.com', '+91 42069420', '$2y$10$kv2Fy8/QWWORO6MIB5lnKeZX9lcD7szFuRdoVufaJt0wrKwMi3i9q', 0, '2024-04-16 06:12:12'),
(10, 'Ayan Khan', 'ayan@gmail.com', '+91 3140319541', '$2y$10$cAx2/HEo2HM9WSQGkRZfnOrL0xe.uw3t7Q0Qfqw1L8j3rgbLPv/Pq', 0, '2024-04-16 06:13:44'),
(11, 'Anyaa Aqib', 'anyaa@gmail.com', '+91 12343241', '$2y$10$lQ2SzuP0QLrXGU1shRPb6.3JtK2vYYaRdsAIi6Bo7VfdT.LfR.1YS', 0, '2024-04-16 08:25:18'),
(12, 'Maryam Fatima', 'maryam@gmail.com', '+91 54532185', '$2y$10$yQqcBCQarcVTsNbQHpF3HOxrKVK4XNKfRire5LkZdOniKootA4lmC', 0, '2024-04-16 08:26:44'),
(13, 'Ayesha Azhar', 'ayesha@gmail.com', '+91 5453429', '$2y$10$i5UGjr2ijNasPte3IyomR.EQ0IJQMkNQuCMIdrhlbXr0Ki.SwEkO2', 0, '2024-04-16 08:28:59'),
(14, 'Rania Mirza', 'rania@gmail.com', '+91 03140394618', '$2y$10$e6NXPApkUGQinYMcrVQ3TOUEWYutDbS5oFp/RKYSyVzZoP9n3fijC', 0, '2024-04-16 08:30:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cnic_no` (`cnic_no`),
  ADD UNIQUE KEY `mobile_num` (`mobile_num`),
  ADD UNIQUE KEY `whatsapp_num` (`whatsapp_num`),
  ADD UNIQUE KEY `facebook` (`facebook`),
  ADD UNIQUE KEY `twitter` (`twitter`),
  ADD UNIQUE KEY `linkedin` (`linkedin`),
  ADD UNIQUE KEY `instagram` (`instagram`),
  ADD KEY `expertise` (`expertise`);

--
-- Indexes for table `practiceareas`
--
ALTER TABLE `practiceareas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `practiceareas`
--
ALTER TABLE `practiceareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registeruser`
--
ALTER TABLE `registeruser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD CONSTRAINT `lawyers_ibfk_1` FOREIGN KEY (`expertise`) REFERENCES `practiceareas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
