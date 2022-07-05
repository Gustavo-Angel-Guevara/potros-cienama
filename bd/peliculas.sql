-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2022 a las 06:49:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `idActor` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `nacionalidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`idActor`, `nombre`, `nacionalidad`) VALUES
(1, 'George Clooney', 'USA'),
(2, 'Christian Bale', 'BritanicoEstadounide'),
(3, 'Edward John David Redmayne', 'inglaterra'),
(4, 'Margot Robbie', 'australiana'),
(5, 'Michael Keaton', 'USA'),
(6, 'Ben Affleck', 'USA'),
(7, 'Henry Cavill', 'britanico'),
(8, 'Gal Gadot', 'Israel'),
(9, 'Jason Momoa', 'USA'),
(10, 'Vin Diesel', 'USA'),
(11, 'Mark Ruffalo', 'USA'),
(12, 'Robert Downey Jr.', 'USA'),
(13, 'Robert Downey Jr.', 'USA'),
(14, 'Hugh Jackman', 'Australia'),
(15, 'Will Smith', 'USA'),
(16, 'Johnny Depp', 'USA'),
(17, 'Will Smith', 'USA'),
(18, 'Chris Pratt', 'USA'),
(19, 'Christian Bale', 'Reino Unido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `idDirector` int(11) NOT NULL,
  `nombreDirector` varchar(30) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `director`
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
(19, 'Christopher Nolan', '1970-07-30', 'londes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `idPelicula` int(11) NOT NULL,
  `nombrePelicula` varchar(150) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL,
  `idioma` varchar(15) DEFAULT NULL,
  `ColorPelicula` varchar(20) DEFAULT NULL,
  `Clasificacion` varchar(30) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idPelicula`, `nombrePelicula`, `fecha`, `nacionalidad`, `idioma`, `ColorPelicula`, `Clasificacion`, `sinopsis`, `estatus`) VALUES
(3, 'animales fantasticos', '1111-02-01', 'USA', 'ingles', 'color', 'PG-13', 'En algún lugar de Europa, unos Aurores se encuentran a la caza de 					', 1),
(4, 'suicide squad', '0000-00-00', 'usa', 'ingles', 'color', 'PG-13', 'Floyd Lawton entrena con un saco de boxeo hasta que el capitán Griggs lo interrumpe para traerle comida', 0),
(5, 'Batman return', '0000-00-00', 'USA', 'ingles', 'color', 'PG-13', 'El súper héroe de la capa negra se enfrenta Ciudad Gótica de los malévolos planes del Pingüino.', 0),
(7, 'Batman y superman', '0000-00-00', 'USA', 'ingles', 'color', 'PG-13', 'Batman se enfrenta a Superman, temeroso de que su afán de poder termine nublando', 0),
(8, 'La mujer maravilla 2', '0000-00-00', 'Francia', 'frances', 'b/n', 'PG-18', 'Diana, hija de dioses y princesa de las amazonas, nunca ha salido de su isla. 					', 0),
(9, 'Aquaman', '0000-00-00', 'USA', 'Ingles', 'color', 'PG-13', 'Aquaman debe recuperar el legendario Tridente de Atlan para salvar a la ciudad subacuática de Atlantis', 0),
(14, 'los miserables', '0000-00-00', 'Francia', 'Frances', 'Color', 'Pg-13', 'Después de 19 años como prisionero, Jean Valjean es liberado por Javert,', 0),
(15, 'Hombres de negro', '0000-00-00', 'USA', 'Ingles', 'color', 'PG-13', 'Un policía se une a una organización secreta del gobierno actividad extraterrestre en la Tierra.', 0),
(17, 'hancock', '0000-00-00', 'Italiana', 'ingles', 'color', 'PG-13', 'Un desaliñado superhéroe llamado Hancock (Will Smith) protege a los ciudadanos de Los Ángeles,', 0),
(18, 'Guardianes de la galaxia', '0000-00-00', 'USA', 'ingles', 'color', 'PG-13', 'Un aventurero espacial se convierte en la presa de unos cazadores de tesoros', 0),
(19, 'Batman: el caballero de la noc', '0000-00-00', 'USA', 'INGLES', 'COLOR', 'PG-13', 'Batman tiene que mantener el equilibrio entre el heroísmo y el vigilantismo', 0),
(21, 'Spiderman 3: far from home', '0000-00-00', 'Inglaterra', 'Inglés', 'Color', 'B15', 'Tom holland creará el multiverso y luchará contra los 3 venom.				', 0),
(23, '545', '0000-00-00', '4554', 'vdd3', '33w23', '4554', 'bfdfdfvfvd', 1),
(24, 'Las locuras del emperador', '0000-00-00', 'USA', 'Español', 'Color', 'A10', 'Cuzco es una llama que habla.', 1),
(25, 'vbbv', '2021-10-12', 'vcvc', 'vc', 'vc', 'vc', 'vvc', 1),
(26, 'Navidad 2021', '0000-00-00', 'Mexico', 'Español', 'Color', 'A10', 'La navidad más esperada llega a los cines', 1),
(27, 'Acuaman', '0000-00-00', 'USA', 'English', 'Rojo', '10', 'Pez', 1),
(28, 'dd', '0000-00-00', 'ada', 'Español', 'Rojo', '10', 'XD', 1),
(29, 'XD', '0000-00-00', 'w', 'Español', 'as', 'sda', 'ad', 1),
(30, 'd', '0000-00-00', 'USA', 'Español', 'Rojo', '10', 'dwd', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`idActor`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`idDirector`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idPelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `idActor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `idDirector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
