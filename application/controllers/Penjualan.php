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

            $this->load->view('template\header');
            $this->load->view('penjualan\penjualan', $this->data);
        }else{
            return show_error('You must log in to view this page.');
        }

    }

    function rekap_barang_keluar(){
      if($this->ion_auth->logged_in()){
          $this->load->model('PenjualanModel');
          $this->data['rekap_barang_keluar'] = $this->PenjualanModel->getRekapBarangKeluar();
          $this->load->view('penjualan\rekap_barang_keluar_view', $this->data);
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

      $this->load->view('template/header');
      $this->load->view('penjualan\catat_penjualan',$this->data);
    }

    function catat_process(){
       $this->load->helper(array('form', 'url'));
       $this->load->library('form_validation');

       $this->form_validation->set_rules('tgl_keluar', 'harga', 'required');

      if ($this->form_validation->run() == FALSE){

        $this->session->set_flashdata('flash_data', validation_errors());
        $id = $this->input->post('id_barang');
        redirect('penjualan/'.$id.'/catat');

      }else{
        $this->load->model('PenjualanModel');
        $this->PenjualanModel->catat_penjualan();
        redirect('dashboard');
      }
    }
}

?>
