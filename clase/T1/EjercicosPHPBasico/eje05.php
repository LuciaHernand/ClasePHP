<?php

$n=0;
$c=0;

echo "Introduce un número: ";
fscanf(STDIN, "%d\n", $n);


    for ($b = 1; $b <= $n ; $b ++) {
        switch ($c) {
            case "rey\t":$c="as\t";break;
            case "as\t":$c="dos\t";break;
            case "dos\t":$c="tres\t";break;
            case "tres\t":$c="cuatro\t";break;
            case "cuatro\t":$c="cinco\t";break;
            case "cinco\t":$c="seis\t";break;
            case "seis\t":$c="siete\t";break;
            case "siete\t":$c="ocho\t";break;
            case "ocho\t":$c="nueve\t";break;
            case "nueve\t":$c="sota\t";break;
            case "sota\t":$c="caballo\t";break;
            case "caballo\t":$c="rey\t";break;
            
        }
     
       echo $c;
  
}