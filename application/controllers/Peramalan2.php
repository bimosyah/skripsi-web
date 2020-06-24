<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peramalan2 extends CI_Controller {

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
		$data_menit_20 = $this->rawDataMenit20();
		$data_menit_30 = $this->rawDataMenit30();

		$result_menit_10 = array();
		$result_menit_20 = array();
		$result_menit_30 = array();
		$error_result_menit_10 = array();
		$error_result_menit_20 = array();
		$error_result_menit_30 = array();

		$forecast_menit10 = array();
		$forecast_menit20 = array();
		$forecast_menit30 = array();

		//peramalan menit 10
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

			array_push($forecast_menit10, $forecast);
			array_push($result_menit_10, $temp);
		}

		//peramalan menit 20
		foreach ($alpha as $value) {
			$smoothing1 = $this->smoothing1($data_menit_20, $value->nilai_alpha);
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

			array_push($forecast_menit20, $forecast);
			array_push($result_menit_20, $temp);
		}

		//peramalan menit 30
		foreach ($alpha as $value) {
			$smoothing1 = $this->smoothing1($data_menit_30, $value->nilai_alpha);
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

			array_push($forecast_menit30, $forecast);
			array_push($result_menit_30, $temp);
		}

		//error peramalan menit 10
		for ($i = 0; $i < 9; $i++) {
			
			$data = array(
				'person' => $this->error_orang($data_menit_10,$forecast_menit10[$i]),
				'bicycle' =>$this->error_sepeda($data_menit_10,$forecast_menit10[$i]),
				'car' =>$this->error_mobil($data_menit_10,$forecast_menit10[$i]),
				'motorbike' =>$this->error_motor($data_menit_10,$forecast_menit10[$i])
			);
			array_push($error_result_menit_10, $data);
		}

		//error peramalan menit 20
		for ($i = 0; $i < 9; $i++) {
			
			$data = array(
				'person' => $this->error_orang($data_menit_20,$forecast_menit20[$i]),
				'bicycle' =>$this->error_sepeda($data_menit_20,$forecast_menit20[$i]),
				'car' =>$this->error_mobil($data_menit_20,$forecast_menit20[$i]),
				'motorbike' =>$this->error_motor($data_menit_20,$forecast_menit20[$i])
			);
			array_push($error_result_menit_20, $data);
		}

		//error peramalan menit 30
		for ($i = 0; $i < 9; $i++) {
			
			$data = array(
				'person' => $this->error_orang($data_menit_30,$forecast_menit30[$i]),
				'bicycle' =>$this->error_sepeda($data_menit_30,$forecast_menit30[$i]),
				'car' =>$this->error_mobil($data_menit_30,$forecast_menit30[$i]),
				'motorbike' =>$this->error_motor($data_menit_30,$forecast_menit30[$i])
			);
			array_push($error_result_menit_30, $data);
		}

		$min_mape_menit_10 = $this->minMape($error_result_menit_10);
		$min_mape_menit_20 = $this->minMape($error_result_menit_20);
		$min_mape_menit_30 = $this->minMape($error_result_menit_30);

		$data['alpha1'] = $result_menit_10[0];
		$data['alpha2'] = $result_menit_10[1];
		$data['alpha3'] = $result_menit_10[2];
		$data['alpha4'] = $result_menit_10[3];
		$data['alpha5'] = $result_menit_10[4];
		$data['alpha6'] = $result_menit_10[5];
		$data['alpha7'] = $result_menit_10[6];
		$data['alpha8'] = $result_menit_10[7];
		$data['alpha9'] = $result_menit_10[8];

		$data['error_alpha1'] = $error_result_menit_10[0];
		$data['error_alpha2'] = $error_result_menit_10[1];
		$data['error_alpha3'] = $error_result_menit_10[2];
		$data['error_alpha4'] = $error_result_menit_10[3];
		$data['error_alpha5'] = $error_result_menit_10[4];
		$data['error_alpha6'] = $error_result_menit_10[5];
		$data['error_alpha7'] = $error_result_menit_10[6];
		$data['error_alpha8'] = $error_result_menit_10[7];
		$data['error_alpha9'] = $error_result_menit_10[8];

		$data['alpha1_2'] = $result_menit_20[0];
		$data['alpha2_2'] = $result_menit_20[1];
		$data['alpha3_2'] = $result_menit_20[2];
		$data['alpha4_2'] = $result_menit_20[3];
		$data['alpha5_2'] = $result_menit_20[4];
		$data['alpha6_2'] = $result_menit_20[5];
		$data['alpha7_2'] = $result_menit_20[6];
		$data['alpha8_2'] = $result_menit_20[7];
		$data['alpha9_2'] = $result_menit_20[8];

		$data['error_alpha1_2'] = $error_result_menit_20[0];
		$data['error_alpha2_2'] = $error_result_menit_20[1];
		$data['error_alpha3_2'] = $error_result_menit_20[2];
		$data['error_alpha4_2'] = $error_result_menit_20[3];
		$data['error_alpha5_2'] = $error_result_menit_20[4];
		$data['error_alpha6_2'] = $error_result_menit_20[5];
		$data['error_alpha7_2'] = $error_result_menit_20[6];
		$data['error_alpha8_2'] = $error_result_menit_20[7];
		$data['error_alpha9_2'] = $error_result_menit_20[8];

		$data['alpha1_3'] = $result_menit_30[0];
		$data['alpha2_3'] = $result_menit_30[1];
		$data['alpha3_3'] = $result_menit_30[2];
		$data['alpha4_3'] = $result_menit_30[3];
		$data['alpha5_3'] = $result_menit_30[4];
		$data['alpha6_3'] = $result_menit_30[5];
		$data['alpha7_3'] = $result_menit_30[6];
		$data['alpha8_3'] = $result_menit_30[7];
		$data['alpha9_3'] = $result_menit_30[8];

		$data['error_alpha1_3'] = $error_result_menit_30[0];
		$data['error_alpha2_3'] = $error_result_menit_30[1];
		$data['error_alpha3_3'] = $error_result_menit_30[2];
		$data['error_alpha4_3'] = $error_result_menit_30[3];
		$data['error_alpha5_3'] = $error_result_menit_30[4];
		$data['error_alpha6_3'] = $error_result_menit_30[5];
		$data['error_alpha7_3'] = $error_result_menit_30[6];
		$data['error_alpha8_3'] = $error_result_menit_30[7];
		$data['error_alpha9_3'] = $error_result_menit_30[8];
		
		$data['data_menit_10'] = $data_menit_10;
		$data['data_menit_20'] = $data_menit_20;
		$data['data_menit_30'] = $data_menit_30;

		$data['mape_10'] = $error_result_menit_10;
		$data['mape_20'] = $error_result_menit_20;
		$data['mape_30'] = $error_result_menit_30;

		$data['min_mape_menit_10'] = $min_mape_menit_10;
		$data['min_mape_menit_20'] = $min_mape_menit_20;
		$data['min_mape_menit_30'] = $min_mape_menit_30;
		
		$this->load->view('peramalan/index', $data);
		// header('Content-Type: application/json');
		// echo json_encode($minMape);

		// header('Content-Type: application/json');
		// echo json_encode($error_result_menit_20);
	}


	public function minMape($error_result_menit)
	{
		$arr_mape_orang = array();
		$arr_mape_sepeda = array();
		$arr_mape_mobil = array();
		$arr_mape_motor = array();

		for ($i = 0; $i < 9; $i++) {
			array_push($arr_mape_orang, $error_result_menit[$i]['person']['mape']);
			array_push($arr_mape_sepeda, $error_result_menit[$i]['bicycle']['mape']);
			array_push($arr_mape_mobil, $error_result_menit[$i]['car']['mape']);
			array_push($arr_mape_motor, $error_result_menit[$i]['motorbike']['mape']);
		}

		$min_orang = min($arr_mape_orang);
		$min_sepeda = min($arr_mape_sepeda);
		$min_mobil = min($arr_mape_mobil);
		$min_motor = min($arr_mape_motor);
		
		$array_mape_min = array(
			'min_orang' => $min_orang,
			'min_sepeda' => $min_sepeda,
			'min_mobil' => $min_mobil,
			'min_motor' => $min_motor 
		);

		return $array_mape_min;
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

	function rawDataMenit20()
	{
		$query = $this->data_deteksi->view_jumlah_menit20();
		return $query;
	}

	function rawDataMenit30()
	{
		$query = $this->data_deteksi->view_jumlah_menit30();
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
				'person' => round($person),
				'bicycle' => round($bicycle),
				'car' => round($car),
				'motorbike' => round($motorbike)
			);
			array_push($result, $data);
		}

		return $result;
	}

	public function error_orang($data_per_menit, $forecast)
	{
		$arr_temp = array();
		$jumlah_pe = 0;
		$mape = 0;
		for ($i = 0; $i < 7; $i++) {
			
			$error = $data_per_menit[$i]->jumlah_person - $forecast[$i+1]['person'];
			$abs = abs($error);
			$pe = ($i == 0 ? 0 : $this->iferror($data_per_menit[$i]->jumlah_person, $abs) * 100);
			$jumlah_pe += $pe;
			
			$temp = array(
				'error' => round($error,3),
				'abs' => round($abs,3),
				'pe' => round($pe,3),
			);
			array_push($arr_temp, $temp);
		}

		$mape = $jumlah_pe / 7;

		$data = array(
			'mape' => round($mape,2),
			'jumlah_pe' => round($jumlah_pe,2),
			'data' => $arr_temp
		);

		return $data;
	}

	public function error_sepeda($data_per_menit, $forecast)
	{
		$arr_temp = array();
		$jumlah_pe = 0;
		$mape = 0;
		for ($i = 0; $i < 7; $i++) {
			
			$error = $data_per_menit[$i]->jumlah_bicycle - $forecast[$i+1]['bicycle'];
			$abs = abs($error);
			$pe = ($i == 0 ? 0 : $this->iferror($data_per_menit[$i]->jumlah_bicycle, $abs) * 100);
			$jumlah_pe += $pe;
			
			$temp = array(
				'error' => round($error,3),
				'abs' => round($abs,3),
				'pe' => round($pe,3),
			);
			array_push($arr_temp, $temp);
		}

		$mape = $jumlah_pe / 7;

		$data = array(
			'mape' => round($mape,2),
			'jumlah_pe' => round($jumlah_pe,2),
			'data' => $arr_temp
		);

		return $data;
	}

	public function error_mobil($data_per_menit, $forecast)
	{
		$arr_temp = array();
		$jumlah_pe = 0;
		$mape = 0;
		for ($i = 0; $i < 7; $i++) {
			
			$error = $data_per_menit[$i]->jumlah_car - $forecast[$i+1]['car'];
			$abs = abs($error);
			$pe = ($i == 0 ? 0 : $this->iferror($data_per_menit[$i]->jumlah_car, $abs) * 100);
			$jumlah_pe += $pe;
			
			$temp = array(
				'error' => round($error,3),
				'abs' => round($abs,3),
				'pe' => round($pe,3),
			);
			array_push($arr_temp, $temp);
		}

		$mape = $jumlah_pe / 7;

		$data = array(
			'mape' => round($mape,2),
			'jumlah_pe' => round($jumlah_pe,2),
			'data' => $arr_temp
		);

		return $data;
	}

	public function error_motor($data_per_menit, $forecast)
	{
		$arr_temp = array();
		$jumlah_pe = 0;
		$mape = 0;
		for ($i = 0; $i < 7; $i++) {
			
			$error = $data_per_menit[$i]->jumlah_motorbike - $forecast[$i+1]['motorbike'];
			$abs = abs($error);
			$pe = ($i == 0 ? 0 : $this->iferror($data_per_menit[$i]->jumlah_motorbike, $abs) * 100);
			$jumlah_pe += $pe;
			
			$temp = array(
				'error' => round($error,3),
				'abs' => round($abs,3),
				'pe' => round($pe,3),
			);
			array_push($arr_temp, $temp);
		}

		$mape = $jumlah_pe / 7;

		$data = array(
			'mape' => round($mape,2),
			'jumlah_pe' => round($jumlah_pe,2),
			'data' => $arr_temp
		);

		return $data;
	}

	public function iferror($volume,$abs)
	{
		if ($volume == 0) {
			return 0;
		}else {
			return $abs/$volume;
		}
	}

}

/* End of file Peramalan2.php */
/* Location: ./application/controllers/Peramalan2.php */