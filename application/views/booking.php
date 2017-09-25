<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Booking System</title>
		
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
			<?php $this->load->view('nav'); ?>
		</header>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Booking</h2>
						<p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
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
								
							
									
								
								<div role="tabpanel" class="tab-pane fade in active" id="payment">
									<div class="row">
										<div class="col-md-8">
											<div class="mg-book-form-billing">
												
											<h2 class="mg-sec-left-title">Payment Info</h2>
<?php 
														$To = strtotime($to);
														$From = strtotime($from);
														$diff = $To-$From;
														$day = floor(($diff / (60 * 60 * 24))+1);
														$hallprice = ($room->Price*$day);

														$d = ($hallprice *($room->Discount)/100);
														$t = ($hallprice *($room->Tax)/100);

														$price = ceil($hallprice-$d+$t);


														 ?>
											<?php

$this->load->model('HotelModel');
$num = $this->HotelModel->checkifHall($room->Type==2);
if(count($num) > 0)
{
?>	
<a href="<?php echo site_url('welcome/hallDish') ?>/<?php echo $room->Title ?>/<?php echo $to ?>/<?php echo $from ?>/<?php echo $price ?>/<?php echo $room->Image ?>/<?php echo $room->roomid ?>/<?php echo $room->Type ?>/<?php echo $room->Discount ?>/<?php echo $room->Tax ?>"><button class="btn btn-success pull-right" style="margin-top: -60px;">Add Dishes</button></a>	
<?php
}

?>
												
												<div class="row">
													<div class="col-md-6">
														<div class="mg-book-form-input">
															<label>First Name</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="mg-book-form-input">
															<label>Last Name</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-12">
														<div class="mg-book-form-input">
															<label>Payment Method</label>
															<div class="row">
																<div class="col-md-6">
																	<select class="form-control">
																		<option value="">Select Payment Method</option>
																		<option value="1">Paypal</option>
																		<option value="2">Bank Transfer</option>
																	</select>
																</div>
																
															</div>
														</div>
													</div>
												</div>

														
												 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					   <input type="hidden" name="cmd" value="_xclick">
					   <input type="hidden" name="return" value="http://localhost/laural1/index.php/welcome/submitBooking" />
					  <input type="hidden" name="business" value="PayPalMerchant@example.com">
					   <input type="hidden" name="item_name" value="<?php echo $room->Title ?>">
					   <input type="hidden" name="amount" value="<?php echo $price ?>"> 
					   <input type="hidden" name="currency_code" value="USD">
												 <input type="image" name="submit"
				    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
				    alt="PayPal - The safer, easier way to pay online" class="pull-right">
				    </form>
												<a href="<?php echo site_url('welcome/submitBooking') ?>/<?php echo $room->roomid ?>/<?php echo $price ?>/<?php echo $room->Type ?>/<?php echo $aid ?>/<?php echo $to ?>/<?php echo $from ?>/<?php $room->Discount ?>/<?php $room->Tax ?>"><button class="btn btn-dark-main">Submit</button></a>	
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="mg-cart-container">
												<aside class="mg-widget mt50" id="mg-room-cart">
													<h2 class="mg-widget-title">Booking Details</h2>
													<div class="mg-widget-cart">
														<div class="mg-cart-room">
															<img src="<?php echo base_url()?>uploads/<?php echo $room->Image ?>" alt="Delux Room" class="img-responsive">
															<h3><?php echo $room->Title ?></h3>
														</div>
														<div class="mg-widget-cart-row">
															<strong>Check In:</strong>
															<span><?php echo $from ?></span>
														</div>
														<div class="mg-widget-cart-row">
															<strong>Check Out:</strong>
															<span><?php echo $to ?></span></div>
<?php 
if(count($num) > 0)
{
?>	




															<div class="mg-widget-cart-row">
															<strong>Hall Rent:</strong>
															<span><?php echo $hallprice ?></span>
														</div>
														<div class="mg-widget-cart-row">
															<strong>Discount:</strong>
															<span><?php echo $room->Discount ?>%</span>
														</div>
														<div class="mg-widget-cart-row">
															<strong>Tax:</strong>
															<span><?php echo $room->Tax  ?>%</span>
														</div>
<?php 

}
 ?>														
														<div class="mg-cart-total">
															<strong>Total:</strong>
															<span><?php echo $price ?></span>
														</div>
													</div>
												</aside>
											</div>
										</div>
									</div>
								</div>
								

							
							</div>

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
		<script src="<?php echo base_url()?>template/js/starrr.min.js"></script>
		<script src="<?php echo base_url()?>template/js/nivo-lightbox.min.js"></script>
		<script src="<?php echo base_url()?>template/js/jquery.shuffle.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?php echo base_url()?>template/js/gmaps.min.js"></script>
		<script src="<?php echo base_url()?>template/js/jquery.parallax-1.1.3.js"></script>
		<script src="<?php echo base_url()?>template/js/script.js"></script>
	</body>
</html>