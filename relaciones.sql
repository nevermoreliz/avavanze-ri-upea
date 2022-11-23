-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-01-2018 a las 20:13:28
-- Versión del servidor: 10.0.32-MariaDB-0+deb8u1
-- Versión de PHP: 7.0.24-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `relaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_carrera`
--

CREATE TABLE IF NOT EXISTS `sic_carrera` (
`id_carrera` int(11) NOT NULL,
  `nom_carrera` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_carrera`
--

INSERT INTO `sic_carrera` (`id_carrera`, `nom_carrera`) VALUES
(1, 'INGENIERIA DE SISTEMAS'),
(2, 'INGENIERIA ELECTRICA'),
(3, 'INGENIERIA TEXTIL'),
(4, 'INGENIERIA CIVIL'),
(7, 'TRABAJO SOCIAL - UPEA'),
(8, 'INGENIERÍA AMBIENTAL'),
(9, 'DERECHO'),
(10, 'INSTITUCIONAL'),
(11, 'ARQUITECTURA'),
(14, 'MEDICINA'),
(15, 'AREA CIENCIAS AGRICOLAS, PECUARIAS Y RECURSOS'),
(16, 'ADMINISTRACIÓN DE EMPRESAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_categoria`
--

CREATE TABLE IF NOT EXISTS `sic_categoria` (
`id_categoria` int(11) NOT NULL,
  `nom_categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_categoria`
--

INSERT INTO `sic_categoria` (`id_categoria`, `nom_categoria`) VALUES
(1, 'ESTUDIANTES'),
(2, 'PROFESIONALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_contactos`
--

CREATE TABLE IF NOT EXISTS `sic_contactos` (
`id_contactos` int(11) NOT NULL,
  `nombre_c` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_c` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefonos_c` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_c` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carrera` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sic_contactos`
--

INSERT INTO `sic_contactos` (`id_contactos`, `nombre_c`, `direccion_c`, `telefonos_c`, `email_c`, `carrera`, `tipo`, `activo`) VALUES
(1, 'Ing. Wilfredo Perez', 'Villa Esperanza  S/N ', '73005081', 'wil_7700@gmail.com', 'INGENIERIA DE SISTEMAS', 'Coordinador', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_convenio`
--

CREATE TABLE IF NOT EXISTS `sic_convenio` (
`id_convenios` int(11) NOT NULL,
  `id_detalle_grupo` int(11) DEFAULT NULL,
  `id_tipo_convenio` int(11) NOT NULL,
  `nombre_convenio` longtext,
  `objetivo_convenio` longtext,
  `img_convenio` mediumtext,
  `pdf_convenio` mediumtext,
  `tiempo_duracion` varchar(15) DEFAULT NULL,
  `fecha_publicacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `direccion` varchar(200) DEFAULT NULL,
  `entidad` varchar(200) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_convenio`
--

INSERT INTO `sic_convenio` (`id_convenios`, `id_detalle_grupo`, `id_tipo_convenio`, `nombre_convenio`, `objetivo_convenio`, `img_convenio`, `pdf_convenio`, `tiempo_duracion`, `fecha_publicacion`, `direccion`, `entidad`, `telefono`, `email`, `estado`) VALUES
(1, 1, 2, 'PROYECTO COMEDOR NIÑO, NIÑA “SANTA TERESITA, HNO. MORRIS”', 'CONVENIO INTERINSTITUCIONAL ENTRE LA UNIVERSIDAD PÚBLICA DE EL ALTO (UPEA) – CARRERA DE TRABAJO SOCIAL Y LA COMUNIDAD PAPA XXIII- El presente Convenio, tiene por objeto establecer los acuerdos y mecanismos operativos aplicables a la realización de Prácticas Pre Profesionales a ser realizadas por parte de estudiantes de quinto año de la Carrera de Trabajo Social, así como en las modalidades de titulación: Trabajo Dirigido y Tesis de Grado, a ser implementadas entre la UPEA, carrera de Trabajo Social y la Comunidad Papa Juan XXIII- Proyecto Comedor Niño, Niña “Santa Teresita, Hno Morris” en el entendido que estas beneficiaran a ambas partes, estableciendo los acuerdos y mecanismos operativos de coordinación, interacción y reciprocidad, con el propósito de efectuar acciones conjuntas coadyuvando a su vez en la formación, capacitación y titulación de los estudiantes egresados de la Carrera de Trabajo Social de la UPEA.', 'assets/imgConvenios/1ED4.jpg', 'assets/conveniosPdf/pdf1.pdf', '2', '2017-11-28 21:29:43', 'LOS PINSO', 'COMUNIDAD PAPA XXIII- PROYECTO COMEDOR NIÑO, NIÑA “SANTA TERESITA, HNO. MORRIS”', '2227777', 'admin@admin.com', 'Activo'),
(2, 1, 1, 'CONVENIO INTERINSTITUCIONAL U.P.E.A. Y FUNDACION PALLIRI', 'El presente Convenio, tiene por objeto establecer los acuerdos y mecanismos operativos aplicables a la realización de Prácticas Pre Profesionales a ser realizadas por parte de estudiantes de quinto año de la Carrera de Trabajo Social, así como en las modalidades de titulación: Trabajo Dirigido y Tesis de Grado, a ser implementadas entre la UPEA, carrera de Trabajo Social y la Fundación Palliri, en el entendido que estas beneficiaran a ambas partes, estableciendo los acuerdos y mecanismos operativos de coordinación, interacción y reciprocidad, con el propósito de efectuar acciones conjuntas coadyuvando a su vez en la formación, capacitación y titulación de los estudiantes egresados de la Carrera de Trabajo Social de la UPEA.', 'assets/imgConvenios/211.jpg', 'Visio-grafcet8.pdf', '2', '2018-01-25 19:54:13', 'LOS PINOS', 'FUNDACION PALLIRI2', '22767676', 'admin@admin.com', 'Activo'),
(3, 1, 1, 'COOPERACION INTERINSTITUCIONAL U.P.E.A. Y LA COOPERACION MINERA DE BOLIVIA (COMIBOL)  ', 'Por el presente Convenio de Cooperación Interinstitucional, las partes se comprometen a implementar un sistema de Pasantías y/o realizar trabajo dirigido para estudiantes destacados, con alto potencial ecdémico de los últimos años y para egresados de la carreras de Ingeniería de Sistemas, Ingeniería Ambiental y Derecho de la Universidad Pública de El Alto que tengan afinidad con las Unidades La Corporación Minera de Bolivia (COMIBOL), para cumplir trabajos específicos y tareas inherentes a su Carrera, según las exigencia y requerimientos de la COMIBOL', 'assets/imgConvenios/Gotele.jpg', 'assets/conveniosPdf/pdf1.pdf', '5', '2017-11-28 00:31:23', 'LOS PINOS', 'CORPORACION MINERA DE BLIVIA (COMIBOL)', '', 'admin@admin.com', 'Activo'),
(4, 1, 1, 'CONVENIO ESPECIFICO INTERINSTITUCIONAL LA UNIDAD EDUCATIVA “TAWANTINSUYO”', 'El objeto del presente convenio es propiciar y establecer de forma concreta las condiciones institucionales que permitan el INGRESO DIRECTO POR UNICA VEZ en la gestión 2016, como estudiantes de la Universidad Pública de El Alto, a los Bachilleres de la Gestión 2015 de acuerdo a nomina propuesta por la Dirección de la Unidad Educativa “Tawantinsuyo”, con el fin de estimular e impulsar la continuidad de la Educación Superior.', '', 'VARIABLES.pdf', '1', '2017-11-28 22:08:20', '....', 'ESTUDIANTES DE UNIDAD EDUCATIVA TAWANTINSUYO Dto. SICA SICA', '', 'admin@admin.com', 'Activo'),
(5, 1, 2, 'COOPERACION INTERINSTITUCIONAL UPEA GOBIERNO AUTONOMO MUNICIPAL DE CHULUMANI', 'Por el presente Convenio Interinstitucional, LA ALCALDIA y LA UPEA manifiestan que es de interés mutuo de ambas partes, propiciar y concretar relaciones de cooperación, colaboración, fortalecimiento en capacitación y asistencia a fin de establecer los lineamientos generales para implementar y desarrollar un sistema de Pasantías, Trabajo Dirigido en dependencias del municipio de Chulumani como modalidad de graduación y obtención de la Licenciatura de la Carrera de Arquitectura – UPEA, mismos que favorecen  a estudiantes egresados de la Carrera. ', 'assets/images/prueba.jpg', 'assets/conveniosPdf/pdf1.pdf', '1', '2018-01-25 20:10:14', '---', 'GOBIERNO AUTONOMO MUNICIPAL DE CHULUMANI', '', 'admin@admin.com', 'Inactivo'),
(6, 1, 1, 'U.P.E.A. Y EL CENTRO DE ORIENTACION SOCIO LEGAL PARA ADULTOS/AS MAYORES (COSLAM)', 'El presente Convenio, tiene por objeto establecer los acuerdos y mecanismos operativos aplicables a la realización de Prácticas Pre Profesionales a ser realizadas por parte de estudiantes de quinto año de la Carrera de Trabajo Social, así como en las modalidades de titulación: Trabajo Dirigido y Tesis de Grado, a ser implementadas entre la UPEA, carrera de Trabajo Social y COSLAM en el entendido que estas beneficiaran a ambas partes, estableciendo los acuerdos y mecanismos operativos de coordinación, interacción y reciprocidad, con el propósito de efectuar acciones conjuntas coadyuvar a su vez en la formación, capacitación y titulación de los estudiantes egresados de la Carrera de Trabajo Social de la UPEA.', 'assets/images/prueba.jpg', 'assets/conveniosPdf/pdf2.pdf', '2', '2017-11-28 00:32:00', '.....', 'CENTRO DE ORIENTACION SOCIO LEGAL PARA ADULTOS/AS MAYORES (COSLAM)', '....', 'admin@admin.com', 'Activo'),
(7, 1, 1, 'CONVENIO INTERINSTITUCIONAL U.P.E.A. Y LA DIOCESIS DE EL ALTO        ', 'El presente Convenio , tiene por objeto establecer los acuerdos y mecanismos operativos aplicables a la realización de Prácticas Pre Profesional a ser realizadas por parte de estudiantes de quinto año de la Carrera de Trabajo Social, así como en las modalidades de Titulación: Trabajo Dirigido y Tesis de Grado a ser implementadas entre la UPEA, carrera Trabajo Social y la Diócesis de El Alto en el entendido que estas beneficiaran a ambas partes, estableciendo los acuerdos y Mecanismos operativos de coordinación, interacción y reciprocidad, con el propósito de efectuar acciones conjuntas coadyuvar a su vez en la formación, capacitación y titulación de los estudiantes egresados de la Carrera de Trabajo Social de la UPEA.', 'assets/images/blog-image-1.jpg', 'assets/conveniosPdf/pdf1.pdf', '2', '2017-11-28 00:32:10', '', 'DIOCESIS DE EL ALTO                                              ', '....', 'admin@admin.com', 'Activo'),
(8, 1, 1, 'UNIVERSIDAD PUBLICA DE EL ALTO Y LA INSTITUCION SEPAMOS', 'El presente Convenio, tiene por objeto establecer los acuerdos y mecanismos operativos aplicables a la realización de Prácticas Pre Profesionales a ser realizadas por parte de estudiantes de quinto año de la Carrera de Trabajo Social, así como en las modalidades de titulación: Trabajo Dirigido y Tesis de Grado, a ser implementadas entre la UPEA, carrera de Trabajo Social y SEPAMOS en el entendido que estas beneficiaran a ambas partes, estableciendo los acuerdos y mecanismos operativos de coordinación, interacción y reciprocidad, con el propósito de efectuar acciones conjunta coadyuvar a su vez en la formación, capacitación y titulación de los estudiantes egresados de la Carrera de Trabajo Social de la UPEA.', 'assets/images/blog-image-1.jpg', 'assets/conveniosPdf/pdf2.pdf', '2', '2017-11-28 00:32:20', '', 'INSTITUCION SEPAMOS', '....', 'admin@admin.com', 'Activo'),
(10, 1, 1, 'CONVENIO CENTRO VOLUNTARIO DE COOPERACION AL DESARROLLO (CVCS) DEPENDIENTE DEL REGIMEN PENITENCIARIO', 'El presente Convenio, tiene por objeto establecer los acuerdos y mecanismos operativos aplicables a la realización de Prácticas Pres Profesionales a ser realizadas por parte de estudiantes de quinto año de la Carrera de Trabajo Social, así como en las modalidades de titulación: Trabajo Dirigido y Tesis de Grado, a ser implementadas entre la UPEA, carrera de Trabajo Social y EL CENTRO VOLUNTARIO DE COOPERACION AL DESARROLLO (CVCS) en el entendido que estas beneficiaran a ambas partes, estableciendo los acuerdos y mecanismos operativos de coordinación, interacción reciprocidad, con el propósito de efectuar acciones conjuntas coadyuvando a su vez en la formación, capacitación y titulación de los  estudiantes egresados de la Carrera de Trabajo Social de la UPEA.', 'assets/images/blog-image-1.jpg', 'assets/conveniosPdf/pdf2.pdf', '2', '2017-11-28 00:32:41', '', 'CENTRO VOLUNTARIO DE COOPERACION AL DESARROLLO (CVCS)                         ', '....', 'admin@admin.com', 'Activo'),
(11, 1, 1, 'UNIVERSIDAD PUBLICA DE EL ALTO (UPEA) Y LA ESCUELA MILITAR DE INGENIERIA (EMI)', 'Objetivo General. Establecer mecanismo de cooperación interinstitucional en actividades de desarrollo académico y de investigación, a partir de los aprovechamientos de las capacidades de las instituciones en temas de interés. Objetivo Específico. Implementar acciones conjuntas de apoyo y colaboración interinstitucional en temas de interés común. Buscar acciones conjuntas y apoyos para proyectos de mutua colaboración. Desarrollo de proyectos de investigación específicos que permitan desarrollar la transferencia de tecnologías y producir nuevos conocimientos. Planificación, organización y desarrollo de cursos de capacitación y formación, orientados a fortalecer la gestión productiva y participativa.    ', 'assets/images/prueba.jpg', 'assets/conveniosPdf/pdf1.pdf', '2', '2017-11-28 00:32:50', '', 'ESCUELA MILITAR DE INGENIERIA (EMI)', '....', 'admin@admin.com', 'Activo'),
(13, 1, 1, 'CONVENIO MARCO DE COOPERACION INTERINSTITUCIONAL SUSCRITO ENTRE LA ESCUELA DE GESTION PUBLICA PLURINACIONAL (EGPP) Y LA UNIVERSIDAD PUBLICA DE EL ALTO “UPEA”', 'La Partes convienen en suscribir el presente Convenio de Cooperación Interinstitucional, para desarrollar conjuntamente distintos programas de Formación (postgrado) Capacitación  (cursos cortos) y asistencia técnica e investigación en distintas temáticas de gestión pública y otras a acordar, destinadas a servidoras y servidores públicos de los distintos niveles de gobierno, así como estudiantes y egresados de la UPEA, ASI COMO LA FORAMCION INTEGRAL PARA EL DESARROLLO DE competencias, aptitudes y habilidades intelectuales que vincule la teoría con la practica productiva de los estudiantes y/o egresados de las diferentes carreras de la UPEA, mediante la realización de pasantías a desarrollarse en la EGPP.', 'assets/images/prueba.jpg', 'assets/conveniosPdf/pdf2.pdf', '2', '2017-11-28 00:33:18', '', 'La Partes convienen en suscribir el presente Convenio de Cooperación Interinstitucional, para desarrollar conjuntamente distintos programas de Formación (postgrado) Capacitación  (cursos cortos) y asi', '....', 'admin@admin.com', 'Activo'),
(14, 1, 1, 'CONVENIO MARCO DE COOPERACION INTERINSTITUCIONAL ENTRE LA UNIVERSIDAD PUBLICA DE EL ALTO (UPEA) Y EL PROGRAMA DE INVESTIGACION ESTRATEGICA EN BOLIVIA (PIEB)', 'Por el presente Convenio de Cooperación Interinstitucional, las partes se comprometen establecer las bases de cooperación mutua en el ámbito del conocimiento científico, tecnológico y cultural con el propósito de fortalecer la gestión y la calidad de las investigaciones.', '', 'assets/conveniosPdf/pdf1.pdf', '5', '2017-11-28 00:33:27', 'LAS LO,AS', 'PROGRAMA DE INVESTIGACION ESTRATEGICA EN BOLIVIA (PIEB)', '', 'admin@admin.com', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_convenio_carrera`
--

CREATE TABLE IF NOT EXISTS `sic_convenio_carrera` (
  `id_convenios` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_convenio_carrera`
--

INSERT INTO `sic_convenio_carrera` (`id_convenios`, `id_carrera`) VALUES
(1, 1),
(1, 3),
(1, 7),
(1, 14),
(2, 1),
(2, 7),
(3, 8),
(3, 9),
(4, 10),
(5, 11),
(6, 7),
(7, 7),
(8, 7),
(10, 7),
(11, 10),
(13, 10),
(14, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_convenio_gestion`
--

CREATE TABLE IF NOT EXISTS `sic_convenio_gestion` (
  `id_convenios` int(11) NOT NULL,
  `id_gestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sic_convenio_gestion`
--

INSERT INTO `sic_convenio_gestion` (`id_convenios`, `id_gestion`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 22),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(4, 1),
(4, 17),
(14, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_detalle_grupo`
--

CREATE TABLE IF NOT EXISTS `sic_detalle_grupo` (
`id_detallegrupo` int(11) NOT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_detalle_grupo`
--

INSERT INTO `sic_detalle_grupo` (`id_detallegrupo`, `id_grupo`, `id_usuario`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_gestion`
--

CREATE TABLE IF NOT EXISTS `sic_gestion` (
`id_gestion` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_gestion`
--

INSERT INTO `sic_gestion` (`id_gestion`, `nombre`, `actualizado`) VALUES
(1, '2017', '2017-05-31 02:34:45'),
(2, '2018', '2017-05-31 02:35:02'),
(3, '2019', '2017-05-31 02:35:02'),
(4, '2020', '2017-05-31 02:35:13'),
(5, '2021', '2017-05-31 02:35:13'),
(17, '2022', '2017-11-15 15:28:57'),
(18, '2023', '2017-11-15 15:29:05'),
(19, '2024', '2017-11-15 15:29:34'),
(20, '2025', '2017-11-15 16:19:39'),
(21, '2026', '2017-12-22 19:14:23'),
(22, '2027', '2017-12-22 19:14:31'),
(23, '2028', '2017-12-22 19:14:36'),
(24, '2029', '2017-12-22 19:14:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_grupo`
--

CREATE TABLE IF NOT EXISTS `sic_grupo` (
`id_grupo` int(11) NOT NULL,
  `nom_grupo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_grupo`
--

INSERT INTO `sic_grupo` (`id_grupo`, `nom_grupo`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'SECRETARIA'),
(3, 'TECNICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_permisos`
--

CREATE TABLE IF NOT EXISTS `sic_permisos` (
`id_permiso` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_routers` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_permisos`
--

INSERT INTO `sic_permisos` (`id_permiso`, `id_usuario`, `id_routers`, `estado`) VALUES
(1, 1, 1, '1'),
(2, 1, 2, '1'),
(3, 1, 3, '1'),
(4, 1, 4, '1'),
(5, 1, 5, '1'),
(6, 1, 6, '1'),
(7, 1, 7, '1'),
(8, 1, 8, '1'),
(9, 2, 4, '1'),
(10, 2, 5, '1'),
(11, 2, 6, '1'),
(12, 2, 7, '1'),
(13, 2, 8, '1'),
(14, 1, 9, '1'),
(15, 3, 4, '1'),
(16, 3, 5, '1'),
(17, 3, 8, '1'),
(18, 1, 10, '1'),
(19, 2, 10, '1'),
(20, 1, 11, '1'),
(21, 2, 11, '1'),
(22, 3, 11, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_persona`
--

CREATE TABLE IF NOT EXISTS `sic_persona` (
`id_persona` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `ci` varchar(45) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_persona`
--

INSERT INTO `sic_persona` (`id_persona`, `nombre`, `paterno`, `materno`, `ci`, `telefono`, `email`, `cargo`, `img`) VALUES
(1, 'PATRICIA', 'BERNAL', 'CAMPUZANO', '0000000', '', 'leo@gmail.com', 'DIRECTORA', 'assets/images/patricia.jpg'),
(2, 'MIRIAM', 'fernandez', 'arrellano', '9222933', '', 'admin@admin.com', 'AUX DE OFICINA', 'assets/images/miriam.jpg'),
(3, 'ANA', 'MAMANI', 'MAMANI', '6565654', '', 'ana@gmail.com', 'TECNICO', 'assets/images/ana.jpg'),
(8, 'RAFAEL', 'OCHOA', 'APAZA', '000', '', 'oaramiro@gmail.com', NULL, ''),
(9, 'RAFAEL', 'OCHOA', 'APAZA', '9999', '6754433', 'ramirito@gmail.com', NULL, ''),
(10, 'RAMIRO', 'OCHOA ', 'APAZA', '83540134', '', 'oaramrioc@gmial.ocm', NULL, ''),
(11, 'RAFAEL', 'SONCO', 'APAZA', '00000', '0000000', 'or@gmial.com', NULL, ''),
(12, 'jkljl', 'jk', 'jlj', '7687', '', 'j@gmai.com', NULL, ''),
(13, 'ramio', 'ochao', 'oapaz', '65868', '', 'o@ramrio', NULL, ''),
(14, 'ramiro', 'ocho', 'ihoho', '78678', '', 'os@gmail.com', NULL, ''),
(15, 'OA', 'HJIOH', 'HJOIH', '78979', '', 'os@gmail.com', NULL, ''),
(16, 'RAMRIO', 'NOFDN', 'NONI', '787', '', 'os@gmail.com', NULL, ''),
(17, 'julieta', 'sramois', 'hosdhfn', '7876', '', 'li@ga.com', NULL, ''),
(18, 'jokj', 'noino', 'noi', '678687', '', 'o@fdhsfju.cpom', NULL, ''),
(19, 'ramniro', 'ochoa', 'aoa', '665675', '', 'o@gmai.com', NULL, ''),
(41, 'ADEMAR', 'SINCHI', 'CLAROS', '77777', '77777', 'ad@gamik.vcom', NULL, ''),
(44, 'ROXANA', 'CONDE', 'HUAMPO', '8979', '37868', 'roxqna@hotmail.xom', NULL, ''),
(51, 'jre', 'sfsdf', 'jsdfjd', '6144111111', 'dfd', 'sffsdfsdf@asdasd.com', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_preinscripcion`
--

CREATE TABLE IF NOT EXISTS `sic_preinscripcion` (
`id_preinscripcion` int(11) NOT NULL,
  `id_gestion` int(11) DEFAULT NULL,
  `id_convenio` int(11) NOT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '0',
  `fecha_inscripcion` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_preinscripcion`
--

INSERT INTO `sic_preinscripcion` (`id_preinscripcion`, `id_gestion`, `id_convenio`, `id_carrera`, `estado`, `fecha_inscripcion`) VALUES
(1, NULL, 3, 1, 1, NULL),
(2, NULL, 3, 2, 1, NULL),
(3, 1, 7, 1, 1, '0000-00-00 00:00:00'),
(4, NULL, 3, 2, 1, NULL),
(5, 1, 14, 1, 1, NULL),
(6, 1, 14, 1, 1, NULL),
(7, 1, 14, 1, 1, NULL),
(8, 1, 14, 1, 1, '0000-00-00 00:00:00'),
(9, 1, 14, 1, 1, '0000-00-00 00:00:00'),
(10, 1, 14, 2, 1, '2017-11-04 12:49:51'),
(11, 1, 14, 2, 1, '2017-11-04 12:53:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_routers`
--

CREATE TABLE IF NOT EXISTS `sic_routers` (
`id_routers` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `ordenamiento` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_routers`
--

INSERT INTO `sic_routers` (`id_routers`, `descripcion`, `imagen`, `url`, `ordenamiento`, `estado`) VALUES
(1, 'Rutas', 'imagenes/not_found.png', 'table/routers', 1, 1),
(2, 'Grupo', 'imagenes/not_found.png', 'table/grupos', 1, 1),
(3, 'login master', 'imagenes/not_found.png', 'table/login', 1, 1),
(4, 'Convenios', 'imagenes/not_found.png', 'table/convenios', 2, 1),
(5, 'Tipo de Convenio', 'imagenes/not_found.png', 'table/tipo_convenio', 2, 1),
(6, 'Inscripcion', 'imagenes/not_found.png', 'table/inscripcion', 3, 1),
(7, 'Tipo Universitario', 'imagenes/not_found.png', 'table/tipo_universitario', 3, 1),
(8, 'Carrera', 'imagenes/not_found.png', 'table/carreras', 4, 1),
(9, 'Persona', 'imagenes/not_found.png', 'table/personas', 1, 1),
(10, 'Modificar Contactos', 'imagenes/not_found.png', 'table/contactos', 3, 1),
(11, 'Reportes Convenios', 'imagenes/not_found.png', 'reportes/reporteConvenio', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_tipo_convenio`
--

CREATE TABLE IF NOT EXISTS `sic_tipo_convenio` (
`id_tipo_convenio` int(11) NOT NULL,
  `nombre_tipo_convenio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_tipo_convenio`
--

INSERT INTO `sic_tipo_convenio` (`id_tipo_convenio`, `nombre_tipo_convenio`) VALUES
(1, 'NACIONALES'),
(2, 'INTERNACIONALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_universitario`
--

CREATE TABLE IF NOT EXISTS `sic_universitario` (
`id_universitario` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_preinscripcion` int(11) DEFAULT NULL,
  `registro_universitario` varchar(18) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_universitario`
--

INSERT INTO `sic_universitario` (`id_universitario`, `id_persona`, `id_categoria`, `id_preinscripcion`, `registro_universitario`) VALUES
(1, 8, 1, 1, '20000000'),
(2, 9, 2, 2, '88888'),
(3, 10, 1, 3, '1002342'),
(4, 11, 2, 4, '0000'),
(5, 12, 1, 5, '24342'),
(6, 13, 1, 6, '2343'),
(7, 14, 1, 7, '18287'),
(8, 15, 1, 8, '23988'),
(9, 16, 1, 9, '187298'),
(10, 17, 2, 10, '237238'),
(11, 18, 2, 11, '728588');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic_usuario`
--

CREATE TABLE IF NOT EXISTS `sic_usuario` (
`id_usuario` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `fecha_registro` varchar(30) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `actualizado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sic_usuario`
--

INSERT INTO `sic_usuario` (`id_usuario`, `id_persona`, `usuario`, `password`, `fecha_registro`, `estado`, `actualizado`) VALUES
(1, 1, 'ADMIN', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '2017-06-17', '1', '2017-12-22 19:03:30'),
(2, 2, 'gg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2017-06-03', '1', '2018-01-25 19:49:23'),
(3, 3, 'ANA', NULL, '2017-06-10', '0', '2017-11-22 16:00:00'),
(4, 2, 'walter emilio', 'paco', '2017-02-01', '0', '2017-11-21 20:05:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE IF NOT EXISTS `unidad` (
`id` int(11) NOT NULL,
  `direccion` varchar(200) CHARACTER SET utf8 NOT NULL,
  `telefono` int(11) NOT NULL,
  `pagina` varchar(100) NOT NULL,
  `correo` varchar(75) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`id`, `direccion`, `telefono`, `pagina`, `correo`, `password`) VALUES
(1, ' Zona Villa Esperanza - Av Juan Pablo II Esq Sucre', 22844233, 'www.relacionesinternacionales.upea.bo', 'convenioprueba@gmail.com', '1234ConvenioPrueba');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_carrera_convenios`
--
CREATE TABLE IF NOT EXISTS `vista_carrera_convenios` (
`id_convenios` int(11)
,`id_carrera` int(11)
,`nom_carrera` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_categoria`
--
CREATE TABLE IF NOT EXISTS `vista_categoria` (
`id_categoria` int(11)
,`nom_categoria` varchar(50)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_contactos`
--
CREATE TABLE IF NOT EXISTS `vista_contactos` (
`id_contactos` int(11)
,`nombre_c` varchar(100)
,`direccion_c` varchar(100)
,`telefonos_c` varchar(50)
,`email_c` varchar(50)
,`carrera` varchar(100)
,`tipo` varchar(50)
,`activo` varchar(20)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_convenios`
--
CREATE TABLE IF NOT EXISTS `vista_convenios` (
`id_convenios` int(11)
,`nombre_convenio` longtext
,`objetivo_convenio` longtext
,`img_convenio` mediumtext
,`pdf_convenio` mediumtext
,`fecha_publicacion` timestamp
,`entidad` varchar(200)
,`estado` varchar(45)
,`nombre_tipo_convenio` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_convenios_internacionales`
--
CREATE TABLE IF NOT EXISTS `vista_convenios_internacionales` (
`id_convenios` int(11)
,`id_detalle_grupo` int(11)
,`id_tipo_convenio` int(11)
,`nombre_convenio` longtext
,`objetivo_convenio` longtext
,`img_convenio` mediumtext
,`tiempo_duracion` varchar(15)
,`fecha_publicacion` timestamp
,`direccion` varchar(200)
,`entidad` varchar(200)
,`telefono` varchar(45)
,`email` varchar(45)
,`estado` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_convenios_nacionales`
--
CREATE TABLE IF NOT EXISTS `vista_convenios_nacionales` (
`id_convenios` int(11)
,`id_detalle_grupo` int(11)
,`id_tipo_convenio` int(11)
,`nombre_convenio` longtext
,`objetivo_convenio` longtext
,`img_convenio` mediumtext
,`tiempo_duracion` varchar(15)
,`fecha_publicacion` timestamp
,`direccion` varchar(200)
,`entidad` varchar(200)
,`telefono` varchar(45)
,`email` varchar(45)
,`estado` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_gestion`
--
CREATE TABLE IF NOT EXISTS `vista_gestion` (
`id_gestion` int(11)
,`nombre` varchar(20)
,`id_convenios` int(11)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_personal`
--
CREATE TABLE IF NOT EXISTS `vista_personal` (
`id_persona` int(11)
,`nombre` varchar(45)
,`paterno` varchar(45)
,`materno` varchar(45)
,`ci` varchar(45)
,`email` varchar(45)
,`cargo` varchar(200)
,`img` varchar(500)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_personal_usuarios`
--
CREATE TABLE IF NOT EXISTS `vista_personal_usuarios` (
`id_persona` int(11)
,`nombre` varchar(45)
,`paterno` varchar(45)
,`materno` varchar(45)
,`ci` varchar(45)
,`telefono` varchar(20)
,`email` varchar(45)
,`cargo` varchar(200)
,`img` varchar(500)
,`id_usuario` int(11)
,`usuario` varchar(45)
,`fecha_registro` varchar(30)
,`estado` varchar(45)
,`actualizado` timestamp
,`id_detallegrupo` int(11)
,`id_grupo` int(11)
,`nom_grupo` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_preinscripcion`
--
CREATE TABLE IF NOT EXISTS `vista_preinscripcion` (
`id_persona` int(11)
,`nombre` varchar(45)
,`paterno` varchar(45)
,`materno` varchar(45)
,`ci` varchar(45)
,`email` varchar(45)
,`telefono` varchar(20)
,`id_universitario` int(11)
,`registro_universitario` varchar(18)
,`id_categoria` int(11)
,`nom_categoria` varchar(50)
,`id_preinscripcion` int(11)
,`fecha_inscripcion` timestamp
,`id_carrera` int(11)
,`nom_carrera` varchar(45)
,`id_gestion` int(11)
,`gestion_nombre` varchar(20)
,`id_convenios` int(11)
,`nombre_convenio` longtext
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_sessiones`
--
CREATE TABLE IF NOT EXISTS `vista_sessiones` (
`id_persona` int(11)
,`nombre` varchar(45)
,`paterno` varchar(45)
,`materno` varchar(45)
,`ci` varchar(45)
,`telefono` varchar(20)
,`email` varchar(45)
,`cargo` varchar(200)
,`img` varchar(500)
,`id_usuario` int(11)
,`usuario` varchar(45)
,`password` varchar(45)
,`estado` varchar(45)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_unidad`
--
CREATE TABLE IF NOT EXISTS `vista_unidad` (
`id` int(11)
,`direccion` varchar(200)
,`telefono` int(11)
,`pagina` varchar(100)
,`correo` varchar(75)
,`password` varchar(200)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `vista_carrera_convenios`
--
DROP TABLE IF EXISTS `vista_carrera_convenios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_carrera_convenios` AS select `cc`.`id_convenios` AS `id_convenios`,`c`.`id_carrera` AS `id_carrera`,`c`.`nom_carrera` AS `nom_carrera` from (`sic_carrera` `c` join `sic_convenio_carrera` `cc`) where (`cc`.`id_carrera` = `c`.`id_carrera`);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_categoria`
--
DROP TABLE IF EXISTS `vista_categoria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_categoria` AS select `sic_categoria`.`id_categoria` AS `id_categoria`,`sic_categoria`.`nom_categoria` AS `nom_categoria` from `sic_categoria`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_contactos`
--
DROP TABLE IF EXISTS `vista_contactos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_contactos` AS select `sic_contactos`.`id_contactos` AS `id_contactos`,`sic_contactos`.`nombre_c` AS `nombre_c`,`sic_contactos`.`direccion_c` AS `direccion_c`,`sic_contactos`.`telefonos_c` AS `telefonos_c`,`sic_contactos`.`email_c` AS `email_c`,`sic_contactos`.`carrera` AS `carrera`,`sic_contactos`.`tipo` AS `tipo`,`sic_contactos`.`activo` AS `activo` from `sic_contactos`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_convenios`
--
DROP TABLE IF EXISTS `vista_convenios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_convenios` AS select `c`.`id_convenios` AS `id_convenios`,`c`.`nombre_convenio` AS `nombre_convenio`,`c`.`objetivo_convenio` AS `objetivo_convenio`,`c`.`img_convenio` AS `img_convenio`,`c`.`pdf_convenio` AS `pdf_convenio`,`c`.`fecha_publicacion` AS `fecha_publicacion`,`c`.`entidad` AS `entidad`,`c`.`estado` AS `estado`,`tc`.`nombre_tipo_convenio` AS `nombre_tipo_convenio` from (`sic_tipo_convenio` `tc` join `sic_convenio` `c`) where (`tc`.`id_tipo_convenio` = `c`.`id_tipo_convenio`) order by `c`.`id_convenios` desc;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_convenios_internacionales`
--
DROP TABLE IF EXISTS `vista_convenios_internacionales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_convenios_internacionales` AS select `sic_convenio`.`id_convenios` AS `id_convenios`,`sic_convenio`.`id_detalle_grupo` AS `id_detalle_grupo`,`sic_convenio`.`id_tipo_convenio` AS `id_tipo_convenio`,`sic_convenio`.`nombre_convenio` AS `nombre_convenio`,`sic_convenio`.`objetivo_convenio` AS `objetivo_convenio`,`sic_convenio`.`img_convenio` AS `img_convenio`,`sic_convenio`.`tiempo_duracion` AS `tiempo_duracion`,`sic_convenio`.`fecha_publicacion` AS `fecha_publicacion`,`sic_convenio`.`direccion` AS `direccion`,`sic_convenio`.`entidad` AS `entidad`,`sic_convenio`.`telefono` AS `telefono`,`sic_convenio`.`email` AS `email`,`sic_convenio`.`estado` AS `estado` from `sic_convenio` where (`sic_convenio`.`id_tipo_convenio` = 2);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_convenios_nacionales`
--
DROP TABLE IF EXISTS `vista_convenios_nacionales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_convenios_nacionales` AS select `sic_convenio`.`id_convenios` AS `id_convenios`,`sic_convenio`.`id_detalle_grupo` AS `id_detalle_grupo`,`sic_convenio`.`id_tipo_convenio` AS `id_tipo_convenio`,`sic_convenio`.`nombre_convenio` AS `nombre_convenio`,`sic_convenio`.`objetivo_convenio` AS `objetivo_convenio`,`sic_convenio`.`img_convenio` AS `img_convenio`,`sic_convenio`.`tiempo_duracion` AS `tiempo_duracion`,`sic_convenio`.`fecha_publicacion` AS `fecha_publicacion`,`sic_convenio`.`direccion` AS `direccion`,`sic_convenio`.`entidad` AS `entidad`,`sic_convenio`.`telefono` AS `telefono`,`sic_convenio`.`email` AS `email`,`sic_convenio`.`estado` AS `estado` from `sic_convenio` where (`sic_convenio`.`id_tipo_convenio` = 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_gestion`
--
DROP TABLE IF EXISTS `vista_gestion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_gestion` AS select `g`.`id_gestion` AS `id_gestion`,`g`.`nombre` AS `nombre`,`c`.`id_convenios` AS `id_convenios` from ((`sic_gestion` `g` join `sic_convenio_gestion` `cg`) join `sic_convenio` `c`) where ((`cg`.`id_convenios` = `c`.`id_convenios`) and (`cg`.`id_gestion` = `g`.`id_gestion`));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_personal`
--
DROP TABLE IF EXISTS `vista_personal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_personal` AS select `sic_persona`.`id_persona` AS `id_persona`,`sic_persona`.`nombre` AS `nombre`,`sic_persona`.`paterno` AS `paterno`,`sic_persona`.`materno` AS `materno`,`sic_persona`.`ci` AS `ci`,`sic_persona`.`email` AS `email`,`sic_persona`.`cargo` AS `cargo`,`sic_persona`.`img` AS `img` from `sic_persona` where (`sic_persona`.`cargo` <> '');

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_personal_usuarios`
--
DROP TABLE IF EXISTS `vista_personal_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_personal_usuarios` AS select `p`.`id_persona` AS `id_persona`,`p`.`nombre` AS `nombre`,`p`.`paterno` AS `paterno`,`p`.`materno` AS `materno`,`p`.`ci` AS `ci`,`p`.`telefono` AS `telefono`,`p`.`email` AS `email`,`p`.`cargo` AS `cargo`,`p`.`img` AS `img`,`u`.`id_usuario` AS `id_usuario`,`u`.`usuario` AS `usuario`,`u`.`fecha_registro` AS `fecha_registro`,`u`.`estado` AS `estado`,`u`.`actualizado` AS `actualizado`,`dg`.`id_detallegrupo` AS `id_detallegrupo`,`g`.`id_grupo` AS `id_grupo`,`g`.`nom_grupo` AS `nom_grupo` from (((`sic_usuario` `u` join `sic_persona` `p`) join `sic_detalle_grupo` `dg`) join `sic_grupo` `g`) where ((`p`.`id_persona` = `u`.`id_persona`) and (`u`.`id_usuario` = `dg`.`id_usuario`) and (`dg`.`id_grupo` = `g`.`id_grupo`));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_preinscripcion`
--
DROP TABLE IF EXISTS `vista_preinscripcion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_preinscripcion` AS select `p`.`id_persona` AS `id_persona`,`p`.`nombre` AS `nombre`,`p`.`paterno` AS `paterno`,`p`.`materno` AS `materno`,`p`.`ci` AS `ci`,`p`.`email` AS `email`,`p`.`telefono` AS `telefono`,`u`.`id_universitario` AS `id_universitario`,`u`.`registro_universitario` AS `registro_universitario`,`cat`.`id_categoria` AS `id_categoria`,`cat`.`nom_categoria` AS `nom_categoria`,`pre`.`id_preinscripcion` AS `id_preinscripcion`,`pre`.`fecha_inscripcion` AS `fecha_inscripcion`,`car`.`id_carrera` AS `id_carrera`,`car`.`nom_carrera` AS `nom_carrera`,`g`.`id_gestion` AS `id_gestion`,`g`.`nombre` AS `gestion_nombre`,`conv`.`id_convenios` AS `id_convenios`,`conv`.`nombre_convenio` AS `nombre_convenio` from (((((((`sic_persona` `p` join `sic_universitario` `u`) join `sic_categoria` `cat`) join `sic_preinscripcion` `pre`) join `sic_carrera` `car`) join `sic_gestion` `g`) join `sic_convenio` `conv`) join `sic_convenio_gestion` `cg`) where ((`p`.`id_persona` = `u`.`id_persona`) and (`cat`.`id_categoria` = `u`.`id_categoria`) and (`pre`.`id_preinscripcion` = `u`.`id_preinscripcion`) and (`pre`.`id_convenio` = `conv`.`id_convenios`) and (`pre`.`id_carrera` = `car`.`id_carrera`) and (`pre`.`id_gestion` = `g`.`id_gestion`) and (`g`.`id_gestion` = `cg`.`id_gestion`) and (`cg`.`id_convenios` = `conv`.`id_convenios`));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_sessiones`
--
DROP TABLE IF EXISTS `vista_sessiones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_sessiones` AS select `p`.`id_persona` AS `id_persona`,`p`.`nombre` AS `nombre`,`p`.`paterno` AS `paterno`,`p`.`materno` AS `materno`,`p`.`ci` AS `ci`,`p`.`telefono` AS `telefono`,`p`.`email` AS `email`,`p`.`cargo` AS `cargo`,`p`.`img` AS `img`,`u`.`id_usuario` AS `id_usuario`,`u`.`usuario` AS `usuario`,`u`.`password` AS `password`,`u`.`estado` AS `estado` from (`sic_persona` `p` join `sic_usuario` `u`) where (`p`.`id_persona` = `u`.`id_persona`);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_unidad`
--
DROP TABLE IF EXISTS `vista_unidad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_unidad` AS select `unidad`.`id` AS `id`,`unidad`.`direccion` AS `direccion`,`unidad`.`telefono` AS `telefono`,`unidad`.`pagina` AS `pagina`,`unidad`.`correo` AS `correo`,`unidad`.`password` AS `password` from `unidad`;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sic_carrera`
--
ALTER TABLE `sic_carrera`
 ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `sic_categoria`
--
ALTER TABLE `sic_categoria`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `sic_contactos`
--
ALTER TABLE `sic_contactos`
 ADD PRIMARY KEY (`id_contactos`);

--
-- Indices de la tabla `sic_convenio`
--
ALTER TABLE `sic_convenio`
 ADD PRIMARY KEY (`id_convenios`), ADD KEY `fk_convenios_detalle_grupo1_idx` (`id_detalle_grupo`), ADD KEY `fk_sic_convenio_sic_tipo_convenio1_idx` (`id_tipo_convenio`);

--
-- Indices de la tabla `sic_convenio_carrera`
--
ALTER TABLE `sic_convenio_carrera`
 ADD PRIMARY KEY (`id_convenios`,`id_carrera`), ADD KEY `fk_convenios_has_carreras_carreras1_idx` (`id_carrera`), ADD KEY `fk_convenios_has_carreras_convenios1_idx` (`id_convenios`);

--
-- Indices de la tabla `sic_convenio_gestion`
--
ALTER TABLE `sic_convenio_gestion`
 ADD PRIMARY KEY (`id_convenios`,`id_gestion`), ADD KEY `id_convenios` (`id_convenios`,`id_gestion`), ADD KEY `id_gestion` (`id_gestion`);

--
-- Indices de la tabla `sic_detalle_grupo`
--
ALTER TABLE `sic_detalle_grupo`
 ADD PRIMARY KEY (`id_detallegrupo`), ADD KEY `fk_detallegrupo_grupo_idx` (`id_grupo`), ADD KEY `fk_detallegrupo_usuario_idx` (`id_usuario`);

--
-- Indices de la tabla `sic_gestion`
--
ALTER TABLE `sic_gestion`
 ADD PRIMARY KEY (`id_gestion`);

--
-- Indices de la tabla `sic_grupo`
--
ALTER TABLE `sic_grupo`
 ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `sic_permisos`
--
ALTER TABLE `sic_permisos`
 ADD PRIMARY KEY (`id_permiso`), ADD KEY `fk_permisos_routers_idx` (`id_routers`), ADD KEY `fk_permisos_usuario_idx` (`id_usuario`);

--
-- Indices de la tabla `sic_persona`
--
ALTER TABLE `sic_persona`
 ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `sic_preinscripcion`
--
ALTER TABLE `sic_preinscripcion`
 ADD PRIMARY KEY (`id_preinscripcion`), ADD KEY `fk_preinscripcion_convenio_idx` (`id_convenio`), ADD KEY `fk_preinscripcion_gestion1_idx` (`id_gestion`);

--
-- Indices de la tabla `sic_routers`
--
ALTER TABLE `sic_routers`
 ADD PRIMARY KEY (`id_routers`);

--
-- Indices de la tabla `sic_tipo_convenio`
--
ALTER TABLE `sic_tipo_convenio`
 ADD PRIMARY KEY (`id_tipo_convenio`);

--
-- Indices de la tabla `sic_universitario`
--
ALTER TABLE `sic_universitario`
 ADD PRIMARY KEY (`id_universitario`), ADD KEY `fk_universitario_categoria_idx` (`id_categoria`), ADD KEY `fk_universitario_preinscripcion_idx` (`id_preinscripcion`), ADD KEY `fk_universitarios_personas1_idx` (`id_persona`);

--
-- Indices de la tabla `sic_usuario`
--
ALTER TABLE `sic_usuario`
 ADD PRIMARY KEY (`id_usuario`), ADD KEY `fk_usuario_persona_idx` (`id_persona`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sic_carrera`
--
ALTER TABLE `sic_carrera`
MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `sic_categoria`
--
ALTER TABLE `sic_categoria`
MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sic_contactos`
--
ALTER TABLE `sic_contactos`
MODIFY `id_contactos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sic_convenio`
--
ALTER TABLE `sic_convenio`
MODIFY `id_convenios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `sic_detalle_grupo`
--
ALTER TABLE `sic_detalle_grupo`
MODIFY `id_detallegrupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sic_gestion`
--
ALTER TABLE `sic_gestion`
MODIFY `id_gestion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `sic_grupo`
--
ALTER TABLE `sic_grupo`
MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sic_permisos`
--
ALTER TABLE `sic_permisos`
MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `sic_persona`
--
ALTER TABLE `sic_persona`
MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `sic_preinscripcion`
--
ALTER TABLE `sic_preinscripcion`
MODIFY `id_preinscripcion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `sic_routers`
--
ALTER TABLE `sic_routers`
MODIFY `id_routers` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `sic_tipo_convenio`
--
ALTER TABLE `sic_tipo_convenio`
MODIFY `id_tipo_convenio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sic_universitario`
--
ALTER TABLE `sic_universitario`
MODIFY `id_universitario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `sic_usuario`
--
ALTER TABLE `sic_usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sic_convenio`
--
ALTER TABLE `sic_convenio`
ADD CONSTRAINT `fk_convenios_detalle_grupo1` FOREIGN KEY (`id_detalle_grupo`) REFERENCES `sic_detalle_grupo` (`id_detallegrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_sic_convenio_sic_tipo_convenio1` FOREIGN KEY (`id_tipo_convenio`) REFERENCES `sic_tipo_convenio` (`id_tipo_convenio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sic_convenio_carrera`
--
ALTER TABLE `sic_convenio_carrera`
ADD CONSTRAINT `fk_convenios_has_carreras_carreras1` FOREIGN KEY (`id_carrera`) REFERENCES `sic_carrera` (`id_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_convenios_has_carreras_convenios1` FOREIGN KEY (`id_convenios`) REFERENCES `sic_convenio` (`id_convenios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sic_convenio_gestion`
--
ALTER TABLE `sic_convenio_gestion`
ADD CONSTRAINT `sic_convenio_gestion_ibfk_1` FOREIGN KEY (`id_convenios`) REFERENCES `sic_convenio` (`id_convenios`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `sic_convenio_gestion_ibfk_2` FOREIGN KEY (`id_gestion`) REFERENCES `sic_gestion` (`id_gestion`);

--
-- Filtros para la tabla `sic_detalle_grupo`
--
ALTER TABLE `sic_detalle_grupo`
ADD CONSTRAINT `fk_detallegrupo_grupo` FOREIGN KEY (`id_grupo`) REFERENCES `sic_grupo` (`id_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_detallegrupo_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `sic_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sic_permisos`
--
ALTER TABLE `sic_permisos`
ADD CONSTRAINT `fk_permisos_routers` FOREIGN KEY (`id_routers`) REFERENCES `sic_routers` (`id_routers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_permisos_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `sic_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sic_preinscripcion`
--
ALTER TABLE `sic_preinscripcion`
ADD CONSTRAINT `fk_preinscripcion_convenio` FOREIGN KEY (`id_convenio`) REFERENCES `sic_convenio` (`id_convenios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_preinscripcion_gestion1` FOREIGN KEY (`id_gestion`) REFERENCES `sic_gestion` (`id_gestion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sic_universitario`
--
ALTER TABLE `sic_universitario`
ADD CONSTRAINT `fk_universitario_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `sic_categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_universitario_preinscripcion` FOREIGN KEY (`id_preinscripcion`) REFERENCES `sic_preinscripcion` (`id_preinscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_universitarios_personas1` FOREIGN KEY (`id_persona`) REFERENCES `sic_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sic_usuario`
--
ALTER TABLE `sic_usuario`
ADD CONSTRAINT `fk_usuario_persona` FOREIGN KEY (`id_persona`) REFERENCES `sic_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
