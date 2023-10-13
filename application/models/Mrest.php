<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mrest extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database(); // Inisialisasi objek database
  }
  public function getMasuk($id = null)
  {
    if ($id === null) {
      return $this->db->get('telah_masuk')->result_array();
    } else {
      return $this->db->get_where('telah_masuk', ['id_telah_masuk' => $id])->result_array();
    }
  }
  public function getDataBarang($id = null)
  {
    if ($id === null) {
      return $this->db->get('migrasi_data')->result_array();
    } else {
      return $this->db->get_where('migrasi_data', ['id_migrasi' => $id])->result_array();
    }
  }
  public function getKategori($id = null)
  {
    if ($id === null) {
      return $this->db->get('inv_kategori')->result_array();
    } else {
      return $this->db->get_where('inv_kategori', ['id_inv_kate' => $id])->result_array();
    }
  }
  public function getItem($id = null)
  {
    if ($id === null) {
      return $this->db->get('inv_item')->result_array();
    } else {
      return $this->db->get_where('inv_item', ['id_inv_item' => $id])->result_array();
    }
  }
  public function getFinishing($id = null)
  {
    if ($id === null) {
      return $this->db->get('inv_finishing')->result_array();
    } else {
      return $this->db->get_where('inv_finishing', ['id_inv_finishing' => $id])->result_array();
    }
  }
  public function getWarna($id = null)
  {
    if ($id === null) {
      return $this->db->get('inv_warna')->result_array();
    } else {
      return $this->db->get_where('inv_warna', ['id_inv_warna' => $id])->result_array();
    }
  }
}
