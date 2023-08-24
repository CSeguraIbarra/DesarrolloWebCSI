<?php
    $numero = $_GET['numero'];
?>

<?php
echo "<table border='1'>";
for($fila=1; $fila<=$numero ; $fila++)
{
    echo "<tr>";
    for($columna=1; $columna<=$numero; $columna++)
    {

        if($fila%2==0)
        {
            if($columna%2==0)
            {
                echo "<td style='background-color: whrite; width: 50px; height: 50px;'></td>";
            } else
            {
                echo "<td style='background-color: black; width: 50px; height: 50px'></td>";
            }
        }else
        {
            if($columna%2==0)
            {
                echo "<td style='background-color: black; width: 50px; height: 50px'></td>";
            }else
            {
                echo "<td style='background-color: whrite; width: 50px; height: 50px'></td>";
            }
        }
        
    }
    echo "</tr>";
}
echo "</table>"
?>

