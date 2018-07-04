<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
   public function __construct(){
       parent::__construct();
       $this->load->model('m_admin','dash');
       $login = $this->session->userdata('login');
       if ($login=='') {
          redirect(base_url()."index.php/login");
       }
   }

   public function index()
   {
     
   	
     $data['admin'] = $this->dash->tampil_data();
   	 $this->load->view('admin',$data);
   }

   public function input()
   {

// <!--  kode  nama_mk semester  sks nilai_minimal_lulus-->

    /*$kode  = $this->input->post('kode'); */
               /* id_admin */          
    $email = $this->input->post(' email');
    $nama = $this->input->post('nama');
    $jk  = $this->input->post('jk'); 
    $bday = $this->input->post('bday');
    $kontak = $this->input->post('kontak');
    $alamat  = $this->input->post('alamat'); 
    $pass = $this->input->post('pass');
    $foto = $this->input->post('foto');

    $data = array('email' => $email,
                    'nama' => $nama,
                    'jk' => $jk,
                    'bday' => $bday,
                    'kontak' => $kontak,
                    'alamat' => $alamat,
                    'pass' => $pass,
                    'foto' => $foto
                     );
    $this->dash->input($data);
    redirect(base_url());
   }

   public function edit($id_admin=NULL)
   {
     $this->db->where('id_admin',$id_admin);
     $data['admin'] = $this->db->get('admin')->result();
     $this->load->view('edit_admin',$data);
   }

   public function aksi_edit()
   {
    $id_admin    = $this->input->post('id_admin'); 
    $email = $this->input->post(' email');
    $nama = $this->input->post('nama');
    $jk  = $this->input->post('jk'); 
    $bday = $this->input->post('bday');
    $kontak = $this->input->post('kontak');
    $alamat  = $this->input->post('alamat'); 
    $pass = $this->input->post('pass');
    $foto = $this->input->post('foto');

    $data = array(  'id_admin' => $id_admin,
                    'email' => $email,
                    'nama' => $nama,
                    'jk' => $jk,
                    'bday' => $bday,
                    'kontak' => $kontak,
                    'alamat' => $alamat,
                    'pass' => $pass,
                    'foto' => $foto
                     );   
    $this->dash->update_data($data,$id_admin);
    redirect(base_url());
   }

   public function hapus($id_admin)
   {
     $this->db->where('id_admin',$id_admin);
     $this->db->delete('admin');
     redirect(base_url());
   }
}