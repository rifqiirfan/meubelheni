<html>
<head>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/superadmin_style.css">
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="well well-lg">
      <div class="row">
        <h3 class="text">Update Barang Masuk</h3>
      </div>

      <div class="well well-lg">
        <h2>Pilih barang yang akan diupdate</h2>
      </div>
            <?php if(isset($_SESSION)) {
              // echo '<div class="alert alert-danger">';
              echo $this->session->flashdata('flash_data');
              // echo "</div>";
            } ?>

        <form class="form-horizontal" role="form" method="POST" action="<?= site_url('barang/update_barang') ?>">
          <?php foreach($barang as $b):?>

          <div class="form-group">
            <label for="nama" class="col-md-3 control-label">Nama barang</label>
            <div class="col-md-6">
                <input id="nama_barang" type="text" class="validate" name="nama_barang" value="<?php echo $b->nama_barang; ?>" >
            </div>
          </div>

          <div class="form-group">
            <label for="jenis_barang" class="col-md-3 control-label">Jenis barang</label>
            <div class="col-md-6">
                <input id="jenis_barang" type="text" class="validate" name="jenis_barang" value="<?php echo $b->jenis_barang; ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="jenis_barang" class="col-md-3 control-label">Tanggal keluar</label>
            <div class="col-md-6">
                <input id="tgl_keluar" type="date" class="validate" name="tgl_keluar" value="<?php echo $b->tgl_keluar; ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="harga" class="col-md-3 control-label">Harga</label>
            <div class="col-md-6">
                <input id="harga" type="text" class="validate" name="harga" value="<?php echo $b->harga; ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="keterangan" class="col-md-3 control-label">Keterangan</label>
            <div class="col-md-6">
                <input id="keterangan" type="text" class="validate" name="keterangan" value="<?php echo $b->keterangan; ?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <button class="btn btn-info" type="submit" name="action">Submit
              </button>
            </div>
          </div>

        <?php endforeach ?>
      </form>

    </div>
  </div>
</body>
</html>
