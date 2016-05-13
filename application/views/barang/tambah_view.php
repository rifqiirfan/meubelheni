<!DOCTYPE html>
<html lang="en">
<head>
	<title>Super Admin | Mebel Heni</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/superadmin_style.css">
	<link rel='stylesheet' type='text/css'href='http://fonts.googleapis.com/css?family=Roboto:400,700' >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
	<style>
		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		.row.content {height: 550px}

		/* Set gray background color and 100% height */
		.sidenav {
			background-color: #f1f1f1;
			height: 100%;
		}

		/* On small screens, set height to 'auto' for the grid */
		@media screen and (max-width: 767px) {
			.row.content {height: auto;}
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse visible-xs">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Mebel Heni</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?=base_url('dashboard');?>">Halaman Depan</a></li>
					<li><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
					<li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
					<li><a href="<?= site_url('penjualan/masuk') ?>">Rekap Barang Masuk</a></li>
					<li><a href="<?= site_url('penjualan/keluar') ?>">Rekap Barang Keluar</a></li>
					<li><a href="<?= site_url('penjualan/catat') ?>">Rekap Laba</a></li>
					<li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row content">
			<div class="col-sm-3 sidenav hidden-xs">
				<div class="logo">
					<a href="#"><img src="<?=base_url();?>assets/img/mebelheny.png" height="80px" style="padding:10px"></a>
				</div>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?=base_url('dashboard');?>">Halaman Depan</a></li>
					<li class="active"><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
					<li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
					<li><a href="<?= site_url('penjualan/masuk') ?>">Rekap Barang Masuk</a></li>
					<li><a href="<?= site_url('penjualan/keluar') ?>">Rekap Barang Keluar</a></li>
					<li><a href="<?= site_url('penjualan/catat') ?>">Rekap Laba</a></li>
					<li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
				</ul><br>
			</div>
			<br>
			<div class="col-sm-9">
				<div class="well">
					<h4>Selamat datang, Super Admin!</h4>
					<p>Hari ini Jumat, 29 April 2016</p>
				</div>
				<div class="row">
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="thumbnail">
								<img src="<?=base_url();?>assets/img/mebelheny.png" height="80px">
								<div class="caption">
									<h3>Tambah Barang Baru</h3>
									<p>...</p>
									<p><a class="btn btn-lg btn-block btn-primary" href="tambah_barang">Tambah Stok Barang</a>

									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="thumbnail">
									<img src="<?=base_url();?>assets/img/mebelheny.png" height="80px">
									<div class="caption">
										<h3>Update Barang Lama</h3>
										<p>...</p>
										<p><a class="btn btn-lg btn-block btn-primary" href="update_barang">Update Barang Lama</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</body>
				</html>
