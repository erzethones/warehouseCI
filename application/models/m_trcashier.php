<?php
	/**
	* 
	*/
	class m_trcashier extends CI_Model{
		
		function __construct(){
			parent::__construct();
			$this->load->database() ;
		}

		public function get_by_id($id){
			$this->db->from('inventory');
			$this->db->where('Kode',$id);
			$query = $this->db->get();
			return $query->row();
		}

		public function saveTmp($data){
			$this->db->insert('kasir_tmp', $data);
			return $this->db->insert_id();
		}

		
	}
?>