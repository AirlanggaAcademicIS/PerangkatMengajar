<?php include ("DBconnect.php");?>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="timepicker/jquery.timepicker.min.css" />
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>

  <div class="row setup-content" id="step-2">
              <div class="col-xs-12">
			  <div class="col-md-12">
                        <h3>Kompetensi</h3>
						<div class="form-group">
							<form id="form1" name="form1" method="post" action="Kompetensi.php">	
	
                  
	<table>
	<tr>
	<td>

	</td>
	</tr>
	</table>	
	  
				  <table width="598" border="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td> 
    </tr>
    <tr>
      <td><strong>Mata ajar </strong></td>
      <td>:</td>
	  <?php
$r = mysql_query("SELECT * FROM mata_kuliah");
while($hasil = mysql_fetch_array($r)){
	?>
      <td>
	  <input name="mataajar" type="text" value="<?php echo $hasil['NAMA_MK'];?>" readonly/>  
	<p></p>
	
<?php   
}
?>	  </td>
    </tr>
	
    <tr>
      <td><strong>Kompetensi</strong></td>
      <td>:</td>
	  	   <?php
$r = mysql_query("SELECT * FROM mata_kuliah ");
while($hasil = mysql_fetch_array($r)){
	?>
      <td><input name="kompetensi" cols="50" value="<?php echo $hasil['KOMPETENSI'];?>" readonly></textarea>

	<p>	</p>
	
	
<?php   
}
?>	  </td>
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
        <input type="text" name="subkomp" id="subkomp" placeholder="Sub Kompetensi" oninvalid="this.setCustomValidity('Kompetensi khusus harus diisi')" oninput="setCustomValidity('')" required/>
      </p>        </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	    <strong>Pokok Bahasan</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name="pokokbahasan" id="pokokbahasan" placeholder="Pokok bahasan" oninvalid="this.setCustomValidity('Pokok bahasan harus diisi')" oninput="setCustomValidity('')" required/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Sub Pokok Bahasan </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name="subpokok" id="subpokok" placeholder="Sub Pokok Bahasan"/>
        <input type="button" name="plus_subpokok" id="plus_subpokok" value="+" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><textarea name="list_subpokok" readonly="readonly" id="list_subpokok" style="width: 250px; height: 75px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><script>
			var z=1;
			$(document).ready(function(){
				$("#plus_subpokok").click(function(){
					if ($('#subpokok').val() != '') {
						$('#list_subpokok').append(z+". "+$("#subpokok").val()+"\n");
						$("#subpokok").val("");
						z++;
					}
				});
			});
		</script>	  	</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="simpan" value="save and add" class="button facebook"/>
        <input type="submit" name="next" value="next" class="button facebook"/></td>
    </tr>
  </table>
  
                            </form>  
                </div>
                <p></p>
  
                </div>
              </div>
            </div>
         