<?php

$n=1;
$suma=0;
$opcion=0;
$multiplicacion=1;

function pintarMenu() {
    echo "Elige una opción:";
    echo "\n";
    echo "\t1: Suma.";
    echo "\n";
    echo "\t2: Multiplicar.";
    echo "\n";
    echo "\t0: Salir.";
}
function menu($opcion,$suma,$multiplicacion) {
    $escribir="";
   
    switch ($opcion){
        case 1: 
        $escribir="La suma  es igual a $suma.";break;
        case 2:
        $escribir="El producto es igual a $multiplicacion.";break;
       
        default: echo "La opcion seleccionada no esta disponible";
    }
    echo $escribir;
}

while ($n!=0) {
    


echo "Introduce un número: ";
fscanf(STDIN, "%d\n", $n);
echo "\n";
$suma=$suma+$n;
$multiplicacion=$multiplicacion*$n;
}
pintarMenu();
echo "\n";
fscanf(STDIN, "%d\n", $opcion);
menu($opcion,$suma,$multiplicacion);
echo "\n";