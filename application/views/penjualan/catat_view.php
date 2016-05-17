<html>
<head>
</head>
<body>
  <div class="col-md-12">
    <p>Pilih barang.</p>
    <?php if( !empty($barang) ) { ?>
    <table class= "table table-hover table-responsive">
      <thead>
       <tr>
        <td><strong>Nama Barang</strong></td>
        <td><strong>Jenis</strong></td>

        <td><strong>Penjualan</strong></td>
      </tr>
    </thead>

    <?php foreach($barang as $b):?>
     <tr>
       <td><?php echo $b->nama_barang;?></td>
       <td><?php echo $b->jenis_barang;?></td>

       <td><a href="<?php echo base_url();?>penjualan/<?php echo $b->id_barang?>/catat" class="btn btn-info btn-sm">
         <span class="glyphicon glyphicon-plus"></span> Penjualan</a>
       </td>
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
