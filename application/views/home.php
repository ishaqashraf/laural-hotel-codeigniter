<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laural Hotel</title>
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url()?>/font-awesome/css/font-awesome.min.css">

		<!-- Bootstrap -->
		<link href="<?php echo base_url()?>template/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/font-awesome.min.css" rel="stylelesheet">

		<link href="<?php echo base_url()?>template/css/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/owl.theme.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/owl.transitions.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/cs-select.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/bootstrap-datepicker3.min.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/freepik.hotels.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/style.css" rel="stylesheet">




		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url()?>template/js/modernizr.custom.min.js"></script>
	</head>
	<body>
		<div class="preloader"></div>
		<header class="header transp sticky"> <!-- available class for header: .sticky .center-content .transp -->
		<?php $this->load->view('nav'); ?>
		</header>


		<div id="mega-slider" class="carousel slide " data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#mega-slider" data-slide-to="0" class="active"></li>
				<li data-target="#mega-slider" data-slide-to="1"></li>
				<li data-target="#mega-slider" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active beactive">
					<img src="<?php echo base_url()?>template/images/slide-4.png" alt="...">
					<div class="carousel-caption">
						<img src="<?php echo base_url()?>template/images/stars.png" alt="">
						<h2>Welcome to Laural Hotel</h2>
						<p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url()?>template/images/slide-2.png" alt="...">
					<div class="carousel-caption">
						<img src="<?php echo base_url()?>template/images/stars.png" alt="">
						<h2>Feel Like Your Home</h2>
						<p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url()?>template/images/slide-3.png" alt="...">
					<div class="carousel-caption">
						<img src="<?php echo base_url()?>template/images/stars.png" alt="">
						<h2>Perfect Place for Dining</h2>
						<p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="index.html#mega-slider" role="button" data-slide="prev">
			</a>
			<a class="right carousel-control" href="index.html#mega-slider" role="button" data-slide="next">
			</a>
		</div>

		<div class="mg-book-now">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h2 class="mg-bn-title">Search Rooms <span class="mg-bn-big">For rates & availability</span></h2>
					</div>
					<div class="col-md-9">
						<div class="mg-bn-forms">
							<form action="<?php echo site_url('welcome/getSearch') ?>" method="POST" >
								<div class="row">
									<div class="col-md-3 col-xs-6">
										<div class="input-group date mg-check-in">
											<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
											<input type="text" name="FromDate" class="form-control" id="exampleInputEmail1" placeholder="Check In">
										</div>
									</div>
									<div class="col-md-3 col-xs-6">
										<div class="input-group date mg-check-out">
											<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
											<input type="text" name="ToDate" class="form-control" id="exampleInputEmail1" placeholder="Check Out">
										</div>
									</div>
									<div class="col-md-3">
										<div class="row">
											<div class="col-xs-8">
											<select class="cs-select cs-skin-elastic" name="Type">
													<option value="1">Room</option>
													<option value="2">Hall</option>
													
												</select>
											</div>
											
										</div>
									</div>
									<div class="col-md-3">
										<button type="submit" class="btn btn-main btn-block">Check Now</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-best-rooms">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-sec-title">
							<h2>Our Best Rooms & Halls</h2>
							<p>These best rooms & Halls chosen by our customers</p>
						</div>
						<div class="row">
							<?php foreach($showroomhall as $r):?>					

							<div class="col-sm-4">
								<figure class="mg-room">
									<img src="<?php echo base_url() ?>/uploads/<?php echo $r->Image ?>" alt="" class="img-responsive"/>	
									<figcaption>
									<h2><?php echo $r->Title ?></h2>
										<div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
										<div class="mg-room-price"><?php echo $r->Price ?><sup>.99/Night</sup></div>
										<!-- <a href="<?php echo site_url('welcome/singleroom') ?>/<?php echo $r->roomhallid ?>" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a> -->
										<a href="<?php echo site_url('welcome/singleroom') ?>/<?php echo $r->roomhallid ?>" class="btn btn-main">View Details</a>
									</figcaption>			
								</figure>
							</div>
						
							<?php endforeach ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
		</div> -->
		<div class="mg-about parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h2 class="mg-sec-left-title">About Laural Hotel</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliqua venandi mutat plerisque nostrum vos, geometria intellegimus percurri mediocritatem aeque suppetet explicatis, praeclaram ambigua cogitavisse vituperatoribus dicent signiferumque alios improbe, reliquisti rudem, consedit pendet circumcisaque amorem patria magnopere inmortalibus dolere. Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum crudelis exercitumque, nobis, videntur doloribus patre poetarum omnisque cognitionem primum, atomos certamen possent, adversantur probatum iudicante indicaverunt repugnantibus, operis aequi aequitate clarorum occultarum multa diis sine inter.</p>
					</div>
					<div class="col-md-5">
						<div class="video-responsive">
							<iframe src="https://player.vimeo.com/video/134008155" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-sec-title">
							<h2>Hotel facilties</h2>
							<p>These best rooms chosen by our customers</p>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fp-ht-receptionist"></i>
										<h3>24-hour reception</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-cogs"></i>
										<h3>Room service</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-car"></i>
										<h3>Car hire</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-phone"></i>
										<h3>Wake-up call</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-coffee"></i>
										<h3>Coffee and tea</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mg-feature">
									<div class="mg-feature-icon-title">
										<i class="fa fa-cogs"></i>
										<h3>Free Wi-Fi</h3>
									</div>
									<p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-testi-partners parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="mg-sec-left-title">Testimonial</h2>
						<div class="mg-testimonial-slider" id="mg-testimonial-slider">
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consumeret terminatas oritur euripidis satis. Venisset ipsum.</p>
								<footer>John Doe, Example Inc</footer>
							</blockquote>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sol magnum gustare pararetur statuam, morbi patriam omittantur.</p>
								<footer>John Doe, Example Inc</footer>
							</blockquote>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Stabilem monet, petat excepturi nudus expeteremus fabellas vexetur.</p>
								<footer>John Doe, Example Inc</footer>
							</blockquote>
						</div>
					</div>
					<div class="col-md-6">
						<h2 class="mg-sec-left-title">Our Partners</h2>
						<ul class="mg-part-logos" id="mg-part-logos">
							<li><img src="<?php echo base_url()?>template/images/part-logo-1.png" alt="Partner Logo"></li>
							<li><img src="<?php echo base_url()?>template/images/part-logo-2.png" alt="Partner Logo"></li>
							<li><img src="<?php echo base_url()?>template/images/part-logo-3.png" alt="Partner Logo"></li>
							<li><img src="<?php echo base_url()?>template/images/part-logo-1.png" alt="Partner Logo"></li>
							<li><img src="<?php echo base_url()?>template/images/part-logo-3.png" alt="Partner Logo"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	
	<?php $this->load->view('footer'); ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url()?>template/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url()?>template/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>template/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url()?>template/js/jssor.slider.mini.js"></script>
		<script src="<?php echo base_url()?>template/js/classie.js"></script>
		<script src="<?php echo base_url()?>template/js/selectFx.js"></script>
		<script src="<?php echo base_url()?>template/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url()?>template/js/starrr.min.js"></script>
		<script src="<?php echo base_url()?>template/js/nivo-lightbox.min.js"></script>
		<script src="<?php echo base_url()?>template/js/jquery.shuffle.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?php echo base_url()?>template/js/gmaps.min.js"></script>
		<script src="<?php echo base_url()?>template/js/jquery.parallax-1.1.3.js"></script>
		<script src="<?php echo base_url()?>template/js/script.js"></script>
	</body>
</html>