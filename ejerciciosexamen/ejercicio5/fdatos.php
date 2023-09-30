<?php
$n=$_POST['n'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="window">
    <form action="insertar.php" method="post">
        <table>
        <tr>
                <th >Nombres</th>
                <th >Apellidos</th>
                <th >CU</th>
                <th >Sexo</th>
                <th >Carrera</th>
        </tr>
            <?php
            for($i=0;$i<$n;$i++){
            ?>
            <tr>
                <td></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>