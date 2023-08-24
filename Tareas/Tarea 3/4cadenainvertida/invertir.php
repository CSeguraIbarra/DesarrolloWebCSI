<?php
include("invertir.php");

    $cadena = $_GET['cadena'];
    //apuntes
    //strrev -> permite crear una cadena invertida
    $cadenaInvertida = strrev($cadena);
        
    echo "La cadena invertida es: ".$cadenaInvertida;
?>