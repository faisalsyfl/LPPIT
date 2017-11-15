<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	private $data;
	public function __construct(){
		parent::__construct();
		$this->data['allp'] = $this->ModelPelatihan->selectAllEx(6)->result_array();		

	}
    public function index()	{
		$data['all'] = $this->ModelGaleri->selectJoin("tb_pelatihan","tb_galeri.idp","tb_pelatihan.id")->result_array(); 
		$this->load->view('templates/header',$this->data);
		$this->load->view('galeri',$data);
		$this->load->view('templates/footer');
	}
			
}
