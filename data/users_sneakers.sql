-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 04:15 AM
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
-- Database: `sneakers`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userFullName` varchar(100) DEFAULT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `userEmail` varchar(150) DEFAULT NULL,
  `userPassword` varchar(100) DEFAULT NULL,
  `userPhone` varchar(25) DEFAULT NULL,
  `userAddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userFullName`, `userName`, `userEmail`, `userPassword`, `userPhone`, `userAddress`) VALUES
(1, 'Lucas Corradini', 'Hagston', 'lucas.corradini.2003@gmail.com', '1013', '871-443-1716', '12079 Pine View Plaza'),
(2, 'Tommie', 'Bryett', 'tbryett1@utexas.edu', '$2a$04$9S.l4iRPrQejnhdR1XVPpOJPtUg56nZG2Bqh27vYIWEaAOSSkLUQu', '425-850-3412', '94675 Longview Place'),
(3, 'Moselle', 'Spurrett', 'mspurrett2@drupal.org', '$2a$04$mInU4B7Ff1u7bTNIaJebau0HC3Y7VqI9qBqQ.WU3NMNEV5f4HocQy', '374-127-6875', '36828 Homewood Alley'),
(4, 'Allan', 'Domanek', 'adomanek3@dot.gov', '$2a$04$QVuiyy5ntfEnAZ/YptaS9uFjCgnpOBNwHZlED5TQ3YHjdn7tA7jde', '856-816-1868', '363 Hooker Terrace'),
(5, 'Hans', 'Taylor', 'htaylor4@smh.com.au', '$2a$04$3cFxdfnZxx/kXwrC2NvpqeZpgaHStqPN/7.aDzeWU9Fo6Q5U2w0iK', '127-753-7090', '17 Stang Avenue'),
(6, 'D\'arcy', 'Phillipp', 'dphillipp5@spotify.com', '$2a$04$6mtVLPsQ/uqk3pGpdI.yyePWJJ9GS5Q3m5.sZqkxnzkBYpa4F95ZW', '129-206-9261', '53457 Northridge Place'),
(7, 'Rona', 'Duran', 'rduran6@java.com', '$2a$04$YL91w1SrnqpVDupxwy5E0e6Mqczxg6CZXtzD82Uzw9cTUAPN9OwVy', '330-572-6505', '6 Mendota Drive'),
(8, 'Venus', 'McCritchie', 'vmccritchie7@timesonline.co.uk', '$2a$04$4ezIHRSXHJz..uO.QfwiYetdV0OVIIth6lSQyymjZbV1P5fiSvtmK', '439-195-2322', '9909 Dawn Way'),
(9, 'Linoel', 'Hasker', 'lhasker8@geocities.com', '$2a$04$JETb/oVZm53oqk38ru2C1uRHJrZj5ALlD7eBe7OwdImdzEZhsmrvm', '377-374-8001', '15 Everett Crossing'),
(10, 'Leonie', 'Instock', 'linstock9@1und1.de', '$2a$04$OTd5feTD8sNxeTUs52lIy.4.LsvOmNWw3jTDWs/Ho/HGZJeNy3pY.', '469-545-0846', '1 Kropf Road'),
(11, 'Grethel', 'Lanfranchi', 'glanfranchia@nhs.uk', '$2a$04$QGsMQSFH6YVbuZBgX7QxOOayBuIEie1gWokdlQrl/RaHF8zApG.TK', '764-215-0587', '26473 Waywood Park'),
(12, 'Weylin', 'Tattoo', 'wtattoob@businessinsider.com', '$2a$04$DAaaHIoFQyk3WJab.pX2lupKpNvXvpGdYNFvofLIDMXGoFSdubJXe', '737-510-0748', '89517 Hollow Ridge Parkway'),
(13, 'Jodie', 'Boxhall', 'jboxhallc@angelfire.com', '$2a$04$frjwET49wUrUnoph.A6f2OT3rWBSi8EWzARIU9DqLMcNQnEUsd3M.', '381-208-4174', '69095 Waxwing Crossing'),
(14, 'Kale', 'Fernando', 'kfernandod@disqus.com', '$2a$04$ZtHam8bnCP4w9yLBjVm8v.MYNMR0InONaf1r/bno1v06Bq0F5hfl6', '334-633-6815', '1 5th Trail'),
(15, 'Davidson', 'Duxbury', 'dduxburye@dailymail.co.uk', '$2a$04$jkLYCRwA9r8S6NbjRUyleO3uhw1yufejAezvOvxIoUsVCIFf8hTsW', '927-950-2478', '635 Memorial Plaza'),
(16, 'Garrick', 'Yurchenko', 'gyurchenkof@ca.gov', '$2a$04$U9sCpvOcQBVQXWF.rH4t0eW/QuDqKpJEXSygd3SDmZH9.J5srwFpu', '473-342-3510', '71711 Pankratz Court'),
(17, 'Jae', 'Haylock', 'jhaylockg@paypal.com', '$2a$04$iSaOLW/mHiDdCv/f3hLxSuM4LUoIc0vfgiiz6ZUxHEHuviplnuZde', '901-962-4761', '41600 Browning Crossing'),
(18, 'Erasmus', 'Spittall', 'espittallh@prweb.com', '$2a$04$nZlCvCBIZjmvL57bkk1qrOP/.KSJ39AQFadDAknwwph1l80vKpC8i', '118-672-5803', '19909 Stone Corner Hill'),
(19, 'Ansley', 'Merrett', 'amerretti@apple.com', '$2a$04$YtGbZ2Cza3WN7Y1ZQvdEnu0IB5QdHvKUwtAC0t8aErm2yNDO346Ai', '730-533-7678', '063 Debs Trail'),
(20, 'Winona', 'Simpkiss', 'wsimpkissj@freewebs.com', '$2a$04$8oRZLo3TaX6kF/vfj9s9gObhMfNB9x.de2x8ZxSHnwVNUthCqg1ta', '183-719-8021', '2 Rowland Pass'),
(21, 'Kris', 'Asel', 'kaselk@mit.edu', '$2a$04$wJxEwqs2I71pDbshU7nrceJHBYoxEVF7fQUSGoDV61Y5lvdhe7wam', '712-652-4157', '05 Orin Park'),
(22, 'Arabele', 'Cooley', 'acooleyl@reddit.com', '$2a$04$RXORc.CpUZkwM5eEawkyF.I2U0bnZ4bnsmrlwUqbyVZQTR0fG29hG', '202-461-6966', '055 Bluestem Way'),
(23, 'Maggie', 'Verma', 'mvermam@cloudflare.com', '$2a$04$eDLxt0cIFcjsUEYmTJ9GFOb41LO0tDW51y2BKWOoCL9Jw4JH053pO', '537-573-7026', '13353 Brickson Park Hill'),
(24, 'Constancy', 'Duckett', 'cduckettn@state.tx.us', '$2a$04$oPTqku2FOv7NCfl8PQX2NOmEApdAaEUusMF7f48ntkkLkK7hjaa2.', '570-189-0282', '9 Vernon Terrace'),
(25, 'Ginevra', 'Sketcher', 'gsketchero@mac.com', '$2a$04$CVZrgIoiddVmk6/jySHF6.5SmRgYwG3c/Ur5PF/Rw61PHRlI.wcom', '705-241-1762', '96446 Lindbergh Court'),
(26, 'Pedro ', NULL, 'pedro@gmail.com', '1013', '99999999', 'Granville st'),
(64, 'Carol', NULL, 'caroline@gmail.com', '1013', '99999999', 'av presidente joao goulart'),
(66, '', NULL, '', '', '', ''),
(67, '', NULL, '', '', '', ''),
(68, '', NULL, '', '', '', ''),
(69, '', NULL, '', '', '', ''),
(70, '', NULL, '', '', '', ''),
(71, '', NULL, '', '', '', ''),
(72, '', NULL, '', '', '', ''),
(73, '', NULL, '', '', '', ''),
(74, '', NULL, '', '', '', ''),
(75, '', NULL, '', '', '', ''),
(76, '', NULL, '', '', '', ''),
(77, '', NULL, '', '', '', ''),
(78, '', NULL, '', '', '', ''),
(79, '', NULL, '', '', '', ''),
(80, '', NULL, '', '', '', ''),
(81, '', NULL, '', '', '', ''),
(82, '', NULL, '', '', '', ''),
(83, '', NULL, '', '', '', ''),
(84, '', NULL, '', '', '', ''),
(85, '', NULL, '', '', '', ''),
(86, '', NULL, '', '', '', ''),
(87, '', NULL, '', '', '', ''),
(88, '', NULL, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
