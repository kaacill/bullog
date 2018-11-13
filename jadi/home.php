<?php
include "../config/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    GoTani
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="home.php">
          GoTani
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <p class="nav-link">
              <i class="material-icons">person</i>             
              Bambang Pamungkas
              <br>
              kaacill@gmail.com
            </p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">local_play</i>
              My Vouchers             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">help_outline</i>
              Help             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">star_rate</i>
              Rate GoTani App      
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="text-align: center; color: red;">
            Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/bg9.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="title">Bersama Bulog Mewujudkan Kedaulatan Pangan</h2>
          <!-- <h4>Every landing page needs a small description after the big bold title, that&apos;s why we added this text here. Add here all the information that can make you or your product create the first impression.</h4> -->
          <br>
          <a href="#features" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Pelajari Lebih Lanjut
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container" id="features">
      <div class="section text-center">
        <div class="features">
          <div class="row">
            <div class="col-md-12">
              <table align="center" width="100%">
                <tr>
                  <td colspan="2" class="tdleft">
                  <p align="left" class="info-title2">E-CREDITS</p>
                  </td>
                  <td class="tdright">
                  <p align="right" class="info-title2">Rp. 0</p>
                  </td>
                </tr>
                <tr>
                  <td colspan="3" class="tdfull" height="50px">  

                  </td>
                </tr>
                <tr>
                  <td style="padding: 0 15px;">
                    <div class="info">
                      <a href="#">
                        <div class="icon icon-info" id="bingkai">
                          <i class="material-icons">people</i>
                        </div>
                      </a>                      
                      <h6 class="info-title">E-tani</h6>
                    </div>
                  </td>
                  <td style="padding: 0 15px;">
                    <div class="info">
                      <a href="#">
                        <div class="icon" id="bingkai">
                          <i class="material-icons">account_balance</i>
                        </div>
                      </a>                      
                      <h6 class="info-title">E-bulog</h6>
                    </div>
                  </td>
                  <td style="padding: 0 15px;">
                    <div class="info">
                      <a href="#">
                        <div class="icon icon-danger" id="bingkai">
                          <i class="material-icons">attach_money</i>
                        </div>
                      </a>                      
                      <h6 class="info-title">Financing</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 0 15px;">
                    <div class="info">
                      <a href="#">
                        <div class="icon icon-warning" id="bingkai">
                          <i class="material-icons">add_shopping_cart</i>
                        </div>
                      </a>                      
                      <h6 class="info-title">E-pupuk</h6>
                    </div>
                  </td>
                  <td style="padding: 0 15px;">
                    <div class="info">
                      <a href="#">
                        <div class="icon icon-success" id="bingkai">
                          <i class="material-icons">local_library</i>
                        </div>
                      </a>                      
                      <h6 class="info-title">e-tutor</h6>
                    </div>
                  </td>
                  <td style="padding: 0 15px;">
                    <div class="info">
                      <a href="#">
                        <div class="icon icon-warning" id="bingkai">
                          <i class="material-icons">add_shopping_cart</i>
                        </div>
                      </a>                      
                      <h6 class="info-title">E-benih</h6>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-center">
        <ul>
          <li>
            <a href="#">
              Contact Us
            </a>
          </li>
          <li>
            <a href="#">
              About Us
            </a>
          </li>
          <li>
            <a href="#">
              Bulog
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-center">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="../assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
</body>

</html>