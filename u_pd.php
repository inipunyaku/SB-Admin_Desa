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
$id = $_GET['id'];
$NAMA_PERANGKAT_DESA = $_POST['NAMA_PERANGKAT_DESA'];
$NIP = $_POST['NIP'];
$JENIS_KELAMIN= $_POST['JENIS_KELAMIN'];
$TANGGAL_LAHIR = $_POST['TANGGAL_LAHIR'];
$ALAMAT = $_POST['ALAMAT'];
$JABATAN = $_POST['JABATAN'];

//menginput data ke db

mysqli_query($koneksi, "UPDATE perangkat_desa SET 
	NAMA_PERANGKAT_DESA='$NAMA_PERANGKAT_DESA', 
	NIP='$NIP', 
	JENIS_KELAMIN='$JENIS_KELAMIN', 
	TANGGAL_LAHIR='$TANGGAL_LAHIR', 
	ALAMAT='$ALAMAT', 
	JABATAN='$JABATAN' 
	WHERE ID_PERANGKAT_DESA='$id'");

	echo "
		<script>
		alert('data di ubah');
		document.location.href = 'perangkat_desa.php';
		</script>
	";
?>