<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
   public function __construct(){
       parent::__construct();
       $this->load->model('m_dashboard','dash');
       $login = $this->session->userdata('login');
       if ($login=='') {
          redirect(base_url()."index.php/login");
       }
   }

   public function index()
   {
     
    /* $data['nama'] = "UIN Bandung";
     $data['alamat'] ="Jl. AH. Nasution no 25";
     $data['identitas'] ="Wha Wha Adytoma || 1157050174";*/
     $data['matakuliah'] = $this->dash->tampil_data();
     $this->load->view('dashboard',$data);
   }

   public function profil($no=NULL,$no2=NULL)
   {
      echo "Ini adalah halaman profil no.".$no." no2 . ".$no2;
   }

   public function input()
   {

// <!--  kode  nama_mk semester  sks nilai_minimal_lulus-->

    $kode  = $this->input->post('kode'); 
    $nama_mk = $this->input->post('nama_mk');
    $semester = $this->input->post('semester');
    $sks  = $this->input->post('sks'); 
    $nilai_minimal_lulus = $this->input->post('nilai_minimal_lulus');
    $data = array('kode' => $kode,
                    'nama_mk' => $nama_mk,
                    'semester' => $semester,
                    'sks' => $sks,
                    'nilai_minimal_lulus' => $nilai_minimal_lulus
                     );
    $this->dash->input($data);
    redirect(base_url());
   }

   public function edit($kode=NULL)
   {
     $this->db->where('kode',$kode);
     $data['matakuliah'] = $this->db->get('matakuliah')->result();
     $this->load->view('edit',$data);
   }

   public function aksi_edit()
   {

// <!--  kode  nama_mk semester  sks nilai_minimal_lulus-->


    $kode  = $this->input->post('kode'); 
    $nama_mk = $this->input->post('nama_mk');
    $semester = $this->input->post('semester');
    $sks  = $this->input->post('sks'); 
    $nilai_minimal_lulus = $this->input->post('nilai_minimal_lulus');
    //$id    = $this->input->post('id'); 

    $data = array('kode' => $kode,
                    'nama_mk' => $nama_mk,
                    'semester' => $semester,
                    'sks' => $sks,
                    'nilai_minimal_lulus' => $nilai_minimal_lulus
                     );
    $this->dash->update_data($data,$kode);
    redirect(base_url());
   }

   public function hapus($id)
   {
     $this->db->where('kode',$id);
     $this->db->delete('matakuliah');
     redirect(base_url());
   }
}