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
 	mysqli_query($koneksi, "DELETE FROM Penduduk WHERE ID_PENDUDUK=$id");

 	// mengalihkan halamankembali ke penduduk
	header("location:penduduk.php");

 ?>