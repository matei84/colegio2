<?php
                    // Mostrar un encabezado diferente según el usuario
                    if ($_SESSION['user_id'] === "admin") {
                        include 'log/header.php';
                    } elseif ($_SESSION['user_id'] === "profe") {
                        include 'log/headerProfesores.php';

                    } elseif ($_SESSION['user_id'] === "secretaria") {
                        include 'log/headerSecretaria.php';
                    }else {
                    echo "Este es un mensaje general. Mensaje por default";
                    }
                ?> 
