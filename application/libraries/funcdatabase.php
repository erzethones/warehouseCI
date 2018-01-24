<?php

/**
* 
*/
class FuncDatabase{


	//Database Manipulation System
 	function updChangesLog($cKey,$cAffectedCode,$cDetail,$cUsername,$dDate){
 		$ci =& get_instance();
		$ci->load->database();
		$dtDateTime = date('Y-m-d H:i:s') ;
		/*$vaArray	= array("Type"=>$cKey,
							"AffectedCode"=>$cAffectedCode,
							"Tgl"=>$dDate,
							"Keterangan"=>$cDetail,
							"Username"=>$cUsername,
							"DateTime"=>$dtDateTime);
		$cTable = "changeslog" ;
		//$this->db->insert($cTable, $vaArray);
		//return $this->db->insert_id();*/
		$cQuery 	= "INSERT INTO changeslog (Type,AffectedCode,Tgl,Keterangan,Username,DateTime) 
					   VALUES ('$cKey','$cAffectedCode','$dDate','$cDetail','$cUsername','$dtDateTime')";
		$dbData     = $ci->db->query($cQuery) ;
		return $dbData ;
	}
}

?>