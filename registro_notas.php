<!doctype html>
<html lang="en">
    <head>
        <title>Registro Notas</title>
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

        <script src:"js/funciones.js"></script>


    </head>

    <body>
        <header>
            <?php include 'log/header.php';?>
            
        </header>

        <main>

            <div class="container" style="margin-top: 50px; margin-left: 550px">

                <button type="button" class="btn btn-primary">IFC2365</button>
                <button type="button" class="btn btn-primary">IFC2366</button>
                <button type="button" class="btn btn-primary">IFC2367</button>

            </div> 
        
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
                            <td> 120 </td>
                            <td id="demo1"> FALTA ALGO ACA </td>
                        </tr>

                        <tr class="table table-primary">
                            <td scope="row"> MF0951_2: Integracion componentes de software </td>
                            <td> 120 </td>
                            <td id="demo1"> FALTA ALGO ACA </td>
                        </tr>

                        <tr class="table table-primary">
                            <td scope="row"> MF0951_2: Publicacion de paginas Web: </td>
                            <td> 120 </td>
                            <td id="demo1"> FALTA ALGO ACA </td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th scope="row" colspan="2">Nota Promedio</th>
                            <td>POR CALCULAR</td>
                            
                        </tr>
                    
                    </tfoot>
                </table>
            
            </div>

            <form action="">
                
                <div class="container" style="border: 2px solid black; margin-top:50px">
                    <!-- <div class="mb-3">  -->

                    <label for="nombreEstudiante" style="width: 200px">
                        <span> Nombre del estudiante </span>              
                        <input type="text" id="nombrEstudiante" 
                                placeholder="Nombre del estudiante" required>
                                <!-- style="width: 300px; background-color: gray; margin-left:660px; margin-top: -50px" -->
                            
                    </label>
                    <!-- </div> -->
                    
                    <!-- <div class="mb-3">  -->
                    <label for="identificacion" style="width: 200px;">
                        <span>Identificacion</span>              
                        <input type="text" id="identificacion" 
                        placeholder="ID"  required>
                        <!-- style="width: 300px; background-color: gray; margin-left:660px; margin-top: -50px" -->
                        
                    </label>
                    <!-- </div> -->

                    <!-- <div class="mb-3">  -->
                    <label for="calificacion" style="width: 200px">
                    <span>Calificacion</span>
                    <select name="calificacion" id="calificacion" style="float:right">
                        <option value="1"> Apto </option>
                        <option value="2"> No apto </option>
                    </select>
                    </label>
                    <!-- </div>  class="form-label"  "float:right"-->

                </div>
            </form>          

                <!-- <div class="mb-3"> -->
                    <!-- <label for="" class="form-label" style="width: 200px; float: right; margin-top: 80px; margin-right: 400px"> Nombre del estudiante </label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        style="width: 300px; background-color: gray; margin-left:660px; margin-top: -50px"/>

                    <label for="" class="form-label" style="width: 200px; float: right; margin-top: 80px; margin-right: 400px"> Identificacion </label>
                    <input
                        type="text"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        style="width: 300px; background-color: gray; margin-left:660px; margin-top: -50px"/> -->
                    <!-- </div> -->

        <!-- <div class="mb-3">
            <label for="" class="form-label" style="float:right"> Calificacion </label>
            <select name="" id="" style="float:right">
                <option value="1"> Apto </option>
                <option value="2"> No apto </option>

            </select>

        </div> -->





    <!-- <button type="button" class="btn btn-primary"> Guardar </button>

    <button type="button" class="btn btn-primary"> Borrar </button>  -->

      
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



