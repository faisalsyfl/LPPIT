<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {


	public function index($stats=0)	{
		$data['all'] = $this->ModelNews->selectAll(3)->result_array();
		$data['allp'] = $this->ModelPelatihan->selectAll(6)->result_array();		

		// var_dump($data['all']);
		$this->load->view('templates/header',$data);
		$this->load->view('request',$data);
		$this->load->view('templates/footer',$data);
	}

	public function requestTraining(){
		$form = $this->input->post();
		$config['upload_path']		= './uploads/peserta/';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config['file_name']		= "Excel_".time();
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload("excel")){
			//gagal
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		} else{
			// Handling read Excel
			// try {
			// 	$objPHPExcel = PHPExcel_IOFactory::load('uploads/peserta/'.$config['file_name'].$this->upload->data('file_ext'));
			// } catch(Exception $e) {
			// 	die('Error loading file :' . $e->getMessage());
			// }
			// $dataE = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);		
			// $i=1;
			// foreach($dataE as $row){
			// 	if($i!=1 && $row['A']!=""){

			// 	}
			// 	$i++;
			// }
			if($form['kategori'] == "Lainnya"){
				$form['kategori'] = $form['other'];
				unset($form['other']);
			}
			$form['file'] = $config['file_name'].$this->upload->data('file_ext');
			$this->ModelRequest->insert($form);
			redirect('RequestSuccess');
		}
	}
	public function markUnread($id){
		if($this->ModelRequest->selectById($id)->row()->stats == 0){
			$this->ModelRequest->update($id,['stats' => 1]);
		}else{
			$this->ModelRequest->update($id,['stats' => 0]);
		}
		redirect('Admin/reqAll');
	}
			
}
