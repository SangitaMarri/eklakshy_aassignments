<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$sentence="The quick brown fox
    jumps over the lazy dog";
$len=strlen($sentence);
$count=0;
for( $i=0;$i<$len;$i++)
{

if (($sentence[$i]=='a')||($sentence[$i]=='e')||($sentence[$i]=='i')||($sentence[$i]=='o')||($sentence[$i]=='u'))
{
$count=$count+1;

}
}
echo"total vowels:",$count;

?>
  
</body>
</html>