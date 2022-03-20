-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Mar 2022, 08:07
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `be15_cr10_adrian_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be15_cr10_adrian_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr10_adrian_biglibrary`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `isbn_number` int(11) NOT NULL,
  `author_f_name` varchar(30) NOT NULL,
  `author_l_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `title`, `picture`, `isbn_number`, `author_f_name`, `author_l_name`, `publisher_name`, `publish_date`) VALUES
(3, 'Córka Mordercy', '62368f4db8489.jpg', 10001, 'Jenny', 'Blackhearts', 'Adrian Pedziwiatr', '2022-03-19'),
(4, 'One Wish', '62368fa955185.jpg', 10002, 'Nicolas', 'Sparks', 'Adrian Pedziwiatr', '2022-03-19'),
(5, 'Mademoiselle Coco', '6236902a896a9.jpg', 10004, 'Michelle', ' Marlley', 'Adrian Pedziwiatr', '2022-03-19'),
(6, 'Ex-Machina', '6236906c537ba.jpg', 10005, 'Nicolas ', 'Sparks', 'Adrian Pedziwiatr', '2022-03-18'),
(7, 'Magda', '623690bace5db.jpg', 10006, 'Magda', 'Gessller', 'Adrian Pedziwiatr', '2022-03-18'),
(8, 'Pol and Rock', '62369103cdff2.jpg', 10007, 'Various', 'Artists', 'Adrian Pedziwiatr', '2022-03-19'),
(9, 'Zaczynam sie od miłości', '6236914f7f55b.jpg', 10008, 'Natalia ', 'Przybysz', 'Adrian Pedziwiatr', '2022-03-19'),
(10, 'Zabic Drozda', '623691ba06337.jpg', 10009, 'Gregory', 'Peck', 'Adrian Pedziwiatr', '2022-03-20'),
(11, 'Regnum', '623691fb46f2e.jpg', 10010, 'Various', 'Artists', 'Adrian Pedziwiatr', '2022-03-20');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
