<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelGaleri extends CI_Model {

	public $tableName;

	public function __construct(){
		parent::__construct();
		$this->tableName = "tb_galeri";
	}

	public function selectAll($from=0,$offset=0){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->order_by('id','DESC');
		$this->db->limit($from,$offset);

		return $this->db->get();
	}

	public function selectById($id){
		$this->db->select('*');
		$this->db->from($this->tableName);
		$this->db->where('id',$id);

		return $this->db->get();
	}
	
	public function insert($data){
		$this->db->insert($this->tableName,$data);
	}

	public function update($id,$data){
		$this->db->set($data);
		$this->db->where('id',$id);
		return $this->db->update($this->tableName);
	}

	public function SelectJoin($table2,$cond1,$cond2,$id=NULL,$from=NULL){
		$this->db->select('tb_galeri.id,tb_galeri.idp,tb_pelatihan.nama,tb_galeri.filename');
		$this->db->from($this->tableName);
		$this->db->join($table2,$cond1." = ".$cond2);
		if($id != NULL){
			$this->db->where($cond1,$id);
			$this->db->limit($from);
		}
		$this->db->order_by($cond1,'DESC');

		return $this->db->get();
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete($this->tableName);
	}

}
