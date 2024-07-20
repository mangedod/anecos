<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mrest extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function getMasuk($id = null)
  {
    if ($id === null) {
      return $this->db->get('telah_masuk')->result_array();
    } else {
      return $this->db->get_where('telah_masuk', ['id_telah_masuk' => $id])->result_array();
    }
  }
  public function deleteMasuk($id){
    $this->db->delete('telah_masuk', ['id_telah_masuk' => $id]);
    return $this->db->affected_rows();
  }

  // ==================== BATAS BARANG MASUK ==================== //

  public function getKeluar($id = null)
  {
    if ($id === null) {
      return $this->db->get('telah_keluar')->result_array();
    } else {
      return $this->db->get_where('telah_keluar', ['id_telah_keluar' => $id])->result_array();
    }
  }
  public function deleteKeluar($id){
    $this->db->delete('telah_keluar', ['id_telah_keluar' => $id]);
    return $this->db->affected_rows();
  }
  public function updateKeluar($data, $id){
    $this->db->update('telah_keluar', $data, ['id_telah_keluar' => $id]);
    return $this->db->affected_rows();
  }
  public function tambahKeluar($data){
    $this->db->insert('telah_keluar', $data);
    return $this->db->affected_rows();
  }
  // ==================== BATAS BARANG KELUAR ==================== //
  public function getPO($id = null)
  {
    if ($id === null) {
      return $this->db->get('po')->result_array();
    } else {
      return $this->db->get_where('po', ['id_po' => $id])->result_array();
    }
  }
  public function deletePO($id){
    $this->db->delete('po', ['id_po' => $id]);
    return $this->db->affected_rows();
  }
  public function updatePO($data, $id){
    $this->db->update('po', $data, ['id_po' => $id]);
    return $this->db->affected_rows();
  }
  public function tambahPO($data){
    $this->db->insert('po', $data);
    return $this->db->affected_rows();
  }
  // ==================== BATAS BARANG PO ==================== //

  public function getDataBarang($id = null)
  {
    if ($id === null) {
      return $this->db->get('migrasi_data')->result_array();
    } else {
      return $this->db->get_where('migrasi_data', ['id_migrasi' => $id])->result_array();
    }
  }
  public function deleteDataBarang($id){
    $this->db->delete('migrasi_data', ['id_migrasi' => $id]);
    return $this->db->affected_rows();
  }
  public function tambahDataBarang($data){
    $this->db->insert('migrasi_data', $data);
    return $this->db->affected_rows();
  }
  // ==================== BATAS DATA BARANG MIGRASI ==================== //

  public function getKategori($id = null)
  {
    if ($id === null) {
      return $this->db->get('inv_kategori')->result_array();
    } else {
      return $this->db->get_where('inv_kategori', ['id_inv_kate' => $id])->result_array();
    }
  }
  public function deleteKategori($id){
    $this->db->delete('inv_kategori', ['id_inv_kate' => $id]);
    return $this->db->affected_rows();
  }
  public function tambahKategori($data){
    $this->db->insert('inv_kategori', $data);
    return $this->db->affected_rows();
  }

  // ==================== BATAS KATEGORI ==================== //

  public function getItem($id = null)
  {
    if ($id === null) {
      return $this->db->get('inv_item')->result_array();
    } else {
      return $this->db->get_where('inv_item', ['id_inv_item' => $id])->result_array();
    }
  }
  public function deleteItem($id){
    $this->db->delete('inv_item', ['id_inv_item' => $id]);
    return $this->db->affected_rows();
  }  
  public function tambahItem($data){
    $this->db->insert('inv_item', $data);
    return $this->db->affected_rows();
  }
  
  public function updateItem($data, $id){
    $this->db->update('telah_masuk', $data, ['id_telah_masuk' => $id]);
    return $this->db->affected_rows();
  }
  // ==================== BATAS ITEM ==================== //

  public function getFinishing($id = null)
  {
    if ($id === null) {
      return $this->db->get('inv_finishing')->result_array();
    } else {
      return $this->db->get_where('inv_finishing', ['id_inv_finishing' => $id])->result_array();
    }
  }
  public function deleteFinishing($id){
    $this->db->delete('inv_finishing', ['id_inv_finishing' => $id]);
    return $this->db->affected_rows();
  }
  public function tambahFinishing($data){
    $this->db->insert('inv_finishing', $data);
    return $this->db->affected_rows();
  }

  // ==================== BATAS FINISHING ==================== //

  public function getWarna($id = null)
  {
    if ($id === null) {
      return $this->db->get('inv_warna')->result_array();
    } else {
      return $this->db->get_where('inv_warna', ['id_inv_warna' => $id])->result_array();
    }
  }
  public function deleteWarna($id){
    $this->db->delete('inv_warna', ['id_inv_warna' => $id]);
    return $this->db->affected_rows();
  }

  // ==================== BATAS WARNA ==================== //
}
