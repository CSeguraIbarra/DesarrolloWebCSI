<?php
 $numero1=$_GET['numero1'];
 $numero2=$_GET['numero2'];

 setcookie("numero1",$numero1,0);
 setcookie("numero2",$numero2,0);
 
?>
<form action="sumar.php">
<input type="submit" value="Sumar">
</form>
<form action="restar.php">
<input type="submit" value="Restar">
</form>
<form action="multiplicar.php">
<input type="submit" value="Multiplicar">
</form>
<form action="dividir.php">
<input type="submit" value="Dividir">
</form>