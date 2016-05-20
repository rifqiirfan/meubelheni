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


    function catat_penjualan(){
      $id_barang = $this->input->post('id_barang');
      $tgl_keluar = $this->input->post('tgl_keluar');
      $harga = $this->input->post('harga');

      $keterangan = $this->input->post('keterangan');


      $data = array(
        'id_barang' => $id_barang,
        'tgl_keluar' => date('Y-m-d', strtotime($tgl_keluar)),
        'harga' => $harga,

        'keterangan' => $keterangan

      );

      $this->db->insert('barang_keluar', $data);

    }



  }
