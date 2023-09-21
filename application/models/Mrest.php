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
}
