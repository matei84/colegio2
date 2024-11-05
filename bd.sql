-- Active: 1730108466526@@127.0.0.1@3306@academia
CREATE DATABASE instituto;

use instituto;

CREATE TABLE alumnos_notas(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  identificacion VARCHAR(5),
  nota INT(2),
  cualificacionFinal BOOLEAN
  );

select *
FROM alumnos_notas;

  