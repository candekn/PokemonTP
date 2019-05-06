-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2019 a las 18:42:36
-- Versión del servidor: 5.7.25-log
-- Versión de PHP: 7.3.0

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
(1, 'Eevee', 'Normal', 'Eevee es un Pokémon de tipo normal que se asemeja en tamaño y forma a un pequeño zorro. Posee largas orejas puntiagudas y una cola en forma de pincel. Su cuerpo, de constitución física ágil y flexible, está adaptado a la velocidad y la agilidad.', 'Evolución', 'Primera'),
(2, 'Espeon', 'Psíquico', 'Espeon esta inspirado en el nekomata, el cual es un gato con poderes psíquicos y que posee una cola bífida. Cuando Eevee recibe amistad por parte de su entrenador y se entrena bien especialmente de día, evolucionará a Espeon. Desarrollará poderes psíquicos sorprendentes. En este caso, la inteligencia será su punto fuerte. Posee un carácter muy racional y justo, pero puede hacerse vanidoso. Su gran belleza y su apariencia delicada y fina lo hacen perfecto para los concursos', 'Sol', 'Segunda'),
(3, 'Umbreon', 'Siniestro', 'Cuando el vínculo afectivo entre Eevee y su entrenador sea lo suficientemente alto, y se acostumbre a entrenarlo al atardecer o por la noche, estará preparado para evolucionar en Umbreon. Este Pokémon tiene todo su pelaje de color negro, exceptuando circunferencias de un color amarillo, que puede iluminar a su voluntad. Sus ojos rojos son siniestros, llamativos y adaptados a la oscuridad. Tiene una especie de vínculo con la luna de la noche. Tiene un carácter arisco, serio y suele andar en solitario. Es un Pokémon estratega y frío a la hora de pensar, típico de un Pokémon de tipo siniestro. Su', 'Luz lunar', 'Segunda'),
(4, 'Vaporeon', 'Agua', 'Si a Eevee se le expone a una piedra agua y evoluciona en Vaporeon, será un excelente nadador, capaz de hacerse invisible en el agua y tendrá grandes habilidades acuáticas. Se volverá tranquilo, maduro, crecerá con mucho asomo su sabiduría, ya que sabe tanto sobre las cosas de tierra como las del mar. Posee un carácter pacífico y abierto. También tiene un buen sentido de liderazgo y es un Pokémon muy seguro de sí mismo.', 'Burbuja', 'Primera'),
(5, 'Flareon', 'Fuego', 'Si se le expone a Eevee una piedra fuego evolucionara a Flareon, convirtiéndose en un Pokémon de Fuego, su nobleza y su exuberancia crecerán deprisa, es el más fiel de todos, pero también su pereza será notable a menos que no se le mime tanto. Flareon es un Pokémon muy sensible y al conocer gente nueva tiene demasiada timidez, pero al acostumbrarse se volverá un Pokémon muy cariñoso, bueno para hacer compañía. Su carácter es pacífico y alegre, pero cuando se enfada por algo grave, puede convertirse en todo un luchador, ya que posee un temperamento paciente pero muy explosivo.', 'Llama', 'Primera'),
(6, 'Jolteon', 'Eléctrico', 'Jolteon está inspirado en un zorro. Su pelaje le permite captar y almacenar gran cantidad de electricidad estática del ambiente, con lo que se eriza y endurece formando púas, que puede usar para concentrar y dirigir sus ataques eléctricos contra el rival. Sus pelos sólo se convierten en pinchos, cuando se siente amenazado, asustado o furioso. Sus células generan un nivel bajo de electricidad, que amplificada por la electricidad estática de su piel le permite lanzar rayos.', 'Relámpago', 'Primera'),
(7, 'Glaceon', 'Hielo', 'Cuando subas un nivel a un Eevee, exponiéndolo a la roca hielo, evolucionará en Glaceon. Se convertirá en un Pokémon de tipo hielo, poseerá mucha elegancia al andar. A pesar de parecer algo frío, en realidad, es muy cariñoso con su entrenador. Cuando se enfada, su carácter noble se convierte en agresivo e hiriente, por lo que muchas veces, después del problema, se arrepiente y tiende a alejarse en solitario para tranquilizarse, ya que tiende a ser arrebatado. Su naturaleza abierta y espontánea lo hace un Pokémon con mucha estrella.', 'Nieve fresca', 'Cuarta'),
(8, 'Leafeon', 'Planta', 'Si se expone a Eevee a una roca musgo y evoluciona a Leafeon subiéndole un nivel, gran parte de su cuerpo desarrollará un organismo vegetal. Es el mayor cambio físico que puede tener un Eevee. Es un poco Pocos Eevee logran evolucionar en Leafeon. Por un tiempo se creía que era timido, cuando no era así: en realidad solo prefería estar en la naturaleza, puesto que Leafeon disfruta de la tranquilidad de los bosques. También demuestra un buen sentido del humor y tiene un carácter alegre, pero seriedad le falta cuando es necesaria.', 'Verdor', 'Cuarta'),
(9, 'Sylveon', 'Hada', 'Sylveon destaca por ser la evolución de Eevee que permanece fiel a su carácter, a excepción de la timidez. Sylveon se muestra como un Pokémon muy amistoso, alegre, dulce y preocupado por los demás. Disfruta mucho de la compañía de otros Pokémon, con los cuales le agrada jugar y llenarlos de felicidad.', 'Vínculo', 'Sexta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariopokemon`
--

CREATE TABLE `usuariopokemon` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariopokemon`
--

INSERT INTO `usuariopokemon` (`id`, `email`, `pass`, `estado`) VALUES
(2, 'Poke@gmail.com', '1234', 'true');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuariopokemon`
--
ALTER TABLE `usuariopokemon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuariopokemon`
--
ALTER TABLE `usuariopokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
