<?php include ("DBconnect.php");?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>tahappembelajaran</title>
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
<!----menu--->
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
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </li>
          
          </ul>
        
         <ul class="nav navbar-nav navbar-right">
          <li class="dropdown-login">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
            Login<span class="caret"></span>
            </a>
            
     	<ul class="dropdown-menu">

<!--login-->
<div id="login-content">
        	
            	<form class="form-signin">
        
        		<label for="inputEmail" class="sr-only">Username</label>
        		<input type="Username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        
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

</head>
<!---mulai------->
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
<form>
<table width="902" height="327" border="0">
  <tr>
    <td width="218">Pertemuan ke : </td>
    <td colspan="3">Media dan Alat Pengajar </td>
    </tr>
  <tr>
    <td>
      <label for="select"></label>
      <select name="select" id="select">
        <option>1</option>
      </select>    </td>
    <td width="234">
        
<input type="checkbox" name="checkbox3" value="checkbox" />          
Papan Tulis
    <td width="228">
      <input type="checkbox" name="checkbox2" value="checkbox" id="checkbox2" />
      Bahan Ajar	  </td>
    <td width="204">
	
          <input type="checkbox" name="checkbox5" value="checkbox" />
          LCD</td>
  <tr>
    <td height="36"><p>Tahap Pembelajaran : </p>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><label for="label"></label>
      <select name="select2" id="label" >
        <option>Pendahuluan</option>
    </select>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kegiatan Pengajar : </td>
    <td>Kegiatan Mahasiswa : </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="left">
      
      <input type="text" name="textfield2">
      
      <input type="submit" name="submit" value="+" /></td>
     <td align="left">
       <input type="text" name="textfield3">
      <input type="submit" name="submit" value="+" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="88" colspan="4">
	Evaluasi :<br>
	<textarea name="" cols="50" rows="2"></textarea>
	<p>&nbsp;</p>
      <p>&nbsp; </p></td>
  </tr>
</table>
</form>
</div></div></div>
</body>
</html>
