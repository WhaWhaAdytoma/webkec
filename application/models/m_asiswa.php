<?php
/**
* 
*/
class M_dashboard extends CI_Model
{
	
	public function tampil_data()
	{
		$data = $this->db->get('student_kec');
		return $data;
	}

	public function input($data)
	{
		$this->db->insert('student_kec',$data);
	}

	public function update_data($data,$id_st)
	{
	$this->db->where('id_st',$id_st);
	$this->db->update('student_kec',$data);
	}
	
}
?>