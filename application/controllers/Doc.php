<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); // Memuat database agar bisa digunakan
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function doc()
	{
		$this->load->view('doc');
	}
	public function daftar()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[keys.email]');
		if ($this->form_validation->run() == false) {
			$this->load->view('doc');
		} else {
			$email = $this->input->post('email', true);
			$key = 'anecos' . rand();
			$data = [
				'email'             => $email,
				'key'               => $key,
				'level'             => 1,
				'ignore_limits'     => 0,
				'is_private_key'    => 0,
				'ip_addresses'      => 1
			];
			$this->db->insert('keys', $data);

			// Kirim email dengan key yang baru dibuat
			$this->_sendEmail($email, $key);

			$this->session->set_flashdata(
				'pesan',
				'<div style="background-color:#24C4E9;color:#000;padding:10px;border-radius:5px;">
            Token key sudah kami kirim ke Email <strong class="text-dark">' . $email . '</strong>, silahkan dicek! </div>'
			);
			redirect('documentations');
		}
	}

	private function _sendEmail($email, $key)
	{
		$config = [
			'protocol'   => 'smtp',
			'smtp_host'  => 'ssl://smtp.googlemail.com',
			'smtp_user'  => 'lensains.official@gmail.com',
			'smtp_pass'  => 'eorufflsgzkrflrr', // Gantilah dengan env atau config
			'smtp_port'  => '465',
			'mailtype'   => 'html',
			'charset'    => 'utf-8',
			'newline'    => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from('lensains.official@gmail.com', 'Ansania Eco System');
		$this->email->to($email);
		$this->email->subject('Token Key ANECOS');

		$message = '
    <div style="background-color:#fff5d1;padding:30px;text-align: center;">
        <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ED058A; border-radius: 10px; font-family: Arial, sans-serif;background-color:#ffffff;">
            <div style="text-align: center;">
                <img style="width: 25%;" src="https://inikah.id/assets/inikah_logo.png" alt="inikah.id" />
            </div>
            <br/><br/>
            <p>Terima kasih telah mendaftarkan token di sistem ANECOS kami. Berikut adalah informasi token key yang dapat Anda gunakan untuk mengakses data dari ANECOS (Ansania Eco System):</p>
            <br/>
            <h3 style="color: #ED058A;">my-token : ' . $key . '</h3>
            <br/><br/>
            <p style="text-align: center;color:#ED058A;"><small><em>Note: Jangan balas email ini. Email ini dikirim secara otomatis dan hanya melakukan koneksi satu arah.</em></small></p>
        </div>
        <p style="text-align: center;font-size:11px;">Terima Kasih<br/>Copyright @ Agus Surahman 2022 - ' . date('Y') . '</p>
    </div>';

		$this->email->message($message);

		if (!$this->email->send()) {
			echo $this->email->print_debugger();
			exit;
		}
	}

}