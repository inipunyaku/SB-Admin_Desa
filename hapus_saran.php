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
 	mysqli_query($koneksi, "DELETE FROM saran WHERE ID_SARAN=$id");

 	// mengalihkan halamankembali ke penduduk
	header("location:saran.php");

 ?>