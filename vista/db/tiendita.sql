-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2023 a las 20:08:55
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `idaccion` int(20) NOT NULL,
  `idsubcategoria` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `nombrecorto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`idaccion`, `idsubcategoria`, `nombre`, `nombrecorto`) VALUES
(1, 'sub5', 'Editar Producto', 'Editar'),
(2, 'sub5', 'Eliminar Producto', 'Eliminar'),
(3, 'sub6', 'Elimnar Venta', 'Eliminar'),
(4, 'sub8', 'Editar Rol', 'Editar'),
(5, 'sub8', 'Agregar Permisos', 'Agregar'),
(6, 'sub8', 'Eliminar Rol', 'Eliminar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcat` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `classcolor` varchar(30) NOT NULL,
  `icono` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcat`, `nombre`, `classcolor`, `icono`, `status`) VALUES
('cat01', 'Usuarios', 'bg-primary', 'nav-icon fas fa-user', 1),
('cat02', 'Productos', 'bg-danger', 'nav-icon fa fa-shopping-bag', 1),
('cat03', 'Ventas', 'bg-pink color-palette', 'fas fa-cart-plus', 1),
('cat04', 'Roles', 'bg-lightblue color-palette', 'nav-icon fas fa-users', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_tiecket`
--

CREATE TABLE `detalle_tiecket` (
  `no` int(11) NOT NULL,
  `ticket` bigint(11) NOT NULL,
  `idProducto` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_tiecket`
--

INSERT INTO `detalle_tiecket` (`no`, `ticket`, `idProducto`, `cantidad`, `precioUnitario`, `total`) VALUES
(1, 132022021512546639, '6245002654', 1, '1749.00', '1749.00'),
(2, 132022021512546639, '0032571466', 1, '4699.00', '4699.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_pro` int(6) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `nombre_pro` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `modelo_pro` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_pro` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio_pro` decimal(8,2) NOT NULL,
  `status_pro` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cantidad_pro` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pro`, `codigo`, `nombre_pro`, `modelo_pro`, `tipo_pro`, `precio_pro`, `status_pro`, `cantidad_pro`, `fecha`) VALUES
(4, '0032571466', 'Purificador Restaurantero Standard UV', 'PR2000UV', 'agua', '4699.00', 'Activo', 30, '2021-06-13'),
(3, '1113325615', 'Purificador Restaurantero Mediano UV', 'PR200UV', 'agua', '4299.00', 'Activo', 30, '2021-06-13'),
(7, '1321555442', 'Sistema de Purificacion Casa Grande', 'SPC400B', 'agua', '10499.00', 'Activo', 30, '2021-06-13'),
(67, '1570534451', 'Calentador Solar de 20 Tubos para Baja Presión PREMIUM', 'PREMIUM20', 'solar', '12600.00', 'Activo', 30, '2021-12-08'),
(23, '1668349123', 'Reemplazo de Componentes Restaurantero Mediano', 'R-PR200UV', 'agua', '1494.00', 'Null', 30, '2021-08-04'),
(47, '1879494268', 'Botella de Agua Hidrogenada', 'HydroX-B', 'aire', '2999.00', 'Null', 30, '2021-10-13'),
(50, '1960997314', 'MBOX TV con programación libre', 'MBOX-TV', 'aire', '3990.00', 'Null', 30, '2021-10-13'),
(48, '1967005196', 'Generador de Agua Hidrogenada', 'HydroX-J', 'aire', '6999.00', 'Activo', 30, '2021-10-13'),
(60, '2183982788', 'Calentador Solar de 16 Tubos para Baja Presión ECONOline', 'ECONOline16', 'aire', '8300.00', 'Activo', 30, '2021-11-25'),
(42, '2194852592', 'Sistema Ozonificador de Agua', 'OZ1000', 'aire', '2799.00', 'Activo', 30, '2021-10-13'),
(30, '2253676932', 'Reemplazo de Componentes Accua Perfecta', 'R-AccuaPerfecta', 'aire', '0.00', 'Null', 30, '2021-08-04'),
(57, '2435034841', 'Purificador de Aire IonLite Foco Ahorrador de 23w', 'IonLite-LG', 'aire', '450.00', 'Activo', 30, '2021-11-25'),
(43, '2435641293', 'Barra Generadora de Agua Alcalina', 'AlcalytStick', 'aire', '649.00', 'Activo', 30, '2021-10-13'),
(55, '2438737621', 'Purificador de Aire IonLite para Oficina', 'IonLite-OF', 'aire', '700.00', 'Activo', 30, '2021-11-25'),
(62, '2478634765', 'Calentador Solar de 12 Tubos para Alta Presión ECONOline', 'ECONOline12H', 'solar', '11900.00', 'Activo', 30, '2021-12-08'),
(24, '2502992876', 'Reemplazo de Componentes Restaurantero Standard', 'R-PR2000UV', 'agua', '1734.00', 'Null', 30, '2021-08-04'),
(63, '2601416109', 'Calentador Solar de 16 Tubos para Alta Presión ECONOline', 'ECONOline16H', 'solar', '15000.00', 'Activo', 30, '2021-12-08'),
(10, '2738743305', 'Sistema de Purificación Accua Perfecta', 'AccuaPerfecta', 'agua', '1390.00', 'Activo', 30, '2021-06-13'),
(56, '3140032469', 'Purificador de Aire IonLite para Automovil', 'IonLite-CR', 'aire', '600.00', 'Activo', 30, '2021-11-25'),
(71, '3256498767', 'Dispensador Purificador de Agua Fría y Caliente', 'Platinum', 'agua', '5499.00', 'Activo', 30, '2021-03-10'),
(25, '3434590674', 'Reemplazo de Componentes Ósmosis Inversa', 'R-PC2000OI', 'agua', '2900.00', 'Null', 30, '2021-08-04'),
(40, '3590953480', 'SafeWell Purificador por Gravedad', 'SafeWell', 'aire', '1499.00', 'Null', 30, '2021-09-27'),
(65, '3591985554', 'Calentador Solar de 12 Tubos para Baja Presión PREMIUM', 'PREMIUM12', 'solar', '9900.00', 'Activo', 30, '2021-12-08'),
(16, '3984174604', 'Dispensador Sobre Tarja Fria y Caliente Executive', 'ExecutiveST', 'agua', '9999.00', 'Activo', 30, '2021-07-10'),
(17, '3995253526', 'Bebedero de Agua Fría', 'BF', 'dispensador', '16990.00', 'Activo', 30, '2021-07-10'),
(33, '4029400373', 'Water Perfect Experience MX', 'E-WPerfectMx', 'aire', '8499.00', 'Activo', 30, '2021-09-27'),
(31, '4044227080', 'Reemplazo Interno de Componentes Accua Perfecta', 'RI-AccuaPerfecta', 'aire', '0.00', 'Null', 30, '2021-09-27'),
(9, '4113213125', 'Purificador Comedor Industrial Grande', 'PCI4000UV12', 'agua', '19999.00', 'Activo', 30, '2021-06-13'),
(72, '4201762233', 'Dispensador Purificador Sobre Tarja de Agua Fría y Caliente', 'PlatinumST', 'agua', '5499.00', 'Activo', 30, '2021-03-10'),
(20, '4267340933', 'Membresia de Promotor Independiente', 'MPI', 'otro', '0.00', 'Null', 30, '2021-07-10'),
(22, '4315493002', 'Reemplazo de Componentes Casero Standard', 'R-PC2000', 'agua', '1494.00', 'Null', 30, '2021-08-04'),
(2, '4425222223', 'Purificador Casero Standard', 'PC2000', 'agua', '3499.00', 'Activo', 30, '2021-06-13'),
(8, '4454664121', 'Purificador Comedor Industrial Mediano', 'PCI4000UV8', 'agua', '16999.00', 'Activo', 30, '2021-06-13'),
(58, '4911918162', 'OLANSI Purificador de Aire', 'OLANSI', 'aire', '18499.00', 'Null', 30, '2021-11-25'),
(19, '4931132853', 'Bebedero Purificador de Agua para Pared', 'BP', 'dispensador', '12999.00', 'Activo', 30, '2021-06-13'),
(37, '4967083239', 'Sistema Antisarro Electronico Casero', 'HS38', 'aire', '4499.00', 'Null', 30, '2021-09-27'),
(34, '4981577974', 'Reemplazo de Componentes Water Perfect Mx', 'R-WPerfectMx', 'aire', '4188.00', 'Null', 30, '2021-09-27'),
(41, '5013147040', 'Repuesto para SafeWell Purificador por Gravedad', 'R-SafeWell', 'aire', '800.00', 'Activo', 30, '2021-10-13'),
(61, '5095272600', 'Calentador Solar de 20 Tubos para Baja Presión ECONOline', 'ECONOline20', 'solar', '9700.00', 'Activo', 30, '2021-12-08'),
(27, '5162366787', 'Reemplazo de Componentes Casa Grande', 'R-SPC400B', 'agua', '2999.00', 'Null', 30, '2021-08-04'),
(11, '5255808965', 'Mineralizador Vitalizador Antioxidante Alcalyt', 'Alcalyt', 'agua', '1390.00', 'Activo', 30, '2021-07-10'),
(6, '5554554555', 'Sistema de Purificacion Casa Mediana', 'SPC300B', 'agua', '9499.00', 'Activo', 30, '2021-06-13'),
(46, '5592920675', 'Triturador de desperdicio de comida Insinkerator', 'INK-65', 'aire', '5990.00', 'Activo', 30, '2021-10-13'),
(12, '5604465379', 'MINIVITAL Permeador Vitalizador Antioxidante', 'MiniVital', 'agua', '4999.00', 'Null', 30, '2021-07-10'),
(15, '5703682766', 'Dispensador de Lujo de Agua Fría y Caliente', 'AquaPro', 'agua', '5499.00', 'Activo', 30, '2021-07-10'),
(70, '6007192587', 'Calentador Solar de 20 Tubos para Alta Presión PREMIUM', 'PREMIUM20H', 'solar', '21400.00', 'Activo', 30, '2021-12-08'),
(1, '6245002654', 'Purificador Casero Chico', 'PC20', 'agua', '1749.00', 'Activo', 30, '2021-06-13'),
(39, '6831927593', 'Bomba Presurizadora de Agua', 'BPA-FC800', 'aire', '1199.00', 'Null', 30, '2021-09-27'),
(45, '6870185577', 'Bidet de Agua Natural', 'VidaBidet100', 'aire', '1499.00', 'Activo', 30, '2021-10-13'),
(54, '7060470008', 'Purificador de Aire IonLite Portatil', 'IonLite-PT', 'aire', '950.00', 'Activo', 30, '2021-11-25'),
(14, '7265746503', 'Dispensador de Agua Fría y Caliente', 'DFC', 'dispensador', '5499.00', 'Activo', 30, '2021-07-10'),
(66, '7303474061', 'Calentador Solar de 16 Tubos para Baja Presión PREMIUM', 'PREMIUM16', 'solar', '11200.00', 'Activo', 30, '2021-12-08'),
(52, '7598447811', 'Purificador Ionizador de Aire LightAir Sky', 'LightAirSKY', 'aire', '9500.00', 'Activo', 30, '2021-11-25'),
(69, '7625533392', 'Calentador Solar de 16 Tubos para Alta Presión PREMIUM', 'PREMIUM16H', 'solar', '17900.00', 'Activo', 30, '2021-12-08'),
(36, '7665439829', 'Hidrogen Water Kenko Mizu MX', 'E-KenkoMizuMx', 'aire', '59800.00', 'Activo', 30, '2021-09-27'),
(59, '7767734429', 'Calentador Solar de 12 Tubos para Baja Presión ECONOline', 'ECONOline12', 'aire', '7000.00', 'Activo', 30, '2021-11-25'),
(49, '7771274767', 'Batería de Cocina de Acero Quirúrgico de 22 Piezas', 'CSNS22', 'aire', '49990.00', 'Activo', 30, '2021-10-13'),
(44, '7861365874', 'AquaKleen Filtro de Agua con Autolimpieza', 'AquaKleen', 'aire', '1949.00', 'Activo', 30, '2021-10-13'),
(18, '8033527021', 'Bebedero de Agua Fría con Rellenabotellas', 'BFR', 'dispensador', '24990.00', 'Activo', 30, '2021-07-10'),
(35, '8072781140', 'Hidrogen Water Kenko Mizu', 'E-KenkoMizu', 'aire', '2990.00', 'Activo', 30, '2021-09-27'),
(5, '8516520258', 'Purificador Casero Standard OI', 'PC2000OI', 'agua', '5499.00', 'Activo', 30, '2021-06-13'),
(73, '8518750781', 'Etapa Antisarro PF', 'PF2', 'agua', '999.00', 'Null', 30, '2021-03-10'),
(68, '8815941156', 'Calentador Solar de 12 Tubos para Alta Presión PREMIUM', 'PREMIUM12H', 'solar', '14800.00', 'Activo', 30, '2021-12-08'),
(74, '8944115523', 'Equipo de Filtración de Agua ULTRAFINO Mediano', 'SSUF1000', 'agua', '8999.00', 'Activo', 30, '2021-03-10'),
(13, '8973241029', 'Dispensador de Agua Fría', 'DF', 'dispensador', '4999.00', 'Activo', 30, '2021-07-10'),
(75, '9013247642', 'Equipo de Filtración de Agua ULTRAFINO Grande', 'SSUF2500', 'agua', '10499.00', 'Activo', 30, '2021-03-10'),
(53, '9019845409', 'Purificador de Aire IonLite de Luz Nocturna', 'IonLite-BR', 'aire', '500.00', 'Activo', 30, '2021-11-25'),
(28, '9086096332', 'Reemplazo de Componentes Comedor Industrial Mediano', 'R-PCI4000UV8', 'agua', '9294.00', 'Null', 30, '2021-08-04'),
(21, '9174013109', 'Reemplazo de Componentes Casero Chico', 'R-PC20', 'agua', '774.00', 'Null', 30, '2021-08-04'),
(26, '9237475087', 'Reemplazo de Componentes Casa Mediana', 'R-SPC300B', 'agua', '2599.00', 'Null', 30, '2021-08-04'),
(38, '9335698242', 'Llave cuello de ganso', 'LLCGPT', 'aire', '450.00', 'Null', 30, '2021-09-27'),
(32, '9425233701', 'Water Perfect Experience', 'E-WPerfect', 'aire', '497.00', 'Activo', 30, '2021-09-27'),
(51, '9482430247', 'Purificador Ionizador de Aire LightAir Surface', 'LightAirSF', 'aire', '11500.00', 'Activo', 30, '2021-11-25'),
(29, '9484474767', 'Reemplazo de Componentes Comedor Industrial Grande', 'R-PCI4000UV12', 'agua', '10494.00', 'Null', 30, '2021-08-04'),
(64, '9732459209', 'Calentador Solar de 20 Tubos para Alta Presión ECONOline', 'ECONOline20H', 'solar', '18500.00', 'Activo', 30, '2021-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `nombrecorto` varchar(20) NOT NULL,
  `categorias` varchar(50) NOT NULL,
  `subcateegorias` varchar(50) NOT NULL,
  `acciones` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `nombrecorto`, `categorias`, `subcateegorias`, `acciones`, `status`) VALUES
(1, 'Master', 'master', 'cat01,cat02,cat03,cat04', 'sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8', '1,2,3,4,5,6', 1),
(2, 'Editor', 'editor', 'cat02,cat03', 'sub3,sub4,sub5,sub6', '1', 1),
(3, 'Vendedor', 'vendedor', 'cat02,cat03', 'sub4,sub5,sub6', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `token` text NOT NULL,
  `ip` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`id`, `user`, `token`, `ip`, `fecha`, `status`) VALUES
(9, '1310045413', 'fe457ed933bae18b74ee4e1ce42504678adc', '187.190.154.5', '2023-05-12 19:13:05', 0),
(10, '1310045413', '9c45af3a4dc4f5c58657dce9cb686ec42f35', '187.190.154.5', '2023-05-15 19:40:43', 0),
(11, '1310045413', '67d2895b35c1c2629235c9b6b178fa3fdeca', '187.190.154.5', '2023-05-18 18:03:59', 0),
(12, '1310045413', '4cb9fa66d85631dce3a034a29cd047c24d46', '187.190.154.5', '2023-05-18 20:30:58', 0),
(13, '1310045413', 'ec276a72c1f11b1f39312d9f5a53094aa814', '187.190.154.5', '2023-05-18 20:31:35', 0),
(14, '1310045413', '5e6810fab3983ff9927a325c7d589fdc7e0d', '187.190.154.5', '2023-05-18 20:31:52', 0),
(15, '1310045413', '3713d46cedc9e3bbb9d0f0bef681eaca153f', '187.190.154.5', '2023-05-24 16:10:48', 0),
(16, '1310045413', '400b427bd70f87ac6c7dfb4d297e97236f89', '187.190.154.5', '2023-05-24 19:37:50', 0),
(17, '1310045413', '38a24520ae72614a2a7e7f59d7b7fe1798ef', '187.190.154.5', '2023-05-24 19:39:36', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `idsubcategoria` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `idcategoria` varchar(20) NOT NULL,
  `url` varchar(20) NOT NULL,
  `icono` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`idsubcategoria`, `nombre`, `idcategoria`, `url`, `icono`, `status`) VALUES
('sub1', 'Agregar Usuarios', 'cat01', 'agregar-usuarios', 'fa fa-user-plus nav-icon', 1),
('sub2', 'Ver Usuarios', 'cat01', 'ver-usuarios', 'fa fa-address-book nav-icon', 1),
('sub3', 'Agregar Productos', 'cat02', 'agregar-productos', 'fa fa-plus-circle', 1),
('sub4', 'Editar QTY', 'cat02', 'editar-qty', 'fas fa-pen', 1),
('sub5', 'Ver Productos', 'cat02', 'ver-productos', 'fas fa-box', 1),
('sub6', 'Ver Ventas', 'cat03', 'ver-ventas', 'fas fa-receipt', 1),
('sub7', 'Agregar Roles', 'cat04', 'agregar-roles', 'fa fa-plus-circle', 1),
('sub8', 'Ver Roles', 'cat04', 'ver-roles', 'fa fa-address-book', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `no` int(11) NOT NULL,
  `ticket` bigint(11) NOT NULL,
  `atendio` text NOT NULL,
  `cantidadProductos` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`no`, `ticket`, `atendio`, `cantidadProductos`, `total`, `fecha`) VALUES
(1, 132022021512546639, '1310045413', 2, '6448.00', '2022-02-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `numeroUsuario` text NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `fechaNacimiento` text NOT NULL,
  `curp` text NOT NULL,
  `claveIne` text NOT NULL,
  `rfc` text NOT NULL,
  `telefonoCel` text NOT NULL,
  `telefonoCasa` text NOT NULL,
  `correo` text NOT NULL,
  `estado` text NOT NULL,
  `municipio` text NOT NULL,
  `colonia` text NOT NULL,
  `cp` text NOT NULL,
  `calle` text NOT NULL,
  `numexterior` text NOT NULL,
  `numInterior` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `rol` int(11) NOT NULL,
  `fechaIngreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`numeroUsuario`, `nombre`, `apellidos`, `fechaNacimiento`, `curp`, `claveIne`, `rfc`, `telefonoCel`, `telefonoCasa`, `correo`, `estado`, `municipio`, `colonia`, `cp`, `calle`, `numexterior`, `numInterior`, `username`, `password`, `rol`, `fechaIngreso`, `estatus`) VALUES
('1265566336', 'Christofer', 'Santiago', '18/12/1989', 'PEVY891213HCXRSL32', '3355513663', 'SAGJ921006IU9', '6330055865', '6330055865', 'correo@hotmail.com', 'México', 'Coacalco de Berriozábal', 'Cuajimalpa de Morelos', '96327', 'Constituyentes', '87lh', '21', '', '', 1, '2023-05-18 20:31:26', 'Activo'),
('1310045413', 'Jhonatan', 'Santiago', '14/12/1989', 'PEVY891213HCXRSL28', '3355513659', 'SAGJ921006IU5', '5539079434', '5539079434', 'correo@hotmail.com', 'Ciudad de México', 'Gustavo A. Madero', 'El Piru (Fracc)', '36842', 'Avenida Ámsterdam', '13at', '32', 'jhonsg', '$2a$07$asxx54ahjppf45sd87a5aucHhtEJS/xdMffIPWAC/sjvh1EFem22G', 1, '2023-05-18 20:32:02', 'Activo'),
('1325695278', 'Irina', 'Segura', '16/12/1989', 'PEVY891213HCXRSL30', '3355513661', 'SAGJ921006IU7', '2366522236', '2366522236', 'correo@hotmail.com', 'Jalisco', 'Guadalajara', 'Cruz Del Farol', '58756', 'Avenida Bucareli', '632', '98', '', '', 1, '2023-05-15 19:21:38', 'Activo'),
('1356855685', 'Taylor', 'Swift', '13/12/1989', 'PEVY891213HCXRSL27', '3355513658', 'SAGJ921006IU4', '5336892238', '5336892238', 'correo@hotmail.com', 'Ciudad de México', 'Miguel Hidalgo', 'El Prado', '13127', 'Anillo Periférico', '13ts', '1989', '', '', 1, '2023-05-15 19:21:40', 'Activo'),
('1996092713', 'Karina', 'Jiménez', '17/12/1989', 'PEVY891213HCXRSL31', '3355513662', 'SAGJ921006IU8', '2366525588', '2366525587', 'correo@hotmail.com', 'Baja California', 'Tijuana', 'El Molinito', '26502', 'Avenida Chapultepec', '249B', 'sn', '', '', 1, '2023-05-15 19:21:43', 'Activo'),
('2369855262', 'Alejandro', 'Santiago', '20/12/1989', 'PEVY891213HCXRSL34', '3355513665', 'SAGJ921006IU9', '5753255222', '5753255222', 'correo@hotmail.com', 'Ciudad de México', 'Iztacalco', 'Lomas De Tepemecatl', '53125', 'Nueva Aventura', 'rt45', '25', '', '', 1, '2023-05-15 19:21:45', 'Activo'),
('2665222222', 'Stephanie', 'Barraza', '15/12/1989', 'PEVY891213HCXRSL29', '3355513660', 'SAGJ921006IU6', '1569232525', '1569232525', 'correo@hotmail.com', 'Nuevo León', 'Monterrey', 'Doctores Ii', '20365', 'Avenida 16 de Septiembre', '152', '25', '', '', 1, '2023-05-18 20:04:41', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`idaccion`),
  ADD KEY `FK_subcategoria_accion` (`idsubcategoria`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcat`);

--
-- Indices de la tabla `detalle_tiecket`
--
ALTER TABLE `detalle_tiecket`
  ADD PRIMARY KEY (`no`),
  ADD KEY `FK_detalle_tickets` (`ticket`),
  ADD KEY `FK_detalle_ticket_productos` (`idProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`idsubcategoria`),
  ADD KEY `FK_categoria_subcategoria` (`idcategoria`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`numeroUsuario`(30)),
  ADD KEY `FK_usuarios_roles` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `idaccion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalle_tiecket`
--
ALTER TABLE `detalle_tiecket`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD CONSTRAINT `FK_subcategoria_accion` FOREIGN KEY (`idsubcategoria`) REFERENCES `subcategorias` (`idsubcategoria`);

--
-- Filtros para la tabla `detalle_tiecket`
--
ALTER TABLE `detalle_tiecket`
  ADD CONSTRAINT `FK_detalle_ticket_productos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`codigo`),
  ADD CONSTRAINT `FK_detalle_tickets` FOREIGN KEY (`ticket`) REFERENCES `tickets` (`ticket`);

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `FK_categoria_subcategoria` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcat`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
