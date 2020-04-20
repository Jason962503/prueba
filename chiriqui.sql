-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-10-2018 a las 18:56:58
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30


CREATE DATABASE chiriqui;


CREATE TABLE chiriqui.`paquetes` (
  `id_Paquete` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nombre` varchar(32) NOT NULL,
  `Precio` varchar(32) NOT NULL,
  `Duracion` varchar(50) NOT NULL,
  `Disponible` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO chiriqui.`paquetes` (`id_Paquete`, `Nombre`, `Precio`, `Duracion`, `Disponible`) VALUES
(1, 'Paquete Tierras altas', '$800', '2 Semanas', 'Si'),
(2, 'Paquete Playas', '$900', '2 Semanas', 'Si'),
(3, 'Paquete Cultura Indigena', '$400', '1 Semana', 'Si');


CREATE TABLE chiriqui.`paquetes2` (
  `id_Paquete` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nombre` varchar(32) NOT NULL,
  `Precio` varchar(32) NOT NULL,
  `Duracion` varchar(50) NOT NULL,
  `Disponible` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO chiriqui.`paquetes2` (`id_Paquete`, `Nombre`, `Precio`, `Duracion`, `Disponible`) VALUES
(1, 'High lands Package', '$800', '2 weeks', 'Yes'),
(2, 'Beach pakages', '$900', '2 weeks', 'Yes'),
(3, 'Native culture package', '$400', '1 week', 'Yes');

