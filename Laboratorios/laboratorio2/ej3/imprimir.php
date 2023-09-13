<?php
$rows = $_POST['rows'];
$column=$_POST['column'];
$color=$_POST['color'];
echo"<style> table{border-collapse: collapse;}</style>";
echo "<table border='1'>";
for($fila=1; $fila<=$rows ; $fila++)
{
echo "<tr>";
for($columna=1; $columna<=$column; $columna++)
{

    if($fila%2==0)
    {
        if($columna%2==0)
        {
            echo "<td style='background-color: $color; width: 50px; height: 50px;'></td>";
        } else
        {
            echo "<td style='background-color: white; width: 50px; height: 50px'></td>";
        }
    }else
    {
        if($columna%2==0)
        {
            echo "<td style='background-color: white; width: 50px; height: 50px'></td>";
        }else
        {
            echo "<td style='background-color: $color; width: 50px; height: 50px'></td>";
        }
    }
    
}
echo "</tr>";
}
echo "</table>"
?>