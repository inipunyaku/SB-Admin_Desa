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
 	mysqli_query($koneksi, "DELETE FROM keluarga WHERE ID_KELUARGA=$id");
 	mysqli_query($koneksi, "DELETE FROM anggota_keluarga WHERE ID_KELUARGA=$id");
 	// mengalihkan halamankembali ke penduduk
	header("location:keluarga.php");

 ?>