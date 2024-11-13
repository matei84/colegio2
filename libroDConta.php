<?php
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Registro Estudiantes</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/presupuesto.js"></script>

    </head>

    <body>
        <header>
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
            
        </header>
        <main>
            <div class="container-md">
                <h1 style="text-align:center">Libros de Contabilidad</h1>
                <form action="insertarBD/insertar_contabilidad.php" method="post">
                    <table class="table table-bordered border-black" id="LibroDiario">

                        <thead>
                            <tr>
                                <th scope="col">Fechas</th>
                                <th scope="col">Cuentas</th>
                                <th scope="col">Debe</th>
                                <th scope="col">Haber</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div style="margin-top:15px">
                            <button type="button" class="btn btn-primary" onclick="addAccountingEntry()">Entrada contable</button>
                            <button type="button" class="btn btn-primary" onclick="">Modificar</button>
                            <input type="submit" class="btn btn-primary" name= "submit" value="Registro en BD" >
                    </div>
                </form>
            </div>

        </main>
        <footer>
            
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

    </body>

</html>
