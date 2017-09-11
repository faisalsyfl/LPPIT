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
		$this->load->view('admin/templates/header');
		$this->load->view('admin/index');
		$this->load->view('admin/templates/footer');
	}
	public function login()	{
		$this->load->view('admin/login');
	}
	public function newsAll()	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/newsAll');
		$this->load->view('admin/templates/footer');
	}
	public function newsPost()	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/newsPost');
		$this->load->view('admin/templates/footer');
	}
	public function trainingAll()	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/trainingAll');
		$this->load->view('admin/templates/footer');
	}
	public function trainingPost()	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/trainingPost');
		$this->load->view('admin/templates/footer');
	}
}
