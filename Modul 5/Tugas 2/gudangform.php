<html>
	<head>
		<title>Data Gudang</title>
	</head>
		<?php
			$conn = mysqli_connect('localhost','root','','penyimpanan');
		?>
		<body>
			<center>
				<h3>Masukkan Data Gudang :</h3>
					<table border='0' width='30%'>
					<form method='POST' action = 'gudangform.php'>
						<tr>
							<td width='25%'>Kode Gudang</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='kode' size='10'></td>
						</tr>
						<tr>
							<td width='25%'>Nama Gudang</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='nama' size='30'></td>
						</tr>
						<tr>
							<td width='25%'>Lokasi</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='lokasi' size='40'></td>
						</tr>
					</table>
					<input type='submit' value='Masukkan' name='submit'>
					</form>
					<?php
					error_reporting(0);
					$kode = $_POST['kode'];
					$nama = $_POST['nama'];
					$lokasi = $_POST['lokasi'];
					$submit = $_POST['submit'];
					$input = "INSERT INTO gudang (kode_gudang, nama_gudang,lokasi)values
					('$kode', '$nama','$lokasi')";
					if ($submit){
						if ($kode==''){
							echo "</br>Kode tidak boleh kosong";
						}elseif ($nama==''){
							echo "</br>Nama tidak boleh kosong";
						}elseif ($lokasi==''){
							echo "</br>Lokasi tidak boleh kosong";
						}else
							mysqli_query($conn, $input);
							echo "
							<script>
							alert('data berhasil dimasukkan');
							document.location.href='gudangform.php';
							</script>";
					}
					?>
					<hr>
					<h3>Data Gudang</h3>
					<table border='1' width='50'>
						<tr>
							<td align='center' width='20%'><b>Kode Gudang</b></td>
							<td align='center' width='30%'><b>Nama Gudang</b></td>
							<td align='center' width='30%'><b>Lokasi</b></td>
							<td colspan= 2 align='center' width='30%'><b>Keterangan</b></td>
						</tr>
						<?php
						$cari = "SELECT * FROM gudang ORDER BY kode_gudang";
						$hasil_cari = mysqli_query($conn,$cari);
						while($data = mysqli_fetch_array($hasil_cari)){
						echo"
						<tr>
							<td width='20%'>$data[kode_gudang]</td>
							<td width='30%'>$data[nama_gudang]</td>
							<td width='30%'>$data[lokasi]</td>
							<td width='30%'><a href='formUpdate.php?KODE=$data[kode_gudang]'>Ubah</a></td>
							<td width='30%'><a href='deleteGudang.php?KODE=$data[kode_gudang]'>Hapus</a></td>
						</tr>";
						}
						?>
					</table>
				</center>
			</body>
		</html>