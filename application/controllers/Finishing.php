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
		// $data = $this->db->get('telah_masuk')->result();
		// $this->response($data, RestController::HTTP_OK);

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
}
