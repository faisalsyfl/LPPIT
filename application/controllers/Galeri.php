<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function index()	{
		// var_dump($data['all']);
		$this->load->view('templates/header');
		$this->load->view('galeri');
		$this->load->view('templates/footer');
	}
			
}
