<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifelse Reza</title>
</head>
<body>
<?php
$t = date("H");

if ($t < "20") {
  echo "Selamat Siang!";
} else {
  echo "Selamat Pagi!";
}
?>
</body>
</html>