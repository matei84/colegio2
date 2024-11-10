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
    die("Conexión fallida: " . $conn->connect_error);
}

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


<!-- 
$sql= "INSERT INTO alumnos_nota(nombre, identificacion, nota, cualificacionFinal) 
     VALUES (
     '".$_REQUEST['nombre']."', 
     '".$_REQUEST['identificacion']."', 
     '".$_REQUEST['nota']."', 
     '".$_REQUEST['cualificacionFinal']."'
     )";

$sql = "INSERT INTO alumnos_nota (nombre, identificacion, nota, cualificacionFinal) 
        VALUES (?, ?, ?, ?)";


mysqli_stmt_close($stmt); -->



<!-- 
// $sql= "SELECT * FROM alumnos_nota";

// $fila=mysql_fetch_row($resultados);

// echo $fila[0];

 $fila=mysql_fetch_row($resultados);

echo $fila[0];

// echo  $_REQUEST['nombre'];
// echo  $_REQUEST['identificacion']; 
// echo  $_REQUEST['nota'];
// echo  $_REQUEST['cualificacionFinal']; -->