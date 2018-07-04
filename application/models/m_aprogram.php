<?php
/**
* 
*/
class M_dashboard extends CI_Model
{
	
	public function tampil_data()
	{
		$data = $this->db->get('program_kec');
		return $data;
	}

	public function input($data)
	{
		$this->db->insert('program_kec',$data);
	}

	public function update_data($data,$id_program)
	{
	$this->db->where('id_program',$id_program);
	$this->db->update('program_kec',$data);
	}
	
}
?>