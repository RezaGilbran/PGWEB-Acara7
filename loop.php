<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Reza</title>
</head>
<body>
<?php  
$i = 10;

do {
  echo $i;
  $i++;
} while ($i < 20);
?>  


<?php  
echo "<br>";
for ($x = 5; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>  
</body>
</html>