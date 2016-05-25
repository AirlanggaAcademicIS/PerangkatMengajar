

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="bacaan.php">


  <table width="415" border="0">
    <tr>
      <td width="250">Nama Pengarang</td>
      <td width="3">:</td>
      <td width="335"><label for="textfield"></label>
      
      <input name="namapengarang" type="text" placeholder="Isi Nama Pengarang Disini" size="50" oninvalid="this.setCustomValidity('Isikan Nama Pengarang Terlebih Dahulu')" oninput="setCustomValidity('')" required/>
      
      </td>
    </tr>
    <tr>
      <td>Tahun Terbit </td>
      <td>:</td>
      <td><p>
       
        <select name="tahunterbit" placeholder="Tahun Terbit" >
      <option value="Pilih Tahun Terbit">--Pilih Tahun Terbit Disini--</option>
         
        <?php 
		
		$tanggal=getdate();
		for($i=$tanggal['year']; $i>=1980; $i--){
			
			echo "<option value='".$i."'>".$i."</option>";

		}
				?> 
       </select> 
      </p></td>
    </tr>
    <tr>
    
      <td>Judul Buku </td>
      <td>:</td>
      <td><label for="textfield3"></label>
      
      <input name="judulbuku" type="text" placeholder="Isi Judul Buku Disini" size="50" oninvalid="this.setCustomValidity('Isikan Judul Buku Terlebih Dahulu')" oninput="setCustomValidity('')" required/>
      
      
      </td>
    </tr>
    <tr>
      <td>Kota Tempat Terbit </td>
      <td>:</td>
      <td><label for="textfield4"></label>
     
     <input name="kotatempatterbit" type="text" placeholder="Isi Kota Tempat Terbit Disini " size="50" oninvalid="this.setCustomValidity('Isikan Kota Tempat Terbit Terlebih Dahulu')" oninput="setCustomValidity('')" required/>
      
      
      </td>
    </tr>
    <tr>
      <td>Nama Penerbit</td>
      <td>:</td>
      <td><label for="textfield5"></label>
      
      <input name="namapenerbit" type="text" placeholder="Isi Nama Penerbit Disini" size="50" oninvalid="this.setCustomValidity('Isikan Nama Penerbit Terlebih Dahulu')" oninput="setCustomValidity('')" required/>
      
      </td>
    </tr>
    <tr>
      <td colspan="3" align="right">
      
      <input type="submit" name="Submit" value="Submit" class="button facebook"/>
      
      
          
      </td>
    </tr>
  </table>
</form>


</body>
</html>
