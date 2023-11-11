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
        .enlace1{
            text-decoration: none;
            color: white;   
        }
    </style>
</head>
<body>
    <?php include('conexionB.php');
    $orden=isset($_GET['orden'])?$_GET['orden']:'id';

    $sql = "SELECT l.id, l.imagen, l.titulo, l.autor, e.editorial AS editoriales, l.anio, u.usuario AS usuarios, c.carrera AS carreras
    FROM libros l 
    INNER JOIN editoriales e ON l.ideditorial = e.id
    INNER JOIN usuarios u ON l.idusuario = u.id
    INNER JOIN carreras c ON l.idcarrera = c.id ";
    
    $sql.="order by $orden";

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th class="header">Imagen</th>
                <th class="header"><a class="enlace1" href="javascript:cargarContenido('listarlibros.php?orden=titulo')">Titulo</a></th>
                <th class="header">Autor</th>
                <th class="header">Editorial</th>
                <th class="header">Año</th>
                <th class="header">Usuario</th>
                <th class="header">Carrera</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td class="content"><img src="images/<?php echo $row['imagen'];?>" ></td>
                    <td class="content"><?php echo $row['titulo']; ?></td>
                    <td class="content"><?php echo $row['autor']; ?></td>
                    <td class="content"><?php echo $row['editoriales']; ?></td>
                    <td class="content"><?php echo $row['anio']; ?></td>
                    <td class="content"><?php echo $row['usuarios']; ?></td>
                    <td class="content"><?php echo $row['carreras']; ?></td>
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