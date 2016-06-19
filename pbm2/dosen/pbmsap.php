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
                <li><a href="../about2.php"><h5>About </h5></a></li>
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
                                <a href="##step-1" type="button" class="btn btn-default btn-circle" disabled>1</a>
                                <p>Identitas MA</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="##step-2" type="button" class="btn btn-default btn-circle" disabled>2</a>
                                <p>GBPP</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="##step-3" type="button" class="btn btn-default btn-circle" disabled>3</a>
                                <p>Kontrak Perkuliahan</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-4" type="button" class="btn btn-primary btn-circle">4</a>
                                <p>SAP</p>
                            </div>
                    </div>
                </div>

                    <div class="row setup-content" id="step-4">
                      <div class="box-header with-border">
                        <h3><center><strong>SAP</strong></center></h3>
                        <td><p><a href="exportdata-pdf-sap.php"><button class="btn btn-primary"><b>Export Data ke PDF</b></button></a></p></td>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <?php
                           if(isset($_POST['simpan4'])) {
                              $dbhost = 'localhost';
                              $dbuser = 'root';
                              $dbpass = '';
                              $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                              
                              if(! $conn ) {
                                 die('Could not connect: ' . mysql_error());
                              }
                              
                              
                              $pertemuan = $_POST['pertemuan'];
                              $tahap = $_POST['tahap'];
                              $pengajar = $_POST['pengajar'];
                              $mahasiswa = $_POST['mahasiswa'];
                              //$softskill = $_POST['softskill'];
                              $evaluasi = $_POST['evaluasi'];
                              $date = $_POST['date'];
                              $pokokbhs = $_POST['pokokbhs'];
                              $kegiatan = $_POST['kegiatan'];

                              $message = "Entered data successfully";
                              
                              $sql = "INSERT INTO prasyarat ". "(PERTEMUAN,TAHAP_PEMBELAJARAN,KEG_PENGAJAR,KEG_MAHASISWA,EVALUASI,ALAT_PENGAJAR,DATE,POKOK_BAHASAN,KEGIATAN) ". "VALUES('$pertemuan','$tahap','$pengajar','$mahasiswa','$evaluasi','$_POST[list_subpokok]','$date','$pokokbhs','$kegiatan')";
                                 
                              mysql_select_db('pbm');
                              $retval = mysql_query( $sql, $conn );
                              
                              if(! $retval ) {
                                 die('Could not enter data: ' . mysql_error());
                              }
                              
                              echo "<script type='text/javascript'>alert('$message');window.location = 'http://localhost:8081/pbm2/dosen/pbmsap.php';</script>";
                              
                              mysql_close($conn);
                           }else {
                        ?>
                        <form class="form-horizontal" method = "post" action = "<?php $_PHP_SELF ?>">
                          <div class="box-body">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Jadwal Kuliah :</label>
                              <div class="col-sm-7">
                                
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-5 control-label">Pertemuan Ke :</label>
                              <div class="col-sm-4">
                                <select id="pertemuan" name="pertemuan" class="form-control" >
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
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-5 control-label">Date :</label>
                              <div class="col-sm-4">
                                <input type="text" class="form-control" id="date" name="date" placeholder="yyyy-mm-dd">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Pilih Pokok Bahasan :</label>
                              <div class="col-sm-7">
                                <?php
                                              //connect to mysql database
                                              $connection = mysqli_connect("localhost","root","","pbm") or die("Error " . mysqli_error($connection));

                                              //fetch data from database
                                              $sql = "select NAMA_PB from kompetensi_khusus";
                                              $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
                                ?>
                                <select id="pokokbhs" name="pokokbhs" class="form-control" >
                                                      <option selected value="">-- Pilih Pokok Bahasan --</option>
                                                  <?php while($row = mysqli_fetch_array($result)) { ?>
                                                      <option value="<?php echo $row['NAMA_PB']; ?>"><?php echo $row['NAMA_PB']; ?></option>
                                                  <?php } ?>
                                </select>
                                                  <?php mysqli_close($connection); ?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Pilih Kegiatan :</label>
                              <div class="col-sm-7">
                                <select id="kegiatan" name="kegiatan" class="form-control">
                                                <option selected value="">-- Pilih Kegiatan --</option>
                                                <option value="Kuis">Kuis</option>
                                                <option value="UAS">UAS</option>
                                                <option value="Tugas">Tugas</option>
                                                <option value="Tutor">Tutor</option>
                                                <option value="UTS">UTS</option>
                                </select>
                              </div>
                            </div>
                            <!-- <div class="form-group">
                              <label class="col-sm-3 control-label">Pertemuan Ke :</label>
                              <div class="col-sm-7">
                                <select id="pertemuan" name="pertemuan" class="form-control" required>
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
                              </div>
                            </div> -->
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Tahap Pembelajaran :</label>
                              <div class="col-sm-7">
                                <select id="tahap" name="tahap" class="form-control" required>
                                                  <option selected value="">-- Pilih Tahap Pembelajaran --</option>
                                                  <option value="Bab 1">Bab 1</option>
                                                  <option value="Bab 2">Bab 2</option>
                                                  <option value="Bab 3">Bab 3</option>
                                                  <option value="Penutupan">Penutupan</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Kegiatan Pengajar :</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="pengajar" name="pengajar" placeholder="Kegiatan Pengajar" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Kegiatan Mahasiswa :</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="mahasiswa" name="mahasiswa" placeholder="Kegiatan Pengajar" required>
                              </div>
                            </div>
                            <!-- <div class="form-group">
                              <label class="col-sm-3 control-label">Media dan Alat Pengajaran :</label>
                              <div class="col-sm-7">
                                <input type="checkbox" id="papan" name="papan" placeholder="Kuis">    Papan Tulis<br>
                                <input type="checkbox" id="bahanajar" name="bahanajar" placeholder="Kuis">    Bahan Ajar<br>
                                <input type="checkbox" id="lcd" name="lcd" placeholder="Kuis">    LCD
                              </div>
                            </div> -->
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Media dan Alat Pengajaran :</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="media" name="media" placeholder="Media dan Alat Pengajaran">
                                <textarea name="list_subpokok" readonly="readonly" id="list_subpokok" class="form-control"></textarea>
                              </div>
                              <div class="col-sm-1">
                                <input type="button" class="form-control btn btn-warning" name="plus" id="plus" value="+" />
                                <script>
                                  var z=1;
                                  $(document).ready(function(){
                                    $("#plus").click(function(){
                                      if ($('#media').val() != '') {
                                        $('#list_subpokok').append(z+". "+$("#media").val()+"\n");
                                        $("#media").val("");
                                        z++;
                                      }
                                    });
                                  });
                                </script>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Evaluasi :</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="evaluasi" name="evaluasi" placeholder="Evaluasi" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label"></label>
                              <!-- <div class="col-sm-8">
                                <button type="reset" class="col-sm-5 btn btn-default">Reset</button>
                              </div> -->
                              <div class="col-sm-7">
                                <button type="reset" class="col-sm-3 btn btn-default">Reset</button>
                                <button type="submit" name="simpan4" class="col-sm-3 btn btn-success">Save</button>
                                <a href="../profile.php" class="col-sm-2 btn btn-primary pull-right">Finish <span class="fa fa-angle-right"></span></a>
                                <a href="pbmkontrakkuliah.php" class="col-sm-2 btn btn-primary pull-right"><span class="fa fa-angle-left"></span> Back</a>
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
