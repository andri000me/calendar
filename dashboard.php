<?php
session_start();
if (isset($_SESSION)) {
	if ($_SESSION["status"] != "login") {
		echo "<script>window.location = './destroy.php'</script>";
		die;
	}
} else {
	echo "<script>window.location = './destroy.php'</script>";
	die;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
	<title>Kalender Pelatihan</title>
</head>

<body>
	<!-- Navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<img src="asset/Pertamina.png">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Cari Pelatihan ... " aria-label="Search">
			</form>
			<div class="btn-group">
				<button class="btn btn-primary">+ Tambah Event</button>
			</div>
			<!-- Example single danger button -->
			<div class="btn-group" style="margin-left: 5px;">
				<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Halo <?= $_SESSION["nama_lengkap"] ?>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="./destroy.php">Logout!</a>
				</div>
				
			</div>
		</div>
	</nav>
	<!-- <nav class="navbar fixed-top navbar-light bg-light"> 
	<a class="navbar-brand" href="#">
	  <img src="asset/Pertamina.png" width="15%" class="d-inline-block align-top" alt="">
	  <form class="form-inline my-2 my-lg-0 ml-auto">
		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  </form>
	</a>
  </nav>
-->

	<!-- Akhir navbar -->
	<center>
		<h1 class="judul"> Kalender Pelatihan HSE TC Pertamina - Juli 2020</h1>
	</center>

	<div class="container">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover tengah">
				<thead>
					<tr class="bg-primary" style="color: aliceblue;">
						<th>No</th>
						<th>Nama Pelatihan</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Selesai</th>
						<th>Waktu Pelatihan</th>
						<th>Jumlah Peserta</th>
						<th>Lokasi Pelatihan</th>
						<th>Jenis Program</th>
						<th>Sifat Pelatihan</th>
						<th>Keterangan</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Advanced HSSE Mandatory Training</td>
						<td>17 Juni 2020</td>
						<td>21 Juni 2020</td>
						<td>08.00 - 16.00 WIB</td>
						<td>25</td>
						<td>Online Meeting / M-Teams</td>
						<td>Sertifikasi BNSP</td>
						<td>Residensial</td>
						<td>Undangan Sudah Dikirim</td>
						<td class="bg-warning">Sedang Berjalan</td>
						<td>
							<button class="btn btn-warning" data-target=".modalhse" data-toggle="modal">Edit</button>
							<button class="btn btn-danger">Hapus</button>
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Advanced HSSE Mandatory Training</td>
						<td>17 Juni 2020</td>
						<td>21 Juni 2020</td>
						<td>08.00 - 16.00 WIB</td>
						<td>25</td>
						<td>Online Meeting / M-Teams</td>
						<td>Sertifikasi BNSP</td>
						<td>Residensial</td>
						<td>Undangan Sudah Dikirim</td>
						<td class="bg-warning">Sedang Berjalan</td>
						<td>
							<button class="btn btn-warning">Edit</button>
							<button class="btn btn-danger">Hapus</button>
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Advanced HSSE Mandatory Training</td>
						<td>17 Juni 2020</td>
						<td>21 Juni 2020</td>
						<td>08.00 - 16.00 WIB</td>
						<td>25</td>
						<td>Online Meeting / M-Teams</td>
						<td>Sertifikasi BNSP</td>
						<td>Residensial</td>
						<td>Undangan Sudah Dikirim</td>
						<td class="bg-success">Sudah Selesai</td>
						<td>
							<button class="btn btn-warning">Edit</button>
							<button class="btn btn-danger">Hapus</button>
						</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Advanced HSSE Mandatory Training</td>
						<td>17 Juni 2020</td>
						<td>21 Juni 2020</td>
						<td>08.00 - 16.00 WIB</td>
						<td>25</td>
						<td>Online Meeting / M-Teams</td>
						<td>Sertifikasi BNSP</td>
						<td>Residensial</td>
						<td>Undangan Sudah Dikirim</td>
						<td class="bg-danger">Akan Datang</td>
						<td>
							<button class="btn btn-warning">Edit</button>
							<button class="btn btn-danger">Hapus</button>
						</td>
					</tr>

				</tbody>
			</table>

			<!-- Modal -->
			<div class="modal fade modalhse" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-xl">

					<div class="modal-content">
						<div class="modal-header">
							<h5>Masukan Data Kalender Pelatihan</h5>
						</div>
						<div class="modal-body">
							<form method="post">
								<div class="form-group">
									<label>Nama Pelatihan</label>
									<input type="text" class="form-control" placeholder="Masukan Nama Pelatihan" name="nama_pelatihan">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Tanggal Mulai</label>
											<input type="date" class="form-control" placeholder="First name">
										</div>
										<div class="col">
											<label>Tanggal Selesai</label>
											<input type="date" class="form-control" placeholder="Last name">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Waktu Pelatihan</label>
											<input type="text" class="form-control" placeholder="Masukan Waktu">
										</div>
										<div class="col">
											<label>Jumlah Peserta</label>
											<input type="number" class="form-control" placeholder="Masukan Jumlah Peserta">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Lokasi Pelatihan</label>
											<input type="text" class="form-control" placeholder="Masukan Lokasi Pelatihan">
										</div>
										<div class="col">
											<label>Jenis Program</label>
											<input type="text" class="form-control" placeholder="Masukan Jenis Program">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Sifat Pelatihan</label>
											<select class="form-control">
												<option>Residensial</option>
												<option>Non Residensial</option>
												<option>In House</option>
											</select>
										</div>
										<div class="col">
											<label>Keterangan</label>
											<input type="text" class="form-control" placeholder="Masukan Keterangan">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control">
										<option>Akan Datang</option>
										<option>Sedang Berjalan</option>
										<option>Sudah Selesai</option>
									</select>
								</div>
							</form>
							<button type="button" class="btn btn-primary ml-auto">Simpan</button>
						</div>
					</div>
				</div>
			</div>


		</div>

	</div>
	<div class="footer">
		<hr>
		<p class="bawah">@ 2020 <span class="btn btn-warning" href="instagram.com/hsetc.pertamina">HSE TC Pertamina</span></p>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>