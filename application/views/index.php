<!DOCTYPE html>
<html>
<head>
	<title>Mebel Heni</title>
	<meta charset="UTF=8">
	<meta name="author" content="Mebel Heni" />
	<meta name="description" content="Sistem Informasi Penjualan Mebel Heni" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
	<link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css" >
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/owl.carousel.css"/> 
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/owl.theme.css"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/style.js"></script>
	<script src="<?=base_url();?>assets/js/owl.carousel.js"></script>
</head>

<body>
	<div class="header" id="container">
		<div id="logo">
			<a href="#"><img src="<?=base_url();?>assets/img/mebelheny.png" height="60px"></a>
		</div>
		<div id="menu">
			<nav><a href="#" id="menu-icon"></a><ul>
				<li class="current_page"><a href="#">Halaman Depan</a></li>
				<li><a href="#">Tentang Kami</a></li>
				<?php if($this->ion_auth->logged_in()) {?>
				<li><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
				<?php }else{  ?>
				<li><a href="<?= site_url('auth/login') ?>">Login</a>
				<?php } ?>	
			</ul></nav>
		</div>
	</div>

	<div id="sidebar">
		<div class="kategori">
			<nav><ul>
				<li class="actives"><a href="#">Meja</a></li>
				<li><a href="#">Kursi</a></li>
				<li><a href="#">Sofa</a></li>
				<li><a href="#">Lemari</a></li>
				<li><a href="#">Kasur</a></li>	
				<li><a href="#">Loker</a></li>
			</ul></nav>
		</div>	
	</div>

	<div id="content">
		<div class="slider">
			<div class="col-md-9">
				<div id="owl-demo" class="owl-carousel">
					<div><img src="<?=base_url();?>assets/img/slide1.jpg" width="100%"></div>
					<div><img src="<?=base_url();?>assets/img/slide2.jpg" width="100%"></div>
					<div><img src="<?=base_url();?>assets/img/slide3.jpg" width="100%"></div>
				</div>
			</div>
		</div>

		<div class="promo">
			<h1>Penawaran Produk</h1>
			<div class="row">
				<div class="col-md-3">
					<img src="<?=base_url();?>assets/img/meja_tamu.jpg" class="img-responsive" alt="Meja Tamu" height="236px" width="236px">
					<h4>Meja Kayu Mahoni</h4>
					<h5>Ukuran : 1,2m x 80cm x 60cm </h5>
					<a href="#" class="btn btn-primary" role="button">Lihat</a><br>
				</div>
				<div class="col-md-3">
					<img src="<?=base_url();?>assets/img/kasur.png" class="img-responsive" alt="Sofa2" height="236px" width="236px">
					<h4>Kasur Anak</h4>
					<h5>Ukuran : 2m x 1,5m x 1,3m </h5>
					<a href="#" class="btn btn-primary" role="button">Lihat</a><br>
				</div>
				<div class="col-md-3">
					<img src="<?=base_url();?>assets/img/sofa2.png" class="img-responsive" alt="Sofa2" height="236px"width="236px">
					<h4>Sofa</h4>
					<h5>Deksripsi</h5>
					<a href="#" class="btn btn-primary" role="button">Lihat</a><br>
				</div>	
			<div class="row">
				<div class="col-md-3">
					<img src="<?=base_url();?>assets/img/meja_tamu.jpg" class="img-responsive" alt="Meja Tamu" height="236px" width="236px">
					<h4>Lemari</h4>
					<h5>Deksripsi</h5>
					<a href="#" class="btn btn-primary" role="button">Lihat</a><br>
				</div>
				<div class="col-md-3">
					<img src="<?=base_url();?>assets/img/kasur.png" class="img-responsive" alt="Sofa2" height="236px" width="236px">
					<h4>Kasur</h4>
					<h5>Deksripsi</h5>
					<a href="#" class="btn btn-primary" role="button">Lihat</a><br>
				</div>
				<div class="col-md-3">
					<img src="<?=base_url();?>assets/img/sofa2.png" class="img-responsive" alt="Sofa2" height="236px"width="236px">
					<h4>Loker</h4>
					<h5>Deksripsi</h5>
					<a href="#" class="btn btn-primary" role="button">Lihat</a><br>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="index.html"><img src="<?=base_url();?>assets/img/mebelheny_3.png" width="150px" alt=""></a>
			</div>
			<div class="col-md-2 footer-middle">
				<h4><strong>Mebel Heni</strong></h4>
				<ul>
					<li><a href="#">Tentang Kami</a> </li>
					<li><a href="#">Hubungi Kami</a></li>
					<li ><a href="#">Produk</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left-in">
				<h4><strong>Kategori Barang</strong></h4>
				<ul class="term">
					<li><a href="#">Meja</a> </li>
					<li><a href="#">Kursi</a> </li>
					<li><a href="#">Sofa</a> </li>
				</ul>
				<ul class="term">
					<li><a href="#">Lemari</a> </li>
					<li><a href="#">Kasur</a> </li>
					<li><a href="#">Loker</a> </li>
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h4><strong>Alamat & Kontak</strong></h4>
				<p class="footer-class">Jalan Sultan Agung No. 38, Ketanggi, Ngawi, Jawa Timur<br>Telp. (0351) 908201</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</body>
</html>