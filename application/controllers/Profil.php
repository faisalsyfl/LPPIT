<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {


	public function index()	{
		$this->load->view('templates/header');
		$this->load->view('profil/profil');
		$this->load->view('templates/footer');
	}
	public function visimisi(){
		$this->load->view('templates/header');
		$this->load->view('profil/visimisi');
		$this->load->view('templates/footer');		
	}
	public function pimpinan(){
		$this->load->view('templates/header');
		$this->load->view('profil/pimpinan');
		$this->load->view('templates/footer');		
	}
	public function struktur(){
		$this->load->view('templates/header');
		$this->load->view('profil/struktur');
		$this->load->view('templates/footer');		
	}			
}
