<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
   public function __construct(){
       parent::__construct();
       $this->load->model('m_amateri','dash');
       $login = $this->session->userdata('login'); 
       if ($login=='') {
          redirect(base_url()."index.php/login");
       }
   }

   public function index()
   {
     
   	
     $data['materi'] = $this->dash->tampil_data();
   	 $this->load->view('amateri',$data);
   }

   public function input()
   {

// <!--  kode  nama_mk semester  sks nilai_minimal_lulus-->
     
    $id_materi = $this->input->post(' id_materi');
    $id_user = $this->input->post('id_user');
    $jenis_file  = $this->input->post('jenis_file'); 
    $judul = $this->input->post('judul');
    
    $data = array('id_materi' => $id_materi,
                    'id_user' => $id_user,
                    'jenis_file' => $jenis_file,
                    'judul' => $judul     
                     );
    $this->dash->input($data);
    redirect(base_url());
   }

   public function edit($id_materi=NULL)
   {
     $this->db->where('id_materi',$id_materi);
     $data['materi'] = $this->db->get('materi')->result();
     $this->load->view('edit_amateri',$data);
   }

   public function aksi_edit()
   {
    $id_materi = $this->input->post(' id_materi');
    $id_user = $this->input->post('id_user');
    $jenis_file  = $this->input->post('jenis_file'); 
    $judul = $this->input->post('judul');
    
    $data = array('id_materi' => $id_materi,
                    'id_user' => $id_user,
                    'jenis_file' => $jenis_file,
                    'judul' => $judul     
                     );
      
    $this->dash->update_data($data,$id_materi);
    redirect(base_url());
   }

   public function hapus($id_materi)
   {
     $this->db->where('id_materi',$id_materi);
     $this->db->delete('materi');
     redirect(base_url());
   }
}