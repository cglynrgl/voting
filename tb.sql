-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 May 2023, 01:02:06
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb`
--

CREATE TABLE `tb` (
  `id` int(11) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `oy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tb`
--

INSERT INTO `tb` (`id`, `vat`, `oy`) VALUES
(2, '19ed90687d0eebc80f7c52008dd1fe8e', 'chp'),
(3, '9a25ebf156cf8aaf0c966b0d26b93884', 'hdp'),
(4, '3cce5a8ef46f2f243a4b893a7b1a6fdf', 'chp'),
(5, '46fbcb6ac10a49368199d64f76390ebb', 'chp'),
(6, '263a96955f389d777d97f170ac81a83d', 'chp'),
(7, 'cf5da183bafb46bf521baaf1cdcbefd9', 'chp'),
(9, 'aa87434656296451a9e3a6507d2e7da9', 'akp'),
(10, 'f2d71ec33ad6a11de8af11e7cd8fe9a2', 'akp'),
(11, 'e9a49418e0bc111912c1325df88c95b6', 'mhp');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tb`
--
ALTER TABLE `tb`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tb`
--
ALTER TABLE `tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
