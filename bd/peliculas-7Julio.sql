-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 07:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peliculas`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `idActor` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `nacionalidad` varchar(20) DEFAULT NULL,
  `estatus` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`idActor`, `nombre`, `nacionalidad`, `estatus`) VALUES
(1, 'George Clooney', 'USA', 1),
(2, 'Christian Bale', 'BritanicoEstadounide', 1),
(3, 'Edward John David Redmayne', 'inglaterra', 1),
(4, 'Margot Robbie', 'australiana', 1),
(5, 'Michael Keaton', 'USA', 1),
(6, 'Ben Affleck', 'USA', 1),
(7, 'Henry Cavill', 'britanico', 1),
(8, 'Gal Gadot', 'Israel', 1),
(9, 'Jason Momoa', 'USA', 1),
(10, 'Vin Diesel', 'USA', 1),
(11, 'Mark Ruffalo', 'USA', 1),
(12, 'Robert Downey Jr.', 'USA', 1),
(13, 'Robert Downey Jr.', 'USA', 1),
(14, 'Hugh Jackman', 'Australia', 1),
(15, 'Will Smith', 'USA', 1),
(16, 'Johnny Depp', 'USA', 1),
(17, 'Will Smith', 'USA', 1),
(18, 'Chris Pratt', 'USA', 1),
(19, 'Christian Bale', 'Reino Unido', 1);

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `idDirector` int(11) NOT NULL,
  `nombreDirector` varchar(30) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`idDirector`, `nombreDirector`, `fechaNacimiento`, `pais`, `estatus`) VALUES
(4, 'David Ayer66', '1968-01-18', 'USA', 0),
(6, 'Zacktt', '1966-03-02', 'USA', 0),
(8, 'Patty Jenkins', '1971-06-23', 'USA', 0),
(9, 'James W', '1979-02-27', 'USA', 0),
(11, 'Louis Leterriera', '1973-06-17', 'Francia', 0),
(13, 'Anthony Russoww', '1970-02-03', 'USAa', 1),
(14, 'Tom Hooper', '1972-10-05', 'londres', 1),
(15, 'Barry Sonnenfeld', '1953-04-01', 'USA', 1),
(16, 'Gore Verbinski', '1964-03-16', 'USA', 1),
(17, 'Peter Berg', '1964-03-11', 'USA', 1),
(18, 'James Gunn', '1966-08-05', 'USA', 1),
(19, 'Christopher Nolan', '1970-07-30', 'londes', 1),
(20, 'Jorge autoincrementable', '2012-07-11', 'México', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelicula`
--

CREATE TABLE `pelicula` (
  `idPelicula` int(11) NOT NULL,
  `nombrePelicula` varchar(150) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL,
  `idioma` varchar(15) DEFAULT NULL,
  `ColorPelicula` enum('color','Blanco y Negro') DEFAULT NULL,
  `Clasificacion` varchar(30) DEFAULT NULL,
  `fecha_estreno` date DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelicula`
--

INSERT INTO `pelicula` (`idPelicula`, `nombrePelicula`, `fecha`, `nacionalidad`, `idioma`, `ColorPelicula`, `Clasificacion`, `fecha_estreno`, `sinopsis`, `estatus`) VALUES
(1, 'Lego Batman 2', '0000-00-00', 'USA', 'Ingles', 'color', 'PG-13', '2007-05-16', 'Batichica se une a los cruzados impedir que Señor Frio  terrible venganza					', 1),
(3, 'animales fantasticos', '0000-00-00', 'usa', 'ingles', 'color', 'PG-13', '2016-12-18', 'En algún lugar de Europa, unos Aurores se encuentran a la caza de alguien', 1),
(4, 'suicide squad', '0000-00-00', 'usa', 'ingles', 'color', 'PG-13', '2016-08-04', 'Floyd Lawton entrena con un saco de boxeo hasta que el capitán Griggs lo interrumpe para traerle comida', 1),
(5, 'Batman return', '0000-00-00', 'USA', 'ingles', 'color', 'PG-13', '1992-06-19', 'El súper héroe de la capa negra se enfrenta Ciudad Gótica de los malévolos planes del Pingüino.', 1),
(6, 'la liga de la justicia', '0000-00-00', 'USA,', 'ingles', 'color', 'PG-13', '1992-06-19', 'Gracias a su renovada fe en la humanidad e inspirado por el acto de altruísmo de Superman,', 1),
(7, 'Batman y superman', '0000-00-00', 'USA', 'ingles', 'color', 'PG-13', '2016-03-19', 'Batman se enfrenta a Superman, temeroso de que su afán de poder termine nublando', 1),
(8, 'La mujer maravilla 2', '0000-00-00', 'Francia', 'frances', '', 'PG-18', '2020-12-25', 'Diana, hija de dioses y princesa de las amazonas, nunca ha salido de su isla. 					', 1),
(9, 'Aquaman', '0000-00-00', 'USA', 'Ingles', 'color', 'PG-13', '2018-12-13', 'Aquaman debe recuperar el legendario Tridente de Atlan para salvar a la ciudad subacuática de Atlantis', 1),
(12, 'Avengers: era de ultrón', '0000-00-00', 'USA', 'Ingles', 'color', 'PG-13', '2015-04-30', 'El director de la Agencia SHIELD decide reclutar a un equipo para salvar al mundo', 1),
(13, 'Infinity war', '0000-00-00', 'USA', 'Ingles', 'color', 'PG-13', '2018-04-27', 'Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado', 1),
(14, 'los miserables', '0000-00-00', 'Francia', 'Frances', 'color', 'Pg-13', '2015-02-15', 'Después de 19 años como prisionero, Jean Valjean es liberado por Javert,', 1),
(15, 'Hombres de negro', '0000-00-00', 'USA', 'Ingles', 'color', 'PG-13', '1997-08-01', 'Un policía se une a una organización secreta del gobierno actividad extraterrestre en la Tierra.', 1),
(16, 'Piratas del Caribe La maldició', '0000-00-00', 'USA', 'Ingles', 'color', 'PG-13', '2003-08-01', 'Un herrero y un extraño pirata se unen para rescatar a una dama secuestrada', 1),
(17, 'hancock', '0000-00-00', 'Italiana', 'ingles', 'color', 'PG-13', '2008-06-11', 'Un desaliñado superhéroe llamado Hancock (Will Smith) protege a los ciudadanos de Los Ángeles,', 1),
(18, 'Guardianes de la galaxia', '0000-00-00', 'USA', 'ingles', 'color', 'PG-13', '0000-00-00', 'Un aventurero espacial se convierte en la presa de unos cazadores de tesoros', 0),
(19, 'Batman: el caballero de la noc', '0000-00-00', 'USA', 'INGLES', 'color', 'PG-13', '2008-06-18', 'Batman tiene que mantener el equilibrio entre el heroísmo y el vigilantismo', 0),
(21, 'Spiderman 3: far from home', '0000-00-00', 'Inglaterra', 'Inglés', 'color', 'B15', '2020-12-05', 'Tom holland creará el multiverso y luchará contra los 3 venom.				', 1),
(22, 'Toy story 4: woody dice adiós', '0000-00-00', 'USA', 'Inglés', 'color', 'A13', '2019-05-21', 'Woody dejará a sus amigos por un viejo amor del pasado. Vive una aventura extraordinaria.		', 1),
(23, '545', '0000-00-00', '4554', 'vdd3', '', '4554', '1978-08-21', 'bfdfdfvfvd', 1),
(24, 'Las locuras del emperador', '0000-00-00', 'USA', 'Español', 'color', 'A10', '2001-04-06', 'Cuzco es una llama que habla.', 1),
(25, 'vbbv', '2021-10-12', 'vcvc', 'vc', '', 'vc', '2021-10-12', 'vvc', 1),
(26, 'Navidad 2021', '0000-00-00', 'Mexico', 'Español', 'color', 'A10', '2022-12-31', 'La navidad más esperada llega a los cines', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`idActor`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`idDirector`);

--
-- Indexes for table `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idPelicula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `idDirector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
