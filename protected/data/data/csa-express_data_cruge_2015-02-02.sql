-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-02-2015 a las 09:22:15
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `csa-express`
--

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`id`, `nombre`, `email`, `matriz`, `direccion_id`) VALUES
(4, 'Alausí', NULL, 0, 9),
(5, 'Atacames', NULL, 0, 10),
(6, 'Atahualpa', NULL, 0, 11),
(7, 'Cayambe', NULL, 0, 12);

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`, `estado`, `tipo`, `tiempo_entrega`, `provincia_id`) VALUES
(4, 'Cuenca', 'ACTIVO', 'PRINCIPAL', 24, 3),
(5, 'Baños de Cuenca', 'ACTIVO', 'SECUNDARIA', 24, 3),
(6, 'Capulispamba', 'ACTIVO', 'SECUNDARIA', 24, 3),
(7, 'Atuntaqui', 'ACTIVO', 'PRINCIPAL', 24, 10),
(8, 'Ibarra', 'ACTIVO', 'PRINCIPAL', 24, 10),
(9, 'Otavalo', 'ACTIVO', 'PRINCIPAL', 24, 10),
(10, 'Andrade Marin', 'ACTIVO', 'SECUNDARIA', 24, 10),
(11, 'Chaltura', 'ACTIVO', 'SECUNDARIA', 24, 10),
(12, 'Natabuela', 'ACTIVO', 'SECUNDARIA', 24, 10),
(13, 'San Antonio', 'ACTIVO', 'SECUNDARIA', 24, 10),
(14, 'Yahuarcocha', 'ACTIVO', 'SECUNDARIA', 24, 10),
(15, 'Perugachi', 'ACTIVO', 'SECUNDARIA', 48, 10),
(16, 'Quiroga', 'ACTIVO', 'SECUNDARIA', 48, 10),
(17, 'Cotacachi', 'ACTIVO', 'SECUNDARIA', 48, 10),
(18, 'Espejo', 'ACTIVO', 'SECUNDARIA', 48, 10),
(19, 'San Roque', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(20, 'Mira', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(21, 'Pimampiro', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(22, 'San Rafael', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(23, 'Santiago Del Rey', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(24, 'Urcuqui', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(25, 'Iluman', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(26, 'Peguche', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(27, 'Gonzalez', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(28, 'San Pablo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 10),
(29, 'Loja', 'ACTIVO', 'PRINCIPAL', 24, 11),
(30, 'Parque Industruial', 'ACTIVO', 'SECUNDARIA', 24, 11),
(31, 'Catacocha', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(32, 'Catamayo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(33, 'Celica', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(34, 'Macara', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(35, 'Vilcabamba', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(36, 'Chaguarpamba', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(37, 'Olmedo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(38, 'Zapotillo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(39, 'Malacatos', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(40, 'Saraguros', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 11),
(41, 'Chaullabamba', 'ACTIVO', 'SECUNDARIA', 24, 3),
(42, 'El Cebollar', 'ACTIVO', 'SECUNDARIA', 24, 3),
(43, 'Valle', 'ACTIVO', 'SECUNDARIA', 24, 3),
(44, 'Patamarca', 'ACTIVO', 'SECUNDARIA', 24, 3),
(45, 'Ricaurte', 'ACTIVO', 'SECUNDARIA', 24, 3),
(46, 'San Joaquin', 'ACTIVO', 'SECUNDARIA', 72, 3),
(47, 'Sayausi', 'ACTIVO', 'SECUNDARIA', 24, 3),
(48, 'zhucay', 'ACTIVO', 'SECUNDARIA', 24, 3),
(49, 'Checa', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(50, 'Chordelec', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(51, 'El descanso', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(52, 'El Pan', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(53, 'Giron', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 3),
(54, 'Gualaceo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(55, 'Paute', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(56, 'La Union', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(57, 'San Fernando', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(58, 'Santa Isabel', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 3),
(59, 'Tarqui', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 3),
(60, 'Guaranda', 'ACTIVO', 'PRINCIPAL', 24, 4),
(61, 'Primero de Mayo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 4),
(62, 'Chimbo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 4),
(63, 'Cuatro Esquinas', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 4),
(64, 'Guanujo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 4),
(65, 'Salinas', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 4),
(66, 'San Miguel', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 4),
(67, 'Santa Fe', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 4),
(68, 'Riobamba', 'ACTIVO', 'PRINCIPAL', 24, 5),
(69, 'El Troje', 'ACTIVO', 'SECUNDARIA', 24, 5),
(70, 'San Juan Chico', 'ACTIVO', 'SECUNDARIA', 24, 5),
(71, 'Alausí', 'ACTIVO', 'SECUNDARIA', 24, 5),
(72, 'Chunchi', 'ACTIVO', 'SECUNDARIA', 24, 5),
(73, 'Cajabamba', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 5),
(74, 'Chambo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 5),
(75, 'Colta', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 5),
(76, 'Guamote', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 5),
(77, 'Guano', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 5),
(78, 'San Luis', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 5),
(79, 'San Andres', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 5),
(80, 'Machala', 'ACTIVO', 'PRINCIPAL', 24, 6),
(81, 'Aeropuerto', 'ACTIVO', 'SECUNDARIA', 48, 6),
(82, 'Pasaje', 'ACTIVO', 'SECUNDARIA', 48, 6),
(83, 'Santa Rosa', 'ACTIVO', 'SECUNDARIA', 48, 6),
(84, 'Piñas ', 'ACTIVO', 'SECUNDARIA', 48, 6),
(85, 'Huaquillas', 'ACTIVO', 'SECUNDARIA', 48, 6),
(86, 'Buena Vista', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(87, 'El Cambio', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(88, 'El Guabo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(89, 'Ponce Enriquez', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(90, 'Balsas', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(91, 'Paccha', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(92, 'Portovelo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(93, 'Zaruma', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(94, 'Arenillas', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 6),
(95, 'Lago Agrio ', 'ACTIVO', 'SECUNDARIA', 24, 7),
(96, 'Santa Cecilia', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 7),
(97, 'El Eno', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 7),
(98, 'Cascales', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 7),
(99, 'Shushufindi', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 7),
(100, 'Limoncocha', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 7),
(101, 'Proyecto', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 7),
(102, 'Ambato', 'ACTIVO', 'PRINCIPAL', 24, 8),
(103, 'Baños', 'ACTIVO', 'SECUNDARIA', 24, 8),
(104, 'Huachi', 'ACTIVO', 'SECUNDARIA', 24, 8),
(105, 'Izamba', 'ACTIVO', 'SECUNDARIA', 24, 8),
(106, 'Pelileo', 'ACTIVO', 'SECUNDARIA', 24, 8),
(107, 'Puerto Arturo', 'ACTIVO', 'SECUNDARIA', 24, 8),
(108, 'Santa Rosa', 'ACTIVO', 'SECUNDARIA', 24, 8),
(109, 'Totoras', 'ACTIVO', 'SECUNDARIA', 24, 8),
(110, 'Cevallos', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 8),
(111, 'Las Viñas', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 8),
(112, 'Mocha', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 8),
(113, 'Patate', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 8),
(114, 'Pillaro', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 8),
(115, 'Quero', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 8),
(116, 'Tisaleo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 8),
(117, 'Zamora', 'ACTIVO', 'SECUNDARIA', 48, 9),
(118, 'El Limon', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 9),
(119, 'El Panqui', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 9),
(120, 'Guadalupe', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 9),
(121, 'Pachicutza', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 9),
(122, 'San Pablo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 9),
(123, 'Los Encuentros', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 9),
(124, 'Zumbi', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 9),
(125, 'Chamico', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 9),
(126, 'Esmeraldas', 'ACTIVO', 'SECUNDARIA', 24, 13),
(127, 'Quinindé', 'ACTIVO', 'PRINCIPAL', 24, 13),
(128, 'Coca Cola', 'ACTIVO', 'SECUNDARIA', 24, 13),
(129, 'La Pradera', 'ACTIVO', 'SECUNDARIA', 24, 13),
(130, 'Refineria', 'ACTIVO', 'SECUNDARIA', 24, 13),
(131, 'Termo Esmeraldas', 'ACTIVO', 'SECUNDARIA', 24, 13),
(132, 'Atacames', 'ACTIVO', 'SECUNDARIA', 24, 13),
(133, 'Sua', 'ACTIVO', 'SECUNDARIA', 24, 13),
(134, 'Tonsupa', 'ACTIVO', 'SECUNDARIA', 24, 13),
(135, 'Marujita', 'ACTIVO', 'SECUNDARIA', 48, 13),
(136, 'Base de Balao ', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 13),
(137, 'Tachina', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 13),
(138, 'Muisne', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 13),
(139, 'Tonchique', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 13),
(140, 'Viche', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 13),
(141, 'Azogues', 'ACTIVO', 'PRINCIPAL', 24, 15),
(142, 'Borrero ', 'ACTIVO', 'SECUNDARIA', 24, 15),
(143, 'Guapan', 'ACTIVO', 'SECUNDARIA', 24, 15),
(144, 'Javier Loyola', 'ACTIVO', 'SECUNDARIA', 24, 15),
(145, 'Bayas', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 15),
(146, 'Cañar', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 15),
(147, 'Luis Cordero', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 15),
(148, 'Tambo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 15),
(149, 'Tulcán', 'ACTIVO', 'PRINCIPAL', 24, 16),
(150, 'El Rosal', 'ACTIVO', 'SECUNDARIA', 24, 16),
(151, 'San Gabriel', 'ACTIVO', 'SECUNDARIA', 24, 16),
(152, 'Bolivar', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 16),
(153, 'Cristobal Colon', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 16),
(154, 'El Angel', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 16),
(155, 'Huaca', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 16),
(156, 'Julio Andrade', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 16),
(157, 'La Paz', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 16),
(158, 'Latacunga', 'ACTIVO', 'PRINCIPAL', 24, 17),
(159, 'Salcedo', 'ACTIVO', 'PRINCIPAL', 24, 17),
(160, 'Brigada', 'ACTIVO', 'SECUNDARIA', 24, 17),
(161, 'La Calera', 'ACTIVO', 'SECUNDARIA', 24, 17),
(162, 'La Argentina', 'ACTIVO', 'SECUNDARIA', 24, 17),
(163, 'Rumipamba', 'ACTIVO', 'SECUNDARIA', 24, 17),
(164, 'San Marcos', 'ACTIVO', 'SECUNDARIA', 24, 17),
(165, 'Guaytacama', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 17),
(166, 'Lasso', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 17),
(167, 'Pujili', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 17),
(168, 'El Yambo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 17),
(169, 'Saquisili', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 17),
(170, 'Panzaleo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 17),
(171, 'Macas', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 18),
(172, 'Sucua', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 18),
(173, 'Tena', 'ACTIVO', 'SECUNDARIA', 24, 19),
(174, 'El Chaco', 'ACTIVO', 'SECUNDARIA', 48, 19),
(175, 'Archidona', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 19),
(176, 'Misahualli', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 19),
(177, 'Puerto Napo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 19),
(178, 'Baeza', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 19),
(179, 'Borja', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 19),
(180, 'El Coca', 'ACTIVO', 'SECUNDARIA', 48, 20),
(181, 'La joya de los Sachas', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 20),
(182, 'Puyo', 'ACTIVO', 'SECUNDARIA', 48, 21),
(183, 'Madre Tierra', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 21),
(184, 'Shell', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 21),
(185, 'Veracruz', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 21),
(186, 'Libertad', 'ACTIVO', 'PRINCIPAL', 24, 22),
(187, 'Muey', 'ACTIVO', 'SECUNDARIA', 24, 22),
(188, 'Santa Elena', 'ACTIVO', 'SECUNDARIA', 24, 22),
(189, 'Santa Rosa', 'ACTIVO', 'SECUNDARIA', 24, 22),
(190, 'Atahualpa ', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 22),
(191, 'Acondito', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 22),
(192, 'Ayanque', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 22),
(193, 'Ballenitas', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 22),
(194, 'Jambelí', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 22),
(195, 'Valdivia', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 22),
(196, 'Manglar Alto', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 22),
(197, 'Libertador Bolivar', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 22),
(198, 'Montañita', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 22),
(199, 'Punta Carnero', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 22),
(200, 'Santo Domingo', 'ACTIVO', 'PRINCIPAL', 24, 23),
(201, 'Valle Hermoso', 'ACTIVO', 'SECUNDARIA', 24, 23),
(202, 'Miravalle', 'ACTIVO', 'SECUNDARIA', 24, 23),
(203, 'Chigulpe', 'ACTIVO', 'SECUNDARIA', 24, 23),
(204, 'La Concordia', 'ACTIVO', 'SECUNDARIA', 24, 23),
(205, 'La Independencia', 'ACTIVO', 'SECUNDARIA', 24, 23),
(206, 'La Union', 'ACTIVO', 'SECUNDARIA', 24, 23),
(207, 'Luz de America', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 23),
(208, 'Puerto Limon', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 23),
(209, 'El Paraiso', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 23),
(210, 'Santa Lucia', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 23),
(211, 'Tandapi', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 23),
(212, 'Nuevo Israel', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 23),
(213, 'Monterrey', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 23),
(214, 'La Libertad', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 23),
(215, 'Babahoyo', 'ACTIVO', 'PRINCIPAL', 24, 24),
(216, 'Quevedo', 'ACTIVO', 'PRINCIPAL', 24, 24),
(217, 'La Virginia', 'ACTIVO', 'SECUNDARIA', 48, 24),
(218, 'Baba', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(219, 'Caluma', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(220, 'Catarama', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(221, 'Isla de Bejuca', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(222, 'Moltavo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(223, 'Palenque', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(224, 'Pimocha', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(225, 'Pueblo Nuevo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(226, 'Pueblo Viejo', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(227, 'San Juan', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(228, 'Simón Bolivar', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(229, 'Ventanas', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(230, 'Vinces', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(231, 'Zapotal', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(232, 'El Empalme', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(233, 'El Vergel', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(234, 'La Maná', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(235, 'Los Angeles', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(236, 'San Carlos', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(237, 'Valencia', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 24),
(238, 'Guayaquil ', 'ACTIVO', 'PRINCIPAL', 24, 25),
(239, 'Chongon', 'ACTIVO', 'SECUNDARIA', 24, 25),
(240, 'Durán', 'ACTIVO', 'SECUNDARIA', 24, 25),
(241, 'Durán Boliche', 'ACTIVO', 'SECUNDARIA', 24, 25),
(242, 'Durán Tambo', 'ACTIVO', 'SECUNDARIA', 24, 25),
(243, 'El Recreo', 'ACTIVO', 'SECUNDARIA', 24, 25),
(244, 'Pascuales', 'ACTIVO', 'SECUNDARIA', 24, 25),
(245, 'Perimetral Norte', 'ACTIVO', 'SECUNDARIA', 24, 25),
(246, 'Puerto Azul', 'ACTIVO', 'SECUNDARIA', 24, 25),
(247, 'Puerto Hondo', 'ACTIVO', 'SECUNDARIA', 24, 25),
(248, 'Daule', 'ACTIVO', 'SECUNDARIA', 24, 25),
(249, 'Nobol', 'ACTIVO', 'TRAYECTO ESPECIAL', 24, 25),
(250, 'Samborondón', 'ACTIVO', 'SECUNDARIA', 24, 25),
(251, 'Playas', 'ACTIVO', 'SECUNDARIA', 24, 25),
(252, 'Milagro', 'ACTIVO', 'SECUNDARIA', 24, 25),
(253, 'Balao Chico', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(254, 'El Mango ', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(255, 'Isidro Ayora', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(256, 'Jaime Roldos', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(257, 'Jesús Maria', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(258, 'La Delia', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(259, 'La Flora', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(260, 'Las Mercedes', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(261, 'Naranjal', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(262, 'Palestina', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(263, 'Pedro Crabo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(264, 'Balao Grande', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(265, 'Puerto Inca', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(266, 'Sabanilla', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(267, 'Santa Lucia', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(268, 'Villa Nueva', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(269, 'Cerecita', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(270, 'Progreso', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(271, 'San Antonio', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(272, 'El Morro', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(273, 'Bucay', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(274, 'Cumandá', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(275, 'El Deseo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(276, 'El Piedrero', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(277, 'El Rosario', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(278, 'La Troncal', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(279, 'Linderos De Venecia', 'ACTIVO', 'TRAYECTO ESPECIAL', 72, 25),
(280, 'Naranjito', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(281, 'Pallatanga', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(282, 'San Francisco', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(283, 'Roberto Astudillo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(284, 'Triunfo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(285, 'Venecia Central', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(286, 'Puntilla Troncal', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(287, 'Mariscal Sucre', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 25),
(288, 'Quito', 'ACTIVO', 'TRAYECTO ESPECIAL', 24, 12),
(289, 'Cayambe', 'ACTIVO', 'PRINCIPAL', 24, 12),
(290, 'Calderón', 'ACTIVO', 'SECUNDARIA', 24, 12),
(291, 'Carapungo', 'ACTIVO', 'SECUNDARIA', 24, 12),
(292, 'San Camilo', 'ACTIVO', 'SECUNDARIA', 24, 12),
(293, 'San José de Moran', 'ACTIVO', 'SECUNDARIA', 24, 12),
(294, 'Marianitas', 'ACTIVO', 'SECUNDARIA', 24, 12),
(295, 'Llano chico', 'ACTIVO', 'SECUNDARIA', 24, 12),
(296, 'Llano Grande', 'ACTIVO', 'SECUNDARIA', 24, 12),
(297, 'Guápulo', 'ACTIVO', 'SECUNDARIA', 24, 12),
(298, 'Oyacoto', 'ACTIVO', 'SECUNDARIA', 24, 12),
(299, 'Las Orquídeas', 'ACTIVO', 'SECUNDARIA', 24, 12),
(300, 'Pusuquí', 'ACTIVO', 'SECUNDARIA', 24, 12),
(301, 'La Pampa', 'ACTIVO', 'SECUNDARIA', 24, 12),
(302, 'Pomasqui', 'ACTIVO', 'SECUNDARIA', 24, 12),
(303, 'San Antonio', 'ACTIVO', 'SECUNDARIA', 24, 12),
(304, 'San Alfonso', 'ACTIVO', 'SECUNDARIA', 24, 12),
(305, 'Manuelita Saenz', 'ACTIVO', 'SECUNDARIA', 24, 12),
(306, 'Buena Aventura', 'ACTIVO', 'SECUNDARIA', 24, 12),
(307, 'Curva Santa Rosa', 'ACTIVO', 'TRAYECTO ESPECIAL', 24, 12),
(308, 'Amaguaña', 'ACTIVO', 'SECUNDARIA', 24, 12),
(309, 'Conocoto', 'ACTIVO', 'SECUNDARIA', 24, 12),
(310, 'El Tingo', 'ACTIVO', 'SECUNDARIA', 24, 12),
(311, 'Guangopolo', 'ACTIVO', 'SECUNDARIA', 24, 12),
(312, 'Nuevo Aeropuerto', 'ACTIVO', 'SECUNDARIA', 24, 12),
(313, 'Tanda', 'ACTIVO', 'SECUNDARIA', 24, 12),
(314, 'Miravalle', 'ACTIVO', 'SECUNDARIA', 24, 12),
(315, 'Zambiza', 'ACTIVO', 'SECUNDARIA', 24, 12),
(316, 'Calacalí', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(317, 'Nuevos Horizontes', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(318, 'Aloag', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(319, 'Alangasi', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(320, 'Collacoto', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(321, 'La Morita', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(322, 'El Arenal', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(323, 'Checa', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(324, 'El Quinche', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(325, 'Guayllabamba', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(326, 'Puembo', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(327, 'Varuqui', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(328, 'Tababela', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(329, 'San Patrico', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12),
(330, 'Los Bancos', 'ACTIVO', 'TRAYECTO ESPECIAL', 48, 12);

--
-- Volcado de datos para la tabla `cruge_authassignment`
--

INSERT INTO `cruge_authassignment` (`userid`, `bizrule`, `data`, `itemname`) VALUES
(3, NULL, 'N;', 'ADMINISTRACION'),
(4, NULL, 'N;', 'ADMINISTRACION'),
(5, NULL, 'N;', 'LOGISTICA'),
(6, NULL, 'N;', 'LOGISTICA');

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_agencia_admin', 0, '', NULL, 'N;'),
('action_agencia_create', 0, '', NULL, 'N;'),
('action_agencia_delete', 0, '', NULL, 'N;'),
('action_agencia_update', 0, '', NULL, 'N;'),
('action_barrio_admin', 0, '', NULL, 'N;'),
('action_barrio_ajaxGetBarriosByParroquia', 0, '', NULL, 'N;'),
('action_barrio_create', 0, '', NULL, 'N;'),
('action_barrio_update', 0, '', NULL, 'N;'),
('action_ciudad_admin', 0, '', NULL, 'N;'),
('action_ciudad_ajaxGetCiudadesByCiudad', 0, '', NULL, 'N;'),
('action_ciudad_ajaxGetCiudadesByProvincia', 0, '', NULL, 'N;'),
('action_ciudad_create', 0, '', NULL, 'N;'),
('action_ciudad_update', 0, '', NULL, 'N;'),
('action_dashboard_index', 0, '', NULL, 'N;'),
('action_parroquia_admin', 0, '', NULL, 'N;'),
('action_parroquia_ajaxGetParroquiasbyCiudad', 0, '', NULL, 'N;'),
('action_parroquia_create', 0, '', NULL, 'N;'),
('action_parroquia_update', 0, '', NULL, 'N;'),
('action_persona_admin', 0, '', NULL, 'N;'),
('action_persona_create', 0, '', NULL, 'N;'),
('action_productoCategoria_admin', 0, '', NULL, 'N;'),
('action_productoCategoria_create', 0, '', NULL, 'N;'),
('action_productoCategoria_delete', 0, '', NULL, 'N;'),
('action_productoCategoria_update', 0, '', NULL, 'N;'),
('action_producto_admin', 0, '', NULL, 'N;'),
('action_producto_create', 0, '', NULL, 'N;'),
('action_producto_delete', 0, '', NULL, 'N;'),
('action_producto_update', 0, '', NULL, 'N;'),
('action_provincia_admin', 0, '', NULL, 'N;'),
('action_provincia_create', 0, '', NULL, 'N;'),
('action_provincia_update', 0, '', NULL, 'N;'),
('action_sucursal_admin', 0, '', NULL, 'N;'),
('action_sucursal_create', 0, '', NULL, 'N;'),
('action_sucursal_delete', 0, '', NULL, 'N;'),
('action_sucursal_update', 0, '', NULL, 'N;'),
('action_trayectoriaCheckpoint_create', 0, '', NULL, 'N;'),
('action_trayectoriaEtapa_admin', 0, '', NULL, 'N;'),
('action_trayectoriaEtapa_create', 0, '', NULL, 'N;'),
('action_trayectoriaEtapa_delete', 0, '', NULL, 'N;'),
('action_trayectoriaEtapa_update', 0, '', NULL, 'N;'),
('action_trayectoriaProducto_admin', 0, '', NULL, 'N;'),
('action_trayectoriaProducto_create', 0, '', NULL, 'N;'),
('action_trayectoriaProducto_update', 0, '', NULL, 'N;'),
('action_trayectoria_admin', 0, '', NULL, 'N;'),
('action_trayectoria_ajaxGetTrayectoriasbyCiudades', 0, '', NULL, 'N;'),
('action_trayectoria_create', 0, '', NULL, 'N;'),
('action_trayectoria_update', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', NULL, 'N;'),
('action_ui_fieldsadminlist', 0, '', NULL, 'N;'),
('action_ui_rbacajaxassignment', 0, '', NULL, 'N;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemdelete', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemupdate', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'N;'),
('action_ui_sessionadmin', 0, '', NULL, 'N;'),
('action_ui_sessionadmindelete', 0, '', NULL, 'N;'),
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('action_ui_usermanagementupdate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('ADMINISTRACION', 2, 'Permisos de admin', '', 'N;'),
('Cruge.ui.*', 0, '', NULL, 'N;'),
('edit-advanced-profile-features', 0, 'C:\\wamp\\www\\csa-express\\protected\\modules\\cruge\\views\\ui\\usermanagementupdate.php linea 98', NULL, 'N;'),
('LOGISTICA', 2, 'Permisos de logística', '', 'N;'),
('tarea_administracion', 1, '', '', 'N;'),
('tarea_logistica', 1, '', '', 'N;');

--
-- Volcado de datos para la tabla `cruge_authitemchild`
--

INSERT INTO `cruge_authitemchild` (`parent`, `child`) VALUES
('tarea_administracion', 'action_agencia_admin'),
('tarea_administracion', 'action_agencia_create'),
('tarea_administracion', 'action_agencia_delete'),
('tarea_administracion', 'action_agencia_update'),
('tarea_administracion', 'action_barrio_admin'),
('tarea_administracion', 'action_barrio_ajaxGetBarriosByParroquia'),
('tarea_administracion', 'action_barrio_create'),
('tarea_administracion', 'action_barrio_update'),
('tarea_administracion', 'action_ciudad_admin'),
('tarea_administracion', 'action_ciudad_ajaxGetCiudadesByCiudad'),
('tarea_logistica', 'action_ciudad_ajaxGetCiudadesByCiudad'),
('tarea_administracion', 'action_ciudad_ajaxGetCiudadesByProvincia'),
('tarea_administracion', 'action_ciudad_create'),
('tarea_administracion', 'action_ciudad_update'),
('tarea_administracion', 'action_dashboard_index'),
('tarea_logistica', 'action_dashboard_index'),
('tarea_administracion', 'action_parroquia_admin'),
('tarea_administracion', 'action_parroquia_ajaxGetParroquiasbyCiudad'),
('tarea_administracion', 'action_parroquia_create'),
('tarea_administracion', 'action_parroquia_update'),
('tarea_administracion', 'action_persona_admin'),
('tarea_logistica', 'action_persona_admin'),
('tarea_administracion', 'action_persona_create'),
('tarea_administracion', 'action_productoCategoria_admin'),
('tarea_logistica', 'action_productoCategoria_admin'),
('tarea_administracion', 'action_productoCategoria_create'),
('tarea_logistica', 'action_productoCategoria_create'),
('tarea_administracion', 'action_productoCategoria_delete'),
('tarea_logistica', 'action_productoCategoria_delete'),
('tarea_administracion', 'action_productoCategoria_update'),
('tarea_logistica', 'action_productoCategoria_update'),
('tarea_administracion', 'action_producto_admin'),
('tarea_logistica', 'action_producto_admin'),
('tarea_administracion', 'action_producto_create'),
('tarea_logistica', 'action_producto_create'),
('tarea_administracion', 'action_producto_delete'),
('tarea_logistica', 'action_producto_delete'),
('tarea_administracion', 'action_producto_update'),
('tarea_logistica', 'action_producto_update'),
('tarea_administracion', 'action_provincia_admin'),
('tarea_administracion', 'action_provincia_create'),
('tarea_administracion', 'action_provincia_update'),
('tarea_administracion', 'action_sucursal_admin'),
('tarea_administracion', 'action_sucursal_create'),
('tarea_administracion', 'action_sucursal_delete'),
('tarea_administracion', 'action_sucursal_update'),
('tarea_administracion', 'action_trayectoriaCheckpoint_create'),
('tarea_logistica', 'action_trayectoriaCheckpoint_create'),
('tarea_administracion', 'action_trayectoriaEtapa_admin'),
('tarea_administracion', 'action_trayectoriaEtapa_create'),
('tarea_administracion', 'action_trayectoriaEtapa_delete'),
('tarea_administracion', 'action_trayectoriaEtapa_update'),
('tarea_administracion', 'action_trayectoriaProducto_admin'),
('tarea_logistica', 'action_trayectoriaProducto_admin'),
('tarea_administracion', 'action_trayectoriaProducto_create'),
('tarea_logistica', 'action_trayectoriaProducto_create'),
('tarea_administracion', 'action_trayectoriaProducto_update'),
('tarea_logistica', 'action_trayectoriaProducto_update'),
('tarea_administracion', 'action_trayectoria_admin'),
('tarea_logistica', 'action_trayectoria_admin'),
('tarea_administracion', 'action_trayectoria_ajaxGetTrayectoriasbyCiudades'),
('tarea_logistica', 'action_trayectoria_ajaxGetTrayectoriasbyCiudades'),
('tarea_administracion', 'action_trayectoria_create'),
('tarea_logistica', 'action_trayectoria_create'),
('tarea_administracion', 'action_trayectoria_update'),
('tarea_administracion', 'action_ui_editprofile'),
('tarea_administracion', 'action_ui_fieldsadminlist'),
('tarea_administracion', 'action_ui_rbacajaxassignment'),
('tarea_administracion', 'action_ui_rbacajaxsetchilditem'),
('tarea_administracion', 'action_ui_rbacauthitemchilditems'),
('tarea_administracion', 'action_ui_rbacauthitemcreate'),
('tarea_administracion', 'action_ui_rbacauthitemdelete'),
('tarea_administracion', 'action_ui_rbacauthitemupdate'),
('tarea_administracion', 'action_ui_rbaclistops'),
('tarea_administracion', 'action_ui_rbaclistroles'),
('tarea_administracion', 'action_ui_rbaclisttasks'),
('tarea_administracion', 'action_ui_rbacusersassignments'),
('tarea_administracion', 'action_ui_sessionadmin'),
('tarea_administracion', 'action_ui_systemupdate'),
('tarea_administracion', 'action_ui_usermanagementadmin'),
('tarea_administracion', 'action_ui_usermanagementcreate'),
('tarea_administracion', 'action_ui_usermanagementupdate'),
('tarea_administracion', 'admin'),
('tarea_administracion', 'Cruge.ui.*'),
('ADMINISTRACION', 'tarea_administracion'),
('LOGISTICA', 'tarea_logistica');

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 800, 10, 1, -1, -1, 0, 0, 0, 0, NULL, 0, '', '', 1);

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1422867848, 'admin', 'alexish1993@gmail.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0),
(3, 1422867963, NULL, 1422868862, 'ahidalgo', 'ahidalgo@csaexpress.com', '123456', 'cd6bafab44e17d786fe2f1bfd9144ddd', 1, 0, 0),
(4, 1422867994, NULL, NULL, 'csarsoza', 'csarsoza@csaexpress.com', '123456', 'c3cfa03d2023297f3aa3b22bb0d1d9d7', 1, 0, 0),
(5, 1422868018, NULL, 1422868885, 'aportilla', 'aportilla@csaexpress.com', '123456', '6e155a10bee6174685523fc1e8780fe0', 1, 0, 0),
(6, 1422868034, NULL, NULL, 'esaa', 'esaa@csaexpress.com', '123456', '22cf7ee1abb7227b9d26653ff8927cd7', 1, 0, 0);

--
-- Volcado de datos para la tabla `trayectoria_etapa`
--

INSERT INTO `trayectoria_etapa` (`id`, `nombre`, `peso`, `estado`) VALUES
(1, 'Embarcación', 1, 'ACTIVO'),
(2, 'En Trayecto', 2, 'ACTIVO'),
(3, 'Finalizada', 3, 'ACTIVO');


INSERT INTO `direccion` (`id`, `calle_1`, `calle_2`, `numero`, `codigo_postal`, `referencia`, `latitud`, `longitud`, `barrio_id`, `parroquia_id`) VALUES
(9, '9 de Octubre', 'García Moreno', '137', '060201', NULL, NULL, NULL, NULL, 16),
(10, 'Malecón Rio', 'Juan Montalvo', NULL, NULL, NULL, NULL, NULL, NULL, 18),
(11, 'Av. Jipijapa', 'Alonso de Angulo', '11 - 24', '170603', NULL, NULL, NULL, NULL, 11),
(12, 'Vargas', 'Morales', '2 - 36', '171002', NULL, NULL, NULL, NULL, 10);

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`id`, `nombre`, `estado`, `ciudad_id`) VALUES
(2, 'El Sagrario', 'ACTIVO', 8),
(3, 'Alapachaca', 'ACTIVO', 8),
(4, 'San Francisco', 'ACTIVO', 8),
(5, 'Priorato ', 'ACTIVO', 8),
(6, 'Los Ceibos', 'ACTIVO', 8),
(7, 'AlangasÍ', 'ACTIVO', 288),
(8, 'Calacalí', 'ACTIVO', 288),
(9, 'El quinche', 'ACTIVO', 324),
(10, 'Calderón', 'ACTIVO', 288),
(11, 'Cumbayá', 'ACTIVO', 288),
(12, 'Llano Chico', 'ACTIVO', 288),
(13, 'San José de Minas', 'ACTIVO', 288),
(14, 'Yaruqí', 'ACTIVO', 288),
(15, 'Tababela', 'ACTIVO', 288),
(16, 'Tabiazo', 'ACTIVO', 126),
(17, 'Tachina', 'ACTIVO', 126),
(18, 'Camarones', 'ACTIVO', 126),
(19, '5 de Julio', 'ACTIVO', 126),
(20, 'San Mateo', 'ACTIVO', 126),
(21, 'Molleturo', 'ACTIVO', 4),
(22, 'Chaucha', 'ACTIVO', 4),
(23, 'Checa', 'ACTIVO', 4),
(24, 'Cuenca', 'ACTIVO', 4),
(26, 'Cumbe', 'ACTIVO', 4),
(27, 'El Valle', 'ACTIVO', 4);

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `peso`, `precio_principal`, `precio_secundario`, `precio_especial`, `producto_categoria_id`) VALUES
(2, 'Exhibidor mediano', 10, '6.00', '9.00', '12.00', 7),
(3, 'Exhibidor grande', 3, '8.00', '11.00', '15.00', 7),
(4, 'Monitores 17"', 16, '10.00', '15.00', '18.00', 6),
(5, 'Monitores 14"', 14, '8.00', '12.00', '14.00', 6),
(6, 'Laptop', 8, '6.00', '8.00', '10.00', 6),
(7, 'C.P.U pequeño', 8, '6.00', '8.00', '10.00', 6),
(8, 'C.P.U mediano', 15, '8.00', '10.00', '15.00', 6),
(9, 'C.P.U grande', 12, '10.00', '12.00', '16.00', 6),
(10, 'Impresora Laser', 17, '10.00', '15.00', '20.00', 6),
(11, 'Lavadora de 16 Lbs.', 28, '17.00', '25.00', '30.00', 5),
(12, 'Lavadora 14 Lbs.', 28, '15.00', '22.00', '28.00', 5),
(13, 'Cocina pequeña (4 quemadores)', 29, '15.00', '25.00', '30.00', 5),
(14, 'Cocina grande (6 a 8 quemadores)', 45, '22.00', '30.00', '40.00', 5),
(15, 'Televisor plasma 60"', 120, '50.00', '125.00', '165.00', 5),
(16, 'Televisor plasma 40"', 48, '25.00', '35.00', '45.00', 5),
(17, 'Televisor 32"', 48, '22.00', '32.00', '42.00', 5),
(18, 'Cama 3 plazas (Espaldar + Pie + Largueros)', 75, '35.00', '48.00', '60.00', 14),
(19, 'Cama 2 plazas (Espaldar + Pie + Largueros)', 63, '30.00', '42.00', '55.00', 14),
(20, 'Cama 1 plaza (Espaldar + Pie + Largueros)', 48, '22.00', '28.00', '35.00', 14),
(21, 'Armarios Desarmados (4 piezas)', 46, '25.00', '35.00', '45.00', 14),
(22, 'Armarios armados', 85, '40.00', '55.00', '75.00', 14),
(23, 'Motos cilindraje 600', 160, '90.00', '130.00', '170.00', 13),
(24, 'Moto cuadron', 194, '160.00', '235.00', '320.00', 13),
(25, 'Motos cilindraje 100 a 270', 165, '80.00', '110.00', '150.00', 13),
(26, 'Bicicletas pequeñas', 8, '8.00', '12.00', '14.00', 11),
(27, 'Bicicletas medianas', 12, '10.00', '14.00', '18.00', 11),
(28, 'Bicicletas grandes', 18, '15.00', '20.00', '25.00', 11),
(29, 'Archivador metálico 2 gavetas', 16, '12.00', '18.00', '25.00', 15),
(30, 'Archivador metálico 4 gavetas', 36, '18.00', '26.00', '35.00', 15),
(31, 'Veladores', 13, '7.00', '9.00', '14.00', 15),
(32, 'Sillon 3 personas', 48, '22.00', '32.00', '42.00', 14),
(33, 'Sillon 2 personas', 35, '18.00', '25.00', '32.00', 14),
(34, 'Sillón 1 persona ', 22, '12.00', '18.00', '22.00', 14),
(35, 'Sillas de comedor c/u', 11, '7.00', '9.00', '14.00', 14),
(36, 'Mesas para computadoras ', 13, '10.00', '15.00', '16.00', 14),
(37, 'Mesa de comedor 8 personas ', 62, '30.00', '40.00', '50.00', 14),
(38, 'Mesa de comedor 6 personas', 46, '25.00', '35.00', '45.00', 14),
(39, 'Guarda choques automoviles', 5, '8.00', '10.00', '14.00', 17),
(40, 'Guarda choques camión grande', 8, '12.00', '18.00', '23.00', 17),
(41, 'Defensa Posterior', 18, '10.00', '13.00', '16.00', 17),
(42, 'Sanitario pequeño', 14, '8.00', '10.00', '14.00', 19),
(43, 'Sanitario mediano', 18, '8.00', '12.00', '16.00', 19),
(44, 'Sanitario Grande', 30, '10.00', '14.00', '18.00', 19),
(45, 'Refrigeradoras 16 pies', 55, '30.00', '38.00', '50.00', 5),
(46, 'Refrigeradoras 14 pies', 49, '28.00', '36.00', '46.00', 5),
(47, 'Refrigeradoras 12 pies', 42, '25.00', '32.00', '40.00', 5),
(48, 'Microondas', 10, '8.00', '12.00', '18.00', 5),
(49, 'Equipos de sonido', 38, '20.00', '30.00', '38.00', 5),
(50, 'Equipos mini componentes grandes', 28, '15.00', '20.00', '25.00', 5),
(51, 'Equipos mini componentes medianos', 22, '12.00', '18.00', '20.00', 5),
(52, 'Dvd', 6, '6.00', '8.00', '10.00', 5),
(53, 'Congelador 10 pies', 142, '45.00', '65.00', '85.00', 5),
(54, 'Cilindro de gas', 12, '6.00', '8.00', '10.00', 5),
(55, 'Teatro en casa 2 parlantes', 10, '10.00', '12.00', '17.00', 5),
(56, 'Teatro en casa 3 parlantes', 16, '12.00', '17.00', '20.00', 5),
(57, 'Copiadora standar', 16, '10.00', '15.00', '30.00', 4),
(58, 'Copiadora industrial', 102, '50.00', '60.00', '80.00', 4),
(59, 'Rollo de tela de o a 10 Kilos', 4, '5.00', '6.00', '8.00', 21),
(60, 'Telescopio pequeño', 150, '100.00', '150.00', '200.00', 22),
(61, 'Telescopio mediano', 250, '200.00', '300.00', '400.00', 22),
(62, 'Rollo de tela de 40 a 50 Kilos', 25, '12.00', '15.00', '18.00', 21),
(63, 'Caja Fuerte de 100 kilos', 100, '100.00', '190.00', '310.00', 3),
(64, 'Televisor 17"', 16, '12.00', '16.00', '20.00', 5),
(65, 'Abrillantadoras', 46, '22.00', '32.00', '42.00', 5),
(66, 'Impresora a inyección', 10, '8.00', '10.00', '14.00', 6),
(67, 'Proyector', 5, '6.00', '8.00', '12.00', 6),
(68, 'Scanner', 6, '5.00', '6.00', '8.00', 6),
(69, 'Cama Cuna ', 65, '30.00', '40.00', '50.00', 14),
(70, 'Máquinas de coser domesticas', 214, '40.00', '60.00', '80.00', 10),
(71, 'Maquina de coser industriales', 255, '85.00', '110.00', '140.00', 10),
(72, 'Canecas de 1 galón', 12, '7.00', '10.00', '14.00', 9),
(73, 'Caja de Licores Pequeño', 9, '6.00', '8.00', '12.00', 8),
(74, 'Colchón 3 plazas', 45, '18.00', '25.00', '30.00', 14),
(75, 'Escritorio mediano armado', 12, '25.00', '35.00', '45.00', 15),
(76, 'Panel divisones grande', 17, '8.00', '11.00', '14.00', 15),
(77, 'Sillón gerente', 20, '12.00', '18.00', '22.00', 15),
(78, 'Silla 3 personas espera', 23, '14.00', '19.00', '25.00', 15),
(79, 'Silla 2 personas espera', 18, '10.00', '15.00', '19.00', 15),
(80, 'Silla 1 persona espera', 11, '8.00', '11.00', '15.00', 15),
(81, 'Baterías Camión', 22, '12.00', '15.00', '22.00', 17),
(82, 'Baterías jepp o automoviles', 10, '7.00', '10.00', '12.00', 17),
(83, 'Canecas de 5 galones ', 22, '12.00', '15.00', '22.00', 16),
(84, 'Canecas de 1 galón', 12, '5.00', '8.00', '10.00', 16),
(85, 'Urinario', 9, '8.00', '10.00', '12.00', 19),
(86, 'Jacuzzi 4 personas', 72, '80.00', '100.00', '120.00', 19);

--
-- Volcado de datos para la tabla `producto_categoria`
--

INSERT INTO `producto_categoria` (`id`, `nombre`, `estado`) VALUES
(1, 'Aspiradoras', 'ACTIVO'),
(2, 'Cables', 'ACTIVO'),
(3, 'Caja Fuerte', 'ACTIVO'),
(4, 'Copiadoras', 'ACTIVO'),
(5, 'Electrodomésticos', 'ACTIVO'),
(6, 'Equipos de computación', 'ACTIVO'),
(7, 'Exhibidores', 'ACTIVO'),
(8, 'Licores', 'ACTIVO'),
(9, 'Lubricantes', 'ACTIVO'),
(10, 'Máquinas', 'ACTIVO'),
(11, 'Misceláneos', 'ACTIVO'),
(12, 'Montacargas', 'ACTIVO'),
(13, 'Motos', 'ACTIVO'),
(14, 'Muebles', 'ACTIVO'),
(15, 'Muebles de Oficina', 'ACTIVO'),
(16, 'Pintura', 'ACTIVO'),
(17, 'Repuestos Automotrices', 'ACTIVO'),
(18, 'Cerámica', 'ACTIVO'),
(19, 'Sanitarios', 'ACTIVO'),
(20, 'Acrílicos', 'ACTIVO'),
(21, 'Telas', 'ACTIVO'),
(22, 'Telescopio', 'ACTIVO');

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`, `estado`, `zona`) VALUES
(3, 'Azuay', 'ACTIVO', 'SUR'),
(4, 'Bolivar', 'ACTIVO', 'CENTRO'),
(5, 'Chimborazo', 'ACTIVO', 'CENTRO'),
(6, 'El Oro', 'ACTIVO', 'SUR'),
(7, 'Sucumbios', 'ACTIVO', 'NORTE'),
(8, 'Tungurahua', 'ACTIVO', 'CENTRO'),
(9, 'Zamora Chinchipe', 'ACTIVO', 'SUR'),
(10, 'Imbabura', 'ACTIVO', 'NORTE'),
(11, 'Loja', 'ACTIVO', 'SUR'),
(12, 'Pichincha', 'ACTIVO', 'NORTE'),
(13, 'Esmeraldas', 'ACTIVO', 'NORTE'),
(14, 'Galapagos', 'ACTIVO', 'CENTRO'),
(15, 'Cañar', 'ACTIVO', 'CENTRO'),
(16, 'Carchi', 'ACTIVO', 'NORTE'),
(17, 'Cotopaxi', 'ACTIVO', 'NORTE'),
(18, 'Morona Santiago', 'ACTIVO', 'CENTRO'),
(19, 'Napo', 'ACTIVO', 'NORTE'),
(20, 'Orellana', 'ACTIVO', 'NORTE'),
(21, 'Pastaza', 'ACTIVO', 'CENTRO'),
(22, 'Santa Elena', 'ACTIVO', 'CENTRO'),
(23, 'Santo Domingo', 'ACTIVO', 'NORTE'),
(24, 'Los Rios', 'ACTIVO', 'CENTRO'),
(25, 'Guayas', 'ACTIVO', 'CENTRO');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
