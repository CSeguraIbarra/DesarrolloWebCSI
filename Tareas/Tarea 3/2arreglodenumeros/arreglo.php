<?php
$n=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20); 
$numerospares=array();
$numerosimpares=array();
foreach($n as $numero)
{
    if($numero % 2==0){
        $numerospares[]=$numero;
    }
    else{
        $numerosimpares[]=$numero;
    }
}

echo "LOS NUMEROS PARES SON : ";
foreach($numerospares as $numeropar)
{
    echo $numeropar;
    echo " , ";
}
echo "<br>";
echo "LOS NUMEROS IMPARES SON:";
foreach($numerosimpares as $numeroimpar)
{
    echo $numeroimpar;
    echo " , ";
}
