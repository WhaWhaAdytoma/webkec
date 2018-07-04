<?php
/**
* 
*/
class M_amateri extends CI_Model
{
	
	public function tampil_data()
	{
		$data = $this->db->get('materi');
		return $data;
	}

	public function input($data)
	{
		$this->db->insert('materi',$data);
	}

	public function update_data($data,$id_materi)
	{
	$this->db->where('id_materi',$id_materi);
	$this->db->update('materi',$data);
	}
	
}
?>