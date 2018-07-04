<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['url_asset'] = base_url()."assets/";
		$this->load->view('login',$data);
	}

	public function aksi_login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$this->db->where('email',$email);
		$this->db->where('pass',$pass);
		$ada = $this->db->get('admin')->num_rows();
		if ($ada>0) {
			$data_session = array('login' => '1',
			                      'email' => $email );
			$this->session->set_userdata($data_session);
			echo "1";
		}else{
			echo "0";
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('email');
        redirect(base_url()."index.php/login");
	}
}