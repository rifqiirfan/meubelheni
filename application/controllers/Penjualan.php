<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Penjualan extends CI_Controller{
      function __construct(){
        parent::__construct();
  }

  function index(){
      if($this->ion_auth->logged_in()){
          $this->load->model('PenjualanModel');
          $this->data['barang_keluar'] = $this->PenjualanModel->getBarangKeluar();

          $this->load->view('penjualan\penjualan_view', $this->data);
      }else{
          return show_error('You must log in to view this page.');
      }

  }

  function catat(){
      if($this->ion_auth->logged_in()){

        $this->load->view('penjualan\catat_penjualan_view');
      }else{
        return show_error('You must log in to view this page.');
      }
  }

  // function catat_process(){
  //    $this->load->helper(array('form', 'url'));
  //    $this->load->library('form_validation');
  //    //$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
  //
  //   if ($this->form_validation->run() == FALSE){
  //     echo "Gagal.";
  //   }else{
  //     $this->load->model('PenjualanModel');
  //     $this->PenjualanModel->tambahBarang();
  //     $this->load->view('barang\tambah_view');
  //   }
  // }
}

?>
