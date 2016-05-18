<!DOCTYPE html>
<html lang="en">

<?php
include "koneksi.php";
?>
<?php
include ("koneksi.php"); $data = mysql_query("select * from upload");
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <link href="Css/Login.css" rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand"><img src="Assets/LogoEpbm.png" alt=""></a>
            </div>
            	<div id="navbar">
            		<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
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
         <div id="navbar">
            <ul class="nav navbar-nav">
		        <li class="dropdown">
        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            	Login<span class="caret"></span>
          		</a>
        			<ul class="dropdown-menu">
						<form class="form-signin">
        				<label for="inputNip">NIP</label>
                        <input type="NIP" id="inputNIP" class="form-control" placeholder="NIP" required autofocus>
                        <label for="inputPassword">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        					<div class="checkbox"></div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </form>
         			</ul>
         		</li>
     		</ul>
		</div>
		
<!---------------------------------end of navigation section ----------------------->

	<!--Page Content-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p2><table width="371" height="214" border="1">
  <tr>
    <td width="361"><div align="left" ><strong>Perangkat PBM </strong></div></td>
  </tr>
  <tr>
    <td><span class="style1"><a href=\input-bacaan.php\>GBPP</a></span></td>
  </tr>
  <tr>
    <td><span class="style1"><a href=\input-kompetensi.php\>Kontrak Perkuliahan</a></span></td>
  </tr>
  <tr>
    <td><span class="style1"><a href=\input-ma-baru.php\>SAP</a></span></td>
  </tr>
  <tr>
    <td><span class="style2">Materi</span></td>
  </tr>
  <tr>
    <td><span class="style1">PSDP</span> </td>
  </tr>
  <tr>
  </pre>
<h1>Daftar Image</h1>
<table border="1">
<tbody>
<tr>
<th>ID</th>
<th>Nama file</th>
<th>Tipe</th>
<th>Ukuran</th>
<th>Deskripsi</th>
<th>Download</th>
</tr>
<!--?php while ($row =mysql_fetch_assoc($data)) { ?-->
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a href="download.php?id=<?php echo $row['id'] ?>">Download</a></td>
</tr>
<!--?php } ?--></tbody>
</table>
</tr>
<tr>
    <td><span class="style1">PSI</span> </td>
  </tr>
  <tr>
  </pre>
<h1>Daftar Image</h1>
<table border="1">
<tbody>
<tr>
<th>ID</th>
<th>Nama file</th>
<th>Tipe</th>
<th>Ukuran</th>
<th>Deskripsi</th>
<th>Download</th>
</tr>
<!--?php while ($row =mysql_fetch_assoc($data)) { ?-->
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a href="download.php?id=<?php echo $row['id'] ?>">Download</a></td>
</tr>
<!--?php } ?--></tbody>
</table>
</tr>
<tr>
      <td><span class="style1">AI</span></td>
  </tr>
  <tr>
  </pre>
<h1>Daftar Image</h1>
<table border="1">
<tbody>
<tr>
<th>ID</th>
<th>Nama file</th>
<th>Tipe</th>
<th>Ukuran</th>
<th>Deskripsi</th>
<th>Download</th>
</tr>
<!--?php while ($row =mysql_fetch_assoc($data)) { ?-->
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a href="download.php?id=<?php echo $row['id'] ?>">Download</a></td>
</tr>
<!--?php } ?--></tbody>
</table>
</tr>
<tr>

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Navbar.js"></script>
</body>

</html>
