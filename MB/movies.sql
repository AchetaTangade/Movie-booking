-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 12:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `noofseats` int(11) NOT NULL,
  `bookingtime` time NOT NULL DEFAULT current_timestamp(),
  `cinema_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `show_id`, `customer_id`, `noofseats`, `bookingtime`, `cinema_id`, `date`, `movie_id`) VALUES
(1, 0, 3, 2, '12:28:41', 102, '2022-01-15', 7),
(2, 0, 3, 7, '16:21:48', 101, '2022-01-19', 2),
(3, 0, 3, 1, '16:22:18', 103, '2022-01-16', 8),
(4, 0, 5, 0, '16:31:35', 102, '0000-00-00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinema_id` int(11) NOT NULL,
  `cinema_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`cinema_id`, `cinema_name`, `address`) VALUES
(101, 'AMC Theatre', '11500 Ash St,Leawd,DM,691523'),
(102, 'Cinemark', '3900 Dallas Parkway Suite 500 Plano,12 Street,Ep, UD, 691523'),
(103, 'Midtown Cinemas', 'Aue,Charles Street, EUS, DMM, 691523'),
(104, 'Riverview Theater', '3800 42nd Ave S, Minneapolis, MN 55406, Minnesot, 224450');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `dateofbirth` date NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `fname`, `lname`, `username`, `gender`, `email`, `phoneno`, `dateofbirth`, `password`) VALUES
(2, 'hi', 'me', 'hime', 'M', 'hime@g.com', 1234567894, '2000-01-01', 12345678),
(3, 'Nish', 'A', 'nish', 'F', 'nish@gmai.com', 1234567845, '2001-01-01', 25),
(4, 'Acheta', 'T', 'Acheta', 'F', 'achetatangade22@gmail.com', 1234561258, '2001-09-28', 0),
(5, 'A', 'T', 'at', 'F', 'acheta@gmail.com', 1234561258, '2001-09-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `language` varchar(25) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `runtime` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `cast1` varchar(500) NOT NULL,
  `cast2` varchar(500) NOT NULL,
  `cast3` varchar(500) NOT NULL,
  `plot_summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `image`, `language`, `genre`, `release_date`, `runtime`, `director`, `cast1`, `cast2`, `cast3`, `plot_summary`) VALUES
(1, '83', '83.jpg', 'hindi', 'Biography', '2021-12-24', '162min', 'Kabir khan', 'Ranveer Singh', 'Deepika Padukone', 'Tahi raj bhasin', 'On June 25, 1983, the Lords Cricket Ground witnessed 14 men beat the two times World Champions West Indies, putting India back onto the cricket world stage.'),
(2, 'Atrangi re', 'Atrangi-re.jpg', 'hindi', 'Comedy,drama,romantic', '2021-08-06', '138min', 'Anand l rai', 'Dhanush', 'Sara ali khan', 'Akshay kumar', 'A Tamil boy meets a girl from Bihar, what follows is a love story for the ages. A non-linear narrative of two romances running in parallel from different timelines.'),
(3, 'Kotigobba 3', 'Kotigobba-3.jpg', 'kannada', 'Action', '2021-10-15', '140min', 'Shiva karthik', 'Sudeep', 'Aftab Shivadasani', 'Madonna', 'Movie starts with Satya (Sudeep) goes to Poland for a treatment of a girl from his ashram who encounters a rare ailment. In flight he meet the heroine (Madonna Sebastian) which turns into love like in all film. In Polland some bombs are explode in the same time theft of billions of rupees worth of jewelery happened. Who is behind all these robbery and why Interpol officers chasing Satya. '),
(4, 'Roberrt', 'Roberrt.jpg', 'kannada', 'Action', '2021-03-03', '186min', 'Tarun sudhir', 'Darshan', 'Vinod', 'Asha bhat', 'In this chilling story based on real life events a family experience terrifying supernatural occurrences when their son acquires a vintage doll called Robert.'),
(5, 'Pushpa', 'Pushpa.jpg', 'telugu', 'Action,adventure,crime', '2021-12-17', '2h 59min', 'Sukumar', 'Allu arjun', 'Fadah faasil', 'Rashmika mandanna', 'Story of Pushpa Raj, a lorry driver in Seshachalam forests of South India, set in the backdrop of red sandalwood smuggling. Red Sandalwood is endemic to South-Eastern Ghats (mountain range) of India.'),
(6, 'Minnal-murali', 'Minnal-murali.jpg', 'telugu', 'Action,adventure,comedy', '0000-00-00', '158min', 'Basil Joseph', 'Torino thomas', 'guru', 'Ajo varghese', 'An unusual event creates a lightning which in turns gives superhuman abilies to an ambitious tailor ,whose responsibility is now to protect his home village from the evil plans of the antagonist.'),
(7, 'Badava-rascal', 'Badava-rascal.jpg', 'kannada', 'comedy,drama,romantic', '2021-12-24', '2 h 13min', 'Shankar guru', 'Dhananjaya', 'Amrutha Iyenghar', 'Thara', 'Badava Rascal is a romantic comedy entertainer movie directed by Shankar and produced by Dhananjay . The movie cast includes Daali Dhananjay and Amrutha Iyengar in the main lead roles while Vasuki Vaibhav scored music.'),
(8, 'Enna solla pogirai', 'tamil.jpg', 'tamil', 'Comedy,romantic', '2022-01-13', '2h 13min', 'Avinash hariharan', 'Ashwin kumar', 'teju ashwini', 'Avantika mishra', 'Three individuals with clear notions of what romance discover the indefinable magic that is love when they end up in a triangular romantic relationship.'),
(9, 'Kurup', 'Kurup.jpg', 'malayalam', 'Biography,crime,thriller', '0000-00-00', '2h20min', 'Srinath rajendra', 'Dulquer salmaan', 'Indrajith sukumar', 'Sobhita dhulipala', 'Kurup is a criminal who is on the run from police after murdering someone for life insurance fraud.');

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE `screens` (
  `movie_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`movie_id`, `cinema_id`, `screen_id`) VALUES
(2, 101, 2001),
(7, 102, 2002),
(3, 102, 2003),
(8, 103, 2004),
(6, 104, 2005);

-- --------------------------------------------------------

--
-- Table structure for table `show_det`
--

CREATE TABLE `show_det` (
  `show_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_det`
--

INSERT INTO `show_det` (`show_id`, `price`, `screen_id`, `time_id`) VALUES
(111, 200, 2001, 11),
(222, 150, 2002, 22),
(333, 150, 2002, 33),
(444, 250, 2004, 44);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(11) NOT NULL,
  `time_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `time_cat`) VALUES
(11, '09.00 am'),
(22, '01.00 pm'),
(33, '04.30 pm'),
(44, '08.00 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`screen_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `cinema_id` (`cinema_id`);

--
-- Indexes for table `show_det`
--
ALTER TABLE `show_det`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `screen_id` (`screen_id`),
  ADD KEY `time_id` (`time_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `screens`
--
ALTER TABLE `screens`
  ADD CONSTRAINT `screens_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `screens_ibfk_2` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `show_det`
--
ALTER TABLE `show_det`
  ADD CONSTRAINT `show_det_ibfk_1` FOREIGN KEY (`screen_id`) REFERENCES `screens` (`screen_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `show_det_ibfk_2` FOREIGN KEY (`time_id`) REFERENCES `time` (`time_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
