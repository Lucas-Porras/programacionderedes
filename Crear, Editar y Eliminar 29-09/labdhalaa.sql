-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2023 a las 00:30:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `labdhalaa`
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
(1, 'Luquitas', 'purosgratis@gmaill.com', '1234', '2023-10-06 22:16:42', NULL, '2023-10-06 22:22:09'),
(2, 'Reellenoh', 'Relleno@mail.com', '12344', '2023-10-06 22:25:28', '2023-10-06 22:27:15', NULL);

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
(2, 'fff', 'Relleno2', 'Relleno@mail.com', '12344', 2147483647, 'Lolos omg', 'Relleno 654', 'www.relleno.com', '1999-02-05', 'Lorem Ipusm', 'Reellenoh');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
