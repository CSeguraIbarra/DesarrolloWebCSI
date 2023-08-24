<?php
function PalabraMasLarga($cadena)
{
    //apuntes
    // explode -> permite separar una cadena en partes 
    //strlen -> obtiene la longitud de una cadena
    $palabras = explode(" ", $cadena); 
    $palabraMasLarga = "";
    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) {
            $palabraMasLarga = $palabra;
        }
    }
    return $palabraMasLarga; 
}
