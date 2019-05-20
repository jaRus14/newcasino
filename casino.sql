-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2018 a las 17:34:35
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- BASE DE DATOS: `casino` 

-- FICHAS --

-- Estructura de tabla para la tabla `fichasCasino`
CREATE TABLE `fichascasino` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` int(10) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcado de datos para la tabla `fichascasino`
INSERT INTO `fichascasino` (`id`, `nombre`, `precio`, `imagen`) VALUES
(1, 'Ficha De 100', '100', '../web/img/imagenesHome/fichacien.jpg'),
(2, 'Ficha De 500', '500', '../web/img/imagenesHome/fichaquinientos.jpg'),
(3, 'Ficha De 1000', '1000', '../web/img/imagenesHome/fichamil.jpg');
-- Índices para tablas volcadas

-- Indices de la tabla `fichascasino`
ALTER TABLE `fichascasino` ADD PRIMARY KEY (`id`);
-- AUTO_INCREMENT de las tablas volcadas

-- AUTO_INCREMENT de la tabla `fichasCasino`
ALTER TABLE `fichascasino` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- USUARIOS --

-- Estructura de tabla para la tabla `usuarios`
CREATE TABLE usuarios ( 
	id INT(4) NOT NULL AUTO_INCREMENT , 
	nombre VARCHAR(35) , 
	apellido VARCHAR(35) , 
	correo VARCHAR(100) NOT NULL , 
	fichas INT(9) , 
	contrasenna VARCHAR(30) NOT NULL , 
	CONSTRAINT CLAVE_UNICA_CORREO UNIQUE (correo),
	PRIMARY KEY (id) 
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

-- usuarios --
INSERT INTO usuarios (nombre, apellido, correo, fichas, contrasenna) VALUES
('carlos', 'de', 'carlosde@gmail.com', '1500', '1234'),
('fran', 'ru', 'franru@gmail.com', '2500', '1234'),
('javi', 'vi', 'javivi@gmail.com', '3500', '1234');
