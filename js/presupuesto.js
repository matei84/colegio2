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

function setCurrentDate() {

    const today = new Date();
    const day = String(today.getDate()).padStart(2, '0');
    const month = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0!
    const year = today.getFullYear();
    const dateString = `${year}-${month}-${day}`;
    document.getElementById('invoiceDate').value = dateString;
}

function addProduct() {
    const java=7500;
    const python=6000;
    const cobol=5000;
    const php=3500;
    
    const description = prompt("Ingrese la descripción del producto:");
    const quantity = parseInt(prompt("Ingrese la cantidad del producto:"), 10);
    const price = parseFloat(prompt("Ingrese el precio unitario del producto:")).toFixed(2);

    if (description && !isNaN(quantity) && !isNaN(price)) {
        const total = (quantity * price).toFixed(2);
        const table = document.getElementById('invoiceTable').getElementsByTagName('tbody')[0];
        const newRow = table.insertRow();

        newRow.innerHTML = `
            <td>${description}</td>
            <td>${quantity}</td>
            <td>$${price}</td>
            <td>$${total}</td>
        `;

        updateTotal(); // Actualiza el total al añadir un nuevo producto
    } else {
        alert("Por favor, asegúrese de ingresar datos válidos.");
    }
}

function updateTotal() {
    const table = document.getElementById('invoiceTable').getElementsByTagName('tbody')[0];
    const rows = table.getElementsByTagName('tr');
    let subtotal = 0;

    for (let row of rows) {
        const totalCell = row.cells[3].innerText.replace('$', '');
        subtotal += parseFloat(totalCell);
    }

    const iva = subtotal * 0.21;
    const total = subtotal + iva;

    // Actualiza los valores en la factura
    document.getElementById('subtotal').innerText = `$${subtotal.toFixed(2)}`;
    document.getElementById('iva').innerText = `$${iva.toFixed(2)}`;
    document.getElementById('total').innerText = `$${total.toFixed(2)}`;
}

function generateUUID() { // Public Domain/MIT
    var d = new Date().getTime(); //Timestamp
    var d2 = ((typeof performance !== 'undefined') && performance.now && (performance.now() * 1000)) || 0; //Time in microseconds since page-load or 0 if unsupported
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16; //random number between 0 and 16
        if (d > 0) { //Use timestamp until depleted
            r = (d + r) % 16 | 0;
            d = Math.floor(d / 16);
        } else { //Use microseconds since page-load if supported
            r = (d2 + r) % 16 | 0;
            d2 = Math.floor(d2 / 16);
        }
        return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
    });
}
let id = generateUUID();
document.getElementById('idHeader').innerText = generateUUID();
// Ejecutar la función cuando se carga la página
window.onload = setCurrentDate;

function addAccountingEntry() {
   
    const bankingAccount = prompt("Ingrese la cuenta bancaria:");
    const debe = parseFloat(prompt("Ingrese el debe:")).toFixed(2);
    const haber = parseFloat(prompt("Ingrese el haber:")).toFixed(2);
    const fechaActual = new Date();
    const dia = fechaActual.getDate();
    const mes = fechaActual.getMonth() + 1;
    const año = fechaActual.getFullYear();
    const fechas = (`${dia}/${mes}/${año}`);

    if (bankingAccount && !isNaN(debe) && !isNaN(haber)) {
        const table = document.getElementById('LibroDiario').getElementsByTagName('tbody')[0];
        const newRow = table.insertRow();

        newRow.innerHTML = `
            <td>${fechas}</td>
            <td><input type="text" name="cuentas" id="cuentas" 
                        placeholder="ID"  value="${bankingAccount}" required></td>
            <td><input type="text" name="debe" id="debe" 
                        placeholder="ID"  value="$${debe}" required></td>
            <td><input type="text" name="haber" id="haber" 
                        placeholder="ID"  value="$${haber}" required></td>
        `;

    } else {
        alert("Por favor, asegúrese de ingresar datos válidos.");
    }
}
