-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 04:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `category_long_description` text NOT NULL,
  `category_short_description` varchar(200) NOT NULL,
  `category_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_long_description`, `category_short_description`, `category_status`) VALUES
(11, 'VegetablesNAYANIIUC', 'ABSBDSDSSNAYANEE', 'SASSASDSDSNAYANEE', 3),
(15, 'IIUC', 'CSE', 'TTRE', 1),
(16, 'IIUCeteNAYHAN', 'SDERTNAYAN', 'ASDFGHJNAYAN', 2),
(17, 'EDU', 'QWERT', 'ASDFG', 2),
(19, 'Retailer', 'asdfg', 'asdfg', 2),
(20, 'Meat', 'ssdsd', 'ssdsds', 2),
(21, 'Retailer_IIUC', 'QWERT', 'ASDER', 1),
(22, 'Retailer_IIUC-NAYAN', 'ASDER-NAYAN', 'QWERT-NAYAN', 3),
(23, 'Retailer_IIUC_CSE', 'GOOD', 'BAD', 1),
(24, 'GarmentsAMIT', 'rererereAMIT', 'sddfdfdfdfAMIT', 2),
(25, 'Snacks', 'asfdfdf', 'dfdfdfdf', 2),
(26, 'www', 'www', 'www', 2),
(27, 'ffg', 'fgfg', 'fgfg', 2),
(28, 'IIUC_morality', 'bogusssssssseeerere', 'ddddd', 2),
(29, 'Retailer_IIUC', 'sss', 'sss', 1),
(30, 'GarmentsIIU', 'DD', 'DD', 1),
(31, 'Laptop', 'Laptop Compueter', 'Laptop pc', 1),
(32, 'Mobile', 'Mobile compuetr', 'Android', 1),
(33, 'Programming Course', 'programming is the life nowadays.', 'Programming is awesome.', 1),
(34, 'Accessories', 'Accessories are available from different brand.', 'Accessories is good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` varchar(20) NOT NULL,
  `customer_number` varchar(20) NOT NULL,
  `customer_country` varchar(20) NOT NULL,
  `zip_code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_city`, `customer_number`, `customer_country`, `zip_code`) VALUES
(17, 'Nayan Pal', 'rr@gmail.com', 'd41d8cd98f00b204e9800998ecf842', '', '', '', '', 0),
(27, 'Nayan Pal', 'nayan18rocks@gmail.c', 'd41d8cd98f00b204e9800998ecf842', 'station Road', 'Chattagram', '', 'bangladesh', 4000),
(28, 'Nayanh', 'IIUC_CSE@gmail.com', 'a8ae104615cb4e966ddb435f3e575a', '', '', '', '', 0),
(30, 'Nayan', 'IIUC_CSE@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'ctg', 'ctg', '', 'bangladesh', 4000),
(31, 'IrfanIIUC', 'irfan45@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'rfdgfg', 'ertret', '34', 'united_states', 4545),
(32, 'mAIZAN', 'irfan45@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'edfdfdf', 'dfdfdf', '', '-- Country --', 756785),
(33, 'mAIZANIIUC', 'irfan45MAIZAN@gmail.', 'd41d8cd98f00b204e9800998ecf842', 'ertert', 'eet', '33553', 'pakistan', 6),
(34, 'SUMAIYA ALAM', 'SUAMIYA@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'ckbzr', 'dhaka', '0173247835', 'bangladesh', 4000),
(35, 'BITM', 'BITM@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'ctg', 'ctg', '123385735435', 'bangladesh', 4000),
(36, 'IIUC', 'IIUC@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'sitakundo', 'ctg', '09876', 'bangladesh', 3333),
(37, 'EDU', 'IIUC_CSE@gmail.com', '331316d4efb44682092a006307b9ae', 'edfdfdf', 'dfdfdf', '333', 'uk', 756785),
(38, 'BUET', 'vsdsd@gmail.com', 'd41d8cd98f00b204e9800998ecf842', 'erewr', 'wwrwr', '222', 'uk', 22323),
(39, 'IIUC', 'iiuc@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'fgfgf', 'fgfg', '45454', 'canada', 3535),
(40, 'PCIU', 'PCIU@gmail.com', 'b53086d558f1127993271e8c504ded', 'dfdf', 'ctg', '242424', 'bangladesh', 23424),
(41, 'ff', 'ggff@gmailocom', 'd41d8cd98f00b204e9800998ecf842', 'fs', 'ctg', '444', 'united_states', 444),
(42, 'APPEX', 'appex@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'dfhfghg', 'dhaka', '12343241', 'bangladesh', 3000),
(43, 'rrt', 'fdde@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'dfgg', 'dfdfdf', '3353', 'uk', 756785),
(44, 'rrt', 'fdde@gmail.com', 'd41d8cd98f00b204e9800998ecf842', '', '', '', '', 0),
(45, 'synchro', 'synchro@gmail.com', 'd41d8cd98f00b204e9800998ecf842', 'chattagram', 'ctg', '01729874354', 'bangladesh', 1234),
(46, 'IIUC', 'IIUC_CSE@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', 'chittagong', 'ctg', '01733556193', 'bangladesh', 4000),
(47, 'IIUC', 'IIUC_CSE@gmail.com', '202cb962ac59075b964b07152d234b', 'err', 'rrt', '131313', 'canada', 445),
(48, 'IIUC', 'irfan45MAIZAN@gmail.', 'b59c67bf196a4758191e42f76670ce', 'wwww', 'wwww', '12345', 'united_states', 223),
(49, 'nayan45', 'irfan45MAIZAN@gmail.', 'b59c67bf196a4758191e42f76670ce', 'fgfgf', 'ctg', '11212132', 'bangladesh', 3434),
(50, 'nayan', 'irfan45MAIZAN@gmail.', '81dc9bdb52d04dc20036dbd8313ed0', 'ddf', 'ctg', '123456', 'united_states', 2222),
(51, '', '', 'd41d8cd98f00b204e9800998ecf842', '', '', '', '-- Country --', 0),
(52, '', '', 'd41d8cd98f00b204e9800998ecf842', '', '', '', '-- Country --', 0),
(53, 'IIUC', 'IIUC_CSE@gmail.com', 'b59c67bf196a4758191e42f76670ce', 'www', 'ctg', '1111', 'united_states', 121),
(54, 'USER', 'USER@gmail.com', '934b535800b1cba8f96a5d72f72f16', 'fgdgd', 'ctg', '1111', 'india', 1234),
(55, 'eee', 'IIUC_CSE@gmail.com', 'd41d8cd98f00b204e9800998ecf842', 'dfdfdf', 'CTG', '222342', 'united_states', 22),
(56, 'eee', 'IIUC_CSE@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'ssssddf', 'dhaka', '123456', 'bangladesh', 3333),
(57, 'IIUC_ETE', 'IIUC_CSE@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'srilanka', 'comilla', '12344565', 'bangladesh', 878709),
(58, 'DELL', 'IIUC_CSE@gmail.com', 'e10adc3949ba59abbe56e057f20f88', 'EERER', 'ERER', '22322', 'united_states', 23424),
(59, '', '', 'd41d8cd98f00b204e9800998ecf842', '', '', '', '-- Country --', 0),
(60, 'CSE', 'IIUC@gmail.com', 'd41d8cd98f00b204e9800998ecf842', 'ERRE', 'ERER', '33334', 'bangladesh', 3434),
(61, 'BUET', 'IIUC@gmail.com', 'e10adc3949ba59abbe56e057f20f88', '445', 'FGFG', '334', 'united_states', 343),
(62, 'BUET', 'irfan45MAIZAN@gmail.', 'd41d8cd98f00b204e9800998ecf842', 'rere', 'erer', '334', 'bangladesh', 34),
(63, 'Nayan Pal', 'IIUC_CSE@gmail.com', 'd41d8cd98f00b204e9800998ecf842', '', '', '', '-- Country --', 0),
(64, 'nayan', 'IIUC@gmail.com', 'd41d8cd98f00b204e9800998ecf842', 're3r', 'dfdfdf', '343', 'uk', 756785),
(65, 'newUSER', 'IIUC_CSE@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', 'ctg', 'CTG', '01234560', 'united_states', 23),
(66, 'IIUC', 'irfan45MAIZAN@gmail.', '182be0c5cdcd5072bb1864cdee4d3d', 'eee', 'ee', '333', 'united_states', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(20) NOT NULL,
  `manufacturer_short_description` varchar(100) NOT NULL,
  `manufacturer_long_description` text NOT NULL,
  `manufacturer_status` tinyint(5) NOT NULL,
  `manufacturer_category` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_short_description`, `manufacturer_long_description`, `manufacturer_status`, `manufacturer_category`) VALUES
(16, 'ASUS', 'GIANT COMPANY', 'NOWDAYS AWESOME', 0, 0),
(17, 'HP', 'HP PC', 'Quality in TRUST', 0, 0),
(18, 'SONY', 'SONY MOBILE', 'MOBILE,EARPHONE,PC ETC', 0, 0),
(19, 'SAMSUNG', 'GIANT BRAND', 'THIS IS NOW BEST SELLING MOBILE COMPANY', 0, 0),
(20, 'UDEMY', 'UDEMY is number one course base institution.', 'Udemy is NOW 1ST .', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `shipping_id` int(20) NOT NULL,
  `payment_id` int(20) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'pending',
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date_time`) VALUES
(1, 60, 37, 25, 0.00, 'pending', '2018-05-21 17:39:40'),
(2, 61, 38, 26, 336448.59, 'pending', '2018-05-21 18:39:30'),
(3, 61, 38, 27, 336448.59, 'pending', '2018-05-21 19:25:09'),
(4, 61, 38, 28, 336448.59, 'pending', '2018-05-21 19:32:34'),
(5, 61, 38, 29, 336448.59, 'pending', '2018-05-21 19:33:02'),
(6, 61, 38, 30, 336448.59, 'pending', '2018-05-21 19:34:37'),
(7, 61, 38, 31, 336448.59, 'pending', '2018-05-21 19:39:33'),
(8, 62, 39, 32, 471898.59, 'pending', '2018-05-21 19:40:58'),
(9, 63, 40, 33, 494998.59, 'pending', '2018-05-21 19:41:49'),
(10, 64, 41, 34, 465250.00, 'pending', '2018-05-21 19:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_sales_quantity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`) VALUES
(1, 6, 40, 'ASUS Seven series', 57000.00, '2'),
(2, 6, 42, 'DELL INSPIRON SERIES', 43000.00, '2'),
(3, 6, 44, 'SAMSUNG', 22000.00, '5'),
(4, 6, 50, 'nayanrrtrtr', 3444.00, '3'),
(5, 7, 50, 'nayanrrtrtr', 3444.00, '3'),
(6, 8, 50, 'nayanrrtrtr', 3444.00, '3'),
(7, 9, 50, 'nayanrrtrtr', 3444.00, '3'),
(8, 10, 42, 'DELL INSPIRON SERIES', 43000.00, '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_status`, `payment_date_time`) VALUES
(1, 'paypal', 'pending', '2018-05-21 09:54:11'),
(2, 'paypal', 'pending', '2018-05-21 09:58:48'),
(3, 'cash_on', 'pending', '2018-05-21 10:14:13'),
(8, 'ssl_commerz', 'pending', '2018-05-21 10:54:10'),
(9, 'paypal', 'pending', '2018-05-21 16:08:34'),
(10, 'paypal', 'pending', '2018-05-21 16:09:22'),
(11, 'paypal', 'pending', '2018-05-21 16:09:45'),
(12, 'paypal', 'pending', '2018-05-22 10:23:26'),
(13, 'cash_on', 'pending', '2018-05-22 10:23:41'),
(14, 'paypal', 'pending', '2018-05-22 10:25:56'),
(15, 'paypal', 'pending', '2018-05-22 10:27:05'),
(16, 'paypal', 'pending', '2018-05-22 10:27:08'),
(17, 'ssl_commerz', 'pending', '2018-05-22 10:27:43'),
(18, 'paypal', 'pending', '2018-05-22 10:34:32'),
(19, 'paypal', 'pending', '2018-05-22 10:34:42'),
(20, 'paypal', 'pending', '2018-05-22 10:34:53'),
(21, 'paypal', 'pending', '2018-05-22 10:35:11'),
(22, 'paypal', 'pending', '2018-05-22 10:36:29'),
(23, 'paypal', 'pending', '2018-05-22 10:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_short_description` varchar(255) NOT NULL,
  `product_long_description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `product_image` text NOT NULL,
  `product_status` tinyint(3) NOT NULL DEFAULT '1' COMMENT 'product_status=1(Active),2(Inactive),else deleted',
  `manufacturer_id` int(20) NOT NULL,
  `top_product` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'top_product=0 that means it hide from slider and top_product =1 that maens it shows in the slider.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_price`, `product_short_description`, `product_long_description`, `category_id`, `product_quantity`, `product_image`, `product_status`, `manufacturer_id`, `top_product`) VALUES
(35, 'Js', '3019.90', 'js short description', 'js long description', 29, 20, 'images/js.jpg', 2, 17, 0),
(37, 'JAVA', '55', 'js short description', 'js short description', 29, 6, 'images/SPRING.jpg', 2, 16, 0),
(38, 'PHP', '44545', 'php boss', 'PHP ,WHICH is the leading language in the web develoip,ment.', 28, 9, 'images/PHP1.jpg', 2, 17, 0),
(39, 'PYTHON', '4564565', 'PYTHON NOW BOSS', 'GREAT IN THE DATA SCIENCE', 30, 5, 'images/python1.jpg', 2, 16, 0),
(40, 'ASUS Seven series', '57000', 'Fast Charge; HD Webcam; USB-C; Active Pen compatible', 'Windows 10 Home 64; Intel® Core™ i3-7100U (2.4 GHz, 3 MB cache, 2 cores); 35.6 cm (14\") diagonal HD (1366 x 768) touchscreen edge-to-edge glass display;', 31, 50, 'images/1470799635_6014asusx554laxx1077dblack04.jpg', 1, 16, 0),
(41, 'HP Elitebook Series', '50000', ', Touchscreen, Intel Core i7-7500u, Intel HD Graphic 620', 'HD (1366 x 768) touchscreen edge-to-edge glass display; 8 GB memory; 128 GB SSD storage; B&O PLAY Audio; HP Fast Charge; HD Webcam; USB-C; Active Pen compatible. HP 3 Year Care Pack with ', 31, 3, 'images/HP-15-BE012TU-1AC75PA-Laptop-Core-i3-6th-Gen4-GB1-TBDOS.jpg', 1, 17, 1),
(42, 'DELL INSPIRON SERIES', '43000', ', Touchscreen, Intel Core i7-7500u, Intel HD Graphic 620', 'Windows 10 Home 64; Intel® Core™ i3-7100U (2.4 GHz, 3 MB cache, 2 cores); 35.6 cm (14\") diagonal HD (1366 x 768) touchscreen edge-to-edge glass display; 8 GB memory; 128 GB SSD storage; B&', 31, 80, 'images/71lyBaN-vAL__SL1500_.jpg', 1, 16, 0),
(43, 'SONY ', '30000', '4ouchscreen edge-to-edge glass display; 8 GB memory; 128 GB SS', 'touchscreen edge-to-edge glass display; 8 GB memory; 128 GB SSD storage; B&O ', 32, 500, 'images/sony.jpg', 2, 18, 1),
(44, 'SAMSUNG', '22000', ' touchscreen edge-to-edge glass display; 8 GB memory; 128 GB SSD storage; B&', ' (1366 x 768) touchscreen edge-to-edge glass display; 8 GB memory; 128 GB SSD storage; B&', 32, 1000, 'images/71VFdtGRmsL__SL1500_.jpg', 1, 19, 0),
(45, 'PHP(CODEIGNITER)', '10000', '70% website in world.', 'PHP ,WHICH is the leading language in the web develoip,ment.', 33, 1, 'images/CodeIgniter.png', 2, 20, 0),
(46, 'ewew', 'ewewe', 'wewe', 'wewe', 23, 2, 'images/android.jpg', 2, 16, 0),
(47, 'dsfdf', 'dfdf', 'dfdf', 'fdfd', 23, 2, 'images/30705508_1085613571596570_8445499090791481601_n.jpg', 2, 16, 0),
(49, 'Bluedio H+ Headphone', '3300', ' Bluedio is a leading headphones and speakers manufacturer based in Guangzhou. ', ' Bluetooth Headphones On Ear with Mic, 57mm Driver Rotary Folding Wireless Headset, Wired and Wireless headphones ', 34, 2, 'images/download.png', 2, 18, 1),
(50, 'nayanrrtrtr', '3444', 'dd', 'ddd', 31, 3, 'images/kotlin.png', 1, 18, 1),
(51, 'LCD', '11000', 'LCD Gorilla Glass', 'LCD NOW DISPLAY PLAYING GOOD.', 34, 1, 'images/images.jpg', 1, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_number` varchar(20) NOT NULL,
  `customer_fax` int(11) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_city` varchar(20) NOT NULL,
  `customer_country` varchar(20) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `customer_id`, `customer_name`, `customer_number`, `customer_fax`, `customer_email`, `customer_city`, `customer_country`, `customer_address`, `zip_code`) VALUES
(1, 31, 'IrfanIIUC', '34', 0, 'irfan45@gmail.com', 'ertret', 'united_states', 'rfdgfg', 4545),
(2, 32, 'mAIZAN', '113313', 0, 'irfan45@gmail.com', 'dfdfdf', 'uk', 'edfdfdf', 756785),
(3, 0, 'SUMAIYA ALAM', '0173247835', 8908, 'SUAMIYA@gmail.com', 'dhaka', 'uk', 'ckbzr', 4000),
(4, 0, 'SUMAIYA ALAM', '0173247835', 8908, 'SUAMIYA@gmail.com', 'dhaka', 'uk', 'ckbzr', 4000),
(5, 34, 'SUMAIYA ALAM', '0173247835', 8908, 'SUAMIYA@gmail.com', 'dhaka', 'uk', 'ckbzr', 4000),
(6, 35, 'BITM', '123385735435', 3434, 'BITM@gmail.com', 'ctg', 'bangladesh', 'ctg', 4000),
(7, 35, 'BITM', '123385735435', 0, 'BITM@gmail.com', 'ctg', 'bangladesh', 'ctg', 4000),
(8, 35, 'BITM', '123385735435', 0, 'BITM@gmail.com', 'ctg', '-- Country --', 'ctg', 4000),
(9, 35, 'BITM', '123385735435', 0, 'BITM@gmail.com', 'ctg', '-- Country --', 'ctg', 4000),
(10, 36, 'IIUC', '09876', 12345, 'IIUC@gmail.com', 'ctg', 'bangladesh', 'sitakundo', 3333),
(11, 37, 'EDU', '333', 333333, 'IIUC_CSE@gmail.com', 'dfdfdf', 'canada', 'edfdfdf', 756785),
(12, 37, 'EDU', '333', 333333, 'IIUC_CSE@gmail.com', 'dfdfdf', 'canada', 'edfdfdf', 756785),
(13, 38, 'BUET', '222', 3333, 'vsdsd@gmail.com', 'wwrwr', '-- Country --', 'erewr', 22323),
(14, 39, 'IIUC', '45454', 2222, 'iiuc@gmail.com', 'fgfg', 'bangladesh', 'fgfgf', 3535),
(15, 40, 'PCIU', '242424', 0, 'PCIU@gmail.com', 'ctg', 'bangladesh', 'dfdf', 23424),
(16, 40, 'PCIU', '242424', 0, 'PCIU@gmail.com', 'ctg', 'bangladesh', 'dfdf', 23424),
(17, 41, 'ff', '444', 44, 'ggff@gmailocom', 'ctg', '-- Country --', 'fs', 444),
(18, 42, 'APPEX', '12343241', 0, 'appex@gmail.com', 'dhaka', 'bangladesh', 'dfhfghg', 3000),
(19, 43, 'rrt', '3353', 445, 'fdde@gmail.com', 'dfdfdf', '-- Country --', 'dfgg', 756785),
(20, 45, '', '', 0, '', '', '-- Country --', '', 0),
(21, 45, 'synchro', '1729874355', 4900, 'synchro@gmail.com', 'ctg', 'bangladesh', 'chattagram', 1234),
(22, 46, 'IIUC', '01733556193', 3000, 'IIUC_CSE@gmail.com', 'ctg', 'bangladesh', 'chittagong', 4000),
(23, 47, 'IIUC', '131313', 0, 'IIUC_CSE@gmail.com', 'rrt', 'canada', 'err', 445),
(24, 48, 'IIUC', '12345', 0, 'irfan45MAIZAN@gmail.', 'wwww', 'united_states', 'wwww', 223),
(25, 49, 'nayan45', '11212132', 0, 'irfan45MAIZAN@gmail.', 'ctg', 'bangladesh', 'fgfgf', 3434),
(26, 50, 'nayan', '123456', 0, 'irfan45MAIZAN@gmail.', 'ctg', 'united_states', 'ddf', 2222),
(27, 51, '', '', 0, '', '', '-- Country --', '', 0),
(28, 52, '', '', 0, '', '', '-- Country --', '', 0),
(29, 53, 'IIUC', '1111', 0, 'IIUC_CSE@gmail.com', 'ctg', 'united_states', 'www', 121),
(30, 54, 'USER', '1111', 1212, 'USER@gmail.com', 'ctg', 'india', 'fgdgd', 1234),
(31, 55, 'eee', '222342', 22, 'IIUC_CSE@gmail.com', 'CTG', 'united_states', 'dfdfdf', 22),
(32, 55, 'eee', '222342', 22, 'IIUC_CSE@gmail.com', 'CTG', 'united_states', 'dfdfdf', 22),
(33, 56, 'eee', '123456', 0, 'IIUC_CSE@gmail.com', 'dhaka', 'bangladesh', 'ssssddf', 3333),
(34, 57, 'IIUC_ETE', '12344565', 0, 'IIUC_CSE@gmail.com', 'comilla', 'bangladesh', 'srilanka', 878709),
(35, 58, 'DELL', '22322', 0, 'IIUC_CSE@gmail.com', 'ERER', 'united_states', 'EERER', 23424),
(36, 59, '', '', 0, '', '', '-- Country --', '', 0),
(37, 60, 'CSE', '33334', 0, 'IIUC@gmail.com', 'ERER', 'bangladesh', 'ERRE', 3434),
(38, 61, 'BUET', '334', 0, 'IIUC@gmail.com', 'FGFG', 'united_states', '445', 343),
(39, 62, 'BUET', '334', 0, 'irfan45MAIZAN@gmail.', 'erer', 'bangladesh', 'rere', 34),
(40, 63, 'Nayan Pal', '', 0, 'IIUC_CSE@gmail.com', '', '-- Country --', '', 0),
(41, 64, 'nayan', '343', 0, 'IIUC@gmail.com', 'dfdfdf', 'uk', 're3r', 756785),
(42, 65, 'newUSER', '01234560', 233, 'IIUC_CSE@gmail.com', 'CTG', 'bangladesh', 'ctg', 23),
(43, 66, 'IIUC', '333', 0, 'irfan45MAIZAN@gmail.', 'ee', 'united_states', 'eee', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` tinyint(20) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`, `user_status`) VALUES
(8, 'cse', 'nayancse005@gmail.com', '$2y$10$.6pCYzd1ke/HjvPyG6e1tuyrg/GFgytJoQ9hT0RgA5UsgNj2/yLoi', 0, 0),
(12, 'mo', 'nayancse005@gmail.com', '$2y$10$xJaBf/Y06ghaETBGZ4NMYecb2Hr4y7Nrxvvq2OWtJ8qdtvmcUKaFO', 1, 1),
(17, 'Nayan Pal', 'nayan18rocks@gmail.com', '$2y$10$xGlaKb8QBgKRRMJ33gST3eu5tm81acnz7KUF4aN7OXYvtiXIkb3VC', 1, 1),
(25, 'IIUCoiioioioi', 'nayan18rocks@gmail.com', '$2y$10$.ef3TkxNDA2eOMH33CqjQOrcNqD/al7rAf9590IamYm9q9YfrtrEO', 0, 0),
(31, 'IIUCrtyrrtr', 'nayancse005@gmail.com', '$2y$10$WYu5/O5WpR7K7tbUbGIAfeg4lOzV95Gy7fuZn94ZduIaFoXYKnhp.', 0, 0),
(33, 'IIUC', 'sopnilnayon@gmail.com', '$2y$10$VTJDPMvySjJxSwqXfQN4VuiMZl.a7fEcicO72jylMKOHIdBYW/wyC', 0, 0),
(39, 'IIUC', 'as@gmail.com', '$2y$10$vmel4XCF.fkvlpmBaiOUI.9aZInmWXv4LHV4QrlAAt6MpcpZfBE7S', 0, 0),
(41, 'IIUC', 'sopnil.nayon@gmail.com', '$2y$10$0HR8f3Q59LtsGmK.3t29q.rHcCD4k2w0I5uIm4s/Vjo.4/Nq3Vts.', 0, 0),
(55, 'IIUCedu', 'abcd@gmail.com', '$2y$10$t2BMtqvlV8D1hhFT3JsWlePinSqfFmLvkgyBXXQmNyWGTBr/KfEEC', 0, 0),
(56, 'Nayan', 'nayan05rocks@gmail.com', '123456', 1, 1),
(57, 'IIUCUIU', 'CSE@gmail.com', '$2y$10$VuSsCsk2JyvjpWslKXg7reSlMpqlYDTFeqz5jcm/GJdayK/28yliu', 0, 0),
(58, 'IIUCff', 'ssrr@gmail.com', '$2y$10$UTWovo9mEKF/gbp7r8GY5.HdPkzOJTn2F46xS7Ce.YtlqC4Q/IsnW', 0, 0),
(59, 'Nayan Pal', 'cccc@gmail.com', '$2y$10$sWVKegwjpk0II7SaUjUqEeg.PHgxQstuhvEm70tJIjsgK.je6fnXq', 0, 0),
(60, 'IIUCgdhhf', 'agga@gmail.com', '$2y$10$DQRGdz0FIwtE1tKD0bAwCuBdFaUf.pXaOcqWPOXHiBNeQi/4HGckG', 0, 0),
(61, 'IIUC', 'sopnil.nayon05@gmail.com', '$2y$10$yuaIoVreXbqs50m7LDT7c.KYDlvUJ0gYFv4uND6ZRzqc739axif3y', 0, 0),
(62, 'IIUCsrilanka', 'sri@gmail.com', '$2y$10$Rh1tSBHDCF1Pa91P/RvILOEeQ5/mXKjga/bKBPgg0oOaqbwqvP8ja', 0, 0),
(63, 'IIUCeeeeeeeeeeeee', 'seu@gmail.com', '$2y$10$PVy8JvP/WwGRae791dQqweGpbKRkFdxMK5PW7a8CTMO6tnJy4I/.2', 0, 0),
(64, 'Nayan Pal', 'bbbSb@gmail.com', '$2y$10$P4am28argW7YPmRxtntwOu0wJJi6xdgCf/Dy8TxpjGm6QATzL75bO', 0, 0),
(65, 'Nayan Pal', 'nayan.iiuc.cse@gmail.com', '$2y$10$4/DWcm1Lc.gRh7jksE5c1u4UFcAZKPGSKKYwLdSiMpbp/8XGDnjf.', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
