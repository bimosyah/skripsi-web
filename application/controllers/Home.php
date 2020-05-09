<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MDataDeteksi','data_deteksi');
	}

	public function index()
	{
		$data['jumlah_manusia'] = array();
		$data['jumlah_sepeda'] = array();
		$data['jumlah_mobil'] = array();
		$data['jumlah_motor'] = array();
		$data['label'] = array();

		foreach ($this->load_chart() as $value) {
			array_push($data['jumlah_manusia'], $value['jumlah_manusia']);
			array_push($data['jumlah_sepeda'], $value['jumlah_sepeda']);
			array_push($data['jumlah_mobil'], $value['jumlah_mobil']);
			array_push($data['jumlah_motor'], $value['jumlah_motor']);
			array_push($data['label'], $value['label']);
		}

		$this->load->view('home/index',$data);
	}

	public function load_chart()
	{
		$data_deteksi = $this->data_deteksi->view_jumlah_per_hari();
		$arr_chart = array();
		foreach ($data_deteksi as $value) {
			$arr_temp = array(
				'jumlah_manusia' => $value->jumlah_person,
				'jumlah_sepeda' => $value->jumlah_bicycle,
				'jumlah_mobil' => $value->jumlah_car,
				'jumlah_motor' => $value->jumlah_motorbike,
				'tanggal' => $value->tanggal,
				'label' => $value->tanggal,
			);
			array_push($arr_chart, $arr_temp);
		}

		return $arr_chart;

	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */