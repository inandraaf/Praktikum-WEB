<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variabel</title>
</head>

<body>
    <h1>Buku Tamu</h1>
    <form action="variable.php" method="POST">
        <p>Nama : <input type="text" name="nama" size="20"></p>
        <p>Email : <input type="email" name="email" size="30"></p>
        <p>Komentar : <textarea name="komentar" id="" cols="30" rows="3"></textarea></p>
        <p><input type="submit" value="Kirim" name="submit"></p>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];
        $submit = $_POST['submit'];

        echo "<br>Nama : " . $nama;
        echo "<br>Email : " . $email;
        echo "<br>Komentar : " . $komentar;
    }


    ?>
</body>

</html>