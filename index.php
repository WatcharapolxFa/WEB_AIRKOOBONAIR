<?php
session_start();
require"connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php">
      <img src="bg/bg1.png" width="50px">
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
            <a href="product.php?id=1" class="dropdown-item text-warning"><img src="bg/bg_04.png" class="response">WALL
              TYPE</a>
            <a href="product.php?id=2" class="dropdown-item text-warning"><img src="bg/bg_05.png" class="response">FLOOR
              TYPE</a>
            <a href="product.php?id=3" class="dropdown-item text-warning"><img src="bg/bg_06.png"
                class="response">PACKAGE
              TYPE</a>
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
        <a class="nav-item nav-link text-dark btn btn-warning mr-sm-2" style="margin-left: 10px; padding: 6px"
          href="login.php">LOGIN</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <br><br><br><br>
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="bg/bg_01.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="bg/bg_02.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="bg/bg_03.png" alt="Third slide">
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


    <div class="card">
      <div class="card-header bg-dark text-warning">
        <strong>-- KOOBINAIR.COM --</strong>
      </div>
      <div class="card-header" style="letter-spacing: 2px;">
        <ul><strong>
            <li>แอร์บ้านราคาส่ง,แอร์ถูก,แอร์ทุกรุ่นทุกยี่ห้อ ติดตั้งด่วนได้เลย
              แอร์เงินสด,แอร์เงินผ่อน,ซื้อเฉพาะเครื่อง,บริการจัดส่งทั่วประเทศ กรุงเทพและปริมณฑล ค่าจัดส่ง 300
              บาท/เครื่อง</li>
          </strong> <strong>
            <li>บริการราคาพิเศษสำหรับผู้รับเหมา, งานโครงการ, คอนโด, อพาร์ทเม้นท์ โทร.081-4081020 , 081-4417524</li>
          </strong></ul>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-dark text-warning">
              <strong>WALL TYPE AIR :: แอร์ติดผนัง</strong>
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <th>รุ่น</th>
                  <th>ยี่ห้อ</th>
                  <th>BTU</th>
                  <th>ราคา</th>
                </thead>

                <?php
                                     require'connect.php';
                                     $sql = "SELECT * FROM product WHERE p_type = 'w' ORDER BY p_btu";
                                     $query = mysql_query($sql);
                                 ?>
                <?php
                                     while($row = mysql_fetch_assoc($query)){
                                 ?>
                <tbody>
                  <td>
                    <?=$row['p_code'] ?>
                  </td>
                  <td><strong>
                      <?=$row['p_name'] ?>
                    </strong></td>
                  <td>
                    <?=$row['p_btu'] ?>
                  </td>
                  <td>
                    <?=$row['p_price'] ?>฿ <a style="color: red"><s>
                        <?=$row['p_sale'] ?> ฿
                      </s></a>
                  </td>
                </tbody>
                <?php } mysql_close(); ?>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-dark text-warning">
              <strong>FLOOR TYPE AIR :: แอร์แบบตั้งกับพื้น</strong>
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <th>รุ่น</th>
                  <th>ยี่ห้อ</th>
                  <th>BTU</th>
                  <th>ราคา</th>
                </thead>

                <?php
                                     require'connect.php';
                                     $sql = "SELECT * FROM product WHERE p_type = 'f' ORDER BY p_btu";
                                     $query = mysql_query($sql);
                                 ?>
                <?php
                                     while($row = mysql_fetch_assoc($query)){
                                 ?>
                <tbody>
                  <td>
                    <?=$row['p_code'] ?>
                  </td>
                  <td><strong>
                      <?=$row['p_name'] ?>
                    </strong></td>
                  <td>
                    <?=$row['p_btu'] ?>
                  </td>
                  <td>
                    <?=$row['p_price'] ?>฿ <a style="color: red"><s>
                        <?=$row['p_sale'] ?> ฿
                      </s></a>
                  </td>
                </tbody>
                <?php } mysql_close(); ?>
              </table>
            </div>
          </div>
        </div>

      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-dark text-warning">
              <strong>WALL TYPE AIR :: แอร์ติดผนัง</strong>
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <th>รุ่น</th>
                  <th>ยี่ห้อ</th>
                  <th>BTU</th>
                  <th>ราคา</th>
                </thead>

                <?php
                                     require'connect.php';
                                     $sql = "SELECT * FROM product WHERE p_type = 'p' ORDER BY p_btu";
                                     $query = mysql_query($sql);
                                 ?>
                <?php
                                     while($row = mysql_fetch_assoc($query)){
                                 ?>
                <tbody>
                  <td>
                    <?=$row['p_code'] ?>
                  </td>
                  <td><strong>
                      <?=$row['p_name'] ?>
                    </strong></td>
                  <td>
                    <?=$row['p_btu'] ?>
                  </td>
                  <td>
                    <?=$row['p_price'] ?>฿ <a style="color: red"><s>
                        <?=$row['p_sale'] ?> ฿
                      </s></a>
                  </td>
                </tbody>
                <?php } mysql_close(); ?>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-6">

        </div>

      </div>
    </div>
    <br>
</body>

</html>