-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2017 a las 20:00:03
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
  `anu_talla` varchar(2) CHARACTER SET utf32 COLLATE utf32_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`, `anu_talla`) VALUES
(1, 'Orbea MX 10 29', '2017-10-15', '2017-10-11', 'El Prat de Llobregat', 'Me robaron la bicicleta en Sant Cosme con una navaja y no pude hacer nada.', 'Orbea', 'MX 10', 'Negro', '-', 'Bicicleta negra Orbea MX 10 con ruedas de 29 pulgadas.', '2017 - G211', 'orbeamx1029.jpg', '30.00', 'M'),
(2, 'Bergamont Revox Pro Carbon 29', '2017-09-02', '2017-09-27', 'Hospitalet de Llobregat', 'Al entrar al metro de la Florida perdí las gafas en la parada del metro de la L1 El Clot.', 'Bergamont', 'Revox Pro Carbon 29', 'Amarillo', '-', 'Bicicleta de montaña, viene montada con un cuadro de carbono ligero. Color Amarillo', '1630655', 'revoxpro.jpg', '20.00', 'S'),
(3, 'Camber Comp 29 Specialized ', '2017-10-04', '2017-10-05', 'Barcelona', 'Me robaron la bicileta mientras me descuidé en plaza Cataluña, cerca del metro frente al Corte Inglés.', 'Specialized', 'Camber Comp 29', 'Rojo', '-', 'Bicicleta de Color blanco y talla M', '93217-5003', 'cambercomp.jpg', '30.00', 'M'),
(4, 'Orbea Rallon X30', '2017-10-14', '2017-09-15', 'Hospitalet de Llobregat', 'Me robaron la bicicleta de montaña cuando volvía a casa con una navaja.', 'Orbea', 'Rallon X30', 'Azul', '-', 'Bicicleta de montaña Orbea Rallon X 30 de color amarillo.', '2017 - G268', 'orbearallonx30.jpg', '50.00', 'L'),
(5, 'Orbea MX 50 29', '2017-08-14', '2017-08-10', 'El Prat de Llobregat', 'Me robaron la bicileta en Sant Cosme y aún no he sabido nada de ellas.', 'Orbea', 'MX 50 29', 'Negro', '-', 'Bicicleta para montaña con posición del pedaleo que reduce la fatiga. \r\nColor blanco y talla M', '2017 - G201', 'mx50.jpg', '50.00', 'M'),
(6, 'Haibike SDURO HardNine 4.0 400Wh', '2017-10-10', '2017-09-29', 'Girona', 'Me robaron la bicicleta cerca de la catedral de Girona a las 7 de la tarde.', 'Haibike', 'SDURO HardNine 4.0 400Wh', 'Negro', '-', 'Bicicleta con cuadro de aluminio y componentes Shimano. Color negro y talla S', '4542009740', 'haibikesduro.jpg', '70.00', 'S'),
(7, 'Orbea Oiz M30 27', '2017-05-17', '2017-05-01', 'Girona', 'Me robaron la bicicleta cerca de la residencia de estudiantes de la Universidad de Girona a las 9.', 'Orbea', 'Oiz M30 27', 'Negro', '-', 'Bicicleta de talla S y de color Negro.', '2017 - G251', 'oizm3027.jpg', '40.00', 'S'),
(8, 'Giant Talon 1 LTD 27.5', '2017-07-02', '2017-07-01', 'Tarragona', 'Me robaron la bicicleta en Vilaseca con una navaja por la madrugada, a las 5 de la mañana.', 'Giant', 'Talon 1 LTD 27.', 'Blanco', '-', 'Bicicleta de montaña deportiva. Color blanco y Talla S ', '2016 - 62040214', 'talon1.jpg', '40.00', 'S'),
(9, 'Conor WRC Team GX1 27.5', '2016-10-03', '2016-10-01', 'Tarragona', 'Me robaron la bicicleta de mi hijo mientras me las quitaba para ir a la playa en Cambrils por las 4 de la tarde.', 'Conor', 'WRC Team GX1 27.5', 'Negro', '-', 'Una bicicleta con un ligero cuadro de Aluminio con tubería conificada. Color Negro.', '2016 - 610604RO', 'wrcteam.jpg', '15.00', 'S'),
(10, 'S-Works Epic XX1 Eagle 29 Specialized', '2016-06-08', '2016-06-01', 'Barcelona', 'Me robaron la bicicleta mientras la dejé estacionada en Sitges.', 'Specialized', 'S-Works Epic XX1 Eagle 29', 'Negro', '-', 'Bicicleta rígida con 12 velocidades y ligeras ruedas Roval.', '2018 90318-02', 'sworks.jpg', '50.00', 'XL'),
(11, 'Haibike Sduro FullNine 7.0 500Wh 29', '2016-12-23', '2016-12-20', 'Tarragona', 'Me robaron la bicileta en el Carrer Andorra en Calafell a las 8 de la noche.', 'Haibike', 'Sduro FullNin 7.0 500Wh ', 'Negro', '-', 'Bicicleta con cuadro ligero de talla XL y de color negro', '4544820752', 'sdurofullNine.jpg', '99.99', 'XL'),
(12, 'Giant Defy Advanced 3-CDB', '2016-03-03', '2016-03-05', 'Girona', 'Las ruedas de mi bicicleta fueron robadas cuando me despisté cerca del Castell de Sant Gregori. Pude ver como unos chicos me robaban y se iban huyendo.', 'Giant', 'Defy Advanced 3-CDB', 'Blanco', '-', 'Bicicleta viene equipada con frenos de disco es de color blanco', '70002314', 'giantdefyadvanced.jpg', '80.50', 'M'),
(13, 'Haibike Xduro AllMtn 9.0', '2016-11-10', '2016-11-01', 'Barcelona', 'Me robaron el pulsómetro en el Parc de Catalunya en Sabadell por las 12 de la mañana.', 'Haibike', 'Xduro AllMtn 9.0', 'Azul', '-', 'Bicicleta eléctrica para todo tipo de rutas por montaña  se caracteriza por su total polivalencia y potencia de su batería de 500 Wh.', '2018 - 45403448', 'haibikexduro.jpg', '60.00', 'L'),
(14, 'Fatboy Pro Trail Specialized', '2017-07-11', '2017-07-06', 'Tarragona', 'Me robaron la bicicleta en el Parc de la Ciutat mientras estaba estacionada a las 2 de la tarde.', 'Specialized', 'Fatboy Pro Trail', 'Verde', '-', 'Bicicleta de la marca Specialized, de color verde y talla M.', '99516-1003', 'fatboypro.jpg', '40.00', 'M'),
(15, 'Orbea Alma M30 Eagle 29', '2017-05-02', '2017-04-02', 'Igualada', 'Me robaron la bicicleta en la Av de Balmes en Igualada.', 'Orbea', 'Alma M30 Eagle 29', 'Amarillo', '-', 'Bicicleta de la marca Orbea, color amarillo y talla L.', '2018 - I231', 'almam3.jpg', '15.00', 'L'),
(16, 'Giant XtC Advanced SL 1 27.5', '2017-01-30', '2017-01-29', 'Igualada', 'Me robaron la bicicleta en el Barrio de Fatima.', 'Giant', 'XtC Advanced SL 1 27.5', 'Amarillo', '-', 'Bicicleta ruedas de 27.5, color Amarillo y talla XL .', '60033717', 'xtcadvancedsl.jpg', '30.00', 'XL'),
(17, 'Giant XTC Advanced 2 27.5\"+ 2017', '2017-02-04', '2017-02-01', 'Badalona', 'Me robaron la bicicleta mientras en la Avinguda Matí Pujol.', 'Giant', 'XTC Advanced 2 27.5\"', 'Verde', '-', 'Bicicleta ruedas de 27,5, color Verde y de talla XL.', '2017 - 7003671', 'xtcadvanced2.jpg', '20.00', 'XL'),
(18, 'Orbea Carpe 40', '2016-11-22', '2016-11-21', 'Badalona', 'Me robaron mi bici a las 9 de la noche en la Plaça dels Països Catalans.', 'Orbea', 'Carpe 40', 'Amarillo', '-', 'Bicicleta Orbea Carpea 40 amarillo.', '2017 - G425', 'orbeacarpe40.jpg', '30.00', 'XL'),
(19, 'Conor WRC Pro 25aniv. 29', '2017-09-01', '2017-08-30', 'Badalona', 'Me robaron la bicicleta a medianoche mientras iba por la avenida Eduard Maristany.', 'Conor', 'Advanced 1 27.5\"+ 2017', 'Blanco', '-', 'Bicicleta de cuadro de aluminio, color blanco y marca M', '2016 - 610630NG', 'conorwrcpro.jpg', '15.00', 'M'),
(20, 'Giant XtC Advanced 1.5 LTD 27.5', '2017-08-25', '2017-08-23', 'Sta. Coloma de Gramanet', 'Me robaron la bicicleta de ciclista por el Raval a medianoche.', 'Giant', 'XtC Advanced 1.5 LTD 27.5', 'Azul', '-', 'Bicicleta de ruedas 27.5 con, de color Azul y talla XL.', '2016 - 620306', 'xtcadvanced.jpg', '20.00', 'XL'),
(21, 'S-Works Epic XTR Di2 29 Specialized', '2017-08-25', '2017-08-23', 'Sta. Coloma de Gramanet', 'Me robaron la chaqueta de ciclista a las cinco de la mañana por la plaza de Monterrey.', 'Specialized', 'S-Works Epic XTR Di2 29 ', 'Rojo', '-', 'Bicicleta de la marca Specialized, color rojo y talla M.', '2018 90318-00', 'sworksepicxtr.jpg', '30.00', 'M'),
(22, 'Bergamont Contrail LTD 29\"', '2017-10-21', '2017-10-20', 'Badalona', 'Me robaron la bici a las diez de la mañana mientras iba por el Parc de Can Solei i Cal Arnús.', 'Bergamont', 'Contrail LTD 29\"', 'Verde', '-', 'Bici verde de la marca Bergamont con ruedas de 29\".', '4250563374186', 'contrailltd29.jpg', '50.00', 'L'),
(23, 'Revox Edition Blue Bergamont', '2016-12-02', '2016-12-01', 'Badalona', 'Me robaron por el Parc de la Bòbila a medianoche con una navaja.', 'Bergamont', 'Revox Edition Blue', 'Azul', '-', 'Bici azul de la marca Bergamont con ruedas de 29\".', '2017 - 2519570', 'revoxblue.jpg', '40.00', 'L'),
(24, 'Conor WRC Trace XT 29\"', '2016-11-04', '2016-11-02', 'El Prat de Llobregat', 'Me robaron la bici mientras esperaba a un amigo en la parada de la L9 de Parc Nou por las once de la mañana.', 'Conor', 'WRC Trace XT', 'Negro', '-', 'Bici de la marca Conor de color negro y con detalles azules. Tiene ruedas 29\".', '2016 - 610410AZ', 'wrctracext.jpg', '99.99', 'L'),
(25, 'Haibike Xduro Nduro 10.0', '2017-09-22', '2017-09-21', 'El Prat de Llobregat', 'Mientras estaba en el Parc Lúdic fluvial del Prat de Llobregat, me robaron la bici por las seis de la tarde.', 'Haibike', 'Xduro Nduro 10.0', 'Gris', '-', 'Bicicleta gris con detalles rojos, blancos y amarillos de la marca Haibike. Tiene ruedas de 27,5\".', '2018-454037084', 'xduronduro.jpg', '99.00', 'S'),
(26, 'E-Trailster 8.0 Bergamont', '2017-09-28', '2017-09-27', 'Girona', 'Me robaron la bici mientras iba con unos amigos un grupo de adolescentes con unas navajas. Ocurrió en el Parc de la Devesa a las 11 de la noche.', 'Bergamont', 'E-Trailster 8.0', 'Negro', '-', 'Bicicleta de la marca Bergamont de color negro con detalles naranjas.', '2017 - 2520240', 'etrailster.jpg', '50.00', 'M'),
(27, 'Crave 29 Specialized', '2017-08-30', '2017-08-25', 'Girona', 'Me robaron la bici cerca del Carrer de Sant Dionís, frente al Museu de l\'aigua por las doce de la noche.', 'Specialized', 'Crave', 'Blanco', '-', 'Bici blanca con detalles rojos y negros. Es de la marca Specialized, del modelo Crave y tiene ruedas de 29\".', '91716-7004', 'cravespecialized.jpg', '80.00', 'L'),
(28, 'Orbea Carpe 20', '2017-10-10', '2017-10-07', 'Hospitalet de Llobregat', 'Me robaron la bici mientras me dirigía a mi casa por los bloques de la Florida de la L1 a la una de la mañana.', 'Orbea', 'Carpe 20', 'Blanco', '-', 'Bici de la marca Orbea, modelo Carpe 20, de color blanco. Es una bici ligera y urbana.', '2017 - G425', 'orbeacarpe20.jpg', '30.00', 'XL'),
(29, 'Giant Defy 2', '2016-07-20', '2016-07-18', 'Igualada', 'Me robaron la bici a las dos de la mañana por la Plaça de la Sardana, la dejé estacionada y cuando volví ya no estaba.', 'Giant', 'Defy 2', 'Azul', '-', 'Bici de la marca Giant, modelo Defy 2 cuadro de aluminio ALUXX SL', '2016 - 600011', 'giantdefy2.jpg', '30.00', 'L'),
(30, 'Orbea Alma M15 29', '2017-04-23', '2017-04-20', 'Sta. Coloma de Gramanet', 'Me robaron la bici en el Parc de la Trinitat. Cuando me quise dar cuenta ya no estaba donde la dejé estacionada hace un momento por las siete de la tarde. ', 'Orbea', 'Alma M15 29', 'Verde', '-', 'Bicicleta de la marca Orbea, modelo Alma M15 29 con cuadro de aluminio hydroformed triple butted y grupo Shimano.', '2018 - I233', 'almam15.jpg', '40.00', 'S');

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
  MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
