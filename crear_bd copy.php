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