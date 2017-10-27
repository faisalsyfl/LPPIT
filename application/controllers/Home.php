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
		$data['allp'] = $this->ModelPelatihan->selectAll(6)->result_array();		
		$this->load->view('templates/header',$data);
		$this->load->view('beranda',$data);
		$this->load->view('templates/footer',$data);
	}
	public function kontak($suc=0){
		$data['allp'] = $this->ModelPelatihan->selectAll(6)->result_array();		
		$this->load->view('templates/header',$data);
		$this->load->view('kontak',$data);
		$this->load->view('templates/footer',$data);
	}
	public function kontakProses(){
		$insert = $this->input->post();
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
			$this->ModelPesan->insert($insert);
			redirect('Kontak/1');
		}else{
			echo "gagal";
			echo $this->email->print_debugger();
		}			
	}
}
