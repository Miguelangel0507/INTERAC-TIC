-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2022 a las 22:20:05
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
-- Base de datos: `interactic`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_datos_usuario` (IN `nombre_usuario` VARCHAR(100), IN `correo` VARCHAR(100), IN `user_name` VARCHAR(80), IN `password` VARCHAR(255))   BEGIN
INSERT INTO datosusuario (nombre, email) VALUES (nombre_usuario, correo);
INSERT INTO usuarios (username, contraseña) VALUES (user_name, password);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosusuario`
--

CREATE TABLE `datosusuario` (
  `id_datos_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(7) NOT NULL DEFAULT 'avatar1',
  `codigo` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosusuario`
--

INSERT INTO `datosusuario` (`id_datos_usuario`, `nombre`, `email`, `avatar`, `codigo`, `fecha`) VALUES
(57, 'Miguel Angel', 'melchormigugel0@gmail.com', 'avatar1', 7772, '2022-06-09 20:43:38'),
(72, 'Miguel Angel', 'melchormiguelangel0@gmail.com', 'avatar1', 0, '2022-06-09 20:43:55'),
(73, 'Camilo', 'Camilo12@gmail.com', 'avatar1', 0, '2022-06-17 16:41:36'),
(74, 'Neider', 'Neider05@gmial.com', 'avatar1', 0, '2022-06-17 16:42:05'),
(75, 'Santi', 'Santi05@gmail.com', 'avatar1', 0, '2022-06-17 16:43:50'),
(76, 'Miguel Angel', 'Miguel@gmial.com', 'avatar1', 0, '2022-06-17 16:45:03'),
(77, 'Jaim', 'Jaime05@gmail.com', 'avatar1', 0, '2022-06-17 16:46:30'),
(78, 'Majo', 'Majo05@gmial.com', 'avatar1', 0, '2022-06-17 16:47:00'),
(79, 'Santiago', 'Santi20@gmial.com', 'avatar1', 0, '2022-06-22 14:21:31'),
(80, 'JAIRO', 'Jairo20@gmail.com', 'avatar1', 0, '2022-06-22 14:22:21'),
(81, 'Jaime', 'Jaime123@gmial.com', 'avatar1', 0, '2022-06-22 14:23:11'),
(82, 'neider', 'piperrente@gmail.com', 'avatar1', 9492, '2022-07-12 20:30:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estados` int(1) NOT NULL,
  `estado` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estados`, `estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntossopa`
--

CREATE TABLE `puntossopa` (
  `id_puntos_sopa` int(11) NOT NULL,
  `puntos_nivel1` int(3) NOT NULL DEFAULT 0,
  `puntos_nivel2` int(3) NOT NULL DEFAULT 0,
  `puntos_nivel3` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puntossopa`
--

INSERT INTO `puntossopa` (`id_puntos_sopa`, `puntos_nivel1`, `puntos_nivel2`, `puntos_nivel3`) VALUES
(57, 0, 0, 0),
(72, 80, 110, 0),
(73, 0, 0, 0),
(74, 0, 0, 0),
(75, 0, 0, 0),
(76, 0, 0, 0),
(77, 0, 0, 0),
(78, 0, 0, 0),
(79, 0, 0, 0),
(80, 0, 0, 0),
(81, 0, 0, 0),
(82, 90, 90, 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntostrivia`
--

CREATE TABLE `puntostrivia` (
  `id_puntos_trivia` int(11) NOT NULL,
  `puntos_nivel1` int(11) NOT NULL DEFAULT 0,
  `puntos_nivel2` int(11) NOT NULL DEFAULT 0,
  `puntos_nivel3` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puntostrivia`
--

INSERT INTO `puntostrivia` (`id_puntos_trivia`, `puntos_nivel1`, `puntos_nivel2`, `puntos_nivel3`) VALUES
(57, 0, 0, 0),
(72, 0, 0, 0),
(73, 0, 0, 0),
(74, 0, 0, 0),
(75, 0, 0, 0),
(76, 0, 0, 0),
(77, 0, 0, 0),
(78, 0, 0, 0),
(79, 0, 0, 0),
(80, 0, 0, 0),
(81, 0, 0, 0),
(82, 90, 90, 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(1) NOT NULL,
  `rol` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `rol`) VALUES
(1, 'Jugador'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sopa_nivel1`
--

CREATE TABLE `sopa_nivel1` (
  `id_palabra` int(11) NOT NULL,
  `palabra` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sopa_nivel1`
--

INSERT INTO `sopa_nivel1` (`id_palabra`, `palabra`) VALUES
(1, 'Google'),
(2, 'Youtube'),
(3, 'Celular'),
(4, 'Usb'),
(5, 'Gmail'),
(6, 'Computador'),
(7, 'Radio'),
(8, 'Redes'),
(9, 'Moto'),
(10, 'Televisor'),
(11, 'Telefono'),
(12, 'Wifi'),
(13, 'Reloj'),
(14, 'Brujula'),
(15, 'Automovil'),
(16, 'Camara'),
(17, 'Cine'),
(18, 'Bombillo'),
(19, 'Avion'),
(20, 'Internet'),
(21, 'Tanque'),
(22, 'Lazer'),
(23, 'Calculador'),
(24, 'Radar'),
(25, 'Altavoz'),
(26, 'Ethernet'),
(27, 'DVD'),
(28, 'DVR'),
(29, 'Mouse'),
(30, 'Taxi'),
(31, 'Robot'),
(32, 'Tren');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sopa_nivel2`
--

CREATE TABLE `sopa_nivel2` (
  `id_palabra` int(11) NOT NULL,
  `palabra` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sopa_nivel2`
--

INSERT INTO `sopa_nivel2` (`id_palabra`, `palabra`) VALUES
(1, 'MuseoDelOro'),
(2, 'CristoRey'),
(3, 'PicoDeLoro'),
(4, 'BahiaConcha'),
(5, 'PlayaAguacate'),
(6, 'CascadaElTigre'),
(7, 'ParqueLasNubes'),
(8, 'LaCienaga'),
(9, 'IslaPalma'),
(10, 'PlayaNudista'),
(11, 'IslaMucura'),
(12, 'CaboDelaVela'),
(13, 'Lamacarena'),
(14, 'Monserrate'),
(15, 'Lasmurallas'),
(16, 'MuseoDelOro'),
(17, 'TorreDelReloj'),
(18, 'LaTatacoa'),
(19, 'MorroDelTucan'),
(20, 'NevadaDelCocuy'),
(21, 'CiudadPerdida'),
(22, 'CuevaDeMorgan'),
(23, 'ElRodadero'),
(24, 'ParqueTayrona'),
(25, 'BosquesDeNiebla'),
(26, 'CastilloBarajas'),
(27, 'VolcanTotumo'),
(28, 'MinaNemocon'),
(29, 'LasGachas'),
(30, 'CerroAzul'),
(31, 'PuertoNariño'),
(32, 'MuseoDelCaribe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sopa_nivel3`
--

CREATE TABLE `sopa_nivel3` (
  `id_palabra` int(11) NOT NULL,
  `palabra` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sopa_nivel3`
--

INSERT INTO `sopa_nivel3` (`id_palabra`, `palabra`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, ' Atlántico'),
(5, 'Bogotá'),
(6, 'Bolivar'),
(7, 'Boyaca'),
(8, 'Caldas'),
(9, 'Caqueta'),
(10, ' Casanare'),
(11, 'Cauca'),
(12, 'Cesar'),
(13, 'Chocó'),
(14, ' Córdoba'),
(15, ' Cundinamarca'),
(16, 'Tolima'),
(17, ' Santander'),
(18, 'Vichada'),
(19, 'Guainía'),
(20, 'Guaviare'),
(21, 'Huila'),
(22, 'LaGuajira'),
(23, 'Magdalena'),
(24, 'Meta'),
(25, 'Nariño'),
(26, 'NorteDeSantander'),
(27, 'Putumayo'),
(28, 'Quindio'),
(29, 'SanAndres'),
(30, 'Risaralda'),
(31, 'Sucre'),
(32, 'ValleDelCauca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trivia_nivel1`
--

CREATE TABLE `trivia_nivel1` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta1` varchar(255) NOT NULL,
  `respuesta2` varchar(255) NOT NULL,
  `respuesta3` varchar(255) NOT NULL,
  `respuesta4` varchar(255) NOT NULL,
  `respuesta_correcta` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trivia_nivel1`
--

INSERT INTO `trivia_nivel1` (`id_pregunta`, `pregunta`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta_correcta`) VALUES
(1, 'Cuál es la capital de Colombia', 'Caracas', 'Lima', 'Bogotá', 'Quito', 'C'),
(2, 'Cuál es la capital de Ecuador', 'Quito', 'Buenos Aires', 'Bogotá', 'Oslo', 'A'),
(3, 'Cuál es la capital de Reino Unido', 'Madrid', 'Londres', 'Ámsterdam', 'Berlín', 'B'),
(4, 'Cuál es la capital de Italia', 'Berlín', 'Lisboa', 'Mónaco', 'Roma', 'D'),
(5, 'Cuál es la capital de Suecia', 'Estocolmo', 'Ankara', 'Atenas', 'Oslo', 'A'),
(6, 'Kiev es capital de?', 'Colombia', 'Estados Unidos', 'Ucrania', 'España', 'C'),
(7, 'Moscú es capital de?', 'Rusia', 'Irlanda', 'Noregua', 'Turquía', 'A'),
(8, 'Ankara es capital de?', 'Turquía', 'Italia', 'Francia', 'Bielorrusia', 'A'),
(9, 'Lisboa es capital de?', 'México', 'Chile', 'Portugal', 'Grecia', 'C'),
(10, 'Tokio es la capital de?', 'Japón', 'Corea del sur', 'Corea del norte', 'China', 'A'),
(11, 'En que continente se encuentra Colombia', 'Asia', 'Europa', 'Antartida', 'America', 'D'),
(12, 'En que continente se encuentra China', 'Asia', 'Europa', 'Antartida', 'America', 'A'),
(13, 'En que continente se encuentra Rusia', 'Asia', 'Europa', 'Antartida', 'America', 'B'),
(14, 'En que continente se encuentra Tonga', 'Oceania', 'Europa', 'Antartida', 'America', 'A'),
(15, 'Cual es la capital de Tonga', 'Kabul', 'Bruselas', 'Nukualofa', 'Trípoli', 'C'),
(16, 'Trípoli es la capital de?', 'Liberia', 'Libia', 'Etiopia', 'Turquia', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trivia_nivel2`
--

CREATE TABLE `trivia_nivel2` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta1` varchar(255) NOT NULL,
  `respuesta2` varchar(255) NOT NULL,
  `respuesta3` varchar(255) NOT NULL,
  `respuesta4` varchar(255) NOT NULL,
  `respuesta_correcta` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trivia_nivel2`
--

INSERT INTO `trivia_nivel2` (`id_pregunta`, `pregunta`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta_correcta`) VALUES
(1, '¿Qué sitio emblemático de Colombia es reconocido por su tierra rojiza y sus cactus que se estiran en forma de candelabro y componen un paisaje árido y de película?', 'La Guajira', 'Amazonas', 'Parque Nacional Natural Utría', 'Desierto del Tatacoa', 'D'),
(2, '¿Municipio que se caracteriza por conservar una arquitectura de estilo colonial, por la variedad de sus paisajes rurales y  por sus calles principales empedradas, que se encuentra rodeadas por antiguos edificios coloniales?', 'Villa de leyva', 'Bolívar', 'Cúcuta', 'Popayán', 'A'),
(3, '¿Ciudad antigua que está ubicada en la Sierra Nevada de Santa Marta, donde una vez habitaron los Tayronas? ', 'Pereira', 'Emberá Katío', 'Wayú', 'Ciudad perdida', 'D'),
(4, '¿Es el extremo que se encuentra más al norte de la placa continental de América del Sur, ubicada al extremo norte de la península de La Guajira?', 'Santa Marta', 'Bahía Solano', 'Buenaventura', 'Punta Gallinas', 'D'),
(5, '¿Qué lugar reúne tanto misterio y belleza a la vez rodeadas de montañas cubiertas de exuberante selva tropical que cortan el mar y sus calmadas y cálidas aguas son un lugar propicio para la llegada de especies migratorias?', 'Cali', 'Buenaventura', 'Parque Natural Utría, Chocó', 'Amazonas', 'C'),
(6, '¿Rio que es llamado cariñosamente así porque a través de sus aguas cristalinas puedes observar tonos amarillos, azules, verdes, rojos y negros?', 'Río Amazonas', 'Río Baudó', 'Río San Juan', 'Caño Cristales', 'D'),
(7, '¿Lugar que cuenta con una gran población de árboles como la palma de cera?', 'Valle del cocora', 'Parque Natural El Cocuy.', 'Parque Natural Tayrona', 'Nevado del Ruiz', 'A'),
(8, '¿Es una serranía colombiana, ubicada en el departamento del Meta?', 'Serranía de Naquén', 'Serranía de la Macarena', 'Parque Natural Tayrona', 'Serranía de San Lucas', 'B'),
(9, '¿Dónde queda ubicado el nevado del Ruíz?', 'Pereira', 'Putumayo', 'Chigorodó', 'Tolima', 'D'),
(10, '¿Dónde esta ubicado el zoológico ukumarí?', 'Bogotá', 'Tolima', 'Pereira', 'Popayán', 'C'),
(11, 'En que ciuada de colombia esta ubicado el atractivo turístico Cerro Monserrate?', 'Medellin', 'Cali', 'Barranquilla', 'Bogotá', 'D'),
(12, 'El atractivo Museo Naval del Caribe se encuentra en', 'Pereira', 'Palmira', 'cartagenas', 'Honda', 'C'),
(13, 'El atractivo Puente Colgante de Occidente uno de los 7 puentes colgantes más importantes del mundo se encuentra en', 'Antioquia', 'Norte de Santander', 'Córdoba', 'Chocó', 'A'),
(14, 'El Morro del Tulcán o Pirámide de Tucán es el principal sitio arqueológico y turistico de', 'La Guajira', 'Popayán', 'Córdoba', 'Meta', 'B'),
(15, 'El atractivo sitio turistico de la Sierra Nevada del Cocuy se encuentra en', 'La Guajira', 'Risaralda', 'Córdoba', 'Casanare', 'D'),
(16, 'El atractivo sitio turistico del Volcán del Totumo se encuentra en', 'Valle del Cauca', 'Caldas', 'Bolívar', 'Tolima', 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trivia_nivel3`
--

CREATE TABLE `trivia_nivel3` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta1` varchar(255) NOT NULL,
  `respuesta2` varchar(255) NOT NULL,
  `respuesta3` varchar(255) NOT NULL,
  `respuesta4` varchar(255) NOT NULL,
  `respuesta_correcta` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trivia_nivel3`
--

INSERT INTO `trivia_nivel3` (`id_pregunta`, `pregunta`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta_correcta`) VALUES
(1, '¿En que epoca se creo el telefono?', '1864', '1854', '2000', '2020', 'B'),
(2, '¿En qué país se creó el primer computador?', 'Alemania', 'Colombia', 'Estados Unidos', 'China', 'A'),
(3, '¿Quién inventó el bombillo?', 'Thomas Alva Edison', 'Albert Einstein', 'Nikola Tesla', 'Humphry Davy', 'D'),
(4, '¿En que año se creo automóvil?', '2020', '1886', '1764', '1889', 'B'),
(5, '¿En qué país se creó el primer avión?', 'Venezuela', 'Alemania', 'China', 'Estados Unidos', 'D'),
(6, '¿Quiénes inventaron el internet?', 'Robert Kahn y Vinton cerf', 'Leonardo da Vinci y Vinton cerf', 'Thomas Edison y Robert Kahn', 'Arquímedes y Nikola Tesla', 'A'),
(7, '¿Cuántos fueron los fundadores de Facebook?', '3', '5', '1', '7', 'B'),
(8, '¿En que año se creo Facebook?', '1990', '1980', '2004', '2000', 'C'),
(9, '¿Qué es la internet?', 'Una computadora', 'Una red', 'Un Teléfono', 'Un carro', 'B'),
(10, '¿En qué país se  inventó la máquina de escribir?', 'Perú', 'Japón', 'Gran Bretaña', 'Estados Unidos', 'C'),
(11, '¿En que pais se creo el primer automovil?', 'China', 'Francia', 'Estados Unidos', 'Alemania', 'D'),
(12, '¿En que año se invento el piano?', '1720', '1830', '1998', '2002', 'a'),
(13, '¿En que pais se invento el papel?', 'Estados Unidos', 'China', 'Colombia', 'Japón', 'B'),
(14, '¿En que año se creo la web?', '1989', '1890', '1990', '2000', 'A'),
(15, '¿Quienes inventaron la web?', 'Hedy Lamarr y John O\'Sullivan', 'Diethelm Ostry y John Dean', 'Tim Berners-Lee y Robert Cailliau', 'Guillermo Marconi y Nikola Tesla', 'C'),
(16, '¿En que año se invento la radio?', '1890', '2004', '1799', '1897 ', 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_username` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `rol_usuario` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_username`, `username`, `contraseña`, `estado`, `rol_usuario`) VALUES
(57, 'Miguel0', '$2y$10$kBj6bHPz1oWoFAhhWBi7Q.6ZKLPVk5VNkjFaiQ.jEUlCNpjZBxlWm', 1, 2),
(72, 'Miguel05', '$2y$10$raUDrw1ZaNoJ9JCjrRhC/OE2CS4lpPvOBkmCgcO5C9jsZ5gexiCPO', 1, 1),
(73, 'Camilo12', '$2y$10$gQh7bqo2Omemr9H5FE8BU.hf7BUjN9/ESJ63YoDctNSiCEPnADCEK', 1, 1),
(74, 'Neider05', '$2y$10$OX/BZGqjkE9eIAHejDGf7eBxlQIzPfuNCiS76q9DEZrfYTBg8Vc8.', 1, 1),
(75, 'Santi05', '$2y$10$CUX0mo.f8BvmN6VbLior/uEknf1.c1XfMjby7xEnQ5OSrPawO8nAy', 1, 1),
(76, 'Miguel', '$2y$10$43HmLYIJjD03VXpWHnR5ruu2rM25NpOgG63Fw6gXswIPZCZNdp1wS', 1, 1),
(77, 'Jaime05', '$2y$10$rgxoDXkjoujkJqeOuxplTucfgv5HOc/7q8EIp/VhC9hRM4mTzoQn6', 1, 1),
(78, 'Majo05', '$2y$10$PO9xySN4GS6Pnh7PoBMo..Ly/wxQGzqVecdJuRcPOPo5Tn7CVR/9a', 1, 1),
(79, 'Santi20', '$2y$10$V6xuSMrbGzfqIGx9N5/k7uid4allSZYcJWOibopRAEqp1ZY1FgOiK', 1, 1),
(80, 'Jairo20', '$2y$10$OPQHNTLWEjT9KDh.wbwShOq5TVo7/ro6lQr9FLBLRFk2Bqh/lmyAS', 1, 1),
(81, 'Jaime123', '$2y$10$CuWS1GRUl.jOUapEHyCsJeT1V.Ur9Q9nASl7E.9GiuSXvckp62/HG', 1, 1),
(82, 'neider', '$2y$10$9R2t1deBg5h8tC4Cj.p5TeFAKUv2FTCKBT6X.bW3/sdzoLaHQffYG', 1, 1);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuario_puntos_sopa` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN 
	INSERT into puntossopa()
    VALUES();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuario_puntos_trivia` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN
	INSERT INTO puntostrivia()
    VALUES();
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  ADD PRIMARY KEY (`id_datos_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estados`);

--
-- Indices de la tabla `puntossopa`
--
ALTER TABLE `puntossopa`
  ADD PRIMARY KEY (`id_puntos_sopa`);

--
-- Indices de la tabla `puntostrivia`
--
ALTER TABLE `puntostrivia`
  ADD PRIMARY KEY (`id_puntos_trivia`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indices de la tabla `sopa_nivel1`
--
ALTER TABLE `sopa_nivel1`
  ADD PRIMARY KEY (`id_palabra`);

--
-- Indices de la tabla `sopa_nivel2`
--
ALTER TABLE `sopa_nivel2`
  ADD PRIMARY KEY (`id_palabra`);

--
-- Indices de la tabla `sopa_nivel3`
--
ALTER TABLE `sopa_nivel3`
  ADD PRIMARY KEY (`id_palabra`);

--
-- Indices de la tabla `trivia_nivel1`
--
ALTER TABLE `trivia_nivel1`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `trivia_nivel2`
--
ALTER TABLE `trivia_nivel2`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `trivia_nivel3`
--
ALTER TABLE `trivia_nivel3`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `FK_usuario_rol` (`rol_usuario`),
  ADD KEY `usuario_estado` (`estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  MODIFY `id_datos_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `puntossopa`
--
ALTER TABLE `puntossopa`
  MODIFY `id_puntos_sopa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `puntostrivia`
--
ALTER TABLE `puntostrivia`
  MODIFY `id_puntos_trivia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `sopa_nivel1`
--
ALTER TABLE `sopa_nivel1`
  MODIFY `id_palabra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `sopa_nivel2`
--
ALTER TABLE `sopa_nivel2`
  MODIFY `id_palabra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `sopa_nivel3`
--
ALTER TABLE `sopa_nivel3`
  MODIFY `id_palabra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `trivia_nivel1`
--
ALTER TABLE `trivia_nivel1`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `trivia_nivel2`
--
ALTER TABLE `trivia_nivel2`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `trivia_nivel3`
--
ALTER TABLE `trivia_nivel3`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_username` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `puntossopa`
--
ALTER TABLE `puntossopa`
  ADD CONSTRAINT `puntossopa_ibfk_1` FOREIGN KEY (`id_puntos_sopa`) REFERENCES `usuarios` (`id_username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `puntostrivia`
--
ALTER TABLE `puntostrivia`
  ADD CONSTRAINT `puntostrivia_ibfk_1` FOREIGN KEY (`id_puntos_trivia`) REFERENCES `usuarios` (`id_username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_usuario_rol` FOREIGN KEY (`rol_usuario`) REFERENCES `roles` (`id_roles`),
  ADD CONSTRAINT `usuario_estado` FOREIGN KEY (`estado`) REFERENCES `estados` (`id_estados`),
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_username`) REFERENCES `datosusuario` (`id_datos_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
