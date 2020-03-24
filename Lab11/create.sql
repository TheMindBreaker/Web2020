SET NAMES 'utf8';

USE BasesDeDatos;

DROP TABLE IF EXISTS Entregan;
DROP TABLE IF EXISTS Materiales;
DROP TABLE IF EXISTS Proveedores;
DROP TABLE IF EXISTS Proyectos;
USE BasesDeDatos;

CREATE TABLE Proyectos (
  proyectID int(11) NOT NULL,
  Denominación varchar(50) DEFAULT NULL
)
ENGINE = INNODB,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

CREATE TABLE Proveedores (
  RFC char(13) NOT NULL,
  Razon_Social varchar(50) DEFAULT NULL,
  PRIMARY KEY (RFC)
)
ENGINE = INNODB,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

CREATE TABLE Materiales (
  Clave decimal(10, 0) NOT NULL,
  Descripcion varchar(50) DEFAULT NULL,
  Costo decimal(8, 2) DEFAULT NULL,
  PRIMARY KEY (Clave)
)
ENGINE = INNODB,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

CREATE TABLE Entregan (
  Clave decimal(10, 0) NOT NULL,
  RFC char(13) DEFAULT NULL,
  proyectID decimal(10, 0) DEFAULT NULL,
  Fecha datetime DEFAULT NULL,
  Cantidad decimal(8, 2) DEFAULT NULL,
  PRIMARY KEY (Clave)
)
ENGINE = INNODB,
CHARACTER SET utf8,
COLLATE utf8_general_ci;
