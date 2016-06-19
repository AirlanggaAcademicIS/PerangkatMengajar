<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-PBM</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="assets/angular/img/favicon.png">
    <link rel="stylesheet" href="assets/angular/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/angular/css/style.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/angular/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/angular/dist/css/skins/_all-skins.min.css">
    <style>
      .dropdown-submenu {
          position: relative;
      }

      .dropdown-submenu .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -1px;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="profile.php" class="navbar-brand"><img src="assets/pure/image/LogoEpbm.png" alt="" width="80%"></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="profile.php"><h5>Home </h5></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h5>PBM <span class="caret"></span></h5></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 1 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Pengantar Manajemen Hukum</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Kalkulus</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Pengantar Teknologi Informasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Algoritma Pemrograman</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Agama Islam 1</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Bahasa Inggris</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 2 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Ilmu Sosial Budaya Dasar</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Bahasa Indonesia</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Matriks Transformasi Linier</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">PPKN</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Teori Organisasi Umum</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Statistika Dasar</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Struktur Data</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 3 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Rekayasa Perangkat Lunak</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Pemrograman Berbasis Objek</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Konsep Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Sistem Operasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Basis Data</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Matematika Diskrit</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Analisis Multivariat</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 4 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Teknik Peramalan</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Riset Operasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Pemrograman Berbasis Internet</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Interaksi Manusia dan Komputer</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Jaringan Komputer</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Sistem Basis Data</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Sistem Informasi Manajemen</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 5 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Etika Profesi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Sistem Informasi Akuntansi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Teknik Basis Data</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Analisis Perancangan Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">E-Business</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Keamanan Komputer</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Pemodelan dan Simulasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Sistem Informasi Pemasaran</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 6 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Agama Islam 2</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Kecerdasan Buatan</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Pengembangan Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Audit Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Perancangan Sumber Daya</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">KKN</a></li>
                        <li><a tabindex="-1" href="dosen/pbmidentitasma.php">Metodologi Penelitian</a></li>
                      </ul>
                    </li>
                    <!-- <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">3rd level dropdown</a></li>
                            <li><a href="#">3rd level dropdown</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li> -->
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h5>Form <span class="caret"></span></h5></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mata Ajar Baru</a></li>
                    <li><a href="dosen/vformbacaan.php">Bacaan Baru</a></li>
                  </ul>
                </li>
                <li><a href="about2.php"><h5>About </h5></a></li>
                <!-- <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">HTML</a></li>
                    <li><a tabindex="-1" href="#">CSS</a></li>
                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">3rd level dropdown</a></li>
                            <li><a href="#">3rd level dropdown</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div> -->
              </ul>
              <!--<form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
              </form>-->
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="logout.php" id="logout" class="dropdown-toggle"><h5>Logout <b id="welcome">(<?php echo $login_session; ?>)</b></h5></a>
                    <!-- <b id="logout"><a href="logout.php" class="btn btn-default btn-flat">Sign out</a></b> -->
                    <!-- <ul class="dropdown-menu">
                      <li class="user-header">
                        <img src="assets/angular/dist/img/Photo Nov 01, 6 56 17 PM.jpg" class="img-circle" alt="User Image">
                        <p>
                          Fran Bow - Web Developer
                          <small></small>
                        </p>
                      </li>
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">Sign out</a>
                          <b id="logout"><a href="logout.php" class="btn btn-default btn-flat">Sign out</a></b>
                        </div>
                      </li>
                      <form class="form-signin user-footer">
                        <label for="inputNip">NIP :</label>
                        <input type="NIP" id="inputNIP" class="form-control" placeholder="NIP" required autofocus>
                        <label for="inputPassword" style="padding-top: 5px;">Password :</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div class="checkbox"></div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                      </form>
                    </ul> -->
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <center>
                <font color="white"><h2>Universitas Airlangga</h2></font><br>
                <img src="assets/angular/img/logo-unair.png" alt="" height="15%" width="15%">
              <center><br>
              <font color="white"><h2>Sistem Informasi Proses Belajar Mengajar</h2></font>
              <small></small>
            </h1><br>

            <!--<div class="register-box">
              <div class="register-box-body">
                <p class="login-box-msg">Have you already registered? If not, please fill out the form below.</p>
                <form action="#" method="post">
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="NIP">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                  </div>
                  <div class="row">
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <div class="col-xs-8">
                      <a href="login.html" class="text-center">I already have a membership</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>-->

            <!-- center -> style="float:none;margin-left:auto;margin-right:auto;" -->
            <div class="col-md-5" style="margin-left:80px;">
              <!-- <div class="box box-solid"> -->
                <!--<div class="box-header with-border">
                  <h3 class="box-title">Top News</h3>
                </div>-->
                <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="assets/angular/img/chinatown.jpg" alt="First slide">
                        <div class="carousel-caption">
                          First Slide
                        </div>
                      </div>
                      <div class="item">
                        <img src="assets/angular/img/chao_phraya.jpg" alt="Second slide">
                        <div class="carousel-caption">
                          Second Slide
                        </div>
                      </div>
                      <div class="item">
                        <img src="assets/angular/img/dexxus_4714207610.jpg" alt="Third slide">
                        <div class="carousel-caption">
                          Third Slide
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div><!-- /.box-body -->
              <!-- </div> -->
            </div><!-- /.col -->

            <div class="col-md-5" style="margin-left:25px;">
              <!-- <div class="box box-solid"> -->
                  <!-- <div class="box-header with-border">
                    <h3 class="box-title">Recently</h3>
                  </div> -->
                  <div class="box-body">
                    <div class="box-group" id="accordion">
                      <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                      <div class="panel box box-primary">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Topic
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="box-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-danger">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              Hot News
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="box-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Nowadays
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div class="box-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                <!-- </div> -->
            </div><!-- /.col -->

          </section>
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <!--.content-wrapper,.right-side{ background-image: url("../../../pure/image/Background.jpg") -> adminlte min css
      .skin-green .wrapper,.skin-green .main-sidebar,.skin-green .left-side{ background-color:#333 -> all skin min css -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>MZRP.105</b>
          </div>
          <strong>Copyright &copy; 2016.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <script>
      $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
          $(this).next('ul').toggle();
          e.stopPropagation();
          e.preventDefault();
        });
      });
    </script>
    <!--<script src="assets/angular/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="assets/angular/bootstrap/js/bootstrap.min.js"></script>-->
    <script src="assets/angular/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="assets/angular/plugins/fastclick/fastclick.min.js"></script>
    <script src="assets/angular/dist/js/app.min.js"></script>
    <script src="assets/angular/dist/js/demo.js"></script>
  </body>
</html>
