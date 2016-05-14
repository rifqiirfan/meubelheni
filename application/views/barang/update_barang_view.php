<html>
<head>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/superadmin_style.css">
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico">
  <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

  <title>Update Barang Masuk</title>
</head>
<body>
  <div class="container">
    <div class="well well-lg">
      <p>Update Barang Masuk</p>

      <?php echo form_open("barang/update_barang");?>

        <?php if(!empty($barang)){
          foreach($barang as $b){ ?>

        <div class="row">
          <label for="nama_barang" class="col-md-3 control-label">Nama barang</label>
          <div class="col-md-6">
            <input id="nama_barang" type="text" class="validate" name="nama_barang" value="<?php echo $b->nama_barang; ?>">
          </div>
        </div>

        <div class="row">
          <label for="jenis_barang" class="col-md-3 control-label">Jenis Barang</label>
  				<div class="col-md-6">
						<input id="jenis_barang" type="text" class="validate" name="jenis_barang" value="<?php echo $b->jenis_barang; ?>">
  				</div>
  			</div>

        <div class="row">
          <label for="harga" class="col-md-3 control-label">Harga</label>
  				<div class="col-md-6">
						<input id="harga" type="text" class="validate" name="harga" value="">
  				</div>
  			</div>

      <?php } ?>

      <?php echo form_close();
    }else{
      echo "Data kosong";
    }?>

    </div>
  </div>
</body>
</html>
