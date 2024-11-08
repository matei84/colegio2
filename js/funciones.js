
function calculoNotas(){
    var nota1, nota2, nota3;
    var resultado;

    nota1=parseFloat(prompt("Asignatura: MF0950_2: Construccion de paginas web"));

    nota2=parseFloat(prompt("Asignatura: MF0951_2: Integracion componentes de software"));
    
    nota3=parseFloat(prompt("Asignatura: MF0952_2: Publicacion de paginas Web: "));
    
    document.getElementById("nota1").innerHTML = nota1;
    document.getElementById("nota2").innerHTML = nota2;
    document.getElementById("nota3").innerHTML = nota3;

    resultado= (nota1 + nota2 + nota3)/3;
    resultado= resultado.toFixed(2)

    document.getElementById("calificacion").value = resultado;
    
}


function ResetNotas(){
           
    document.getElementById("nota1").innerText = "Nota por asignar";
    document.getElementById("nota2").innerText = "Nota por asignar";
    document.getElementById("nota3").innerText = "Nota por asignar";
    document.getElementById("calificacion").value = "";

}