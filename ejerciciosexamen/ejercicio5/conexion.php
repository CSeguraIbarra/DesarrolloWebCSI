<?php
$con = new mysqli("localhost", "root", "", "parcial1");
if ($con->connect_error) {
    die("conexion fallada" . $con->connect_error);
}
?>