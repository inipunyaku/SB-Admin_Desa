<?php 
	//session login
	session_start();
    if (!isset($_SESSION['login'])) {
        header("location:login.php");
    	exit;
    }
	include 'koneksi.php';
	 $id = $_GET['id'];
	 $ID_PENDUDUK = $_POST['ID_PENDUDUK'];
	 $HUBUNGAN_KELUARGA = $_POST['HUBUNGAN_KELUARGA'];

	 mysqli_query($koneksi, "INSERT INTO `anggota_keluarga` (`ID_ANGGOTA`, `ID_PENDUDUK`, `ID_KELUARGA`, `HUBUNGAN_KELUARGA`) VALUES (NULL, '$ID_PENDUDUK', '$id','$HUBUNGAN_KELUARGA');");

	header("location:anggota.php?id=$id");

?>