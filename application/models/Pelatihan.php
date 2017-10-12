<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "pelatihan";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id','DESC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}
	public function insert($data){
		$this->db->insert($this->tableName,$data);
		
	}

}
