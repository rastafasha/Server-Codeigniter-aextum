-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 03, 2019 at 01:20 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Aextum`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Sample blog post 1', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img1.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Sample blog post 2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img2.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img3.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img4.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img5.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Sample blog post 6', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'img6.jpg', 0, 1, '2018-10-27 12:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Facial'),
(2, 'Wax'),
(3, 'Permanent'),
(4, 'Body'),
(5, 'Makeup'),
(6, 'Fibroblast'),
(7, 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `message` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `lastname`, `email`, `phone`, `cellphone`, `cargo`, `message`, `created_at`) VALUES
(1, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '9999999999', '9999999999', 'CEO', 'This is test message', '2018-10-30 10:14:15'),
(2, 'Malcolm', 'Cordova', 'mercadocreativo@gmail.com', '4241874370', '9999999999', 'Gerente General', 'prueba', '2019-07-25 22:57:00'),
(3, 'Malcolm', 'malcolm', 'mercadocreativo@gmail.com', '04241874370', NULL, NULL, 'prueba desde contacto local', '2019-10-02 21:14:58'),
(4, 'Malcolm', 'malcolm', 'mercadocreativo@gmail.com', '04241874370', '04241874370', 'Ceo', 'asdaasd', '2019-10-02 21:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(2, 'Sample blog post 2', 1, 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali.jpeg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Sample blog post 3', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali1.jpg', 0, 1, '2018-10-27 07:12:09'),
(4, 'Sample blog post 4', 1, 2, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali2.jpg', 0, 1, '2018-10-27 09:12:09'),
(5, 'Sample blog post 5', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali3.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Sample blog post 6', 1, 7, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'location-vali4.jpg', 0, 1, '2018-10-27 12:12:09'),
(7, 'prueba', 1, 0, 'prueba', 'BODY-hand.jpg', 0, 1, '2019-07-20 19:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `masinfos`
--

CREATE TABLE `masinfos` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `message` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masinfos`
--

INSERT INTO `masinfos` (`id`, `name`, `company`, `email`, `phone`, `cargo`, `message`, `created_at`) VALUES
(1, 'Malcolm', 'Company Name', 'mercadocreativo@gmail.com', '9999999999', 'CEO', 'This is test message', '2018-10-30 10:14:15'),
(2, 'Malcolm', 'Company Name', 'mercadocreativo@gmail.com', '4241874370', 'Gerente General', 'prueba', '2019-07-25 22:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `modals`
--

CREATE TABLE `modals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modals`
--

INSERT INTO `modals` (`id`, `title`, `user_id`, `category_id`, `description`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(2, 'modal home', 1, 1, 'as', 'POPUP.jpg', 1, 1, '2018-10-27 06:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `nombre`, `created_at`) VALUES
(1, 'demoang@rsgitech.com', 'maria perez', '2018-10-30 10:14:15'),
(2, 'mercadocreativo@gmail.com', 'Malcolm Cordova', '2019-10-03 01:07:06'),
(3, 'mercadocreativo@gmail.com', 'Malcolm Cordovasad', '2019-10-03 01:08:50'),
(4, 'mercadocreativo@gmail.com', 'ad', '2019-10-03 01:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `token`, `image`, `is_active`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'mercadocreativo', NULL, 'a1aed1a77c0916c43a4a67afe49af265', 'img2.jpg', 1, '2018-10-27 05:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `waxs`
--

CREATE TABLE `waxs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text,
  `price` varchar(255) NOT NULL,
  `popup` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waxs`
--

INSERT INTO `waxs` (`id`, `title`, `user_id`, `category_id`, `description`, `price`, `popup`, `button`, `image`, `is_featured`, `is_active`, `created_at`) VALUES
(1, 'Eyebrows wax', 1, 1, 'Come and shave your eyebrows in Vali Skincare & Makeup, straight or curved wax strips will be used to give the desired eyebrow shape, our products have more natural and vegetable components than the rest of the market waxes <br><br>\n\n<b>Square:</b> Because square faces have sharp, well-defined angles naturally, a rounded or soft angled forehead will create a magnificent balance. <br><br>\n\n<b>Round:</b> With a round face, angled eyebrows with a high arc look better and help to create defined lines that are flatter. <br><br>\n\n<b>Long or oval:</b> Long or oval faces benefit from soft arches or flat eyebrows, as too high an arch can lengthen the face. <br><br>\n\n<b>Heart-shaped:</b> Heart-shaped faces look better with a natural soft-angle bow that draws the correct attention to the upper half of the face. <br><br>\n\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '15.00', 'eyebrows', 'https://squareup.com/appointments/buyer/widget/p5oq7n3y1fkw9l/RFSCRQJSQAYNW', '1_EYEBROWS-WAX1.jpg', 1, 1, '2018-10-27 04:12:09'),
(2, 'Facial Lips wax ', 1, 1, 'Here we extract that delicate hair around our upper lip. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile Upper Legs Wax. <br><br>\nThe treatment of epilation of the upper part of the leg involves the depilation of the front and back of both thighs and above the knees. After applying the wax strips, our beautician removes them quickly to minimize your discomfort. <br><br>\n<b>Note:</b>  use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '15.00', 'Facial', 'https://squareup.com/appointments/buyer/widget/mlz96omq048jcb/RFSCRQJSQAYNW', '2_FACIAL-LIPS-WAX.jpg', 1, 1, '2018-10-27 06:12:09'),
(3, 'Full Face Wax', 1, 2, 'Entire face is enclosed from the forehead, the cheeks, the sideburns, the lips, the chin and just below the jaw. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile', '40.00', 'fullF', 'https://squareup.com/appointments/buyer/widget/lhxjlsdn9ytax3/RFSCRQJSQAYNW', '3_FULL-FACE-WAX.jpg', 1, 1, '2018-10-27 07:12:09'),
(4, 'Underams Wax', 1, 2, 'Waxing your underarms has the same benefits as waxing anywhere else. <br><br>\n <b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile', '15.00', 'Underams', 'https://squareup.com/appointments/buyer/widget/azytaiw2dd24df/RFSCRQJSQAYNW', '4_UNDERARMS-WAX.jpg', 1, 1, '2018-10-27 09:12:09'),
(5, 'Half arm Wax', 1, 7, 'You can choose to have your lower arms waxed which removes everything from the elbow down to the wrist.\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '20.00', 'Half', 'https://squareup.com/appointments/buyer/widget/a4crcfgbrynl34/RFSCRQJSQAYNW', '5_HALF-ARM-WAX.jpg', 1, 1, '2018-10-27 10:12:09'),
(6, 'Full arms Wax', 1, 7, 'We remove every single hair from the arms in a quick and almost painless fashion.\n<br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile', '30.00', 'FullA', 'https://squareup.com/appointments/buyer/widget/9hulptbkyvo5r6/RFSCRQJSQAYNW', '6_FULL-ARMS-WAX.jpg', 1, 1, '2018-10-27 12:12:09'),
(7, 'Upper legs Wax', 1, 0, 'The treatment of epilation of the upper part of the leg involves the depilation of the front and back of both thighs and above the knees. After applying the wax strips, our beautician removes them quickly to minimize your discomfort. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '30.00', 'Upper', 'https://squareup.com/appointments/buyer/widget/9kj9yyxaqcwsjv/RFSCRQJSQAYNW', '7_UPPER-LEGS1.jpg', 1, 1, '2019-07-28 01:56:56'),
(8, 'Lower legs Wax', 1, 0, 'The wax is applied in strips on the front and back of both legs, from the top of the knee to the ankle, eliminating the wax quickly and professionally. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '35.00', 'Lower', 'https://squareup.com/appointments/buyer/widget/39vh1j6i2vqn7p/RFSCRQJSQAYNW', '8_LOWER-LEGS-WAX.jpg', 1, 1, '2019-07-28 02:30:27'),
(9, 'Full Legs Wax', 1, 0, 'The complete treatment of leg hair removal involves removing the hair from both legs and applying our wax formula, from the upper part of the thigh to the ankle. Hair removal begins approximately two inches from the bikini line and includes the front and back of the thighs, knees and lower legs. <br><br>\n<b>Note: </b>use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '60.00', 'FullL', 'https://squareup.com/appointments/buyer/widget/tenoe3aturfj1a/RFSCRQJSQAYNW', '9_FULL-LEGS-WAX.jpg', 1, 1, '2019-07-28 02:31:10'),
(10, 'Classic Bikini Wax', 1, 0, 'Bikini hair removal is the removal of pubic hair with a special wax. A bikini line is the area of the upper leg and inner thigh where pubic hair grows that is not normally covered by the bottom of a swimsuit. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '35.00', 'Classic', 'https://squareup.com/appointments/buyer/widget/h9iel2m44poq5g/RFSCRQJSQAYNW', '10_CLASSIC-BIKINI-WAX.jpg', 1, 1, '2019-07-28 02:31:51'),
(11, 'Brazilian Wax', 1, 0, 'In this hair removal the pubic hair is extracted in its entirety from the front to the back with an additional back strap. This is perfect for a completely nude look or you can leave a triangle, a strip or a clean square on the front. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile.', '40.00', 'Brazilian', 'https://squareup.com/appointments/buyer/widget/6ye7bg1ogdxolc/RFSCRQJSQAYNW', '11_BRAZILIAN-WAX.jpg', 1, 1, '2019-07-28 02:32:30'),
(12, 'Full Body Wax ', 1, 0, 'Full Body Wax includes Brows, Lips, Full Arms, Full Legs, Classic or Brazilian Bikini wax. <br><br>\n<b>Note:</b> use post-depilatory gels such as glycerin, azulene, calendula or chamomile', '125.00', 'FullB', 'https://squareup.com/appointments/buyer/widget/bz6m0vsl2fan1r/RFSCRQJSQAYNW', '12_FULL-BODY-WAX.jpeg', 1, 1, '2019-07-28 02:33:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masinfos`
--
ALTER TABLE `masinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modals`
--
ALTER TABLE `modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waxs`
--
ALTER TABLE `waxs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `masinfos`
--
ALTER TABLE `masinfos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `modals`
--
ALTER TABLE `modals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `waxs`
--
ALTER TABLE `waxs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
