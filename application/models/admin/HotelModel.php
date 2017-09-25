 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HotelModel extends CI_Model {
				//room
	public function getRoom()
	{	
		$this->db->select('*,room_hall.Id as roomhallid');
		$this->db->from('room_hall');
		$this->db->join('type','room_hall.Type = type.Id' );
		$this->db->where('type',1);
		return $this->db->get()->result();
	}
	public function getHall()
	{	
		$this->db->select('*,room_hall.Id as roomhallid');
		$this->db->from('room_hall');
		$this->db->join('type','room_hall.Type = type.Id' );
		$this->db->where('type',2);
		return $this->db->get()->result();
	}

	public function getroomhall()
	{	
		$this->db->select('*,room_hall.Id as roomhallid');
		$this->db->from('room_hall');
		$this->db->join('type','room_hall.Type = type.Id' );
		return $this->db->get()->result();
	}
	public function getRooms()
	{
		$this->db->select('*');
		$this->db->from('room_hall');
		$this->db->where('Type',1);
		return $this->db->get()->result();
	}

	public function getDiscountAndTax($hallid)
	{
		$this->db->select('*');
		$this->db->from('room_hall');
		$this->db->where('Id',$hallid);
		return $this->db->get()->result();
	}

	public function getHalls()
	{
		$this->db->select('*');
		$this->db->from('room_hall');
		$this->db->where('Type',2); 
		return $this->db->get()->result();
	}
	public function gettype()
	{
		$this->db->select('*');
		$this->db->from('type');
		return $this->db->get()->result();
	}

	public function getSearch()
	{
		$this->db->select('*,room_hall.Id as searchid,availability.Id as aid');
		$this->db->from('room_hall');
		$this->db->join('availability','room_hall.Id = availability.room_hall_id');
		// $this->db->where('availability.FromDate <=',$_POST['FromDate']);
		// $this->db->where('availability.ToDate >=',$_POST['ToDate']);
		$this->db->where('availability.Type',$_POST['Type']);
		return $this->db->get()->result();
		// SELECT r.Id ,r.Title,r.Description,r.Price,r.Image 
		// FROM room_hall r join availability a ON r.Id = a.room_hall_id
		// WHERE a.FromDate AND a.ToDate AND a.Type=2
	}

	// public function getAvailableRooms() 
	// {
	// 	$this->db->select('* ,rooms.Id as roomid');
	// 	$this->db->from('rooms');
	// 	// $this->db->join('availability','rooms.Id = availability.Room_Id');
	// 	// $this->db->where('rooms.Id !=availability.Room_Id');
	// 	return $this->db->get()->result();

	// }

	public function addroom()
	{
		$this->db->insert('room_hall',$_POST);
	}

	public function addhall()
	{
		$this->db->insert('room_hall',$_POST);
	}
	
	public function getuproom($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('room_hall')->row();
	}

	public function getuphall($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('room_hall')->row();
	}
	
	public function updateroom($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->update('room_hall',$_POST);
	}
		public function updatehall($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->update('room_hall',$_POST);
	}
	
	public function deleteroom($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('room_hall');
	}

	public function deletehall($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('room_hall');
	}

	
				//table
	public function gettable()
	{	
		$this->db->select('*,table.Id as tableid');
		$this->db->from('table');
		return $this->db->get()->result();
	}
	public function getBreakfastTables()
	{	
		$this->db->select('*,table.Id as tableid');
		$this->db->from('table');
		$this->db->where('TableType',1);
		return $this->db->get()->result();
	}
	public function getLunchTables()
	{	
		$this->db->select('*,table.Id as tableid');
		$this->db->from('table');
		$this->db->where('TableType',2);
		return $this->db->get()->result();
	}
	public function getDinnerTables()
	{	
		$this->db->select('*,table.Id as tableid');
		$this->db->from('table');
		$this->db->where('TableType',3);
		return $this->db->get()->result();
	}
	public function addtable()
	{
		$this->db->insert('table',$_POST);
	}

	public function getuptable($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('table')->row();
	}

	public function updatetable($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->update('table',$_POST);
	}

	public function deletetable($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('table');
	}
	
				//Dishes
	public function getdish()
	{
		return $this->db->get('dish')->result();
	}
	public function adddish()
	{
		$this->db->insert('dish',$_POST);
	}

	public function getupdish($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('dish')->row();
	}

	public function updatedish($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->update('dish',$_POST);
	}

	public function deletedish($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('dish');
	}

				//booking

	public function getbooking()
	{		
					
		$this->db->select('*,booking.Id as bookingId,booking.Price as bPrice,booking.Status as status');
		$this->db->from('booking');
		$this->db->join('user','booking.User_Id = user.Id');
		$this->db->join('room_hall','booking.room_hall_id = room_hall.Id');
		// $this->db->join('availability','booking.Availability_Id = availability.Id');
		$this->db->join('type','booking.Type = type.Id');
		$this->db->where('booking.Type',1);

		return $this->db->get()->result();
	}
	public function getHallbooking()
	{		
					
		$this->db->select('*,booking.Id as bookingId,booking.Price as bPrice,booking.Status as status');
		$this->db->from('booking');
		$this->db->join('user','booking.User_Id = user.Id');
		$this->db->join('room_hall','booking.room_hall_id = room_hall.Id');
		// $this->db->join('availability','booking.Availability_Id = availability.Id');
		$this->db->join('type','booking.Type = type.Id');
		$this->db->where('booking.Type',2);

		return $this->db->get()->result();
	}
	public function gettablebooking()
	{	
		$this->db->select('*,tbooking.Id as bookingId,tbooking.Price as price');
		$this->db->from('tbooking');
		$this->db->join('user','tbooking.User_Id = user.Id');
		$this->db->join('table','tbooking.Tid = table.Id');
		return $this->db->get()->result();
	}

	// public function getReservationByType($rid,$tid)
	// {
	// 	if($tid == '1'){
	// 		$this->db->where('Id',$rid);
	// 		$get = $this->db->get('rooms')->row();
	// 		return $get->RoomNumber;
	// 		//where rid
	// 		// get('table')
	// 	}

	// 	elseif($tid == '2'){
	// 		$this->db->where('Id',$rid);
	// 		$get = $this->db->get('hall')->row();
	// 		return $get->Name;
	// 	}
	// }
	// public function getInquiry()
	// {
	// $this->db->select('*,inquiry.Id as inquiry_Id,Type.Id as typeid');
	// $this->db->from('inquiry');
	// $this->db->join('Type','inquiry.Reservation_Type = Type.Id');
	// $this->db->join('users','inquiry.User_Id = users.Id');
	// return $this->db->get()->result();

	// }

	public function getavailabilities()
	{
		$this->db->select('*,availability.Id as aID');
		$this->db->from('availability');
		$this->db->join('type','availability.Type = type.Id');
		$this->db->join('room_hall','availability.room_hall_id = room_hall.Id');
		$this->db->where('availability.Type',1);
		return $this->db->get()->result();
	}

	public function getHallAvailabilities()
	{
		$this->db->select('*,availability.Id as aID');
		$this->db->from('availability');
		$this->db->join('type','availability.Type = type.Id');
		$this->db->join('room_hall','availability.room_hall_id = room_hall.Id');
		$this->db->where('availability.Type',2);
		return $this->db->get()->result();
	}

	public function gettableavailabilities()
	{
		$this->db->select('*,tavailability.Id as aID,tavailability.Type as ttype');
		$this->db->from('tavailability');
		$this->db->join('table','tavailability.Tid = table.Id');
		return $this->db->get()->result();
	}

	public function getroomid()
	{
		$this->db->select('*');
		$this->db->from('room_hall');
		$this->db->where('Type',1);
		return $this->db->get()->result();
	}
	public function getHallid()
	{
		$this->db->select('*');
		$this->db->from('room_hall');
		$this->db->where('Type',2);
		return $this->db->get()->result();
	}

	public function getavailabilityid()
	{
		$this->db->select('*');
		$this->db->from('availability');
		return $this->db->get()->result();
	}

	public function gettableavailabilityid()
	{
		$this->db->select('*');
		$this->db->from('tavailability');
		return $this->db->get()->result();
	}
	public function addbooking()
	{
		$this->db->insert('booking',$_POST);
	}

	public function addHallBooking()
	{
		$this->db->insert('booking',$_POST);
	}
	public function addtablebooking()
	{
		$this->db->insert('tbooking',$_POST);
	}

	public function addavailability()
	{
		$this->db->insert('availability',$_POST);
	}
	public function addtableavailability()
	{
		$this->db->insert('tavailability',$_POST);
	}
	
	public function getupbooking($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('booking')->row();
	}

	public function checkifBooked($ID)
	{
		$this->db->where('room_hall_id',$ID);
		return $this->db->get('booking')->row();
	}
	public function checkifHall($ID)
	{
		$this->db->where('Type',$ID);
		return $this->db->get('room_hall')->row();
	}
	public function getuptablebooking($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('tbooking')->row();
	}
	public function getupavailability($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('availability')->row();
	}
	public function getuptableavailability($ID)
	{
		$this->db->where('Id',$ID);
		return $this->db->get('tavailability')->row();
	}
	
	public function updatebooking($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->update('booking',$_POST);
	}
	public function updatetablebooking($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->update('tbooking',$_POST);
	}
	public function updateavailability($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->update('availability',$_POST);
	}
	public function updatetableavailability($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->update('tavailability',$_POST);
	}
	
	public function deletebooking($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('booking');
	}
	public function deleteHallBooking($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('booking');
	}
	public function deletetablebooking($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('tbooking');
	}
	public function deleteavailability($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('availability');
	}

	public function deletetableavailability($ID)
	{
		$this->db->where('Id',$ID);
		$this->db->delete('tavailability');
	}


}


