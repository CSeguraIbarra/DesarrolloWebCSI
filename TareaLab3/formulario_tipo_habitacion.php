<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="create.php" method="post">

        <div>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" >
            <label for="numero_camas">numero camas</label>
            <input type="number" name="numero_camas">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Enviar">


    </form>

</body>

</html>