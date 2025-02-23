<?php
defined('BASEPATH') or exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class Keluar extends RestController
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
			$keluar = $this->row->getKeluar();
		} else {
			$keluar = $this->row->getKeluar($id);
		}
		if ($keluar) {
			$this->response([
				'status' => true,
				'data' => $keluar
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
      if($this->row->deleteKeluar($id)> 0){
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
      'id_po' => $this->post('id_po'),
      'internal' => $this->post('internal'),
      'nomor' => $this->post('nomor'),
      'tanggal' => $this->post('tanggal'),
      'no_pelanggan' => $this->post('no_pelanggan'),
      'code_barang' => $this->post('code_barang'),
      'nama_barang' => $this->post('nama_barang'),
      'stock_barang' => $this->post('stock_barang'),
      'satuan' => $this->post('satuan'),
      'ket' => $this->post('ket'),
      'status_keluar' => $this->post('status_keluar')
    ];
    if($this->row->tambahKeluar($data) > 0){
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