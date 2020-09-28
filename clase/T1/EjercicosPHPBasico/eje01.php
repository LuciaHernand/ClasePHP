<?php
echo 'Introduce un número';
fscanf(STDIN, "%d\n",$numero);
$minimo=$numero;
$maximo=$numero;
while ($numero!=0) {
    echo 'Introduce un número';
    fscanf(STDIN, "%d\n",$numero);
 
    $maximo=($numero > $maximo ? $numero : $maximo);
    $minimo=($numero < $minimo ? $numero : $minimo);
}
echo "Máximo: $maximo\n";
echo "Mínimo: $minimo\n";

?>