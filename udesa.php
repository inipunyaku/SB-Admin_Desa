<?php 
	//session login
	session_start();
    if (!isset($_SESSION['login'])) {
        header("location:login.php");
    	exit;
    }

	// koneksi database
	include 'koneksi.php';
	 $id = $_GET['id'];
	//menangkap sebuah data yang dikirim dari form
	$KODE_DESA = $_POST['KODE_DESA'];
	$NAMA_DESA = $_POST['NAMA_DESA'];
	$TITIK_KOORDINAT = $_POST['TITIK_KOORDINAT'];
	$KECAMATAN = $_POST['KECAMATAN'];
	$PROVINSI= $_POST['PROVINSI'];
	$LUAS_DESA = $_POST['LUAS_DESA'];
	$KODE_POS = $_POST['KODE_POS'];
	//menginput data ke db

	$query="UPDATE data_desa SET 
	KODE_DESA='$KODE_DESA',
	NAMA_DESA='$NAMA_DESA',
	TITIK_KOORDINAT='$TITIK_KOORDINAT',
	KECAMATAN='$KECAMATAN',
	PROVINSI='$PROVINSI',
	LUAS_DESA=$LUAS_DESA,
	KODE_POS='$KODE_POS'
	WHERE ID_DESA='$id'";
	
	mysqli_query($koneksi, $query);
	echo "
		<script>
		alert('data di ubah');
		document.location.href = 'desa.php';
		</script>
	";
 ?>