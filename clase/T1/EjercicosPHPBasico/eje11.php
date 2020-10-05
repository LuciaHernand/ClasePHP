<?php
$cadena ="Alberto:Garay:913334455//Ana:Garcia:914445566";
$personas = explode('//', $cadena);
foreach ($personas as $persona){
    $datosPersona = explode(':', $persona);
    foreach ($datosPersona as $dato){
        echo<<<PERSONA
Nombre:$datosPersona[0]
Apellido: $datosPersona[1]
Telefono: $datosPersona[2]
==================


PERSONA;
    }
}