-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Hazırlanma Vaxtı: 01 Okt, 2020 saat 17:02
-- Server versiyası: 5.6.38
-- PHP Versiyası: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `apple`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `istifadeciler`
--

CREATE TABLE `istifadeciler` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(200) NOT NULL,
  `nomre` int(15) NOT NULL,
  `login` varchar(200) NOT NULL,
  `sifre` varchar(200) NOT NULL,
  `balans` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `istifadeciler`
--

INSERT INTO `istifadeciler` (`id`, `ad_soyad`, `nomre`, `login`, `sifre`, `balans`) VALUES
(5, 'F S', 1111, 'fs', '12', 0),
(6, 'Fs1', 94964, 'Fs1', '12355', 0),
(4, 'Əkbər Quliyev', 506574916, 'admin', '12345', 1),
(8, 'Mıkı', 10119, 'mıkı 0', '12636', 1),
(9, 'F S', 1111, 'fs', '12', 0),
(10, 'Fs1', 94964, 'Fs1', '12355', 0),
(11, 'Əkbər Quliyev', 506574916, 'admin', '12345', 1),
(12, 'H28', 664, 'Gshsh', '6171', 0),
(13, 'Hehhs', 64646, 'Gdhhs', 'Hshhs', 0),
(14, 'F S', 1111, 'fs', '12', 0),
(15, 'Fs1', 94964, 'Fs1', '12355', 0),
(16, 'Əkbər Quliyev', 506574916, 'admin', '12345', 1),
(17, 'H28', 664, 'Gshsh', '6171', 0),
(18, 'Hehhs', 64646, 'Gdhhs', 'Hshhs', 0),
(19, 'F S', 1111, 'fs', '12', 0),
(20, 'Fs1', 94964, 'Fs1', '12355', 0),
(21, 'Əkbər Quliyev', 506574916, 'admin', '12345', 1),
(22, 'H28', 664, 'Gshsh', '6171', 0),
(23, 'Hehhs 8', 64646, 'Gdhhs', 'Hshhs', 0);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `xidmetler`
--

CREATE TABLE `xidmetler` (
  `id` int(11) NOT NULL,
  `model` varchar(200) NOT NULL,
  `musterini_gonderen` varchar(200) NOT NULL,
  `problem` text NOT NULL,
  `qiymet` varchar(200) NOT NULL,
  `elaqe` varchar(200) NOT NULL,
  `tarix` date NOT NULL,
  `status` int(1) NOT NULL,
  `maya_deyeri` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `xidmetler`
--

INSERT INTO `xidmetler` (`id`, `model`, `musterini_gonderen`, `problem`, `qiymet`, `elaqe`, `tarix`, `status`, `maya_deyeri`) VALUES
(1, 'İphone 5s', 'Ekber Quliyev', 'Batereya', '18', '0504441313', '2020-09-23', 1, 6),
(2, 'Simens', 'Ekber Quliyev', 'Ekran', '70', '0504441313', '2020-09-23', 1, 38),
(3, 'İphone 9', 'Ekber Quliyev', 'Yuuu', '122', '06345', '2020-09-24', 1, 45),
(4, 'Simens', 'No name', 'Ekran', '16', '782837', '2020-09-25', 1, 10),
(5, 'Simens 2', 'No name', 'Ekran', '16', '782837', '2020-09-25', 1, 10),
(6, 'İphone 5s', 'Ekber Quliyev', 'Batereya', '18', '0504441313', '2020-02-23', 1, 6),
(7, 'Simens', 'Ekber Quliyev', 'Ekran', '70', '0504441313', '2020-01-23', 1, 38),
(8, 'İphone 9', 'Ekber Quliyev', 'Yuuu', '122', '06345', '2010-09-24', 1, 45),
(9, 'Simens', 'No name', 'Ekran', '16', '782837', '2020-04-25', 1, 10),
(10, 'Simens 2', 'No name', 'Ekran', '16', '782837', '2020-01-25', 1, 10),
(11, 'İphone 5s', 'Ekber Quliyev', 'Batereya', '18', '0504441313', '2009-09-23', 1, 6),
(12, 'Simens', 'Ekber Quliyev', 'Ekran', '70', '0504441313', '2002-09-23', 1, 38),
(13, 'İphone 9', 'Ekber Quliyev', 'Yuuu', '122', '06345', '2002-05-24', 1, 45),
(14, 'Simens', 'No name', 'Ekran', '16', '782837', '2021-03-25', 1, 10),
(15, 'Simens 2', 'No name', 'Ekran', '16', '782837', '2003-09-25', 1, 10),
(16, 'İphone 5s', 'Ekber Quliyev', 'Batereya', '18', '0504441313', '2004-02-23', 1, 6),
(17, 'Simens', 'Ekber Quliyev', 'Ekran', '70', '0504441313', '2020-01-23', 1, 38),
(18, 'İphone 9', 'Ekber Quliyev', 'Yuuu', '122', '06345', '2010-09-24', 1, 45),
(19, 'Simens', 'No name', 'Ekran', '16', '782837', '2020-04-25', 1, 10),
(20, 'Simens 2', 'No name', 'Ekran', '16', '782837', '2020-01-25', 1, 10),
(21, 'Xiomi', 'No name', 'Ekran', '22', '64783847', '2020-09-30', 1, 10),
(22, 'Hhh', 'No name', 'Ftt', '22', '556', '2020-09-30', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `istifadeciler`
--
ALTER TABLE `istifadeciler`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `xidmetler`
--
ALTER TABLE `xidmetler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `istifadeciler`
--
ALTER TABLE `istifadeciler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Cədvəl üçün AUTO_INCREMENT `xidmetler`
--
ALTER TABLE `xidmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
