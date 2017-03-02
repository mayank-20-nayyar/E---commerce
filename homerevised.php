<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<style>
		[data-sr]{
			visibility: hidden;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/woostyleLogo.png" alt=""><span>DRESS | CLICK | SHARE | REPEAT</span></p></a>

			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-WSP">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">How it works</a></li>
					<li><a href="#">Contact us</a></li>
					<li><a href="#">Help</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Edit Profile</a></li>
							<li><a href="#">View Profile</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Create new post</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="jumbotron txtAlnCntr hmJmb2" data-sr>
		<div class="container">
			<h1>Explore the change</h1>
			<p>Explore the best in you, Share your style, Ask experts</p>
			<div class="form-group"><button class="btn btn-WSGrey">How it works</button></div>
			<div class="form-group"><a href="newPost.html" class="btn btn-link">Start posting</a></div>
		</div>
	</div>
	<div class="txtAlnCntr" data-sr>
		<h2><b>Our community</b></h2>
		<div class="col-lg-4">
			<div class="thumbnail thmbNlWPS "><h4><b>Our Specialist</b></h4><img src="img/profile.jpg" alt=""></div>
		</div>
		<div class="col-lg-4">
			<div class="thumbnail thmbNlWPS"><h4><b>Our Specialist</b></h4><img src="img/profile.jpg" alt=""></div>
		</div>
		<div class="col-lg-4">
			<div class="thumbnail thmbNlWPS"><h4><b>Our Specialist</b></h4><img src="img/profile.jpg" alt=""></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="jumbotron hmJmb1 txtAlnCntr" data-sr>
		<div class="container">
			<h2><b>Your fashion home</b></h2>
			<p>At Woostyle, find your true style! Share, try, build, buy your styles. Join experts and designers to build your own, very personal wardrobe and share them with others.</p>
			<div class="form-group"><button class="btn btn-WSGrey">Explore</button></div>
		</div>
	</div>
	<div class="container" data-sr>
		<h3>Explore the fashion</h3>
		<p><h4>	See what people are wearing and how they wearing</h4></p>
		<div class="postItemContainer">
			<?php
include 'homeposts.php'
?>		<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="thumbnail thmbNlWPS">
					<img src="img/profile.jpg" alt="TITLE">
					<div class="caption">
						<h4>Tagline of Post/User/Dress/</h4>
						<p>Desccription || Meta of UPWS</p>
						<p>
							<a href="#" class="btn btn-WSP" role="button">Check it out</a>
							<span class="pull-right badge">21 <label class="glyphicon glyphicon-heart"></label> </span>
							<div class="clear"></div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<footer>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<ul class="list-group">
				<li class="list-group-item"><h4><b>Company</b></h4></li>
				<li class="list-group-item"><a href="">About Us</a></li>
				<li class="list-group-item"><a href="">Careers</a></li>
				<li class="list-group-item"><a href="">Our Blog</a></li>
				<li class="list-group-item"><a href="">How it works</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<ul class="list-group">
				<li class="list-group-item"><h4><b>Mobile App</b></h4></li>
				<li class="list-group-item"><a href="">Android</a></li>
				<li class="list-group-item"><a href="">Apple</a></li>
				<li class="list-group-item"><a href="">Windows</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<ul class="list-group">
				<li class="list-group-item"><h4><b>Legal</b></h4></li>
				<li class="list-group-item"><a href="">Terms and Conditions</a></li>
				<li class="list-group-item"><a href="">Privacy Policy</a></li>
				<li class="list-group-item"><a href="">Contact Us</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<ul class="list-group">
				<li class="list-group-item"><h4><b>Follow Us : </b></h4></li>
				<li class="list-group-item"><a href="">Facebook</a></li>
				<li class="list-group-item"><a href="">Twitter</a></li>
				<li class="list-group-item"><a href="">Google +</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		<div>All rights reserved @ Woostyle</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/scrollReveal.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>window.sr = new scrollReveal();</script>
</body>
</html>