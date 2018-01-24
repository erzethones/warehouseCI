<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class m_mstinventory extends CI_Model {

		var $cTable = "inventory" ;

		public function __construct(){
			parent::__construct();
			$this->load->database() ;
		}

		public function save($data){
			$this->db->insert($this->cTable, $data);
			return $this->db->insert_id();
			//echo $this->db->_error_message(); 
		}

		public function delete($id){
			$this->db->where('Kode', $id);
			$this->db->delete($this->cTable);
		}

		public function get_by_id($id){
			$this->db->from($this->cTable);
			$this->db->where('Kode',$id);
			$query = $this->db->get();
			return $query->row();
		}

		public function update($where, $data){
			$this->db->update($this->cTable, $data, $where);
			return $this->db->affected_rows() ;
		}

	}

?>