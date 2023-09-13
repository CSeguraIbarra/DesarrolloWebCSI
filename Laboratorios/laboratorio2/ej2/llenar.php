<?php
$n=$_GET['n'];
echo '<form action="eliminar.php" method="post">';
for ($i=0;$i<$n;$i++)
{
?>
<label for="numero">Introducir <?php echo($i+1) ?> numero</label>
<input type="number" name="numero"> <br>
<?php
}?>
<br>
<label for="pmayor">Parametro mayor</label>
<input type="number" name="pmayor">
<?php
setcookie('n',$n,0);
echo '<input type="submit" value="Enviar">';
echo "</form>";
?>

