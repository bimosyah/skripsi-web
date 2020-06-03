<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDataDeteksi extends CI_Model {

	function get()
	{
		$query = $this->db->get('table_data_deteksi')->result();
		return $query;
	}	

	function save($object)
	{
		$query = $this->db->insert('table_data_deteksi', $object);
		return $query;
	}

	function save2($object)
	{
		$query = $this->db->insert('table_data_deteksi2', $object);
		return $query;
	}

	function view_jumlah_per_hari()
	{
		$query = $this->db->get('view_jumlah_per_hari')->result();
		return $query;
	}

	function view_jumlah_menit10()
	{
		$query = $this->db->get('view_jumlah_menit10')->result();
		return $query;
	}

	function view_jumlah_menit20()
	{
		$query = $this->db->get('view_jumlah_menit20')->result();
		return $query;
	}

	function view_jumlah_menit30()
	{
		$query = $this->db->get('view_jumlah_menit30')->result();
		return $query;
	}

}

/* End of file MDataDeteksi.php */
/* Location: ./application/models/MDataDeteksi.php */