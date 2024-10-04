CREATE DATABASE libreria;

USE libreria;
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    autor VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    editorial VARCHAR(255) NOT NULL
);


INSERT INTO libros (nombre, autor, precio, stock, editorial) VALUES 
('Cien años de soledad', 'Gabriel García Márquez', 9.99, 120, 'Editorial Sudamericana'),
('El nombre del viento', 'Patrick Rothfuss', 14.99, 80, 'Plaza & Janés'),
('La sombra del viento', 'Carlos Ruiz Zafón', 12.49, 100, 'Editorial Planeta');
