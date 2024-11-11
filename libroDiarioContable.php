<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Contabilidad</title>
    <script src="js/presupuesto.js"></script>
</head>
<body>
    <header>

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
                        <!-- <tr>
                        <th scope="row" colspan="2">Average age</th>
                        <td>33</td>
                        </tr> -->
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
</body>
</html>

