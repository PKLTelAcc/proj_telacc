<?php 

/**
 * 
 */
class M_level extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from level";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
		return $return; 
	}

	public function insert($data)
	{
		$this->db->insert('level',$data);
	}

	public function update($data)
	{
		$sql="select * from level where LEVE_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('LEVE_ID', $id);
		$this->db->update('level', $data);
	}

	public function delete($id)
	{
		$this->db->where('LEVE_ID', $id);
		$this->db->delete('level');
	}
}

 ?>