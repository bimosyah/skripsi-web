<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MDataDeteksi','deteksi');
	}

	//cek route.php untuk memanggil fungsi	
	public function insert_jumlah($jumlah_data = null)
	{
		$result = array();

		$jumlah = ($jumlah_data == null ? $this->input->post('jumlah') : $jumlah_data);

		if ($jumlah != "") {
			$query = $this->db->insert('table_data', array('jumlah' => $jumlah));
			if ($query) {
				$result = array(
					'status' => 1,
					'message' => "sukses"
				);
				echo json_encode($result);
			}else {
				$result = array(
					'status' => 0,
					'message' => "gagal"
				);
				echo json_encode($result);
			}
		}else {
			$result = array(
				'status' => 0,
				'message' => "data_kosong"
			);
			echo json_encode($result);
		}
	}

	public function insert_data($jumlah_person,$jumlah_bicycle,$jumlah_car,$jumlah_motorbike)
	{
		$result = array();

		if ($jumlah_person != "" || $jumlah_bicycle != "" || $jumlah_car != "" || $jumlah_motorbike != "") {
			
			$arr_jumlah = array(
				"jumlah_person" => $jumlah_person,
				"jumlah_bicycle" => $jumlah_bicycle,
				"jumlah_car" => $jumlah_car,
				"jumlah_motorbike" => $jumlah_motorbike
			);

			$query = $this->deteksi->save2($arr_jumlah);
			
			if ($query) {
				$result = array(
					'status' => 1,
					'message' => "sukses"
				);
				echo json_encode($result);
			}else {
				$result = array(
					'status' => 0,
					'message' => "gagal"
				);
				echo json_encode($result);
			}
		}else {
			$result = array(
				'status' => 0,
				'message' => "data_kosong"
			);
			echo json_encode($result);
		}
	}

	public function load_data()
	{
		$data = $this->db->get('table_data')->result();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	//cek route.php untuk memanggil fungsi
	public function insert_alpha()
	{
		$result = array();

		$alpha = $this->input->post('alpha');
		if ($alpha != "") {
			$query = $this->db->insert('table_alpha', array('nilai_alpha' => $alpha));
			if ($query) {
				$result = array(
					'status' => 1,
					'message' => "sukses"
				);
				echo json_encode($result);
			}else {
				$result = array(
					'status' => 0,
					'message' => "gagal"
				);
				echo json_encode($result);
			}
		}else {
			$result = array(
				'status' => 0,
				'message' => "data_kosong"
			);
			echo json_encode($result);
		}
	}
}

/* End of file Data.php */
/* Location: ./application/controllers/api/Data.php */