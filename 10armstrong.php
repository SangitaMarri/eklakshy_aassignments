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
    <form action="10armstrong.php" method="get">
    Enter num<input type="number" name="num">
        <input type="submit" value="submit">
    </form>
    <?php
    $total=0;
    $x=$num;
    while($x!=0)
    {
        $rem=$x%10;
        $total=$total+$rem*$rem*$rem;
        $x=$x/10;
    }
    if($num==$total){
        echo"its an armstrong number";
    }
    else{
        echo"not an armstrong number";
    }
    ?>
</body>
</html>