CREATE DATABASE paquetes;


CREATE TABLE paquetes.`paquete1` (
  `id` int(8) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `telefono` int(24) NOT NULL,
  `correo` varchar(90) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE paquetes.`paquete2` (
  `id` int(8) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `telefono` int(24) NOT NULL,
  `correo` varchar(90) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE paquetes.`paquete3` (
  `id` int(8) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `telefono` int(24) NOT NULL,
  `correo` varchar(90) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;