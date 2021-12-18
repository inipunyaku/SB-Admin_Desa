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
$NIK = $_POST['NIK'];
$NAMA = $_POST['NAMA'];
$TEMPAT_LAHIR = $_POST['TEMPAT_LAHIR'];
$TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];
$JENIS_KELAMIN= $_POST['JENIS_KELAMIN'];
$GOLONGAN_DARAH = $_POST['GOLONGAN_DARAH'];
$ALAMAT_ = $_POST['ALAMAT_'];
$PEKERJAAN = $_POST['PEKERJAAN'];
$STATUS_KAWIN = $_POST['STATUS_KAWIN'];
$KEWARGANEGARAAN = $_POST['KEWARGANEGARAAN'];

//menginput data ke db

mysqli_query($koneksi, "INSERT INTO `penduduk` (`ID_PENDUDUK`, `NIK`, `NAMA`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `GOLONGAN_DARAH`, `ALAMAT_`, `PEKERJAAN`, `STATUS_KAWIN`, `KEWARGANEGARAAN`) VALUES (NULL, '$NIK', '$NAMA', '$TEMPAT_LAHIR', '$TANGGAL_LAHIR', '$JENIS_KELAMIN', '$GOLONGAN_DARAH', '$ALAMAT_', '$PEKERJAAN', '$STATUS_KAWIN', '$KEWARGANEGARAAN')");

// mengalihkan halamankembali ke penduduk
header("location:penduduk.php");
 ?>