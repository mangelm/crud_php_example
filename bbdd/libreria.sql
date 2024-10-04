CREATE DATABASE libreria;

USE libreria;
CREATE TABLE libro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    autor VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    editorial VARCHAR(255) NOT NULL,
);