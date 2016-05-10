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
            <a href="home"><img src="<?=base_url();?>assets/img/mebelheny.png" height="60px"></a>
        </div>
        <div id="menu">
            <nav><ul>
                <li><a href="../home">Halaman Depan</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li class="current_page"><a href="login">Login</a></li>
            </ul></nav>
        </div>
    </div>
    <div class="content" id="login">

        <h1><?php echo "Login Form";?></h1>

        <?php if(isset($message)){ ?>
          <div id="infoMessage" class="alert alert-danger"><?php echo $message;?></div>
          <?php } ?>

        <?php echo form_open("auth/login");?>

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


<div class="footer">
    <div class="container">
            <div class="col-md-3 footer-left">
                <a href="index.html"><img src="<?php echo base_url();?>/assets/img/mebelheny.png" width="120px" alt=""></a>
                <p class="footer-class">Jalan Pangeran Diponegro No. 11 Ngawi, Jawa Timur<br>Telp. (0351) 908201</p>
            </div>
            <div class="col-md-2 footer-middle">
                <ul>
                    <li><a href="404.html">about us</a> </li>
                    <li><a href="contact.html">   contact us</a></li>
                    <li ><a href="products.html" >  our stores</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-left-in">
                <ul class="term">
                    <li><a href="#">terms and conditions</a> </li>
                    <li><a href="#">  markito in the press</a></li>
                    <li ><a href="#" >  testimonials</a></li>
                </ul>
                <ul class="term">
                    <li><a href="#">join us</a> </li>
                    <li><a href="#">  markito videos</a></li>

                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 footer-right">
                <h5>WE SUPPORT</h5>
                <ul>
                    <li><a href="#"><i> </i></a> </li>
                    <li><a href="#"><i class="we"> </i></a></li>
                    <li ><a href="#" ><i class="we-in"> </i></a></li>
                    <li ><a href="#" ><i class="we-at"> </i></a></li>
                    <li ><a href="#" ><i class="we-at-at"> </i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
</div>
</body>
</html>
