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
	private $head;
	public function __construct(){
		parent::__construct();
		$this->head['pelatihan'] = $this->ModelPelatihan->selectAll()->num_rows();
		$this->head['galeri'] = $this->ModelGaleri->selectAll()->num_rows();
		$this->head['berita'] = $this->ModelNews->selectAll()->num_rows();
		$this->head['pesan'] = $this->ModelPesan->selectAll()->num_rows();
		$this->head['request'] = $this->ModelRequest->selectAll()->num_rows();
	}
	public function index()	{
		if(is_logged_in()){
			$count['pelatihan'] = $this->ModelPelatihan->selectAll()->num_rows();
			$count['galeri'] = $this->ModelGaleri->selectAll()->num_rows();
			$count['berita'] = $this->ModelNews->selectAll()->num_rows();
			$count['pesan'] = $this->ModelPesan->selectAll()->num_rows();
			$this->load->view('admin/templates/header',$this->head);
			$this->load->view('admin/index',$count);
			$this->load->view('admin/templates/footer');
		}else{
			redirect('Admin/login/failed');				
		}

	}
	public function login()	{
		$this->load->view('admin/login');
	}
	public function auth(){
		$post = $this->input->post();
		$data = $this->ModelAkun->check($post['uname'],$post['pass'])->row_array();
		if(!isset($data)){
			redirect('Admin/login/failed');			
		}else{
			$userdata = array(
				'username'  => $data['uname'],
				'fullname'  => $data['pass'],
				'log'  => $data['ll'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			redirect('Admin/');			
		}
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect('');
	}
	public function trainingAll($status = NULL)	{
		$data['all'] = $this->ModelPelatihan->selectAll()->result_array();
		$this->load->view('admin/templates/header',$this->head);
		$this->load->view('admin/trainingAll',$data);
		$this->load->view('admin/templates/footer');
	}
	public function trainingPost()	{
		$this->load->view('admin/templates/header',$this->head);
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
		redirect('Admin/trainingAll/Success');
	}
	public function disableTraining(){
		if($this->ModelPelatihan->selectById($id)->row()->stats == 0){
			$this->ModelPelatihan->update($id,['stats' => 1]);
		}else{
			$this->ModelPelatihan->update($id,['stats' => 0]);
		}
		redirect('Admin/trainingAll');		
	}

	public function newsAll($status = NULL)	{
		$data['all'] = $this->ModelNews->selectAll()->result_array();		
		$this->load->view('admin/templates/header',$this->head);
		$this->load->view('admin/newsAll',$data);
		$this->load->view('admin/templates/footer');
	}
	public function newsPost()	{
		$this->load->view('admin/templates/header',$this->head);
		$this->load->view('admin/newsPost');
		$this->load->view('admin/templates/footer');
	}
	public function addNews(){
		// var_dump($this->input->post());
		$data = $this->input->post();
		// print_r(nl2br($data['teks']))
		$data['tanggal'] = date('Y-m-d');
		unset($data['_wysihtml5_mode']);
		$data['stats'] = 1;
		// var_dump($data);

		$config['upload_path']		= './uploads/berita/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config['file_name']		= "Berita_".time();
		$this->load->library('upload', $config);
		var_dump($_FILES);
		if(!$this->upload->do_upload('photo')){
			//gagal
			$error = array('error' => $this->upload->display_errors());
			// var_dump($error);
		} else{
			$data['path'] = $config['file_name'].$this->upload->data('file_ext');
			$this->ModelNews->insert($data);
			redirect('Admin/newsAll/Success');
		}
	}
	public function kontakAll()	{
		$data['all'] = $this->ModelPesan->selectAll()->result_array();
		$this->load->view('admin/templates/header',$this->head);
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
		$this->load->view('admin/templates/header',$this->head);
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

	public function galeriAll($status = NULL){
		$data['all'] = $this->ModelGaleri->selectJoin("tb_pelatihan","tb_galeri.idp","tb_pelatihan.id")->result_array();
		$this->load->view('admin/templates/header',$this->head);
		$this->load->view('admin/galeriAll',$data);
		$this->load->view('admin/templates/footer');	
	}
	public function addGaleri(){
		$data['training'] = $this->ModelPelatihan->selectAll()->result_array();
		$this->load->view('admin/templates/header',$this->head);
		$this->load->view('admin/galeriPost',$data);
		$this->load->view('admin/templates/footer');		
	}
	public function uploadGaleri(){
		$form = $this->input->post();
		$config['upload_path']		= './uploads/peserta/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
			$this->load->library('upload');
		date_default_timezone_set("Asia/Bangkok");
		// var_dump($_FILES);
		foreach($_FILES['foto'] as $key=>$val)
      {
         $i = 1;
         foreach($val as $v)
         {
            $field_name = "Photo_".$i;
            $_FILES[$field_name][$key] = $v;
            $i++;
         }
      }
      unset($_FILES['foto']);
 
      // variabel error diubah, dari string menjadi array
      $error = array();
      $success = array();
      $i = 0;
      $t = (int) time();
      foreach($_FILES as $field_name => $file){
      	$config['file_name']		= "Photo_".($t + $i );
      	$this->upload->initialize($config);
         if ( ! $this->upload->do_upload($field_name)){
            $error[] = $this->upload->display_errors();
	      	echo "<pre>";
     		 	print_r($error);
    		   echo "</pre>";

         }else{
            $success[] = $this->upload->data();
            $insert['idp'] = $form['kategori'];
            $insert['filename'] = $config['file_name'].$this->upload->data('file_ext');
				$this->ModelGaleri->insert($insert);
         }
         $i++;
      }
		redirect('Admin/galeriAll/Success');
	}
}
