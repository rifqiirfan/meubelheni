<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Stok Barang - Super Admin || Mebel Heni</title>
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
          <li><a href="<?=base_url('dashboard');?>">Halaman Depan</a></li>
          <li class="active"><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
          <li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
          <li><a href="<?= site_url('penjualan/masuk') ?>">Rekap Barang Masuk</a></li>
          <li><a href="<?= site_url('penjualan/keluar') ?>">Rekap Barang Keluar</a></li>
          <li><a href="<?= site_url('penjualan/catat') ?>">Rekap Laba</a></li>
          <li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
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
          <li><a href="<?= site_url('penjualan') ?>">Rekap Laba</a></li>
          <li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
        </ul><br>
      </div>
      <br>

      <div class="col-sm-9">
        <div class="well">
          <h4>Selamat datang, Super Admin!</h4>
          <p><?php
            date_default_timezone_set("Asia/Jakarta");
            echo "Hari ini".date(" l, d m Y ")."pukul".date(" h:i ");?></p>
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
                      <label class="control-label col-sm-2" for="nama">Nama barang</label>
                      <div class="col-sm-9">
                        <input id="nama_barang" type="text" class="form-control" name="nama_barang" value="<?php echo set_value('nama_barang'); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="tgl_masuk">Tanggal masuk</label>
                      <div class="col-sm-3">          
                        <input id="tgl_masuk" type="date" class="form-control" name="tgl_masuk">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="harga">Harga</label>
                      <div class="col-sm-9">          
                        <input id="harga" type="text" class="form-control" name="harga" value="<?php echo set_value('harga'); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="jumlah">Jumlah</label>
                      <div class="col-sm-9">          
                        <input id="jumlah" type="text" class="form-control" name="jumlah" value="<?php echo set_value('jumlah'); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="keterangan">Keterangan</label>
                      <div class="col-sm-9">          
                        <input id="keterangan" type="text" class="form-control" name="keterangan" value="<?php echo set_value('keterangan'); ?>">
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
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
