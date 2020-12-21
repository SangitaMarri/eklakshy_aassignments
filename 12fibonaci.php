<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function fibonacci($n){
     $num1=0;
     $num2=1;
     $counter=0;
     echo"fibonacci series:";
     while($counter<$n){
        
         echo"".$num1;
         $num3=$num2+$num1;
         $num1=$num2;
         $num2=$num3;
         $counter=$counter+1;
     }

    }
    $n=10;
    fibonacci($n);
    ?>
</body>
</html>