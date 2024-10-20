<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 65;
    $y = 45;

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    echo $x;
    echo "<br>";
    var_dump($x == $y);
    ?>

<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>  
    
    

</body>
</html>