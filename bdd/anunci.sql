-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2017 a las 18:26:17
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_biciescapa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunci`
--

CREATE TABLE `anunci` (
  `anu_id` int(4) NOT NULL,
  `anu_titol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `anu_data_anunci` date NOT NULL,
  `anu_data_robatori` date NOT NULL,
  `anu_ubicacio_robatori` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `anu_descripcio_robatori` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `anu_marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `anu_model` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_color` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_antiguitat` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_descripcio` text COLLATE utf8_spanish_ci NOT NULL,
  `anu_numero_serie` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_foto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_compensacio` decimal(4,2) DEFAULT NULL,
  `anu_categoria` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`, `anu_categoria`) VALUES
(1, 'Orbea MX 10 29\"', '2017-10-15', '2017-10-11', 'El Prat del Llobregat', 'Me robaron la bici en Sant Cosme con una navaja y no pude hacer nada.', 'Orbea', 'MX 10', 'Negro', '-', 'Bicicleta negra Orbea MX 10 con ruedas de 29 pulgadas.', '-', 'orbeamx1029', '30.00', 'Bicicleta'),
(2, 'Gafas Eassun Spirit Fotocromáticas', '2017-09-02', '2017-09-27', 'Hospitalet de Llobregat', 'Al entrar al metro de la Florida perdí las gafas en la parada del metro de la L1 El Clot.', 'Eassun', 'Eassun Spirit', 'Naranja', '-', 'Gafas fotocromáticas naranjas de 130mm de montura.', '-', 'eassunspirit', '20.00', 'Gafas'),
(3, 'Casco Echelon II Specialized', '2017-10-04', '2017-10-05', 'Barcelona', 'Me robaron el casco mientras me descuidé en plaza Cataluña, cerca del metro frente al Corte Inglés.', 'Echelon', 'Echelon II Specialized', 'Azul', '-', 'Casco ergonómico Echelon II Specialized azul.', '60116-1422', 'echelonii', '30.00', 'Casco'),
(4, 'Orbea Rallon X30', '2017-10-14', '2017-09-15', 'Hospitalet de Llobregat', 'Me robaron la bici de montaña cuando volvía a casa con una navaja.', 'Orbea', 'Rallon X30', 'Amarillo', '-', 'Bicicleta de montaña Orbea Rallon X 30 de color amarillo.', '2017 - G268', 'orbearallonx30', '50.00', 'Bicicleta'),
(5, ' Zapatillas Northwave Yeti 43', '2017-08-14', '2017-08-10', 'El Prat del Llobregat', 'Me robaron las zapatillas en Sant Cosme y aún no he sabido nada de ellas.', 'Northwave', 'Northwave Yeti', 'Negro', '-', 'Zapatillas Northwave Yeti de la talla 43', '1790174021', 'northwaveyeti', '50.00', 'Zapatillas'),
(6, 'Sillín S-Works Romin Evo Specialized', '2017-10-10', '2017-09-29', 'Girona', 'Me robaron el sillín cerca de la catedral de Girona a las 7 de la tarde.', 'Specialized', 'S-Works Romin Evo', 'Negro', '-', 'Sillín de carbono S-Works Romin Evo Specialized de color negro', '0000000072', 'sworksromin', '70.00', 'Sillín'),
(7, 'Zapatillas Sport MTB Specialized 2016', '2017-05-17', '2017-05-01', 'Girona', 'Me robaron la bicicleta cerca de la residencia de estudiantes de la Universidad de Girona a las 9.', 'Specialized', 'Sport MTB 2016', 'Gris', '-', 'Zaptillas de cicilista de la talla 49. Marca Specialized Sport MTB 2016 de color gris.', '-', 'sportmtb2016', '40.00', 'Zapatillas'),
(8, 'Gafas Eassun Oak Shiny Fotocromática', '2017-07-02', '2017-07-01', 'Tarragona', 'Me robaron las gafas de ciclista en Vilaseca con una navaja por la madrugada, a las 5 de la mañana.', 'Eassun', 'Oak Shiny', 'Negro', '-', 'Gafas fotocromáticas de ciclista Eassun Oak.', '-', 'eassunoak', '40.00', 'Gafas'),
(9, 'Zapatillas Northwave Hammer Junior ', '2016-10-03', '2016-10-01', 'Tarragona', 'Me robaron las zapatillas de mi hijo pequeño mientras me las quitaba para ir a la playa en Cambrils por las 4 de la tarde.', 'Northwave', 'Hammer Junior', 'Verde', '-', 'Zapatillas deportivas para niño de color verde, de la marca Northwave.', '-', 'northwavehammerjunior', '15.00', 'Zapatillas'),
(10, 'Ruedas Mavic Ksyrium Pro Disc', '2016-06-08', '2016-06-01', 'Barcelona', 'Me robaron las ruedas de mi bici mientras la dejé estacionada en Sitges.', 'Mavic', 'Ksyrium Pro Disc', 'Negro', '-', 'Ruedas de 26mm x 17mm.', '2017 - P83091', 'mavicksysriumprodisc', '50.00', 'Ruedas'),
(11, 'Ruedas Mavic Comete Road', '2016-12-23', '2016-12-20', 'Tarragona', 'Me robaron las ruedas de la bici en el Carrer Andorra en Calafell a las 8 de la noche.', 'Mavic', 'Comete Road', 'Negro', '-', 'Ruedas de bicicleta de 28\"-23 pulgadas.', '-', 'maviccometeroad', '99.99', 'Ruedas'),
(12, 'Ruedas Mavic Cosmic CXR80 TUB', '2016-03-03', '2016-03-05', 'Girona', 'Las ruedas de mi bici fueron robadas cuando me despisté cerca del Castell de Sant Gregori. Pude ver como unos chicos me robaban y se iban huyendo.', 'Mavic', 'Cosmic CXR80 TUB', 'Negro', '-', 'Ruedasde 80mm x 27mm.', '-', 'maviccosmiccxr80tub', '80.50', 'Ruedas'),
(13, 'GPS Tomtom Adventurer Cardio + Music', '2016-11-10', '2016-11-01', 'Barcelona', 'Me robaron el pulsómetro en el Parc de Catalunya en Sabadell por las 12 de la mañana.', 'Tomtom', 'Adventurer Cardio + Music', 'Naranja', '-', 'Pulsómetro naranja reproductor de música.', '90140131', 'tomtomadventurecardio', '60.00', 'Pulsometro'),
(14, 'Auriculares Gps Tomtom', '2017-07-11', '2017-07-06', 'Tarragona', 'Me robaron los auriculares en el Parc de la Ciutat mientras estaba estacionada a las 2 de la tarde.', 'Tomtom', 'Auriculares Gps', 'Negro', '-', 'Auriculares gps Tomtom negro', '90129532', 'auricularesgpstomtom', '40.00', 'Auriculares'),
(15, 'Faro delantero MINI led Cree 1800 XM-L T6', '2017-05-02', '2017-04-02', 'Igualada', 'Me robaron el foco delantero de mi bici en la Av de Balmes en Igualada.', 'Cree', 'XM-L T6', 'Negro', '-', 'Faro de color negro y naranja de la marca Cree.', '-', 'miniledcree1800xml', '15.00', 'Faro delantero'),
(16, 'Faro delantero led Cree 6000 XM-L T6 LED 5', '2017-01-30', '2017-01-29', 'Igualada', 'Me robaron el faro delantero en el Barrio de Fatima.', 'Cree', '6000 XM-L T6 LED 5', 'Negro', '-', 'Faro delantero negro', '-', 'ledcree6000xml', '30.00', 'Faro delantero'),
(17, 'GPS Tomtom Runner 3', '2017-02-04', '2017-02-01', 'Badalona', 'Me robaron el pulsómetro mientras iba en bici en la Avinguda Matí Pujol.', 'Tomtom', 'GPS Runner 3', 'Rosa', '-', 'Pulsómetro Tomtom GPS Runner 3 de color rosa.', '90139655', 'gpstomtomrunner3', '20.00', 'Pulsometro'),
(18, 'Orbea Carpe 40', '2016-11-22', '2016-11-21', 'Badalona', 'Me robaron mi bici a las 9 de la noche en la Plaça dels Països Catalans.', 'Orbea', 'Orbea Carpe 40', 'Amarillo', '-', 'Bicicleta Orbea Carpea 40 amarillo.', '2017 - G425', 'orbeacarpe40', '30.00', 'Bicicleta'),
(19, 'Guantes Largos Power WS Gore', '2017-09-01', '2017-08-30', 'Badalona', 'Me robaron mis guantes de ciclista a medianoche mientras iba por la avenida Eduard Maristany.', 'Gore', 'Power WS', 'Blanco', '-', 'Guantes de color blancos y negros, con detalles rojos de la marca Power WS Gore', 'GWPOWE', 'guantespowerwsgore', '15.00', 'Guantes'),
(20, 'Chaqueta Power Gore-tex AS Lady Gore', '2017-08-25', '2017-08-23', 'Sta. Coloma de Gramanet', 'Me robaron la chaqueta de ciclista por el Raval a medianoche.', 'Gore', 'Power AS Lady Gore', 'Verde', '-', 'Chaqueta de ciclista color verde marca Power Gore-tex AS Lady Gore', '-', 'goretexasladygore', '20.00', 'Chaqueta'),
(21, 'Chaqueta Power Gore-tex AS Lady Gore', '2017-08-25', '2017-08-23', 'Sta. Coloma de Gramanet', 'Me robaron la chaqueta de ciclista por el Raval a medianoche.', 'Gore', 'Power AS Lady Gore', 'Verde', '-', 'Chaqueta de ciclista color verde marca Power Gore-tex AS Lady Gore', '-', 'goretexasladygore', '20.00', 'Chaqueta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anunci`
--
ALTER TABLE `anunci`
  ADD PRIMARY KEY (`anu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anunci`
--
ALTER TABLE `anunci`
  MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
