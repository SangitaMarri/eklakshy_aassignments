<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="9year.php" method="get">
    enter date:<input type="datetime-local" name="date">
    <input type="submit" value="submit">
    </form>
    <?php
    $dates=$_GET["date"];
    $dates1=strval($dates);
    echo var_dump($dates1),"<br>";
    $arr1=explode("-",$dates1);
    $year=$arr1[0];
    
   
   
    if($year%400==0 || $year%4==0 && $year%100!=0){
        echo "its a leap year";
    }
    
    else{ 
        echo"its not a leap year";
        }
   

    ?>
    
   
</body>
</html>