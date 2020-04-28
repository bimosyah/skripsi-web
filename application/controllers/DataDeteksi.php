<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDeteksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MDataDeteksi','deteksi');
	}

	public function index()
	{
		$data['data_deteksi'] = $this->deteksi->get();
		$this->load->view('data_deteksi/index', $data);			
	}

}

/* End of file DataDeteksi.php */
/* Location: ./application/controllers/DataDeteksi.php */