<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAlpha extends CI_Model {

	public function get()
	{
		$query = $this->db->get('table_alpha')->result();
		return $query;
	}	

}

/* End of file MAlpha.php */
/* Location: ./application/models/MAlpha.php */