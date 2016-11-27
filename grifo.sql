CREATE TABLE IF NOT EXISTS `trabajador` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `apellidop` varchar(40) NOT NULL,
  `apellidom` varchar(40) NOT NULL,
  `dni` int(8) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `puesto` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
);



CREATE TABLE IF NOT EXISTS `ventas` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `gasolina` decimal(30,0) NOT NULL,
  `petroleo` decimal(30,0) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `boletaf` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `dni` varchar(100) NOT NULL,
  `ruc` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `dni` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `placa` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

