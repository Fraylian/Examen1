CREATE DATABASE registro_tardanzas;

USE registro_tardanzas;

CREATE TABLE tardanzas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    matricula VARCHAR(10) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    curso VARCHAR(20) NOT NULL,
    motivo TEXT NOT NULL,
    fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
