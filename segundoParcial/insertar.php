<?php
include('conexion.php');

$titulo = $_POST["title"];
$autor = $_POST["autor"];
$id_editorial = $_POST["id_editorial"];
$anio = $_POST["anio"];
$id_usuario = $_POST["id_usuario"];
$id_carrera = $_POST["id_carrera"];

$archivo_original=$_FILES['imagen']['name'];
$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];
$fotografia=uniqid().'.'.$extension;

copy($_FILES['imagen']['tmp_name'],'images/'.$fotografia);

$sql="INSERT into libros (imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera)
VALUES ('$fotografia','$titulo','$autor',$id_editorial,$anio,$id_usuario,$id_carrera)";
//echo $sql;
if ($con->query($sql) === TRUE)
{
    echo 'Se anadio el registro correctamente';
} 
else 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

