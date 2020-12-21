<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="get">
    Enter Name:<input type="text" name="username"><br>
    Select course:<select name="choice">
    <option value="select" >--select--</option>
    <option value="java">Java</option>
    <option value="python">Python</option>
    <option value="angular">Angular</option>
    <option value="node">Node</option>
    </select>
    <input type="submit" value="Suggest User">
    <?php
    $username=$_GET["username"];
    $coursename=$_GET["choice"];
    switch ($coursename) {
        case 'java':
            include 'java.php';
            break;
            case 'python':
                include 'python.php';
                break;
                case 'angular':
                    include 'angular.php';
                    break;
                    case 'node':
                        include 'node.php';
                        break;
  }
  ?>
        
</body>
</html>