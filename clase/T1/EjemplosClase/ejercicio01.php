<?php

$a=99.5;
$b='a';
$c='x';
echo round($a);
// redondea hacia arriba
echo "\n";
echo floor($a);
// redondea hacia abajo
echo "\n";

//en php funciona la comparacion menor y mayor con cadenas, en java habria que hacer un compare to

echo ($b<$c)?'Es menor:'.$b : 'Es menor: '.$c;


?>