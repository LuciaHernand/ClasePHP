<?php


$n=0;
$p=0;

echo "Introduce  numeros:";
fscanf(STDIN, "%d\n", $n);
echo "Introduce veces:";
fscanf(STDIN, "%d\n", $p);

for($i=$p;$i>=1;$i--){
    for($j=0;$j<=$n;$j++){
        echo $j;
       
    } 
    echo "\t";
    $j=0;
}


?>