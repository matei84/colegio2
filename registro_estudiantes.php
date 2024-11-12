<!doctype html>
<html lang="en">
    <head>
        <title>Registro Profesores</title>
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

    </head>

    <body>
        <header>
            <?php include 'log/header.php';?>
            
        </header>
        <main>

        <form action="insertar_registro_estudiantes.php" method="POST">
            <h1 style="text-align:center">Registro de Estudiantes</h1>

            <div class="container mt-5">
                
                    <div class="row">
                        <div class="col">
                            <label for="nombreEstudiante" class="form-label">Nombre del Estudiante</label>
                            <input type="text" class="form-control" 
                            id="nombreEstudiante"
                            name="nombreEstudiante" aria-describedby="" required>
                        </div>
                        <div class="col">
                            <label for="apellidoEstudiante" class="form-label">Apellido del Estudiante</label>
                            <input type="text" class="form-control" 
                            name="apellidoEstudiante"
                            id="apellidoEstudiante" required>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="DNIEstudiante" class="form-label">DNI del Estudiante</label>
                            <input type="text" class="form-control" 
                            name="DNIEstudiante"
                            id="DNIEstudiante" required>
                        </div>
                        <div class="col">
                        <label for="correoEstudiante" class="form-label">Email del Estudiante</label>
                            <input type="text" class="form-control" 
                            name="correoEstudiante"
                            id="correoEstudiante" aria-describedby="" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="nombre_asignatura"
                                name="nombre_asignatura" 
                                        aria-label="Floating label select example">
                                    
                                    <option selected>Nombre de asignatura</option>
                                    <option value="ProgramacionWeb"> Programacion Web </option>
                                    <option value="DiseñoAplicaciones"> Diseño de aplicaciones </option>
                                    <option value="EstructuraDatos"> Estructura de datos </option>
                                    <option value="Redes"> Redes </option>
                                </select>
                                <label for="floatingSelect">Nombre de asignatura</label>
                            </div>
                        </div>                       
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="horarioCurso" 
                                name="horarioCurso" aria-label="Floating label select example">
                                    <option selected>Horario de clases</option>
                                    <option value="Mañana">Mañana</option>
                                    <option value="Tarde">Tarde</option>
                                    <option value="Nocturno">Nocturno</option>
                                </select>
                                <label for="floatingSelect">Horario de clases</label>
                            </div>
                        </div>
                    </div>
                   
                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="modalidadClase"
                                name="modalidadClase" aria-label="Floating label select example">
                                    <option selected>Modalidad de Clase</option>
                                    <option value="Presencial"> Presencial </option>
                                    <option value="Mixto"> Mixto </option>
                                    <option value="Online"> Online </option>
                                </select>
                                <label for="floatingSelect">Modalidad de Clase</label>
                            </div>
                        </div>    
                        <div class="col">    
                            <div class="form-floating">
                                <select class="form-select" id="semestre"
                                    name="semestre" aria-label="Floating label select example">
                                    <option selected>Semestre</option>
                                    <option value="primero">1 ero</option>
                                    <option value="segundo">2 do</option>
                                    <option value="tercero">3 ero</option>
                                    <option value="cuarto">4 to</option>
                                    <option value="quinto">5 to</option>
                                </select>
                                <label for="floatingSelect">Semestre</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" 
                                name="observaciones"
                                id="observaciones"></textarea>
                                <label for="floatingTextarea">Comentarios/Observaciones</label>
                            </div>
                    <br>

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <input type="reset" class="btn btn-primary" value="Reset" />
                    
            </div>

        </form>


        </main>
        <footer>
            <?php include 'log/footer.php';?>
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
