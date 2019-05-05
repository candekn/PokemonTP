-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2019 a las 03:10:34
-- Versión del servidor: 5.7.25-log
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemons`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `especie` varchar(200) NOT NULL,
  `generacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `nombre`, `tipo`, `descripcion`, `especie`, `generacion`) VALUES
(1, 'Eevee', 'Evolucion', 'Eevee es un Pokémon de tipo normal que se asemeja en tamaño y forma a un pequeño zorro. Posee largas orejas puntiagudas y una cola en forma de pincel. Su cuerpo, de constitución física ágil y flexible, está adaptado a la velocidad y la agilidad.','Evolución','Primera'),
(2, 'Espeon', 'Psíquico', 'Espeon esta inspirado en el nekomata, el cual es un gato con poderes psíquicos y que posee una cola bífida. Cuando Eevee recibe amistad por parte de su entrenador y se entrena bien especialmente de día, evolucionará a Espeon. Desarrollará poderes psíquicos sorprendentes. En este caso, la inteligencia será su punto fuerte. Posee un carácter muy racional y justo, pero puede hacerse vanidoso. Su gran belleza y su apariencia delicada y fina lo hacen perfecto para los concursos','Sol','Segunda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
