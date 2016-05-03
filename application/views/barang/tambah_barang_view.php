<!DOCTYPE html>
<html lang="en">
<head>
  <title>Super Admin | Mebel Heni</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
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
          <li class="active"><a href="#">Halaman Depan</a></li>
          <li><a href="#">Tambah Stok Barang</a></li>
          <li><a href="#">Lihat Stok Barang</a></li>
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
              <h3 class="text">Tambah Stok Barang</h3>
            </div><br>

            <div class="col-md-12">
              <?php if(isset($_SESSION)) {
                echo $this->session->flashdata('flash_data');
              } ?>
              <form class="form-horizontal" role="form" method="POST" action="<?= site_url('barang/tambah_process') ?>">
              <div class="form-group">
              <h4><label for="nama" class="col-md-3 control-label">Nama barang</label></h4>
                <div class="col-md-6">
                  <input id="nama_barang" type="text" class="validate" name="nama_barang" value="<?php echo set_value('nama_barang'); ?>">
                </div>
              </div>
              <div class="row">
               <div class="input-field col s12">
                <label for="jenis_barang">Jenis barang</label>
                <input id="jenis_barang" type="text" class="validate" name="jenis_barang" >
              </div>
            </div>

            <div class="row">
             <div class="input-field col s12">
              <label for="tgl_masuk">Tanggal masuk</label>
              <input id="tgl_masuk" type="date" class="validate" name="tgl_masuk">
            </div>
          </div>

          <div class="row">
           <div class="input-field col s12">
            <label for="harga">Harga</label>
            <input id="harga" type="text" class="validate" name="harga" value="<?php echo set_value('harga'); ?>">
          </div>
        </div>

        <div class="row">
         <div class="input-field col s12">
          <label for="jumlah">Jumlah</label>
          <input id="jumlah" type="text" class="validate" name="jumlah" value="<?php echo set_value('jumlah'); ?>">
        </div>
      </div>

      <div class="row">
       <div class="input-field col s12">
        <label for="keterangan">Keterangan</label>
        <input id="keterangan" type="text" class="validate" name="keterangan">
      </div>
    </div>

    <!-- <div class="form-group"> -->
    <div class="col-md-6 col-md-offset-4">
      <button class="btn btn-info" type="submit" name="action">Submit
      </button>
    </div>
    <!-- </div> -->
  </form>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
