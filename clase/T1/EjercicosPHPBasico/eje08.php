<?php
echo "Introduce  dia:";
fscanf(STDIN, "%s\n", $dia);

echo "Introduce  mes:";
fscanf(STDIN, "%s\n", $mes);
echo "Introduce  a�o:";
fscanf(STDIN, "%s\n", $anio);
$actual=time();

echo "\nLa fecha de hoy es: ".date("(d M Y) H:i",$actual)."\n";
$solucion=strtotime("$anio/$mes/$dia");
echo "Han transcurrido ".$solucion." segundos desde la fecha introducida hasta ahora.";

$anioFin=(int)($solucion/31536000);

echo $anioFin;
//segundos en un a�o 31536000