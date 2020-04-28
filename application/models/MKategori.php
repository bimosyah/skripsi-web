<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKategori extends CI_Model {

	function get()
	{
		$query = $this->db->get('table_kategori')->result();
		return $query;
	}

}

/* End of file Kategori.php */
/* Location: ./application/models/Kategori.php */