<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $choice=$_GET["choice"];
    ?>

    <form action="5climate.php" method="get">
    <select name="choice">
    <option>--select</option>
    <option value="summer">Summer</option>
    <option value="winter">Winterr</option>
    <option value="windy">Windy</option>
    <option value="Rainy">Rainy</option>
</select>
<input type="submit" value="submit">
</form>
<?php

    $choice=$_GET["choice"];  
switch($choice){
    case 'summer':{
        echo "Eat an icecream";
    }
    break;
    case 'winter':{
        echo "drink hot soup";
 }
 break;
 case 'windy':{
     echo "enjoy cycling";
 }
 break;
 case 'Rainy':{
     echo "drink hot tea and have pakoda";
 }

}

?>
</body>
</html>