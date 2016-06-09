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

  <!-- SUPER ADMIN -->
  <?php if($this->ion_auth->is_admin()){  ?>

    <div class="panel panel-primary">
     <div class="panel-heading"><p>Rekap Barang Bulan Ini
       <?php
         date_default_timezone_set("Asia/Jakarta");
         echo " -- <strong>".date("F Y")."</strong>";?></p>
      </div>

     <div class="panel-body">
       <?php if(!empty($this->session->flashdata('flash_data'))) {
         echo "<div class='alert alert-success'>";
         echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
         echo $this->session->flashdata('flash_data');
         echo "</div>";
       } ?>
        <div class="row">
            <div class="col-md-6">
              <div class="panel panel-info">
               <div class="panel-heading"><span class="glyphicon glyphicon-arrow-down"></span> Rekap Barang Masuk</div>

               <div class="table-responsive panel-body">

                 <?php if( !empty($barang_masuk) ) { ?>
                 <table class= "table table-hover " id="dataTables-example">
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



            <div class="col-md-6">
              <div class="panel panel-info">
               <div class="panel-heading"><span class="glyphicon glyphicon-arrow-up"></span> Rekap Penjualan</div>
               <div class="panel-body table-responsive">

                 <?php if( !empty($barang_keluar) ) { ?>
                 <table class= "table table-hover " id="dataTables-example">
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



  <!-- ADMIN -->
  <?php }else{ ?>

    <div class="panel panel-primary">
      <div class="panel-heading">Tabel Stok Barang</div>
        <div class="table-responsive panel-body">
          <?php if(!empty($this->session->flashdata('flash_data'))) {
            echo "<div class='alert alert-success'>";
            echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            echo $this->session->flashdata('flash_data');
            echo "</div>";
          } ?>
        <?php if( !empty($barang) ) { ?>
          <table class= "table table-hover ">
            <thead>
             <tr>
              <td><strong>Nama Barang</strong></td>
              <td><strong>Jenis</strong></td>
              <td><strong>Jumlah</strong></td>
              <td><strong>Penjualan</strong></td>
            </tr>
          </thead>

          <?php foreach($barang as $bo):?>
          <tr>
           <td><?php echo $bo->nama_barang;?></td>
           <td><?php echo $bo->jenis_barang;?></td>
           <td><?php echo $bo->jumlah;?></td>
           <td><a href="<?php echo base_url();?>penjualan/<?php echo $bo->id_barang?>/catat"><span class="glyphicon glyphicon-plus-sign"></a></span>
          </a></td>
          </tr>
          <?php endforeach;
          }else{?>
          <div class="alert alert-warning"> Data kosong! </div>
         <?php } ?>
        </table>
      </div>

    <?php } ?>

</div>
</body>
</html>
