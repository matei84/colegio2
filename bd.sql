-- Active: 1730108466526@@127.0.0.1@3306@academia
CREATE DATABASE instituto;

use instituto;

CREATE TABLE alumnos_nota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    identificacion VARCHAR(20) UNIQUE,
    nota DECIMAL(3,2),
    cualificacionFinal VARCHAR(7),
    INDEX idx_nombre (nombre),                 -- Crear índice para consultas por nombre --> sugerengia gemini
    INDEX idx_identificacion (identificacion) 
);

CREATE TABLE contabilidadInstituto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fechas DATE DEFAULT CURRENT_DATE, 
    bankingAccount VARCHAR(20) NOT NULL,
    debe VARCHAR(20) NOT NULL,
    haber VARCHAR(20) NOT NULL
);

-- INSERT INTO usuarios (id, nombre, email, fecha_registro) 
-- VALUES (NULL, "Juan", "juan@ejemplo.com", NOW()); CURDATE()







select *
FROM alumnos_notas;

  