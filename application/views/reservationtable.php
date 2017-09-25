<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Rooms Columns 4 | Mega</title>
		
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
						<h2>Table Reservation</h2>
						<p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-rooms-cols">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<figure class="mg-room mg-room-col-4">
							<img src="<?php echo base_url() ?>/uploads/breakfast.jpg" alt="" 
							class="img-responsive"/>							
							<figcaption>
								<h2>BREAKFAST</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
								<div class="mg-room-price">
								</div>
								<a href="#" class="btn "><!-- <i class="fa fa-angle-double-right"></i> --></a>
								<a href="<?php echo site_url('welcome/getBreakfastTables') ?>" class="btn btn-main">Select Table</a>
							</figcaption>			
						</figure>
					</div>

					<div class="col-md-3 col-xs-6">
						<figure class="mg-room mg-room-col-4">
							<img src="<?php echo base_url() ?>/uploads/lunch.jpg" alt=""  class="img-responsive"/>							
							<figcaption>
								<h2>LUNCH</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
								<div class="mg-room-price">
								</div>
								<a href="#" class="btn "><!-- <i class="fa fa-angle-double-right"></i> --></a>
								<a href="<?php echo site_url('welcome/getLunchTables') ?>" class="btn btn-main">Select Table</a>
							</figcaption>			
						</figure>
					</div>

					<div class="col-md-3 col-xs-6">
						<figure class="mg-room mg-room-col-4">
							<img src="<?php echo base_url() ?>/uploads/dinner.jpg" alt=""  class="img-responsive"/>							
							<figcaption>
								<h2>DINNER</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
								<div class="mg-room-price">
								</div>
								<a href="#" class="btn "><!-- <i class="fa fa-angle-double-right"></i> --></a>
								<a href="<?php echo site_url('welcome/getDinnerTables') ?>" class="btn btn-main">Select Table</a>
							</figcaption>			
						</figure>
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