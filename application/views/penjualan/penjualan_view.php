<html>

<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
</head>
<body>
<div class="row">
  <div class="col-sm-12">
    <div class="well">
      <div class="row">
        <h2 class="text">Tambah Stok Barang</h2>
      </div><br>

      <div class="col-md-12">
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
