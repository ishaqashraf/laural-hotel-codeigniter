<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function getuser()
	{
		return $this->db->get('user')->result();
	}
	public function adduser()
	{
		$this->db->insert('user',$_POST);
	}

	public function getupuser($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('user')->row();
	}

	public function updateuser($ID)
	{	
		$this->db->where('Id',$ID);
		$this->db->update('user',$_POST);

	}

	public function deleteuser($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('user');
	}
}