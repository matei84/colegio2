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

        <div class="container" style="border: 2px solid black;">
                        
            <form action="">
                <div>
                <label for="nombre">
                    <span>Nombre</span>              
                    <input type="text" id="nombre" placeholder="Nombre del profesor" required>
                </label>
                </div>

                <div>
                <label for="curso">
                    <span>Nombre del Curso</span>              
                    <input type="text" id="curso" placeholder="Nombre del curso" required>
                </label>
                </div>
                
                <div>
                <label for="horario">
                    <span>Horario</span>              
                    <input type="text" id="horario" placeholder="Horario del curso" required>
                </label>
                </div>

                <div>
                <label for="telefono">
                    <span>Telefono</span>              
                    <input type="text" id="telefono" placeholder="telefono" required>
                </label>
                </div>

                <input type="submit" value="NOMBRE">

                <button type="submit">Intro</button>

               

            </form>
        
        </div>    
                        
        
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
