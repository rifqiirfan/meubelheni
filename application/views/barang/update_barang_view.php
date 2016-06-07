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


        <?php if(isset($_SESSION)) {
          echo $this->session->flashdata('flash_data');
        } ?>


        <form class="form-horizontal" role="form" method="POST" action="<?= site_url('barang/update_process') ?>">

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
          <label for="tgl_masuk" class="col-md-3 control-label">Tanggal Masuk</label>
          <div class="col-md-6">
            <input id="tgl_masuk" type="date" class="validate" name="tgl_masuk">
          </div>
        </div>

        <div class="row">
          <label for="harga" class="col-md-3 control-label">Harga</label>
  				<div class="col-md-6">
						<input id="harga" type="text" class="validate" name="harga">
  				</div>
  			</div>

        <div class="row">
          <label for="harga" class="col-md-3 control-label">Jumlah</label>
          <div class="col-md-6">
            <input id="jumlah" type="text" class="validate" name="jumlah">
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
            <button class="btn btn-info" type="submit" name="action">Update
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
</body>
</html>
