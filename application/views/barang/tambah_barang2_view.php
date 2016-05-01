<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
     echo "Tambah";
    ?>
      <div class="col-md-12">
        <form class="form-horizontal" role="form" method="POST" action="<?= site_url('barang/tambah_process') ?>">
                <div class="row">
      							<div class="input-field col s12">
                      <label for="nama_barang">Nama barang</label>
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
  </body>

</html>
