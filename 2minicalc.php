<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="2minicalc.php" method="get">
Enter num1:<input type="number" name="num1">
Enter num2:<input type="number" name="num2"><br>
<input type="submit" name="operator" value="ADD">
<input type="submit" name="operator" value="SUBTRACT">
<input type="submit" name="operator" value="MULTIPLY">
<input type="submit" name="operator" value="DIVISION">
</form>
<?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$operator=$_GET["operator"];
switch ($operator) {
    case 'ADD':
        $result=$num1+$num2;
        echo"result:",$result;
        break;
        case 'MULTIPLY':
            $result=$num1*$num2;
            echo"result:",$result;
            break;
            case 'SUBTRACT':
                $result=$num1-$num2;
                echo"result:",$result;
                break;
                case 'DIVISION':
                    $result=$num1/$num2;
                    echo"result:",$result;
                    break;     
}
?>


    
</body>
</html>