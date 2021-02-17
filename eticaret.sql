-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 28 Ağu 2020, 11:21:43
-- Sunucu sürümü: 5.6.20-log
-- PHP Sürümü: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `eticaret`
--
CREATE DATABASE IF NOT EXISTS `eticaret` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `eticaret`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
`pro_id` int(11) NOT NULL,
  `pro_name` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `pro_description` text COLLATE utf8_turkish_ci NOT NULL,
  `pro_price` double NOT NULL,
  `pro_discount` int(11) NOT NULL,
  `pro_stok` int(11) NOT NULL,
  `pro_vitrin` tinyint(4) NOT NULL,
  `pro_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pro_category` int(11) NOT NULL,
  `pro_brand` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pro_views` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=31 ;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_description`, `pro_price`, `pro_discount`, `pro_stok`, `pro_vitrin`, `pro_date`, `pro_category`, `pro_brand`, `pro_views`) VALUES
(19, 'deneme123', 'açıklama', 1200, 5, 100, 1, '2020-08-07 12:45:00', 1, 'abc', 11),
(8, 'deneme1', 'Deneme Açıklama', 100, 0, 100, 1, '2020-08-06 14:22:07', 1, '', 3),
(25, 'rampage headphone', '7.1 headphone for gamer', 500, 0, 100, 1, '2020-08-26 10:00:37', 3, 'rampage', 1),
(20, 'yeni deneme', 'asdasdas', 1200, 50, 100, 1, '2020-08-07 12:49:33', 1, 'abc', 1),
(23, 'rampage orion', 'red switch', 280, 0, 50, 1, '2020-08-07 20:40:15', 2, 'rampage', 4),
(21, 'yeni deneme', 'asdasdas', 1200, 50, 100, 1, '2020-08-07 12:52:02', 1, 'abc', 15),
(18, 'yeni deneme', 'açıklama', 500, 10, 100, 1, '2020-08-07 12:21:34', 1, '', 12),
(24, 'kulaklık', 'kulaklık', 100, 0, 100, 1, '2020-08-14 18:49:42', 3, 'abc', 4),
(26, 'gamepower headphone', '7,1 headphone RGB', 600, 0, 100, 1, '2020-08-26 10:01:19', 3, 'gamepower', 0),
(27, 'gamepower Katana', 'full mechanical keyboard RGB blue switch', 280, 5, 100, 1, '2020-08-26 10:02:20', 1, 'gamepower', 0),
(28, 'Frisby mouse', 'gamer mouse 5000 DPI', 120, 0, 100, 1, '2020-08-26 10:03:32', 2, 'frisby', 0),
(29, 'asus tuf keyboard', 'asus keyboard semi mechanical ', 300, 10, 100, 1, '2020-08-26 10:04:11', 1, 'asus', 0),
(30, 'Rust mouse', 'rust mouse for gamer RGB 10.000 DPI', 400, 8, 100, 1, '2020-08-26 10:05:06', 2, 'rust', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
`sett_id` int(11) NOT NULL,
  `sett_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sett_description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sett_keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sett_facebook` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sett_twitter` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sett_instagram` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sett_youtube` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sett_mserver` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sett_mport` int(4) NOT NULL,
  `sett_mkadi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sett_mpassword` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `setting`
--

INSERT INTO `setting` (`sett_id`, `sett_title`, `sett_description`, `sett_keywords`, `sett_facebook`, `sett_twitter`, `sett_instagram`, `sett_youtube`, `sett_mserver`, `sett_mport`, `sett_mkadi`, `sett_mpassword`) VALUES
(1, 'Elysian', 'e ticaret site çalışması üzerine kodlanmış sayfa', 'php mysql html e ticaret elysian', 'http://facebook.com', '', '', '', 'smtp.gmail.com', 123, 'deneme@aabc.com', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `user_password` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `user_address` text COLLATE utf8_turkish_ci NOT NULL,
  `user_phone` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `user_tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `user_record` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_yetki` int(1) NOT NULL,
  `user_lastlogin` timestamp NULL DEFAULT NULL,
  `user_sifreunuttum` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_mail`, `user_password`, `user_name`, `user_address`, `user_phone`, `user_tc`, `user_record`, `user_yetki`, `user_lastlogin`, `user_sifreunuttum`) VALUES
(1, 'admin@abc.com', '1234', 'admin', '', '', '', '2020-08-07 13:02:47', 1, '2020-08-25 11:06:06', ''),
(2, 'eh@abc.com', '1234', '', '', '', '', '2020-08-13 12:43:58', 2, '2020-08-16 11:03:41', ''),
(3, '123', '1234', 'ezgi', '', '', '', '2020-08-15 15:47:31', 2, '2020-08-16 11:06:19', ''),
(4, '123', '1234', 'ezgi', '123', '123', '123', '2020-08-16 11:16:25', 0, NULL, ''),
(5, '12345', 'proje@abc.com', 'proje', '', '', '', '2020-08-26 12:31:52', 0, NULL, ''),
(6, 'proje@abc.com', '12345', 'proje', '', '', '', '2020-08-26 12:34:01', 0, NULL, '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`pro_id`);

--
-- Tablo için indeksler `setting`
--
ALTER TABLE `setting`
 ADD PRIMARY KEY (`sett_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Tablo için AUTO_INCREMENT değeri `setting`
--
ALTER TABLE `setting`
MODIFY `sett_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
