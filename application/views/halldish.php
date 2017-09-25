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
						<h2>Select Dishes</h2>
						<p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-page">
			<div class="container">
		
										
	<div class="col-md-3">
											<div class="mg-cart-container">
												<aside class="mg-widget mt50" id="mg-room-cart">
													<h2 class="mg-widget-title">Booking Details</h2>
													<div class="mg-widget-cart">
														<div class="mg-cart-room">
															<img src="<?php echo base_url()?>uploads/<?php echo $Image ?>" alt="Delux Room" class="img-responsive">
															<h3><?php echo $Title ?></h3>
														</div>
														<div class="mg-widget-cart-row">
															<strong>Check In:</strong>
															<span><?php echo $from ?></span>
														</div>
														<div class="mg-widget-cart-row">
															<strong>Check Out:</strong>
															<span><?php echo $to ?></span>
														</div>
														<div class="mg-widget-cart-row">
															<strong>Discount:</strong>
															<span><?php echo $discount ?>%</span>
														</div>
														<div class="mg-widget-cart-row">
															<strong>Tax:</strong>
															<span><?php echo $tax ?>%</span>
														</div>
														
														<div class="mg-cart-total">
															<strong>Total:</strong>
															<span><?php echo $price ?></span>
														</div>
													</div>
												</aside>
											</div>
										</div>
									<div class="col-md-9" style="    margin-top: 50px;
">
										
						<?php foreach($getDishes as $d):?>					
					<div class="col-md-4 col-xs-6">
						<figure class="mg-room mg-room-col-4">
							<img src="<?php echo base_url() ?>/uploads/<?php echo $d->Image ?>" alt=""  class="img-responsive"/>							
							<figcaption>
								<h2><?php echo $d->DishName ?></h2>
								<div class="mg-room-rating"><i class="fa fa-dar"></i> 5.00</div>
								<div class="mg-room-price"><?php echo $d->Price ?><sup>.99/Night</sup>
								</div>
								<!-- a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a> -->
								<a href="#" data-id = '<?=$d->Id;?>' class="btn btn-main addtocart">Add Dish</a>
							</figcaption>			
						</figure>
					</div>
						<?php endforeach ?>

					
					<a href="<?php echo site_url('admin/CartController/myHallCart') ?>/<?php echo
					 $this->uri->segment('3');?>/<?php echo
					 $this->uri->segment('4');?>/<?php echo
					 $this->uri->segment('5');?>/<?php echo
					 $this->uri->segment('6');?>/<?php echo
					 $this->uri->segment('7');?>/<?php echo 
					  $this->uri->segment('8');?>/<?php echo 
					  $this->uri->segment('9');?>/<?php echo 
					  $this->uri->segment('10');?>/<?php echo 
					  $this->uri->segment('11');?>"><button class="btn btn-primary pull-right" style="margin-bottom: 30px;"><span class="glyphicon glyphicon-shopping-cart"></span> Check out</button></a>

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
		</div>
<?php $this->load->view('footer'); ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url()?>template/js/jquery.min.js"></script>
			<script type="text/javascript">
				
		$('.addtocart').on('click', function (){

			var dish_id = $(this).data("id");
		   
		    var post = new Object();

		    post.dish_id = dish_id;
		

		    $.ajax({
		    	url: "<?php echo site_url('admin/CartController/addHallDish'); ?>",
		    	type: 'post',
		    	data: post,
		    	success: function(response)
		    	{
		    		alert('Dish Added');
		    	}
		    });

		});


		</script>

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