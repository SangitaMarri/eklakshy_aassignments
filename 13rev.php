<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string=$_GET["string"];
    ?>
    <form action="13rev.php" method="get">
        Enter string:<input type="text" name="string">
        <input type="submit" value="submit">
</form>
<?php
function revstring($string){
    return strrev($string);
}
echo revstring($string);
?>
</body>
</html>