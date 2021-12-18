<?php 
	//session login
	session_start();
    if (!isset($_SESSION['login'])) {
        header("location:login.php");
    	exit;
    }
	include 'koneksi.php';
	$NO_KK = $_POST['NO_KK'];
	$PENGHASILAN= $_POST['PENGHASILAN'];

	mysqli_query($koneksi, "INSERT INTO `keluarga` (`ID_KELUARGA`, `NO_KK`, `PENGHASILAN`) VALUES (NULL, '$NO_KK', '$PENGHASILAN');");

	header("location:keluarga.php");

 ?>