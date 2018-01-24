<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cfg_userpassword extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mstsupplier','m_mstsupplier');
	}

	public function index(){
		$this->load->view('cfguserpassword/cfg_userpassword');	
	}

	public function updatedata(){
		$cKode = $this->input->post('cKode');
		if($cKode == ""){
			mstsupplier_add();
		}else{
			$n = $this->m_mstsupplier->checkData($cKode) ;
			if($n > 0){
				mstsupplier_update() ; 	
			}
			
		}
	}

	public function mstsupplier_add(){
		$cKode = $this->func->GetLastNumber('mstSupplier','5') ;
		$data = array(
				'Kode' 					=> $cKode,
				'Keterangan' 			=> $this->input->post('cNamaSupplier')
				);
		$insert = $this->m_mstsupplier->save($data);
		echo json_encode(array("status" => TRUE, $data));
	}

	public function mstsupplier_delete($id){
		$this->m_mstsupplier->delete($id);
		echo json_encode(array("status" => TRUE));
	}

	public function mstsupplier_edit($id){
		$data = $this->m_mstsupplier->get_by_id($id);
		echo json_encode($data);
	}

	public function mstsupplier_update(){
		$data = array('Keterangan' => $this->input->post('cNamaSupplier'));
		$this->m_mstsupplier->update(array('Kode' => $this->input->post('cKode')), $data);
		echo json_encode(array("status" => TRUE));
	}
}