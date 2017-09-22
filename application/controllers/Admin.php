<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('templates/header');
		$this->load->view('berita');
		$this->load->view('templates/footer');
	}
	public function login()	{
		$this->load->view('admin/login');
	}
	public function newsAll()	{
		$data['all'] = $this->News->selectAll()->result_array();		
		$this->load->view('admin/templates/header');
		$this->load->view('admin/newsAll',$data);
		$this->load->view('admin/templates/footer');
	}
	public function newsPost()	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/newsPost');
		$this->load->view('admin/templates/footer');
	}
	public function trainingAll()	{
		$data['all'] = $this->Pelatihan->selectAll()->result_array();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/trainingAll',$data);
		$this->load->view('admin/templates/footer');
	}
	public function trainingPost()	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/trainingPost');
		$this->load->view('admin/templates/footer');
	}
	public function addTraining(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		$data['start'] = explode(" - ",$data['times'])[0];
		$data['start'] = date("Y-m-d", strtotime($data['start']));
		$data['end'] = explode(" - ",$data['times'])[1];
		$data['end'] = date("Y-m-d", strtotime($data['end']));
		unset($data['times']);
		unset($data['_wysihtml5_mode']);
		$data['stats'] = 1;
		var_dump($data);
		$this->Pelatihan->insert($data);
		redirect('Admin/trainingAll');
	}

	public function addNews(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		$data['tanggal'] = date('Y-m-d');
		unset($data['_wysihtml5_mode']);
		$data['stats'] = 1;
		var_dump($data);
		$this->News->insert($data);
		redirect('Admin/trainingAll');
	}	
}
