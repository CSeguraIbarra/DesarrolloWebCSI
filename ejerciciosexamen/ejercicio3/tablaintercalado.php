<?php
$row = $_GET['row'];
$column = $_GET['column'];
$colores = array("red", "yellow", "green");
?>

<link rel="stylesheet" href="style.css">

<table class="tabla">
    <?php for ($fila = 1; $fila <= $row; $fila++) { ?>
        <tr>
            <?php for ($columna = 1; $columna <= $column; $columna++) { 
                $color = $colores[($fila - 1) % count($colores)]; ?>
                <td style="background-color: <?php echo $color; ?>"></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
