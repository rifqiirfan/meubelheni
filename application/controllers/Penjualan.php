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
          $this->load->model('BarangModel');
          $this->data['barang'] = $this->BarangModel->getBarangOnly();

          $this->load->view('penjualan\catat_view', $this->data);
        }else{
          return show_error('You must log in to view this page.');
        }
    }


    function catat_penjualan(){
      $this->load->model('BarangModel');
      $this->data['barang'] = $this->BarangModel->getBarangTertentu($this->uri->segment(2));

      $this->load->view('penjualan\catat_penjualan_view',$this->data);
    }

    function catat_process(){
       $this->load->helper(array('form', 'url'));
       $this->load->library('form_validation');
       
       $this->form_validation->set_rules('tgl_keluar', 'harga', 'required');

      if ($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('flash_data', 'Harap isi form dengan benar.');
        redirect('penjualan\catat_penjualan');
      }else{
        $this->load->model('PenjualanModel');
        $this->PenjualanModel->catat_penjualan();
        redirect('penjualan/catat');
      }
    }
}

?>
