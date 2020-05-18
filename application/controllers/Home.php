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

		//menit 10
		$data['jumlah_manusia_menit10'] = array();
		$data['jumlah_sepeda_menit10'] = array();
		$data['jumlah_mobil_menit10'] = array();
		$data['jumlah_motor_menit10'] = array();
		$data['label_menit10'] = array();

		//menit 20
		$data['jumlah_manusia_menit20'] = array();
		$data['jumlah_sepeda_menit20'] = array();
		$data['jumlah_mobil_menit20'] = array();
		$data['jumlah_motor_menit20'] = array();
		$data['label_menit20'] = array();

		//menit30
		$data['jumlah_manusia_menit30'] = array();
		$data['jumlah_sepeda_menit30'] = array();
		$data['jumlah_mobil_menit30'] = array();
		$data['jumlah_motor_menit30'] = array();
		$data['label_menit30'] = array();

		foreach ($this->chart() as $value) {
			array_push($data['jumlah_manusia'], $value['jumlah_manusia']);
			array_push($data['jumlah_sepeda'], $value['jumlah_sepeda']);
			array_push($data['jumlah_mobil'], $value['jumlah_mobil']);
			array_push($data['jumlah_motor'], $value['jumlah_motor']);
			array_push($data['label'], $value['label']);
		}

		//menit10
		foreach ($this->chart_menit($this->data_deteksi->view_jumlah_menit10()) as $value) {
			array_push($data['jumlah_manusia_menit10'], $value['jumlah_manusia']);
			array_push($data['jumlah_sepeda_menit10'], $value['jumlah_sepeda']);
			array_push($data['jumlah_mobil_menit10'], $value['jumlah_mobil']);
			array_push($data['jumlah_motor_menit10'], $value['jumlah_motor']);
			array_push($data['label_menit10'], $value['label']);
		}

		//menit20
		foreach ($this->chart_menit($this->data_deteksi->view_jumlah_menit20()) as $value) {
			array_push($data['jumlah_manusia_menit20'], $value['jumlah_manusia']);
			array_push($data['jumlah_sepeda_menit20'], $value['jumlah_sepeda']);
			array_push($data['jumlah_mobil_menit20'], $value['jumlah_mobil']);
			array_push($data['jumlah_motor_menit20'], $value['jumlah_motor']);
			array_push($data['label_menit20'], $value['label']);
		}

		//menit30
		foreach ($this->chart_menit($this->data_deteksi->view_jumlah_menit30()) as $value) {
			array_push($data['jumlah_manusia_menit30'], $value['jumlah_manusia']);
			array_push($data['jumlah_sepeda_menit30'], $value['jumlah_sepeda']);
			array_push($data['jumlah_mobil_menit30'], $value['jumlah_mobil']);
			array_push($data['jumlah_motor_menit30'], $value['jumlah_motor']);
			array_push($data['label_menit30'], $value['label']);
		}

		$this->load->view('home/index',$data);

		// echo json_encode($this->chart_menit($this->data_deteksi->view_jumlah_menit10()));
		// echo "<br>";
		// echo json_encode($this->chart_menit($this->data_deteksi->view_jumlah_menit20()));
		// echo "<br>";
		// echo json_encode($this->chart_menit($this->data_deteksi->view_jumlah_menit30()));
		// echo "<br>";
	}

	public function chart()
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

	public function chart_menit($data)
	{
		$data_deteksi = $data;
		$arr_chart = array();
		foreach ($data_deteksi as $value) {
			$arr_temp = array(
				'jumlah_manusia' => $value->jumlah_person,
				'jumlah_sepeda' => $value->jumlah_bicycle,
				'jumlah_mobil' => $value->jumlah_car,
				'jumlah_motor' => $value->jumlah_motorbike,
				'tanggal' => $value->tanggal,
				'jam' => $value->jam,
				'label' => $value->tanggal,
			);
			array_push($arr_chart, $arr_temp);
		}

		return $arr_chart;
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */