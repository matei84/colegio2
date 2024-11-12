-- Active: 1730108466526@@127.0.0.1@3306@academia
CREATE DATABASE instituto;

use instituto;

CREATE TABLE registro_profesor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(15) NOT NULL,
    apellido VARCHAR(15) NOT NULL,
    correo_electronico VARCHAR(20) NOT NULL,
    telefono VARCHAR(9) NOT NULL,
    asignatura VARCHAR(30) NOT NULL, -- Para mejorar cambiar el tipò de dato a ENUM
    horario VARCHAR(15) NOT NULL, -- Para mejorar cambiar el tipò de dato a ENUM
    observaciones VARCHAR(30)
     
);

CREATE TABLE registro_estudiante (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(15) NOT NULL,
    apellido VARCHAR(15) NOT NULL,
    identificacion VARCHAR(15) NOT NULL,
    correo_electronico VARCHAR(20) NOT NULL,
    asignatura VARCHAR(30) NOT NULL, -- Para mejorar cambiar el tipò de dato a ENUM
    horario VARCHAR(15) NOT NULL, -- Para mejorar cambiar el tipò de dato a ENUM
    modalidad_clases VARCHAR(12) NOT NULL,
    observaciones VARCHAR(30)
     
);
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

  