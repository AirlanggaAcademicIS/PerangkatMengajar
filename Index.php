<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>e-PBM</title>
    <link href="Dosen/Assets/Css/bootstrap.min.css" rel="stylesheet">
    <link href="Dosen/Assets/Css/Layout.css" rel="stylesheet">
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
                <a class="navbar-brand"><img src="Dosen/Assets/Image/LogoEpbm.png" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
						<li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PBM <span class="caret"></span></a>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <form class="form-signin">
                                <label for="inputNip">NIP</label>
                                <input type="NIP" id="inputNIP" class="form-control" placeholder="NIP" required autofocus>
                                <label for="inputPassword" style="padding-top: 5px;">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <div class="checkbox"></div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
       </div>
    </nav>

    <script src="Dosen/Assets/Js/query.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="Dosen/Assets/Js/bootstrap.min.js"></script>
    <script src="Dosen/Assets/Js/Navbar.js"></script>
</body>

</html>