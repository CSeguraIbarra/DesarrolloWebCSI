<?php
$numeros=$_POST['numeros'];
$n = $_COOKIE['n'];
function multiplicar($array) { 
    $resultado = 1; 
    for ($i = 0; $i < count($array); $i++) {
        $resultado *= $array[$i];
    }
    return $resultado;
}

echo("El resultado es: " . multiplicar($numeros));
?>
