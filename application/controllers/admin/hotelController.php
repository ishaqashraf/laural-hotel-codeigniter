<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HotelController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/HotelModel');
		// $this->load->model('admin/hallModel');
		$this->load->model('admin/userModel');
		



	}
	
		//room
	public function getRoom()
	{

		$data['showroomhall'] = $this->HotelModel->getRoom();
		$data['showtype'] = $this->HotelModel->gettype();

		$this->load->view('admin/hotel/room',$data);
	}

	public function getHall()
	{

		$data['showroomhall'] = $this->HotelModel->getHall();
		$data['showtype'] = $this->HotelModel->gettype();

		$this->load->view('admin/hotel/hall',$data);
	}
	
	public function addroom()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('Image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = $this->upload->data();
			$_POST['Image'] = $data['file_name'];
			$this->HotelModel->addroom();
		redirect('admin/hotelController/getroom','refresh');
	}
	}

	public function addhall()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('Image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = $this->upload->data();
			$_POST['Image'] = $data['file_name'];
			$this->HotelModel->addhall();
		redirect('admin/hotelController/getHall','refresh');
	}
	}


	public function editroom($ID)
	{

		$editroom = $this->HotelModel->getuproom($ID);
		echo json_encode($editroom);
	}

	public function edithall($ID)
	{

		$edithall = $this->HotelModel->getuphall($ID);
		echo json_encode($edithall);
	}

	public function roomedited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updateroom($id);
		redirect('admin/hotelController/getroom','refresh');
	}

	public function halledited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updatehall($id);
		redirect('admin/hotelController/getHall','refresh');
	}

	public function deleteroom($ID)
	{
		$this->HotelModel->deleteroom($ID);
		redirect('admin/hotelController/getroom','refresh');
	}

	public function deletehall($ID)
	{
		$this->HotelModel->deletehall($ID);
		redirect('admin/hotelController/getHall','refresh');
	}
	

	
		//table
	public function gettables()
	{
		$data['showtable'] = $this->HotelModel->gettable();

		$this->load->view('admin/hotel/table',$data);
	}


	public function addtable()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('Image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = $this->upload->data();
			$_POST['Image'] = $data['file_name'];
			$this->HotelModel->addtable();
		redirect('admin/hotelController/gettables','refresh');
	}
}

	public function edittable($ID)
	{
		$edittable = $this->HotelModel->getuptable($ID);
		echo json_encode($edittable);
	}

	public  function tableedited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updatetable($id);
		redirect('admin/hotelController/gettables','refresh');
	}

	public function deletetable($ID)
	{
		$this->HotelModel->deletetable($ID);
		redirect('admin/hotelController/gettables','refresh');
	}
		
	

		//Dishes

	public function getdishes()
	{
		$data['showdish'] = $this->HotelModel->getdish();
		$this->load->view('admin/hotel/dish',$data);
	}


	public function adddish()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('Image')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else{
			$data = $this->upload->data();
			$_POST['Image'] = $data['file_name'];
		$this->HotelModel->adddish();
		redirect('admin/hotelController/getdishes','refresh');
	}
}

	public function editdish($ID)
	{
		$editdish = $this->HotelModel->getupdish($ID);
		echo json_encode($editdish);
	}

	public function dishedited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updatedish($id);
		redirect('admin/HotelController/getdishes','refresh');
	}

	public function deletedish($ID)
	{
		$this->HotelModel->deletedish($ID);
		redirect('admin/hotelController/getdishes','refresh');
	}

				//booking
	public function getbookings()
	{
		
		$data['showbooking'] = $this->HotelModel->getbooking();
		// $data['showavailabilityid'] = $this->HotelModel->getavailabilityid();
		$data['showtype'] = $this->HotelModel->gettype();
		$data['showroomid'] = $this->HotelModel->getroomid();
		$data['showusers'] = $this->userModel->getuser();


		$this->load->view('admin/hotel/booking',$data);
	}

	public function getHallBookings()
	{
		
		$data['showbooking'] = $this->HotelModel->getHallbooking();
		// $data['showavailabilityid'] = $this->HotelModel->getavailabilityid();
		$data['showtype'] = $this->HotelModel->gettype();
		$data['showhallid'] = $this->HotelModel->getHallid();
		$data['showusers'] = $this->userModel->getuser();


		$this->load->view('admin/hotel/hallbooking',$data);
	}

	public function gettablebookings()
	{

		$data['showtablebooking'] = $this->HotelModel->gettablebooking();
		// $data['showtableavailabilityid'] = $this->HotelModel->gettableavailabilityid();
		$data['showtableid'] = $this->HotelModel->gettable();
		$data['showusers'] = $this->userModel->getuser();
		$data['showdish'] = $this->HotelModel->getdish();


		$this->load->view('admin/hotel/tbooking',$data);
	}

	public function getInquiry()
	{
		$data['showInquiry'] = $this->HotelModel->getInquiry();
		$this->load->view('admin/hotel/inquiry',$data);
	}

	public function getavailabilities()
	{
		$data['showavailability'] = $this->HotelModel->getavailabilities();
		$data['showroomid'] = $this->HotelModel->getroomid();
		$data['showtype'] = $this->HotelModel->gettype();

		$this->load->view('admin/hotel/availability',$data);
	}
	public function getHallAvailabilities()
	{
		$data['showavailability'] = $this->HotelModel->getHallAvailabilities();
		$data['showroomid'] = $this->HotelModel->gethallid();
		$data['showtype'] = $this->HotelModel->gettype();

		$this->load->view('admin/hotel/hallavailability',$data);
	}

	public function gettableavailabilities()
	{
		$data['showtableavailability'] = $this->HotelModel->gettableavailabilities();
		$data['showtableid'] = $this->HotelModel->gettable();

		$this->load->view('admin/hotel/tavailability',$data);
	}
	public function addbooking()
	{
		$this->HotelModel->addbooking();
		redirect('admin/hotelController/getbookings','refresh');
	}
	public function addHallbooking()
	{
		$this->HotelModel->addHallBooking();
		redirect('admin/hotelController/getHallBookings','refresh');
	}

	public function addtablebooking()
	{
		$this->HotelModel->addtablebooking();
		redirect('admin/hotelController/gettablebookings','refresh');
	}
	public function addavailability()
	{
		$this->HotelModel->addavailability();
		redirect('admin/hotelController/getavailabilities','refresh');
	}
	public function addhallavailability()
	{
		$this->HotelModel->addavailability();
		redirect('admin/hotelController/gethallavailabilities','refresh');
	}

	public function addtableavailability()
	{
		$this->HotelModel->addtableavailability();
		redirect('admin/hotelController/gettableavailabilities','refresh');
	}
	public function editbooking($ID)
	{
		$editbooking = $this->HotelModel->getupbooking($ID);
		echo json_encode($editbooking);
	}

	public function edittablebooking($ID)
	{
		$edittablebooking = $this->HotelModel->getuptablebooking($ID);
		echo json_encode($edittablebooking);
	}
	public function editavailability($ID)
	{
		$editavailability = $this->HotelModel->getupavailability($ID);
		echo json_encode($editavailability);
	}

	public function edithallavailability($ID)
	{
		$editavailability = $this->HotelModel->getupavailability($ID);
		echo json_encode($editavailability);
	}


	public function edittableavailability($ID)
	{
		$edittableavailability = $this->HotelModel->getuptableavailability($ID);
		echo json_encode($edittableavailability);
	}

	public function bookingedited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updatebooking($id);
		redirect('admin/hotelController/getbookings','refresh');
	}
	public function tablebookingedited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updatetablebooking($id);
		redirect('admin/hotelController/gettablebookings','refresh');
	}
	public function availabilityedited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updateavailability($id);
		redirect('admin/hotelController/getavailabilities','refresh');
	}
	public function hallavailabilityedited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updateavailability($id);
		redirect('admin/hotelController/gethallavailabilities','refresh');
	}
	public function tableavailabilityedited()
	{
		$id = $_POST['id'];
		$this->HotelModel->updatetableavailability($id);
		redirect('admin/hotelController/gettableavailabilities','refresh');
	}
	public function deletebooking($ID)
	{
		$this->HotelModel->deletebooking($ID);
		redirect('admin/hotelController/getbookings','refresh');
	}	
	public function deleteHallBooking($ID)
	{
		$this->HotelModel->deleteHallBooking($ID);
		redirect('admin/hotelController/getHallBookings','refresh');
	}	
	public function deletetablebooking($ID)
	{
		$this->HotelModel->deletetablebooking($ID);
		redirect('admin/hotelController/gettablebookings','refresh');
	}	
	public function deleteavailability($ID)
	{
		$this->HotelModel->deleteavailability($ID);
		redirect('admin/hotelController/getavailabilities','refresh');

	}
	public function deletehallavailability($ID)
	{
		$this->HotelModel->deleteavailability($ID);
		redirect('admin/hotelController/gethallavailabilities','refresh');

	}
		public function deletetableavailability($ID)
	{
		$this->HotelModel->deletetableavailability($ID);
		redirect('admin/hotelController/gettableavailabilities','refresh');

	}

	
}

 