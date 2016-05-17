<html>
<head>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/superadmin_style.css">
  <link rel='stylesheet' type='text/css'href='http://fonts.googleapis.com/css?family=Roboto:400,700' >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico">
</head>
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
          <li><a href="<?= site_url('dashboard') ?>">Halaman Depan</a></li>
          <li><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
          <li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
          <li><a href="#">Rekap Barang Masuk</a></li>
          <li><a href="#">Rekap Barang Keluar</a></li>
          <li class="active"><a href="#">Rekap Laba</a></li>
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
        <li><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
        <li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
        <li><a href="<?= site_url('penjualan') ?>">Rekap Barang Masuk</a></li>
        <li><a href="<?= site_url('penjualan/keluar') ?>">Rekap Barang Keluar</a></li>
        <li class="active"><a href="<?= site_url('penjualan') ?>">Rekap Laba</a></li>
        <li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
      </ul>
    </ul><br>
  </div>
  <br>

  <div class="col-sm-9">
    <div class="well">
      <h4>Selamat datang, Super Admin!</h4>
      <p>Hari ini Jumat, 29 April 2016</p>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <d<div class="well well-lg">
      <div class="row">
        <h3 class="text">Catat Penjualan</h3>
      </div>


            <?php if(isset($_SESSION)) {
              echo $this->session->flashdata('flash_data');
            } ?>
        <form class="form-horizontal" role="form" method="POST" action="<?= site_url('penjualan/catat_process') ?>">

          <?php if(!empty($barang)){
            foreach($barang as $b){ ?>

              <input id="id_barang" type="text" class="validate" name="id_barang" value="<?php echo $b->id_barang; ?>" hidden>

              <div class="row">
                <label for="nama_barang" class="col-md-3 control-label">Nama barang</label>
                <div class="col-md-6">
                  <input id="nama_barang" type="text" class="validate" name="nama_barang" value="<?php echo $b->nama_barang; ?>" disabled>
                </div>
              </div>


              <div class="row">
                <label for="jenis_barang" class="col-md-3 control-label">Jenis Barang</label>
                <div class="col-md-6">
                  <input id="jenis_barang" type="text" class="validate" name="jenis_barang" value="<?php echo $b->jenis_barang; ?>" disabled>
                </div>
              </div>

              <div class="row">
                <label for="tgl_keluar" class="col-md-3 control-label">Tanggal Penjualan</label>
                <div class="col-md-6">
                  <input id="tgl_keluar" type="date" class="validate" name="tgl_keluar">
                </div>
              </div>


              <div class="row">
                <label for="harga" class="col-md-3 control-label">Harga</label>
        				<div class="col-md-6">
      						<input id="harga" type="text" class="validate" name="harga">
        				</div>
        			</div>

              <div class="row">
                <label for="keterangan" class="col-md-3 control-label">Keterangan</label>
        				<div class="col-md-6">
      						<input id="keterangan" type="text" class="validate" name="keterangan">
        				</div>
        			</div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button class="btn btn-info" type="submit" name="action">Submit
                  </button>
                </div>
              </div>

            <?php } ?>

          </form>
          <?php }else{
            echo "Data kosong";
          }?>

</div>
</div>
</div>
</div>
</div>
</body>

</html>
