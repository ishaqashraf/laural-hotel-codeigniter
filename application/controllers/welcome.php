<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('datacontrol');
		$this->load->model('admin/HotelModel');
		$this->load->model('admin/userModel');
		$this->load->library('cart');
		$this->load->library('email');

	}

	public function index()
	{
		$data['showroomhall'] = $this->HotelModel->getroomhall();
		$this->load->view('home',$data);
	}

	public function about()
	{
		$this->load->view('about');
	}


	public function booking($id,$from,$to,$aid)
	{
		$data['from'] = $from;
		$data['to'] = $to;
		$data['aid'] = $aid;

		if($this->session->userdata('user')){
		$data['room'] = $this->datacontrol->getsingleroom($id);
		$this->load->view('booking',$data);
		}
		else
			return $this->load->view('login',$data);
	}

	public function hallDish($Title,$to,$from,$price,$Image,$a,$b,$discount,$tax)
	{	
		$data['from'] = $from;
		$data['to'] = $to;
		$data['Title'] = $Title;
		$data['price'] = $price;
		$data['Image'] = $Image;
		$data['discount'] = $discount;
		$data['tax'] = $tax;
		$data['getDishes'] = $this->HotelModel->getdish();

		$this->load->view('halldish',$data);
	}

	public function login()
	{
		if(!$this->session->userdata('user')){
			$this->load->view('login');
		}
		else {
			redirect('welcome/index', 'refresh');
		}
	}
	public function register()
	{
		$this->load->view('register');
	}

	public function newRegister()
	{
		$this->datacontrol->newRegister();
		redirect('welcome/rthanks','refresh');

	}

	public function rthanks()
	{
		$this->load->view('rthanks');
	}

	public function Tablethanks()
	{
		// $table_id = $_POST['table_id'];
		// $dish_id = $_POST['dish_id'];
		// $user_id = $_POST['user_id'];
		// $price = $_POST['price'];
		// $data = array(
		// 	'Tid' => $table_id,
		// 	'User_Id' => $user_id,
		// 	'dishid' => $dish_id,
		// 	'Price' => $price,
		// 	);
		// print_r($data);
		

		$this->db->insert('tbooking',$_POST);
			//send  mail
		$this->email->from('Laural@gmail.com', 'Laural Hotel');
		$this->email->to($this->session->userdata('user')->EmailAddress);
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$this->email->send();

		$num = $this->session->userdata('user')->PhoneNumber;
		$price = $this->cart->total('Price');

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
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/index','refresh');
	}
	
	public function checklogin()
	{
	$data = $this->datacontrol->checklogin();
		if ($data->num_rows() > 0){
				$user = $data->row();
				$session = array('islogged' => TRUE, 'user' => $user);
				$this->session->set_userdata($session);
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				echo "error";
			}
	}

	public function getRooms()
	{
		$data['query'] = $this->HotelModel->getRooms();
		$this->load->view('rooms',$data);
	}
	public function getHalls()
	{
		$data['query'] = $this->HotelModel->getHalls();
		$this->load->view('rooms',$data);
	}

	public function singleroom($id)
	{
		$data['singleroom'] = $this->datacontrol->getsingleroom($id);
		$this->load->view('singleroom',$data);

	}

	public function singletable($id)
	{
		if($this->session->userdata('user')){
		$data['singletable'] = $this->datacontrol->getsingletable($id);
		$data['getDishes'] = $this->HotelModel->getdish();
		$this->load->view('singletable',$data);
	}
	else
	{
		return $this->load->view('login');
	}

	}

	public function getSearch()
	{	
		$from = $_POST['FromDate'];
		$to = $_POST['ToDate'];
		$data['search'] = $this->HotelModel->getSearch();
		$data['from'] = $from;
		$data['to'] = $to;
		$this->load->view('search',$data);
	}
	public function submitBooking($id,$price,$type,$aid,$to,$from,$discount,$tax)
	{
		if($this->datacontrol->submitBooking($id,$price,$type,$aid,$to,$from,$discount,$tax))
		{
			$this->load->view('thankyou');
		}
		else
			redirect('booking','refresh');
		}
	
		public function submitHallBooking($hallid,$Type,$Total,$to,$from)
		{
			// $dishid = $_POST['dishid'];
			// $qty = $_POST['qty'];

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

			$data = array(
			'room_hall_id' => $hallid,
			'Price'		=> $Total,
			'Type'		=> $Type,
			'dishid'	=> $ids,
			'qty'	=> $q,
			'ToDate'		=> $to,
			'FromDate'		=> $from,
			'User_Id'		=> $this->session->userdata('user')->Id
			);
			$this->db->insert('booking',$data);

		$this->email->from('Laural@gmail.com', 'Laural Hotel');
		$this->email->to($this->session->userdata('user')->EmailAddress);
		$this->email->subject('Booking info');
		$this->email->message('Your Booking is Confirmed hallid is '.$hallid.'<br> Price is '.$Total);
		$this->email->send();
		// $this->datacontrol->submitHallBooking($hallid,$Type,$Total,$to,$from,$hallids);
		$this->cart->destroy();

		$this->load->view('thankyou');
		}
		
	public function contact()
	{
		$this->load->view('contact');
	}

	public function tablereservation()
	{

		$this->load->view('reservationtable');
	}
	public function getBreakfastTables()
	{

	$data['showtable'] = $this->HotelModel->getBreakfastTables();
	$this->load->view('tables',$data);
	}

	public function getLunchTables()
	{

	$data['showtable'] = $this->HotelModel->getLunchTables();
	$this->load->view('tables',$data);
	}

	public function getDinnerTables()
	{

	$data['showtable'] = $this->HotelModel->getDinnerTables();
	$this->load->view('tables',$data);
	}

}

