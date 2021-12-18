<?php 
	//session login
	session_start();
    if (!isset($_SESSION['login'])) {
        header("location:login.php");
    	exit;
    }

// koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
$NAMA_PERANGKAT_DESA = $_POST['NAMA_PERANGKAT_DESA'];
$NIP = $_POST['NIP'];
$JENIS_KELAMIN= $_POST['JENIS_KELAMIN'];
$TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];
$ALAMAT = $_POST['ALAMAT'];
$JABATAN = $_POST['JABATAN'];

// echo "
// 	'$NAMA_PERANGKAT_DESA',
// 	'$NIP','$JENIS_KELAMIN',
// 	'$TANGGAL_LAHIR',
// 	'$ALAMAT',
// 	'$JABATAN'

// ";
//menginput data ke db

mysqli_query($koneksi, "INSERT INTO `perangkat_desa` (`ID_PERANGKAT_DESA`, `NAMA_PERANGKAT_DESA`, `NIP`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `ALAMAT`, `JABATAN`) VALUES (NULL, '$NAMA_PERANGKAT_DESA', '$NIP', '$JENIS_KELAMIN', '$TANGGAL_LAHIR', '$ALAMAT ', '$JABATAN');");



// mengalihkan halamankembali ke penduduk
header("location:perangkat_desa.php");
 ?>