<?php
include("eliminarmayores.php");
$numero=$_POST['numero'];
$pmayor=$_POST['pmayor'];
$n=$_COOKIE['n'];
$numeros=array();
for ($i=0;$i<$n;$i++)
{
    $numeros[$i]=$numero;
}
Eliminarmayores($numeros,$pmayor);
?>
