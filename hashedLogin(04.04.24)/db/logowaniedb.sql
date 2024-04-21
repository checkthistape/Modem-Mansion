-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Kwi 2024, 11:12
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `logowaniedb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `content`
--

CREATE TABLE `content` (
  `content-id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `text` text NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `content`
--

INSERT INTO `content` (`content-id`, `title`, `text`, `image`) VALUES
(1, 'Unsold fish', 'Ever wonder what happens to unsold fish at the Honolulu Fish Auction? The nonprofit Aloha Harvest recently began rescuing that fish through a new partnership with the United Fishing Agency, which runs the auction, and the Hawaii Longline Association.\r\n\r\n\"One thing that we kind of knew was going to be an issue is, of course, these fish are coming straight from the auction. So they\'re whole fish, you know, generally going to be probably about 50 pounds. But these fish have the head and tail on, you know, they\'re gutted, but there\'s some work that has to go into getting it ready for prep,\" said Aloha Harvest Executive Director Brandon Tomita.\r\n\r\nAloha Harvest gets surplus food into the hands of food-insecure families via community organizations like food banks and churches — usually all on the same day. It marks its 25th year serving the community this year.\r\n\r\nTomita is on the lookout for a partner to break down the large fish — ahi and swordfish — and teach more people how to process fish.\r\n\r\n\"We, of course, are reaching through our network saying, hey, if you know anyone who works with fish, can help instruct, or can help break some of these down for us, we are more than happy to get anyone who is interested involved in this project,\" Tomita told HPR.\r\n\r\nHe said the pandemic and the Lahaina fires unfortunately led to restaurants shutting down, meaning fewer fish buyers.\r\n\r\n\"Now, you know, we\'re given the opportunity to help the community and help the entities not waste these fish that they\'re catching.\"\r\n\r\nIf you\'re interested in partnering with Aloha Harvest to help process its fish supply, email info@alohaharvest.org.\r\n\r\nThis story aired on The Conversation on April 8, 2024. The Conversation airs weekdays at 11 a.m. on HPR-1.', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `showed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `showed`) VALUES
(1, 'boUSERAT', 'D)AHl0wq!gVVn7H;', '2017-04-17'),
(2, 'eaVEywIT', 'F?twq>/d`T|75G!\'', '2022-02-23'),
(3, 'user', 'admin', '2014-03-28'),
(4, 'ashash', 'admin', '2024-04-13'),
(5, 'terAINOr', '>TbRN)e*_YJDJGg`', '2018-02-13');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content-id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`username`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `content`
--
ALTER TABLE `content`
  MODIFY `content-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
