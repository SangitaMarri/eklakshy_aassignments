<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="15sum.php" method="get">;
        enter number<input type="number" name="num">;
        <input type="submit" value="submit">;
        <form>
            <?php
            $num=$_GET["num"];
            $sum=0;
            $rem=0;
            for($i=0;$i<=strlen((string)$num);$i++){
                $rem=$num%10;
                $sum=$sum+$rem;
                $num=$num/10;
            }
            echo"sum of digits:",$sum;
            ?>
</body>
</html>