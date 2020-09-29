<?php
$numero1=0;
$numero2=0;
$opcion=1;



function pintarMenu() {
    echo "Elige una opción:";
    echo "\n";
    echo "\t1: Suma.";
    echo "\n";
    echo "\t2: Multiplicar.";
    echo "\n";
    echo "\t0: Salir.";
}
function menu($opcion,$numero1,$numero2) {
    $escribir="";
    $resultado="";
    switch ($opcion){
        case 1: $resultado=$numero1+$numero2;
        $escribir="La suma entre $numero1 y $numero2 es igual a $resultado.";break;
        case 2: $resultado=$numero1*$numero2;
        $escribir="El producto entre $numero1 y $numero2 es igual a $resultado.";break;
        case 0: exit();
        default: echo "La opcion seleccionada no esta disponible";
    }
    echo $escribir;
}
    while ($opcion!=0) {
        
   

        echo "Introduce un número: ";
        fscanf(STDIN, "%d\n", $numero1);
        echo "\n";
        echo "Introduce otro número: ";
        fscanf(STDIN, "%d\n", $numero2);
        echo "\n";
        pintarMenu();
        echo "\n";
        fscanf(STDIN, "%d\n", $opcion);
        menu($opcion,$numero1,$numero2);
        echo "\n";
    }

?>
 