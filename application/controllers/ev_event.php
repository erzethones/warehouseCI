<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ev_event extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_evevent','m_evevent');
	}

	public function index(){
		$this->load->view('event/evEvent/ev_event');	
	}

	
	public function evevent_add(){
		$cKode = $this->func->GetLastNumber('evevent','5') ;
		$data = array(
				'NIP' 			=> $cKode,
				'Nama' 			=> $this->input->post('cNameOfEmployee')
				);
		$insert = $this->m_evevent->save($data);
		echo json_encode(array("status" => TRUE, $data));
	}

	public function evevent_delete($id){
		$this->m_evevent->delete($id);
		echo json_encode(array("status" => TRUE));
	}

	public function evevent_edit($id){
		$data = $this->m_evevent->get_by_id($id);
		echo json_encode($data);
	}

	public function evevent_update(){
		$data = array('Nama' => $this->input->post('cNameOfEmployee'));
		$this->m_evevent->update(array('NIP' => $this->input->post('cKode')), $data);
		echo json_encode(array("status" => TRUE));
	}
}