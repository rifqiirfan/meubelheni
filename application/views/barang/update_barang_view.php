<html>
<head>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/superadmin_style.css">
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ic o">
  <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

  <title>Update Barang Masuk</title>
</head>
<body>
  <div class="container">
    <div class="well well-lg">
      <p>Update Barang Masuk</p>


        <?php if(!empty($this->session->flashdata('flash_data'))) {
          echo $this->session->flashdata('flash_data');
        } ?>


        <form class="form-horizontal" role="form" method="POST" action="<?= site_url('barang/update_process') ?>">

        <?php if(!empty($barang)){
          foreach($barang as $b){ ?>


        <input id="id_barang" type="text" class="validate" name="id_barang" value="<?php echo $b->id_barang; ?>" hidden>


        <div class="form-group">
          <label class="control-label col-sm-2" for="nama_barang">Nama barang</label>
          <div class="col-sm-9">
            <input id="nama_barang" type="text" class="form-control" name="nama_barang" value="<?php echo $b->nama_barang; ?>" disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="jenis_barang">Jenis barang</label>
          <div class="col-sm-9">
            <input id="jenis_barang" type="text" class="form-control" name="jenis_barang" value="<?php echo $b->jenis_barang; ?>" disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="tgl_masuk">Tanggal masuk</label>
          <div class="col-sm-9">
            <input id="tgl_masuk" type="date" class="form-control" name="tgl_masuk" value="<?php echo set_value('tgl_masuk'); ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="harga">Harga</label>
          <div class="col-sm-9">
            <input id="harga" type="number" class="form-control" name="harga" value="<?php echo set_value('harga'); ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="jumlah">Jumlah</label>
          <div class="col-sm-9">
            <input id="jumlah" type="number" class="form-control" name="jumlah" value="<?php echo set_value('jumlah'); ?>" required>
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

      <?php } ?>

    </form>
    <?php }else{
      echo "Data kosong";
    }?>

    </div>
  </div>
</body>
</html>
