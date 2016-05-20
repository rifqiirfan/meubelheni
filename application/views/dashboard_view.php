<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard | Mebel Heni</title>
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
          <li class="active"><a href="<?=base_url('dashboard');?>">Halaman Depan</a></li>
          <li><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
          <li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
          <li><a href="<?= site_url('penjualan/masuk') ?>">Rekap Barang Masuk</a></li>
          <li><a href="<?= site_url('penjualan/keluar') ?>">Rekap Barang Keluar</a></li>
          <li><a href="<?= site_url('penjualan/catat') ?>">Rekap Laba</a></li>
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
        <li class="active"><a href="<?=base_url('dashboard');?>">Halaman Depan</a></li>
        <li><a href="<?= site_url('barang/tambah') ?>">Tambah Stok Barang</a></li>
        <li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
        <li><a href="<?= site_url('penjualan/masuk') ?>">Rekap Barang Masuk</a></li>
        <li><a href="<?= site_url('penjualan/keluar') ?>">Rekap Barang Keluar</a></li>
        <li><a href="<?= site_url('penjualan/catat') ?>">Rekap Laba</a></li>
        <li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
      </ul><br>
    </div>
    <br>

    <div class="col-sm-9">
      <div class="well">

        <?php if($this->ion_auth->is_admin()){
          echo "<h4>Selamat datang, Super Admin!</h4>";
        }else{
          echo "<h4>Selamat datang, Admin!</h4>";
        } ?>
        <p>Hari ini Jumat, 29 April 2016</p>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
           <div class="row">
            <h3 class="text">Rekap Barang Masuk</h3>
            <a href="<?= site_url('barang/masuk') ?>" class="btn btn-primary" role="button" class="text-right"><span class="glyphicon glyphicon-folder-open"></span> Masuk</a>

            <div class="col-md-12">
              <?php if( !empty($barang_masuk) ) { ?>
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

              <?php foreach($barang_masuk as $bm):?>
               <tr>
                 <td><?php echo $bm->nama_barang;?></td>
                 <td><?php echo $bm->jenis_barang;?></td>
                 <td><?php echo $bm->tgl_masuk;?></td>
                 <td><?php echo $bm->harga;?></td>
                 <td><?php echo $bm->jumlah;?></td>
                 <td><?php echo $bm->keterangan;?></td>
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
<div class="col-sm-6">
  <div class="well">
    <div class="row">
      <h3 class="text">Rekap Penjualan</h3>
      <a href="<?= site_url('penjualan') ?>" class="btn btn-primary" role="button" class="text-right"><span class="glyphicon glyphicon-folder-open"></span> Masuk</a>
    </div><br>
    <div class="col-md-12">
      <?php if( !empty($barang_keluar) ) { ?>
      <table class= "table table-hover table-responsive">
        <thead>
         <tr>
          <td><strong>Nama Barang</strong></td>
          <td><strong>Jenis</strong></td>
          <td><strong>Tanggal Keluar</strong></td>
          <td><strong>Harga</strong></td>
          <td><strong>Keterangan</strong></td>
        </tr>
      </thead>

      <?php foreach($barang_keluar as $bk):?>
       <tr>
         <td><?php echo $bk->nama_barang;?></td>
         <td><?php echo $bk->jenis_barang;?></td>
         <td><?php echo $bk->tgl_keluar;?></td>
         <td><?php echo $bk->harga;?></td>
         <td><?php echo $bk->keterangan;?></td>
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
