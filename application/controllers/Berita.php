<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


	public function index()	{
		$data['all'] = $this->ModelNews->selectAll(3)->result_array();
		$data['allp'] = $this->ModelPelatihan->selectAll(6)->result_array();		

		// var_dump($data['all']);
		$this->load->view('templates/header',$data);
		$this->load->view('berita',$data);
		$this->load->view('templates/footer',$data);
	}
	public function view($id){
		$data['news'] = $this->ModelNews->selectById($id)->row_array();
		
	}
			
}
