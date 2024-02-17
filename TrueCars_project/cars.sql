-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 03:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truecar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` varchar(30) NOT NULL,
  `detail` text NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `filename`, `name`, `price`, `detail`, `email`) VALUES
(9, 'xuv700.webp', 'Mahindra XUV 700', '27,000,00', 'Latest Update: Mahindra has hiked prices of the XUV700 by up to Rs 36,000.\r\n\r\nPrice: The XUV700 now ranges between Rs 13.45 lakh and Rs 24.95 lakh (ex-showroom).\r\n\r\nVariants: Mahindra offers it in two broad trims: MX and AX (AdrenoX). The AX range is sub-categorized into three variants:', 'modhwadiya***********@gmail.co'),
(12, 'range rover.webp', 'Land Rover Range Rover', '5,25,00,000', 'Latest Update: The variant-wise prices of the 2022 Range Rover are out and its deliveries are now underway across India. \r\n\r\nLand Rover Range Rover Price: The Range Rover is listed from Rs 2.32 crore (ex-showroom) onwards.\r\n\r\nLand Rover Range Rover Variants: The fifth-gen Range Rover is now available in five trims: SE, HSE, Autobiography, First Edition and SV.\r\n\r\nLand Rover Range Rover Seating Capacity: Land Rover is offering the SUV in multiple seating configurations: 4-seater, 5-seater, and 7-seater.\r\n\r\nLand Rover Range Rover Engine and Transmission: In terms of powertrains, it is available with a mix of petrol and diesel engines, both with 48V mild-hybrid tech. All engines are mated to an 8-speed automatic transmission. The 3-litre six-cylinder petrol makes 400PS/550Nm and the 3-litre diesel produces 351PS/700Nm. Its flagship variant is equipped with the 4.4-litre twin-turbo V8 producing 530PS/750Nm.', 'modhwadiya***********@gmail.co'),
(13, 'jeep compass.jpg', 'Jeep Compass', '30,50,000', 'Price: Jeep has priced the Compass between Rs 19.29 lakh and 30.84 lakh (ex-showroom).\r\n\r\nVariants: There are five trims available: Sport, Longitude (O), Limited (O), Model S, and Night Eagle. The 5th Anniversary edition is also on offer.\r\n\r\nSeating Capacity: It has a five-seater layout.\r\n\r\nFeatures: The Jeep SUV is packed with a 10.1-inch touchscreen infotainment system with connected car tech, a 10.25-inch digital driver display, ventilated front seats, powered tailgate and wireless phone charging. It also has an auto AC and a 360-degree camera.', 'modhwadiya***********@gmail.co'),
(17, 'Mahindra Scorpio Classic.jpg', 'Mahindra Scorpio Classic', '15,000,00', 'Price: Mahindra retails the Scorpio Classic in the price range of Rs 11.99 lakh to Rs 15.49 lakh (ex-showroom).\r\n\r\nVariants: The Scorpio Classic is available in two trims: S and S11.\r\n\r\nSeating Capacity: Its a seven-seater SUV.\r\n\r\nEngine and Transmission: It is powered by a 2.2-litre diesel engine derived from the Scorpio Ns less powerful diesel variant. It makes 132PS and 300Nm and is mated to a six-speed manual transmission.\r\n\r\nFeatures: Features onboard the SUV are cruise control, auto air conditioning, a nine-inch touchscreen infotainment system with Bluetooth and AUX connectivity and projector headlights with LED DRLs.\r\n\r\nSafety: The safety kit includes dual front airbags, ABS and rear parking sensors.', 'modhwadiya***********@gmail.co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
