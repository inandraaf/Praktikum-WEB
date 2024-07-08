<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Penjumlahan</title>
</head>

<body>
    <form action="penjumlahan.php" method="POST">
        <p>Nilai A adalah <input type="text" name="nilaiA" size="3"></p>
        <p>Nilai B adalah <input type="text" name="nilaiB" size="3"></p>
        <p><input type="submit" value="Jumlahkan" name="submit"></p>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilaiA = $_POST['nilaiA'];
        $nilaiB = $_POST['nilaiB'];
        $submit = $_POST['submit'];
        $hasil = $nilaiA + $nilaiB;
        echo "Nilai A adalah $nilaiA <br>";
        echo "Nilai B adalah $nilaiB <br>";
        echo "Jadi Nilai A ditambah Nilai B adalah $hasil";
    }
    ?>
</body>

</html>