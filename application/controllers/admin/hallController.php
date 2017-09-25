<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HallController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/hallModel');
		$this->load->model('admin/HotelModel');
	}
					//halls
	public function gethalls()
	{
		
		$data['showroomhall'] = $this->HotelModel->getroomhall();
		$data['showtype'] = $this->HotelModel->gettype();

		$this->load->view('admin/hotel/roomhall',$data);
	}


	public function addhall()
	{
		$this->hallModel->addhall();
		redirect('admin/hallController/gethalls','refresh');
	}

	public function edithall($ID)
	{
		$edithall = $this->hallModel->getuphall($ID);
		echo json_encode($edithall);
	}

	public function halledited()
	{	
		$id = $_POST['id'];
		$this->hallModel->updatehall($id);
		redirect('admin/hallController/gethalls','refresh');
	}

	public function deletehall($ID)
	{
		$this->hallModel->deletehall($ID);
		redirect('admin/hallController/gethalls','refresh');
	}
		
}
