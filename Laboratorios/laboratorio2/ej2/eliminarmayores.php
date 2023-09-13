<?php
$a=array();
function Eliminarmayores($numeros,$pmayor)
{
    //$a=array();
    foreach($numeros as $numero) 
    {
        if($numero<=$pmayor)
        {
            $a[]=$numero;
        }
    }
    return $a;
}
/*foreach ($a as $numeroa) {
    echo $numeroa;
}*/
?>
