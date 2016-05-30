<!DOCTYPE html>
<html lang="en">
<?php include ("DBconnect.php"); ?>

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
								<option value="--Pilih Penilaian--">--Pilih Penilaian--</option>
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
						    </tr>
          </table>
                <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <label class="col-xs-3 control-label" for="strategi"></label>
                          <table width="100%" border="0">
                              <tr>
                                <td width="32%" height="64"><label class="col-xs-3 control-label" for="label"></label>
							   <div class="row">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for="pertemuan_ke">Pertemuan ke: </label>
                            <div class="col-md-3">
                                <select id="pertemuan_ke" name="pertemuan_ke" class="form-control">
								<option value="--Pilih Pertemuan--">--Pilih Pertemuan--</option>
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
				<td>Hari:			    </td>
							   <div class="row">
                    <div class="col-md-7">
                                <p>
                                  <select id="Hari_ke" name="Hari_ke" class="form-control">
                                    <option value="--Pilih Hari--">--Pilih Hari--</option>
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jumat</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                              </select>
                                </p>
                                <td>Tanggal:			    </td>
							   <div class="row">
					<div class="col-md-10">
                                 <select id="Tanggal_ke" name="Tanggal_ke" class="form-control">
                                 <option value="--Pilih Tanggal--">--Pilih Tanggal--</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
								  <option>8</option>
								  <option>9</option>
								  <option>10</option>
                                </select>
								
                                <select id="Bulan_ke" name="Bulan_ke" class="form-control">
                                  <option value="--Pilih Bulan--">--Pilih Bulan--</option>
                                  <option>Januari</option>
                                  <option>Februari</option>
                                  <option>Maret</option>
                                  <option>April</option>
                                  <option>Mei</option>
                                  <option>Juni</option>
                                  <option>Juli</option>
								  <option>Agustus</option>
								  <option>September</option>
								  <option>Oktober</option>
								  <option>November</option>
								  <option>Desember</option>
                                </select>
								
                                <select id="Tahun_ke" name="Tahun_ke" class="form-control">
                                  <option value="--Pilih Tahun--">--Pilih Tahun--</option>
                                  <option>2013</option>
                                  <option>2014</option>
                                  <option>2015</option>
                                  <option>2016</option>
                                  <option>2017</option>
                                  <option>2018</option>
                                  <option>2019</option>
                                </select>
                              </p></td>
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
                            <p>
                  <label></label>
                
</html>
