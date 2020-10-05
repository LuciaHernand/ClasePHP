<?php
function pintarMenu() {
    echo "Elige una opción:";
    echo "\n";
    echo "\t1: Suma.";
    echo "\n";
    echo "\t2: Multiplicar.";
    echo "\n";
    
}
function menu($opcion,$a) {
    $escribir="";
    $suma=0;
    $multiplicacion=1;
    switch ($opcion){
        case 1:
            for ($i = 0; $i < sizeof($a); $i++) {
               $suma+=$a[$i];
               
            }

            $escribir="La suma de los números introducidos es $suma";break;
        case 2:
                for ($i = 0; $i < sizeof($a); $i++) {
                    $multiplicacion*=$a[$i];
                }
            $escribir="El producto es igual a $multiplicacion.";break;
            
        default: echo "La opcion seleccionada no esta disponible";
    }
    echo $escribir;
}
$n=1;
$contador=0;
$opcion=0;

while ($n!=0) {
   
echo "Introduce un número: ";
fscanf(STDIN, "%d\n", $n);
 $a[$contador]=$n;
$contador++;

 
}
$contador--;
unset($a[$contador]);
pintarMenu();
echo "\n";
fscanf(STDIN, "%d\n", $opcion);
menu($opcion,$a);

?>