<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	private $data;
	public function __construct(){
		parent::__construct();
		$this->data['allp'] = $this->ModelPelatihan->selectAll(6)->result_array();		

	}
    public function index()	{
		// var_dump($data['all']);
		$this->load->view('templates/header',$this->data);
		$this->load->view('galeri');
		$this->load->view('templates/footer');
	}
			
}
