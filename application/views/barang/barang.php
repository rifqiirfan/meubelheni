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
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico">
</head>
<body>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
            Lihat Stok Barang
      </div>
        <div class="panel-body">
          <?php if(!empty($this->session->flashdata('flash_data'))) {
            echo "<div class='alert alert-success'>";
            echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            echo $this->session->flashdata('flash_data');
            echo "</div>";
          } ?>

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
</body>

</html>
