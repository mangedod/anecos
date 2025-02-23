<?php
defined('BASEPATH') or exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class Po extends RestController
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
			$po = $this->row->getPO();
		} else {
			$po = $this->row->getPO($id);
		}
		if ($po) {
			$this->response([
				'status' => true,
				'data' => $po
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
      if($this->row->deletePO($id)> 0){
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
        'id_outlet' => $this->post('id_outlet'),
        'internal' => $this->post('internal'),
        'kurir' => $this->post('kurir'),
        'tanggal_po' => $this->post('tanggal'),
        'no_sj' => $this->post('nomor'),
        'no_po' => $this->post('no_pelanggan'),
        'ket' => $this->post('ket'),
        'status_po' => $this->post('status_po')
    ];
    if($this->row->tambahPO($data) > 0){
        $this->response([
            'status' => true,
            'pesan' => 'Berhasil ditambahkan'
        ], RESTController::HTTP_CREATED);
    }else{
        $this->response([
            'status' => false,
            'pesan' => 'Gagal ditambahkan. Terjadi kesalahan internal.'
        ], RESTController::HTTP_INTERNAL_SERVER_ERROR);
    }
}

}