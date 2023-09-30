<?php
include("calculadora.php");
$numero1=$_COOKIE['numero1'];
$numero2=$_COOKIE['numero2'];
$calculo=new calculadora();

echo "la resta es : ".$calculo->restar($numero1,$numero2);