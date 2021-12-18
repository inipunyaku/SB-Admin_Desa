<?php 
    include 'koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * FROM perangkat_desa");
    $penduduk = mysqli_query($koneksi, "SELECT * FROM penduduk");
    $jumlahpenduduk = mysqli_num_rows ($penduduk);
    $keluarga = mysqli_query($koneksi, "SELECT * FROM keluarga");
    $jumlahkeluarga = mysqli_num_rows ($keluarga);
    $perangkat_desa = mysqli_query($koneksi, "SELECT * FROM perangkat_desa");
    $jumlahperangkat_desa = mysqli_num_rows ($perangkat_desa);
    $saran = mysqli_query($koneksi, "SELECT * FROM saran");
    $jumlahsaran = mysqli_num_rows ($saran);
    $laki = mysqli_query($koneksi, "SELECT * FROM `penduduk` WHERE `JENIS_KELAMIN` LIKE 'Laki-Laki'");
    $jumlahlaki = mysqli_num_rows ($laki);
    $Perempuan = mysqli_query($koneksi, "SELECT * FROM `penduduk` WHERE `JENIS_KELAMIN` LIKE 'perempuan'");
    $jumlahperempuan = mysqli_num_rows ($Perempuan);
    $kurangmampu = mysqli_query($koneksi, "SELECT * FROM `keluarga` WHERE `PENGHASILAN` BETWEEN 0 AND 1999999");
    $jumlahkurangmampu = mysqli_num_rows ($kurangmampu); 
    $menengah = mysqli_query($koneksi, "SELECT * FROM `keluarga` WHERE `PENGHASILAN` BETWEEN 2000000 AND 4000000");
    $jumlahmenengah = mysqli_num_rows ($menengah); 
    $mampu = mysqli_query($koneksi, "SELECT * FROM `keluarga` WHERE `PENGHASILAN` > 4000000 ");
    $jumlahmampu = mysqli_num_rows ($mampu); 
    $desa = mysqli_query($koneksi, "SELECT * FROM data_desa");
    $datadesa = mysqli_fetch_array ($desa);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link href="css/styles.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><?php echo $datadesa['NAMA_DESA']; ?></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#perangkat_desa">Perangkat Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#statistik">Statistik</a></li>
                    <li class="nav-item"><a class="nav-link" href="#saran">Kritik & Saran</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Selamat Datang di Portal Desa <?php echo $datadesa['NAMA_DESA']; ?></h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="mb-5">"Desa Asri, Kreatif, Inovatif, dan Keren</p>
                    <a class="btn btn-outline-light btn-xl button1" href="#about">Lihat Profil Kami</a>
                </div>
            </div>
        </div>
    </header>

    <div id="about">
    	
    	<div class="container">
    		<div class="row justify-content-md-center">
    			<div class="col justify-content-md-center text-center">
    				<h3>Desa Bumi Agung </h3>
    				<p align="text-center"> Desa <?php echo $datadesa['NAMA_DESA']; ?> Merupakan Desa yang berada di Kecamatan <?php echo $datadesa['KECAMATAN']; ?> Provinsi <?php echo $datadesa['PROVINSI']; ?> <br>
    					dengan luas wilayah <?php echo $datadesa['LUAS_DESA']; ?> Ha <sup>2</sup> Desa Bumi Agung berada di titik koordinat  <?php echo $datadesa['TITIK_KOORDINAT']; ?>.</p>
    			</div>
    		</div>
    	</div>
    </div>




    <div id="perangkat_desa">
    	<div class="container">
    		<div class="row justify-content-md-center">
    			<div class="col justify-content-md-center text-center col-lg-8">
    				<h3 class="judul">Perangkat Desa</h3>
    				<table class="table table-hover" align="text-center" width="50%">
    					<thead class="thead-dark">
    					<tr>
    						<th width="20%">No.</th>
    						<th width="40%">Nama</th>
    						<th width="40%">Jabatan</th>
    					</tr>
    				    </thead>
                        <?php
                            $i=1;
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $d['NAMA_PERANGKAT_DESA']; ?></td>
                                <td><?php echo $d['JABATAN']; ?></td>
    					   </tr>
                        <?php } ?>
    				</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>





    <div id="statistik">
    	
    	<div class="container">
    		<div class="row justify-content-md-center">
    			<div class="col justify-content-md-center text-center">
                    <h2 class="judul">Statistik Desa</h2>
           
    			</div>
    		</div>
    		
    		<div class="row justify-content-md-center">
    		    <div class="col justify-content-md-center text-center jumlah">
    			     <h4>Jumlah Penduduk</h4>
                     <p style="color: blue;"><?php echo $jumlahpenduduk; ?></p>
    			</div>

    			<div class="col justify-content-md-center text-center jumlah">
                     <h4>Jumlah Keluarga</h4>
                     <p style="color: blue;"><?php echo $jumlahkeluarga; ?></p> 			
    			</div>

    			<div class="col justify-content-md-center text-center jumlah">
    			     <h4>Jumlah Perangkat Desa</h4>
                     <p style="color: blue;"><?php echo $jumlahperangkat_desa; ?></p>
    			</div>
    		</div>

    		<div class="row justify-content-md-center">
    			<div class="col justify-content-md-center text-center">
    			 <div class="row justify-content-md-center"> 

                        <!-- Pie Chart -->
                        <div class="col-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Perbandingan Jenis Kelamin Penduduk</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Laki-Laki
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i> Perempuan
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Perbandingan Ekonomi Keluarga</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart1"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i> Menengah Kebawah
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-warning"></i> menengah
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> menengah keatas
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

    			</div>

    			<div class="col justify-content-md-center text-center">
    			     
    			</div>
    		</div>


    				
    			</div>
    		</div>
    	</div>
    </div>


    <div id="saran">
    	<div class="container">
    		<div class="row justify-content-md-center">
    			<div class="col justify-content-md-center text-center col-lg-8">
    				<h2 class="judul">Kritik & Saran</h5>
 
    				<form action="tsaran.php" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputName" name="NAMA" type="text" placeholder="Enter your name..." />
                                <label for="inputName">Full name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="inputName" name ="SARAN"type="text" placeholder="Masukan Saran..." style="height: 5rem"></textarea>
                                <label for="saran">Saran</label>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary btn-xl button1" type="submit">Submit</button></div>
                    </form>
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <!--footestart-->

  <footer>
  	<div class="row">
  		<div class="col">
      		<p>Copyright &copy; 2021 SISTEM INFORMASI DESA by KELOMPOK 4 , All Rights Reserved.</p>
  		</div>
  	</div>
  </footer>
<!--footer end-->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="js/scripts.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>




       <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Laki-Laki", "Perempuan"],
            datasets: [{
              data: [<?php echo $jumlahlaki; ?>, <?php echo $jumlahperempuan; ?>],
              backgroundColor: ['#4e73df', '#e01f70' ],
              hoverBackgroundColor: ['#2e59d9', '#c81c64'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });




    var ctx1 = document.getElementById("myPieChart1");
        var myPieChart1 = new Chart(ctx1, {
          type: 'pie',
          data: {
            labels: ["Menengah Kebawah", "Menengah", "Menengah Keatas"],
            datasets: [{
              data: [<?php echo $jumlahkurangmampu; ?>, <?php echo $jumlahmenengah; ?>, <?php echo $jumlahmampu; ?>],
              backgroundColor: ['#e01f70', '#ffc936', '#19ab09' ],
              hoverBackgroundColor: ['#c81c64','#ffd35c', '#43c934'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });

    </script>

</body>
</html>
