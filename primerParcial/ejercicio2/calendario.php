<?php
$mes=$_POST['mes'];
$año=$_POST['año'];

//$fecha = "2023-09-01";
//$numeroDiaSemana = date("w", strtotime($fecha));
//echo "El día de la semana de $fecha es $numeroDiaSemana";
?>

<table>
    <tr style="background-color: orange;color: white;">
        <td>Lunes</td>
        <td>Martes</td>
        <td>Miercoles</td>
        <td>Jueves</td>
        <td>Viernes</td>
        <td>Sabado</td>
        <td>Domingo</td>
    </tr>
    <?php
    $dia=0;
    //echo "El día de la semana de $fecha es $numeroDiaSemana";
    for($i=1;$i<=6;$i++){
        if($i%2==0){
            echo "<tr>";
        }
        else{
            echo "<tr style='background-color: #FDE9D9;'>";
        }
    ?>
        <?php 
        for($j=0;$j<=6;$j++){
        $fecha = "$año-$mes-$dia";
        $numeroDiaSemana = date("w", strtotime($fecha));
        //echo "El día de la semana de $fecha es $numeroDiaSemana";
            if($j==$numeroDiaSemana && $dia<=30){
                $dia++;
                ?>
                <td><?php echo($dia)?></td>
                <?php 
                //echo "El día de la semana de $fecha es $numeroDiaSemana";
                //$dia++;
            }else{
                ?>
                <td></td>
            <?php
            }
            ?>
        <?php
        }
        ?>
        </tr>
        <?php
    }
    ?>
</table>