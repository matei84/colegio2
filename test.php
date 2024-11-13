<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>
    <h1>¡Bienvenido, <?php echo $_SESSION['user_id']; ?>!</h1>

    <?php
    // Mostrar un encabezado diferente según el usuario
    if ($_SESSION['user_id'] === "admin") {
        echo "Este es un mensaje especial para Admin.";
    } elseif ($_SESSION['user_id'] === "profe") {
        echo "Este es un mensaje especial para Profes.";

    } elseif ($_SESSION['user_id'] === "secretaria") {
        echo "Este es un mensaje especial para Secres.";
    }else {
        echo "Este es un mensaje general. Mensaje por default";
    }
    ?>
</body>
</html>