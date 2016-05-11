<?php include ("DBconnect.php");?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kompetensi</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Login.css" rel="stylesheet">
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="datepicker/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="timepicker/jquery.timepicker.min.css" />
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            
            <div class="navbar-header">
                <a class="navbar-brand">
                    <img src="LogoEpbm1.png" alt="">
                </a>
            </div>
            
            <div id="navbar">
            <ul class="nav navbar-nav">
            
            <li class="active"><a href="#">Home</a>
            </li>
<!--dropdown Menu----------------------------------------------------------->     
            
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            PBM<span class="caret"></span>
          </a>
            
          <ul class="dropdown-menu">
            <li><a href="#">Semester 1</a></li>
            <li><a href="#">Semester 2</a></li>
            <li><a href="#">Semester 3</a></li>
            <li><a href="#">Semester 4</a></li>
            <li><a href="#">Semester 5</a></li>
            <li><a href="#">Semester 6</a></li>
            <li><a href="#">Semester 7</a></li>
            <li><a href="#">Semester 8</a></li>
          </ul>
         </li>
            
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
          <li class="dropdown-login">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
            Login<span class="caret"></span>
            </a>
            
     	<ul class="dropdown-menu">
<!-- login form----------------------------------------------------------------------------------->
			<div id="login-content">
        	
            	<form class="form-signin">
        
        		<label for="inputEmail" class="sr-only">Email address</label>
        		<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
        		<label for="inputPassword" class="sr-only">Password</label>
        		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        		<div class="checkbox">
            	</div>
        		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        		</form>
        	
            </div>
   		</ul>
     </li>
     </ul>

</div>
</div>
</nav>
<!-----------------end of navigation section--------------------------------------->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p2>
<form id="form1" name="form1" method="post" action="" onSubmit="return validator()">
  <table width="598" border="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td> 
    </tr>
    <tr>
      <td>Mata ajar </td>
      <td>:</td>
      <td><input name="mataajar" type="text" value="Pengembangan SI" oninvalid="this.setCustomValidity('Mata ajar harus diisi')" oninput="setCustomValidity('')" required/></td>
    </tr>
    <tr>
      <td>Kompetensi</td>
      <td>:</td>
      <td><textarea name="kompetensi" cols="50" oninvalid="this.setCustomValidity('kompetensi harus diisi')" oninput="setCustomValidity('')" required="required"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  
      <td>Kompetensi Khusus </td>
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
	  <script>
			var x=1;
			$(document).ready(function(){
				$("#plus_subkomp").click(function(){
					if ($('#subkomp').val() != '') {
						$('#list_subkomp').append(x+". "+$("#subkomp").val()+"\n");
						$("#subkomp").val("");
						x++;
					}
				});
			});
		</script>		</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Pokok Bahasan </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name="pokokbahasan" />
      <input type="submit" name="plus_pokokbahasan" id="plus_pokokbahasan" value="+" />
      <input type="submit" name="Submit4" value="upload materi" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><textarea name="list_pokokbahasan" readonly="readonly" id="list_subkomp" style="width: 250px; height: 75px; border: 0; padding-left: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 18px;background-color: rgba(255, 255, 255, 0.5); resize:none;"></textarea>
	  <script>
			var x=1;
			$(document).ready(function(){
				$("#plus_pokokbahasan").click(function(){
					if ($('#pokokbahasan').val() != '') {
						$('#list_pokokbahasan').append(x+". "+$("#pokokbahasan").val()+"\n");
						$("#pokokbahasan").val("");
						x++;
					}
				});
			});
		</script>		</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Sub Pokok Bahasan </td>
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
	  <script>
			var x=1;
			$(document).ready(function(){
				$("#plus_subpokok").click(function(){
					if ($('#subpokok').val() != '') {
						$('#list_subpokok').append(x+". "+$("#subpokok").val()+"\n");
						$("#subpokok").val("");
						x++;
					}
				});
			});
		</script>		</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="kembali" value="back" />
      <input type="submit" name="lanjut" value="next" /></td>
    </tr>
	  <?php
if($_POST[lanjut]){
	if ($_POST[mataajar] and $_POST[kompetensi] and $_POST [subkomp] and $_POST[pokokbahasan] and $_POST[subpokok]){
	?>
	<script>alert("Form Berhasil Disimpan")
	window.location="input-kompetensi.php";
	</script>
	<?php
	}
	else
	?>
	<script>alert("form belum lengkap")
	</script>
	<?php
}
?>
  </table>

</form>



</p2>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
