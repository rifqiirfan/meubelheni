<html>

<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="well well-lg">
      <div class="well well-sm">
        <h2 class="text">Daftar Penjualan Barang</h2>
      </div>

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

</body>
</html>
