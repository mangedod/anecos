<?php
defined('BASEPATH') or exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class Stock extends RestController
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
			$masuk = $this->row->getMasuk();
		} else {
			$masuk = $this->row->getMasuk($id);
		}
		if ($masuk) {
			$this->response([
				'status' => true,
				'data' => $masuk
			], 200);
		} else {
			$this->response([
				'status' => false,
				'pesan' => "Data tidak ditemukan"
			], 404);
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
      if($this->row->deleteMasuk($id)> 0){
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
  public function index_put(){
    $id = $this->put('id');
    $data = [
      'stock_barang' => $this->put('stok')
    ];
    if($this->row->updateItem($data, $id) > 0){
      $this->response([
				'status' => true,
				'pesan' => 'Berhasil diubah'
			], 204);
    }else{
       $this->response([
				'status' => false,
				'pesan' => 'gagal ditambahkan'
			], 400);
    }
  }
}