<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan extends CI_Controller {


	public function index()	{
		$data['all'] = $this->News->selectAll(3)->result_array();
		$data['allp'] = $this->Pelatihan->selectAll(6)->result_array();		

		// var_dump($data['all']);
		$this->load->view('templates/header',$data);
		$this->load->view('berita',$data);
		$this->load->view('templates/footer',$data);
	}
	public function view($id){
		$data['news'] = $this->News->selectById($id)->row_array();
		
	}
			
}
