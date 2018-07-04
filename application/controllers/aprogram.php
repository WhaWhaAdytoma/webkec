<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
   public function __construct(){
       parent::__construct();
       $this->load->model('m_aprogram','dash');
       $login = $this->session->userdata('login');
       if ($login=='') {
          redirect(base_url()."index.php/login");
       }
   }

   public function index()
   {
     
   	 
     $data['program_kec'] = $this->dash->tampil_data();
   	 $this->load->view('aprogram',$data);
   }

   public function input()
   {

// <!--  kode  nama_mk semester  sks nilai_minimal_lulus-->

    $id_program  = $this->input->post('id_program');            
    $nama_program = $this->input->post(' nama_program');
    $sub_program  = $this->input->post('sub_program'); 
    $level = $this->input->post('level');
  
    $data = array('id_program' => $id_program,
                    'nama_program' => $nama_program,
                    'sub_program' => $sub_program,
                    'level' => $level                   
                     );
    $this->dash->input($data);
    redirect(base_url());
   }

   public function edit($id_program=NULL)
   {
     $this->db->where('id_program',$id_program);
     $data['program_kec'] = $this->db->get('program_kec')->result();
     $this->load->view('edit_aprogram',$data);
   }

   public function aksi_edit()
   {
     $id_program  = $this->input->post('id_program');            
    $nama_program = $this->input->post(' nama_program');
    $sub_program  = $this->input->post('sub_program'); 
    $level = $this->input->post('level');
  
    $data = array('id_program' => $id_program,
                    'nama_program' => $nama_program,
                    'sub_program' => $sub_program,
                    'level' => $level                   
                     );

    $this->dash->update_data($data,$id_program);
    redirect(base_url());
   }

   public function hapus($id_program)
   {
     $this->db->where('id_program',$id_program);
     $this->db->delete('program_kec');
     redirect(base_url());
   }
} 