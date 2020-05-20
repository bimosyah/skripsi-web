<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peramalan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MDataDeteksi','data_deteksi');
		$this->load->model('MAlpha','alpha');
	}

	// public function index()
	// {
	// 	$raw_datas = $this->getAllData();
	// 	$alphas = $this->getAlpha();
		
	// 	$result = array();
	// 	$result_forecast = array();

	// 	foreach ($alphas as $value) {
	// 		$smoothing1 = $this->smoothing1($raw_datas, $value->nilai_alpha);
	// 		$smoothing2 = $this->smoothing2($smoothing1, $value->nilai_alpha);
	// 		$konstantaA = $this->konstantaA($smoothing1,$smoothing2);
	// 		$konstantaB = $this->konstantaB($smoothing1,$smoothing2,$value->nilai_alpha);
	// 		$forecast = $this->forecast($konstantaA, $konstantaB);

	// 		$temp = array(
	// 			'smoothing1' => $smoothing1,
	// 			'smoothing2' => $smoothing2,
	// 			'konstantaA' => $konstantaA,
	// 			'konstantaB' => $konstantaB,
	// 			'forecast' => $forecast
	// 		);

	// 		$temp2 = array(
	// 			'alpha' => $value->nilai_alpha,
	// 			'forecast' => $forecast
	// 		);

	// 		array_push($result, $temp);
	// 		array_push($result_forecast, $temp2);
	// 	}


	// 	$data['result_forecast'] = $result_forecast;

	// 	$data['alpha1'] = $result[0];
	// 	$data['alpha2'] = $result[1];
	// 	$data['alpha3'] = $result[2];
	// 	$data['alpha4'] = $result[3];
	// 	$data['alpha5'] = $result[4];
	// 	$data['alpha6'] = $result[5];
	// 	$data['alpha7'] = $result[6];
	// 	$data['alpha8'] = $result[7];
	// 	$data['alpha9'] = $result[8];

	// 	// header('Content-Type: application/json');
	// 	// echo json_encode($data);
	// 	$data['raw_data'] = $this->getAllData();
	// 	$this->load->view('peramalan/index', $data);
	// }

	// public function tes()
	// {
	// 	$raw_datas = $this->getAllData();
	// 	$alphas = $this->getAlpha();
		
	// 	$result = array();
	// 	$result_forecast = array();

	// 	foreach ($alphas as $value) {
	// 		$smoothing1 = $this->smoothing1($raw_datas, $value->nilai_alpha);
	// 		$smoothing2 = $this->smoothing2($smoothing1, $value->nilai_alpha);
	// 		$konstantaA = $this->konstantaA($smoothing1,$smoothing2);
	// 		$konstantaB = $this->konstantaB($smoothing1,$smoothing2,$value->nilai_alpha);
	// 		$forecast = $this->forecast($konstantaA, $konstantaB);

	// 		$temp = array(
	// 			'smoothing1' => $smoothing1,
	// 			'smoothing2' => $smoothing2,
	// 			'konstantaA' => $konstantaA,
	// 			'konstantaB' => $konstantaB,
	// 			'forecast' => $forecast
	// 		);

	// 		$temp2 = array(
	// 			'alpha' => $value->nilai_alpha,
	// 			'forecast' => $forecast
	// 		);

	// 		array_push($result_forecast, $temp2);

	// 		array_push($result, $temp);
	// 	}

	// 	header('Content-Type: application/json');

	// 	$data['result_forecast'] = $result_forecast;
		
	// 	$data['alpha1'] = $result[0];
	// 	$data['alpha2'] = $result[1];
	// 	$data['alpha3'] = $result[2];
	// 	$data['alpha4'] = $result[3];
	// 	$data['alpha5'] = $result[4];
	// 	$data['alpha6'] = $result[5];
	// 	$data['alpha7'] = $result[6];
	// 	$data['alpha8'] = $result[7];
	// 	$data['alpha9'] = $result[8];

	// 	echo json_encode($data['result_forecast']);
	// }


	// public function getAlpha()
	// {
	// 	$alphas = $this->alpha->get();
	// 	return $alphas;
	// }

	// public function getAllData(){
	// 	$raw_data = $this->data_deteksi->view_jumlah_per_hari();
	// 	return $raw_data;
	// }

	// public function smoothing1($raw_datas,$nilai_alpha)
	// {
	// 	$result = array();
	// 	foreach ($raw_datas as $key => $raw_data) {

	// 		if ($key == 0) {
	// 			$data = array(
	// 				"person" => $raw_data->jumlah_person,
	// 				"bicycle" => $raw_data->jumlah_bicycle,
	// 				"car" => $raw_data->jumlah_car,
	// 				"motorbike" => $raw_data->jumlah_motorbike
	// 			); 
	// 			array_push($result, $data);	
	// 		}else {
	// 			$person = $nilai_alpha * $raw_data->jumlah_person + (1-$nilai_alpha) * $result[$key-1]['person'];
	// 			$bicycle = $nilai_alpha * $raw_data->jumlah_bicycle + (1-$nilai_alpha) * $result[$key-1]['bicycle'];
	// 			$car = $nilai_alpha * $raw_data->jumlah_car + (1-$nilai_alpha) * $result[$key-1]['car'];
	// 			$motorbike = $nilai_alpha * $raw_data->jumlah_motorbike + (1-$nilai_alpha) * $result[$key-1]['motorbike'];

	// 			$data = array(
	// 				'person' => $person,
	// 				'bicycle' => $bicycle,
	// 				'car' => $car,
	// 				'motorbike' => $motorbike
	// 			);
	// 			array_push($result, $data);
	// 		}
	// 	}
	// 	return $result;
	// }

	// public function smoothing2($smoothing1,$nilai_alpha)
	// {
	// 	$result = array();
	// 	foreach ($smoothing1 as $key => $value) {

	// 		if ($key == 0) {
	// 			$data = array(
	// 				"person" => $value['person'],
	// 				"bicycle" => $value['bicycle'],
	// 				"car" => $value['car'],
	// 				"motorbike" => $value['motorbike']
	// 			); 
	// 			array_push($result, $data);	
	// 		}else {
	// 			$person = $nilai_alpha * $value['person'] + (1-$nilai_alpha) * $result[$key-1]['person'];
	// 			$bicycle = $nilai_alpha * $value['bicycle'] + (1-$nilai_alpha) * $result[$key-1]['bicycle'];
	// 			$car = $nilai_alpha * $value['car'] + (1-$nilai_alpha) * $result[$key-1]['car'];
	// 			$motorbike = $nilai_alpha * $value['motorbike'] + (1-$nilai_alpha) * $result[$key-1]['motorbike'];

	// 			$data = array(
	// 				'person' => $person,
	// 				'bicycle' => $bicycle,
	// 				'car' => $car,
	// 				'motorbike' => $motorbike
	// 			);
	// 			array_push($result, $data);
	// 		}
	// 	}
	// 	return $result;
	// }

	// public function konstantaA($smoothing1,$smoothing2)
	// {
	// 	$result = array();

	// 	for ($i = 0; $i < count($smoothing2); $i++) {
	// 		$person = (2*$smoothing1[$i]['person']) - $smoothing2[$i]['person']; 	
	// 		$bicycle = (2*$smoothing1[$i]['bicycle']) - $smoothing2[$i]['bicycle']; 	
	// 		$car = (2*$smoothing1[$i]['car']) - $smoothing2[$i]['car'];
	// 		$motorbike = (2*$smoothing1[$i]['motorbike']) - $smoothing2[$i]['motorbike'];

	// 		$data = array(
	// 			'person' => $person,
	// 			'bicycle' => $bicycle,
	// 			'car' => $car,
	// 			'motorbike' => $motorbike
	// 		);
	// 		array_push($result, $data);
	// 	}
	// 	return $result;
	// }

	// public function konstantaB($smoothing1,$smoothing2,$nilai_alpha)
	// {
	// 	$result = array();

	// 	for ($i = 0; $i < count($smoothing2); $i++) {
	// 		$person = ($nilai_alpha/(1-$nilai_alpha)) * ($smoothing1[$i]['person'] - $smoothing2[$i]['person']); 	
	// 		$bicycle = ($nilai_alpha/(1-$nilai_alpha)) * ($smoothing1[$i]['bicycle'] - $smoothing2[$i]['bicycle']); 	
	// 		$car = ($nilai_alpha/(1-$nilai_alpha)) * ($smoothing1[$i]['car'] - $smoothing2[$i]['car']); 
	// 		$motorbike = ($nilai_alpha/(1-$nilai_alpha)) * ($smoothing1[$i]['motorbike'] - $smoothing2[$i]['motorbike']); 

	// 		$data = array(
	// 			'person' => $person,
	// 			'bicycle' => $bicycle,
	// 			'car' => $car,
	// 			'motorbike' => $motorbike
	// 		);
	// 		array_push($result, $data);
	// 	}

	// 	return $result;
	// }

	// public function forecast($konstantaA, $konstantaB)
	// {
	// 	$result = array();

	// 	$person = $konstantaA[count($konstantaA)-1]['person'] - $konstantaB[count($konstantaB)-1]['person']; 	
	// 	$bicycle = $konstantaA[count($konstantaA)-1]['bicycle'] - $konstantaB[count($konstantaB)-1]['bicycle']; 	
	// 	$car = $konstantaA[count($konstantaA)-1]['car'] - $konstantaB[count($konstantaB)-1]['car']; 	
	// 	$motorbike = $konstantaA[count($konstantaA)-1]['motorbike'] - $konstantaB[count($konstantaB)-1]['motorbike']; 	

	// 	$data = array(
	// 		'person' => $person,
	// 		'bicycle' => $bicycle,
	// 		'car' => $car,
	// 		'motorbike' => $motorbike
	// 	);
	// 	array_push($result, $data);

	// 	return $result;
	// }

	// //tidak terpakai
	// public function double_exponential()
	// {
	// 	//ambil data dari database
	// 	$get_all_data = $this->db->get('table_data')->result();
	// 	//ambil nilai alpha dari database
	// 	$get_alpha = $this->db->get('table_alpha')->result();
	// 	//array untuk simpan data dari database
	// 	$array_data = array();
	// 	//array simpan nilai s't
	// 	$array_st = array();
	// 	//array simpan nilai s''t
	// 	$array_st2 = array();
	// 	//var nilai alpha
	// 	$nilai_alpha = 0;
	// 	//array simpan nilai at
	// 	$array_at = array();
	// 	//array simpan nilai bt
	// 	$array_bt = array();
	// 	//var hasil
	// 	$hasil = 0;
	// 	//var nilai m;
	// 	$m = 1;

	// 	//ambil nilai alpha dan set pada variable $nilai_alpha
	// 	foreach ($get_alpha as $value) {
	// 		$nilai_alpha = $value->nilai_alpha;
	// 	}

	// 	//ekstrak data dari database dan dimasukkan pada array
	// 	foreach ($get_all_data as $value) {
	// 		//push data ke array
	// 		array_push($array_data, $value->jumlah);
	// 	}

	// 	//for untuk mengisi $array_st
	// 	for ($i = 0; $i < count($array_data); $i++) {
	// 		//cek jika posisi sekarang pada s't1 maka diisi dengan nilai array ke 1 pada $array_data
	// 		//cek rumus di excel
	// 		if ($i == 0) {
	// 			array_push($array_st, $array_data[0]);
	// 		}else {
	// 			//menghitung nilai dengan rumus a.Xt + (1-a)S't-1
	// 			//cek rumus di excel
	// 			$nilai = ($nilai_alpha * $array_data[$i]) + (1 - $nilai_alpha) * $array_st[$i - 1];
	// 			array_push($array_st, round($nilai,3));
	// 		}
	// 	}

	// 	//for untuk mengisi $array_st2
	// 	for ($i = 0; $i < count($array_data); $i++) {
	// 		//cek jika posisi sekarang pada s't1 maka diisi dengan nilai array ke 1 pada $array_data
	// 		//cek rumus di excel
	// 		if ($i == 0) {
	// 			array_push($array_st2, $array_data[0]);
	// 		}else {
	// 			//menghitung nilai dengan rumus a.Xt + (1-a)S't-1
	// 			//cek rumus di excel
	// 			$nilai = ($nilai_alpha * $array_st[$i]) + (1 - $nilai_alpha) * $array_st2[$i - 1];
	// 			array_push($array_st2, round($nilai,3));
	// 		}
	// 	}

	// 	//for untuk mengisi $array_at
	// 	for ($i = 0; $i < count($array_data); $i++) {
	// 		//rumusnya adalah at = 2st - st2
	// 		//cek rumus di excel
	// 		$nilai = (2 * $array_st[$i]) - $array_st2[$i];
	// 		array_push($array_at, round($nilai,3));
	// 	}

	// 	//for untuk mengisi $array_bt
	// 	for ($i = 0; $i < count($array_data); $i++) {
	// 		//rumusnya adalah bt = (a / 1 - a) * (s't - s''t)
	// 		//cek rumus di excel
	// 		$nilai = ($nilai_alpha / (1 - $nilai_alpha)) * ($array_st[$i] - $array_st2[$i]);
	// 		array_push($array_bt, round($nilai,3));
	// 	}

	// 	//menghitung nilai akhir = at + bt * m
	// 	//cek rumus di excel
	// 	$hasil = end($array_at) + (end($array_bt) * $m);

	// 	echo json_encode($hasil);


	// }

}

/* End of file Peramalan.php */
/* Location: ./application/controllers/Peramalan.php */