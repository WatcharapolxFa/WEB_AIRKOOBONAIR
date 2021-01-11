<?php
 session_start();
 require'connect.php';
 $sql = "select * from product";
 $query = mysql_query($sql);
 $row = mysql_fetch_assoc($query);
?>
<!doctype html>
<html lang="en"><head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="X-UA0Compatible" content="ie=edge">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="js/bootstrap.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <title>AIR_SHOP</title>
 
 <style type="text/css">
 a:link { color: #fff; text-decoration: none}
 a:visited { color: #fff; text-decoration: none}
 a:hover { color: #FFD600; text-decoration: underline}
 a:active { color: #fff; text-decoration: none}
 </style>
 
</head>
<style>
 
</style>
<body>
 <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php">
   <img src="img/logo.png" width="150px">
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
   <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
   <div class="navbar-nav">
      <a class="nav-item nav-link text-warning" href="index.php">HOME</a>
      <a class="nav-item nav-link text-warning" href="about.php">ABOUT</a>
      <a class="nav-item nav-link text-warning" href="cost.php">INSTALLATION COST</a>
      <a class="nav-item nav-link text-warning" tabindex="-1" href="payment.php">PAYMENT METHOD</a>
    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-warning" data-toggle="dropdown">AIR</a>
                    <div class="dropdown-menu">
                        <a href="product.php?id=1" class="dropdown-item text-warning"><img src="img/1.png" class="response">WALL TYPE</a>
                        <a href="product.php?id=2" class="dropdown-item text-warning"><img src="img/2.png" class="response">FLOOR TYPE</a>
                        <a href="product.php?id=3" class="dropdown-item text-warning"><img src="img/3.png" class="response">PACKAGE TYPE</a>
                    </div>
                </div>
   </div>
   <form class="form-inline ml-auto" action="search.php" method="post">
                <div class="input-group">
     <input type="text" class="form-control mr-sm-2" placeholder="Search" name="searchhh">
                 <button type="submit" class="btn btn-outline-warning" style="margin-left: 5px">Search</button>
    </div>
            </form>
   <div class="navbar-nav">
    <a class="nav-item nav-link text-dark btn btn-warning" style="margin-left: 10px; padding: 6px" href="login.php">LOGIN</a>
   </div>
    </div>  
 </nav>
 
 <div class="container">
  <br>
<br>
<br>
<br>

  <div class="row">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/bg2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg3.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg4.png" alt="Third slide">
    </div>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
     </a>
   </div>            
  </div>
  <br>

  <div class="row card">
   <div class="card-header bg-dark text-warning">
    <br>
    <strong><h5>AIR HUB TECHNONOGY SOLUTION COMPANY LIMITED</h5></strong>
   </div>
     <div class="card-header bg-dark text-white" style="letter-spacing: 2px;">    
      <strong><h6>ADDRESS :</h6></strong> <br>
    <a >111/12 Donlee Village, Samo Subdistrick, Prangku Districk, Sisaket Province, Thailand 33170</a><br><br>
    <a>Tel : 0842398684, 0839849056 (24 Hr.)</a><br><br>
    <a>Email : Asarawoot114@gmail.com</a><br><br>
    <a>FOLLOW US :</a><br><br>
    <div class="row">
     <!-- facebook    -->
     <div class="col-md-1" style="padding: 0">
      <img src="img/contact_24.png" class="response" style="padding-left: 60px; padding-top: 7px">
     </div>
     <div class="col-md-3">
      <a href="https://web.facebook.com/profile.php?id=100006211907417" target="_blank"><strong>AIR HUB TECHNONOGY</strong></a><br>
      <a>on Facebook</a>
     </div>
     <!-- line    -->
     <div class="col-md-1" style="padding: 0">
      <img src="img/contact_32.png" class="response" style="padding-left: 60px; padding-top: 7px">
     </div>
     <div class="col-md-7">
      <a href="" target="_blank"><strong>ID : @0984201968poop</strong></a><br>
      <a>on Line</a>
     </div>
    </div><br>
    <a><strong>SERVICES :</strong></a><br><br>
    <a href="#">ขายแอร์บ้าน</a> | <a href="#">แอร์ติดผนัง</a> | <a href="#">แอร์ตั้งพื้น</a> | <a href="#">แอร์ตู้</a> | <a href="#">บริการซ่อมแอร์</a> | <a href="#">แอร์ราคาส่ง</a> | <a href="#">ขายราคาถูก</a> | <a href="#">แอร์ติดผนัง</a> | <a href="#">ขายราคาถูก</a> | <a href="#">บริการซ่อมแอร์</a>
    <br><br><br><br>
    <br><br>
   </div>

  </div>
  
  
  
 </div>
 
 <div class="row" style="background: grey; font-size: 15px; color: white; padding: 15px; text-align: center;">
            <div class="col-md-12">
                <p style="text-align: center; padding-bottom: 5px;"><b>&copy; copyright 2020</b> Website by : Asarawoot Santhong</p>
            </div>
        </div>
 
</body>
</html>