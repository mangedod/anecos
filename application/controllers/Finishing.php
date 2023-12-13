<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Finishing extends RestController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mrest', 'row');
		$this->methods['index_get']['limit'] = 2000;
	}
	public function index_get()
	{
		$id = $this->get('id');
		if ($id === null) {
			$masuk = $this->row->getFinishing();
		} else {
			$masuk = $this->row->getFinishing($id);
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
      if($this->row->deleteFinishing($id)> 0){
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
      'kode_finishing' => $this->post('code'),
      'finishing' => $this->post('finishing'),
      'act_finishing' => 1
    ];
    if($this->row->tambahFinishing($data) > 0){
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
