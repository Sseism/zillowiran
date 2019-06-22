-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 11:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zillow`
--

-- --------------------------------------------------------

--
-- Table structure for table `accinfacilitie`
--

CREATE TABLE `accinfacilitie` (
  `id` int(11) NOT NULL,
  `accID` int(11) NOT NULL,
  `facilitieID` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accinroom`
--

CREATE TABLE `accinroom` (
  `id` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `accID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `type` int(11) NOT NULL COMMENT 'خصوصی1 دربست2',
  `acc_type_id` int(11) NOT NULL COMMENT 'نوع اقامتگاه(هتل، آپارتمان و ...)',
  `acc_region_id` int(11) NOT NULL COMMENT 'نوع منطقه (ساحلی جنگلی و ...)',
  `discription` text COLLATE utf8_persian_ci NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'ظرفیت',
  `max_quantity` int(11) NOT NULL COMMENT 'حداکثر ظرفیت',
  `room_count` int(11) NOT NULL COMMENT 'تعداد اتاق',
  `bed1` int(11) NOT NULL COMMENT 'تعداد تخت 1 نفره',
  `bed2` int(11) NOT NULL COMMENT 'تعداد تخت 2 نفره',
  `extrabed` int(11) NOT NULL COMMENT 'تعداد تخت و تشک اضافی',
  `wc` int(11) NOT NULL COMMENT 'تعداد دستشویی',
  `bathroom` int(11) NOT NULL COMMENT 'تعداد حمام',
  `area_all` int(11) NOT NULL COMMENT 'مساحت کلی',
  `area_building` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `lat` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `long` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `point` int(11) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `check_in` int(11) NOT NULL,
  `check_out` int(11) NOT NULL,
  `aac_policies` text COLLATE utf8_persian_ci NOT NULL COMMENT 'قوانین اقامتگاه',
  `cancell_policies` int(11) NOT NULL COMMENT 'قوانین کنسلی',
  `min_res_night` int(11) NOT NULL COMMENT 'حداقل اقامت',
  `price` bigint(20) NOT NULL,
  `latLong` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acc_image`
--

CREATE TABLE `acc_image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acc_policies`
--

CREATE TABLE `acc_policies` (
  `id` int(11) NOT NULL,
  `accID` int(11) NOT NULL,
  `policiesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `acc_region`
--

CREATE TABLE `acc_region` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_region`
--

INSERT INTO `acc_region` (`id`, `title`) VALUES
(1, 'شهری'),
(2, 'ساحلی'),
(3, 'جنگلی'),
(4, 'کوهستانی'),
(5, 'کویری'),
(6, 'روستایی');

-- --------------------------------------------------------

--
-- Table structure for table `acc_type`
--

CREATE TABLE `acc_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='آپارتمان،ویلا،هتلو....';

--
-- Dumping data for table `acc_type`
--

INSERT INTO `acc_type` (`id`, `title`, `type`) VALUES
(1, 'سوئیت', 1),
(2, 'ویلا', 1),
(3, 'خانه', 1),
(4, 'کلبه', 1),
(7, 'هتل', 2),
(8, 'هتل آپارتمان', 2),
(9, 'اقامتگاه بوم گردی', 2),
(10, 'مجتمع اقامتی', 2),
(11, 'کاروانسرا', 2),
(12, 'هاستل', 2),
(13, 'مهمانسرا', 2),
(14, 'متل', 2);

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nikname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT 'active1 deactiv2',
  `permission_id` int(11) NOT NULL,
  `cteate_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agent_info`
--

CREATE TABLE `agent_info` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `neiberhood` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT 'country>1 city>0 street>2',
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day_price`
--

CREATE TABLE `day_price` (
  `id` int(11) NOT NULL,
  `accID` int(11) NOT NULL,
  `date` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experiens`
--

CREATE TABLE `experiens` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `exp_type_id` int(11) NOT NULL COMMENT 'نوع تجربه',
  `exp_sub_type_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL COMMENT 'اطلاعات بیشتر',
  `facilitie` text CHARACTER SET latin1 NOT NULL COMMENT 'امکانات میزبان',
  `we_do` text CHARACTER SET latin1 NOT NULL COMMENT 'چه خواهیم کرد',
  `time` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'مدت تجربه',
  `materiel` text CHARACTER SET latin1 NOT NULL COMMENT 'تجهیزات لازم',
  `about_host` text CHARACTER SET latin1 NOT NULL COMMENT 'درباره میزبان',
  `price` bigint(20) NOT NULL,
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiens_time`
--

CREATE TABLE `experiens_time` (
  `id` int(11) NOT NULL,
  `exp_id` int(11) NOT NULL,
  `dateIN` int(11) NOT NULL,
  `dateOut` int(11) NOT NULL,
  `timeStart` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `timeEnd` varchar(2555) COLLATE utf8_persian_ci NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exp_image`
--

CREATE TABLE `exp_image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `exp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exp_type`
--

CREATE TABLE `exp_type` (
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id` int(11) NOT NULL,
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilitie`
--

CREATE TABLE `facilitie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `owner` int(11) NOT NULL COMMENT 'مسکن1 اقامتگاه2',
  `faciliti_type` int(11) NOT NULL COMMENT 'مشترک1 کلی2',
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `facilitie`
--

INSERT INTO `facilitie` (`id`, `title`, `icon`, `owner`, `faciliti_type`, `lang`) VALUES
(2, 'آب', '', 2, 2, 'fa'),
(3, 'آشپزخانه', '', 2, 2, 'fa'),
(4, 'اتو', '', 2, 2, 'fa'),
(5, 'اجاق گاز', '', 2, 2, 'fa'),
(6, 'بالکن', '', 2, 2, 'fa'),
(7, 'بخاری برقی', '', 2, 2, 'fa'),
(8, 'بخاری گازی', '', 2, 2, 'fa'),
(9, 'برق', '', 2, 2, 'fa'),
(10, 'پنکه', '', 2, 2, 'fa'),
(11, 'پنکه سقفی', '', 2, 2, 'fa'),
(12, 'تلفن', '', 2, 2, 'fa'),
(13, 'تلویزیون', '', 2, 2, 'fa'),
(14, 'جاروبرقی', '', 2, 2, 'fa'),
(15, 'چای ساز', '', 2, 2, 'fa'),
(16, 'چیلر', '', 2, 2, 'fa'),
(17, 'حمام', '', 2, 2, 'fa'),
(18, 'دستگاه تصفیه آب خانگی', '', 2, 2, 'fa'),
(19, 'سرویس بهداشتی ایرانی', '', 2, 2, 'fa'),
(20, 'سرویس بهداشتی فرنگی', '', 2, 2, 'fa'),
(21, 'سرویس روزانه اتاق', '', 2, 2, 'fa'),
(22, 'سشوار', '', 2, 2, 'fa'),
(23, 'سیستم تهویه هوا', '', 2, 2, 'fa'),
(24, 'سیستم صوتی', '', 2, 2, 'fa'),
(25, 'شوفاژ', '', 2, 2, 'fa'),
(26, 'شومینه', '', 2, 2, 'fa'),
(27, 'صندلی ماساژور', '', 2, 2, 'fa'),
(28, 'صندوق امانات', '', 2, 2, 'fa'),
(29, 'قهوه ساز', '', 2, 2, 'fa'),
(30, 'گاز', '', 2, 2, 'fa'),
(31, 'گرمایش از کف', '', 2, 2, 'fa'),
(32, 'گیرنده دیجیتال ایران', '', 2, 2, 'fa'),
(33, 'لوازم آشپزی', '', 2, 2, 'fa'),
(34, 'ماشین ظرفشویی', '', 2, 2, 'fa'),
(35, 'ماشین لباسشویی', '', 2, 2, 'fa'),
(36, 'ماکروویو', '', 2, 2, 'fa'),
(37, 'مبلمان', '', 2, 2, 'fa'),
(38, 'میز نهارخوری', '', 2, 2, 'fa'),
(39, 'کپسول آتش نشانی', '', 2, 2, 'fa'),
(40, 'کمد/دراور', '', 2, 2, 'fa'),
(41, 'کنسول بازی XBOX یا PS', '', 2, 2, 'fa'),
(42, 'کولر آبی', '', 2, 2, 'fa'),
(43, 'کولر گازی', '', 2, 2, 'fa'),
(44, 'یخچال', '', 2, 2, 'fa'),
(45, 'آرایشگاه', '', 2, 1, ''),
(46, 'آسانسور', '', 2, 1, ''),
(47, 'آلاچیق', '', 2, 1, ''),
(48, 'استخر', '', 2, 1, ''),
(49, 'اعلام حریق', '', 2, 1, ''),
(50, 'ایترنت (Wifi)', '', 2, 1, ''),
(51, 'اینترنت در قسمت لابی', '', 2, 1, ''),
(52, 'باربیکیو', '', 2, 1, ''),
(53, 'پارکینگ', '', 2, 1, ''),
(54, 'پینگ پنگ', '', 2, 1, ''),
(55, 'تالار عروسی', '', 2, 1, ''),
(56, 'تاکسی سرویس', '', 2, 1, ''),
(57, 'جعبه کمک های اولیه', '', 2, 1, ''),
(58, 'جکوزی', '', 2, 1, ''),
(59, 'خشکشویی', '', 2, 1, ''),
(60, 'خودپرداز', '', 2, 1, ''),
(61, 'رستوران', '', 2, 1, ''),
(62, 'سالن اجتماعات', '', 2, 1, ''),
(63, 'سالن بدنسازی', '', 2, 1, ''),
(64, 'سالن کنفرانس', '', 2, 1, ''),
(65, 'سونا', '', 2, 1, ''),
(66, 'سیستم اطفای حریق', '', 2, 1, ''),
(67, 'سیستم بیدارباش مرکزی (Wakeup Call)', '', 2, 1, ''),
(68, 'فروشگاه', '', 2, 1, ''),
(69, 'فوتبال دستی', '', 2, 1, ''),
(70, 'میز بیلیارد', '', 2, 1, ''),
(71, 'نمازخانه', '', 2, 1, ''),
(72, 'کافی شاپ', '', 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `facilitieinhousing`
--

CREATE TABLE `facilitieinhousing` (
  `id` int(11) NOT NULL,
  `homeID` int(11) NOT NULL,
  `facilitieID` int(11) NOT NULL,
  `value` varchar(255) NOT NULL COMMENT 'تعداد/مقدار امکانات'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `caseType` int(11) NOT NULL,
  `caseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

CREATE TABLE `housing` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `uselid` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `ad_type` int(11) NOT NULL COMMENT 'خرید0 رهن1',
  `property_type` int(11) NOT NULL COMMENT 'نوع ملک',
  `lat` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `long` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `area` int(11) NOT NULL COMMENT 'متراژ',
  `price` bigint(20) NOT NULL COMMENT 'مبلغ فروش یا رهن',
  `rent` bigint(20) DEFAULT NULL COMMENT 'اجاره',
  `contract_time` int(11) DEFAULT NULL COMMENT 'مدت قرارداد',
  `room_count` int(11) NOT NULL COMMENT 'تعداد اتاق',
  `built_year` int(11) NOT NULL COMMENT 'سال ساخت',
  `addres` text COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL COMMENT 'توضیحات',
  `facilitie_in_home` int(11) NOT NULL,
  `tag` tinyint(4) NOT NULL COMMENT 'ویژه1 اکازیون0',
  `email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `date` bigint(20) NOT NULL,
  `modify_date` bigint(20) NOT NULL,
  `del` tinyint(4) NOT NULL,
  `neibourhood` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'اماکن عمومی',
  `latLong` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `del` int(11) NOT NULL,
  `lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='قوانین';

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `title`, `del`, `lang`) VALUES
(1, 'استعمال دخانیات مجاز می باشد', 0, 'fa'),
(2, 'ورود حیوانات خانگی مجاز می باشد', 0, 'fa'),
(3, 'برگزاری مراسم مجاز می باشد', 0, 'fa'),
(4, 'پذیرش ۲۴ ساعته مهمان', 0, 'fa'),
(5, 'برای کودکان و سالمندان مناسب می باشد', 0, 'fa'),
(6, 'امکان پذیرش گروه‌های مجردی فراهم می‌باشد.', 0, 'fa');

-- --------------------------------------------------------

--
-- Table structure for table `proprtytype`
--

CREATE TABLE `proprtytype` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='جدول نوع ملک';

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `breakfast` int(11) NOT NULL,
  `lunch` int(11) NOT NULL,
  `dinner` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `off` bigint(20) NOT NULL,
  `lang` varchar(255) COLLATE utf8_persian_ci NOT NULL COMMENT 'زبان سطر'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'شماره موبایل',
  `password` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nationel_card` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_type` int(11) NOT NULL COMMENT 'مشاور1 معمولی0',
  `status` int(11) NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `created_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accinfacilitie`
--
ALTER TABLE `accinfacilitie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accID` (`accID`),
  ADD KEY `facilitieID` (`facilitieID`);

--
-- Indexes for table `accinroom`
--
ALTER TABLE `accinroom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomID` (`roomID`),
  ADD KEY `accID` (`accID`);

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_type_id` (`acc_type_id`),
  ADD KEY `Accommodation_ibfk_2` (`acc_region_id`);

--
-- Indexes for table `acc_image`
--
ALTER TABLE `acc_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accID` (`acc_id`);

--
-- Indexes for table `acc_policies`
--
ALTER TABLE `acc_policies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accID` (`accID`),
  ADD KEY `policiesID` (`policiesID`);

--
-- Indexes for table `acc_region`
--
ALTER TABLE `acc_region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acc_type`
--
ALTER TABLE `acc_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Indexes for table `agent_info`
--
ALTER TABLE `agent_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityID` (`city_id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityID` (`city_id`);

--
-- Indexes for table `day_price`
--
ALTER TABLE `day_price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accID` (`accID`);

--
-- Indexes for table `experiens`
--
ALTER TABLE `experiens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiens_ibfk_1` (`city_id`),
  ADD KEY `exp_type_id` (`exp_type_id`);

--
-- Indexes for table `experiens_time`
--
ALTER TABLE `experiens_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expID` (`exp_id`);

--
-- Indexes for table `exp_image`
--
ALTER TABLE `exp_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expID` (`exp_id`);

--
-- Indexes for table `exp_type`
--
ALTER TABLE `exp_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilitie`
--
ALTER TABLE `facilitie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilitieinhousing`
--
ALTER TABLE `facilitieinhousing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `homeID` (`homeID`),
  ADD KEY `facilitieID` (`facilitieID`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `housing`
--
ALTER TABLE `housing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`uselid`),
  ADD KEY `cityID` (`city_id`),
  ADD KEY `propertyType` (`property_type`),
  ADD KEY `facilitiINhome` (`facilitie_in_home`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proprtytype`
--
ALTER TABLE `proprtytype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `accinfacilitie`
--
ALTER TABLE `accinfacilitie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `accinroom`
--
ALTER TABLE `accinroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acc_image`
--
ALTER TABLE `acc_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acc_policies`
--
ALTER TABLE `acc_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acc_region`
--
ALTER TABLE `acc_region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `acc_type`
--
ALTER TABLE `acc_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agent_info`
--
ALTER TABLE `agent_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `day_price`
--
ALTER TABLE `day_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experiens`
--
ALTER TABLE `experiens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experiens_time`
--
ALTER TABLE `experiens_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exp_image`
--
ALTER TABLE `exp_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exp_type`
--
ALTER TABLE `exp_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facilitie`
--
ALTER TABLE `facilitie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `facilitieinhousing`
--
ALTER TABLE `facilitieinhousing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `housing`
--
ALTER TABLE `housing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `proprtytype`
--
ALTER TABLE `proprtytype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accinfacilitie`
--
ALTER TABLE `accinfacilitie`
  ADD CONSTRAINT `accINfacilitie_ibfk_1` FOREIGN KEY (`accID`) REFERENCES `accommodation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accINfacilitie_ibfk_2` FOREIGN KEY (`facilitieID`) REFERENCES `facilitie` (`id`);

--
-- Constraints for table `accinroom`
--
ALTER TABLE `accinroom`
  ADD CONSTRAINT `accINroom_ibfk_1` FOREIGN KEY (`accID`) REFERENCES `accommodation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accINroom_ibfk_2` FOREIGN KEY (`roomID`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `Accommodation_ibfk_1` FOREIGN KEY (`acc_type_id`) REFERENCES `acc_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Accommodation_ibfk_2` FOREIGN KEY (`acc_region_id`) REFERENCES `acc_region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acc_image`
--
ALTER TABLE `acc_image`
  ADD CONSTRAINT `acc_image_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accommodation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acc_policies`
--
ALTER TABLE `acc_policies`
  ADD CONSTRAINT `acc_policies_ibfk_1` FOREIGN KEY (`accID`) REFERENCES `accommodation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `acc_policies_ibfk_2` FOREIGN KEY (`policiesID`) REFERENCES `policies` (`id`);

--
-- Constraints for table `agent_info`
--
ALTER TABLE `agent_info`
  ADD CONSTRAINT `agent_info_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `day_price`
--
ALTER TABLE `day_price`
  ADD CONSTRAINT `day_price_ibfk_1` FOREIGN KEY (`accID`) REFERENCES `accommodation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experiens`
--
ALTER TABLE `experiens`
  ADD CONSTRAINT `experiens_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `experiens_ibfk_2` FOREIGN KEY (`exp_type_id`) REFERENCES `exp_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experiens_time`
--
ALTER TABLE `experiens_time`
  ADD CONSTRAINT `experiens_time_ibfk_1` FOREIGN KEY (`exp_id`) REFERENCES `experiens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exp_image`
--
ALTER TABLE `exp_image`
  ADD CONSTRAINT `exp_image_ibfk_1` FOREIGN KEY (`exp_id`) REFERENCES `experiens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `facilitieinhousing`
--
ALTER TABLE `facilitieinhousing`
  ADD CONSTRAINT `facilitieINhousing_ibfk_1` FOREIGN KEY (`homeID`) REFERENCES `housing` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facilitieINhousing_ibfk_2` FOREIGN KEY (`facilitieID`) REFERENCES `facilitie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `housing`
--
ALTER TABLE `housing`
  ADD CONSTRAINT `housing_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `housing_ibfk_2` FOREIGN KEY (`property_type`) REFERENCES `proprtytype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
