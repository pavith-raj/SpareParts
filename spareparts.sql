-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 07:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spareparts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'spare2@gmail.com', 'Spare@123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `ename`, `email`, `password`, `phone`) VALUES
(3, 'Anshool Naik', 'anshoolnaik@gmail.com', 'anshool', '7483971270'),
(4, 'Abhijith', 'abhi@gmail.com', 'abhi', '7483971273'),
(5, 'Pavith Raj', 'pavith@gmail.com', 'pavith@123', '6238764220'),
(6, 'Sanketh', 'sankeeth@gmail.com', 'sanketh@123', '7483971270');

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `id` int(11) NOT NULL,
  `gname` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `ownername` varchar(200) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garage`
--

INSERT INTO `garage` (`id`, `gname`, `email`, `password`, `phone`, `address`, `ownername`, `image`) VALUES
(1, 'Sahana Motors', 'sahana@gmail.com', 'Sahana@123', '8951137153', 'No 3-25/1, VT Road, Kotekar, Mangalore - 575022', 'sahana', 'sahana-motors-mangalore-eozxiihzid.jpg'),
(2, 'Planet Auto Works Multi Brand Car Service Centre', 'planetauto@gmail.com', 'planet@123', '9481359859', 'NH 48 Mangaluru – Bangalore Highway Padil Kannur, Karnataka ', 'Sharan', 'paw.jpg'),
(3, 'maruthi ', 'maruthi@gmail.com', 'maruthi123', '7894561230', 'mangalore', 'maruthi', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order`
--

CREATE TABLE `invoice_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_tax_per` varchar(250) NOT NULL,
  `order_total_after_tax` double(10,2) NOT NULL,
  `order_amount_paid` decimal(10,2) NOT NULL,
  `order_total_amount_due` decimal(10,2) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order`
--

INSERT INTO `invoice_order` (`order_id`, `user_id`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax`, `order_tax_per`, `order_total_after_tax`, `order_amount_paid`, `order_total_amount_due`, `note`) VALUES
(686, 1, '2023-07-05 12:29:25', 'Sahana', 'Krishna Nilaya , Kuchikkad , RD Nagar (P.O) Kudlu , Kasaragod, kerala', '800.00', '16.00', '2', 816.00, '816.00', '0.00', 'have a nice day'),
(687, 1, '2023-07-06 10:51:35', 'abhi', 'Shree Matha house Nandalike kedinje', '149994.00', '26998.92', '18', 176992.92, '180000.00', '-3007.08', 'Have a blast day');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_order_item`
--

CREATE TABLE `invoice_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_order_item`
--

INSERT INTO `invoice_order_item` (`order_item_id`, `order_id`, `item_code`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_final_amount`) VALUES
(4379, 687, '001', 'Timing Chain', '6.00', '24999.00', '149994.00'),
(4382, 686, '4234', 'Wiper Blade', '2.00', '300.00', '600.00'),
(4383, 686, '6454', 'Alternator Pulley', '1.00', '200.00', '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_user`
--

CREATE TABLE `invoice_user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_user`
--

INSERT INTO `invoice_user` (`id`, `email`, `password`, `first_name`, `last_name`, `mobile`, `address`) VALUES
(123456, 'admin@phpzag.com', '12345', 'Admin', '', 12345678912, 'New Delhi 110096 India.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` mediumtext NOT NULL,
  `price` int(20) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(1000) NOT NULL,
  `vehiclename` varchar(1000) NOT NULL,
  `companyname` varchar(1000) NOT NULL,
  `modelno` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `price`, `description`, `image`, `vehiclename`, `companyname`, `modelno`) VALUES
(2, 'Wiper Blade', 499, 'Its primary function is to clear water, snow,  dirt and other debris from the windshield , improving visibility for the driver.', 'wiper blade.jpg', 'Baleno', 'Maruti', '2015'),
(3, 'Ball Bearing', 1800, 'They are small, spherical-shaped metal balls that reduce friction and enable smooth rotation between two surfaces.', 'ball bearing.jpg', 'Innova Crysta', 'Toyota', '2019'),
(4, 'Alternator Pulley', 800, 'It plays a crucial role in driving the alternator and converting mechanical energy into electrical energy.', 'Alternater pulley.jpg', 'Swift', 'Maruti', '2014'),
(5, 'Bonnet Lid', 32000, 'an exterior component of a car that covers and provides access to the engine compartment. It is typically located at the front of the vehicle and is hinged at the rear, allowing it to be raised and secured in an open position for engine maintenance or inspection.', 'Bonnet Lid.jpg', 'Fortuner', 'Toyota', '2009'),
(6, 'Air filter', 269, 'Its primary function is to filter out contaminants and debris from the incoming air before it reaches the engine.', 'air filter.jpg', 'EON', 'HYUNDAI', '2019'),
(7, 'Oil filter', 469, 'Its main function is to remove impurities and contaminants from the engine oil, ensuring that the oil remains clean and free from debris.', 'oil filter.jpg', 'ALTO 800', 'MARUTI', '2016'),
(8, 'Alloy wheels', 1600, 'Alloy wheels, also known as aluminum wheels or alloy rims, are a popular type of wheel used in automobiles. They are made from a combination of metals, typically aluminum or magnesium, blended with other elements to enhance their strength, durability, and appearance.', 'Alloy wheels.jpg', 'CARENS', ' KIA', '2022'),
(10, 'Master Kit', 2500, 'The master cylinder, also known as the master brake cylinder, converts the pressure on the brake pedal to hydraulic pressure by feeding brake fluid into the brake circuit and controlling this according to the mechanical force. Master brake cylinders are used both in disc brakes and drum brakes.', 'master-cylinder-500x500.webp', 'I20', 'HYUNDAI', '2021'),
(11, 'Brake Rotor', 7500, 'Brake rotors in cars are circular metal discs connected to the wheels. There are four brake rotors installed in cars, one for each wheel. The rotors’ primary purpose is to slow down the turning of the car’s wheels by utilizing friction.', 'rotors.jpeg', 'BRIO', 'HONDA', '2011'),
(12, 'Brake pad', 1200, 'Brake pads are a component of disc brakes used in automotive and other applications. Brake pads are steel backing plates with friction material bound to the surface that faces the disk brake rotor. Brake pads convert the kinetic energy of the car to thermal energy by friction.', 'brkpad(1).jpeg', 'Ritz', 'Maruthi', '2015'),
(13, 'Engine oil', 900, 'Motor oil, engine oil, or engine lubricant is any one of various substances used for the lubrication of internal combustion engines. They typically consist of base oils enhanced with various additives, particularly antiwear additives, detergents, dispersants, and, for multi-grade oils, viscosity index improvers.', '71mKj8j0yYL._AC_UF1000,1000_QL80_.jpg', 'Nexon', 'Tata', '2023'),
(14, 'Headlight bulb', 3600, 'A headlamp is a lamp attached to the front of a vehicle to illuminate the road ahead. Headlamps are also often called headlights, but in the most precise usage, headlamp is the term for the device itself and headlight is the term for the beam of light produced and distributed by the device.', 'download (1).jpeg', 'Polo', 'Volkswagen', '2021'),
(15, 'Windshield', 5500, 'The windshield for cars is typically made of laminated glass or safety glass. Laminated glass is a sandwich of two panes of glass with a polyvinyl butyral (PVB) interlayer in between which is then bonded together to form a single uniform piece for windshield safety.', 'car-windshield-glass-250x250.webp', 'Scropio', 'Mahindra', '2020'),
(16, 'Tyre', 4500, 'The materials of modern pneumatic tires are synthetic rubber, natural rubber, fabric, and wire, along with carbon black and other chemical compounds. They consist of a tread and a body. The tread provides traction while the body provides containment for a quantity of compressed air.', '81SWL5jTjZL._AC_UF1000,1000_QL80_.jpg', 'Figo', 'Ford', '2017'),
(17, 'Radiator', 2200, 'A radiator is the key component of the engine\'s cooling system. Its main role is to disperse a mix of antifreeze and water throughout its fins, which releases some of the engine\'s heat while taking in cool air before continuing to pass the rest of the engine.', 'Automobile_radiator.jpg', 'Q7', 'Audi', '2020'),
(18, 'Condensor', 17500, 'The condenser is a heat exchanger. It is located at the front of the vehicle. The condenser cools down the refrigerant (heated up by the compressor) and becomes a liquid (condensates) by transferring its heat to the flow of ambient air passing through it.', 'car-ac-condenser-500x500.webp', 'Thar', 'Mahindra', '2021'),
(19, 'Drive shaft', 1599, 'The drive shaft (also called propeller shaft or prop shaft) is a component of the drive train in a vehicle, with the purpose of delivering torque from the transmission to the differential, which then transmits this torque to the wheels in order to move the vehicle.', 'download (2).jpeg', 'i20', 'Hyundai', '2014'),
(21, 'Clutch Assembly', 19999, 'A clutch is a mechanical device that allows the output shaft to be disconnected from the rotating input shaft. The clutch\'s input shaft is typically attached to a motor, while the clutch\'s output shaft is connected to the mechanism that does the work.', 'clutch-assembly-part.jpg', 'jeep', 'Jeep', '2023'),
(22, 'Timing Chain', 25000, 'A timing chain is an internal engine component that\'s fitted to synchronise the rotation of the camshaft and the crankshaft — these two elements are essential for driving the wheels. The movement of the chain allows for engine cylinders to produce power to operate and propel the vehicle.', 'bike-timing-chain-kit.jpg', 'Hector', 'MG', '2023'),
(23, 'Belt', 250, 'The timing belt is a rubber belt with hard teeth that interlock with the cogwheels of the crankshaft and the camshafts.', '61qyA9kxkrL._AC_UF894,1000_QL80_.jpg', 'Baleno', 'Maruthi', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `productbooking`
--

CREATE TABLE `productbooking` (
  `id` int(11) NOT NULL,
  `pname` varchar(1000) NOT NULL,
  `vehiclename` varchar(500) NOT NULL,
  `companyname` varchar(500) NOT NULL,
  `model` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` mediumtext NOT NULL,
  `status` varchar(200) NOT NULL,
  `eid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productbooking`
--

INSERT INTO `productbooking` (`id`, `pname`, `vehiclename`, `companyname`, `model`, `price`, `qty`, `total`, `fname`, `lname`, `email`, `phone`, `address`, `status`, `eid`) VALUES
(1, 'Wurth 0.5 kg Wuerth DSW 22 Pneumatic Die Grinder', '', '', 0, 8000, 2, 16000, 'Yathiraj', 'Shetty', 'sahana@gmail.com', '8951137153', 'test', 'deliveried', 3),
(2, 'Oil filter', '', '', 0, 289, 1, 289, 'Sahana', 'K', 'sahana@gmail.com', '6238764220', 'Krishna Nilaya , Kuchikkad , RD Nagar (P.O) Kudlu , Kasaragod, kerala', 'cancelled', 0),
(5, 'Timing Chain', '', '', 0, 24999, 6, 149994, 'abhi', 'shetty pure', 'sahana@gmail.com', '7349150072', 'Shree Matha house Nandalike kedinje', 'confirmed', 3),
(6, 'Oil filter', '', '', 0, 289, 2, 578, 'tejas', 's', 'sahana@gmail.com', '9856674724', 'managalore', 'confirmed', 4),
(7, 'Belt', 'Baleno', 'Maruthi', 2017, 250, 3, 750, 'Pavith', 'Raj', 'sahana@gmail.com', '6238764220', 'Krishna Nilaya , Kuchikkad , RD Nagar (P.O) Kudlu , Kasaragod, kerala', 'confirmed', 4),
(8, 'Ball Bearing', 'Innova Crysta', 'Toyota', 2019, 1800, 5, 9000, 'saneeth', 'k', 'sahana@gmail.com', '6238764220', 'kaaragod', 'pending', 0),
(9, 'Condensor', 'Thar', 'Mahindra', 2021, 17500, 2, 35000, 'Pavith', 'Raj', 'sahana@gmail.com', '6238764220', 'Krishna Nilaya , Kuchikkad , RD Nagar (P.O) Kudlu , Kasaragod, kerala', 'pending', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_order`
--
ALTER TABLE `invoice_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `invoice_order_item`
--
ALTER TABLE `invoice_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `invoice_user`
--
ALTER TABLE `invoice_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productbooking`
--
ALTER TABLE `productbooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice_order`
--
ALTER TABLE `invoice_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=688;

--
-- AUTO_INCREMENT for table `invoice_order_item`
--
ALTER TABLE `invoice_order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4384;

--
-- AUTO_INCREMENT for table `invoice_user`
--
ALTER TABLE `invoice_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `productbooking`
--
ALTER TABLE `productbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
