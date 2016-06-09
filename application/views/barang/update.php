<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Stok Barang - Super Admin || Mebel Heni</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/superadmin_style.css">
  <link rel='stylesheet' type='text/css'href='http://fonts.googleapis.com/css?family=Roboto:400,700' >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico">
</head>
<body>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
            Daftar Barang
      </div>

      <div class="panel-body">
        <p>Pilih barang yang akan diupdate.</p>
          <?php if( !empty($barang) ) { ?>
            <table class= "table table-hover table-responsive">
              <thead>
               <tr>
                  <td><strong>Nama Barang</strong></td>
                  <td><strong>Jenis</strong></td>
                  <td><strong>Update</strong></td>
                </tr>
              </thead>

              <?php foreach($barang as $b):?>
              <tr>
                 <td><?php echo $b->nama_barang;?></td>
                 <td><?php echo $b->jenis_barang;?></td>

                 <td><a href="<?php echo base_url();?>barang/<?php echo $b->id_barang?>/update" class="btn btn-info btn-sm">
                   <span class="glyphicon glyphicon-plus"></span> Update</a>
                 </td>
               </tr>
             <?php endforeach;
            }else{
              ?>

            </table>

            <?php echo "<div class='alert alert-warning'>Tidak ada data. Kosong!</div>";
          } ?>

        </div>
    </div>
  </div>
</body>
</html>
