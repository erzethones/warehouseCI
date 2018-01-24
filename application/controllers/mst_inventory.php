<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mst_inventory extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mstinventory','m_mstinventory');
	}

	public function index(){
		$this->load->view('master/mstinventory/mst_inventory');	
	}

	public function mstinventory_add(){

		$cJenis 			= $this->input->post('opt_types_of_goods');
		$cInitial 			= $this->session->userdata('cSession_Initial');
		$cUsername 			= $this->session->userdata('cSession_UserName');
		$nLastNumber		= $this->func->GetLastNumber($cInitial,'12') ;
		$cKode     			= $cInitial . $nLastNumber ;
		$cHargaBeli 		= $this->input->post('nHargaBeli') ;
		$nHargaBeli 		= $this->func->String2Number($cHargaBeli);
		$cHargaJual  		= $this->input->post('nHargaJual') ;
		$nHargaJual     	= $this->func->String2Number($cHargaJual);
		$cHargaGrosir 		= $this->input->post('nHargaGrosir');
		$nHargaGrosir 		= $this->func->String2Number($cHargaGrosir);
		$cHargaBeliBesar	= $this->input->post('nHargaBeliBesar');
		$cHargaJualBesar	= $this->input->post('nHargaJualBesar');
		$cHargaGrosirBesar	= $this->input->post('nHargaGrosirBesar');
		$nHargaBeliBesar	= $this->func->String2Number($cHargaBeliBesar);
		$nHargaJualBesar	= $this->func->String2Number($cHargaJualBesar);
		$nHargaGrosirBesar	= $this->func->String2Number($cHargaGrosirBesar);
		$dTgl	 			= $this->input->post('dTgl') ;
		$cUnitMinimal		= $this->input->post('cUnitMinimal');
		$cUnitBesar			= $this->input->post('cUnitBesar');
		$cTgl				= $this->func->Date2String($dTgl);
		$dtDateTime         = date("Y-m-d H:i:s");
		
		$data = array(
				'Kode' 					=> $cKode,
				'Keterangan' 			=> $this->input->post('cNamaBarang') ,
				'Supplier' 				=> $this->input->post('optSupplier') ,
				'Tgl' 					=> $cTgl ,
				'Unit' 					=> $this->input->post('cUnit'),
				'Jenis' 				=> $cJenis,
				'HargaBeli' 			=> $nHargaBeli, 
			 	'HargaJual' 			=> $nHargaJual,
			 	'HargaGrosir'			=> $nHargaGrosir,
				'SatuanKecil' 			=> $this->input->post('opt_satuan_kecil'),
				'SatuanBesar' 			=> $this->input->post('opt_satuan_besar'),
				'HargaBeliBesar' 		=> $nHargaBeliBesar,
				'HargaJualBesar' 		=> $nHargaJualBesar,
				'HargaGrosirBesar' 		=> $nHargaGrosirBesar,
				'UserName'				=> $cUsername ,
				'DateTime'				=> $dtDateTime ,
				'UnitBesar'				=> $cUnitBesar ,
				'UnitMinimal'			=> $cUnitMinimal
			);
		$insert = $this->m_mstinventory->save($data);
		echo json_encode(array("status" => TRUE));
	}

	function mstinventory_edit($id){
		$data = $this->m_mstinventory->get_by_id($id);
		echo json_encode($data);
	}

	function mstinventory_delete($id){
		$this->m_mstinventory->delete($id);
		echo json_encode(array("status" => TRUE));
	}

	function mstinventory_update(){
		$cJenis 			= $this->input->post('opt_types_of_goods');
		$cUsername 			= $this->session->userdata('cSession_UserName');
		$cHargaBeli 		= $this->input->post('nHargaBeli') ;
		$nHargaBeli 		= $this->func->String2Number($cHargaBeli);
		$cHargaJual  		= $this->input->post('nHargaJual') ;
		$nHargaJual     	= $this->func->String2Number($cHargaJual);
		$cHargaGrosir 		= $this->input->post('nHargaGrosir');
		$nHargaGrosir 		= $this->func->String2Number($cHargaGrosir);
		$cHargaBeliBesar	= $this->input->post('nHargaBeliBesar');
		$cHargaJualBesar	= $this->input->post('nHargaJualBesar');
		$cHargaGrosirBesar	= $this->input->post('nHargaGrosirBesar');
		$nHargaBeliBesar	= $this->func->String2Number($cHargaBeliBesar);
		$nHargaJualBesar	= $this->func->String2Number($cHargaJualBesar);
		$nHargaGrosirBesar	= $this->func->String2Number($cHargaGrosirBesar);
		$dTgl	 			= $this->input->post('dTgl') ;
		$cUnitMinimal		= $this->input->post('cUnitMinimal');
		$cUnitBesar			= $this->input->post('cUnitBesar');
		$cTgl				= $this->func->Date2String($dTgl);
		$dtDateTime         = date("Y-m-d H:i:s");
		
		$data = array(
				'Kode' 					=> $this->input->post('cKode'),
				'Keterangan' 			=> $this->input->post('cNamaBarang') ,
				'Supplier' 				=> $this->input->post('optSupplier') ,
				'Tgl' 					=> $cTgl ,
				'Unit' 					=> $this->input->post('cUnit'),
				'Jenis' 				=> $cJenis,
				'HargaBeli' 			=> $nHargaBeli, 
			 	'HargaJual' 			=> $nHargaJual,
			 	'HargaGrosir'			=> $nHargaGrosir,
				'SatuanKecil' 			=> $this->input->post('opt_satuan_kecil'),
				'SatuanBesar' 			=> $this->input->post('opt_satuan_besar'),
				'HargaBeliBesar' 		=> $nHargaBeliBesar,
				'HargaJualBesar' 		=> $nHargaJualBesar,
				'HargaGrosirBesar' 		=> $nHargaGrosirBesar,
				'UserName'				=> $cUsername ,
				'DateTime'				=> $dtDateTime ,
				'UnitBesar'				=> $cUnitBesar ,
				'UnitMinimal'			=> $cUnitMinimal
			);
		$this->m_mstinventory->update(array('Kode' => $this->input->post('cKode')), $data);
		echo json_encode(array("status" => TRUE));
	}
	
}
