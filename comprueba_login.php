<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $user = $_POST["usuario"];
        $pass = $_POST["password"];

        function login($user, $pass) {
            $usuarios = [
                'admin' => password_hash('123', PASSWORD_DEFAULT),
                'profe' => password_hash('456', PASSWORD_DEFAULT),
                'secretaria' => password_hash('789', PASSWORD_DEFAULT)
            ];
        
            if (isset($usuarios[$user]) && password_verify($pass, $usuarios[$user])) {
                // Inicio de sesión exitoso
                session_start();
                $_SESSION['user_id'] = $user; // Puedes usar un ID ficticio aquí
                header("location:inicio.php");
                } else {
                header("location:index2.php");
                return false;
            }
        }

        login($user, $pass);

    ?>
    
</body>
</html>

