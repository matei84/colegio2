<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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

        <script src="js/presupuesto.js"></script>
    </head>

    <body style="background-color: black">

        <div
            class="container"
            style="border:2px solid black; background-color:white"
        >

        <!-- ------------------------>

        <h2>FACTURA</h2>
        <h1 style="text-align: center;">PRESUPUESTO</h1>

        <img src="img\colegio1.jpg" alt="" style="width:90px;float:right">

        <br>
        <h5>DE:</h5>
        <h4>Calle Gonzalez 35</h4>
        <h4>Madrid, 28009</h4>

        <div>
            <h4>Numero de factura:<h5 id="demo"></h5></h4>
            <input type="date">
        </div>

        <div style="margin-top:5px">
            <table class="table table-bordered border-black">
                <thead>
                    <tr>
                        <th>Cantidad</th>
                        <th>Descripcion</th>
                        <th>Costo</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="demo1"></td>
                        <td id="demo2"></td>
                        <td id="demo3"></td>
                        <td id="demo4"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="margin-left:300px">
            <h3>Sub-Total:</h3><h3 id="sub_total"></h3> 
            <h3>IVA:<h3 id="taxes"></h3></h3>

        </div>

        <div>
            <table class="tale table-bordered border-black">
                <thead>
                <!-- style="text-align:center" -->
                    <tr>
                        <th><span style="font-size:20px">TOTAL</span></th>
                        <th><h4 id= "total"></h4></th>
                    </tr>
                
                </thead>
            </table>
        </div>
        
        <div style="margin-top:15px">
            <button type="button" class="btn btn-primary" onclick="presupuesto()">Presupuesto</button>
            <button type="button" class="btn btn-primary" onclick="window.print()">Imprimir</button>

        </div>









        <!-- <header>
            <?php include 'log/header.php';?>
        </header> -->
        <main></main>
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
