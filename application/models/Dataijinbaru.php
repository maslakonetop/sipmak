<?php
class Penduduk extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("select * from data_ijin_makam");
		return $data->result();
	}
 
}