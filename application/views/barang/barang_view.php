<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Lihat Stok Barang - Super Admin || Mebel Heni</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/superadmin_style.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/dataTables.bootstrap.css">
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700'>
  <script src="<?=base_url();?>assets/js/metisMenu/metisMenu.min.js"></script>
  <script src="<?=base_url();?>assets/js/dataTables/jqeury.dataTables.js"></script>
  <script src="<?=base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <script>
      $(document).ready(function() {
          $('#dataTables-example').dataTable();
      });
  </script>
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
          <li><a href="<?= site_url('dashboard') ?>">Halaman Depan</a></li>
          <li><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
          <li class="active"><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
          <li><a href="<?= site_url('penjualan/masuk') ?>">Rekap Barang Masuk</a></li>
          <li><a href="<?= site_url('penjualan') ?>">Rekap Barang Keluar</a></li>
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
        <li class="active"><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
        <li><a href="<?= site_url('penjualan/masuk') ?>">Rekap Barang Masuk</a></li>
        <li><a href="<?= site_url('penjualan/keluar') ?>">Rekap Barang Keluar</a></li>
        <li><a href="<?= site_url('penjualan/catat') ?>">Rekap Laba</a></li>
        <li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
      </ul>
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
            <h2 class="text">Lihat Stok Barang</h2>
          </div><br>
          <div class="table-responsive col-md-12">
            <?php if( !empty($barang) ) { ?>
            <table class= "table table-hover" id="dataTables-example">
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
