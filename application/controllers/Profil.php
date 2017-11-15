<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {


	public function index()	{
		$data['allp'] = $this->ModelPelatihan->selectAllEx(6)->result_array();		
		$this->load->view('templates/header',$data);
		$this->load->view('profil/profil',$data);
		$this->load->view('templates/footer',$data);
	}
	public function visimisi(){
		$data['allp'] = $this->ModelPelatihan->selectAllEx(6)->result_array();				
		$this->load->view('templates/header',$data);
		$this->load->view('profil/visimisi',$data);
		$this->load->view('templates/footer',$data);		
	}
	public function pimpinan(){
		$data['allp'] = $this->ModelPelatihan->selectAllEx(6)->result_array();				
		$this->load->view('templates/header',$data);
		$this->load->view('profil/pimpinan',$data);
		$this->load->view('templates/footer',$data);		
	}
	public function struktur(){
		$data['allp'] = $this->ModelPelatihan->selectAllEx(6)->result_array();				
		$this->load->view('templates/header',$data);
		$this->load->view('profil/struktur',$data);
		$this->load->view('templates/footer',$data);		
	}			
}
