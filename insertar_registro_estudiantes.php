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
$nombre = $_REQUEST['nombreEstudiante'];
$apellido = $_REQUEST['apellidoEstudiante'];
$identificacion = $_REQUEST['DNIEstudiante'];
$correo = $_REQUEST['correoEstudiante'];
$nombre_asignatura = $_REQUEST['nombre_asignatura'];
$horarioCurso = $_REQUEST['horarioCurso'];
$modalidadClase = $_REQUEST['modalidadClase'];
$observaciones = $_REQUEST['observaciones'];

// Preparar la sentencia SQL
$sql = "INSERT INTO registro_estudiante (nombre, apellido, identificacion, correo_electronico, asignatura, horario, modalidad_clases, observaciones) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $nombre, $apellido, $identificacion, $correo, $nombre_asignatura, $horarioCurso, $modalidadClase, $observaciones);


// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Nuevo registro creado correctamente";
    header('Location:registro_estudiantes.php');
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


<!-- Mejoras:
que no permita que no correos electronicos sin @ puedan viajar. -->