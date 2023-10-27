-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2023 a las 22:12:15
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reclutapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rut` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidopaterno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidomaterno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechanacimiento` date NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idestadocivil` int(11) NOT NULL,
  `nacionalidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ididioma` int(11) NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpais` int(11) NOT NULL,
  `idregion` int(11) NOT NULL,
  `idcomuna` int(11) NOT NULL,
  `idgenero` int(11) NOT NULL,
  `explabestjur` tinyint(4) DEFAULT NULL,
  `explabemp` tinyint(4) DEFAULT NULL,
  `explabsecpub` tinyint(4) DEFAULT NULL,
  `estder` tinyint(4) DEFAULT NULL,
  `estpostgra` tinyint(4) DEFAULT NULL,
  `estconvalidacion` tinyint(4) DEFAULT NULL,
  `estotros` tinyint(4) DEFAULT NULL,
  `estbasmed` tinyint(4) DEFAULT NULL,
  `inglesnat` tinyint(4) DEFAULT NULL,
  `inglesavanzado` tinyint(4) DEFAULT NULL,
  `inglesmedio` tinyint(4) DEFAULT NULL,
  `inglesbasico` tinyint(4) DEFAULT NULL,
  `inglesnohabla` tinyint(4) DEFAULT NULL,
  `inglesotros` tinyint(4) DEFAULT NULL,
  `adjcurvi` tinyint(4) DEFAULT NULL,
  `adjvideo` tinyint(4) DEFAULT NULL,
  `adjcertificacion` tinyint(4) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `rut`, `nombres`, `apellidopaterno`, `apellidomaterno`, `fechanacimiento`, `email`, `telefono`, `idestadocivil`, `nacionalidad`, `ididioma`, `direccion`, `idpais`, `idregion`, `idcomuna`, `idgenero`, `explabestjur`, `explabemp`, `explabsecpub`, `estder`, `estpostgra`, `estconvalidacion`, `estotros`, `estbasmed`, `inglesnat`, `inglesavanzado`, `inglesmedio`, `inglesbasico`, `inglesnohabla`, `inglesotros`, `adjcurvi`, `adjvideo`, `adjcertificacion`, `updated_at`, `created_at`) VALUES
(1, '16160172-1', 'CARLOS ALBERTO', 'BARRIA', 'SOTO', '1985-08-31', 'TEST@GMAIL.COM', '987654321', 1, '1', 1, 'ANTIHUAL 645', 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-28 14:46:44', '2023-09-27 14:36:25'),
(3, '12123456-6', 'PEDRO', 'MEDINA', 'AGUAYO', '1988-05-21', 'TEST@GMAIL.COM', '963258741', 1, '1', 1, 'antihual 46546', 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-29 15:15:48', '2023-09-29 15:15:48'),
(13, '14785236-9', 'ANDREA', 'GONZALEZ', 'GARCIA', '1993-05-01', 'TEST@GMAIL.COM', '951236874', 1, '1', 1, 'BELLAVISTA 1234', 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, '2023-09-29 17:41:34', '2023-09-29 17:41:34'),
(14, '14785236-9', 'ANDREA', 'GONZALEZ', 'GARCIA', '1993-05-01', 'TEST@GMAIL.COM', '951236874', 1, '1', 1, 'BELLAVISTA 1234', 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, '2023-09-29 17:46:32', '2023-09-29 17:46:32'),
(15, '14785236-9', 'ANDREA', 'GONZALEZ', 'GARCIA', '1993-05-01', 'TEST@GMAIL.COM', '951236874', 1, '1', 1, 'BELLAVISTA 1234', 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, '2023-09-29 17:46:39', '2023-09-29 17:46:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudads`
--

CREATE TABLE `ciudads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idregion` int(11) NOT NULL,
  `glosa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciudads`
--

INSERT INTO `ciudads` (`id`, `idregion`, `glosa`) VALUES
(1, 1, 'Arica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `giro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rut` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razonsocial` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpais` int(11) NOT NULL,
  `idregion` int(11) DEFAULT NULL,
  `idcomuna` int(11) DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anofundacion` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombrecontacto` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargocontacto` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonocontacto` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailcontacto` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esestudiojuridico` tinyint(1) NOT NULL,
  `socioadministrador` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numerosocios` int(11) NOT NULL,
  `numerossociossenior` int(11) NOT NULL,
  `numerossociosjunior` int(11) NOT NULL,
  `gerentegeneral` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gerenteadminfin` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gerentecomunicaciones` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numpersonaladmin` int(11) NOT NULL,
  `industria` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `giro`, `rut`, `razonsocial`, `direccion`, `idpais`, `idregion`, `idcomuna`, `telefono`, `email`, `anofundacion`, `nombrecontacto`, `cargocontacto`, `telefonocontacto`, `emailcontacto`, `esestudiojuridico`, `socioadministrador`, `numerosocios`, `numerossociossenior`, `numerossociosjunior`, `gerentegeneral`, `gerenteadminfin`, `gerentecomunicaciones`, `numpersonaladmin`, `industria`) VALUES
(1, 'Servicios Informatica', '79123456-7', 'TI Services 2', 'Urmeneta 1234...', 1, NULL, NULL, '987654321', 'contacto@tiservices.com', '2021', 'Carlos Barria', 'Soporte', '984160012', 'carlos@tiservices.cl', 0, 'Patricia Ruiz', 2, 1, 1, 'Patricia Ruiz', 'Carlos Barria', 'Otro', 5, 'TI'),
(2, 'ESTUDIO ABOGADOS', '93281000-K', 'FERNANDEZ ABOGADOS', 'BENAVENTE 123', 1, 1, 1, '987654321', 'VICTOR@FERNANDEZ.CL', '2019', 'VICTOR FERNANDEZ', 'DIRECTOR', '987654321', 'VICTOR@FERNANDEZ.CL', 1, 'RODRIGO SOTO', 7, 3, 4, 'PEDRO MEDINA', 'HUMBERTO SUAZO', 'MARCELO ULLOA', 12, 'LEGAL'),
(3, 'ESTUDIO ABOGADOS', '88417000-1', 'ESTUDIO ABOGADOS VIAL', 'GUILLERMO GALLARDO 245', 1, 2, 3, '963258741', 'JOSEANTONIO@VIAL.CL', '2001', 'JOSE ANTONIO VIAL', 'GERENTE GENERAL', '963258741', 'JOSEANTONIO@VIAL.CL', 1, 'RODRIGO SOTO', 5, 2, 3, 'JOSE ANTONIO VIAL', 'MARIA JESUS EDWARDS', 'ANTONIA GAETE', 18, 'LEGAL'),
(4, 'ESTUDIO ABOGADOS', '89862200-2', 'ESTUDIO JURIDICO HYM CONSULTORES', 'URMENETA 745', 1, 1, 1, '985632147', 'ROBERTOMALDONADO@HYM.CL', '2021', 'ROBERTO MALDONADO', 'DIRECTO', '985632147', 'ROBERTOMALDONADO@HYM.CL', 1, 'ROBERTO MALDONADO', 2, 2, 0, 'GONZALO HECK', 'JJ GONZALEZ', 'JR VIDAL', 7, 'LEGAL'),
(5, 'ESTUDIO ABOGADOS', '76391168-3', 'CVR ABOGADOS', 'Huerfanos #835, Piso 12', 1, 7, 4, '963258741', 'JOSEANTONIO@VIAL.CL', '2019', 'ROBERTO MALDONADO', 'GERENTE GENERAL', '985632147', 'ROBERTOMALDONADO@HYM.CL', 1, 'ROBERTO MALDONADO', 2, 2, 0, 'GONZALO HECK', 'JJ GONZALEZ', 'JR VIDAL', 7, 'LEGAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivils`
--

CREATE TABLE `estadocivils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `glosa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estadocivils`
--

INSERT INTO `estadocivils` (`id`, `codigo`, `glosa`, `created_at`, `updated_at`) VALUES
(1, 'S', 'Soltero', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudioscandidatos`
--

CREATE TABLE `estudioscandidatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idcandidato` int(11) NOT NULL,
  `idnivelestudio` int(11) NOT NULL,
  `idinstitucion` int(11) NOT NULL,
  `idpais` int(11) NOT NULL,
  `idregion` int(11) NOT NULL,
  `idcomuna` int(11) NOT NULL,
  `ranking` int(11) NOT NULL,
  `anoingreso` int(11) NOT NULL,
  `anoegreso` int(11) NOT NULL,
  `promnotas` int(11) NOT NULL,
  `notaexamgrado` int(11) NOT NULL,
  `fechatitulacion` date NOT NULL,
  `fechajuramento` date NOT NULL,
  `nombreestudio` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glosa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `codigo`, `glosa`, `created_at`, `updated_at`) VALUES
(1, 'M', 'Masculino', NULL, NULL),
(2, 'F', 'Femenino', NULL, NULL),
(3, 'N', 'Ninguno', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glosa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id`, `codigo`, `glosa`, `created_at`, `updated_at`) VALUES
(1, 'ES', 'Español', NULL, NULL),
(2, 'ING', 'Ingles', NULL, NULL),
(3, 'FR', 'Frances', NULL, NULL),
(4, 'POR', 'Portugues', NULL, NULL),
(5, 'ALE', 'Aleman', NULL, NULL),
(6, 'JP', 'Japones', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucions`
--

CREATE TABLE `institucions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idtipoinstitucion` int(11) NOT NULL,
  `glosa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `institucions`
--

INSERT INTO `institucions` (`id`, `codigo`, `idtipoinstitucion`, `glosa`, `created_at`, `updated_at`) VALUES
(1, 'CFTPU', 1, 'Centro de Formación Técnica de la Pontificia Universidad Católica de Valparaíso', NULL, NULL),
(2, 'UCH', 2, 'Universidad de Chile', NULL, NULL),
(3, 'PUC', 2, 'Pontificia Universidad Católica', NULL, NULL),
(4, 'IP', 3, 'Santo Tomas', NULL, NULL),
(5, 'LHMM', 4, 'Liceo Hombres Manuel Montt', NULL, NULL),
(6, 'CSFJ', 5, 'Colegio San Francisco Javier', NULL, NULL);

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_09_07_130534_create_clientes_table', 1),
(14, '2023_09_08_174430_create_sistemas_table', 2),
(15, '2023_09_13_145905_create_pais_table', 2),
(21, '2023_09_14_200006_create_ciudad_table', 3),
(22, '2023_09_13_210654_create_regions_table', 4),
(23, '2023_09_14_200006_create_ciudads_table', 5),
(24, '2023_09_25_154159_create_candidatos_table', 5),
(25, '2023_09_26_144906_create_estadocivils_table', 6),
(27, '2023_09_26_151550_create_generos_table', 7),
(28, '2023_09_26_152654_create_idiomas_table', 8),
(29, '2023_09_29_122648_create_tipoestudios_table', 9),
(31, '2023_09_29_133716_create_tipoinstitucions_table', 10),
(32, '2023_09_29_134109_create_institucions_table', 11),
(33, '2023_09_29_154951_create_estudioscandidatos_table', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `nacionalidad`) VALUES
(1, 'Chile', 'Chileno(a)'),
(2, 'Argentina', 'Argentino(a)'),
(3, 'Peru', 'Peruano(a)'),
(4, 'Bolivia', 'Boliviano(a)'),
(5, 'Paraguay', 'Paraguayo(a)');

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
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idpais` int(11) NOT NULL,
  `codigo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glosa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `regions`
--

INSERT INTO `regions` (`id`, `idpais`, `codigo`, `glosa`) VALUES
(1, 1, 'I', 'Región de Arica y Parinacota'),
(2, 1, 'X', 'Región de Los Lagos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoestudios`
--

CREATE TABLE `tipoestudios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glosa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipoestudios`
--

INSERT INTO `tipoestudios` (`id`, `codigo`, `glosa`, `created_at`, `updated_at`) VALUES
(1, 'EB', 'Educación Básica', NULL, NULL),
(2, 'EM', 'Educación Media', NULL, NULL),
(3, 'ET', 'Técnica', NULL, NULL),
(4, 'ES', 'Universitaria', NULL, NULL),
(5, 'MA', 'Magister', NULL, NULL),
(6, 'DOC', 'Doctorado', NULL, NULL),
(7, 'PG', 'Postgrado', NULL, NULL),
(8, 'DIP', 'Diplomado', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoinstitucions`
--

CREATE TABLE `tipoinstitucions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glosa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipoinstitucions`
--

INSERT INTO `tipoinstitucions` (`id`, `codigo`, `glosa`, `created_at`, `updated_at`) VALUES
(1, 'CFT', 'Centro Formación Técnica', NULL, NULL),
(2, 'U', 'Universidad', NULL, NULL),
(3, 'IP', 'Instuto Profesional', NULL, NULL),
(4, 'LI', 'Liceo', NULL, NULL),
(5, 'C', 'Colegio', NULL, NULL);

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
  `tipo_usuario` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_usuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Carlos', 'cabarria.s@gmail.com', NULL, '$2y$10$48nenU0dm5j4GZKTGMBk4uPJLeotS9E9JXUAesJTyi4eeeGGg3zZW', 1, NULL, '2023-09-08 00:17:51', '2023-09-08 00:17:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudads`
--
ALTER TABLE `ciudads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadocivils`
--
ALTER TABLE `estadocivils`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudioscandidatos`
--
ALTER TABLE `estudioscandidatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucions`
--
ALTER TABLE `institucions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoestudios`
--
ALTER TABLE `tipoestudios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoinstitucions`
--
ALTER TABLE `tipoinstitucions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ciudads`
--
ALTER TABLE `ciudads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estadocivils`
--
ALTER TABLE `estadocivils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estudioscandidatos`
--
ALTER TABLE `estudioscandidatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `institucions`
--
ALTER TABLE `institucions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoestudios`
--
ALTER TABLE `tipoestudios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipoinstitucions`
--
ALTER TABLE `tipoinstitucions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
