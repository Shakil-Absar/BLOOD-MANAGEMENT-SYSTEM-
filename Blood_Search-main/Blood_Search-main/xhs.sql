-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 11:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(255) NOT NULL,
  `patient` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `upazilla` varchar(255) NOT NULL,
  `rbg` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `hadress` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `why` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `patient`, `district`, `upazilla`, `rbg`, `quantity`, `mobile`, `time`, `hadress`, `ward`, `bed`, `floor`, `why`, `date`) VALUES
(1, 'imran khan', 'Bhola', 'Bhola Sadar', 'B+', '1', '01972628299', '23 september, 4.00pm', 'bhola sadar hospital', '3', 'none', '2', 'thallasemia', ''),
(2, 'Hydra Dynamo', 'PIROJPUR', 'sadar', 'B-', '3', '01929999999', '4.30pm 23 sep, 2020', 'pirojpur sadar', '1', 'none', '1', 'Operation', ''),
(3, 'asfaq tonmoy', 'MYMENSINGH', 'sadar', 'O+', '1', '01739722722', '13/04/1997', 'sodesh hospital', '1', '2', '3', 'musolmani', ''),
(4, 'Pappu Ahmed', 'Barisal', 'sadar', 'B+', '5', '01987377373', '7am 10/10/2020', 'barishal sadar hospital', '1', '1', '1', 'dental operation', ''),
(5, 'talha', 'PIROJPUR', 'sadar', 'AB+', '4', '01854335567', '8pm 10/10/2020', 'Pirojpur sadar hospital', '34', '5', '9', 'cancer', ''),
(6, 'Partho', 'MYMENSINGH', 'sadar', 'B+', '2', '01930975622', '9 dec, 4pm', 'Mymensingh mc', '2', '2', '5', 'accident', ''),
(7, 'Shakil', 'PIROJPUR', 'sadar', 'B-', '3', '01999223109', '4pm 2/9/2021', 'xyz hospital', '12', '1', '1', 'emnie', ''),
(8, 'shakil', 'PATUAKHALI', 'sadar', 'O+', '1', '01821831988', '4pm 9/9/21', 'xyz', '1', '1', '1', '111', '');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `age`, `email`, `mobile`, `area`, `bg`) VALUES
(1, 'a', 1, 'a@b', '1', 'FARIDPUR', 'AB+'),
(2, 'b', 111, 'a@s', '1111111111', 'DHAKA', 'AB-'),
(3, 'viper', 20, 'd@s', '1234', 'DHAKA', 'AB+'),
(4, 'Akil', 22, 'talha@gmail.com', '01346987656', 'DHAKA', 'AB+'),
(5, 'Venom', 23, 'ndjn@b', '12345', 'SATKHIRA', 'O+'),
(6, 'Boyan', 29, 'boyan@boyan.com', '01723213271', 'MYMENSINGH', 'O+'),
(7, 'Partho', 29, 'partho@gmail.com', '01937454566', 'MYMENSINGH', 'B+'),
(8, 'Tamim', 33, 'tamim@gmail.com', '10888176262', 'MADARIPUR', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `ereg`
--

CREATE TABLE `ereg` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ereg`
--

INSERT INTO `ereg` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`, `token`, `status`) VALUES
(1, 'a', 'a@b', 'a', '$2y$10$I2Yw2IFrYY0p3H..qBLEAewNCx7R50Thq6wmR/kuBg0jbkJRM3lrC', '$2y$10$twcLc4mTxpy8TIO5rcva/O6ruyIxJftCTSTzs/s6VrGmigBWHv84C', '', ''),
(2, 'b@b', 'b@b', 'b', '$2y$10$2LZnuij7DhcUkxB7JWzLwO5hjEssurAm0hh0UNICi8mCkFl849zgW', '$2y$10$Qx0O9Fg/Ssj4mUseq6UDm.Aqel/rkztwEW.jhpHiAxozwFL7iY15.', 'a2153e5bfd7111b2fb03dc53a32093', 'inactive'),
(14, 'q', 'arnabhasan2@gmail.com', '1', '$2y$10$UtxdUGXj70nco3wFVdtptuMZxGOQMU2UF5eU6WLvSz2WW2xggKcSa', '$2y$10$sMuhu2FXLOgHYRmF18n9K.smbJjZKrAO8Lxl7gUBfwaIclVd7PyiS', 'fb4cc930bdfffa7f87d98df848fe16', 'active'),
(15, 'viperr', 'arnobb908@gmail.com', '1', '$2y$10$Ia14SDWEtLtwrdKn2lFUdO050d4.YU494JaW1PJmtu0XAxhus/Ejy', '$2y$10$/wzyoqzPYklbJDQE3FLDBOyOc8pU4DDp0EhzDgcStM6BqVqiSPIqm', 'a743fc1ab908b7664b0d2cec3d2659', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `errr`
--

CREATE TABLE `errr` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `cpassword` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(255) NOT NULL,
  `name` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `occupation` int(11) NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photocontest`
--

CREATE TABLE `photocontest` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photocontest`
--

INSERT INTO `photocontest` (`id`, `name`, `age`, `mobile`, `email`, `occupation`, `photo`) VALUES
(1, '', 0, '', '', '', 'upload/vip.png'),
(2, '', 0, '', '', '', 'upload/bg1.jpg'),
(3, '', 0, '', '', '', 'upload/Screenshot (41).png'),
(4, 'Mystic Viper', 22, '01739722722', 'arnabhasan2@gmail.com', 'student', 'upload/Screenshot (85).png'),
(5, 'q', 1, '1', 'q@q1', '1', 'upload/Screenshot (45).png'),
(6, '1', 0, '', '', '', 'upload/Screenshot (41).png'),
(7, '1', 0, '', '', '', 'upload/Screenshot (17).png'),
(8, '', 0, '', '', '', 'upload/Screenshot (28).png'),
(9, '', 0, '', '', '', 'upload/e2.jpg'),
(10, '', 0, '', '', 'aaaaaaaaaaaaaaa', 'upload/e1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photocontest1`
--

CREATE TABLE `photocontest1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`) VALUES
(1, 'a', 'jhjhb@a', 'a', '$2y$10$keGBjjxiymbQxnGveH0jD.kLlUFpGxgNMDqu1tYSc1WYepZerKeyu', '$2y$10$TGp77fAUdca0tXxf.Xq7buYO7ZBmHLcXy10vEjV3qT84VacRUab8m'),
(2, '1', 'arnob@viper.com', '1234123', '$2y$10$YDT3Jdqc.YkeSZJVXzPnrOeaRbiRc6u4W1ZyT5aey7LAZqm2UPsai', '$2y$10$YLC2j02FyZZy69jzQJu6SODjNTsufZ02wT3JackMFT7Q8XhlIHvY6'),
(3, 'Arnob', 'Arnob@ar', '01987625', '$2y$10$IgOqojffdIRMla53PG2ngeFUrV4aVlUwBFe0spuycukmiyYbAsmL6', '$2y$10$YxHFFlAfubuHhfB6YVK6ieuU3Zy6P2NU7zC4i.JxsHGtGiUwEFLQ6'),
(4, 'arnob', 'e@e', '1', '$2y$10$YfEBFRsVRWkAPQ0KvLscNO6aJDyxAqrF3QIYtjpt3U1ZEdgEs.uCi', '$2y$10$5jWOMKEHi6H6Mc4a2OSlg.ai457TjxTsvZBmudknyz4OeUZ6uGtSG'),
(5, 'a', 'a@q', 'q', '$2y$10$qgCigs4JjfL3z.Vk6BRMb.FzeCfApt.WuE1vi5WN9rPX9wFjWftSm', '$2y$10$sD7WgAEebsCwtG6nFl/xO.dFIlz6H7afpmfC787ovR0DfZbW6/EXC'),
(6, 'Talha Bin', 'Akil@gmail.com', '01987666666', '$2y$10$HGsCEPIh.M65vfqzdeeoNOK60p7OU8m2gsOsMfV4Zl0xMZ68tE822', '$2y$10$ieTsU623BpaH1roWLRWma.zoxXXIdKz75equLwZFiesiCxzQ.dJ4K'),
(7, 'Abid Hasan', 'arnob@gmail.com', '01991991', '$2y$10$YWb3bQvtNYCotAV6Dx5F5e51ounJdggXgrbF9o4BIZ77YpmBbT6/6', '$2y$10$jN82ypGGhJ/0GR53SY/THOjSR17YBzyTzduk48Ew6qr9nunwHjT8u'),
(8, 'qwer', 'o@o', '12334', '$2y$10$Pzrwu5L6BUqxQGg5W1oPneAl6k6Sni/5dC1Q/Tt2MI8IJzGqkzJZ6', '$2y$10$xl59Q5mdQrOi.9cwPKihQeplbED71aTbY9PdnAJhYcHl/Raxms/Hq'),
(9, 'a', 'a@aaa', '1', '$2y$10$/bBH7522PbIWHF21kaEYC.I.PJgL4l7IKROtwPtr2sKXj2gYVEozq', '$2y$10$CYBHG3AFUfNktPNEf2mcoOhJyw8GdaM.7ojxlPLdYJadVAVzh63S6'),
(10, 'viper', 'a@b', '1', '$2y$10$RlfEn5xofRD8J53nN1Gf9uauPhCQSxJuPOTXWkcZtpW48jRFV0BP.', '$2y$10$HFSjkmyVmqajoz3gvCFLq.L.qi9yTeNc4epJt8vkzoZpnOeFSB9fi'),
(11, 'boyan', 'boyan@boyan.edu', '01739722722', '$2y$10$D0i51TZJdpI45JS963CI6Oh2CSLPNUgDONA6V7EaaoUKyAHSRinYG', '$2y$10$YV.iop9EIDA6C4wmL1ovpusJOhKzcqYm17LthdrS2TaJLMLAY5Odu'),
(13, 'ab', 'arnabhasan2@gmail.com', '12', '$2y$10$AbvULyGk5CLn20ftGcLYoOHldaqYaLgYNCm3gwcOsFqHkXvbO/W1y', '$2y$10$W4NbiQSdJaI3a5/ZisYSn.OCBjTHkcQISwqnY3WG0ZVHSsnfZpScO'),
(14, '1', 'a@bbb', '1', '$2y$10$nsxEdiZ1qkdSlZOCzTENuesal509F8To9MuUUPQb9SKkFhzwrTERO', '$2y$10$U2.HcAXHTUElaWXPC2e/AuujmEXXWegfhRPoipCQTw7uyHWfZr8m2'),
(15, 'qwer', 'q@q', '1', '$2y$10$BWBBYzq.z0B14zevEzYgY.y0w9s0Fig/oKiky1XhIaWF8KURNhEV.', '$2y$10$8dj3IrsTorQRCb8ht1u0mOcz1vHtftynpUlyJ9WY1FeytDY7W9iaO'),
(16, 'shakil', 'shakil@gmail.com', '11', '$2y$10$BKhsfo8NqdLKDEfkka5X9uKt90.iF1GMf7pCmSY.4TIcwrO93pfcS', '$2y$10$V1QLENuluqi40j6FSnxYluL8uwwhz3ZgoOscxsnFm0tX.VAaHRUWS'),
(17, 'm', 'm@m', '1', '$2y$10$7KzV6.Qida1JKHulDV2/W.Q3PQggxUTutJ.h6wecISd/khDKFPdN.', '$2y$10$2kDIyGvLyNeVJPjz.VFEv..mjUxZhlhIssueM3qAbAPuiEOCDVc8W'),
(18, 'mush', 'mush@gmail.com', '1', '$2y$10$HK28scLgDNuUAIBcxZeRz.i568WOlYESildO9YrjWmWXBPTgOG/Je', '$2y$10$.yGl358rlYfz3q6OhOzJ/e6qMPn0vBbUr28CchiesB8TWSuGxTIWq'),
(19, 'AshshifatulAnNUr', 'easy@gmail.com', '01987162626', '$2y$10$/SjYKGn7xTmvFKyWoSfhC.gCOGXgpT3pdfVx95n2RnzOB4hBEAS/a', '$2y$10$4.GYB7ScncO93UBCWtnNCeHa./BgUQaHGMEgsHld/G7szYbtjIx2e');

-- --------------------------------------------------------

--
-- Table structure for table `uploadrac`
--

CREATE TABLE `uploadrac` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `di` varchar(255) NOT NULL,
  `accessories` varchar(255) NOT NULL,
  `earlier_works` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ereg`
--
ALTER TABLE `ereg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photocontest`
--
ALTER TABLE `photocontest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photocontest1`
--
ALTER TABLE `photocontest1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadrac`
--
ALTER TABLE `uploadrac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ereg`
--
ALTER TABLE `ereg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photocontest`
--
ALTER TABLE `photocontest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `photocontest1`
--
ALTER TABLE `photocontest1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `uploadrac`
--
ALTER TABLE `uploadrac`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
