<html>
<head>
  <title>Login || Mebel Heni</title>
  <meta charset="UTF=8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css" >
  <link rel="shortcut icon" href="<?=base_url();?>assets/img/mebelheny.ico"-->
</head>
<body>
  <div class="header" id="container">
    <div id="logo">
      <a href="../home"><img src="<?=base_url();?>assets/img/mebelheny.png" height="60px"></a>
    </div>
    <div id="menu">
      <nav><ul>
        <li><a href="home">Halaman Depan</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li class="current_page"><a href="login">Login</a></li>
      </ul></nav>
    </div>
  </div>
  <div class="content" id="login">
    <?php if(isset($message)){?>
      <div id="infoMessage"><?php echo $message;?></div>
      <?php } ?>
      <?php echo form_open("login");?>

      <p>
        <?php echo lang('login_identity_label', 'identity');?>
        <?php echo form_input($identity);?>
      </p>

      <p>
        <?php echo lang('login_password_label', 'password');?>
        <?php echo form_input($password);?>
      </p>

      <p>
        <?php echo lang('login_remember_label', 'remember');?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
      </p>


      <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

      <?php echo form_close();?>
  </div>
    <div class="footer">
      <div class="container">
        <div class="col-md-3 footer-left">
          <a href="index.html"><img src="<?=base_url();?>assets/img/mebelheny_3.png" width="150px" alt=""></a>
        </div>
        <div class="col-md-2 footer-middle">
          <h4><strong>Mebel Heni</strong></h4>
          <ul>
            <li><a href="#">Tentang Kami</a> </li>
            <li><a href="#">Hubungi Kami</a></li>
            <li ><a href="#">Produk</a></li>
          </ul>
        </div>
        <div class="col-md-4 footer-left-in">
          <h4><strong>Kategori Barang</strong></h4>
          <ul class="term">
            <li><a href="#">Meja</a> </li>
            <li><a href="#">Kursi</a> </li>
            <li><a href="#">Sofa</a> </li>
          </ul>
          <ul class="term">
            <li><a href="#">Lemari</a> </li>
            <li><a href="#">Kasur</a> </li>
            <li><a href="#">Loker</a> </li>
          </ul>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 footer-right">
          <h4><strong>Alamat & Kontak</strong></h4>
          <p class="footer-class">Jalan Sultan Agung No. 38, Ketanggi, Ngawi, Jawa Timur<br>Telp. (0351) 908201</p>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </body>
</html>