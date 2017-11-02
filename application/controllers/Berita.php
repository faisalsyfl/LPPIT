<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


	public function index()	{
		$data['all'] = $this->ModelNews->selectAll(3)->result_array();
		$data['allp'] = $this->ModelPelatihan->selectAll(6)->result_array();		

		// var_dump($data['all']);
		$this->load->view('templates/header',$data);
		$this->load->view('berita',$data);
		$this->load->view('templates/footer',$data);
	}
	public function view($id){
		$data['all'] = $this->ModelNews->selectAll(3)->result_array();
		$data['allp'] = $this->ModelPelatihan->selectAll(6)->result_array();			
		$data['news'] = $this->ModelNews->selectById($id)->row_array();
		// var_dump($data);
		$this->load->view('templates/header',$data);
		$this->load->view('viewBerita',$data);
		$this->load->view('templates/footer',$data);		
	}
	
	function tanggal_indo($tanggal, $cetak_hari = false){
		$hari = array ( 1 =>    'Senin',
					'Selasa',
					'Rabu',
					'Kamis',
					'Jumat',
					'Sabtu',
					'Minggu'
				);
				
		$bulan = array (1 =>   'Januari',
					'Februari',
					'Maret',
					'April',
					'Mei',
					'Juni',
					'Juli',
					'Agustus',
					'September',
					'Oktober',
					'November',
					'Desember'
				);
		$split 	  = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
		
		if ($cetak_hari) {
			$num = date('N', strtotime($tanggal));
			return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
	}	
			
}
