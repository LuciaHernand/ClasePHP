<?php
function doble($numero) {

    $dobleDeNumero= 2+$numero;
    echo "El doble de $numero es $dobleDeNumero";
}
echo"Introduce un numero";
fscanf(STDIN, "%d\n",$numero);
doble($numero);