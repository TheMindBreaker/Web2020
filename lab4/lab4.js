function normalAlert(){
    alert("Hola Esto es una alerta ");
}
function confirmAlert(){
    if(confirm("Quiere aceptar este mensaje de prueba?")){
        alert("Gracias por aceptar el comando");
    }else{
        alert("El mensaje fue cancelado :(");
    }
}
function inputAlert(){
    var input = prompt("Hola, Ingresa cualquier mensaje");
    if(input == null || input == ''){
        alert("usted no ingreso ningun mensaje");
    }else{
        alert("El mensaje ingresado es => "+ input);
    }
}
function consoleAlert() {
    console.log("Hola A todos este es un mensaje normal a Consola");
}

function problem() {

}
function ejercicio1(){
    var table = document.getElementById("eje1");

    var input = prompt("Ingresa un número entero");
    input = parseInt(input);
    var row = table.insertRow(0);

    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    for(var n = 1; n <= input; n++){
        cell1.innerHTML = (n);
        cell2.innerHTML = (n*n);
    }
}

function ejercicio2() {
    var v1 = Math.floor((Math.random() * 10) + 1);
    var v2 = Math.floor((Math.random() * 10) + 1);
    var table = document.getElementById("eje2");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);


    var date1 = new Date();
    if(input = prompt(v1+" + "+v2+" ?")){
        var date2 = new Date();
        if(parseInt(input) == (v1+v2)){
            cell1.innerHTML = (v1 + " + " + v2 +" = "+input);
            cell2.innerHTML = ("Correcto");
            cell3.innerHTML = (((date2.getTime()-date1.getTime())/1000)+"Segundos");
        }
        else{
            cell1.innerHTML = (v1 + " + " + v2 +" = "+input);
            cell2.innerHTML = ("Incorrecto");
            cell3.innerHTML = (((date2.getTime()-date1.getTime())/1000)+"Segundos");
        }
    }

}
function contador(){
    var nega = 0;
    var posi = 0;
    var non = 0;
    var arreglo = [];
    var n = 50;

    var table = document.getElementById("eje3");
    var row = table.insertRow(0);
    var row1 = table.insertRow(1);
    var row2 = table.insertRow(2);
    var row3 = table.insertRow(3);

    var cell1 = row.insertCell(0);
    var cell2 = row1.insertCell(0);
    var cell3 = row2.insertCell(0);
    var cell4 = row3.insertCell(0);

    while(n > 0){
        var plusOrMinus = Math.random() < 0.5 ? -1 : 1;

        arreglo.push((Math.floor((Math.random() * 10) + 1))*(Math.round(Math.random()) * 2 - 1));
        n--;
    }
    for (var i = 0; i < arreglo.length; i++) {
        if(arreglo[i] < 0){
            nega++;
        }
        else if(arreglo[i] > 0){
            posi++;
        }
        else{
            non++;
        }
    }
    cell1.innerHTML = ("Arreglo"+arreglo);
    cell2.innerHTML = ("Positivos: "+posi);
    cell3.innerHTML = ("Negativos: "+nega);
    cell4.innerHTML = ("Neutros: "+non);
}

function promedio(){
    var  arg= [  [10, 60, 45],
        [88, 9, 2],
        [1250,480,5]
    ]
    var i, j, promedio=[], prom;

    var table = document.getElementById("eje4");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);

    for (i=0; i<3; i++ ){
        prom = 0;
        for(j=0; j<3; j++){
            prom = prom + arg[i][j];
        }
        prom = prom/3;
        promedio.push(prom);
        cell1.innerHTML = (promedio[i]);
    }


}

function inverso() {
    var n= prompt("ingrese un numero");

    var table = document.getElementById("eje5");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);

    var split= n.split("");
    var reverse = split.reverse();
    var  inverted = reverse.join("");

    cell1.innerHTML = (inverted);

}
