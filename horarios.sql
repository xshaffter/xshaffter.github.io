-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 08:28 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horarios`
--

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `aula` varchar(10) NOT NULL,
  `maestro` varchar(40) NOT NULL,
  `alumnos` tinyint(4) NOT NULL DEFAULT '0',
  `capacidad` tinyint(4) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `horario` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`id`, `materia`, `aula`, `maestro`, `alumnos`, `capacidad`, `carrera`, `horario`) VALUES
(3, 'Fund. Programacion', 'S2', '1', 0, 30, 'ISC', 'cell11,cell10,cell9,cell8,cell7'),
(4, 'Fund. Programacion', 'S2', 'xshaffter', 0, 30, 'ISC', 'cell69,cell61,cell56,cell50,cell43,cell38,cell33,cell26,cell20,cell17,cell16,cell15,cell14,cell13');

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `semestre` tinyint(4) NOT NULL DEFAULT '1',
  `carrera` varchar(10) NOT NULL,
  `materia` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `semestre`, `carrera`, `materia`) VALUES
(1, 1, 'ISC', 'Fund. Programacion'),
(2, 1, 'ISC', 'Fund. Investigacion'),
(3, 1, 'ISC', 'Taller Administración');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `carrera` varchar(10) NOT NULL DEFAULT '',
  `usuario` varchar(23) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reprobadas` int(11) NOT NULL DEFAULT '0',
  `calificacion` float NOT NULL DEFAULT '3',
  `horario` text NOT NULL,
  `rango` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `carrera`, `usuario`, `password`, `reprobadas`, `calificacion`, `horario`, `rango`) VALUES
(1, 'Alfredo', 'Martinez', '', 'xshaffter', '$2y$10$eEO.DH33QwrYrgBaYn33SO2tFOCGH.AXUb9cOEQCRYR301mwakT2y', 0, 3, '', 2),
(3, 'Alfredo', 'Martinez', 'ISC', 'experian', '$2y$10$FmE4bXOWtR2uIDcbNeeBCeEDvQBNo61Y1Ym5LQ.J5OPc3VJ8Lnxs2', 0, 3, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
