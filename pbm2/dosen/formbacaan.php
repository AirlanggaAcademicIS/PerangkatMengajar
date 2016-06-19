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
    <script src="angular.js"></script>
    <script src="appformbacaan.js"></script>
    <link rel="shortcut icon" href="../assets/angular/img/favicon.png">
    <link rel="stylesheet" href="../assets/angular/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../assets/angular/css/style.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/angular/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/angular/dist/css/skins/_all-skins.min.css">
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
              <a href="../profile.php" class="navbar-brand"><img src="../assets/pure/image/LogoEpbm.png" alt="" width="80%"></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="../profile.php"><h5>Home </h5></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h5>PBM <span class="caret"></span></h5></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 1 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbmidentitasma.php">Pengantar Manajemen Hukum</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Kalkulus</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Pengantar Teknologi Informasi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Algoritma Pemrograman</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Agama Islam 1</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Bahasa Inggris</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 2 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbmidentitasma.php">Ilmu Sosial Budaya Dasar</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Bahasa Indonesia</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Matriks Transformasi Linier</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">PPKN</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Teori Organisasi Umum</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Statistika Dasar</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Struktur Data</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 3 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbmidentitasma.php">Rekayasa Perangkat Lunak</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Pemrograman Berbasis Objek</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Konsep Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Sistem Operasi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Basis Data</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Matematika Diskrit</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Analisis Multivariat</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 4 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbmidentitasma.php">Teknik Peramalan</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Riset Operasi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Pemrograman Berbasis Internet</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Interaksi Manusia dan Komputer</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Jaringan Komputer</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Sistem Basis Data</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Sistem Informasi Manajemen</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 5 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbmidentitasma.php">Etika Profesi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Sistem Informasi Akuntansi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Teknik Basis Data</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Analisis Perancangan Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">E-Business</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Keamanan Komputer</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Pemodelan dan Simulasi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Sistem Informasi Pemasaran</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 6 <span class="fa fa-angle-right"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbmidentitasma.php">Agama Islam 2</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Kecerdasan Buatan</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Pengembangan Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Audit Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Perancangan Sumber Daya</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">KKN</a></li>
                        <li><a tabindex="-1" href="pbmidentitasma.php">Metodologi Penelitian</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h5>Form <span class="caret"></span></h5></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mata Ajar Baru</a></li>
                    <li><a href="vformbacaan.php">Bacaan Baru</a></li>
                  </ul>
                </li>
                <li><a href="about2.php"><h5>About </h5></a></li>
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
                        <img src="../assets/angular/dist/img/Photo Nov 01, 6 56 17 PM.jpg" class="img-circle" alt="User Image">
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
            <!-- <h1>
              <center>
                <img src="../assets/angular/img/logo-unair.png" alt="" height="15%" width="15%">
              <center><br>
              <font color="white"><h2>Sistem Informasi Proses Belajar Mengajar</h2></font>
              <small></small>
            </h1> --><br>

            <fieldset>
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                      <div class="box-header with-border">
                        <h3><center>Bacaan Baru</center></h3>
                      </div><!-- /.box-header -->
                      <!-- form start -->
                      <?php
                         if(isset($_POST['simpan'])) {
                            $dbhost = 'localhost';
                            $dbuser = 'root';
                            $dbpass = '';
                            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                            
                            if(! $conn ) {
                               die('Could not connect: ' . mysql_error());
                            }
                            
                            
                            $kodemk = $_POST['kodemk'];
                            $judul = $_POST['judul'];
                            $tahun = $_POST['tahun'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $kota = $_POST['kota'];

                            $message = "Entered data successfully";
                            
                            $sql = "INSERT INTO bacaan ". "(KODE_MK,JUDUL,TAHUN,NAMA_PENULIS,NAMA_PENERBIT,KOTA_PENERBIT) ". "VALUES('$kodemk','$judul','$tahun','$penulis','$penerbit','$kota')";
                               
                            mysql_select_db('pbm');
                            $retval = mysql_query( $sql, $conn );
                            
                            if(! $retval ) {
                               die('Could not enter data: ' . mysql_error());
                            }
                            
                            echo "<script type='text/javascript'>alert('$message');window.location = 'http://localhost:8081/pbm2/dosen/vformbacaan.php';</script>";
                            
                            mysql_close($conn);
                         }else {
                      ?>
                      <form method = "post" action = "<?php $_PHP_SELF ?>">
                        <table class="table table-striped" ng-repeat="key in ata">
                              <tr>
                                <td class="col-sm-2 control-label">Kode Mata Kuliah</td>
                                <td>
                                  <?php
                                                //connect to mysql database
                                                $connection = mysqli_connect("localhost","root","","pbm") or die("Error " . mysqli_error($connection));

                                                //fetch data from database
                                                $sql = "select KODE_MK from mata_kuliah";
                                                $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
                                  ?>
                                  <select id="kodemk" name="kodemk" class="form-control" required>
                                                        <option selected value="">-- Pilih Kode Mata Kuliah --</option>
                                                    <?php while($row = mysqli_fetch_array($result)) { ?>
                                                        <option value="<?php echo $row['KODE_MK']; ?>"><?php echo $row['KODE_MK']; ?></option>
                                                    <?php } ?>
                                  </select>
                                                    <?php mysqli_close($connection); ?>
                                </td>
                              </tr>
                              <tr>
                                <td class="col-sm-2 control-label">Judul Buku</td>
                                <td>
                                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" required>
                                </td>
                              </tr>
                              <tr>
                                <td class="col-sm-2 control-label">Tahun Terbit</td>
                                <td>
                                  <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun Terbit" required>
                                </td>
                              </tr>
                              <tr>
                                <td class="col-sm-2 control-label">Nama Penulis</td>
                                <td>
                                  <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Nama Penulis" required>
                                </td>
                              </tr>
                              <tr>
                                <td class="col-sm-2 control-label">Nama Penerbit</td>
                                <td>
                                  <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Nama Penerbit" required>
                                </td>
                              </tr>
                              <tr>
                                <td class="col-sm-2 control-label">Kota Penerbit</td>
                                <td>
                                  <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota Penerbit" required>
                                </td>
                              </tr>
                              <tr>
                                <td></td>
                                <td><button type="submit" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
                                <button type="reset" class="btn btn-default">Reset</button></td>
                              </tr><!-- /.box-footer -->
                        </table>
                      </form>
                      <?php
                         }
                      ?>
                    </div>
            </fieldset>
          </section>
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
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

    <!--<script src="../assets/angular/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../assets/angular/bootstrap/js/bootstrap.min.js"></script>-->
    <script src="../assets/angular/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/angular/plugins/fastclick/fastclick.min.js"></script>
    <script src="../assets/angular/dist/js/app.min.js"></script>
    <script src="../assets/angular/dist/js/demo.js"></script>
  </body>
</html>
