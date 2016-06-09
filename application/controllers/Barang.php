<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  function index(){
    if($this->ion_auth->logged_in()){
        $this->load->model('BarangModel');
        $this->data['barang'] = $this->BarangModel->getBarang();
        // $this->load->view('barang\barang_view', $this->data);

        $this->load->view('template\header');
        $this->load->view('barang\barang', $this->data);
    }else{
        return show_error('You must log in to view this page.');
    }

  }

  function tambah(){
    if($this->ion_auth->is_admin()){
        $this->load->view('template\header');
        $this->load->view('barang\tambah_pilihan');

    }else{
        return show_error('You have no authorization to view this page.');
    }
  }

  function tambah_barang(){
    $this->load->view('template\header');
    $this->load->view('barang\tambah_barang');
  }

  function tambah_process(){
     $this->load->helper(array('form', 'url'));
     $this->load->library('form_validation');
     $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
     $this->form_validation->set_rules('jenis_barang', 'jenis_barang', 'required');
     $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
     $this->form_validation->set_rules('harga', 'harga', 'required');

    if ($this->form_validation->run() == FALSE){
      $this->session->set_flashdata('flash_data', 'Harap isi form dengan benar.');
      // $this->session->set_flashdata('flash_data', validation_errors());
      redirect('barang\tambah_barang');

    }else{
      $this->load->model('BarangModel');
      $this->BarangModel->tambahBarang();
      $this->session->set_flashdata('flash_data', 'Data berhasil dimasukkan. Tambah barang masuk sukses.');
      redirect('dashboard');

    }
  }

  function update(){
    if($this->ion_auth->is_admin()){
        $this->load->model('BarangModel');
        $this->data['barang'] = $this->BarangModel->getBarangOnly();

        $this->load->view('template/header');
        $this->load->view('barang\update', $this->data);
    }else{
        return show_error('You have no authorization to view this page.');
    }
  }

  function update_barang(){

    $this->load->model('BarangModel');
    $this->data['barang'] = $this->BarangModel->getBarangTertentu($this->uri->segment(2));

    $this->load->view('template/header');
    $this->load->view('barang/update_barang',$this->data);
  }

  function update_process(){
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
    $this->form_validation->set_rules('jenis_barang', 'jenis_barang', 'required');
    $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
    $this->form_validation->set_rules('harga', 'harga', 'required');

   if ($this->form_validation->run() == FALSE){
    //  $this->session->set_flashdata('flash_data', 'Gagal! Harap isi form dengan lengkap dan benar.');
      $this->session->set_flashdata('flash_data', validation_errors());
     $id = $this->input->post('id_barang');
     redirect('barang/'.$id.'/update');

   }else{
     $this->load->model('BarangModel');
     $this->BarangModel->updateBarang();
     $this->session->set_flashdata('flash_data', 'Data berhasil dimasukkan. Update barang masuk sukses.');
     redirect('barang');

   }

  }



}

?>
