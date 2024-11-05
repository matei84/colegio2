<?php
$conexion = mysqli_connect("localhost", "root", "", "instituto") or die("problema con la conexion");

$sql= "INSERT INTO alumnos_notas(nombre, identificacion, nota, calificacionFinal) 
    VALUES (
    '".$_REQUEST['nombre']."', 
    '".$_REQUEST['identificacion']."', 
    '".$_REQUEST['nota']."', 
    '".$_REQUEST['calificacion']."'
    )";


mysqli_query($conexion, $sql) or die("problema en el select" . mysqli_error($conexion));

mysqli_close($conexion);

header('Location:registro_notas.php');

?>