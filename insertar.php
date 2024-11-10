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
// $nombre = $_POST['nombre'];
// Preparar la sentencia SQL
// $sql = "INSERT INTO testing (nombre) VALUES (?)";


// $stmt = $conn->prepare($sql);
// $stmt->bind_param("s", $nombre);


// Obtener datos del formulario
$nombre = $_REQUEST['nombre'];
$identificacion = $_REQUEST['identificacion'];
$nota = $_REQUEST['nota'];
$cualificacionFinal = $_REQUEST['cualificacionFinal'];

// Preparar la sentencia SQL
$sql = "INSERT INTO alumnos_nota (nombre, identificacion, nota, cualificacionFinal) 
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssds", $nombre, $identificacion, $nota, $cualificacionFinal);


// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Nuevo registro creado correctamente";
    header('Location:registro_notas.php');
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>