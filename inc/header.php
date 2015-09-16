<!DOCTYPE html>
<html>
	<head>
	  <meta charset="UTF-8">
	  <title><?php echo $pageTitle; ?></title>
	  <meta name="author" content="name">
	  <meta name="description" content="description here">
	  <meta name="keywords" content="keywords,here">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <script src="jquery-1.11.2.min.js"></script>
	   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/styles.css" rel="stylesheet" media="screen">
	    <!--Check links later-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="js/animsition/animsition.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<!--Font-->
		<link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
		<!--Fallback Font-->
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../../assets/js/html5shiv.js"></script>
	      <script src="../../assets/js/respond.min.js"></script>
	    <![endif]-->
 	</head>
 		<body>

 		<!--NEW STYLE-->
 		<div class="header">
 			<div class="wrapper">
 				<div class="navbar navbar-default navbar-static-top">
 				<!--<div class="container">-->

 					 <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>

		        <div class="collapse navbar-collapse animsition" id="bs-example-navbar-collapse-1">
 					
 					<a class="main-logo pull-left" href="#">Systrami</a>
 					<ul class="nav navbar-nav pull-right">
 						<li><a href="index.php">Home</a></li>
						<li class="dropdown" id="dropdown" onclick="displayDropdown(this)">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop</a>
							<ul role="menu" class="dropdown-menu">
								<li class="dropdown-link"><a href="index-shop.php">Apparel</a></li>
								<li class="divider dropdown-link"></li>
								<li class="dropdown-link"><a href="#">Inspiration</a></li>
                			</ul>
						</li>
						<li><a href="index-about.php">About</a></li>
						<li><a href="index-contact.php">Contact</a></li>
						<li class="cart"><a href="#">Shopping Cart</a></li>
 					</ul>
				</div>


	 				</div>
 		<!--</div>-->
  		
 			</div>
 		</div>


 			<!--Navbar-->
  		<div id="content">