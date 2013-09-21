-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-09-2013 a las 06:22:24
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.5.3-1+debphp.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `laninadelmezcal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botellas`
--

CREATE TABLE IF NOT EXISTS `botellas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `botella` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `clase` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_shop_mexico` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_shop_usa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `botellas`
--

INSERT INTO `botellas` (`id`, `botella`, `descripcion`, `clase`, `style`, `imagen`, `link_shop_mexico`, `link_shop_usa`, `is_active`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Espadin', '<p>algun tengo para que vaya en el cuerpo del mensaje de la botella.&nbsp;</p>', 'espadin', 'ninguno', '52378082d27c2.png', 'http://bacus-3.myshopify.com/products/la-ni-a-del-mezcal-espadin', 'http://www.klwines.com/detail.asp?sku=1120562', 1, 'espadin', '2013-09-16 17:04:50', '2013-09-16 17:04:50'),
(2, 'primario mezcal joven', '<p>otro dato que meter en la descripcion de la botella</p>', 'primario', 'font-size: 24pt;', '5237832d3a3a4.png', 'http://bacus-3.myshopify.com/products/mezcal-primario', 'http://www.klwines.com/detail.asp?sku=1120562', 1, 'primario-mezcal-joven', '2013-09-16 17:16:13', '2013-09-16 17:16:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botellas_mensajes`
--

CREATE TABLE IF NOT EXISTS `botellas_mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `botella_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` longtext COLLATE utf8_unicode_ci,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clase` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_how_to_mix` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CCAD7A437DB8D74F` (`botella_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `botellas_mensajes`
--

INSERT INTO `botellas_mensajes` (`id`, `botella_id`, `titulo`, `mensaje`, `imagen`, `clase`, `style`, `is_how_to_mix`, `is_active`) VALUES
(1, 1, 'vintage', '<p>cuerpo del mensaje</p>', NULL, 'right', 'top: 20px;', 0, 1),
(2, 1, 'proof', '<p>mensaje de proof</p>', NULL, 'left', 'top: 300px;', 0, 1),
(3, 1, 'varietal', '<p>mensaje de&nbsp;varietal</p>', NULL, 'right', 'top: 450px; right: 110px;', 0, 1),
(4, 1, 'region', '<p>cuerpo de&nbsp;region</p>', NULL, 'left', 'top: 510px;', 0, 1),
(5, 1, 'joven', '<p>cuerpo de mensaje&nbsp;joven</p>', NULL, 'right', 'top: 530px; right:110px;', 0, 1),
(6, 1, 'reposado en campo', '<p>cuerpo del mensaje&nbsp;reposado en campo</p>', NULL, 'left', 'top: 610px;', 0, 1),
(7, 1, 'how to mix', '<p>SIN MENSAJE</p>', NULL, 'right', 'top: 640px; right:110px;', 1, 1),
(8, 2, 'vintage', '<p>cuerpo de mensaje&nbsp;vintage</p>', NULL, 'right', 'right:100px;top: 20px;', 0, 1),
(9, 2, 'proof', '<p>cuerpo de mensaje&nbsp;proof</p>', NULL, 'left', 'top: 270px;', 0, 1),
(10, 2, 'region', '<p>cuerpo de mensaje&nbsp;region</p>', NULL, 'left', 'top: 430px;', 0, 1),
(11, 2, 'joven', '<p>cuerpo de mensaje joven</p>', NULL, 'right', 'right:100px; top: 335px;', 0, 1),
(12, 2, 'how to mix', '<p>sin mensaje</p>', NULL, 'right', 'top: 590px; right:100px;', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_galerias`
--

CREATE TABLE IF NOT EXISTS `categorias_galerias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci,
  `tipo_categoria` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posicion` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_categoria` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `categorias_galerias`
--

INSERT INTO `categorias_galerias` (`id`, `categoria`, `descripcion`, `tipo_categoria`, `slug`, `posicion`, `is_active`, `is_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Galeria Principal', NULL, 1, 'galeria-principal', 1, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50'),
(2, 'Galeria About', NULL, 2, 'galeria-about', 2, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50'),
(3, 'Galeria Distribuidores Nacionales', NULL, 3, 'galeria-distribuidores-nacionales', 3, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50'),
(4, 'Galeria Distribuidores USA', NULL, 3, 'galeria-distribuidores-usa', 4, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50'),
(5, 'Espadin', NULL, 4, 'espadin', 5, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50'),
(6, 'Primario Mezcal Joven', NULL, 4, 'primario-mezcal-joven', 6, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_publicacion`
--

CREATE TABLE IF NOT EXISTS `categorias_publicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci,
  `tipo_categoria` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posicion` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_categoria` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categorias_publicacion`
--

INSERT INTO `categorias_publicacion` (`id`, `categoria`, `descripcion`, `tipo_categoria`, `slug`, `posicion`, `is_active`, `is_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Publicaciones about', NULL, 1, 'publicaciones-about', 1, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50'),
(2, 'Where To Find Mexico', NULL, 2, 'where-to-find-mexico', 2, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50'),
(3, 'Where To Find USA', NULL, 2, 'where-to-find-usa', 3, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50'),
(4, 'Where To Find Distribuidores', NULL, 2, 'where-to-find-distribuidores', 4, 1, 1, '2013-09-16 16:49:50', '2013-09-16 16:49:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE IF NOT EXISTS `configuraciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `configuracion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_archivo` int(11) NOT NULL,
  `texto` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE IF NOT EXISTS `galerias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_archivo` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8FF3E45E3397707A` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `categoria_id`, `titulo`, `descripcion`, `archivo`, `thumbnail`, `tipo_archivo`, `slug`, `is_active`, `posicion`) VALUES
(1, 5, 'img_1', NULL, '4e6db4c3804e74225d82c62872866d6f7de802be.jpg', '4e6db4c3804e74225d82c62872866d6f7de802be.jpg', 1, 'img-1', 1, 1),
(2, 5, 'img_2', NULL, '8a1525f2762cfa7bf0a519f04e7cfa8afe3fcdae.jpg', '8a1525f2762cfa7bf0a519f04e7cfa8afe3fcdae.jpg', 1, 'img-2', 1, 2),
(3, 5, 'img_3', NULL, '887b2dc59539a0fd4511f1af65ce0ba4b3cbbe1e.jpg', '887b2dc59539a0fd4511f1af65ce0ba4b3cbbe1e.jpg', 1, 'img-3', 1, 3),
(4, 6, 'slide1', NULL, '483eb93985ea26661cc3da810110586762af832f.jpg', '483eb93985ea26661cc3da810110586762af832f.jpg', 1, 'slide1', 1, 4),
(5, 6, 'slide4', NULL, '15f87641366a4dbe41637dbe1bce3b1aee022bf1.jpg', '15f87641366a4dbe41637dbe1bce3b1aee022bf1.jpg', 1, 'slide4', 1, 5),
(6, 6, 'slide3', NULL, '25af178e15f042dad6a0764e1f32907d0b6badc7.jpg', '25af178e15f042dad6a0764e1f32907d0b6badc7.jpg', 1, 'slide3', 1, 6),
(7, 6, 'slide2', NULL, '0f0552e5f66369929f1a64168ad1583cae61514c.jpg', '0f0552e5f66369929f1a64168ad1583cae61514c.jpg', 1, 'slide2', 1, 7),
(13, 2, 'img_1', NULL, '42c50c137c6baabd08c34f07144bda609f4e3f93.jpg', '42c50c137c6baabd08c34f07144bda609f4e3f93.jpg', 1, 'img-1', 1, 2),
(14, 2, 'img_2', NULL, '199cdbfb8868b196bd748461e3633ee932d1ba17.jpg', '199cdbfb8868b196bd748461e3633ee932d1ba17.jpg', 1, 'img-2', 1, 4),
(15, 2, 'img_3', NULL, 'cff95ab9b8c19f5324185b4fe77fea334455d67c.jpg', 'cff95ab9b8c19f5324185b4fe77fea334455d67c.jpg', 1, 'img-3', 1, 6),
(16, 2, 'img_4', NULL, '9050ee28e6ba0daab278af1cc6eabb7e03f4773a.jpg', '9050ee28e6ba0daab278af1cc6eabb7e03f4773a.jpg', 1, 'img-4', 1, 8),
(17, 2, 'img_5', NULL, 'bacaa616568308360dc17702aace93f4c117089e.jpg', 'bacaa616568308360dc17702aace93f4c117089e.jpg', 1, 'img-5', 1, 9),
(22, 1, 'DSC_0328', NULL, '76bc88938f00f6ebf4b1179ade05a1456ff93fc5.jpg', '76bc88938f00f6ebf4b1179ade05a1456ff93fc5.jpg', 1, 'dsc-0328', 1, 1),
(23, 1, 'la', NULL, '4e08abde21a95987b019a33fa3e68c7f81511317.jpg', '4e08abde21a95987b019a33fa3e68c7f81511317.jpg', 1, 'la', 1, 10),
(24, 1, 'slide1', NULL, '1ee5d07bae234b0565f5887638bdd54c7250c3bc.jpg', '1ee5d07bae234b0565f5887638bdd54c7250c3bc.jpg', 1, 'slide1', 1, 11),
(25, 1, 'slide2', NULL, '8dcc41075d9a5f423d6033bc17b7e889dd850aed.jpg', '8dcc41075d9a5f423d6033bc17b7e889dd850aed.jpg', 1, 'slide2', 1, 12),
(26, 1, 'slide3', NULL, 'c592dba2b890751ea439a50c6060753d418f2f99.jpg', 'c592dba2b890751ea439a50c6060753d418f2f99.jpg', 1, 'slide3', 1, 13),
(27, 1, 'slide4', NULL, 'c196f64980d9d0c360547ef8999115ff4fcea9e7.jpg', 'c196f64980d9d0c360547ef8999115ff4fcea9e7.jpg', 1, 'slide4', 1, 14),
(28, 2, 'la', NULL, '4aba1b3019d2098933fb461a63b247527159ee7d.jpg', '4aba1b3019d2098933fb461a63b247527159ee7d.jpg', 1, 'la', 1, 15),
(29, 3, 'LOGO_CITY_MARKET.315165626_std', NULL, 'f8a25a12ccece9d9bc3ec01ddec64c3791f1b42c.jpg', 'f8a25a12ccece9d9bc3ec01ddec64c3791f1b42c.jpg', 1, 'logo-city-market-315165626-std', 1, 16),
(30, 3, 'la', NULL, '771ce5c5e4662bcfc8350140e94cef693a5599b5.jpg', '771ce5c5e4662bcfc8350140e94cef693a5599b5.jpg', 1, 'la', 1, 17),
(31, 3, 'el', NULL, '81006ac7752594780b34bd6b39217446c77324e2.jpg', '81006ac7752594780b34bd6b39217446c77324e2.jpg', 1, 'el', 1, 18),
(32, 3, 'BACUS', NULL, 'e005edc42a19dfbb85dae79c4e1e021996c9f148.jpg', 'e005edc42a19dfbb85dae79c4e1e021996c9f148.jpg', 1, 'bacus', 1, 19),
(33, 3, 'la', NULL, 'd0e341a2eee65bd06ce5df497ae1392acdd0cde9.jpg', 'd0e341a2eee65bd06ce5df497ae1392acdd0cde9.jpg', 1, 'la', 1, 20),
(34, 3, 'k', NULL, '8120ee15e642589500a4ab49a0dabe57e367e225.gif', '8120ee15e642589500a4ab49a0dabe57e367e225.gif', 1, 'k', 1, 21),
(36, 4, 'LOGO_CITY_MARKET.315165626_std', NULL, '8bf301fa8c175bdf9151adb8ec7d5f0c1c6d677b.jpg', '8bf301fa8c175bdf9151adb8ec7d5f0c1c6d677b.jpg', 1, 'logo-city-market-315165626-std', 1, 6),
(37, 4, 'la', NULL, '0dfb69fbdcd4162812f7337312f5cdc85f8be3d3.jpg', '0dfb69fbdcd4162812f7337312f5cdc85f8be3d3.jpg', 1, 'la', 1, 3),
(38, 4, 'el', NULL, '0f95201ac8e59a344bfc8b3a5b43cfb5dbcb74e2.jpg', '0f95201ac8e59a344bfc8b3a5b43cfb5dbcb74e2.jpg', 1, 'el', 1, 4),
(39, 4, 'BACUS', NULL, '1f11d79d8e4d7dacf18d125cffbd70f23473994a.jpg', '1f11d79d8e4d7dacf18d125cffbd70f23473994a.jpg', 1, 'bacus', 1, 5),
(40, 4, 'la', NULL, '4d04286910e1680a644f1df3ea3b152e49c320c1.jpg', '4d04286910e1680a644f1df3ea3b152e49c320c1.jpg', 1, 'la', 1, 2),
(41, 4, 'k', NULL, '60183413ee1c40488618ffa53f61eb08fb41a5d4.gif', '60183413ee1c40488618ffa53f61eb08fb41a5d4.gif', 1, 'k', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE IF NOT EXISTS `publicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posicion` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_62F2085F3397707A` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `botellas_mensajes`
--
ALTER TABLE `botellas_mensajes`
  ADD CONSTRAINT `FK_CCAD7A437DB8D74F` FOREIGN KEY (`botella_id`) REFERENCES `botellas` (`id`);

--
-- Filtros para la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD CONSTRAINT `FK_8FF3E45E3397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categorias_galerias` (`id`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `FK_62F2085F3397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categorias_publicacion` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
