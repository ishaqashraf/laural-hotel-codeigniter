<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cart</title>
		
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
						<h2>My Cart</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="mg-rooms-cols">
			<div class="container">
				<div class="row">
						<div class="col-xs-8" style="    margin-left: 200px;
">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<a href="<?php echo site_url('welcome/singletable') ?>/<?php echo  $this->uri->segment('4'); ?>"><button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button></a>
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
<?php 
$p = $this->cart->total('Price');
				
$discount = $p-($p*.10);

 ?>
<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right"><strong>Rs.<?php 	
  								if($p>3000){
								echo ceil($discount).'<br> 10% off' ;
											}
									else
									echo $p; ?>
								</strong>
								</td>
</tr>

</table>

<?php 
	//echo form_submit('', 'Update'); 
?>
<input class="btn btn-primary" type="submit" name="Update" value="Update Cart">



<a href="<?php echo site_url('admin/CartController/insertTableBooking') ?>" class="btn btn-success pull-right">Order</a>
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
		<!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?php //echo base_url()?>template/js/gmaps.min.js"></script> -->
		<script src="<?php echo base_url()?>template/js/jquery.parallax-1.1.3.js"></script>
		<script src="<?php echo base_url()?>template/js/script.js"></script>
		<script type="text/javascript">


		</script>
	</body>
</html>