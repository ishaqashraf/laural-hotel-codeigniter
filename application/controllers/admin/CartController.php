<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CartController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	$this->load->library('email');


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



	
	public function updateCart()
	{
		echo '<pre/>';
		print_r($_POST);
		$this->cart->update($_POST);
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
	redirect($_SERVER['HTTP_REFERER']);	
	}

	public function insertTableBooking()
	{
					$a = array();
					foreach ($this->cart->contents() as $items): 
					array_push($a,$items['name']);
					endforeach;  
					$ids = implode(',', $a); 
					$id = $ids; 	
					$b = array();
					foreach ($this->cart->contents() as $items): 
					array_push($b,$items['qty']);
					endforeach;
					$q = implode(',', $b); 
					$qty = $q; 
					$table_id = $items['table_id'];
					$p = $this->cart->total('Price');
					if($p>3000)
					{
					$discount = $p-($p*.10);
					}
					else {
						$discount = $p;
					}
					$Price = ceil($discount);
					$user_id = $this->session->userdata('user')->Id;

	$data = array(
		'Tid' => $table_id, 
		'qty' => $q,
		'Price' => $Price,
		'dishid' => $ids, 
		'User_Id' => $user_id,
		'Status' => 1 
		);
		$this->db->insert('tbooking',$data);
		//email
		$this->email->from('Laural@gmail.com', 'Laural Hotel');
		$this->email->to($this->session->userdata('user')->EmailAddress);
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$this->email->send();

		$num = $this->session->userdata('user')->PhoneNumber;
		$price = $Price;

		//send sms
		// $username = 'ishaqashraf';
		// 	$password = '03232890678';
		// 	$to = $num;
		// 	$from = 'Laural';
		// 	$message = 'Thanks FOr booking table .your bill is rs '.$price .'';
		// 	$url = "http://Lifetimesms.com/plain?username=".$username."&password=" .$password.
		// 	"&to=" .$to. "&from=" .urlencode($from)."&message=" .urlencode($message)."";
		// 	//Curl Start
		// 	$ch = curl_init();
		// 	$timeout = 30;
		// 	curl_setopt ($ch,CURLOPT_URL, $url) ;
		// 	curl_setopt ($ch,CURLOPT_RETURNTRANSFER, 1);
		// 	curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
		// 	$response = curl_exec($ch) ;
		// 	curl_close($ch) ; 
		// 	//Write out the response
		// 	echo $response ;

		$this->cart->destroy();
		
		$this->load->view('thankyou');


		
	}
}


?>