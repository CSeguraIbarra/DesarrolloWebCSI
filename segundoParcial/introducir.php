<?php
$n=$_GET['n'];
?>
<?php    
for ($i=0;$i<$n;$i++)
{
?>
<input type="number" name="numeros[]" > <br>
<?php
}
?>

<div>-------------------------------</div>
<div id="suma"></div>

<script>
    var numero=document.getElementsByTagName('numero');
    var suma = document.getElementById('suma');
    var resultado=0;
    for (i=0;i< <?php $n ?>;i++)
    {
    $resultado+=numero[$i].value;
    }
    suma.innerHTML=resultado;
</script>
