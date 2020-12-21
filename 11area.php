<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
    $shape=$_GET["Shapes"];
    $length=$_GET["length"];
    $width=$_GET["width"];
    $radius=$_GET["radius"];
    ?>
<form action="11area.php" method="get">
 Shapes:<input type="radio" name="Shapes" value="Triangle">Triangle <br>;
 <input type="radio" name="Shapes" value="Square">Square <br>;
 <input type="radio" name="Shapes" value="Rectange">Rectangle <br>;
 <input type="radio" name="Shapes" value="Circle">Circle <br>;
 Enter length:<input type="number" name="length">;
Enter width:<input type="number" name="width">;
Enter radiys:<input type="number" name="radius">;
 <input type="submit" value="submit">
</form>
<?php
if($shape=="Triangle"){
    $area1=(1/2)*$length*$width;
    echo"area of triangle",$area1;
} 
else if($shape="Square")
{
    $area2=$length*$length;
    echo "area of square",$area2;
}
else if($shape="Rectangle")
{
    $area3=$length*$width;
    echo "area of rectangle ",$area3;
}
else if($shape="Circle")
{
    $area4=(3.14)*$radius*$radius;
    echo "area of circle",$area4;
}
?>

    
</body>
</html>