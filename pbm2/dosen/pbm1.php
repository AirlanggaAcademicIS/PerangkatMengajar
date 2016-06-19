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
    <link rel="stylesheet" href="../assets/pure/css/Layout.css">
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
                      <a class="test" tabindex="-1" href="#">Semester 1 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbm1.php">Pengantar Manajemen Hukum</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Kalkulus</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Pengantar Teknologi Informasi</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Algoritma Pemrograman</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Agama Islam 1</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Bahasa Inggris</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 2 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbm1.php">Ilmu Sosial Budaya Dasar</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Bahasa Indonesia</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Matriks Transformasi Linier</a></li>
                        <li><a tabindex="-1" href="pbm1.php">PPKN</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Teori Organisasi Umum</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Statistika Dasar</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Struktur Data</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 3 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbm1.php">Rekayasa Perangkat Lunak</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Pemrograman Berbasis Objek</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Konsep Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Sistem Operasi</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Basis Data</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Matematika Diskrit</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Analisis Multivariat</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 4 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbm1.php">Teknik Peramalan</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Riset Operasi</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Pemrograman Berbasis Internet</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Interaksi Manusia dan Komputer</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Jaringan Komputer</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Sistem Basis Data</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Sistem Informasi Manajemen</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 5 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="pbm1.php">Etika Profesi</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Sistem Informasi Akuntansi</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Teknik Basis Data</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Analisis Perancangan Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="pbm1.php">E-Business</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Keamanan Komputer</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Pemodelan dan Simulasi</a></li>
                        <li><a tabindex="-1" href="pbm1.php">Sistem Informasi Pemasaran</a></li>
                      </ul>
                    </li><li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Semester 6 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="dosen/pbm1.php">Agama Islam 2</a></li>
                        <li><a tabindex="-1" href="dosen/pbm1.php">Kecerdasan Buatan</a></li>
                        <li><a tabindex="-1" href="dosen/pbm1.php">Pengembangan Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbm1.php">Audit Sistem Informasi</a></li>
                        <li><a tabindex="-1" href="dosen/pbm1.php">Perancangan Sumber Daya</a></li>
                        <li><a tabindex="-1" href="dosen/pbm1.php">KKN</a></li>
                        <li><a tabindex="-1" href="dosen/pbm1.php">Metodologi Penelitian</a></li>
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
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                <p>Identitas MA</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                                <p>GBPP</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                                <p>Kontrak Perkuliahan</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
                                <p>SAP</p>
                            </div>
                    </div>
                </div>
                  
                    <div class="row setup-content" id="step-1">
                      <div class="box-header with-border">
                        <h3><center>Identitas Mata Ajar</center></h3>
                        <td><p><a href="exportdata-pdf-identitas.php"><button class="btn btn-primary"><b>Export Data ke PDF</b></button></a></p></td>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <?php
                           if(isset($_POST['simpan1'])) {
                              $dbhost = 'localhost';
                              $dbuser = 'root';
                              $dbpass = '';
                              $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                              
                              if(! $conn ) {
                                 die('Could not connect: ' . mysql_error());
                              }
                              
                              
                              $kdmataajar = $_POST['kdmataajar'];
                              $penanggungjwb = $_POST['penanggungjwb'];
                              $mataajar = $_POST['mataajar'];
                              $bebanstudi = $_POST['bebanstudi'];
                              $semester = $_POST['semester'];
                              $kompetensi = $_POST['kompetensi'];
                              $deskripsi = $_POST['deskripsi'];
                              $prasyarat = $_POST['prasyarat'];
                              $atrsoft = $_POST['atrsoft'];

                              $message = "Entered data successfully";
                              
                              $sql = "INSERT INTO mata_kuliah ". "(KODE_MK,NIP,NAMA_MK,BEBAN_STUDI,SEMESTER,KOMPETENSI,DESKRIPSI,PRASYARAT,ATRIBUT_SS) ". "VALUES('$kdmataajar','$penanggungjwb','$mataajar','$bebanstudi','$semester','$kompetensi','$deskripsi','$prasyarat','$atrsoft')";
                                 
                              mysql_select_db('pbm');
                              $retval = mysql_query( $sql, $conn );
                              
                              if(! $retval ) {
                                 die('Could not enter data: ' . mysql_error());
                              }
                              
                              echo "<script type='text/javascript'>alert('$message');</script>";
                              
                              mysql_close($conn);
                           }else {
                        ?>
                        <form class="form-horizontal" method = "post" action = "">
                          <div class="box-body">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Kode Mata Ajar :</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="kdmataajar" name="kdmataajar" placeholder="Kode Mata Ajar">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Mata Ajar :</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="mataajar" name="mataajar" placeholder="Mata Ajar">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Beban Studi :</label>
                              <div class="col-sm-8">
                                <select id="bebanstudi" name="bebanstudi" class="form-control">
                                                <option selected value="">-- Pilih Beban Studi --</option>
                                                <option value="2">2 SKS</option>
                                                <option value="3">3 SKS</option>
                                                <option value="4">4 SKS</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Kompetensi :</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="kompetensi" name="kompetensi" placeholder="Kompetensi">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Atribut Softskill :</label>
                              <div class="col-sm-8">
                                <select id="atrsoft" name="atrsoft" class="form-control">
                                                <option selected value="">-- Pilih Atribut Softskill --</option>
                                                <option value="Kejujuran">Kejujuran</option>
                                                <option value="Kedisiplinan">Kedisiplinan</option>
                                                <option value="Keaktifan">Keaktifan</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Deskripsi :</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Prasyarat :</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="prasyarat" name="prasyarat" placeholder="Prasyarat">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Penanggung Jawab :</label>
                              <div class="col-sm-8">
                                <?php
                                              //connect to mysql database
                                              $connection = mysqli_connect("localhost","root","","pbm") or die("Error " . mysqli_error($connection));

                                              //fetch data from database
                                              $sql = "select NIP,NAMA from dosen";
                                              $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
                                ?>
                                <select id="penanggungjwb" name="penanggungjwb" class="form-control">
                                                  <?php while($row = mysqli_fetch_array($result)) { ?>
                                                      <option value="<?php echo $row['NIP']; ?>"><?php echo $row['NAMA']; ?></option>
                                                  <?php } ?>
                                </select>
                                                  <?php mysqli_close($connection); ?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Semester :</label>
                              <div class="col-sm-8">
                                <select id="semester" name="semester" class="form-control">
                                                <option value="">-- Select Semester --</option>
                                                <option value="1">Semester 1</option>
                                                <option value="2">Semester 2</option>
                                                <option value="3">Semester 3</option>
                                                <option value="4">Semester 4</option>
                                                <option value="5">Semester 5</option>
                                                <option value="6">Semester 6</option>
                                                <option value="7">Semester 7</option>
                                                <option value="8">Semester 8</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label"></label>
                              <!-- <div class="col-sm-8">
                                <button type="reset" class="col-sm-5 btn btn-default">Reset</button>
                              </div> -->
                              <div class="col-sm-8">
                                <button type="reset" class="col-sm-5 btn btn-default">Reset</button>
                                <button type="submit" name="simpan1" class="col-sm-5 btn btn-primary nextBtn pull-right">Next</button>
                              </div>
                            </div>
                          </div><!-- /.box-body -->
                        </form>
                        <br>
                        <?php
                           }
                        ?>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <div class="row setup-content" id="step-2">
                      <div class="box-header with-border">
                        <h3><center>GBPP</center></h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <?php
                           if(isset($_POST['simpan2'])) {
                              $dbhost = 'localhost';
                              $dbuser = 'root';
                              $dbpass = '';
                              $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                              
                              if(! $conn ) {
                                 die('Could not connect: ' . mysql_error());
                              }
                              
                              
                              $mataajar = $_POST['mataajar'];
                              $kompetensi = $_POST['kompetensi'];
                              $kompetensikhusus = $_POST['kompetensikhusus'];
                              $pokokbhs = $_POST['pokokbhs'];
                              $subpokokbhs = $_POST['subpokokbhs'];
                              $metode = $_POST['metode'];
                              $media = $_POST['media'];
                              $waktu = $_POST['waktu'];

                              $message = "Entered data successfully";
                              
                              $sql = "INSERT INTO kompetensi_khusus ". "(KODE_MK,KODE_KK,NAMA_KK,NAMA_PB,SUB_PB,METODE,MEDIA,WAKTU) ". "VALUES('$mataajar','$kompetensi','$kompetensikhusus','$pokokbhs','$subpokokbhs','$metode','$media','$waktu')";
                                 
                              mysql_select_db('pbm');
                              $retval = mysql_query( $sql, $conn );
                              
                              if(! $retval ) {
                                 die('Could not enter data: ' . mysql_error());
                              }
                              
                              echo "<script type='text/javascript'>alert('$message');window.location = 'http://localhost:8081/pbm2/dosen/pbm1.php';</script>";
                              
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
                                              <input id="kompetensikhusus" name="kompetensikhusus" type="text" placeholder="Kompetensi Khusus" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                              <td></td>
                                          <td><br><label class="control-label">Pokok Bahasan</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="pokokbhs" name="pokokbhs" type="text" placeholder="Pokok Bahasan" class="form-control input-md">
                                          </td>
                            </tr>
                            <!-- <tr>
                              <td></td>
                                          <td><br><label class="control-label">Upload Materi</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="upload" name="upload" type="file" placeholder="Pokok Bahasan" class="control-label">
                                          </td>
                            </tr> -->
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
                              <td><br><button class="btn btn-default control-label" type="submit" name="simpan2">Save</button></td>
                              <td><br><button class="btn btn-primary control-label" type="button" name="simpan2">Next</button></td>
                            </tr>
                          </table>
                        </form>
                        <br>
                        <?php
                           }
                        ?>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <div class="row setup-content" id="step-3">
                      <div class="box-header with-border">
                        <h3><center>Kontrak Perkuliahan</center></h3>
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
                                          <td><br><label class="control-label">Strategi Perkuliahan</label></td>
                                          <td class="col-md-9"><br>
                                              <input id="strategi" name="strategi" type="text" placeholder="Strategi Perkuliahan" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="control-label">Komponen Penilaian</label></td>
                                          <td class="col-md-9"><br>
                                              <select id="metode" name="metode" class="form-control">
                                                <option selected value="">-- Pilih Pertemuan --</option>
                                                <option value="Tugas">Tugas</option>
                                                <option value="Kuis">Kuis</option>
                                                <option value="Softskill">Softskill</option>
                                                <option value="Tutor">Tutor</option>
                                                <option value="UTS">UTS</option>
                                                <option value="UAS">UAS</option>
                                              </select>
                                          </td>
                            </tr>
                            <tr>
                                          <td><br></td>
                                          <td class="col-md-9"><br>
                                              <textarea id="kuis" name="kuis" type="text" class="form-control input-md"></textarea>
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="control-label">Komponen dan Metode Penelitian :</label></td>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">Kuis :</label>
                                                <input id="kuis" name="kuis" type="text" placeholder="Kuis" class="form-control input-md">
                                            </td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">UAS :</label>
                                                <input id="uas" name="uas" type="text" placeholder="UAS" class="form-control input-md">
                                            </td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">Softskill :</label>
                                                <input id="softskill" name="softskill" type="text" placeholder="Softskill" class="form-control input-md">
                                            </td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">Tugas :</label>
                                                <input id="tugas" name="tugas" type="text" placeholder="Tugas" class="form-control input-md">
                                            </td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">Tutor :</label>
                                                <input id="tutor" name="tutor" type="text" placeholder="Tutor" class="form-control input-md">
                                            </td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">UTS :</label>
                                                <input id="uts" name="uts" type="text" placeholder="UTS" class="form-control input-md">
                                            </td>
                                          </tr>
                            </tr>
                            <tr>
                                          <td><br><label class="control-label">Jadwal Kuliah :</label></td>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">Pertemuan Ke :</label>
                                                <select id="metode" name="metode" class="form-control">
                                                  <option selected value="">-- Pilih Pertemuan --</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">Hari / Tanggal :</label>
                                                <select id="metode" name="metode" class="form-control">
                                                  <option selected value="">-- Pilih Hari --</option>
                                                  <option value="Senin">Senin</option>
                                                  <option value="Selasa">Selasa</option>
                                                  <option value="Rabu">Rabu</option>
                                                  <option value="Kamis">Kamis</option>
                                                  <option value="Jumat">Jumat</option>
                                                  <option value="Sabtu">Sabtu</option>
                                                  <option value="Minggu">Minggu</option>
                                                </select>
                                                <select id="metode" name="metode" class="form-control">
                                                  <option selected value="">-- Pilih Tanggal --</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="9"></option>
                                                  <option value="10"></option>
                                                  <option value="11"></option>
                                                  <option value="12"></option>
                                                  <option value="13"></option>
                                                  <option value="14"></option>
                                                  <option value="15">7</option>
                                                  <option value="8">8</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td></td>
                                            <td class="col-md-9"><br>
                                              <label class="control-label">Softskill :</label>
                                                <input id="softskill" name="softskill" type="text" placeholder="Softskill" class="form-control input-md">
                                            </td>
                                          </tr>
                            </tr>
                            <tr>
                              <td></td>
                              <td><br><button class="btn btn-primary col-md-3 control-label pull-right" type="submit" name="simpan">Next</button></td>
                            </tr>
                          </table>
                        </form>
                        <br>
                        <?php
                           }
                        ?>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <div class="row setup-content" id="step-4">
                      <div class="box-header with-border">
                        <h3><center>SAP</center></h3>
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
                                          <td><br><label class="col-md-12 control-label">Pertemuan ke</label></td>
                                          <td class="col-md-4"><br>
                                              <select id="metode" name="metode" class="form-control">
                                                <option selected value="">-- Pilih Pertemuan --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                              </select>
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="col-md-12 control-label">Tahap Pembelajaran</label></td>
                                          <td class="col-md-4"><br>
                                              <select id="tahap" name="tahap" class="form-control">
                                                <option selected value="">-- Pilih Tahap Pembelajaran --</option>
                                                <option value="Bab 1">Bab 1</option>
                                                <option value="Bab 2">Bab 2</option>
                                                <option value="Bab 3">Bab 3</option>
                                                <option value="Penutupan">Penutupan</option>
                                              </select>
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="col-md-12 control-label">Kegiatan Pengajar</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="kpengajar" name="kpengajar" type="text" placeholder="Kegiatan Pengajar" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="col-md-12 control-label">Kegiatan Mahasiswa</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="kmahasiswa" name="kmahasiswa" type="text" placeholder="Kegiatan Mahasiswa" class="form-control input-md">
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="col-md-12 control-label">Media dan Alat Pengajar</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="papantulis" name="papantulis" type="checkbox" value="Papan Tulis">   Papan Tulis<br>
                                              <input id="papantulis" name="papantulis" type="checkbox" value="Bahan Ajar">   Bahan Ajar<br>
                                              <input id="papantulis" name="papantulis" type="checkbox" value="LCD">   LCD<br>
                                          </td>
                            </tr>
                            <tr>
                                          <td><br><label class="col-md-4 control-label">Evaluasi</label></td>  
                                          <td class="col-md-4"><br>
                                              <input id="evaluasi" name="evaluasi" type="text" placeholder="Evaluasi" class="form-control input-md">
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

    <script src="../assets/pure/js/PBMDosen.js"></script>
    <script src="../assets/pure/js/Navbar.js"></script>
  </body>
</html>
