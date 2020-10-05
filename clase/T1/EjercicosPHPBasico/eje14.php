<?php
$opcion=0;

function pintarMenu(){
    
    echo "Elija una opción: \n";
    echo "1:Mostrar todos los empleados.\n"."2:Recuperar los objetos por id.\n";
    
    
    
}
function opcion($opcion,$bd) {$resultado="";
    switch ($opcion){
        
        case 1:
            $departamento="";
            $resultado+= $bd["empleado"][100]["nombre"]."\t".$bd["empleado"][100]["apellido"]."\t"."\n";
        //$resultado+=$bd["empleado"][200]["idDpto"]=$bd["departamento"][10]["desc"];
        print_r($resultado);
                break;
        
        
        
    }
}
$bd= ["departamento"=>[10=>["nombre"=>"ventas","desc"=>"DptoDeVentas"]], "empleado"=>[100=>["nombre"=>"pepe","apellido"=>"sanchez","idDpto"=>10],200=>["nombre"=>"ana","apellido"=>"garcia","idDpto"=>10]]];

pintarMenu();
fscanf(STDIN, "%s\n", $opcion);
opcion($opcion,$bd);