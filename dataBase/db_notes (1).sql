-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 07:53:31
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_notes`
--
CREATE DATABASE IF NOT EXISTS `db_notes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `db_notes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academic_data`
--

CREATE TABLE IF NOT EXISTS `academic_data` (
  `id_user` int(11) NOT NULL,
  `institution_name` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `profession` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `months_duration` int(2) NOT NULL,
  `star_date` date NOT NULL,
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periods`
--

CREATE TABLE IF NOT EXISTS `periods` (
  `id_user` int(11) NOT NULL,
  `id_period` int(11) NOT NULL AUTO_INCREMENT,
  `cod_period` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id_period`),
  UNIQUE KEY `cod_period` (`cod_period`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id_subject` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `approval_note` double(3,2) NOT NULL,
  `professor_name` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_subject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects_studied`
--

CREATE TABLE IF NOT EXISTS `subjects_studied` (
  `id_period` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_subject_studied` int(11) NOT NULL,
  PRIMARY KEY (`id_subject_studied`),
  KEY `id_period` (`id_period`),
  KEY `id_subject` (`id_subject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id_task` int(11) NOT NULL AUTO_INCREMENT,
  `id_subject_studied` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `subject_note` double(3,2) NOT NULL,
  `deliver_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_task`),
  KEY `id_subject_studied` (`id_subject_studied`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks_ends`
--

CREATE TABLE IF NOT EXISTS `tasks_ends` (
  `id_task` int(11) NOT NULL,
  `id_task_end` int(11) NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `exam_note` double(3,2) NOT NULL,
  PRIMARY KEY (`id_task_end`),
  KEY `id_task` (`id_task`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(16) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `date_birth` date NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
