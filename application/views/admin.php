<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Mebel Heni</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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

  <nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Mebel Heni</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Halaman Depan</a></li>
          <li><a href="#">Lihat Stok Barang</a></li>
          <li><a href="#">Penjualan</a></li>
          <li><a href="#">Rekap Barang Keluar</a></li>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
       <div class="logo">
        <a href="#"><img src="img/mebelheny.png" height="60px"></a>
      </div>
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#">Halaman Depan</a></li>
          <li><a href="#">Lihat Stok Barang</a></li>
          <li><a href="#">Penjualan</a></li>
          <li><a href="#">Rekap Barang Keluar</a></li>
        </ul><br>
      </div>
      <br>

      <div class="col-sm-9">
        <div class="well">
          <h4>Selamat datang, Admin!</h4>
          <p>Hari ini Jumat, 15 April 2016</p>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="well">
             <div class="row">
              <h3 class="text">Lihat Stok Barang</h3>
              <a href="#" class="btn btn-primary" role="button" class="text-right">Masuk</a>
             </div>
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Payment Taken</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>TB - Monthly</td>
                    <td>01/04/2012</td>
                    <td>Default</td>
                  </tr>
                  <tr class="active">
                    <td>2</td>
                    <td>TB - Monthly</td>
                    <td>01/04/2012</td>
                    <td>Approved</td>
                  </tr>
                  <tr class="success">
                    <td>3</td>
                    <td>TB - Monthly</td>
                    <td>02/04/2012</td>
                    <td>Declined</td>
                  </tr>
                  <tr class="warning">
                    <td>4</td>
                    <td>TB - Monthly</td>
                    <td>04/04/2012</td>
                    <td>Pending</td>
                  </tr>
                  <tr class="danger">
                    <td>5</td>
                    <td>TB - Monthly</td>
                    <td>05/04/2012</td>
                    <td>Call in</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="well">
              <form role="form">
        <div class="form-group">
           
          <label for="exampleInputEmail1">
            Email address
          </label>
          <input type="email" class="form-control" id="exampleInputEmail1" />
        </div>
        <div class="form-group">
           
          <label for="exampleInputPassword1">
            Password
          </label>
          <input type="password" class="form-control" id="exampleInputPassword1" />
        </div>
        <div class="form-group">
           
          <label for="exampleInputFile">
            File input
          </label>
          <input type="file" id="exampleInputFile" />
          <p class="help-block">
            Example block-level help text here.
          </p>
        </div>
        <div class="checkbox">
           
          <label>
            <input type="checkbox" /> Check me out
          </label>
        </div> 
        <button type="submit" class="btn btn-default">
          Submit
        </button>
      </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
