<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class m_evcalendar extends CI_Model {

		var $cTable = "event" ;

		Public function getEvents(){
			$sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
			return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
		}

		public function get_events($start, $end){
    		return $this->db->where("TglMulai >=", $start)->where("TglSelesai <=", $end)->get($cTable);
    	}

		public function add_event($data){
    		$this->db->insert("calendar_events", $data);
		}

		public function get_event($id){
    		return $this->db->where("Kode", $id)->get($cTable);
		}

		public function update_event($id, $data){
    		$this->db->where("Kode", $id)->update("calendar_events", $data);
		}

		public function delete_event($id){
    		$this->db->where("Kode", $id)->delete("calendar_events");
		}
	}

?>