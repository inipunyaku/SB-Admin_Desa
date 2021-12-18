<?php 
	//session login
	session_start();
    if (!isset($_SESSION['login'])) {
        header("location:login.php");
    	exit;
    }

	include 'koneksi.php';
 	$id = $_GET['id'];
 	// function hapus($id){
 	$back=mysqli_query($koneksi, "SELECT ID_KELUARGA FROM anggota_keluarga WHERE ID_ANGGOTA=$id");
 	mysqli_query($koneksi, "DELETE FROM anggota_keluarga WHERE ID_ANGGOTA=$id");
 	$d = mysqli_fetch_array($back);	
 	// mengalihkan halamankembali ke penduduk
	$back1=$d['ID_KELUARGA'];
	header("location:anggota.php?id=$back1");

 ?>