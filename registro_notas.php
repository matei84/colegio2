<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Registro Notas</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/funciones.js"></script>

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

            <div class="container" style="margin-top: 20px;">               
                <h1 style="text-align:center">Registro de Notas</h1>

                <button type="button" class="btn btn-primary">IFC2365</button>
                <button type="button" class="btn btn-primary">IFC2366</button>
                <button type="button" class="btn btn-primary">IFC2367</button>

            </div> 

            <form action="insertarBD/insertar_notas.php" method="post">
        
                <div class="container" style="margin-top: 50px; border:2px solid black;">
                
                    <table>
                        <thead>
                                <tr>
                                    <th scope="col"> Modulos </th>
                                    <th scope="col"> Hora Modulos </th>
                                    <th scope="col"> Nota Final </th>
                                </tr>
                        </thead>

                        <tbody>
                            <tr class="table table-primary">
                                <td scope="row"> MF0950_2: Construccion de paginas web </td>
                                <td> 210 Horas </td>
                                <td id="nota1" name="nota1"> Nota por asignar </td>
                            </tr>

                            <tr class="table table-primary">
                                <td scope="row"> MF0951_2: Integracion componentes de software </td>
                                <td> 180 Horas </td>
                                <td id="nota2" name="nota2"> Nota por asignar </td>
                            </tr>

                            <tr class="table table-primary">
                                <td scope="row"> MF0952_2: Publicacion de paginas Web: </td>
                                <td> 90 Horas </td>
                                <td id="nota3" name="nota3"> Nota por asignar </td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th scope="row" colspan="2">Nota Promedio</th>
                                <td id="">                         
                                    <input type="text" name="nota" id="nota" required>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                
                    <button type="button" class="btn btn-primary" onclick="calculoNotas()">Calculo de Notas</button>

                    <button type="button" class="btn btn-primary" onclick="ResetNotas()"> Borrar </button> 
                </div>
                
                <div class="container" style="border: 2px solid black; margin-top:50px">

                    <label for="nombreEstudiante" style="width: 200px">
                        <span> Nombre del estudiante </span>              
                        <input type="text" name="nombre"  id="nombrEstudiante" 
                                placeholder="Nombre del estudiante" required>
                                  
                    </label>

                    <label for="identificacion" style="width: 200px;">
                        <span>Identificacion</span>              
                        <input type="text" name="identificacion" id="identificacion" 
                        placeholder="ID"  required>
                        
                    </label>

                    <label for="calificacion" style="width: 200px">
                    <span>Calificacion</span>
                    <select style="float:right" name="cualificacionFinal" id="cualificacionFinal">
                        <option value="Aprobado"> Aprobado </option>
                        <option value="Suspenso"> Suspenso </option>
                        <option value="Notable"> Notable </option>
                        <option value="Sobresaliente"> Sobresaliente </option>
                    </select>
                    </label>

                    <input type="submit" class="btn btn-primary" name= "submit" value="Guardar" >

                    <input type="reset" class="btn btn-primary" value="Reset" />

                </div>

            </form>
           
        </main>
        <footer>
            <?php 
            include 'log/footer.php';?>
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