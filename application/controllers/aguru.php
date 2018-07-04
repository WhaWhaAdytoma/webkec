<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
   public function __construct(){
       parent::__construct();
       $this->load->model('m_aguru','dash');
       $login = $this->session->userdata('login');
       if ($login=='') {
          redirect(base_url()."index.php/login");
       }
   }

   public function index()
   {
     
     $data['teacher'] = $this->dash->tampil_data();
   	 $this->load->view('aguru',$data);
   }

   public function input()
   {

// <!--  kode  nama_mk semester  sks nilai_minimal_lulus-->

    /*$kode  = $this->input->post('kode'); */
               /* id_admin */          
    $email_tc = $this->input->post(' email_tc');
    $nama = $this->input->post('nama');
    $jk  = $this->input->post('jk'); 
    $bday = $this->input->post('bday');
    $kontak = $this->input->post('kontak');
    $alamat  = $this->input->post('alamat'); 
    $pass = $this->input->post('pass');
    $foto = $this->input->post('foto');

    $data = array('email_tc' => $email_tc,
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

   public function edit($id_tc=NULL)
   {
     $this->db->where('id_tc',$id_tc);
     $data['admin'] = $this->db->get('teacher')->result();
     $this->load->view('edit_aguru',$data);
   }

   public function aksi_edit()
   {
    $id_tc    = $this->input->post('id_tc'); 
    $email_tc = $this->input->post(' email_tc');
    $nama = $this->input->post('nama');
    $jk  = $this->input->post('jk'); 
    $bday = $this->input->post('bday');
    $kontak = $this->input->post('kontak');
    $alamat  = $this->input->post('alamat'); 
    $pass = $this->input->post('pass');
    $foto = $this->input->post('foto');

    $data = array(  'id_tc' => $id_tc,
                    'email_tc' => $email_tc,
                    'nama' => $nama,
                    'jk' => $jk,
                    'bday' => $bday,
                    'kontak' => $kontak,
                    'alamat' => $alamat,
                    'pass' => $pass,
                    'foto' => $foto
                     );   
    $this->dash->update_data($data,$id_tc);
    redirect(base_url());
   }

   public function hapus($id_tc)
   {
     $this->db->where('id_tc',$id_tc);
     $this->db->delete('teacher');
     redirect(base_url());
   }
}