-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2017 a las 19:58:17
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
(1, 'Orbea MX 10 29\"', '2017-10-15', '2017-10-11', 'El Prat del Llobregat', 'Me robaron la bici en Sant Cosme con una navaja y no pude hacer nada.', 'Orbea', 'MX 10', 'Negro', '-', 'Bicicleta negra Orbea MX 10 con ruedas de 29 pulgadas.', '-', 'orbeamx1029', '30.00', ''),
(2, 'Bergamont Revox Pro Carbon 29', '2017-09-02', '2017-09-27', 'Hospitalet de Llobregat', 'Al entrar al metro de la Florida perdí las gafas en la parada del metro de la L1 El Clot.', 'Bergamont', 'Revox Pro Carbon 29', 'Amarilla', '-', 'Bicicleta de montaña, viene montada con un cuadro de carbono ligero y resistente.', '-', 'revoxpro', '20.00', 'S'),
(3, 'Camber Comp 29 Specialized (Exposición)', '2017-10-04', '2017-10-05', 'Barcelona', 'Me robaron la bicileta mientras me descuidé en plaza Cataluña, cerca del metro frente al Corte Inglés.', 'Specialized', 'Camber Comp 29', 'Roja', '-', 'Bicibleta de resistencia tecnificada, con un medidor de potencia Quarq Els.\r\nColor blanco y talla M', '93217-5003', 'cambercomp', '30.00', 'M'),
(4, 'Orbea Rallon X30', '2017-10-14', '2017-09-15', 'Hospitalet de Llobregat', 'Me robaron la bici de montaña cuando volvía a casa con una navaja.', 'Orbea', 'Rallon X30', 'Amarillo', '-', 'Bicicleta de montaña Orbea Rallon X 30 de color amarillo.', '2017 - G268', 'orbearallonx30', '50.00', ''),
(5, 'Orbea MX 50 29', '2017-08-14', '2017-08-10', 'El Prat del Llobregat', 'Me robaron la bicileta en Sant Cosme y aún no he sabido nada de ellas.', 'Orbea', 'MX 50 29', 'Negro', '-', 'Bicicleta para montaña con posición del pedaleo que reduce la fatiga. \r\nColor blanco y talla M', '2017 - G201', 'mx50', '50.00', 'M'),
(6, 'Orbea Keram MTB 30 27 Eléctrica', '2017-10-10', '2017-09-29', 'Girona', 'Me robaron la bicicleta cerca de la catedral de Girona a las 7 de la tarde.', 'Orbea', 'Keram MTB 30 27 Eléctrica', 'Azul', '-', 'Bicicleta con cuadro de aluminio y componentes Shimano. Color negro y talla S', '2017 - G332', 'kerammtb', '70.00', 'S'),
(7, 'Giant Propel Advanced 1', '2017-05-17', '2017-05-01', 'Girona', 'Me robaron la bicicleta cerca de la residencia de estudiantes de la Universidad de Girona a las 9.', 'Giant', 'Propel Advanced 1', 'Rojo', '-', 'Bicicleta de la talla 49. Marca Specialized Sport MTB 2016 de color gris.', '-', 'propeladvanced', '40.00', 'S'),
(8, 'Giant Talon 1 LTD 27.5', '2017-07-02', '2017-07-01', 'Tarragona', 'Me robaron la bicicleta en Vilaseca con una navaja por la madrugada, a las 5 de la mañana.', 'Giant', 'Talon 1 LTD 27.', 'Blanco', '-', 'Bicicleta de montaña deportiva ligera con cuadro de ALUXX. Color blanco y Talla S ', '2016 - 62040214', 'talon1', '40.00', 'S'),
(9, 'Conor WRC Team GX1 27.5', '2016-10-03', '2016-10-01', 'Tarragona', 'Me robaron la bicicleta de mi hijo mientras me las quitaba para ir a la playa en Cambrils por las 4 de la tarde.', 'Conor', 'WRC Team GX1 27.5', 'Negro', '-', 'Una bicicleta con un ligero cuadro de Aluminio con tubería conificada', '2016 - 610604RO', 'wrcteam', '15.00', 'S'),
(10, 'Ruedas Mavic Ksyrium Pro Disc', '2016-06-08', '2016-06-01', 'Barcelona', 'Me robaron las ruedas de mi bici mientras la dejé estacionada en Sitges.', 'Mavic', 'Ksyrium Pro Disc', 'Negro', '-', 'Ruedas de 26mm x 17mm.', '2017 - P83091', 'mavicksysriumprodisc', '50.00', ''),
(11, 'Haibike Sduro FullNine 7.0 500Wh 29', '2016-12-23', '2016-12-20', 'Tarragona', 'Me robaron la bicileta en el Carrer Andorra en Calafell a las 8 de la noche.', 'Haibike', 'Sduro FullNin', 'Negro', '-', 'Bicicleta con cuadro ligero y resiste de Aluminio hidroformado y transmisión Shimano Deore', '4544820752', 'sdurofullNine', '99.99', 'XL'),
(12, 'Ruedas Mavic Cosmic CXR80 TUB', '2016-03-03', '2016-03-05', 'Girona', 'Las ruedas de mi bici fueron robadas cuando me despisté cerca del Castell de Sant Gregori. Pude ver como unos chicos me robaban y se iban huyendo.', 'Mavic', 'Cosmic CXR80 TUB', 'Negro', '-', 'Ruedasde 80mm x 27mm.', '-', 'maviccosmiccxr80tub', '80.50', ''),
(13, 'GPS Tomtom Adventurer Cardio + Music', '2016-11-10', '2016-11-01', 'Barcelona', 'Me robaron el pulsómetro en el Parc de Catalunya en Sabadell por las 12 de la mañana.', 'Tomtom', 'Adventurer Cardio + Music', 'Naranja', '-', 'Pulsómetro naranja reproductor de música.', '90140131', 'tomtomadventurecardio', '60.00', ''),
(14, 'Auriculares Gps Tomtom', '2017-07-11', '2017-07-06', 'Tarragona', 'Me robaron los auriculares en el Parc de la Ciutat mientras estaba estacionada a las 2 de la tarde.', 'Tomtom', 'Auriculares Gps', 'Negro', '-', 'Auriculares gps Tomtom negro', '90129532', 'auricularesgpstomtom', '40.00', ''),
(15, 'Orbea Alma M30 Eagle 29', '2017-05-02', '2017-04-02', 'Igualada', 'Me robaron la bicicleta en la Av de Balmes en Igualada.', 'Orbea', 'Alma M30 Eagle 29', 'Amarillo', '-', 'Bicicleta con transmisión monoplato de 12 velocidades Sram Eagle GX con cassette 10/50 dientes, además de la conocida horquilla RockShox Reba RL de aire con 100 mm de recorrido.', '2018 - I231', 'almam3', '15.00', 'L'),
(16, 'Giant XtC Advanced SL 1 27.5', '2017-01-30', '2017-01-29', 'Igualada', 'Me robaron la bicicleta en el Barrio de Fatima.', 'Giant', 'XtC Advanced SL 1 27.5', 'Amarillo', '-', 'Bicicleta con un cuadro de composite grado Advanced SL de peso pluma, específico para ruedas de 27.5 ', '60033717', 'xtcAdvancedsl', '30.00', 'XL'),
(17, 'Giant XTC Advanced 2 27.5\"+ 2017', '2017-02-04', '2017-02-01', 'Badalona', 'Me robaron la bicicleta mientras en la Avinguda Matí Pujol.', 'Giant', 'GPS Runner 3', 'Verde', '-', 'Bicicleta rígida con capacidades similares a una doble gracias a sus ruedas de 27,5.', '2017 - 7003671', 'xtcadvanced2', '20.00', 'XL'),
(18, 'Orbea Carpe 40', '2016-11-22', '2016-11-21', 'Badalona', 'Me robaron mi bici a las 9 de la noche en la Plaça dels Països Catalans.', 'Orbea', 'Orbea Carpe 40', 'Amarillo', '-', 'Bicicleta Orbea Carpea 40 amarillo.', '2017 - G425', 'orbeacarpe40', '30.00', ''),
(19, 'Giant XTC Advanced 1 27.5\"+ 2017', '2017-09-01', '2017-08-30', 'Badalona', 'Me robaron la bicicleta a medianoche mientras iba por la avenida Eduard Maristany.', 'Giant', 'Advanced 1 27.5\"+ 2017', 'Rojo', '-', 'Bicicleta ideal para condiciones con nieve o mucha arena. Incorpora los ejes Boost más anchos que aumentan su estabilidad', '2017 - 7003671', 'xtcadvanced1275', '15.00', 'L'),
(20, 'Giant XtC Advanced 1.5 LTD 27.5', '2017-08-25', '2017-08-23', 'Sta. Coloma de Gramanet', 'Me robaron la bicicleta de ciclista por el Raval a medianoche.', 'Giant', 'XtC Advanced 1.5 LTD 27.5', 'Azul', '-', 'Bicicleta específica para ruedas 27.5 con combinación de peso, confort y rendimiento de élite.', '2016 - 620306', 'xtcadvanced', '20.00', 'XL'),
(21, 'Montaje Escapa S-Works Epic 29 EAGLE', '2017-08-25', '2017-08-23', 'Sta. Coloma de Gramanet', 'Me robaron la chaqueta de ciclista a las cinco de la mañana por la plaza de Monterrey.', 'Escapa', 'S-Works Epic 29 EAGLE', 'Rojo', '-', 'Bicicleta con precisión de montaje.\r\nColor rojo y talla XL', '2016', 'sworks', '30.00', 'XL');

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
  MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
