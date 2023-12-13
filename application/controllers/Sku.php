<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Sku extends RestController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mrest', 'row');
		$this->methods['index_get']['limit'] = 2000;
	}
	public function index_get()
	{
		// $data = $this->db->get('telah_masuk')->result();
		// $this->response($data, RestController::HTTP_OK);

		$id = $this->get('id');
		if ($id === null) {
			$masuk = $this->row->getDataBarang();
		} else {
			$masuk = $this->row->getDataBarang($id);
		}
		if ($masuk) {
			$this->response([
				'status' => true,
				'data' => $masuk
			], RESTController::HTTP_OK);
		} else {
			$this->response([
				'status' => false,
				'pesan' => "Data tidak ditemukan"
			], RESTController::HTTP_NOT_FOUND);
		}
	}
  public function index_delete(){
    $id = $this->delete('id');
    if($id === null){
      $this->response([
				'status' => false,
				'pesan' => 'ID wajib diisi'
			], 500);
    }else {
      if($this->row->deleteDataBarang($id)> 0){
      $this->response([
				'status' => true,
				'id' => $id,
        'pesan' => 'Berhasil dihapus'
			], 204);
      }else{
        $this->response([
				'status' => false,
				'pesan' => 'ID tidak terdaftar'
			], 400);
      }
    }
  }
  // public function index_post(){
  //   $data = [
  //     'code_barang' => $this->post('code'),
  //     'nama_barang' => $this->post('barang'),
  //     'hexa' => 1
  //   ];
  //   if($this->row->tambahDataBarang($data) > 0){
  //     $this->response([
	// 			'status' => true,
	// 			'pesan' => 'Berhasil ditambahkan'
	// 		], RESTController::HTTP_CREATED);
  //   }else{
  //      $this->response([
	// 			'status' => false,
	// 			'pesan' => 'gagal ditambahkan'
	// 		], 400);
  //   }
  // }
}
