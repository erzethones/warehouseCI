<?php

	/**
	* 
	*/
	class tr_cashier extends CI_Controller{
		
		function __construct()
		{
			parent::__construct() ;
			$this->load->model('m_trcashier','m_trcashier');
		}

		function index(){
			$this->load->view('transaction/trcashier');
		}

		function callDataByID($id){
			$data = $this->m_trcashier->get_by_id($id);
			echo json_encode($data);
		}

		/*public function mstemployee_add(){
			$cKode = $this->func->GetLastNumber('mstemployee','10') ;
			$data = array(
					'NIP' 			=> $cKode,
					'Nama' 			=> $this->input->post('cNameOfEmployee')
					);
			$insert = $this->m_mstemployee->save($data);
			echo json_encode(array("status" => TRUE, $data));
		}*/

		public function purchaseTmp(){
			$data = array(
						'Faktur' => $this->input->post('cFaktur'), 
					);
			$insert = $this->m_trcashier->saveTmp($data);
			echo json_encode(array("status" => TRUE, $data));
		}
	}

?>