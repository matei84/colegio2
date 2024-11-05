<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$nombreBaseDatos = "instituto";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear base de datos
$sql = "CREATE DATABASE $nombreBaseDatos";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
