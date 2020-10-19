
<! doctype html>
< html >
< cabeza >
< estilo >
span {
    font-weight : negrita ;
    tamaño de fuente : x-large ;
}
formulario {
    pantalla : en línea ;
}
fieldset {
    ancho : 300 px ;
    mostrar : heredar ;
}
leyenda {
    font-weight : negrita ;
    tamaño de fuente : 20 px ;
}
</ estilo >
</ cabeza >
< cuerpo >
< h3 > Cajas de texto </ h3 >
< formulario  nombre = " f1 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 1 </ leyenda >
< label  for = " nombre " > Nombre </ label >
< input  type = " text "  id = " nombre " />
< Br />
< etiqueta  para = " apellido " > Apellido </ etiqueta >
< input  type = " text "  name = " apellido "  id = " apellido " />
< Br /> < br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< formulario  nombre = " f2 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 2 </ leyenda >
< label  for = " clave " > Contraseña </ label >
< input  type = " contraseña "  nombre = " clave " />
< Br />
< label  for = " ocultoVacio " > Oculto vac & iacute ; o </ etiqueta >
< input  type = " hidden "  name = " ocultoVacio " />
< Br />
< label  for = " ocultoLleno " > Oculto lleno </ label >
< input  type = " hidden "  name = " ocultoLleno "  value = " sorpresa " />
< Br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< formulario  nombre = " f3 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 3 </ leyenda >
< label  for = " comentarios " > Comentarios </ label >
< textarea  name = " comentarios "  rows = " 3 "  cols = " 40 " > </ textarea >
< Br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< h3 > Botones de radio </ h3 >
< formulario  nombre = " f4 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 4 </ leyenda >
< label  for = " radioVerde " > Verde </ label >
< input  type = " radio "  name = " radioVerde "  id = " radioVerde " />
< label  for = " radioNaranja " > Naranja </ label >
< input  type = " radio "  name = " radioNaranja "  id = " radioNaranja " />
< label  for = " radioRojo " > Rojo </ label >
< input  type = " radio "  name = " radioRojo "  id = " radioRojo " />
< Br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< formulario  nombre = " f5 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 5 </ leyenda >
< label  for = " radioGenero " > Mujer </ label >
< input  type = " radio "  name = " genero "  id = " genero " />
< label  for = " radioGenero " > Hombre </ label >
< input  type = " radio "  name = " genero "  id = " genero " />
< label  for = " radioGenero " > Otro </ label >
< input  type = " radio "  name = " genero "  id = " genero " />
< Br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< formulario  nombre = " f6 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 6 </ leyenda >
< label  for = " radioCabello " > Moreno </ label >
< input  type = " radio "  name = " cabello "  id = " cabello "  value = " moreno " />
< label  for = " radioCabello " > Rubio </ label >
< input  type = " radio "  name = " cabello "  id = " cabello "  value = " rubio " />
< label  for = " radioCabello " > Pelirrojo </ label >
< input  type = " radio "  name = " cabello "  id = " cabello "  value = " pelirrojo " />
< Br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< formulario  nombre = " f7 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 7 </ leyenda >
< etiqueta > Moreno </ etiqueta >
< input  type = " radio " />
< etiqueta > Rubio </ etiqueta >
< input  type = " radio " />
< etiqueta > Pelirrojo </ etiqueta >
< input  type = " radio " />
< Br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< Br />
< h3 > Cajas de chequeo </ h3 >
< formulario  nombre = " f8 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 8 </ leyenda >
< label  for = " checkAficion " > Lectura </ label >
< input  type = " checkbox "  name = " checkAficion "  id = " checkAficion " />
< label  for = " checkAficion " > Deporte </ label >
< input  type = " checkbox "  name = " checkAficion "  id = " checkAficion " />
< label  for = " checkAficion " > Viajes </ label >
< input  type = " checkbox "  name = " checkAficion "  id = " checkAficion " />
< Br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< formulario  nombre = " f9 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 9 </ leyenda >
< label  for = " checkLectura " > Lectura </ label >
< input  type = " checkbox "  name = " checkLectura "  id = " checkLectura " />
< label  for = " checkDeporte " > Deporte </ label >
< input  type = " checkbox "  name = " checkDeporte "  id = " checkDeportes " />
< label  for = " checkViajes " > Viajes </ label >
< input  type = " checkbox "  name = " checkViajes "  id = " checkViajes " />
< Br />
< input  type = " submit "  value = " Enviar datos " />
</ fieldset >
</ formulario >
< formulario  nombre = " f10 "  método = " obtener " >
<conjunto de campos >
< leyenda > Formulario 10 </ leyenda >
< label  for = " checkLectura " > Lectura </ label >
< input  type = " checkbox "  name = " checkLectura "  id = " checkLectura "
    valor = " lectura " />
    < label  for = " checkDeporte " > Deporte </ label >
    < input  type = " checkbox "  name = " checkDeporte "  id = " checkDeportes "
        valor = " deporte " />
        < label  for = " checkViajes " > Viajes </ label >
        < input  type = " checkbox "  name = " checkViajes "  id = " checkViajes "
            value = " viajes " />
            < Br />
            < input  type = " submit "  value = " Enviar datos " />
            </ fieldset >
            </ formulario >
            < formulario  nombre = " f11 "  método = " obtener " >
            <conjunto de campos >
            < leyenda > Formulario 11 </ leyenda >
            < etiqueta > Lectura </ etiqueta >
            < input  type = " checkbox "  name = " checkAficiones [] "  value = " lectura " />
            < etiqueta > Deporte </ etiqueta >
            < input  type = " checkbox "  name = " checkAficiones [] "  value = " deporte " />
            < etiqueta > Viajes </ etiqueta >
            < input  type = " checkbox "  name = " checkAficiones [] "  value = " viajes " />
            < Br />
            < input  type = " submit "  value = " Enviar datos " />
            </ fieldset >
            </ formulario >
            </ cuerpo >
            </ html >