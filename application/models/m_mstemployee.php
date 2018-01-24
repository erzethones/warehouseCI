<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class m_mstemployee extends CI_Model {

		var $cTable = "employee" ;

		public function __construct(){
			parent::__construct();
			$this->load->database() ;
		}

		public function save($data){
			$this->db->insert($this->cTable, $data);
			return $this->db->insert_id();
		}

		public function delete($id){
			$this->db->where('NIP', $id);
			$this->db->delete($this->cTable);
		}

		public function get_by_id($id){
			$this->db->from($this->cTable);
			$this->db->where('NIP',$id);
			$query = $this->db->get();
			return $query->row();
		}

		public function update($where, $data){
			$this->db->update($this->cTable, $data, $where);
			return $this->db->affected_rows();
		}

		public function checkData($id){
			$this->db->from($this->cTable);
			$this->db->where('NIP',$id);
			$query = $this->db->get();
			$num = $query->num_rows();
			return $num ;
		}

		public function GetData(){
			$cQuery = $this->db->get($this->cTable) ;
			return $cQuery ;
		}

	}

?>