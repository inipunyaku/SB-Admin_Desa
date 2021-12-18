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

	$query="UPDATE penduduk SET  NIK='$NIK',NAMA='$NAMA', TEMPAT_LAHIR='$TEMPAT_LAHIR',TANGGAL_LAHIR='$TANGGAL_LAHIR',JENIS_KELAMIN='$JENIS_KELAMIN',ALAMAT_='$ALAMAT_',GOLONGAN_DARAH='$GOLONGAN_DARAH',PEKERJAAN='$PEKERJAAN',STATUS_KAWIN='$STATUS_KAWIN',KEWARGANEGARAAN='$KEWARGANEGARAAN' where ID_PENDUDUK='$id'";
	mysqli_query($koneksi, $query);
	// mengalihkan halamankembali ke penduduk

	echo "
		<script>
		alert('data di ubah');
		 document.location.href = 'penduduk.php';
		</script>
	";
 ?>