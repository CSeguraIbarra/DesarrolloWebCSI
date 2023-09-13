<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="amarillo">
        <div class="gris center">
            <?php
$cantidad=$_POST['cantidad'];
$a=$_POST['a'];
$b=$_POST['b'];
//ml, cm, dm , m , km 
if($a=="ml")
{
    if($b=="cm"){
        $cm=0;
        $cm=$cantidad*0.1;
        echo $cm." ".$b;
    }else if($b=="dm")
    {
        $dm=0;
        $dm=$cantidad*0.01;
        echo $dm." ".$b;
    }else if($b=="m"){
        $m=0;
        $m=$cantidad*0.001;
        echo $m." ".$b;
    }else if($b=="km"){
        $km=0;
        $km=$cantidad*0.000001;
        echo $km." ".$b;
    }else {
        echo $cantidad." ".$b;
    }
}else if($a=="cm")
{
    if($b=="ml"){
        $ml=0;
        $ml=$cantidad*10;
        echo $ml." ".$b;
    }else if($b=="dm")
    {
        $dm=0;
        $dm=$cantidad*0.1;
        echo $dm." ".$b;
    }else if($b=="m"){
        $m=0;
        $m=$cantidad*0.01;
        echo $m." ".$b;
    }else if($b=="km"){
        $km=0;
        $km=$cantidad*0.00001;
        echo $km." ".$b;
    }else {
        echo $cantidad." ".$b;
    }
}else if($a=="dm")
{
    if($b=="ml"){
        $ml=0;
        $ml=$cantidad*100;
        echo $ml." ".$b;
    }else if($b=="cm")
    {
        $cm=0;
        $cm=$cantidad*10;
        echo $cm." ".$b;
    }else if($b=="m"){
        $m=0;
        $m=$cantidad*0.1;
        echo $m." ".$b;
    }else if($b=="km"){
        $km=0;
        $km=$cantidad*0.0001;
        echo $km." ".$b;
    }else {
        echo $cantidad." ".$b;
    }
}else if($a=="m")
{
    if($b=="ml"){
        $ml=0;
        $ml=$cantidad*1000;
        echo $ml." ".$b;
    }else if($b=="cm")
    {
        $cm=0;
        $cm=$cantidad*100;
        echo $cm." ".$b;
    }else if($b=="dm"){
        $dm=0;
        $dm=$cantidad*10;
        echo $dm." ".$b;
    }else if($b=="km"){
        $km=0;
        $km=$cantidad*0.001;
        echo $km." ".$b;
    }else {
        echo $cantidad." ".$b;
    }
}
else if($a=="km")
{
    if($b=="ml"){
        $ml=0;
        $ml=$cantidad*1000000;
        echo $ml." ".$b;
    }else if($b=="cm")
    {
        $cm=0;
        $cm=$cantidad*100000;
        echo $cm." ".$b;
    }else if($b=="dm"){
        $dm=0;
        $dm=$cantidad*10000;
        echo $dm." ".$b;
    }else if($b=="m"){
        $m=0;
        $m=$cantidad*1000;
        echo $m." ".$b;
    }else {
        echo $cantidad." ".$b;
    }
}?>
        </div>
    </div>
</body>
</html>
