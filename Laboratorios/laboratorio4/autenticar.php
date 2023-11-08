<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($usuario == "admin" && $contrasena == "123") {
    echo "autenticado correctamente";
} else {
    echo "no autenticado";
}
?>


