<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instituto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);


// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  
  
  } else {
      echo "Connected successfully";
  }
  

// Crear la tabla "profesores"
$sql = "CREATE TABLE profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    identificacion VARCHAR(50),
    asignatura VARCHAR(50)
  )";

if ($conn->query($sql) === TRUE) {
    echo "Tabla test1 creada correctamente";
  } else {
    echo "Error al crear la tabla: " . $conn->error;
  }

$conn->close();
?>