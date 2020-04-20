CREATE DATABASE tour;

CREATE TABLE tour.`clientes` (
  `id` int(8) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `telefono` int(24) NOT NULL,
  `correo` varchar(90) NOT NULL UNIQUE,
  `contra` varchar(192) NOT NULL,
  `amigo` varchar(192) NOT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=utf8;