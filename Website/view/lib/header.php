

<!DOCTYPE html>
<html>
<head>
	<title>$title</title>
	<meta charset="utf-8">
	<!-- <link rel="icon" type="images/png" href="#">  
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
		.navbar{
			border-radius: 0px; 
			background-color: #FF6D69;
			border: 1px solid #FF6D69;
			color: #FFF;
		}
		a{
			
			transition: 0.2s;
		}
		li a:hover{
			transform: translateY(-2px);

		}
		.navbtn{
			border: 1px solid white !important;
		}
	</style>
	<nav class="navbar navbar-inverse" style="margin: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle navbtn" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="#" style="color: #FFF;">KALI PET</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  	<ul class="nav navbar-nav">
				    <li class=""><a href="#" style="color: #FFF;">Home</a></li>
				    <li><a href="#" style="color: #FFF;">Phone</a></li>
				    <li><a href="#" style="color: #FFF;">Email</a></li>
				    <li><a href="#" style="color: #FFF;">Address</a></li>
			  	</ul>
				
				<ul class="nav navbar-nav navbar-right">

					<?php 
						if($id_kh != "")
						{
							?>
							<li><a href="" style="color: #FFF;"><?php echo $info_kh['ten_kh']; ?></a></li>
							<li><button type="submit" name="logout" style="color: #FFF;background-color: #FF6D69;margin-top: 12px;border-radius: 5px; border:1px solid white;">Logout</button></li>
							<?php
						}	
						else
						{
							?>
							<li><a href="http://localhost/BTL_HQT/?controller=login&action=login" style="color: #FFF;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="http://localhost/BTL_HQT/?controller=login&action=login" style="color: #FFF;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							<?php
						}
					?>

					


					
				</ul>
			</div>
		</div>
	</nav>	
	<div class="container-fluid" style="background-color: #ffd6df">
		<div class="row">
			<div class="col-md-6">
				<div class="navbar-header">
					<h2 style="float: left;margin: 0px;padding: 10px;"><a style="color: #FF6D69" class="navbar-brand" href="#">PETPET</a></h2>
					<ul class="nav navbar-nav navbar-right" style="padding: 10px;">
						<li><a href="#" style="color: #000;">Trang Chủ</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #000;">Danh Mục<span class="caret"></span></a>
							<ul class="dropdown-menu">
							  	<li><a href="#" style="color: #000;">Đồ Ăn</a></li>
							  	<li><a href="#" style="color: #000;">Đồ Chơi</a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-9">
						
					</div>
					<div class="col-3">
						
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>