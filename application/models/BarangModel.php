<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class BarangModel extends CI_Model{
    function __construct(){
      parent::__construct();
    }

    function getBarang(){
      $query = $this->db->select('*')->from('barang b')->join('barang_masuk bm', 'b.id_barang = bm.id_barang')->get()->result();
      return $query;
    }

    function getBarangOnly(){
      $query = $this->db->select('*')->from('barang')->get()->result();
      return $query;
    }

    function getBarangTertentu($id_barang){
      // $query = $this->db->select('*')->from('barang b')->join('barang_keluar bk', 'b.id_barang = bk.id_barang')->where('b.id_barang', $id_barang)->get()->result();
      $query = $this->db->select('*')->from('barang')->where('id_barang', $id_barang)->get()->result();

      return $query;
    }

    function getBarangMasuk(){
      $query = $this->db->select('*')->from('barang b')->join('barang_masuk bm', 'b.id_barang = bm.id_barang')->where('MONTH(tgl_masuk)', date('m'))->get()->result();

      return $query;
    }

    function getBarangKeluar(){
      $query = $this->db->select('*')->from('barang b')->join('barang_keluar bk', 'b.id_barang = bk.id_barang')->where('MONTH(tgl_keluar)', date('m'))->get()->result();
      return $query;

    }

    function tambahBarang(){

      //fetch data from form
      $nama_barang = $this->input->post('nama_barang');
      $jenis_barang = $this->input->post('jenis_barang');
      $tgl_masuk = $this->input->post('tgl_masuk');
      $harga = $this->input->post('harga');
      $jumlah = $this->input->post('jumlah');
      $keterangan = $this->input->post('keterangan');

      //store data to array to prep for database query
      $data = array(
        'nama_barang' => $nama_barang,
        'jenis_barang' => $jenis_barang
      );
      $this->db->insert('Barang', $data);
      $last_id = $this->db->insert_id();

      $data = array(
        'id_barang' => $last_id,
        'tgl_masuk' => date('Y-m-d', strtotime($tgl_masuk)),
        'harga' => $harga,
        'jumlah' => $jumlah,
        'keterangan' => $keterangan
      );

      $this->db->insert('barang_masuk', $data);

    }

    function updateBarang(){
      $id_barang = $this->input->post('id_barang');
      $tgl_masuk = $this->input->post('tgl_masuk');
      $harga = $this->input->post('harga');
      $jumlah = $this->input->post('jumlah');
      $keterangan = $this->input->post('keterangan');


      $data = array(
        'id_barang' => $id_barang,
        'tgl_masuk' => date('Y-m-d', strtotime($tgl_masuk)),
        'harga' => $harga,
        'jumlah' => $jumlah,
        'keterangan' => $keterangan

      );

      $this->db->insert('barang_masuk', $data);
    }
  }
?>
