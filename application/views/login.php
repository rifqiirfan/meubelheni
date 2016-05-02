<html>
<head>
    <title>Login || Mebel Heni</title>
   <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css" >
    <link rel="shortcut icon" href="img/mebelheny.ico"-->
</head>
<body>
    <div class="header" id="container">
        <a href="/projectMMC"><img src="<?php echo base_url();?>/assets/img/mebelheny.png" height="60px"></a>
        <div id="menu">
            <nav><ul>
                <nav><ul>
                <li class="current_page"><a href="#">Halaman Depan</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="login.php">Login</a></li>
            </ul></nav>
        </div>
    </div>
    <div class="content" id="login">
        <h1>Silakan masuk ke halaman ini!</h1>
        <form action="login" method="post">
            <select name="status">
                <option value="super admin">Super Admin</option>
                <option value="admin">Admin</option>
            </select>
            <input type="password" placeholder="Password" name = "password"/>
            
        </form>
    </div>
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