<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mst_employee extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mstemployee','m_mstemployee');
	}

	public function index(){
		$data['dbData']=$this->m_mstemployee->GetData();  
		$this->load->view('master/mstemployee/mst_employee', $data);	
	}

	
	public function mstemployee_add(){
		$cKode = $this->func->GetLastNumber('mstemployee','10') ;
		$data = array(
				'NIP' 			=> $cKode,
				'Nama' 			=> $this->input->post('cNameOfEmployee')
				);
		$insert = $this->m_mstemployee->save($data);
		echo json_encode(array("status" => TRUE, $data));
	}

	public function mstemployee_delete($id){
		$this->m_mstemployee->delete($id);
		echo json_encode(array("status" => TRUE));
	}

	public function mstemployee_edit($id){
		$data = $this->m_mstemployee->get_by_id($id);
		echo json_encode($data);
	}

	public function mstemployee_update(){
		$data = array('Nama' => $this->input->post('cNameOfEmployee'));
		$this->m_mstemployee->update(array('NIP' => $this->input->post('cKode')), $data);
		echo json_encode(array("status" => TRUE));
	}

	
}