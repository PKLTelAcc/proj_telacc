<?php
/**
 * 
 */
class M_subWitel extends CI_Model
{
	
	public function view()
	{
		$sql = "SELECT * from sub_witel";
		$query= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getWitel()
	{
		$sql="SELECT * from witel";
		$query= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function insert($data)
	{
		$this->db->insert('sub_witel',$data);
	}
	public function update($data)
	{
		$sql="SELECT * from sub_witel where SWIT_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function updateData($id, $data)
	{
		$this->db->where('SWIT_ID', $id);
		$this->db->update('sub_witel', $data);
	}
	public function delete($id)
	{
		$this->db->where('SWIT_ID', $id);
		$this->db->delete('sub_witel');
	}
}
?>