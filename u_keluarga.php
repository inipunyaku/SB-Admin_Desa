<?php 
	//session login
	session_start();
    if (!isset($_SESSION['login'])) {
        header("location:login.php");
    	exit;
    }
	include 'koneksi.php';
	$id = $_GET['id'];
	$NO_KK = $_POST['NO_KK'];
	$PENGHASILAN= $_POST['PENGHASILAN'];

	mysqli_query($koneksi, "UPDATE `keluarga` SET  NO_KK ='$NO_KK' ,PENGHASILAN='$PENGHASILAN' WHERE ID_KELUARGA = '$id'");

	echo "
		<script>
		alert('data di ubah');
		document.location.href = 'keluarga.php';
		</script>
	";

 ?>