-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2023 a las 00:07:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nick` varchar(256) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `Created_At` timestamp NULL DEFAULT NULL,
  `Updated_At` timestamp NULL DEFAULT NULL,
  `Deleted_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nick`, `mail`, `pwd`, `Created_At`, `Updated_At`, `Deleted_At`) VALUES
(1, 'Luquitas', 'abdhalalucas@gmail.com', '1234', '2023-09-29 14:53:01', NULL, '2023-09-29 15:26:09'),
(2, 'Lolinho', 'lolito@mail.com', '1234', '2023-09-29 15:54:37', '2023-09-29 16:14:29', '2023-09-29 16:15:14'),
(3, 'Intoxicados', 'vbsfdbsdf', '213', '2023-09-29 16:56:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `phonename` int(11) NOT NULL,
  `company` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `web` varchar(256) NOT NULL,
  `bdate` date NOT NULL,
  `label_varchar` varchar(256) NOT NULL,
  `nick` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `surname`, `email`, `pwd`, `phonename`, `company`, `address`, `web`, `bdate`, `label_varchar`, `nick`) VALUES
(3, 'asdfa', 'vdfvdfs', 'vbsfdbsdf', '213', 124324, 'asdac', 'xzdas', 'aaaa', '1000-04-02', 'xxxxxxxx', 'Intoxicados');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
