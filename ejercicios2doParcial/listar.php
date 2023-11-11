<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header{
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #002060;
            color:white;
            padding: 4px;
        }
        .content{
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #d9e2f3;
            padding: 4px;
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        .operacion{
            text-decoration: none;
            color: white;
            border: 1px solid black;
            padding: 2px;
            background-color: orange;
        }
    </style>
</head>
<body>
    <?php include('conexion.php');
   
    
    $sql = "SELECT id,correo,nombre,rol FROM usuario";
    
    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th class="header">Correo</a></th>
                <th class="header">Nombre</a> </th>
                <th class="header">Nivel</a></th>
                <th class="header">Operacion</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    
                    <td class="content"><?php echo $row['correo']; ?></td>
                    <td class="content"><?php echo $row['nombre']; ?></td>
                    <td class="content"><?php echo $row['rol']; ?></td>
                    <td class="content">
                        <a class="operacion" href="javascript:cambiar('<?php echo $row['id'];?>','<?php echo $row['rol']=="Administrador"?"Usuario":"Administrador";?>')">
                        <?php echo "Cambiar a ",$row['rol']=="Administrador"?"Usuario":"Administrador";?>
                        </a>
                    
                    </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>


</body>

</html>