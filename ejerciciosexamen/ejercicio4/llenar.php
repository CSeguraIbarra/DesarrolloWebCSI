<?php
$n=$_POST['n'];
for($i=0;$i<$n;$i++){
?>
<form action="multiplicacion.php" method="post">
    <label for="numeros[]">Introducir  <?php echo($i+1)?> numero</label>
    <input type="number" name="numeros[]"><br><br>
<?php 
}
setcookie("n",$n,0);
?>
<input type="submit" value="Calcular">
</form>