<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Kategori extends RestController
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
		$id = $this->get('id');
		if ($id === null) {
			$masuk = $this->row->getKategori();
		} else {
			$masuk = $this->row->getKategori($id);
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
      if($this->row->deleteKategori($id)> 0){
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
      'kode_kate' => $this->post('code'),
      'kategori' => $this->post('kategori'),
      'act_kate' => 1
    ];
    if($this->row->tambahKategori($data) > 0){
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
