<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="8palindrome.php" method="get">
    Enter string:<input type="text" name="string">
    <input type="submit" value="submit">
    </form>
    <?php
    $strings=$_GET["string"];
    function palindrome($strings){
        $strings=$_GET["string"];
        if(strrev($strings)==$strings){
            echo"entered string is palindrome";
        }
        else
        {
            echo"entered string is not a palindrome";
        }
    }
    palindrome($strings);
    ?>
</body>
</html>