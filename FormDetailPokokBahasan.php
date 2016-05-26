<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>DETAIL POKOK BAHASAN</title>
<?php include ("DBconnect.php"); ?>
<!-- <link href="file:///C|/Users/Kinanti Ramdhani/AppData/Roaming/Adobe/Dreamweaver CC 2015/en_US/Configuration/Temp/Assets/eam828C.tmp/css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
<link href="file:///D|/KULIAH/semester 6/PSI/css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<form id="form8" name="form8" method="post" action="">
  <table width="941" height="280" border="0">
    <tbody>
      <tr>
        <td width="113">Pokok Bahasan</td>
        <td width="5">:</td>
        <td width="215"><label for="textfield">
   </label>
        <input type="text" name="textfield" id="textfield" placeholder="Isi Pokok Bahasan di sini" oninvalid="this.setCustomValidity('Pokok Bahasan harus diisi')" oninput="setCustomValidity('')" required/></td></td>
      </tr>
      <tr>
        <td>Metode</td>
        <td>:</td>
        <td><label>
        <select name="select4">
          <option value="--Pilih Metode--">--Pilih Metode--</option>
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
          <option value="--Pilih Media--">--Pilih Media--</option>
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
          <option value="--Pilih Waktu--">--Pilih Waktu--</option>
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
        <?php 
		$r = mysql_query("Select JUDUL,TAHUN,NAMA_PENULIS,NAMA_PENERBIT,KOTA_PENERBIT from bacaan");
		while($data= mysql_fetch_array($r)){
			?>
        <label>
          <input type="checkbox" name="checkbox4" value= "<?php echo $row.$data['JUDUL'].$data['TAHUN'].$data['NAMA_PENULIS'].$data['NAMA_PENERBIT'].$data['KOTA_PENERBIT'];?>"/> 
		 
		  <?php echo $data['JUDUL']; echo ", "; echo $data['TAHUN']; echo ", "; echo $data['NAMA_PENULIS']; echo ", "; echo $data['NAMA_PENERBIT']; echo ", "; echo $data['KOTA_PENERBIT'];?> 
         
          </label><br />
                  <?php } ?>
          </td>
      </tr>
      <tr>
        <td colspan="3" align="right">
            <input name="Submit2" type="submit" value="BACK" />
        <input type="submit" name="Submit" value="NEXT" /></td>
      </tr>
    </tbody>
  </table>
</form>
<script src="file:///D|/KULIAH/semester 6/PSI/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<!-- <script src="file:///C|/Users/Kinanti Ramdhani/AppData/Roaming/Adobe/Dreamweaver CC 2015/en_US/Configuration/Temp/Assets/eam828C.tmp/js/bootstrap.js" type="text/javascript"></script> -->
<script src="file:///D|/KULIAH/semester 6/PSI/js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
