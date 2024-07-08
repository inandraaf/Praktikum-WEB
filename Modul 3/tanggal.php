<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Tanggal dan Waktu</title>
</head>

<body>
    <?php
    date_default_timezone_set('Asia/jakarta');
    $jam = date("H:i:s A");
    $waktu = date("d-m-y");
    $hari = date("1");
    $tanggal = date("d");
    $bulan = date("F");
    $tahun = date("Y");
    echo "Sekarang jam $jam <br>";
    echo "Sekarang Tanggal $waktu <br>";
    echo "Lebih detail hari $hari Tanggal $tanggal Bulan $bulan tahun $tahun";
    ?>
</body>

</html>