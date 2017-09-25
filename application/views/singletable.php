<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Single Table | Mega</title>
		
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
						<h2>Select Dishes</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="mg-single-room-price">
			<div class="mg-srp-inner"><?php echo $singletable->TableNumber ?><sup></sup><span>/Table#</span></div>
		</div>
		<div class="mg-single-room">
			<div class="container">
			<div class="row">
					 <?php foreach($getDishes as $d):?>					
					<div class="col-md-3 col-xs-6">
						<figure class="mg-room mg-room-col-4">
							<img src="<?php echo base_url() ?>/uploads/<?php echo $d->Image ?>" alt=""  class="img-responsive"/>							
							<figcaption>
								<h2><?php echo $d->DishName ?></h2>
								<div class="mg-room-rating"><i class="fa fa-dar"></i> 5.00</div>
								<div class="mg-room-price"><?php echo $d->Price ?><sup>.99/Night</sup>
								</div>
								<!-- a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a> -->
								<a href="#" data-id = '<?=$d->Id;?>' class="btn btn-main addtocart">Add To Cart</a>
							</figcaption>			
						</figure>
					</div>
						<?php endforeach ?>

					
					<a href="<?php echo site_url('admin/CartController/myCart') ?>/<?php echo
					 $this->uri->segment('3');  ?>"><button class="btn btn-primary pull-right" style="margin-bottom: 30px;"><span class="glyphicon glyphicon-shopping-cart"></span> View Cart</button></a>
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

		<script type="text/javascript">
				
		$('.addtocart').on('click', function (){

			var dish_id = $(this).data("id");
		    var table_id = <?php echo $this->uri->segment('3'); ?>;
		    var post = new Object();

		    post.dish_id = dish_id;
		    post.table_id = table_id;

		    $.ajax({
		    	url: "<?php echo site_url('admin/CartController/addProduct'); ?>",
		    	type: 'post',
		    	data: post,
		    	success: function(response)
		    	{
		    		alert('added to cart');
		    	}
		    });

		});


		</script>



	</body>
</html>


