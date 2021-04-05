<?php
class DataControler extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dataijin');
	}
 
	public function index()
	{
		$data['graph'] = $this->penduduk->graph();
		$this->load->view('chart', $data);
	}
 
}