<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Booking System | Mega</title>
		
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
		<link href="<?php echo base_url()?>template/css/nivo-lightbox.css" rel="stylesheet">
		<link href="<?php echo base_url()?>template/css/nivo-lightbox-theme.css" rel="stylesheet">
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
 		</header>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Register</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-booking-form">

							
							<div class="tab-content">
							
								<div role="tabpanel" class="tab-pane fade in active" id="personal-info">
									<div class="row">
										<div class="col-md-8">
											<div class="mg-book-form-personal">
										<form action="<?php echo site_url('welcome/NewRegister') ?>" method="POST">
												<h2 class="mg-sec-left-title pull">Registration Details</h2>
												<div class="row">
													
													<div class="col-md-6">
														<div class="mg-book-form-input">
															<label>User Name</label>
															<input type="text" name="UserName" class="form-control">
														</div>
														<div class="mg-book-form-input">
															<label>Email Address</label>
															<input type="email" name="EmailAddress" class="form-control">
														</div>
														<div class="mg-book-form-input">
															<label>Password</label>
															<input type="password" name="Password" class="form-control">
														</div>
													
														<div class="mg-book-form-input">
															<label>PhoneNumber</label>
															<input type="text" name="PhoneNumber" class="form-control">
														</div>
														
													</div>
													
													</div>
												</div>
												<div class="clearfix mg-terms-input">
													<div class="pull-left">
														<label><input type="checkbox"> By Sign up you are agree with our <a href="#">terms and condition</a></label>
													</div>
												</div>
											<button class="btn btn-dark-main pull-left">
													Register
												</button>
												<!-- <a href="<?php //echo site_url('welcome/register') ?>" class="btn btn-primary btn-prev-tab pull-right">Register</a> -->
											</div>
										</div>
										
									</div>
									</form>
								</div>
							
							
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


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