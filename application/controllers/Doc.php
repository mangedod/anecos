<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doc extends CI_Controller
{
	public function index()
	{
		$this->load->view('index');
	}
	public function doc()
	{
		$this->load->view('doc');
	}
}
