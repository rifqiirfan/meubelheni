<!doctype html>
<html>
<head>
	<title>Mebel Heni</title>
	<meta charset="UTF=8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
	<link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/owl.theme.css"/>
	<script src="<?=base_url();?>assets/js/style.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/owl.carousel.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header" id="container">
		<div id="logo">
			<a href="home"><img src="<?=base_url();?>assets/img/mebelheny.png" height="60px"></a>
		</div>
		<div id="menu">
			<div class="navbar-header">
				<a class="toggleMenu" href="#">Menu</a>
				<nav><ul>
					<li class="current_page"><a href="home">Halaman Depan</a></li>
					<li><a href="#">Tentang Kami</a></li>
					<?php if($this->ion_auth->logged_in()) {?>
					<li><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
					<?php }else{  ?>
					<li><a href="<?= site_url('auth/login') ?>">Login</a>
						<?php } ?>
					</ul></nav>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="owl-carousel">
				<div><img src="<?=base_url();?>assets/img/slide1.jpg" width="100%"></div>
				<div><img src="<?=base_url();?>assets/img/slide2.jpg" width="100%"></div>
				<div><img src="<?=base_url();?>assets/img/slide3.jpg" width="100%"></div>
			</div>
			<div class="content">
				<div id="sidebar" class="col-md-3">
					<h1>KATEGORI</h1>
					<ul id="kategori">
						<li><a href="#meja">Meja</a></li>
						<li><a href="#kursi">Kursi</a></li>
						<li><a href="#sofa">Sofa</a></li>
						<li><a href="#lemari">Lemari</a></li>
						<li><a href="#kasur">Kasur</a></li>
						<li><a href="#loker">Loker</a></li>
					</ul>
				</div>
				<div class="products">
					<h5 class="latest-product">LATEST PRODUCTS</h5>
					<a class="view-all" href="product.html">VIEW ALL<span> </span></a>
				</div>
			</div>
			<div class="products">
				<h5 class="latest-product">LATEST PRODUCTS</h5>
				<a class="view-all" href="product.html">VIEW ALL<span> </span></a>
			</div>
			<div class="product-left col-md-9">
				<div class="col-md-4 chain-grid">
					<a href="single.html"><img class="img-responsive chain" src="<?=base_url();?>assets/img/sofa.jpg" alt=" " /></a>
					<span class="star"> </span>
					<div class="grid-chain-bottom">
						<h6><a href="single.html">Sofa Kulit Domba Garut</a></h6>
						<div class="star-price">
							<div class="dolor-grid">
								<span class="actual">300$</span>
								<span class="reducedfrom">400$</span>
							</div>
							<a class="now-get get-cart" href="#">ADD TO CART</a>
							<div class="clearfix"> </div>
							<div class="col-md-4 chain-grid">
								<a href="single.html"><img class="img-responsive chain" src="<?=base_url();?>assets/img/lemari 3.jpg" alt=" " /></a>
								<span class="star"> </span>
								<div class="grid-chain-bottom">
									<h6><a href="single.html"></a>Lemari Kayu Meranti Asli Kalimantan</h6>
									<div class="star-price">
										<div class="dolor-grid">
											<span class="actual">300$</span>
											<span class="reducedfrom">400$</span>
										</div>
										<a class="now-get get-cart" href="#">ADD TO CART</a>
										<div class="clearfix"> </div>
										<div class="col-md-4 chain-grid grid-top-chain">
											<a href="single.html"><img class="img-responsive chain" src="<?=base_url();?>assets/img/kasur 2.jpg" alt=" " /></a>
											<span class="star"> </span>
											<div class="grid-chain-bottom">
												<h6><a href="single.html">Kasur Tidur Putri Salju</a></h6>
												<div class="star-price">
													<div class="dolor-grid">
														<span class="actual">300$</span>
														<span class="reducedfrom">400$</span>
													</div>
													<a class="now-get get-cart" href="#">ADD TO CART</a>
													<div class="clearfix"> </div>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="footer">
												<div class="container">
													<div class="col-md-3 footer-left">
														<a href="index.html"><img src="<?=base_url();?>assets/img/mebelheny.png" width="100px" alt=""></a>
														<p class="footer-class">Jalan Sultan Agung No. 38, Ketanggi, Ngawi, Jawa Timur<br>Telp. (0351) 908201</p>
													</div>
													<div class="col-md-2 footer-middle">
														<ul>
															<li><a href="404.html">about us</a> </li>
															<li><a href="contact.html">   contact us</a></li>
															<li ><a href="products.html" >  our stores</a></li>
														</ul>
													</div>
													<div class="col-md-4 footer-left-in">
														<ul class="term">
															<li><a href="#">terms and conditions</a> </li>
															<li><a href="#">  markito in the press</a></li>
															<li ><a href="#" >  testimonials</a></li>
														</ul>
														<ul class="term">
															<li><a href="#">join us</a> </li>
															<li><a href="#">  markito videos</a></li>

														</ul>
														<div class="clearfix"> </div>
													</div>
													<div class="col-md-3 footer-right">
														<h5>WE SUPPORT</h5>
														<ul>
															<li><a href="#"><i> </i></a> </li>
															<li><a href="#"><i class="we"> </i></a></li>
															<li ><a href="#" ><i class="we-in"> </i></a></li>
															<li ><a href="#" ><i class="we-at"> </i></a></li>
															<li ><a href="#" ><i class="we-at-at"> </i></a></li>
														</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>
