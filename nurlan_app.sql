-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Hazırlanma Vaxtı: 04 Okt, 2020 saat 19:11
-- Server versiyası: 5.7.30
-- PHP Versiyası: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `nurlan_app`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `istifadeciler`
--

CREATE TABLE IF NOT EXISTS `istifadeciler` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(200) NOT NULL,
  `nomre` int(15) NOT NULL,
  `login` varchar(200) NOT NULL,
  `sifre` varchar(200) NOT NULL,
  `balans` float NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `istifadeciler`
--

INSERT INTO `istifadeciler` (`id`, `ad_soyad`, `nomre`, `login`, `sifre`, `balans`) VALUES
(1, 'Şamilov Nurlan', 702500251, 'admin', '6awzhe0', 6.36),
(4, 'Nermin Kerimzade', 556984234, 'nermin_002', '12345', 2),
(5, 'Miri Babaverdiyev', 503552252, 'Miri_001', '12345', 5),
(6, 'Aytac Gulmanova', 558488559, 'aytac_003', '12345', 2),
(7, 'Aytac Abdinli', 554521213, 'aytac_004', '12345', 2),
(9, 'Salahov Etibar', 777555313, 'Etibar_006', '12345', 0);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `qebzler`
--

CREATE TABLE IF NOT EXISTS `qebzler` (
  `id` int(11) NOT NULL,
  `mebleq` varchar(200) NOT NULL,
  `kime` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tarix` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Sxemi çıxarılan cedvel `qebzler`
--

INSERT INTO `qebzler` (`id`, `mebleq`, `kime`, `tarix`) VALUES
(1, '1', '?amilov Nurlan', '2020-10-04'),
(2, '1', 'Şamilov Nurlan', '2020-10-04');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `xidmetler`
--

CREATE TABLE IF NOT EXISTS `xidmetler` (
  `id` int(11) NOT NULL,
  `model` varchar(200) NOT NULL,
  `musterini_gonderen` varchar(200) NOT NULL,
  `problem` text NOT NULL,
  `qiymet` varchar(200) NOT NULL,
  `elaqe` varchar(200) NOT NULL,
  `tarix` date NOT NULL,
  `status` int(1) NOT NULL,
  `maya_deyeri` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `xidmetler`
--

INSERT INTO `xidmetler` (`id`, `model`, `musterini_gonderen`, `problem`, `qiymet`, `elaqe`, `tarix`, `status`, `maya_deyeri`) VALUES
(2, 'iPhone 5s', '0', 'batareka', '15', '055555555', '2020-06-18', 2, 0),
(3, 'iphone 6s', '0', 'modem', '50', '0503025060', '2020-06-19', 2, 0),
(4, 'iphone x', '0', 'ekran', '140', '0552844494', '2020-06-20', 1, 0),
(5, 'IPHONE 6', '0', 'BATAREYA', '18', '0508408293', '2020-06-20', 1, 0),
(6, 'iPhone 6', '0', 'zaradka yeri', '5', '0508408293', '2020-06-20', 2, 0),
(7, 'iPhone 5s', '0', 'Ekran,Korpus', '60', '0556005606', '2020-07-04', 1, 0),
(8, 'iPhone 5s', '0', 'Ekran', '35', '0708188928', '2020-07-04', 1, 0),
(9, 'iPhone 5s', '0', 'Arxa suse', '13', '0708410348', '2020-07-04', 1, 0),
(11, 'iPhone 5', '0', 'Ekran', '20', '0703037271', '2020-08-05', 1, 0),
(12, 'iPhone 6plus', '0', 'Ekran', '45', '0554093672', '2020-08-12', 1, 0),
(13, 'iPhone 8', '0', 'Ekran', '55', '0775788800', '2020-08-12', 1, 0),
(14, 'iPhone ', '0', 'Batarya', '22', '0503080094', '2020-08-12', 1, 0),
(15, 'iPhone X', '0', 'Qabag Kamera', '55', '0773111699', '2020-08-12', 1, 0),
(16, 'iPhone 5s', '0', 'Batarya,Ekan', '45', '0506361287', '2020-08-12', 1, 0),
(17, 'iPad Pro', '0', 'Sensor', '700', '0502552220', '2020-08-12', 1, 0),
(18, 'iPad 2', '0', 'Sensor', '20', '0555279999', '2020-08-12', 1, 0),
(19, 'iPhone 7', '0', 'ram,pusk', '0', '0604001414', '2020-08-12', 2, 0),
(20, 'iPhone 6s', '0', 'Batareka', '23', '0516934493', '2020-08-17', 1, 0),
(21, 'iPhone X ', '0', 'Ekran', '145', '0709761998', '2020-08-20', 1, 0),
(22, 'IPhone', '0', 'plata', '0', '0993998586', '2020-08-24', 1, 0),
(23, 'iPhone 6', '0', 'ekran batareka', '51', '0552135012', '2020-08-24', 1, 0),
(24, 'iPhone 7 ', '0', 'Suse', '40', '0706640000', '2020-09-01', 1, 0),
(25, 'iPhone X', '0', 'Batareka', '40', '0555743701', '2020-09-03', 1, 0),
(26, 'iPhone 7plus', '0', 'Ekran batareka', '85', '0552822098', '2020-09-04', 1, 0),
(27, 'iPhone 6', '0', 'ekran', '30', '0505054945', '2020-09-04', 1, 0),
(42, 'iPhone 8', 'Miri', 'Korpus', '60', '0557788272', '2020-09-15', 1, 30),
(38, 'iPhone 7 ', 'Guntekin', 'Ekran,Korpus,Zaradnoy', '90', '0505289686', '2020-09-11', 1, 67),
(36, 'iPhone X', 'Nurlan', 'Batareka', '45', '0507918291', '2020-09-07', 1, 26),
(39, 'iPhone 6', 'Guntekin', 'Ekran', '50', '0555633131', '2020-09-12', 1, 32),
(41, 'iPhone 7', 'Miri', 'batareya,kamera,ekran', '110', '0706800000', '2020-09-15', 1, 80),
(43, 'Samsung 7102', 'Miri', 'ekran', '30', '0502855535', '2020-09-16', 1, 15),
(44, 'iPhone 6', 'Miri', 'batareya,set', '40', '0552786747', '2020-09-16', 1, 11),
(45, 'iPhone 7', 'Miri', 'batareya', '28', '0702881710', '2020-09-16', 1, 13),
(46, 'iPhone 7', 'Miri', 'ekran', '50', '0702881710', '2020-09-17', 1, 30),
(47, 'iPhone 5', 'Miri', 'ekran', '25', '0703000815', '2020-09-21', 1, 19),
(48, 'iPhone 5S', 'Nermin4234', 'ekran,knopka,kamera', '50', '0555771875', '2020-09-21', 1, 19),
(49, 'iPhone 6', 'Obyekt', 'ekran', '30', '0552135012', '2020-09-21', 1, 18),
(50, 'iPhone 6S', 'Nermin4234', 'batareya', '25', '0553840022', '2020-09-22', 1, 11),
(51, 'iPhone 6s', 'Nermin4234', 'Ekran Korpus Batareka', '110', '0553178833', '2020-09-22', 1, 60),
(52, 'iPhone 7 plus', 'Miri', 'Ekran', '55', '0505054945', '2020-09-22', 1, 31),
(53, 'iPhone 8 plus', 'Miri', 'ekran', '55', '0507562100', '2020-09-23', 1, 31),
(54, 'iPhone 6', 'Obyekt', 'Ekran', '30', '0513100101', '2020-09-30', 1, 24),
(59, 'iPhone 6', 'Miri Babaverdiyev', 'Ekran', '45', '0706546463', '2020-10-01', 1, 23),
(61, 'iPhone 8', 'Şamilov Nurlan', 'Kamera,suse', '93', '0502203968', '2020-10-01', 1, 65),
(62, 'iPhone 6', 'Miri Babaverdiyev', 'batareya', '25', '0706546463', '2020-10-02', 1, 11),
(63, 'iPhone 8 ', 'Şamilov Nurlan', 'Ekran', '65', '0703336931', '2020-10-03', 1, 36);

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `istifadeciler`
--
ALTER TABLE `istifadeciler`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `qebzler`
--
ALTER TABLE `qebzler`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Cədvəl üçün AUTO_INCREMENT `qebzler`
--
ALTER TABLE `qebzler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Cədvəl üçün AUTO_INCREMENT `xidmetler`
--
ALTER TABLE `xidmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
