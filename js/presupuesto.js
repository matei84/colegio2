function presupuesto(){

    const java=7500;
    const python=6000;
    const cobol=5000;
    const php=3500;

    var valor1 = 0;
    var descripcion;
    var total = 0;

    factura = prompt("numero de factura");
    document.getElementById("demo").innerHTML = factura;

    valor1= prompt("Numeros de curso a comprar:");
    document.getElementById("demo1").innerHTML = valor1;

    descripcion= prompt("Descripcion del articulo adquirido: ");
    document.getElementById("demo2").innerHTML = descripcion;

    let curso;
        curso=prompt("Elegir curso: ");
    
    switch(curso){
        case "java":
            document.getElementById("demo3").innerHTML = java;
            curso=java;
            break;
        
        case "python":
            document.getElementById("demo3").innerHTML = python;
            curso=python;
            break;
        
        case "cobol":
            document.getElementById("demo3").innerHTML = cobol;
            curso=cobol;
            break;
        
        case "php":
            document.getElementById("demo3").innerHTML = php;
            curso=php;
            break;
        
        default:
            document.getElementById("demo3").innerHTML = 0;


    }

    sub_total = parseInt(valor1)*curso;
    document.getElementById("demo4").innerHTML = sub_total;
    document.getElementById("sub_total").innerHTML = sub_total;
    
    taxes = 0.21*parseInt(valor1)*curso;
    document.getElementById("taxes").innerHTML = taxes;

    total = taxes + sub_total;
    document.getElementById("total").innerHTML = total;



}