<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=$_GET["num"];
    ?>
     <form action="16swap.php" method="get">
        enter number<input type="number" name="num">
        <input type="submit" value="submit">
        <form>
            <?php
            $revnum=0;
            while($num>1){
                $rem=$num%10;
                $revnum=($revnum*10)+$rem;
                $num=$num/10;
            }
            echo"reversed no:",$revnum;
            ?>
</body>
</html>