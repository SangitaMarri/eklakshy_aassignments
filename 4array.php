<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

    <form action="4array.php" method="get">
        Enter Name:<input type="text" name="name">
        <input type="submit" value="submit">
    </form>
        

        <?php
    $usernames=array('Ria','Ram','Sangita','Tom');
    $names=$_GET["name"];
    foreach($usernames as $values)
    {
        if ($values==$names)
            {
                echo"welcome",$values;
                break;
            }
            else
            {
                echo"wrong user";
                break;
            }
    }

    ?>
</body>
</html>