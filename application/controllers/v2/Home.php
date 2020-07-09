<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('v2/MDataDeteksi','data_deteksi');
	}

	public function index()
	{
		$data['jumlah_mobil'] = array();
		$data['label'] = array();

		$data['jumlah_mobil_menit10'] = array();
		$data['label_menit10'] = array();

		$data['jumlah_mobil_menit20'] = array();
		$data['label_menit20'] = array();

		$data['jumlah_mobil_menit30'] = array();
		$data['label_menit30'] = array();


		foreach ($this->chart() as $value) {
			array_push($data['jumlah_mobil'], $value['jumlah_mobil']);
			array_push($data['label'], $value['label']);
		}

		foreach ($this->chartBaseOnTime("1") as $value) {
			array_push($data['jumlah_mobil_menit10'], $value['jumlah_mobil']);
			array_push($data['label_menit10'], $value['label']);
		}

		foreach ($this->chartBaseOnTime("2") as $value) {
			array_push($data['jumlah_mobil_menit20'], $value['jumlah_mobil']);
			array_push($data['label_menit20'], $value['label']);
		}

		foreach ($this->chartBaseOnTime("3") as $value) {
			array_push($data['jumlah_mobil_menit30'], $value['jumlah_mobil']);
			array_push($data['label_menit30'], $value['label']);
		}

		$this->load->view('v2/home/index',$data);

	}

	public function chart()
	{
		$data_deteksi = $this->data_deteksi->get();
		$arr_chart = array();
		foreach ($data_deteksi as $value) {
			$arr_temp = array(
				'jumlah_mobil' => $value->waktu1 + $value->waktu2 + $value->waktu3 ,
				'label' => $value->id,
			);
			array_push($arr_chart, $arr_temp);
		}
		return $arr_chart;
	}

	public function chartBaseOnTime($time)
	{
		$data_deteksi = $this->data_deteksi->get();
		$arr_chart_time = array();

		foreach ($data_deteksi as $value) {
			if ($time == "1") {
				$arr_temp = array(
					'jumlah_mobil' => $value->waktu1,
					'label' => $value->id,
				);
			}else if ($time == "2") {
				$arr_temp = array(
					'jumlah_mobil' => $value->waktu2,
					'label' => $value->id,
				);
			}else {
				$arr_temp = array(
					'jumlah_mobil' => $value->waktu3,
					'label' => $value->id,
				);
			}
			
			array_push($arr_chart_time, $arr_temp);
		}

		return $arr_chart_time;
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */