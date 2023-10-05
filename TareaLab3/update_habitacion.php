<?php

include("conexion.php");
$nro=$_POST['nro'];
$bano_privado=$_POST['bano_privado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];
$id_tipo_habitacion=$_POST['id_tipo_habitacion'];
$id=$_POST['id'];

$sql= "UPDATE habitacion set nro=$nro, id_tipo_habitacion=$id_tipo_habitacion,bano_privado=$bano_privado,espacio=$espacio,precio=$precio 
WHERE id=$id ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_habitacion.php" />


