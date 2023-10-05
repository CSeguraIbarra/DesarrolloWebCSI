<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php include('conexion.php');
    $sql = "SELECT id,descripcion,numero_camas from  tipo_habitacion";
    $resultado = $con->query($sql);
?>
    <form action="create_habitacion.php" method="post">

        <div>
            <label for="nro">Nro</label>
            <input type="number" name="nro" >
            <label for="id_tipo_habitacion">Tipo de habitacion</label>
            <select name="id_tipo_habitacion">
                    <?php while ($row = $resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['descripcion'] ?></option>
                    <?php } ?>
            </select>
            <label for="bano_privado">Baño privado</label>
            <input type="number" name="bano_privado">
            <label for="espacio">Espacio</label>
            <input type="number" name="espacio">
            <label for="precio">precio</label>
            <input type="number" name="precio">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Enviar">


    </form>

</body>

</html>