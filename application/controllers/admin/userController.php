<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/userModel');
	}

	public function dashboard()
	{
		$this->load->view('admin/index');
	}
	public function getusers()
	{
		$data['showusers'] = $this->userModel->getuser();
		$this->load->view('admin/users/user',$data);
	}


	public function adduser()
	{
		$this->userModel->adduser();
		redirect('admin/UserController/getusers','refresh');
	}

	public function edituser($ID)
	{
		$edituser = $this->userModel->getupuser($ID);
		//print_r($edituser);
		echo json_encode($edituser);
	}

	public function useredited()
	{
		$id = $_POST['id'];
		$this->userModel->updateuser($id);
		redirect('admin/UserController/getusers','refresh');
	}

	public function deleteuser($ID)
	{
		$this->userModel->deleteuser($ID);
		redirect('admin/UserController/getusers','refresh');
	}
}

