-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Mar 2022, 14:15
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
  `isbn_number` int(11) NOT NULL,
  `author_f_name` varchar(255) NOT NULL,
  `author_l_name` varchar(255) NOT NULL,
  `type_of` varchar(255) NOT NULL,
  `txt` varchar(500) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `title`, `isbn_number`, `author_f_name`, `author_l_name`, `type_of`, `txt`, `publisher_name`, `publisher_address`, `publish_date`, `picture`) VALUES
(2, 'Córka Mordercy', 10001, 'Jenny', 'Blackhurst', 'Book', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! ', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-22', '623b1675a585e.jpg'),
(3, 'EX Machina', 10002, 'Author ', 'Name', 'DVD', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Vienna ', '2022-03-23', '623b181eaa598.jpg'),
(4, 'Jedno Życzenie', 10003, 'Nicolas', 'Sparks', 'Book', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-21', '623b1895e3b26.jpg'),
(5, 'Madmuasele Coco', 10004, 'Michelle', 'Merlley', 'Book', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-16', '623b18eeaf604.jpg'),
(6, 'Magda', 10005, 'Magda', 'Gessller', 'Book', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-21', '623b1980a588f.jpg'),
(7, 'Pol And Rock', 10006, 'Various ', 'Artists', 'CD', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-20', '623b19c865076.jpg'),
(8, 'Regnum', 10007, 'Natalia ', 'Nykiel', 'CD', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-10', '623b1a6118a63.jpg'),
(9, 'Zabic Drozda', 10008, 'Author ', 'Name', 'CD', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-17', '623b1acb69903.jpg'),
(10, 'Zaczynam się od miłości', 10009, 'Natalia ', 'Przybysz', 'CD', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-12', '623b1b42d17bf.jpg'),
(11, 'Za zamkniętymi drzwiami', 10010, 'B.A.', 'Paris', 'Book', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius libero animi eos sit reiciendis totam nulla, harum cumque. Odit, explicabo animi harum consectetur minus alias aliquam fugiat earum cupiditate similique corporis nam nobis aspernatur nisi exercitationem obcaecati quam officia! Commodi non quaerat quod perferendis dolorum. Numquam eveniet temporibus nisi doloribus?', 'Adrian Pedziwiatr', 'Burggasse 70 1100 Wien', '2022-03-10', '623b1b9cecc83.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
