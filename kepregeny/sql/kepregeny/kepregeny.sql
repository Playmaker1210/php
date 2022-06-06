-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jún 06. 15:01
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kepregeny`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comics`
--

CREATE TABLE `comics` (
  `id` int(200) NOT NULL,
  `Kiadó` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Cím` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Sorozat` int(200) NOT NULL,
  `Író` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Rajzoló` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Műfaj` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Szereplők` varchar(200) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `comics`
--

INSERT INTO `comics` (`id`, `Kiadó`, `Cím`, `Sorozat`, `Író`, `Rajzoló`, `Műfaj`, `Szereplők`) VALUES
(1, 'Elek Mihály Kiadó', 'Spider-Man', 6, 'Elek Mihály', 'Elek Mihály', 'Akció', 'Peter Parker'),
(5, 'Elek Mihály Kiadó', 'Spider-Man', 6, 'Elek Mihály', 'Elek Mihály', 'Akció', 'Mary Jane'),
(6, 'Mihály Elek Kiadó', 'Vasember', 1, 'Mihály Elek', 'Mihály Elek', 'Akció', 'Tony Stark');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
