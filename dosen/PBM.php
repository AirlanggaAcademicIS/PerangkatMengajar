<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-PBM</title>

    <link href="Assets/Css/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/Css/Layout.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><img src="Assets/Image/LogoEpbm.png" alt=""></a>
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
                                <li><a href="#">Mata Ajar Baru</a></li>
                                <li><a href="#">Bacaan Baru</a></li>
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
        <form role="form">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3> Service Details</h3>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="stack_id">Select Stack</label>
                            <div class="col-md-5">
                                <select id="stack_id" name="stack_id" class="form-control">
                                  <option value="1">Open Source</option>
                                  <option value="2">IBM</option>
                                  <option value="3">Microsoft</option>
                                  <option value="4">Other Services</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="service_name">Service Name</label>  
                            <div class="col-md-5">
                                <input id="service_name" name="service_name" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="service_architecture">Service Architecture</label>  
                            <div class="col-md-5">
                                <input id="service_architecture" name="service_architecture" type="text" placeholder="" class="form-control input-md">
                          </div>
                        </div>
                        <br>
                        <br>
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="service_version">Service Version</label>  
                          <div class="col-md-5">
                          <input id="service_version" name="service_version" type="text" placeholder="" class="form-control input-md">

                          </div>
                        </div>
                        <br>
                        <br>
                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="service_description">Service Description</label>
                          <div class="col-md-4">                     
                            <textarea class="form-control" id="service_description" name="service_description"></textarea>
                          </div>
                        </div>
                        <br>
                        <br>

                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="os_id">Operating System</label>
                          <div class="col-md-5">
                            <select id="os_id" name="os_id" class="form-control">
                              <option value="1">Ubuntu</option>
                              <option value="2">RHEL</option>
                              <option value="3">Windows</option>
                            </select>
                          </div>
                        </div>
                        <br><br>
                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="sl_id">Software License</label>
                          <div class="col-md-5">
                            <select id="sl_id" name="sl_id" class="form-control">
                              <option value="1">Licence 1</option>
                              <option value="2">Licence 2</option>
                              <option value="3">Licence 3</option>
                            </select>
                          </div>
                        </div>
                        <br><br>
                        <!-- Select Basic -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="sc_id">Service Category</label>
                          <div class="col-md-5">
                            <select id="sc_id" name="sc_id" class="form-control">
                              <option value="1">Category 1</option>
                              <option value="2">Category 2</option>
                              <option value="3">Category 3</option>
                                </select>
                          </div>
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
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
      <td><input name="mataajar" type="text" placeholder="Mata Ajar" oninvalid="this.setCustomValidity('Mata ajar harus diisi')" oninput="setCustomValidity('')" required/></td>
    </tr>
    <tr>
      <td><strong>Kompetensi</strong></td>
      <td>:</td>
      <td><textarea name="kompetensi" cols="50" placeholder="Kompetensi" oninvalid="this.setCustomValidity('kompetensi harus diisi')" oninput="setCustomValidity('')" required="required"></textarea></td>
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
      <input type="submit" name="plus_pokokbahasan" id="plus_pokokbahasan" value="+"  />
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
	<form id="form8" name="form8" method="post" action="">
  <table width="347" height="280" border="0">
    <tbody>
      <tr>
        <td width="113">Pokok Bahasan</td>
        <td width="5">:</td>
        <td width="215"><label for="textfield">
   </label>
        <input type="text" name="textfield" id="textfield" placeholder="Pokok Bahasan" size="30" oninvalid="this.setCustomValidity('Pokok Bahasan Harus di isi')" oninput="setCustomValidity('')" required/></td>
      </tr>
      <tr>
        <td>Metode</td>
        <td>:</td>
        <td><label>
        <select name="select4">
		 <option value="---------">---------</option>
          <option value="Ceramah">Ceramah</option>
          <option value="Presentasi">Presentasi</option>
		  <option value="Tanya Jawab">Tanya Jawab</option>

        </select>
        </label></td>
      </tr>
      <tr>
        <td>Media</td>
        <td>:</td>
        <td><label>
          <select name="select5">
		    <option value="---------">---------</option>
            <option value="Proyektor">Proyektor</option>
            <option value="White Board">White Board</option>
		    <option value="Hand out">Hand out</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td>Waktu</td>
        <td>:</td>
        <td><label>
          <select name="select6">
		  <option value="---------">---------</option>
          <option value="50 menit">50 menit</option>
          <option value="100 menit">100 menit</option>
		  <option value="150 menit">150 menit</option>
		  <option value="200 menit">200 menit</option>
          <option value="250 menit">250 menit</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td height="94" valign="top">Bacaan</td>
        <td>:</td>
        <td>
		<label>
          <input type="checkbox" name="checkbox4" value="checkbox" />
        bacaan 1</label><br />
                  <label>
          <input type="checkbox" name="checkbox5" value="checkbox" />
          bacaan 2</label><br />
          <label>
          <input type="checkbox" name="checkbox6" value="checkbox" />
          bacaan 3</label></td>
      </tr>
      
    </tbody>
  </table>
    
 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >BACK</button> </table>
   <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >NEXT</button>
                </div>
                <p></p>
                </div>
              </div>
            </div>
            
<!-- Rizal-------------------------------------------------------------------------------------->            
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Kontrak Perkuliahan</h3>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="strategi">Strategi Perkuliahan</label>  
                    <div class="col-md-5">
                        <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>
                <br>
                <br>
                
                <h4>Komponen Dan Metode Penilaian</h4>
                <br>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label class="col-xs-3 control-label" for="strategi">Kuis</label>  
                            <div class="col-xs-3">
                                <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label class="col-xs-3 control-label" for="strategi">Tugas</label>  
                            <div class="col-xs-3">
                                <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label class="col-xs-3 control-label" for="strategi">UAS</label>  
                            <div class="col-xs-3">
                                <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label class="col-xs-3 control-label" for="strategi">Tutor</label>  
                            <div class="col-xs-3">
                                <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label class="col-xs-3 control-label" for="strategi">Soft Skill</label>  
                            <div class="col-xs-3">
                                <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label class="col-xs-3 control-label" for="strategi">UTS</label>  
                            <div class="col-xs-3">
                                <input id="strategi" name="strategi" type="text" placeholder="" class="form-control input-md">
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
        
<!-- Ana Yushinta------------------------------------------------------------------------------------ -->    
	<div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12" >
                <h3> SAP</h3>
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
                            </div>
                        </div>
                    </div>
                </div>
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


    <script src="Assets/Js/jquery.js"></script>
	<script src="Assets/Js/bootstrap.min.js"></script>
	<script src="Assets/Js/PBMDosen.js"></script>
        <script src="Assets/Js/Navbar.js"></script>
</body>

</html>
