-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 02:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parrucchiere`
--
CREATE DATABASE IF NOT EXISTS `parrucchiere` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `parrucchiere`;

-- --------------------------------------------------------

--
-- Table structure for table `appuntamenti`
--

CREATE TABLE `appuntamenti` (
  `id_appuntamento` int(10) UNSIGNED NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cognome` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `servizio` varchar(300) NOT NULL,
  `data_appuntamento` date NOT NULL,
  `ora_appuntamento` time NOT NULL,
  `id_utente` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utenti`
--

CREATE TABLE `utenti` (
  `id_utente` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `cognome` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utenti`
--

INSERT INTO `utenti` (`id_utente`, `username`, `nome`, `cognome`, `email`, `telefono`, `pwd`) VALUES
(1, 'Mugiwara', 'Luffy', 'Moneky D', 'strawhats@gmail.co,', '+393756356383', '$2b$12$IhmxMBLglBLeEocOtJ9SLOYwbfghTLKqe584ON9SS9fHgDl9kfEfq'),
(2, 'Sara2004', 'Sara', 'Diama', 'saradiama@gmail.com', '+393756356383', '$2b$12$3UA2iRQXDrs6QJKjTDSjaujxc58Wng2DqRbCmDSH3zHtBPmWnO86y'),
(3, 'wolfExplorer', 'Erman', 'Ralo', 'ermanralo@gmail.com', '3388090834', '$2b$12$Rv.kGQwJugj1xjlKJV4oruCGYVetKXFkBN8S2B8pnLrJPQsbEdpSa'),
(4, 'SasukeSharingan', 'Sasuke', 'Uchiha', 'sasukeuchiha@gmail.com', '3388080835', '$2b$12$qDi./ZYuzQiv98W3uKtN1OLnZMt87QvLAwVm14.gdGWqcJ8k0aX8e'),
(5, 'DanielGavris', 'Daniel', 'Gavris', 'danielgavris@gmail.com', '3388080834', '$2b$12$IgvUJR11o3IXsnCIASCCPughUbtUvzR78StS1eKLdh6WNxlPEA462'),
(6, 'ClintonProgrammer', 'Clinton', 'Eneson', 'clinton10e@gmail.com', '3388080834', '$2b$12$xzj9kj98UM2SnUo/zGYPmuJsCkvXDoZz.zD8xuc8Oybqmq8zijQVS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appuntamenti`
--
ALTER TABLE `appuntamenti`
  ADD PRIMARY KEY (`id_appuntamento`),
  ADD KEY `id_utente` (`id_utente`);

--
-- Indexes for table `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id_utente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appuntamenti`
--
ALTER TABLE `appuntamenti`
  MODIFY `id_appuntamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id_utente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appuntamenti`
--
ALTER TABLE `appuntamenti`
  ADD CONSTRAINT `appuntamenti_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id_utente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
