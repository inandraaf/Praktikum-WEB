<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <p>Masukkan angka: <input type="text" name="angka"><br></p>
        <input type="submit" name="submit" value="Cek">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $angka = $_POST['angka'];

        if (is_numeric($angka)) {
            if ($angka % 2 == 0) {
                echo "adalah bilangan Genap";
            } else {
                echo "adalah bilangan Ganjil";
            }
        }
    }
    ?>
</body>

</html>