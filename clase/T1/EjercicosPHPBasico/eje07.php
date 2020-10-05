<?php

$n=0;

echo "Introduce una frase (sin espacios): ";
fscanf(STDIN, "%d\n", $frase);
echo "Introduce un número: ";
fscanf(STDIN, "%d\n", $n);
printf($frase);
for($i=1;$i<=$n;$i++){
    
    echo "<h$i> $frase <h$i>";
    echo "\n";
   
} $n--;

for ($j = -2; $j<=$n; $j++) {
    echo "<h$n>".$frase."<h$n>";
    echo "\n";
    $n--;
}