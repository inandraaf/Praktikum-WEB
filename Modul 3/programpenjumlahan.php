<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Penjumlahan</title>
</head>
<body>
    <form method="POST" action="programpenjumlahan.php">
        <p>Nilai A adalah : <input type="text" name="nilaiA" size="20"></p>
        <p>Nilai B adalah : <input type="text" name="nilaiB" size="20"></p>
        <p><input type="submit" value="Jumlahkan" name="jumlah"></p>
    </form>

    <?php
        error_reporting (E_ALL ^ E_NOTICE);
        $nilaiA = $_POST["nilaiA"];
        $nilaiB = $_POST["nilaiB"]; 

        echo"Nilai A adalah $nilaiA</br>";
        echo"Nilai B adalah $nilaiB</br>";
        echo"Maka Nilai A ditambah Nilai B adalah "; echo $nilaiA + $nilaiB;
    ?>
</body>
</html>