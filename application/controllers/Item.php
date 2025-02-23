<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Item extends RestController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mrest', 'row');
		$this->methods['index_get']['limit'] = 20;
		$this->methods['index_delete']['limit'] = 2;
		$this->methods['index_put']['limit'] = 2;
	}
	public function index_get()
	{
		// $data = $this->db->get('telah_masuk')->result();
		// $this->response($data, RestController::HTTP_OK);

		$id = $this->get('id');
		if ($id === null) {
			$masuk = $this->row->getItem();
		} else {
			$masuk = $this->row->getItem($id);
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
      if($this->row->deleteItem($id)> 0){
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
  public function index_post(){
    $data = [
      'kode_item' => $this->post('code'),
      'item' => $this->post('item'),
      'act_item' => 1
    ];
    if($this->row->tambahItem($data) > 0){
      $this->response([
				'status' => true,
				'pesan' => 'Berhasil ditambahkan'
			], RESTController::HTTP_CREATED);
    }else{
       $this->response([
				'status' => false,
				'pesan' => 'gagal ditambahkan'
			], 400);
    }
  }
}
