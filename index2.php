<!doctype html>
<html lang="en">
    <head>
        <title>Proyecto Colegio</title>
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

        <script src="js/login.js"></script>
        

    </head>

    <body style="background-image:url(img/colegio1.jpg); background-size: 100%; background-repeat:no-repeat">
    
        <header>
            <!-- place navbar here -->
        </header>
        <main>

            <div class="container d-flex justify-content-center" style="border 2px solid black; border-radius 20px">

            <!-- <form action="" name="login_form" method="post"> -->
            
            <form action="comprueba_login.php" name="login_form" method="post">

                <div class="mb-3">
                    <label for="" class="form-label" style="color: white;" > Usuario </label>
                    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder=""
                        style="width:300px"
                    />

                </div>
            
                <div class="mb-3">
                    <label for="" class="form-label" style="color: white;" >Clave</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder=""
                    />
    
                </div>
                
                <div>
                    <a href="" style="color: red;" >Olvido su clave?</a>
                
                </div>
                
                <!-- <button type="button" class="btn btn-danger" onclick="return Login(this.form)"> Entrar </button> -->
                                
                <input type="submit" value="Entrar" class="btn btn-danger" />
                <input type="reset" value="Borrar" class="btn btn-danger" />

            </form>
             

        </main>
        <footer>
            <!-- place footer here -->
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
