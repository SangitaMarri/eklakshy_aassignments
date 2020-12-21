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
    <form action="7factorial.php" method="get">
    Enter umber:<input type="number" name="num">
    <input type="submit" value="submit">
    </form>
    <?php
    $factorial=1;
    for ($x=$num;$x>=1;$x--){
        $factorial=$factorial*$x;
    }
    echo"factorial of ",$num,"is",$factorial;
    ?>
</body>
</html>