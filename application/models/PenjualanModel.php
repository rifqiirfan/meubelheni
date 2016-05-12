<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class PenjualanModel extends CI_Model{
    function __construct(){
      parent::__construct();
    }

    function getBarangKeluar(){
      $query = $this->db->select('*')->from('barang b')->join('barang_keluar bk', 'b.id_barang = bk.id_barang')->get()->result();
      return $query;
    }

    

  }
