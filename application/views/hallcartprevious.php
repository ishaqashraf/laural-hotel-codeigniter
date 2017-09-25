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
						<h2>Checkout</h2>
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
															<strong>Hall Rent:</strong>
															<span><?php echo $price ?></span>
														</div>
													</div>
												</aside>
											</div>
										</div>
		<div class="col-md-9" style="margin-top: 50px;">
							<div class="panel-body panel-heading panel-title panel panel-info">
					<div class="row">
					<div class="col-xs-4">

							<h4 class="product-name"><strong>DishName</strong></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6">

							<h4 class="product-name"><strong>Price</strong></h4>
						</div>
						<div class="col-xs-4">

							<h4 class="product-name"><strong>Qunatity</strong></h4>
						</div>
						
						</div>
						<div class="col-xs-2">

							<h4 class="product-name"><strong>Action</strong></h4>
						</div>

					</div>
					<div>
										<?php foreach ($this->cart->contents() as $items): ?>

					<?php 
						$p = $this->cart->total('Price');
						$Total =$p+$price;

						$Type =  $this->uri->segment('10');
						$hallid =  $this->uri->segment('9');
					 ?>	
				<form action="<?php echo site_url('welcome/submitHallBooking') ?>/<?php echo $hallid ?>/<?php echo $Type ?>/<?php echo $Total ?>/<?php echo $to ?>/<?php echo $from ?>" method="post">


					<div class="row">
						<div class="col-xs-4">

							<h4 class="product-name"><strong><?php echo $items['name']; ?></strong></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6">
								<h6><strong><?php echo "Rs".$items['price']."         "; ?></strong></h6>
							</div>
						
							<div class="col-xs-4">
								<input type="text"  id="qty" class="form-control input-sm" value="<?php echo $items['qty'] ?>" style="width: 50%;" >
							</div>
							</div>
							<div class="col-xs-1">
							<a href="<?php echo site_url('admin/CartController/deleteCart/'.$items['rowid']); ?>"><h4 class="product-name"><strong>X</strong></h4></a>

						</div>
						<div class="col-xs-1">

								<a href="<?php echo site_url('admin/CartController/up') ?>"><button type="button" data-id="<?php echo $items['rowid']?>" class="btn-success submit" style="margin-left: -39px;
						    margin-top: 9px;
						    padding-left: 0px;
						    padding-right: 0px;">
						    Update</button>	</a>
								</div>
							
							
							<input type="hidden" name="Price" value="<?php echo $this->cart->total('Price') ?>">		
							<input type="hidden" name="User_Id" value="<?php echo $this->session->userdata('user')->Id;?>">

								<?php 
					$a = array();
					foreach ($this->cart->contents() as $items): 
					array_push($a,$items['name']);
					endforeach ?> 
					<?php  
					$ids = implode(',', $a); 
					$id = $ids; ?>	

						<?php 
					$b = array();
					foreach ($this->cart->contents() as $items): 
					array_push($b,$items['qty']);
					endforeach ?> 
					<?php  
					$q = implode(',', $b); 
					$qty = $q; ?>	
							<input type="hidden" name="dishid" value="<?php echo $ids ?>">		
							<input type="hidden" name="qty" value="<?php echo $q ?>">		
					</div>
											<?php endforeach ?>

					<hr>
				
				
					</h1>
					

				</div>	
					<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
						
							<h4 class="text-right">Total Rs. <strong><?php 
							echo $p+$price; ?><br>(Hall Rent+Dishes Price)</strong></h4>
						</div>
						<div class="col-xs-3">
							<a href="#"><button class="btn btn-primary" type="submit">Order Now</button></a>
							</form>
											</div>	
			
												
						</div>
					</div>
				</div>		
						
					 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					   <input type="hidden" name="cmd" value="_xclick">
					   <input type="hidden" name="return" value="http://localhost/laural1/index.php/welcome/submitBooking" />
					  <input type="hidden" name="business" value="PayPalMerchant@example.com">
					   <input type="hidden" name="item_name" value="<?php echo $Title ?>">
					   <input type="hidden" name="amount" value="<?php echo $p+$price ?>"> 
					   <input type="hidden" name="currency_code" value="USD">
												 <input type="image" name="submit"
				    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
				    alt="PayPal - The safer, easier way to pay online" style="margin-top: -125px;
    margin-left: 18px;" class="pull-left">
				    </form>

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
				
		$('.submit').on('click', function (){

			var id = $(this).data("id");
			var qty = $('#qty').val();
		    var post = new Object();

		    post.qty = qty;
		  	var url = '<?php echo site_url('admin/CartController/updateCart')?>'+'/'+id;
		    $.ajax({
		    	url: url,
		    	type: 'post',
		    	data: post,
		    	success: function(response){
		    		
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