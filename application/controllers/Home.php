<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()	{
		$data['allp'] = $this->ModelPelatihan->selectAllEx(6)->result_array();	
		$data['berita'] = $this->ModelNews->selectAll(4)->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('beranda',$data);
		$this->load->view('templates/footer',$data);
	}
	public function kontak($suc=0){
		$data['allp'] = $this->ModelPelatihan->selectAllEx(6)->result_array();		
		$this->load->view('templates/header',$data);
		$this->load->view('kontak',$data);
		$this->load->view('templates/footer',$data);
	}
	public function kontakProses(){
		$insert = $this->input->post();
		// var_dump($insert);
		$this->ModelPesan->insert($insert);
		redirect('Kontak/1');
	}
	public function error403($suc=0){
		$this->load->view('error/html/error_403');
	}
}
