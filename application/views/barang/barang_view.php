<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Login || Mebel Heni</title>
  <meta charset="UTF=8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
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
          <li class="active"><a href="<?= site_url('dashboard') ?>">Halaman Depan</a></li>
          <li><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
          <li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
          <li><a href="#">Rekap Barang Masuk</a></li>
          <li><a href="#">Rekap Barang Keluar</a></li>
          <li><a href="#">Rekap Laba</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
       <div class="logo">
        <a href="#"><img src="<?=base_url();?>assets/img/mebelheny.png" height="60px"></a>
      </div>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Halaman Depan</a></li>
        <li><a href="#section2">Tambah Stok Barang</a></li>
        <li><a href="#section3">Lihat Stok Barang</a></li>
        <li><a href="#section4">Rekap Barang Masuk</a></li>
        <li><a href="#section5">Rekap Barang Keluar</a></li>
        <li><a href="#">Rekap Laba</a></li>
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
          <div class="well">
            <div class="row">
              <h2 class="text">Tambah Stok Barang</h2>
            </div><br>

            <div class="col-md-12">
              <?php if( !empty($barang) ) { ?>
              <table class= "table table-hover table-responsive">
                <thead>
                 <tr>
                  <td><strong>Nama Barang</strong></td>
                  <td><strong>Jenis</strong></td>
                  <td><strong>Tanggal Masuk</strong></td>
                  <td><strong>Harga</strong></td>
                  <td><strong>Jumlah</strong></td>
                  <td><strong>Keterangan</strong></td>
                </tr>
              </thead>

              <?php foreach($barang as $b):?>
               <tr>
                 <td><?php echo $b->nama_barang;?></td>
                 <td><?php echo $b->jenis_barang;?></td>
                 <td><?php echo $b->tgl_masuk;?></td>
                 <td><?php echo $b->harga;?></td>
                 <td><?php echo $b->jumlah;?></td>
                 <td><?php echo $b->keterangan;?></td>
               </tr>
             <?php endforeach;
           }else{
            echo "Empty";
          }
          ?>

            </table>
          </div>

    </div>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>
