<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peramalan2 extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MAlpha','alpha');
		$this->load->model('MDataDeteksi','data_deteksi');
	}

	public function index()
	{
		$alpha = $this->getAlpha();
		$data_menit_10 = $this->rawDataMenit10();
		$result = array();
		$arr_forecast = array();

		foreach ($alpha as $value) {
			$smoothing1 = $this->smoothing1($data_menit_10, $value->nilai_alpha);
			$smoothing2 = $this->smoothing2($smoothing1, $value->nilai_alpha);
			$konstantaA = $this->konstantaA($smoothing1,$smoothing2);
			$konstantaB = $this->konstantaB($smoothing1, $smoothing2, $value->nilai_alpha);
			$forecast = $this->forecast($konstantaA, $konstantaB);

			$temp = array(
				'smoothing1' => $smoothing1,
				'smoothing2' => $smoothing2,
				'konstantaA' => $konstantaA,
				'konstantaB' => $konstantaB,
				'forecast' => $forecast
			);

			array_push($arr_forecast, $forecast);
			array_push($result, $temp);
		}


		$data['alpha1'] = $result[0];
		$data['alpha1_error'] = $arr_forecast[0];
		$data['data_menit_10'] = $data_menit_10;
		
		$this->load->view('peramalan/index', $data);
		// header('Content-Type: application/json');
		// echo json_encode($forecast_error);
	}

	public function getAlpha()
	{
		$alphas = $this->alpha->get();
		return $alphas;
	}

	function rawDataMenit10()
	{
		$query = $this->data_deteksi->view_jumlah_menit10();
		return $query;
	}

	public function smoothing1($raw_datas,$nilai_alpha)
	{
		$result = array();
		foreach ($raw_datas as $key => $raw_data) {

			if ($key == 0) {
				$data = array(
					"person" => round($raw_data->jumlah_person,3, PHP_ROUND_HALF_DOWN),
					"bicycle" => round($raw_data->jumlah_bicycle,3, PHP_ROUND_HALF_DOWN),
					"car" => round($raw_data->jumlah_car,3, PHP_ROUND_HALF_DOWN),
					"motorbike" => round($raw_data->jumlah_motorbike,3, PHP_ROUND_HALF_DOWN)
				); 
				array_push($result, $data);	
			}else {
				$person = $nilai_alpha * $raw_data->jumlah_person + (1-$nilai_alpha) * $result[$key-1]['person'];
				$bicycle = $nilai_alpha * $raw_data->jumlah_bicycle + (1-$nilai_alpha) * $result[$key-1]['bicycle'];
				$car = $nilai_alpha * $raw_data->jumlah_car + (1-$nilai_alpha) * $result[$key-1]['car'];
				$motorbike = $nilai_alpha * $raw_data->jumlah_motorbike + (1-$nilai_alpha) * $result[$key-1]['motorbike'];

				$data = array(
					'person' => round($person,3, PHP_ROUND_HALF_DOWN),
					'bicycle' => round($bicycle,3, PHP_ROUND_HALF_DOWN),
					'car' => round($car,3, PHP_ROUND_HALF_DOWN),
					'motorbike' => round($motorbike,3, PHP_ROUND_HALF_DOWN)
				);
				array_push($result, $data);
			}
		}
		return $result;
	}

	public function smoothing2($smoothing1,$nilai_alpha)
	{
		$result = array();
		foreach ($smoothing1 as $key => $value) {

			if ($key == 0) {
				$data = array(
					"person" => round($value['person'],3, PHP_ROUND_HALF_DOWN),
					"bicycle" => round($value['bicycle'],3, PHP_ROUND_HALF_DOWN),
					"car" => round($value['car'],3, PHP_ROUND_HALF_DOWN),
					"motorbike" => round($value['motorbike'],3, PHP_ROUND_HALF_DOWN)
				); 
				array_push($result, $data);	
			}else {
				$person = $nilai_alpha * $value['person'] + (1-$nilai_alpha) * $result[$key-1]['person'];
				$bicycle = $nilai_alpha * $value['bicycle'] + (1-$nilai_alpha) * $result[$key-1]['bicycle'];
				$car = $nilai_alpha * $value['car'] + (1-$nilai_alpha) * $result[$key-1]['car'];
				$motorbike = $nilai_alpha * $value['motorbike'] + (1-$nilai_alpha) * $result[$key-1]['motorbike'];

				$data = array(
					'person' => round($person,3, PHP_ROUND_HALF_DOWN),
					'bicycle' => round($bicycle,3, PHP_ROUND_HALF_DOWN),
					'car' => round($car,3, PHP_ROUND_HALF_DOWN),
					'motorbike' => round($motorbike,3, PHP_ROUND_HALF_DOWN)
				);
				array_push($result, $data);
			}
		}
		return $result;
	}

	public function konstantaA($smoothing1,$smoothing2)
	{
		$result = array();

		for ($i = 0; $i < count($smoothing2); $i++) {
			$person = (2*$smoothing1[$i]['person']) - $smoothing2[$i]['person']; 	
			$bicycle = (2*$smoothing1[$i]['bicycle']) - $smoothing2[$i]['bicycle']; 	
			$car = (2*$smoothing1[$i]['car']) - $smoothing2[$i]['car'];
			$motorbike = (2*$smoothing1[$i]['motorbike']) - $smoothing2[$i]['motorbike'];

			$data = array(
				'person' => round($person,3, PHP_ROUND_HALF_DOWN),
				'bicycle' => round($bicycle,3, PHP_ROUND_HALF_DOWN),
				'car' => round($car,3, PHP_ROUND_HALF_DOWN),
				'motorbike' => round($motorbike,3, PHP_ROUND_HALF_DOWN)
			);
			array_push($result, $data);
		}
		return $result;
	}

	public function konstantaB($smoothing1,$smoothing2,$nilai_alpha)
	{
		$result = array();

		for ($i = 0; $i < count($smoothing2); $i++) {
			$person = ($nilai_alpha/(1-$nilai_alpha)) * ($smoothing1[$i]['person'] - $smoothing2[$i]['person']); 	
			$bicycle = ($nilai_alpha/(1-$nilai_alpha)) * ($smoothing1[$i]['bicycle'] - $smoothing2[$i]['bicycle']); 	
			$car = ($nilai_alpha/(1-$nilai_alpha)) * ($smoothing1[$i]['car'] - $smoothing2[$i]['car']); 
			$motorbike = ($nilai_alpha/(1-$nilai_alpha)) * ($smoothing1[$i]['motorbike'] - $smoothing2[$i]['motorbike']); 

			$data = array(
				'person' => round($person,3, PHP_ROUND_HALF_DOWN),
				'bicycle' => round($bicycle,3, PHP_ROUND_HALF_DOWN),
				'car' => round($car,3, PHP_ROUND_HALF_DOWN),
				'motorbike' => round($motorbike,3, PHP_ROUND_HALF_DOWN)
			);
			array_push($result, $data);
		}

		return $result;
	}

	public function forecast($konstantaA, $konstantaB)
	{
		$result = array();

		$data = array(
			'person' => 0,
			'bicycle' => 0,
			'car' => 0,
			'motorbike' => 0
		);

		array_push($result, $data);

		for ($i = 0; $i < count($konstantaB); $i++) {
			$person = $konstantaA[$i]['person'] + $konstantaB[$i]['person']; 	
			$bicycle = $konstantaA[$i]['bicycle'] + $konstantaB[$i]['bicycle']; 	
			$car = $konstantaA[$i]['car'] + $konstantaB[$i]['car']; 	
			$motorbike = $konstantaA[$i]['motorbike'] + $konstantaB[$i]['motorbike']; 	

			$data = array(
				'person' => round($person,3, PHP_ROUND_HALF_DOWN),
				'bicycle' => round($bicycle,3, PHP_ROUND_HALF_DOWN),
				'car' => round($car,3, PHP_ROUND_HALF_DOWN),
				'motorbike' => round($motorbike,3, PHP_ROUND_HALF_DOWN)
			);
			array_push($result, $data);
		}

		return $result;
	}

	public function error()
	{
		
	}
}

/* End of file Peramalan2.php */
/* Location: ./application/controllers/Peramalan2.php */