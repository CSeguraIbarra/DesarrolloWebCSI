<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php include('conexion.php');
    $sql = "SELECT id,nro,id_tipo_habitacion,bano_privado,espacio,precio from  habitacion";
    $resultado = $con->query($sql);
?>
    <form action="create_fotos_habitacion.php" method="post" enctype="multipart/form-data">
        <label for="id">Numero de habitacion</label>
        <div>
            <select name="id_habitacion">
                    <?php while ($row = $resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['nro'] ?></option>
                    <?php } ?>
            </select>
            <label for="fotografia">fotografia</label>
            <input type="file" name="fotografia">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Enviar">

    </form>

</body>

</html>