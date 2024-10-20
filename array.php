<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Reza</title>
</head>

<body>
    <pre>
    <?php
    $kendaraan = array("Sepeda", "Mobil", "Motor", "Pesawat", "Becak");
    $kelas = array("Sangat Tinggi", "Tinggi", "Sedang", "Rendah", "Sangat Rendah");
    $jenis = array("Toyota", "BMW", "Ferrari", "Ducati", "Honda");
    echo "<table border='3'>";
    for ($i = 0; $i <= 4; $i++) {
        echo "<tr><td> $kendaraan[$i] </td><td> $kelas[$i] </td><td> $jenis[$i]</td></tr>";
    }
    echo "</table>";


    ?>

</pre>
</body>

</html>