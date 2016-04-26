<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="735" height="60" border="1">
  <tr>
    <td width="58" height="29"><input type="submit" name="Submit" value="HOME" /></td>
    <td width="60"><form id="form1" name="form1" method="post" action="">
      <input type="submit" name="Submit2" value="PBM" />
    </form>    </td>
    <td width="64"><form id="form2" name="form2" method="post" action="">
      <input type="submit" name="Submit3" value="FORM" />
    </form>    </td>
    <td width="525"><form id="form3" name="form3" method="post" action="">
      <input type="submit" name="Submit4" value="LOGOUT" />
    </form>    </td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td><form id="form4" name="form4" method="post" action="">
      <input type="text" name="textfield" />
          <input type="submit" name="Submit5" value="Search" />
    </form></td>
  </tr>
</table>
<table width="738" border="0">
  <tr>
    <td width="145"><label>1 identitas MA</label>
    &nbsp;</td>
    <td width="217"><label>2 GBPP</label></td>
    <td width="113"><label>3 KONTRAK PERKULIAHAN</label>&nbsp;</td>
    <td width="46"><label>4 SAP</label>&nbsp;</td>
    <td width="195"><form id="form5" name="form5" method="post" action="">
	 <?php
 class year{
  protected $pilih;
  public function  setPilih(array $pilih){
        $this->pilih = array($pilih);
    }
	 public function getPilih(){
        return $this->pilih;
    }
 }
?>
			<?php
$year = new year();
$year->setPilih(array ("2010", "2011", "2012", "2013", "2014", "2015", "2016"));
$tahunajaran = array("2010", "2011", "2012", "2013", "2014", "2015", "2016");
 
 
 ?>
      Tahun ajaran
      <select name="tahun">
		<option value="">pilih tahun</option>

<?php
for($i=0;$i<count($tahunajaran);$i++){
?>
<option value="<?php echo $i+1;?>">
<?php echo $tahunajaran[$i]; ?>
</option>
<?php
}
?>
           
        
      </select>
    </form>    </td>
  </tr>
  <tr>
    <td><label>Mata ajaran: </label>&nbsp;</td>
    <td colspan="4"><input name="textfield2" type="text" value="Pengembangan SI" /></td>
  </tr>
  <tr>
    <td><label>Kompetensi:</label>&nbsp;</td>
    <td colspan="4" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form7" name="form7" method="post" action="">
      <input type="text" name="textfield3" />
    </form>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>Kompetensi khusus
        <input name="textfield4" type="text" />
        <input type="submit" name="Submit8" value="tambah" />
    </label></td>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Pokok bahasan
    <input type="text" name="textfield5" />
    <input type="submit" name="Submit6" value="tambah" /></td>
    <td><input type="submit" name="Submit9" value="upload materi" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>Sub pokok bahasan
        <input type="text" name="textfield6" />
        <input type="submit" name="Submit7" value="tambah" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit10" value="back" /></td>
    <td><input type="submit" name="Submit11" value="next" /></td>
  </tr>
</table>
</body>
</html>
