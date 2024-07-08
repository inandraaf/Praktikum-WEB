<?php
	ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
	$conn = mysqli_connect('localhost','root','','penyimpanan');

	if($_POST['submit']){
		$kode=$_POST['kode'];
		$nama=$_POST['nama'];
		$lokasi=$_POST['lokasi'];
		if ($kode==''){
			echo "kode tidak boleh kosong, diisi dulu";
		}else if ($nama==''){
			echo "Nama tidak boleh kosong";
		}elseif ($lokasi==''){
			echo "Lokasi tidak boleh kosong";
		}else{

			$update="UPDATE gudang set kode_gudang='$kode', nama_gudang='$nama',lokasi='$lokasi' WHERE kode_gudang='$kode' ";
			mysqli_query($conn,$update);
			echo "
			<script>
			alert('data berhasil di update');
			document.location.href='gudangform.php';
			</script>";
		}
	}


?> 