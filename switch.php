<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$favcolor = "red";

switch ($favcolor) {
  case "Es Teh":
    echo "Minuman Favoritmu adalah Es Teh!";
    break;
  case "Nasi Goreng":
    echo "Makanan favoritmu adalah Nasi Goreng!";
    break;
  case "Ciki Taro":
    echo "Snack Kesukaanmu adalah Ciki Taro!";
    break;
  default:
    echo "Kesukaanmu adalah Es Teh, Nasi Goreng, Ciki Taro!";
}
?>
</body>
</html>