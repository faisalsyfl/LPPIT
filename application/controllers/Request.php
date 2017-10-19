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
			
			/*
				** SEND MAIL **
			*/
			
			$config = Array(
				'protocol' =>  'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => '465',
				'smtp_user' => 'faisal.faisal.anwar@student.upi.edu',
				'smtp_pass' => 'sddaassddasad',
				'mailtype'  => 'html',
				'charset'   => 'iso-8859-1'
			);
			
			$this->load->library('email', $config);
			
			$this->email->set_newline("\r\n");
			/* sender  */
			$from_mail="faisal.faisal.anwar@student.upi.edu";
			$from_name="LP2IT Universitas Pendidikan Indonesia";
			
			/* dest */
			$to_mail=$form['email'];
			
			/*mail subject*/
			$subject="Permintaan Pelatihan";
			
			/* mail body (html format)*/
			$message="<table style='width:100%; font-family:arial; text-align: center; color:#6d6d6d; border: none; background-color: #d0d4dc;'>
				<tr style='height:30px;'></tr>
				<tr style='color:#fff; ; height: 100px; text-align: center;'>
					<td></td>
					<td style='width: 700px;background-color: #1B6287;border-bottom: 5px solid #ffc801;'><img src='https://s1.postimg.org/2ipt2yzcsf/lp2it-white.png' style='width:200px;'></td>					
					<td></td>
				</tr>
				<tr style=''>
					<td></td>
					<td style='width: 700px;background-color: #fff; border-top: none;'>
						<br>
						<h3 style='color: #1B6287'>Lembaga Penelitian, Penerapan Ilmu dan Teknologi<br><small style='color:#6d6d6d'>Universitas Pendidikan Indonesia</small></h3>
						<hr style='width: 500px; border-top: 1px solid #d0d4dc;'>
						<p>
							<br>
							Terimakasih telah mengajukan pelatihan
							<br>
							<br>
							Permintaan anda sedang kami proses</b><br> 
							<br>
							<hr style='width: 500px; border-top: 1px solid #d0d4dc;'>
							<br>
							Info selengkapnya:
							<a href='http://lp2it.upi.edu' target='_blank'style='color: #1B6287;'>lp2it.upi.edu</a><br>
							<br>
						</p>
					</td>
					<td></td>
				</tr>
				<tr style='height:30px;'></tr>
			</table>";
			
			$this->email->set_newline("\r\n");
			$this->email->from($from_mail, $from_name);
			$this->email->to($to_mail);
			$this->email->subject($subject);	
			$this->email->message($message);  	
			$result = $this->email->send();
			var_dump($result);
			if($result){
				echo "success";
				if($form['kategori'] == "Lainnya"){
					$form['kategori'] = $form['other'];
					unset($form['other']);
				}
				$form['file'] = $config['file_name'].$this->upload->data('file_ext');
				$this->ModelRequest->insert($form);
				redirect('RequestSuccess');
			}else{
				echo $this->email->print_debugger();
			}			

		}
	}

			
}
