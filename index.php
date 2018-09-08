<!DOCTYPE html>
<html>
<head>

	<title>AmazShots | Photogrpahy</title>
	<link rel="icon" href="images/icon.png">

	<!--Link CSS-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<!--Link JavaScript-->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Bad+Script&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Audiowide&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

</head>

<body>
	<!--============================TOP HEAD=================================-->
	<div class="top_head">
		<div class="container-fluid">
			<a target="_blank" href="https://play.google.com/store">Download App</a>
			<a href="contact.php" target="_blank">Help Center</a>
		</div>
	</div>

	<div class="seperator">
		<div class="container-fluid"></div>
	</div>



	<div class="top_section">

		<!--===============================NAVIGATION BAR================================-->
		<div class="navbar navbar-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="LOGO">
				</a>
			

				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">
							<img class="home" src="images/home.png" alt="HOME">
						</a>
					
					</li>
					<li class="nav-item">
						<a class="nav-link" target="_blank" href="https://www.google.com/maps/place/ITER+Boys+Hostel-3/@20.2520312,85.7948676,17z/data=!4m12!1m6!3m5!1s0x3a19a7bcb151e565:0x110bd6c585681dc3!2sITER+Boys+Hostel-3!8m2!3d20.2520262!4d85.7970563!3m4!1s0x3a19a7bcb151e565:0x110bd6c585681dc3!8m2!3d20.2520262!4d85.7970563">
							<img class="location" src="images/locate.png" alt="LOCATION">
						</a>
					
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">
							<img class="call" src="images/call.png" alt="CALL">
						</a>
					
					</li>
					<li class="nav-item">
						<a class="nav-link" href="write_to_us.php">
							<img class="chat" src="images/chat.png" alt="CHAT">
						</a>
					
					</li>
				</ul>

				<div class="navbar-right">
					<a class="nav-link" href="login.php">
						<img class="avatar" src="images/avatar1.png" alt="AVATAR">
					</a>
				
				</div>

			</div>

		</div>

		<!--======================MENU+TEXT===================-->
		<div class="container-fluid">
			<div class="option_menu">
				<div class="row">
					<div class="col-md-6">
						<div class="menu_list">
							<!--============MENU==============-->
							<ul>
								<li><a href="services.php">Services</a>
								</li>
								<li><a href="gallery.php">Gallery</a>
								</li>
								<li><a href="portfolio.php">Portfolio</a>
								</li>
								<li><a href="testimonials.php">Testimonials</a>
								</li>
								<li><a href="about_us.php">About us</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class="intro_text">
							<!--=============TEXT===============-->
							<h1><mark>FRAME</mark></h1>
							<h3 class="text-left">YOUR</h3>
							<img src="images/heart.png" alt="Heart">
							<h2><mark>LIFE</mark></h2>
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col-12 text-right">
						<div class="book_now_btn">
							<button onclick="document.location.href='book.php'" type="button" class="alert-primary border-0">BOOK NOW</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!--======================================SLIDER==================================-->

	<div class="slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/slider1.jpg" alt="First slide">
					<div class="carousel-caption">
						<h1 class="slide1_h1">We bring the BEST</h1>
						<p class="slide1p"><i>-save your date with us</i></p>
						<a href="services.php" class="text-light" style="text-decoration:none;">See more >></a>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="images/slider2.jpg" alt="Second slide">
					<div class="carousel-caption">
						<h1 class="slide2_h1">PORTRAIT &<br>FASHION</h1>
						<p class="slide2p"><i>-a model is inside you; Capture & Beautify it</i></p>
						<a href="services_pages/services_portrait.php" class="text-light" style="text-decoration:none;">See more >></a>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="images/slider3.jpg" alt="Third slide">
					<div class="carousel-caption">
						<h1 class="slide3_h1">EVENT PHOTOGRPAHY</h1>
						<p class="slide3p">- adding <b><i>PLEASANT</i></b> to your <b><i>MEMORIES</i></b></p>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="images/slider4.jpg" alt="Fourth slide">
					<div class="carousel-caption">
						<h1 class="slide4_h1">Capture yourself</h1>
						<p class="slide4p"><i>- take the product from us and capture your own view</i></p>
						<h3 class="font-italic" style="background-color: rgba(0,0,0,0.50)"><a href="product_list.php" class="text-success font-weight-bold" style="text-shadow: -1px 0px 2px black;">Book for rent</a></h3>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="images/slider5.jpg" alt="Fifth slide">
					<div class="carousel-caption">
						<h1 class="slide5_h1">Be a PHOTOGRAPHER</h1>
						<p class="slide5p"><i>- join with us and work as a photographer</i></p>
						<h3 class="font-italic" style="background-color: rgba(0,0,0,0.50)"><a href="apply.php" class="text-warning font-weight-bold" style="text-shadow: -1px 0px 2px black;">Apply now</a></h3>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
		
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		
		</div>
	</div>




	<!--=================================================OBJECTIVES==============================================-->

	<div class="container-fluid">
		<div class="objective">
			<div class="text-center">
				<h1>OUR OBJECTIVE</h1>
			</div>
			<div class="row">
				<div class="col-6">
					<ul class="obj_list">
						<li>To provide the best service to the people with their happiness & memories with a good interaction.</li>
						<li>To employ a person by his/her skills & touch the professional goal.</li>
						<li>To develop and encourage photography and its allied activities.</li>
						<li>To promote, develop, preserve, and protect the art of photography.</li>
					</ul>
					<div class="readmore">
						<button type="button" class="btn btn-outline-warning">Read more</button>
					</div>
				</div>
				<div class="col-6 align-self-center">
					<div class="msg1">
						<h1>We turn <span class="sp1">NORMAL</span> into <span class="sp2">FEATURED</span></h1>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!--=================================================TEAM==============================================-->

	<div class="container-fluid">
		<div class="team">
			<div class="text-center">
				<h1>WE ARE</h1>
				<section class="members">
					<div class="row">
						<div class="col-4">
							<figure class="figure">
								<a href="https://www.facebook.com/sunil.k.jena.9"><img src="images/Team/m2.jpg" alt="Sunil" class="figure-img img-fluid rounded-circle"></a>
								<h4 class="text-light">Sunil Jena</h4>
								<figcaption class="figure-caption text-light"><i>- Photographer</i>
								</figcaption>
							</figure>
						</div>
						<div class="col-4">
							<figure class="figure">
								<a href="https://www.facebook.com/bikash.dehury.58"><img src="images/Team/m1.jpg" alt="Bikash" class="figure-img img-fluid rounded-circle"></a>
								<h4 class="text-light">Bikash Kumar</h4>
								<figcaption class="figure-caption text-light"><i>- Admin & Photographer</i>
								</figcaption>
							</figure>
						</div>
						<div class="col-4">
							<figure class="figure">
								<a href="https://www.facebook.com/abinash526"><img src="images/Team/m3.jpg" alt="Abinash" class="figure-img img-fluid rounded-circle"></a>
								<h5 class="text-light">Abinash Jena</h5>
								<figcaption class="figure-caption text-light"><i>- Graphics Designer</i>
								</figcaption>
							</figure>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<figure class="figure">
								<a href="https://www.facebook.com/ThechaingamerNYK"><img src="images/Team/m4.jpg" alt="Kaushal" class="figure-img img-fluid rounded-circle"></a>
								<h4 class="text-light">Kaushal Kumar</h4>
								<figcaption class="figure-caption text-light"><i>- Videographer</i>
								</figcaption>
							</figure>
						</div>
						<div class="col-6">
							<figure class="figure">
								<a href="https://www.facebook.com/souravthemostwanted"><img src="images/Team/m5.jpg" alt="Saurav" class="figure-img img-fluid rounded-circle"></a>
								<h4 class="text-light">Saurav Nayak</h4>
								<figcaption class="figure-caption text-light"><i>- Wedding Photographer</i>
								</figcaption>
							</figure>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>




	<!--===============================================SOCIAL===============================================-->

	<div class="container-fluid">
		<div class="social" style="clear: right;">
			<h1 class="text-center">Connect</h1>
			<div class="row text-center">
				<div class="col-12">
					<a href="https://www.facebook.com/amaz.shots/" target="_blank"><img class="mx-3" src="images/social/fb.png" alt="Facebook"></a>
					<a href="https://www.instagram.com/kumar_bikash_/" target="_blank"><img class="mx-3" src="images/social/insta.png" alt="Instagram"></a>
					<a href="https://plus.google.com/112815816515009344586" target="_blank"><img class="mx-3" src="images/social/gmail.png" alt="Gmail"></a>
					<a href="https://twitter.com/?lang=en" target="_blank"><img class="mx-3" src="images/social/twitter.png" alt="Twitter"></a>
				</div>
			</div>
		</div>
		
		<div class="text-center">
			<a href="#" id="back_to_top">
				<img src="images/back_top.png" alt="back to top" style="height: 40px;width: auto;">
			</a>
			<p>Back to top</p>
		</div>
		
	</div>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$("#back_to_top").click( function() {
				$('html, body').animate({
					scrollTop: 0
				}, 500);
			});
		});
	</script>
	
	<?php include 'footer.php'; ?>