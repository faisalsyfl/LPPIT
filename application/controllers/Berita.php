<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


	public function index()	{
		$this->load->view('templates/header');
		$this->load->view('berita');
		$this->load->view('templates/footer');
	}
	public function view($id){
		$data['news'] = $this->News->selectById($id)->row_array();
		
	}
			
}
