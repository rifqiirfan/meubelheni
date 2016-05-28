<html>

<head>
 <title>Rekap Laba - Super Admin || Mebel Heni</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/superadmin_style.css">
 <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700'>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
</head>
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
        <li><a href="<?= site_url('barang') ?>">Lihat Stok Barang</a></li>
        <li><a href="<?= site_url('penjualan/masuk') ?>">Rekap Barang Masuk</a></li>
        <li><a href="<?= site_url('penjualan/keluar') ?>">Rekap Barang Keluar</a></li>
        <li class="active"><a href="<?= site_url('penjualan/catat') ?>">Rekap Laba</a></li>
        <li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
      </ul>
    </ul><br>
  </div>
  <div class="col-sm-9">
    <div class="well">
      <h4>Selamat datang, Super Admin!</h4>
      <p>Hari ini Jumat, 29 April 2016</p>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="well">
          <div class="row">
            <h2 class="text">Daftar Penjualan Barang</h2>
          </div><br>
        </div>
        <div class="col-md-12">
          <?php if( !empty($barang_keluar) ) { ?>
            <table class= "table table-hover table-responsive">
              <thead>
               <tr>
                <td><strong>Nama Barang</strong></td>
                <td><strong>Jenis</strong></td>
                <td><strong>Tanggal Keluar</strong></td>
                <td><strong>Harga</strong></td>
                <?php if($this->ion_auth->is_admin()){?>
                  <td><strong>Laba</strong></td>
                  <?php
                } ?>

                <td><strong>Keterangan</strong></td>
              </tr>
            </thead>

            <?php foreach($barang_keluar as $bk):?>
            <tr>
             <td><?php echo $bk->nama_barang;?></td>
             <td><?php echo $bk->jenis_barang;?></td>
             <td><?php echo $bk->tgl_keluar;?></td>
             <td><?php echo $bk->harga;?></td>
             <?php if($this->ion_auth->is_admin()){?>
               <td><?php echo $bk->laba;?></td>
               <?php } ?>
               <td><?php echo $bk->keterangan;?></td>
             </tr>
           <?php endforeach;
         }else{?>
           <div class="alert alert-warning"> Data kosong! </div>
           <?php
         }
         ?>
       </table>
     </div>
   </div>
 </div>

</body>
</html>
