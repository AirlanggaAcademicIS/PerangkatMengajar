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
    <link rel="stylesheet" href="../assets/pure/css/Layout.css">
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="index.html" class="navbar-brand"><img src="../assets/pure/image/LogoEpbm.png" alt="" width="80%"></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html"><h5>Home </h5></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h5>PBM <span class="caret"></span></h5></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="pbm1.php">Semester 1</a></li>
                    <li><a href="pbm1.php">Semester 2</a></li>
                    <li><a href="pbm1.php">Semester 3</a></li>
                    <li><a href="pbm1.php">Semester 4</a></li>
                    <li><a href="pbm1.php">Semester 5</a></li>
                    <li><a href="pbm1.php">Semester 6</a></li>
                    <li><a href="pbm1.php">Semester 7</a></li>
                    <li><a href="pbm1.php">Semester 8</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h5>Form <span class="caret"></span></h5></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mata Ajar Baru</a></li>
                    <li><a href="vformbacaan.php">Bacaan Baru</a></li>
                  </ul>
                </li>
                <li><a href="about.html"><h5>About </h5></a></li>
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
              <div class="container" id="startchange">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle" disabled>1</a>
                                <p>Identitas MA</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                                <p>GBPP</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled>3</a>
                                <p>Kontrak Perkuliahan</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled>4</a>
                                <p>SAP</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled>5</a>
                                <p>Email Templates</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled>6</a>
                                <p>Preview & Submit</p>
                            </div>
                    </div>
                </div>
                  
                    <div class="row setup-content">
                      <div class="box-header with-border">
                        <h3><center>Kompetensi</center></h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <?php
                           if(isset($_POST['simpan'])) {
                              $dbhost = 'localhost';
                              $dbuser = 'root';
                              $dbpass = '';
                              $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                              
                              if(! $conn ) {
                                 die('Could not connect: ' . mysql_error());
                              }
                              
                              
                              $stack = $_POST['stack'];
                              $servicename = $_POST['servicename'];
                              $servicearch = $_POST['servicearch'];
                              $serviceversion = $_POST['serviceversion'];
                              $servicedesc = $_POST['servicedesc'];
                              $os = $_POST['os'];
                              $softlicense = $_POST['softlicense'];
                              $servicecat = $_POST['servicecat'];

                              $message = "Entered data successfully";
                              
                              $sql = "INSERT INTO bacaan ". "(KODE_MK,JUDUL,TAHUN,NAMA_PENULIS,NAMA_PENERBIT,KOTA_PENERBIT) ". "VALUES('$kodemk','$judul','$tahun','$penulis','$penerbit','$kota')";
                                 
                              mysql_select_db('pbm');
                              $retval = mysql_query( $sql, $conn );
                              
                              if(! $retval ) {
                                 die('Could not enter data: ' . mysql_error());
                              }
                              
                              echo "<script type='text/javascript'>alert('$message');window.location = 'http://localhost:8081/pbm2/dosen/pbm2.php';</script>";
                              
                              mysql_close($conn);
                           }else {
                        ?>
                        <form method = "post" action = "<?php $_PHP_SELF ?>">
                          <table>
                            <tr>
                                          <td><br><label class="col-md-4 control-label">Mata Ajar</label></td>
                                          <td class="col-md-4"><br>
                                              <input id="mataajar" name="mataajar" type="text" placeholder="Mata Ajar" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="col-md-4 control-label">Kompetensi</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="kompetensi" name="kompetensi" type="text" placeholder="Kompetensi" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                              <td></td>
                                          <td><br><label class="control-label">Kompetensi Khusus</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="kompetensikhu" name="kompetensikhu" type="text" placeholder="Kompetensi Khusus" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                              <td></td>
                                          <td><br><label class="control-label">Pokok Bahasan</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="pokokbhs" name="pokokbhs" type="text" placeholder="Pokok Bahasan" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                              <td></td>
                                          <td><br><label class="control-label">Upload Materi</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="upload" name="upload" type="file" placeholder="Pokok Bahasan" class="control-label">
                                          </td>
                            </tr>
                            <tr>
                              <td></td>
                                          <td><br><label class="control-label">Sub Pokok Bahasan</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="subpokokbhs" name="subpokokbhs" type="text" placeholder="Sub Pokok Bahasan" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="col-md-4 control-label">Metode</label></td>  
                                          <td class="col-md-4"><br>
                                              <select id="metode" name="metode" class="form-control">
                                                <option selected value="">-- Select Metode --</option>
                                                <option value="Ceramah">Ceramah</option>
                                                <option value="Presentasi">Presentasi</option>
                                                <option value="Tanya Jawab">Tanya Jawab</option>
                                              </select>
                                          </td>
                            </tr>
                            <tr>
                                        <td><br><label class="col-md-4 control-label">Media</label></td>  
                                        <td class="col-md-4"><br>
                                              <select id="media" name="media" class="form-control">
                                                <option selected value="">-- Select Media --</option>
                                                <option value="Proyektor">Proyektor</option>
                                                <option value="White Board">White Board</option>
                                                <option value="Hand Out">Hand Out</option>
                                              </select>
                                        </td>
                            </tr>
                            <tr>
                                        <td><br><label class="col-md-4 control-label">Waktu</label></td>
                                        <td class="col-md-4"><br>                     
                                              <select id="waktu" name="waktu" class="form-control">
                                                <option selected value="">-- Select Waktu --</option>
                                                <option value="50mnt">50 menit</option>
                                                <option value="100mnt">100 menit</option>
                                                <option value="150mnt">150 menit</option>
                                                <option value="200mnt">200 menit</option>
                                                <option value="250mnt">250 menit</option>
                                              </select>
                                        </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><br><button class="btn btn-primary col-md-12 control-label" type="submit" name="simpan">Next</button></td>
                            </tr>
                          </table>
                        </form>
                        <br>
                        <?php
                           }
                        ?>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
              </div><br>
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

    <script src="../assets/angular/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../assets/angular/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/angular/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/angular/plugins/fastclick/fastclick.min.js"></script>
    <script src="../assets/angular/dist/js/app.min.js"></script>
    <script src="../assets/angular/dist/js/demo.js"></script>

    <!--<script src="../assets/pure/js/PBMDosen.js"></script>
    <script src="../assets/pure/js/Navbar.js"></script>-->
  </body>
</html>
