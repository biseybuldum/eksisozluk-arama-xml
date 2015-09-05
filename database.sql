-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 05 Eyl 2015, 04:18:54
-- Sunucu sürümü: 5.5.42-cll
-- PHP Sürümü: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `biseybul_main`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arama`
--

CREATE TABLE IF NOT EXISTS `arama` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `kelime` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` int(22) NOT NULL,
  `ip` varchar(22) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
