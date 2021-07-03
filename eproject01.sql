-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 02:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject01`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `PASSWORD` varchar(32) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NAME` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`, `NAME`) VALUES
(1, 'eprj001', '8e3350dd3fb4507f1ac297e92e9a0137', 'Vũ Minh Hiếu'),
(2, 'eprj002', '8e3350dd3fb4507f1ac297e92e9a0137', 'Nguyễn Huy Đức');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `PASSWORD` varchar(32) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NAME` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `PHONE` int(20) NOT NULL,
  `ADDRESS` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `EMAIL`, `PASSWORD`, `NAME`, `PHONE`, `ADDRESS`, `CREATED_AT`) VALUES
(1, 'vuivehieu@gmail.com', '3bf810af534c58bc1ecde6fdb9e7b1ac', 'Vũ Minh Hiếu', 2147483647, 'Ha Noi', '2021-06-21 17:26:50'),
(7, 'asdas@gmail.com', '8e3350dd3fb4507f1ac297e92e9a0137', 'B18DCPT086', 2313123, 'asdsa', '2021-06-21 17:49:47'),
(8, 'asdassad@gmail.com', 'dcc5647d48c7c4cd9f4b981900a749b2', 'B18DCPT086', 2313123, 'asdsa', '2021-06-21 18:34:48'),
(10, 'asdasss@gmail.com', 'dcc5647d48c7c4cd9f4b981900a749b2', 'eprj001', 2313123, 'asdsa', '2021-06-23 12:58:50'),
(11, 'haha@gmail.com', '8e3350dd3fb4507f1ac297e92e9a0137', 'hieu vu', 123456789, 'HaDong', '2021-06-23 13:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) DEFAULT NULL,
  `PAYMENT_METHOD` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NOTE` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `TOTAL_PRICE` float DEFAULT NULL,
  `STATUS` tinyint(1) DEFAULT 0,
  `CREATE_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `CUSTOMER_ID`, `PAYMENT_METHOD`, `NOTE`, `TOTAL_PRICE`, `STATUS`, `CREATE_AT`) VALUES
(1, 1, 'MOMO', 'GIAO HANG NHANH', 90.2, 1, '2021-06-17 10:43:39'),
(2, 1, 'VISA', 'GIAO HANG CHAM VA KIN', 600.2, 1, '2021-06-17 10:44:01'),
(3, 1, 'VISA', 'GIAO HANG Nhanh', 600.2, 1, '2021-06-17 10:45:30'),
(4, 1, 'VISA', 'GIAO HANG Nhanh', 600.2, 1, '2021-06-17 10:45:32'),
(5, 1, 'VISA', 'GIAO HANG Nhanh', 600.2, 1, '2021-06-17 10:45:34'),
(6, 1, 'VISA', 'GIAO HANG Nhanh', 600.2, 1, '2021-06-17 10:45:36'),
(7, 1, 'VISA', 'GIAO HANG Nhanh', 600.2, 1, '2021-06-17 10:45:38'),
(8, 1, 'VISA', 'GIAO HANG Nhanh', 600.2, 1, '2021-06-17 10:45:40'),
(9, 1, 'VISA', 'GIAO HANG Nhanh', 600.2, 1, '2021-06-17 10:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ORDER_ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ORDER_ID`, `PRODUCT_ID`, `PRODUCT_QUANTITY`) VALUES
(1, 1, 2),
(2, 2, 6),
(3, 5, 9),
(4, 5, 9),
(5, 5, 9),
(6, 5, 9),
(7, 5, 9),
(8, 5, 9),
(9, 5, 9),
(1, 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `THUMBNAIL` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MANUFACTURER` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `DESCRIPTION` longtext COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `IMPORT_DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `PRICE` float NOT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `STATUS` tinyint(1) DEFAULT NULL,
  `CATEGORY` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `CATEGORY_ID` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `TITLE`, `THUMBNAIL`, `MANUFACTURER`, `DESCRIPTION`, `IMPORT_DATE`, `PRICE`, `QUANTITY`, `STATUS`, `CATEGORY`, `CATEGORY_ID`) VALUES
(1, 'Thomas Kinkade Studios 2022 Day-to-Day', '../Images/Calendar/Desk Calendar/Thumbnail/DC-001-01.png', 'Thomas Kinkade', '	Authentic Thomas Kinkade Studios Limited Edition Art, Gifts and Collectibles directly from Thomas Kinkade Studios.', '2021-06-22 15:59:23', 30.5, 50, 1, 'Desk Calendar', 'DC01'),
(2, 'Mary Engelbreits 2022 Day-to-Day', '../Images/Calendar/Desk Calendar/Thumbnail/DC-002-01.png', 'Mary Engelbreits', 'Keep track of your appointments, practices, school events, lessons, vacations, and more with Mary Engelbreit’s 2022 Desk Calendar.', '2021-06-22 15:59:23', 28, 100, 1, 'Desk Calendar', 'DC02'),
(3, 'Thoughts of Dog 2022 Day-to-Day', '../Images/Calendar/Desk Calendar/Thumbnail/DC-003-01.png', 'Matt Nelson', 'Based on the hilarious @dog_feelings Twitter and Instagram feeds by Matt Nelson of WeRateDogs, this calendar offers sweet, endearing thoughts from the paw-spective of a good dog. Hailed by many as the only reason they stay on social media, the pontificating pup’s reflections on life always bring laughs or melt hearts.', '2021-06-22 15:59:23', 20, 200, 1, 'Desk Calendar', 'DC03'),
(4, 'Dog Shaming 2022 Day-to-Day', '../Images/Calendar/Desk Calendar/Thumbnail/DC-004-01.png', 'Pascale Lemire(dogshaming.com)', 'The Dog Shaming 2022 Day-to-Day Calendar shows a different reader-contributed photo and caption on each page, and features a variety of dog breeds and misdeeds with humor that great for home and safe for work.', '2021-06-22 15:59:23', 16, 1000, 1, 'Desk Calendar', 'DC04'),
(5, 'ZEN 2021 Page-a-day', '../Images/Calendar/Desk Calendar/Thumbnail/DC-005-01.png', 'David Schiller(Workman Calendars)', 'The Zen calendar features hundreds of insightful and inspiring quotes, koans, poems, parables, and mondos from wise people across ages and cultures that will center you throughout the year', '2021-06-22 15:59:23', 35, 150, 1, 'Desk Calendar', 'DC05'),
(6, 'Cat 2022 Page-A-Day Gallery', '../Images/Calendar/Desk Calendar/Thumbnail/DC-006-01.png', 'Workman Calendars', 'A tribute to the unparalleled beauty and elegance of cats.\r\n\r\nHere is a year of cat portraits, in both black-and-white and color, which capture the beguiling combination of independence, attitude, and grace that cat people just can’t resist. ', '2021-06-22 15:59:23', 18.99, 1000, 1, 'Desk Calendar', 'DC06'),
(7, 'Life Hacks 2022 Day-to-Day', '../Images/Calendar/Desk Calendar/Thumbnail/DC-007-01.png', 'Keith Bradford(1000lifehacks.com)', 'With hundreds of tips, tricks, and time savers, this daily desk calendar will help you work smarter, not harder, so you have more time for fun!', '2021-06-22 15:59:23', 15.99, 1500, 1, 'Desk Calendar', 'DC07'),
(8, 'Garfield 2022 Day-to-Day', '../Images/Calendar/Desk Calendar/Thumbnail/DC-008-01.png', 'Jim Davis', 'The only thing worse than a Monday is a Monday without the daily dose of fun from the Garfield 2022 Day-to-Day Calendar.', '2021-06-22 15:59:23', 15.99, 1000, 1, 'Desk Calendar', 'DC08'),
(9, 'Yoga Dogs Together 2021 16 Months', '../Images/Calendar/Wall Calendar/Thumbnail/WC-001-01.png', 'BrownTrout', '	This wall calendar gives new meaning to \"Downward Facing Dog.\" This is officially licensed original from the actual creator of Yoga Cats and Yoga Dogs, Dan Borris.', '2021-06-22 16:02:51', 13.63, 500, 1, 'Wall Calendar', 'WC01'),
(10, 'Elsewhere 2021 16 Months', '../Images/Calendar/Wall Calendar/Thumbnail/WC-002-01.png', 'Brush Dance(BrownTrout)', '	From the mind and hands of Father Arthur Poulin, this inspirational calendar displays a year of acrylic landscapes, showcasing \"stunning, sacred beauty that is mirrored everywhere in Creation\".Each work is intense and colorful, featuring precise brushstrokes reminiscent of the esteemed Impressionists, though with the artist unique touch and style.', '2021-06-22 16:02:51', 11.35, 200, 1, 'Wall Calendar', 'WC02'),
(11, 'Simplicity 2021 16 Months', '../Images/Calendar/Wall Calendar/Thumbnail/WC-003-01.png', 'BrownTrout', 'A wonderfully refreshing calendar that celebrates the simple life. Produced via environmentally friendly processes, using chlorine free FSC-certified paper and vegetable-based inks, this beautifully photographed 16-month 12\" x 12\" wall calendar includes an additional page featuring smaller grids of the months September, October, November and December 2020. This wall calendar is produced in English format.', '2021-06-22 16:02:51', 9.54, 500, 1, 'Wall Calendar', 'WC03'),
(12, 'Paradise 2021 16 Months', '../Images/Calendar/Wall Calendar/Thumbnail/WC-004-01.png', 'BrownTrout', 'Travel to paradise! Escape from the day-to-day routine as you daydream about the tropical breezes, warm sands, and crystal blue waters pictured in this beautiful square wall calendar.', '2021-06-22 16:02:51', 13.35, 1500, 1, 'Wall Calendar', 'WC04'),
(13, 'Why Cats Do That 2021 18 Months', '../Images/Calendar/Wall Calendar/Thumbnail/WC-005-01.png', 'Willow Creek Press', 'Twelve curious cat behaviors are illustrated with vivid full color photographs and explained in descriptive text. Printed with soy-based inks on FSC certified paper, this wall calendar features large monthly grids that offer ample room for jotting notes, along with six bonus months of July through December of 2020. Also includes moon phases (CST), standard U.S. and international holidays.', '2021-06-22 16:02:51', 14.14, 500, 1, 'Wall Calendar', 'WC05'),
(14, 'Owls 2021 16 Months', '../Images/Calendar/Wall Calendar/Thumbnail/WC-006-01.png', 'BrownTrout', 'Nocturnal birds of prey, owls are blessed with exceptional vision and the best hearing of all birds. These gifts enable them to dwell in dense forested areas. The owl is associated with wisdom, perhaps because of its fixed gaze, which makes it appear to be in deep thought. Take your time to study the mesmerizing owls in this square wall calendar.', '2021-06-22 16:02:51', 14.05, 500, 1, 'Wall Calendar', 'WC06'),
(15, 'Tiffany 2021', '../Images/Calendar/Wall Calendar/Thumbnail/WC-007-01.png', 'Louis Comfort Tiffany', 'Louis C. Tiffany and the designers at Tiffany Studios translated nature into richly colored leaded glass and bronze. With innovative techniques and unprecedented style, they created windows and lamps that married usefulness with beauty. In so doing, they produced functional works of art as desirable today as when they were designed over a hundred years ago. The glasswork pieces featured in this calendar are part of The Neustadt Collection of Tiffany Glass, in Queens, New York.\r\n\r\nAll of Pomegranate calendars are printed with soy-based inks on environmentally sourced paper.', '2021-06-22 16:02:51', 13.39, 200, 1, 'Wall Calendar', 'WC07'),
(16, 'Frank Lloyd Wright 2021 Tiered', '../Images/Calendar/Wall Calendar/Thumbnail/WC-008-01.png', 'Galison', 'Keep track of dates and appointments in style with the Frank Lloyd Wright 2021 Wall Calendar from Galison. Its a full-color tiered calendar that covers 16 months, including September 2020 to December 2021. Not only does it feature 12 images of Frank Lloyd Wrights iconic works, but there is also a famous quote on each page for added entertainment.\r\n\r\nWith all major holidays and important dates marked, as well as room for you to write in your own important dates, you can use this wall calendar to stay organized and on top of your schedule. It also makes a great gift idea for any occasion and is ideal for use in the classroom, in your office, or at home.\r\n\r\nGalison was founded in 1979 to work with museums to make artist imagery widely available in the form of well-designed paper products. With new collections each year, Galison has broadened its assortment well beyond stationery to puzzles & games, office products, home décor, and more. Our vision is to inspire people by adding more art to daily life with the products we create.', '2021-06-22 16:02:51', 14.22, 100, 1, 'Wall Calendar', 'WC08'),
(17, 'V&A - Chinoiserie 2021 (Art Calendar)', '../Images/Calendar/Wall Calendar/Thumbnail/WC-009-01.png', 'Flame Tree Studio', 'With their richly detailed designs and beautiful patterns, Chinese textiles are extraordinary articles. This stunning calendar features 12 incredible designs from the V&A’s collections.', '2021-06-22 16:02:51', 12.06, 200, 1, 'Wall Calendar', 'WC09'),
(18, '2022 Seascapes - Square Wall 16 Months', '../Images/Calendar/Wall Calendar/Thumbnail/WC-010-01.png', 'THE GIFTED STATIONERY CO.', 'This beautifully designed 2022 Seascapes - Square Wall Calendar from The Gifted Stationary Co is perfect for your home or office, and is the perfect Christmas present for your loved ones.\r\n\r\n\r\n\r\nThis square calendar is carefully shrink wrapped and covers 16-Months. Starting from September 2021 and ending December 2022 (the 2021 dates are mini sized). The size of this calendar is 30cm x 60cm when opened, and the weeks starts on Sunday.', '2021-06-22 16:02:51', 14, 200, 1, 'Wall Calendar', 'WC10'),
(19, 'Graphique Van Gogh Mini Calendar - 16-Month 2022', '../Images/Calendar/Wall Calendar/Thumbnail/WC-011-01.png', 'Graphique', 'Dimensions: 7\"x 7\"\r\nPlan ahead with a 4 month preview page of following year\r\nEach page before & after preview month\r\nIncludes public & culturally significant holiday\r\n3 languages: English, French, & Spanish', '2021-06-22 16:25:42', 15, 250, 1, 'Wall Calendar', 'WC11'),
(20, '2022 Dovecote 17-Month Covered Spiral Planner', '../Images/Diary/Diary & Planner/Thumbnail/D-001-01.png', 'Rifle Paper Co.', 'Start planning ahead with Rifle Paper Co. 2022 17-month planners. A sturdy hard cover wraps over the interior spiral binding, and an elastic band holds the pages closed. Inside you’ll find monthly and weekly views, inspirational quotes, sections for celebrations, notes and contacts, pocket folders for storage, and three sticker sheets for extra fun. Planners span August 2021-December 2022.', '2021-06-22 16:28:33', 36, 200, 1, 'Diary & Planner', 'D&P01'),
(21, '2022 17-Month Large Spiral Planner', '../Images/Diary/Diary & Planner/Thumbnail/D-002-01.png', 'Rifle Paper Co.', 'We love a Rifle Paper Co planner! This large format is perfect for your biggest dreams and aspirations. Including monthly and weekly views, sections for celebrations, notes and contacts, and the handiest elastic band to keep it safely closed, its the prettiest planner we have seen yet this year. Beginning in August 2021, this planner goes through December 2022. ', '2021-06-22 16:28:33', 36, 200, 1, 'Diary & Planner', 'D&P02'),
(22, '2021-22 18 Month Limited Edition Harry Potter Weekly Notebook Diary Large', '../Images/Diary/Diary & Planner/Thumbnail/D-003-01.png', 'Moleskine', 'Catch the Golden Snitch while you can with Moleskines Limited Edition Harry Potter Weekly Notebook Diary Large.\r\n\r\nThis Moleskine 18 Month Hard Cover diary uses a Weekly Notebook format which shows each week on a new page with room for appointments and notes, and is dated from July 2021 - December 2022. This diary has rounded corners, a ribbon bookmark and an elastic band closure. It also features an expandable inner pocket in cardboard and cloth, a front endpaper with an In case of loss notice, plus ivory-coloured 70gsm acid-free paper. You can also add stickers to important dates and notes in your diary with the 3 sheets of coloured stickers included - 1 sheet of alphabet stickers and 2 sheets of icon stickers.', '2021-06-22 16:28:33', 38.2, 200, 1, 'Diary & Planner', 'D&P03'),
(23, '2021-22 18 Month Soft Cover Weekly Notebook Diary Large', '../Images/Diary/Diary & Planner/Thumbnail/D-004-01.png', 'Moleskine', 'The Moleskine Monthly Notebook is dated from July to December. This planner shows each month across a two-page spread, followed by a double ruled page between each month for note-taking. 51 ruled pages are included at the end, offering extra space for organizing and planning the year. The perfect combination of freedom and organization.', '2021-06-22 16:28:33', 25.72, 200, 1, 'Diary & Planner', 'D&P04'),
(24, '2021-22 18 Month Hard Cover Diary – Daily – Large', '../Images/Diary/Diary & Planner/Thumbnail/D-005-01.png', 'Moleskine', 'Be prepared for the future with the classic style and effective organisation of Moleskine’s 18 Month Hard Cover Daily Diary.\r\n\r\nThe 18 Month Hard Cover diary uses a Daily format which shows each day on a new page with room for appointments and notes, and is dated from July 2021 – December 2022. This diary has rounded corners, a ribbon bookmark and an elastic band closure. It also features an expandable inner pocket in cardboard and cloth, a front endpaper with an ‘In case of loss’ notice, plus ivory-coloured 70gsm acid-free paper. You can also add stickers to important dates and notes in your diary with the 3 sheets of coloured stickers included – 1 sheet of alphabet stickers and 2 sheets of icon stickers.', '2021-06-22 16:28:33', 25.72, 200, 1, 'Diary & Planner', 'D&P05'),
(25, 'Pink Floral Weekly Desk Pad', '../Images/Diary/Diary & Planner/Thumbnail/D-006-01.png', 'Rifle Paper Co.', 'Our Weekly Desk Pad includes 52 tear-off sheets to help you map out your weeks. It’s the perfect size to keep on your desk as a mouse pad and see your week at a glance.', '2021-06-22 16:28:33', 14, 200, 1, 'Diary & Planner', 'D&P06'),
(26, 'Goal Book', '../Images/Diary/Diary & Planner/Thumbnail/D-007-01.png', 'Rhodia', 'Keep your days organized and on track with this Rhodia Goalbook. Featuring 224 numbered dot grid pages, a 6-page table of contents, undated monthly and annual calendar pages, and two ribbon page markers for keeping your place, it is perfect for using as a planner or bullet journal. The Goalbook comes in a selection of colors and is filled with Rhodias super-smooth Premium \"R\" 90 g ivory paper. Its medium size and flexible soft cover make it easy to carry in a bag or backpack.', '2021-06-22 16:28:33', 24.95, 200, 1, 'Diary & Planner', 'D&P07'),
(27, 'Weekly Meal Planner Notepad', '../Images/Diary/Diary & Planner/Thumbnail/D-008-01.png', 'Rifle Paper Co.', 'Finally master weekly meal planning with our organized notepad, complete with lines for every day and meal of the week and a perforated, tear-off shopping list.', '2021-06-22 16:28:33', 18.95, 200, 1, 'Diary & Planner', 'D&P08'),
(28, 'Large Recipe Journal Red Hard Cover', '../Images/Diary/Journal/Thumbnail/J-001-01.png', 'Moleskine', 'The Recipe Journal is designed to grow into a structured record of all the sweet and savory recipes you want to prepare again and again. The intro pages are a hot pot of helpful foodie facts, from seasonal produce calendars to the myriad ways of chopping vegetables.\r\n\r\nFive main sections allow you to capture your top recipes for Appetizers, First Courses, Main Dishes, Side Dishes and Desserts. Jot down ingredients, cooking methods and timings, as well as ideal wine pairings and difficulty rating. Add sketches, images and downloaded recipes to give a complete picture of each dish.\r\n\r\nFrom a formal dinner party to a casual lunch, every meal marks a unique moment in time. The Recipe Journal captures the joy of feeding friends and family, and tells your story through the food that you have enjoyed making for others and for yourself over the years. The Recipe Journal takes pride of place on the shelf next to your favorite cookery books and food memoirs. It comes in a smart box to protect your top recipes, making it a wonderful gift for anyone who loves cooking and entertaining.', '2021-06-23 08:23:13', 52, 200, 1, 'Journal', 'J01'),
(29, 'Five Year Keepsake Journal Set', '../Images/Diary/Journal/Thumbnail/J-002-01.png', 'Rifle Paper Co.', 'Record five years of memories with our boxed set of hardcover journals. Each volume features a hard cover wrapped in book cloth, a lay flat binding, a ribbon bookmark, and gold foil accents. Dedicated spaces for yearly goals and daily reflections make it easy to remember everything from big dreams to small details. The dates are left blank so the journal can be started at any time. With prompts for places traveled and moments celebrated, our Five Year Keepsake Journal is a simple and elegant way to create a lifelong keepsake.', '2021-06-23 08:23:13', 60, 100, 1, 'Journal', 'J02'),
(30, 'GoalBook A5 Dotted', '../Images/Diary/Journal/Thumbnail/J-003-01.png', 'Rhodia', 'Notebook from french Rhodia, dotted paper in 90 g/m2. 120 dot grid numbered sheets index and 2 perpetual calendars. Cover in leather imitation and a stitched binding. Great quality paper that works very well with a fountain pen or other kind of ink pens. Bone-white paper with a smooth surface. The ultimate journal planning tool!', '2021-06-23 08:23:13', 30, 200, 1, 'Journal', 'J03'),
(31, '5 Year Diary Black', '../Images/Diary/Journal/Thumbnail/J-004-01.png', 'Midori', 'Depart on a 5 year diary adventure with the Midori 5 Year Diary Black today. Fill it with meals you had, things you saw, places you went, people you met, quotes you heard... The possibilities are endless.\r\n\r\nWith each page divided into 5 sections (years), this diary will become more fun as you go along. You will start meeting your last year\'s self after you have completed the first 365 pages. With a full diary, you will have documented nearly 2000 days of your life.\r\n\r\nThis diary makes a perfect gift for couples getting married, new parents or those who want to slow down, create memories and reflect on days gone by. \r\n\r\nThe classic MD paper will make writing (and drawing) in this diary a pure joy.', '2021-06-23 08:23:13', 50, 200, 1, 'Journal', 'J04'),
(32, 'Blank Monthly Diary Stickers Small', '../Images/Diary/Journal/Thumbnail/J-005-01.png', 'MD', 'Monthly calendar stickers that can be placed in your notebooks and journals. Includes 16 blank monthly calendar stickers.', '2021-06-23 08:23:13', 7, 1000, 1, 'Journal', 'J05'),
(33, 'Pen holder, black 016', '../Images/Diary/Journal/Thumbnail/J-006-01.png', 'Midori', 'Notebook pen holder', '2021-06-23 08:23:13', 16, 1000, 1, 'Journal', 'J06'),
(34, 'Paintable Stamp Menu', '../Images/Diary/Journal/Thumbnail/J-007-01.png', 'Midori', 'Midori pre-inked rubberstamp with oil based black ink\r\n\r\nOil-based ink doesn\'t smear even with watercolors or waterbased pens', '2021-06-23 08:23:13', 15.4, 1000, 1, 'Journal', 'J07'),
(35, 'Safari Black', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-001-01.png', 'LAMY', 'ABS black plastic casing. Sturdy Metal Clip. Practical grip mould. Ink color - Black. Lamy M16 black M refil', '2021-06-23 08:26:01', 13.75, 250, 1, 'Ballpoint Pen', 'BP01'),
(36, 'Logo Plus', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-002-01.png', 'LAMY', 'The LAMY Logo Plus ballpoint pen is the perfect everyday workhorse writing instrument that is built for comfort and to last.\r\nFeaturing smooth, high quality plastic construction with a sprung stainless steel clip and push activation mechanism, this ballpoint pen is a pleasure to use and comes in a selection of colours to suit all tastes.\r\nThe Lamy Logo ballpoint pen refills with a LAMY giant refill M 16.', '2021-06-23 08:26:01', 17.45, 250, 1, 'Ballpoint Pen', 'BP02'),
(37, 'Econ', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-003-01.png', 'LAMY', 'Pure and cylindrical shape, made of stainless steel, sandblasted. With metal tip and characteristic clip. Ballpoint pen with LAMY giant refill M 16 black M. Designer: EOOS', '2021-06-23 08:26:01', 30, 250, 1, 'Ballpoint Pen', 'BP03'),
(38, 'Scribble', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-004-01.png', 'LAMY', 'The Lamy Scribble Ballpoint Pen is designed for creative minds of all ages. You can express your knack for stylish designs while your hand feels great doing all of your daily writing with the Scribble!\r\n\r\nThe wide, black matte barrel has a contoured grip that is comfortable to hold while writing. The comfortable, ergonomic form lets you jot down all of your thoughts or take a few hours to draft your next sketch without wearing out your hand.\r\n\r\nThe Scribble retractable ballpoint pen has a chrome-plated clip, tip and push-top button mechanism adding contrast to its beautifully understated matte black body. Express yourself with the best ballpoint pen for jotting down anything - the Scribble!', '2021-06-23 08:26:01', 40, 250, 1, 'Ballpoint Pen', 'BP04'),
(39, 'Dialog 1', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-005-01.png', 'LAMY', 'Lamy dialog 1 ballpoint pen. Metal body with triangular cross-section and rounded edges. Sprung, stainless steel clip. Clip and barrel are coated in titanium. Push the clip down to extend or retract the writing tip.\r\n\r\nSupplied with medium black ballpen refill.\r\n\r\nDesigned by renowned German designer Richard Sapper, who also designed the Alessi kettle, IBM Thinkpad and the Tizio desk lamp, among many other design classics.', '2021-06-23 08:26:01', 100.2, 250, 1, 'Ballpoint Pen', 'BP05'),
(40, 'Pico', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-006-01.png', 'LAMY', 'Small and handy, the LAMY pico first shows its full potential when expanded. An innovative pocket pen that transforms into a full-grown ballpoint pen thanks to its sophisticated push mechanism.', '2021-06-23 08:26:01', 40, 250, 1, 'Ballpoint Pen', 'BP06'),
(41, 'Classic Click', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-007-01.png', 'Moleskine', 'The shape of this neat Click Ball Pen is inspired by the design of the Moleskine Classic Notebook. Like the other pens in the Writing Collection, it clips onto any hard cover notebook, ready to jot down ideas whenever inspiration strikes.', '2021-06-23 08:26:01', 23, 250, 1, 'Ballpoint Pen', 'BP07'),
(42, 'Brass', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-008-01.png', 'Traveler\'s Company', 'The Traveler\'s Company ballpoint pens stands out for its unusual design. It consists of two parts, of which one functions as the cover for the other. When closed, the pen is shaped like a bullet, 9.7 centimeters long. When the lower compartment, containing the ink reservoir and the tip of the pen, is turned out, it becomes a slender writing device of 14 cm long. This compact design is perfect for making notes on the go.', '2021-06-23 08:26:01', 40, 250, 1, 'Ballpoint Pen', 'BP08'),
(43, 'Classic', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-009-01.png', 'KAWECO', 'The sporty style of these compact, retractable ballpoint pens transcends time and is just as attractive today as when they were first created years ago. Each pen is made of high-quality plastic and features a metal Kaweco logo on the top push button. These pens can be used with a wide variety of refills, listed under Recommended Refills/Parts.', '2021-06-23 08:26:01', 36, 250, 1, 'Ballpoint Pen', 'BP09'),
(44, 'Special', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-010-01.png', 'KAWECO', 'The Special is a minimalist octagonal pen. This brass version is made from untreated brass - there\'s nothing to protect the metal surface, meaning the brass will tarnish beautifully with time and use. You can keep it polished to a golden shine if you want to, or just let it go, and watch the metal age, reflecting your use, developing a patina that reflects its history.', '2021-06-23 08:26:01', 52, 250, 1, 'Ballpoint Pen', 'BP10'),
(45, 'Liliput', '../Images/Pen/Ballpoint Pen/Thumbnail/BP-011-01.png', 'KAWECO', 'The Kaweco Liliput pen is incredibly slim yet sturdy—perfect for taking on the go in your pocket or pen case! Threading on the end of the barrel allows the cap to be screwed on securely, bringing the pen to a comfortable, full-sized length while in use. It can be used with a wide variety of refills, listed under Recommended Refills/Parts.\r\nThis pen is constructed from lead-free Eco Brass that will darken and change color over time as the brass oxidizes, acquiring a natural antique character.\r\n\r\nNote: This pen has a noticeable metallic scent that can transfer to the user\'s hand for a short time after use.', '2021-06-23 08:26:01', 70, 250, 1, 'Ballpoint Pen', 'BP11'),
(46, 'Safari', '../Images/Pen/Foutain Pen/Thumbnail/FP-001-01.png', 'LAMY', 'Life is a jungle, and the special LAMY Safari pen can take you through it one stroke at a time. LAMY is a world-renowned pen manufacturer headquartered in Germany. Its Safari line features high-quality pens composed of sturdy plastic, steel nibs, and self-sprung metal clips. They have a unique, modern aesthetic, and are well-designed.', '2021-06-23 08:28:44', 29.6, 250, 1, 'Foutain Pen', 'FP01'),
(47, 'AL-Star', '../Images/Pen/Foutain Pen/Thumbnail/FP-002-01.png', 'LAMY', 'Give your written words some energy with the alluring Lamy Al-Star Fountain Pen! Your daily writing will be easier than ever with the Al-Star\'s lightweight, yet durable aluminum barrel.\r\n\r\nWith the transparent gray front section and flexible spring brass wire clip, the Al-Star fountain pen will quickly become your next favorite writing instrument! Once in hand, you will quickly recognize the comfortable front section that makes it easy to keep writing for hours.', '2021-06-23 08:28:44', 47, 250, 1, 'Foutain Pen', 'FP02'),
(48, 'ABC', '../Images/Pen/Foutain Pen/Thumbnail/FP-003-01.png', 'LAMY', 'The LAMY ABC fountain pen is a bestseller for years, because it is one of the best pens available for children to learn to write. The barrel is made of wood and the ergonomic nib section learns children to hold a pen in the best possible way.\r\n\r\nThe fountain pen has a steel nib and uses the LAMY T10 cartridges (which can be found here in our webstore).\r\n\r\nLamy stands for quality, innovation and modern design. The Lamy brand holds a promise: LAMY. No design writes better.\r\n\r\nPlease make your choice below for the preferred edition.', '2021-06-23 08:28:44', 16.5, 250, 1, 'Foutain Pen', 'FP03'),
(49, 'Safari Origin Gift Set', '../Images/Pen/Foutain Pen/Thumbnail/FP-004-01.png', 'LAMY', 'A legend 40 years in the making, the LAMY safari Origin Special Edition fountain pen returns to its roots, recreating the savannah green and terra red colours from the iconic pen\'s 1980 debut. Paired with ink and presented in custom packaging, this Gift Set is a beautiful way to celebrate an icon\'s anniversary in style.\r\n\r\nCreated by Wolfgang Fabian, the designer behind many of LAMY\'s most beloved pens, the safari\'s rugged construction was revolutionary – finally, students could enjoy a robust, comfortable pen that was built to last. And last it did, with its classic design remaining essentially unchanged for four decades as it continues to be one of LAMY\'s best-loved pens.\r\n\r\nWith a lightweight build and fine balance, the Safari\'s sturdy plastic is moulded to fit neatly in your hand, making handwriting a comfortable and graceful affair. Easy to refill with convenient ink cartridges, or compatible with converters for bottled ink, the Safari is a beautiful fountain pen that will make an impression whether it\'s your first or your fiftieth.', '2021-06-23 08:28:44', 72.2, 250, 1, 'Foutain Pen', 'FP04'),
(50, 'LOGO', '../Images/Pen/Foutain Pen/Thumbnail/FP-005-01.png', 'LAMY', 'The timeless design of the Lamy Logo and high level of functionality makes this pen a reliable companion in any and every writing situation.', '2021-06-23 08:28:44', 36, 250, 1, 'Foutain Pen', 'FP05'),
(51, 'Aion Dark Green Special Edition', '../Images/Pen/Foutain Pen/Thumbnail/FP-006-01.png', 'LAMY', 'The smooth deep-drawn aluminium body components are the first of their kind and give the series a unique, harmonious appearance. Brushed and blasted surfaces are refined with a brilliant silk-matt anodic coating finish, creating formal tension. The sturdy high gloss polished clip perfectly rounds off the overall design.\r\n\r\nSmooth deep-drawn aluminium.\r\nBrished and blasted surfaces.\r\nSilk-matt anodic coating finish.\r\nHigh gloss polished clip.\r\nStainless-steel nib.\r\nTo use with large-capacity cartridge LAMY T10 or Converter Z27.\r\nDelivered in a nice gift box.\r\nThis collection was designed by Jasper Morrison.', '2021-06-23 08:28:44', 74, 250, 1, 'Foutain Pen', 'FP06'),
(52, 'Dialog 3', '../Images/Pen/Foutain Pen/Thumbnail/FP-007-01.png', 'LAMY', 'In 2003, Lamy launched the Dialog series of high-end writing instruments and collaborating with famed industrial designers in their conception. In 2009, the Dialog 3 was designed by Franco Clivio, among others he designed for clients such as Erco, FSB, Gardena, Rodenstock and Siemens.\r\n\r\nBoth the nib and the clip retract into the Lamy dialog 3\'s body. Its innovative rotating mechanism makes this premium fountain pen the first of its kind. Twist the pen and the 14 carat gold nib glides elegantly out of the body, while the clip sinks down. When closed, a ball valve prevents the retracted nib from drying out and getting dirty.\r\n\r\nThe fountain pen uses the ink cartridge/converter filling system.\r\n\r\nLamy is an independent family-owned enterprise which was established in 1930 by , former Parker employee, C. Josef Lamy in Heidelberg. The Lamy brand has existed since 1952 and proved its innovative prowess in the very first year with the completely novel Lamy 27 fountain pen series. And in 1966 the distinctive style of Lamy Design was born with the Lamy 2000.', '2021-06-23 08:28:44', 36, 250, 1, 'Foutain Pen', 'FP07'),
(53, 'Safari Origin Special Edition', '../Images/Pen/Foutain Pen/Thumbnail/FP-008-01.png', 'LAMY', 'Back to the Roots – that’s the motto this year for the LAMY safari. The cult fountain pen has already been on the market now for more than 40 years. As a tribute to this, Lamy is taking a look back at the beginnings of this unprecedented success story – with two special colours: savannah green and terra red.', '2021-06-23 08:28:44', 27.5, 250, 1, 'Foutain Pen', 'FP08'),
(54, 'Scala', '../Images/Pen/Foutain Pen/Thumbnail/FP-009-01.png', 'LAMY', 'High-end fountain pen with cap.\r\nMade of stainless steel.\r\nWith matt black finish and high-gloss chrome-plated grip and clip.', '2021-06-23 08:28:44', 110, 250, 1, 'Foutain Pen', 'FP09'),
(55, 'Studio', '../Images/Pen/Foutain Pen/Thumbnail/FP-010-01.png', 'LAMY', 'The modern look of the LAMY Studio has just the right hints of artistic flair to give it an elegant yet subtle design. The matte black body is simply adorned with a clip that starts off traditionally yet twists at the end. The pen comes boxed with one blue ink cartridge and one converter.\r\nNote: This pen may come with ink residue in the nib from being dip tested by LAMY at the factory. As with all new fountain pens, we recommend giving your LAMY a good cleaning before you use it.\r\n\r\n', '2021-06-23 08:28:44', 79, 250, 1, 'Foutain Pen', 'FP10'),
(56, 'Classic', '../Images/Pen/Foutain Pen/Thumbnail/FP-011-01.png', 'KAWECO', 'Choosing Keeping holds the largest range of Kaweco pens in the UK - indeed we have built a long-lasting friendship with the beloved Gutberlet family who run the company with so much brains and gusto. Kaweco is often mistaken for a Japanese brand - not so! - it is 100% German. Originally established in 1899 in Heidelberg (also home of Lamy), the company was eventually renamed Kaweco as its owners namesake, Henrich Koch and Rudolph Weber - KOch, WEber and COmpany. Here pictured, an advertisement from 1911 which declares, ‘stocked in every best stationery store’ - still the case!\r\n\r\nThe Classic Sport range, introduced to market in 1934, broke new ground in modern design for its unique octagonal barrel and handy portable size intended for use by ‘ladies, officers and sportspeople’. Kaweco were covering all bases with their marketing of this hugely successful pen, now synonymous with the brand itself.\r\n\r\nOriginally Classic Sport pens were made from ebonite (a very hard rubber), in black and then burgundy, featuring a fine engraved pattern known as a guilloche. Today, the design remains largely unchanged - measuring 10cm when capped, for optimal writing comfort and using a modern cartridge system for practicality - now in a wide range of exciting colours and finishes. Hard wearing ABS moulded plastics, clear plastics, hand turned acrylics, stainless steel, brass, copper, aluminium, and patinated finishes are all à la carte for you to choose from.  ', '2021-06-23 08:28:44', 26, 250, 1, 'Foutain Pen', 'FP11'),
(57, 'Liliput', '../Images/Pen/Foutain Pen/Thumbnail/FP-012-01.png', 'KAWECO', 'The Liliput is the smallest member of Kaweco\'s fountain pen lineup and among the smallest fountain pens in the world that use standard international short ink cartridges. Threading on the end of the barrel allows the cap to be screwed on securely, bringing the pen to a comfortable, full-sized length while in use. Originally introduced in 1910, the Liliput was re-released in 2011 and is available in a variety of attractive materials and finishes.', '2021-06-23 08:28:44', 110, 250, 1, 'Foutain Pen', 'FP12'),
(58, 'Frosted Sport', '../Images/Pen/Foutain Pen/Thumbnail/FP-013-01.png', 'KAWECO', 'The Kaweco Frosted Sport Fountain Pen gives you a glimpse of the inner workings of the pen through the milky exterior. The barrel is produced from high-quality ABS/Makrolon plastic, featuring a cylindrical barrel and an octagonal cap design. This stops your pen from rolling, ideal for use on a train or aeroplane. The nib is rendered from durable stainless steel with a chrome plated finish, designed to generate a brilliantly smooth writing experience.\r\n\r\nThese pens are durable but incredibly lightweight. The unique design means that the compact design is extended when the cap is placed on the end of the pen. The Kaweco Frosted Sport Fountain Pen is part of a range of beautiful writing instruments created by this German writing instrument company. Learn more about the history of the Kaweco brand here.', '2021-06-23 08:28:44', 20, 250, 1, 'Foutain Pen', 'FP13'),
(59, 'Perkeo', '../Images/Pen/Foutain Pen/Thumbnail/FP-014-01.png', 'KAWECO', 'The Kaweco Perkeo is a revisit of an early 20th century model of the same name. The Kaweco Perkeo is made of Plastic and has some visual similarities with the Kaweco Sport, but is considerably larger. The section is intended to be more ergonomic and the body is faceted. The Kaweco Perkeo comes in multiple appealing colours.\r\n\r\nThe Kaweco Perkeo Fountain pen has a steel nib made by the German company Bock Heidelberg and fills by cartridge or converter.', '2021-06-23 08:28:44', 15, 250, 1, 'Foutain Pen', 'FP14'),
(60, 'Sport Lavender', '../Images/Pen/Foutain Pen/Thumbnail/FP-015-01.png', 'KAWECO', 'The Kaweco Skyline Sport is one of the few writing instruments which have been successful in the market for decades without big changes. It follows the design of the year 1935. A friendship for generations.\r\n\r\nThe Collectors Edition 2021 is ‘Light Lavender’. This edition will be available for a limited time. \r\n\r\nThis product will be shipped by the refill & ink conditions.\r\n\r\nA striking feature of the Kaweco Sport Fountain pen is that it is very small. It has a lenght of only 10.5 cm with closed cap, and therefore easy to store in a bag or pocket, but with the cap on the back of the penit measures 13.5 cm and it is excellent to write with.\r\n\r\nThe Kaweco Skyline Sport Fountain pen has a steel nib made by the German company Bock Heidelberg and fills by cartridge or converter.\r\n\r\nKaweco belongs to one of the oldest brands on the market. For more than 125 years Kaweco pens are an integral part of the High-Class assortments. Kaweco insistently focuses on the thin line between tradition and innovation.', '2021-06-23 08:28:44', 110, 250, 1, 'Foutain Pen', 'FP15'),
(61, 'Supra', '../Images/Pen/Foutain Pen/Thumbnail/FP-016-01.png', 'KAWECO', 'The Kaweco Supra Fountain Pen is a compact pocket style fountain pen with an all steel cap and barrel. The cap on the pen posts to make the length longer for writing and there is also an additional removable section to extend the pen an extra 2.5 cms. The Supra accepts standard ink cartridges (Kaweco cartridges can be found here in our store).\r\n\r\nKaweco was founded in 1883 and became an innovative pen manufacturer over time. Vision and untiring efforts, with love and passion for details and the products, made Kaweco famous worldwide.', '2021-06-23 08:28:44', 90.91, 250, 1, 'Foutain Pen', 'FP16'),
(62, 'Student', '../Images/Pen/Foutain Pen/Thumbnail/FP-012-01.png', 'KAWECO', 'Kaweco Decades \r\nRelive the past musical decades with the Kaweco 70\'s Soul, 60\'s Swing and the 50\'s Rock.  A great pen for everyday use, the decades collection will appeal to writers of every age.  It\'s classic styling recalls vintage pens of the 1930\'s, now updated with the 70\'s Soul finish in orange, 60\'s Swing in Green and 50\'s rock in blue; all three feature cream-colored resin combined with gold-plated trim.  The fountain pen features a quality German-made gold-plated steel nib. Collection also features capped rollerball and twist ballpen and is shipped in a Kaweco metal gift box.\r\n', '2021-06-23 08:28:44', 70, 250, 1, 'Foutain Pen', 'FP12'),
(63, 'Safari Mechanical', '../Images/Pen/Pencils/Thumbnail/P-001-01.png', 'LAMY', 'Life is a jungle, and the popular LAMY Safari can take you through it one line at a time. LAMY is a world-famous pen company headquartered in Germany. Their Safari line consists of high quality pens made of sturdy ABS plastic and flexible brass wire chrome clips.\r\nPencil takes 0.5 mm lead and features a LAMY Z 18 eraser with cleaning needle underneath the cap. Great look, great design.', '2021-06-23 08:33:16', 20, 250, 1, 'Pencil', 'P01'),
(64, 'Logo Mechanical', '../Images/Pen/Pencils/Thumbnail/P-002-01.png', 'LAMY', 'Mechanical pencil made of stainless steel with brushed finish. Metal button and point. With spring-mounted steel clip. Push mechanism with integrated clip-button unit. With 0.5 mm (LAMY M 41) lead. Designer: Wolfgang Fabian.', '2021-06-23 08:33:16', 19.9, 250, 1, 'Pencil', 'P02'),
(65, 'Drawing Pencil Set', '../Images/Pen/Pencils/Thumbnail/P-003-01.png', 'Moleskine', 'MOLESKINE PENCIL SET: High-quality pencils for sketching, writing & drawing, Moleskine Pencil Sets are made of natural cedar wood with a naturally inspiring grip. From watercolors to sketching, Moleskine pencil sets bring out the artist in anyone.\r\nMOLESKINE PENCILS: Do you love the feel of pencil on paper? Moleskine pencils are designed for writers, students, and artists who know the love of handwriting, whether writing in their journal, sketchbook, planner, or classic Notebook.\r\nMADE WITH HANDWRITING IN MIND: The Moleskine Writing Collection is made with handwriting in mind. All of our pens and pencils clip onto the side of your favorite Moleskine notebook, so they won go missing.\r\nPENS & PENCILS FOR MOLESKINE NOTEBOOKS: Whatever youre writing, Moleskine has a pen or pencil for you. From roller & ballpoint pens, to click pencils & wooden pencils, Moleskine pens & pencils are the perfect companion to your Moleskine notebooks.\r\nMOLESKINE QUALITY: Were dedicated to culture, travel, memory, imagination, & personal identity—both physical & digital. We bring this commitment to our notebooks, bags, apps & smart pens & notebooks.', '2021-06-23 08:33:16', 14.9, 250, 1, 'Pencil', 'P03'),
(66, 'Brass', '../Images/Pen/Pencils/Thumbnail/P-004-01.png', 'Traveler\'s Company', 'A stylish Japanese reinterpretation of a classic American writing instrument, this bullet-style pencil holder combines comfort and portability into one clever design. Thanks to its long cap and short barrel, the pencil is an easily pocketable four inches long when capped and a comfortable five and a half inches long with the cap posted on the back of the barrel.\r\nTo remove the clip, unscrew the eraser and ferrule from the cap. Lift the clip away, and screw the eraser and ferrule back down.', '2021-06-23 08:33:16', 28.5, 250, 1, 'Pencil', 'P04'),
(67, 'Brass Pencil Refill Pack', '../Images/Pen/Pencils/Thumbnail/P-005-01.png', 'Traveler\'s Company', 'This refill pack includes three pencils and two erasers for the Traveler\'s Company Brass Pencil. Made in Japan.', '2021-06-23 08:33:16', 5.95, 250, 1, 'Pencil', 'P05'),
(68, 'Special Mini Mechanical', '../Images/Pen/Pencils/Thumbnail/P-006-01.png', 'KAWECO', 'The sleek and compact design of the Kaweco Special AL Mini Mechanical Pencil is a classy addition to the Kaweco series of aluminum writing instruments. The octagonal barrel consists of anodized solid aluminum with a matte black finish. The pencil has a top knock button, allowing you to extend lead in small amounts with each click. Remove the top button to insert replacement lead. Features the iconic silver Kaweco logo on the cap. Multiple lead sizes available.', '2021-06-23 08:33:16', 42, 250, 1, 'Pencil', 'P06'),
(69, 'Classical Mechanical', '../Images/Pen/Pencils/Thumbnail/P-007-01.png', 'KAWECO', 'The sporty style of these compact, German-made mechanical pencils is just as attractive today as when they were first created years ago.\r\nThe plastic pencil body features a top push button that dispenses lead with every click. Removing the cap exposes the lead tube, where lead refills are inserted. We recommend adding no more than 3 lead pieces to avoid a lead jam.', '2021-06-23 08:33:16', 26.5, 250, 1, 'Pencil', 'P07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UC_EMAIL` (`EMAIL`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `C_ID` (`CUSTOMER_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `P_ID` (`PRODUCT_ID`),
  ADD KEY `FK_OID` (`ORDER_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `C_ID` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`ID`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_OID` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ID`),
  ADD CONSTRAINT `O_ID` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ID`),
  ADD CONSTRAINT `P_ID` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
