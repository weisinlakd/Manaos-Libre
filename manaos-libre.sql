-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2020 a las 01:02:41
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--
DROP DATABASE IF EXISTS `mydb`;
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_padre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `name`, `id_padre`, `descripcion`, `estado`) VALUES
(1, 'telefonos', NULL, NULL, 1),
(392, 'laoreet posuere,', '466', 'Donec tincidunt. Donec', 1),
(393, 'lorem lorem,', '446', 'ante, iaculis nec, eleifend non,', 1),
(394, 'mattis ornare,', '430', 'ullamcorper, nisl arcu iaculis enim, sit', 1),
(395, 'tellus. Nunc', '443', 'arcu eu odio tristique pharetra. Quisque', 1),
(396, 'tristique senectus', '444', 'dapibus', 1),
(397, 'ligula tortor,', '422', 'fringilla est. Mauris eu', 1),
(398, 'neque sed', NULL, 'justo nec ante. Maecenas', 1),
(399, 'ut erat.', '420', 'mattis velit justo nec', 1),
(400, 'amet nulla.', '411', 'eros. Proin ultrices. Duis volutpat', 1),
(401, 'euismod est', '466', 'erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor.', 1),
(402, 'Mauris nulla.', '412', 'Nam interdum enim non nisi.', 1),
(403, 'Nunc mauris.', '434', 'euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut,', 1),
(404, 'sed consequat', '439', 'malesuada. Integer', 1),
(405, 'amet, consectetuer', '412', 'vulputate, risus a ultricies adipiscing, enim mi', 1),
(406, 'vehicula risus.', '435', 'mauris a nunc. In', 1),
(407, 'vestibulum. Mauris', '463', 'et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur', 1),
(408, 'risus. Donec', '467', 'semper, dui', 1),
(409, 'nulla vulputate', '441', 'egestas', 1),
(410, 'lobortis quis,', NULL, 'lorem, auctor quis,', 1),
(411, 'eget, ipsum.', NULL, 'ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt', 1),
(412, 'nec urna', '430', 'orci, consectetuer euismod est', 1),
(413, 'neque. Nullam', '442', 'odio', 1),
(414, 'erat semper', '425', 'mus. Proin vel arcu eu odio tristique pharetra.', 1),
(415, 'faucibus orci', '433', 'luctus sit amet, faucibus ut, nulla. Cras', 1),
(416, 'Etiam imperdiet', '450', 'ac libero nec ligula consectetuer rhoncus. Nullam', 1),
(417, 'fringilla, porttitor', '452', 'eu neque pellentesque massa lobortis', 1),
(418, 'Phasellus at', '460', 'nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et', 1),
(419, 'porttitor eros', '449', 'quis', 1),
(420, 'posuere vulputate,', '465', 'Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi', 1),
(421, 'posuere at,', '451', 'dolor elit, pellentesque a, facilisis non, bibendum sed, est.', 1),
(422, 'libero at', NULL, 'Aenean egestas hendrerit neque. In ornare sagittis', 1),
(423, 'vel sapien', '465', 'molestie tellus. Aenean egestas hendrerit neque. In ornare', 1),
(424, 'aeuismoda est', '427', 'amet, faucibus ut, nulla. Cras eu tellus', 1),
(425, 'auctor ullamcorper,', '449', 'Curae; Phasellus ornare. Fusce', 1),
(426, 'Maecenas mi', '418', 'mi tempor lorem,', 1),
(427, 'consectetuer adipiscing', '416', 'malesuada fames ac turpis', 1),
(428, 'Suspendisse non', '410', 'velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc', 1),
(429, 'enim nisl', '422', 'amet metus. Aliquam', 1),
(430, 'at lacus.', '439', 'erat, in consectetuer ipsum nunc id enim. Curabitur', 1),
(431, 'magna a', '444', 'sem ut cursus luctus,', 1),
(432, 'elit elit', '429', 'vulputate velit eu sem. Pellentesque ut ipsum', 1),
(433, 'libero lacus,', '422', 'ipsum', 1),
(434, 'fringilla est.', '453', 'vel, vulputate eu, odio. Phasellus at augue id', 1),
(435, 'mus. Proin', '469', 'odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus.', 1),
(436, 'convallis ligula.', '439', 'risus quis', 1),
(437, 'pede. Suspendisse', '418', 'magna a', 1),
(438, 'magna. Lorem', '430', 'orci. Ut sagittis', 1),
(439, 'id risus', '413', 'nunc sit amet metus. Aliquam erat volutpat.', 1),
(440, 'cursus et,', '415', 'blandit viverra. Donec', 1),
(441, 'velit. Quisque', '417', 'dapibus id,', 1),
(442, 'consequat nec,', '420', 'vitae semper egestas, urna justo faucibus lectus, a', 1),
(443, 'mauris sit', '469', 'facilisi. Sed neque. Sed eget', 1),
(444, 'facilisis, magna', '418', 'libero lacus, varius et, euismod', 1),
(445, 'eu, ligula.', '414', 'mollis dui, in sodales elit erat vitae risus. Duis a', 1),
(446, 'Quisque imperdiet,', '427', 'lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada', 1),
(447, 'scelerisque neque.', NULL, 'a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu.', 1),
(448, 'et ultrices', '427', 'neque. Nullam ut nisi a', 1),
(449, 'Sed molestie.', '444', 'augue malesuada malesuada. Integer id magna et ipsum cursus', 1),
(450, 'sed sem', '461', 'mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus.', 1),
(451, 'odio sagittis', '437', 'adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', 1),
(452, 'porttitor erosas', '442', 'Sed eu nibh vulputate mauris sagittis', 1),
(453, 'Sed molesties.', '459', 'interdum enim non nisi. Aenean eget metus.', 1),
(454, 'vel, venenatis', '428', 'Nunc sollicitudin commodo ipsum.', 1),
(455, 'Donec porttitor', NULL, 'vehicula risus. Nulla eget metus eu erat semper rutrum.', 1),
(456, 'enim. Nunc', '437', 'nisl. Maecenas malesuada', 1),
(457, 'tempus risus.', '450', 'augue, eu tempor erat neque non quam. Pellentesque habitant morbi', 1),
(458, 'Ut tincidunt', '459', 'nunc. Quisque', 1),
(459, 'vehicula aliquet', '421', 'et netus et malesuada fames ac turpis', 1),
(460, 'per inceptos', '442', 'id magna et ipsum cursus vestibulum.', 1),
(461, 'amet, risus.', NULL, 'mauris', 1),
(462, 'Ut sagittis', '458', 'posuere', 1),
(463, 'Nam interdum', NULL, 'enim non nisi. Aenean eget metus. In nec', 1),
(464, 'a mi', '429', 'Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet', 1),
(465, 'et, commodo', '424', 'vehicula et, rutrum eu, ultrices sit', 1),
(466, 'Praesent luctus.', '469', 'Ut tincidunt vehicula risus. Nulla', 1),
(467, 'iaculis nec,', '417', 'nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing,', 1),
(468, 'Cras eget', '435', 'id, erat. Etiam vestibulum massa', 1),
(469, 'et magnis', '451', 'interdum', 1),
(470, 'eu turpis.', '457', 'et magnis dis parturient', 1),
(471, 'non, sollicitudin', '454', 'dapibus id, blandit at, nisi. Cum sociis', 1),
(472, 'Duis at', '459', 'pellentesque', 1),
(473, 'quis, pede.', '470', 'In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec', 1),
(474, 'sapien, gravida', NULL, 'nostra,', 1),
(475, 'Suspendisse aliquet,', '449', 'Integer vulputate, risus a ultricies', 1),
(476, 'et pede.', '415', 'tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.', 1),
(477, 'rutrum urna,', NULL, 'scelerisque dui. Suspendisse ac', 1),
(478, 'metus urna', '450', 'Quisque tincidunt pede ac urna. Ut', 1),
(479, 'ornare lectus', '463', 'a sollicitudin orci sem eget massa. Suspendisse eleifend.', 1),
(480, 'et malesuada', NULL, 'Quisque porttitor eros nec tellus.', 1),
(481, 'eget laoreet', '430', 'in felis. Nulla', 1),
(482, 'velit dui,', '451', 'aliquam eros turpis non enim. Mauris quis turpis', 1),
(483, 'non magna.', '423', 'convallis in, cursus et, eros.', 1),
(484, 'ornare. Fusce', '422', 'ornare. Fusce', 1),
(485, 'gravida. Praesent', '462', 'Donec porttitor tellus non magna. Nam', 1),
(486, 'lorem semper', '445', 'Nunc ullamcorper, velit in aliquet lobortis, nisi', 1),
(487, 'Donec tempus,', '466', 'Nunc mauris sapien, cursus in, hendrerit consectetuer,', 1),
(488, 'commodo at,', '463', 'placerat, orci lacus vestibulum lorem, sit', 1),
(489, 'sit amet,', '469', 'Donec dignissim magna a tortor.', 1),
(490, 'facilisis eget,', '454', 'Nam porttitor scelerisque neque. Nullam nisl. Maecenas', 1),
(491, 'nec, leo.', '454', 'magna tellus faucibus leo,', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(105) NOT NULL,
  `provincia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre`, `provincia`) VALUES
(1, 'Antártica', 'Magallanes y Antártica Chilena'),
(2, 'San Pedro de Atacama', 'II'),
(3, 'Fresia', 'X'),
(4, 'Los Ángeles', 'Biobío'),
(5, 'Ñuñoa', 'RM'),
(6, 'Vitacura', 'RM'),
(7, 'Llaillay', 'Valparaíso'),
(8, 'La Pintana', 'Metropolitana de Santiago'),
(9, 'Puerto Montt', 'Los Lagos'),
(10, 'Padre Hurtado', 'Metropolitana de Santiago'),
(11, 'Nueva Imperial', 'IX'),
(12, 'La Florida', 'Metropolitana de Santiago'),
(13, 'Pirque', 'Metropolitana de Santiago'),
(14, 'Pichidegua', 'VI'),
(15, 'Renca', 'Metropolitana de Santiago'),
(16, 'Cabildo', 'V'),
(17, 'Lolol', 'O\'Higgins'),
(18, 'Mulchén', 'Biobío'),
(19, 'Santa Bárbara', 'VII'),
(20, 'Buin', 'RM'),
(21, 'Alto Biobío', 'Biobío'),
(22, 'Independencia', 'RM'),
(23, 'Juan Fernández', 'Valparaíso'),
(24, 'Nueva Imperial', 'IX'),
(25, 'Las Condes', 'Metropolitana de Santiago'),
(26, 'Ovalle', 'Coquimbo'),
(27, 'Paine', 'RM'),
(28, 'San Bernardo', 'Metropolitana de Santiago'),
(29, 'Marchihue', 'VI'),
(30, 'Pirque', 'RM'),
(31, 'Pedro Aguirre Cerda', 'Metropolitana de Santiago'),
(32, 'Lampa', 'RM'),
(33, 'La Serena', 'Coquimbo'),
(34, 'Quinta Normal', 'RM'),
(35, 'Pucón', 'IX'),
(36, 'Sierra Gorda', 'Antofagasta'),
(37, 'Tocopilla', 'Antofagasta'),
(38, 'Conchalí', 'RM'),
(39, 'Los Ángeles', 'Biobío'),
(40, 'Chillán Viejo', 'Biobío'),
(41, 'Melipilla', 'Metropolitana de Santiago'),
(42, 'Putaendo', 'Valparaíso'),
(43, 'Maule', 'VII'),
(44, 'Santa Cruz', 'O\'Higgins'),
(45, 'Lumaco', 'IX'),
(46, 'María Pinto', 'Metropolitana de Santiago'),
(47, 'Conchalí', 'RM'),
(48, 'Curepto', 'VII'),
(49, 'Calama', 'Antofagasta'),
(50, 'San Bernardo', 'RM'),
(51, 'Puerto Varas', 'Los Lagos'),
(52, 'Talagante', 'RM'),
(53, 'San Juan de la Costa', 'Los Lagos'),
(54, 'Lo Barnechea', 'RM'),
(55, 'Vitacura', 'RM'),
(56, 'Padre Hurtado', 'RM'),
(57, 'Lo Prado', 'Metropolitana de Santiago'),
(58, 'Colchane', 'I'),
(59, 'Pirque', 'RM'),
(60, 'Curacaví', 'RM'),
(61, 'El Monte', 'Metropolitana de Santiago'),
(62, 'Coquimbo', 'Coquimbo'),
(63, 'Frutillar', 'Los Lagos'),
(64, 'Zapallar', 'Valparaíso'),
(65, 'Río Hurtado', 'Coquimbo'),
(66, 'Casablanca', 'Valparaíso'),
(67, 'Providencia', 'Metropolitana de Santiago'),
(68, 'San Esteban', 'V'),
(69, 'El Monte', 'RM'),
(70, 'Toltén', 'IX'),
(71, 'La Higuera', 'IV'),
(72, 'Paine', 'Metropolitana de Santiago'),
(73, 'Fresia', 'X'),
(74, 'Panquehue', 'V'),
(75, 'Bulnes', 'VII'),
(76, 'San Bernardo', 'Metropolitana de Santiago'),
(77, 'Cobquecura', 'Biobío'),
(78, 'Ñuñoa', 'RM'),
(79, 'Iquique', 'Tarapacá'),
(80, 'Chonchi', 'Los Lagos'),
(81, 'Calama', 'Antofagasta'),
(82, 'La Reina', 'RM'),
(83, 'Mostazal', 'VI'),
(84, 'Machalí', 'VI'),
(85, 'Coquimbo', 'IV'),
(86, 'Puente Alto', 'Metropolitana de Santiago'),
(87, 'Chanco', 'VII'),
(88, 'Ñuñoa', 'RM'),
(89, 'San Clemente', 'VII'),
(90, 'Padre Hurtado', 'Metropolitana de Santiago'),
(91, 'Yungay', 'VII'),
(92, 'Lago Ranco', 'Los Ríos'),
(93, 'Quillón', 'VII'),
(94, 'Contulmo', 'Biobío'),
(95, 'Máfil', 'XIV'),
(96, 'Temuco', 'Araucanía'),
(97, 'Cerrillos', 'RM'),
(98, 'Chonchi', 'Los Lagos'),
(99, 'Tomé', 'VII'),
(100, 'La Ligua', 'V');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_usuario`, `id_producto`, `comentario`, `estado`, `created_at`, `updated_at`) VALUES
(205, 1, 89, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 1, '2020-02-28 22:33:14', NULL),
(206, 1, 75, 'id nunc interdum feugiat. Sed nec', 1, '2020-02-28 22:33:14', NULL),
(207, 2, 72, 'augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu', 1, '2020-02-28 22:33:14', NULL),
(208, 1, 77, 'ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet', 1, '2020-02-28 22:33:14', NULL),
(209, 1, 88, 'Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod', 1, '2020-02-28 22:33:14', NULL),
(210, 1, 93, 'pharetra. Quisque ac libero nec ligula consectetuer rhoncus.', 1, '2020-02-28 22:33:14', NULL),
(211, 2, 104, 'sem, consequat nec, mollis', 1, '2020-02-28 22:33:14', NULL),
(212, 2, 100, 'natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla', 1, '2020-02-28 22:33:14', NULL),
(213, 1, 49, 'non, vestibulum nec, euismod in, dolor. Fusce feugiat.', 1, '2020-02-28 22:33:14', NULL),
(214, 2, 50, 'pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat', 1, '2020-02-28 22:33:14', NULL),
(215, 2, 94, 'placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada', 1, '2020-02-28 22:33:14', NULL),
(216, 1, 88, 'sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante', 1, '2020-02-28 22:33:14', NULL),
(217, 2, 45, 'Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus', 1, '2020-02-28 22:33:14', NULL),
(218, 2, 87, 'luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras', 1, '2020-02-28 22:33:14', NULL),
(219, 1, 93, 'ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla.', 1, '2020-02-28 22:33:14', NULL),
(220, 2, 102, 'turpis nec mauris blandit mattis. Cras', 1, '2020-02-28 22:33:14', NULL),
(221, 1, 80, 'lacus. Ut nec urna et', 1, '2020-02-28 22:33:14', NULL),
(222, 1, 75, 'tempor diam dictum sapien.', 1, '2020-02-28 22:33:14', NULL),
(223, 1, 58, 'ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris', 1, '2020-02-28 22:33:14', NULL),
(224, 2, 90, 'Donec nibh. Quisque nonummy ipsum non arcu.', 1, '2020-02-28 22:33:14', NULL),
(225, 1, 76, 'pede, nonummy ut, molestie', 1, '2020-02-28 22:33:15', NULL),
(226, 2, 88, 'quis, pede. Praesent eu dui. Cum sociis natoque', 1, '2020-02-28 22:33:15', NULL),
(227, 2, 45, 'egestas a, dui. Cras pellentesque.', 1, '2020-02-28 22:33:15', NULL),
(228, 2, 76, 'egestas, urna justo faucibus lectus, a sollicitudin orci sem eget', 1, '2020-02-28 22:33:15', NULL),
(229, 1, 74, 'lacinia. Sed congue, elit sed', 1, '2020-02-28 22:33:15', NULL),
(230, 1, 53, 'purus, accumsan interdum libero dui', 1, '2020-02-28 22:33:15', NULL),
(231, 2, 60, 'nisi nibh lacinia orci, consectetuer euismod est arcu ac', 1, '2020-02-28 22:33:15', NULL),
(232, 1, 83, 'tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat.', 1, '2020-02-28 22:33:15', NULL),
(233, 2, 60, 'tellus eu augue porttitor interdum. Sed auctor', 1, '2020-02-28 22:33:15', NULL),
(234, 1, 58, 'congue turpis. In condimentum. Donec at arcu. Vestibulum ante', 1, '2020-02-28 22:33:15', NULL),
(235, 2, 90, 'enim. Etiam gravida molestie arcu.', 1, '2020-02-28 22:33:15', NULL),
(236, 2, 85, 'Aliquam ultrices iaculis odio.', 1, '2020-02-28 22:33:15', NULL),
(237, 1, 82, 'Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis', 1, '2020-02-28 22:33:15', NULL),
(238, 2, 48, 'arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu,', 1, '2020-02-28 22:33:15', NULL),
(239, 1, 46, 'nulla ante, iaculis nec, eleifend non,', 1, '2020-02-28 22:33:15', NULL),
(240, 2, 102, 'Nam ligula elit, pretium et, rutrum non,', 1, '2020-02-28 22:33:15', NULL),
(241, 2, 72, 'felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo', 1, '2020-02-28 22:33:15', NULL),
(242, 1, 76, 'augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris magna. Duis dignissim', 1, '2020-02-28 22:33:15', NULL),
(243, 1, 83, 'ac orci. Ut semper pretium neque.', 1, '2020-02-28 22:33:15', NULL),
(244, 2, 51, 'libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae,', 1, '2020-02-28 22:33:15', NULL),
(245, 1, 62, 'bibendum fermentum metus. Aenean sed pede', 1, '2020-02-28 22:33:15', NULL),
(246, 2, 62, 'quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem', 1, '2020-02-28 22:33:15', NULL),
(247, 2, 60, 'eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet,', 1, '2020-02-28 22:33:15', NULL),
(248, 1, 88, 'nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus', 1, '2020-02-28 22:33:15', NULL),
(249, 1, 74, 'nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse', 1, '2020-02-28 22:33:15', NULL),
(250, 2, 85, 'nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem', 1, '2020-02-28 22:33:15', NULL),
(251, 1, 73, 'elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna', 1, '2020-02-28 22:33:15', NULL),
(252, 2, 51, 'Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis', 1, '2020-02-28 22:33:15', NULL),
(253, 1, 53, 'mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur', 1, '2020-02-28 22:33:15', NULL),
(254, 1, 48, 'eu dolor egestas rhoncus.', 1, '2020-02-28 22:33:15', NULL),
(255, 2, 64, 'elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris', 1, '2020-02-28 22:33:16', NULL),
(256, 1, 49, 'orci. Ut sagittis lobortis', 1, '2020-02-28 22:33:16', NULL),
(257, 1, 45, 'tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor,', 1, '2020-02-28 22:33:16', NULL),
(258, 1, 55, 'Nulla facilisis. Suspendisse commodo', 1, '2020-02-28 22:33:16', NULL),
(259, 2, 97, 'ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc', 1, '2020-02-28 22:33:16', NULL),
(260, 2, 76, 'ac metus vitae velit egestas lacinia. Sed congue,', 1, '2020-02-28 22:33:16', NULL),
(261, 2, 86, 'volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius.', 1, '2020-02-28 22:33:16', NULL),
(262, 1, 76, 'ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris', 1, '2020-02-28 22:33:16', NULL),
(263, 1, 53, 'placerat eget, venenatis a, magna.', 1, '2020-02-28 22:33:16', NULL),
(264, 2, 95, 'Aliquam auctor, velit eget laoreet posuere,', 1, '2020-02-28 22:33:16', NULL),
(265, 2, 69, 'ullamcorper, velit in aliquet lobortis, nisi nibh', 1, '2020-02-28 22:33:16', NULL),
(266, 1, 78, 'nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam', 1, '2020-02-28 22:33:16', NULL),
(267, 1, 68, 'tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies', 1, '2020-02-28 22:33:16', NULL),
(268, 1, 102, 'commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede.', 1, '2020-02-28 22:33:16', NULL),
(269, 1, 51, 'vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis', 1, '2020-02-28 22:33:16', NULL),
(270, 1, 96, 'sollicitudin a, malesuada id, erat. Etiam vestibulum', 1, '2020-02-28 22:33:16', NULL),
(271, 2, 51, 'enim commodo hendrerit. Donec', 1, '2020-02-28 22:33:16', NULL),
(272, 1, 63, 'aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant', 1, '2020-02-28 22:33:16', NULL),
(273, 1, 60, 'nec mauris blandit mattis. Cras eget nisi', 1, '2020-02-28 22:33:16', NULL),
(274, 1, 52, 'blandit mattis. Cras eget nisi', 1, '2020-02-28 22:33:16', NULL),
(275, 2, 86, 'magna a neque. Nullam ut nisi a odio semper', 1, '2020-02-28 22:33:16', NULL),
(276, 2, 58, 'egestas. Aliquam nec enim. Nunc ut', 1, '2020-02-28 22:33:16', NULL),
(277, 1, 75, 'ipsum. Phasellus vitae mauris sit amet', 1, '2020-02-28 22:33:16', NULL),
(278, 1, 78, 'ac turpis egestas. Aliquam fringilla', 1, '2020-02-28 22:33:16', NULL),
(279, 1, 77, 'Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor.', 1, '2020-02-28 22:33:16', NULL),
(280, 2, 76, 'ante. Maecenas mi felis, adipiscing fringilla,', 1, '2020-02-28 22:33:16', NULL),
(281, 1, 45, 'Fusce mollis. Duis sit', 1, '2020-02-28 22:33:16', NULL),
(282, 2, 55, 'magna sed dui. Fusce aliquam, enim', 1, '2020-02-28 22:33:16', NULL),
(283, 1, 69, 'imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod', 1, '2020-02-28 22:33:16', NULL),
(284, 2, 75, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna.', 1, '2020-02-28 22:33:16', NULL),
(285, 1, 75, 'sed leo. Cras vehicula aliquet', 1, '2020-02-28 22:33:16', NULL),
(286, 1, 84, 'erat eget ipsum. Suspendisse sagittis. Nullam', 1, '2020-02-28 22:33:16', NULL),
(287, 1, 50, 'Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio.', 1, '2020-02-28 22:33:16', NULL),
(288, 1, 89, 'id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus', 1, '2020-02-28 22:33:16', NULL),
(289, 1, 67, 'nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante.', 1, '2020-02-28 22:33:16', NULL),
(290, 2, 101, 'ut aliquam iaculis, lacus', 1, '2020-02-28 22:33:16', NULL),
(291, 2, 96, 'enim non nisi. Aenean eget', 1, '2020-02-28 22:33:16', NULL),
(292, 1, 69, 'et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor', 1, '2020-02-28 22:33:16', NULL),
(293, 2, 66, 'ullamcorper viverra. Maecenas iaculis aliquet diam. Sed', 1, '2020-02-28 22:33:16', NULL),
(294, 1, 74, 'senectus et netus et malesuada fames ac turpis egestas. Aliquam', 1, '2020-02-28 22:33:16', NULL),
(295, 1, 75, 'sagittis placerat. Cras dictum ultricies', 1, '2020-02-28 22:33:17', NULL),
(296, 1, 72, 'Aenean sed pede nec ante blandit viverra. Donec tempus,', 1, '2020-02-28 22:33:17', NULL),
(297, 1, 76, 'iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque', 1, '2020-02-28 22:33:17', NULL),
(298, 2, 57, 'amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient', 1, '2020-02-28 22:33:17', NULL),
(299, 2, 102, 'Quisque tincidunt pede ac urna. Ut', 1, '2020-02-28 22:33:17', NULL),
(300, 1, 59, 'porttitor tellus non magna. Nam ligula elit, pretium et, rutrum', 1, '2020-02-28 22:33:17', NULL),
(301, 2, 46, 'commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing,', 1, '2020-02-28 22:33:17', NULL),
(302, 2, 45, 'ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus', 1, '2020-02-28 22:33:17', NULL),
(303, 2, 60, 'Praesent eu nulla at sem molestie sodales. Mauris blandit', 1, '2020-02-28 22:33:17', NULL),
(304, 2, 72, 'malesuada fames ac turpis egestas. Aliquam', 1, '2020-02-28 22:33:17', NULL),
(305, 1, 113, 'buen producto de prueba', 1, '2020-02-28 22:34:48', NULL),
(306, 1, 113, 'test timezone', 1, '2020-02-28 22:49:26', NULL),
(307, 1, 96, 'hola', 1, '2020-02-28 22:55:41', NULL),
(308, 8, 90, 'hola', 1, '2020-02-29 02:20:52', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `ciudad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id`, `direccion`, `departamento`, `ciudad_id`) VALUES
(1, 'P.O. Box 238, 7719 Aenean St.', NULL, 60),
(2, '2020 Varius St.', NULL, 58),
(3, '8910 Faucibus St.', NULL, 46),
(4, '5803 Purus St.', NULL, 92),
(5, 'P.O. Box 846, 541 Enim. Rd.', NULL, 19),
(6, 'P.O. Box 584, 7730 Pede Ave', NULL, 82),
(7, 'P.O. Box 534, 3362 Aliquet St.', NULL, 5),
(8, '352-8003 Sem Rd.', NULL, 59),
(9, '1895 Ornare Ave', NULL, 93),
(10, 'P.O. Box 777, 9052 Elit Rd.', NULL, 94),
(11, '883-9417 Ullamcorper Rd.', NULL, 3),
(12, 'Ap #389-7324 Molestie Ave', NULL, 15),
(13, 'P.O. Box 269, 6885 Dolor St.', NULL, 60),
(14, '873-6801 Id, St.', NULL, 90),
(15, '411-5802 Augue Rd.', NULL, 97),
(16, '202-8572 Aliquet St.', NULL, 41),
(17, '3347 Nec Av.', NULL, 7),
(18, '9430 Non St.', NULL, 14),
(19, 'Ap #928-6692 Libero. Road', NULL, 67),
(20, 'P.O. Box 125, 9531 Orci St.', NULL, 42),
(21, '3498 Ac Av.', NULL, 28),
(22, '600-8540 Amet Av.', NULL, 29),
(23, '795 Sapien Avenue', NULL, 75),
(24, '805-3895 Aliquet, Rd.', NULL, 6),
(25, '5836 Nibh. Rd.', NULL, 7),
(26, 'Ap #724-4350 Amet Street', NULL, 34),
(27, '8858 Congue, Rd.', NULL, 56),
(28, '9666 Faucibus Avenue', NULL, 55),
(29, 'P.O. Box 730, 4598 Pede. Rd.', NULL, 62),
(30, 'Ap #333-3823 Diam Avenue', NULL, 3),
(31, '6225 Sodales Rd.', NULL, 9),
(32, '8634 Metus Road', NULL, 46),
(33, '1901 Vitae St.', NULL, 20),
(34, 'P.O. Box 571, 3478 Maecenas Road', NULL, 88),
(35, '759-2729 Consectetuer Street', NULL, 40),
(36, '5727 Erat St.', NULL, 12),
(37, '3512 Semper Ave', NULL, 47),
(38, 'P.O. Box 442, 5465 Parturient Road', NULL, 67),
(39, 'Ap #206-3090 Nullam Av.', NULL, 84),
(40, 'Ap #583-6109 Tincidunt Road', NULL, 86),
(41, '938-7748 Et Street', NULL, 45),
(42, '846-1861 Dui. St.', NULL, 99),
(43, 'Ap #878-9343 Donec St.', NULL, 78),
(44, '9468 Imperdiet Rd.', NULL, 8),
(45, 'Ap #529-459 Id, St.', NULL, 43),
(46, 'P.O. Box 468, 8045 Dui Av.', NULL, 27),
(47, 'P.O. Box 378, 6382 Sit Avenue', NULL, 34),
(48, 'P.O. Box 639, 8182 Eu Street', NULL, 83),
(49, '6928 Nunc Rd.', NULL, 22),
(50, '321-605 Fringilla Street', NULL, 22),
(51, '4170 Arcu. Rd.', NULL, 5),
(52, '196-1504 Ac Ave', NULL, 69),
(53, 'Ap #906-8029 Ac Avenue', NULL, 3),
(54, 'P.O. Box 368, 7301 Placerat Ave', NULL, 64),
(55, 'P.O. Box 748, 9915 Eros. Rd.', NULL, 89),
(56, 'Ap #460-1079 Pede Av.', NULL, 21),
(57, 'Ap #609-7216 Ut Avenue', NULL, 14),
(58, 'Ap #381-1556 Luctus St.', NULL, 50),
(59, 'P.O. Box 225, 5234 Orci. Rd.', NULL, 6),
(60, 'P.O. Box 232, 5265 Dapibus Ave', NULL, 85),
(61, '228-8689 Nunc Avenue', NULL, 63),
(62, '3414 Lectus Avenue', NULL, 24),
(63, 'Ap #364-2831 Lacus. Rd.', NULL, 65),
(64, '669-3051 Tempus Street', NULL, 45),
(65, 'P.O. Box 614, 5182 Orci Ave', NULL, 22),
(66, 'Ap #213-378 Mus. Road', NULL, 93),
(67, 'P.O. Box 999, 2210 Odio, St.', NULL, 22),
(68, 'Ap #677-3331 Duis Street', NULL, 91),
(69, '782-7809 Bibendum Av.', NULL, 88),
(70, 'Ap #905-5796 Lorem St.', NULL, 10),
(71, '9941 Nibh Rd.', NULL, 94),
(72, 'P.O. Box 197, 230 Nec Avenue', NULL, 44),
(73, 'Ap #190-7149 Ac Avenue', NULL, 72),
(74, '2554 Magna. Av.', NULL, 30),
(75, 'P.O. Box 901, 8147 Congue Avenue', NULL, 21),
(76, '1167 Et Rd.', NULL, 19),
(77, 'Ap #631-7713 Mauris. Road', NULL, 16),
(78, 'Ap #358-379 Morbi St.', NULL, 65),
(79, 'P.O. Box 783, 3138 Feugiat. Avenue', NULL, 68),
(80, '705 Cras St.', NULL, 85),
(81, 'P.O. Box 715, 951 Aenean St.', NULL, 71),
(82, '288-3688 Malesuada Rd.', NULL, 44),
(83, 'P.O. Box 266, 1793 Massa. St.', NULL, 79),
(84, 'Ap #888-6371 Sed Road', NULL, 33),
(85, 'P.O. Box 434, 9991 Quis Av.', NULL, 10),
(86, '6567 Sed Rd.', NULL, 36),
(87, '7022 Dignissim Rd.', NULL, 76),
(88, 'Ap #432-9428 Lobortis Av.', NULL, 87),
(89, '657-5784 Lorem St.', NULL, 41),
(90, 'Ap #630-383 Aliquet Rd.', NULL, 70),
(91, '171-6082 Sociis Ave', NULL, 86),
(92, 'P.O. Box 972, 1818 Tempus Street', NULL, 82),
(93, 'Ap #137-4057 Feugiat. Avenue', NULL, 89),
(94, '6052 Nulla Rd.', NULL, 31),
(95, '2825 Sagittis Street', NULL, 92),
(96, 'Ap #805-7132 Sed, Rd.', NULL, 22),
(97, '810-9122 Ipsum St.', NULL, 82),
(98, 'Ap #233-1896 A Avenue', NULL, 83),
(99, '121-5646 Pharetra. Rd.', NULL, 73),
(100, '772-4506 Justo Road', NULL, 60),
(101, 'Castelar 563', NULL, 75),
(102, 'Castelar 563', NULL, 75),
(103, 'Castelar 563', NULL, 75),
(104, 'Castelar 563', NULL, 75),
(105, 'Castelar 563', NULL, 75),
(106, 'Castelar 563', NULL, 75),
(107, 'asdasd', NULL, 20),
(108, 'asdasd', NULL, 20),
(109, 'asdasd', NULL, 20),
(110, 'asdasd', NULL, 20),
(111, 'Avenido El Florista 1864', NULL, 63);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_envio`
--

CREATE TABLE `empresas_envio` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas_envio`
--

INSERT INTO `empresas_envio` (`id`, `name`, `id_direccion`, `estado`) VALUES
(1, 'Beatty, Kessler and Toy', 23, 1),
(2, 'Hoppe Ltd', 38, 1),
(3, 'Weimann-Krajcik', 45, 1),
(4, 'Ortiz-Hegmann', 8, 1),
(5, 'Walker-Skiles', 44, 1),
(6, 'Sporer LLC', 8, 1),
(7, 'Nicolas, Zemlak and Purdy', 29, 1),
(8, 'Wunsch LLC', 43, 1),
(9, 'Schmidt, Smith and Ankunding', 60, 1),
(10, 'Moen-Hintz', 64, 1),
(11, 'West PLC', 31, 1),
(12, 'Leuschke-Hills', 70, 1),
(13, 'Beier LLC', 13, 1),
(14, 'Lang, Schultz and Barrows', 43, 1),
(15, 'Wiza-Hegmann', 35, 1),
(16, 'Goodwin, Stracke and Ward', 58, 1),
(17, 'McCullough-Wintheiser', 7, 1),
(18, 'Lind, Sipes and Schuppe', 64, 1),
(19, 'Connelly Ltd', 28, 1),
(20, 'Davis Ltd', 48, 1),
(21, 'Schamberger-Mitchell', 26, 1),
(22, 'Terry and Sons', 36, 1),
(23, 'Gibson, Wyman and Fahey', 55, 1),
(24, 'Krajcik Inc', 18, 1),
(25, 'Brown-Emmerich', 40, 1),
(26, 'Walsh-Dicki', 38, 1),
(27, 'Bauch PLC', 37, 1),
(28, 'Keeling-Sipes', 12, 1),
(29, 'Hills Group', 59, 1),
(30, 'Botsford, Von and Murazik', 54, 1),
(31, 'Reinger and Sons', 51, 1),
(32, 'Hammes Inc', 37, 1),
(33, 'Adams-Shields', 52, 1),
(34, 'Aufderhar Ltd', 18, 1),
(35, 'Price, Towne and Pacocha', 62, 1),
(36, 'Casper Group', 36, 1),
(37, 'Lind and Sons', 36, 1),
(38, 'Farrell, Batz and Harvey', 53, 1),
(39, 'Parisian LLC', 58, 1),
(40, 'Moore and Sons', 30, 1),
(41, 'Sawayn Ltd', 58, 1),
(42, 'Corwin, Bahringer and Hoeger', 46, 1),
(43, 'Sanford-Leuschke', 19, 1),
(44, 'Zulauf-Mitchell', 39, 1),
(45, 'Huel-Kutch', 13, 1),
(46, 'Goldner-Schmeler', 63, 1),
(47, 'Feil, Blanda and Waelchi', 65, 1),
(48, 'Gerhold, Pfannerstill and Medhurst', 23, 1),
(49, 'VonRueden-Lakin', 66, 1),
(50, 'Aufderhar Ltd', 40, 1),
(51, 'Fahey-Kassulke', 62, 1),
(52, 'Paucek-Upton', 37, 1),
(53, 'Weimann, Braun and Schamberger', 60, 1),
(54, 'O\'Reilly-Rice', 32, 1),
(55, 'Schneider-Shields', 49, 1),
(56, 'Nienow PLC', 65, 1),
(57, 'Mohr, Fritsch and Leffler', 42, 1),
(58, 'Walter, Schmeler and Swift', 60, 1),
(59, 'Hahn, Schumm and Wuckert', 54, 1),
(60, 'Beahan, Doyle and Mosciski', 55, 1),
(61, 'Heidenreich-Schneider', 65, 1),
(62, 'Towne LLC', 5, 1),
(63, 'Upton-Nicolas', 52, 1),
(64, 'Ferry Ltd', 51, 1),
(65, 'Grimes, Cole and Ankunding', 47, 1),
(66, 'Batz-Mueller', 46, 1),
(67, 'McDermott-Buckridge', 52, 1),
(68, 'Hettinger LLC', 61, 1),
(69, 'Mayert Ltd', 35, 1),
(70, 'Stark Inc', 42, 1),
(71, 'Conroy PLC', 18, 1),
(72, 'Rogahn Group', 59, 1),
(73, 'Halvorson LLC', 27, 1),
(74, 'McCullough LLC', 11, 1),
(75, 'Kuhic-Price', 32, 1),
(76, 'Leannon-Littel', 12, 1),
(77, 'Schmeler PLC', 23, 1),
(78, 'Schulist, Lebsack and Price', 34, 1),
(79, 'Bartoletti-Stanton', 58, 1),
(80, 'Botsford-Deckow', 16, 1),
(81, 'Kihn-Roob', 21, 1),
(82, 'Cole, Mraz and McCullough', 52, 1),
(83, 'Renner, Barton and Reichel', 52, 1),
(84, 'Streich Ltd', 27, 1),
(85, 'Maggio-Kling', 62, 1),
(86, 'Bogan, Hoeger and Morar', 6, 1),
(87, 'Effertz LLC', 52, 1),
(88, 'Wiegand Ltd', 66, 1),
(89, 'Christiansen-Schmidt', 27, 1),
(90, 'Morissette-Wilkinson', 21, 1),
(91, 'Rolfson Group', 43, 1),
(92, 'Parisian, Frami and Marquardt', 55, 1),
(93, 'Feest-Wilkinson', 38, 1),
(94, 'Ryan Inc', 51, 1),
(95, 'Parisian-Feil', 43, 1),
(96, 'Weber, Crooks and Adams', 36, 1),
(97, 'Stamm Ltd', 13, 1),
(98, 'Macejkovic, Rohan and Sanford', 68, 1),
(99, 'Will-Schuster', 20, 1),
(100, 'Mills, Kemmer and Predovic', 24, 1),
(101, 'Parker-Eichmann', 37, 1),
(102, 'Romaguera-Gottlieb', 5, 1),
(103, 'Emmerich, Jacobs and Russel', 46, 1),
(104, 'Wisozk Ltd', 69, 1),
(105, 'Heller-Doyle', 28, 1),
(106, 'Koelpin PLC', 55, 1),
(107, 'Orn and Sons', 48, 1),
(108, 'Ondricka, Nienow and Kuhic', 67, 1),
(109, 'Stark Group', 45, 1),
(110, 'Boehm and Sons', 13, 1),
(111, 'Schmitt-Lubowitz', 6, 1),
(112, 'Runte, Medhurst and Schroeder', 69, 1),
(113, 'Jacobi, Kozey and Ziemann', 66, 1),
(114, 'Roob, Sporer and Nicolas', 63, 1),
(115, 'Deckow-Collins', 61, 1),
(116, 'Johnson, Runte and Wiza', 66, 1),
(117, 'Schowalter, Rippin and Bernhard', 27, 1),
(118, 'Armstrong LLC', 45, 1),
(119, 'Kuvalis Group', 31, 1),
(120, 'White PLC', 28, 1),
(121, 'Lind, Dickens and Moore', 63, 1),
(122, 'Lehner-Schuppe', 58, 1),
(123, 'Ziemann Group', 37, 1),
(124, 'Rogahn LLC', 13, 1),
(125, 'Koch and Sons', 55, 1),
(126, 'Nolan PLC', 36, 1),
(127, 'Bogisich, Blanda and Friesen', 11, 1),
(128, 'Lind PLC', 22, 1),
(129, 'Schumm, Flatley and Kassulke', 21, 1),
(130, 'Dickinson-Little', 62, 1),
(131, 'Fritsch-Bruen', 12, 1),
(132, 'Kiehn-Weimann', 65, 1),
(133, 'Runolfsdottir, Kreiger and Koelpin', 34, 1),
(134, 'Bins Group', 13, 1),
(135, 'Lemke PLC', 42, 1),
(136, 'Jast, Price and Bauch', 12, 1),
(137, 'Lubowitz Inc', 43, 1),
(138, 'Leannon, Orn and Lakin', 20, 1),
(139, 'Grant, Zieme and Little', 25, 1),
(140, 'Brakus-Wilderman', 52, 1),
(141, 'Larson, Christiansen and Gibson', 20, 1),
(142, 'Mosciski, Steuber and Weissnat', 36, 1),
(143, 'Metz Group', 58, 1),
(144, 'Bins-Heller', 11, 1),
(145, 'Schultz-Corwin', 68, 1),
(146, 'Kozey-Hamill', 49, 1),
(147, 'McClure-Von', 57, 1),
(148, 'Kuhic-Romaguera', 30, 1),
(149, 'Cartwright PLC', 7, 1),
(150, 'Zulauf-Bins', 29, 1),
(151, 'Deckow Group', 57, 1),
(152, 'Heaney, Rohan and Johns', 14, 1),
(153, 'Koepp-Wolf', 66, 1),
(154, 'Schinner PLC', 19, 1),
(155, 'Schumm LLC', 49, 1),
(156, 'Grimes Ltd', 51, 1),
(157, 'Ratke, Wisozk and Crooks', 45, 1),
(158, 'Block-Rolfson', 62, 1),
(159, 'Bogan, Keebler and Abernathy', 15, 1),
(160, 'Trantow, Langworth and Nikolaus', 25, 1),
(161, 'Jacobi, Dicki and Kertzmann', 42, 1),
(162, 'Veum Ltd', 55, 1),
(163, 'Ratke, Goyette and Kuhlman', 60, 1),
(164, 'Wolf and Sons', 15, 1),
(165, 'Haley-D\'Amore', 18, 1),
(166, 'Schmidt-Grady', 41, 1),
(167, 'Ferry-Boyer', 66, 1),
(168, 'Rempel Inc', 21, 1),
(169, 'Ratke Group', 30, 1),
(170, 'Conroy PLC', 30, 1),
(171, 'Feeney-Dickens', 13, 1),
(172, 'Reinger-Quigley', 27, 1),
(173, 'Monahan Inc', 8, 1),
(174, 'Oberbrunner Inc', 28, 1),
(175, 'Ward, Towne and Hartmann', 44, 1),
(176, 'Littel Group', 11, 1),
(177, 'Osinski LLC', 57, 1),
(178, 'Senger LLC', 46, 1),
(179, 'Franecki, Bednar and Marquardt', 35, 1),
(180, 'Hessel-Blick', 42, 1),
(181, 'Kunde PLC', 64, 1),
(182, 'Streich-Mohr', 45, 1),
(183, 'Luettgen Inc', 22, 1),
(184, 'Emmerich-Haag', 10, 1),
(185, 'Moore, Green and Emmerich', 70, 1),
(186, 'Sanford LLC', 65, 1),
(187, 'Glover, Goldner and Jenkins', 67, 1),
(188, 'Botsford-Jacobi', 59, 1),
(189, 'Bosco, Rath and Wisoky', 31, 1),
(190, 'Little, Nolan and McGlynn', 70, 1),
(191, 'Lemke-Welch', 27, 1),
(192, 'Zemlak-Boehm', 20, 1),
(193, 'Roberts Ltd', 69, 1),
(194, 'Rowe-Fadel', 65, 1),
(195, 'Zieme, Rippin and Ullrich', 50, 1),
(196, 'Cormier Ltd', 69, 1),
(197, 'Vandervort-Miller', 31, 1),
(198, 'Mosciski Inc', 50, 1),
(199, 'Beer-O\'Hara', 50, 1),
(200, 'Ziemann-Runte', 16, 1),
(201, 'Hayes, DuBuque and Mante', 22, 1),
(202, 'Rippin and Sons', 64, 1),
(203, 'Rosenbaum-Shanahan', 66, 1),
(204, 'Hudson, Schmeler and Rodriguez', 57, 1),
(205, 'Anderson-Collier', 56, 1),
(206, 'Haley-Hamill', 69, 1),
(207, 'Schamberger Ltd', 26, 1),
(208, 'Romaguera, Dickinson and King', 36, 1),
(209, 'Feeney, Becker and Abshire', 67, 1),
(210, 'Rogahn Ltd', 5, 1),
(211, 'Jakubowski, Schroeder and Littel', 40, 1),
(212, 'Donnelly-Torphy', 34, 1),
(213, 'Bernhard-Cummerata', 14, 1),
(214, 'Raynor-Bednar', 61, 1),
(215, 'Schmitt Group', 23, 1),
(216, 'Upton, Brown and Donnelly', 59, 1),
(217, 'Kihn-Green', 43, 1),
(218, 'Bogisich Group', 29, 1),
(219, 'Effertz Ltd', 47, 1),
(220, 'Hodkiewicz, Kreiger and Kerluke', 43, 1),
(221, 'Weber-Leannon', 55, 1),
(222, 'Casper Ltd', 48, 1),
(223, 'Friesen Inc', 30, 1),
(224, 'Kautzer-Morar', 12, 1),
(225, 'Pfannerstill, Anderson and Bruen', 60, 1),
(226, 'Larkin-Rutherford', 67, 1),
(227, 'Haag-Ledner', 64, 1),
(228, 'Williamson, Greenfelder and Lynch', 52, 1),
(229, 'Grady Group', 24, 1),
(230, 'Ruecker, Mertz and Cronin', 31, 1),
(231, 'Anderson, Zieme and Towne', 28, 1),
(232, 'Moen, Carter and Rolfson', 65, 1),
(233, 'Blick, Kuhn and Gusikowski', 52, 1),
(234, 'Crist and Sons', 10, 1),
(235, 'Welch, Hayes and Ondricka', 65, 1),
(236, 'Casper-Parker', 56, 1),
(237, 'O\'Reilly-Gleason', 39, 1),
(238, 'Simonis-Olson', 30, 1),
(239, 'Gulgowski Inc', 38, 1),
(240, 'Marks, Mann and Lemke', 52, 1),
(241, 'Schinner PLC', 53, 1),
(242, 'Hartmann-Tillman', 45, 1),
(243, 'Ryan Ltd', 63, 1),
(244, 'Weimann-Corkery', 21, 1),
(245, 'Parker PLC', 19, 1),
(246, 'Kulas PLC', 22, 1),
(247, 'Satterfield-Lang', 55, 1),
(248, 'Witting and Sons', 65, 1),
(249, 'Larkin Inc', 6, 1),
(250, 'Kirlin, Prohaska and Braun', 15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_envio`
--

CREATE TABLE `estado_envio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_envio` date NOT NULL,
  `fecha_estimada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_productos`
--

CREATE TABLE `fotos_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fotos_productos`
--

INSERT INTO `fotos_productos` (`id`, `nombre`, `id_producto`, `path`) VALUES
(697, '1-hilux2019-80-0.png', 80, '../db/img/productos/1-hilux2019-80-0.png'),
(698, '1-hilux2019-80-1.jpg', 80, '../db/img/productos/1-hilux2019-80-1.jpg'),
(699, '1-hilux2019-80-2.jpg', 80, '../db/img/productos/1-hilux2019-80-2.jpg'),
(700, '1-hilux2019-81-0.png', 81, '../db/img/productos/1-hilux2019-81-0.png'),
(701, '1-hilux2019-81-1.jpg', 81, '../db/img/productos/1-hilux2019-81-1.jpg'),
(702, '1-hilux2019-81-2.jpg', 81, '../db/img/productos/1-hilux2019-81-2.jpg'),
(703, '1-asd-82-.j', 82, '../db/img/productos/1-asd-82-.j'),
(704, '1-asd-83-.j', 83, '../db/img/productos/1-asd-83-.j'),
(705, '1-asd-84--0.jpg', 84, '../db/img/productos/1-asd-84--0.jpg'),
(706, '1-asd-85--0.jpg', 85, '../db/img/productos/1-asd-85--0.jpg'),
(707, '1-12331-86-0.jpg', 86, '../db/img/productos/1-12331-86-0.jpg'),
(708, '1-12331-86-1.jpg', 86, '../db/img/productos/1-12331-86-1.jpg'),
(709, '1-12331-86-2.jpg', 86, '../db/img/productos/1-12331-86-2.jpg'),
(710, '1-adsadas-87-0.', 87, '../db/img/productos/1-adsadas-87-0.'),
(711, '1-1asdad-88-0.', 88, '../db/img/productos/1-1asdad-88-0.'),
(712, '1-asdasd-89-0.', 89, '../db/img/productos/1-asdasd-89-0.'),
(713, '1-adsad-90-0.', 90, '../db/img/productos/1-adsad-90-0.'),
(714, '1-playstation4-91-0.jpg', 91, '../db/img/productos/1-playstation4-91-0.jpg'),
(715, '1-playstation4-91-1.jpg', 91, '../db/img/productos/1-playstation4-91-1.jpg'),
(716, '1-playstation4-91-2.jpg', 91, '../db/img/productos/1-playstation4-91-2.jpg'),
(717, '1-playstation4-92-0.jpg', 92, '../db/img/productos/1-playstation4-92-0.jpg'),
(718, '1-playstation4-92-1.jpg', 92, '../db/img/productos/1-playstation4-92-1.jpg'),
(719, '1-playstation4-92-2.jpg', 92, '../db/img/productos/1-playstation4-92-2.jpg'),
(720, '1-playstation4-93-0.jpg', 93, '../db/img/productos/1-playstation4-93-0.jpg'),
(721, '1-playstation4-93-1.jpg', 93, '../db/img/productos/1-playstation4-93-1.jpg'),
(722, '1-playstation4-93-2.jpg', 93, '../db/img/productos/1-playstation4-93-2.jpg'),
(723, '1-playstation4-94-0.jpg', 94, '../db/img/productos/1-playstation4-94-0.jpg'),
(724, '1-playstation4-94-1.jpg', 94, '../db/img/productos/1-playstation4-94-1.jpg'),
(725, '1-playstation4-94-2.jpg', 94, '../db/img/productos/1-playstation4-94-2.jpg'),
(726, '1-playstation4-95-0.jpg', 95, '../db/img/productos/1-playstation4-95-0.jpg'),
(727, '1-playstation4-95-1.jpg', 95, '../db/img/productos/1-playstation4-95-1.jpg'),
(728, '1-playstation4-95-2.jpg', 95, '../db/img/productos/1-playstation4-95-2.jpg'),
(729, '2-play4destruida-96-0.jpg', 96, '../db/img/productos/2-play4destruida-96-0.jpg'),
(730, '2-play4destruida-96-1.jpg', 96, '../db/img/productos/2-play4destruida-96-1.jpg'),
(731, '2-play4destruida-96-2.jpg', 96, '../db/img/productos/2-play4destruida-96-2.jpg'),
(732, '2-play4destruida-97-0.jpg', 97, '../db/img/productos/2-play4destruida-97-0.jpg'),
(733, '2-play4destruida-97-1.jpg', 97, '../db/img/productos/2-play4destruida-97-1.jpg'),
(734, '2-play4destruida-97-2.jpg', 97, '../db/img/productos/2-play4destruida-97-2.jpg'),
(735, '2-play4destruida-98-0.jpg', 98, '../db/img/productos/2-play4destruida-98-0.jpg'),
(736, '2-play4destruida-98-1.jpg', 98, '../db/img/productos/2-play4destruida-98-1.jpg'),
(737, '2-play4destruida-98-2.jpg', 98, '../db/img/productos/2-play4destruida-98-2.jpg'),
(738, '2-play4destruida-99-0.jpg', 99, '../db/img/productos/2-play4destruida-99-0.jpg'),
(739, '2-play4destruida-99-1.jpg', 99, '../db/img/productos/2-play4destruida-99-1.jpg'),
(740, '2-play4destruida-99-2.jpg', 99, '../db/img/productos/2-play4destruida-99-2.jpg'),
(741, '2-play4destruida-100-0.jpg', 100, '../db/img/productos/2-play4destruida-100-0.jpg'),
(742, '2-play4destruida-100-1.jpg', 100, '../db/img/productos/2-play4destruida-100-1.jpg'),
(743, '2-play4destruida-100-2.jpg', 100, '../db/img/productos/2-play4destruida-100-2.jpg'),
(744, '2-play4destruida-101-0.jpg', 101, '../db/img/productos/2-play4destruida-101-0.jpg'),
(745, '2-play4destruida-101-1.jpg', 101, '../db/img/productos/2-play4destruida-101-1.jpg'),
(746, '2-play4destruida-101-2.jpg', 101, '../db/img/productos/2-play4destruida-101-2.jpg'),
(747, '2-play4destruida-102-0.jpg', 102, '../db/img/productos/2-play4destruida-102-0.jpg'),
(748, '2-play4destruida-102-1.jpg', 102, '../db/img/productos/2-play4destruida-102-1.jpg'),
(749, '2-play4destruida-102-2.jpg', 102, '../db/img/productos/2-play4destruida-102-2.jpg'),
(750, '2-play4destruida-103-0.jpg', 103, '../db/img/productos/2-play4destruida-103-0.jpg'),
(751, '2-play4destruida-103-1.jpg', 103, '../db/img/productos/2-play4destruida-103-1.jpg'),
(752, '2-play4destruida-103-2.jpg', 103, '../db/img/productos/2-play4destruida-103-2.jpg'),
(753, '2-play4destruida-104-0.jpg', 104, '../db/img/productos/2-play4destruida-104-0.jpg'),
(754, '2-play4destruida-104-1.jpg', 104, '../db/img/productos/2-play4destruida-104-1.jpg'),
(755, '2-play4destruida-104-2.jpg', 104, '../db/img/productos/2-play4destruida-104-2.jpg'),
(756, '2-play4destruida-105-0.jpg', 105, '../db/img/productos/2-play4destruida-105-0.jpg'),
(757, '2-play4destruida-105-1.jpg', 105, '../db/img/productos/2-play4destruida-105-1.jpg'),
(758, '2-play4destruida-105-2.jpg', 105, '../db/img/productos/2-play4destruida-105-2.jpg'),
(759, '2-play4destruida-106-0.jpg', 106, '../db/img/productos/2-play4destruida-106-0.jpg'),
(760, '2-play4destruida-106-1.jpg', 106, '../db/img/productos/2-play4destruida-106-1.jpg'),
(761, '2-play4destruida-106-2.jpg', 106, '../db/img/productos/2-play4destruida-106-2.jpg'),
(762, '2-play4destruida-107-0.jpg', 107, '../db/img/productos/2-play4destruida-107-0.jpg'),
(763, '2-play4destruida-107-1.jpg', 107, '../db/img/productos/2-play4destruida-107-1.jpg'),
(764, '2-play4destruida-107-2.jpg', 107, '../db/img/productos/2-play4destruida-107-2.jpg'),
(765, '2-autoypelota-108-0.jpg', 108, '../db/img/productos/2-autoypelota-108-0.jpg'),
(766, '2-autoypelota-108-1.jpg', 108, '../db/img/productos/2-autoypelota-108-1.jpg'),
(767, '2-autoypelota-108-2.jpg', 108, '../db/img/productos/2-autoypelota-108-2.jpg'),
(768, 'rl6F3wSghAdYO8hrKSU52FJyXmI1Ky1Fc1AebTAJ.jpeg', 111, 'public/rl6F3wSghAdYO8hrKSU52FJyXmI1Ky1Fc1AebTAJ.jpeg'),
(769, 'NaBvvbLLUmSuZG2CD4KY12EWWdOy4LLOyVcX9tde.jpeg', 113, 'public/NaBvvbLLUmSuZG2CD4KY12EWWdOy4LLOyVcX9tde.jpeg'),
(770, 'JIIm5Tm7GF3R3o6uhs5XGdVui51pPiNqYxTkqxS5.jpeg', 113, 'public/JIIm5Tm7GF3R3o6uhs5XGdVui51pPiNqYxTkqxS5.jpeg'),
(771, 'sd6k93HDFLFddmTrcnEm8e4soIOGujTe8Lyr4quj.jpeg', 113, 'public/sd6k93HDFLFddmTrcnEm8e4soIOGujTe8Lyr4quj.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_deseados`
--

CREATE TABLE `listas_deseados` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `id_productos_lista` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos_de_pago`
--

CREATE TABLE `metodos_de_pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(65) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `tiene_recargo` tinyint(4) DEFAULT '0',
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metodos_de_pago`
--

INSERT INTO `metodos_de_pago` (`id`, `nombre`, `descripcion`, `tiene_recargo`, `estado`) VALUES
(1, 'Pago Facil', 'Pago Facil', 0, 1),
(2, 'Rapipago', 'Rapipago', 0, 1),
(3, 'Tarjeta de Credito Nacional', 'Tarjeta de Credito Nacional', 0, 1),
(4, 'Tarjeta de Crédito Internacional VISA', 'Tarjeta de Crédito Internacional VISA', 0, 1),
(5, 'Transferencia Bancaria', 'transferencia Bancaria', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos_envio`
--

CREATE TABLE `metodos_envio` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `costo_envio` float NOT NULL,
  `tiempo_envio` int(11) NOT NULL,
  `radio_entrega` float DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metodos_envio`
--

INSERT INTO `metodos_envio` (`id`, `name`, `descripcion`, `costo_envio`, `tiempo_envio`, `radio_entrega`, `id_empresa`, `estado`) VALUES
(1, 'id sapiente voluptas', 'Quia non dolore laborum iste quaerat.', 14.9, 522, 16, 1, 1),
(2, 'non velit magni', 'Tenetur dolor praesentium repellendus error.', 42, 375, 12, 1, 1),
(3, 'dolor at aliquam', 'Aut a repudiandae eos ab repudiandae deleniti tempora.', 15.1, 330, 22, 1, 1),
(4, 'ut enim pariatur', 'Et neque nam in.', 24.05, 506, 29, 1, 1),
(5, 'mollitia est aspernatur', 'Et voluptas beatae earum quis distinctio.', 14.23, 204, 23, 1, 1),
(7, 'voluptate quia maxime', 'Nam ipsum a error error delectus voluptatum quisquam.', 5.46, 492, 7, 4, 1),
(8, 'ipsam dolorem facere', 'Nam hic qui et adipisci distinctio et.', 18.26, 378, 30, 1, 1),
(9, 'quis sunt et', 'Porro et porro excepturi tempora quos.', 15.55, 596, 28, 2, 1),
(10, 'nisi officiis commodi', 'Et impedit aspernatur est sit.', 29.72, 552, 12, 2, 1),
(11, 'illum non architecto', 'Suscipit est omnis voluptates facilis.', 44.6, 136, 6, 1, 1),
(12, 'aut sed sed', 'Esse reprehenderit provident omnis doloribus cupiditate in fugiat.', 28.83, 426, 30, 4, 1),
(13, 'hic aut sed', 'Ea culpa vero similique quasi dolores consequatur eum.', 2.95, 655, 6, 2, 1),
(14, 'doloribus eveniet consequatur', 'Dolores consequatur et expedita omnis sed natus occaecati.', 33.68, 601, 8, 2, 1),
(15, 'ab autem illum', 'Sunt vitae explicabo consectetur sint.', 36.75, 582, 13, 3, 1),
(16, 'aut tenetur culpa', 'Rerum dolore voluptas doloremque corporis aut ratione vero et.', 39.63, 381, 20, 2, 1),
(17, 'neque aut mollitia', 'Ducimus odit tempora quia ut dolorum tenetur a.', 36.21, 172, 18, 2, 1),
(20, 'sint alias quam', 'Et optio eaque tenetur impedit nihil mollitia molestiae.', 27.13, 596, 19, 1, 1),
(21, 'beatae expedita ipsum', 'Voluptas qui consequatur quae non architecto.', 22.58, 585, 24, 1, 1),
(22, 'natus et eos', 'Odit in nostrum deleniti expedita recusandae sit repudiandae.', 38.85, 496, 24, 1, 1),
(23, 'accusantium ea natus', 'Velit ipsam reiciendis ea consequatur minus.', 34.03, 420, 22, 3, 1),
(24, 'eveniet maiores eos', 'Laborum vel quibusdam sed.', 9.82, 297, 24, 3, 1),
(25, 'dignissimos ipsa error', 'Velit rerum eos perspiciatis qui a.', 34.96, 583, 8, 2, 1),
(26, 'quod temporibus sunt', 'Recusandae in exercitationem et qui.', 2.4, 474, 2, 4, 1),
(27, 'voluptatem id magni', 'Vero eos odit sit accusantium.', 30.01, 540, 27, 1, 1),
(28, 'eveniet maiores rem', 'Deleniti est tempora et amet quis.', 25.38, 247, 30, 2, 1),
(29, 'eos rem vitae', 'Voluptatem tempore labore laudantium et culpa maxime adipisci.', 26.03, 217, 13, 1, 1),
(30, 'perspiciatis eum aut', 'Molestiae dolor omnis ut sunt et asperiores eum inventore.', 36.36, 541, 15, 2, 1),
(31, 'excepturi hic corporis', 'Quia magnam porro voluptas eligendi.', 38.69, 417, 28, 2, 1),
(33, 'fuga dicta consequuntur', 'Ducimus dignissimos iste magni officiis doloremque ut dolores.', 17.28, 582, 14, 107, 1),
(34, 'nemo ex pariatur', 'Quisquam praesentium dicta accusamus dolor nostrum non facere.', 17.76, 667, 18, 226, 1),
(35, 'aut pariatur sunt', 'Voluptate recusandae ab possimus voluptate laborum minima ea et.', 42.75, 243, 26, 89, 1),
(36, 'dolor vitae numquam', 'Totam sit dolorem qui laborum nihil sed maxime.', 14.03, 502, 8, 42, 1),
(37, 'mollitia sit est', 'Minima optio ut nisi ut itaque doloremque.', 18.25, 586, 6, 190, 1),
(38, 'occaecati eos nulla', 'Vitae ut corrupti consequuntur quisquam similique ut perferendis rerum.', 38.3, 445, 6, 98, 1),
(39, 'recusandae consequatur ab', 'Molestias iusto voluptates exercitationem ut reiciendis distinctio dolor rerum.', 8.42, 277, 7, 153, 1),
(40, 'quisquam quisquam quae', 'Earum eos nulla incidunt veritatis et.', 9.23, 377, 7, 97, 1),
(41, 'dolores nemo qui', 'Odio possimus dolorem aut et natus doloribus deserunt.', 12.69, 160, 2, 37, 1),
(42, 'sint et rerum', 'Sed consequatur officia dolorum enim eum et dolorem.', 28.07, 607, 22, 47, 1),
(43, 'nesciunt consequatur et', 'Ut est perspiciatis et repellendus enim voluptas.', 24.57, 646, 6, 161, 1),
(44, 'quis minima aliquid', 'Eum perferendis aliquid enim consequatur deleniti expedita temporibus.', 4.64, 308, 30, 224, 1),
(45, 'ratione et aut', 'Fugiat quod animi non.', 20.27, 405, 3, 122, 1),
(46, 'amet cum occaecati', 'Iste sunt commodi quo sequi omnis sapiente.', 6.82, 547, 13, 142, 1),
(47, 'porro perferendis tenetur', 'Et earum totam occaecati recusandae accusamus minus.', 6.34, 548, 24, 214, 1),
(48, 'fugiat officiis suscipit', 'Sequi velit iste quia.', 0.64, 78, 22, 13, 1),
(49, 'qui ut vel', 'Dolorem praesentium commodi aut in.', 21.08, 282, 10, 218, 1),
(50, 'voluptas quasi voluptatem', 'Et non quas tempore eos.', 8.33, 109, 15, 45, 1),
(51, 'perferendis alias necessitatibus', 'Eum cum omnis voluptatibus consequuntur voluptatem est.', 27.2, 547, 9, 98, 1),
(52, 'aut in incidunt', 'Et qui reprehenderit officia laudantium voluptate maiores.', 20.01, 582, 26, 219, 1),
(53, 'aut voluptatem ea', 'Modi repellendus enim saepe nam nisi quia debitis.', 35.91, 395, 7, 221, 1),
(54, 'sed repellendus quis', 'Aut molestiae rem aliquam aperiam et praesentium.', 18.27, 166, 12, 9, 1),
(55, 'est modi nostrum', 'Adipisci dolorem mollitia et sapiente molestiae fugiat.', 29.84, 373, 12, 52, 1),
(56, 'omnis vitae inventore', 'Molestiae quia amet earum.', 26.1, 478, 29, 174, 1),
(57, 'quas quos dolorem', 'Quis velit veritatis et qui.', 4.21, 421, 27, 94, 1),
(58, 'maxime tempore harum', 'Cum debitis voluptate quod expedita sed.', 34.47, 344, 25, 131, 1),
(59, 'cupiditate quas doloribus', 'Expedita voluptatem et saepe delectus laboriosam.', 37.14, 663, 27, 122, 1),
(60, 'et molestiae ratione', 'Quia amet id voluptas ducimus quibusdam aut.', 37.08, 315, 14, 133, 1),
(61, 'praesentium quis eveniet', 'Iusto voluptas cumque tempora voluptatem quisquam.', 11.73, 649, 30, 187, 1),
(62, 'laboriosam consectetur natus', 'Odio ipsa sed neque distinctio.', 44.79, 473, 10, 140, 1),
(63, 'quo quos debitis', 'Non quibusdam unde autem nisi sunt numquam neque doloremque.', 21.15, 154, 3, 149, 1),
(64, 'aut est inventore', 'Sit expedita deserunt corrupti rerum temporibus totam et autem.', 7.82, 360, 19, 184, 1),
(65, 'commodi sint ut', 'Molestiae quae vel explicabo et corrupti veniam.', 35.33, 136, 10, 66, 1),
(66, 'voluptatem aut tenetur', 'Eligendi ipsam voluptas eius repellat excepturi distinctio.', 14.65, 130, 27, 197, 1),
(67, 'veniam a deleniti', 'Est ex voluptatem excepturi dignissimos ut.', 28.03, 331, 29, 37, 1),
(68, 'fugit debitis ex', 'Adipisci voluptatum ut incidunt nisi voluptatem et ut.', 24.99, 365, 5, 149, 1),
(69, 'ducimus perferendis id', 'Consequuntur est sapiente suscipit dolor dolor velit nesciunt.', 10.64, 401, 10, 108, 1),
(70, 'corrupti dicta voluptatem', 'Quod eos aut exercitationem.', 3.43, 655, 9, 174, 1),
(71, 'et natus dolorem', 'Inventore reiciendis rem dolorem deleniti nobis officia voluptatum et.', 23.68, 495, 11, 48, 1),
(72, 'sunt qui fugit', 'Aliquid ut voluptas occaecati doloribus incidunt velit qui.', 6.9, 475, 28, 49, 1),
(73, 'aperiam atque rem', 'Magni vel ea ut aut dignissimos ratione.', 1.99, 300, 22, 100, 1),
(74, 'eos nihil minus', 'Quia porro voluptatum non consequuntur in deserunt consequatur.', 25.21, 27, 29, 12, 1),
(75, 'harum aliquid sed', 'Sint ea nemo aliquid repellendus.', 11.79, 481, 17, 31, 1),
(76, 'dicta aut enim', 'Repellat explicabo mollitia dolore accusamus excepturi.', 34.43, 665, 14, 12, 1),
(77, 'ut harum exercitationem', 'Omnis distinctio qui harum accusantium doloremque non quis.', 39.99, 291, 17, 169, 1),
(78, 'voluptatem error illum', 'Itaque consequatur libero ratione id.', 8.87, 216, 1, 247, 1),
(79, 'tempora voluptate velit', 'Animi dolorum ut similique ut enim iusto.', 14.94, 285, 9, 161, 1),
(80, 'expedita aut et', 'Iure voluptas non expedita sapiente sed.', 19.27, 85, 20, 111, 1),
(81, 'ut a id', 'Tempora voluptatem eligendi ipsum suscipit veniam rem odit.', 24.07, 281, 22, 155, 1),
(82, 'et voluptatem dolorem', 'Odio ad ipsa eligendi ea.', 24.13, 138, 2, 58, 1),
(83, 'sit dolor sunt', 'Soluta in nisi dolorem perferendis omnis.', 14.98, 244, 28, 100, 1),
(84, 'qui natus sequi', 'Architecto aliquid neque repellendus.', 12.56, 216, 2, 16, 1),
(85, 'nihil quae maiores', 'Quia tempore aliquam enim laudantium quam non occaecati.', 31.97, 154, 6, 211, 1),
(86, 'quo iure id', 'Cumque incidunt rem sapiente laborum aut.', 22.14, 253, 16, 132, 1),
(87, 'rerum fugiat aut', 'Laudantium sed non ea.', 2.44, 447, 9, 93, 1),
(88, 'ullam est porro', 'Voluptatem fuga tempora ipsam praesentium eius aperiam ex officia.', 22.33, 215, 12, 138, 1),
(89, 'deserunt incidunt porro', 'Modi et soluta laboriosam ut exercitationem.', 31.59, 368, 10, 144, 1),
(90, 'id modi eligendi', 'Distinctio nihil delectus et error nihil veniam sunt.', 9.18, 131, 17, 115, 1),
(91, 'harum iure sint', 'Itaque nobis similique voluptates recusandae quibusdam qui.', 25.88, 344, 7, 165, 1),
(92, 'consequatur et repellat', 'Rem modi expedita facilis et praesentium sunt.', 38.29, 119, 18, 17, 1),
(93, 'vel commodi consequuntur', 'Minima dolor reprehenderit voluptate molestiae dolorem.', 21.29, 392, 18, 82, 1),
(94, 'expedita dolorem aut', 'Vero et tempora qui.', 6.73, 651, 19, 153, 1),
(95, 'iusto ut nulla', 'Rerum sunt sequi aspernatur omnis facere.', 19.31, 67, 23, 210, 1),
(96, 'itaque asperiores fuga', 'Possimus nesciunt harum atque quibusdam repudiandae.', 37.67, 590, 25, 31, 1),
(97, 'et consequatur in', 'Temporibus fugit excepturi ab aut consequatur.', 3.26, 254, 22, 22, 1),
(98, 'alias alias maiores', 'Incidunt quas expedita sed aut ducimus aspernatur.', 30.44, 170, 21, 77, 1),
(99, 'error accusantium odio', 'Eos eos rerum iste impedit nam error.', 35.34, 225, 24, 190, 1),
(100, 'sequi temporibus corporis', 'Quia ipsa vitae similique tempore.', 33.11, 76, 5, 228, 1),
(101, 'esse animi veritatis', 'Ea ab facilis accusamus dicta vel.', 43.13, 497, 17, 154, 1),
(102, 'labore nihil aut', 'Necessitatibus repudiandae molestiae sit vel ea.', 35.83, 525, 25, 77, 1),
(103, 'veniam accusamus in', 'Et adipisci quisquam porro.', 44.37, 103, 2, 14, 1),
(104, 'id aspernatur voluptatem', 'Nihil rerum sint aperiam aut provident in.', 13.05, 328, 15, 29, 1),
(105, 'maiores pariatur et', 'Quis nostrum delectus voluptatem non.', 22.57, 496, 27, 21, 1),
(106, 'sapiente dolor quibusdam', 'Officia est dicta non et.', 38.62, 390, 15, 135, 1),
(107, 'tenetur in commodi', 'Commodi deleniti vero sint est maiores molestiae.', 8.83, 324, 4, 45, 1),
(108, 'est dolor saepe', 'Est delectus facilis animi quaerat rerum vitae quaerat dolorum.', 41.69, 365, 4, 115, 1),
(109, 'nihil sequi tempore', 'Enim aut nihil quibusdam alias.', 33.08, 140, 21, 106, 1),
(110, 'atque voluptatibus dolores', 'Ad quidem doloremque dolore vero voluptatem quidem.', 16.12, 273, 7, 139, 1),
(111, 'alias rerum minima', 'Hic fugiat autem illum voluptatem.', 15.71, 131, 5, 24, 1),
(112, 'in similique exercitationem', 'Ea labore nihil voluptatibus voluptatem.', 27.56, 554, 26, 34, 1),
(113, 'quos quae officiis', 'Deserunt quas voluptate nostrum.', 0.02, 458, 8, 182, 1),
(114, 'debitis molestiae ut', 'Fugiat ipsam esse harum temporibus culpa harum.', 39.7, 366, 8, 104, 1),
(115, 'assumenda in id', 'Rerum voluptate aut deleniti ipsum necessitatibus sunt.', 35.17, 288, 2, 26, 1),
(116, 'error unde et', 'Soluta iusto excepturi cupiditate est.', 23.31, 57, 7, 160, 1),
(117, 'numquam nam dolorem', 'Qui dolore quae qui impedit.', 27.38, 653, 24, 155, 1),
(118, 'et impedit atque', 'Est earum pariatur autem perferendis a.', 10.71, 452, 20, 7, 1),
(119, 'distinctio cumque est', 'Ut corporis voluptates asperiores consectetur vitae at ea illo.', 1.82, 608, 24, 195, 1),
(120, 'praesentium quia quidem', 'Consequuntur magnam consequuntur repellendus voluptatem veniam sed voluptas.', 14.67, 43, 5, 15, 1),
(121, 'neque nulla rem', 'Id totam occaecati assumenda unde ut.', 12.26, 225, 12, 104, 1),
(122, 'sunt fugiat ut', 'Provident omnis delectus blanditiis quas nemo animi ipsum.', 35.56, 652, 15, 133, 1),
(123, 'laboriosam id ipsam', 'Voluptas mollitia vero est quis ducimus.', 44.24, 97, 21, 18, 1),
(124, 'voluptas alias reiciendis', 'Corporis velit nostrum voluptatem repudiandae tempora facere accusamus.', 30.96, 476, 8, 12, 1),
(125, 'quasi assumenda atque', 'Maiores amet aut libero voluptate.', 6.69, 553, 13, 153, 1),
(126, 'at quibusdam molestias', 'Magnam modi non est ut autem veniam vitae velit.', 3.85, 486, 14, 86, 1),
(127, 'id harum neque', 'Sequi odio nesciunt natus doloremque velit aut suscipit.', 31.24, 249, 14, 246, 1),
(128, 'vitae natus earum', 'Et praesentium id quas deleniti.', 33.87, 556, 13, 156, 1),
(129, 'magnam magni et', 'Quibusdam autem ipsum eum aut dolorem natus.', 16.92, 287, 23, 170, 1),
(130, 'et necessitatibus molestias', 'Quod consequuntur totam placeat temporibus doloribus asperiores aut tempora.', 14.5, 140, 29, 56, 1),
(131, 'quos voluptas repellat', 'Ut cum qui tempore architecto perferendis quibusdam.', 42.25, 51, 5, 26, 1),
(132, 'minima saepe et', 'Sed consequatur aut dolores.', 12.09, 249, 13, 148, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago_especifico`
--

CREATE TABLE `metodo_pago_especifico` (
  `id` int(11) NOT NULL,
  `titular` varchar(200) NOT NULL,
  `fecha_emision` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `id_metodo_pago` int(11) NOT NULL,
  `numero_tarjeta` bigint(11) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `tipo_tarjeta` varchar(45) DEFAULT NULL,
  `entidad_bancaria` varchar(65) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cbu` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `metodo_pago_especifico`
--

INSERT INTO `metodo_pago_especifico` (`id`, `titular`, `fecha_emision`, `fecha_vencimiento`, `id_metodo_pago`, `numero_tarjeta`, `cvv`, `tipo_tarjeta`, `entidad_bancaria`, `fecha`, `cbu`) VALUES
(1, 'hola como andas', NULL, '2022-05-03', 4, 1234123412341234, 222, NULL, NULL, '2020-03-03 18:51:10', NULL),
(2, 'hola como andas', NULL, '2022-05-03', 4, 1234123412341234, 222, NULL, NULL, '2020-03-03 19:44:24', NULL),
(3, 'hola como andas', NULL, '2022-05-03', 4, 1234123412341234, 222, NULL, NULL, '2020-03-03 19:45:09', NULL),
(4, 'luciano gaston ludueña saavedra', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-06 21:38:20', NULL),
(5, 'luciano gaston ludueña saavedra', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-06 21:45:51', NULL),
(6, 'luciano gaston ludueña saavedra', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2020-03-06 21:49:05', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_02_20_205735_update_usuarios_table', 2),
(9, '2020_02_25_203510_update_metodos_de_pago', 3),
(10, '2020_02_25_205630_update_metodos_de_pago_v2', 4),
(11, '2020_02_28_221828_alter_comentarios_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `precio` float NOT NULL,
  `ciudad_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_id` int(11) NOT NULL,
  `valoracion` float DEFAULT NULL,
  `is_usado` tinyint(4) DEFAULT '0',
  `meses_uso` int(11) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  `estado_uso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_usuario`, `name`, `descripcion`, `precio`, `ciudad_id`, `fecha`, `categoria_id`, `valoracion`, `is_usado`, `meses_uso`, `estado`, `estado_uso`) VALUES
(2, 1, 'samsung', 'samsung nuevo', 250, 1, '2020-02-08 00:23:21', 1, 0, 0, NULL, 1, NULL),
(3, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 00:26:23', 1, NULL, 0, NULL, 1, NULL),
(4, 1, 'iphone X', 'iphone nuevo', 400, 1, '2020-02-08 18:50:44', 1, 4, 0, NULL, 1, NULL),
(5, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:31', 1, NULL, 0, NULL, 1, NULL),
(6, 1, 'iphone X', 'iphone nuevo', 400, 1, '2020-02-08 18:51:32', 1, NULL, 0, NULL, 1, NULL),
(7, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:33', 1, NULL, 0, NULL, 1, NULL),
(8, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:34', 1, NULL, 0, NULL, 1, NULL),
(9, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:35', 1, NULL, 0, NULL, 1, NULL),
(10, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:36', 1, NULL, 0, NULL, 1, NULL),
(11, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:38', 1, NULL, 0, NULL, 1, NULL),
(12, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:38', 1, NULL, 0, NULL, 1, NULL),
(13, 1, 'samsung', 'samsung nuevo', 250, 1, '2020-02-08 18:51:39', 1, NULL, 0, NULL, 1, NULL),
(14, 1, 'iphone X', 'iphone nuevo', 400, 1, '2020-02-08 18:51:41', 1, NULL, 0, NULL, 1, NULL),
(15, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:41', 1, NULL, 0, NULL, 1, NULL),
(16, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:42', 1, NULL, 0, NULL, 1, NULL),
(17, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:43', 1, NULL, 0, NULL, 1, NULL),
(18, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:44', 1, NULL, 0, NULL, 1, NULL),
(19, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 18:51:48', 1, NULL, 0, NULL, 1, NULL),
(20, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 19:59:24', 1, NULL, 0, NULL, 1, NULL),
(21, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 20:02:51', 1, NULL, 0, NULL, 1, NULL),
(22, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 20:02:53', 1, NULL, 0, NULL, 1, NULL),
(23, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 20:02:54', 1, NULL, 0, NULL, 1, NULL),
(24, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 20:02:56', 1, NULL, 0, NULL, 1, NULL),
(25, 1, 'samsung', 'samsung nuevo', 250, 1, '2020-02-08 20:02:57', 1, NULL, 0, NULL, 1, NULL),
(26, 1, 'iphone X', 'iphone nuevo', 400, 1, '2020-02-08 20:02:58', 1, NULL, 0, NULL, 1, NULL),
(27, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 20:03:00', 1, NULL, 0, NULL, 1, NULL),
(28, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 20:48:23', 1, NULL, 0, NULL, 1, NULL),
(29, 1, 'samsung', 'samsung nuevo', 250, 1, '2020-02-08 21:23:04', 1, NULL, 0, NULL, 1, NULL),
(30, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 23:13:15', 1, NULL, 0, NULL, 1, NULL),
(31, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 23:13:17', 1, NULL, 0, NULL, 1, NULL),
(32, 1, 'iphone', 'iphone usado', 300, 1, '2020-02-08 23:13:19', 1, NULL, 0, NULL, 1, NULL),
(35, 1, 'toyota hilux', 'camioneta 0km', 50000, 4, '2020-02-09 21:47:48', 400, NULL, 0, NULL, 1, NULL),
(36, 1, 'toyota hilux', 'camioneta 0km', 50000, 4, '2020-02-09 21:50:14', 400, NULL, 0, NULL, 1, NULL),
(45, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:15:51', 400, 5.5, 0, NULL, 1, NULL),
(46, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:17:38', 400, NULL, 0, NULL, 1, NULL),
(47, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:17:53', 400, 3.5, 0, NULL, 1, NULL),
(48, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:18:35', 400, 4.66667, 0, NULL, 1, NULL),
(49, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:19:30', 400, 8.5, 0, NULL, 1, NULL),
(50, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:20:25', 400, 10, 0, NULL, 1, NULL),
(51, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:20:42', 400, 3, 0, NULL, 1, NULL),
(52, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:24:40', 400, 5.5, 0, NULL, 1, NULL),
(53, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:25:19', 400, NULL, 0, NULL, 1, NULL),
(54, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:25:56', 400, 8, 0, NULL, 1, NULL),
(55, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:27:03', 400, 4, 0, NULL, 1, NULL),
(56, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:27:55', 400, 8, 0, NULL, 1, NULL),
(57, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:57:38', 400, 5.75, 0, NULL, 1, NULL),
(58, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 22:58:27', 400, 5, 0, NULL, 1, NULL),
(59, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:02:16', 400, 8, 0, NULL, 1, NULL),
(60, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:02:38', 400, 2.5, 0, NULL, 1, NULL),
(61, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:04:17', 400, 0, 0, NULL, 1, NULL),
(62, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:04:48', 400, 0, 0, NULL, 1, NULL),
(63, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:17:16', 400, 0, 0, NULL, 1, NULL),
(64, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:18:32', 400, 0, 0, NULL, 1, NULL),
(65, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:19:23', 400, 0, 0, NULL, 1, NULL),
(66, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:21:31', 400, 0, 0, NULL, 1, NULL),
(67, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:23:45', 400, 0, 0, NULL, 1, NULL),
(68, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:26:08', 400, 1, 0, NULL, 1, NULL),
(69, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:29:46', 400, 7.25, 0, NULL, 1, NULL),
(70, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:30:20', 400, 3.5, 0, NULL, 1, NULL),
(71, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:37:50', 400, 3, 0, NULL, 1, NULL),
(72, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:39:31', 400, 8, 0, NULL, 1, NULL),
(73, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:41:16', 400, 6, 0, NULL, 1, NULL),
(74, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:41:27', 400, 5, 0, NULL, 1, NULL),
(75, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:42:24', 400, 10, 0, NULL, 1, NULL),
(76, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:42:49', 400, 0, 0, NULL, 1, NULL),
(77, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:44:56', 400, 0, 0, NULL, 1, NULL),
(78, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:45:20', 400, 0, 0, NULL, 1, NULL),
(79, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:45:37', 400, 0, 0, NULL, 1, NULL),
(80, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:46:26', 400, 0, 0, NULL, 1, NULL),
(81, 1, 'hilux 2019', 'hilux 2019 2000km', 48000, 7, '2020-02-09 23:47:02', 400, 0, 0, NULL, 1, NULL),
(82, 1, 'asd', 'asd', 123, 1, '2020-02-10 00:09:46', 400, 0, 0, NULL, 1, NULL),
(83, 1, 'asd', 'asd', 123, 1, '2020-02-10 00:10:37', 400, 0, 0, NULL, 1, NULL),
(84, 1, 'asd', 'asd', 123, 1, '2020-02-10 00:12:29', 400, 0, 0, NULL, 1, NULL),
(85, 1, 'asd', 'asd', 123, 1, '2020-02-10 00:12:59', 400, 0, 0, NULL, 1, NULL),
(86, 1, '12331', 'adad', 13123, 1, '2020-02-10 00:21:11', 400, 0, 0, NULL, 1, NULL),
(87, 1, 'adsadas', 'asdad', 1456, 1, '2020-02-10 00:22:29', 400, 0, 0, NULL, 1, NULL),
(88, 1, '1asdad', 'asdsadd', 140, 5, '2020-02-10 00:25:19', 400, 0, 0, NULL, 1, NULL),
(89, 1, 'asdasd', 'adadsadada', 1444, 1, '2020-02-10 00:27:12', 400, 0, 0, NULL, 1, NULL),
(90, 1, 'adsad', 'hola wacho', 1800, 6, '2020-02-10 00:29:26', 400, 4.83333, 0, NULL, 1, NULL),
(91, 1, 'play station 4', 'play 4 1TB  usada con 4 juegos', 12000, 40, '2020-02-10 20:32:54', 489, 0, 0, NULL, 1, NULL),
(92, 1, 'play station 4', 'play 4 1TB  usada con 4 juegos', 12000, 40, '2020-02-10 20:34:39', 489, 0, 0, NULL, 1, NULL),
(93, 1, 'play station 4', 'play 4 1TB  usada con 4 juegos', 12000, 40, '2020-02-10 20:37:32', 489, 0, 1, 6, 1, NULL),
(94, 1, 'play station 4', 'play 4 1TB  usada con 4 juegos', 12000, 40, '2020-02-10 20:40:31', 489, 0, 1, 6, 1, NULL),
(95, 1, 'play station 4', 'play 4 1TB  usada con 4 juegos', 12000, 40, '2020-02-10 20:41:13', 489, 0, 1, 6, 1, 2),
(96, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 21:53:35', 450, NULL, 1, 24, 1, 6),
(97, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:13', 450, 0, 1, 24, 1, 6),
(98, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:15', 450, 0, 1, 24, 1, 6),
(99, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:17', 450, 0, 1, 24, 1, 6),
(100, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:18', 450, NULL, 1, 24, 1, 6),
(101, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:20', 450, NULL, 1, 24, 1, 6),
(102, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:23', 450, NULL, 1, 24, 1, 6),
(103, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:25', 450, NULL, 1, 24, 1, 6),
(104, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:27', 450, 10, 1, 24, 1, 6),
(105, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:30', 450, NULL, 1, 24, 1, 6),
(106, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:32', 450, NULL, 1, 24, 1, 6),
(107, 2, 'play 4 destruida', 'play 4 WLOD', 100, 85, '2020-02-11 22:01:35', 450, NULL, 1, 24, 1, 6),
(108, 2, 'auto y pelota', 'hola', 10, 62, '2020-02-12 22:12:16', 428, NULL, 0, NULL, 1, NULL),
(109, 1, 'test laravel', 'test de crear publicacion', 25, 1, '2020-02-18 21:56:36', 1, NULL, 0, NULL, 0, NULL),
(111, 1, 'test foto', 'test foto', 150, 1, '2020-02-19 00:21:44', 1, NULL, 0, NULL, 1, NULL),
(112, 1, 'test multiples fotos', 'test multiples fotos', 1500, 1, '2020-02-19 22:08:53', 1, NULL, 0, NULL, 1, NULL),
(113, 1, 'test multiples fotos', 'test multiples fotos', 1500, 1, '2020-02-19 22:11:55', 1, 6, 0, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_listas`
--

CREATE TABLE `productos_listas` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `name` varchar(16) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` bigint(11) DEFAULT NULL,
  `id_direccion` int(11) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `isAdmin` tinyint(4) DEFAULT '0',
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT '0',
  `foto` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`name`, `id`, `password`, `fecha_creacion`, `apellido`, `telefono`, `id_direccion`, `email`, `isAdmin`, `estado`, `remember_token`, `foto`, `created_at`, `updated_at`, `email_verified_at`) VALUES
('luciano', 1, '$2y$10$l1MMMxclX2LA572rE139Ou/mvz4I4SINs2UzMhpL2fM78JOKjYJ3q', '2020-02-08 00:20:41', 'ludueña', 3513252797, 110, 'asd@asd', 0, 1, 'KjJHjJcPrA3cnvtjvRa7kXby1LyjBYdcM7XoGcK0PXnSH6pwG6RXCeUV4Ve0', '038eMmfIAggFXp1AN2ZdyurJWHNFy2JJqznJekkM.png', NULL, '2020-03-02 20:44:58', NULL),
('Sofía', 2, '$2y$10$6SyWkSLS5kqPZLSzBJEJDeCROA.E9/8q75FzwAevUwchuFjcFiVFi', '2020-02-10 23:12:48', 'Nygaard', NULL, 111, 'hola@a', 0, 1, '0', 'hola@a.jpg', NULL, NULL, NULL),
('digital-house', 3, '$2y$10$ODjQFI8.7R3KFUqtGr8f6eYnaMoYj7EVtd.WZA/0uQZza5ZL4.cO6', '2020-02-12 22:14:55', NULL, NULL, NULL, 'asd@asdddd', 0, 1, '0', 'error', NULL, NULL, NULL),
('hola', 4, '$2y$10$4ygOdJySJtU8g73RtzBHSeRMaW9wptzJwmblEcJOOPmB1dlcUAdCG', '2020-02-20 22:26:47', NULL, NULL, NULL, 'hola@asd', 0, 1, '0', 'error', '2020-02-21 01:26:47', '2020-02-21 01:26:47', NULL),
('test', 6, '$2y$10$iqY2OLFvoUe30YhR4wbcJeluOVGmNse6E/BCfIcxB0Ffh6gT7DHOW', '2020-02-20 22:34:06', NULL, NULL, NULL, 'testusuario@asd', 0, 1, '0', 'error', '2020-02-21 01:34:06', '2020-02-21 01:34:06', NULL),
('Sofía', 7, '$2y$10$7HWVShDC/OtjxdjizqJ/be4x9OThZc1PKxRZ7wXMWoIUesVYUBNAO', '2020-02-28 19:05:34', NULL, NULL, NULL, 'brujas9022@gmail.com', 0, 1, 'CssWDCc8gqFVXsLXp8wfxeo8nd4irDoHNEaJZ3Omy1KrA1Y3z2QqzD3CexbD', 'error', '2020-02-28 22:05:34', '2020-02-28 22:05:34', NULL),
('wei', 8, '$2y$10$BbTalAjjEY9FAmgdpxluauIkD/z1CIjxUIMK4hg4rsOC0wt38mIUa', '2020-02-29 02:05:55', NULL, NULL, NULL, 'wei@wei.com', 0, 1, '0', 'EZK6ffOFCurlv9tDFjYeAdpDdT1pToajuphjF84Z.png', '2020-02-29 05:05:55', '2020-02-29 05:05:55', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valoraciones`
--

INSERT INTO `valoraciones` (`id`, `id_usuario`, `id_producto`, `valoracion`, `estado`) VALUES
(21, 1, 4, 4, 1),
(33, 1, 60, 2, 1),
(34, 1, 60, 1, 1),
(35, 1, 81, 7, 1),
(36, 1, 50, 10, 1),
(37, 1, 71, 4, 1),
(38, 2, 49, 9, 1),
(39, 1, 94, 10, 1),
(40, 2, 70, 4, 1),
(41, 2, 91, 4, 1),
(42, 1, 77, 7, 1),
(43, 1, 68, 1, 1),
(44, 1, 49, 7, 1),
(45, 1, 60, 2, 1),
(46, 2, 89, 8, 1),
(47, 2, 60, 4, 1),
(48, 1, 90, 4, 1),
(49, 2, 70, 3, 1),
(50, 1, 60, 1, 1),
(51, 2, 47, 6, 1),
(52, 1, 88, 6, 1),
(53, 1, 90, 2, 1),
(54, 1, 81, 3, 1),
(55, 1, 77, 1, 1),
(56, 2, 84, 10, 1),
(57, 2, 66, 9, 1),
(58, 2, 72, 8, 1),
(59, 2, 65, 6, 1),
(60, 1, 49, 8, 1),
(61, 2, 79, 6, 1),
(62, 1, 90, 5, 1),
(63, 2, 93, 3, 1),
(64, 2, 78, 1, 1),
(65, 1, 57, 4, 1),
(66, 1, 89, 6, 1),
(67, 1, 69, 9, 1),
(68, 1, 57, 8, 1),
(69, 2, 59, 8, 1),
(70, 2, 62, 2, 1),
(71, 2, 63, 3, 1),
(72, 1, 51, 1, 1),
(73, 1, 89, 3, 1),
(74, 1, 48, 3, 1),
(75, 2, 62, 4, 1),
(76, 1, 76, 1, 1),
(77, 1, 48, 6, 1),
(78, 2, 57, 1, 1),
(79, 1, 70, 5, 1),
(80, 2, 70, 2, 1),
(81, 1, 66, 10, 1),
(82, 1, 86, 2, 1),
(83, 2, 51, 5, 1),
(84, 2, 90, 8, 1),
(85, 2, 48, 5, 1),
(86, 1, 89, 9, 1),
(87, 1, 85, 5, 1),
(88, 1, 62, 8, 1),
(89, 1, 84, 1, 1),
(90, 1, 50, 10, 1),
(91, 2, 75, 10, 1),
(92, 1, 83, 1, 1),
(93, 1, 65, 1, 1),
(94, 1, 86, 2, 1),
(95, 2, 58, 5, 1),
(96, 1, 80, 5, 1),
(97, 1, 92, 7, 1),
(98, 1, 95, 3, 1),
(99, 2, 86, 10, 1),
(100, 2, 45, 5, 1),
(101, 1, 90, 9, 1),
(102, 1, 93, 10, 1),
(103, 2, 74, 7, 1),
(104, 1, 55, 4, 1),
(105, 1, 69, 5, 1),
(106, 2, 60, 5, 1),
(107, 1, 69, 10, 1),
(108, 2, 62, 1, 1),
(109, 1, 75, 10, 1),
(110, 1, 57, 10, 1),
(111, 1, 95, 3, 1),
(112, 1, 73, 3, 1),
(113, 1, 84, 9, 1),
(114, 1, 65, 5, 1),
(115, 1, 62, 4, 1),
(116, 1, 94, 9, 1),
(117, 1, 45, 6, 1),
(118, 2, 52, 9, 1),
(119, 1, 47, 1, 1),
(120, 2, 54, 8, 1),
(121, 1, 49, 10, 1),
(122, 2, 69, 5, 1),
(123, 1, 72, 8, 1),
(124, 1, 80, 9, 1),
(125, 2, 73, 9, 1),
(126, 2, 90, 1, 1),
(127, 2, 78, 10, 1),
(128, 2, 52, 2, 1),
(129, 1, 56, 8, 1),
(130, 1, 92, 10, 1),
(131, 2, 74, 3, 1),
(132, 2, 71, 2, 1),
(133, 2, 91, 4, 1),
(134, 2, 91, 4, 1),
(135, 2, 91, 10, 1),
(136, 2, 91, 9, 1),
(137, 2, 91, 9, 1),
(138, 2, 91, 9, 1),
(139, 2, 91, 9, 1),
(140, 2, 91, 9, 1),
(141, 2, 91, 9, 1),
(142, 2, 91, 7, 1),
(143, 2, 91, 7, 1),
(144, 2, 92, 2, 1),
(145, 2, 104, 10, 1),
(146, 1, 2, 0, 1),
(147, 1, 113, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_comprador` int(11) NOT NULL,
  `precio` float NOT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_direccion_envio` int(11) NOT NULL,
  `id_metodo_envio` int(11) NOT NULL,
  `id_metodo_pago_especifico` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_comprador`, `precio`, `fecha_venta`, `id_direccion_envio`, `id_metodo_envio`, `id_metodo_pago_especifico`, `estado`) VALUES
(2, 1, 1500, '2020-03-03 19:45:09', 110, 105, 3, 1),
(3, 1, 110, '2020-03-06 21:38:21', 110, 7, 4, 1),
(4, 1, 48000, '2020-03-06 21:45:52', 110, 1, 5, 1),
(5, 1, 48000, '2020-03-06 21:49:05', 110, 1, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio_unitario` float NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '1',
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id`, `id_producto`, `precio_unitario`, `cantidad`, `id_venta`) VALUES
(1, 113, 1500, 1, 2),
(2, 108, 10, 1, 3),
(3, 104, 100, 1, 3),
(4, 52, 48000, 1, 4),
(5, 52, 48000, 1, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario_idx` (`id_usuario`),
  ADD KEY `id_producto_idx` (`id_producto`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ciudad_id_idx` (`ciudad_id`);

--
-- Indices de la tabla `empresas_envio`
--
ALTER TABLE `empresas_envio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_envio`
--
ALTER TABLE `estado_envio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos_productos`
--
ALTER TABLE `fotos_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto_idx` (`id_producto`);

--
-- Indices de la tabla `listas_deseados`
--
ALTER TABLE `listas_deseados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_productos_lista_idx` (`id_productos_lista`);

--
-- Indices de la tabla `metodos_de_pago`
--
ALTER TABLE `metodos_de_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metodos_envio`
--
ALTER TABLE `metodos_envio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa_idx` (`id_empresa`);

--
-- Indices de la tabla `metodo_pago_especifico`
--
ALTER TABLE `metodo_pago_especifico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_metodo_idx` (`id_metodo_pago`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario_idx` (`id_usuario`),
  ADD KEY `id_categoria_idx` (`categoria_id`);

--
-- Indices de la tabla `productos_listas`
--
ALTER TABLE `productos_listas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto_idx` (`id_producto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `id_direccion_idx` (`id_direccion`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario_idx` (`id_usuario`),
  ADD KEY `id_producto_idx` (`id_producto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comprador_idx` (`id_comprador`),
  ADD KEY `id_direccion_idx` (`id_direccion_envio`),
  ADD KEY `id_metodo_envio_idx` (`id_metodo_envio`),
  ADD KEY `id_metodo_pago_idx` (`id_metodo_pago_especifico`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta_idx` (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `empresas_envio`
--
ALTER TABLE `empresas_envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT de la tabla `estado_envio`
--
ALTER TABLE `estado_envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotos_productos`
--
ALTER TABLE `fotos_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=772;

--
-- AUTO_INCREMENT de la tabla `listas_deseados`
--
ALTER TABLE `listas_deseados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `metodos_envio`
--
ALTER TABLE `metodos_envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `metodo_pago_especifico`
--
ALTER TABLE `metodo_pago_especifico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `productos_listas`
--
ALTER TABLE `productos_listas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `id_producto_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `id_usuario_comentarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `ciudad_id` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`);

--
-- Filtros para la tabla `fotos_productos`
--
ALTER TABLE `fotos_productos`
  ADD CONSTRAINT `id_producto_fotos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `listas_deseados`
--
ALTER TABLE `listas_deseados`
  ADD CONSTRAINT `id_productos_lista_lista_deseados` FOREIGN KEY (`id_productos_lista`) REFERENCES `productos_listas` (`id`);

--
-- Filtros para la tabla `metodos_envio`
--
ALTER TABLE `metodos_envio`
  ADD CONSTRAINT `id_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresas_envio` (`id`);

--
-- Filtros para la tabla `metodo_pago_especifico`
--
ALTER TABLE `metodo_pago_especifico`
  ADD CONSTRAINT `id_metodo01` FOREIGN KEY (`id_metodo_pago`) REFERENCES `metodos_de_pago` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `id_categoria_productos` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `id_usuario_productos` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `productos_listas`
--
ALTER TABLE `productos_listas`
  ADD CONSTRAINT `id_producto_listas` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_direccion` FOREIGN KEY (`id_direccion`) REFERENCES `direcciones` (`id`);

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `id_producto_valoraciones` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `id_usuario_valoraciones` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `id_comprador` FOREIGN KEY (`id_comprador`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `id_direccion_ventas` FOREIGN KEY (`id_direccion_envio`) REFERENCES `direcciones` (`id`),
  ADD CONSTRAINT `id_metodo_envio_ventas` FOREIGN KEY (`id_metodo_envio`) REFERENCES `metodos_envio` (`id`),
  ADD CONSTRAINT `id_metodo_pago` FOREIGN KEY (`id_metodo_pago_especifico`) REFERENCES `metodo_pago_especifico` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `id_venta` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
