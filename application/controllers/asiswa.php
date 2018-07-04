<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
   public function __construct(){
       parent::__construct();
       $this->load->model('m_asiswa','dash');
       $login = $this->session->userdata('login');
       if ($login=='') {
          redirect(base_url()."index.php/login");
       }
   }

   public function index()
   {
     
   	
     $data['student_kec'] = $this->dash->tampil_data();
   	 $this->load->view('asiswa',$data);
   }

   public function input()
   {

// <!--  kode  nama_mk semester  sks nilai_minimal_lulus-->

    /*$kode  = $this->input->post('kode'); */
               /* id_admin */ 
    $id_program = $this->input->post('id_program');         
    $email_st = $this->input->post(' email_st');
    $nama = $this->input->post('nama');
    $jk  = $this->input->post('jk'); 
    $bday = $this->input->post('bday');
    $kontak = $this->input->post('kontak');
    $alamat  = $this->input->post('alamat'); 
    $pass = $this->input->post('pass');
    $foto = $this->input->post('foto');

    $data = array(  'id_program' => $id_program,
                    'email_st' => $email_st,
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

   public function edit($id_st=NULL)
   {
     $this->db->where('id_st',$id_st);
     $data['student_kec'] = $this->db->get('student_kec')->result();
     $this->load->view('edit_asiswa',$data);
   }

   public function aksi_edit()
   {
    $id_st    = $this->input->post('id_st'); 
    $id_program = $this->input->post('id_program');  
    $email_st = $this->input->post(' email_st');
    $nama = $this->input->post('nama');
    $jk  = $this->input->post('jk'); 
    $bday = $this->input->post('bday');
    $kontak = $this->input->post('kontak');
    $alamat  = $this->input->post('alamat'); 
    $pass = $this->input->post('pass');
    $foto = $this->input->post('foto');

    $data = array(  'id_st' => $id_st,
                    'id_program' => $id_program
                    'email_st' => $email_st,
                    'nama' => $nama,
                    'jk' => $jk,
                    'bday' => $bday,
                    'kontak' => $kontak,
                    'alamat' => $alamat,
                    'pass' => $pass,
                    'foto' => $foto
                     );   
    $this->dash->update_data($data,$id_st);
    redirect(base_url());
   }

   public function hapus($id_st)
   {
     $this->db->where('id_st',$id_st);
     $this->db->delete('student_kec');
     redirect(base_url());
   }
}