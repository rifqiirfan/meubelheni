<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard | Mebel Heni</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/superadmin_style.css">
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700'>
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
  <div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Catat Penjualan
        </div>

          <div class="panel-body">
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
</body>
</head>
