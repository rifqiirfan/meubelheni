<html>
<head>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
  <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="well well-lg">
      <h2>Daftar Barang</h2>
      <div class="col-md-12">
        <p>Pilih barang yang akan diupdate.</p>
        <?php if( !empty($barang) ) { ?>
        <table class= "table table-hover table-responsive">
          <thead>
           <tr>
            <td><strong>Nama Barang</strong></td>
            <td><strong>Jenis</strong></td>
            <td><strong>Tanggal Masuk</strong></td>
            <td><strong>Harga</strong></td>
            <td><strong>Jumlah</strong></td>
            <td><strong>Keterangan</strong></td>
            <td><strong>Update</strong></td>
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
           <td><a href="#" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> Update</a></td>
         </tr>
       <?php endforeach;
     }else{
    ?>

        </table>
      </div>

    </div>
    <?php echo "<div class='alert alert-warning'>Tidak ada data. Kosong!</div>";
  } ?>

  </div>
</body>
</html>
