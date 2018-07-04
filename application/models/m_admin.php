<?php
/**
* 
*/
class M_admin extends CI_Model
{
	
	public function tampil_data()
	{
		$data = $this->db->get('admin');
		return $data;
	}

	public function input($data)
	{
		$this->db->insert('admin',$data);
	}

	public function update_data($data,$id_admin)
	{
	$this->db->where('id_admin',$id_admin);
	$this->db->update('admin',$data);
	}
	
}
?>