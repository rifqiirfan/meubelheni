<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <?php
   if($this->ion_auth->logged_in()){
      if($this->ion_auth->is_admin()){ ?>
        <title>Super Admin || Mebel Heni</title>
  <?php }else{?>
        <title>Admin || Mebel Heni</title>
  <?php
      }
    }else{?>
        <title>Mebel Heni</title>
    <?php } ?>
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
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
</head>
<body>
  <div class="container">

    <div class="panel panel-primary">
      <!-- SUPER ADMIN -->
      <?php if($this->ion_auth->is_admin()){?>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?= site_url('home') ?>">Meubel Heni</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?= site_url('dashboard') ?>"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </nav>
      <div class="panel-body">Welcome, Super Admin!</div>

      <!-- ADMIN  -->
      <?php }else{ ?>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?= site_url('home') ?>">Meubel Heni</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?= site_url('dashboard') ?>"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= site_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </nav>
      <div class="panel-body">Welcome, Admin!</div>
      <?php } ?>

    </div>

  </div>
</body>
</html>
