<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="todo">
    <h1 class="center">REGISTRO DE ESTUDIANTES Y CARRERAS</h1>
        <div class="form1">
    <?php include('conexion.php');
    $sql = "SELECT id,nombre from  carrera";
    $resultado = $con->query($sql);
    ?>
    <div class="center"><h2>Registrar Estudiantes</h2></div>
    <br>
            <form class="form_alumno center" action="create.php" method="post">
                <div>
                    <label for="nombres">Nombres: &nbsp</label>
                    <input type="text" name="nombres">
                </div>
                <div>
                    <label for="apellidos">Apellidos: &nbsp</label>
                    <input type="text" name="apellidos">
                </div>
                <div>
                    <label for="CU">CU: &nbsp</label>
                    <input type="text" name="CU">
                </div>
                <div>
                <label for="idcarrera">Carrera: &nbsp</label>
                    <select name="idcarrera">
                        <?php while ($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input class="button" type="submit" value="Crear">
            </form>
        </div>
        <br><br>
        <div class="form2">
            <div class="center"><h2>Registrar Carreras</h2></div>
            <br>
        <form class="form_carrera center" action="create_carrera.php" method="post">
            <label for="nombre">Nombre de la carrera: &nbsp</label>
            <input type="text" name="nombre">
            <input class="button" type="submit" value="Crear">
        </form>
        </div>
    </div>

</body>

</html>