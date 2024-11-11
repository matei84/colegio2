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
$cuentas = $_REQUEST['cuentas'];
$debe = $_REQUEST['debe'];
$haber = $_REQUEST['haber'];

print_r($_REQUEST); 

echo $_REQUEST['cuentas'];

$fecha= date("Y-m-d");

// Preparar la sentencia SQL
$sql = "INSERT INTO contabilidadinstituto (fechas, bankingAccount, debe, haber) 
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fecha, $cuentas, $debe, $haber);


// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Nuevo registro creado correctamente";
    header('Location:libroDiarioContable.php');
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>