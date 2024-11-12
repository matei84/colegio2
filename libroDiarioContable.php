<!DOCTYPE html>
<html lang="en">
<head>
    <title>Libro Diario Contable</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
                
                <?php include 'log/header.php';?>
                
        </header>
        <main>
            <div class="container-md">
                <h1 style="text-align:center">Libros de Contabilidad</h1>
                <form action="insertar_contabilidad.php" method="post">
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

                        <!-- Tabla dinamica con los asientos contables diarios  -->

                        </tbody>
                        <tfoot>

                        </tfoot>
                        </table>
                        <div style="margin-top:15px">
                            <button type="button" class="btn btn-primary" onclick="addAccountingEntry()">Entrada contable</button>
                            <button type="button" class="btn btn-primary" onclick="">Modificar</button>
                            <!-- <button type="button" class="btn btn-primary" onclick="">Registro en BD</button> -->
                            <input type="submit" class="btn btn-primary" name= "submit" value="Registro en BD" >
                        </div>
                </form>
            </div>
        </main>
        <footer>
            <?php 
            include 'log/footer.php';?>
        </footer>
    </body>
</html>

