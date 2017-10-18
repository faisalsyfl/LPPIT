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
		$count['pelatihan'] = $this->ModelPelatihan->selectAll()->num_rows();
		$count['galeri'] = $this->ModelGaleri->selectAll()->num_rows();
		$count['berita'] = $this->ModelNews->selectAll()->num_rows();
		$count['pesan'] = $this->ModelPesan->selectAll()->num_rows();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/index',$count);
		$this->load->view('admin/templates/footer');
	}
	public function login()	{
		$this->load->view('admin/login');
	}
	public function auth(){
		$post = $this->input->post();
		if($post['uname'] == 'admin' && $post['pass'] == 'admin'){
			redirect('Admin/');			
		}else{
			redirect('Admin/login');			
		}
	}
	public function newsAll()	{
		$data['all'] = $this->ModelNews->selectAll()->result_array();		
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
		$data['all'] = $this->ModelPelatihan->selectAll()->result_array();
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
		$this->ModelPelatihan->insert($data);
		redirect('Admin/trainingAll');
	}

	public function addNews(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		$data['tanggal'] = date('Y-m-d');
		unset($data['_wysihtml5_mode']);
		$data['stats'] = 1;
		var_dump($data);
		$this->ModelNews->insert($data);
		redirect('Admin/trainingAll');
	}
	public function kontakAll()	{
		$data['all'] = $this->ModelPesan->selectAll()->result_array();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/kontakAll',$data);
		$this->load->view('admin/templates/footer');
	}
	public function markUnread($id){
		if($this->ModelPesan->selectById($id)->row()->stats == 0){
			$this->ModelPesan->update($id,['stats' => 1]);
		}else{
			$this->ModelPesan->update($id,['stats' => 0]);
		}
		redirect('Admin/kontakAll');
	}

	public function reqAll(){
		$data['all'] = $this->ModelRequest->selectAll()->result_array();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/reqAll',$data);
		$this->load->view('admin/templates/footer');		
	}
	public function markProcessed($id){
		if($this->ModelRequest->selectById($id)->row()->stats == 0){
			$this->ModelRequest->update($id,['stats' => 1]);
		}else{
			$this->ModelRequest->update($id,['stats' => 0]);
		}
		redirect('Admin/reqAll');
	}	
}
