-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2023 a las 07:05:19
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citasmedicas`
--

CREATE TABLE `citasmedicas` (
  `id_cita` int(11) NOT NULL,
  `id_tipo_cita` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estadoCita` tinyint(4) NOT NULL,
  `id_consultorio` int(11) NOT NULL,
  `tddDoctor` varchar(10) NOT NULL,
  `docDoctor` varchar(20) NOT NULL,
  `tddPaciente` varchar(10) NOT NULL,
  `docPaciente` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citasmedicas`
--

INSERT INTO `citasmedicas` (`id_cita`, `id_tipo_cita`, `fecha`, `hora`, `estadoCita`, `id_consultorio`, `tddDoctor`, `docDoctor`, `tddPaciente`, `docPaciente`) VALUES
(343, 1, '2023-03-27', '06:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(344, 1, '2023-03-27', '07:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(345, 1, '2023-03-27', '08:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(346, 1, '2023-03-27', '09:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(347, 1, '2023-03-27', '10:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(348, 1, '2023-03-27', '11:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(349, 1, '2023-03-28', '06:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(350, 1, '2023-03-28', '07:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(351, 1, '2023-03-28', '08:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(352, 1, '2023-03-28', '09:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(353, 1, '2023-03-28', '10:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(354, 1, '2023-03-28', '11:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(355, 1, '2023-03-29', '06:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(356, 1, '2023-03-29', '07:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(357, 1, '2023-03-29', '08:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(358, 1, '2023-03-29', '09:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(359, 1, '2023-03-29', '10:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(360, 1, '2023-03-29', '11:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(361, 1, '2023-03-30', '06:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(362, 1, '2023-03-30', '07:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(363, 1, '2023-03-30', '08:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(364, 1, '2023-03-30', '09:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(365, 1, '2023-03-30', '10:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(366, 1, '2023-03-30', '11:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(367, 1, '2023-03-31', '06:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(368, 1, '2023-03-31', '07:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(369, 1, '2023-03-31', '08:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(370, 1, '2023-03-31', '09:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(371, 1, '2023-03-31', '10:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(372, 1, '2023-03-31', '11:00:00', 0, 201, 'CC', '1019877654', '0', '0'),
(373, 1, '2023-04-18', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(374, 1, '2023-04-18', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(375, 1, '2023-04-18', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(376, 1, '2023-04-18', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(377, 1, '2023-04-18', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(378, 1, '2023-04-18', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(379, 1, '2023-04-19', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(380, 1, '2023-04-19', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(381, 1, '2023-04-19', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(382, 1, '2023-04-19', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(383, 1, '2023-04-19', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(384, 1, '2023-04-19', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(385, 1, '2023-04-20', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(386, 1, '2023-04-20', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(387, 1, '2023-04-20', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(388, 1, '2023-04-20', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(389, 1, '2023-04-20', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(390, 1, '2023-04-20', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(391, 1, '2023-04-21', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(392, 1, '2023-04-21', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(393, 1, '2023-04-21', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(394, 1, '2023-04-21', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(395, 1, '2023-04-21', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(396, 1, '2023-04-21', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(397, 1, '2023-04-22', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(398, 1, '2023-04-22', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(399, 1, '2023-04-22', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(400, 1, '2023-04-22', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(401, 1, '2023-04-22', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(402, 1, '2023-04-22', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(403, 1, '2023-04-24', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(404, 1, '2023-04-24', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(405, 1, '2023-04-24', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(406, 1, '2023-04-24', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(407, 1, '2023-04-24', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(408, 1, '2023-04-24', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(409, 1, '2023-04-25', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(410, 1, '2023-04-25', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(411, 1, '2023-04-25', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(412, 1, '2023-04-25', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(413, 1, '2023-04-25', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(414, 1, '2023-04-25', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(415, 1, '2023-04-26', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(416, 1, '2023-04-26', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(417, 1, '2023-04-26', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(418, 1, '2023-04-26', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(419, 1, '2023-04-26', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(420, 1, '2023-04-26', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(421, 1, '2023-04-27', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(422, 1, '2023-04-27', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(423, 1, '2023-04-27', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(424, 1, '2023-04-27', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(425, 1, '2023-04-27', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(426, 1, '2023-04-27', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(427, 1, '2023-04-28', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(428, 1, '2023-04-28', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(429, 1, '2023-04-28', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(430, 1, '2023-04-28', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(431, 1, '2023-04-28', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(432, 1, '2023-04-28', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(433, 1, '2023-04-29', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(434, 1, '2023-04-29', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(435, 1, '2023-04-29', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(436, 1, '2023-04-29', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(437, 1, '2023-04-29', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(438, 1, '2023-04-29', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(439, 1, '2023-05-01', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(440, 1, '2023-05-01', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(441, 1, '2023-05-01', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(442, 1, '2023-05-01', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(443, 1, '2023-05-01', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(444, 1, '2023-05-01', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(445, 1, '2023-05-02', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(446, 1, '2023-05-02', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(447, 1, '2023-05-02', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(448, 1, '2023-05-02', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(449, 1, '2023-05-02', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(450, 1, '2023-05-02', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(451, 1, '2023-05-03', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(452, 1, '2023-05-03', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(453, 1, '2023-05-03', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(454, 1, '2023-05-03', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(455, 1, '2023-05-03', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(456, 1, '2023-05-03', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(457, 1, '2023-05-04', '06:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(458, 1, '2023-05-04', '07:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(459, 1, '2023-05-04', '08:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(460, 1, '2023-05-04', '09:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(461, 1, '2023-05-04', '10:00:00', 0, 205, 'CC', '1019877654', '0', '0'),
(462, 1, '2023-05-04', '11:00:00', 0, 205, 'CC', '1019877654', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `id` int(11) NOT NULL,
  `fk_tipo_c` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultorio`
--

INSERT INTO `consultorio` (`id`, `fk_tipo_c`) VALUES
(101, 3),
(102, 3),
(103, 4),
(104, 5),
(105, 5),
(201, 1),
(202, 2),
(203, 1),
(204, 2),
(205, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL,
  `nombreEspecialidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idEspecialidad`, `nombreEspecialidad`) VALUES
(0, 'Ninguna'),
(1, 'Medico General'),
(2, 'Psicologo'),
(4, 'Root'),
(5, 'Fisioterapeuta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observacion`
--

CREATE TABLE `observacion` (
  `id_observacion` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL,
  `observacion` varchar(1000) DEFAULT NULL,
  `soporte` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrsf`
--

CREATE TABLE `pqrsf` (
  `fk_pk_tipo_documentoU` varchar(10) NOT NULL,
  `documento_U` varchar(20) NOT NULL,
  `pNombre_U` varchar(30) NOT NULL,
  `sNombre_U` varchar(30) DEFAULT NULL,
  `pApellido_U` varchar(30) NOT NULL,
  `sApellido_U` varchar(30) DEFAULT NULL,
  `celular_U` bigint(20) NOT NULL,
  `telefono_U` bigint(20) DEFAULT NULL,
  `correoElectronico_U` varchar(45) NOT NULL,
  `fk_pk_idTipoPQRSF` int(11) NOT NULL,
  `NumeroRadicacion` int(11) NOT NULL,
  `fechaPQRSF` date NOT NULL,
  `motivoPQRSF` varchar(50) NOT NULL,
  `detallePQRSF` varchar(1000) NOT NULL,
  `soportePQRSF` varchar(100) DEFAULT NULL,
  `estadoPQRSF` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pqrsf`
--

INSERT INTO `pqrsf` (`fk_pk_tipo_documentoU`, `documento_U`, `pNombre_U`, `sNombre_U`, `pApellido_U`, `sApellido_U`, `celular_U`, `telefono_U`, `correoElectronico_U`, `fk_pk_idTipoPQRSF`, `NumeroRadicacion`, `fechaPQRSF`, `motivoPQRSF`, `detallePQRSF`, `soportePQRSF`, `estadoPQRSF`) VALUES
('CC', '281379387', 'Maria', 'José', 'Perez', 'Rojas', 3219787661, 7852456, 'maria32@outlook.com', 1, 1, '2021-06-04', 'No permite descargar informe	', 'El sistema no permite descargar el informe de la cita del día 03-06-2021', '', 1),
('CC', '281379387', 'Carlos', 'Emmanuel', 'Cruz', 'Ramirez', 3117865243, 7852755, 'caemcruz32@gmail.com', 2, 2, '2050-05-22', 'Buena interfaz del sistema', 'Felicitacion por la buena interfaz que tiene el sistema', '', 1),
('CC', '73937291', 'Alejandra', 'Maria', 'Vargas', 'Torres', 3058765432, 7254455, 'maleja67@gmail.com', 4, 3, '2021-07-15', 'Dificultades para obtener cita medica', 'Desde el dia 15-05-2050 no he podido programar una cita medica.', './assets/supports/pqrsf/221797538/archivo.pdf', 0),
('CC', '12673126', 'Tatiana', '', 'Ospina', 'Martinez', 3202876543, 72854855, 'taty999@gmail.com', 5, 4, '2021-07-15', 'Sugerencia de diseño	', 'La letra podria ser más grande para mayor visibilidad.', '', 1),
('CC', '281379387', 'Maria', 'José', 'Perez', 'Rojas', 3219787661, 7852456, 'maria32@outlook.com', 1, 1235, '2021-06-04', 'No permite descargar informe ', 'El sistema no permite descargar el informe de la cita del día 03-06-2021', '', 1),
('CC', '324432', '234324', '3432', '43243', '423324', 32132, 1322, 'hetoro@gmail.com', 1, 1236, '0234-04-28', '3212332', 'sadsads', '3792sppt.pdf', 0),
('CC', '324432', '234324', '3432', '43243', '423324', 32132, 1322, 'hetoro@gmail.com', 1, 1237, '0234-04-28', '3212332', 'sadsads', '7953sppt.pdf', 0),
('CC', '324432', '234324', '3432', '43243', '423324', 32132, 1322, 'hetoro@gmail.com', 1, 1238, '0234-04-28', '3212332', 'sadsads', '1762sppt.pdf', 0),
('CC', '324432', '234324', '3432', '43243', '423324', 32132, 1322, 'hetoro@gmail.com', 1, 1239, '0234-04-28', '3212332', 'sadsads', '2494sppt.pdf', 0),
('CC', '324432', '234324', '3432', '43243', '423324', 32132, 1322, 'hetoro@gmail.com', 1, 1240, '0234-04-28', '3212332', 'sadsads', '2494sppt.pdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `cod_rol` int(11) NOT NULL,
  `desc_rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`cod_rol`, `desc_rol`) VALUES
(1, 'Administrador'),
(2, 'Secretaria'),
(3, 'Doctor'),
(4, 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `tdd` varchar(3) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`tdd`, `descripcion`) VALUES
('CC', 'Cédula de Ciudadanía'),
('CE', 'Cédula de Extranjería'),
('TI', 'Tarjeta de Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopqrsf`
--

CREATE TABLE `tipopqrsf` (
  `idTipoPQRSF` int(11) NOT NULL,
  `TipoPQRSF` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipopqrsf`
--

INSERT INTO `tipopqrsf` (`idTipoPQRSF`, `TipoPQRSF`) VALUES
(1, 'Queja'),
(2, 'Felicitaciones'),
(3, 'Peticiones'),
(4, 'Reclamos'),
(5, 'Sugerencias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdecita`
--

CREATE TABLE `tiposdecita` (
  `idTiposCita` int(11) NOT NULL,
  `NombreTipoCita` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposdecita`
--

INSERT INTO `tiposdecita` (`idTiposCita`, `NombreTipoCita`) VALUES
(1, 'General'),
(2, 'Psicologo'),
(3, 'Fisioterapia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_consultorio`
--

CREATE TABLE `tipo_consultorio` (
  `id` int(11) NOT NULL,
  `tipo_consultorio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_consultorio`
--

INSERT INTO `tipo_consultorio` (`id`, `tipo_consultorio`) VALUES
(1, 'General'),
(2, 'Psicología'),
(3, 'Fisioterapia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `fk_pk_tipo_documentoU` varchar(10) NOT NULL,
  `documento_U` varchar(20) NOT NULL,
  `estado_U` tinyint(2) NOT NULL,
  `pNombre_U` varchar(30) NOT NULL,
  `sNombre_U` varchar(30) DEFAULT NULL,
  `pApellido_U` varchar(30) NOT NULL,
  `sApellido_U` varchar(30) DEFAULT NULL,
  `fechaNacimiento_U` date NOT NULL,
  `direccion_U` varchar(40) DEFAULT NULL,
  `correoElectronico_U` varchar(45) NOT NULL,
  `celular_U` bigint(20) NOT NULL,
  `eps_P` varchar(20) DEFAULT NULL,
  `especialidad_U` varchar(20) NOT NULL,
  `claveU` varchar(100) NOT NULL,
  `resp_preg` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`fk_pk_tipo_documentoU`, `documento_U`, `estado_U`, `pNombre_U`, `sNombre_U`, `pApellido_U`, `sApellido_U`, `fechaNacimiento_U`, `direccion_U`, `correoElectronico_U`, `celular_U`, `eps_P`, `especialidad_U`, `claveU`, `resp_preg`, `photo`, `pin`) VALUES
('CE', '1018726753', 1, 'Flor', '', 'Amaya', 'Arevalo', '1995-05-07', 'Cra 97c #47C - 78', 'arevalo45@arca.com', 3027685642, NULL, '1', '$2y$10$/j/28qjNGeKMO3jtqnAnm.6HNQgTYAeowcYLPDeUXWAr.8vEDysgC', NULL, 'assets/img/profileImages/0.png', ''),
('CC', '1019877654', 1, 'Jorge', '', 'Villa', 'Sanchez', '1993-10-09', 'Calle 10A #20-19', 'villa4032@arca.com', 3056786452, NULL, '1', '$2y$10$7HazEqANZ9bNUnsVfmdFkO7bMuBk0rQx0Gxb0l0q5xyZJtBeLJAKe', NULL, 'assets/img/profileImages/0.png', ''),
('CC', '102128331', 1, 'Santiago', '', 'Flores', 'Gomez', '1970-04-27', 'Calle 43 No. 27-13', 'flores3261@arca.com', 3145439850, NULL, '4', '$2y$10$g1iRUS5DBRfdT7wuTOsPaukj2C2UmZpSYefQaau1annF6SdsEe5Vm', NULL, 'assets/img/profileImages/0.png', ''),
('CE', '1022330333', 0, '', '', '', '', '2005-03-17', 'Kra 90B #49A-56 SUR', 'hetoro1703@gmail.com', 3132093326, NULL, '0', '$2y$10$GksB9gMv0SRqB1gbPfkfU.zUWGtJOnMEOovLR2Zufvj1TR3XiwE4y', 'NULL', 'assets/img/profileImages/0.png', ''),
('CC', '1023937291', 0, 'Alejandra', 'Maria', 'Vargas', 'Torres', '2006-12-20', 'Av. Ciudad de Cali No. 6C-31', 'maleja67@arca.com', 3058765432453453, 'Sura', '0', '$2y$10$EQGXqLDXoB3lBoD1aRs9Suc0kCPC29dJC/8lz/AS71NK2cWpBdPcG', 'Titan', 'assets/img/profileImages/0.png', ''),
('CC', '1040340344', 1, 'Martha', 'Cecilia', 'Fonseca', 'Acevedo', '2005-05-20', 'Av. Ciudad de Cali No. 9C-76', 'acevado@arca.com', 3145439851, NULL, '0', '$2y$10$W2r.jkPzRQgjpfeMUy7RCOeTNufvmNKCY/ZbdmSe69wpKtyOxPDoa', NULL, 'assets/img/profileImages/0.png', ''),
('CC', '1049204933', 1, 'Carlos', 'Manuel', 'Soler', 'Rosas', '1985-10-10', 'Calle 90B sur #13-27', 'soler52@arca.com', 3132095640, NULL, '0', '$2y$10$JOQU5kT0Kd7Ww3JnawCw5OH6Lu53cZtsO17o10vmmc/gnfiQB7bwq', NULL, 'assets/img/profileImages/0.png', ''),
('CC', '1111', 1, 'Admi', '', 'Nistrador', '', '2005-03-31', 'Casa de admin', 'admin@arca.com.co', 1111111111, NULL, '0', '$2y$10$H2TcBi/IgcQdqmc6bcJt9.vhRBHRGbk8Cyjq7HRBS6tkTjEvbsYk2', NULL, 'assets/img/profileImages/0.png', ''),
('TI', '1203827182', 0, 'Carlos', 'Emmanuel', 'Cruz', 'Ramirez', '2007-09-07', 'Calle 24 No 5-61', 'caemcruz32@gmail.com', 3117865243, 'Cafam', '', '$2y$10$hlK4opkjujY7MsZclQdlQ.ahVWJGQrGsUoaujPpsooEhrGfsoVdGm', 'Max', 'assets/img/profileImages/0.png', ''),
('TI', '12673126', 0, 'Tatiana', '', 'Ospina', 'Martinez', '1999-05-19', 'Avenida Cra. 60 No. 57-61', 'taty999@gmail.com', 3202876543, 'Sura', 'Ninguna', '$2y$10$PIO3Eu4IP.YNnSfmbzJZOuuK6icExluxQUc8wZXNN.FJ3JTYadGH6', 'Santa Marta', 'assets/img/profileImages/0.png', ''),
('CC', '2222', 1, 'Juana', 'María', 'Lopez', 'Hurtado', '1930-03-17', 'Kra 90B a', 'secretaria@arca.com.co', 5223343154, NULL, '0', '$2y$10$W3/l9EKOnGTtsT2gMEhfK.ugcUGCgn0pigJgO3wl3QMhaQLmqjTae', NULL, 'assets/img/profileImages/0.png', ''),
('TI', '281379387', 0, 'Maria', 'Jose', 'Perez', 'Rojas', '1999-03-11', 'Calle 11 No. 4 - 14', 'maria32@outlook.com', 3219787661435, 'Sanitas', 'Ninguna', '$2y$10$10ibIO5wkko7wAKPDMLGM.ctPJowzOkle0SASidkow2V2rth7HI/y', 'Bogotá', 'assets/img/profileImages/0.png', ''),
('CC', '3333', 1, 'Doctor', 'Doctor', 'Doctor', 'Doctor', '0000-00-00', 'Casa de doctor', 'doctor@arca.com.co', 3333333333, NULL, '2', '$2y$10$GZJW4p5ySZeTwxSzV1BNDO1vO..umi6yOPQ4EKnlTm1Ca97TvV7Li', NULL, 'assets/img/profileImages/0.png', ''),
('CC', '4444', 1, 'Paciente', 'Paciente', 'Paciente', 'Paciente', '2004-09-30', 'Casa de paciente', 'paciente@arca.com.co', 4444444444, NULL, '0', '$2y$10$y63N/EUMRlG/7X02UrnjP.B3qG57jfsiINU2hicFaHiTle.upgn8W', NULL, 'assets/img/profileImages/0.png', ''),
('CC', '52876456', 1, 'Juan', 'Daniel', 'Rojas', 'Diaz', '1974-02-25', 'Carrera 49B #60-50', 'rojas23@arca.com', 3024567687, NULL, '5', '$2y$10$830nYvRk/D4jsZu8HyRmKutrQW5pmQ/w7dXSgOEh2g1NE.RXxS6Au', NULL, 'assets/img/profileImages/0.png', ''),
('CC', '721827383', 1, 'Yeraldin', 'Marcela', 'Vega', 'Sanchez', '1994-12-08', 'Calle 45 No 60-32', 'vega4965@arca.com', 3145604949, NULL, '2', '$2y$10$fZFTAIq4WC35myUvSR22iesmXWGtlyUbYyfvjGyOtEaVNAc2sfJym', NULL, 'assets/img/profileImages/0.png', ''),
('CE', '748323632', 1, 'Pablo', 'Jose', 'Cortez', 'Blanco', '1983-04-06', 'Calle 48b sur No. 21-13', 'pablito73@outlook.com', 3129876543, 'Compensar', '0', '$2y$10$Qil1jf2Tp6d6QWGvJgPd3ehnH4fgIfl6.V0bUKz6ALQ04l.CsudOK', 'Bogota', 'assets/img/profileImages/0.png', ''),
('CC', '9876256', 1, 'Daniela', 'Maria', 'Beltran', 'Jimenez', '1967-11-06', 'Cra 90b #50A-12', 'beltran4051@arca.com', 3118765421, NULL, '2', '$2y$10$n7Mxis.g58Z9ajQAfjrtB.Ja7uwp3G0ZzG3HpkTJwGFBlRqeKMpj6', NULL, 'assets/img/profileImages/0.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_roles`
--

CREATE TABLE `usuario_has_roles` (
  `usuario_tdoc` varchar(10) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `usuario_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_has_roles`
--

INSERT INTO `usuario_has_roles` (`usuario_tdoc`, `usuario_id`, `usuario_rol`) VALUES
('CC', 1111, 1),
('CC', 2222, 2),
('CC', 3333, 3),
('CC', 4444, 4),
('CC', 9876256, 3),
('CC', 52876456, 3),
('CC', 102128331, 1),
('CC', 721827383, 3),
('CC', 1019877654, 3),
('CC', 1023937291, 4),
('CC', 1034586848, 2),
('CC', 1040340344, 1),
('CC', 1049204933, 2),
('CE', 748323632, 4),
('CE', 1018726753, 3),
('TI', 12673126, 4),
('TI', 281379387, 4),
('TI', 1022330332, 4),
('TI', 1203827182, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citasmedicas`
--
ALTER TABLE `citasmedicas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `observacion`
--
ALTER TABLE `observacion`
  ADD PRIMARY KEY (`id_observacion`);

--
-- Indices de la tabla `pqrsf`
--
ALTER TABLE `pqrsf`
  ADD PRIMARY KEY (`NumeroRadicacion`,`fk_pk_idTipoPQRSF`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`tdd`);

--
-- Indices de la tabla `tipopqrsf`
--
ALTER TABLE `tipopqrsf`
  ADD PRIMARY KEY (`idTipoPQRSF`);

--
-- Indices de la tabla `tiposdecita`
--
ALTER TABLE `tiposdecita`
  ADD PRIMARY KEY (`idTiposCita`);

--
-- Indices de la tabla `tipo_consultorio`
--
ALTER TABLE `tipo_consultorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento_U`,`fk_pk_tipo_documentoU`);

--
-- Indices de la tabla `usuario_has_roles`
--
ALTER TABLE `usuario_has_roles`
  ADD PRIMARY KEY (`usuario_tdoc`,`usuario_id`,`usuario_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citasmedicas`
--
ALTER TABLE `citasmedicas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `observacion`
--
ALTER TABLE `observacion`
  MODIFY `id_observacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pqrsf`
--
ALTER TABLE `pqrsf`
  MODIFY `NumeroRadicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1241;

--
-- AUTO_INCREMENT de la tabla `tipopqrsf`
--
ALTER TABLE `tipopqrsf`
  MODIFY `idTipoPQRSF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tiposdecita`
--
ALTER TABLE `tiposdecita`
  MODIFY `idTiposCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_consultorio`
--
ALTER TABLE `tipo_consultorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
