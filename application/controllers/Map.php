<?php
class Map extends CI_Controller{
    function __construct(){
        parent::__construct();
 
    }
    function index(){
        $this->load->library('googlemaps');
            $config=array();
            $config['center']="7.740985, 109.017375";
            $config['zoom']=17;
            $config['map_height']="420px";
            $this->googlemaps->initialize($config);
            $marker=array();
            $marker['position']="-7.720159, 108.998627";
            $this->googlemaps->add_marker($marker);
            $data['map']=$this->googlemaps->create_map();
            $this->load->view('layout/header');
            $this->load->view('map',$data);        
            $this->load->view('layout/footer');
    }
}