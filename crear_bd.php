<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$nombreBaseDatos = "instituto";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $nombreBaseDatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// // Crear base de datos
// $sql = "CREATE DATABASE $nombreBaseDatos";
// if ($conn->query($sql) === TRUE) {
//     echo "Base de datos creada exitosamente";
// } else {
//     echo "Error al crear la base de datos: " . $conn->error;
// }

// Seleccionar la base de datos
// $conn->select_db($nombreBaseDatos);

// Crear la tabla "alumnos_nota"
$sql = "CREATE TABLE alumnos_nota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    identificacion VARCHAR(20) UNIQUE NOT NULL,
    nota DECIMAL(3,2) NOT NULL,
    cualificacionFinal ENUM('Aprobado', 'Suspenso', 'Notable', 'Sobresaliente') NOT NULL,
    INDEX idx_nombre (nombre),                 -- Crear índice para consultas por nombre --> sugerengia gemini
    INDEX idx_identificacion (identificacion)  -- Crear índice para consultas por identificación --> sugerengia gemini
  )";

  // Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table alumnos_notas created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql1 = "CREATE TABLE testing (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL
  )";

  // Execute the query
if ($conn->query($sql1) === TRUE) {
    echo "Table testing created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>