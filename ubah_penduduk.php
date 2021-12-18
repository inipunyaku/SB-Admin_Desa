<?php 
    session_start();
    if (!isset($_SESSION['login'])) {
        header("location:login.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-city"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SISTEM INFORMASI DESA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-house-damage"></i>
                    <span>Data Desa</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="desa.php">Data Desa</a>
                        <a class="collapse-item" href="perangkat_desa.php">Data Perangkat Desa</a>
                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user-friends"></i>
                    <span>Data Kependudukan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="Penduduk.php">Data Penduduk</a>
                        <a class="collapse-item" href="keluarga.php">Data Keluarga</a>
                    </div>
                </div>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="saran.php">
                    <i class="far fa-comment-dots"></i>
                    <span>Saran & Kritik</span></a>
            </li>



          
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <?php 
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM Penduduk WHERE ID_PENDUDUK = '$id'");
                    $d = mysqli_fetch_array($data);
                    // membuat function untuk set aktif radio button
                    function active_radio_button($value,$input){
                    // apabilan value dari radio sama dengan yang di input
                    $result =  $value==$input?'checked':'';
                    return $result;
}
                ?>





                <div class="container-fluid">
                	<h1 class="h3 mb-2 text-gray-800">Form Ubah Data Penduduk</h1>

                	<form method="POST" action="upenduduk.php?id=<?php echo $id; ?>">
					  <div class="form-group row">
					    <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="NIK" name="NIK" placeholder="NIK" value="<?php echo $d['NIK']; ?>" required>
					    </div>
					  </div>
					  
					  <div class="form-group row">
					    <label for="NAMA" class="col-sm-2 col-form-label">NAMA</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="NAMA" name="NAMA" placeholder="NAMA" value="<?php echo $d['NAMA']; ?>" required>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="TEMPAT_LAHIR" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="TEMPAT LAHIR" name="TEMPAT_LAHIR" placeholder="TEMPAT LAHIR" value="<?php echo $d['TEMPAT_LAHIR']; ?>" required>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="TANGGAL_LAHIR" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="TANGGAL_LAHIR" name="TANGGAL_LAHIR"  value="<?php echo $d['TANGGAL_LAHIR']; ?>" required>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="JENIS_KELAMIN" class="col-sm-2 col-form-label">JENIS_KELAMIN</label>
					    <div class="col-sm-10">
					    	<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="JENIS_KELAMIN" id="laki-laki" value="laki-laki" <?php echo active_radio_button("laki-laki",$d['JENIS_KELAMIN']) ?>>
							  <label class="form-check-label" for="inlineRadio1">LAKI-LAKI</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="JENIS_KELAMIN" id="perempuan" value="perempuan" <?php echo active_radio_button("perempuan", $d['JENIS_KELAMIN']) ?>>
							  <label class="form-check-label" for="inlineRadio2">PEREMPUAN</label>
							</div>
					    </div>




					  </div>

					  <div class="form-group row">
					    <label for="GOLONGAN_DARAH" class="col-sm-2 col-form-label">GOLONGAN DARAH</label>
					    <div class="col-sm-10">
					      <select class="form-control form-control-lg" id="GOLONGAN_DARAH" name="GOLONGAN_DARAH">
					      	<option value="<?php echo $d['GOLONGAN_DARAH'] ?>"><?php echo $d['GOLONGAN_DARAH'] ?></option>
					      	<option value="A">A</option>
					      	<option value="B">B</option>
					      	<option value="AB">AB</option>
					      	<option value="O">O</option>
					      </select>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="ALAMAT_" class="col-sm-2 col-form-label">ALAMAT</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="ALAMAT_" name="ALAMAT_" placeholder="ALAMAT" value="<?php echo $d['ALAMAT_']; ?>"required="required">
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="PEKERJAAN" class="col-sm-2 col-form-label">PEKERJAAN</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="PEKERJAAN" name="PEKERJAAN" placeholder="PEKERJAAN" value="<?php echo $d['PEKERJAAN']; ?>"required="required">
					    </div>
					  </div>

					   <div class="form-group row">
					    <label for="STATUS_KAWIN" class="col-sm-2 col-form-label">STATUS KAWIN</label>
					    <div class="col-sm-10">
					    	<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="STATUS_KAWIN" id="Menikah" value="Menikah" <?php echo active_radio_button("Menikah", $d['STATUS_KAWIN']) ?>>
							  <label class="form-check-label" for="inlineRadio1">MENIKAH</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="STATUS_KAWIN" id="Belum Menikah" value="Belum Menikah" <?php echo active_radio_button("Belum Menikah", $d['STATUS_KAWIN']) ?>>
							  <label class="form-check-label" for="inlineRadio2">BELUM MENIKAH</label>
							</div>
					    </div>
					</div>

					    <div class="form-group row">
					    <label for="KEWARGANEGARAAN" class="col-sm-2 col-form-label">KEWARGANEGARAAN</label>
					    <div class="col-sm-10">
					    	<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="KEWARGANEGARAAN" id="WNI" value="WNI" <?php echo active_radio_button("WNI", $d['KEWARGANEGARAAN']) ?>>
							  <label class="form-check-label" for="inlineRadio1">WNI</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="KEWARGANEGARAAN" id="WNA" value="WNA" <?php echo active_radio_button("WNA", $d['KEWARGANEGARAAN']) ?>>
							  <label class="form-check-label" for="inlineRadio2">WNA</label>
							</div>
					    </div>

					</div>

					  <div class="form-group row">
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">Ubah Data</button>
					    </div>
					  </div>
					</form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Informasi Desa | Kel-5</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>