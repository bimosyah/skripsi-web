<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peramalan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('v2/MDataDeteksi','deteksi');
		$this->load->model('MAlpha','alpha');
	}

	public function waktu1()
	{
		$this->load->view('v2/peramalan/index');
	}

	public function waktu2()
	{
		$this->load->view('v2/peramalan/index');
	}

	public function waktu3()
	{
		$this->load->view('v2/peramalan/index');
	}

	public function calculation()
	{
		$waktu = $this->input->post("waktu");
		$alpha = $this->input->post("alpha");

		$data = array();
		$temp = $this->deteksi->get();

		if ($waktu == "waktu1") {
			foreach ($temp as $value) {
				array_push($data, (int)round($value->waktu1 * 1.58));
			}
		}elseif ($waktu == "waktu2") {
			foreach ($temp as $value) {
				array_push($data, (int)round($value->waktu2 * 1.78));
			}
		}else {
			foreach ($temp as $value) {
				array_push($data, (int)round($value->waktu3 * 1.59));
			}
		}

		$smoothing1 = $this->smoothing1($data, $alpha);
		$smoothing2 = $this->smoothing2($smoothing1, $alpha);
		$at = $this->At($smoothing1, $smoothing2);
		$bt = $this->Bt($smoothing1, $smoothing2,$alpha);
		$forecast = $this->forecast($at, $bt);

		$forecast_result = array();

		for ($i = 0; $i < count($smoothing1); $i++) {
			$temp = array(
				'no' => $i+1,
				'volume' => $data[$i],
				'smoothing1' => $smoothing1[$i],
				'smoothing2' => $smoothing2[$i],
				'at' => $at[$i],
				'bt' => $bt[$i],
				'forecast' => $forecast[$i]
			);			
			array_push($forecast_result, $temp);
		}

		$chart_label = array();
		for ($i = 0; $i < count($forecast); $i++) {
			if ($i != 0) {
				array_push($chart_label, $i);
			}
		}

		$error = $this->error($data, $forecast);

		$mape = $this->mape($data);

		$result = array(
			'data' => $forecast_result,
			'forecast' => $forecast[count($forecast) - 1],
			'chart' => [
				'label' => $chart_label,
				'chart_forecast' => $forecast,
				'chart_real' => $data
			],
			'error' => $error,
			'mape' => $mape
		);

		echo json_encode($result);
	}

	public function smoothing1($data,$alpha)
	{
		$result = array();
		for ($i = 0; $i < count($data); $i++) {
			if ($i == 0) {
				array_push($result, (int)$data[$i]);
			}else {
				$temp = $alpha * $data[$i] + (1 - $alpha) * $result[$i-1];
				array_push($result, round($temp,3, PHP_ROUND_HALF_DOWN));
			}
		}

		return $result;
	}

	public function smoothing2($smoothing1,$alpha)
	{
		$result = array();
		for ($i = 0; $i < count($smoothing1); $i++) {
			if ($i == 0) {
				array_push($result, (int)$smoothing1[$i]);
			}else {
				$temp = $alpha * $smoothing1[$i] + (1 - $alpha) * $result[$i-1];
				array_push($result, round($temp,3, PHP_ROUND_HALF_DOWN));
			}
		}

		return $result;
	}

	public function At($smoothing1,$smoothing2)
	{
		$result = array();
		for ($i = 0; $i < count($smoothing1); $i++) {
			$temp = (2 * $smoothing1[$i]) - $smoothing2[$i];
			array_push($result, round($temp,3, PHP_ROUND_HALF_DOWN));
		}
		return $result;
	}

	public function Bt($smoothing1,$smoothing2,$alpha)
	{
		$result = array();
		for ($i = 0; $i < count($smoothing1); $i++) {
			$temp = $alpha / (1 - $alpha) * ($smoothing1[$i] - $smoothing2[$i]);
			array_push($result, round($temp,3, PHP_ROUND_HALF_DOWN));
		}
		return $result;
	}

	public function forecast($at, $bt)
	{
		$result = array();
		for ($i = 0; $i < count($at) + 1; $i++) {
			if ($i == 0) {
				array_push($result, 0);
			}else {
				$temp = $at[$i-1] + $bt[$i-1];
				array_push($result, round($temp));
			}
		}
		return $result;
	}

	public function error($data, $forecast)
	{
		$arr_pe = array();
		$total_pe = 0;

		for ($i = 0; $i < count($data); $i++) {
			if ($i == 0) {
				$temp = array(
					'no' => $i+1,
					'error' => 0,
					'abs' => 0,
					'pe' => 0
				);
			}else {
				$error = $data[$i] - $forecast[$i+1];
				$abs = abs($error);
				$pe = $this->iferror($data[$i], $abs) * 100;

				$temp = array(
					'no' => $i+1,
					'error' => $error,
					'abs' => round($abs,3, PHP_ROUND_HALF_DOWN),
					'pe' => round($pe,3, PHP_ROUND_HALF_DOWN)
				);
				$total_pe += $pe;
			}
			array_push($arr_pe, $temp);
		}
		
		$result = array(
			'error' => $arr_pe,
			'pe' => round($total_pe,3, PHP_ROUND_HALF_DOWN),
			'mape' => round($total_pe / 13,3, PHP_ROUND_HALF_DOWN)
		);

		return $result;
	}

	public function mape($data)
	{
		$alpha = $this->alpha->get();
		$mape = array();
		foreach ($alpha as $key => $value) {
			$smoothing1 = $this->smoothing1($data, $value->nilai_alpha);
			$smoothing2 = $this->smoothing2($smoothing1, $value->nilai_alpha);
			$at = $this->At($smoothing1, $smoothing2);
			$bt = $this->Bt($smoothing1, $smoothing2, $value->nilai_alpha);
			$forecast = $this->forecast($at, $bt);

			$error = $this->error($data, $forecast);
			$temp = array(
				'no' => $key + 1,
				'alpha' => $value->nilai_alpha,
				'mape' => $error['mape']
			);
			array_push($mape, $temp);
		}

		return $mape;
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

/* End of file Peramalan.php */
/* Location: ./application/controllers/v2/Peramalan.php */