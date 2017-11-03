<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan extends CI_Controller {

	public function index()	{

		// var_dump($data['all']);
		$this->load->view('templates/header',$data);
		$this->load->view('berita',$data);
		$this->load->view('templates/footer',$data);
	}
	public function tanggal_indo($tanggal, $cetak_hari = false){
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
	/*View every training by ID*/
	public function view($id){
		$data['allp'] = $this->ModelPelatihan->selectAll(6)->result_array();
		$data['training'] = $this->ModelPelatihan->selectById($id)->row_array();
		$data['training']['start'] = $this->tanggal_indo($data['training']['start'],true);
		$data['training']['end'] = $this->tanggal_indo($data['training']['end'],true);
		$data['foto'] = $this->ModelGaleri->selectJoin("tb_pelatihan","tb_galeri.idp","tb_pelatihan.id",$id,4)->result_array(); 
		$this->load->view('templates/header',$data);
		$this->load->view('pelatihan',$data);
		$this->load->view('templates/footer',$data);
	}
	
			
}
