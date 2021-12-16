-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2021 a las 00:39:40
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_notes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academic_data`
--

CREATE TABLE `academic_data` (
  `id_user` int(11) NOT NULL,
  `institution_name` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `profession` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `months_duration` int(2) NOT NULL,
  `star_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `academic_data`
--

INSERT INTO `academic_data` (`id_user`, `institution_name`, `profession`, `title`, `months_duration`, `star_date`) VALUES
(2, 'Instituto Universitario Jesus Obrero', 'Informatica', 'tecnico superior', 36, '2019-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periods`
--

CREATE TABLE `periods` (
  `id_user` int(11) NOT NULL,
  `id_period` int(11) NOT NULL,
  `cod_period` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `periods`
--

INSERT INTO `periods` (`id_user`, `id_period`, `cod_period`, `start_date`, `end_date`) VALUES
(2, 1, '2021-2', '2021-12-16', '2027-12-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `id_subject` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `approval_note` double(5,2) NOT NULL,
  `professor_name` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`id_subject`, `name`, `approval_note`, `professor_name`) VALUES
(2, 'matematicas', 10.00, 'maureen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects_studied`
--

CREATE TABLE `subjects_studied` (
  `id_period` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_subject_studied` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `subjects_studied`
--

INSERT INTO `subjects_studied` (`id_period`, `id_subject`, `id_subject_studied`) VALUES
(1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id_task` int(11) NOT NULL,
  `id_subject_studied` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `subject_note` double(5,2) NOT NULL,
  `deliver_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `n_corte` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`id_task`, `id_subject_studied`, `name`, `description`, `subject_note`, `deliver_date`, `n_corte`) VALUES
(1, 2, 'entrega taller', 'entrega taller sql', 1.20, '2021-12-14 04:12:17', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks_ends`
--

CREATE TABLE `tasks_ends` (
  `id_task` int(11) NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `exam_note` double(5,2) NOT NULL,
  `id_task_end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tasks_ends`
--

INSERT INTO `tasks_ends` (`id_task`, `url`, `exam_note`, `id_task_end`) VALUES
(1, './tareas/tarea.doc', 9.99, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`) VALUES
(2, 'miguelromeroelgordo@gmail.com', 'h28493312');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_data`
--

CREATE TABLE `user_data` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `date_birth` date NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `user_data`
--

INSERT INTO `user_data` (`id_user`, `first_name`, `last_name`, `date_birth`, `gender`) VALUES
(2, 'heyscar', 'romero', '2000-08-21', 'm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academic_data`
--
ALTER TABLE `academic_data`
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `periods`
--
ALTER TABLE `periods`
  ADD PRIMARY KEY (`id_period`),
  ADD UNIQUE KEY `cod_period` (`cod_period`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indices de la tabla `subjects_studied`
--
ALTER TABLE `subjects_studied`
  ADD PRIMARY KEY (`id_subject_studied`),
  ADD KEY `id_period` (`id_period`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `id_subject_studied` (`id_subject_studied`);

--
-- Indices de la tabla `tasks_ends`
--
ALTER TABLE `tasks_ends`
  ADD PRIMARY KEY (`id_task_end`),
  ADD KEY `id_task` (`id_task`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `user_data`
--
ALTER TABLE `user_data`
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `periods`
--
ALTER TABLE `periods`
  MODIFY `id_period` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `subjects_studied`
--
ALTER TABLE `subjects_studied`
  MODIFY `id_subject_studied` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tasks_ends`
--
ALTER TABLE `tasks_ends`
  MODIFY `id_task_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `academic_data`
--
ALTER TABLE `academic_data`
  ADD CONSTRAINT `academic_data_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `periods`
--
ALTER TABLE `periods`
  ADD CONSTRAINT `periods_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `subjects_studied`
--
ALTER TABLE `subjects_studied`
  ADD CONSTRAINT `subjects_studied_ibfk_1` FOREIGN KEY (`id_period`) REFERENCES `periods` (`id_period`),
  ADD CONSTRAINT `subjects_studied_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Filtros para la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`id_subject_studied`) REFERENCES `subjects_studied` (`id_subject_studied`);

--
-- Filtros para la tabla `tasks_ends`
--
ALTER TABLE `tasks_ends`
  ADD CONSTRAINT `tasks_ends_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `tasks` (`id_task`);

--
-- Filtros para la tabla `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
