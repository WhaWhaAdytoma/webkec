<?php
/**
* 
*/
class M_aguru extends CI_Model
{
	
	public function tampil_data()
	{
		$data = $this->db->get('teacher');
		return $data;
	}

	public function input($data)
	{
		$this->db->insert('teacher',$data);
	}

	public function update_data($data,$id_tc)
	{
	$this->db->where('id_tc',$id_tc);
	$this->db->update('teacher',$data);
	}
	
}
?>