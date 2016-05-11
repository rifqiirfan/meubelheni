<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  function index(){
    $this->load->model('BarangModel');
    $this->data['barang'] = $this->BarangModel->getBarang();
    $this->load->view('barang\barang_view', $this->data);
  }

  function tambah(){
    if($this->ion_auth->is_admin()){
        $this->load->view('barang\tambah_view');
    }else{
        return show_error('You have no authorization to view this page.');
    }

    // if($this->ion_auth->is_admin()){
    //   redirect('superadmin/barang/tambah');
    // }else{
    //
    // }
  }

  function tambah_barang(){
    $this->load->view('barang\tambah_barang_view');
  }

  function tambah_process(){
     $this->load->helper(array('form', 'url'));
     $this->load->library('form_validation');
     $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');

    if ($this->form_validation->run() == FALSE){
      // $this->session->set_flashdata('flash_data', 'Harap isi form dengan benar.');
      // redirect('barang\tambah_barang');
      echo "Terrible work. This is why you fail.";
    }else{
      // echo "Good work. May the Force be with you.";
      $this->load->model('BarangModel');
      $this->BarangModel->tambahBarang();
      // $this->load->view('barang\barang_view');
      $this->load->view('barang\tambah_view');
      // redirect('barang');
    }
  }

  function update_barang(){
    $this->load->view('barang\update_barang_view');
  }

}

?>
