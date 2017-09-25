<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datacontrol extends CI_Model {



public function getsingleroom($id)
	{	
		$this->db->select('*,room_hall.Id as roomid');
		$this->db->from('room_hall');
		$this->db->where('room_hall.Id',$id);
		$this->db->join('type','room_hall.Type = Type.Id' );
		return $this->db->get()->row();
	}

	public function getsingletable($id)
	{	
		$this->db->select('*,table.Id as tableid');
		$this->db->from('table');
		$this->db->where('table.Id',$id);
		return $this->db->get()->row();
	}

	public function submitBooking($id,$price,$type,$aid,$to,$from,$discount,$tax)
	{
		$data = array(
			'room_hall_id' => $id,
			'Price'		=> $price,
			'Type'		=> $type,
			'Availability_Id'		=> $aid,
			'ToDate'		=> $to,
			'FromDate'		=> $discount,
			'Discount'		=> $tax,
			'Tax'		=> $from,
			'User_Id'				=> $this->session->userdata('user')->Id
			);
		$this->db->insert('booking',$data);
		$this->email->from('Laural@gmail.com', 'Laural Hotel');
		$this->email->to($this->session->userdata('user')->EmailAddress);
		$this->email->subject('Booking info');
		$this->email->message('Your Booking is Confirmed roomid is '.$id.'<br> Price is '.$price);
		$this->email->send();
		return true;
	}

	// public function submitHallBooking($hallid,$Type,$Total,$to,$from)
	// {
	// 	$data = array(
	// 		'room_hall_id' => $hallid,
	// 		'Price'		=> $Total,
	// 		'Type'		=> $Type,
	// 		'dishid'	=> $hallids,
	// 		'ToDate'		=> $to,
	// 		'FromDate'		=> $from,
	// 		'User_Id'				=> $this->session->userdata('user')->Id
	// 		);
	// 	$this->db->insert('booking',$data);
	// 	$this->email->from('Laural@gmail.com', 'Laural Hotel');
	// 	$this->email->to($this->session->userdata('user')->EmailAddress);
	// 	$this->email->subject('Booking info');
	// 	$this->email->message('Your Booking is Confirmed hallid is '.$hallid.'<br> Price is '.$Total);
	// 	$this->email->send();
	// 	return true;
	// }

	public function checklogin()
	{
		$this->db->where('EmailAddress',$_POST['EmailAddress']);
		$this->db->where('Password',$_POST['Password']);
		return $this->db->get('user');
	}
	public function newRegister()
	{
		print_r($_POST);
		die();
		$this->db->insert('user',$_POST);
	}
	// public function checkout()
	// {
	// 	$this->db->insert('')
	// }
}