<?php 
/**
* 
*/
class M_user extends CI_Model
{
	
	public function getLevel()
	{
		$sql="select * from level";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;

	}
	
		public function getUser()
	{
		$sql="select * from user inner join pegawai on pegawai.PEGA_ID=user.USER_PEGA_ID inner join level on level.LEVE_ID=user.USER_LEVE_ID inner join witel on witel.WTEL_ID=user.USER_WTEL_ID ";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;

	}
	public function getPegawai()
	{
		$sql="select * from pegawai ";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getWitel()
	{
		$sql="select * from witel ";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

		public function Insert($data)
	{
		$this->db->insert('user',$data);
	}
	public function viewData($id){
		
		$sql="select * from user where USER_ID =".$id;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function UpdateData($data,$id){
		$this->db->where('USER_ID', $id);
		$this->db->update('user', $data);
	}
	public function Delete($id){
		$this->db->where('USER_ID', $id);
		$this->db->delete('user');
	}

}
?>
