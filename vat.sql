-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 May 2023, 01:00:51
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
-- Tablo için tablo yapısı `vat`
--

CREATE TABLE `vat` (
  `id` int(11) NOT NULL,
  `isim` varchar(255) NOT NULL,
  `soyisim` varchar(255) NOT NULL,
  `vatcrypt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `vat`
--

INSERT INTO `vat` (`id`, `isim`, `soyisim`, `vatcrypt`) VALUES
(1, 'Çağlayan', 'Eroğlu', '19ed90687d0eebc80f7c52008dd1fe8e'),
(2, 'Emre', 'Eroğlu', '9a25ebf156cf8aaf0c966b0d26b93884'),
(3, 'Hasan', 'Eroğlu', '3cce5a8ef46f2f243a4b893a7b1a6fdf'),
(4, 'Melih', 'Eroğlu', '46fbcb6ac10a49368199d64f76390ebb'),
(5, 'Ayşegül', 'Zengin', '263a96955f389d777d97f170ac81a83d'),
(6, 'Mustafa', 'Eroğlu', 'cf5da183bafb46bf521baaf1cdcbefd9'),
(7, 'Nejla', 'Eroğlu', 'e9a49418e0bc111912c1325df88c95b6'),
(8, 'Esat', 'Eroğlu', 'aa87434656296451a9e3a6507d2e7da9'),
(9, 'Güven', 'Eroğlu', 'f2d71ec33ad6a11de8af11e7cd8fe9a2');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `vat`
--
ALTER TABLE `vat`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `vat`
--
ALTER TABLE `vat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
