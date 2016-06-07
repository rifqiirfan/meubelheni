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
    <h1>Selamat datang, Super Admin!</h1>

  <!-- ADMIN -->
  <?php }else{ ?>

  <div class="well" well-md>
    <h1>Selamat datang, Admin!</h1>
    <div class="col-md-12">
      <?php if( !empty($barang) ) { ?>
        <table class= "table table-hover table-responsive">
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
  </div>

  <?php } ?>

</div>
</body>
</html>
