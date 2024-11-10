-- Active: 1730108466526@@127.0.0.1@3306@academia
CREATE DATABASE instituto;

use instituto;

-- CREATE TABLE alumnos_notas(
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   nombre VARCHAR(50),
--   identificacion VARCHAR(5),
--   nota INT(2),
--   cualificacionFinal BOOLEAN
--   );

CREATE TABLE alumnos_nota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    identificacion VARCHAR(20) UNIQUE,
    nota DECIMAL(3,2),
    cualificacionFinal VARCHAR(7),
    INDEX idx_nombre (nombre),                 -- Crear índice para consultas por nombre --> sugerengia gemini
    INDEX idx_identificacion (identificacion) 
);

select *
FROM alumnos_notas;

  