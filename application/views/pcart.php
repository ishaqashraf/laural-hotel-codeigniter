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
				<div class="panel-body">
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
				<form action="<?php echo site_url('welcome/Tablethanks') ?>" method="post">
					<?php foreach ($this->cart->contents() as $items): ?>

					<div class="row">
						<div class="col-xs-4">

							<h4 class="product-name"><strong><?php echo $items['name']; ?></strong></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6">
								<h6><strong><?php echo "Rs".$items['price']."         "; ?></strong></h6>
							</div>
						
							<div class="col-xs-4">
								<input type="text" id="qty" class="form-control input-sm" value="<?php echo $items['qty'] ?>" style="width: 50%;" >
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
						    Update</button></a>
												</div>
							
						
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
						<?php 
						$p = $this->cart->total('Price');
				
						$discount = $p-($p*.10);
				
					 ?>	
							<h4 class="text-right">Total Rs. <strong><?php 
							if($p>3000){
								echo ceil($discount).'<br> 10% off' ;
							}
							else
							echo $p; ?></strong></h4>
						</div>

							<input type="hidden" name="Tid" value="<?php echo $items['table_id'] ?>">		
							<input type="hidden" name="Price" value="<?php echo $discount ?>">		
							<input type="hidden" name="User_Id" value="<?php echo $this->session->userdata('user')->Id;?>">

						<div class="col-xs-3">
							<button class="btn btn-success" type="submit">submit</button>
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
	</body>
</html>



//



<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CartController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');

	}

	public function addProduct()
	{

		print_r($_POST);

		$dish_id = $_POST['dish_id'];	
		$table_id = $_POST['table_id'];	
	
		$this->db->where('Id',$dish_id);
		$dish =  $this->db->get('dish')->result();
		print_r($dish);	
		foreach ($dish as $value) {
			$price = $value->Price;
			$name =  $value->DishName;
			$Image =  $value->Image;
		}	

		$data = array(
               'id'      => $dish_id,
               'table_id'=> $table_id,
               'qty'     => 1,
               'price'   => $price,
               'name'    => $name,
               'Image'    => $Image,
            );
		$this->cart->insert($data);  
	}

public function addHallDish()
	{

		print_r($_POST);

		$dish_id = $_POST['dish_id'];	
		
	
		$this->db->where('Id',$dish_id);
		$dish =  $this->db->get('dish')->result();
		print_r($dish);	
		foreach ($dish as $value) {
			$price = $value->Price;
			$name =  $value->DishName;
		}	

		$data = array(
               'id'      => $dish_id,
               'qty'     => 1,
               'price'   => $price,
               'name'    => $name,
            );
		$this->cart->insert($data);  
	}

	public function getProducts()
	{

		 // foreach ($this->cart->contents() as $items){
		 // 	echo $items;
		 // }
		echo '<pre/>';
		print_r($this->cart->contents());
		// $this->cart->destroy();
		// print_r($this->cart->total('Price'));
	}

	public function myCart()
	{
		$this->load->view('cart');
	}
	public function myHallCart($Title,$to,$from,$price,$Image,$a,$b,$discount,$tax)
	{
		$data['from'] = $from;
		$data['to'] = $to;
		$data['Title'] = $Title;
		$data['price'] = $price;
		$data['Image'] = $Image;
		$data['discount'] = $discount;
		$data['tax'] = $tax;
		$this->load->view('hallCart',$data);
	}



	
	public function updateCart($rowid)
	{

	$qty =$_POST['qty'];
   	$data = array(
   				'rowid' => $rowid,
               	'qty'   => $qty
            );
	$this->cart->update($data); 
    redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteCart($rowid)
	{

   	$data = array(
               'rowid' => $rowid,
               'qty'   => 0
            );

	$this->cart->update($data); 
    redirect($_SERVER['HTTP_REFERER']);
	}
	public function qty(){
		$this->load->view('qty');
	}
	public function up()
	{
	redirect($_SERVER['HTTP_REFERER']);	}
}


?>