-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 01:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alexandria_gyms`
--

-- --------------------------------------------------------

--
-- Table structure for table `gyms`
--

CREATE TABLE `gyms` (
  `id` int(11) NOT NULL,
  `LOC` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `RATE` float NOT NULL,
  `LINK` varchar(40) NOT NULL,
  `image link` text NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gyms`
--

INSERT INTO `gyms` (`id`, `LOC`, `NAME`, `RATE`, `LINK`, `image link`, `region`) VALUES
(1, '42 Abd El-Aziz Fahmy, Fleming,', 'UP HILL Gym', 4.2, 'https://www.facebook.com/uphill.gym', 'images/up hill gym.png', 'gleem'),
(2, 'st. - Glim, 9 Mostafa Maher, F', 'Body Gym', 4.3, 'https://www.facebook.com/BodyGym1', 'images/Body gym.jpg', 'gleem'),
(3, '569 Mostafa Fahmy, Al Aqesa WA', 'Global Gym', 4, 'https://www.facebook.com/GlobalGymeg', 'images/global gym.jpg', 'gleem'),
(4, '42 El-Hedaya Mosque, Fleming, ', 'Fit zone gym', 4.2, '', 'images/FITZONE.PNG', 'gleem'),
(5, '139 شارع خالد بن الوليد - بجوا', 'Hammam Gym', 4.2, 'https://www.facebook.com/hammamgym', 'images/Hammam gym.jpg', 'montaza'),
(6, 'بجوار محطة ترام صفر، 35شارع ال', 'Hulk Gym ', 4.9, '', 'images/hulk gym.jpeg', 'gleem'),
(7, 'Mohammed Bahaa Al Din Al Ghour', 'Professional Gym', 3, 'https://www.facebook.com/Professional-Gy', 'images/professional gym.jpg', 'smouha'),
(8, '20 Mostafa Kamel St.، SEMOUHA،', 'Evolution Gym', 4.1, 'https://www.facebook.com/EvolutionSmouha', 'images/Evolution gym.jpg', 'smouha'),
(9, '59 camp chezar Borsaid street ', 'Power Gym ', 4.6, 'https://www.facebook.com/Power-Gym-Alexa', 'images/power gym.jpg', 'sidigaber'),
(10, 'عزبة سعد، Sidi Gabir, Sidi Gab', 'Fit box Gym', 5, 'https://www.facebook.com/fitboxsmouha', 'images/fit box.jpg', 'smouha'),
(11, 'El-Fardous, Ezbet Saad, Sidi G', 'Healthy House Gym', 3.9, 'https://www.facebook.com/HealthyhouseGYM', 'images/healthy house gym.png', 'smouha'),
(12, 'Abd El-Salam Aref, San Stifano', 'Olympia Gym', 4.7, 'https://www.goldsgym.com/', 'images/golds gym.png', 'sanstifano'),
(13, ' 213 Abd El-Salam Aref, San St', 'Leader Gym', 4.1, 'https://www.facebook.com/LeaderGymAlex', 'images/leader.png', 'sanstifano'),
(14, '1 Mortada Basha, Al Aqesa WA B', 'Rock Gym', 3.5, 'https://www.facebook.com/Rock.gym.alex/', 'images/ROCK GYM.jpg', 'gleem'),
(15, ' 1 Al Mesak, As Soyouf Bahri, ', 'Premiere Gym', 4.1, 'https://www.facebook.com/premieregymalex', 'images/premiere gym.png', 'louran'),
(16, '22 Shaarawy, San Stifano, Qism', 'United gym', 4.5, 'https://www.facebook.com/UNITED.GYM', 'images/united game.jpg', 'sanstifano'),
(17, '23 El eqbal St. Louran, Alex. ', 'Hard rock gym', 4.5, 'https://www.facebook.com/HARD.rockgym12', 'images/hard rock.jpg', 'louran'),
(18, '207 Port Said Street, Sidi Gab', 'Blue Gym', 3.8, '', 'images/blue gym.png', 'sidigaber'),
(19, '164 El-Gaish Rd, Sidi Gabir, S', 'Blue wave Gym', 3.7, 'https://www.facebook.com/BlueWaveClub', 'images/blue wave gym.png', 'sidigaber'),
(20, 'Abou Quer الرياضة, Sidi Gabir,', 'sporting club gym', 4.6, '', 'images/sporting club gym.png', 'sidigaber'),
(21, ' Sidi Gabir, Sidi Gaber, Alexa', 'Lift Gym ', 4.3, 'https://www.facebook.com/lift.gym.eg', 'images/lift gym.png', 'sidigaber'),
(22, ' El-Gaish Rd, Mustafa Kamel WA', 'Bear Gym', 4.5, 'https://www.facebook.com/BearGym11', 'images/Bear gym.png', 'sidigaber'),
(23, 'الاسكندرية, كامب شيزار، Alexan', 'unlimited gym', 4.2, 'https://www.facebook.com/unlimited.gym', 'unlimited gym.png', 'sidigaber'),
(24, 'ش 17 متفرع من ش جمال عبد الناص', 'pinky gym', 4.1, 'https://www.facebook.com/pinkygymalex', 'pinky gym.png', 'montaza'),
(25, 'Sidi Beshr Qebli, Qesm Al Mont', 'lions gym', 4.8, 'https://www.facebook.com/lions.gym19', 'lions gym.png', 'montaza'),
(26, '65 Mohammed Al Srafai, Sidi Be', 'sparta gym ', 4.2, 'https://www.facebook.com/SpartaGymEgypt', 'sparta gym.png', 'montaza'),
(27, '54 El Serafy st، Sidi Beshr Ba', 'omega gym', 4.2, 'https://www.facebook.com/Omega.Gym.Fitne', 'omega gym.png', 'montaza'),
(28, 'Bernice patisserie, El essawy ', 'your gym', 4, '', 'your gym.png', 'montaza'),
(29, '74 Gamal Abd El-Nasir Rd, Sidi', 'dragon gym', 4.1, 'https://www.facebook.com/dragongymm', 'dragon gym.png', 'montaza'),
(30, '10 Abdel Hamid Al Abdi, Flemin', 'doctor gym', 5, 'https://www.facebook.com/doctorrrrrrr', 'doctor gym.png', 'gleem'),
(31, ' 25 Sant Giyn, Abu an Nawatir,', 'planet gym', 4.3, '', 'planet gym.png', 'sidigaber'),
(32, ' Abou Quer, لوران، First Al Ra', 'fit plus gym', 4.3, 'https://www.facebook.com/fitplusgym/', 'fitplus gym.png', 'sanstifano'),
(33, '23 amir elbehar street, Kafr A', 'fit station', 5, 'https://www.facebook.com/FitStationEgypt', 'fit station.png', 'sidigaber'),
(34, '19 Khaleel El-Khayat Basha, Ab', 'shape up gym', 4.7, 'https://www.facebook.com/shape.up.gym.al', 'shape up gym.png', 'sidigabr'),
(35, ' Al Bab Al Gadid WA Mansha, Qe', 'platinum gym', 3.9, 'https://www.facebook.com/platinumgym10/', 'platinum gym.jpg', 'moharrambeik'),
(36, 'شارع المحكمة على بعد ٣٠٠م من ش', 'royal gym', 4.5, 'https://www.facebook.com/royalgym.moharr', 'royal gym.jpg', 'moharrambeik'),
(37, 'El Kataay street Moharm bek Al', 'elwazir gym', 4, 'https://www.facebook.com/ELwazir-Gym-233', 'elwazir gym.png', 'moharrambeik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gyms`
--
ALTER TABLE `gyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
