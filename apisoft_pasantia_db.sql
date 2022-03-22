-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-03-2022 a las 03:34:54
-- Versión del servidor: 5.7.19
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
-- Base de datos: `apisoft_pasantia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` text NOT NULL,
  `detalle` text NOT NULL,
  `contenido_proyecto` text NOT NULL,
  `detalle_de_proyecto` text NOT NULL,
  `contacto` text NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_clientes`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `cliente`, `detalle`, `contenido_proyecto`, `detalle_de_proyecto`, `contacto`, `fecha`) VALUES
(2, 'polonia', 'polonia solicito por gmail', 'polonia en la guerra imagenes texto de informacion', 'es para desktop de 1300px y celular de 360px', '888', '2022-03-21'),
(3, 'polonia', 'polonia solicito por gmail', 'polonia en la guerra imagenes texto de informacion', 'es para desktop de 1300px y celular de 360px', '888888', '2022-03-21'),
(4, 'polonia', 'polonia solicito por gmail', 'polonia en la guerra imagenes texto de informacion', 'es para desktop de 1300px y celular de 360px', '222', '2022-03-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

DROP TABLE IF EXISTS `consultas`;
CREATE TABLE IF NOT EXISTS `consultas` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `nombre`, `apellido`, `email`, `telefono`, `mensaje`) VALUES
(2, 'm', 'apaza', 'marcoapaza@gmail.com', '4567', 'software para apisoft'),
(3, 'marco', 'apaza', 'marcoapaza@gmail.com', '4567', 'software apisoft'),
(5, 'marco', 'apaza', 'marcoapaza@gmail.com', '4567', 'software apisoft'),
(6, 'marco', 'apaza', 'marcoapaza@gmail.com', '4567', 'software apisoft'),
(7, 'marco', 'apaza', 'marcoapaza@gmail.com', '4567', 'software apisoft'),
(8, 'marco', 'apaza', 'marcoapaza@gmail.com', '888', 'software apisoft'),
(9, 'marco', 'apaza', 'marcoapaza@gmail.com', '888', 'software apisoft'),
(10, 'marco', 'apaza', 'marcoapaza@gmail.com', '888', 'software apisoft'),
(11, 'm', 'a', 'marcoapaza@gmail.com', '52288888', 'software apisoft');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta_servicio`
--

DROP TABLE IF EXISTS `consulta_servicio`;
CREATE TABLE IF NOT EXISTS `consulta_servicio` (
  `id_consulta_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_programadores` text NOT NULL,
  `id_encargado` int(11) NOT NULL,
  `observacion_costo_servicio` text NOT NULL,
  PRIMARY KEY (`id_consulta_servicio`),
  KEY `id_servicio` (`id_servicio`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_proyecto` (`id_proyecto`),
  KEY `id_encargado` (`id_encargado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consulta_servicio`
--

INSERT INTO `consulta_servicio` (`id_consulta_servicio`, `id_servicio`, `id_cliente`, `id_proyecto`, `id_programadores`, `id_encargado`, `observacion_costo_servicio`) VALUES
(2, 1, 1, 1, '1-2', 1, 'se recibio el pago '),
(3, 2, 2, 2, '2-1', 2, 'se recibio el pago '),
(4, 1, 1, 1, '1-2', 1, 'se recibio el pago ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

DROP TABLE IF EXISTS `cotizaciones`;
CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `cotizacion` text NOT NULL,
  `nombre_empresa` text NOT NULL,
  `items` text NOT NULL,
  `descripciones` text NOT NULL,
  `total_pago` text NOT NULL,
  `propuesta` text NOT NULL,
  PRIMARY KEY (`id_cotizacion`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`id_cotizacion`, `id_cliente`, `cotizacion`, `nombre_empresa`, `items`, `descripciones`, `total_pago`, `propuesta`) VALUES
(7, 2, 'DISEÃ‘O Y DESARROLLO DE SOFTWARE', 'APISOFT', 'PAGINAS WEB  APLICACIONES MOVILES   SISTEMAS DE ESCRITORIOPROYECTOS INFORMÃTICOS   APLICACIONES WEB   WEB HOSTING   ', 'Desarrollamos soluciones tecnolÃ³gicas de informaciÃ³n para plataformas Web, MÃ³viles y de Escritorio', '100000$', 'todos los items activos'),
(8, 1, 'DISEÃ‘O Y DESARROLLO DE SOFTWARE', 'APISOFT', 'PAGINAS WEB  APLICACIONES MOVILES   SISTEMAS DE ESCRITORIOPROYECTOS INFORMÃTICOS   APLICACIONES WEB   WEB HOSTING   ', 'Desarrollamos soluciones tecnolÃ³gicas de informaciÃ³n para plataformas Web, MÃ³viles y de Escritorio', '100000$', 'todos los items activos'),
(9, 1, 'DISEÃ‘O Y DESARROLLO DE SOFTWARE', 'APISOFT', 'PAGINAS WEB  APLICACIONES MOVILES   SISTEMAS DE ESCRITORIOPROYECTOS INFORMÃTICOS   APLICACIONES WEB   WEB HOSTING   ', 'Desarrollamos soluciones tecnolÃ³gicas de informaciÃ³n para plataformas Web, MÃ³viles y de Escritorio', '100000$', 'todos los items activos'),
(10, 1, 'DISEÃ‘O Y DESARROLLO DE SOFTWARE', 'APISOFT', 'PAGINAS WEB  APLICACIONES MOVILES   SISTEMAS DE ESCRITORIOPROYECTOS INFORMÃTICOS   APLICACIONES WEB   WEB HOSTING   ', 'Desarrollamos soluciones tecnolÃ³gicas de informaciÃ³n para plataformas Web, MÃ³viles y de Escritorio', '100000$', 'todos los items activos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personales`
--

DROP TABLE IF EXISTS `personales`;
CREATE TABLE IF NOT EXISTS `personales` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `personal` text NOT NULL,
  `email` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `actividad` text NOT NULL,
  `fecha` date NOT NULL,
  `edad` int(11) NOT NULL,
  PRIMARY KEY (`id_personal`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personales`
--

INSERT INTO `personales` (`id_personal`, `personal`, `email`, `telefono`, `actividad`, `fecha`, `edad`) VALUES
(2, 'japon', 'japon.alcon.1@gmail.com', 123, 'frontend y backend', '2022-03-21', 123),
(4, 'japon', 'japon.alcon.1@gmail.com', 123, 'frontend y backend', '2022-03-21', 123),
(6, 'Hong Kong UNESCO Global Geopark', 'hong.kong.1@gmail.com', 123, 'frontend y backend', '2022-03-21', 123),
(9, 'espana', 'espana.3ms.1@gmail.com', 123, 'frontend y backend', '2022-03-21', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

DROP TABLE IF EXISTS `planes`;
CREATE TABLE IF NOT EXISTS `planes` (
  `id_planes` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(11) NOT NULL,
  `id_programadores` text NOT NULL,
  `id_proyectos` int(11) NOT NULL,
  `plan` text NOT NULL,
  `actividades` text NOT NULL,
  `tareas` text NOT NULL,
  PRIMARY KEY (`id_planes`),
  KEY `id_servicio` (`id_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id_planes`, `id_servicio`, `id_programadores`, `id_proyectos`, `plan`, `actividades`, `tareas`) VALUES
(1, 1, '1', 1, 'desarrollo de software desktop apisoft movile apsoft', ' 3 semana diseno 4 semana desarrollo 5 semana pruebas', ' 3 semana usar tecnologia para el entorno visual 4 semana usar tecnologia para el desarrollo 5 semana hacer pruebas y revisar'),
(3, 1, '1', 1, 'desarrollo de software desktop apisoft movile apsoft', '1 semana analisis 2 semana ingenieria uml 3 semana diseno 4 semana desarrollo 5 semana pruebas', '1 semana encontrar informacion en internet 2 semana crear los diagramas con star uml 3 semana usar tecnologia para el entorno visual 4 semana usar tecnologia para el desarrollo 5 semana hacer pruebas y revisar'),
(4, 8, '8', 8, 'desarrollo de software desktop apisoft movile apsoft', '1 semana analisis 2 semana ingenieria uml 3 semana diseno 4 semana desarrollo 5 semana pruebas', '1 semana encontrar informacion en internet 2 semana crear los diagramas con star uml 3 semana usar tecnologia para el entorno visual 4 semana usar tecnologia para el desarrollo 5 semana hacer pruebas y revisar'),
(5, 5, '1', 5, 'desarrollo de software desktop apisoft movile apsoft', '1 semana analisis 2 semana ingenieria uml 3 semana diseno 4 semana desarrollo 5 semana pruebas', '1 semana encontrar informacion en internet 2 semana crear los diagramas con star uml 3 semana usar tecnologia para el entorno visual 4 semana usar tecnologia para el desarrollo 5 semana hacer pruebas y revisar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE IF NOT EXISTS `proyectos` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_encargado` int(11) NOT NULL,
  `proyecto` text NOT NULL,
  `presupuesto` text NOT NULL,
  `duracion_desarrollo_proyecto` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_presentacion` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `id_cliente` (`id_cliente`,`id_encargado`),
  KEY `id_encargado` (`id_encargado`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `id_cliente`, `id_encargado`, `proyecto`, `presupuesto`, `duracion_desarrollo_proyecto`, `fecha_inicio`, `fecha_presentacion`, `fecha_entrega`) VALUES
(5, 1, 1, 'pagina de ucrania', '100000$', '1 mes', '2022-03-11', '2022-03-18', '2022-03-21'),
(6, 2, 2, 'Ucrania en Guerra', '100000$', '1 mes', '2022-03-11', '2022-03-18', '2022-03-21'),
(8, 3, 2, 'Ucrania Guerra', '1000000$', '1mes', '2022-03-11', '2022-03-18', '2022-03-21'),
(9, 122, 2, '2', '2', '2', '2022-03-11', '2022-03-11', '2022-03-11'),
(10, 8, 8, '8', '800000$', '1 mes', '2022-03-12', '2022-03-18', '2022-03-21'),
(11, 3, 3, 'pagina de ucrania', '800000$', '1 mes', '2022-03-12', '2022-03-18', '2022-03-21'),
(12, 4, 1, 'test', '1242', '2', '2022-03-15', '2022-03-16', '2022-03-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_personal`
--

DROP TABLE IF EXISTS `seguimiento_personal`;
CREATE TABLE IF NOT EXISTS `seguimiento_personal` (
  `id_seguimiento_personal` int(11) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL,
  `id_proyecto_actual` int(11) NOT NULL,
  `actividad_actual` text NOT NULL,
  PRIMARY KEY (`id_seguimiento_personal`),
  KEY `id_personal` (`id_personal`,`id_proyecto_actual`),
  KEY `id_proyecto_actual` (`id_proyecto_actual`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguimiento_personal`
--

INSERT INTO `seguimiento_personal` (`id_seguimiento_personal`, `id_personal`, `id_proyecto_actual`, `actividad_actual`) VALUES
(3, 1, 1, 'frontend'),
(4, 1, 1, 'backend'),
(5, 2, 2, 'fullstack');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_proyectos`
--

DROP TABLE IF EXISTS `seguimiento_proyectos`;
CREATE TABLE IF NOT EXISTS `seguimiento_proyectos` (
  `id_seguimiento_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `id_encargado` int(11) NOT NULL,
  `id_programadores` text NOT NULL,
  `tareas_inicio` text NOT NULL,
  `tareas_final` text NOT NULL,
  `detalle_proyecto` text NOT NULL,
  PRIMARY KEY (`id_seguimiento_proyecto`),
  KEY `id_proyecto` (`id_proyecto`),
  KEY `id_encargado` (`id_encargado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguimiento_proyectos`
--

INSERT INTO `seguimiento_proyectos` (`id_seguimiento_proyecto`, `id_proyecto`, `id_encargado`, `id_programadores`, `tareas_inicio`, `tareas_final`, `detalle_proyecto`) VALUES
(2, 2, 2, '2-2', 'Entorno Visual', 'Desarrollo', 'En el entorno visual que no este muy lleno la pagina y en el desarrollo no hacerlo muy detallado en el texto'),
(4, 1, 1, '1', 'entorno visual', 'desarrollo', 'en el entorno visual que no este muy lleno la pagina y en el desarrollo no hacerlo muy detallado en el texto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `id_programadores` text NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `servicio` text NOT NULL,
  `detalles` text NOT NULL,
  PRIMARY KEY (`id_servicio`),
  KEY `id_proyecto` (`id_proyecto`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `id_programadores`, `id_proyecto`, `id_cliente`, `servicio`, `detalles`) VALUES
(2, '1-2', 1, 1, 'desarrollo de software desktop y mobile', 'en el desktop se usara gama de colores claro #ffbfbb'),
(3, '1-2', 1, 1, 'desarrollo de software desktop y mobile', 'en el desktop se usara gama de colores claro #ffbfbb'),
(5, '1-2-1-2', 2, 1, 'desarrollo de software desktop y mobile', 'en el desktop se usara gama de colores claro #ffbfbb para el mobile se usara #fcfcfcc'),
(6, '8-5', 5, 8, 'desarrollo de software desktop y mobile', 'en el desktop se usara gama de colores claro #dddddcc para el mobile se usara #fcfcfcc'),
(7, '11', 11, 11, 'desarrollo de software desktop y mobile', 'en el desktop se usara gama de colores claro #eeeeff para el mobile se usara #fcfcfcc'),
(8, '11', 11, 11, 'desarrollo de software desktop y mobile', 'en el desktop se usara gama de colores claro #eeeeff para el mobile se usara #fcfcfcc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`) VALUES
(2, 'ronaldo', '101112'),
(3, 'mario', '123'),
(5, 'hughs', '789'),
(6, 'ron', 'apisoft');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
