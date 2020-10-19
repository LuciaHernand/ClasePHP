<?php
$datos=[
'romano'=>['i','ii','iii','iv','v','vi','vii','viii','ix','x'],
'numero'=>['uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez']];
 echo "Introduce n: ";
fscanf(STDIN , "%d\n" , $n);

echo "Formato: ";
fscanf(STDIN , "%s\n" , $formato);

for($i=0; $i<$n;$i++){
    echo $datos[$formato][$i].' ';
}