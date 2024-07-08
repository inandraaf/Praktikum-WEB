<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengakses Data Session</title>
</head>
<body>
    <?php
        $_SESSION['counter']++;
        $_SESSION['nama_pengunjung'] = "Nandra";
        echo "Selamat Datang 
        ".$_SESSION['nama_pengunjung']."<br>";
        echo "Anda telah mengunjungi halaman ini sebanyak 
        ".$_SESSION['counter']." kali.";
    ?>
</body>
</html>