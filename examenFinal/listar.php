<?php include('conexion.php');
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
        <table class="table1">
            <tr>
                <th class="header">Imagen</th>
                <th class="header">Titulo</th>
                <th class="header">Autor</th>
                <th class="header">Editorial</th>
                <th class="header">Año</th>
                <th class="header">Usuario</th>
                <th class="header">Carrera</th>
                <th class="header">Operacion</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td class="content1"><img src="images/<?php echo $row['imagen'];?>" ></td>
                    <td class="content1"><?php echo $row['titulo']; ?></td>
                    <td class="content1"><?php echo $row['autor']; ?></td>
                    <td class="content1"><?php echo $row['editoriales']; ?></td>
                    <td class="content1"><?php echo $row['anio']; ?></td>
                    <td class="content1"><?php echo $row['usuarios']; ?></td>
                    <td class="content1"><?php echo $row['carreras']; ?></td>
                    <td><a href="javascript:cargarContenidofetch('formUpdate.php')=<?php echo $row['id'];?>">Editar</a>
                        <a href="javascript:cargarContenidofetch('delete.php')=<?php echo $row['id'];?>">Eliminar</a>
                </td>
                </tr>
            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>