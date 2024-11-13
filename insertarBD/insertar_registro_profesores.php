<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instituto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_REQUEST['nombreProfe'];
$apellidoProfe = $_REQUEST['apellidoProfe'];
$correoProfesor = $_REQUEST['correoProfesor'];
$telefonoProfe = $_REQUEST['telefonoProfe'];
$nombre_asignatura = $_REQUEST['nombre_asignatura'];
$horarioCurso = $_REQUEST['horarioCurso'];
$observaciones = $_REQUEST['observaciones'];

// Preparar la sentencia SQL
$sql = "INSERT INTO registro_profesor (nombre, apellido, correo_electronico, telefono, asignatura, horario, observaciones) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $nombre, $apellidoProfe, $correoProfesor, $telefonoProfe, $nombre_asignatura, $horarioCurso,$observaciones);


// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Nuevo registro creado correctamente";
    header('Location:registro_profesor.php');
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


<!-- Mejoras:
que no permita que no correos electronicos sin @ puedan viajar. -->