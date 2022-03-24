CREATE DATABASE uptex;

CREATE TABLE usuario (
nombre VARCHAR( 35 ) NOT NULL,
apellidos VARCHAR( 35 ) NOT NULL,
matricula VARCHAR( 13 ) NOT NULL,
correo VARCHAR( 30 ) NOT NULL,
telefono VARCHAR( 12 ) NOT NULL,
PRIMARY KEY (matricula)
);




