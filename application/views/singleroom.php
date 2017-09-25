<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Room Single | Mega</title>
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="<?php echo base_url()?>template/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/font-awesome.min.css" rel="stylesheet">

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
		<header class="header sticky transp"> <!-- available class for header: .sticky .center-content .transp -->
		<?php $this->load->view('nav'); ?>
		</header>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2><?php echo $singleroom->Title ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="mg-single-room-price">
			<div class="mg-srp-inner"><?php echo $singleroom->Price ?><sup>.99</sup><span>/Night</span></div>
		</div>
		<div class="mg-single-room">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="mg-gallery-container">
							<ul class="mg-gallery" id="mg-gallery">
								<li><img src="<?php echo base_url()?>/uploads/<?php echo $singleroom->Image ?>" alt="Partner Logo"></li>
					
							</ul>
						
						</div>
					</div>
					<div class="col-md-5 mg-room-fecilities">
						<h2 class="mg-sec-left-title">Room Fecilities</h2>
						<div class="row">
							<div class="col-xs-6">
								<ul>
									<li><i class="fp-ht-food"></i> Breakfast</li>
									<li><i class="fa fa-sun-o"></i> Air conditioning</li>
									<li><i class="fp-ht-parking"></i> Free Parking</li>
									<li><i class="fp-ht-elevator"></i> Elevator</li>
									<li><i class="fp-ht-maid"></i> Room service</li>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul>
									<li><i class="fp-ht-dumbbell"></i> GYM fecility</li>
									<li><i class="fp-ht-tv"></i> TV LCD</li>
									<li><i class="fp-ht-computer"></i> Wi-fi service</li>
									<li><i class="fp-ht-bed"></i> 2 King Beds</li>
									<li><i class="fp-ht-swimmingpool"></i> Swimming Pool</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mg-single-room-txt">
							<h2 class="mg-sec-left-title">Room Description</h2>
							<p><?php echo $singleroom->Description ?></p>
						</div>
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
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?php echo base_url()?>template/js/starrr.min.js"></script>
		<script src="<?php echo base_url()?>template/js/nivo-lightbox.min.js"></script>
		<script src="<?php echo base_url()?>template/js/jquery.shuffle.min.js"></script>
		<script src="<?php echo base_url()?>template/js/gmaps.min.js"></script>
		<script src="<?php echo base_url()?>template/js/jquery.parallax-1.1.3.js"></script>
		<script src="<?php echo base_url()?>template/js/script.js"></script>
	</body>
</html>