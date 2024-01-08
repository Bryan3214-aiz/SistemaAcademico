-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2023 a las 02:22:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectobvt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `actividad_id` int(11) NOT NULL,
  `nombre_actividad` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `alumno_id` int(11) NOT NULL,
  `nombre_alumno` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha_nac` date NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`alumno_id`, `nombre_alumno`, `edad`, `direccion`, `cedula`, `telefono`, `correo`, `fecha_nac`, `fecha_registro`, `estado`) VALUES
(4, 'brandon', 10, 'CALLE 10, BAJO PIUSES, ALAMEDA 2, CASA DE COLOR ROSADO CON PORTÓN NEGRO.', '123456', 72211842, 'lia@gmail.com', '2023-12-14', '2023-12-20 21:00:28', 1),
(13, 'brayan', 10, 'CALLE 10, BAJO PIUSES, ALAMEDA 2, CASA DE COLOR ROSADO CON PORTÓN NEGRO.', '123456', 72211842, 'liadsad@gmail.com', '2023-12-30', '2023-12-20 21:57:01', 1),
(21, 'Sofía', 18, 'Calle 1, Ciudad', '112233A', 123456789, 'sofia@email.com', '2005-05-10', '2023-01-15 06:00:00', 1),
(22, 'Luis', 17, 'Avenida 2, Pueblo', '223344B', 987654321, 'luis@email.com', '2006-07-20', '2023-02-20 06:00:00', 1),
(23, 'Marta', 16, 'Calle 3, Ciudad', '334455C', 987123456, 'marta@email.com', '2007-09-25', '2023-03-25 06:00:00', 1),
(24, 'Jorge', 18, 'Avenida 4, Pueblo', '445566D', 654123789, 'jorge@email.com', '2005-11-30', '2023-04-30 06:00:00', 1),
(33, 'brayan', 10, 'CALLE 10, BAJO PIUSES, ALAMEDA 2, CASA DE COLOR ROSADO CON PORTÓN NEGRO.', '123456', 72211842, 'liadsad@gmail.com', '2010-01-21', '2023-12-21 00:34:51', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `aula_id` int(11) NOT NULL,
  `nombre_aula` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ausencia`
--

CREATE TABLE `ausencia` (
  `id` int(11) NOT NULL,
  `nombre_profesor` varchar(100) DEFAULT NULL,
  `nombre_alumno` varchar(100) DEFAULT NULL,
  `motivo` text DEFAULT NULL,
  `justificada` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ausencia`
--

INSERT INTO `ausencia` (`id`, `nombre_profesor`, `nombre_alumno`, `motivo`, `justificada`) VALUES
(1, 'Ana', 'Marta', 'Enfermedad', 'Justificada'),
(2, 'Carlos', 'Luis', 'Cita médica', 'No justificada'),
(3, 'Elena', 'Sofía', 'Emergencia familiar', 'Justificada'),
(4, 'David', 'Jorge', 'Dentista', 'No justificada'),
(5, 'Laura', 'Pedro', 'Fiebre', 'Justificada'),
(6, 'Ana', 'Marta', 'Dolor de cabeza', 'No justificada'),
(7, 'Carlos', 'Luis', 'Problemas de transporte', 'Justificada'),
(8, 'Elena', 'Sofía', 'Falta de energía', 'No justificada'),
(9, 'David', 'Jorge', 'Asuntos familiares', 'Justificada'),
(10, 'Laura', 'Pedro', 'Distracción', 'No justificada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `calificacion_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `grado_id` int(11) NOT NULL,
  `nombre_grado` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `profesor` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `dia` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `horario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`profesor`, `curso`, `dia`, `horario`) VALUES
('Ana', 'Matemáticas', 'Lunes', '8:00-10:00'),
('Carlos', 'Física', 'Martes', '10:00-12:00'),
('Elena', 'Química', 'Miércoles', '12:00-14:00'),
('David', 'Biología', 'Jueves', '14:00-16:00'),
('Laura', 'Historia', 'Viernes', '16:00-18:00'),
('Pedro', 'Literatura', 'Lunes', '10:00-12:00'),
('Sofía', 'Filosofía', 'Martes', '12:00-14:00'),
('Luis', 'Geografía', 'Miércoles', '14:00-16:00'),
('Marta', 'Inglés', 'Jueves', '16:00-18:00'),
('Jorge', 'Francés', 'Viernes', '8:00-10:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `materia_id` int(11) NOT NULL,
  `nombre_materia` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `nota_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `actividad_id` int(11) NOT NULL,
  `valor_nota` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `periodo_id` int(11) NOT NULL,
  `nombre_periodo` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `profesor_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nivel_est` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`profesor_id`, `nombre`, `direccion`, `cedula`, `telefono`, `correo`, `nivel_est`, `estado`) VALUES
(21, 'YESENIA', 'CALLE 10, BAJO PIUSES, ALAMEDA 2, CASA DE COLOR ROSADO CON PORTÓN NEGRO.', '123456', 72211842, 'jesenia@gmail.com', 'licenciada', 1),
(35, 'Antonio', 'Tibas', '123456', 72211842, 'lia@gmail.com', 'licenciado', 1),
(49, 'LIAM GAEL', 'Tibas', '123456', 72211842, 'xsadsa@gmail.com', 'licenciado', 1),
(53, 'Leonardo', 'Tibas', '32432423', 721172732, 'leo@gmail.com', 'Licenciado', 1),
(54, 'Tomas ', 'Cartago', '3243223', 43243242, 'tomas@gmail.com', 'Maestria', 1),
(55, 'Ana', 'Cartago', '11223344', 123456789, 'ana@email.com', 'Doctorado', 1),
(67, 'Bryan ', 'Calle los alpes 210', '123456', 4343333434, 'xsadsa@gmail.com', 'licenciado en tecnologia', 1),
(68, 'Royner Luna', 'Tibas', '123456', 4343333434, 'luna@gmail.com', 'licenciado en tecnologia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `ape1` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ape2` varchar(150) NOT NULL,
  `tipo_usuario` int(1) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `ape1`, `ape2`, `tipo_usuario`, `correo`, `pass`, `fecha_creacion`) VALUES
(12, 'admin', 'demo', 'demo', 3, 'admin@gmail.com', '061fecc11722d4ab5ca53687f12279a2', '2023-11-29 11:28:14'),
(13, 'Bryan ', 'Leiva ', 'Mejía', 1, 'mejiabryan855@gmail.com', '7e4616bf62e28da292e872b703dd88fe', '2023-11-29 11:30:05'),
(21, 'Yesenia', 'Mejia', 'Mejía', 2, 'jeseniamejia416@gmail.com', '759bb1b23151ec9571b7157b8c7b19b3', '2023-12-14 08:18:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`actividad_id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`alumno_id`);

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`aula_id`);

--
-- Indices de la tabla `ausencia`
--
ALTER TABLE `ausencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`calificacion_id`),
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `periodo_id` (`periodo_id`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`grado_id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`materia_id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`nota_id`),
  ADD KEY `materia_id` (`materia_id`),
  ADD KEY `alumno_id` (`alumno_id`),
  ADD KEY `actividad_id` (`actividad_id`),
  ADD KEY `periodo_id` (`periodo_id`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`periodo_id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`profesor_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `actividad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `alumno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `aula_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ausencia`
--
ALTER TABLE `ausencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `calificacion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `grado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `materia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `nota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `periodo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `profesor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`materia_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`alumno_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_3` FOREIGN KEY (`actividad_id`) REFERENCES `actividad` (`actividad_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_4` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`periodo_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
