<?php
$cadena1=$_POST['cadena1'];
$cadena2=$_POST['cadena2'];

function tiene($cadena1,$cadena2){
$palabras = explode(" ", $cadena1);
//$palabras2=explode(" ",$cad2); 
foreach ($palabras as $palabra){
    //foreach($palabras as $palabra){
        if($cadena2==$palabra){
            return true; 
        }
    //}
}
return false;
}
if(tiene($cadena1,$cadena2)==true){
    echo $cadena1."  tiene la palabra  ".$cadena2."<br>";
}
else{
    echo $cadena1."  no tiene la palabra  ".$cadena2."<br>";
}