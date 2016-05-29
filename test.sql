-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2016 a las 16:00:42
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `Prioridad` varchar(11) NOT NULL,
  `Descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `accion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `titulo`, `Prioridad`, `Descripcion`, `precio`, `accion`) VALUES
(1, 'Aviso1', 'Alta', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est?ndar de las industrias desde el a?o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us? una galer?a de textos y los mezcl? de tal manera que logr? hacer un libro de textos especimen.', 1500, 'Algo'),
(2, 'Aviso2', 'Media', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est?ndar de las industrias desde el a?o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us? una galer?a de textos y los mezcl? de tal manera que logr? hacer un libro de textos especimen.', 500, 'Algo'),
(3, 'Aviso3', 'Baja', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est?ndar de las industrias desde el a?o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us? una galer?a de textos y los mezcl? de tal manera que logr? hacer un libro de textos especimen.', 650, 'Algo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `economia`
--

CREATE TABLE `economia` (
  `fecha` int(11) NOT NULL,
  `presupuestoTotal` int(11) NOT NULL,
  `gasto` int(11) NOT NULL,
  `ingreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticascaducidad`
--

CREATE TABLE `estadisticascaducidad` (
  `fecha` date NOT NULL,
  `totales` int(11) NOT NULL,
  `totalesTiradosControl` int(11) NOT NULL,
  `totalesControl` int(11) NOT NULL,
  `beneficios` int(11) NOT NULL,
  `gastos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadisticascaducidad`
--

INSERT INTO `estadisticascaducidad` (`fecha`, `totales`, `totalesTiradosControl`, `totalesControl`, `beneficios`, `gastos`) VALUES
('2015-08-31', 50000, 20, 2000, 0, 0),
('2015-09-30', 55000, 100, 4000, 0, 0),
('2015-10-31', 55600, 200, 8000, 0, 0),
('2015-11-30', 56000, 205, 10000, 0, 0),
('2015-12-31', 60000, 150, 12000, 0, 0),
('2016-01-31', 65000, 100, 15000, 0, 0),
('2016-02-29', 70000, 150, 25000, 0, 0),
('2016-03-31', 72000, 100, 30000, 0, 0),
('2016-04-30', 75000, 50, 40000, 0, 0),
('2016-05-31', 78000, 50, 50000, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticascompetencia`
--

CREATE TABLE `estadisticascompetencia` (
  `fecha` date NOT NULL,
  `clientestotales` int(11) NOT NULL,
  `porcentajeClientesSatisfechos` int(11) NOT NULL,
  `costes` decimal(10,0) NOT NULL,
  `beneficios` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticastiendaonline`
--

CREATE TABLE `estadisticastiendaonline` (
  `fecha` date NOT NULL,
  `usuarios` int(11) NOT NULL,
  `numeroVentas` int(11) NOT NULL,
  `beneficios` int(11) NOT NULL,
  `gastos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadisticastiendaonline`
--

INSERT INTO `estadisticastiendaonline` (`fecha`, `usuarios`, `numeroVentas`, `beneficios`, `gastos`) VALUES
('2015-05-31', 378, 72421, 0, 0),
('2015-06-30', 355, 70100, 0, 0),
('2015-07-31', 407, 74821, 0, 0),
('2015-08-31', 462, 79826, 0, 0),
('2015-09-30', 493, 81390, 0, 0),
('2015-10-31', 479, 79951, 0, 0),
('2015-11-30', 575, 89551, 0, 0),
('2015-12-31', 654, 95874, 0, 0),
('2016-01-31', 678, 98301, 0, 0),
('2016-02-29', 666, 97151, 0, 0),
('2016-03-31', 710, 101121, 0, 0),
('2016-04-30', 763, 105896, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacioncaducidad`
--

CREATE TABLE `evaluacioncaducidad` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `responsabilidad` int(11) NOT NULL,
  `estrategia` int(11) NOT NULL,
  `adquisicion` int(11) NOT NULL,
  `rendimiento` int(11) NOT NULL,
  `conformidad` int(11) NOT NULL,
  `conductaHumana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacioncompetencia`
--

CREATE TABLE `evaluacioncompetencia` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `responsabilidad` int(11) NOT NULL,
  `estrategia` int(11) NOT NULL,
  `adquisicion` int(11) NOT NULL,
  `rendimiento` int(11) NOT NULL,
  `conformidad` int(11) NOT NULL,
  `conductaHumana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciontiendaonline`
--

CREATE TABLE `evaluaciontiendaonline` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `responsabilidad` int(11) NOT NULL,
  `estrategia` int(11) NOT NULL,
  `adquisicion` int(11) NOT NULL,
  `rendimiento` int(11) NOT NULL,
  `conformidad` int(11) NOT NULL,
  `conductaHumana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `evaluaciontiendaonline`
--

INSERT INTO `evaluaciontiendaonline` (`id`, `fecha`, `responsabilidad`, `estrategia`, `adquisicion`, `rendimiento`, `conformidad`, `conductaHumana`) VALUES
(1, '2016-01-31', 7, 8, 7, 8, 8, 9),
(2, '2016-02-29', 8, 9, 7, 9, 9, 8),
(3, '2016-03-31', 5, 4, 3, 3, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metricas`
--

CREATE TABLE `metricas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `umbralBajo` int(11) NOT NULL,
  `umbralalto` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `idProyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metricas`
--

INSERT INTO `metricas` (`id`, `nombre`, `umbralBajo`, `umbralalto`, `descripcion`, `idProyecto`) VALUES
(1, 'Artículos tirados entre Totales', 5, 15, 'Numero de articulos tirados entre totales', 3),
(2, 'Porcentaje tirados controlados vs no controlados', 5, 15, '(Articulostirados totales controlados/totales controlados) y (Articulostirados totales no controlados/totales no controlados)', 3),
(3, 'Incremento Ventas al mes', 5, 10, 'Porcentaje de incremento de ventas', 2),
(4, 'Encuestas sobre precios favorables', 80, 90, 'Porcentaje de encuestas favorables', 2),
(5, 'Incremento compras web', 2, 5, 'Incremento compras pagina web', 1),
(6, 'Encuestas online favorables', 80, 90, 'Encuestas tienda online favorables por mes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE `objetivos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `idPrincipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objetivos`
--

INSERT INTO `objetivos` (`id`, `nombre`, `descripcion`, `idPrincipio`) VALUES
(1, 'Precios Competitivos', 'Conocer los precios de los productos de nuestra competencia, para ofrecer nuestro mejor precio', 1),
(2, 'Marca Propia', 'Conseguir  progresivamente  el  mayor  número  de  marcas  propias  de productos, para aplicar el mejor precio conservando la calidad', 1),
(3, 'Gestion eficiente de la caducidad', 'Controlar de manera fácil y ágil, la fecha de caducidad de nuestros productos perecederos, con el fin de evitar el aumento de costes que supone perder estos productos por sobrepasar la fecha de caducidad', 1),
(4, 'Maxima calidad certificada', 'Exigir a nuestros proveedores que todos los productos suministrados ofrezcan la máxima calidad certificada y pudiendo corroborarlo con estudios propios', 1),
(5, 'Aumentar Ventas', 'Aumento de las ventas para conseguir el mejor precio a nuestros clientes. Con un volumen de  ventas  elevado, podemos  reducir  el  margen  de beneficio por producto ', 1),
(6, 'Proximidad con el cliente', 'Instalaciónde  múltiples  tiendas  físicas  para  que  estén  realmente  próximas  a  nuestros clientes y tienda on-line con entrega a domicilio', 2),
(7, 'Sostenibilidad', 'Se  aplicará  una  buena  relación  con  el  medio  ambiente  como  un  pilar fundamental en la estrategia de la empresa', 2),
(8, 'Trabajador satisfecho', 'Procurar  la  formación  y  satisfacción  de  nuestros  trabajadores/as,  aplicando  cursos  de formación, gratificando y reconociendo la responsabilidad y posibilitando su crecimiento profesional', 3),
(9, 'Implicación del trabajador en la empresa', 'Bonificaciones  a  los  trabajadores  en  forma  de  (viajes,  regalos,  descuentos  en  nuestros productos) para fomentar su integridad y responsabilidad con la organización', 3),
(10, 'Exclusividad', 'Máximos acuerdos de exclusividad con los proveedores para conseguir buenos precios, donde se consideren beneficiado', 4),
(11, 'Eficiencia de suministro', 'Acuerdos  con los  proveedores  para conseguir la máxima  eficiencia en  el suministro de mercancías  (puntualidad,  integridad),  mediante  la  evolución  y  desarrollo  constante  en este proceso', 4),
(14, 'onsdivohn', 'azckinasnc', 2),
(35, 'Objetivo nuevo', 'sad', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `principios`
--

CREATE TABLE `principios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `principios`
--

INSERT INTO `principios` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Calidad con el Cliente', 'Prescribir soluciones con la mejor relación calidad-precio del mercado para que los clientes se fabriquen su compra total.'),
(2, 'Calidad con la Sociedad', 'Satisfacer a la Sociedad, con  el fomento de sinergias  con  el comercio de proximidad o la modernización del entorno en el que se ubican las tiendas.'),
(3, 'Calidad con el Trabajador/a', 'Para poder satisfacer a sus clientes, hay que satisfacer a nuestros  trabajadores  y  trabajadoras.  Para  ello,  aplicaremos  un  modelo  de  Recursos Humanados basado en el liderazgo, el esfuerzo y la satisfacción personal de la plantilla.'),
(4, 'Calidad con el Proveedor', 'Establecer  buenas  relaciones  con  los  proveedores,  donde ambos nos consideremos beneficiados. Apostar por el sector primario para construir una Cadena Agroalimentaria Sostenible en la que todos los eslabones se vean beneficiados.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuestas`
--

CREATE TABLE `propuestas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `fechaAlta` date NOT NULL,
  `fechaBaja` date DEFAULT NULL,
  `fechaAprobacion` date DEFAULT NULL,
  `capitalInicial` decimal(11,0) NOT NULL,
  `capitalAsignado` decimal(11,0) NOT NULL,
  `estado` enum('pendiente','aceptada','rechazada') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `propuestas`
--

INSERT INTO `propuestas` (`id`, `titulo`, `descripcion`, `fechaAlta`, `fechaBaja`, `fechaAprobacion`, `capitalInicial`, `capitalAsignado`, `estado`) VALUES
(1, 'asdddsgs', '', '2016-05-26', '2016-05-27', NULL, '10000', '300', 'rechazada'),
(6, 'alfo', '', '0000-00-00', '2016-05-27', NULL, '3000000', '0', 'rechazada'),
(7, 'dsg', '', '2016-05-27', '0000-00-00', NULL, '2', '0', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `prioridad` enum('alta','media','baja') NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fechaInicio` date NOT NULL,
  `costeInicial` decimal(11,0) NOT NULL,
  `presupuestoasignado` int(11) NOT NULL,
  `idMetrica1` int(11) NOT NULL,
  `idMetrica2` int(11) NOT NULL,
  `alineadoObj` int(11) NOT NULL,
  `estado` enum('activo','pausado','cancelado','planificado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `prioridad`, `descripcion`, `fechaInicio`, `costeInicial`, `presupuestoasignado`, `idMetrica1`, `idMetrica2`, `alineadoObj`, `estado`) VALUES
(1, 'Tienda on-line', 'alta', 'Las unidades de TIC proponen el proyecto denominado “Tienda on-line” para que los clientes puedan realizar las compras desde casa y no perder oferta de servicio frente a la competencia.', '2015-07-01', '10000', 0, 1, 0, 1, 'activo'),
(2, 'Competencia', 'alta', 'Las unidades de TIC proponen realizar un proyecto denominado “Competencia” para conocer de todos  los  artículos, los  precios  que ofrece la misma, y así proporcionar a la alta dirección una herramienta util para fijar los precios de la organización.', '2014-11-01', '7500', 0, 2, 0, 2, 'activo'),
(3, 'Caducidad', 'media', 'Las unidades de negocio proponen el proyecto “Caducidad” para conocer la fecha de caducidad  de  todos  los  productos  perecederos  y  así  evitar  los  altos  costes  que  supone eliminar estos productos', '2015-02-01', '5000', 0, 3, 0, 3, 'activo'),
(4, 'Distribuidor', 'media', 'Las unidades de negocio proponen el proyecto “Distribuidor” para conocer los precios de los distribuidores de mercancias entre almacen y tienda y seleccionar el más adecuado.', '2016-10-01', '8000', 0, 4, 0, 9, 'planificado'),
(5, 'prueba', 'alta', 'sfghjkl', '2016-05-19', '10000', 15000, 1, 1, 14, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `zona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`id`, `nombre`, `calle`, `telefono`, `zona`) VALUES
(1, 'Sa Calatrava', '', '', 1),
(2, 'Cort', '', '', 1),
(3, 'Jaume III', '', '', 1),
(4, 'El Mercat', '', '', 1),
(5, 'Monti-sion', '', '', 1),
(6, 'Sant Jaume', '', '', 1),
(7, 'La seu', '', '', 1),
(8, 'Aranjassa', '', '', 2),
(9, 'Can Capes', '', '', 2),
(10, 'Sa Casa Blanca', '', '', 2),
(11, 'Estadio Balear', '', '', 2),
(12, 'Els Hostalets', '', '', 2),
(13, 'Pedro Garau', '', '', 2),
(14, 'Amanecer', '', '', 3),
(15, 'Arxiduc', '', '', 3),
(16, 'Bons Aires', '', '', 3),
(17, 'Camp Redo', '', '', 3),
(18, 'Pont de Inca', '', '', 3),
(19, 'Son Canals', '', '', 3),
(20, 'Arenal', '', '', 4),
(21, 'Can Pastilla', '', '', 4),
(22, 'El coll', '', '', 4),
(23, 'El Molinar', '', '', 4),
(24, 'Can Pere Antoni', '', '', 4),
(25, 'Son Pacs', '', '', 5),
(26, 'La Bonanova', '', '', 5),
(27, 'Cala Major', '', '', 5),
(28, 'El Forti', '', '', 5),
(29, 'Genova', '', '', 5),
(30, 'Sant Agusti', '', '', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `nombre`) VALUES
(1, 'Centro'),
(2, 'Levante'),
(3, 'Norte'),
(4, 'Playa de Palma'),
(5, 'Poniente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadisticascaducidad`
--
ALTER TABLE `estadisticascaducidad`
  ADD PRIMARY KEY (`fecha`),
  ADD UNIQUE KEY `fecha` (`fecha`);

--
-- Indices de la tabla `estadisticascompetencia`
--
ALTER TABLE `estadisticascompetencia`
  ADD PRIMARY KEY (`fecha`);

--
-- Indices de la tabla `metricas`
--
ALTER TABLE `metricas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProyecto` (`idProyecto`);

--
-- Indices de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `principios`
--
ALTER TABLE `principios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propuestas`
--
ALTER TABLE `propuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alineadoObj` (`alineadoObj`),
  ADD KEY `idMetrica2` (`idMetrica2`),
  ADD KEY `estado` (`estado`),
  ADD KEY `alineadoObj_2` (`alineadoObj`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `metricas`
--
ALTER TABLE `metricas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `principios`
--
ALTER TABLE `principios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `propuestas`
--
ALTER TABLE `propuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
