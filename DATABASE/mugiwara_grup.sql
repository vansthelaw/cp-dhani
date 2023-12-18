-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 10.37
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mugiwara_grup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`, `date`) VALUES
('seseorang', 'dahnia@gmail.com', 'memek kasih lokasi malah beda negara ', NULL),
('dahni ', 'dahnia@gmail.com', 'dani anjing\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nada\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nkontol\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nmemek', NULL),
('test', 'dahnia@gmail.com', 'anjing', NULL),
('test', 'SXc@GMAIL.COM', 'test', NULL),
('ajukillahi', 'dahnia@gmail.com', 'ABSJFBAIJFBJASND\r\n', NULL),
('yui0prez', 'dahnia@gmail.com', 'lqjfbe', '2023-11-22'),
('brazsilthelawke18', 'falvi@gmailgery', 'iblis sedang', '2023-11-22'),
('ler', 'hadoadfuih@gmail.com', 'Keren bg jdi mau mampir :)', '2023-11-22'),
('apaaja', 'apa@gmail.com', 'rapli ketan', '2023-11-22'),
('ajukillahi', 'dahnia@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-12-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
