<?php include('server.php');
	
	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}
	if (isset($_GET['logout'])) {
  		session_destroy();
  		unset($_SESSION['username']);
  		header("location: login.php");
  	}
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, install-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/js.js"></script>
	<title>USocial|Коннект</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href=""> <img src="img/Logo.png"> </a>
			</div>
			<div class="col-md-8" id="topnav">
				<ul class="col-md-11">
					<li>
					    <?php if(isset($_SESSION['username'])): ?>
					    	<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
					    <?php endif ?>
					</li>
					<li>
						<a href="article.php">Articles</a>
					</li>
					<li>
						<a href="index.php">Home</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="sidenav1">
		<div class="profile row">
			<div class="col-md-4">
				<img src="img/ProfilePic.png" height="100px" width="100px" alt="">
			</div>
			<div class="col-md-8">
				<a href="#"><?php echo $_SESSION['username']; ?></a>
				<a href="index.php?logout='1'" style="font-size: 18; color: red;">Exit<a/>
			</div>
		</div>
		<div>
			<h1>Advice of the day</h1>
			<a href="#">Services</a>
			<a href="#">Clients</a>
			<a href="#">Contact</a>
		</div>
	</div>

	<div class="container" style="background-color: #F1F1F1;">
		<div>
			<?php 
				$sql = "SELECT content FROM articles WHERE "
			?>
		</div>
	</div>


	<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="img/FootLogo.png"></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Articles</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Usocial &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Abai Street</span> Almaty, Kazakhstan</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+8 707 123 13 00</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">oborotov_i@gmail.com</a></p>
				</div>

			</div>
			
			<div class = "container">
				
			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					This is the local social network for NIS Taldykogan organisation. Aimed to provide connection between students to increase the level of their awareness
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

	</footer>
</body>
</html>