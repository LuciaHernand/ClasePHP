<?php
echo 'Introduce un n�mero';
fscanf(STDIN, "%d\n",$numero);
$minimo=$numero;
$maximo=$numero;
while ($numero!=0) {
    echo 'Introduce un n�mero';
    fscanf(STDIN, "%d\n",$numero);
 
    $maximo=($numero > $maximo ? $numero : $maximo);
    $minimo=($numero < $minimo ? $numero : $minimo);
}
echo "M�ximo: $maximo\n";
echo "M�nimo: $minimo\n";

?>