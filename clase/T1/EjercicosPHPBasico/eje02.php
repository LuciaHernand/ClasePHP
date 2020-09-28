<?php


$n=0;
$c=0;

echo "Introduce un número: ";
fscanf(STDIN, "%d\n", $n);

for ($a = $n; $a >=1; $a --) {
    for ($b = 1; $b <= $a ; $b ++) {
        switch ($c) {
            case '.':$c="+";break;
            case '+':$c="-";break;
            case '-':$c=".";break;
        }
        echo $c;
    }
    echo "\n";
}
?>