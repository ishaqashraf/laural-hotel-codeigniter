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
							
	<div class="mg-rooms-cols">
			<div class="container">
				<div class="row">
						<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</h5>
							</div>
							
						</div>
					</div>
				</div>

<?php echo form_open('admin/CartController/updateCart'); ?>

<table class="table" cellpadding="6" cellspacing="1" style="width:100%" border="0">

<tr>
  <th>QTY</th>
  <th>Item </th>
  <th>Item Price</th>
  <th>Sub-Total</th>
  <th>Action</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr>
	  <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td>Rs.<?php echo $items['price'] ?></td>
	  <td>Rs.<?php echo $items['subtotal'] ?></td>
	  <td><a href="<?php echo site_url('admin/CartController/deleteCart/'.$items['rowid']) ?>">X</a></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right"><strong>Rs.<?php echo $this->cart->total('price')+$price; ?>
								<br>(Hall Rent+Dishes Price)</strong>
								</td>
</tr>

</table>

<?php 
	// echo form_submit('', 'Update'); 
?>
<input class="btn btn-primary" type="submit" name="Update" value="Update Cart">
	<?php 
						$p = $this->cart->total('Price');
						$Total =$p+$price;

						$Type =  $this->uri->segment('10');
						$hallid =  $this->uri->segment('9');
					 ?>	
					 <a href="<?php echo site_url('welcome/submitHallBooking') ?>/<?php echo $hallid ?>/<?php echo $Type ?>/<?php echo $Total ?>/<?php echo $to ?>/<?php echo $from ?>" class="btn btn-success pull-right">Order</a>
</form>


	 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					   <input type="hidden" name="cmd" value="_xclick">
					   <input type="hidden" name="return" value="http://localhost/laural1/index.php/welcome/submitBooking" />
					  <input type="hidden" name="business" value="PayPalMerchant@example.com">
					   <input type="hidden" name="item_name" value="<?php echo $Title ?>">
					   <input type="hidden" name="amount" value="<?php echo $p+$price ?>"> 
					   <input type="hidden" name="currency_code" value="USD">
												 <input type="image" style="margin-top:20px;" name="submit"
				    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
				    alt="PayPal - The safer, easier way to pay online" style="" class="pull-right">
				    </form>

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