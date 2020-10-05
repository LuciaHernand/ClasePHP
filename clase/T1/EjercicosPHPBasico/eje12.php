<?php
$palabras_prohibidas=["tonto","feo"];
$cadena= 'Eres tonto, pero yo no soy tonto, soy feo. He dicho';
$cadena_censurada=$cadena;
foreach($palabras_prohibidas as $palabrota){
 $cadena_censurada=   str_replace($palabrota, '*****', $cadena_censurada);
}
 echo $cadena."\n";
 echo $cadena_censurada;
 ?>