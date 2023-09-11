<?php
include("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];

$sql="UPDATE  carrera set nombre='$nombre' WHERE  id=$id ";
 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_carrera.php" />