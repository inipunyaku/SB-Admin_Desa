<?php 
	include 'koneksi.php';
	$NAMA = $_POST['NAMA'];
	$SARAN= $_POST['SARAN'];

	mysqli_query($koneksi, "INSERT INTO `saran` (`ID_SARAN`, `NAMA`, `SARAN`) VALUES (NULL, '$NAMA', '$SARAN');");

	header("location:index.php");

 ?>