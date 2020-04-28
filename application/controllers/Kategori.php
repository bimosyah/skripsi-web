<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MKategori','kategori');
	}

	public function index()
	{
		$data['kategori'] = $this->kategori->get();
		$this->load->view('kategori/index', $data);
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */