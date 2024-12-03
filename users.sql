-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Dec 03. 17:38
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `login_register`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `created_at`) VALUES
(1, 'Alma Barack', 'alma@barack.hu', '$2y$10$oOZP9QhWdxoLvUY7g./2ReMkpO1AmBpbhJbW.kKp8N8OZEv.THL8S', '2024-11-17 10:49:20'),
(2, 'Alma Alma', 'alma@alma.hu', '$2y$10$dRddyMK3ltBwTzoqo1TxZOl0zI2B2n0I87pCLz.vLjqKkHMd1SvWS', '2024-11-17 11:03:32'),
(3, 'Barack Barack', 'barack@barack.hu', '$2y$10$1sBrZ0Iz2qfIcQjQArtk9.FvRUt1mUvrkV6e1kpaIqyzuAnGVN51e', '2024-11-17 11:19:46'),
(4, 'Alma Szilva', 'alma@szilva.hu', '$2y$10$.iHIpJTRcILKx7/1DR7pW.RJ3I9aa9YOaAUeWdelGYrB7YZFSLbOW', '2024-12-02 11:54:35');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
