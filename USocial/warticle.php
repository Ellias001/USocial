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
			<div class="col-md-8" id="topnav" style="">
				<ul class="col-md-11">
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


<div style="background-color: #eeeeee">
	<br>
	<div class="container warticle" style="background-color: #dddddd;">
			<br>
		<form action="includes/warticle.inc.php" method="POST">
			<div class = "row">
				<div class="col-md-2">
					<label for="aname">Article's name:</label>
				</div>
				<div class="col-md-10">
					<input type="text" class="form-control" name="name" placeholder="Article's Name">
				</div>
			</div>
			<!--<div class = "row">
				<div class="col-md-2">
					<label for="uid">Your UID:</label>
				</div>
				<div class="col-md-10">
					<input type="text" class="form-control" name="uid" placeholder="Your UID">
				</div>
			</div>-->
				<br>
			<div class = "row">
				<div class="col-md-2">
					<label for="aname">Your Article:</label>
				</div>
				<div class="col-md-10">
					<textarea class="form-control" wrap="off" name="content" placeholder="Article" rows="15" style="resize: none; outline: none;"></textarea>
				</div>
			</div>
				<br>
			<!--<div class = "row">
				<div class="col-md-2">
					<label for="aname">Your Username:</label>
				</div>
				<div class="col-md-10">
					<input type="text" class="form-control" name="username" placeholder="Your Username">
				</div>
			</div>-->
				<br>
			<button class="btn btn-lg btn-block btn-secondary" type="submit" name = "submit">  Submit  </button>
				<br>
		</form>
	</div>
	<br>
</div>
<!-- 

	<ul class='social'>
	  <li>
	    <a class="fa fa-facebook" href="#">  
	      <span>Facebook</span>
	    </a> 
	  </li>
	  
	  <li>
	    <a class="fa fa-twitter" href="#">
	      <span>Twitter</span>
	    </a>
	  </li>
	  
	  <li>
	    <a class="fa fa-dribbble" href="#">
	      <span>Dribbble</span>
	    </a>
	  </li>
	  
	  <li>
	    <a class="fa fa-google-plus" href="#">
	    <span>Google Plus</span>
	    </a> 
	  </li>
	  
	</ul>
	
	
	
	 -->
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