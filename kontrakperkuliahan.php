<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-PBM</title>

    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <link href="Css/Login.css" rel="stylesheet">
    <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
    </style>
</head>

<body>
    <!--
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><img src="Assets/LogoEpbm.png" alt=""></a>
            </div>
            	<div id="navbar" class="navbar-collapse collapse">
            		<ul class="nav navbar-nav">
						<li><a href="NavbarDosen.html">Home</a></li>
						<li class="active"><a href="PBMDosen.html">PBM</a></li>
            			<li class="dropdown">
            				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Form<span class="caret"></span>
                            </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                              </ul>
                        </li>
          			</ul>
                    <ul class="nav navbar-nav navbar-right">
                        <div id="navbar">
                            <ul class="nav navbar-nav"><li><a href="#"> Logout</a></li></ul>
                        </div>
                    </ul>
		      </div>
        </div>
    </nav>
-->
    <?php
        include("../e-pbm/NavbarDosen.php");
    ?>

    <div class="container" id="startchange">
		<div class="stepwizard">
    		<div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Identitas MA</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>GBPP</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Kontrak Perkuliahan</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p>SAP</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                    <p>Email Templates</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                    <p>Preview & Submit</p>
                </div>
    		</div>
		</div>
        
<!-- Rahman------------------------------------------------------------->       
        <form enctype="multipart/form-data" role="form">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <?php include("../back-end/FormMataAjar.php"); ?>
                </div>
            </div>
        </div>

<!--Lyli & Kinan------------------------------------------------------------------------------------->
            <div class="row setup-content" id="step-2">
              <div class="col-xs-12">
			  <div class="col-md-12">
                        <h3>Kompetensi</h3>
						<div class="form-group">
                  <table width="598" border="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td> 
    </tr>
    <tr>
      <td><strong>Mata ajar </strong></td>
      <td>:</td>
      <td><input name="mataajar" type="text" oninvalid="this.setCustomValidity('Mata ajar harus diisi')" oninput="setCustomValidity('')" required/></td>
    </tr>
    <tr>
      <td><strong>Kompetensi</strong></td>
      <td>:</td>
      <td><textarea name="kompetensi" cols="50" oninvalid="this.setCustomValidity('kompetensi harus diisi')" oninput="setCustomValidity('')" required="required"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  
      <td><strong>Kompetensi Khusus </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><p>
        <input type="text" name="subkomp" id="subkomp" />
        <input type="submit" name="plus_subkomp" id="plus_subkomp" value="+" />
      </p>        </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><textarea name="list_subkomp" id="list_subkomp" style="width: 250px; height: 75px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;" readonly></textarea>
	  </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Pokok Bahasan </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name="pokokbahasan" />
      <input type="submit" name="plus_pokokbahasan" id="plus_pokokbahasan" value="+" />
	  <div class="form-group">
          <label class="col-md-4 control-label" for="sep_json"> Upload Materi</label>
          
       <input type="file" id="upload_materi" name="upload_materi" class="input-file" accept=".txt,.docx,.pdf" placeholder="Upload Materi">
            
        </div>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><textarea name="list_pokokbahasan" readonly="readonly" id="list_subkomp" style="width: 250px; height: 75px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;"></textarea>
	 	</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Sub Pokok Bahasan </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name="subpokok" id="subpokok"/>
      <input type="submit" name="plus_subpokok" value="+" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><textarea name="list_subpokok" readonly="readonly" id="list_subpokok" style="width: 250px; height: 75px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;"></textarea>
	  	</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
  </table>
   <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
                <p></p>
                </div>
              </div>
            </div>
            
<!-- Rizal-------------------------------------------------------------------------------------->            
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>&nbsp; </h3>
                <table width="100%" height="42" border="0">
                  <tr>
                    <td width="316" height="38"><strong>Kontrak Perkuliahan</strong></td>
                  </tr>
          </table>
                <table width="100%" border="0">
                  <tr>
                    <td height="32"><span class="style1">
                      <label class="col-md-4 control-label" for="label">Strategi Perkuliahan</label>
:</span></td>
                  </tr>
          </table>
                <table width="100%" border="0">
                  <tr>
                    <td height="36"><span class="style1"><span class="col-md-5">
                      <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                    </span></span></td>
                  </tr>
          </table>
                <table width="100%" border="0">
                  <tr>
                    <td width="349" height="33"><span class="style1"><strong>Komponen Dan Metode Penilaian </strong> :</span></td>
                  </tr>
          </table>
                
                          <table width="100%" border="0">
                            <tr>
                              <td height="35"> Komponen Dan Metode Penilaian:</td>
							   <div class="row">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label" for="Komponen_penilaian">komponen penilaian: </label>
                            <div class="col-md-3">
                                <select id="Komponen_penilaian" name="Komponen_penilaian" class="form-control">
                                    <option>Tugas</option>
                                    <option>kuis</option>
                                    <option>Softskill</option>
                                    <option>Tutor</option>
                                    <option>UTS</option>
                                    <option>UAS</option>
                                    
                                </select>
                    </span></td>
                  </tr>
          </table>
                <table width="100%" height="58" border="0">
                  <tr>
                    <td><textarea name="textarea"></textarea></td>
                  </tr>
          </table>
                <table width="100%" border="0">
                  <tr>
                    <td height="28">Kriteria Penilaian : </td>
                  </tr>
          </table>
                <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <label class="col-xs-3 control-label" for="strategi"></label>
                          <table width="100%" border="0">
                              <tr>
                                <td width="32%" height="64"><label class="col-xs-3 control-label" for="label"></label>
                                  <p>Kuis :<br>
                                    <input type="text" name="textfield522">
                                </p>
                                  </td>
                                <td width="68%"><label class="col-xs-3 control-label" for="label"></label>
                                  <label>Tutor :<br> 
                                  <input type="text" name="textfield52">
                                </label></td>
                            </tr></table>
                <table width="100%" border="0">
                            <tr>
                              <td width="32%" height="60"><label class="col-xs-3 control-label" for="label"></label>
                                <p>Tugas :<br>
                                  <input type="text" name="textfield524">
                              </p>
                              </td>
                              <td width="68%"><label class="col-xs-3 control-label" for="label">Soft Skills  :<br>
                                  <input type="text" name="textfield523">
                              </label>
                              <label></label></td>
                            </tr>
              </table>
                          <table width="100%" border="0">
                              <tr>
                                <td width="32%" height="55"><label class="col-xs-3 control-label" for="label"></label>
                                  UAS :<br>
                                  <input type="text" name="textfield525"></td>
                                <td width="68%"><label class="col-xs-3 control-label" for="label"></label>
                                <label>UTS :<br>
                                    <input type="text" name="textfield526">
                                </label></td>
                            </tr>
              </table>
                          <table width="100%" border="0">
                            <tr>
                              <td height="44">Jadwal Kuliah :</td>
							   <div class="row">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="pertemuan_ke">Pertemuan ke: </label>
                            <div class="col-md-3">
                                <select id="pertemuan_ke" name="pertemuan_ke" class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                </select>
                              </span></td>
                            </tr>
                </table>
				<td>Hari/tanggal:			    </td>
							   <div class="row">
                    <div class="col-md-7">
                                <select id="Hari_ke" name="Hari_ke" class="form-control">
                                  <option>Senin</option>
                                  <option>Selasa</option>
                                  <option>Rabu</option>
                                  <option>Kamis</option>
                                  <option>Jumat</option>
                                  <option>Sabtu</option>
                                  <option>Minggu</option>
                                </select>
                          <table width="61%" height="31" border="0">
                            <tr>
                              <td width="17%">
                              </select>
                              <select name="select5">
                              </select>
                              <select name="select4">
                              </select>
                              <select name="select6">
                              </select></td>
							  <table width="100%" border="0">
							  <td height="15"></select><td height="20"></td>
                                <td width="13%">&nbsp;</td>
                                  <td width="14%">&nbsp;</td>
                                  <td width="12%">&nbsp;</td>
                              </tr>
                          </table>
                          <table width="100%" border="0">
                            <tr>
                              <td><div align="right">
                                <input name="SAVE" type="submit" id="SAVE" value="SAVE">
                              </div></td>
                            </tr>
                          </table>
                          <p>&nbsp;</p>
                          <p><p>
                          </p>
                <label class="col-xs-3 control-label" for="label"></label>
                              <label></label>
              <label>
                              <div align="right">
                              </label>
                              <label><br>
                </label>
                            <label><br>
                            </label>
              </div>
              </div>
          </div>
                <p>
                  <label></label>
                SAP
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="pertemuan_ke">Pertemuan ke: </label>
                            <div class="col-md-3">
                                <select id="pertemuan_ke" name="pertemuan_ke" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                           
						                   <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="tahap_pembelajaran">Tahap Pembelajaran: </label>
                            <div class="col-md-4">
                                <select id="tahap_pembelajaran" name="tahap_pembelajaran" class="form-control">
                                    <option>Pendahuluan</option>
                                    <option>Bab 1</option>
                                    <option>Bab 2</option>
                                    <option>Bab 3</option>
                                    <option>Penutupan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Kegiatan_Pengajar">Kegiatan Pengajar: </label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">+</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Kegiatan_Mahasiswa">Kegiatan Mahasiswa: </label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">+</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h4>Media dan alat pengajaran:</h4>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" aria-label="...">
                            </span>
                            <h5>Papan Tulis</h5>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" aria-label="...">
                            </span>
                            <h5>Bahan Ajar</h5>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" aria-label="...">
                            </span>
                            <h5>LCD</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h4>Evaluasi</h4>
                        <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>
                        
                
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
<!-- selesainya ana yushi---------------------------------------------------->
            
            
            <div class="row setup-content" id="step-5">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3> Email Templates</h3>
                        
                        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="emailType">Email Type</label>  
          <div class="col-md-5">
          <input id="emailType" name="emailType" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        
        <br>
        <br>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Description</label>  
          <div class="col-md-5">
          <input id="description" name="description" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        <br>
        <br>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="subject">Subject</label>  
          <div class="col-md-5">
          <input id="subject" name="subject" type="text" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        <br>
        <br>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="body">Body</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="body" name="body"></textarea>
          </div>
        </div>
        
                         <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-6">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3> Preview & Submit</h3>
                        <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                    </div>
                </div>
            </div>
	  </form>
</div>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="Js/PBMDosen.js"></script>
        <script src="Js/Navbar.js"></script>
</body>

</html>
