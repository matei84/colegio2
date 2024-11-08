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

        <form action="">

            <div class="container" style="border: 2px solid black; margin-top: 50px;">
                
                    <div class="row">
                        <div class="col">
                            <label for="nombreProfesor" class="form-label">Nombre del Profesor</label>
                            <input type="text" class="form-control" id="nombreProfe" aria-describedby="" required>
                        </div>
                        <div class="col">
                            <label for="apellidoProfesor" class="form-label">Apellido del Profesor</label>
                            <input type="text" class="form-control" id="apellidoProfe" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="nombreAsignatura" class="form-label">Nombre de la Asignatura</label>
                            <input type="text" class="form-control" id="asignatura" required>
                        </div>
                        <div class="col">
                            <label for="horarioCurso" class="form-label">Horario del Curso</label>
                            <input type="text" class="form-control" id="horarioCurso" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="identificadorProfe" class="form-label">Identificador del Profesor</label>
                            <input type="text" class="form-control" id="identificadorProfe" required>
                        </div>
                        
                        <div class="col">
                            <label for="telefProfesor" class="form-label">Telefono del Profesor</label>
                            <input type="text" class="form-control" id="telefProfesor" required>
                        </div>
                    </div>
                        
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
