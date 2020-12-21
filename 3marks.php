<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $m1=$_GET["m1"];
    $m2=$_GET["m2"];
    $m3=$_GET["m3"];
   
        ?>
<form action="3marks.php" method="get">
Marks in Maths<input type="number" name="m1">
Marks in Science<input type="number" name="m2">
Marks in English<input type="number" name="m3">
<input type="submit" value="submit">
</form>

<?php

$sum=$m1+$m2+$m3;
echo "Sum of Marks is ",$sum;
$avg=$sum/3;
echo "<br>Average is ",$avg;
if( $avg>=90){
    echo "Grade is A+";
}
else if( $avg>=80 && $avg< 90)
{
    echo "Grade is B";
}
else if( $avg>=70 && $avg< 80)
{
    echo "Grade is C";
}
else{
    echo "Grade if F";
}
?>



    
</body>
</html>