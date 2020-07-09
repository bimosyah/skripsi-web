<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDataDeteksi extends CI_Model {

	function get()
	{
		$query = $this->db->get('data_deteksi')->result();
		return $query;
	}

}

/* End of file MDataDeteksi.php */
/* Location: ./application/models/MDataDeteksi.php */