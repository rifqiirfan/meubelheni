<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  function index(){
    if($this->ion_auth->logged_in()){
        $this->load->model('PenjualanModel');
        $this->data['penjualan'] = $this->PenjualanModel->getBarangKeluar();
        $this->load->view('penjualan\penjualan_view', $this->data);
    }else{
        return show_error('You must log in to view this page.');
    }

  }
}

?>
