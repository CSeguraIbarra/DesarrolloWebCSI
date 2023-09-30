<?php
class calculadora{
    var $suma;
    var $resta;
    var $multiplicacion;
    var $division;
    function __construct(){
        $suma=0;
        $resta=0;
        $multiplicacion=0;
        $division=0;
    }
    function sumar($a,$b){
        $suma=$a+$b;
        return $suma;
    }
    function restar($a,$b){
        $resta=$a-$b;
        return $resta;
    }
    function multiplicar($a,$b){
        $multiplicacion=$a*$b;
        return $multiplicacion;
    }
    function dividir($a,$b){
        $division=$a/$b;
        return $division;
    }
}
?>
