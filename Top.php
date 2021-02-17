<?php
include"baglan.php";
include"fonksiyon.php";

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php echo $row['sett_title'] ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="<?php echo $row['sett_description'] ?>">
	<meta name="keywords" content="<?php echo $row['sett_keywords'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


</head>
<body>
	
	<div id="preloder">
		<div class="loader"></div>
	</div>

	
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<a href="./" class="site-logo">
							<img src="img/elysian.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on elysian ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>

					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="Signin.php">Signin</a> or <a href="CreateAcc.php">Create Account</a> 
								<a id="logout" href="Signin.php">Log Out</a>
								 

							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="cart.php">Shopping Cart</a>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<ul class="main-menu">
					<li><a href="./">Home</a></li>
					<li><a href="keyboards.php">Keyboard</a></li>
					<li><a href="mouse.php">Mouse<span class="new">New</span></a></li>
					<li><a href="headset.php">Headset</a></li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./category.php">Category Page</a></li>
							<li><a href="./cart.php">Cart Page</a></li>
							<li><a href="./checkout.php">Checkout Page</a></li>
							
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>